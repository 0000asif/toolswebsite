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

        <div class="container sirajganj_single_post_container">
            <div class="row mt-3">

                <div class="col-md-9">
                    <div class="postBody">
                        @php
                            $tools = App\Models\Blog::where('status', 1)
                                ->where('slug', 'strong-password-generator')
                                ->first();
                        @endphp
                        <h2 class="postBodyTitle">{{ $tools->title ?? '' }}</h2>
                    </div>
                    <input type="text" id="toolsID" value="{{ $tools->id }}" hidden>
                    {{-- ========== Tools ========= --}}
                    <div class="mainTools">

                        <div class="password_gen text-center">
                            <div class="pass_input">
                                <input readonly type="text" id="strongPassInput" value="N8LlMAj7w7kXs51">
                                <span class="strongPassTexta bg-success" id="strongPassText">Strong</span>
                            </div>
                            <div class="pass_btn mt-3">
                                <button class="copyBtn" id="copyBtn">Copy</button>
                                <button class="generateBtn" id="generateBtn">Generate</button>
                            </div>
                            <div class="row my-3">
                                <div class="col-md-4">
                                    <h3 class="lengthText">Password Length: <span class="lenthDis" id="lengthDisplay">19</span></h3>
                                </div>
                             <div class="col-md-7">
                                    <input type="range" class="form-range" id="passwordLength" min="4" max="50" value="19">
                             </div>
                             <div class="col-md-1"></div>

                            </div>
                          <div class="row">
                            <div class="col-md-12">
                                <div class="form-group mb-3">
                                    <label class="mb-2 d-block charecor">Characters to include:</label>
                                    <div class="d-flex flex-wrap gap-3">
                                        <div class="form-check">
                                            <input class="form-check-input" type="checkbox" id="uppercase" checked>
                                            <label class="form-check-label" for="uppercase">Uppercase (A-Z)</label>
                                        </div>
                                        <div class="form-check">
                                            <input class="form-check-input" type="checkbox" id="lowercase" checked>
                                            <label class="form-check-label" for="lowercase">Lowercase (a-z)</label>
                                        </div>
                                        <div class="form-check">
                                            <input class="form-check-input" type="checkbox" id="numbers" checked>
                                            <label class="form-check-label" for="numbers">Numbers (0-9)</label>
                                        </div>
                                        <div class="form-check">
                                            <input class="form-check-input" type="checkbox" id="specials">
                                            <label class="form-check-label" for="specials">Specials (!@#$...)</label>
                                        </div>
                                    </div>
                                </div>
                              
                            </div>
                        </div>

                        </div>
                    </div>
                    {{-- ========= Tools Description =========== --}}
                    <div class="postBodyDesc ">
                        <p class="postBodyDescText">  <h3 class="my-3 text-start">Total View : <span class="">{{ $tools->view ?? 0 }}</span></h3></p>
                    </div>

                    {{-- ========= Tools Description =========== --}}
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
    function generatePassword(length, useUpper, useLower, useNumbers, useSpecials) {
        let charset = "";
        if (useUpper) charset += "ABCDEFGHIJKLMNOPQRSTUVWXYZ";
        if (useLower) charset += "abcdefghijklmnopqrstuvwxyz";
        if (useNumbers) charset += "0123456789";
        if (useSpecials) charset += "!@#$%^&*()_+{}[]|:;<>,.?/~`-=";

        if (charset.length === 0) {
            alert("Please select at least one character set!");
            return "";
        }

        let password = "";
        for (let i = 0; i < length; i++) {
            const randomIndex = Math.floor(Math.random() * charset.length);
            password += charset[randomIndex];
        }
        return password;
    }

    $(document).ready(function () {
        // Display slider value
        $('#passwordLength').on('input', function () {
            $('#lengthDisplay').text($(this).val());
        });

     // Generate button click
            $('#generateBtn').click(function () {
                const length = parseInt($('#passwordLength').val());
                const useUpper = $('#uppercase').is(':checked');
                const useLower = $('#lowercase').is(':checked');
                const useNumbers = $('#numbers').is(':checked');
                const useSpecials = $('#specials').is(':checked');

                const password = generatePassword(length, useUpper, useLower, useNumbers, useSpecials);
                $('#strongPassInput').val(password);

                const toolsID = $('#toolsID').val(); 

                $.ajax({
                    url: "{{ route('ToolsUsedCount') }}", // Laravel route
                    type: "GET",
                    data: {
                        toolsID: toolsID,
                    },
                    success: function (response) {
                        console.log("Password saved successfully:", response);
                    },
                    error: function (error) {
                        console.error("Error saving password:", error);
                    }
                });
            });


        // Copy button
        $('#copyBtn').click(function () {
            const password = $('#strongPassInput').val();
            navigator.clipboard.writeText(password).then(function () {
                alert("Password copied to clipboard!");
            });
        });
    });
</script>



@endpush
