@extends('frontend.components.front-master')

{{-- @section('metadesc')
    {{ $blog->meta_description }}
@endsection
@section('metakey')
    {{ $blog->meta_keywords }}
@endsection
@section('metaauthor')
    {{ $blog->meta_title }}
@endsection --}}

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

    <div class="singlePageBg course-home-section">

        <div class="container sirajganj_single_post_container">
            <div class="row mt-3">

                <div class="col-md-9">
                    <div class="postBody">
                        @php
                            $tools = App\Models\Blog::where('status', 1)->where('slug', 'age-calculator')->first();
                        @endphp
                        <h2 class="postBodyTitle">{{ $tools->title ?? '' }}</h2>
                    </div>
                    {{-- ========== Tools ========= --}}
                    <div class="mainTools">
                        <h3>This is tools space</h3>
                    </div>
                    {{-- ========= Tools Description =========== --}}
                    <div class="postBodyDesc">
                        <p class="postBodyDescText">{!! $tools->description ?? '' !!}</p>
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
                            <div class="head d-flex justify-content-center">
                                <!-- <h1 class="head1 text-white">সকল পোস্ট </h1> -->
                                <a href="" class="sirajganj_btn-primary">সকল তথ্য ➜ </a>
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
