@extends('admin.layouts.default')
@section('title')
    @parent
    Edit Categories
@endsection

@section('content')
    <!-- Content Body Start -->
    <div class="content-body">

        <!-- Page Headings Start -->
        <div class="row justify-content-between align-items-center mb-10">

            <!-- Page Heading Start -->
            <div class="col-12 col-lg-auto mb-20">
                <div class="page-heading">
                    <h3 class="title">Categories <span>/ Edit</span></h3>
                </div>
            </div><!-- Page Heading End -->

        </div><!-- Page Headings End -->

        <div class="row">
            <div class="col-12 mb-30">
                <div class="box">
                    <div class="box-head">
                        <h3 class="title">Edit Categories: {{ $category->name }}</h3>
                    </div>
                    <div class="box-body">
                        <div class="row mbn-20">

                            <!--Form Field-->
                            <div class="col-lg-4 col-12 mb-20">

                                <h6 class="mb-15">Name</h6>

                                <div class="row mbn-15">
                                    <div class="col-12 mb-15">
                                        <form action="{{ route('admin.categories.update') }}" method="POST">
                                            @csrf
                                            @method('PUT')
                                            <input type="hidden" name="id" value="{{ $category->id }}">
                                            <input type="text" class="form-control" placeholder="" name="name" value="{{ $category->name }}">
                                            @error('name')
                                                <div class="alert alert-danger">{{ $message }}</div>
                                            @enderror
                                            <br>
                                            <input type="submit" class="button button-primary" value="Submit">
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>
            </div>

        </div>

    </div><!-- Content Body End -->
@endsection
