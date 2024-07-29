@extends('user.layouts.default')

@section('title')
    @parent
    Reset Password
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
                        @if (session('status'))
                            <div class="alert alert-success" role="alert">
                                {{ session('status') }}
                            </div>
                        @endif

                        @if (session('errors'))
                            <div class="alert alert-danger" role="alert">
                                {{ session('errors') }}
                            </div>
                        @endif


                        <form method="POST" action="{{ route('auth.password.forgot') }}">
                            @csrf

                            <div class="row">
                                <div class="col-xl-12">
                                    <input type="email" placeholder="{{ __('Email Address') }}*" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>
                                </div>
                                <div class="col-xl-12">
                                    <input type="submit" value="Send Password Reset Link">
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>

{{--                <div class="card-body">--}}
{{--                    @if (session('status'))--}}
{{--                        <div class="alert alert-success" role="alert">--}}
{{--                            {{ session('status') }}--}}
{{--                        </div>--}}
{{--                    @endif--}}

{{--                    <form method="POST" action="{{ route('password.email') }}">--}}
{{--                        @csrf--}}

{{--                        <div class="row mb-3">--}}
{{--                            <label for="email" class="col-md-4 col-form-label text-md-end">{{ __('Email Address') }}</label>--}}

{{--                            <div class="col-md-6">--}}
{{--                                <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>--}}

{{--                                @error('email')--}}
{{--                                    <span class="invalid-feedback" role="alert">--}}
{{--                                        <strong>{{ $message }}</strong>--}}
{{--                                    </span>--}}
{{--                                @enderror--}}
{{--                            </div>--}}
{{--                        </div>--}}

{{--                        <div class="row mb-0">--}}
{{--                            <div class="col-md-6 offset-md-4">--}}
{{--                                <button type="submit" class="btn btn-primary">--}}
{{--                                    {{ __('Send Password Reset Link') }}--}}
{{--                                </button>--}}
{{--                            </div>--}}
{{--                        </div>--}}
{{--                    </form>--}}
{{--                </div>--}}
        </div>
    </section>


@endsection
