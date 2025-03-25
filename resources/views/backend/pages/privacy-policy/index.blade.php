@extends('backend.layout.master-admin')
@section('css')
    <link rel="stylesheet" href="{{ asset('backend') }}/plugins/summernote/summernote-bs4.min.css">
@endsection
@section('content')
    @include('backend.components.alert')
    <div class="content-wrapper">
        <section class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-6">
                        <h1>Privacy Policy</h1>
                    </div>
                    <div class="col-sm-6">
                        <ol class="breadcrumb float-sm-right">
                            <li class="breadcrumb-item"><a href="{{ route('home') }}">Home</a></li>
                            <li class="breadcrumb-item activeCreate">Privacy Policy</li>
                        </ol>
                    </div>
                </div>
            </div>
        </section>

        <section class="content">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-md-12">
                        <div class="card card-primary">
                            <div class="card-header d-flex align-items-center">
                                <div class="flex-grow-1">
                                    <h3 class="card-title">Edit Privacy Policy</h3>
                                </div>
                            </div>

                            <form action="{{ route('privacy-policy.update', $privacy->id) }}" method="POST">
                                @csrf
                                @method('PUT')
                                <div class="card-body">
                                    <div class="row">
                                        <div class="col-md-6 col-lg-6 col-12">
                                            <div class="mb-3">
                                                <label for="title" class="form-label">Title *</label>
                                                <input type="text" id="title" name="title"
                                                    class="form-control @error('title') is-invalid @enderror"
                                                    placeholder="Enter title" value="{{ old('title', $privacy->title) }}">
                                                @error('title')
                                                    <span class="invalid-feedback" role="alert">
                                                        <strong>{{ $message }}</strong>
                                                    </span>
                                                @enderror
                                            </div>
                                        </div>

                                        <div class="col-md-12 col-lg-12 col-12">
                                            <div class="mb-3">
                                                <label for="content" class="form-label">Content</label>
                                                <textarea id="summernote" name="content" class="form-control @error('content') is-invalid @enderror">{{ old('content', $privacy->content) }}</textarea>
                                                @error('content')
                                                    <span class="invalid-feedback" role="alert">
                                                        <strong>{{ $message }}</strong>
                                                    </span>
                                                @enderror
                                            </div>
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
                                            placeholder="Enter meta title" value="{{ old('meta_title',$privacy->meta_title) }}">
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
                                            placeholder="Enter meta description">{{ old('meta_description',$privacy->meta_description) }}</textarea>
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
                                            value="{{ old('meta_keywords',$privacy->meta_description) }}">
                                        @error('meta_keywords')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                    </div>

                                        <input type="hidden" name="user_id" value="{{ $privacy->user_id }}">
                                    </div>
                                </div>

                                <div class="card-footer">
                                    <button type="submit" class="btn btn-primary">Submit</button>
                                </div>
                            </form>
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
            $('#summernote').summernote();
        });
    </script>
@endpush