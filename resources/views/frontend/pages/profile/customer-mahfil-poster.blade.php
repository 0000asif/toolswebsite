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
                                <h2 class="profile_color">মাহফিলের পোষ্টার যুক্ত করুন
                                </h2>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="blood_form mb-3">
                    <form action="{{ Route('mahfil.store') }}" method="POST" enctype="multipart/form-data">
                        @csrf
                        <input type="hidden" name="customer_id" value="{{ auth()->guard('customer')->id() }}">
                        <div class="container sirajganj_customer_profile_container">
                            <div class="row mb-3 sirajganj_customer_profile_row">
                                <!-- Address -->
                                <div class="form-group mb-4 col-md-6">
                                    <label for="address">Address <span class="text-danger">*</span></label>
                                    <input required id="address" name="address" type="text"
                                        class="form-control @error('address') is-invalid @enderror"
                                        placeholder="Enter Address" value="{{ old('address') }}">
                                    @error('address')
                                        <span class="text-danger">{{ $message }}</span>
                                    @enderror
                                </div>

                                <!-- Date -->
                                <div class="form-group mb-4 col-md-6">
                                    <label for="date">Date <span class="text-danger">*</span></label>
                                    <input required id="date" name="date" type="date"
                                        class="form-control @error('date') is-invalid @enderror"
                                        value="{{ old('date') }}">
                                    @error('date')
                                        <span class="text-danger">{{ $message }}</span>
                                    @enderror
                                </div>

                                <!-- Image -->
                                <div class="form-group mb-4 col-md-6">
                                    <label for="img">Image</label>
                                    <input id="img" name="img" type="file"
                                        class="form-control @error('img') is-invalid @enderror">
                                    @error('img')
                                        <span class="text-danger">{{ $message }}</span>
                                    @enderror
                                    <div class="mt-3">
                                        <img id="imagePreview" src="#" alt="Image Preview"
                                            style="display: none; max-height: 200px;">
                                    </div>
                                </div>

                                <!-- Status -->
                                <div class="form-group mb-4 col-md-6 d-none">
                                    <label for="status">Status <span class="text-danger">*</span></label>
                                    <select required id="status" name="status"
                                        class="form-control @error('status') is-invalid @enderror">
                                        <option value="">Select Status</option>
                                        <option value="1" {{ old('status', '1') == '1' ? 'selected' : '' }}>Active
                                        </option>
                                        <option value="0" {{ old('status') == '0' ? 'selected' : '' }}>
                                            Inactive</option>
                                    </select>
                                    @error('status')
                                        <span class="text-danger">{{ $message }}</span>
                                    @enderror
                                </div>
                            </div>
                            <!-- Submit Button -->
                            <div class="form-group">
                                <button type="submit" class="btn btn-primary">Submit</button>
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
