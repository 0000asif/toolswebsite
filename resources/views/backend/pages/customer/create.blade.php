@extends('backend.layout.master-admin')
@section('content')
    @include('backend.components.alert')
    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <section class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-6">
                        <h1>Create Customer</h1>
                    </div>
                    <div class="col-sm-6">
                        <ol class="breadcrumb float-sm-right">
                            <li class="breadcrumb-item"><a href="{{ route('home') }}">Home</a></li>
                            <li class="breadcrumb-item active">Create Customer</li>
                        </ol>
                    </div>
                </div>
            </div><!-- /.container-fluid -->
        </section>

        <section class="container">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-md-12">
                        <div class="card card-primary">
                            <div class="card-header d-flex align-items-center">
                                <div class="flex-grow-1">
                                    <h3 class="card-title">Create Customer</h3>
                                </div>
                                <div>
                                    <a href="{{ route('customer.index') }}" class="btn btn-dark btn-sm">Back</a>
                                </div>
                            </div>
                            <div class="card-body">
                                <form action="{{ route('customer.store') }}" method="POST" enctype="multipart/form-data">
                                    @csrf
                                    <!-- Name -->
                                    <div class="mb-3">
                                        <label for="name">Name <span class="text-danger">*</span></label>
                                        <input required type="text"
                                            class="form-control @error('name') is-invalid @enderror" name="name"
                                            placeholder="Enter customer's name" value="{{ old('name') }}">
                                        @error('name')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                    </div>

                                    <!-- Email -->
                                    <div class="mb-3">
                                        <label for="email">Email </label>
                                        <input required type="email" class="form-control @error('email') is-invalid @enderror"
                                            name="email" placeholder="Enter customer's email" value="{{ old('email') }}">
                                        @error('email')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                    </div>

                                    <!-- Phone -->
                                    <div class="mb-3">
                                        <label for="phone">Phone <span class="text-danger">*</span></label>
                                        <input type="text" 
                                            class="form-control @error('phone') is-invalid @enderror" name="phone"
                                            placeholder="Enter customer's phone number" value="{{ old('phone') }}">
                                        @error('phone')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                    </div>

                                    <!-- Image -->
                                    <div class="mb-3">
                                        <label for="image">Image </label>
                                        <input type="file" id="image"
                                            class="form-control @error('image') is-invalid @enderror" name="image">
                                        <div class="mt-3">
                                            <img id="imagePreview" src="#" alt="Image Preview"
                                                style="display: none; max-height: 200px;">
                                        </div>
                                        @error('image')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                    </div>


                                    <!-- Password -->
                                    <div class="mb-3">
                                        <label for="password">Password <span class="text-danger">*</span></label>
                                        <input required type="password"
                                            class="form-control @error('password') is-invalid @enderror" name="password"
                                            placeholder="Enter a secure password">
                                        @error('password')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                    </div>
                                    <!-- Confirm Password -->
                                    <div class="mb-3">
                                        <label for="password_confirmation">Confirm Password <span
                                                class="text-danger">*</span></label>
                                        <input required type="password"
                                            class="form-control @error('password_confirmation') is-invalid @enderror"
                                            name="password_confirmation" placeholder="Confirm the password">
                                        @error('password_confirmation')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                    </div>

                                    <!-- Address -->
                                    <div class="mb-3">
                                        <label for="address">Address </label>
                                        <textarea class="form-control @error('address') is-invalid @enderror" name="address"
                                            placeholder="Enter customer's address">{{ old('address') }}</textarea>
                                        @error('address')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                    </div>

                                    <!-- Status -->
                                    <div class="mb-3">
                                        <label for="status">Status <span class="text-danger">*</span></label>
                                        <select name="status" required id="status" class="form-control">
                                            <option value="1" {{ old('status') == '1' ? 'selected' : '' }}>Active
                                            </option>
                                            <option value="0" {{ old('status') == '0' ? 'selected' : '' }}>Inactive
                                            </option>
                                        </select>
                                        @error('status')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                    </div>

                                    <!-- Submit Button -->
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
        $(document).ready(function() {
            $('#image').on('change', function(event) {
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
