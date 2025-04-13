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
            $tools = App\Models\Blog::where('status', 1)->where('slug', 'percentage-calculator')->first();
        @endphp

        <div class="container sirajganj_single_post_container">
            <div class="row mt-3">
                <div class="col-md-9">
                    <div class="postBody">
                        <h2 class="postBodyTitle">{{ $tools->title ?? 'Percentage Calculator' }}</h2>
                    </div>
                    <input type="text" id="toolsID" value="{{ $tools->id }}" hidden>

                    {{-- ========== Tools Section ========== --}}
                    <div class="mainTools">
                        <div class="password_gen text-center">

                            <div class="form-group mb-3">
                                <label>What is <input type="number" id="percent" class="form-control d-inline w-25 mx-2"
                                        placeholder="%" /> % of
                                    <input type="number" id="totalValue" class="form-control d-inline w-25 mx-2"
                                        placeholder="Value" />?
                                </label>
                                <p class="mt-2">Result: <strong id="percentResult">0</strong></p>
                            </div>

                            <div class="form-group mb-4">
                                <label><input type="number" id="partValue" class="form-control d-inline w-25 mx-2"
                                        placeholder="Part" /> is what percent of
                                    <input type="number" id="wholeValue" class="form-control d-inline w-25 mx-2"
                                        placeholder="Whole" />?
                                </label>
                                <p class="mt-2">Result: <strong id="percentOfResult">0%</strong></p>
                            </div>

                            <div class="form-group mb-4">
                                <label>Percent change from
                                    <input type="number" id="oldValue" class="form-control d-inline w-25 mx-2"
                                        placeholder="Old" /> to
                                    <input type="number" id="newValue" class="form-control d-inline w-25 mx-2"
                                        placeholder="New" />?
                                </label>
                                <p class="mt-2">Change: <strong id="percentChangeResult">0%</strong></p>
                            </div>

                            <button class="generateBtn mt-2" id="calculateBtn">Calculate</button>
                        </div>
                    </div>

                    {{-- ========= Description ========= --}}
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
        document.getElementById('calculateBtn').addEventListener('click', function() {
            // What is X% of Y
            const percent = parseFloat(document.getElementById('percent').value);
            const totalValue = parseFloat(document.getElementById('totalValue').value);
            const result1 = !isNaN(percent) && !isNaN(totalValue) ? (percent / 100) * totalValue : 0;
            document.getElementById('percentResult').innerText = result1.toFixed(2);

            // X is what percent of Y
            const part = parseFloat(document.getElementById('partValue').value);
            const whole = parseFloat(document.getElementById('wholeValue').value);
            const result2 = !isNaN(part) && !isNaN(whole) && whole !== 0 ? (part / whole) * 100 : 0;
            document.getElementById('percentOfResult').innerText = result2.toFixed(2) + "%";

            // Percent increase/decrease
            const oldVal = parseFloat(document.getElementById('oldValue').value);
            const newVal = parseFloat(document.getElementById('newValue').value);
            let change = 0;
            if (!isNaN(oldVal) && !isNaN(newVal) && oldVal !== 0) {
                change = ((newVal - oldVal) / oldVal) * 100;
            }
            document.getElementById('percentChangeResult').innerText = change.toFixed(2) + "%";
        });
    </script>
@endpush
