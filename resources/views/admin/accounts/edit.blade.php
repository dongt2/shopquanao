@extends('admin.layouts.default')
@section('title')
    @parent
    Update Account
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
                    <h3 class="title">Account <span>/ Update</span></h3>
                </div>
            </div><!-- Page Heading End -->

        </div><!-- Page Headings End -->

        <div class="col-12 mb-30">
            <div class="box">
                <div class="box-head">
                    <h4 class="title">{{ __('Update Account') }}</h4>
                </div>
                <div class="box-body">
                    <form action="{{ route('admin.accounts.update', $account->id) }}" method="POST" enctype="multipart/form-data">
                        @csrf
                        @method('PATCH')
                        <div class="row mbn-20">
                            <div class="col-12 mb-20">
                                <label for="formLayoutUsername3">Tên tài khoản</label>
                                <input type="text" id="formLayoutUsername3" class="form-control" placeholder="Tên sản phẩm" name="name" value="{{ $account->name }}">
                                @error('name')
                                <span class="alert alert-danger">{{ $message }}</span>
                                @enderror
                            </div>
                            <div class="col-12 mb-20">
                                <label for="formLayoutAddress1">Email</label>
                                <input type="email" id="formLayoutAddress1" class="form-control" name="email" value="{{ $account->email }}">
                                @error('email')
                                <div class="alert alert-danger">{{ $message }}</div>
                                @enderror
                            </div>
                            <div class="col-12 mb-20">
                                <label for="formLayoutAddress2">Ngày kích hoạt</label>
                                <input type="datetime-local" id="formLayoutAddress2" class="form-control"value="{{ $account->email_verified_at }}" disabled>
                            </div>


                            <div class="col-12 mb-20">
                                <label for="formLayoutAddress2">Loại tài khoản</label>
                                <select name="type" id="type" class="form-control">
                                    <option value="1" {{ $account->type == 1 ? 'selected' : '' }}>Admin</option>
                                    <option value="2" {{ $account->type == 2 ? 'selected' : '' }}>Member</option>
                                </select>
                            </div>

                            <div class="col-12 mb-20">
                                <label for="formLayoutAddress2">Ngày tạo</label>
                                <input type="datetime-local" id="formLayoutAddress2" class="form-control" value="{{ $account->created_at }}" disabled>

                            </div>

                            <div class="col-12 mb-20">
                                <label for="formLayoutAddress2">Ngày cập nhật</label>
                                <input type="datetime-local" id="formLayoutAddress2" class="form-control" value="{{ $account->updated_at }}" disabled>
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

