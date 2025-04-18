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
    <div class="singlePageBg course-home-section">

        @php
            $tools = App\Models\Blog::where('status', 1)->where('slug', 'text-to-ascii-converter')->first();
        @endphp

        <div class="container sirajganj_single_post_container">
            <div class="row mt-3">
                <div class="col-md-9">
                    <div class="postBody">
                        <h2 class="postBodyTitle">{{ $tools->title ?? 'Text ↔ ASCII Converter' }}</h2>
                    </div>
                    <input type="text" id="toolsID" value="{{ $tools->id }}" hidden>

                    {{-- ========== Tool Section ========== --}}
                    <div class="mainTools">
                        <div class="password_gen text-center">

                            {{-- TEXT TO ASCII --}}
                            <div class="form-group mb-3">
                                <label for="textToAsciiInput">Text to ASCII:</label>
                                <input type="text" class="form-control mt-2" id="textToAsciiInput"
                                    placeholder="Enter text (e.g. Hello)">
                            </div>
                            <div class="pass_btn mt-2">
                                <button class="generateBtn" id="convertTextToAscii">Convert</button>
                            </div>
                            <div class="form-group mt-2">
                                <input type="text" class="form-control mt-2" id="asciiResult" readonly
                                    placeholder="Result">
                            </div>
                            <div class="pass_btn mt-2">
                                <button class="copyBtn" id="copyAscii">Copy</button>
                                <span class="text-success d-none" id="asciiCopyStatus">Copied!</span>
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
        // Convert text to ASCII
        document.getElementById('convertTextToAscii').addEventListener('click', function() {
            const text = document.getElementById('textToAsciiInput').value.trim();
            if (!text) return;
            const ascii = text.split('').map(c => c.charCodeAt(0)).join(' ');
            document.getElementById('asciiResult').value = ascii;
        });

        // Convert text to ASCII
        document.getElementById('textToAsciiInput').addEventListener('keyup', function() {
            const text = document.getElementById('textToAsciiInput').value.trim();
            if (!text) return;
            const ascii = text.split('').map(c => c.charCodeAt(0)).join(' ');
            document.getElementById('asciiResult').value = ascii;
        });

        // Copy ASCII result
        document.getElementById('copyAscii').addEventListener('click', function() {
            const output = document.getElementById('asciiResult');
            output.select();
            document.execCommand('copy');
            const status = document.getElementById('asciiCopyStatus');
            status.classList.remove('d-none');
            setTimeout(() => status.classList.add('d-none'), 1200);
        });

    </script>
@endpush
