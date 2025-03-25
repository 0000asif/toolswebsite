@extends('frontend.components.front-master')
@section('metaauthor')
    Mobile Application
@endsection
@section('metadesc')
    {{ $data->meta_description }}
@endsection
@section('metakey')
    {{ $data->meta_keywords }}
@endsection
@section('metaauthor')
    {{ $data->meta_title }}
@endsection
@section('front_content')
    <style>
        .app-logo {
            width: 150px;
            height: 150px;
        }

        .app-title {
            font-size: 1.8rem;
            font-weight: bold;
        }

        .rating {
            color: #ffcc00;
        }

        .btn-install {
            background-color: #25d366;
            color: white;
        }

        .feature-box img {
            max-width: 100%;
            border-radius: 10px;
        }

        .star-rating {
            direction: rtl;
            display: inline-flex;
            font-size: 25px;
        }

        .star-rating input[type="radio"] {
            display: none;
        }

        .star-rating label {
            color: #ddd;
            cursor: pointer;
            transition: color 0.2s;
        }

        .star-rating input[type="radio"]:checked~label {
            color: #ffc107;
        }

        .section-title {
            font-size: 24px;
            font-weight: 700;
            color: #343a40;
        }

        .card {
            transition: transform 0.3s, box-shadow 0.3s;
        }

        .card:hover {
            transform: translateY(-10px);
            box-shadow: 0 10px 20px rgba(0, 0, 0, 0.1);
        }

        .rating {
            font-size: 18px;
        }

        .text-primary {
            color: #007bff !important;
        }

        .text-muted {
            color: #6c757d !important;
        }

        .star-rating label:hover,
        .star-rating label:hover~label {
            color: #ffc107;
        }

        .footer-links a {
            color: #6c757d;
            text-decoration: none;
        }

        .apps_review_container {
            background: linear-gradient(45deg, #cfd7d4, transparent);
        }

        .footer-links a:hover {
            text-decoration: underline;
        }

        @media (max-width: 768px) {
            .app-title {
                font-size: 1.5rem;
            }

            .btn-install {
                width: 100%;
            }
        }
    </style>
    <div class="mas_filter all-product" style="background: #00db0b;padding:30px 10px">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="head d-flex justify-content-center">
                        <h4 class="head1 text-white" style="margin-bottom: 0px;font-size:25px">আমদের মোবাইল অ্যাপ <span
                                class="text-dark"></span></h4>
                    </div>

                </div>
            </div>
        </div>
    </div>

    <div class="course-home-section">
        <div class="container">
            <div class="row mt-3">

                <div class="container py-4">
                    <!-- App Header -->
                    <div class="row align-items-center mb-4">
                        <div class="col-12 col-md-2 text-center">
                            <img src="{{ asset('image/Apps/' . $data->apps_logo) }}" alt="App Logo" class="app-logo">
                        </div>
                        <div class="col-12 col-md-6">
                            <h1 class="app-title">{{ $data->title ?? '' }} </h1>
                            <p class="mb-0"><a href="{{ $data->author_url ?? '' }}">{{ $data->author_name ?? '' }}</a></p>
                            <div class="d-flex align-items-center">
                                <span class="rating me-2">⭐⭐⭐⭐</span>
                                <span>89 + reviews • {{ $data->view ?? '' }}+ Downloads • Rated for 4.5+</span>
                            </div>
                        </div>
                        <div class="col-12 col-md-4 text-end">
                            <a href="{{ route('download.apk', ['filename' => $data->apps]) }}"
                                class="btn btn-install btn-lg px-4 mt-3 mt-md-0">
                                <i class="bi bi-download"></i> ডাউনলোড করুন
                            </a>
                            <a id="apps" class="btn btn-primary btn-install btn-lg px-4 mt-3 mt-md-0">
                                <i class="bi bi-share"></i> শেয়ার করুন
                            </a>

                        </div>


                    </div>

                    <hr>

                    <!-- About Section -->
                    <div class="row">
                        <div class="col-md-12">
                            <h2>অ্যাপ সম্পর্কে</h2>
                            <p>{!! $data->text ?? '' !!}</p>
                            <div class="row feature-box g-3">
                                <div class="col-6 col-md-3">
                                    <img src="{{ asset('public/image/Apps/' . $data->img1) }}" alt="Feature 1">
                                </div>
                                <div class="col-6 col-md-3">
                                    <img src="{{ asset('public/image/Apps/' . $data->img2) }}" alt="Feature 2">
                                </div>
                                <div class="col-6 col-md-3">
                                    <img src="{{ asset('public/image/Apps/' . $data->img3) }}" alt="Feature 3">
                                </div>
                                <div class="col-6 col-md-3">
                                    <img src="{{ asset('public/image/Apps/' . $data->img4) }}" alt="Feature 4">
                                </div>
                            </div>
                        </div>

                    </div>

                </div>
                <div class="apps_review_section">
                    <div class="card">
                        <div class="card-header">অ্যাপ এর রিভিউ দিতে নিচের ফর্মটি পূরন করে সাবমিট দিন !</div>
                        <div class="card-body sirajganj_customer_profile_container">
                            <form action="{{ route('saveappsreview') }}" method="post">
                                @csrf
                                <div class="row sirajganj_customer_profile_row">
                                    <div class="col-md-6 col-12">
                                        <div class="form-group review_form">
                                            <label for="name">আপনার নাম লেখুন <span
                                                    style="color: red;font-size:20px">*</span></label>
                                            <input required type="text"
                                                class="form-control @error('name') is-invalid @enderror" id="name"
                                                name="name" value="{{ old('name') }}" placeholder="মোঃ আব্দুল আলিম">
                                            @error('name')
                                                <div class="invalid-feedback">{{ $message }}</div>
                                            @enderror
                                        </div>
                                    </div>
                                    <div class="col-md-6 col-12">
                                        <div class="form-group review_form">
                                            <label for="email">আপনার ইমেইল লেখুন <span
                                                    style="color: red;font-size:20px">*</span></label>
                                            <input required type="email"
                                                class="form-control @error('email') is-invalid @enderror" id="email"
                                                name="email" value="{{ old('email') }}"
                                                placeholder="abdulalim@gamil.com">
                                            @error('email')
                                                <div class="invalid-feedback">{{ $message }}</div>
                                            @enderror
                                        </div>
                                    </div>
                                    <div class="col-md-6 col-12">
                                        <div class="form-group review_form">
                                            <label for="phone">আপনার মোবাইল নাম্বার লেখুন (অপশনাল)</label>
                                            <input type="text" class="form-control @error('phone') is-invalid @enderror"
                                                id="phone" name="phone" value="{{ old('phone') }}"
                                                placeholder="01754-000000">
                                            @error('phone')
                                                <div class="invalid-feedback">{{ $message }}</div>
                                            @enderror
                                        </div>
                                    </div>
                                    <div class="col-md-6 col-12">
                                        <div class="form-group review_form">
                                            <label for="rating">রেটিং দিন <span
                                                    style="color: red;font-size:20px">*</span></label>
                                            <div class="star-rating">
                                                @for ($i = 5; $i >= 1; $i--)
                                                    <input type="radio" id="star{{ $i }}" name="rating"
                                                        value="{{ $i }}"
                                                        class="star-input @error('rating') is-invalid @enderror"
                                                        {{ old('rating') == $i ? 'checked' : '' }}>
                                                    <label for="star{{ $i }}" class="star-label">&#9733;</label>
                                                @endfor
                                            </div>
                                            @error('rating')
                                                <div class="invalid-feedback">{{ $message }}</div>
                                            @enderror
                                        </div>
                                    </div>

                                    <div class="col-md-12 col-12">
                                        <div class="form-group review_form">
                                            <label for="review">আপনার রিভিউ/মতামত/অভিযোগ লেখুন <span
                                                    style="color: red;font-size:20px">*</span></label>
                                            <textarea required name="review" id="review" class="form-control @error('review') is-invalid @enderror"
                                                placeholder="আসসালামু আলাইকুম আমি মোঃ আব্দুল আলিম বলছি সিরাজগঞ্জ থেকে .........">{{ old('review') }}</textarea>
                                            @error('review')
                                                <div class="invalid-feedback">{{ $message }}</div>
                                            @enderror
                                        </div>
                                    </div>
                                    <div class="col-md-6 col-12">
                                        <div class="form-group review_form">
                                            <button class="btn btn-primary" type="submit">সাবমিট করুন</button>
                                        </div>
                                    </div>
                                </div>

                            </form>
                        </div>
                    </div>

                </div>
            </div>

        </div>
        <div class="apps_review_container">
            <div class="container mt-5 py-3">
                <h5 class="section-title text-center mb-4">মোবাইল অ্যাপের সকল রিভিউ </h5>
                <div class="row">
                    @foreach ($reviews as $review)
                        <div class="col-md-6 col-lg-6 col-12">
                            <div class="card shadow-sm border-0 h-100">
                                <div class="card-body d-flex flex-column justify-content-between">
                                    <div>
                                        <h6 class="card-title text-primary fw-bold">{{ $review->name ?? 'Abdul Alim' }}
                                        </h6>
                                        <div class="d-flex align-items-center mt-3">
                                            <span class="rating me-2 text-warning">
                                                @for ($i = 1; $i <= $review->rating; $i++)
                                                    &#9733;
                                                @endfor
                                                @for ($i = $review->rating + 1; $i <= 5; $i++)
                                                    &#9734;
                                                @endfor
                                            </span>
                                            <small
                                                class="text-muted ms-2">{{ $review->created_at->format('F j, Y') }}</small>
                                        </div>
                                        <p class="card-text text-muted">
                                            {{ $review->review }}
                                        </p>
                                    </div>

                                </div>
                            </div>
                        </div>
                    @endforeach
                </div>
            </div>
        </div>

    </div>

    <script>
        document.getElementById('apps').addEventListener('click', async () => {
            const shareData = {
                title: document.title,
                text: 'Check out this awesome website!',
                url: window.location.href
            };

            if (navigator.share) {
                try {
                    await navigator.share(shareData);
                    console.log('Content shared a successfully');
                } catch (err) {
                    console.error('Error sharing:', err);
                }
            } else {
                // Fallback: Copy the link to clipboard
                copyToClipboard(shareData.url);
                alert('Link copied to clipboard!');
            }
        });

        function copyToClipboard(text) {
            const textarea = document.createElement('textarea');
            textarea.value = text;
            document.body.appendChild(textarea);
            textarea.select();
            document.execCommand('copy');
            document.body.removeChild(textarea);
        }
    </script>
@endsection
