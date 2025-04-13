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
            $tools = App\Models\Blog::where('status', 1)->where('slug', 'text-counter')->first();
        @endphp

        <div class="container sirajganj_single_post_container">
            <div class="row mt-3">
                <div class="col-md-9">
                    <div class="postBody">
                        <h2 class="postBodyTitle">{{ $tools->title ?? 'Text Counter' }}</h2>
                    </div>
                    <input type="text" id="toolsID" value="{{ $tools->id }}" hidden>

                    {{-- ========== Tools Section ========== --}}
                    <div class="mainTools">
                        <div class="password_gen text-center">
                            <div class="form-group mb-3">
                                <label for="textInput">Enter Your Text:</label>
                                <textarea class="form-control" id="textInput" rows="6" placeholder="Type or paste your text here..."></textarea>
                            </div>

                            <div class="pass_btn mt-3">
                                <button class="generateBtn" id="countBtn">Count</button>
                                <button class="copyBtn" id="copyTextBtn">Copy Text</button>
                            </div>

                            <div class="row mt-4 text-start">
                                <div class="col-md-6">
                                    <p><strong>Characters (with spaces):</strong> <span id="charWithSpace">0</span></p>
                                    <p><strong>Characters (without spaces):</strong> <span id="charWithoutSpace">0</span>
                                    </p>
                                </div>
                                <div class="col-md-6">
                                    <p><strong>Words:</strong> <span id="wordCount">0</span></p>
                                    <p><strong>Sentences:</strong> <span id="sentenceCount">0</span></p>
                                    <p><strong>Paragraphs:</strong> <span id="paragraphCount">0</span></p>
                                </div>
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
        document.getElementById('textInput').addEventListener('keyup', function() {
            const text = document.getElementById('textInput').value.trim();

            const charWithSpace = text.length;
            const charWithoutSpace = text.replace(/\s+/g, '').length;
            const wordCount = text.match(/\b\S+\b/g)?.length || 0;
            const sentenceCount = text.split(/[.!?]+/).filter(s => s.trim() !== '').length;
            const paragraphCount = text.split(/\n+/).filter(p => p.trim() !== '').length;

            document.getElementById('charWithSpace').innerText = charWithSpace;
            document.getElementById('charWithoutSpace').innerText = charWithoutSpace;
            document.getElementById('wordCount').innerText = wordCount;
            document.getElementById('sentenceCount').innerText = sentenceCount;
            document.getElementById('paragraphCount').innerText = paragraphCount;
        });

        document.getElementById('copyTextBtn').addEventListener('click', function() {
            const textarea = document.getElementById('textInput');
            textarea.select();
            textarea.setSelectionRange(0, 99999);
            navigator.clipboard.writeText(textarea.value).then(() => {
                alert("Text copied to clipboard!");
            });
        });
    </script>
@endpush
