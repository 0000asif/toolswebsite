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
 /* Fullscreen preloader overlay */
#custom_preloader {
  position: fixed;
  inset: 0;
  background-color: rgba(0, 0, 0, 0.6); /* transparent black background */
  display: flex;
  align-items: center;
  justify-content: center;
  z-index: 9999;
}

/* Loader animation */
.custom_loader {
  width: 60px;
  aspect-ratio: 1;
  color: #00bcd4;
  position: relative;
  animation: l40 0.5s infinite alternate;
}

.custom_loader:before,
.custom_loader:after {
  content: "";
  position: absolute;
  inset: 0;
  background-size: 25px 25px;
  background-position: 0 0, 100% 0, 100% 100%, 0 100%;
  background-repeat: no-repeat;
}

.custom_loader:before {
  background-image:
    radial-gradient(farthest-side at top    left , currentColor 96%, #0000),
    radial-gradient(farthest-side at top    right, currentColor 96%, #0000),
    radial-gradient(farthest-side at bottom right, currentColor 96%, #0000),
    radial-gradient(farthest-side at bottom left , currentColor 96%, #0000);
  animation: l40-1 1s infinite;
}

.custom_loader:after {
  background-image:
    radial-gradient(farthest-side at top    left , #0000 94%, currentColor 96%),
    radial-gradient(farthest-side at top    right, #0000 94%, currentColor 96%),
    radial-gradient(farthest-side at bottom right, #0000 94%, currentColor 96%),
    radial-gradient(farthest-side at bottom left , #0000 94%, currentColor 96%);
  animation: l40-2 1s infinite;
}

@keyframes l40 {
  0% {
    transform: scale(1);
  }
  100% {
    transform: scale(1.05);
  }
}

@keyframes l40-1 {
  0%, 10%, 90%, 100% { inset: 0 }
  40%, 60% { inset: -10px }
}

@keyframes l40-2 {
  0%, 40% { transform: rotate(0deg) }
  60%, 100% { transform: rotate(90deg) }
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
        <div id="custom_preloader">
                            <div class="custom_loader"></div>
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
     $(document).ready(function () {
    $('#custom_preloader').show();

    $.ajax({
        url: "https://api.ipquery.io/",
        type: "GET",
        success: function (data) {
            const ip = data;

            $.ajax({
                url: "https://api.ipapi.is/?q=" + ip,
                type: "GET",
                success: function (res) {
                    $('#custom_preloader').hide();
                    $('#ip_content').html(`
                                <div class="container mt-4 p-4 rounded shadow" style="background-color:#f9f9f9;">
                                <h4 class="mb-4 text-primary">🌐 IP & Location Info : ${res.ip}</h4>
                                <div class="row">
                                    <div class="col-md-6 mb-3">
                                        <strong>Country Code:</strong> <span class="text-dark"> ${res.location.country_code}</span><br>
                                        <strong>Currency Code:</strong> <span class="text-dark"> ${res.location.currency_code}</span><br>
                                        <strong>Calling Code:</strong> <span class="text-muted"> ${res.location.calling_code}</span><br>
                                        <strong>ASN:</strong> <span class="text-muted"> ${res.location.continent}</span>
                                    </div>
                                    <div class="col-md-6 mb-3">
                                        <strong>City:</strong> <span class="text-dark"> ${res.location.city}</span><br>
                                        <strong>State:</strong> <span class="text-muted"> ${res.location.state}</span><br>
                                        <strong>Country:</strong> <span class="text-muted">${res.location.country}</span><br/>
                                        <strong>Zip Code:</strong> <span class="text-muted">${res.location.zip}</span>
                                    </div>
                                </div>

                                <div class="row">
                                    <div class="col-md-6 mb-3">
                                        <strong>Latitude:</strong> <span class="text-dark">${res.location.latitude}</span><br>
                                        <strong>Longitude:</strong> <span class="text-dark">${res.location.longitude}</span><br>
                                        <strong>Time Zone:</strong> <span class="text-muted">${res.location.timezone}</span><br>
                                        <strong>Local Time:</strong> <span class="text-muted">${res.location.local_time}</span>
                                    </div>
                                    <div class="col-md-6 mb-3">
                                        <strong>Zip Code:</strong> <span class="text-muted">${res.location.state}</span><br>
                                        <strong>Mobile:</strong> <span class="badge bg-success">${res.location.state}</span><br>
                                        <strong>VPN/Proxy:</strong> <span class="badge bg-success">${res.location.state}</span><br>
                                        <strong>Risk Score:</strong> <span class="text-muted">${res.location.state}</span>
                                    </div>
                                     <h4 class=" text-primary">NetWork : ${res.ip}</h4>
                                    <div class="col-md-6 mb-3">
                                        <strong>NetWork Name:</strong> <span class="text-muted">${res.asn.org}</span><br>
                                        <strong>Domain Name:</strong> <span class="badge bg-success">${res.asn.domain}</span><br>
                                        <strong>Email:</strong> <span class="badge bg-success">${res.asn.abuse}</span><br>
                                        <strong>Address :</strong> <span class="text-muted">${res.abuse.address}</span> <br/>
                                        <strong>Whois Address :</strong> <span class="text-muted">${res.abuse.whois}</span>
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
                    $('#preloader').hide();
                    console.error("Error getting detailed IP info.");
                }
            });
        },
        error: function () {
            $('#preloader').hide();
            console.error("Error getting IP address.");
        }
    });
});

    </script>
@endpush
