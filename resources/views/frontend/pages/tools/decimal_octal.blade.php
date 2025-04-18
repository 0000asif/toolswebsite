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
            $tools = App\Models\Blog::where('status', 1)->where('slug', 'decimal-to-octal-converter')->first();
        @endphp

        <div class="container sirajganj_single_post_container">
            <div class="row mt-3">
                <div class="col-md-9">
                    <div class="postBody">
                        <h2 class="postBodyTitle">{{ $tools->title ?? 'Decimal to Octal Converter' }}</h2>
                    </div>
                    <input type="text" id="toolsID" value="{{ $tools->id }}" hidden>

                    {{-- ========== Tool UI ========== --}}
                    <div class="mainTools">
                        <div class="password_gen text-center">

                            <div class="form-group mb-3">
                                <label for="decimalInput">Enter Decimal Number:</label>
                                <input type="number" class="form-control mt-2" id="decimalInput"
                                    placeholder="Enter a decimal number">
                            </div>

                            <div class="pass_btn mt-2">
                                <button class="generateBtn" id="convertToOctal">Convert to Octal</button>
                            </div>

                            <div class="form-group mt-4">
                                <label for="octalOutput">Octal Output:</label>
                                <input type="text" class="form-control mt-2" id="octalOutput" readonly>
                            </div>

                            <div class="pass_btn mt-2">
                                <button class="copyBtn" id="copyOctalBtn">Copy</button>
                                <span id="copyOctalStatus" class="text-success ms-2 d-none">Copied!</span>
                            </div>

                        </div>
                    </div>

                    {{-- ========= Description ========= --}}
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
        document.getElementById('convertToHex').addEventListener('click', function() {
            const decimalValue = document.getElementById('decimalInput').value;
            if (decimalValue === '') {
                alert('Please enter a decimal number.');
                return;
            }
            const hexValue = parseInt(decimalValue, 10).toString(16).toUpperCase();
            document.getElementById('hexOutput').value = hexValue;
        });

        document.getElementById('decimalInput').addEventListener('keyup', function() {
            const decimalValue = document.getElementById('decimalInput').value;
            if (decimalValue === '') {
                alert('Please enter a decimal number.');
                return;
            }
            const hexValue = parseInt(decimalValue, 10).toString(16).toUpperCase();
            document.getElementById('hexOutput').value = hexValue;
        });

        document.getElementById('copyHexBtn').addEventListener('click', function() {
            const hexOutput = document.getElementById('hexOutput');
            hexOutput.select();
            hexOutput.setSelectionRange(0, 99999); // For mobile
            document.execCommand('copy');

            const status = document.getElementById('copyHexStatus');
            status.classList.remove('d-none');
            setTimeout(() => {
                status.classList.add('d-none');
            }, 1500);
        });
    </script>
    <script>
        document.getElementById('convertToOctal').addEventListener('click', function() {
            const decimalInput = document.getElementById('decimalInput').value.trim();

            if (decimalInput === '') {
                alert('Please enter a decimal number.');
                return;
            }

            const decimal = parseInt(decimalInput, 10);

            if (isNaN(decimal)) {
                alert('Invalid number.');
                return;
            }

            const octal = decimal.toString(8);
            document.getElementById('octalOutput').value = octal;
        });

        document.getElementById('copyOctalBtn').addEventListener('click', function() {
            const octalOutput = document.getElementById('octalOutput');

            if (!octalOutput.value) return;

            octalOutput.select();
            octalOutput.setSelectionRange(0, 99999); // For mobile
            document.execCommand('copy');

            const status = document.getElementById('copyOctalStatus');
            status.classList.remove('d-none');
            setTimeout(() => status.classList.add('d-none'), 1500);
        });
    </script>
@endpush
