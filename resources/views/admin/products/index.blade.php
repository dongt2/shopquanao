@extends('admin.layouts.default')
@section('title')
    @parent
    List Products
@endsection

@section('content')
    <!-- Content Body Start -->
    <div class="content-body">

        <!-- Page Headings Start -->
        <div class="row justify-content-between align-items-center mb-10">

            <!-- Page Heading Start -->
            <div class="col-12 col-lg-auto mb-20">
                <div class="page-heading">
                    <h3 class="title">Products <span>/ List</span></h3>
                </div>
            </div><!-- Page Heading End -->

        </div><!-- Page Headings End -->

        <div class="row">

            <!--Default Data Table Start-->
            <div class="col-12 mb-30">
                <div class="box">
                    <div class="box-head">
                        <h3 class="title">List Products</h3>
                    </div>
                    <div class="box-body">
                        @if(session('success'))
                            <div class="alert alert-success">{{ session('success') }}</div>
                        @endif
                        <table class="table-container" >
                            <thead>
                            <tr>
                                <th>#</th>
                                <th>Tên sản phẩm</th>
                                <th>Ảnh sản phẩm</th>
                                <th>Mô tả</th>
                                <th>Giá</th>
                                <th>Số lượng</th>
                                <th>Danh mục</th>
                                <th>Ngày đăng</th>
                                <th>Ngày cập nhật</th>
                                <th></th>

                            </tr>
                            </thead>
                            <tbody>
                            @if($products == '')
                            @foreach($products as $item)
                            <tr>
                                <td>{{ $loop->iteration }}</td>
                                <td>{{ $item->name }}</td>
                                <td>
                                    <img src="{{ asset($item->cover_image) }}" alt="Ảnh sản phẩm" style="width: 50px">
                                </td>
                                <td>{{ $item->description }}</td>
                                <td>{{ $item->price }}</td>
                                <td>{{ $item->quantity }}</td>
                                <td>{{ $item->category_name }}</td>
                                <td>{{ \Carbon\Carbon::parse($item->created_at)->format('d-m-Y H:i:s') }}</td>
                                <td>{{ \Carbon\Carbon::parse($item->updated_at)->format('d-m-Y H:i:s') }}</td>
                                <td>
                                    <a href="{{ route('admin.products.edit', $item->id) }}" class="button button-xs button-warning">Edit</a>

                                    <form action="{{ route('admin.products.destroy', $item->id) }}" method="post">
                                        @csrf
                                        @method('DELETE')
                                        <button type="submit" class="button button-xs button-danger" onclick="return confirm('Bạn có muốn xóa không?')" > Delete</button>
                                    </form>

                                </td>
                            </tr>
                            @endforeach
                            @else
                            <tr>
                                <td colspan="10" class="text text-center">No data</td>
                            </tr>
                            @endif
                            </tbody>
                        </table>
                            {{ $products->links('pagination::bootstrap-5') }}
                    </div>
                </div>
            </div>
            <!--Default Data Table End-->

        </div>

    </div><!-- Content Body End -->

@endsection


