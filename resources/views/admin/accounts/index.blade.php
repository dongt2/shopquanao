@extends('admin.layouts.default')
@section('title')
    @parent
    List Accounts
@endsection

@section('content')
    <!-- Content Body Start -->
    <div class="content-body">

        <!-- Page Headings Start -->
        <div class="row justify-content-between align-items-center mb-10">

            <!-- Page Heading Start -->
            <div class="col-12 col-lg-auto mb-20">
                <div class="page-heading">
                    <h3 class="title">Accounts <span>/ List</span></h3>
                </div>
            </div><!-- Page Heading End -->

        </div><!-- Page Headings End -->

        <div class="row">

            <!--Default Data Table Start-->
            <div class="col-12 mb-30">
                <div class="box">
                    <div class="box-head">
                        <h3 class="title">{{ __('List Accounts') }}</h3>
                    </div>
                    <div class="box-body">
                        @if(session('success'))
                            <div class="alert alert-success">{{ session('success') }}</div>
                        @endif
                        <table class="table-container" >
                            <thead>
                            <tr>
                                <th>#</th>
                                <th>Tên tài khoản</th>
                                <th>Email</th>
                                <th>Ngày kích hoạt</th>
                                <th>Loại tài khoản</th>
                                <th>Ngày tạo</th>
                                <th>Ngày cập nhật</th>
                                <th></th>

                            </tr>
                            </thead>
                            <tbody>
                            @foreach($accounts as $item)
                            <tr>
                                <td>{{ $loop->iteration }}</td>
                                <td>{{ $item->name }}</td>
                                <td>{{ $item->email }}</td>
                                <td>{{ $item->email_verified_at }}</td>
                                <td>
                                    @if($item->type == 1)
                                        <span class="badge badge-success">Admin</span>
                                    @else
                                        <span class="badge badge-primary">Member</span>
                                    @endif
                                </td>
                                <td>{{ \Carbon\Carbon::parse($item->created_at)->format('d-m-Y H:i:s') }}</td>
                                <td>{{ \Carbon\Carbon::parse($item->updated_at)->format('d-m-Y H:i:s') }}</td>
                                <td>
                                    <a href="{{ route('admin.accounts.edit', $item->id) }}" class="button button-xs button-warning">Edit</a>

                                    <form action="{{ route('admin.accounts.destroy', $item->id) }}" method="post">
                                        @csrf
                                        @method('DELETE')
                                        <button type="submit" class="button button-xs button-danger" onclick="return confirm('Bạn có muốn xóa không?')" > Delete</button>
                                    </form>

                                </td>
                            </tr>
                            @endforeach
                            </tbody>
                        </table>
                            {{ $accounts->links('pagination::bootstrap-5') }}
                    </div>
                </div>
            </div>
            <!--Default Data Table End-->

        </div>

    </div><!-- Content Body End -->

@endsection


