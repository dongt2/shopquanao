@extends('user.layouts.default')

@section('title')
    @parent
    Rest Password
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
                <h3>Reset <span>Password</span></h3>
            </div>

            <div class="row justify-content-center">
                <div class="col-sm-9 col-md-8 col-lg-6 col-xl-4">
                    <div class="contact-form login-form">
                        @if (session('errors'))
                            <div class="alert alert-danger" role="alert">
                                {{ session('errors') }}
                            </div>
                        @endif
                        <form method="POST" action="{{ route('reset.password', $token) }}">
                            @csrf

                            <input type="hidden" name="token" value="{{ $token }}">
                            <div class="row">
                                <div class="col-xl-12">
                                    <input id="email" type="email" name="email" value="{{ $email ?? old('email') }}" required autocomplete="email" autofocus placeholder="{{ __('Email Address') }}*">

                                </div>
                                <div class="col-xl-12">
                                    <input id="password" type="password"  name="password" required autocomplete="new-password" placeholder="Password*">
                                </div>
                                <div class="col-xl-12">
                                    <input id="password-confirm" type="password" name="password_confirmation" required autocomplete="new-password" placeholder="Confirm Password*">
                                </div>
                                <div class="col-xl-12">
                                    <input type="submit" value="Reset Password">
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
