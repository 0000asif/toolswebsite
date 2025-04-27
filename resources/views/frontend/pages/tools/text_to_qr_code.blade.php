@extends('frontend.components.front-master')

@section('front_content')
    <div class="singlePageBg course-home-section">


        @php
            $tools = App\Models\Blog::where('status', 1)->where('slug', 'text-to-qr-code-generator')->first();
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
                                    <label for="qrInput">Enter Text or URL:</label>
                                    <input type="text" id="qrInput" class="form-control mt-1"
                                        placeholder="e.g. https://self-shopping.com">
                                </div>

                                {{-- Button --}}
                                <button id="generateQR" class="generateBtn mt-3">Generate QR Code</button>

                                {{-- Output --}}
                                <div id="qrResult" class="mt-4 text-center d-none">
                                    <h4>Your QR Code:</h4>
                                    <img id="qrImage" src="" alt="QR Code" class="img-fluid"
                                        style="max-width: 300px;">
                                    <br>
                                    <button id="downloadQR" class="copyBtn mt-3">Download QR</button>
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

                <div id="preloader" style="display: none;">
                    <div class="spinner-border text-primary" role="status">
                        <span class="sr-only">Loading...</span>
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
@endsection

@push('front_js')
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script>
        document.getElementById("generateQR").addEventListener("click", function() {
            const text = document.getElementById("qrInput").value.trim();

            if (text === '') {
                alert("Please enter some text or a URL.");
                return;
            }

            // Encode text for URL
            const encodedText = encodeURIComponent(text);
            const qrUrl = `https://api.apgy.in/qr/?data=${encodedText}&size=300`;

            // Set QR image
            document.getElementById("qrImage").src = qrUrl;
            document.getElementById("qrResult").classList.remove("d-none");

            // Set download link dynamically
            document.getElementById("downloadQR").onclick = () => {
                fetch(qrUrl)
                    .then(response => response.blob())
                    .then(blob => {
                        const link = document.createElement('a');
                        link.href = window.URL.createObjectURL(blob);
                        link.download = 'qr-code.png';
                        document.body.appendChild(link);
                        link.click();
                        document.body.removeChild(link);
                    })
                    .catch(error => console.error('Error downloading QR code:', error));
            };
        });
    </script>
@endpush
