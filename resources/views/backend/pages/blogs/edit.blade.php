@extends('backend.layout.master-admin')
@section('content')
    @include('backend.components.alert')

    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <section class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-6">
                        <h1>Edit Tools</h1>
                    </div>
                    <div class="col-sm-6">
                        <ol class="breadcrumb float-sm-right">
                            <li class="breadcrumb-item"><a href="{{ route('home') }}">Home</a></li>
                            <li class="breadcrumb-item active">Edit Tools</li>
                        </ol>
                    </div>
                </div>
            </div><!-- /.container-fluid -->
        </section>

        <section class="content">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-md-12">
                        <div class="card">
                            @if ($errors->any())
                                <div class="alert alert-danger">
                                    <ul>
                                        @foreach ($errors->all() as $error)
                                            <li>{{ $error }}</li>
                                        @endforeach
                                    </ul>
                                </div>
                            @endif

                            <div class="card card-primary">
                                <div class="card-header d-flex align-items-center">
                                    <div class="flex-grow-1">
                                        <h3 class="card-title">Edit Tools</h3>
                                    </div>
                                    <div>
                                        <a href="{{ route('tools.index') }}" class="btn btn-dark btn-sm">Back</a>
                                    </div>
                                </div>
                                <div class="card-body">
                                    <form action="{{ route('tools.update',$blog->id) }}" method="post"
                                        enctype="multipart/form-data">
                                        @csrf
                                        @method('PUT') <!-- Include method for PUT -->
                                        <div class="card-body">
                                            <div class="row">

                                                <!-- Tools Title -->
                                                <div class="form-group mb-4 col-md-6">
                                                    <label for="title">Tools Title <span
                                                            class="text-danger">*</span></label>
                                                    <input required type="text"
                                                        class="form-control @error('title') is-invalid @enderror"
                                                        name="title" placeholder="Enter Tools title"
                                                        value="{{ old('title', $blog->title) }}">
                                                    @error('title')
                                                        <span class="invalid-feedback" role="alert">
                                                            <strong>{{ $message }}</strong>
                                                        </span>
                                                    @enderror
                                                </div>

                                                <!-- Tools Slug -->
                                                <div class="form-group mb-4 col-md-6">
                                                    <label for="slug">Tools Slug <span
                                                            class="text-danger">*</span></label>
                                                    <input type="text"
                                                        class="form-control @error('slug') is-invalid @enderror"
                                                        name="slug" value="{{ old('slug', $blog->slug) }}" required>
                                                    @error('slug')
                                                        <span class="invalid-feedback">{{ $message }}</span>
                                                    @enderror
                                                </div>

                                                <!-- Category -->
                                                <div class="form-group mb-4 col-md-6">
                                                    <label for="category_id">Category <span
                                                            class="text-danger">*</span></label>
                                                    <select required name="category_id" id="category_id"
                                                        class="form-control select2 @error('category_id') is-invalid @enderror">
                                                        <option value="">Select a category</option>
                                                        @foreach ($categories as $category)
                                                            <option value="{{ $category->id }}"
                                                                {{ old('category_id', $blog->category_id) == $category->id ? 'selected' : '' }}>
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


                                                <!-- Status -->
                                                <div class="form-group mb-4 col-md-6">
                                                    <label for="status">Status <span class="text-danger">*</span></label>
                                                    <select name="status"
                                                        class="form-control @error('status') is-invalid @enderror" required>
                                                        <option value="1" {{ $blog->status == 1 ? 'selected' : '' }}>
                                                            Active
                                                        </option>
                                                        <option value="0" {{ $blog->status == 0 ? 'selected' : '' }}>
                                                            Inactive
                                                        </option>
                                                    </select>
                                                    @error('status')
                                                        <span class="invalid-feedback">{{ $message }}</span>
                                                    @enderror
                                                </div>

                                                <div class="form-group mb-4 col-md-6">
                                                    <label for="main_img">Main Image <span
                                                            class="text-danger">*</span></label>
                                                    <input type="file"
                                                        class="form-control @error('main_img') is-invalid @enderror"
                                                        name="main_img" id="main_img" accept="image/*">
                                                    @if ($blog->main_img)
                                                        <img src="{{ asset('public/images/blogs/' . $blog->main_img) }}"
                                                            alt="Post Main Image" class="mt-2" style="width: 150px;">
                                                    @endif
                                                    <div class="mt-3">
                                                        <img id="imagePreview" src="#" alt="Image Preview"
                                                            style="display: none; max-height: 200px;">
                                                    </div>
                                                    @error('main_img')
                                                        <span class="invalid-feedback">{{ $message }}</span>
                                                    @enderror
                                                </div>


                                                <!-- Description -->
                                                <div class="form-group mb-4 col-md-12">
                                                    <label for="description">Description</label>
                                                    <textarea name="description" id="summernote" rows="6"
                                                        class="form-control ckeditor @error('description') is-invalid @enderror" placeholder="Enter Tools description">{{ old('description', $blog->description) }}</textarea>
                                                    @error('description')
                                                        <span class="invalid-feedback" role="alert">
                                                            <strong>{{ $message }}</strong>
                                                        </span>
                                                    @enderror
                                                </div>

                                                <!-- SEO Title -->
                                                <div class="form-group mb-4 col-md-6">
                                                    <label for="meta_title">SEO Title</label>
                                                    <input type="text" name="meta_title" id="meta_title"
                                                        class="form-control @error('meta_title') is-invalid @enderror"
                                                        placeholder="Enter SEO title"
                                                        value="{{ old('meta_title', $blog->meta_title) }}">
                                                    @error('meta_title')
                                                        <span class="invalid-feedback" role="alert">
                                                            <strong>{{ $message }}</strong>
                                                        </span>
                                                    @enderror
                                                </div>

                                                <!-- SEO Keywords -->
                                                <div class="form-group mb-4 col-md-6">
                                                    <label for="meta_keywords">SEO Keywords</label>
                                                    <input type="text" name="meta_keywords" id="meta_keywords"
                                                        class="form-control @error('meta_keywords') is-invalid @enderror"
                                                        placeholder="Enter SEO keywords"
                                                        value="{{ old('meta_keywords', $blog->meta_keywords) }}">
                                                    @error('meta_keywords')
                                                        <span class="invalid-feedback" role="alert">
                                                            <strong>{{ $message }}</strong>
                                                        </span>
                                                    @enderror
                                                </div>

                                                <!-- SEO Description -->
                                                <div class="form-group mb-4 col-md-12">
                                                    <label for="meta_description">SEO Description</label>
                                                    <textarea name="meta_description" id="meta_description" rows="4"
                                                        class="form-control @error('meta_description') is-invalid @enderror" placeholder="Enter SEO description">{{ old('meta_description', $blog->meta_description) }}</textarea>
                                                    @error('meta_description')
                                                        <span class="invalid-feedback" role="alert">
                                                            <strong>{{ $message }}</strong>
                                                        </span>
                                                    @enderror
                                                </div>


                                                <div class="form-group mb-4 ">
                                                    <button type="submit" class="btn btn-primary">Update Tools</button>
                                                </div>
                                            </div>
                                        </div>
                                    </form>
                                </div>
                            </div>

                        </div>
                    </div>
                </div>
            </div>
        </section>
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
        });
        $(document).ready(function() {
            $('#main_img').on('change', function(event) {
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
