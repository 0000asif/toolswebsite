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
                                    <h3 class="card-title">Edit Blog</h3>
                                </div>
                                <div>
                                    <a href="{{ route('blog.index') }}" class="btn btn-dark btn-sm">Back</a>
                                </div>
                            </div>

                            <!-- form start -->
                            <form action="{{ route('blog.update', $blogData->id) }}" method="POST"
                                enctype="multipart/form-data">
                                @csrf
                                @method('PUT')
                                <div class="card-body">
                                    <div class="row">

                                        {{-- category title --}}
                                        <div class="col-md-6 col-lg-6 col-12">
                                            <div class="mb-3">
                                                <label for="title" class="form-label">Blog Title *</label>
                                                <input type="text" required id="title" name="title"
                                                    class="form-control @error('title') is-invalid @enderror"
                                                    placeholder="Enter Your title"
                                                    value="{{ old('title', $blogData->title) }}">
                                                @error('title')
                                                    <span class="invalid-feedback" role="alert">
                                                        <strong>{{ $message }}</strong>
                                                    </span>
                                                @enderror
                                            </div>
                                        </div>

                                        {{-- Slug --}}
                                        <div class="col-md-6 col-lg-6 col-12">
                                            <div class="mb-3">
                                                <label for="slug" class="form-label">Blog Slug *</label>
                                                <input type="text" required id="slug" name="slug"
                                                    class="form-control @error('slug') is-invalid @enderror"
                                                    placeholder="Enter Your slug"
                                                    value="{{ old('slug', $blogData->slug) }}">
                                                @error('slug')
                                                    <span class="invalid-feedback" role="alert">
                                                        <strong>{{ $message }}</strong>
                                                    </span>
                                                @enderror
                                            </div>
                                        </div>

                                        {{-- category_id --}}
                                        <div class="col-md-6 col-lg-6 col-12">
                                            <div class="mb-3">
                                                <label for="category_id" class="form-label">Select Blog Category *</label>
                                                <select name="category_id" required id="category_id"
                                                    class="form-control @error('category_id') is-invalid @enderror">
                                                    <option value="">Select Category</option>
                                                    @foreach ($categorys as $category)
                                                        <option value="{{ $category->id }}"
                                                            {{ old('category_id', $blogData->category_id) == $category->id ? 'selected' : '' }}>
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


                                        {{-- customer_id --}}
                                        <div class="col-md-6 col-lg-6 col-12">
                                            <label for="customer_id" class="form-label">Select Customer *</label>
                                            <select name="customer_id" required id="customer_id"
                                                class="form-control select2 @error('customer_id') is-invalid @enderror">
                                                <option value="">Select Customer</option>
                                                @foreach ($customers as $customer)
                                                    <option value="{{ $customer->id }}"
                                                        {{ old('customer_id', $blogData->customer_id) == $customer->id ? 'selected' : '' }}>
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

                                        {{-- content --}}
                                        <div class="col-md-12 col-lg-12 col-12">
                                            <div class="mb-3">
                                                <label for="content" class="form-label"> content</label>
                                                <textarea id="summernote" required placeholder="Enter content" name="content"
                                                    class="form-control @error('content') is-invalid @enderror">{{ old('content', $blogData->content) }}</textarea>
                                                @error('content')
                                                    <span class="invalid-feedback" role="alert">
                                                        <strong>{{ $message }}</strong>
                                                    </span>
                                                @enderror
                                            </div>
                                        </div>

                                        {{-- Status --}}
                                        <div class="col-12 col-md-6 col-lg-6">
                                            <div class="form-group mb-4">
                                                <label for="status" class="form-label">Status <span
                                                        style="color: red;">*</span></label>
                                                <select name="status" id="status" required
                                                    class="form-control @error('status') is-invalid @enderror">
                                                    <option value="">Select Status</option>
                                                    <option value="1"
                                                        {{ old('status', $blogData->status) == '1' ? 'selected' : '' }}>
                                                        Active
                                                    </option>
                                                    <option value="0"
                                                        {{ old('status', $blogData->status) == '0' ? 'selected' : '' }}>
                                                        Inactive
                                                    </option>
                                                </select>
                                                @error('status')
                                                    <span class="invalid-feedback" role="alert">
                                                        <strong>{{ $message }}</strong>
                                                    </span>
                                                @enderror
                                            </div>
                                        </div>


                                        {{-- img --}}
                                        <div class="col-md-6 col-lg-6 col-12">
                                       <div class="mb-3">
    <label for="img" class="form-label">Blog Image </label>
    <input accept="image/*" type="file" id="img" name="img"
        class="form-control @error('img') is-invalid @enderror"
        onchange="previewImage(event)">
    @error('img')
        <span class="invalid-feedback" role="alert">
            <strong>{{ $message }}</strong>
        </span>
    @enderror
