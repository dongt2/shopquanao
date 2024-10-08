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
                        <form action="{{ route('login') }}" method="POST">
                            <div class="row">
                                <div class="col-xl-12">
                                    <input type="text" placeholder="{{ __('Email Address') }}*" class="@error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>
                                </div>
                                <div class="col-xl-12">
                                    <input type="text" placeholder="Password*">
                                </div>
                                <div class="col-xl-12">
                                    <input type="submit" value="LOG IN">
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
            <!-- /.row end -->
        </div>
        <!-- /.container-fluid end -->
    </section>
    <!-- /.contact-area end -->

    <section class="login-now">
        <div class="container-fluid custom-container">
            <div class="col-12">
                <span>Dont have account</span>
                <a href="{{ route('register') }}" class="btn-two">Create Account</a>
            </div>
            <!-- /.col-12 -->
        </div>
        <!-- /.container-fluid -->
    </section>
    <!-- /.login-now -->
@endsection


