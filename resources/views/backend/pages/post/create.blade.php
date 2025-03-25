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
                        <h1>Blog</h1>
                    </div>
                    <div class="col-sm-6">
                        <ol class="breadcrumb float-sm-right">
                            <li class="breadcrumb-item"><a href="{{ route('home') }}">Home</a></li>
                            <li class="breadcrumb-item activeCreate ">Blog</li>
                        </ol>
                    </div>
                </div>
            </div><!-- /.container-fluid -->
        </section>

        <!-- Main content -->
        <section class="content">
            <div class="container-fluid">
                <div class="row">
                    <!-- left column -->
                    <div class="col-md-12">
                        <!-- jquery validation -->
                        <div class="card card-primary">
                            <div class="card-header d-flex align-items-center">
                                <div class="flex-grow-1">
                                    <h3 class="card-title">Create Blog</h3>
                                </div>
                                <div>
                                    <a href="{{ route('blog.index') }}" class="btn btn-dark btn-sm">Back</a>
                                </div>
                            </div>

                            <!-- form start -->
                            <form action="{{ route('blog.store') }}" method="POST" enctype="multipart/form-data">
                                @csrf
                                <div class="card-body">

                                    <div class="row">

                                        {{-- title --}}
                                        <div class="col-md-8 col-lg-8 col-12">
                                            <div class="mb-3">
                                                <label for="title" class="form-label">Blog Title *</label>
                                                <input type="text" required id="title" name="title"
                                                    class="form-control @error('title') is-invalid @enderror"
                                                    placeholder="Enter Your title" value="{{ old('title') }}">
                                                @error('title')
                                                    <span class="invalid-feedback" role="alert">
                                                        <strong>{{ $message }}</strong>
                                                    </span>
                                                @enderror
                                            </div>
                                        </div>

                                        {{-- category_id --}}
                                        <div class="col-md-4 col-lg-4 col-12">
                                            <div class="mb-3">
                                                <label for="category_id" class="form-label">Select Blog Category *</label>
                                                <select name="category_id" required id="category_id"
                                                    class="form-control select2 @error('category_id') is-invalid @enderror">
                                                    <option value="">Select Category</option>
                                                    @foreach ($categorys as $category)
                                                        <option value="{{ $category->id }}"
                                                            {{ old('category_id') == $category->id ? 'selected' : '' }}>
                                                            {{ $category->name }}
                                                        </option>
                                                    @endforeach
                                                </select>
                                                @error('category_id')
                                                    <span class="invalid-feedback" role="alert">
                                                        <strong>{{ $message }}</strong>
                                                    </span>
                                                @enderror
                                            </div>
                                        </div>

                                        {{-- content --}}
                                        <div class="col-md-12 col-lg-12 col-12">
                                            <div class="mb-3">
                                                <label for="content" class="form-label"> Blog Description *</label>
                                                <textarea id="summernote" required placeholder="Enter content" name="content"
                                                    class="note-codable form-control @error('content') is-invalid @enderror">{{ old('content') }}</textarea>
                                                @error('content')
                                                    <span class="invalid-feedback" role="alert">
                                                        <strong>{{ $message }}</strong>
                                                    </span>
                                                @enderror
                                            </div>
                                        </div>

                                        {{-- img --}}
                                        <div class="col-md-6 col-lg-6 col-12">
                                            <div class="mb-3">
                                                <label for="img" class="form-label">Blog Featured Images *</label>
                                                <input type="file" required accept="image/*" id="img"
                                                    name="img" class="form-control @error('img') is-invalid @enderror"
                                                    placeholder="Enter Your Feature Image" value="{{ old('img') }}">
                                                <div class="mt-3">
                                                    <img id="imagePreview" src="#" alt="Image Preview"
                                                        style="display: none; max-height: 200px;">
                                                </div>
                                                @error('img')
                                                    <span class="invalid-feedback" role="alert">
                                                        <strong>{{ $message }}</strong>
                                                    </span>
                                                @enderror
                                            </div>
                                        </div>

                                        {{-- alt text --}}
                                        <div class="col-md-6 col-lg-6 col-12">
                                            <div class="mb-3">
                                                <label for="alt_text">Image Alt Text</label>
                                                <input type="text" name="alt_text"
                                                    class="form-control @error('alt_text') is-invalid @enderror"
                                                    placeholder="Enter Alt Text" value="{{ old('alt_text') }}">
                                                @error('alt_text')
                                                    <span class="invalid-feedback" role="alert">
                                                        <strong>{{ $message }}</strong>
                                                    </span>
                                                @enderror
                                            </div>
                                        </div>

                                        {{-- customer_id --}}
                                        <div class="col-md-6 col-lg-6 col-12">
                                            <div class="mb-3">
                                                <label for="customer_id" class="form-label">Select Customer *</label>
                                                <select name="customer_id" required id="customer_id"
                                                    class="form-control select2 @error('customer_id') is-invalid @enderror">
                                                    <option value="">Select Customer</option>
                                                    @foreach ($customers as $customer)
                                                        <option value="{{ $customer->id }}"
                                                            {{ old('customer_id') == $customer->id ? 'selected' : '' }}>
                                                            {{ $customer->name }}
                                                        </option>
                                                    @endforeach
                                                </select>
                                                @error('customer_id')
                                                    <span class="invalid-feedback" role="alert">
                                                        <strong>{{ $message }}</strong>
                                                    </span>
                                                @enderror
                                            </div>
                                        </div>

                                        <!-- Meta Title -->
                                        <div class="col-md-6 col-lg-6 col-12">
                                            <div class="mb-3">
                                                <label for="meta_title">Meta Title</label>
                                                <input type="text" name="meta_title"
                                                    class="form-control @error('meta_title') is-invalid @enderror"
                                                    placeholder="Enter meta title" value="{{ old('meta_title') }}">
                                                @error('meta_title')
                                                    <span class="invalid-feedback" role="alert">
                                                        <strong>{{ $message }}</strong>
                                                    </span>
                                                @enderror
                                            </div>
                                        </div>

                                        <!-- Meta Description -->
                                        <div class="col-md-6 col-lg-6 col-12">
                                            <div class="mb-3">
                                                <label for="meta_description">Meta Description</label>
                                                <textarea name="meta_description" class="form-control @error('meta_description') is-invalid @enderror"
                                                    placeholder="Enter meta description">{{ old('meta_description') }}</textarea>
                                                @error('meta_description')
                                                    <span class="invalid-feedback" role="alert">
                                                        <strong>{{ $message }}</strong>
                                                    </span>
                                                @enderror
                                            </div>
                                        </div>

                                        <!-- Meta Keywords -->
                                        <div class="col-md-6 col-lg-6 col-12">
                                            <div class="mb-3">
                                                <label for="meta_keywords">Meta Keywords</label>
                                                <input type="text" name="meta_keywords"
                                                    class="form-control @error('meta_keywords') is-invalid @enderror"
                                                    placeholder="Enter meta keywords (comma separated)"
                                                    value="{{ old('meta_keywords') }}">
                                                @error('meta_keywords')
                                                    <span class="invalid-feedback" role="alert">
                                                        <strong>{{ $message }}</strong>
                                                    </span>
                                                @enderror
                                            </div>
                                        </div>



                                    </div>

                                    <div class="form-group">
                                        <button type="submit" class="btn btn-primary mr-2">Submit</button>
                                    </div>
                                </div>
                            </form>
                        </div>
                        <!-- /.card -->
                    </div>
                    <!--/.col (left) -->
                    <!-- right column -->
                    <div class="col-md-6">

                    </div>
                    <!--/.col (right) -->
                </div>
                <!-- /.row -->
            </div><!-- /.container-fluid -->
        </section>

        <!-- /.content -->
    </div>
@endsection

@push('js')
    <script src="{{ asset('backend') }}/plugins/summernote/summernote-bs4.min.js"></script>
    <script>
        $(function() {
            // Summernote
            $('#summernote').summernote()

            // CodeMirror
            CodeMirror.fromTextArea(document.getElementById("codeMirrorDemo"), {
                mode: "htmlmixed",
                theme: "monokai"
            });
        })
    </script>
    <script>
        $(document).ready(function() {
            $('#img').on('change', function(event) {
                const imageInput = event.target;
                const imagePreview = $('#imagePreview');

                if (imageInput.files && imageInput.files[0]) {
                    const reader = new FileReader();

                    reader.onload = function(e) {
                        imagePreview.attr('src', e.target.result).show();
                    };

                    reader.readAsDataURL(imageInput.files[0]);
                } else {
                    imagePreview.attr('src', '#').hide();
                }
            });
        });
    </script>
@endpush
