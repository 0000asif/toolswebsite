@extends('frontend.components.front-master')
@section('metaauthor')
    User Add Job Post
@endsection
@section('front_content')
    <div class="container sirajganj_customer_profile_container">
        <div class="row">
            <a href="{{ Route('CustomerProfile') }}" class="sirajganj_btn-header mt-3"><i class="bi bi-arrow-left"></i>Back</a>
            <div class="col-md-12">

                <div class="right-text mb-3">
                    <div class="mas_batch">
                        <div class="cadrd">
                            <div class="card-hesader align-items-center text-center">
                                <h2 class="profile_color">চাকরির বিজ্ঞাপন দিন
                                </h2>
                            </div>
                        </div>
                    </div>
                </div>

                {{-- show here error --}}
                @if ($errors->any())
                    <div class="alert alert-danger">
                        <ul>
                            @foreach ($errors->all() as $error)
                                <li style="color: red;">{{ $error }}</li>
                            @endforeach
                        </ul>
                    </div>
                @endif
                <div class="blood_form">
                    <form action="{{ Route('customer.jobpoststore') }}" method="POST" enctype="multipart/form-data">
                        @csrf
                        <input type="hidden" name="customer_id" value="{{ auth()->guard('customer')->id() }}">
                        <div class="container sirajganj_customer_profile_container">
                            <div class="row mb-3 sirajganj_customer_profile_row">
                                <div class="form-group  col-md-6">

                                    <label for="title" class="form-label  "> শিরোনাম <span
                                            class=" ">*</span></label>

                                    <input type="text" id="title" name="title" class="form-control"
                                        placeholder=" শিরোনাম লিখুন" required>

                                </div>
                                <!-- Category -->
                                <div class="form-group  col-md-6">
                                    <label for=" job_category_id" class="form-label">ক্যাটাগরি <span
                                            class=" ">*</span></label>
                                    <select required name=" job_category_id" id="job_category_id"
                                        class="form-control select2 @error(' job_category_id') is-invalid @enderror">
                                        <option value="">ক্যাটাগরি সিলেক্ট করুন</option>
                                        @foreach ($jobCategories as $category)
                                            <option value="{{ $category->id }}"
                                                {{ old(' job_category_id') == $category->id ? 'selected' : '' }}>
                                                {{ $category->name }}
                                            </option>
                                        @endforeach
                                    </select>
                                    @error(' job_category_id')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>


                                <!-- district -->
                                <div class="form-group  col-md-6">
                                    <label for="union_id" class="form-label  ">জেলা <span class=" ">*</span></label>
                                    <select required name="district_id" id="district_id"
                                        class="form-control select2 @error('district_id') is-invalid @enderror">

                                        <option value="">জেলা সিলেক্ট করুন</option>

                                        @foreach ($districts as $district)
                                            <option value="{{ $district->id }}"
                                                {{ old('district_id') == $district->id ? 'selected' : '' }}>
                                                {{ $district->bn_name }}
                                            </option>
                                        @endforeach
                                    </select>

                                    @error('district_id')
                                        <span class="invalid-feedback" role="alert">

                                            <strong>{{ $message }}</strong>

                                        </span>
                                    @enderror

                                </div>
                                <!-- Upazila -->
                                <div class="form-group  col-md-6">
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

                                {{-- কোম্পানির নাম --}}
                                <div class="form-group  col-md-6">
                                    <label for="company_name">কোম্পানির নাম <span style="color: red;">*</span></label>
                                    <input id="company_name" type="text" name="company_name"
                                        class="form-control @error('company_name') is-invalid @enderror"
                                        placeholder="কোম্পানির নাম লিখুন" value="{{ old('company_name') }}" required>
                                    @error('company_name')
                                        <span class="text-danger">{{ $message }}</span>
                                    @enderror
                                </div>

                                {{-- শূন্যপদ --}}
                                <div class="form-group  col-md-6">
                                    <label for="vacancy">শূন্যপদ <span style="color: red;">*</span></label>
                                    <input id="vacancy" type="text" name="vacancy"
                                        class="form-control @error('vacancy') is-invalid @enderror"
                                        placeholder="শূন্যপদের সংখ্যা লিখুন" value="{{ old('vacancy') }}" required>
                                    @error('vacancy')
                                        <span class="text-danger">{{ $message }}</span>
                                    @enderror
                                </div>

                                {{-- বয়স সীমা --}}
                                <div class="form-group  col-md-6">
                                    <label for="age_range">বয়স সীমা <span class=" ">*</span></label>
                                    <input required id="age_range" type="text" name="age_range"
                                        class="form-control @error('age_range') is-invalid @enderror"
                                        placeholder="বয়স সীমা লিখুন" value="{{ old('age_range') }}">
                                    @error('age_range')
                                        <span class="text-danger">{{ $message }}</span>
                                    @enderror
                                </div>

                                {{-- লোকেশান --}}
                                <div class="form-group  col-md-6">
                                    <label for="location">লোকেশান <span style="color: red;">*</span></label>
                                    <input id="location" type="text" name="location"
                                        class="form-control @error('location') is-invalid @enderror"
                                        placeholder="লোকেশান লিখুন" value="{{ old('location') }}" required>
                                    @error('location')
                                        <span class="text-danger">{{ $message }}</span>
                                    @enderror
                                </div>

                                {{-- বেতন --}}
                                <div class="form-group  col-md-6">
                                    <label for="salary">বেতন <span style="color: red;">*</span></label>
                                    <input id="salary" type="text" name="salary"
                                        class="form-control @error('salary') is-invalid @enderror"
                                        placeholder="বেতন লিখুন" value="{{ old('salary') }}" required>
                                    @error('salary')
                                        <span class="text-danger">{{ $message }}</span>
                                    @enderror
                                </div>

                                {{-- অভিজ্ঞতা --}}
                                <div class="form-group  col-md-6">
                                    <label for="experience">অভিজ্ঞতা (অপশনাল)</label>
                                    <input id="experience" type="text" name="experience"
                                        class="form-control @error('experience') is-invalid @enderror"
                                        placeholder="অভিজ্ঞতা লিখুন" value="{{ old('experience') }}">
                                    @error('experience')
                                        <span class="text-danger">{{ $message }}</span>
                                    @enderror
                                </div>

                                {{-- আবেদনের শেষ তারিখ --}}
                                <div class="form-group  col-md-6">
                                    <label for="deadline">আবেদনের শেষ তারিখ <span style="color: red;">*</span></label>
                                    <input id="deadline" type="date" name="deadline"
                                        class="form-control @error('deadline') is-invalid @enderror"
                                        value="{{ old('deadline') }}" required>
                                    @error('deadline')
                                        <span class="text-danger">{{ $message }}</span>
                                    @enderror
                                </div>

                                {{-- লিঙ্গ --}}
                                <div class="form-group  col-md-6">
                                    <label for="gender">লিঙ্গ (অপশনাল)</label>
                                    <select id="gender" name="gender"
                                        class="form-control select2 @error('gender') is-invalid @enderror">
                                        <option value="">লিঙ্গ নির্বাচন করুন</option>
                                        <option value="male" {{ old('gender', '1') == '1' ? 'selected' : '' }}>
                                            পুরুষ
                                        </option>
                                        <option value="female" {{ old('gender') == '0' ? 'selected' : '' }}>
                                            নারী</option>
                                        <option value="male and female" {{ old('gender') == '2' ? 'selected' : '' }}>
                                            পুরুষ এবং নারী </option>
                                        <option value="others" {{ old('gender') == '3' ? 'selected' : '' }}>
                                            অন্যান্য</option>
                                    </select>
                                    @error('gender')
                                        <span class="text-danger">{{ $message }}</span>
                                    @enderror
                                </div>

                                {{-- চাকরির ধরন --}}
                                <div class="form-group  col-md-6">
                                    <label for="job_type">চাকরির ধরন (অপশনাল)</label>
                                    <input id="job_type" type="text" name="job_type"
                                        class="form-control @error('job_type') is-invalid @enderror"
                                        placeholder="চাকরির ধরন লিখুন" value="{{ old('job_type') }}">
                                    @error('job_type')
                                        <span class="text-danger">{{ $message }}</span>
                                    @enderror
                                </div>

                                {{-- বিবরণ --}}
                                <div class="form-group  col-md-12">
                                    <label for="description">বিবরণ <span class=" ">*</span></label>
                                    <textarea id="description" name="description" class="form-control summernote @error('description') is-invalid @enderror"
                                        placeholder="বিবরণ লিখুন">{{ old('description') }}</textarea>
                                    @error('description')
                                        <span class="text-danger">{{ $message }}</span>
                                    @enderror
                                </div>

                                {{-- কোম্পানির বিবরণ --}}
                                <div class="form-group  col-md-12">
                                    <label for="company_discription">কোম্পানির বিবরণ (অপশনাল)</label>
                                    <textarea id="company_discription" name="company_discription"
                                        class="form-control @error('company_discription') is-invalid @enderror" placeholder="কোম্পানির বিবরণ লিখুন">{{ old('company_discription') }}</textarea>
                                    @error('company_discription')
                                        <span class="text-danger">{{ $message }}</span>
                                    @enderror
                                </div>

                                {{-- কোম্পানির নম্বর --}}
                                <div class="form-group  col-md-6">
                                    <label for="company_number">কোম্পানির নম্বর (অপশনাল)</label>
                                    <input id="company_number" type="text" name="company_number"
                                        class="form-control @error('company_number') is-invalid @enderror"
                                        placeholder="কোম্পানির নম্বর লিখুন" value="{{ old('company_number') }}">
                                    @error('company_number')
                                        <span class="text-danger">{{ $message }}</span>
                                    @enderror
                                </div>

                                {{-- কোম্পানির ইমেইল --}}
                                <div class="form-group  col-md-6">
                                    <label for="company_email">কোম্পানির ইমেইল (অপশনাল)</label>
                                    <input id="company_email" type="email" name="company_email"
                                        class="form-control @error('company_email') is-invalid @enderror"
                                        placeholder="কোম্পানির ইমেইল লিখুন" value="{{ old('company_email') }}">
                                    @error('company_email')
                                        <span class="text-danger">{{ $message }}</span>
                                    @enderror
                                </div>

                                {{-- কোম্পানির লোগো --}}
                                <div class="form-group  col-md-6">
                                    <label for="company_logo">কোম্পানির লোগো (অপশনাল)</label>
                                    <input id="company_logo" type="file" name="company_logo"
                                        class="form-control @error('company_logo') is-invalid @enderror">
                                    @error('company_logo')
                                        <span class="text-danger">{{ $message }}</span>
                                    @enderror

                                    <div class="mt-3">
                                        <img id="imagePreview" src="#" alt="ইমেজ প্রিভিউ"
                                            style="display: none; max-height: 200px;">
                                    </div>
                                </div>





                                <!-- Submit Button -->
                                <div class="row">
                                    <div class="col-md-12">
                                        <button type="submit" class="sirajganj_btn-header w-100">পোষ্ট করুন </button>
                                    </div>
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

            });
        </script>
    @endif
    <script>
        $(document).ready(function() {
            $('#company_logo').on('change', function(event) {
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
    <script>
        $(document).on('change', '#district_id', function(e) {
            let district_id = $(this).val();
            $.ajax({
                url: "{{ route('get_zila_id_profile_job_page') }}",
                type: 'GET',
                data: {
                    district_id: district_id
                },
                success: function(response) {
                    $('#upazila_id').html(response);

                }
            });
        })
    </script>
@endpush
