@extends('user.layouts.default')

@section('title')
    @parent
    Register
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
                    <h3>Create <span>Account</span></h3>
                </div>

                <div class="row justify-content-center">
                    <div class="col-sm-9 col-md-8 col-lg-6 col-xl-4">
                        <div class="contact-form login-form">
                            <form method="POST" action="{{ route('auth.register') }}">
                                @csrf
                                <div class="row">
                                    <div class="col-xl-12">
                                        <input id="name" type="text" class="@error('name') is-invalid @enderror" name="name" value="{{ old('name') }}"  autocomplete="name" autofocus placeholder="{{ __('Name') }}*">
                                        @error('name')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                        @enderror
                                    </div>
                                    <div class="col-xl-12">
                                        <input id="email" type="email" class="@error('email') is-invalid @enderror" name="email" value="{{ old('email') }}"  autocomplete="email" placeholder="{{ __('Email Address') }}*">
                                        @error('email')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                        @enderror
                                    </div>
                                    <div class="col-xl-12">
                                        <input id="password" type="password" class="@error('password') is-invalid @enderror" name="password"  autocomplete="new-password" placeholder="Password*">
                                        @error('password')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                        @enderror
                                    </div>
                                    <div class="col-xl-12">
                                        <input id="password-confirm" type="password" name="password_confirmation"  autocomplete="new-password" placeholder="Confirm Password*">
                                    </div>
                                    <div class="col-xl-12">
                                        <input type="submit" value="CREATE">
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
                <span>Already have account</span>
                <a href="{{ route('auth.login') }}" class="btn-two">Login now</a>
            </div>
            <!-- /.col-12 -->
        </div>
        <!-- /.container-fluid -->
    </section>
    <!-- /.login-now -->
@endsection
