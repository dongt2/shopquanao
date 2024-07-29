@extends('user.layouts.default')

@section('title')
    @parent
    Home
@endsection

@section('content')

    <!--=========================-->
    <!--=        Slider         =-->
    <!--=========================-->

    <section class="slider-wrapper">
        <div class="slider-start slider-1 owl-carousel owl-theme">

            <div class="item">
                <img src="{{ asset('assets/media/images/banner/f1.jpg') }}" alt="">
                <div class="container-fluid custom-container slider-content">
                    <div class="row align-items-center">

                        <div class="col-12 col-sm-8 col-md-8 col-lg-6 ml-auto">
                            <div class="slider-text ">
                                <h4 class="animated fadeInUp"><span>BRAND NEW</span> COLLECTION</h4>
                                <h1 class="animated fadeInUp">COMERCIO SHOP</h1>
                                <p class="animated fadeInUp">Autem vel eum iriure dolor in molestie consequat vel illum dolore eu feugiat nulla facilisis at vero eros.</p>
                                <a class="animated fadeInUp btn-two" href="#">SHOP NOW</a>
                            </div>
                        </div>
                        <!-- Col End -->
                    </div>
                    <!-- Row End -->
                </div>
            </div>

            <div class="item">
                <img src="{{ asset('assets/media/images/banner/f2.jpg') }}" alt="">
                <div class="container-fluid custom-container slider-content">
                    <div class="row align-items-center">

                        <div class="col-12 col-sm-8 col-md-8 col-lg-6 ml-auto">
                            <div class="slider-text ">
                                <h4 class="animated fadeIn"><span>BRAND NEW</span> COLLECTION</h4>
                                <h1 class="animated fadeIn">NEW ARRIVALS</h1>
                                <p class="animated fadeIn">Autem vel eum iriure dolor in hendrerit molestie consequat vel illum dolore eu feugiat nulla facilisis at vero eros.</p>
                                <a class="animated fadeIn btn-two" href="#">SHOP NOW</a>
                            </div>
                        </div>
                        <!-- Col End -->
                    </div>
                    <!-- Row End -->
                </div>
            </div>

            <div class="item">
                <img src="{{ asset('assets/media/images/banner/f3.jpg') }}" alt="">
                <div class="container-fluid custom-container slider-content">
                    <div class="row align-items-center">
                        <div class="col-12 col-sm-8 col-md-8 offset-md-1 col-lg-6 offset-xl-2 col-xl-5 mr-auto">
                            <div class="slider-text mob-align-left">
                                <h4 class="animated fadeIn"><span>LATEST COLLECTION </span> 2018 </h4>
                                <h1 class="animated fadeIn">STYLE & GRACE </h1>
                                <p class="animated fadeIn">Autem vel eum iriure dolor molestie consequat vel illum dolore eu feugiat nulla facilisis at vero eros.</p>
                                <a class="animated fadeIn btn-two" href="#">SHOP NOW</a>
                            </div>
                        </div>
                        <!-- Col End -->
                    </div>
                    <!-- Row End -->
                </div>
            </div>

        </div>
    </section>
    <!-- Slides end -->

    <!--=========================-->
    <!--=        Banner         =-->
    <!--=========================-->

    <section class="banner padding-top-120">
        <div class="container-fluid custom-container">
            <div class="row">
                <div class="col-12 col-md-4">
                    <a href="#">
                        <div class="sin-banner align-items-center">
                            <img src="{{ asset('assets/media/images/banner/2.png') }}" alt="">
                            <div class="sin-banner-con">
                                <div class="sin-banner-inner-wrap">
                                    <div class="banner-top">
                                        <h4>Man's</h4>
                                        <h4>Acces <span>sories</span></h4>
                                    </div>
                                    <p>Extra</p>
                                    <h3>60% Off</h3>
                                    <span>Final sale</span>
                                    <span>Items</span>
                                </div>
                            </div>
                        </div>
                        <!-- /.sin-banner -->
                    </a>
                </div>
                <!-- /.col-xl-5 -->

                <div class="col-12 col-md-4">
                    <a href="#">
                        <div class="sin-banner style-two">

                            <img src="{{ asset('assets/media/images/banner/3.png') }}" alt="">

                            <div class="sin-banner-con">
                                <div class="sin-banner-inner-wrap">
                                    <h4>Woman's Shop</h4>
                                    <h3>40% Off</h3>
                                    <span>Best of Shop Beauty</span>
                                </div>

                            </div>


                        </div>
                        <!-- /.sin-banner -->
                    </a>
                </div>
                <!-- /.col-xl-4 -->

                <div class="col-12 col-md-4">
                    <a href="#">
                        <div class="sin-banner">
                            <img src="{{ asset('assets/media/images/banner/5.png') }}" alt="">
                            <div class="br-wrapper">
                                <div class="sin-banner-con-right">
                                    <p>Kids shop sale</p>
                                    <span>up to 80% off</span>
                                </div>
                            </div>
                        </div>
                        <!-- /.sin-banner -->
                    </a>
                </div>
                <!-- /.col-xl-3 -->
            </div>
            <!-- /.row -->
        </div>
        <!-- /.container-fluid -->
    </section>
    <!-- banner -->

    <!-- main-product -->
    <section class="main-product">
        <div class="container container-two">
            <div class="section-heading">
                <h3>Welcome to <span>product</span></h3>
            </div>
            <!-- /.section-heading-->
            <div class="row">
                <div class="col-xl-12 ">
                    <div class="pro-tab-filter">
                        <ul class="pro-tab-button">
                            <li class="filter active" data-filter="*">ALL</li>
                            <li class="filter" data-filter=".two">Accessories</li>
                            <li class="filter" data-filter=".three">Men's clothing</li>
                            <li class="filter" data-filter=".four">Kids clothing</li>
                            <li class="filter" data-filter=".five">Women dresses</li>
                        </ul>
                        <div class="grid row">
                            <!-- single product -->
                            @foreach( $products as $item)
                            <div class=" grid-item two col-6 col-md-6  col-lg-4 col-xl-3">
                                <div class="sin-product style-one">
                                    <div class="pro-img">
                                        <img src="{{ asset('assets/media/images/product/1.jpg') }}" alt="">
                                    </div>
                                    <div class="mid-wrapper">
                                        <h5 class="pro-title"><a href="product.html">{{ $item->name }}</a></h5>
                                        <span>$60.00</span>
                                    </div>

                                    <div class="pro-icon">
                                        <ul>
                                            <li><a href="#"><i class="flaticon-valentines-heart"></i></a></li>
                                            <li><a href="#"><i class="flaticon-shopping-cart"></i></a></li>
                                            <li><a class="trigger" href="#"><i class="flaticon-zoom-in"></i></a></li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                            @endforeach
{{--                            <!-- single product -->--}}
{{--                            <div class=" grid-item three col-6 col-md-6  col-lg-4 col-xl-3">--}}
{{--                                <div class="sin-product style-one">--}}
{{--                                    <div class="pro-img">--}}
{{--                                        <img src="{{ asset('assets/media/images/product/2.jpg') }}" alt="">--}}
{{--                                    </div>--}}
{{--                                    <div class="mid-wrapper">--}}
{{--                                        <h5 class="pro-title"><a href="product.html">Shirt for men</a></h5>--}}
{{--                                        <span>$60.00</span>--}}
{{--                                    </div>--}}

