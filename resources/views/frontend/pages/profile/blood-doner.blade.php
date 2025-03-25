@extends('frontend.components.front-master')
@section('metaauthor')
User Blood Donation Add
@endsection
@section('front_content')
    @php
        $customer = Auth::guard('customer')->user();

    @endphp
    <div class="container sirajganj_customer_profile_container">
        <div class="row my-3">

            {{-- ============= Side Bar Start ===============  --}}
            {{-- @include('frontend.components.profile_sidebar') --}}
            {{-- ============= Side Bar End ===============  --}}
            <a href="{{ Route('CustomerProfile') }}" class="sirajganj_btn-header"><i class="bi bi-arrow-left"></i> Back</a>
            <div class="col-md-12">

                <div class="right-text mb-3">
                    <div class="mas_batch">
                        <div class="cadrd">
                            <div class="card-hesader align-items-center text-center">
                                <h2 class="profile_color">রক্ত দানকারী যুক্ত করতে নিচের ফর্মটি পূরণ করুন ! 
                                </h2>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="blood_form">
                    <form action="{{ Route('BloodDoner.store') }}" method="POST" enctype="multipart/form-data">
                        @csrf
                        <input type="hidden" name="customer_id" value="{{ auth()->guard('customer')->id() }}">
                        <div class="container sirajganj_customer_profile_container">
                            <div class="row mb-3 sirajganj_customer_profile_row">


                                {{-- Upazila --}}
                                <div class="col-md-6 mb-3">
                                    <label for="upazila_id">উপজেলা নির্বাচন করুন <span class="text-danger">*</span></label>
                                    <select name="upazila_id" required id="upazila_id"
                                        class="form-control select2 @error('upazila_id') is-invalid @enderror">
                                        <option value="">উপজেলা নির্বাচন করুন</option>
                                        @foreach ($upazilas as $upazila)
                                            <option value="{{ $upazila->id }}"
                                                {{ old('upazila_id') == $upazila->id ? 'selected' : '' }}>
                                                {{ $upazila->name }}
                                            </option>
                                        @endforeach
                                    </select>
                                    @error('upazila_id')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                                <!-- Name -->
                                <div class="col-md-6 mb-3">
                                    <label for="name">নাম <span class="text-danger">*</span></label>
                                    <input required type="text" class="form-control @error('name') is-invalid @enderror"
                                        name="name" placeholder="দাতার নাম লিখুন" value="{{ old('name') }}">
                                    @error('name')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>

                                <!-- Contract Number -->
                                <div class="col-md-6 mb-3">
                                    <label for="contract_number">যোগাযোগ নম্বর <span class="text-danger">*</span></label>
                                    <input required type="text"
                                        class="form-control @error('contract_number') is-invalid @enderror"
                                        name="contract_number" placeholder="দাতার যোগাযোগ নম্বর লিখুন"
                                        value="{{ old('contract_number') }}">
                                    @error('contract_number')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>

                                <!-- Blood Group -->
                                <div class="col-md-6 mb-3">
                                    <label for="blood_group">রক্তের গ্রুপ <span class="text-danger">*</span></label>
                                    <select name="blood_group" required id="blood_group" class="form-control select2">
                                        <option value="A+" {{ old('blood_group') == 'A+' ? 'selected' : '' }}>A+
                                        </option>
                                        <option value="A-" {{ old('blood_group') == 'A-' ? 'selected' : '' }}>A-
                                        </option>
                                        <option value="B+" {{ old('blood_group') == 'B+' ? 'selected' : '' }}>B+
                                        </option>
                                        <option value="B-" {{ old('blood_group') == 'B-' ? 'selected' : '' }}>B-
                                        </option>
                                        <option value="AB+" {{ old('blood_group') == 'AB+' ? 'selected' : '' }}>AB+
                                        </option>
                                        <option value="AB-" {{ old('blood_group') == 'AB-' ? 'selected' : '' }}>AB-
                                        </option>
                                        <option value="O+" {{ old('blood_group') == 'O+' ? 'selected' : '' }}>O+
                                        </option>
                                        <option value="O-" {{ old('blood_group') == 'O-' ? 'selected' : '' }}>O-
                                        </option>
                                    </select>
                                    @error('blood_group')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>

                                <!-- Last Donate Date -->
                                <div class="col-md-6 mb-3">
                                    <label for="last_donation_date">সর্বশেষ রক্তদান তারিখ <span
                                            class="text-danger">*</span></label>
                                    <input required type="date"
                                        class="form-control @error('last_donation_date') is-invalid @enderror"
                                        name="last_donation_date" value="{{ old('last_donation_date') }}">
                                    @error('last_donation_date')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>

                                <!-- Address -->
                                <div class="col-md-6 mb-3">
                                    <label for="address">ঠিকানা <span class="text-danger">*</span></label>
                                    <input type="text" class="form-control @error('address') is-invalid @enderror"
                                        name="address" placeholder="দাতার ঠিকানা লিখুন" value="{{ old('address') }}">
                                    @error('address')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>

                                <!-- Note -->
                                <div class="col-md-6 mb-3">
                                    <label for="note">মন্তব্য</label>
                                    <textarea class="form-control @error('note') is-invalid @enderror" name="note" placeholder="দাতার মন্তব্য লিখুন">{{ old('note') }}</textarea>
                                    @error('note')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>


                                <!-- Submit Button -->
                                <div class="row">
                                    <div class="col-md-12">
                                        <button type="submit" class="sirajganj_btn-header w-100">সাবমিট করুন</button>
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
                title: " Successful!",
                text: "{{ Session::get('success') }}",
                icon: "success",
                width: 600,
                padding: "3em",
                color: "#716add",
                background: "#fff url(https://sweetalert2.github.io/images/trees.png)",
                backdrop: `
                rgba(0,0,123,0.4)
                url("https://sweetalert2.github.io/images/nyan-cat.gif")
                left top
                no-repeat
            `
            });
        </script>
    @endif

@endpush
