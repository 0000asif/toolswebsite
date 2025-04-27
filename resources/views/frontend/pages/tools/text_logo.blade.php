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
        .lds-ripple {
            display: inline-block;
            position: relative;
            width: 80px;
            height: 80px;
        }

        .lds-ripple div {
            position: absolute;
            border: 4px solid #fff;
            opacity: 1;
            border-radius: 50%;
            animation: lds-ripple 1.2s cubic-bezier(0, 0.2, 0.8, 1) infinite;
        }

        .lds-ripple div:nth-child(2) {
            animation-delay: -0.5s;
        }

        @keyframes lds-ripple {
            0% {
                top: 32px;
                left: 32px;
                width: 0;
                height: 0;
                opacity: 1;
            }

            100% {
                top: 0;
                left: 0;
                width: 72px;
                height: 72px;
                opacity: 0;
            }
        }
    </style>
    <div class="singlePageBg course-home-section">


        @php
            $tools = App\Models\Blog::where('status', 1)->where('slug', 'text-logo')->first();
        @endphp
        <div class="container sirajganj_single_post_container">

            <div class="row mt-3">
                <div class="col-md-9">
                    <div class="postBody">
                        <h2 class="postBodyTitle">{{ $tools->title ?? 'HTML Entities Converter' }}</h2>
                    </div>
                    <input type="text" id="toolsID" value="{{ $tools->id }}" hidden>

                    {{-- ========== Tool Section ========== --}}
                    <div class="mainTools">
                        <div class="password_gen text-center">

                            <div class="container sirajganj_single_post_container">
                                {{-- Input --}}
                                <div class="form-group">
                                    <label for="qrInput">Enter Text:</label>
                                    <input type="text" id="qrInput" class="form-control mt-1" placeholder="eg: Asif">
                                </div>

                                {{-- Button --}}
                                <button id="generateQR" class="generateBtn mt-3">Generate</button>

                                {{-- Output --}}
                                <div id="qrResult" class="mt-4 text-center d-none">
                                    <h4>Your Logo:</h4>
                                    <img id="qrImage" src="" alt="QR Code" class="img-fluid"
                                        style="max-width: 450px;">
                                    <br>
                                    <button id="downloadQR" class="copyBtn mt-3">Download</button>
                                </div>
                            </div>

                        </div>
                    </div>

                    {{-- ========= Tool Description ========= --}}
                    <div class="postBodyDesc mt-4">
                        <h3 class="text-start">Total View : <span>{{ $tools->view ?? 0 }}</span></h3>
                    </div>
                    <div class="postBodyDesc mt-5">
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

                <div id="preloader"
                    style="display: none; position: fixed; top: 50%; left: 30% auto; width: 100%; height: 100%; background-color: rgba(0, 0, 0, 0.8); z-index: 9999; display: flex; justify-content: center; align-items: center;">
                    <div class="lds-ripple">
                        <div></div>
                        <div></div>
                    </div>
                </div>

            </div>
        </div>
    </div>


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

    <script>
        window.addEventListener('load', function() {
            document.getElementById('preloader').style.display = 'none';
        });

        // Optional: Show preloader during AJAX requests or other operations
        function showPreloader() {
            document.getElementById('preloader').style.display = 'flex';
        }

        function hidePreloader() {
            document.getElementById('preloader').style.display = 'none';
        }
    </script>
@endsection

@push('front_js')
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script>
        document.getElementById("generateQR").addEventListener("click", function() {
            const text = document.getElementById("qrInput").value.trim();

            if (text === '') {
                alert("Please enter some text");
                return;
            }

            // Show preloader
            showPreloader();

            // Encode text for URL
            const encodedText = encodeURIComponent(text);
            const qrUrl = `https://abhi-api.vercel.app/api/logo/glitch?text=${encodedText}`;

            // Set QR image
            document.getElementById("qrImage").src = qrUrl;
            document.getElementById("qrResult").classList.remove("d-none");

            // Hide preloader after image is loaded
            document.getElementById("qrImage").onload = function() {
                hidePreloader();
            };

            // Set download link dynamically
            document.getElementById("downloadQR").onclick = () => {
                fetch(qrUrl)
                    .then(response => response.blob())
                    .then(blob => {
                        const link = document.createElement('a');
                        link.href = window.URL.createObjectURL(blob);
                        link.download = 'my-logo.png';
                        document.body.appendChild(link);
                        link.click();
                        document.body.removeChild(link);
                    })
                    .catch(error => {
                        console.error('Error downloading image:', error);
                        hidePreloader();
                    });
            };
        });
    </script>
@endpush