{{--                                    <div class="pro-icon">--}}
{{--                                        <ul>--}}
{{--                                            <li><a href="#"><i class="flaticon-valentines-heart"></i></a></li>--}}
{{--                                            <li><a href="#"><i class="flaticon-shopping-cart"></i></a></li>--}}
{{--                                            <li><a class="trigger" href="#"><i class="flaticon-zoom-in"></i></a></li>--}}
{{--                                        </ul>--}}
{{--                                    </div>--}}
{{--                                </div>--}}
{{--                            </div>--}}
{{--                            <!-- single product -->--}}
{{--                            <div class=" grid-item four col-6 col-md-6  col-lg-4 col-xl-3">--}}
{{--                                <div class="sin-product style-one">--}}
{{--                                    <div class="pro-img">--}}
{{--                                        <img src="{{ asset('assets/media/images/product/3.jpg') }}" alt="">--}}
{{--                                    </div>--}}
{{--                                    <div class="mid-wrapper">--}}
{{--                                        <h5 class="pro-title"><a href="product.html">Embellished print t-shirt  </a></h5>--}}
{{--                                        <span>$60.00</span>--}}
{{--                                    </div>--}}

{{--                                    <div class="pro-icon">--}}
{{--                                        <ul>--}}
{{--                                            <li><a href="#"><i class="flaticon-valentines-heart"></i></a></li>--}}
{{--                                            <li><a href="#"><i class="flaticon-shopping-cart"></i></a></li>--}}
{{--                                            <li><a class="trigger" href="#"><i class="flaticon-zoom-in"></i></a></li>--}}
{{--                                        </ul>--}}
{{--                                    </div>--}}
{{--                                </div>--}}
{{--                            </div>--}}
{{--                            <!-- single product -->--}}
{{--                            <div class=" grid-item five col-6 col-md-6  col-lg-4 col-xl-3">--}}
{{--                                <div class="sin-product style-one">--}}
{{--                                    <div class="pro-img">--}}
{{--                                        <img src="{{ asset('assets/media/images/product/4.jpg') }}" alt="">--}}
{{--                                    </div>--}}
{{--                                    <div class="mid-wrapper">--}}
{{--                                        <h5 class="pro-title"><a href="product.html">Laptop carry bag</a></h5>--}}
{{--                                        <span>$60.00</span>--}}
{{--                                    </div>--}}

