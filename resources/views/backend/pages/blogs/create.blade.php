@extends('backend.layout.master-admin')
@section('content')
    @include('backend.components.alert')

    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <section class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-6">
                        <h1>Create Posts</h1>
                    </div>
                    <div class="col-sm-6">
                        <ol class="breadcrumb float-sm-right">
                            <li class="breadcrumb-item"><a href="{{ route('home') }}">Home</a></li>
                            <li class="breadcrumb-item active">Create Post</li>
                        </ol>
                    </div>
                </div>
            </div><!-- /.container-fluid -->
        </section>

        <section class="content">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-md-12">
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
                                    <h3 class="card-title">Create Post</h3>
                                </div>
                                <div>
                                    <a href="{{ route('tools.index') }}" class="btn btn-dark btn-sm">Back</a>
                                </div>
                            </div>
                            <div class="card-body">
                                <form action="{{ route('tools.store') }}" method="POST" enctype="multipart/form-data">
                                    @csrf
                                    <div class="card-body">
                                        <div class="row">

                                            <!-- Post Title -->
                                            <div class="form-group mb-4 col-md-6">
                                                <label for="title">Post Title <span class="text-danger">*</span></label>
                                                <input required type="text"
                                                    class="form-control @error('title') is-invalid @enderror" name="title"
                                                    placeholder="Enter Post title" value="{{ old('title') }}">
                                                @error('title')
                                                    <span class="invalid-feedback" role="alert">
                                                        <strong>{{ $message }}</strong>
                                                    </span>
                                                @enderror
                                            </div>


                                            <!-- Category -->
                                            <div class="form-group mb-4 col-md-6">
                                                <label for="category_id">Category <span class="text-danger">*</span></label>
                                                <select required name="category_id" id="category_id"
                                                    class="form-control select2 @error('category_id') is-invalid @enderror">
                                                    <option value="">Select a category</option>
                                                    @foreach ($categories as $category)
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


                                            <!-- Post Main Image -->
                                            <div class="form-group mb-4 col-md-6">
                                                <label for="main_img">Main Image </label>
                                                <input id="main_img" type="file" name="main_img" accept="image/*"
                                                    class="form-control @error('main_img') is-invalid @enderror"
                                                    value="{{ old('main_img') }}">
                                                <div class="mt-3">
                                                    <img id="imagePreview" src="#" alt="Image Preview"
                                                        style="display: none; max-height: 200px;">
                                                </div>
                                                @error('main_img')
                                                    <span class="invalid-feedback" role="alert">
                                                        <strong>{{ $message }}</strong>
                                                    </span>
                                                @enderror
                                            </div>


                                            <!-- Post Description -->
                                            <div class="form-group mb-4 col-md-12">
                                                <label for="description" class="form-label"> Post Description *</label>
                                                <textarea id="summernote" placeholder="Enter description" name="description"
                                                    class="note-codable form-control @error('description') is-invalid @enderror">{{ old('description') }}</textarea>
                                                @error('description')
                                                    <span class="invalid-feedback" role="alert">
                                                        <strong>{{ $message }}</strong>
                                                    </span>
                                                @enderror
                                            </div>

                                            <!-- Post Note -->
                                            <div class="form-group mb-4 col-md-12">
                                                <label for="note">Note</label>
                                                <textarea name="note" class="form-control @error('note') is-invalid @enderror" placeholder="Enter additional notes">{{ old('note') }}</textarea>
                                                @error('note')
                                                    <span class="invalid-feedback" role="alert">
                                                        <strong>{{ $message }}</strong>
                                                    </span>
                                                @enderror
                                            </div>

                                            <!-- SEO Section -->
                                            <div class="form-group mb-4 col-md-12">
                                                <h4>SEO Section</h4>
                                            </div>

                                            <!-- Meta Title -->
                                            <div class="form-group mb-4 col-md-6">
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

                                            <!-- Meta Description -->
                                            <div class="form-group mb-4 col-md-6">
                                                <label for="meta_description">Meta Description</label>
                                                <textarea name="meta_description" class="form-control @error('meta_description') is-invalid @enderror"
                                                    placeholder="Enter meta description">{{ old('meta_description') }}</textarea>
                                                @error('meta_description')
                                                    <span class="invalid-feedback" role="alert">
                                                        <strong>{{ $message }}</strong>
                                                    </span>
                                                @enderror
                                            </div>

                                            <!-- Meta Keywords -->
                                            <div class="form-group mb-4 col-md-6">
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

                                        <!-- Submit -->
                                        <div class="mb-3">
                                            <button type="submit" class="btn btn-primary">Submit</button>
                                        </div>
                                    </div>
                                </form>


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
