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

  <style>


        .search-box {
            display: flex;
            border-radius: 12px;
            overflow: hidden;
            transition: all 0.3s ease;
            box-shadow: 0 5px 15px rgba(0, 0, 0, 0.1);
            /* margin-bottom: 30px; */
        }

        input[type="text"] {
            flex: 1;
            padding: 18px 25px;
            border: none;
            font-size: 16px;
            outline: none;
            background: rgba(255, 255, 255, 0.95);

        }

        .tld-selector {

            padding: 0 20px;
            background: rgba(255, 255, 255, 0.85);
            color: #0c3a4d;
            font-weight: 600;
            display: flex;
            align-items: center;
            border-left: 1px solid #eee;
            border-right: 1px solid #eee;
        }

        button {
            background: linear-gradient(to right, #ff7e5f, #feb47b);
            color: white;
            border: none;
            padding: 0 30px;
            font-size: 16px;
            font-weight: 600;
            cursor: pointer;
            transition: all 0.3s ease;
        }

        button:hover {
            background: linear-gradient(to right, #feb47b, #ff7e5f);
            transform: translate(-2px);
        }

      
    </style>
    <div class="singlePageBg course-home-section">

        <div class="container sirajganj_single_post_container">
            <div class="row mt-3">

                <div class="col-md-9">
                    <div class="postBody">
                        @php
                            $tools = App\Models\Blog::where('status', 1)
                                ->where('slug', 'website-seo-checker')
                                ->first();
                        @endphp
                        <h2 class="postBodyTitle">{{ $tools->title ?? '' }}</h2>
                    </div>
                    <input type="text" id="toolsID" value="{{ $tools->id }}" hidden>
                    {{-- ========== Tools ========= --}}
                    <div class="mainTools">
                
         
                   <div class="domain-search-container">
{{-- 
                            <div id="preloader" style="display:none; text-align:center; margin-top:10px;">
                                <div class="spinner-border text-primary" role="status">
                                    <span class="visually-hidden">Loading...</span>
                                </div>
                            </div> --}}
                            <div id="custom_preloader" style="display: none">
                            <div class="custom_loader"></div>
                            </div>
                                <h1 class="text-center">Enter Your Website URL </h1>
                               <div class="search-box">
                                <input id="website_url" type="text" placeholder="EXP: https://example.com" />
                                <button id="tech_finder">Search</button>
                            </div>
                        </div>
                        <span id="ip_content">

                        </span>
                    </div>
                    {{-- ========= Tools Description =========== --}}
                    <div class="postBodyDesc ">
                        <p class="postBodyDescText">
                        <h3 class="my-3 text-start">Total View : <span class="">{{ $tools->view ?? 0 }}</span></h3>
                        </p>
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

                {{-- <div id="preloader" style="display: none;">
                    <div class="spinner-border text-primary" role="status">
                        <span class="sr-only">Loading...</span>
                    </div>
                </div> --}}
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
<script>
$(document).on('click', '#tech_finder', function () {
    $('#custom_preloader').show();
    var website_url = $('#website_url').val();
    if (!website_url) {
        alert("Please enter a website URL.");
        $('#custom_preloader').hide();
        return;
    }

    $.ajax({
        url: "https://api.microlink.io/?url=" + encodeURIComponent(website_url),
        type: "GET",
        success: function (res) {
            $('#custom_preloader').hide();
            if (res.status === 'success') {
                var data = res.data;
                var headers = res.headers;

                const formattedDate = data.date ? new Date(data.date).toLocaleString() : 'N/A';

                $('#ip_content').html(`
                    <div class="container mt-4 p-4 rounded shadow" style="background-color:#f9f9f9;">
                        <h4 class="mb-4">🌐 Technology Used: <span class="text-primary">${headers['x-powered-by'] || 'N/A'}</span></h4>

                        <div class="row">
                            <div class="col-md-12 mb-3">
                                <strong>Title:</strong> <span class="text-dark">${data.title || 'N/A'}</span><br>
                                <strong>Description:</strong> <span class="text-muted">${data.description || 'N/A'}</span><br>
                                <strong>Language:</strong> ${data.lang || 'N/A'}<br>
                                <strong>Author:</strong> ${data.author || 'N/A'}<br>
                                <strong>Publisher:</strong> ${data.publisher || 'N/A'}<br>
                                <strong>Date:</strong> ${formattedDate}<br>
                                <strong>URL:</strong> <a href="${data.url}" target="_blank">${data.url}</a><br>
                            </div>
                            ${data.image ? `
                            <div class="col-md-6 mb-3">
                                <strong>Image:</strong><br>
                                <img src="${data.image.url}" class="img-fluid rounded" style="max-height:150px;"><br>
                                <small>Type: ${data.image.type}, Size: ${data.image.size_pretty}, Dimensions: ${data.image.width}x${data.image.height}</small>
                            </div>` : ''}

                            ${data.logo ? `
                            <div class="col-md-6 mb-3">
                                <strong>Logo:</strong><br>
                                <img src="${data.logo.url}" class="img-fluid rounded" style="max-height:150px;"><br>
                                <small>Type: ${data.logo.type}, Size: ${data.logo.size_pretty}, Dimensions: ${data.logo.width}x${data.logo.height}</small>
                            </div>` : ''}
                        </div>
                    </div>
                `);
            } else {
                $('#ip_content').html(`<p class="text-danger m-3">❌ Could not fetch website info.</p>`);
            }
        },
        error: function () {
            $('#custom_preloader').hide();
            $('#ip_content').html(`<p class="text-danger m-3">❌ Failed to fetch information. Please try a valid website URL.</p>`);
        }
    });
});
</script>

@endpush