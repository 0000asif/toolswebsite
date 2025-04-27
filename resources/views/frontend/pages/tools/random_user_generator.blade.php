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
                                ->where('slug', 'random-user-generator')
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
                        <div class="text-center mt-3">
    <button id="regenerate_user" class="btn btn-primary"><i class="bi bi-arrow-clockwise"></i>  Regenerate User</button>
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
 <!-- Regenerate Button -->

<script>
function fetchRandomUser() {
    $('#custom_preloader').show();
    $('#ip_content').empty();

    $.ajax({
        url: "https://randomuser.me/api/",
        type: "GET",
        success: function (res) {
            $('#custom_preloader').hide();
            let user = res.results[0];

            $('#ip_content').html(`
                <div class="container mt-4 p-4 rounded shadow" style="background-color:#f9f9f9;">
                    <div class="row">
                        <div class="col-md-4 text-center mb-3">
                            <img src="${user.picture.large}" class="rounded-circle shadow" alt="User Image">
                            <h5 class="mt-2">${user.name.title} ${user.name.first} ${user.name.last}</h5>
                            <p class="text-muted">${user.gender.toUpperCase()} | ${user.nat}</p>
                        </div>

                        <div class="col-md-8 mb-3">
                            <h5>📍 Location</h5>
                            <p>
                                <strong>Street:</strong> ${user.location.street.number}, ${user.location.street.name}<br>
                                <strong>City:</strong> ${user.location.city}<br>
                                <strong>State:</strong> ${user.location.state}<br>
                                <strong>Country:</strong> ${user.location.country}<br>
                                <strong>Postcode:</strong> ${user.location.postcode}<br>
                                <strong>Coordinates:</strong> Lat ${user.location.coordinates.latitude}, Lng ${user.location.coordinates.longitude}<br>
                                <strong>Timezone:</strong> ${user.location.timezone.description} (${user.location.timezone.offset})
                            </p>

                            <h5>📧 Contact</h5>
                            <p>
                                <strong>Email:</strong> ${user.email}<br>
                                <strong>Phone:</strong> ${user.phone}<br>
                                <strong>Cell:</strong> ${user.cell}
                            </p>

                            <h5>🧾 Identification</h5>
                            <p>
                                <strong>ID Type:</strong> ${user.id.name || 'N/A'}<br>
                                <strong>ID Value:</strong> ${user.id.value || 'N/A'}
                            </p>

                            <h5>📅 Dates</h5>
                            <p>
                                <strong>Date of Birth:</strong> ${new Date(user.dob.date).toLocaleString()} (${user.dob.age} years old)<br>
                                <strong>Registered:</strong> ${new Date(user.registered.date).toLocaleString()} (${user.registered.age} years)
                            </p>

                            <h5>🔐 Login Info</h5>
                            <p>
                                <strong>Username:</strong> ${user.login.username}<br>
                                <strong>Password:</strong> ${user.login.password}<br>
                                <strong>UUID:</strong> ${user.login.uuid}<br>
                                <strong>MD5:</strong> ${user.login.md5}<br>
                                <strong>SHA1:</strong> ${user.login.sha1}<br>
                                <strong>SHA256:</strong> ${user.login.sha256}
                            </p>
                        </div>
                    </div>
                </div>
            `);
        },
        error: function () {
            $('#custom_preloader').hide();
            $('#ip_content').html(`<p class="text-danger m-3">❌ Failed to fetch random user data.</p>`);
        }
    });
}

$(document).ready(function () {
    // Initial load
    fetchRandomUser();

    // Button click to regenerate user
    $(document).on('click', '#regenerate_user', function () {
        fetchRandomUser();
    });
});
</script>

@endpush
