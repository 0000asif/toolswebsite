@extends('backend.layout.master-admin')
@section('content') @include('backend.components.alert')
    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <section class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-6">
                        <h1>Post</h1>
                    </div>
                    <div class="col-sm-6">
                        <ol class="breadcrumb float-sm-right">
                            <li class="breadcrumb-item"><a href="{{ route('home') }}">Home</a></li>
                            <li class="breadcrumb-item active">Post</li>
                        </ol>
                    </div>
                </div>
            </div><!-- /.container-fluid -->
        </section>

        <!-- Main content -->
        <section class="content">

            <div class="container-fluid">
                <div class="row">
                    <div class="col-12">
                        <div class="card">
                            <!-- /.card-header -->
                            <div class="card-body">
                                <div class="d-flex justify-content-between align-items-center mb-4">
                                    <h1>{{ $blog->title }}</h1>
                                    <a href="{{ route('tools.index') }}" class="btn btn-secondary">Back to Post List</a>
                                </div>

                                <div class="mb-4">
                                    <img src="{{ asset('images/blogs/' . $blog->main_img) }}" alt="Post Main Image"
                                        class="img-fluid" style="width: 250px">
                                </div>

                                <p><strong>Category: </strong> {{ $blog->category->name }}</p>
                                <p><strong>Subcategory: </strong> {{ $blog->subcategory->name }}</p>
                                <p><strong>Status:</strong>
                                    <span class="badge {{ $blog->status ? 'bg-success' : 'bg-danger' }}">
                                        {{ $blog->status ? 'Active' : 'Inactive' }}
                                    </span>
                                </p>
                                <p><strong>Description:</strong></p>
                                <p style="background: #ddd">{!! $blog->description !!}</p>



                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </div>
@endsection
