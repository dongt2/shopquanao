<!doctype html>
<html>


<!-- Mirrored from themeim.com/demo/comercio/index.html by HTTrack Website Copier/3.x [XR&CO'2014], Sat, 20 Jul 2024 16:26:45 GMT -->
<head>
    <!-- Meta Data -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
{{--    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">--}}
    <title>
        @section('title')
            Comercio |
        @show
    </title>

    <!-- Fav Icon -->
    <link rel="apple-touch-icon" sizes="180x180" href="{{ asset('assets/assets/img/fav-icons/apple-touch-icon.png') }}">
    <link rel="icon" type="image/png" sizes="32x32" href="{{ asset('assets/assets/img/fav-icons/favicon-32x32.png' )}}">
    <link rel="icon" type="image/png" sizes="16x16" href="{{ asset('assets/assets/img/fav-icons/favicon-16x16.png' )}}">

    <!-- Dependency Styles -->
    <link rel="stylesheet" href="{{ asset('assets/dependencies/bootstrap/css/bootstrap.min.css' )}}" type="text/css">
    <link rel="stylesheet" href="{{ asset('assets/dependencies/fontawesome/css/fontawesome-all.min.css' )}}" type="text/css">
    <link rel="stylesheet" href="{{ asset('assets/dependencies/owl.carousel/css/owl.carousel.min.css') }}" type="text/css">
    <link rel="stylesheet" href="{{ asset('assets/dependencies/owl.carousel/css/owl.theme.default.min.css') }}" type="text/css">
    <link rel="stylesheet" href="{{ asset('assets/dependencies/flaticon/css/flaticon.css') }}" type="text/css">
    <link rel="stylesheet" href="{{ asset('assets/dependencies/wow/css/animate.css') }}" type="text/css">
    <link rel="stylesheet" href="{{ asset('assets/dependencies/jquery-ui/css/jquery-ui.css') }}" type="text/css">
    <link rel="stylesheet" href="{{ asset('assets/dependencies/venobox/css/venobox.css') }}" type="text/css">
    <link rel="stylesheet" href="{{ asset('assets/dependencies/slick-carousel/css/slick.css') }}" type="text/css">

    <!-- Site Stylesheet -->
    <link rel="stylesheet" href="{{ asset('assets/assets/css/app.css') }}" type="text/css">

    @vite(['resources/sass/app.scss', 'resources/js/app.js'])


</head>

<body id="home-version-1" class="home-version-1" data-style="default">

<div class="site-content">


    @include('user.layouts.header')


    <!--=========================-->
    <!--=        Product Filter      =-->
    <!--=========================-->

    @yield('content')


    @include('user.layouts.footer')



    <!-- Back to top
============================================= -->

    <div class="backtotop">
        <i class="fa fa-angle-up backtotop_btn"></i>
    </div>


    <!--=========================-->
    <!--=   Popup area      =-->
    <!--=========================-->




    <!-- Popup -->

{{--    <div class="modal popup-1" id="exampleModalCenter" tabindex="-1" role="dialog" aria-hidden="true">--}}
{{--        <div class="modal-dialog modal-dialog-centered" role="document">--}}
{{--            <div class="modal-body popup-banner">--}}
{{--                <button type="button" class="close" data-dismiss="modal" aria-label="Close">--}}
{{--                    <span aria-hidden="true">&times;</span>--}}
{{--                </button>--}}
{{--                <h3>Newsletter <span>Subscribe</span></h3>--}}
{{--                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam</p>--}}
{{--                <div class="popup-subscribe">--}}
{{--                    <div class="subscribe-wrapper">--}}
{{--                        <input placeholder="Enter Keyword" type="text">--}}
{{--                        <button type="submit">SUBSCRIBE</button>--}}
{{--                    </div>--}}
{{--                </div>--}}

{{--                <input type="checkbox" name="vehicle" value="Bike">--}}
{{--                <span>Don't show this popup again</span>--}}
{{--            </div>--}}
{{--        </div>--}}
{{--    </div>--}}



    <!--=========================-->
    <!--=   Product Quick view area    =-->
    <!--=========================-->

    <!-- Quick View -->
    <div class="modal quickview-wrapper">
        <div class="quickview">
            <div class="row">
                <div class="col-12">
						<span class="close-qv">
					<i class="flaticon-close"></i>
				</span>
                </div>
                <div class="col-md-6">
                    <!-- Product View Slider -->
                    <div class="quickview-slider">
                        <div class="slider-for">
                            <div class="">
                                <img src="{{ asset('assets/media/images/product/single/b1.jpg') }}" alt="Thumb">
                            </div>
                            <div class="">
                                <img src="{{ asset('assets/media/images/product/single/b2.jpg') }}" alt="thumb">
                            </div>
                            <div class="">
                                <img src="{{ asset('assets/media/images/product/single/b3.jpg') }}" alt="thumb">
                            </div>
                            <div class="">
                                <img src="{{ asset('assets/media/images/product/single/b4.jpg') }}" alt="thumb">
                            </div>
                            <div class="">
                                <img src="{{ asset('assets/media/images/product/single/b5.jpg') }}" alt="Thumb">
                            </div>
                            <div class="">
                                <img src="{{ asset('assets/media/images/product/single/b1.jpg') }}" alt="thumb">
                            </div>
                            <div class="">
                                <img src="{{ asset('assets/media/images/product/single/b2.jpg') }}" alt="thumb">
                            </div>
                            <div class="">
                                <img src="{{ asset('assets/media/images/product/single/b3.jpg') }}" alt="thumb">
                            </div>
                        </div>

                        <div class="slider-nav">

                            <div class="">
                                <img src="{{ asset('assets/media/images/product/single/b1.jpg') }}" alt="thumb">
                            </div>
                            <div class="">
                                <img src="{{ asset('assets/media/images/product/single/b2.jpg') }}" alt="thumb">
                            </div>
                            <div class="">
                                <img src="{{ asset('assets/media/images/product/single/b3.jpg') }}" alt="thumb">
                            </div>
                            <div class="">
                                <div class="">
                                    <img src="{{ asset('assets/media/images/product/single/b4.jpg') }}" alt="Thumb">
                                </div>
                            </div>
                            <div class="">
                                <img src="{{ asset('assets/media/images/product/single/b5.jpg') }}" alt="thumb">
                            </div>
                            <div class="">
                                <img src="{{ asset('assets/media/images/product/single/b1.jpg') }}" alt="thumb">
                            </div>
                            <div class="">
                                <img src="{{ asset('assets/media/images/product/single/b2.jpg') }}" alt="thumb">
                            </div>
                            <div class="">
                                <img src="{{ asset('assets/media/images/product/single/b3.jpg') }}" alt="thumb">
                            </div>
                        </div>
                    </div>
                    <!-- /.quickview-slider -->
                </div>
                <!-- /.col-xl-6 -->

                <div class="col-md-6">
                    <div class="product-details">
                        <h5 class="pro-title"><a href="#">Woman fashion dress</a></h5>
                        <span class="price">Price : $387</span>
                        <div class="size-variation">
                            <span>size :</span>
                            <select name="size-value">
                                <option value="">1</option>
                                <option value="">2</option>
                                <option value="">3</option>
                                <option value="">4</option>
                                <option value="">5</option>
                            </select>
                        </div>
                        <div class="color-variation">
                            <span>color :</span>
                            <ul>
                                <li><i class="fas fa-circle"></i></li>
                                <li><i class="fas fa-circle"></i></li>
                                <li><i class="fas fa-circle"></i></li>
                                <li><i class="fas fa-circle"></i></li>
                            </ul>
                        </div>

                        <div class="add-tocart-wrap">
                            <!--PRODUCT INCREASE BUTTON START-->
                            <div class="cart-plus-minus-button">
                                <input type="text" value="1" name="qtybutton" class="cart-plus-minus">
                            </div>
                            <a href="#" class="add-to-cart"><i class="flaticon-shopping-purse-icon"></i>Add to Cart</a>
                            <!-- <a href="#"><i class="flaticon-valentines-heart"></i></a> -->
                        </div>

                        <!-- <span>SKU:	N/A</span>
                            <p>Tags <a href="#">boys,</a><a href="#"> dress,</a><a href="#">Rok-dress</a></p> -->

                        <p>But I must explain to you how all this mistaken idedenounc pleasure and praisi pain was born and I will give you a complete accosystem, and expound the actu teachings of the great explore tmaster-builder of human happiness. No one rejects, dislikes,
                            or avoids.</p>

                        <div class="product-social">
                            <span>Share :</span>
                            <ul>
                                <li><a href="#"><i class="fab fa-facebook-f"></i></a></li>
                                <li><a href="#"><i class="fab fa-twitter"></i></a></li>
                                <li><a href="#"><i class="fab fa-instagram"></i></a></li>
                                <li><a href="#"><i class="fab fa-linkedin-in"></i></a></li>
                            </ul>
                        </div>

                    </div>
                    <!-- /.product-details -->
                </div>
                <!-- /.col-xl-6 -->
            </div>
            <!-- /.row -->
        </div>
    </div>





</div>
<!-- /#site -->
{{--<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>--}}

<!-- Dependency Scripts -->
<script src="{{ asset('assets/dependencies/jquery/jquery.min.js') }}"></script>
<script src="{{ asset('assets/dependencies/popper.js/popper.min.js') }}"></script>
<script src="{{ asset('assets/dependencies/bootstrap/js/bootstrap.min.js') }}"></script>
<script src="{{ asset('assets/dependencies/owl.carousel/js/owl.carousel.min.js') }}"></script>
<script src="{{ asset('assets/dependencies/wow/js/wow.min.js') }}"></script>
<script src="{{ asset('assets/dependencies/isotope-layouts/js/isotope.pkgd.min.js') }}"></script>
<script src="{{ asset('assets/dependencies/imagesloaded/js/imagesloaded.pkgd.min.js') }}"></script>
<script src="{{ asset('assets/dependencies/jquery.countdown/js/jquery.countdown.min.js') }}"></script>
<script src="{{ asset('assets/dependencies/gmap3/js/gmap3.min.js') }}"></script>
<script src="{{ asset('assets/dependencies/venobox/js/venobox.min.js') }}"></script>
<script src="{{ asset('assets/dependencies/slick-carousel/js/slick.js') }}"></script>
<script src="{{ asset('assets/dependencies/headroom/js/headroom.js') }}"></script>
<script src="{{ asset('assets/dependencies/jquery-ui/js/jquery-ui.min.js') }}"></script>
<!--Google map api -->
<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBsBrMPsyNtpwKXPPpG54XwJXnyobfMAIc"></script>


<!-- Site Scripts -->
<script src="{{ asset('assets/assets/js/app.js') }}"></script>

</body>


<!-- Mirrored from themeim.com/demo/comercio/index.html by HTTrack Website Copier/3.x [XR&CO'2014], Sat, 20 Jul 2024 16:26:45 GMT -->
</html>
