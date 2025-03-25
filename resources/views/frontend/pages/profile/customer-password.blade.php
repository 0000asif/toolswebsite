@extends('frontend.components.front-master')
@section('metaauthor')
    User Password Update 
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
                                <h2 class="profile_color"> আপনার পাসওয়ার্ড আপডেট করুন
                                </h2>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="blood_form">
                    <form action="{{ Route('customer.passwordupdatestore') }}" method="POST" enctype="multipart/form-data">
                        @csrf
                        <input type="hidden" name="customer_id" value="{{ auth()->guard('customer')->id() }}">
                        <div class="container sirajganj_customer_profile_container">
                            <div class="row mb-3">
                                <!-- Current Password -->
                                <div class="form-group">
                                    <label for="current_password">Current Password <span
                                            class="text-danger">*</span></label>
                                    <input type="password" name="current_password" id="current_password"
                                        value="{{ old('current_password') }}"
                                        class="form-control @error('current_password') is-invalid @enderror"
                                        placeholder="Enter your current password" required>
                                    @error('current_password')
                                        <small class="text-danger">{{ $message }}</small>
                                    @enderror
                                </div>

                                <!-- New Password -->
                                <div class="form-group mt-3">
                                    <label for="new_password">New Password <span class="text-danger">*</span></label>
                                    <input type="password" name="new_password" id="new_password"
                                        class="form-control @error('new_password') is-invalid @enderror"
                                        placeholder="Enter a new password" required>
                                    @error('new_password')
                                        <small class="text-danger">{{ $message }}</small>
                                    @enderror
                                </div>

                                <!-- Confirm New Password -->
                                <div class="form-group mt-3">
                                    <label for="new_password_confirmation">Confirm New Password <span
                                            class="text-danger">*</span></label>
                                    <input type="password" name="new_password_confirmation" id="new_password_confirmation"
                                        class="form-control @error('new_password_confirmation') is-invalid @enderror"
                                        placeholder="Confirm your new password" required>
                                    @error('new_password_confirmation')
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
            });
        </script>
    @endif
@endpush
