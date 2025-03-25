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
                        <h1>About Us</h1>
                    </div>
                    <div class="col-sm-6">
                        <ol class="breadcrumb float-sm-right">
                            <li class="breadcrumb-item"><a href="{{ route('home') }}">Home</a></li>
                            <li class="breadcrumb-item activeCreate">About Us</li>
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
                                    <h3 class="card-title">Edit About Page</h3>
                                </div>
                            </div>

                            <form action="{{ route('about.update', $about->id) }}" method="POST">
                                @csrf
                                @method('PUT')
                                <div class="card-body">
                                    <div class="row">
                                        <div class="col-md-6 col-lg-6 col-12">
                                            <div class="mb-3">
                                                <label for="title" class="form-label">Title *</label>
                                                <input type="text" id="title" name="title"
                                                    class="form-control @error('title') is-invalid @enderror"
                                                    placeholder="Enter title" value="{{ old('title', $about->title) }}">
                                                @error('title')
                                                    <span class="invalid-feedback" role="alert">
                                                        <strong>{{ $message }}</strong>
                                                    </span>
                                                @enderror
                                            </div>
                                        </div>

                                        <div class="col-md-12 col-lg-12 col-12">
                                            <div class="mb-3">
                                                <label for="text" class="form-label">text</label>
                                                <textarea id="summernote" name="text" class="form-control @error('text') is-invalid @enderror">{{ old('text', $about->text) }}</textarea>
                                                @error('text')
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
                                                    name="meta_title" value="{{ old('meta_title', $about->meta_title) }}">
                                                @error('meta_title')
                                                    <span class="invalid-feedback">{{ $message }}</span>
                                                @enderror
                                            </div>
                                        </div>

                                        <div class="col-md-6 col-lg-6 col-12">
                                            <div class="mb-3">
                                                <label for="meta_desc">Meta Description</label>
                                                <textarea name="meta_desc" class="form-control @error('meta_desc') is-invalid @enderror"
                                                    rows="3">{{ old('meta_desc', $about->meta_desc) }}</textarea>
                                                @error('meta_desc')
                                                    <span class="invalid-feedback">{{ $message }}</span>
                                                @enderror
                                            </div>
                                        </div>

                                        <div class="col-md-6 col-lg-6 col-12">
                                            <div class="mb-3">
                                                <label for="meta_tag">Meta Keywords</label>
                                                <input type="text"
                                                    class="form-control @error('meta_tag') is-invalid @enderror"
                                                    name="meta_tag"
                                                    value="{{ old('meta_tag', $about->meta_tag) }}">
                                                @error('meta_tag')
                                                    <span class="invalid-feedback">{{ $message }}</span>
                                                @enderror
                                            </div>
                                        </div>

                                    </div>

                                        <input type="hidden" name="user_id" value="{{ $about->user_id }}">
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