@extends('backend.layout.master-admin')
@section('content')
    @include('backend.components.alert')

    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <section class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-6">
                        <h1>Edit Apps Review</h1>
                    </div>
                    <div class="col-sm-6">
                        <ol class="breadcrumb float-sm-right">
                            <li class="breadcrumb-item"><a href="{{ route('home') }}">Home</a></li>
                            <li class="breadcrumb-item active">Edit Apps Review</li>
                        </ol>
                    </div>
                </div>
            </div><!-- /.container-fluid -->
        </section>

        <section class="container">
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
                            <div class="card-header d-flex align-items-center">
                                <div class="flex-grow-1">
                                    <h3 class="card-title">Edit Apps Review</h3>
                                </div>
                                <div>
                                    <a href="{{ route('appsreview.index') }}" class="btn btn-dark btn-sm">Back</a>
                                </div>
                            </div>
                            <div class="card-body">
                                <form action="{{ route('appsreview.update', $appsreview->id) }}" method="POST"
                                    enctype="multipart/form-data">
                                    @csrf
                                    @method('PUT')

                                    <!-- Blog Details -->
                                    <div class="mb-3">
                                        <label for="name">Name <span class="text-danger">*</span></label>
                                        <input readonly type="text" class="form-control @error('name') is-invalid @enderror" value="{{ old('name', $appsreview->name) }}" required>
                                    </div>

                                    <div class="mb-3">
                                        <label for="phone">Phone <span class="text-danger">*</span></label>
                                        <input readonly type="text" class="form-control @error('phone') is-invalid @enderror" value="{{ old('phone', $appsreview->phone) }}" required>
                                        @error('phone')
                                            <span class="invalid-feedback">{{ $message }}</span>
                                        @enderror
                                    </div>

                                    <div class="mb-3">
                                        <label for="email">Email <span class="text-danger">*</span></label>
                                        <input readonly type="email" class="form-control @error('email') is-invalid @enderror" value="{{ old('email', $appsreview->email) }}" required>
                                    </div>

                                    <div class="mb-3">
                                        <label for="email">Rating <span class="text-danger">*</span></label>
                                          @if ($appsreview->ratting == '1')
                                                      ☆
                                                   @elseif ($appsreview->rating == '2')
                                                      ☆☆
                                                   @elseif ($appsreview->rating == '3')
                                                      ☆☆☆
                                                   @elseif ($appsreview->rating == '4')
                                                      ☆☆☆☆
                                                   @elseif ($appsreview->rating == '5')
                                                      ☆☆☆☆☆
                                                   @endif
                                    </div>

                                    <div class="mb-3">
                                        <label for="description">Review <span class="text-danger">*</span></label>
                                        <textarea name="review" id="summernote" class="form-control @error('review') is-invalid @enderror"
                                            rows="5" required>{{ old('review', $appsreview->review) }}</textarea>
                                        @error('review')
                                            <span class="invalid-feedback">{{ $message }}</span>
                                        @enderror
                                    </div>

                                   

                                    <div class="mb-3">
                                        <label for="status">Status <span class="text-danger">*</span></label>
                                        <select name="status" class="form-control @error('status') is-invalid @enderror"
                                            required>
                                            <option value="1" {{ $appsreview->status == 1 ? 'selected' : '' }}>
                                             Publish
                                            </option>
                                            <option value="0" {{ $appsreview->status == 0 ? 'selected' : '' }}>
                                             Pending
                                            </option>
                                        </select>
                                        @error('status')
                                            <span class="invalid-feedback">{{ $message }}</span>
                                        @enderror
                                    </div>


                                    <!-- Submit Button -->
                                    <div class="mb-3">
                                        <button type="submit" class="btn btn-primary">Update Apps Review</button>
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