</div>

<!-- Existing Image (if available) -->
<img id="imagePreview" 
    src="{{ asset('public/image/Post') }}/{{ $blogData->img }}"
    alt="Blog Image" width="100" height="100" class="rounded my-4">
                                            @if ($blogData->img)


                                                {{-- New Image Name Input --}}
                                                <div class="mb-3">
                                                    <label for="new_main_img_name">Image Name <span
                                                            class="text-danger">*</span></label>
                                                    <input type="text"
                                                        class="form-control @error('new_main_img_name') is-invalid @enderror"
                                                        name="new_main_img_name"
                                                        value="{{ old('new_main_img_name', pathinfo($blogData->img, PATHINFO_FILENAME)) }}"
                                                        placeholder="Enter Image Name">
                                                    @error('new_main_img_name')
                                                        <span class="invalid-feedback" role="alert">
                                                            <strong>{{ $message }}</strong>
                                                        </span>
                                                    @enderror
                                                </div>
                                            @endif
                                        </div>

                                        {{-- alt text --}}
                                        <div class="col-md-6 col-lg-6 col-12">
                                            <div class="mb-3">
                                                <label for="alt_text">Image Alt Text</label>
                                                <input type="text" name="alt_text" value="{{ $blogData->alt_text }}"
                                                    class="form-control @error('alt_text') is-invalid @enderror"
                                                    placeholder="Enter Alt Text" value="{{ old('alt_text') }}">
                                                @error('alt_text')
                                                    <span class="invalid-feedback" role="alert">
                                                        <strong>{{ $message }}</strong>
                                                    </span>
                                                @enderror
                                            </div>
                                        </div>

                                        <!-- SEO Fields -->
                                        <div class="col-md-6 col-lg-6 col-12">
                                            <div class="mb-3">
                                                <label for="meta_title">Meta Title</label>
                                                <input type="text"
                                                    class="form-control @error('meta_title') is-invalid @enderror"
                                                    name="meta_title"
                                                    value="{{ old('meta_title', $blogData->meta_title) }}">
                                                @error('meta_title')
                                                    <span class="invalid-feedback">{{ $message }}</span>
                                                @enderror
                                            </div>
                                        </div>

                                        <div class="col-md-6 col-lg-6 col-12">
                                            <div class="mb-3">
                                                <label for="meta_description">Meta Description</label>
                                                <textarea name="meta_description" class="form-control @error('meta_description') is-invalid @enderror"
                                                    rows="3">{{ old('meta_description', $blogData->meta_description) }}</textarea>
                                                @error('meta_description')
                                                    <span class="invalid-feedback">{{ $message }}</span>
                                                @enderror
                                            </div>
                                        </div>

                                        <div class="col-md-6 col-lg-6 col-12">
                                            <div class="mb-3">
                                                <label for="meta_keywords">Meta Keywords</label>
                                                <input type="text"
                                                    class="form-control @error('meta_keywords') is-invalid @enderror"
                                                    name="meta_keywords"
                                                    value="{{ old('meta_keywords', $blogData->meta_keywords) }}">
                                                @error('meta_keywords')
                                                    <span class="invalid-feedback">{{ $message }}</span>
                                                @enderror
                                            </div>
                                        </div>

                                    </div>

                                </div>
                                <!-- /.card-body -->
                                <div class="card-footer">
                                    <button type="submit" class="btn btn-primary">Submit</button>
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
    <!-- JavaScript for Preview -->
<script>
function previewImage(event) {
    const preview = document.getElementById('imagePreview');
    const file = event.target.files[0];

    if (file) {
        const reader = new FileReader();
        reader.onload = function(e) {
            preview.src = e.target.result; // Set new image
        };
        reader.readAsDataURL(file); // Convert image to data URL
    }
}
</script>
@endpush
