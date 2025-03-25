@extends('frontend.components.front-master')
@section('metaauthor')
    User Login 
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

                <div class="col-md-3"></div>
                <div class="col-md-6 col-12">
                    <h2 class="text-center">লগইন করুন </h2>
                    <div class="card sirajganj_user_login_card p-5 ">
                        <form method="POST" action="{{ route('CheckCustomerLogin') }}">
                            @csrf

                            <div class="form-group">
                                <label for="email">ইমেইল অ্যাড্রেস </label>
                                <input type="text" name="email"
                                    class="form-control @error('email') is-invalid @enderror" id="email"
                                    value="{{ old('email') }}" placeholder="আপনার ইমেইল অ্যাড্রেস দিন"
                                    required>
                                @error('email')
                                    <small class="text-danger">{{ $message }}</small>
                                @enderror
                            </div>

                            <div class="form-group mt-3">
                                <label for="password">আপনার পাসওয়ার্ড দিন </label>
                                <input type="password" name="password"
                                    class="form-control @error('password') is-invalid @enderror" id="password"
                                    placeholder="আপনার পাসওয়ার্ড" required>
                                @error('password')
                                    <small class="text-danger">{{ $message }}</small>
                                @enderror
                            </div>

                            <div class="form-group mt-3 text-center">
                                <button type="submit" class="sirajganj_btn-header">লগইন করুন</button>
                                <p class=" mt-2">যদি আপনার অ্যাকাউন্ট না থাকে তাহলে একটি <a
                                        href="{{ Route('CustomerRegistration') }}" class="text-success">অ্যাকাউন্ট খুলুন</a>
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
                 <div class="col-md-3"></div>

            </div>
        </div>
    </section>
@endsection
