@extends('backend.layout.master-admin')

@section('css')
    <link rel="stylesheet" href="{{ asset('backend') }}/plugins/summernote/summernote-bs4.min.css">
@endsection

@section('content')
    @include('backend.components.alert')
    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <section class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-6">
                        <h1>Blog Details</h1>
                    </div>
                    <div class="col-sm-6">
                        <ol class="breadcrumb float-sm-right">
                            <li class="breadcrumb-item"><a href="{{ route('home') }}">Home</a></li>
                            <li class="breadcrumb-item active">Blog Details</li>
                        </ol>
                    </div>
                </div>
            </div>
        </section>

        <!-- Main content -->
        <section class="content">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-md-12">
                        <div class="card card-primary">
                            <div class="card-header d-flex align-items-center">
                                <div class="flex-grow-1">
                                    <h3 class="card-title">View Blog</h3>
                                </div>
                                <div>
                                    <a href="{{ route('blog.index') }}" class="btn btn-dark btn-sm">Back</a>
                                </div>
                            </div>

                            <!-- Blog details display -->
                            <div class="card-body">
                                <div class="row">
                                    <!-- Blog Title -->
                                    <div class="col-md-6 col-lg-6 col-12 mb-3">
                                        <label for="title" class="form-label">Blog Title</label>
                                        <p>{{ $blogData->title }}</p>
                                    </div>

                                    <!-- Blog Category -->
                                    <div class="col-md-6 col-lg-6 col-12 mb-3">
                                        <label for="category_id" class="form-label">Blog Category</label>
                                        <p>{{ $blogData->category->name ?? 'N/A' }}</p>
                                    </div>

                                    <!-- Customer -->
                                    <div class="col-md-6 col-lg-6 col-12 mb-3">
                                        <label for="customer_id" class="form-label">Customer</label>
                                        <p>{{ $blogData->customer->name ?? 'N/A' }}</p>
                                    </div>

                                    <!-- Blog Content -->
                                    <div class="col-md-12 col-lg-12 col-12 mb-3">
                                        <label for="content" class="form-label">Content</label>
                                        <div class="border p-2 rounded">
                                            {!! $blogData->content !!}
                                        </div>
                                    </div>

                                    <!-- Blog Status -->
                                    <div class="col-md-6 col-lg-6 col-12 mb-3">
                                        <label for="status" class="form-label">Status</label>
                                        <p>{{ $blogData->status == 1 ? 'Active' : 'Inactive' }}</p>
                                    </div>

                                    <!-- Blog Image -->
                                    <div class="col-md-6 col-lg-6 col-12 mb-3">
                                        <label for="img" class="form-label">Blog Image</label>
                                        <div>
                                            <img src="{{ asset('image/post') }}/{{ $blogData->img }}" alt="Blog Image"
                                                width="150" height="150" class="rounded my-2">
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- /.card -->
                    </div>
                </div>
            </div>
        </section>
    </div>
@endsection
