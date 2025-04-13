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
            $tools = App\Models\Blog::where('status', 1)->where('slug', 'grade-calculator')->first();
        @endphp

        <div class="container sirajganj_single_post_container">
            <div class="row mt-3">
                <div class="col-md-9">
                    <div class="postBody">
                        <h2 class="postBodyTitle">{{ $tools->title ?? 'Grade Calculator' }}</h2>
                    </div>
                    <input type="text" id="toolsID" value="{{ $tools->id }}" hidden>

                    {{-- ========== Grade Calculator ========== --}}
                    <div class="mainTools">
                        <div class="password_gen text-center">
                            <div class="form-group mb-3">
                                <label for="marksList">Enter subject marks separated by commas (e.g., 85, 90, 78):</label>
                                <textarea class="form-control mt-2" id="marksList" rows="3" placeholder="85, 90, 78, 88, 95"></textarea>
                            </div>

                            <button class="generateBtn mt-2" id="calculateGradeBtn">Calculate Grade</button>

                            <div class="mt-3">
                                <h4>Average Score: <span id="averageScore">0</span></h4>
                                <h4>Grade: <span id="gradeResult">-</span></h4>
                            </div>
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
        document.getElementById('calculateGradeBtn').addEventListener('click', function() {
            const input = document.getElementById('marksList').value;
            const marks = input.split(',').map(n => parseFloat(n.trim())).filter(n => !isNaN(n));

            if (marks.length > 0) {
                const total = marks.reduce((a, b) => a + b, 0);
                const avg = total / marks.length;
                document.getElementById('averageScore').innerText = avg.toFixed(2);
                document.getElementById('gradeResult').innerText = getGrade(avg);
            } else {
                document.getElementById('averageScore').innerText = "0";
                document.getElementById('gradeResult').innerText = "-";
            }
        });

        function getGrade(avg) {
            if (avg >= 80) return "A+";
            else if (avg >= 70) return "A";
            else if (avg >= 60) return "A-";
            else if (avg >= 50) return "B";
            else if (avg >= 40) return "C";
            else if (avg >= 33) return "D";
            else return "F";
        }
    </script>0
@endpush
