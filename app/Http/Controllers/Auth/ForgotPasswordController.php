<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Foundation\Auth\SendsPasswordResetEmails;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Password;
use Illuminate\Support\Str;
use Illuminate\Validation\ValidationException;
use App\Mail\ForgotPasswordMail;

class ForgotPasswordController extends Controller
{
    public function forgot()
    {
        return view('auth.passwords.email');
    }

    public function forgotPassword(Request $request)
    {
        $user = User::where('email' ,'=', $request->email)->first();
        if(!empty($user))
        {
            $user->remember_token = Str::random(40);
            $user->save();

            Mail::to($user->email)->send(new ForgotPasswordMail($user));

            return redirect()->back()->with('status', 'Email sent successfully');
        }
        else
        {
            return redirect()->back()->with('errors', 'Email not found');
        }
    }

    public function reset($token)
    {
        $user = User::where('remember_token', '=', $token)->first();

        if(!empty($user))
        {
            $data['user'] = $user;
            return view('auth.passwords.reset', compact('data','token'));
        }
        else
        {
            abort(404);
        }
    }

    public function resetPassword($token, Request $request)
    {
        $user = User::where('remember_token', '=', $token)->first();

        if (!empty($user))
        {
            if ($request->password == $request->password_confirmation)
            {
                $user->password = Hash::make($request->password);
                if (empty($user->email_verified_at))
                {
                    $user->email_verified_at = date('Y-m-d H:i:s');
                }
                $user->remember_token = Str::random(40);
                $user->save();

                return redirect()->route('auth.login')->with('status', 'Password reset successfully');
            }
            else
            {
                return redirect()->back()->with('errors', 'Password not match');
            }
        }
        else
        {
            abort(404);
        }
    }
}
