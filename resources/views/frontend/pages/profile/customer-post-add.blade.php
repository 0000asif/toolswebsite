@extends('frontend.components.front-master')
@section('metaauthor')
    User Post Add 
@endsection
@section('front_content')
    <div class="container sirajganj_customer_profile_container">
        <div class="row">
            <a href="{{ Route('CustomerProfile') }}" class="sirajganj_btn-header mt-3"><i class="bi bi-arrow-left"></i>
                Back</a>
            @if (Session::has('success'))
                <div class="alert alert-success mt-3">
                    {{ Session::get('success') }}
                </div>
            @endif
            @if (Session::has('error'))
                <div class="alert alert-danger mt-3">
                    {{ Session::get('error') }}
                </div>
            @endif
            <div class="col-md-12">
                <div class="right-text mb-3">
                    <div class="mas_batch">
                        <div class="cadrd">
                            <div class="card-hesader align-items-center text-center">
                                <h2 class="profile_color">আপনার তথ্য যুক্ত করুন !
                                </h2>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="blood_form">
                    <form action="{{ Route('customer.poststore') }}" method="POST" enctype="multipart/form-data">
                        @csrf
                        <input type="hidden" name="customer_id" value="{{ auth()->guard('customer')->id() }}">
                        <div class="container sirajganj_customer_profile_container">
                            <div class="row mb-3 sirajganj_customer_profile_row">
                                <div class="col-md-6">

                                    <label for="title" class="form-label  "> শিরোনাম <span
                                            class=" ">*</span></label>

                                    <input type="text" id="title" name="title" class="form-control"
                                        placeholder=" শিরোনাম লিখুন" required>

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

                                <!-- Subcategory -->
                                <div class="col-md-6">
                                    <label for="sub_category_id" class="form-label">সাবক্যাটাগরি (অপশনাল) </label>
                                    <select name="sub_category_id" id="sub_category_id"
                                        class="form-control select2 @error('sub_category_id') is-invalid @enderror">
                                        <option value="">সাবক্যাটাগরি সিলেক্ট করুন</option>
                                        @foreach ($subCategories as $subCategory)
                                            <option value="{{ $subCategory->id }}"
                                                {{ old('sub_category_id') == $subCategory->id ? 'selected' : '' }}>
                                                {{ $subCategory->name }}
                                            </option>
                                        @endforeach
                                    </select>
                                    @error('sub_category_id')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>

                                <!-- Upazila -->
                                <div class="col-md-6">
                                    <label for="union_id" class="form-label  ">উপজেলা <span class=" ">*</span></label>
                                    <select required name="upazila_id" id="upazila_id"
                                        class="form-control select2 @error('upazila_id') is-invalid @enderror">

                                        <option value="">উপজেলা সিলেক্ট করুন</option>

                                        @foreach ($upazilas as $upazila)
                                            <option value="{{ $upazila->id }}"
                                                {{ old('upazila_id') == $upazila->id ? 'selected' : '' }}>

                                                {{ $upazila->bn_name }}

                                            </option>
                                        @endforeach

                                    </select>

                                    @error('upazila_id')
                                        <span class="invalid-feedback" role="alert">

                                            <strong>{{ $message }}</strong>

                                        </span>
                                    @enderror

                                </div>

                                <!-- Union -->
                                <div class="col-md-6">
                                    <label for="union_id" class="form-label">ইউনিয়ন (অপশনাল)</label>
                                    <select name="union_id" id="union_id"
                                        class="form-control select2 @error('union_id') is-invalid @enderror">
                                        <option value="">ইউনিয়ন সিলেক্ট করুন</option>
                                        @foreach ($unions as $union)
                                            <option value="{{ $union->id }}"
                                                {{ old('union_id') == $union->id ? 'selected' : '' }}>
                                                {{ $union->bn_name }}
                                            </option>
                                        @endforeach
                                    </select>
                                    @error('union_id')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>

                                <!-- Phone -->
                                <div class="col-md-6">
                                    <label for="phone" class="form-label">ফোন (অপশনাল)</label>
                                    <input type="text" id="phone" name="phone"
                                        class="form-control @error('phone') is-invalid @enderror"
                                        placeholder="ফোন নম্বর লিখুন" value="{{ old('phone') }}">
                                    @error('phone')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>

                                <!-- Email -->
                                <div class="col-md-6">
                                    <label for="email" class="form-label">ইমেইল (অপশনাল)</label>
                                    <input type="email" id="email" name="email"
                                        class="form-control @error('email') is-invalid @enderror"
                                        placeholder="ইমেইল ঠিকানা লিখুন" value="{{ old('email') }}">
                                    @error('email')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>

                                <!-- Address -->
                                <div class="col-md-6">
                                    <label for="address" class="form-label">ঠিকানা (অপশনাল)</label>
                                    <input type="text" id="address" name="address"
                                        class="form-control @error('address') is-invalid @enderror"
                                        placeholder="ঠিকানা লিখুন" value="{{ old('address') }}">
                                    @error('address')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>

                                <!-- Facebook Link -->
                                <div class="col-md-6">
                                    <label for="facebook_link" class="form-label">ফেসবুক লিঙ্ক (অপশনাল)</label>
                                    <input type="url" id="facebook_link" name="facebook_link"
                                        class="form-control @error('facebook_link') is-invalid @enderror"
                                        placeholder="ফেসবুক লিঙ্ক লিখুন" value="{{ old('facebook_link') }}">
                                    @error('facebook_link')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>

                                <!-- Google Map -->
                                <div class="col-md-6">
                                    <label for="google_map" class="form-label  ">গুগল ম্যাপ (অপশনাল)</label>
                                    <input type="url" id="google_map" name="google_map"
                                        class="form-control @error('google_map') is-invalid @enderror"
                                        placeholder="গুগল ম্যাপ লিঙ্ক লিখুন" value="{{ old('google_map') }}">
                                    @error('google_map')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>

                                <!-- Blog Main Image -->
                                <div class="col-md-6">
                                    <label for="main_img" class="form-label  ">প্রধান ছবি (অপশনাল) </label>
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

                                <!-- Blog Gallery Image -->
                                <div class="col-md-6">
                                    <label for="gallry_img" class="form-label  ">গ্যালারি ছবি (অপশনাল)</label>
                                    <input type="file" id="gallry_img" name="gallry_img[]" accept="image/*" multiple
                                        class="form-control @error('gallry_img') is-invalid @enderror"
                                        value="{{ old('gallry_img') }}">
                                    @error('gallry_img')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                                <div class="col-md-12">
                                    <label for="description" class="form-label  "> বিবরণ <span
                                            class=" ">*</span></label>
                                    <textarea id="description" name="description"
                                        class="form-control summernote @error('description') is-invalid @enderror" placeholder=" বিবরণ লিখুন">{{ old('description') }}</textarea>
                                    @error('description')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>

                                {{-- <div class="form-group mb-4 col-md-12">
                                    <label for="note">নোট (অপশনাল)</label>
                                    <textarea name="note" class="form-control @error('note') is-invalid @enderror"
                                        placeholder="আপনার কোন নোট থাকলে লিখুন">{{ old('note') }}</textarea>
                                    @error('note')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div> --}}






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
                background: "#fff",

            });
        </script>
    @endif
    {{-- filter union  --}}
    <script>
        $(document).on('change', '#upazila_id', function(e) {
            let upazila_id = $(this).val();
            $.ajax({
                url: "{{ route('get_union_data') }}",
                type: 'GET',
                data: {
                    upazila_id: upazila_id
                },
                success: function(response) {
                    $('#union_id').html(response);

                }
            });
        })
        $(document).on('change', '#category_id', function(e) {
            let category_id = $(this).val();
            $.ajax({
                url: "{{ route('get_sub_cat_data') }}",
                type: 'GET',
                data: {
                    category_id: category_id
                },
                success: function(response) {
                    $('#sub_category_id').html(response);

                }
            });
        })
    </script>
@endpush
