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
                                ->where('slug', 'current-position-of-the-iss')
                                ->first();
                        @endphp
                        <h2 class="postBodyTitle">{{ $tools->title ?? '' }}</h2>
                    </div>
                    <input type="text" id="toolsID" value="{{ $tools->id }}" hidden>
                    {{-- ========== Tools ========= --}}
                    <div class="mainTools">
                    <div class="text-center">
                        <button id="refresh_btn" class="btn btn-primary "><i class="bi bi-arrow-clockwise"></i>  Refresh Location</button>
                    </div>
                    <div id="custom_preloader" style="display: none">
                            <div class="custom_loader"></div>
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
    function loadISSLocation() {
        $('#custom_preloader').show();
        $('#ip_content').empty();

        $.ajax({
            url: "http://api.open-notify.org/iss-now.json",
            type: "GET",
            success: function (res) {
                $('#custom_preloader').hide();

                if (res.message === "success") {
                    const lat = res.iss_position.latitude;
                    const lon = res.iss_position.longitude;

                    $('#ip_content').html(`
                        <div class="container p-4 rounded shadow" style="background-color:#f9f9f9;">
                            <h4 class="mb-4 text-primary">🛰️ ISS Current Location</h4>
                            <ul class="list-group mb-3">
                                <li class="list-group-item">🌐 Latitude: ${lat}</li>
                                <li class="list-group-item">🌐 Longitude: ${lon}</li>
                            </ul>
                            <h5 class="mb-2">📍 Location on Map</h5>
                            <iframe
                                width="100%"
                                height="350"
                                frameborder="0"
                                style="border:0"
                                referrerpolicy="no-referrer-when-downgrade"
                                src="https://www.google.com/maps?q=${lat},${lon}&hl=en&z=4&output=embed"
                                allowfullscreen>
                            </iframe>
                        </div>
                    `);
                } else {
                    $('#ip_content').html(`<p class="text-danger m-3">❌ Failed to retrieve ISS data.</p>`);
                }
            },
            error: function () {
                $('#custom_preloader').hide();
                $('#ip_content').html(`<p class="text-danger m-3">❌ Could not connect to ISS location API.</p>`);
            }
        });
    }

    // Initial load
    $(document).ready(function () {
        loadISSLocation();

        // On button click
        $('#refresh_btn').on('click', function () {
            loadISSLocation();
        });
    });
</script>

@endpush
