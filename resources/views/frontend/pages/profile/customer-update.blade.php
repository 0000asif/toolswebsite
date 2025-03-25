@extends('frontend.components.front-master')
@section('metaauthor')
    Update Profile
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
                                <h2 class="profile_color">রক্ত দানকারী যুক্ত করতে নিচের ফর্মটি পূরণ করুন !
                                </h2>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="blood_form">
                    <form action="{{ Route('customer.updatestore') }}" method="POST" enctype="multipart/form-data">
                        @csrf
                        <input type="hidden" name="customer_id" value="{{ auth()->guard('customer')->id() }}">
                        <div class="container sirajganj_customer_profile_container">
                            <div class="row mb-3 sirajganj_customer_profile_row"><!-- Name -->
                                <div class="form-group">
                                    <label for="name">নাম <span class="text-danger">*</span></label>
                                    <input required type="text" name="name" id="name"
                                        class="form-control @error('name') is-invalid @enderror"
                                        placeholder="আপনার নাম লিখুন" value="{{ old('name', $customer->name) }}">
                                    @error('name')
                                        <small class="text-danger">{{ $message }}</small>
                                    @enderror
                                </div>

                                <!-- Email -->
                                <div class="form-group mt-3">
                                    <label for="email">ইমেইল অ্যাড্রেস</label>
                                    <input type="email" name="email" readonly disabled id="email"
                                        class="form-control @error('email') is-invalid @enderror"
                                        placeholder="আপনার ইমেইল অ্যাড্রেস লিখুন"
                                        value="{{ old('email', $customer->email) }}">
                                    @error('email')
                                        <small class="text-danger">{{ $message }}</small>
                                    @enderror
                                </div>

                                <!-- Phone -->
                                <div class="form-group mt-3">
                                    <label for="phone">ফোন নাম্বার <span class="text-danger">*</span></label>
                                    <input required type="text" name="phone" id="phone"
                                        class="form-control @error('phone') is-invalid @enderror"
                                        placeholder="আপনার ফোন নাম্বার লিখুন" value="{{ old('phone', $customer->phone) }}">
                                    @error('phone')
                                        <small class="text-danger">{{ $message }}</small>
                                    @enderror
                                </div>

                                <!-- Image -->
                                <div class="form-group mt-3">
                                    <label for="image">ছবি আপলোড করুন (অপশনাল)</label>
                                    <input type="file" name="image" id="image"
                                        class="form-control @error('image') is-invalid @enderror">
                                    <div class="mt-3">
                                        @if ($customer->image)
                                            <img id="imagePreview" src="{{ asset('images/customers/' . $customer->image) }}"
                                                alt="ছবির পূর্বরূপ" style="max-height: 200px;">
                                        @else
                                            <img id="imagePreview" src="#" alt="ছবির পূর্বরূপ"
                                                style="display: none; max-height: 200px;">
                                        @endif
                                    </div>
                                    @error('image')
                                        <small class="text-danger">{{ $message }}</small>
                                    @enderror
                                </div>

                                <!-- Address -->
                                <div class="form-group mt-3">
                                    <label for="address">ঠিকানা</label>
                                    <textarea name="address" id="address" class="form-control @error('address') is-invalid @enderror"
                                        placeholder="আপনার ঠিকানা লিখুন">{{ old('address', $customer->address) }}</textarea>
                                    @error('address')
                                        <small class="text-danger">{{ $message }}</small>
                                    @enderror
                                </div>

                                <!-- Submit Button -->
                                <div class="row">
                                    <div class="col-md-12">
                                        <button type="submit" class="sirajganj_btn-header w-100">আপডেট করুন </button>
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
                color: "#716add",
                background: "#fff url(https://sweetalert2.github.io/images/trees.png)",

            });
        </script>
    @endif

    <script>
        $(document).ready(function() {
            $('#image').on('change', function() {
                const imageInput = this;
                const imagePreview = $('#imagePreview');

                // Check if a file is selected
                if (imageInput.files && imageInput.files[0]) {
                    const reader = new FileReader();

                    // Set the image preview source when the file is loaded
                    reader.onload = function(e) {
                        imagePreview.attr('src', e.target.result).show(); // Update src and show preview
                    };

                    // Read the selected image file
                    reader.readAsDataURL(imageInput.files[0]);
                } else {
                    // If no file is selected, hide the preview
                    imagePreview.hide().attr('src', '#');
                }
            });
        });
    </script>


@endpush
