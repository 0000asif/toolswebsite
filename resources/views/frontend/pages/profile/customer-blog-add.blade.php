@extends('frontend.components.front-master')
@section('metaauthor')
    User Blog Add
@endsection
@section('front_content')
    <div class="container sirajganj_customer_profile_container">
        <div class="row">
            <a href="{{ Route('CustomerProfile') }}" class="sirajganj_btn-header mt-3"><i class="bi bi-arrow-left"></i>
                Back</a>
            <div class="col-md-12">
                <div class="right-text mb-3">
                    <div class="mas_batch">
                        <div class="cadrd">
                            <div class="card-hesader align-items-center text-center">
                                <h2 class="profile_color">ব্লগ লেখুন !
                                </h2>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="blood_form">
                    <form action="{{ Route('customer.blogstore') }}" method="POST" enctype="multipart/form-data">
                        @csrf
                        <input type="hidden" name="customer_id" value="{{ auth()->guard('customer')->id() }}">
                        <div class="container sirajganj_customer_profile_container">
                            <div class="row mb-3 sirajganj_customer_profile_row">
                                <div class="col-md-6">

                                    <label for="title" class="form-label  ">ব্লগ শিরোনাম <span
                                            class=" ">*</span></label>

                                    <input type="text" id="title" name="title" class="form-control"
                                        placeholder="ব্লগ শিরোনাম লিখুন" required>

                                </div>
                                <!-- Category -->
                                <div class="col-md-6">
                                    <label for="category_id" class="form-label  ">ক্যাটাগরি <span
                                            class=" ">*</span></label>
                                    <select required name="category_id" id="category_id"
                                        class="form-control select2 @error('category_id') is-invalid @enderror">
                                        <option value="">ক্যাটাগরি সিলেক্ট করুন</option>
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
                                {{-- content --}}
                                <div class="col-md-12 col-lg-12 col-12">
                                    <div class="mb-3">
                                        <label for="content" class="form-label"> বিবরণ *</label>
                                        <textarea id="summernote" required placeholder="Enter content" name="content"
                                            class="note-codable summernote form-control @error('content') is-invalid @enderror">{{ old('content') }}</textarea>
                                        @error('content')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                    </div>
                                </div>

                                {{-- img --}}
                                <div class="col-md-6 col-lg-6 col-12">
                                    <div class="mb-3">
                                        <label for="img" class="form-label">ব্লগের ছবি </label>
                                        <input type="file"  accept="image/*" id="img" name="img"
                                            class="form-control @error('img') is-invalid @enderror"
                                            placeholder="Enter Your Feature Image" value="{{ old('img') }}">
                                        <div class="mt-3">
                                            <img id="imagePreview" src="#" alt="Image Preview"
                                                style="display: none; max-height: 200px;">
                                        </div>
                                        @error('img')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                    </div>
                                </div>




                                <!-- Submit Button -->
                                <div class="row">
                                    <div class="col-md-12">
                                        <button type="submit" class="sirajganj_btn-header w-100">পোষ্ট করুন </button>
                                    </div>
                                </div>
                            </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection
@push('front_js')

    @if (Session::has('success'))
        <script>
            Swal.fire({
                title: "Successful!",
                text: "{{ Session::get('success') }}",
                icon: "success",
                width: 600,
                padding: "3em",
                color: "#716add",
                background: "#fff url(https://sweetalert2.github.io/images/trees.png)",

            });
        </script>
    @endif

@endpush
