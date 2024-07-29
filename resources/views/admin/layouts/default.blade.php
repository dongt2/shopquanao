<!doctype html>
<html class="no-js" lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>@section('title')Admin | @show</title>
    <meta name="robots" content="noindex, follow" />
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- Favicon -->
    <link rel="shortcut icon" type="image/x-icon" href="{{ asset('admin/assets/images/favicon.ico') }}">

    <!-- CSS
	============================================ -->

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="{{ asset('admin/assets/css/vendor/bootstrap.min.css') }}">

    <!-- Icon Font CSS -->
    <link rel="stylesheet" href="{{ asset('admin/assets/css/vendor/material-design-iconic-font.min.css') }}">
    <link rel="stylesheet" href="{{ asset('admin/assets/css/vendor/font-awesome.min.css') }}">
    <link rel="stylesheet" href="{{ asset('admin/assets/css/vendor/themify-icons.css') }}">
    <link rel="stylesheet" href="{{ asset('admin/assets/css/vendor/cryptocurrency-icons.css') }}">

    <!-- Plugins CSS -->
    <link rel="stylesheet" href="{{ asset('admin/assets/css/plugins/plugins.css') }}">

    <!-- Helper CSS -->
    <link rel="stylesheet" href="{{ asset('admin/assets/css/helper.css') }}">

    <!-- Main Style CSS -->
    <link rel="stylesheet" href="{{ asset('admin/assets/css/style.css') }}">

    <!-- Custom Style CSS Only For Demo Purpose -->
    <link id="cus-style" rel="stylesheet" href="{{ asset('admin/assets/css/style-primary.css') }}">

</head>

<body>

<div class="main-wrapper">


    <!-- Header Section Start -->
    @include('admin.layouts.header')<!-- Header Section End -->
    <!-- Side Header Start -->
    @include('admin.layouts.sideheader')<!-- Side Header End -->

    <!-- Content Body Start -->
    @yield('content')<!-- Content Body End -->

    <!-- Footer Section Start -->
    @include('admin.layouts.footer')<!-- Footer Section End -->

</div>

<!-- JS
============================================ -->

<!-- Global Vendor, plugins & Activation JS -->
<script src="{{ asset('admin/assets/js/vendor/modernizr-3.6.0.min.js') }}"></script>
<script src="{{ asset('admin/assets/js/vendor/jquery-3.3.1.min.js') }}"></script>
<script src="{{ asset('admin/assets/js/vendor/popper.min.js') }}"></script>
<script src="{{ asset('admin/assets/js/vendor/bootstrap.min.js') }}"></script>
<!--Plugins JS-->
<script src="{{ asset('admin/assets/js/plugins/perfect-scrollbar.min.js') }}"></script>
<script src="{{ asset('admin/assets/js/plugins/tippy4.min.js.js') }}"></script>
<!--Main JS-->
<script src="{{ asset('admin/assets/js/main.js') }}"></script>

<!-- Plugins & Activation JS For Only This Page -->

<!--Moment-->
<script src="{{ asset('admin/assets/js/plugins/moment/moment.min.js') }}"></script>

<!--Daterange Picker-->
<script src="{{ asset('admin/assets/js/plugins/daterangepicker/daterangepicker.js') }}"></script>
<script src="{{ asset('admin/assets/js/plugins/daterangepicker/daterangepicker.active.js') }}"></script>

<!--Echarts-->
<script src="{{ asset('admin/assets/js/plugins/chartjs/Chart.min.js') }}"></script>
<script src="{{ asset('admin/assets/js/plugins/chartjs/chartjs.active.js') }}"></script>

<!--VMap-->
<script src="{{ asset('admin/assets/js/plugins/vmap/jquery.vmap.min.js') }}"></script>
<script src="{{ asset('admin/assets/js/plugins/vmap/maps/jquery.vmap.world.js') }}"></script>
<script src="{{ asset('admin/assets/js/plugins/vmap/maps/samples/jquery.vmap.sampledata.js') }}"></script>
<script src="{{ asset('admin/assets/js/plugins/vmap/vmap.active.js') }}"></script>

</body>


<!-- Mirrored from demo.hasthemes.com/adomx-preview/light/index.html by HTTrack Website Copier/3.x [XR&CO'2014], Sat, 20 Jul 2024 16:31:00 GMT -->
</html>
