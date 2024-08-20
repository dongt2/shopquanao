@extends('user.layouts.default')

@section('title')
    @parent
    Detail Product
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
    <section class="shop-area style-two">
        <div class="container">
            <div class="row">
                <div class="col-xl-12">
                    <div class="row">
                        <div class="col-lg-6 col-xl-6">
                            <!-- Product View Slider -->
                            <div class="quickview-slider">
                                <div class="slider-for">
                                    <div class="">
                                        <img src="{{ asset($product->cover_image) }}" alt="Thumb">
                                    </div>
                                </div>

                            </div>
                            <!-- /.quickview-slider -->
                        </div>
                        <!-- /.col-xl-6 -->

                        <div class="col-lg-6 col-xl-6">
                            <div class="product-details">
                                <h5 class="pro-title"><a href="#">{{ $product->name }}</a></h5>
                                <span class="price">{{ $product->price }}</span>
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
                                        <input type="text" value="0" name="qtybutton" class="cart-plus-minus">
                                    </div>
                                    <a href="#" class="add-to-cart"><i class="flaticon-shopping-purse-icon"></i>Add to Cart</a>
                                    <!-- <a href="#"><i class="flaticon-valentines-heart"></i></a> -->
                                </div>

                                <!-- <span>SKU:	N/A</span>
                            <p>Tags <a href="#">boys,</a><a href="#"> dress,</a><a href="#">Rok-dress</a></p> -->

                                <p>{{ $product->description }}</p>

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


                        <div class="col-xl-12">
                            <div class="product-des-tab">
                                <ul class="nav nav-tabs " role="tablist">
                                    <li class="nav-item">
                                        <a class="nav-link" id="contact-tab" data-toggle="tab" href="#contact" role="tab" aria-controls="contact" aria-selected="false">REVIEWS (1)</a>
                                    </li>
                                </ul>
                                <div class="tab-content" id="myTabContent">
                                    <div class="tab-pane fade" id="contact" role="tabpanel" aria-labelledby="contact-tab">
                                        <div class="prod-bottom-tab-sin">
                                            <h5>Review</h5>
                                            <div class="product-review">
                                                @foreach($reviews as $item)
                                                <div class="reviwer">
{{--                                                    <img src="media/images/reviewer.png" alt="">--}}
                                                    <h6>{{ $item->name }}</h6>

                                                    <div class="review-details">
                                                        <span>by {{ $user->name }} at {{ $item->created_at }}</span>
                                                        <p>{{ $item->comment }}</p>
                                                    </div>
                                                </div>
                                                @endforeach
                                                <div class="add-your-review">
                                                    <h6>ADD A REVIEW</h6>
                                                    <p>YOUR RATING* </p>


                                                    <div class="raing-form">
                                                        <form action="{{ route('reviews.store', $product->id) }}" method="POST">
                                                            @csrf
                                                            <input type="hidden" value="{{ $product->id }}" name="product_id">
                                                            <input type="hidden" value="{{ $user->id }}" name="product_id">
                                                            <select name="rating">Danh Gia
                                                                <option value="1">1</option>
                                                                <option value="2">2</option>
                                                                <option value="3">3</option>
                                                                <option value="4">4</option>
                                                                <option value="5">5</option>
                                                            </select>
                                                            <textarea class="rating-form" name="comment"></textarea>
                                                            <input type="submit">
                                                        </form>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- /.row -->
                </div>
                <!-- /.col-xl-9 -->
            </div>
            <!-- /.row -->
        </div>
        <!-- /.container-fluid -->
    </section>
    <!-- /.shop-area -->

@endsection

