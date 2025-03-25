@extends('frontend.components.front-master')
@section('metaauthor')
    Contact us
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
                        <h4 class="head1 text-white" style="margin-bottom: 0px;font-size:25px">যোগাযোগ করুন </h4>
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
        <div class="container py-5">
            <div class="row justify-content-center">
                <!-- যোগাযোগের তথ্য -->
                <div class="col-md-6">
                    <div class="p-4 rounded shadow text-center"
                        style="background: linear-gradient(135deg, #0066cc, #5201c7); color: white;">
                        <h3 class="mb-3 font-weight-bold">যোগাযোগ করুন</h3>
                        <p class="mb-3">
                            আমাদের সাথে যোগাযোগ করতে নিচের তথ্যগুলো ব্যবহার করুন:
                        </p>
                        <p class="mb-3">
                            <strong>ফোন:</strong>
                            <a href="tel:{{ $setting->phone ?? '' }}" class="text-warning">{{ $setting->phone ?? '' }}</a>
                        </p>
                        <p class="mb-3">
                            <strong>হোয়াটসঅ্যাপ:</strong>
                            <a href="https://wa.me/{{ $setting->whatsapp_number ?? '' }}" class="text-warning"
                                target="_blank">{{ $setting->whatsapp_number ?? '' }}</a>
                        </p>
                        <p class="mb-4">
                            <strong>ইমেইল:</strong>
                            <a href="mailto:{{ $setting->email ?? '' }}"
                                class="text-warning">{{ $setting->email ?? '' }}</a>
                        </p>
                        <a href="tel:{{ $setting->fb_link ?? '' }}" class="btn btn-warning px-4 py-2"
                            style="border-radius: 50px;">
                            ফেসবুক এ মেসেজ করুন
                        </a>
                    </div>
                </div>

                <!-- যোগাযোগ ফর্ম -->
                <div class="col-md-6">
                    <div class="p-4 rounded shadow bg-white">
                        <h4 class="text-center mb-4" style="color: #0066cc;">আমাদের মেসেজ পাঠান</h4>
                        <form action="{{ route('SaveContact') }}" method="post">
                            @csrf
                            <div class="mb-3">
                                <label for="name" class="form-label">আপনার নাম <span style="color: red;font-size:22px">*</span> </label>
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
                                <label for="number" class="form-label">আপনার ফোন নম্বর  <span style="color: red;font-size:22px">*</span> </label>
                                <input type="tel" name="number"
                                    class="form-control @error('number') is-invalid @enderror" id="number"
                                    placeholder="আপনার ফোন নম্বর লিখুন" value="{{ old('number') }}" required>
                                @error('number')
                                    <div class="invalid-feedback">{{ $message }}</div>
                                @enderror
                            </div>

                            <div class="mb-3">
                                <label for="text" class="form-label">আপনার বার্তা  <span style="color: red;font-size:22px">*</span> </label>
                                <textarea name="text" class="form-control @error('text') is-invalid @enderror" id="text" rows="5"
                                    placeholder="আপনার বার্তা লিখুন" required>{{ old('text') }}</textarea>
                                @error('text')
                                    <div class="invalid-feedback">{{ $text }}</div>
                                @enderror
                            </div>

                            <input type="hidden" name="type" value="1">

                            <div class="text-center">
                                <button type="submit" class="btn btn-primary px-5 py-2" style="border-radius: 50px;">
                                    মেসেজ পাঠান
                                </button>
                            </div>
                        </form>

                    </div>
                </div>
            </div>
        </div>

        <!-- লোডার -->
        <div id="preloader" style="display: none;">
            <div class="spinner-border text-primary" role="status">
                <span class="sr-only">লোড হচ্ছে...</span>
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
