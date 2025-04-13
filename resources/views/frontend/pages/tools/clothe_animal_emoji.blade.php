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
                            $tools = App\Models\Blog::where('status', 1)->where('slug', 'clothing-animals-nature-emoji-copy')->first();
                        @endphp
                        <h2 class="postBodyTitle">{{ $tools->title ?? '' }}</h2>
                    </div>
                    <input type="text" id="toolsID" value="{{ $tools->id }}" hidden>
                    {{-- ========== Tools ========= --}}
                    <div class="mainTools">


                        <div class="container padding_zero">
                            <h2 class="text-center mb-4">Click Any Icon or softEmoji to Copy</h2>

                            <!-- Copied Notification -->
                            <div class="copied-alert" id="copied-alert">Copied!</div>
                                    <div class="flex flex-wrap">
                                        <div class="softEmoji softEmoji-button">🧳</div>
                                        <div class="softEmoji softEmoji-button">🌂</div>
                                        <div class="softEmoji softEmoji-button">☂️</div>
                                        <div class="softEmoji softEmoji-button">🧵</div>
                                        <div class="softEmoji softEmoji-button">🪡</div>
                                        <div class="softEmoji softEmoji-button">🪢</div>
                                        <div class="softEmoji softEmoji-button">🪭</div>
                                        <div class="softEmoji softEmoji-button">🧶</div>
                                        <div class="softEmoji softEmoji-button">👓</div>
                                        <div class="softEmoji softEmoji-button">🕶</div>
                                        <div class="softEmoji softEmoji-button">🥽</div>
                                        <div class="softEmoji softEmoji-button">🥼</div>
                                        <div class="softEmoji softEmoji-button">🦺</div>
                                        <div class="softEmoji softEmoji-button">👔</div>
                                        <div class="softEmoji softEmoji-button">👕</div>
                                        <div class="softEmoji softEmoji-button">👖</div>
                                        <div class="softEmoji softEmoji-button">🧣</div>
                                        <div class="softEmoji softEmoji-button">🧤</div>
                                        <div class="softEmoji softEmoji-button">🧥</div>
                                        <div class="softEmoji softEmoji-button">🧦</div>
                                        <div class="softEmoji softEmoji-button">👗</div>
                                        <div class="softEmoji softEmoji-button">👘</div>
                                        <div class="softEmoji softEmoji-button">🥻</div>
                                        <div class="softEmoji softEmoji-button">🩴</div>
                                        <div class="softEmoji softEmoji-button">🩱</div>
                                        <div class="softEmoji softEmoji-button">🩲</div>
                                        <div class="softEmoji softEmoji-button">🩳</div>
                                        <div class="softEmoji softEmoji-button">👙</div>
                                        <div class="softEmoji softEmoji-button">👚</div>
                                        <div class="softEmoji softEmoji-button">👛</div>
                                        <div class="softEmoji softEmoji-button">👜</div>
                                        <div class="softEmoji softEmoji-button">👝</div>
                                        <div class="softEmoji softEmoji-button">🎒</div>
                                        <div class="softEmoji softEmoji-button">👞</div>
                                        <div class="softEmoji softEmoji-button">👟</div>
                                        <div class="softEmoji softEmoji-button">🥾</div>
                                        <div class="softEmoji softEmoji-button">🥿</div>
                                        <div class="softEmoji softEmoji-button">👠</div>
                                        <div class="softEmoji softEmoji-button">👡</div>
                                        <div class="softEmoji softEmoji-button">🩰</div>
                                        <div class="softEmoji softEmoji-button">👢</div>
                                        <div class="softEmoji softEmoji-button">👑</div>
                                        <div class="softEmoji softEmoji-button">👒</div>
                                        <div class="softEmoji softEmoji-button">🎩</div>
                                        <div class="softEmoji softEmoji-button">🎓</div>
                                        <div class="softEmoji softEmoji-button">🧢</div>
                                        <div class="softEmoji softEmoji-button">⛑</div>
                                        <div class="softEmoji softEmoji-button">🪖</div>
                                        <div class="softEmoji softEmoji-button">💄</div>
                                        <div class="softEmoji softEmoji-button">💍</div>
                                        <div class="softEmoji softEmoji-button">💼</div>
                                    </div>

                                    <div class="softEmojiTitle">
                                        <h2>Animals & Nature</h2>
                                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Consectetur vero quae voluptatum ipsum assumenda
                                            molestiae repellat deserunt excepturi suscipit illo porro quam mollitia dolores qui, veniam natus ipsam
                                            recusandae, accusantium non quasi et.</p>
                                    </div>

                                    <div class="flex flex-wrap">
                                        <div class="softEmoji softEmoji-button">🐶</div>
                                        <div class="softEmoji softEmoji-button">🐱</div>
                                        <div class="softEmoji softEmoji-button">🐭</div>
                                        <div class="softEmoji softEmoji-button">🐹</div>
                                        <div class="softEmoji softEmoji-button">🐰</div>
                                        <div class="softEmoji softEmoji-button">🦊</div>
                                        <div class="softEmoji softEmoji-button">🐻</div>
                                        <div class="softEmoji softEmoji-button">🐼</div>
                                        <div class="softEmoji softEmoji-button">🐻&zwj;❄️</div>
                                        <div class="softEmoji softEmoji-button">🐨</div>
                                        <div class="softEmoji softEmoji-button">🐯</div>
                                        <div class="softEmoji softEmoji-button">🦁</div>
                                        <div class="softEmoji softEmoji-button">🐮</div>
                                        <div class="softEmoji softEmoji-button">🐷</div>
                                        <div class="softEmoji softEmoji-button">🐽</div>
                                        <div class="softEmoji softEmoji-button">🐸</div>
                                        <div class="softEmoji softEmoji-button">🐵</div>
                                        <div class="softEmoji softEmoji-button">🙈</div>
                                        <div class="softEmoji softEmoji-button">🙉</div>
                                        <div class="softEmoji softEmoji-button">🙊</div>
                                        <div class="softEmoji softEmoji-button">🐒</div>
                                        <div class="softEmoji softEmoji-button">🐔</div>
                                        <div class="softEmoji softEmoji-button">🐧</div>
                                        <div class="softEmoji softEmoji-button">🐦</div>
                                        <div class="softEmoji softEmoji-button">🐦&zwj;⬛</div>
                                        <div class="softEmoji softEmoji-button">🐤</div>
                                        <div class="softEmoji softEmoji-button">🐣</div>
                                        <div class="softEmoji softEmoji-button">🐥</div>
                                        <div class="softEmoji softEmoji-button">🦆</div>
                                        <div class="softEmoji softEmoji-button">🦅</div>
                                        <div class="softEmoji softEmoji-button">🦉</div>
                                        <div class="softEmoji softEmoji-button">🦇</div>
                                        <div class="softEmoji softEmoji-button">🐺</div>
                                        <div class="softEmoji softEmoji-button">🐗</div>
                                        <div class="softEmoji softEmoji-button">🐴</div>
                                        <div class="softEmoji softEmoji-button">🦄</div>
                                        <div class="softEmoji softEmoji-button">🐝</div>
                                        <div class="softEmoji softEmoji-button">🪱</div>
                                        <div class="softEmoji softEmoji-button">🐛</div>
                                        <div class="softEmoji softEmoji-button">🦋</div>
                                        <div class="softEmoji softEmoji-button">🐌</div>
                                        <div class="softEmoji softEmoji-button">🐞</div>
                                        <div class="softEmoji softEmoji-button">🐜</div>
                                        <div class="softEmoji softEmoji-button">🪰</div>
                                        <div class="softEmoji softEmoji-button">🪲</div>
                                        <div class="softEmoji softEmoji-button">🪳</div>
                                        <div class="softEmoji softEmoji-button">🦟</div>
                                        <div class="softEmoji softEmoji-button">🦗</div>
                                        <div class="softEmoji softEmoji-button">🕷</div>
                                        <div class="softEmoji softEmoji-button">🕸</div>
                                        <div class="softEmoji softEmoji-button">🦂</div>
                                        <div class="softEmoji softEmoji-button">🐢</div>
                                        <div class="softEmoji softEmoji-button">🐍</div>
                                        <div class="softEmoji softEmoji-button">🦎</div>
                                        <div class="softEmoji softEmoji-button">🦖</div>
                                        <div class="softEmoji softEmoji-button">🦕</div>
                                        <div class="softEmoji softEmoji-button">🐙</div>
                                        <div class="softEmoji softEmoji-button">🦑</div>
                                        <div class="softEmoji softEmoji-button">🦐</div>
                                        <div class="softEmoji softEmoji-button">🦞</div>
                                        <div class="softEmoji softEmoji-button">🦀</div>
                                        <div class="softEmoji softEmoji-button">🪼</div>
                                        <div class="softEmoji softEmoji-button">🪸</div>
                                        <div class="softEmoji softEmoji-button">🐡</div>
                                        <div class="softEmoji softEmoji-button">🐠</div>
                                        <div class="softEmoji softEmoji-button">🐟</div>
                                        <div class="softEmoji softEmoji-button">🐬</div>
                                        <div class="softEmoji softEmoji-button">🐳</div>
                                        <div class="softEmoji softEmoji-button">🐋</div>
                                        <div class="softEmoji softEmoji-button">🦈</div>
                                        <div class="softEmoji softEmoji-button">🐊</div>
                                        <div class="softEmoji softEmoji-button">🐅</div>
                                        <div class="softEmoji softEmoji-button">🐆</div>
                                        <div class="softEmoji softEmoji-button">🦓</div>
                                        <div class="softEmoji softEmoji-button">🫏</div>
                                        <div class="softEmoji softEmoji-button">🦍</div>
                                        <div class="softEmoji softEmoji-button">🦧</div>
                                        <div class="softEmoji softEmoji-button">🦣</div>
                                        <div class="softEmoji softEmoji-button">🐘</div>
                                        <div class="softEmoji softEmoji-button">🦛</div>
                                        <div class="softEmoji softEmoji-button">🦏</div>
                                        <div class="softEmoji softEmoji-button">🐪</div>
                                        <div class="softEmoji softEmoji-button">🐫</div>
                                        <div class="softEmoji softEmoji-button">🦒</div>
                                        <div class="softEmoji softEmoji-button">🦘</div>
                                        <div class="softEmoji softEmoji-button">🦬</div>
                                        <div class="softEmoji softEmoji-button">🐃</div>
                                        <div class="softEmoji softEmoji-button">🐂</div>
                                        <div class="softEmoji softEmoji-button">🐄</div>
                                        <div class="softEmoji softEmoji-button">🐎</div>
                                        <div class="softEmoji softEmoji-button">🐖</div>
                                        <div class="softEmoji softEmoji-button">🐏</div>
                                        <div class="softEmoji softEmoji-button">🐑</div>
                                        <div class="softEmoji softEmoji-button">🦙</div>
                                        <div class="softEmoji softEmoji-button">🐐</div>
                                        <div class="softEmoji softEmoji-button">🦌</div>
                                        <div class="softEmoji softEmoji-button">🫎</div>
                                        <div class="softEmoji softEmoji-button">🐕</div>
                                        <div class="softEmoji softEmoji-button">🐩</div>
                                        <div class="softEmoji softEmoji-button">🦮</div>
                                        <div class="softEmoji softEmoji-button">🐕&zwj;🦺</div>
                                        <div class="softEmoji softEmoji-button">🐈</div>
                                        <div class="softEmoji softEmoji-button">🐈&zwj;⬛</div>
                                        <div class="softEmoji softEmoji-button">🪽</div>
                                        <div class="softEmoji softEmoji-button">🪶</div>
                                        <div class="softEmoji softEmoji-button">🐓</div>
                                        <div class="softEmoji softEmoji-button">🦃</div>
                                        <div class="softEmoji softEmoji-button">🦤</div>
                                        <div class="softEmoji softEmoji-button">🦚</div>
                                        <div class="softEmoji softEmoji-button">🦜</div>
                                        <div class="softEmoji softEmoji-button">🦢</div>
                                        <div class="softEmoji softEmoji-button">🪿</div>
                                        <div class="softEmoji softEmoji-button">🦩</div>
                                        <div class="softEmoji softEmoji-button">🕊</div>
                                        <div class="softEmoji softEmoji-button">🐇</div>
                                        <div class="softEmoji softEmoji-button">🦝</div>
                                        <div class="softEmoji softEmoji-button">🦨</div>
                                        <div class="softEmoji softEmoji-button">🦡</div>
                                        <div class="softEmoji softEmoji-button">🦫</div>
                                        <div class="softEmoji softEmoji-button">🦦</div>
                                        <div class="softEmoji softEmoji-button">🦥</div>
                                        <div class="softEmoji softEmoji-button">🐁</div>
                                        <div class="softEmoji softEmoji-button">🐀</div>
                                        <div class="softEmoji softEmoji-button">🐿</div>
                                        <div class="softEmoji softEmoji-button">🦔</div>
                                        <div class="softEmoji softEmoji-button">🐾</div>
                                        <div class="softEmoji softEmoji-button">🐉</div>
                                        <div class="softEmoji softEmoji-button">🐲</div>
                                        <div class="softEmoji softEmoji-button">🐦&zwj;🔥</div>
                                        <div class="softEmoji softEmoji-button">🌵</div>
                                        <div class="softEmoji softEmoji-button">🎄</div>
                                        <div class="softEmoji softEmoji-button">🌲</div>
                                        <div class="softEmoji softEmoji-button">🌳</div>
                                        <div class="softEmoji softEmoji-button">🌴</div>
                                        <div class="softEmoji softEmoji-button">🪹</div>
                                        <div class="softEmoji softEmoji-button">🪺</div>
                                        <div class="softEmoji softEmoji-button">🪵</div>
                                        <div class="softEmoji softEmoji-button">🌱</div>
                                        <div class="softEmoji softEmoji-button">🌿</div>
                                        <div class="softEmoji softEmoji-button">☘️</div>
                                        <div class="softEmoji softEmoji-button">🍀</div>
                                        <div class="softEmoji softEmoji-button">🎍</div>
                                        <div class="softEmoji softEmoji-button">🪴</div>
                                        <div class="softEmoji softEmoji-button">🎋</div>
                                        <div class="softEmoji softEmoji-button">🍃</div>
                                        <div class="softEmoji softEmoji-button">🍂</div>
                                        <div class="softEmoji softEmoji-button">🍁</div>
                                        <div class="softEmoji softEmoji-button">🍄</div>
                                        <div class="softEmoji softEmoji-button">🍄&zwj;🟫</div>
                                        <div class="softEmoji softEmoji-button">🐚</div>
                                        <div class="softEmoji softEmoji-button">🪨</div>
                                        <div class="softEmoji softEmoji-button">🌾</div>
                                        <div class="softEmoji softEmoji-button">💐</div>
                                        <div class="softEmoji softEmoji-button">🌷</div>
                                        <div class="softEmoji softEmoji-button">🪷</div>
                                        <div class="softEmoji softEmoji-button">🌹</div>
                                        <div class="softEmoji softEmoji-button">🥀</div>
                                        <div class="softEmoji softEmoji-button">🌺</div>
                                        <div class="softEmoji softEmoji-button">🌸</div>
                                        <div class="softEmoji softEmoji-button">🪻</div>
                                        <div class="softEmoji softEmoji-button">🌼</div>
                                        <div class="softEmoji softEmoji-button">🌻</div>
                                        <div class="softEmoji softEmoji-button">🌞</div>
                                        <div class="softEmoji softEmoji-button">🌝</div>
                                        <div class="softEmoji softEmoji-button">🌛</div>
                                        <div class="softEmoji softEmoji-button">🌜</div>
                                        <div class="softEmoji softEmoji-button">🌚</div>
                                        <div class="softEmoji softEmoji-button">🌕</div>
                                        <div class="softEmoji softEmoji-button">🌖</div>
                                        <div class="softEmoji softEmoji-button">🌗</div>
                                        <div class="softEmoji softEmoji-button">🌘</div>
                                        <div class="softEmoji softEmoji-button">🌑</div>
                                        <div class="softEmoji softEmoji-button">🌒</div>
                                        <div class="softEmoji softEmoji-button">🌓</div>
                                        <div class="softEmoji softEmoji-button">🌔</div>
                                        <div class="softEmoji softEmoji-button">🌙</div>
                                        <div class="softEmoji softEmoji-button">🌎</div>
                                        <div class="softEmoji softEmoji-button">🌍</div>
                                        <div class="softEmoji softEmoji-button">🌏</div>
                                        <div class="softEmoji softEmoji-button">🪐</div>
                                        <div class="softEmoji softEmoji-button">💫</div>
                                        <div class="softEmoji softEmoji-button">⭐️</div>
                                        <div class="softEmoji softEmoji-button">🌟</div>
                                        <div class="softEmoji softEmoji-button">✨</div>
                                        <div class="softEmoji softEmoji-button">⚡️</div>
                                        <div class="softEmoji softEmoji-button">☄️</div>
                                        <div class="softEmoji softEmoji-button">💥</div>
                                        <div class="softEmoji softEmoji-button">🔥</div>
                                        <div class="softEmoji softEmoji-button">🌪</div>
                                        <div class="softEmoji softEmoji-button">🌈</div>
                                        <div class="softEmoji softEmoji-button">☀️</div>
                                        <div class="softEmoji softEmoji-button">🌤</div>
                                        <div class="softEmoji softEmoji-button">⛅️</div>
                                        <div class="softEmoji softEmoji-button">🌥</div>
                                        <div class="softEmoji softEmoji-button">☁️</div>
                                        <div class="softEmoji softEmoji-button">🌦</div>
                                        <div class="softEmoji softEmoji-button">🌧</div>
                                        <div class="softEmoji softEmoji-button">⛈</div>
                                        <div class="softEmoji softEmoji-button">🌩</div>
                                        <div class="softEmoji softEmoji-button">🌨</div>
                                        <div class="softEmoji softEmoji-button">❄️</div>
                                        <div class="softEmoji softEmoji-button">☃️</div>
                                        <div class="softEmoji softEmoji-button">⛄️</div>
                                        <div class="softEmoji softEmoji-button">🌬</div>
                                        <div class="softEmoji softEmoji-button">💨</div>
                                        <div class="softEmoji softEmoji-button">💧</div>
                                        <div class="softEmoji softEmoji-button">💦</div>
                                        <div class="softEmoji softEmoji-button">🫧</div>
                                        <div class="softEmoji softEmoji-button">☔️</div>
                                        <div class="softEmoji softEmoji-button">☂️</div>
                                        <div class="softEmoji softEmoji-button">🌊</div>
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
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script>
  document.querySelectorAll('.softEmoji-button').forEach(button => {
    button.addEventListener('click', () => {
      const text = button.textContent;
      navigator.clipboard.writeText(text).then(() => {
        const alert = document.getElementById('copied-alert');
        alert.style.display = 'block';
        setTimeout(() => {
          alert.style.display = 'none';
        }, 1000);
      });
    });
  });
</script>

@endpush
