@extends('user.layouts.default')

@section('title')
    @parent
    Verify Email
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
            <h3>Verify <span>Email</span></h3>
        </div>
        <div class="row justify-content-center">
            <div class="col-sm-9 col-md-8 col-lg-6 col-xl-4">
                <div class="contact-form login-form">
                    @if (session('resent'))
                        <div class="alert alert-success" role="alert">
                            {{ __('A fresh verification link has been sent to your email address.') }}
                        </div>
                    @endif
                    <form method="POST" action="{{ route('verification.resend') }}">
                        @csrf
                        <div class="row">
                            <div class="col-xl-12">
                                {{ __('Before proceeding, please check your email for a verification link.') }}
                                {{ __('If you did not receive the email') }},
                            </div>
                            <div class="col-xl-12">
                                <button type="submit" class="btn btn-link p-0 m-0 align-baseline">{{ __('click here to request another') }}</button>.
                            </div>
                        </div>
                    </form>
                </div>
            </div>
    </div>
</section>



@endsection
