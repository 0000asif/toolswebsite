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
                        <h1>Apps</h1>
                    </div>
                    <div class="col-sm-6">
                        <ol class="breadcrumb float-sm-right">
                            <li class="breadcrumb-item"><a href="{{ route('home') }}">Home</a></li>
                            <li class="breadcrumb-item activeCreate ">Apps</li>
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
                            <!-- form start -->
                            <form action="{{ route('mobileapps.update', $data->id) }}" method="post"
                                enctype="multipart/form-data">
                                @csrf
                                @method('PUT')
                                <div class="card-body">
                                    <div class="row">

                                        {{-- category title --}}
                                        <div class="col-md-6 col-lg-6 col-12">
                                            <div class="mb-3">
                                                <label for="title" class="form-label"> Title *</label>
                                                <input type="text" required id="title" name="title"
                                                    class="form-control @error('title') is-invalid @enderror"
                                                    placeholder="Enter Your title" value="{{ old('title', $data->title) }}">
                                                @error('title')
                                                    <span class="invalid-feedback" role="alert">
                                                        <strong>{{ $message }}</strong>
                                                    </span>
                                                @enderror
                                            </div>
                                        </div>

                                        {{-- author_name --}}
                                        <div class="col-md-6 col-lg-6 col-12">
                                            <div class="mb-3">
                                                <label for="author_name" class="form-label">Author Name *</label>
                                                <input type="text" required id="author_name" name="author_name"
                                                    class="form-control @error('author_name') is-invalid @enderror"
                                                    placeholder="Enter Your Author Name"
                                                    value="{{ old('author_name', $data->author_name) }}">
                                                @error('author_name')
                                                    <span class="invalid-feedback" role="alert">
                                                        <strong>{{ $message }}</strong>
                                                    </span>
                                                @enderror
                                            </div>
                                        </div>

                                        {{-- author_url --}}
                                        <div class="col-md-6 col-lg-6 col-12">
                                            <div class="mb-3">
                                                <label for="author_url" class="form-label">Author URL *</label>
                                                <input type="text" required id="author_url" name="author_url"
                                                    class="form-control @error('author_url') is-invalid @enderror"
                                                    placeholder="Enter Your Author URL"
                                                    value="{{ old('author_url', $data->author_url) }}">
                                                @error('author_url')
                                                    <span class="invalid-feedback" role="alert">
                                                        <strong>{{ $message }}</strong>
                                                    </span>
                                                @enderror
                                            </div>
                                        </div>


                                        {{-- text --}}
                                        <div class="col-md-12 col-lg-12 col-12">
                                            <div class="mb-3">
                                                <label for="text" class="form-label"> Description</label>
                                                <textarea id="summernote" required placeholder="Enter text" name="text"
                                                    class="form-control @error('text') is-invalid @enderror">{{ old('text', $data->text) }}</textarea>
                                                @error('text')
                                                    <span class="invalid-feedback" role="alert">
                                                        <strong>{{ $message }}</strong>
                                                    </span>
                                                @enderror
                                            </div>
                                        </div>

                                        {{-- apps_logo --}}
                                        <div class="col-md-6 col-lg-6 col-12">
                                            <div class="mb-3">
                                                <label for="apps_logo" class="form-label">Apps Logo </label>
                                                <input accept="image/*" type="file" id="apps_logo" name="apps_logo"
                                                    class="form-control @error('apps_logo') is-invalid @enderror"
                                                    placeholder="Enter Your img Link" value="{{ old('apps_logo') }}">
                                                @error('apps_logo')
                                                    <span class="invalid-feedback" role="alert">
                                                        <strong>{{ $message }}</strong>
                                                    </span>
                                                @enderror
                                            </div>
                                            <img src="{{ asset('image/Apps') }}/{{ $data->apps_logo }}" alt="Apps logo"
                                                width="100" height="100" class="rounded my-4">
                                        </div>

                                        {{-- img1 --}}
                                        <div class="col-md-6 col-lg-6 col-12">
                                            <div class="mb-3">
                                                <label for="img1" class="form-label">Apps Image 1 </label>
                                                <input accept="image/*" type="file" id="img1" name="img1"
                                                    class="form-control @error('img1') is-invalid @enderror"
                                                    placeholder="Enter Your img Link" value="{{ old('img1') }}">
                                                @error('img1')
                                                    <span class="invalid-feedback" role="alert">
                                                        <strong>{{ $message }}</strong>
                                                    </span>
                                                @enderror
                                            </div>
                                            <img src="{{ asset('image/Apps') }}/{{ $data->img1 }}" alt="Apps logo"
                                                width="100" height="100" class="rounded my-4">
                                        </div>
                                        {{-- img2 --}}
                                        <div class="col-md-6 col-lg-6 col-12">
                                            <div class="mb-3">
                                                <label for="img2" class="form-label">Apps Image 2 </label>
                                                <input accept="image/*" type="file" id="img2" name="img2"
                                                    class="form-control @error('img2') is-invalid @enderror"
                                                    placeholder="Enter Your img Link" value="{{ old('img2') }}">
                                                @error('img2')
                                                    <span class="invalid-feedback" role="alert">
                                                        <strong>{{ $message }}</strong>
                                                    </span>
                                                @enderror
                                            </div>
                                            <img src="{{ asset('image/Apps') }}/{{ $data->img2 }}" alt="Apps logo"
                                                width="100" height="100" class="rounded my-4">
                                        </div>

                                        {{-- img3 --}}
                                        <div class="col-md-6 col-lg-6 col-12">
                                            <div class="mb-3">
                                                <label for="img3" class="form-label">Apps Image 3 </label>
                                                <input accept="image/*" type="file" id="img3" name="img3"
                                                    class="form-control @error('img3') is-invalid @enderror"
                                                    placeholder="Enter Your img Link" value="{{ old('img3') }}">
                                                @error('img3')
                                                    <span class="invalid-feedback" role="alert">
                                                        <strong>{{ $message }}</strong>
                                                    </span>
                                                @enderror
                                            </div>
                                            <img src="{{ asset('image/Apps') }}/{{ $data->img3 }}" alt="Apps logo"
                                                width="100" height="100" class="rounded my-4">
                                        </div>

                                        {{-- img4 --}}
                                        <div class="col-md-6 col-lg-6 col-12">
                                            <div class="mb-3">
                                                <label for="img4" class="form-label">Apps Image 4 </label>
                                                <input accept="image/*" type="file" id="img4" name="img4"
                                                    class="form-control @error('img4') is-invalid @enderror"
                                                    placeholder="Enter Your img Link" value="{{ old('img4') }}">
                                                @error('img4')
                                                    <span class="invalid-feedback" role="alert">
                                                        <strong>{{ $message }}</strong>
                                                    </span>
                                                @enderror
                                            </div>
                                            <img src="{{ asset('image/Apps') }}/{{ $data->img4 }}" alt="Apps logo"
                                                width="100" height="100" class="rounded my-4">
                                        </div>
                                        {{-- apps --}}
                                        <div class="col-md-6 col-lg-6 col-12">
                                            <div class="mb-3">
                                                <label for="apps" class="form-label">Downloadable Apps</label>
                                                <input type="file" id="apps" name="apps"
                                                    class="form-control @error('apps') is-invalid @enderror"
                                                    placeholder="Enter Your img Link" value="{{ old('apps') }}">
                                                @error('apps')
                                                    <span class="invalid-feedback" role="alert">
                                                        <strong>{{ $message }}</strong>
                                                    </span>
                                                @enderror
                                            </div>
                                            <img src="{{ asset('image/Apps') }}/{{ $data->apps }}" alt="Apps logo"
                                                width="100" height="100" class="rounded my-4">
                                        </div>

                                        <!-- SEO Fields -->
                                        <div class="col-md-6 col-lg-6 col-12">
                                            <div class="mb-3">
                                                <label for="meta_title">Meta Title</label>
                                                <input type="text"
                                                    class="form-control @error('meta_title') is-invalid @enderror"
                                                    name="meta_title" value="{{ old('meta_title', $data->meta_title) }}">
                                                @error('meta_title')
                                                    <span class="invalid-feedback">{{ $message }}</span>
                                                @enderror
                                            </div>
                                        </div>

                                        <div class="col-md-6 col-lg-6 col-12">
                                            <div class="mb-3">
                                                <label for="meta_description">Meta Description</label>
                                                <textarea name="meta_description" class="form-control @error('meta_description') is-invalid @enderror"
                                                    rows="3">{{ old('meta_description', $data->meta_description) }}</textarea>
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
                                                    value="{{ old('meta_keywords', $data->meta_keywords) }}">
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
@endpush
