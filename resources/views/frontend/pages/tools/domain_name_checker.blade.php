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
        .domain-search-container {
            text-align: center;
            width: 100%;
            padding: 50px 40px;
            background: linear-gradient(135deg, #bed5df, #1a5a6e, #247b8a);
            border-radius: 20px;
            box-shadow: 0 15px 35px rgba(0, 0, 0, 0.2);
            border: 1px solid rgba(255, 255, 255, 0.15);
        }

        h1 {
            color: #fff;
            margin-bottom: 35px;
            font-size: 32px;
            font-weight: 700;
            letter-spacing: 0.5px;
            text-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
        }

        .search-box {
            display: flex;
            border-radius: 12px;
            overflow: hidden;
            transition: all 0.3s ease;
            box-shadow: 0 5px 15px rgba(0, 0, 0, 0.1);
            margin-bottom: 30px;
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

        .seal {

            display: inline-flex;
            align-items: center;
            background: rgba(255, 255, 255, 0.15);
            padding: 12px 20px;
            border-radius: 50px;
            backdrop-filter: blur(5px);
        }

        .seal-icon {

            width: 36px;
            height: 36px;
            background: linear-gradient(45deg, #ff7e5f, #feb47b);
            color: white;
            border-radius: 50%;
            display: flex;
            justify-content: center;
            align-items: center;
            font-weight: bold;
            margin-right: 12px;
            font-size: 18px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
        }

        .seal-text {
            font-weight: 600;
            color: #fff;
            letter-spacing: 1px;
        }
    </style>
    <div class="singlePageBg course-home-section">

        <div class="container sirajganj_single_post_container">
            <div class="row mt-3">

                <div class="col-md-9">
                    <div class="postBody">
                        @php
                            $tools = App\Models\Blog::where('status', 1)->where('slug', 'domain-name-checker')->first();
                        @endphp
                        <h2 class="postBodyTitle">{{ $tools->title ?? '' }}</h2>
                    </div>
                    <input type="text" id="toolsID" value="{{ $tools->id }}" hidden>
                    {{-- ========== Tools ========= --}}
                    <div class="mainTools">
                        <div class="domain-search-container">

                            <div id="preloader" style="display:none; text-align:center; margin-top:10px;">
                                <div class="spinner-border text-primary" role="status">
                                    <span class="visually-hidden">Loading...</span>
                                </div>
                            </div>

                            <h1>Find your new domain name</h1>
                            <div class="search-box">
                                <input id="domain_input" type="text" placeholder="Enter your desired domain...">
                                {{-- <div class="tld-selector">.com</div> --}}
                                <button id="domain_search">Search</button>
                            </div>
                            <div class="seal">
                                <div class="seal-icon" id="result_icone"></div>
                                <div class="seal-text" id="result_view"></div>
                            </div>
                        </div>

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
    <script>
       $(document).on('click', '#domain_search', function(e) {
    e.preventDefault();

    // let domain = $('#domain_input').val();
let domain = $('#domain_input').val().trim();
    if (!domain) {
        $('#result_icone').html('<i class="bi bi-x-circle"></i>');
        $('#result_view').html('Please enter a domain name.');
        return;
    }
    $('#preloader').show();
   $.ajax({
    url: "https://domain-availability.whoisxmlapi.com/api/v1?apiKey=at_HMhA4tP5xpHEQnB6Aonz65SnAAqV3&domainName=" + domain,
    type: "GET",
    success: function(response) {
           $('#preloader').hide(); // Hide preloader
        const domainName = response.DomainInfo.domainName;

        if (response.DomainInfo.domainAvailability === "AVAILABLE") {
            $('#result_icone').html('<i class="bi bi-check-circle"></i>');
            $('#result_view').html(`🎉 Congratulations! <span style="font-size:25px;font-weight:bold">${domainName}</span> domain is available.`);
        } else {
            $('#result_icone').html('<i class="bi bi-x-circle"></i>');
            $('#result_view').html(`❌ Sorry! <span style="font-size:25px;font-weight:bold">${domainName}</span> domain is not available.`);
        }
    },
    error: function(xhr, status, error) {
        console.error("Error:", error);
        $('#result_icone').html('<i class="bi bi-x-circle text-warning"></i>');
        $('#result_view').html('⚠️ An error occurred while checking the domain.');
    }
});

});

    </script>
@endpush