{{--                                    <div class="pro-icon">--}}
{{--                                        <ul>--}}
{{--                                            <li><a href="#"><i class="flaticon-valentines-heart"></i></a></li>--}}
{{--                                            <li><a href="#"><i class="flaticon-shopping-cart"></i></a></li>--}}
{{--                                            <li><a class="trigger" href="#"><i class="flaticon-zoom-in"></i></a></li>--}}
{{--                                        </ul>--}}
{{--                                    </div>--}}
{{--                                </div>--}}
{{--                            </div>--}}
{{--                            <!-- single product -->--}}
{{--                            <div class=" grid-item one col-6 col-md-6  col-lg-4 col-xl-3">--}}
{{--                                <div class="sin-product style-one">--}}
{{--                                    <div class="pro-img">--}}
{{--                                        <img src="{{ asset('assets/media/images/product/5.jpg') }}" alt="">--}}
{{--                                    </div>--}}
{{--                                    <div class="mid-wrapper">--}}
{{--                                        <h5 class="pro-title"><a href="product.html">Sleeve detail dress</a></h5>--}}
{{--                                        <span>$60.00</span>--}}
{{--                                    </div>--}}

{{--                                    <div class="pro-icon">--}}
{{--                                        <ul>--}}
{{--                                            <li><a href="#"><i class="flaticon-valentines-heart"></i></a></li>--}}
{{--                                            <li><a href="#"><i class="flaticon-shopping-cart"></i></a></li>--}}
{{--                                            <li><a class="trigger" href="#"><i class="flaticon-zoom-in"></i></a></li>--}}
{{--                                        </ul>--}}
{{--                                    </div>--}}
{{--                                </div>--}}
{{--                            </div>--}}
{{--                            <!-- single product -->--}}
{{--                            <div class=" grid-item two col-6 col-md-6  col-lg-4 col-xl-3">--}}
{{--                                <div class="sin-product style-one">--}}
{{--                                    <div class="pro-img">--}}
{{--                                        <img src="{{ asset('assets/media/images/product/6.jpg') }}" alt="">--}}
{{--                                    </div>--}}
{{--                                    <div class="mid-wrapper">--}}
{{--                                        <h5 class="pro-title"><a href="product.html">Jeans cloth dress</a></h5>--}}
{{--                                        <span>$60.00</span>--}}
{{--                                    </div>--}}

{{--                                    <div class="pro-icon">--}}
{{--                                        <ul>--}}
{{--                                            <li><a href="#"><i class="flaticon-valentines-heart"></i></a></li>--}}
{{--                                            <li><a href="#"><i class="flaticon-shopping-cart"></i></a></li>--}}
{{--                                            <li><a class="trigger" href="#"><i class="flaticon-zoom-in"></i></a></li>--}}
{{--                                        </ul>--}}
{{--                                    </div>--}}
{{--                                </div>--}}
{{--                            </div>--}}

{{--                            <!-- single product -->--}}
{{--                            <div class=" grid-item three col-6 col-md-6  col-lg-4 col-xl-3">--}}
{{--                                <div class="sin-product style-one">--}}
{{--                                    <div class="pro-img">--}}
{{--                                        <img src="{{ asset('assets/media/images/product/7.jpg') }}" alt="">--}}
{{--                                    </div>--}}
{{--                                    <div class="mid-wrapper">--}}
{{--                                        <h5 class="pro-title"><a href="product.html">Winter dress</a></h5>--}}
{{--                                        <span>$60.00</span>--}}
{{--                                    </div>--}}

{{--                                    <div class="pro-icon">--}}
{{--                                        <ul>--}}
{{--                                            <li><a href="#"><i class="flaticon-valentines-heart"></i></a></li>--}}
{{--                                            <li><a href="#"><i class="flaticon-shopping-cart"></i></a></li>--}}
{{--                                            <li><a class="trigger" href="#"><i class="flaticon-zoom-in"></i></a></li>--}}
{{--                                        </ul>--}}
{{--                                    </div>--}}
{{--                                </div>--}}
{{--                            </div>--}}

{{--                            <!-- single product -->--}}
{{--                            <div class=" grid-item four col-6 col-md-6  col-lg-4 col-xl-3">--}}
{{--                                <div class="sin-product style-one">--}}
{{--                                    <div class="pro-img">--}}
{{--                                        <img src="{{ asset('assets/media/images/product/8.jpg') }}" alt="">--}}
{{--                                    </div>--}}
{{--                                    <div class="mid-wrapper">--}}
{{--                                        <h5 class="pro-title"><a href="product.html">Mens Jacket</a></h5>--}}
{{--                                        <span>$60.00</span>--}}
{{--                                    </div>--}}

{{--                                    <div class="pro-icon">--}}
{{--                                        <ul>--}}
{{--                                            <li><a href="#"><i class="flaticon-valentines-heart"></i></a></li>--}}
{{--                                            <li><a href="#"><i class="flaticon-shopping-cart"></i></a></li>--}}
{{--                                            <li><a class="trigger" href="#"><i class="flaticon-zoom-in"></i></a></li>--}}
{{--                                        </ul>--}}
{{--                                    </div>--}}
{{--                                </div>--}}
{{--                            </div>--}}
{{--                            {{ $products->links('pagination::bootstrap-5') }}--}}
                        </div>
                    </div>
                </div>
            </div>
            <!-- Row End -->
        </div>

        <!-- Container  -->
    </section>
    <!-- end main-product -->
@endsection
