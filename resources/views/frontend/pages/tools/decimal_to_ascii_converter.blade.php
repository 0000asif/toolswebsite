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
            $tools = App\Models\Blog::where('status', 1)->where('slug', 'decimal-to-ascii-converter')->first();
        @endphp

        <div class="container sirajganj_single_post_container">
            <div class="row mt-3">
                <div class="col-md-9">
                    <div class="postBody">
                        <h2 class="postBodyTitle">{{ $tools->title ?? 'Decimal to ASCII Converter' }}</h2>
                    </div>
                    <input type="text" id="toolsID" value="{{ $tools->id }}" hidden>

                    {{-- ========== Tool Section ========== --}}
                    <div class="mainTools">
                        <div class="password_gen text-center">

                            <div class="form-group mb-3">
                                <label for="decimalInput">Enter Decimal Values (separate by spaces or commas):</label>
                                <input type="text" class="form-control mt-2" id="decimalInput"
                                    placeholder="e.g. 65 66 67">
                            </div>

                            <div class="pass_btn mt-2">
                                <button class="generateBtn" id="convertToASCII">Convert to ASCII</button>
                            </div>

                            <div class="form-group mt-4">
                                <label for="asciiOutput">ASCII Output:</label>
                                <input type="text" class="form-control mt-2" id="asciiOutput" readonly>
                            </div>

                            <div class="pass_btn mt-2">
                                <button class="copyBtn" id="copyAsciiBtn">Copy</button>
                                <span id="copyAsciiStatus" class="text-success ms-2 d-none">Copied!</span>
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
        document.getElementById('convertToASCII').addEventListener('click', function() {
            const input = document.getElementById('decimalInput').value.trim();
            if (!input) return;

            const ascii = input
                .split(/[\s,]+/)
                .map(num => {
                    const n = parseInt(num);
                    return isNaN(n) || n < 0 || n > 255 ? '' : String.fromCharCode(n);
                })
                .join('');

            document.getElementById('asciiOutput').value = ascii;
        });

        document.getElementById('decimalInput').addEventListener('keyup', function() {
            const input = document.getElementById('decimalInput').value.trim();
            if (!input) return;

            const ascii = input
                .split(/[\s,]+/)
                .map(num => {
                    const n = parseInt(num);
                    return isNaN(n) || n < 0 || n > 255 ? '' : String.fromCharCode(n);
                })
                .join('');

            document.getElementById('asciiOutput').value = ascii;
        });

        document.getElementById('copyAsciiBtn').addEventListener('click', function() {
            const output = document.getElementById('asciiOutput');
            if (!output.value) return;

            output.select();
            output.setSelectionRange(0, 99999);
            document.execCommand('copy');

            const status = document.getElementById('copyAsciiStatus');
            status.classList.remove('d-none');
            setTimeout(() => status.classList.add('d-none'), 1500);
        });
    </script>
@endpush
