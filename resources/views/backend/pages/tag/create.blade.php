@extends('backend.layout.master-admin')
@section('content')
    @include('backend.components.alert')
    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <section class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-6">
                        <h1>Create Category</h1>
                    </div>
                    <div class="col-sm-6">
                        <ol class="breadcrumb float-sm-right">
                            <li class="breadcrumb-item"><a href="{{ route('home') }}">Home</a></li>
                            <li class="breadcrumb-item active">Create Category</li>
                        </ol>
                    </div>
                </div>
            </div><!-- /.container-fluid -->
        </section>

        <section class="container">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-md-12">
                        <div class="card mt-5">
                            <div class="card-header d-flex align-items-center">
                                <div class="flex-grow-1">
                                    <h3 class="card-title">Create Category</h3>
                                </div>
                                <div>
                                    <a href="{{ route('category.index') }}" class="btn btn-dark btn-sm">Back</a>
                                </div>
                            </div>
                            <div class="card-body">
                                <form action="{{ route('category.store') }}" method="POST" enctype="multipart/form-data">
                                    @csrf
                                    <div class="mb-3">
                                        <label for="name">Category Name <span class="text-danger">*</span></label>
                                        <input required type="text"
                                            class="form-control @error('name') is-invalid @enderror" name="name"
                                            placeholder="Enter Category name" value="{{ old('name') }}">
                                        @error('name')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                    </div>

                                 <div class="mb-3">
    <label for="image">Category Image <span class="text-danger">*</span></label>
    <input required type="file" id="image" name="image" accept="image/*"
        class="form-control @error('image') is-invalid @enderror"
        value="{{ old('image') }}">
    @error('image')
        <span class="invalid-feedback" role="alert">
            <strong>{{ $message }}</strong>
        </span>
    @enderror
</div>
<div class="mb-3">
    <label>Image Preview:</label>
    <img id="imagePreview" src="" alt="Selected Image" style="max-width: 100%; max-height: 200px; display: none;">
</div>

                                    <div class="mb-3">
                                        <label for="status">Status<span class="text-danger">*</span></label>
                                        <Select name="status" required id="status" class="form-control">
                                            <option value="1">Active </option>
                                            <option value="0">InActive</option>
                                        </Select>
                                        @error('status')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                    </div>

                                    <div class="mb-3">
                                        <button type="submit" class="btn btn-primary">Submit</button>
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
    <script>
    document.getElementById('image').addEventListener('change', function (event) {
        const file = event.target.files[0];
        const preview = document.getElementById('imagePreview');

        if (file) {
            const reader = new FileReader();

            reader.onload = function (e) {
                preview.src = e.target.result;
                preview.style.display = 'block';
            };

            reader.readAsDataURL(file);
        } else {
            preview.src = '';
            preview.style.display = 'none';
        }
    });
</script>
@endpush