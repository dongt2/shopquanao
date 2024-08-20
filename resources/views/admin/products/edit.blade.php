@extends('admin.layouts.default')
@section('title')
    @parent
    Update Products
@endsection

@push('styles')
    <style>
        .image-update {
            width: 100px;
            object-fit: cover;
        }
    </style>
@endpush

@section('content')
    <!-- Content Body Start -->
    <div class="content-body">

        <!-- Page Headings Start -->
        <div class="row justify-content-between align-items-center mb-10">

            <!-- Page Heading Start -->
            <div class="col-12 col-lg-auto mb-20">
                <div class="page-heading">
                    <h3 class="title">Products <span>/ Update</span></h3>
                </div>
            </div><!-- Page Heading End -->

        </div><!-- Page Headings End -->

        <div class="col-12 mb-30">
            <div class="box">
                <div class="box-head">
                    <h4 class="title">Update Products: {{ $product->name }}</h4>
                </div>
                <div class="box-body">
                    <form action="{{ route('admin.products.update', $product->id) }}" method="POST" enctype="multipart/form-data">
                        @csrf
                        @method('PATCH')
                        <div class="row mbn-20">
                            <div class="col-12 mb-20">
                                <label for="formLayoutUsername3">Tên sản phẩm</label>
                                <input type="text" id="formLayoutUsername3" class="form-control" placeholder="Tên sản phẩm" name="name" value="{{ $product->name }}">
                                @error('name')
                                <div class="alert alert-danger">{{ $message }}</div>
                                @enderror
                            </div>
                            <div class="col-12 mb-20">
                                <label for="formLayoutAddress1">Giá</label>
                                <input type="text" id="formLayoutAddress1" class="form-control" placeholder="Giá" name="price" value="{{ $product->price }}">
                                @error('price')
                                <div class="alert alert-danger">{{ $message }}</div>
                                @enderror
                            </div>
                            <div class="col-12 mb-20">
                                <label for="formLayoutAddress2">Số lương</label>
                                <input type="number" id="formLayoutAddress2" class="form-control" placeholder="Số lương" name="quantity" value="{{ $product->quantity }}">
                                @error('quantity')
                                <div class="alert alert-danger">{{ $message }}</div>
                                @enderror
                            </div>

                            <div class="col-12 mb-20">
                                <label for="formLayoutMessage1">Mô tả</label>
                                {{--                                <textarea id="formLayoutMessage1" class="form-control" placeholder="Mô tả" name="description"></textarea>--}}
                                <textarea class="summernote" name="description" id="description"></textarea>
                                @error('description')
                                <div class="alert alert-danger">{{ $message }}</div>
                                @enderror
                            </div>

                            <div class="col-12 mb-20">
                                <label for="formLayoutFile1">Ảnh</label>
                                <img src="{{ asset($product->cover_image) }}" alt="Ảnh sản phẩm" class="image-update">
                                <input type="file" id="formLayoutFile1" class="form-control" name="image">
                                @error('image')
                                <div class="alert alert-danger">{{ $message }}</div>
                                @enderror
                            </div>

                            <div class="col-12 mb-20">
                                <label for="formLayoutEmail1">Danh mục</label>
                                <select name="category_id" id="category_id" class="form-control">
                                    <option value="">Select Category</option>
                                    @foreach($categories as $category)
                                        <option value="{{ $category->id }}" {{ $category->id == $product->category_id ? 'selected' : '' }}>{{ $category->name }}</option>
                                    @endforeach
                                </select>
                                @error('category_id')
                                <div class="alert alert-danger">{{ $message }}</div>
                                @enderror
                            </div>
                            <div class="col-12 mb-20">
                                <input type="submit" value="submit" class="button button-primary">
                            </div>

                        </div>
                    </form>
                </div>
            </div>
        </div>

        {{--        <div class="row">--}}
        {{--            <div class="col-12 mb-30">--}}
        {{--                <div class="box">--}}
        {{--                    <div class="box-head">--}}
        {{--                        <h3 class="title">Create Categories</h3>--}}
        {{--                    </div>--}}
        {{--                    <div class="box-body">--}}
        {{--                        <div class="row mbn-20">--}}

        {{--                            <!--Form Field-->--}}
        {{--                            <div class="col-lg-4 col-12 mb-20">--}}

        {{--                                <h6 class="mb-15">Name</h6>--}}

        {{--                                <div class="row mbn-15">--}}
        {{--                                    <div class="col-12 mb-15">--}}
        {{--                                        <form action="{{ route('admin.categories.store') }}" method="POST">--}}
        {{--                                            @csrf--}}

        {{--                                            <input type="text" class="form-control" placeholder="" name="name">--}}
        {{--                                            @error('name')--}}
        {{--                                                <div class="alert alert-danger">{{ $message }}</div>--}}
        {{--                                            @enderror--}}
        {{--                                            <br>--}}

        {{--                                            <h6 class="mb-15">Ảnh</h6>--}}

        {{--                                            <input class="dropify" type="file" >--}}
        {{--                                            @error('name')--}}
        {{--                                            <div class="alert alert-danger">{{ $message }}</div>--}}
        {{--                                            @enderror--}}
        {{--                                            <br>--}}
        {{--                                            <h6 class="mb-15">Mô tả</h6>--}}

        {{--                                            <input type="text" class="form-control" placeholder="" name="description">--}}
        {{--                                            @error('name')--}}
        {{--                                            <div class="alert alert-danger">{{ $message }}</div>--}}
        {{--                                            @enderror--}}
        {{--                                            <br>--}}
        {{--                                            <h6 class="mb-15">Giá</h6>--}}

        {{--                                            <input type="text" class="form-control" placeholder="" name="price">--}}
        {{--                                            @error('name')--}}
        {{--                                            <div class="alert alert-danger">{{ $message }}</div>--}}
        {{--                                            @enderror--}}
        {{--                                            <br>--}}
        {{--                                            <h6 class="mb-15">Số lượng</h6>--}}

        {{--                                            <input type="text" class="form-control" placeholder="" name="quantity">--}}
        {{--                                            @error('name')--}}
        {{--                                            <div class="alert alert-danger">{{ $message }}</div>--}}
        {{--                                            @enderror--}}
        {{--                                            <br>--}}
        {{--                                            <h6 class="mb-15">Danh mục </h6>--}}

        {{--                                            <select name="category_id" id="category_id" class="form-control">--}}
        {{--                                                <option value="">Select Category</option>--}}
        {{--                                                @foreach($categories as $category)--}}
        {{--                                                    <option value="{{ $category->id }}">{{ $category->name }}</option>--}}
        {{--                                                @endforeach--}}
        {{--                                            <br>--}}



        {{--                                            <input type="submit" class="button button-primary" value="Submit">--}}
        {{--                                        </form>--}}
        {{--                                    </div>--}}
        {{--                                </div>--}}
        {{--                            </div>--}}
        {{--                        </div>--}}
        {{--                    </div>--}}

        {{--                </div>--}}
        {{--            </div>--}}

        {{--        </div>--}}

    </div><!-- Content Body End -->
@endsection

@push('scripts')
    <script>
        document.getElementById('description').value = `{!! $product->description !!}`;
    </script>
@endpush
