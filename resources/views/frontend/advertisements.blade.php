@extends('frontend.components.front-master')
@section('metaauthor')
    Advertisements
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
    <div class="mas_filter all-product" style="background: #00db89;padding:30px 10px">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="head d-flex justify-content-center">
                        <h4 class="head1 text-white" style="margin-bottom: 0px;font-size:25px">বিজ্ঞাপন </h4>
                    </div>
                    {{-- <div class="category_list">
                        <ul class="list-inline category_list_items">
                            @foreach ($sub_cat as $sub_cat)
                                <li class="list-inline-item category_item_wrapper mb-3">
                                    <a href="" class="category_item">{{ $sub_cat->name ?? '' }}</a>
                                </li>
                            @endforeach
                        </ul>
                    </div> --}}
                </div>
            </div>
        </div>
    </div>
    @php
        $setting = App\Models\Setting::first();
    @endphp


    <div class="course-home-section">
        <div class="container">
            <span id="allInfoContent">
                <div class="container my-4">
                    <div class="row py-3">
                        <!-- Advertisement Section -->
                        <div class="col-md-12 mb-4">
                            <div class="p-4 text-center rounded shadow"
                                style="background: linear-gradient(135deg, #007bff, #6610f2); color: #fff;">
                                <h4 class="mb-3">📢 বিজ্ঞাপন প্রকাশ করুন!</h4>
                                <p class="mb-4">
                                    আপনার বিজ্ঞাপন প্রকাশ করতে যোগাযোগ করুন:
                                </p>

                                <p class="mb-2">
                                    WhatsApp:
                                    <a href="https://wa.me/{{ $setting->whatsapp_number ?? '' }}" class="text-warning"
                                        target="_blank">
                                        {{ $setting->whatsapp_number ?? '' }}
                                    </a>
                                </p>
                                <p class="mb-4">
                                    Email:
                                    <a href="mailto:{{ $setting->email ?? '' }}" class="text-warning">
                                        {{ $setting->email ?? '' }}
                                    </a>
                                </p>
                                <a href="tel:{{ $setting->phone ?? '' }}" class="btn btn-warning px-4 py-2"
                                    style="border-radius: 50px;">
                                    কল করুন এখনই
                                </a>
                            </div>
                        </div>
                    </div>

                    <!-- Contact Form Section -->
                    <div class="row">
                        <div class="col-md-12">
                            <div class="p-4 rounded shadow bg-white">
                                <h4 class="mb-4 text-center" style="color: #007bff;">যোগাযোগ ফর্ম</h4>
                                <form action="{{ route('contact.store') }}" method="post">
                                    @csrf
                                    <div class="mb-3">
                                        <label for="name" class="form-label">আপনার নাম <span
                                                style="color: red;font-size:22px">*</span> </label>
                                        <input type="text" name="name"
                                            class="form-control @error('name') is-invalid @enderror" id="name"
                                            placeholder="আপনার নাম লিখুন" value="{{ old('name') }}" required>
                                        @error('name')
                                            <div class="invalid-feedback">{{ $message }}</div>
                                        @enderror
                                    </div>

                                    <div class="mb-3">
                                        <label for="email" class="form-label">আপনার ইমেইল (অপশনাল)</label>
                                        <input type="email" name="email"
                                            class="form-control @error('email') is-invalid @enderror" id="email"
                                            placeholder="আপনার ইমেইল লিখুন" value="{{ old('email') }}">
                                        @error('email')
                                            <div class="invalid-feedback">{{ $message }}</div>
                                        @enderror
                                    </div>

                                    <div class="mb-3">
                                        <label for="number" class="form-label">আপনার ফোন নম্বর <span
                                                style="color: red;font-size:22px">*</span></label>
                                        <input type="tel" name="number"
                                            class="form-control @error('number') is-invalid @enderror" id="number"
                                            placeholder="আপনার ফোন নম্বর লিখুন" value="{{ old('number') }}" required>
                                        @error('number')
                                            <div class="invalid-feedback">{{ $message }}</div>
                                        @enderror
                                    </div>

                                    <div class="mb-3">
                                        <label for="text" class="form-label">আপনার বার্তা <span
                                                style="color: red;font-size:22px">*</span></label>
                                        <textarea name="text" class="form-control @error('text') is-invalid @enderror" id="text" rows="5"
                                            placeholder="আপনার বার্তা লিখুন" required>{{ old('text') }}</textarea>
                                        @error('text')
                                            <div class="invalid-feedback">{{ $message }}</div> <!-- FIXED THIS LINE -->
                                        @enderror
                                    </div>

                                    <input type="hidden" name="type" value="2">

                                    <div class="text-center">
                                        <button type="submit" class="btn btn-primary px-5 py-2"
                                            style="border-radius: 50px;">
                                            মেসেজ পাঠান
                                        </button>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>

                </div>
            </span>
        </div>

        <div id="preloader" style="display: none;">
            <div class="spinner-border text-primary" role="status">
                <span class="sr-only">Loading...</span>
            </div>
        </div>
    </div>


    </div>
@endsection

@push('front_js')

    @if (Session::has('success'))
        <script>
            Swal.fire({
                title: "Congratulations !",
                text: "{{ Session::get('success') }}",
                icon: "success",
            });
        </script>
    @endif

@endpush
