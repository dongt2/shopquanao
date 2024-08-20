@extends('admin.layouts.default')
@section('title')
    @parent
    List Categories
@endsection

@section('content')
    <!-- Content Body Start -->
    <div class="content-body">

        <!-- Page Headings Start -->
        <div class="row justify-content-between align-items-center mb-10">

            <!-- Page Heading Start -->
            <div class="col-12 col-lg-auto mb-20">
                <div class="page-heading">
                    <h3 class="title">Categories <span>/ List</span></h3>
                </div>
            </div><!-- Page Heading End -->

        </div><!-- Page Headings End -->

        <div class="row">

            <!--Default Data Table Start-->
            <div class="col-12 mb-30">
                <div class="box">
                    <div class="box-head">
                        <h3 class="title">{{ __('List Categories') }}</h3>
                    </div>
                    <div class="box-body">
                        @if(session('success'))
                            <div class="alert alert-success">{{ session('success') }}</div>
                        @endif
                        <table class="table table-bordered data-table data-table-default">
                            <thead>
                            <tr>
                                <th>#</th>
                                <th>Tên danh mục</th>
{{--                                <th>Danh mục cha</th>--}}
                                <th>Ngày tạo</th>
                                <th>Ngày cập nhật</th>
                                <th>Action</th>

                            </tr>
                            </thead>
                            <tbody>
                            @if($categories == '')
                            @foreach($categories as $item)
                            <tr>
                                <td>{{ $loop->iteration }}</td>
                                <td>{{ $item->name }}</td>
{{--                                @if(isset($item->children) && count($item->children) > 0)--}}
{{--                                    <td>--}}
{{--                                        @foreach($item->children as $child)--}}
{{--                                            {{ $child->name }}--}}
{{--                                        @endforeach--}}
{{--                                    </td>--}}
{{--                                @else--}}
{{--                                    <td>Không có danh mục cha</td>--}}
{{--                                @endif--}}
                                <td>{{ \Carbon\Carbon::parse($item->created_at)->format('d-m-Y H:i:s') }}</td>
                                <td>{{ \Carbon\Carbon::parse($item->updated_at)->format('d-m-Y H:i:s') }}</td>
                                <td>
                                    <a href="{{ route('admin.categories.edit', $item->id) }}" class="button button-xs button-warning">Edit</a>
                                    <a href="{{ route('admin.categories.destroy', $item->id) }}" class="button button-xs button-danger" onclick="confirm('Bạn có muốn xóa không?')">Delete</a>

                                </td>
                            </tr>
                            @endforeach
                            @else
                                <tr>
                                    <td colspan="6">Không có dữ liệu</td>
                                </tr>
                            @endif

                            </tbody>
                        </table>
{{--                            {{ $categories->links('pagination::bootstrap-5') }}--}}
                    </div>
                </div>
            </div>
            <!--Default Data Table End-->

        </div>

    </div><!-- Content Body End -->
@endsection
