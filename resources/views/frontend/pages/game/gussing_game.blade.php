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
            $tools = App\Models\Blog::where('status', 1)->where('slug', 'online-guessing-game')->first();
        @endphp

        <div class="container sirajganj_single_post_container">
            <div class="row mt-3">
                <div class="col-md-9">
                    <div class="postBody">
                        <h2 class="postBodyTitle">{{ $tools->title ?? 'Average Calculator' }}</h2>
                    </div>
                    <input type="text" id="toolsID" value="{{ $tools->id }}" hidden>

                    {{-- ========== Tools Section ========== --}}
                    <div class="mainTools">
                       <div class="container">
                              <div class="game_card">
                                 <h2 class="card_title">Guessing Game</h2>
                                 <div class="card_body">
                                    <form>
                                    <div class="top_body">
                                       <label for="input_section">Guess a number between 1 to 5:</label>
                                       <input type="number" min="1" max="5" required placeholder="Enter number 1 to 5" id="input_section">
                                    </div>
                                    <div class="text-center my-3">
                                       <button class="generateBtn" id="btn_id" type="submit">Check Result</button>
                                    </div>
                                    </form>
                                    <p class="wonMassage"></p>
                                    <p class="reamain_attempt"></p>
                                 </div>
                              </div>
                              </div>

                    </div>

                    {{-- ========= Description ========= --}}
                    <div class="postBodyDesc">
                        <h3 class="my-3 text-start">Total View : <span>{{ $tools->view ?? 0 }}</span></h3>
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
<script>
   //inisizitaion

let totalAttemp = 5;
let attemp = 0;
let totalWon = 0;
let totalLoss = 0;

//finde elements

let from = document.querySelector("form");
let card_body = document.querySelector(".card_body");
let input_section = document.querySelector("#input_section");
let button = document.querySelector("#btn_id");
let WonMassage = document.querySelector(".wonMassage");
let reamainAttempt = document.querySelector(".reamain_attempt");
let lossWonMassage = document.createElement("p");

from.addEventListener("submit", function (event) {
 event.preventDefault();
 attemp++;
 if (attemp == 5) {
  input_section.disabled = true;
  button.disabled = true;
 } if (attemp < 6) {
  let guessNumber = Number(input_section.value);
  checkResult(guessNumber);
  reamainAttempt.innerHTML = `Remaining Attemp ${totalAttemp - attemp}`;
 }
 input_section.value = "";
});

function checkResult(input_section) {
 let getRandomNumber = randomNumber(5);
 if (getRandomNumber === input_section) {
  WonMassage.innerHTML = `You Have won`;
  totalWon++;
 } else {
  WonMassage.innerHTML = `Your Have loss Random Number was ${getRandomNumber}`;
  totalLoss++;
 }
 lossWonMassage.innerHTML = `Won : ${totalWon} , Loss : ${totalLoss}`;
 lossWonMassage.classList.add("larg");
 card_body.appendChild(lossWonMassage);
}
function randomNumber(collect) {
 return Math.floor(Math.random() * collect) + 1;
};

</script>
@endpush
