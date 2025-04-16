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
            $tools = App\Models\Blog::where('status', 1)->where('slug', 'text-to-html-entities-converter')->first();
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

                            {{-- TEXT TO HTML ENTITIES --}}
                            <div class="form-group mb-3">
                                <label for="textInput">Text to HTML Entities:</label>
                                <textarea class="form-control mt-2" id="textInput" rows="3" placeholder="Enter text (e.g. <div>Hello</div>)"></textarea>
                            </div>
                            <div class="pass_btn mt-2">
                                <button class="generateBtn" id="convertToEntities">Convert</button>
                            </div>
                            <div class="form-group mt-2">
                                <textarea class="form-control mt-2" id="entityOutput" rows="3" readonly
                                    placeholder="&lt;div&gt;Hello&lt;/div&gt;"></textarea>
                            </div>
                            <div class="pass_btn mt-2">
                                <button class="copyBtn" id="copyEntities">Copy</button>
                                <span class="text-success d-none" id="entityCopyStatus">Copied!</span>
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
        // Convert Text to HTML Entities
        document.getElementById('convertToEntities').addEventListener('click', () => {
            const input = document.getElementById('textInput').value;
            const output = input.replace(/[\u00A0-\u9999<>&]/gim, function(i) {
                return '&#' + i.charCodeAt(0) + ';';
            });
            document.getElementById('entityOutput').value = output;
        });

        // Convert Text to HTML Entities
        document.getElementById('textInput').addEventListener('click', () => {
            const input = document.getElementById('textInput').value;
            const output = input.replace(/[\u00A0-\u9999<>&]/gim, function(i) {
                return '&#' + i.charCodeAt(0) + ';';
            });
            document.getElementById('entityOutput').value = output;
        });

        // Copy HTML Entities
        document.getElementById('copyEntities').addEventListener('click', () => {
            const output = document.getElementById('entityOutput');
            output.select();
            document.execCommand('copy');
            const status = document.getElementById('entityCopyStatus');
            status.classList.remove('d-none');
            setTimeout(() => status.classList.add('d-none'), 1000);
        });
    </script>
@endpush
