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
                          <div id="custom_preloader" style="display: none">
                            <div class="custom_loader"></div>
                            </div>
                 <div class="password_gen text-center">
                            <div class="row my-4">
                                <div class="col-md-5">
                                    <label>Width</label>
                                    <input type="number" id="img_width" class="form-control" placeholder="Enter value">
                                </div>

                                <div class="col-md-2">
                                    <label>BY:</label> <br>
                                    ╳
                                </div>
                                
                                
                                {{-- <div class="col-md-2">╳</div> --}}
                                <div class="col-md-5">
                                    <label>Height</label>
                                   <input type="number" id="img_height" class="form-control">
                                </div>
                            </div>

                            <div class="pass_btn mt-3">
                                {{-- <button class="copyBtn" id="copyTempBtn">Copy</button> --}}
                                <button class="generateBtn" id="convertBtn">Generate</button>
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
    $(document).on('click', '#convertBtn', function () {
        $('#custom_preloader').show();

        const img_width = $('#img_width').val();
        const img_height = $('#img_height').val();

        if (!img_width || !img_height) {
            alert("Please enter size.");
            $('#custom_preloader').hide();
            return;
        }

        const imgUrl = `https://placehold.co/${img_width}x${img_height}`;

        $('#custom_preloader').hide();
        $('#ip_content').html(`
            <div class="text-center mt-4">
                <img id="generated_img" src="${imgUrl}" alt="Generated Image" class="img-fluid rounded shadow mb-3" />
                <p class="text-muted">🖼️ ${img_width}x${img_height} Placeholder Image</p>

                <div class="d-flex justify-content-center gap-2 mt-2">
                    <button class="btn btn-primary btn-sm" onclick="copyToClipboard('${imgUrl}')">📋 Copy URL</button>
                    <button class="btn btn-success btn-sm" onclick="downloadImage('${imgUrl}', 'softnesttools-placeholder-${img_width}x${img_height}.png')">⬇️ Download</button>
                </div>
            </div>
        `);
    });

    function copyToClipboard(text) {
        const textarea = document.createElement("textarea");
        textarea.value = text;
        document.body.appendChild(textarea);
        textarea.select();
        try {
            document.execCommand('copy');
            alert("✅ Image URL copied to clipboard!");
        } catch (err) {
            alert("❌ Failed to copy the URL.");
        }
        document.body.removeChild(textarea);
    }

function downloadImage(url, filename) {
    fetch(url)
        .then(res => res.text())  // Use .text() for SVG content
        .then(svgContent => {
            const blob = new Blob([svgContent], { type: 'image/svg+xml' });
            const blobUrl = URL.createObjectURL(blob);
            const link = document.createElement('a');
            link.href = blobUrl;

            // Ensure the file extension is .svg
            if (!filename.endsWith('.svg')) {
                filename += '.svg';
            }

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
