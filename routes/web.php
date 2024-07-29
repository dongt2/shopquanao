<?php

use App\Http\Controllers\admin\AdminController;
use App\Http\Controllers\Auth\ForgotPasswordController;
use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\Auth\RegisterController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\ProductController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/',[HomeController::class, 'index'])->name('home');
Route::get('/shop', function () {
    return view('user.shop');
})->name('shop');


//Login & Register
Route::prefix('auth')
    ->as('auth.')
    ->group(function () {
        Route::get('login', [LoginController::class, 'showFormLogin'])->name('login');
        Route::post('login', [LoginController::class, 'login']);

        Route::post('logout', [LoginController::class, 'logout'])->name('logout');

        Route::get('register', [RegisterController::class, 'showFormRegister'])->name('register');
        Route::post('register', [RegisterController::class, 'register']);

        Route::prefix('password')
            ->as('password.')
            ->group(function () {
                Route::get('forgot', [ForgotPasswordController::class, 'forgot'])->name('forgot');
                Route::post('forgot', [ForgotPasswordController::class, 'forgotPassword']);
            });

    });
Route::get('reset/{token}', [ForgotPasswordController::class, 'reset']);
Route::post('reset/{token}', [ForgotPasswordController::class, 'resetPassword'])->name('reset.password');



Route::prefix('admin')
    ->as('admin.')
    ->group(function () {

        Route::get('home', [AdminController::class, 'index'])->name('home');

    });



