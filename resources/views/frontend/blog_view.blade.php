@extends('frontend.components.front-master')

@section('metadesc')
    {{ $blog->meta_description }}
@endsection
@section('metakey')
    {{ $blog->meta_keywords }}
@endsection
@section('metaauthor')
    {{ $blog->meta_title }}
@endsection

@section('front_content')
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

        <div class="container sirajganj_single_post_container">
            <div class="row mt-3">

                <div class="col-md-9">

                    <div class="left-imgs">
                        <div class="text-center">
                            <img id="mainImage" src="{{ asset('public/images/blogs/' . $blog->main_img) }}"
                                alt="{{ $blog->alt_text }}" class="img-fluid product-image" style="max-height: 650px;">
                        </div>

                        <div class="d-flex justify-content-center mt-3 flex-wrap">
                            @if ($blog->gallry_img != null)
                                @foreach (json_decode($blog->gallry_img) as $image)
                                    <div class="thumbnail me-2">
                                        <img src="{{ asset('public/images/blogs/gallery/' . $image) }}"
                                            class="img-thumbnail" onclick="changeImage(this)" />
                                    </div>
                                @endforeach
                            @endif

                        </div>
                    </div>

                    <div class="right-text my-5">
                        @include('backend.components.alert')
                        <div class="mas_batch">
                            <div class="card">
                                <div class="card-header">
                                    <h1 class="blog_title_h1_taq" style="font-size: 28px">{{ $blog->title }}
                                    </h1>
                                    <span class="blog-date">
                                        <i class="bi bi-alarm"></i>
                                        {{ date('d M Y', strtotime($blog->created_at)) }}
                                    </span> By -
                                    <span class="blog-author">
                                        <i class="bi bi-person"></i>
                                        {{ $blog->customer->name }}
                                    </span>

                                    <span class="blog-author">
                                        <i class="bi bi-eye"></i>
                                        {{ $blog->view ?? '0' }}
                                    </span>


                                </div>
                            </div>
                            <p>
                            <div class="post_info_list">
                                @if ($blog->address)
                                    <li><i class="bi bi-geo-alt"></i> <span>{{ $blog->address }}</span></li>
                                @endif
                                @if ($blog->phone)
                                    <li><i class="bi bi-telephone"></i> <span>{{ $blog->phone }}</span></li>
                                @endif
                                @if ($blog->email)
                                    <li><i class="bi bi-envelope"></i> <span>{{ $blog->email }}</span></li>
                                @endif
                                @if ($blog->facebook_link)
                                    <li><i class="bi bi-facebook"></i> <a href="{{ $blog->facebook_link }}"
                                            target="_blank">
                                            Facebook</a></li>
                                @endif
                                @if ($blog->google_map)
                                    <li><i class="bi bi-geo-alt"></i> <a href="{{ $blog->google_map }}" target="_blank">
                                            Google map</a></li>
                                @endif
                                <p>
                                    {!! $blog->description ?? '' !!}
                                </p>

                                <div class="row single_post_buttons">
                                    <div class="col-md-6 col-12">
                                         <li> <button id="sharebtn" class="btn"> <i class="bi bi-share me-3"></i> শেয়ার করুন
                                        </button></li>
                                    </div> 
                                   
                                        <div class="col-md-6 col-12">
                                            <li> <button id="sharebtn" class="btn"  data-bs-toggle="modal" data-bs-target="#staticBackdrop"><i class="bi bi-pencil-square"></i> সংশোধন রিকোয়েস্ট
                                            </button></li>
                                        </div>
                                    </div>
                            </div>
                            </p>
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
                            <h4>রিলেটেড তথ্য </h4>

                            @if ($relatedBlogs->count() > 0)
                                @foreach ($relatedBlogs as $blog)
                                    <div class="col-md-4 col-lg-3 col-12">
                                        <div class="school_card">
                                            <div class="school_card_img">
                                                <a href="{{ route('single.post', $blog->slug) }}">
                                                    <img src="{{ $blog->main_img ? asset('public/images/blogs/' . $blog->main_img) : asset('frontend/assets/img/placeholder.jpg') }}"
                                                        class="attachment-custom-size size-custom-size img-fluid blog_image"
                                                        alt="{{ $blog->alt_text }}" decoding="async" loading="lazy" />
                                                </a>
                                            </div>
                                            <div class="mas_batch">
                                                <h2><a
                                                        href="{{ route('single.post', $blog->slug) }}">{{ $blog->title }}</a>
                                                </h2>

                                                <p>
                                                <div class="post_info_list">
                                                    <li><i class="bi bi-geo-alt"></i> <span>{{ $blog->address }}</span>
                                                    </li>
                                                    @if ($blog->phone)
                                                        
                                                    <li><i class="bi bi-telephone"></i> <span>{{ $blog->phone }}</span>
                                                    </li>
                                                    @endif
                                                    {{-- <li><i class="bi bi-envelope"></i> <span>{{ $blog->email }}</span>
                                                    </li>
                                                    <li><i class="bi bi-facebook"></i> <a href="{{ $blog->facebook_link }}"
                                                            target="_blank">
                                                            Facebook</a></li> --}}
                                                </div>
                                                </p>

                                                <div class="post_info_btn_main">
                                                    <a href="{{ route('single.post', $blog->slug) }}"
                                                        class="sirajganj_btn-primary">বিস্তারিত </a>
                                                    <a href="{{ $blog->google_map ?? '' }}" target="_blank"
                                                        class="sirajganj_btn-primary">গুগল ম্যাপ</a>
                                                </div>
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
                                <a href="{{ route('all.post') }}" class="sirajganj_btn-primary">সকল তথ্য ➜ </a>
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


    {{-- =========================== Modal Section ===========================  --}}


    <!-- Modal -->
    <div class="modal fade" id="staticBackdrop" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1"
        aria-labelledby="staticBackdropLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h1 class="modal-title fs-5" id="staticBackdropLabel">এই পোস্টটি সংশোধন এর রিকোয়েস্ট পাঠাতে নিচের ফর্ম পুরন করে সাবমিট করুন !</h1>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <form action="{{ route('SaveRevision') }}" method="post">
                        @csrf 
                        <input type="hidden" name="post_id" value="{{ $blog->id }}">
                        <div class="form-group mb-2">
                            <label for="name">আপনার নাম লেখুন <span style="font-size: 22px;color:red">*</span></label>
                            <input type="text" class="form-control" id="name" name="name" required placeholder="মোঃ হাসান ">
                        </div>
                        <div class="form-group mb-2">
                            <label for="name">আপনার ইমেইল লেখুন (অপশনাল) </label>
                            <input type="email" class="form-control" id="name" name="email" placeholder="name@gmail.com">
                        </div>
                        <div class="form-group mb-2"> 
                            <label for="number">আপনার নাম মোবাইল নাম্বার <span style="font-size: 22px;color:red">*</span></label>
                            <input type="number" class="form-control" id="number" name="number" required placeholder="017-------">
                        </div>
                        <div class="form-group mb-2">
                            <label for="text">সংশোধন মেসেজ লেখুন <span style="font-size: 22px;color:red">*</span></label>
                            <textarea class="form-control" name="text" id="text" required></textarea>
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">ক্লোজ</button>
                        <button type="submit" class="btn btn-primary">সাবমিট</button>
                    </div>
                </form>
            </div>
        </div>
    </div>

    {{-- =========================== Modal Section ===========================  --}}
     @if (Session::has('success'))
    <script>
        // Swal.fire({
        //     title: "Success!",
        //     text: "{{ Session::get('success') }}",
        //     icon: "success",
        //     confirmButtonText: "OK"
        // });
        alert();
    </script>
@endif
    <script>
        function changeImage(element) {
            var mainImage = document.getElementById('mainImage');
            mainImage.src = element.src;
        }
    </script>
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

@push('front_js')

   @if (Session::has('success'))
    <script>
        alert();
        Swal.fire({
            title: "Success!",
            text: "{{ Session::get('success') }}",
            icon: "success",
            confirmButtonText: "OK"
        });
    </script>
@endif


@endpush
