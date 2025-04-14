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
            $tools = App\Models\Blog::where('status', 1)->where('slug', 'temperature-converter')->first();
        @endphp

        <div class="container sirajganj_single_post_container">
            <div class="row mt-3">
                <div class="col-md-9">
                    <div class="postBody">
                        <h2 class="postBodyTitle">{{ $tools->title ?? 'Temperature Converter' }}</h2>
                    </div>
                    <input type="text" id="toolsID" value="{{ $tools->id }}" hidden>

                    {{-- ========== Tools Section ========== --}}
                    <div class="mainTools">
                        <div class="password_gen text-center">
                            <div class="pass_input">
                                <input readonly type="text" id="tempOutput" value="">
                                <span class="strongPassTexta bg-success" id="tempStatus">Ready</span>
                            </div>

                            <div class="pass_btn mt-3">
                                <button class="copyBtn" id="copyTempBtn">Copy</button>
                                <button class="generateBtn" id="convertTempBtn">Convert</button>
                            </div>

                            <div class="row my-4">
                                <div class="col-md-4">
                                    <label>Enter Temperature:</label>
                                    <input type="number" id="tempInput" class="form-control" placeholder="Enter value">
                                </div>
                                <div class="col-md-4">
                                    <label>From:</label>
                                    <select class="form-control" id="fromUnit">
                                        <option value="celsius">Celsius (°C)</option>
                                        <option value="fahrenheit">Fahrenheit (°F)</option>
                                        <option value="kelvin">Kelvin (K)</option>
                                    </select>
                                </div>
                                <div class="col-md-4">
                                    <label>To:</label>
                                    <select class="form-control" id="toUnit">
                                        <option value="fahrenheit">Fahrenheit (°F)</option>
                                        <option value="celsius">Celsius (°C)</option>
                                        <option value="kelvin">Kelvin (K)</option>
                                    </select>
                                </div>
                            </div>
                        </div>
                    </div>

                    {{-- ========= Tools Description =========== --}}
                    <div class="postBodyDesc">
                        <h3 class="my-3 text-start">Total View : <span>{{ $tools->view ?? 0 }}</span></h3>
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
        function convertTemperature(value, from, to) {
            if (from === to) return value;

            // Convert to Celsius first
            let celsius;
            switch (from) {
                case "celsius":
                    celsius = value;
                    break;
                case "fahrenheit":
                    celsius = (value - 32) * 5 / 9;
                    break;
                case "kelvin":
                    celsius = value - 273.15;
                    break;
            }

            // Convert from Celsius to target
            switch (to) {
                case "celsius":
                    return celsius;
                case "fahrenheit":
                    return (celsius * 9 / 5) + 32;
                case "kelvin":
                    return celsius + 273.15;
            }
        }

        document.getElementById('convertTempBtn').addEventListener('click', function() {
            const input = parseFloat(document.getElementById('tempInput').value);
            const from = document.getElementById('fromUnit').value;
            const to = document.getElementById('toUnit').value;
            const output = document.getElementById('tempOutput');
            const status = document.getElementById('tempStatus');

            if (isNaN(input)) {
                output.value = '';
                status.textContent = 'Invalid Input';
                status.classList.replace('bg-success', 'bg-danger');
                return;
            }

            const result = convertTemperature(input, from, to).toFixed(2);
            output.value =
                `${input} ${from.charAt(0).toUpperCase() + from.slice(1)} = ${result} ${to.charAt(0).toUpperCase() + to.slice(1)}`;
            status.textContent = 'Converted';
            status.classList.replace('bg-danger', 'bg-success');
        });

        document.getElementById('copyTempBtn').addEventListener('click', function() {
            const output = document.getElementById('tempOutput');
            output.select();
            output.setSelectionRange(0, 99999);

            navigator.clipboard.writeText(output.value).then(() => {
                document.getElementById('tempStatus').textContent = 'Copied!';
            });
        });
    </script>
@endpush
