@extends('frontend.components.front-master')
@section('metadesc')
    {{ $post->meta_description }}
@endsection
@section('metakey')
    {{ $post->meta_keywords }}
@endsection
@section('metaauthor')
    {{ $post->meta_title }}
@endsection
@section('front_content')
    @php
        $setting = App\Models\Setting::first();
    @endphp
    {{-- <meta name="description" content=""> --}}

    <style>
        .accordion {
            background-color: #333;
            color: #f1f1f1;
            padding: 20px;
            border-radius: 8px;
            max-width: 600px;
            margin: auto;
        }

        .accordion-item {
            border-bottom: 1px solid #444;
            padding: 15px 0;
        }

        .accordion-header {
            display: flex;
            justify-content: space-between;
            cursor: pointer;
            font-weight: bold;
            font-size: 1.2em;
        }

        .toggle-icon {
            font-size: 1.5em;
            color: #f39c12;
            transition: transform 0.3s;
        }

        .accordion-content {
            display: none;
            margin-top: 10px;
            font-size: 1em;
            color: #ddd;
            line-height: 1.6;
        }

        .accordion-content p {
            margin: 0;
        }

        .project-container {
            max-width: 1200px;
            margin: 50px auto;
            padding: 30px;
            background-color: #fff;
            border-radius: 15px;
            box-shadow: 0 6px 16px rgba(0, 0, 0, 0.2);
            transition: 0.3s;
        }

        .project-title {
            font-size: 2rem;
            font-weight: bold;
            margin-bottom: 20px;
            color: #333;
        }

        .project-title a {
            text-decoration: none;
            color: inherit;
        }

        .project-title a:hover {
            color: #007bff;
        }

        .details-row {
            display: flex;
            justify-content: space-between;
            margin-bottom: 10px;
        }

        .details-row strong {
            font-weight: 600;
        }

        .badge-custom {
            background-color: #007bff;
            color: white;
            font-size: 0.9rem;
            padding: 5px 10px;
            border-radius: 20px;
            margin-left: 5px;
        }

        .project-info {
            margin-top: 20px;
        }

        .icon {
            margin-right: 8px;
            color: #007bff;
        }

        .additional-info {
            margin-top: 20px;
            padding-top: 15px;
            border-top: 1px solid #ddd;
        }

        .additional-info p {
            display: flex;
            align-items: center;
            margin-bottom: 8px;
            color: #555;
        }

        .additional-info i {
            margin-right: 10px;
            color: #ff6347;
        }

        .product-image {
            max-width: 100%;
            height: auto;
        }

        .thumbnail img {
            cursor: pointer;
            border: 2px solid transparent;
        }

        .thumbnail img:hover {
            border-color: #ff5722;
        }

        .img-thumbnail {
            width: 180px;
        }

        @media (max-width: 991px) {
            .img-thumbnail {
                width: 120px;
            }
        }

        @media (max-width: 761px) {
            .img-thumbnail {
                width: 100px;
            }
        }

        @media (max-width: 556px) {
            .img-thumbnail {
                width: 80px;
            }
        }
    </style>

    <div class="course-home-section">

        <div class="container sirajganj_single_blog_container">
            <div class="row mt-3">

                <div class="col-md-9">

                    <div class="left-imgs">
                        <div class="text-center">
                            {{-- <img id="mainImage" src="{{ asset('image/post/' . $post->img) }}" alt="Product Image"
                                class="img-fluid product-image" style="max-height: 650px;"> --}}
                            <img src="{{ $post->img ? asset('public/image/post/' . $post->img) : asset('public/frontend/assets/img/placeholder.jpg') }}"
                                class="attachment-custom-size size-custom-size img-fluid" alt="{{ $post->alt_text }}"
                                decoding="async" loading="lazy" />
                        </div>

                        {{-- <div class="d-flex justify-content-center mt-3 flex-wrap">
                            @foreach (json_decode($blog->gellery_img) as $image)
                                <div class="thumbnail me-2">
                                    <img src="{{ asset('public/image/post/gallery/' . $image) }}" class="img-thumbnail"
                                        onclick="changeImage(this)" />
                                </div>
                            @endforeach
                        </div> --}}
                    </div>

                    <div class="right-text my-5">
                        <div class="mas_batch">
                            <div class="card">
                                <div class="card-header">
                                    <h1 class="blog_title_h1_taq" style="font-size: 28px"><a
                                            href="#">{{ $post->title }}</a>
                                    </h1>
                                    <span class="blog-date">
                                        <i class="bi bi-alarm"></i>
                                        {{ date('d M Y', strtotime($post->created_at)) }}
                                    </span> By -
                                    <span class="blog-author">
                                        <i class="bi bi-person"></i>
                                        {{ $post->user->name }}
                                    </span>

                                    <span class="blog-author">
                                        <i class="bi bi-eye"></i>
                                        {{ $post->view ?? '0' }}
                                    </span>
                                </div>
                            </div>
                            <p>
                            <div class="post_info_list">
                                <p>{!! $post->content !!}</p>
                            </div>
                            </p>
                            <li style="list-style: none"><button id="sharebtn" class="btn">
                                    <i class="bi bi-share me-3"></i>
                                    শেয়ার করুন
                                </button></li>
                        </div>
                    </div>
                </div>

                <div class="col-md-3">
                    @include('frontend.components.home_sidebar')
                </div>
            </div>

        </div>

        <div class="course-home-section related_post">

            <div class="container sirajganj_related_view">

                <span id="allInfoContent">
                    <div class="container my-4 sirajganj_related_container">
                        <div class="row py-3 sirajganj_related_row">
                            <h4>রিলেটেড ব্লগ </h4>

                            @if ($relatedPosts->count() > 0)
                                @foreach ($relatedPosts as $post)
                                    <div class="col-md-4 col-lg-3 col-12">
                                        <div class="school_card">
                                            <div class="school_card_img">
                                                <div class="post_card_header">

                                                    <div class="post_card_view">
                                                        <span class="post_card_view_icon"><i class="bi bi-eye"></i>
                                                            <span>{{ $post->view ?? '0' }}</span></span>
                                                    </div>
                                                </div>
                                                {{-- <a href="{{ route('blog.view', $post->slug) }}">
                                                    <img width="400" height="500"
                                                        src="{{ asset('public/image/post/' . $post->img) }}"
                                                        class="attachment-custom-size size-custom-size" alt=""
                                                        decoding="async" />
                                                </a> --}}
                                                <div class="school_card_img">
                                                    <a href="{{ Route('blog.view', $post->slug) }}">
                                                        <img src="{{ $post->img ? asset('public/image/post/' . $post->img) : asset('public/frontend/assets/img/placeholder.jpg') }}"
                                                            class="attachment-custom-size size-custom-size img-fluid blog_image"
                                                            alt="{{ $post->alt_text }}" decoding="async" loading="lazy" />
                                                    </a>
                                                </div>
                                            </div>
                                            <div class="mas_batch">
                                                <h2><a
                                                        href="{{ route('blog.view', $post->slug) }}">{{ $post->title }}</a>
                                                </h2>

                                                <p>
                                                <div class="post_info_list">
                                                    <p>{!! Str::limit($post->content, 150) !!}</p>
                                                </div>
                                                </p>

                                                {{-- <div class="post_info_btn_main">
                                                    <a href="{{ route('blog.view', $post->slug) }}"
                                                        class="sirajganj_btn-primary">বিস্তারিত </a>
                                                    <a href="{{ $post->google_map ?? '' }}" target="_blank"
                                                        class="sirajganj_btn-primary">গুগল ম্যাপ</a>
                                                </div> --}}
                                            </div>
                                        </div>
                                    </div>
                                @endforeach
                            @else
                                <div class="col-md-12">
                                    <div class="alert alert-danger">No data found</div>
                                </div>
                            @endif
                            <div class="head d-flex justify-content-center">
                                <!-- <h1 class="head1 text-white">সকল পোস্ট </h1> -->
                                <a href="{{ route('blogs') }}" class="sirajganj_btn-primary">সকল ব্লগ ➜ </a>
                            </div>
                        </div>

                    </div>

                </span>

                <div id="preloader" style="display: none;">
                    <div class="spinner-border text-primary" role="status">
                        <span class="sr-only">Loading...</span>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <script>
        document.getElementById('sharebtn').addEventListener('click', async () => {
            const shareData = {
                title: document.title,
                text: 'Check out this awesome website!',
                url: window.location.href
            };

            if (navigator.share) {
                try {
                    await navigator.share(shareData);
                    console.log('Content shared successfully');
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
@push('js')
    <script>
        function changeImage(element) {
            var mainImage = document.getElementById('mainImage');
            mainImage.src = element.src;
        }
    </script>
@endpush
