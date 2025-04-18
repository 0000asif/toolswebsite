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
     
    </style>
    <div class="singlePageBg course-home-section">

        <div class="container sirajganj_single_post_container">
            <div class="row mt-3">

                <div class="col-md-12">
                    <div class="postBody">
                        @php
                            $tools = App\Models\Blog::where('status', 1)
                                ->where('slug', 'free-meme-image-download')
                                ->first();
                        @endphp
                        <h2 class="postBodyTitle">{{ $tools->title ?? '' }}</h2>
                    </div>
                    <input type="text" id="toolsID" value="{{ $tools->id }}" hidden>
                    {{-- ========== Tools ========= --}}
                    <div class="mainTools">
                          
                <div id="custom_preloader" style="display: none">
                            <div class="custom_loader"></div>
                            </div>
                       <div class="container">
    <div id="ip_content" class="row"></div>
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
<!-- Script -->
<script>
$(document).ready(function(){
    $('#custom_preloader').show();

    $.ajax({
        url: "https://api.imgflip.com/get_memes",
        type: "GET",
        success: function(response) {
            $('#custom_preloader').hide();

            if (response.success) {
                const memes = response.data.memes;
                let html = '';

                memes.forEach((meme, index) => {
                    html += `
                        <div class="col-6 col-sm-4 col-md-3 mb-3">
                            <div class="card h-100 shadow-sm">
                                <img src="${meme.url}" class="card-img-top" alt="${meme.name}">
                                <div class="card-body d-flex flex-column">
                                    <h6 class="card-title">${meme.name}</h6>
                                    <p class="text-muted mb-2">🖼️ ${meme.width}x${meme.height}</p>
                                    <button class="btn btn-success btn-sm mt-auto" onclick="downloadImage('${meme.url}', '${meme.name.replace(/[^a-z0-9]/gi, '_').toLowerCase()}.jpg')">
                                        <i class="bi bi-download"></i> Download
                                    </button>
                                </div>
                            </div>
                        </div>
                    `;
                });

                $('#ip_content').html(html);
            } else {
                $('#ip_content').html('<p class="text-danger">❌ Failed to fetch memes.</p>');
            }
        },
        error: function() {
            $('#custom_preloader').hide();
            $('#ip_content').html('<p class="text-danger">❌ Error loading memes.</p>');
        }
    });
});

// Image downloader function
function downloadImage(url, filename) {
    fetch(url)
        .then(response => response.blob())
        .then(blob => {
            const blobUrl = URL.createObjectURL(blob);
            const link = document.createElement('a');
            link.href = blobUrl;
            link.download = filename;
            document.body.appendChild(link);
            link.click();
            document.body.removeChild(link);
            URL.revokeObjectURL(blobUrl);
        })
        .catch(() => {
            alert("❌ Failed to download image.");
        });
}

</script>


@endpush
