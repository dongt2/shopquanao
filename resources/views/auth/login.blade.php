@extends('user.layouts.default')

@section('title')
    @parent
    Login
@endsection

@section('content')
    <section class="breadcrumb-area">
        <div class="container-fluid custom-container">
            <div class="row">
                <div class="col-xl-12">
                    <div class="bc-inner">
                        <p><a href="{{ route('home') }}">Home  |</a>@section('title') @show</p>
                    </div>
                </div>
                <!-- /.col-xl-12 -->
            </div>
            <!-- /.row -->
        </div>
        <!-- /.container -->
    </section>

    <section class="contact-area">
        <div class="container-fluid custom-container">
            <div class="section-heading pb-30">
                <h3>Login <span>Account</span></h3>
            </div>
                    <div class="row justify-content-center">
                        <div class="col-sm-9 col-md-8 col-lg-6 col-xl-4">
                            <div class="contact-form login-form">
                                @if (session('status'))
                                    <div class="alert alert-success" role="alert">
                                        {{ session('status') }}
                                    </div>
                                @endif
                                <form method="POST" action="{{ route('auth.login') }}">
                                    @csrf

                                    <div class="row">
                                        <div class="col-xl-12">
                                                <input id="email" type="email" class=" @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}"  autocomplete="email" autofocus placeholder="{{ __('Email Address') }}*">

                                                @error('email')
                                                <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                                @enderror
                                        </div>

                                        <div class="col-xl-12">
                                            <input id="password" type="password" class="@error('password') is-invalid @enderror" name="password"  autocomplete="current-password" placeholder="Password*">

                                            @error('password')
                                            <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                            @enderror
                                        </div>

                                        <div class="col-xl-12 remember-container">
                                                <input type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }} >
                                                <label for="remember" class="rememberMe">
                                                    {{ __('Remember Me') }}
                                                </label>

                                        </div>

                                        <div class="col-xl-12">
                                            <a class="btn btn-link" href="{{ route('auth.password.forgot') }}">
                                                {{ __('Forgot Your Password?') }}
                                            </a>
                                            <input type="submit" value="{{ __('LOG IN  ') }}">
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
        </div>

    </section>

    <section class="login-now">
        <div class="container-fluid custom-container">
            <div class="col-12">
                <span>Dont have account</span>
                <a href="{{ route('auth.register') }}" class="btn-two">Create Account</a>
            </div>
            <!-- /.col-12 -->
        </div>
        <!-- /.container-fluid -->
    </section>



@endsection
