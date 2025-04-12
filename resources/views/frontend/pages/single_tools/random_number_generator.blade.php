@extends('frontend.components.front-master')


@section('front_content')
    <div class="singlePageBg course-home-section">
        @php
            $tools = App\Models\Blog::where('status', 1)->where('slug', 'random-number-generator')->first();
        @endphp

        <div class="container sirajganj_single_post_container">
            <div class="row mt-3">
                <div class="col-md-9">
                    <div class="postBody">
                        <h2 class="postBodyTitle">{{ $tools->title ?? 'Random Number Generator' }}</h2>
                    </div>
                    <input type="text" id="toolsID" value="{{ $tools->id }}" hidden>

                    {{-- ========== Tools Section ========== --}}
                    <div class="mainTools">
                        <div class="password_gen text-center">
                            <div class="pass_input">
                                <input readonly type="text" id="randomNumberOutput" value="">
                                <span class="strongPassTexta bg-success" id="randomNumberStatus">Ready</span>
                            </div>

                            <div class="pass_btn mt-3">
                                <button class="copyBtn" id="copyNumberBtn">Copy</button>
                                <button class="generateBtn" id="generateNumberBtn">Generate</button>
                            </div>

                            <div class="row my-3">
                                <div class="col-md-4">
                                    <label>Minimum Number</label>
                                    <input type="number" class="form-control" id="minNumber" value="100">
                                </div>
                                <div class="col-md-4">
                                    <label>Maximum Number</label>
                                    <input type="number" class="form-control" id="maxNumber" value="999999">
                                </div>
                                <div class="col-md-4">
                                    <label>Length (Digits)</label>
                                    <input type="number" class="form-control" id="length" value="6">
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
        document.getElementById('generateNumberBtn').addEventListener('click', function() {
            const min = parseInt(document.getElementById('minNumber').value);
            const max = parseInt(document.getElementById('maxNumber').value);
            const length = parseInt(document.getElementById('length').value);

            const output = document.getElementById('randomNumberOutput');
            const status = document.getElementById('randomNumberStatus');

            if (isNaN(min) || isNaN(max) || isNaN(length)) {
                status.textContent = 'Invalid Input';
                status.classList.replace('bg-success', 'bg-danger');
                return;
            }

            if (min > max) {
                status.textContent = 'Min > Max';
                status.classList.replace('bg-success', 'bg-danger');
                return;
            }

            if (length <= 0) {
                status.textContent = 'Invalid Length';
                status.classList.replace('bg-success', 'bg-danger');
                return;
            }

            const minLengthValue = Math.pow(10, length - 1);
            const maxLengthValue = Math.pow(10, length) - 1;

            const finalMin = Math.max(min, minLengthValue);
            const finalMax = Math.min(max, maxLengthValue);

            if (finalMin > finalMax) {
                status.textContent = `No ${length}-digit number in range`;
                status.classList.replace('bg-success', 'bg-danger');
                return;
            }

            const randomNumber = Math.floor(Math.random() * (finalMax - finalMin + 1)) + finalMin;

            output.value = randomNumber;
            status.textContent = 'Generated!';
            status.classList.replace('bg-danger', 'bg-success');
        });

        document.getElementById('copyNumberBtn').addEventListener('click', function() {
            const output = document.getElementById('randomNumberOutput');
            output.select();
            output.setSelectionRange(0, 99999); // for mobile

            navigator.clipboard.writeText(output.value)
                .then(() => {
                    const status = document.getElementById('randomNumberStatus');
                    status.textContent = 'Copied!';
                    status.classList.replace('bg-danger', 'bg-success');
                });
        });
    </script>
@endsection
