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
                            $tools = App\Models\Blog::where('status', 1)
                                ->where('slug', 'what-is-my-ip-find-my-ip-address')
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
                                <h1>Enter Your IP Address</h1>
                               <div class="search-box">
                                <input id="ip_address" type="text" placeholder="EXP: 23.197.208.198">
                                <button id="ip_search">Search</button>
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
    $(document).on('click', '#ip_search', function () {
    $('#custom_preloader').show();
    var ip = $('#ip_address').val();
    if (!ip) {
        alert("Please enter an IP address.");
        $('#custom_preloader').hide();
        return;
    }

    $.ajax({
        url: "https://api.ipquery.io/" + ip,
        type: "GET",
        success: function (res) {
            console.log(res);
            $('#custom_preloader').hide();
            $('#ip_content').html(`
                <div class="container mt-4 p-4 rounded shadow" style="background-color:#f9f9f9;">
                    <h4 class="mb-4 text-primary">🌐 IP & Location Info : ${res.ip}</h4>
                    <div class="row">
                        <div class="col-md-6 mb-3">
                            <strong>IP Address:</strong> <span class="text-dark"> ${res.ip}</span><br>
                            <strong>ISP:</strong> <span class="text-muted"> ${res.isp.org}</span><br>
                            <strong>ASN:</strong> <span class="text-muted"> ${res.isp.asn}</span>
                        </div>
                        <div class="col-md-6 mb-3">
                            <strong>City:</strong> <span class="text-dark"> ${res.location.city}</span><br>
                            <strong>State:</strong> <span class="text-muted"> ${res.location.state}</span><br>
                            <strong>Country:</strong> <span class="text-muted">${res.location.country}</span>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-md-6 mb-3">
                            <strong>Latitude:</strong> <span class="text-dark">${res.location.latitude}</span><br>
                            <strong>Longitude:</strong> <span class="text-dark">${res.location.longitude}</span><br>
                            <strong>Time Zone:</strong> <span class="text-muted">${res.location.timezone}</span><br>
                            <strong>Local Time:</strong> <span class="text-muted">${res.location.localtime}</span>
                        </div>
                        <div class="col-md-6 mb-3">
                            <strong>Zip Code:</strong> <span class="text-muted">${res.location.zipcode || 'N/A'}</span><br>
                            <strong>Mobile:</strong> <span class="badge ${res.risk.is_mobile ? 'bg-success' : 'bg-secondary'}">${res.risk.is_mobile ? 'Yes' : 'No'}</span><br>
                            <strong>VPN/Proxy:</strong> <span class="badge ${res.risk.is_vpn || res.risk.is_proxy ? 'bg-danger' : 'bg-secondary'}">${(res.risk.is_vpn || res.risk.is_proxy) ? 'Yes' : 'No'}</span><br>
                            <strong>Risk Score:</strong> <span class="text-muted">${res.risk.risk_score}</span>
                        </div>
                    </div>
                </div>
                <div class="mt-4">
                    <h5 class="mb-2">📍 Location on Map</h5>
                    <iframe
                        width="100%"
                        height="350"
                        frameborder="0"
                        style="border:0"
                        referrerpolicy="no-referrer-when-downgrade"
                        src="https://www.google.com/maps?q=${res.location.latitude},${res.location.longitude}&hl=en&z=14&output=embed"
                        allowfullscreen>
                    </iframe>
                </div>
            `);
        },
        error: function () {
            $('#custom_preloader').hide();
            $('#ip_content').html(`<p class="text-danger m-3">❌ Failed to fetch IP information. Please Eneter Valid IP Address</p>`);
        }
    });
});

 </script>
@endpush
