@extends('frontend.components.front-master')
@section('metaauthor')
    User Registration 
@endsection
@section('metadesc')
    {{ $condition->meta_description }}
@endsection
@section('metakey')
    {{ $condition->meta_keywords }}
@endsection
@section('metaauthor')
    {{ $condition->meta_title }}
@endsection
@section('front_content')
    <section class="thinking-section">
        <div class="container sirajganj_user_login">

            <div class="row">

                <div class="col-md-5 col-12">
                    <h2 class="text-center">রেজিস্ট্রেশন করুন </h2>
                    <div class="card p-5 sirajganj_user_login_card">
                        <form method="POST" action="{{ route('CheckCustomerRegistration') }}" enctype="multipart/form-data">
                            @csrf
                            <!-- Name -->
                            <div class="form-group">
                                <label for="name">নাম <span class="text-danger">*</span></label>
                                <input required type="text" name="name" id="name"
                                    class="form-control @error('name') is-invalid @enderror" placeholder="আপনার নাম লিখুন"
                                    value="{{ old('name') }}">
                                @error('name')
                                    <small class="text-danger">{{ $message }}</small>
                                @enderror
                            </div>

                            <!-- Email -->
                            <div class="form-group mt-3">
                                <label for="email">ইমেইল অ্যাড্রেস</label>
                                <input type="email" name="email" id="email" required
                                    class="form-control @error('email') is-invalid @enderror"
                                    placeholder="আপনার ইমেইল অ্যাড্রেস লিখুন" value="{{ old('email') }}">
                                @error('email')
                                    <small class="text-danger">{{ $message }}</small>
                                @enderror
                            </div>

                            <!-- Phone -->
                            <div class="form-group mt-3">
                                <label for="phone">ফোন নাম্বার <span class="text-danger">*</span></label>
                                <input type="text" name="phone" id="phone"
                                    class="form-control @error('phone') is-invalid @enderror"
                                    placeholder="আপনার ফোন নাম্বার লিখুন" value="{{ old('phone') }}">
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
                                    <img id="imagePreview" src="#" alt="ছবির পূর্বরূপ"
                                        style="display: none; max-height: 200px;">
                                </div>
                                @error('image')
                                    <small class="text-danger">{{ $message }}</small>
                                @enderror
                            </div>

                            <!-- Password -->
                            <div class="form-group mt-3">
                                <label for="password">পাসওয়ার্ড <span class="text-danger">*</span></label>
                                <input required type="password" name="password" id="password"
                                    class="form-control @error('password') is-invalid @enderror"
                                    placeholder="একটি সুরক্ষিত পাসওয়ার্ড দিন">
                                @error('password')
                                    <small class="text-danger">{{ $message }}</small>
                                @enderror
                            </div>

                            <!-- Confirm Password -->
                            <div class="form-group mt-3">
                                <label for="password_confirmation">পাসওয়ার্ড নিশ্চিত করুন <span
                                        class="text-danger">*</span></label>
                                <input required type="password" name="password_confirmation" id="password_confirmation"
                                    class="form-control @error('password_confirmation') is-invalid @enderror"
                                    placeholder="পাসওয়ার্ড নিশ্চিত করুন">
                                @error('password_confirmation')
                                    <small class="text-danger">{{ $message }}</small>
                                @enderror
                            </div>

                            <!-- Address -->
                            {{-- <div class="form-group mt-3">
                                <label for="address">ঠিকানা (অপশনাল)</label>
                                <textarea name="address" id="address" class="form-control @error('address') is-invalid @enderror"
                                    placeholder="আপনার ঠিকানা লিখুন">{{ old('address') }}</textarea>
                                @error('address')
                                    <small class="text-danger">{{ $message }}</small>
                                @enderror
                            </div> --}}


                            <!-- Submit Button -->
                            <div class="form-group mt-3 text-center">
                                <button type="submit" class="btn btn-primary">জমা দিন</button>
                                <p class=" mt-2">যদি আপনার অ্যাকাউন্ট থাকে তাহলে এখনি <a
                                        href="{{ Route('CustomerLogin') }}" class="text-success">লগইন
                                        করুন</a>
                                </p>
                            </div>
                        </form>


                        <!-- Success message -->
                        @if (session('success'))
                            <div class="alert alert-success mt-3">
                                {{ session('success') }}
                            </div>
                        @endif

                    </div>

                </div>

                <div class="col-md-2"></div>
                <div class="col-md-5">
                    <h4> ডাউনলোড করুন আমাদের <span><a href="{{ route('MobileApps') }}" class="text-danger">মোবাইল অ্যাপ
                            </a></span></h4>
                    <div class="logo">
                        <img width="400" alt="" class="img-fluid"
                            src="{{ asset('frontend/assets/img/apps1.jpg') }}" />
                    </div>
                </div>

                <div class="col-md-1"></div>
            </div>
        </div>
    </section>
@endsection
