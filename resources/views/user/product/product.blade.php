@extends('user.layouts.default')

@section('title')
    @parent
    Shop
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
    <!-- main-product -->
    <section class="shop-area">
        <div class="container-fluid custom-container">
            <div class="row">

                <div class="col-12">
                    <div class="shop-sorting-area row">
                        <div class="col-4 col-sm-4 col-md-6">
                            <ul class="nav nav-tabs shop-btn" id="myTab" role="tablist">
                                <li class="nav-item ">
                                    <a class="nav-link active" id="home-tab" data-toggle="tab" href="#home" role="tab"
                                       aria-controls="home" aria-selected="true"><i class="flaticon-menu"></i></a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" id="profile-tab" data-toggle="tab" href="#profile" role="tab"
                                       aria-controls="profile" aria-selected="false"><i class="flaticon-list"></i></a>
                                </li>
                            </ul>
                        </div>
                        <!-- /.col-xl-6 -->
                        <div class="col-12 col-sm-8 col-md-6">
                            <div class="sort-by">
                                <span>Sort by :</span>
                                <select class="orderby" name="orderby">
                                    <option value="menu_order">Default sorting</option>
                                    <option value="popularity">Sort by popularity</option>
                                    <option value="rating">Sort by average rating</option>
                                    <option value="date">Sort by newness</option>
                                    <option selected="selected">Best Selling</option>
                                </select>
                            </div>
                        </div>
                        <!-- /.col-xl-6 -->
                    </div>
                    <!-- /.shop-sorting-area -->
                    <div class="shop-content">
                        <div class="tab-content" id="myTabContent">
                            <div class="tab-pane fade show active" id="home" role="tabpanel" aria-labelledby="home-tab">
                                <div class="row">
                                    @foreach($categories as $item)
                                    <div class="col-sm-6 col-xl-3">
                                        <div class="sin-product style-two">
                                            <div class="pro-img">
                                                <img src="{{ asset($item->cover_image) }}" alt="">
                                            </div>
                                            <div class="mid-wrapper">
                                                <h5 class="pro-title"><a href="product.html">{{ $item->name }}</a></h5>

                                                <p>{{ $item->category_name }} / <span>{{ $item->price }}đ</span></p>
                                            </div>
                                            <div class="icon-wrapper">
                                                <div class="pro-icon">
                                                    <ul>
                                                        <li><a href="#"><i class="flaticon-valentines-heart"></i></a></li>
                                                        <li><a href="#"><i class="flaticon-compare"></i></a></li>
                                                        <li><a href="#" class="trigger"><i class="flaticon-eye"></i></a>
                                                        </li>
                                                    </ul>
                                                </div>
                                                <div class="add-to-cart">
                                                    <a href="#">add to cart</a>
                                                </div>
                                            </div>
                                        </div>
                                        <!-- /.sin-product -->
                                    </div>
                                    @endforeach

                                </div>
                            </div>

                        </div>
                        <!-- /.tab-content -->
                        {{ $categories->links('pagination::bootstrap-5') }}
                        <!-- /.load-more-wrapper -->
                    </div>
                    <!-- /.shop-content -->
                </div>
                <!-- /.col-xl-9 -->
            </div>
            <!-- /.row -->
        </div>
        <!-- /.container-fluid -->
    </section>
    <!-- end main-product -->
@endsection

