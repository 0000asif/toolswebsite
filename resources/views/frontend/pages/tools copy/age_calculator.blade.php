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
            $tools = App\Models\Blog::where('status', 1)->where('slug', 'age-calculator')->first();
        @endphp

        <div class="container sirajganj_single_post_container">
            <div class="row mt-3">
                <div class="col-md-9">
                    <div class="postBody">
                        <h2 class="postBodyTitle">{{ $tools->title ?? 'Age Calculator' }}</h2>
                    </div>
                    <input type="text" id="toolsID" value="{{ $tools->id }}" hidden>

                    {{-- ========== Tools Section ========== --}}
                    <div class="mainTools">
                        <div class="password_gen text-center">
                            <div class="pass_input">
                                <input readonly type="text" id="ageOutput" value="">
                                <span class="strongPassTexta bg-success" id="ageStatus">Ready</span>
                            </div>

                            <div class="pass_btn mt-3">
                                <button class="copyBtn" id="copyAgeBtn">Copy</button>
                                <button class="generateBtn" id="calculateAgeBtn">Calculate</button>
                            </div>

                            <div class="row my-3">
                                <div class="col-md-12">
                                    <label>Select Date of Birth:</label>
                                    <input type="date" class="form-control" id="dob">
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
        document.getElementById('calculateAgeBtn').addEventListener('click', function() {
            const dob = new Date(document.getElementById('dob').value);
            const today = new Date();
            const output = document.getElementById('ageOutput');
            const status = document.getElementById('ageStatus');

            if (!dob || isNaN(dob)) {
                output.value = '';
                status.textContent = 'Invalid date';
                status.classList.replace('bg-success', 'bg-danger');
                return;
            }

            let years = today.getFullYear() - dob.getFullYear();
            let months = today.getMonth() - dob.getMonth();
            let days = today.getDate() - dob.getDate();

            if (days < 0) {
                months -= 1;
                days += new Date(today.getFullYear(), today.getMonth(), 0).getDate();
            }

            if (months < 0) {
                years -= 1;
                months += 12;
            }

            const result = `${years} Years, ${months} Months, ${days} Days`;
            output.value = `Age: ${result}`;
            status.textContent = 'Calculated';
            status.classList.replace('bg-danger', 'bg-success');
        });

        document.getElementById('copyAgeBtn').addEventListener('click', function() {
            const output = document.getElementById('ageOutput');
            output.select();
            output.setSelectionRange(0, 99999); // For mobile

            navigator.clipboard.writeText(output.value).then(() => {
                const status = document.getElementById('ageStatus');
                status.textContent = 'Copied!';
                status.classList.replace('bg-danger', 'bg-success');
            });
        });
    </script>
@endpush
