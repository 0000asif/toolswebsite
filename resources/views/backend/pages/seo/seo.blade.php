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

                        @if ($type == 'contact')
                            <h1> Contact Page SEO </h1>
                        @elseif ($type == 'adds')
                            <h1>Advertisment Page SEO </h1>
                        @elseif ($type == 'poster')
                            <h1> Mahfil Poster Page SEO </h1>
                        @elseif ($type == 'blood_donner')
                            <h1>Blood Doner Page SEO </h1>
                        @elseif ($type == 'blood_post')
                            <h1>Blood Post Page SEO </h1>
                        @elseif ($type == 'login')
                            <h1>Customer Login Page SEO </h1>
                        @elseif ($type == 'reg')
                            <h1>Customer Sinup Page SEO </h1>
                        @elseif ($type == 'job')
                            <h1>All Job Page SEO </h1>
                        @endif

                        {{--                         
                        @if ($type == 'contact') 

                        @elseif ($type == 'adds')

                        @elseif ($type == 'poster')

                        @elseif ($type == 'blood_donner')

                        @elseif ($type == 'blood_post')

                        @elseif ($type == 'login')

                        @elseif ($type == 'reg')

                        @elseif ($type == 'job')
                        
                        @endif --}}


                    </div>
                    <div class="col-sm-6">
                        <ol class="breadcrumb float-sm-right">
                            <li class="breadcrumb-item"><a href="{{ route('home') }}">Home</a></li>
                            <li class="breadcrumb-item activeCreate">SEO</li>
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
                                    @if ($type == 'contact')
                                        <h3 class="card-title"> Edit Contact Page SEO </h3>
                                    @elseif ($type == 'adds')
                                        <h3 class="card-title">Edit Advertisment Page SEO </h3>
                                    @elseif ($type == 'poster')
                                        <h3 class="card-title">Edit  Mahfil Poster Page SEO </h3>
                                    @elseif ($type == 'blood_donner')
                                        <h3 class="card-title">Edit Blood Doner Page SEO </h3>
                                    @elseif ($type == 'blood_post')
                                        <h3 class="card-title">Edit Blood Post Page SEO </h3>
                                    @elseif ($type == 'login')
                                        <h3 class="card-title">Edit Customer Login Page SEO </h3>
                                    @elseif ($type == 'reg')
                                        <h3 class="card-title">Edit Customer Sinup Page SEO </h3>
                                    @elseif ($type == 'job')
                                        <h3 class="card-title">Edit All Job Page SEO </h3>
                                    @endif
                                </div>
                            </div>

                            <form action="{{ route('SaveContactPageSeo') }}" method="POST">
                                @csrf
                                <div class="card-body">
                                    <div class="row">
                                        {{--                                         
                                        <div class="col-md-6 col-lg-6 col-12">
                                            <div class="mb-3">
                                                <label for="title" class="form-label">Title *</label>
                                                <input type="text" id="title" name="title"
                                                    class="form-control @error('title') is-invalid @enderror"
                                                    placeholder="Enter title" value="{{ old('title', $data->title ?? "") }}">
                                                @error('title')
                                                    <span class="invalid-feedback" role="alert">
                                                        <strong>{{ $message }}</strong>
                                                    </span>
                                                @enderror
                                            </div>
                                        </div> --}}

                                        <input type="hidden" name="user_id" value="{{ auth()->user()->id }}">
                                        <input type="hidden" name="type" value="{{ $type }}">
                                        <input type="hidden" name="table_id" value="{{ $data->id ?? '' }}">

                                        <div class="col-md-12 col-lg-12 col-12">
                                            <div class="mb-3">
                                                <label for="text" class="form-label">Content</label>
                                                <textarea id="summernote" name="text" class="form-control @error('text') is-invalid @enderror">{{ old('text', $data->text ?? '') }}</textarea>
                                                @error('text')
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
                                                placeholder="Enter meta title"
                                                value="{{ old('meta_title', $data->meta_title ?? '') }}">
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
                                                placeholder="Enter meta description">{{ old('meta_description', $data->meta_description ?? '') }}</textarea>
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
                                                value="{{ old('meta_keywords', $data->meta_description ?? '') }}">
                                            @error('meta_keywords')
                                                <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                            @enderror
                                        </div>

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
