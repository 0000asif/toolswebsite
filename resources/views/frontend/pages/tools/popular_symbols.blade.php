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
                                ->where('slug', 'popular-symbols-emoji-icon-copy-and-paste')
                                ->first();
                        @endphp
                        <h2 class="postBodyTitle">{{ $tools->title ?? '' }}</h2>
                    </div>
                    <input type="text" id="toolsID" value="{{ $tools->id }}" hidden>
                    {{-- ========== Tools ========= --}}
                    <div class="mainTools">

                        <div class="container padding_zero">
                            <h2 class="text-center mb-4">Click Any Icon or softEmoji to Copy</h2>
                            <div class="copied-alert" id="copied-alert">Copied!</div>
                                <ul>
                                    <li class="h2copy">
                                        <h2>Popular Symbols</h2>
                                        <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Officiis, explicabo tempore quae suscipit a ratione, aut eius cum ab nisi, maxime libero.</p>
                                    </li>
                                    <ul>
                                        <li class="softnesttools_symbols">
                                            <span class="softnesttools_symbols_copy">❁</span>
                                            <div class="symbol-name">Floral Heart</div>
                                        </li>
                                        <li class="softnesttools_symbols">
                                            <span class="softnesttools_symbols_copy">❉</span>
                                            <div class="symbol-name">Snowflake</div>
                                        </li>
                                        <li class="softnesttools_symbols">
                                            <span class="softnesttools_symbols_copy">☟</span>
                                            <div class="symbol-name">White Down Pointing Index</div>
                                        </li>
                                        <li class="softnesttools_symbols">
                                            <span class="softnesttools_symbols_copy">☤</span>
                                            <div class="symbol-name">Caduceus</div>
                                        </li>
                                        <li class="softnesttools_symbols">
                                            <span class="softnesttools_symbols_copy">𝑜</span>
                                            <div class="symbol-name">Mathematical Italic Small O</div>
                                        </li>
                                        <li class="softnesttools_symbols">
                                            <span class="softnesttools_symbols_copy">✺</span>
                                            <div class="symbol-name">Sixteen Pointed Asterisk</div>
                                        </li>
                                        <li class="softnesttools_symbols">
                                            <span class="softnesttools_symbols_copy">𝓫</span>
                                            <div class="symbol-name">Mathematical Bold Script Small B</div>
                                        </li>
                                        <li class="softnesttools_symbols">
                                            <span class="softnesttools_symbols_copy">➳</span>
                                            <div class="symbol-name">Heavy Black-Feathered Rightwards Arrow</div>
                                        </li>
                                        <li class="softnesttools_symbols">
                                            <span class="softnesttools_symbols_copy">↬</span>
                                            <div class="symbol-name">Rightwards Arrow with Loop</div>
                                        </li>
                                        <li class="softnesttools_symbols">
                                            <span class="softnesttools_symbols_copy">✍</span>
                                            <div class="symbol-name">Writing Hand</div>
                                        </li>
                                        <li class="softnesttools_symbols">
                                            <span class="softnesttools_symbols_copy">𝑒</span>
                                            <div class="symbol-name">Mathematical Italic Small E</div>
                                        </li>
                                        <li class="softnesttools_symbols">
                                            <span class="softnesttools_symbols_copy">²</span>
                                            <div class="symbol-name">Superscript Two</div>
                                        </li>
                                        <li class="softnesttools_symbols">
                                            <span class="softnesttools_symbols_copy">🤵</span>
                                            <div class="symbol-name">Man in Tuxedo</div>
                                        </li>
                                        <li class="softnesttools_symbols">
                                            <span class="softnesttools_symbols_copy">❦</span>
                                            <div class="symbol-name">Floral Heart</div>
                                        </li>
                                        <li class="softnesttools_symbols">
                                            <span class="softnesttools_symbols_copy">』</span>
                                            <div class="symbol-name">Right Corner Bracket</div>
                                        </li>
                                        <li class="softnesttools_symbols">
                                            <span class="softnesttools_symbols_copy">♓︎</span>
                                            <div class="symbol-name">Pisces</div>
                                        </li>
                                        <li class="softnesttools_symbols">
                                            <span class="softnesttools_symbols_copy">☪</span>
                                            <div class="symbol-name">Star and Crescent</div>
                                        </li>
                                        <li class="softnesttools_symbols">
                                            <span class="softnesttools_symbols_copy">☜</span>
                                            <div class="symbol-name">White Left Pointing Index</div>
                                        </li>
                                        <li class="softnesttools_symbols">
                                            <span class="softnesttools_symbols_copy">☏</span>
                                            <div class="symbol-name">White Telephone</div>
                                        </li>
                                        <li class="softnesttools_symbols">
                                            <span class="softnesttools_symbols_copy">✽</span>
                                            <div class="symbol-name">Heavy Teardrop-Spoked Asterisk</div>
                                        </li>
                                        <li class="softnesttools_symbols">
                                            <span class="softnesttools_symbols_copy">☾</span>
                                            <div class="symbol-name">Last Quarter Moon</div>
                                        </li>
                                        <li class="softnesttools_symbols">
                                            <span class="softnesttools_symbols_copy">$</span>
                                            <div class="symbol-name">Dollar Sign</div>
                                        </li>
                                        <li class="softnesttools_symbols">
                                            <span class="softnesttools_symbols_copy">➤</span>
                                            <div class="symbol-name">Black Rightwards Arrowhead</div>
                                        </li>
                                        <li class="softnesttools_symbols">
                                            <span class="softnesttools_symbols_copy">⧽</span>
                                            <div class="symbol-name">Rightwards Arrow Above Reverse Tilde Operator</div>
                                        </li>
                                        <li class="softnesttools_symbols">
                                            <span class="softnesttools_symbols_copy">☈</span>
                                            <div class="symbol-name">Thunderstorm</div>
                                        </li>
                                        <li class="softnesttools_symbols">
                                            <span class="softnesttools_symbols_copy">☌</span>
                                            <div class="symbol-name">Conjunction</div>
                                        </li>
                                        <li class="softnesttools_symbols">
                                            <span class="softnesttools_symbols_copy">༄</span>
                                            <div class="symbol-name">Tibetan Mark Initial Yig Mgo Mdun Ma</div>
                                        </li>
                                        <li class="softnesttools_symbols">
                                            <span class="softnesttools_symbols_copy">ッ</span>
                                            <div class="symbol-name">Katakana Small Tu</div>
                                        </li>
                                        <li class="softnesttools_symbols">
                                            <span class="softnesttools_symbols_copy">𓃭</span>
                                            <div class="symbol-name">Egyptian Hieroglyph D058</div>
                                        </li>
                                        <li class="softnesttools_symbols">
                                            <span class="softnesttools_symbols_copy">❥</span>
                                            <div class="symbol-name">Rotated Heavy Black Heart Bullet</div>
                                        </li>
                                        <li class="softnesttools_symbols">
                                            <span class="softnesttools_symbols_copy">✉</span>
                                            <div class="symbol-name">Envelope</div>
                                        </li>
                                        <li class="softnesttools_symbols">
                                            <span class="softnesttools_symbols_copy">♱</span>
                                            <div class="symbol-name">East Syriac Cross</div>
                                        </li>
                                        <li class="softnesttools_symbols">
                                            <span class="softnesttools_symbols_copy">➥</span>
                                            <div class="symbol-name">Black Rightwards Arrow</div>
                                        </li>
                                        <li class="softnesttools_symbols">
                                            <span class="softnesttools_symbols_copy">💰</span>
                                            <div class="symbol-name">Money Bag</div>
                                        </li>
                                        <li class="softnesttools_symbols">
                                            <span class="softnesttools_symbols_copy">☽</span>
                                            <div class="symbol-name">Last Quarter Moon</div>
                                        </li>
                                        <li class="softnesttools_symbols">
                                            <span class="softnesttools_symbols_copy">ෆ</span>
                                            <div class="symbol-name">Sinhala Letter Alpapraana Kayanna</div>
                                        </li>
                                        <li class="softnesttools_symbols">
                                            <span class="softnesttools_symbols_copy">❧</span>
                                            <div class="symbol-name">Rotated Floral Heart Bullet</div>
                                        </li>
                                        <li class="softnesttools_symbols">
                                            <span class="softnesttools_symbols_copy">❋</span>
                                            <div class="symbol-name">Eight Teardrop-Spoked Propeller Asterisk</div>
                                        </li>
                                        <li class="softnesttools_symbols">
                                            <span class="softnesttools_symbols_copy">✧</span>
                                            <div class="symbol-name">White Four Pointed Star</div>
                                        </li>
                                        <li class="softnesttools_symbols">
                                            <span class="softnesttools_symbols_copy">⇢</span>
                                            <div class="symbol-name">Rightwards Dashed Arrow</div>
                                        </li>
                                        <li class="softnesttools_symbols">
                                            <span class="softnesttools_symbols_copy">☻</span>
                                            <div class="symbol-name">Black Smiling Face</div>
                                        </li>
                                        <li class="softnesttools_symbols">
                                            <span class="softnesttools_symbols_copy">﹚</span>
                                            <div class="symbol-name">Small Right Parenthesis</div>
                                        </li>
                                        <li class="softnesttools_symbols">
                                            <span class="softnesttools_symbols_copy">❤</span>
                                            <div class="symbol-name">Heavy Black Heart</div>
                                        </li>
                                        <li class="softnesttools_symbols">
                                            <span class="softnesttools_symbols_copy">☝</span>
                                            <div class="symbol-name">White Up Pointing Index</div>
                                        </li>
                                        <li class="softnesttools_symbols">
                                            <span class="softnesttools_symbols_copy">⭑</span>
                                            <div class="symbol-name">Heavy Teardrop-Spoked Asterisk</div>
                                        </li>
                                        <li class="softnesttools_symbols">
                                            <span class="softnesttools_symbols_copy">₁</span>
                                            <div class="symbol-name">Subscript One</div>
                                        </li>
                                        <li class="softnesttools_symbols">
                                            <span class="softnesttools_symbols_copy">⭒</span>
                                            <div class="symbol-name">Heavy Teardrop-Spoked Asterisk</div>
                                        </li>
                                        <li class="softnesttools_symbols">
                                            <span class="softnesttools_symbols_copy">〘</span>
                                            <div class="symbol-name">Left White Tortoise Shell Bracket</div>
                                        </li>
                                        <li class="softnesttools_symbols">
                                            <span class="softnesttools_symbols_copy">†</span>
                                            <div class="symbol-name">Dagger</div>
                                        </li>
                                        <li class="softnesttools_symbols">
                                            <span class="softnesttools_symbols_copy">𓃠</span>
                                            <div class="symbol-name">Egyptian Hieroglyph D059</div>
                                        </li>
                                        <li class="softnesttools_symbols">
                                            <span class="softnesttools_symbols_copy">❊</span>
                                            <div class="symbol-name">Eight Teardrop-Spoked Propeller Asterisk</div>
                                        </li>
                                        <li class="softnesttools_symbols">
                                            <span class="softnesttools_symbols_copy">★</span>
                                            <div class="symbol-name">Black Star</div>
                                        </li>
                                        <li class="softnesttools_symbols">
                                            <span class="softnesttools_symbols_copy">𐐂</span>
                                            <div class="symbol-name">Deseret Capital Letter Long I</div>
                                        </li>
                                        <li class="softnesttools_symbols">
                                            <span class="softnesttools_symbols_copy">✺</span>
                                            <div class="symbol-name">Sixteen Pointed Asterisk</div>
                                        </li>
                                        <li class="softnesttools_symbols">
                                            <span class="softnesttools_symbols_copy">⚘</span>
                                            <div class="symbol-name">Floral Heart</div>
                                        </li>
                                        <li class="softnesttools_symbols">
                                            <span class="softnesttools_symbols_copy">☽</span>
                                            <div class="symbol-name">Last Quarter Moon</div>
                                        </li>
                                        <li class="softnesttools_symbols">
                                            <span class="softnesttools_symbols_copy">❀</span>
                                            <div class="symbol-name">White Flor</div>
                                        </li>
                                        <li class="softnesttools_symbols">
                                            <span class="softnesttools_symbols_copy">❀</span>
                                            <div class="symbol-name">White Flor</div>
                                        </li>
                                        <li class="softnesttools_symbols">
                                            <span class="softnesttools_symbols_copy">♌︎</span>
                                            <div class="symbol-name">Leo</div>
                                        </li>
                                        <li class="softnesttools_symbols">
                                            <span class="softnesttools_symbols_copy">✼</span>
                                            <div class="symbol-name">Heavy Teardrop-Spoked Asterisk</div>
                                        </li>
                                        <li class="softnesttools_symbols">
                                            <span class="softnesttools_symbols_copy">﹙</span>
                                            <div class="symbol-name">Small Left Parenthesis</div>
                                        </li>
                                        <li class="softnesttools_symbols">
                                            <span class="softnesttools_symbols_copy">ღ</span>
                                            <div class="symbol-name">Georgian Letter Ghani</div>
                                        </li>
                                        <li class="softnesttools_symbols">
                                            <span class="softnesttools_symbols_copy">«</span>
                                            <div class="symbol-name">Left-Pointing Double Angle Quotation Mark</div>
                                        </li>
                                        <li class="softnesttools_symbols">
                                            <span class="softnesttools_symbols_copy">✞</span>
                                            <div class="symbol-name">Latin Cross</div>
                                        </li>
                                        <li class="softnesttools_symbols">
                                            <span class="softnesttools_symbols_copy">❖</span>
                                            <div class="symbol-name">Black Diamond Minus White X</div>
                                        </li>
                                        <li class="softnesttools_symbols">
                                            <span class="softnesttools_symbols_copy">𝓲</span>
                                            <div class="symbol-name">Mathematical Bold Script Small I</div>
                                        </li>
                                        <li class="softnesttools_symbols">
                                            <span class="softnesttools_symbols_copy">₂</span>
                                            <div class="symbol-name">Subscript Two</div>
                                        </li>
                                        <li class="softnesttools_symbols">
                                            <span class="softnesttools_symbols_copy">✧</span>
                                            <div class="symbol-name">White Four Pointed Star</div>
                                        </li>
                                        <li class="softnesttools_symbols">
                                            <span class="softnesttools_symbols_copy">☪</span>
                                            <div class="symbol-name">Star and Crescent</div>
                                        </li>
                                        <li class="softnesttools_symbols">
                                            <span class="softnesttools_symbols_copy">】</span>
                                            <div class="symbol-name">Right Corner Bracket</div>
                                        </li>
                                        <li class="softnesttools_symbols">
                                            <span class="softnesttools_symbols_copy">♒︎</span>
                                            <div class="symbol-name">Aquarius</div>
                                        </li>
                                        <li class="softnesttools_symbols">
                                            <span class="softnesttools_symbols_copy">🃏</span>
                                            <div class="symbol-name">Playing Card Black Joker</div>
                                        </li>
                                        <li class="softnesttools_symbols">
                                            <span class="softnesttools_symbols_copy">✱</span>
                                            <div class="symbol-name">Heavy Asterisk</div>
                                        </li>
                                        <li class="softnesttools_symbols">
                                            <span class="softnesttools_symbols_copy">✶</span>
                                            <div class="symbol-name">Six Pointed Black Star</div>
                                        </li>
                                        <li class="softnesttools_symbols">
                                            <span class="softnesttools_symbols_copy">┊</span>
                                            <div class="symbol-name">Light Vertical Bar</div>
                                        </li>
                                        <li class="softnesttools_symbols">
                                            <span class="softnesttools_symbols_copy">♪</span>
                                            <div class="symbol-name">Eighth Note</div>
                                        </li>
                                        <li class="softnesttools_symbols">
                                            <span class="softnesttools_symbols_copy">⤷</span>
                                            <div class="symbol-name">Rightwards Arrow with Corner Downwards</div>
                                        </li>
                                        <li class="softnesttools_symbols">
                                            <span class="softnesttools_symbols_copy">✗</span>
                                            <div class="symbol-name">Ballot X</div>
                                        </li>
                                        <li class="softnesttools_symbols">
                                            <span class="softnesttools_symbols_copy">⚝</span>
                                            <div class="symbol-name">Outlined White Star</div>
                                        </li>
                                        <li class="softnesttools_symbols">
                                            <span class="softnesttools_symbols_copy">☹</span>
                                            <div class="symbol-name">White Frowning Face</div>
                                        </li>
                                        <li class="softnesttools_symbols">
                                            <span class="softnesttools_symbols_copy">✆</span>
                                            <div class="symbol-name">Telephone Location Sign</div>
                                        </li>
                                        <li class="softnesttools_symbols">
                                            <span class="softnesttools_symbols_copy">𝓞</span>
                                            <div class="symbol-name">Mathematical Bold Script Capital O</div>
                                        </li>
                                        <li class="softnesttools_symbols">
                                            <span class="softnesttools_symbols_copy">☙</span>
                                            <div class="symbol-name">Reversed Rotated Floral Heart Bullet</div>
                                        </li>
                                        <li class="softnesttools_symbols">
                                            <span class="softnesttools_symbols_copy">✓</span>
                                            <div class="symbol-name">Check Mark</div>
                                        </li>
                                        <li class="softnesttools_symbols">
                                            <span class="softnesttools_symbols_copy">†</span>
                                            <div class="symbol-name">Dagger</div>
                                        </li>
                                        <li class="softnesttools_symbols">
                                            <span class="softnesttools_symbols_copy">⤵</span>
                                            <div class="symbol-name">Arrow Pointing Rightwards Then Curving Downwards</div>
                                        </li>
                                        <li class="softnesttools_symbols">
                                            <span class="softnesttools_symbols_copy">❥</span>
                                            <div class="symbol-name">Rotated Heavy Black Heart Bullet</div>
                                        </li>
                                        <li class="softnesttools_symbols">
                                            <span class="softnesttools_symbols_copy">ʚ</span>
                                            <div class="symbol-name">Latin Small Letter Closed Open E</div>
                                        </li>
                                        <li class="softnesttools_symbols">
                                            <span class="softnesttools_symbols_copy">✯</span>
                                            <div class="symbol-name">Pinwheel Star</div>
                                        </li>
                                        <li class="softnesttools_symbols">
                                            <span class="softnesttools_symbols_copy">✞</span>
                                            <div class="symbol-name">Latin Cross</div>
                                        </li>
                                        <li class="softnesttools_symbols">
                                            <span class="softnesttools_symbols_copy">⛧</span>
                                            <div class="symbol-name">Inverted Pentagram</div>
                                        </li>
                                        <li class="softnesttools_symbols">
                                            <span class="softnesttools_symbols_copy">⤹</span>
                                            <div class="symbol-name">Rightwards Arrow with Hook</div>
                                        </li>
                                        <li class="softnesttools_symbols">
                                            <span class="softnesttools_symbols_copy">《</span>
                                            <div class="symbol-name">Left Double Angle Bracket</div>
                                        </li>
                                        <li class="softnesttools_symbols">
                                            <span class="softnesttools_symbols_copy">✉</span>
                                            <div class="symbol-name">Envelope</div>
                                        </li>
                                        <li class="softnesttools_symbols">
                                            <span class="softnesttools_symbols_copy">℃</span>
                                            <div class="symbol-name">Degree Celsius</div>
                                        </li>
                                        <li class="softnesttools_symbols">
                                            <span class="softnesttools_symbols_copy">🏎</span>
                                            <div class="symbol-name">Racing Car</div>
                                        </li>
                                        <li class="softnesttools_symbols">
                                            <span class="softnesttools_symbols_copy">↳</span>
                                            <div class="symbol-name">Rightwards Arrow with Hook</div>
                                        </li>
                                        <li class="softnesttools_symbols">
                                            <span class="softnesttools_symbols_copy">〖</span>
                                            <div class="symbol-name">Left White Square Bracket</div>
                                        </li>
                                        <li class="softnesttools_symbols">
                                            <span class="softnesttools_symbols_copy">♋︎</span>
                                            <div class="symbol-name">Cancer</div>
                                        </li>
                                        <li class="softnesttools_symbols">
                                            <span class="softnesttools_symbols_copy">♕</span>
                                            <div class="symbol-name">White Chess Queen</div>
                                        </li>
                                        <li class="softnesttools_symbols">
                                            <span class="softnesttools_symbols_copy">꧁</span>
                                            <div class="symbol-name">Javanese Left Rerenggan</div>
                                        </li>
                                        <li class="softnesttools_symbols">
                                            <span class="softnesttools_symbols_copy">✿</span>
                                            <div class="symbol-name">Black Flor</div>
                                        </li>
                                        <li class="softnesttools_symbols">
                                            <span class="softnesttools_symbols_copy">🚦</span>
                                            <div class="symbol-name">Vertical Traffic Light</div>
                                        </li>
                                        <li class="softnesttools_symbols">
                                            <span class="softnesttools_symbols_copy">☠</span>
                                            <div class="symbol-name">Skull and Crossbones</div>
                                        </li>
                                        <li class="softnesttools_symbols">
                                            <span class="softnesttools_symbols_copy">☄</span>
                                            <div class="symbol-name">Comet</div>
                                        </li>
                                        <li class="softnesttools_symbols">
                                            <span class="softnesttools_symbols_copy">☽</span>
                                            <div class="symbol-name">Last Quarter Moon</div>
                                        </li>
                                        <li class="softnesttools_symbols">
                                            <span class="softnesttools_symbols_copy">❅</span>
                                            <div class="symbol-name">Tight Trifoliate Snowflake</div>
                                        </li>
                                        <li class="softnesttools_symbols">
                                            <span class="softnesttools_symbols_copy">☁</span>
                                            <div class="symbol-name">Cloud</div>
                                        </li>
                                        <li class="softnesttools_symbols">
                                            <span class="softnesttools_symbols_copy">𓆉</span>
                                            <div class="symbol-name">Egyptian Hieroglyph I011</div>
                                        </li>
                                        <li class="softnesttools_symbols">
                                            <span class="softnesttools_symbols_copy">▶</span>
                                            <div class="symbol-name">Black Right-Pointing Triangle</div>
                                        </li>
                                        <li class="softnesttools_symbols">
                                            <span class="softnesttools_symbols_copy">»</span>
                                            <div class="symbol-name">Right-Pointing Double Angle Quotation Mark</div>
                                        </li>
                                        <li class="softnesttools_symbols">
                                            <span class="softnesttools_symbols_copy">✑</span>
                                            <div class="symbol-name">Lower Right Pencil</div>
                                        </li>
                                        <li class="softnesttools_symbols">
                                            <span class="softnesttools_symbols_copy">⸢</span>
                                            <div class="symbol-name">Top Left Half Bracket</div>
                                        </li>
                                        <li class="softnesttools_symbols">
                                            <span class="softnesttools_symbols_copy">❝</span>
                                            <div class="symbol-name">Heavy Double Turned Comma Quotation Mark Ornament</div>
                                        </li>
                                        <li class="softnesttools_symbols">
                                            <span class="softnesttools_symbols_copy">ツ</span>
                                            <div class="symbol-name">Katakana Letter Tu</div>
                                        </li>
                                        <li class="softnesttools_symbols">
                                            <span class="softnesttools_symbols_copy">♥</span>
                                            <div class="symbol-name">Black Heart Suit</div>
                                        </li>
                                        <li class="softnesttools_symbols">
                                            <span class="softnesttools_symbols_copy">✔</span>
                                            <div class="symbol-name">Heavy Check Mark</div>
                                        </li>
                                        <li class="softnesttools_symbols">
                                            <span class="softnesttools_symbols_copy">『</span>
                                            <div class="symbol-name">Left White Corner Bracket</div>
                                        </li>
                                        <li class="softnesttools_symbols">
                                            <span class="softnesttools_symbols_copy">✦</span>
                                            <div class="symbol-name">Black Four Pointed Star</div>
                                        </li>
                                        <li class="softnesttools_symbols">
                                            <span class="softnesttools_symbols_copy">♀</span>
                                            <div class="symbol-name">Female Sign</div>
                                        </li>
                                        <li class="softnesttools_symbols">
                                            <span class="softnesttools_symbols_copy">☼</span>
                                            <div class="symbol-name">White Sun with Rays</div>
                                        </li>
                                        <li class="softnesttools_symbols">
                                            <span class="softnesttools_symbols_copy">✿</span>
                                            <div class="symbol-name">Black Flor</div>
                                        </li>
                                        <li class="softnesttools_symbols">
                                            <span class="softnesttools_symbols_copy">↴</span>
                                            <div class="symbol-name">Arrow Pointing Rightwards Then Curving Downwards</div>
                                        </li>
                                        <li class="softnesttools_symbols">
                                            <span class="softnesttools_symbols_copy">☞</span>
                                            <div class="symbol-name">White Right Pointing Index</div>
                                        </li>
                                        <li class="softnesttools_symbols">
                                            <span class="softnesttools_symbols_copy">☢</span>
                                            <div class="symbol-name">Radioactive Sign</div>
                                        </li>
                                        <li class="softnesttools_symbols">
                                            <span class="softnesttools_symbols_copy">✭</span>
                                            <div class="symbol-name">Heavy Outlined Black Star</div>
                                        </li>
                                        <li class="softnesttools_symbols">
                                            <span class="softnesttools_symbols_copy">☀</span>
                                            <div class="symbol-name">Black Sun with Rays</div>
                                        </li>
                                        <li class="softnesttools_symbols">
                                            <span class="softnesttools_symbols_copy">✦</span>
                                            <div class="symbol-name">Black Four Pointed Star</div>
                                        </li>
                                        <li class="softnesttools_symbols">
                                            <span class="softnesttools_symbols_copy">𝓼</span>
                                            <div class="symbol-name">Mathematical Bold Script Small S</div>
                                        </li>
                                        <li class="softnesttools_symbols">
                                            <span class="softnesttools_symbols_copy">↓</span>
                                            <div class="symbol-name">Downwards Arrow</div>
                                        </li>
                                        <li class="softnesttools_symbols">
                                            <span class="softnesttools_symbols_copy">☏</span>
                                            <div class="symbol-name">White Telephone</div>
                                        </li>
                                        <li class="softnesttools_symbols">
                                            <span class="softnesttools_symbols_copy">✒</span>
                                            <div class="symbol-name">Black Nib</div>
                                        </li>
                                        <li class="softnesttools_symbols">
                                            <span class="softnesttools_symbols_copy">𝓸</span>
                                            <div class="symbol-name">Mathematical Bold Script Small O</div>
                                        </li>
                                        <li class="softnesttools_symbols">
                                            <span class="softnesttools_symbols_copy">✮</span>
                                            <div class="symbol-name">Heavy Outlined Black Star</div>
                                        </li>
                                        <li class="softnesttools_symbols">
                                            <span class="softnesttools_symbols_copy">𝓈</span>
                                            <div class="symbol-name">Mathematical Script Small S</div>
                                        </li>
                                        <li class="softnesttools_symbols">
                                            <span class="softnesttools_symbols_copy">ℳ</span>
                                            <div class="symbol-name">Script Capital M</div>
                                        </li>
                                        <li class="softnesttools_symbols">
                                            <span class="softnesttools_symbols_copy">⋆</span>
                                            <div class="symbol-name">Star Operator</div>
                                        </li>
                                        <li class="softnesttools_symbols">
                                            <span class="softnesttools_symbols_copy">♫</span>
                                            <div class="symbol-name">Beamed Eighth Notes</div>
                                        </li>
                                        <li class="softnesttools_symbols">
                                            <span class="softnesttools_symbols_copy">♤</span>
                                            <div class="symbol-name">White Spade Suit</div>
                                        </li>
                                        <li class="softnesttools_symbols">
                                            <span class="softnesttools_symbols_copy">♔</span>
                                            <div class="symbol-name">White Chess King</div>
                                        </li>
                                        <li class="softnesttools_symbols">
                                            <span class="softnesttools_symbols_copy">꧂</span>
                                            <div class="symbol-name">Javanese Right Rerenggan</div>
                                        </li>
                                        <li class="softnesttools_symbols">
                                            <span class="softnesttools_symbols_copy">⊰</span>
                                            <div class="symbol-name">Precedes Above Single-Line Equals Sign</div>
                                        </li>
                                        <li class="softnesttools_symbols">
                                            <span class="softnesttools_symbols_copy">℉</span>
                                            <div class="symbol-name">Degree Fahrenheit</div>
                                        </li>
                                        <li class="softnesttools_symbols">
                                            <span class="softnesttools_symbols_copy">♛</span>
                                            <div class="symbol-name">Black Chess Queen</div>
                                        </li>
                                        <li class="softnesttools_symbols">
                                            <span class="softnesttools_symbols_copy">❁</span>
                                            <div class="symbol-name">Floral Heart</div>
                                        </li>
                                        <li class="softnesttools_symbols">
                                            <span class="softnesttools_symbols_copy">➤</span>
                                            <div class="symbol-name">Black Rightwards Arrowhead</div>
                                        </li>
                                        <li class="softnesttools_symbols">
                                            <span class="softnesttools_symbols_copy">☾</span>
                                            <div class="symbol-name">Last Quarter Moon</div>
                                        </li>
                                        <li class="softnesttools_symbols">
                                            <span class="softnesttools_symbols_copy">✖</span>
                                            <div class="symbol-name">Heavy Multiplication X</div>
                                        </li>
                                        <li class="softnesttools_symbols">
                                            <span class="softnesttools_symbols_copy">【</span>
                                            <div class="symbol-name">Left Black Lenticular Bracket</div>
                                        </li>
                                        <li class="softnesttools_symbols">
                                            <span class="softnesttools_symbols_copy">♚</span>
                                            <div class="symbol-name">Black Chess King</div>
                                        </li>
                                        <li class="softnesttools_symbols">
                                            <span class="softnesttools_symbols_copy">✩</span>
                                            <div class="symbol-name">Stress Outlined White Star</div>
                                        </li>
                                        <li class="softnesttools_symbols">
                                            <span class="softnesttools_symbols_copy">𝒜</span>
                                            <div class="symbol-name">Mathematical Script Capital A</div>
                                        </li>
                                        <li class="softnesttools_symbols">
                                            <span class="softnesttools_symbols_copy">𝓉</span>
                                            <div class="symbol-name">Mathematical Script Small T</div>
                                        </li>
                                        <li class="softnesttools_symbols">
                                            <span class="softnesttools_symbols_copy">♫</span>
                                            <div class="symbol-name">Beamed Eighth Notes</div>
                                        </li>
                                        <li class="softnesttools_symbols">
                                            <span class="softnesttools_symbols_copy">✰</span>
                                            <div class="symbol-name">Shadowed White Star</div>
                                        </li>
                                        <li class="softnesttools_symbols">
                                            <span class="softnesttools_symbols_copy">♐︎</span>
                                            <div class="symbol-name">Sagittarius</div>
                                        </li>
                                        <li class="softnesttools_symbols">
                                            <span class="softnesttools_symbols_copy">™</span>
                                            <div class="symbol-name">Trade Mark Sign</div>
                                        </li>
                                        <li class="softnesttools_symbols">
                                            <span class="softnesttools_symbols_copy">☻</span>
                                            <div class="symbol-name">Black Smiling Face</div>
                                        </li>
                                        <li class="softnesttools_symbols">
                                            <span class="softnesttools_symbols_copy">❆</span>
                                            <div class="symbol-name">Heavy Chevron Snowflake</div>
                                        </li>
                                        <li class="softnesttools_symbols">
                                            <span class="softnesttools_symbols_copy">｢</span>
                                            <div class="symbol-name">Halfwidth Left Corner Bracket</div>
                                        </li>
                                        <li class="softnesttools_symbols">
                                            <span class="softnesttools_symbols_copy">☠</span>
                                            <div class="symbol-name">Skull and Crossbones</div>
                                        </li>
                                        <li class="softnesttools_symbols">
                                            <span class="softnesttools_symbols_copy">☾</span>
                                            <div class="symbol-name">Last Quarter Moon</div>
                                        </li>
                                        <li class="softnesttools_symbols">
                                            <span class="softnesttools_symbols_copy">𓆸</span>
                                            <div class="symbol-name">Egyptian Hieroglyph I012</div>
                                        </li>
                                        <li class="softnesttools_symbols">
                                            <span class="softnesttools_symbols_copy">♡</span>
                                            <div class="symbol-name">White Heart Suit</div>
                                        </li>
                                        <li class="softnesttools_symbols">
                                            <span class="softnesttools_symbols_copy">❤</span>
                                            <div class="symbol-name">Heavy Black Heart</div>
                                        </li>
                                        <li class="softnesttools_symbols">
                                            <span class="softnesttools_symbols_copy">↺</span>
                                            <div class="symbol-name">Anticlockwise Open Circle Arrow</div>
                                        </li>
                                        <li class="softnesttools_symbols">
                                            <span class="softnesttools_symbols_copy">☆</span>
                                            <div class="symbol-name">White Star</div>
                                        </li>
                                        <li class="softnesttools_symbols">
                                            <span class="softnesttools_symbols_copy">・</span>
                                            <div class="symbol-name">Katakana Middle Dot</div>
                                        </li>
                                        <li class="softnesttools_symbols">
                                            <span class="softnesttools_symbols_copy">✪</span>
                                            <div class="symbol-name">Circled White Star</div>
                                        </li>
                                        <li class="softnesttools_symbols">
                                            <span class="softnesttools_symbols_copy">€</span>
                                            <div class="symbol-name">Euro Sign</div>
                                        </li>
                                        <li class="softnesttools_symbols">
                                            <span class="softnesttools_symbols_copy">♡</span>
                                            <div class="symbol-name">White Heart Suit</div>
                                        </li>
                                        <li class="softnesttools_symbols">
                                            <span class="softnesttools_symbols_copy">𖥸</span>
                                            <div class="symbol-name">Adlam Initial Exclamation Mark</div>
                                        </li>
                                        <li class="softnesttools_symbols">
                                            <span class="softnesttools_symbols_copy">♍︎</span>
                                            <div class="symbol-name">Virgo</div>
                                        </li>
                                        <li class="softnesttools_symbols">
                                            <span class="softnesttools_symbols_copy">❃</span>
                                            <div class="symbol-name">Heavy Teardrop-Spoked Asterisk</div>
                                        </li>
                                        <li class="softnesttools_symbols">
                                            <span class="softnesttools_symbols_copy">☯</span>
                                            <div class="symbol-name">Yin Yang</div>
                                        </li>
                                        <li class="softnesttools_symbols">
                                            <span class="softnesttools_symbols_copy">☂</span>
                                            <div class="symbol-name">Umbrella</div>
                                        </li>
                                        <li class="softnesttools_symbols">
                                            <span class="softnesttools_symbols_copy">✂</span>
                                            <div class="symbol-name">Black Scissors</div>
                                        </li>
                                        <li class="softnesttools_symbols">
                                            <span class="softnesttools_symbols_copy">❣</span>
                                            <div class="symbol-name">Heavy Heart Exclamation Mark Ornament</div>
                                        </li>
                                        <li class="softnesttools_symbols">
                                            <span class="softnesttools_symbols_copy">𐐪</span>
                                            <div class="symbol-name">Deseret Small Letter Long I</div>
                                        </li>
                                        <li class="softnesttools_symbols">
                                            <span class="softnesttools_symbols_copy">✓</span>
                                            <div class="symbol-name">Check Mark</div>
                                        </li>
                                        <li class="softnesttools_symbols">
                                            <span class="softnesttools_symbols_copy">★</span>
                                            <div class="symbol-name">Black Star</div>
                                        </li>
                                        <li class="softnesttools_symbols">
                                            <span class="softnesttools_symbols_copy">♕</span>
                                            <div class="symbol-name">White Chess Queen</div>
                                        </li>
                                        <li class="softnesttools_symbols">
                                            <span class="softnesttools_symbols_copy">〙</span>
                                            <div class="symbol-name">Right White Tortoise Shell Bracket</div>
                                        </li>
                                        <li class="softnesttools_symbols">
                                            <span class="softnesttools_symbols_copy">𝒾</span>
                                            <div class="symbol-name">Mathematical Italic Small I</div>
                                        </li>
                                        <li class="softnesttools_symbols">
                                            <span class="softnesttools_symbols_copy">𐑂</span>
                                            <div class="symbol-name">Deseret Small Letter Long E</div>
                                        </li>
                                        <li class="softnesttools_symbols">
                                            <span class="softnesttools_symbols_copy">🚗</span>
                                            <div class="symbol-name">Automobile</div>
                                        </li>
                                        <li class="softnesttools_symbols">
                                            <span class="softnesttools_symbols_copy">」</span>
                                            <div class="symbol-name">Right Corner Bracket</div>
                                        </li>
                                        <li class="softnesttools_symbols">
                                            <span class="softnesttools_symbols_copy">☆</span>
                                            <div class="symbol-name">White Star</div>
                                        </li>
                                        <li class="softnesttools_symbols">
                                            <span class="softnesttools_symbols_copy">⌛</span>
                                            <div class="symbol-name">Hourglass</div>
                                        </li>
                                        <li class="softnesttools_symbols">
                                            <span class="softnesttools_symbols_copy">♈︎</span>
                                            <div class="symbol-name">Aries</div>
                                        </li>
                                        <li class="softnesttools_symbols">
                                            <span class="softnesttools_symbols_copy">┃</span>
                                            <div class="symbol-name">Light Vertical Bar</div>
                                        </li>
                                        <li class="softnesttools_symbols">
                                            <span class="softnesttools_symbols_copy">₤</span>
                                            <div class="symbol-name">Lira Sign</div>
                                        </li>
                                        <li class="softnesttools_symbols">
                                            <span class="softnesttools_symbols_copy">დ</span>
                                            <div class="symbol-name">Georgian Letter Don</div>
                                        </li>
                                        <li class="softnesttools_symbols">
                                            <span class="softnesttools_symbols_copy">✰</span>
                                            <div class="symbol-name">Shadowed White Star</div>
                                        </li>
                                        <li class="softnesttools_symbols">
                                            <span class="softnesttools_symbols_copy">💀</span>
                                            <div class="symbol-name">Skull</div>
                                        </li>
                                        <li class="softnesttools_symbols">
                                            <span class="softnesttools_symbols_copy">♑︎</span>
                                            <div class="symbol-name">Capricorn</div>
                                        </li>
                                        <li class="softnesttools_symbols">
                                            <span class="softnesttools_symbols_copy">✣</span>
                                            <div class="symbol-name">Four Balloon-Spoked Asterisk</div>
                                        </li>
                                        <li class="softnesttools_symbols">
                                            <span class="softnesttools_symbols_copy">ꕥ</span>
                                            <div class="symbol-name">Vai Syllable Ndee</div>
                                        </li>
                                        <li class="softnesttools_symbols">
                                            <span class="softnesttools_symbols_copy">✘</span>
                                            <div class="symbol-name">Heavy Ballot X</div>
                                        </li>
                                        <li class="softnesttools_symbols">
                                            <span class="softnesttools_symbols_copy">✩</span>
                                            <div class="symbol-name">Stress Outlined White Star</div>
                                        </li>
                                        <li class="softnesttools_symbols">
                                            <span class="softnesttools_symbols_copy">✎</span>
                                            <div class="symbol-name">Lower Right Pencil</div>
                                        </li>
                                        <li class="softnesttools_symbols">
                                            <span class="softnesttools_symbols_copy">۵</span>
                                            <div class="symbol-name">Arabic-Indic Digit Five</div>
                                        </li>
                                        <li class="softnesttools_symbols">
                                            <span class="softnesttools_symbols_copy">𝓁</span>
                                            <div class="symbol-name">Mathematical Script Small L</div>
                                        </li>
                                        <li class="softnesttools_symbols">
                                            <span class="softnesttools_symbols_copy">❞</span>
                                            <div class="symbol-name">Heavy Double Comma Quotation Mark Ornament</div>
                                        </li>
                                        <li class="softnesttools_symbols">
                                            <span class="softnesttools_symbols_copy">─</span>
                                            <div class="symbol-name">Box Drawings Light Horizontal</div>
                                        </li>
                                        <li class="softnesttools_symbols">
                                            <span class="softnesttools_symbols_copy">☺</span>
                                            <div class="symbol-name">White Smiling Face</div>
                                        </li>
                                        <li class="softnesttools_symbols">
                                            <span class="softnesttools_symbols_copy">♥</span>
                                            <div class="symbol-name">Black Heart Suit</div>
                                        </li>
                                        <li class="softnesttools_symbols">
                                            <span class="softnesttools_symbols_copy">♬</span>
                                            <div class="symbol-name">Beamed Eighth Notes</div>
                                        </li>
                                        <li class="softnesttools_symbols">
                                            <span class="softnesttools_symbols_copy">❝</span>
                                            <div class="symbol-name">Heavy Double Turned Comma Quotation Mark Ornament</div>
                                        </li>
                                        <li class="softnesttools_symbols">
                                            <span class="softnesttools_symbols_copy">☀</span>
                                            <div class="symbol-name">Black Sun with Rays</div>
                                        </li>
                                        <li class="softnesttools_symbols">
                                            <span class="softnesttools_symbols_copy">🎔</span>
                                            <div class="symbol-name">Heart with Ribbon</div>
                                        </li>
                                        <li class="softnesttools_symbols">
                                            <span class="softnesttools_symbols_copy">✯</span>
                                            <div class="symbol-name">Pinwheel Star</div>
                                        </li>
                                        <li class="softnesttools_symbols">
                                            <span class="softnesttools_symbols_copy">☯</span>
                                            <div class="symbol-name">Yin Yang</div>
                                        </li>
                                        <li class="softnesttools_symbols">
                                            <span class="softnesttools_symbols_copy">✈</span>
                                            <div class="symbol-name">Airplane</div>
                                        </li>
                                        <li class="softnesttools_symbols">
                                            <span class="softnesttools_symbols_copy">𒆩</span>
                                            <div class="symbol-name">Cuneiform Sign Ugun</div>
                                        </li>
                                        <li class="softnesttools_symbols">
                                            <span class="softnesttools_symbols_copy">✤</span>
                                            <div class="symbol-name">Heavy Four Balloon-Spoked Asterisk</div>
                                        </li>
                                        <li class="softnesttools_symbols">
                                            <span class="softnesttools_symbols_copy">♬</span>
                                            <div class="symbol-name">Beamed Eighth Notes</div>
                                        </li>
                                        <li class="softnesttools_symbols">
                                            <span class="softnesttools_symbols_copy">⋆</span>
                                            <div class="symbol-name">Star Operator</div>
                                        </li>
                                        <li class="softnesttools_symbols">
                                            <span class="softnesttools_symbols_copy">♛</span>
                                            <div class="symbol-name">Black Chess Queen</div>
                                        </li>
                                        <li class="softnesttools_symbols">
                                            <span class="softnesttools_symbols_copy">♚</span>
                                            <div class="symbol-name">Black Chess King</div>
                                        </li>
                                        <li class="softnesttools_symbols">
                                            <span class="softnesttools_symbols_copy">☣</span>
                                            <div class="symbol-name">Biohazard Sign</div>
                                        </li>
                                        <li class="softnesttools_symbols">
                                            <span class="softnesttools_symbols_copy">→</span>
                                            <div class="symbol-name">Rightwards Arrow</div>
                                        </li>
                                        <li class="softnesttools_symbols">
                                            <span class="softnesttools_symbols_copy">♉︎</span>
                                            <div class="symbol-name">Taurus</div>
                                        </li>
                                        <li class="softnesttools_symbols">
                                            <span class="softnesttools_symbols_copy">✾</span>
                                            <div class="symbol-name">Heavy Eight Teardrop-Spoked Propeller Asterisk</div>
                                        </li>
                                        <li class="softnesttools_symbols">
                                            <span class="softnesttools_symbols_copy">©</span>
                                            <div class="symbol-name">Copyright Sign</div>
                                        </li>
                                        <li class="softnesttools_symbols">
                                            <span class="softnesttools_symbols_copy">ɞ</span>
                                            <div class="symbol-name">Latin Small Letter Closed Reversed Open E</div>
                                        </li>
                                        <li class="softnesttools_symbols">
                                            <span class="softnesttools_symbols_copy">𓆙</span>
                                            <div class="symbol-name">Egyptian Hieroglyph I013</div>
                                        </li>
                                        <li class="softnesttools_symbols">
                                            <span class="softnesttools_symbols_copy">❣</span>
                                            <div class="symbol-name">Heavy Heart Exclamation Mark Ornament</div>
                                        </li>
                                        <li class="softnesttools_symbols">
                                            <span class="softnesttools_symbols_copy">☥</span>
                                            <div class="symbol-name">Ankh</div>
                                        </li>
                                        <li class="softnesttools_symbols">
                                            <span class="softnesttools_symbols_copy">「</span>
                                            <div class="symbol-name">Left Corner Bracket</div>
                                        </li>
                                        <li class="softnesttools_symbols">
                                            <span class="softnesttools_symbols_copy">》</span>
                                            <div class="symbol-name">Right Double Angle Bracket</div>
                                        </li>
                                        <li class="softnesttools_symbols">
                                            <span class="softnesttools_symbols_copy">◌</span>
                                            <div class="symbol-name">Dotted Circle</div>
                                        </li>
                                        <li class="softnesttools_symbols">
                                            <span class="softnesttools_symbols_copy">☼</span>
                                            <div class="symbol-name">White Sun with Rays</div>
                                        </li>
                                        <li class="softnesttools_symbols">
                                            <span class="softnesttools_symbols_copy">𝒶</span>
                                            <div class="symbol-name">Mathematical Script Small A</div>
                                        </li>
                                        <li class="softnesttools_symbols">
                                            <span class="softnesttools_symbols_copy">☃</span>
                                            <div class="symbol-name">Snowman</div>
                                        </li>
                                        <li class="softnesttools_symbols">
                                            <span class="softnesttools_symbols_copy">ϟ</span>
                                            <div class="symbol-name">Greek Koppa</div>
                                        </li>
                                        <li class="softnesttools_symbols">
                                            <span class="softnesttools_symbols_copy">♔</span>
                                            <div class="symbol-name">White Chess King</div>
                                        </li>
                                        <li class="softnesttools_symbols">
                                            <span class="softnesttools_symbols_copy">£</span>
                                            <div class="symbol-name">Pound Sign</div>
                                        </li>
                                        <li class="softnesttools_symbols">
                                            <span class="softnesttools_symbols_copy">❂</span>
                                            <div class="symbol-name">Circled Open Centre Eight Pointed Star</div>
                                        </li>
                                        <li class="softnesttools_symbols">
                                            <span class="softnesttools_symbols_copy">©</span>
                                            <div class="symbol-name">Copyright Sign</div>
                                        </li>
                                        <li class="softnesttools_symbols">
                                            <span class="softnesttools_symbols_copy">⊱</span>
                                            <div class="symbol-name">Subset of or Equal To</div>
                                        </li>
                                        <li class="softnesttools_symbols">
                                            <span class="softnesttools_symbols_copy">ও</span>
                                            <div class="symbol-name">Bengali Letter O</div>
                                        </li>
                                        <li class="softnesttools_symbols">
                                            <span class="softnesttools_symbols_copy">⧼</span>
                                            <div class="symbol-name">Rightwards Arrow Above Almost Equal To</div>
                                        </li>
                                        <li class="softnesttools_symbols">
                                            <span class="softnesttools_symbols_copy">♊︎</span>
                                            <div class="symbol-name">Gemini</div>
                                        </li>
                                        <li class="softnesttools_symbols">
                                            <span class="softnesttools_symbols_copy">𝄞</span>
                                            <div class="symbol-name">Musical Symbol G Clef</div>
                                        </li>
                                        <li class="softnesttools_symbols">
                                            <span class="softnesttools_symbols_copy">⌚</span>
                                            <div class="symbol-name">Watch</div>
                                        </li>
                                        <li class="softnesttools_symbols">
                                            <span class="softnesttools_symbols_copy">𝕖</span>
                                            <div class="symbol-name">Mathematical Double-Struck Small E</div>
                                        </li>
                                        <li class="softnesttools_symbols">
                                            <span class="softnesttools_symbols_copy">❃</span>
                                            <div class="symbol-name">Heavy Teardrop-Spoked Asterisk</div>
                                        </li>
                                        <li class="softnesttools_symbols">
                                            <span class="softnesttools_symbols_copy">🚘</span>
                                            <div class="symbol-name">Oncoming Automobile</div>
                                        </li>
                                        <li class="softnesttools_symbols">
                                            <span class="softnesttools_symbols_copy">☎</span>
                                            <div class="symbol-name">Black Telephone</div>
                                        </li>
                                        <li class="softnesttools_symbols">
                                            <span class="softnesttools_symbols_copy">♡</span>
                                            <div class="symbol-name">White Heart Suit</div>
                                        </li>
                                        <li class="softnesttools_symbols">
                                            <span class="softnesttools_symbols_copy">╭</span>
                                            <div class="symbol-name">Box Drawings Light Arc Down and Right</div>
                                        </li>
                                        <li class="softnesttools_symbols">
                                            <span class="softnesttools_symbols_copy">¥</span>
                                            <div class="symbol-name">Yen Sign</div>
                                        </li>
                                        <li class="softnesttools_symbols">
                                            <span class="softnesttools_symbols_copy">♎︎</span>
                                            <div class="symbol-name">Libra</div>
                                        </li>
                                        <li class="softnesttools_symbols">
                                            <span class="softnesttools_symbols_copy">♏︎</span>
                                            <div class="symbol-name">Scorpius</div>
                                        </li>
                                        <li class="softnesttools_symbols">
                                            <span class="softnesttools_symbols_copy">✌</span>
                                            <div class="symbol-name">Victory Hand</div>
                                        </li>
                                        <li class="softnesttools_symbols">
                                            <span class="softnesttools_symbols_copy">シ</span>
                                            <div class="symbol-name">Katakana Letter Si</div>
                                        </li>
                                    </ul>
                                    <li class="h2copy">
                                        <h2>Heart Symbols</h2>
                                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quo enim repudiandae et omnis, est velit ratione dolore
                                            maxime, non aliquam dolor laboriosam.</p>
                                    </li>

                                    <ul>
                                        <li class="softnesttools_symbols">
                                            <span class="softnesttools_symbols_copy">😘</span>
                                            <div class="symbol-name">Face Blowing a Kiss</div>
                                        </li>
                                        <li class="softnesttools_symbols">
                                            <span class="softnesttools_symbols_copy">დ</span>
                                            <div class="symbol-name">Georgian Letter Don</div>
                                        </li>
                                        <li class="softnesttools_symbols">
                                            <span class="softnesttools_symbols_copy">👫</span>
                                            <div class="symbol-name">Man and Woman Holding Hands</div>
                                        </li>
                                        <li class="softnesttools_symbols">
                                            <span class="softnesttools_symbols_copy">❣️</span>
                                            <div class="symbol-name">Heavy Heart Exclamation Mark Ornament</div>
                                        </li>
                                        <li class="softnesttools_symbols">
                                            <span class="softnesttools_symbols_copy">😽</span>
                                            <div class="symbol-name">Kissing Cat Face</div>
                                        </li>
                                        <li class="softnesttools_symbols">
                                            <span class="softnesttools_symbols_copy">💟</span>
                                            <div class="symbol-name">Heart Decoration</div>
                                        </li>
                                        <li class="softnesttools_symbols">
                                            <span class="softnesttools_symbols_copy">🏩</span>
                                            <div class="symbol-name">Love Hotel</div>
                                        </li>
                                        <li class="softnesttools_symbols">
                                            <span class="softnesttools_symbols_copy">💜</span>
                                            <div class="symbol-name">Purple Heart</div>
                                        </li>
                                        <li class="softnesttools_symbols">
                                            <span class="softnesttools_symbols_copy">💛</span>
                                            <div class="symbol-name">Yellow Heart</div>
                                        </li>
                                        <li class="softnesttools_symbols">
                                            <span class="softnesttools_symbols_copy">🏹</span>
                                            <div class="symbol-name">Bow and Arrow</div>
                                        </li>
                                        <li class="softnesttools_symbols">
                                            <span class="softnesttools_symbols_copy">❤️</span>
                                            <div class="symbol-name">Red Heart</div>
                                        </li>
                                        <li class="softnesttools_symbols">
                                            <span class="softnesttools_symbols_copy">🥰</span>
                                            <div class="symbol-name">Smiling Face with Hearts</div>
                                        </li>
                                        <li class="softnesttools_symbols">
                                            <span class="softnesttools_symbols_copy">❥</span>
                                            <div class="symbol-name">Rotated Heavy Black Heart Bullet</div>
                                        </li>
                                        <li class="softnesttools_symbols">
                                            <span class="softnesttools_symbols_copy">😚</span>
                                            <div class="symbol-name">Kissing Face with Closed Eyes</div>
                                        </li>
                                        <li class="softnesttools_symbols">
                                            <span class="softnesttools_symbols_copy">❧</span>
                                            <div class="symbol-name">Rotated Floral Heart Bullet</div>
                                        </li>
                                        <li class="softnesttools_symbols">
                                            <span class="softnesttools_symbols_copy">❦</span>
                                            <div class="symbol-name">Floral Heart</div>
                                        </li>
                                        <li class="softnesttools_symbols">
                                            <span class="softnesttools_symbols_copy">💓</span>
                                            <div class="symbol-name">Beating Heart</div>
                                        </li>
                                        <li class="softnesttools_symbols">
                                            <span class="softnesttools_symbols_copy">👬</span>
                                            <div class="symbol-name">Two Men Holding Hands</div>
                                        </li>
                                        <li class="softnesttools_symbols">
                                            <span class="softnesttools_symbols_copy">💑</span>
                                            <div class="symbol-name">Couple with Heart</div>
                                        </li>
                                        <li class="softnesttools_symbols">
                                            <span class="softnesttools_symbols_copy">💗</span>
                                            <div class="symbol-name">Growing Heart</div>
                                        </li>
                                        <li class="softnesttools_symbols">
                                            <span class="softnesttools_symbols_copy">💏</span>
                                            <div class="symbol-name">Kiss</div>
                                        </li>
                                        <li class="softnesttools_symbols">
                                            <span class="softnesttools_symbols_copy">💝</span>
                                            <div class="symbol-name">Heart with Ribbon</div>
                                        </li>
                                        <li class="softnesttools_symbols">
                                            <span class="softnesttools_symbols_copy">😙</span>
                                            <div class="symbol-name">Kissing Face with Smiling Eyes</div>
                                        </li>
                                        <li class="softnesttools_symbols">
                                            <span class="softnesttools_symbols_copy">💋</span>
                                            <div class="symbol-name">Kiss Mark</div>
                                        </li>
                                        <li class="softnesttools_symbols">
                                            <span class="softnesttools_symbols_copy">💘</span>
                                            <div class="symbol-name">Heart with Arrow</div>
                                        </li>
                                        <li class="softnesttools_symbols">
                                            <span class="softnesttools_symbols_copy">💒</span>
                                            <div class="symbol-name">Wedding</div>
                                        </li>
                                        <li class="softnesttools_symbols">
                                            <span class="softnesttools_symbols_copy">🤎</span>
                                            <div class="symbol-name">Brown Heart</div>
                                        </li>
                                        <li class="softnesttools_symbols">
                                            <span class="softnesttools_symbols_copy">🖤</span>
                                            <div class="symbol-name">Black Heart</div>
                                        </li>
                                        <li class="softnesttools_symbols">
                                            <span class="softnesttools_symbols_copy">🧡</span>
                                            <div class="symbol-name">Orange Heart</div>
                                        </li>
                                        <li class="softnesttools_symbols">
                                            <span class="softnesttools_symbols_copy">💕</span>
                                            <div class="symbol-name">Two Hearts</div>
                                        </li>
                                        <li class="softnesttools_symbols">
                                            <span class="softnesttools_symbols_copy">😻</span>
                                            <div class="symbol-name">Smiling Cat Face with Heart-Eyes</div>
                                        </li>
                                        <li class="softnesttools_symbols">
                                            <span class="softnesttools_symbols_copy">💌</span>
                                            <div class="symbol-name">Love Letter</div>
                                        </li>
                                        <li class="softnesttools_symbols">
                                            <span class="softnesttools_symbols_copy">♥</span>
                                            <div class="symbol-name">Black Heart Suit</div>
                                        </li>
                                        <li class="softnesttools_symbols">
                                            <span class="softnesttools_symbols_copy">👭</span>
                                            <div class="symbol-name">Two Women Holding Hands</div>
                                        </li>
                                        <li class="softnesttools_symbols">
                                            <span class="softnesttools_symbols_copy">👪</span>
                                            <div class="symbol-name">Family</div>
                                        </li>
                                        <li class="softnesttools_symbols">
                                            <span class="softnesttools_symbols_copy">❤</span>
                                            <div class="symbol-name">Heavy Black Heart</div>
                                        </li>
                                        <li class="softnesttools_symbols">
                                            <span class="softnesttools_symbols_copy">ღ</span>
                                            <div class="symbol-name">Georgian Letter Ghani</div>
                                        </li>
                                        <li class="softnesttools_symbols">
                                            <span class="softnesttools_symbols_copy">🎔</span>
                                            <div class="symbol-name">Heart with Ribbon</div>
                                        </li>
                                        <li class="softnesttools_symbols">
                                            <span class="softnesttools_symbols_copy">۵</span>
                                            <div class="symbol-name">Arabic-Indic Digit Five</div>
                                        </li>
                                        <li class="softnesttools_symbols">
                                            <span class="softnesttools_symbols_copy">💞</span>
                                            <div class="symbol-name">Revolving Hearts</div>
                                        </li>
                                        <li class="softnesttools_symbols">
                                            <span class="softnesttools_symbols_copy">♡</span>
                                            <div class="symbol-name">White Heart Suit</div>
                                        </li>
                                        <li class="softnesttools_symbols">
                                            <span class="softnesttools_symbols_copy">🤍</span>
                                            <div class="symbol-name">White Heart</div>
                                        </li>
                                        <li class="softnesttools_symbols">
                                            <span class="softnesttools_symbols_copy">😍</span>
                                            <div class="symbol-name">Smiling Face with Heart-Eyes</div>
                                        </li>
                                        <li class="softnesttools_symbols">
                                            <span class="softnesttools_symbols_copy">❣</span>
                                            <div class="symbol-name">Heavy Heart Exclamation Mark Ornament</div>
                                        </li>
                                        <li class="softnesttools_symbols">
                                            <span class="softnesttools_symbols_copy">💍</span>
                                            <div class="symbol-name">Ring</div>
                                        </li>
                                        <li class="softnesttools_symbols">
                                            <span class="softnesttools_symbols_copy">💔</span>
                                            <div class="symbol-name">Broken Heart</div>
                                        </li>
                                        <li class="softnesttools_symbols">
                                            <span class="softnesttools_symbols_copy">💙</span>
                                            <div class="symbol-name">Blue Heart</div>
                                        </li>
                                        <li class="softnesttools_symbols">
                                            <span class="softnesttools_symbols_copy">💖</span>
                                            <div class="symbol-name">Sparkling Heart</div>
                                        </li>
                                        <li class="softnesttools_symbols">
                                            <span class="softnesttools_symbols_copy">💚</span>
                                            <div class="symbol-name">Green Heart</div>
                                        </li>
                                        <li class="softnesttools_symbols">
                                            <span class="softnesttools_symbols_copy">🤗</span>
                                            <div class="symbol-name">Hugging Face</div>
                                        </li>
                                        <li class="softnesttools_symbols">
                                            <span class="softnesttools_symbols_copy">👰</span>
                                            <div class="symbol-name">Bride with Veil</div>
                                        </li>
                                        <li class="softnesttools_symbols">
                                            <span class="softnesttools_symbols_copy">ও</span>
                                            <div class="symbol-name">Bengali Letter O</div>
                                        </li>
                                        <li class="softnesttools_symbols">
                                            <span class="softnesttools_symbols_copy">ლ</span>
                                            <div class="symbol-name">Georgian Letter Las</div>
                                        </li>
                                    </ul>
                                    <li class="h2copy">
                                        <h2>Star Symbols</h2>
                                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quo enim repudiandae et omnis, est velit ratione dolore
                                            maxime, non aliquam dolor laboriosam.</p>
                                    </li>

                                    <li class="softnesttools_symbols"><span class="softnesttools_symbols_copy">⛧</span></li>
                                    <li class="softnesttools_symbols"><span class="softnesttools_symbols_copy">⁕⃰</span></li>
                                    <li class="softnesttools_symbols"><span class="softnesttools_symbols_copy">❃</span></li>
                                    <li class="softnesttools_symbols"><span class="softnesttools_symbols_copy">❊</span></li>
                                    <li class="softnesttools_symbols"><span class="softnesttools_symbols_copy">✳</span></li>
                                    <li class="softnesttools_symbols"><span class="softnesttools_symbols_copy">✻</span></li>
                                    <li class="softnesttools_symbols"><span class="softnesttools_symbols_copy">★</span></li>
                                    <li class="softnesttools_symbols"><span class="softnesttools_symbols_copy">🌃</span></li>
                                    <li class="softnesttools_symbols"><span class="softnesttools_symbols_copy">⋆</span></li>
                                    <li class="softnesttools_symbols"><span class="softnesttools_symbols_copy">ᕯ</span></li>
                                    <li class="softnesttools_symbols"><span class="softnesttools_symbols_copy">⍟</span></li>
                                    <li class="softnesttools_symbols"><span class="softnesttools_symbols_copy">💥</span></li>
                                    <li class="softnesttools_symbols"><span class="softnesttools_symbols_copy">⁎⁑</span></li>
                                    <li class="softnesttools_symbols"><span class="softnesttools_symbols_copy">⊛</span></li>
                                    <li class="softnesttools_symbols"><span class="softnesttools_symbols_copy">❅</span></li>
                                    <li class="softnesttools_symbols"><span class="softnesttools_symbols_copy">✢</span></li>
                                    <li class="softnesttools_symbols"><span class="softnesttools_symbols_copy">≛</span></li>
                                    <li class="softnesttools_symbols"><span class="softnesttools_symbols_copy">❉</span></li>
                                    <li class="softnesttools_symbols"><span class="softnesttools_symbols_copy">۞</span></li>
                                    <li class="softnesttools_symbols"><span class="softnesttools_symbols_copy">🔯</span></li>
                                    <li class="softnesttools_symbols"><span class="softnesttools_symbols_copy">⍣</span></li>
                                    <li class="softnesttools_symbols"><span class="softnesttools_symbols_copy">࿏</span></li>
                                    <li class="softnesttools_symbols"><span class="softnesttools_symbols_copy">⭑</span></li>
                                    <li class="softnesttools_symbols"><span class="softnesttools_symbols_copy">꙰</span></li>
                                    <li class="softnesttools_symbols"><span class="softnesttools_symbols_copy">⧆</span></li>
                                    <li class="softnesttools_symbols"><span class="softnesttools_symbols_copy">❈</span></li>
                                    <li class="softnesttools_symbols"><span class="softnesttools_symbols_copy">✣</span></li>
                                    <li class="softnesttools_symbols"><span class="softnesttools_symbols_copy">✤</span></li>
                                    <li class="softnesttools_symbols"><span class="softnesttools_symbols_copy">⁑</span></li>
                                    <li class="softnesttools_symbols"><span class="softnesttools_symbols_copy">✪</span></li>
                                    <li class="softnesttools_symbols"><span class="softnesttools_symbols_copy">⚝</span></li>
                                    <li class="softnesttools_symbols"><span class="softnesttools_symbols_copy">✥</span></li>
                                    <li class="softnesttools_symbols"><span class="softnesttools_symbols_copy">☄</span></li>
                                    <li class="softnesttools_symbols"><span class="softnesttools_symbols_copy">꙳</span></li>
                                    <li class="softnesttools_symbols"><span class="softnesttools_symbols_copy">❄️</span></li>
                                    <li class="softnesttools_symbols"><span class="softnesttools_symbols_copy">❄</span></li>
                                    <li class="softnesttools_symbols"><span class="softnesttools_symbols_copy">✫</span></li>
                                    <li class="softnesttools_symbols"><span class="softnesttools_symbols_copy">✬</span></li>
                                    <li class="softnesttools_symbols"><span class="softnesttools_symbols_copy">☪</span></li>
                                    <li class="softnesttools_symbols"><span class="softnesttools_symbols_copy">∗</span></li>
                                    <li class="softnesttools_symbols"><span class="softnesttools_symbols_copy">❀</span></li>
                                    <li class="softnesttools_symbols"><span class="softnesttools_symbols_copy">✺</span></li>
                                    <li class="softnesttools_symbols"><span class="softnesttools_symbols_copy">🌟</span></li>
                                    <li class="softnesttools_symbols"><span class="softnesttools_symbols_copy">⭐</span></li>
                                    <li class="softnesttools_symbols"><span class="softnesttools_symbols_copy">⁕</span></li>
                                    <li class="softnesttools_symbols"><span class="softnesttools_symbols_copy">✳️</span></li>
                                    <li class="softnesttools_symbols"><span class="softnesttools_symbols_copy">✼</span></li>
                                    <li class="softnesttools_symbols"><span class="softnesttools_symbols_copy">✵</span></li>
                                    <li class="softnesttools_symbols"><span class="softnesttools_symbols_copy">⁂</span></li>
                                    <li class="softnesttools_symbols"><span class="softnesttools_symbols_copy">✹</span></li>
                                    <li class="softnesttools_symbols"><span class="softnesttools_symbols_copy">✮</span></li>
                                    <li class="softnesttools_symbols"><span class="softnesttools_symbols_copy">٭</span></li>
                                    <li class="softnesttools_symbols"><span class="softnesttools_symbols_copy">✧</span></li>
                                    <li class="softnesttools_symbols"><span class="softnesttools_symbols_copy">❂</span></li>
                                    <li class="softnesttools_symbols"><span class="softnesttools_symbols_copy">☸</span></li>
                                    <li class="softnesttools_symbols"><span class="softnesttools_symbols_copy">✽</span></li>
                                    <li class="softnesttools_symbols"><span class="softnesttools_symbols_copy">✴</span></li>
                                    <li class="softnesttools_symbols"><span class="softnesttools_symbols_copy">✭</span></li>
                                    <li class="softnesttools_symbols"><span class="softnesttools_symbols_copy">✦</span></li>
                                    <li class="softnesttools_symbols"><span class="softnesttools_symbols_copy">✨</span></li>
                                    <li class="softnesttools_symbols"><span class="softnesttools_symbols_copy">⭒</span></li>
                                    <li class="softnesttools_symbols"><span class="softnesttools_symbols_copy">✴️</span></li>
                                    <li class="softnesttools_symbols"><span class="softnesttools_symbols_copy">﹡</span></li>
                                    <li class="softnesttools_symbols"><span class="softnesttools_symbols_copy">❇</span></li>
                                    <li class="softnesttools_symbols"><span class="softnesttools_symbols_copy">✿</span></li>
                                    <li class="softnesttools_symbols"><span class="softnesttools_symbols_copy">❋</span></li>
                                    <li class="softnesttools_symbols"><span class="softnesttools_symbols_copy">✩</span></li>
                                    <li class="softnesttools_symbols"><span class="softnesttools_symbols_copy">✡</span></li>
                                    <li class="softnesttools_symbols"><span class="softnesttools_symbols_copy">＊</span></li>
                                    <li class="softnesttools_symbols"><span class="softnesttools_symbols_copy">✱</span></li>
                                    <li class="softnesttools_symbols"><span class="softnesttools_symbols_copy">✡️</span></li>
                                    <li class="softnesttools_symbols"><span class="softnesttools_symbols_copy">⛤</span></li>
                                    <li class="softnesttools_symbols"><span class="softnesttools_symbols_copy">❇️</span></li>
                                    <li class="softnesttools_symbols"><span class="softnesttools_symbols_copy">✾</span></li>
                                    <li class="softnesttools_symbols"><span class="softnesttools_symbols_copy">✶</span></li>
                                    <li class="softnesttools_symbols"><span class="softnesttools_symbols_copy">❆</span></li>
                                    <li class="softnesttools_symbols"><span class="softnesttools_symbols_copy">✸</span></li>
                                    <li class="softnesttools_symbols"><span class="softnesttools_symbols_copy">☆</span></li>
                                    <li class="softnesttools_symbols"><span class="softnesttools_symbols_copy">✰</span></li>
                                    <li class="softnesttools_symbols"><span class="softnesttools_symbols_copy">✯</span></li>
                                    <li class="softnesttools_symbols"><span class="softnesttools_symbols_copy">❁</span></li>
                                    <li class="softnesttools_symbols"><span class="softnesttools_symbols_copy">*</span></li>
                                    <li class="softnesttools_symbols"><span class="softnesttools_symbols_copy">※</span></li>
                                    <li class="softnesttools_symbols"><span class="softnesttools_symbols_copy">✲</span></li>
                                    <li class="softnesttools_symbols"><span class="softnesttools_symbols_copy">✷</span></li>
                                    <li class="softnesttools_symbols"><span class="softnesttools_symbols_copy">💫</span></li>
                                    <li class="softnesttools_symbols"><span class="softnesttools_symbols_copy">🌠</span></li>
                                    <li class="h2copy">
                                        <h2>Flower Symbols</h2>
                                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Ullam dolores expedita excepturi ipsa? Corporis consequuntur laboriosam neque? Praesentium voluptatem beatae placeat maiores.</p>
                                    </li>
                                    <li class="softnesttools_symbols"><span class="softnesttools_symbols_copy">✾</span></li>
                                    <li class="softnesttools_symbols"><span class="softnesttools_symbols_copy">🌹</span></li>
                                    <li class="softnesttools_symbols"><span class="softnesttools_symbols_copy">✣</span></li>
                                    <li class="softnesttools_symbols"><span class="softnesttools_symbols_copy">✼</span></li>
                                    <li class="softnesttools_symbols"><span class="softnesttools_symbols_copy">ꙮ</span></li>
                                    <li class="softnesttools_symbols"><span class="softnesttools_symbols_copy">𓇚</span></li>
                                    <li class="softnesttools_symbols"><span class="softnesttools_symbols_copy">❀</span></li>
                                    <li class="softnesttools_symbols"><span class="softnesttools_symbols_copy">💐</span></li>
                                    <li class="softnesttools_symbols"><span class="softnesttools_symbols_copy">🌷</span></li>
                                    <li class="softnesttools_symbols"><span class="softnesttools_symbols_copy">⁕</span></li>
                                    <li class="softnesttools_symbols"><span class="softnesttools_symbols_copy">✻</span></li>
                                    <li class="softnesttools_symbols"><span class="softnesttools_symbols_copy">𓇗</span></li>
                                    <li class="softnesttools_symbols"><span class="softnesttools_symbols_copy">𓆸</span></li>
                                    <li class="softnesttools_symbols"><span class="softnesttools_symbols_copy">❁</span></li>
                                    <li class="softnesttools_symbols"><span class="softnesttools_symbols_copy">🌸</span></li>
                                    <li class="softnesttools_symbols"><span class="softnesttools_symbols_copy">☘</span></li>
                                    <li class="softnesttools_symbols"><span class="softnesttools_symbols_copy">❊</span></li>
                                    <li class="softnesttools_symbols"><span class="softnesttools_symbols_copy">ꕤ</span></li>
                                    <li class="softnesttools_symbols"><span class="softnesttools_symbols_copy">𓆹</span></li>
                                    <li class="softnesttools_symbols"><span class="softnesttools_symbols_copy">✿</span></li>
                                    <li class="softnesttools_symbols"><span class="softnesttools_symbols_copy">✤</span></li>
                                    <li class="softnesttools_symbols"><span class="softnesttools_symbols_copy">🌼</span></li>
                                    <li class="softnesttools_symbols"><span class="softnesttools_symbols_copy">꧁</span></li>
                                    <li class="softnesttools_symbols"><span class="softnesttools_symbols_copy">𓆱</span></li>
                                    <li class="softnesttools_symbols"><span class="softnesttools_symbols_copy">❃</span></li>
                                    <li class="softnesttools_symbols"><span class="softnesttools_symbols_copy">🌻</span></li>
                                    <li class="softnesttools_symbols"><span class="softnesttools_symbols_copy">❉</span></li>
                                    <li class="softnesttools_symbols"><span class="softnesttools_symbols_copy">🏵️</span></li>
                                    <li class="softnesttools_symbols"><span class="softnesttools_symbols_copy">𓁙</span></li>
                                    <li class="softnesttools_symbols"><span class="softnesttools_symbols_copy">𓇬</span></li>
                                    <li class="softnesttools_symbols"><span class="softnesttools_symbols_copy">⚘</span></li>
                                    <li class="softnesttools_symbols"><span class="softnesttools_symbols_copy">❈</span></li>
                                    <li class="softnesttools_symbols"><span class="softnesttools_symbols_copy">𓇋</span></li>
                                    <li class="softnesttools_symbols"><span class="softnesttools_symbols_copy">💮</span></li>
                                    <li class="softnesttools_symbols"><span class="softnesttools_symbols_copy">🌺</span></li>
                                    <li class="softnesttools_symbols"><span class="softnesttools_symbols_copy">✥</span></li>
                                    <li class="softnesttools_symbols"><span class="softnesttools_symbols_copy">❋</span></li>
                                    <li class="softnesttools_symbols"><span class="softnesttools_symbols_copy">ꕥ</span></li>
                                    <li class="softnesttools_symbols"><span class="softnesttools_symbols_copy">𓇑</span></li>
                                    <li class="softnesttools_symbols"><span class="softnesttools_symbols_copy">⚜</span></li>
                                    <li class="softnesttools_symbols"><span class="softnesttools_symbols_copy">✿</span></li>
                                    <li class="softnesttools_symbols"><span class="softnesttools_symbols_copy">❇</span></li>
                                    <li class="softnesttools_symbols"><span class="softnesttools_symbols_copy">✽</span></li>
                                    <li class="softnesttools_symbols"><span class="softnesttools_symbols_copy">🥀</span></li>
                                    <li class="softnesttools_symbols"><span class="softnesttools_symbols_copy">𓇊</span></li>
                                    <li class="softnesttools_symbols"><span class="softnesttools_symbols_copy">🍀</span></li>
                                    <li class="softnesttools_symbols"><span class="softnesttools_symbols_copy">꧂</span></li>
                                    <li class="softnesttools_symbols"><span class="softnesttools_symbols_copy">𓋇</span></li>
                                    <li class="h2copy">
                                        <h2>Arrow Symbols</h2>
                                        Lorem ipsum dolor sit amet consectetur adipisicing elit. Aperiam magnam iste nihil ab officiis laborum distinctio, nostrum ipsam saepe modi earum. Molestiae?
                                    </li>
                                    <li class="softnesttools_symbols"><span class="softnesttools_symbols_copy">→</span></li>
                                    <li class="softnesttools_symbols"><span class="softnesttools_symbols_copy">↟</span></li>
                                    <li class="softnesttools_symbols"><span class="softnesttools_symbols_copy">↤</span></li>
                                    <li class="softnesttools_symbols"><span class="softnesttools_symbols_copy">↯</span></li>
                                    <li class="softnesttools_symbols"><span class="softnesttools_symbols_copy">↴</span></li>
                                    <li class="softnesttools_symbols"><span class="softnesttools_symbols_copy">⇀</span></li>
                                    <li class="softnesttools_symbols"><span class="softnesttools_symbols_copy">⇅</span></li>
                                    <li class="softnesttools_symbols"><span class="softnesttools_symbols_copy">⇕</span></li>
                                    <li class="softnesttools_symbols"><span class="softnesttools_symbols_copy">⇚</span></li>
                                    <li class="softnesttools_symbols"><span class="softnesttools_symbols_copy">⇥</span></li>
                                    <li class="softnesttools_symbols"><span class="softnesttools_symbols_copy">⇪</span></li>
                                    <li class="softnesttools_symbols"><span class="softnesttools_symbols_copy">☍</span></li>
                                    <li class="softnesttools_symbols"><span class="softnesttools_symbols_copy">➛</span></li>
                                    <li class="softnesttools_symbols"><span class="softnesttools_symbols_copy">➦</span></li>
                                    <li class="softnesttools_symbols"><span class="softnesttools_symbols_copy">➫</span></li>
                                    <li class="softnesttools_symbols"><span class="softnesttools_symbols_copy">➷</span></li>
                                    <li class="softnesttools_symbols"><span class="softnesttools_symbols_copy">➼</span></li>
                                    <li class="softnesttools_symbols"><span class="softnesttools_symbols_copy">⇬</span></li>
                                    <li class="softnesttools_symbols"><span class="softnesttools_symbols_copy">⇱</span></li>
                                    <li class="softnesttools_symbols"><span class="softnesttools_symbols_copy">⤨</span></li>
                                    <li class="softnesttools_symbols"><span class="softnesttools_symbols_copy">⤯</span></li>
                                    <li class="softnesttools_symbols"><span class="softnesttools_symbols_copy">⤉</span></li>
                                    <li class="softnesttools_symbols"><span class="softnesttools_symbols_copy">⤀</span></li>
                                    <li class="softnesttools_symbols"><span class="softnesttools_symbols_copy">⬷</span></li>
                                    <li class="softnesttools_symbols"><span class="softnesttools_symbols_copy">⤘</span></li>
                                    <li class="softnesttools_symbols"><span class="softnesttools_symbols_copy">⬐</span></li>
                                    <li class="softnesttools_symbols"><span class="softnesttools_symbols_copy">⤷</span></li>
                                    <li class="softnesttools_symbols"><span class="softnesttools_symbols_copy">⥵</span></li>
                                    <li class="softnesttools_symbols"><span class="softnesttools_symbols_copy">⭋</span></li>
                                    <li class="softnesttools_symbols"><span class="softnesttools_symbols_copy">⥇</span></li>
                                    <li class="softnesttools_symbols"><span class="softnesttools_symbols_copy">⥺</span></li>
                                    <li class="softnesttools_symbols"><span class="softnesttools_symbols_copy">⥏</span></li>
                                    <li class="softnesttools_symbols"><span class="softnesttools_symbols_copy">⥔</span></li>
                                    <li class="softnesttools_symbols"><span class="softnesttools_symbols_copy">⥟</span></li>
                                    <li class="softnesttools_symbols"><span class="softnesttools_symbols_copy">⥣</span></li>
                                    <li class="softnesttools_symbols"><span class="softnesttools_symbols_copy">⥭</span></li>
                                    <li class="softnesttools_symbols"><span class="softnesttools_symbols_copy">⬸</span></li>
                                    <li class="softnesttools_symbols"><span class="softnesttools_symbols_copy">⤃</span></li>
                                    <li class="softnesttools_symbols"><span class="softnesttools_symbols_copy">⤋</span></li>
                                    <li class="softnesttools_symbols"><span class="softnesttools_symbols_copy">⬂</span></li>
                                    <li class="softnesttools_symbols"><span class="softnesttools_symbols_copy">⬈</span></li>
                                    <li class="softnesttools_symbols"><span class="softnesttools_symbols_copy">⟼</span></li>
                                    <li class="softnesttools_symbols"><span class="softnesttools_symbols_copy">⤛</span></li>
                                    <li class="softnesttools_symbols"><span class="softnesttools_symbols_copy">⤺</span></li>
                                    <li class="softnesttools_symbols"><span class="softnesttools_symbols_copy">↕</span></li>
                                    <li class="softnesttools_symbols"><span class="softnesttools_symbols_copy">↞</span></li>
                                    <li class="softnesttools_symbols"><span class="softnesttools_symbols_copy">↠</span></li>
                                    <li class="softnesttools_symbols"><span class="softnesttools_symbols_copy">↮</span></li>
                                    <li class="softnesttools_symbols"><span class="softnesttools_symbols_copy">↰</span></li>
                                    <li class="softnesttools_symbols"><span class="softnesttools_symbols_copy">↿</span></li>
                                    <li class="softnesttools_symbols"><span class="softnesttools_symbols_copy">⇁</span></li>
                                    <li class="softnesttools_symbols"><span class="softnesttools_symbols_copy">⇏</span></li>
                                    <li class="softnesttools_symbols"><span class="softnesttools_symbols_copy">⇖</span></li>
                                    <li class="softnesttools_symbols"><span class="softnesttools_symbols_copy">⇤</span></li>
                                    <li class="softnesttools_symbols"><span class="softnesttools_symbols_copy">⇦</span></li>
                                    <li class="softnesttools_symbols"><span class="softnesttools_symbols_copy">☌</span></li>
                                    <li class="softnesttools_symbols"><span class="softnesttools_symbols_copy">➔</span></li>
                                    <li class="softnesttools_symbols"><span class="softnesttools_symbols_copy">➥</span></li>
                                    <li class="softnesttools_symbols"><span class="softnesttools_symbols_copy">➧</span></li>
                                    <li class="softnesttools_symbols"><span class="softnesttools_symbols_copy">➶</span></li>
                                    <li class="softnesttools_symbols"><span class="softnesttools_symbols_copy">➸</span></li>
                                    <li class="softnesttools_symbols"><span class="softnesttools_symbols_copy">⇫</span></li>
                                    <li class="softnesttools_symbols"><span class="softnesttools_symbols_copy">⇭</span></li>
                                    <li class="softnesttools_symbols"><span class="softnesttools_symbols_copy">⤪</span></li>
                                    <li class="softnesttools_symbols"><span class="softnesttools_symbols_copy">⤧</span></li>
                                    <li class="softnesttools_symbols"><span class="softnesttools_symbols_copy">⟿</span></li>
                                    <li class="softnesttools_symbols"><span class="softnesttools_symbols_copy">⤈</span></li>
                                    <li class="softnesttools_symbols"><span class="softnesttools_symbols_copy">⤖</span></li>
                                    <li class="softnesttools_symbols"><span class="softnesttools_symbols_copy">⤐</span></li>
                                    <li class="softnesttools_symbols"><span class="softnesttools_symbols_copy">⤦</span></li>
                                    <li class="softnesttools_symbols"><span class="softnesttools_symbols_copy">⬎</span></li>
                                    <li class="softnesttools_symbols"><span class="softnesttools_symbols_copy">⭊</span></li>
                                    <li class="softnesttools_symbols"><span class="softnesttools_symbols_copy">⭁</span></li>
                                    <li class="softnesttools_symbols"><span class="softnesttools_symbols_copy">⬾</span></li>
                                    <li class="softnesttools_symbols"><span class="softnesttools_symbols_copy">⬲</span></li>
                                    <li class="softnesttools_symbols"><span class="softnesttools_symbols_copy">⥎</span></li>
                                    <li class="softnesttools_symbols"><span class="softnesttools_symbols_copy">⥐</span></li>
                                    <li class="softnesttools_symbols"><span class="softnesttools_symbols_copy">⥞</span></li>
                                    <li class="softnesttools_symbols"><span class="softnesttools_symbols_copy">⥠</span></li>
                                    <li class="softnesttools_symbols"><span class="softnesttools_symbols_copy">⥫</span></li>
                                    <li class="softnesttools_symbols"><span class="softnesttools_symbols_copy">⤌</span></li>
                                    <li class="softnesttools_symbols"><span class="softnesttools_symbols_copy">⤂</span></li>
                                    <li class="softnesttools_symbols"><span class="softnesttools_symbols_copy">⤄</span></li>
                                    <li class="softnesttools_symbols"><span class="softnesttools_symbols_copy">⬁</span></li>
                                    <li class="softnesttools_symbols"><span class="softnesttools_symbols_copy">⬃</span></li>
                                    <li class="softnesttools_symbols"><span class="softnesttools_symbols_copy">⟻</span></li>
                                    <li class="softnesttools_symbols"><span class="softnesttools_symbols_copy">⤒</span></li>
                                    <li class="softnesttools_symbols"><span class="softnesttools_symbols_copy">⤸</span></li>
                                    <li class="softnesttools_symbols"><span class="softnesttools_symbols_copy">⤹</span></li>
                                    <li class="softnesttools_symbols"><span class="softnesttools_symbols_copy">↓</span></li>
                                    <li class="softnesttools_symbols"><span class="softnesttools_symbols_copy">↘</span></li>
                                    <li class="softnesttools_symbols"><span class="softnesttools_symbols_copy">↡</span></li>
                                    <li class="softnesttools_symbols"><span class="softnesttools_symbols_copy">↨</span></li>
                                    <li class="softnesttools_symbols"><span class="softnesttools_symbols_copy">↱</span></li>
                                    <li class="softnesttools_symbols"><span class="softnesttools_symbols_copy">↹</span></li>
                                    <li class="softnesttools_symbols"><span class="softnesttools_symbols_copy">⇂</span></li>
                                    <li class="softnesttools_symbols"><span class="softnesttools_symbols_copy">⇉</span></li>
                                    <li class="softnesttools_symbols"><span class="softnesttools_symbols_copy">⇗</span></li>
                                    <li class="softnesttools_symbols"><span class="softnesttools_symbols_copy">⇞</span></li>
                                    <li class="softnesttools_symbols"><span class="softnesttools_symbols_copy">⇧</span></li>
                                    <li class="softnesttools_symbols"><span class="softnesttools_symbols_copy">⏎</span></li>
                                    <li class="softnesttools_symbols"><span class="softnesttools_symbols_copy">➘</span></li>
                                    <li class="softnesttools_symbols"><span class="softnesttools_symbols_copy">➟</span></li>
                                    <li class="softnesttools_symbols"><span class="softnesttools_symbols_copy">➨</span></li>
                                    <li class="softnesttools_symbols"><span class="softnesttools_symbols_copy">➯</span></li>
                                    <li class="softnesttools_symbols"><span class="softnesttools_symbols_copy">➹</span></li>
                                    <li class="softnesttools_symbols"><span class="softnesttools_symbols_copy">⤵</span></li>
                                    <li class="softnesttools_symbols"><span class="softnesttools_symbols_copy">⇳</span></li>
                                    <li class="softnesttools_symbols"><span class="softnesttools_symbols_copy">⇷</span></li>
                                    <li class="softnesttools_symbols"><span class="softnesttools_symbols_copy">⤩</span></li>
                                    <li class="softnesttools_symbols"><span class="softnesttools_symbols_copy">⤫</span></li>
                                    <li class="softnesttools_symbols"><span class="softnesttools_symbols_copy">⇻</span></li>
                                    <li class="softnesttools_symbols"><span class="softnesttools_symbols_copy">⤔</span></li>
                                    <li class="softnesttools_symbols"><span class="softnesttools_symbols_copy">⬼</span></li>
                                    <li class="softnesttools_symbols"><span class="softnesttools_symbols_copy">⤠</span></li>
                                    <li class="softnesttools_symbols"><span class="softnesttools_symbols_copy">⬑</span></li>
                                    <li class="softnesttools_symbols"><span class="softnesttools_symbols_copy">⭀</span></li>
                                    <li class="softnesttools_symbols"><span class="softnesttools_symbols_copy">⭇</span></li>
                                    <li class="softnesttools_symbols"><span class="softnesttools_symbols_copy">⥆</span></li>
                                    <li class="softnesttools_symbols"><span class="softnesttools_symbols_copy">⟴</span></li>
                                    <li class="softnesttools_symbols"><span class="softnesttools_symbols_copy">⬿</span></li>
                                    <li class="softnesttools_symbols"><span class="softnesttools_symbols_copy">⥑</span></li>
                                    <li class="softnesttools_symbols"><span class="softnesttools_symbols_copy">⥘</span></li>
                                    <li class="softnesttools_symbols"><span class="softnesttools_symbols_copy">⥡</span></li>
                                    <li class="softnesttools_symbols"><span class="softnesttools_symbols_copy">⥧</span></li>
                                    <li class="softnesttools_symbols"><span class="softnesttools_symbols_copy">⤍</span></li>
                                    <li class="softnesttools_symbols"><span class="softnesttools_symbols_copy">⟰</span></li>
                                    <li class="softnesttools_symbols"><span class="softnesttools_symbols_copy">⤆</span></li>
                                    <li class="softnesttools_symbols"><span class="softnesttools_symbols_copy">⇶</span></li>
                                    <li class="softnesttools_symbols"><span class="softnesttools_symbols_copy">⬅</span></li>
                                    <li class="softnesttools_symbols"><span class="softnesttools_symbols_copy">⬌</span></li>
                                    <li class="softnesttools_symbols"><span class="softnesttools_symbols_copy">⤓</span></li>
                                    <li class="softnesttools_symbols"><span class="softnesttools_symbols_copy">⥾</span></li>
                                    <li class="softnesttools_symbols"><span class="softnesttools_symbols_copy">⤻</span></li>
                                    <li class="softnesttools_symbols"><span class="softnesttools_symbols_copy">←</span></li>
                                    <li class="softnesttools_symbols"><span class="softnesttools_symbols_copy">↣</span></li>
                                    <li class="softnesttools_symbols"><span class="softnesttools_symbols_copy">↳</span></li>
                                    <li class="softnesttools_symbols"><span class="softnesttools_symbols_copy">⇄</span></li>
                                    <li class="softnesttools_symbols"><span class="softnesttools_symbols_copy">⇙</span></li>
                                    <li class="softnesttools_symbols"><span class="softnesttools_symbols_copy">⇩</span></li>
                                    <li class="softnesttools_symbols"><span class="softnesttools_symbols_copy">➚</span></li>
                                    <li class="softnesttools_symbols"><span class="softnesttools_symbols_copy">➪</span></li>
                                    <li class="softnesttools_symbols"><span class="softnesttools_symbols_copy">➻</span></li>
                                    <li class="softnesttools_symbols"><span class="softnesttools_symbols_copy">⇯</span></li>
                                    <li class="softnesttools_symbols"><span class="softnesttools_symbols_copy">⤮</span></li>
                                    <li class="softnesttools_symbols"><span class="softnesttools_symbols_copy">⬴</span></li>
                                    <li class="softnesttools_symbols"><span class="softnesttools_symbols_copy">⬽</span></li>
                                    <li class="softnesttools_symbols"><span class="softnesttools_symbols_copy">⤶</span></li>
                                    <li class="softnesttools_symbols"><span class="softnesttools_symbols_copy">⥲</span></li>
                                    <li class="softnesttools_symbols"><span class="softnesttools_symbols_copy">⭃</span></li>
                                    <li class="softnesttools_symbols"><span class="softnesttools_symbols_copy">⥓</span></li>
                                    <li class="softnesttools_symbols"><span class="softnesttools_symbols_copy">⥤</span></li>
                                    <li class="softnesttools_symbols"><span class="softnesttools_symbols_copy">⤏</span></li>
                                    <li class="softnesttools_symbols"><span class="softnesttools_symbols_copy">⤊</span></li>
                                    <li class="softnesttools_symbols"><span class="softnesttools_symbols_copy">⬇</span></li>
                                    <li class="softnesttools_symbols"><span class="softnesttools_symbols_copy">⤚</span></li>
                                    <li class="softnesttools_symbols"><span class="softnesttools_symbols_copy">↜</span></li>
                                    <li class="softnesttools_symbols"><span class="softnesttools_symbols_copy">↬</span></li>
                                    <li class="softnesttools_symbols"><span class="softnesttools_symbols_copy">↽</span></li>
                                    <li class="softnesttools_symbols"><span class="softnesttools_symbols_copy">⇍</span></li>
                                    <li class="softnesttools_symbols"><span class="softnesttools_symbols_copy">⇢</span></li>
                                    <li class="softnesttools_symbols"><span class="softnesttools_symbols_copy">☊</span></li>
                                    <li class="softnesttools_symbols"><span class="softnesttools_symbols_copy">➣</span></li>
                                    <li class="softnesttools_symbols"><span class="softnesttools_symbols_copy">➴</span></li>
                                    <li class="softnesttools_symbols"><span class="softnesttools_symbols_copy">⌧</span></li>
                                    <li class="softnesttools_symbols"><span class="softnesttools_symbols_copy">⇑</span></li>
                                    <li class="softnesttools_symbols"><span class="softnesttools_symbols_copy">⇿</span></li>
                                    <li class="softnesttools_symbols"><span class="softnesttools_symbols_copy">⤅</span></li>
                                    <li class="softnesttools_symbols"><span class="softnesttools_symbols_copy">⤤</span></li>
                                    <li class="softnesttools_symbols"><span class="softnesttools_symbols_copy">⭂</span></li>
                                    <li class="softnesttools_symbols"><span class="softnesttools_symbols_copy">⬰</span></li>
                                    <li class="softnesttools_symbols"><span class="softnesttools_symbols_copy">⥌</span></li>
                                    <li class="softnesttools_symbols"><span class="softnesttools_symbols_copy">⥜</span></li>
                                    <li class="softnesttools_symbols"><span class="softnesttools_symbols_copy">⥪</span></li>
                                    <li class="softnesttools_symbols"><span class="softnesttools_symbols_copy">⟹</span></li>
                                    <li class="softnesttools_symbols"><span class="softnesttools_symbols_copy">⬄</span></li>
                                    <li class="softnesttools_symbols"><span class="softnesttools_symbols_copy">⟲</span></li>
                                    <li class="softnesttools_symbols"><span class="softnesttools_symbols_copy">⤾</span></li>
                                    <li class="softnesttools_symbols"><span class="softnesttools_symbols_copy">↗</span></li>
                                    <li class="softnesttools_symbols"><span class="softnesttools_symbols_copy">↛</span></li>
                                    <li class="softnesttools_symbols"><span class="softnesttools_symbols_copy">↧</span></li>
                                    <li class="softnesttools_symbols"><span class="softnesttools_symbols_copy">↫</span></li>
                                    <li class="softnesttools_symbols"><span class="softnesttools_symbols_copy">↸</span></li>
                                    <li class="softnesttools_symbols"><span class="softnesttools_symbols_copy">↼</span></li>
                                    <li class="softnesttools_symbols"><span class="softnesttools_symbols_copy">⇈</span></li>
                                    <li class="softnesttools_symbols"><span class="softnesttools_symbols_copy">⇌</span></li>
                                    <li class="softnesttools_symbols"><span class="softnesttools_symbols_copy">⇝</span></li>
                                    <li class="softnesttools_symbols"><span class="softnesttools_symbols_copy">⇡</span></li>
                                    <li class="softnesttools_symbols"><span class="softnesttools_symbols_copy">⌤</span></li>
                                    <li class="softnesttools_symbols"><span class="softnesttools_symbols_copy">☈</span></li>
                                    <li class="softnesttools_symbols"><span class="softnesttools_symbols_copy">➞</span></li>
                                    <li class="softnesttools_symbols"><span class="softnesttools_symbols_copy">➢</span></li>
                                    <li class="softnesttools_symbols"><span class="softnesttools_symbols_copy">➮</span></li>
                                    <li class="softnesttools_symbols"><span class="softnesttools_symbols_copy">➳</span></li>
                                    <li class="softnesttools_symbols"><span class="softnesttools_symbols_copy">⤴</span></li>
                                    <li class="softnesttools_symbols"><span class="softnesttools_symbols_copy">⌫</span></li>
                                    <li class="softnesttools_symbols"><span class="softnesttools_symbols_copy">⇵</span></li>
                                    <li class="softnesttools_symbols"><span class="softnesttools_symbols_copy">⇺</span></li>
                                    <li class="softnesttools_symbols"><span class="softnesttools_symbols_copy">⤲</span></li>
                                    <li class="softnesttools_symbols"><span class="softnesttools_symbols_copy">⇾</span></li>
                                    <li class="softnesttools_symbols"><span class="softnesttools_symbols_copy">⬹</span></li>
                                    <li class="softnesttools_symbols"><span class="softnesttools_symbols_copy">⬶</span></li>
                                    <li class="softnesttools_symbols"><span class="softnesttools_symbols_copy">⤟</span></li>
                                    <li class="softnesttools_symbols"><span class="softnesttools_symbols_copy">⤣</span></li>
                                    <li class="softnesttools_symbols"><span class="softnesttools_symbols_copy">⥄</span></li>
                                    <li class="softnesttools_symbols"><span class="softnesttools_symbols_copy">⥸</span></li>
                                    <li class="softnesttools_symbols"><span class="softnesttools_symbols_copy">⥴</span></li>
                                    <li class="softnesttools_symbols"><span class="softnesttools_symbols_copy">⥻</span></li>
                                    <li class="softnesttools_symbols"><span class="softnesttools_symbols_copy">⥰</span></li>
                                    <li class="softnesttools_symbols"><span class="softnesttools_symbols_copy">⥋</span></li>
                                    <li class="softnesttools_symbols"><span class="softnesttools_symbols_copy">⥗</span></li>
                                    <li class="softnesttools_symbols"><span class="softnesttools_symbols_copy">⥛</span></li>
                                    <li class="softnesttools_symbols"><span class="softnesttools_symbols_copy">⥨</span></li>
                                    <li class="softnesttools_symbols"><span class="softnesttools_symbols_copy">⥯</span></li>
                                    <li class="softnesttools_symbols"><span class="softnesttools_symbols_copy">⭆</span></li>
                                    <li class="softnesttools_symbols"><span class="softnesttools_symbols_copy">⟸</span></li>
                                    <li class="softnesttools_symbols"><span class="softnesttools_symbols_copy">⇔</span></li>
                                    <li class="softnesttools_symbols"><span class="softnesttools_symbols_copy">⟷</span></li>
                                    <li class="softnesttools_symbols"><span class="softnesttools_symbols_copy">⬋</span></li>
                                    <li class="softnesttools_symbols"><span class="softnesttools_symbols_copy">⥁</span></li>
                                    <li class="softnesttools_symbols"><span class="softnesttools_symbols_copy">⥽</span></li>
                                    <li class="softnesttools_symbols"><span class="softnesttools_symbols_copy">⤽</span></li>
                                    <li class="softnesttools_symbols"><span class="softnesttools_symbols_copy">↖</span></li>
                                    <li class="softnesttools_symbols"><span class="softnesttools_symbols_copy">↦</span></li>
                                    <li class="softnesttools_symbols"><span class="softnesttools_symbols_copy">↷</span></li>
                                    <li class="softnesttools_symbols"><span class="softnesttools_symbols_copy">⇇</span></li>
                                    <li class="softnesttools_symbols"><span class="softnesttools_symbols_copy">⇜</span></li>
                                    <li class="softnesttools_symbols"><span class="softnesttools_symbols_copy">⌆</span></li>
                                    <li class="softnesttools_symbols"><span class="softnesttools_symbols_copy">➝</span></li>
                                    <li class="softnesttools_symbols"><span class="softnesttools_symbols_copy">➭</span></li>
                                    <li class="softnesttools_symbols"><span class="softnesttools_symbols_copy">➾</span></li>
                                    <li class="softnesttools_symbols"><span class="softnesttools_symbols_copy">⇴</span></li>
                                    <li class="softnesttools_symbols"><span class="softnesttools_symbols_copy">⤱</span></li>
                                    <li class="softnesttools_symbols"><span class="softnesttools_symbols_copy">⤁</span></li>
                                    <li class="softnesttools_symbols"><span class="softnesttools_symbols_copy">⤞</span></li>
                                    <li class="softnesttools_symbols"><span class="softnesttools_symbols_copy">⥃</span></li>
                                    <li class="softnesttools_symbols"><span class="softnesttools_symbols_copy">⥳</span></li>
                                    <li class="softnesttools_symbols"><span class="softnesttools_symbols_copy">⥉</span></li>
                                    <li class="softnesttools_symbols"><span class="softnesttools_symbols_copy">⥖</span></li>
                                    <li class="softnesttools_symbols"><span class="softnesttools_symbols_copy">⥦</span></li>
                                    <li class="softnesttools_symbols"><span class="softnesttools_symbols_copy">⭅</span></li>
                                    <li class="softnesttools_symbols"><span class="softnesttools_symbols_copy">⇒</span></li>
                                    <li class="softnesttools_symbols"><span class="softnesttools_symbols_copy">⬊</span></li>
                                    <li class="softnesttools_symbols"><span class="softnesttools_symbols_copy">⥼</span></li>
                                    <li class="softnesttools_symbols"><span class="softnesttools_symbols_copy">↔</span></li>
                                    <li class="softnesttools_symbols"><span class="softnesttools_symbols_copy">↙</span></li>
                                    <li class="softnesttools_symbols"><span class="softnesttools_symbols_copy">↢</span></li>
                                    <li class="softnesttools_symbols"><span class="softnesttools_symbols_copy">↩</span></li>
                                    <li class="softnesttools_symbols"><span class="softnesttools_symbols_copy">↲</span></li>
                                    <li class="softnesttools_symbols"><span class="softnesttools_symbols_copy">↺</span></li>
                                    <li class="softnesttools_symbols"><span class="softnesttools_symbols_copy">⇃</span></li>
                                    <li class="softnesttools_symbols"><span class="softnesttools_symbols_copy">⇊</span></li>
                                    <li class="softnesttools_symbols"><span class="softnesttools_symbols_copy">⇘</span></li>
                                    <li class="softnesttools_symbols"><span class="softnesttools_symbols_copy">⇟</span></li>
                                    <li class="softnesttools_symbols"><span class="softnesttools_symbols_copy">⇨</span></li>
                                    <li class="softnesttools_symbols"><span class="softnesttools_symbols_copy">▶</span></li>
                                    <li class="softnesttools_symbols"><span class="softnesttools_symbols_copy">➙</span></li>
                                    <li class="softnesttools_symbols"><span class="softnesttools_symbols_copy">➠</span></li>
                                    <li class="softnesttools_symbols"><span class="softnesttools_symbols_copy">➩</span></li>
                                    <li class="softnesttools_symbols"><span class="softnesttools_symbols_copy">➱</span></li>
                                    <li class="softnesttools_symbols"><span class="softnesttools_symbols_copy">➺</span></li>
                                    <li class="softnesttools_symbols"><span class="softnesttools_symbols_copy">↵</span></li>
                                    <li class="softnesttools_symbols"><span class="softnesttools_symbols_copy">⇮</span></li>
                                    <li class="softnesttools_symbols"><span class="softnesttools_symbols_copy">⇸</span></li>
                                    <li class="softnesttools_symbols"><span class="softnesttools_symbols_copy">⤭</span></li>
                                    <li class="softnesttools_symbols"><span class="softnesttools_symbols_copy">⤬</span></li>
                                    <li class="softnesttools_symbols"><span class="softnesttools_symbols_copy">⇼</span></li>
                                    <li class="softnesttools_symbols"><span class="softnesttools_symbols_copy">⬺</span></li>
                                    <li class="softnesttools_symbols"><span class="softnesttools_symbols_copy">⤗</span></li>
                                    <li class="softnesttools_symbols"><span class="softnesttools_symbols_copy">⤡</span></li>
                                    <li class="softnesttools_symbols"><span class="softnesttools_symbols_copy">⬏</span></li>
                                    <li class="softnesttools_symbols"><span class="softnesttools_symbols_copy">⥱</span></li>
                                    <li class="softnesttools_symbols"><span class="softnesttools_symbols_copy">⭉</span></li>
                                    <li class="softnesttools_symbols"><span class="softnesttools_symbols_copy">⥅</span></li>
                                    <li class="softnesttools_symbols"><span class="softnesttools_symbols_copy">⥷</span></li>
                                    <li class="softnesttools_symbols"><span class="softnesttools_symbols_copy">⤳</span></li>
                                    <li class="softnesttools_symbols"><span class="softnesttools_symbols_copy">⥒</span></li>
                                    <li class="softnesttools_symbols"><span class="softnesttools_symbols_copy">⥙</span></li>
                                    <li class="softnesttools_symbols"><span class="softnesttools_symbols_copy">⥢</span></li>
                                    <li class="softnesttools_symbols"><span class="softnesttools_symbols_copy">⥩</span></li>
                                    <li class="softnesttools_symbols"><span class="softnesttools_symbols_copy">⤎</span></li>
                                    <li class="softnesttools_symbols"><span class="softnesttools_symbols_copy">⟱</span></li>
                                    <li class="softnesttools_symbols"><span class="softnesttools_symbols_copy">⤇</span></li>
                                    <li class="softnesttools_symbols"><span class="softnesttools_symbols_copy">⟵</span></li>
                                    <li class="softnesttools_symbols"><span class="softnesttools_symbols_copy">⬆</span></li>
                                    <li class="softnesttools_symbols"><span class="softnesttools_symbols_copy">⬍</span></li>
                                    <li class="softnesttools_symbols"><span class="softnesttools_symbols_copy">⤙</span></li>
                                    <li class="softnesttools_symbols"><span class="softnesttools_symbols_copy">⥿</span></li>
                                    <li class="softnesttools_symbols"><span class="softnesttools_symbols_copy">↑</span></li>
                                    <li class="softnesttools_symbols"><span class="softnesttools_symbols_copy">↚</span></li>
                                    <li class="softnesttools_symbols"><span class="softnesttools_symbols_copy">↥</span></li>
                                    <li class="softnesttools_symbols"><span class="softnesttools_symbols_copy">↪</span></li>
                                    <li class="softnesttools_symbols"><span class="softnesttools_symbols_copy">↶</span></li>
                                    <li class="softnesttools_symbols"><span class="softnesttools_symbols_copy">↻</span></li>
                                    <li class="softnesttools_symbols"><span class="softnesttools_symbols_copy">⇆</span></li>
                                    <li class="softnesttools_symbols"><span class="softnesttools_symbols_copy">⇋</span></li>
                                    <li class="softnesttools_symbols"><span class="softnesttools_symbols_copy">⇛</span></li>
                                    <li class="softnesttools_symbols"><span class="softnesttools_symbols_copy">⇠</span></li>
                                    <li class="softnesttools_symbols"><span class="softnesttools_symbols_copy">⌅</span></li>
                                    <li class="softnesttools_symbols"><span class="softnesttools_symbols_copy">☇</span></li>
                                    <li class="softnesttools_symbols"><span class="softnesttools_symbols_copy">➜</span></li>
                                    <li class="softnesttools_symbols"><span class="softnesttools_symbols_copy">➡</span></li>
                                    <li class="softnesttools_symbols"><span class="softnesttools_symbols_copy">➬</span></li>
                                    <li class="softnesttools_symbols"><span class="softnesttools_symbols_copy">➲</span></li>
                                    <li class="softnesttools_symbols"><span class="softnesttools_symbols_copy">➽</span></li>
                                    <li class="softnesttools_symbols"><span class="softnesttools_symbols_copy">⌦</span></li>
                                    <li class="softnesttools_symbols"><span class="softnesttools_symbols_copy">⇲</span></li>
                                    <li class="softnesttools_symbols"><span class="softnesttools_symbols_copy">⇹</span></li>
                                    <li class="softnesttools_symbols"><span class="softnesttools_symbols_copy">⤰</span></li>
                                    <li class="softnesttools_symbols"><span class="softnesttools_symbols_copy">⇽</span></li>
                                    <li class="softnesttools_symbols"><span class="softnesttools_symbols_copy">⬵</span></li>
                                    <li class="softnesttools_symbols"><span class="softnesttools_symbols_copy">⤕</span></li>
                                    <li class="softnesttools_symbols"><span class="softnesttools_symbols_copy">⤝</span></li>
                                    <li class="softnesttools_symbols"><span class="softnesttools_symbols_copy">⤢</span></li>
                                    <li class="softnesttools_symbols"><span class="softnesttools_symbols_copy">⥂</span></li>
                                    <li class="softnesttools_symbols"><span class="softnesttools_symbols_copy">⥶</span></li>
                                    <li class="softnesttools_symbols"><span class="softnesttools_symbols_copy">⭌</span></li>
                                    <li class="softnesttools_symbols"><span class="softnesttools_symbols_copy">⥹</span></li>
                                    <li class="softnesttools_symbols"><span class="softnesttools_symbols_copy">⭄</span></li>
                                    <li class="softnesttools_symbols"><span class="softnesttools_symbols_copy">⥊</span></li>
                                    <li class="softnesttools_symbols"><span class="softnesttools_symbols_copy">⥕</span></li>
                                    <li class="softnesttools_symbols"><span class="softnesttools_symbols_copy">⥚</span></li>
                                    <li class="softnesttools_symbols"><span class="softnesttools_symbols_copy">⥥</span></li>
                                    <li class="softnesttools_symbols"><span class="softnesttools_symbols_copy">⥮</span></li>
                                    <li class="softnesttools_symbols"><span class="softnesttools_symbols_copy">⤑</span></li>
                                    <li class="softnesttools_symbols"><span class="softnesttools_symbols_copy">⬱</span></li>
                                    <li class="softnesttools_symbols"><span class="softnesttools_symbols_copy">⇐</span></li>
                                    <li class="softnesttools_symbols"><span class="softnesttools_symbols_copy">⟶</span></li>
                                    <li class="softnesttools_symbols"><span class="softnesttools_symbols_copy">⬉</span></li>
                                    <li class="softnesttools_symbols"><span class="softnesttools_symbols_copy">⥀</span></li>
                                    <li class="softnesttools_symbols"><span class="softnesttools_symbols_copy">⤜</span></li>
                                    <li class="softnesttools_symbols"><span class="softnesttools_symbols_copy">⤼</span></li>
                                    <li class="softnesttools_symbols"><span class="softnesttools_symbols_copy">↝</span></li>
                                    <li class="softnesttools_symbols"><span class="softnesttools_symbols_copy">↭</span></li>
                                    <li class="softnesttools_symbols"><span class="softnesttools_symbols_copy">↾</span></li>
                                    <li class="softnesttools_symbols"><span class="softnesttools_symbols_copy">⇎</span></li>
                                    <li class="softnesttools_symbols"><span class="softnesttools_symbols_copy">⇣</span></li>
                                    <li class="softnesttools_symbols"><span class="softnesttools_symbols_copy">☋</span></li>
                                    <li class="softnesttools_symbols"><span class="softnesttools_symbols_copy">➤</span></li>
                                    <li class="softnesttools_symbols"><span class="softnesttools_symbols_copy">➵</span></li>
                                    <li class="softnesttools_symbols"><span class="softnesttools_symbols_copy">⇰</span></li>
                                    <li class="softnesttools_symbols"><span class="softnesttools_symbols_copy">⇓</span></li>
                                    <li class="softnesttools_symbols"><span class="softnesttools_symbols_copy">⬳</span></li>
                                    <li class="softnesttools_symbols"><span class="softnesttools_symbols_copy">⬻</span></li>
                                    <li class="softnesttools_symbols"><span class="softnesttools_symbols_copy">⤥</span></li>
                                    <li class="softnesttools_symbols"><span class="softnesttools_symbols_copy">⭈</span></li>
                                    <li class="softnesttools_symbols"><span class="softnesttools_symbols_copy">⥈</span></li>
                                    <li class="softnesttools_symbols"><span class="softnesttools_symbols_copy">⥍</span></li>
                                    <li class="softnesttools_symbols"><span class="softnesttools_symbols_copy">⥝</span></li>
                                    <li class="softnesttools_symbols"><span class="softnesttools_symbols_copy">⥬</span></li>
                                    <li class="softnesttools_symbols"><span class="softnesttools_symbols_copy">⟺</span></li>
                                    <li class="softnesttools_symbols"><span class="softnesttools_symbols_copy">⬀</span></li>
                                    <li class="softnesttools_symbols"><span class="softnesttools_symbols_copy">⟳</span></li>
                                    <li class="softnesttools_symbols"><span class="softnesttools_symbols_copy">⤿</span></li>
                                    <li class="h2copy">
                                        <h2>Check Mark Symbols</h2>
                                        Lorem ipsum dolor sit amet consectetur adipisicing elit. Et ea voluptate dolore quos, error animi voluptas? Perspiciatis rerum deserunt cum minus distinctio!
                                    </li>
                                    <li class="softnesttools_symbols"><span class="softnesttools_symbols_copy">〤</span></li>
                                    <li class="softnesttools_symbols"><span class="softnesttools_symbols_copy">√</span></li>
                                    <li class="softnesttools_symbols"><span class="softnesttools_symbols_copy">☐</span></li>
                                    <li class="softnesttools_symbols"><span class="softnesttools_symbols_copy">✘</span></li>
                                    <li class="softnesttools_symbols"><span class="softnesttools_symbols_copy">☒</span></li>
                                    <li class="softnesttools_symbols"><span class="softnesttools_symbols_copy">💯</span></li>
                                    <li class="softnesttools_symbols"><span class="softnesttools_symbols_copy">✔</span></li>
                                    <li class="softnesttools_symbols"><span class="softnesttools_symbols_copy">∨</span></li>
                                    <li class="softnesttools_symbols"><span class="softnesttools_symbols_copy">✓</span></li>
                                    <li class="softnesttools_symbols"><span class="softnesttools_symbols_copy">☑</span></li>
                                    <li class="softnesttools_symbols"><span class="softnesttools_symbols_copy">✗</span></li>
                                    <li class="softnesttools_symbols"><span class="softnesttools_symbols_copy">〥</span></li>
                                    <li class="softnesttools_symbols"><span class="softnesttools_symbols_copy">☓</span></li>
                                    <li class="softnesttools_symbols"><span class="softnesttools_symbols_copy">✇</span></li>
                                    <li class="h2copy">
                                        <h2>Email Symbols</h2>
                                        <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Magnam est expedita ratione reprehenderit officia voluptate possimus asperiores, ut, nobis, iure dolores molestiae.</p>
                                    </li>
                                    <li class="softnesttools_symbols"><span class="softnesttools_symbols_copy">📩</span></li>
                                    <li class="softnesttools_symbols"><span class="softnesttools_symbols_copy">📨</span></li>
                                    <li class="softnesttools_symbols"><span class="softnesttools_symbols_copy">📧</span></li>
                                    <li class="softnesttools_symbols"><span class="softnesttools_symbols_copy">📬</span></li>
                                    <li class="softnesttools_symbols"><span class="softnesttools_symbols_copy">✉️</span></li>
                                    <li class="softnesttools_symbols"><span class="softnesttools_symbols_copy">📮</span></li>
                                    <li class="softnesttools_symbols"><span class="softnesttools_symbols_copy">📦</span></li>
                                    <li class="softnesttools_symbols"><span class="softnesttools_symbols_copy">📫</span></li>
                                    <li class="softnesttools_symbols"><span class="softnesttools_symbols_copy">📤</span></li>
                                    <li class="softnesttools_symbols"><span class="softnesttools_symbols_copy">💌</span></li>
                                    <li class="softnesttools_symbols"><span class="softnesttools_symbols_copy">📭</span></li>
                                    <li class="softnesttools_symbols"><span class="softnesttools_symbols_copy">📥</span></li>
                                    <li class="softnesttools_symbols"><span class="softnesttools_symbols_copy">📪</span></li>
                                    <li class="h2copy">
                                        <h2>Hand Symbols</h2>
                                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quo enim repudiandae et omnis, est velit ratione dolore maxime, non aliquam dolor laboriosam.</p>
                                    </li>
                                    <li class="softnesttools_symbols"><span class="softnesttools_symbols_copy">☜</span></li>
                                    <li class="softnesttools_symbols"><span class="softnesttools_symbols_copy">✋</span></li>
                                    <li class="softnesttools_symbols"><span class="softnesttools_symbols_copy">👊</span></li>
                                    <li class="softnesttools_symbols"><span class="softnesttools_symbols_copy">🤘</span></li>
                                    <li class="softnesttools_symbols"><span class="softnesttools_symbols_copy">🤟</span></li>
                                    <li class="softnesttools_symbols"><span class="softnesttools_symbols_copy">𓂦</span></li>
                                    <li class="softnesttools_symbols"><span class="softnesttools_symbols_copy">☝︎</span></li>
                                    <li class="softnesttools_symbols"><span class="softnesttools_symbols_copy">👇</span></li>
                                    <li class="softnesttools_symbols"><span class="softnesttools_symbols_copy">👌</span></li>
                                    <li class="softnesttools_symbols"><span class="softnesttools_symbols_copy">🖖</span></li>
                                    <li class="softnesttools_symbols"><span class="softnesttools_symbols_copy">🤙</span></li>
                                    <li class="softnesttools_symbols"><span class="softnesttools_symbols_copy">𓃈</span></li>
                                    <li class="softnesttools_symbols"><span class="softnesttools_symbols_copy">⍝</span></li>
                                    <li class="softnesttools_symbols"><span class="softnesttools_symbols_copy">✌︎</span></li>
                                    <li class="softnesttools_symbols"><span class="softnesttools_symbols_copy">☚</span></li>
                                    <li class="softnesttools_symbols"><span class="softnesttools_symbols_copy">👍</span></li>
                                    <li class="softnesttools_symbols"><span class="softnesttools_symbols_copy">🙌</span></li>
                                    <li class="softnesttools_symbols"><span class="softnesttools_symbols_copy">🖐️</span></li>
                                    <li class="softnesttools_symbols"><span class="softnesttools_symbols_copy">𓂩</span></li>
                                    <li class="softnesttools_symbols"><span class="softnesttools_symbols_copy">☞</span></li>
                                    <li class="softnesttools_symbols"><span class="softnesttools_symbols_copy">✊</span></li>
                                    <li class="softnesttools_symbols"><span class="softnesttools_symbols_copy">🤜</span></li>
                                    <li class="softnesttools_symbols"><span class="softnesttools_symbols_copy">👉</span></li>
                                    <li class="softnesttools_symbols"><span class="softnesttools_symbols_copy">✌️</span></li>
                                    <li class="softnesttools_symbols"><span class="softnesttools_symbols_copy">𓂝</span></li>
                                    <li class="softnesttools_symbols"><span class="softnesttools_symbols_copy">☛</span></li>
                                    <li class="softnesttools_symbols"><span class="softnesttools_symbols_copy">👈</span></li>
                                    <li class="softnesttools_symbols"><span class="softnesttools_symbols_copy">👐</span></li>
                                    <li class="softnesttools_symbols"><span class="softnesttools_symbols_copy">🖕</span></li>
                                    <li class="softnesttools_symbols"><span class="softnesttools_symbols_copy">𓂬</span></li>
                                    <li class="softnesttools_symbols"><span class="softnesttools_symbols_copy">𓂷</span></li>
                                    <li class="softnesttools_symbols"><span class="softnesttools_symbols_copy">☝</span></li>
                                    <li class="softnesttools_symbols"><span class="softnesttools_symbols_copy">👏</span></li>
                                    <li class="softnesttools_symbols"><span class="softnesttools_symbols_copy">🤝</span></li>
                                    <li class="softnesttools_symbols"><span class="softnesttools_symbols_copy">✍︎</span></li>
                                    <li class="softnesttools_symbols"><span class="softnesttools_symbols_copy">✍️</span></li>
                                    <li class="softnesttools_symbols"><span class="softnesttools_symbols_copy">👎</span></li>
                                    <li class="softnesttools_symbols"><span class="softnesttools_symbols_copy">🙏</span></li>
                                    <li class="softnesttools_symbols"><span class="softnesttools_symbols_copy">🤛</span></li>
                                    <li class="softnesttools_symbols"><span class="softnesttools_symbols_copy">𓂭</span></li>
                                    <li class="softnesttools_symbols"><span class="softnesttools_symbols_copy">☟</span></li>
                                    <li class="softnesttools_symbols"><span class="softnesttools_symbols_copy">💪</span></li>
                                    <li class="softnesttools_symbols"><span class="softnesttools_symbols_copy">👋</span></li>
                                    <li class="softnesttools_symbols"><span class="softnesttools_symbols_copy">🙋</span></li>
                                    <li class="softnesttools_symbols"><span class="softnesttools_symbols_copy">🤲</span></li>
                                    <li class="softnesttools_symbols"><span class="softnesttools_symbols_copy">𓂨</span></li>
                                    <li class="softnesttools_symbols"><span class="softnesttools_symbols_copy">👆</span></li>
                                    <li class="softnesttools_symbols"><span class="softnesttools_symbols_copy">🤞</span></li>
                                    <li class="softnesttools_symbols"><span class="softnesttools_symbols_copy">𓂡</span></li>
                                    <li class="h2copy">
                                        <h2>Bullet Points (Dot) Symbols</h2>
                                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quo enim repudiandae et omnis, est velit ratione dolore
                                            maxime, non aliquam dolor laboriosam.</p>
                                    </li>
                                    <li class="softnesttools_symbols"><span class="softnesttools_symbols_copy">➊</span></li>
                                    <li class="softnesttools_symbols"><span class="softnesttools_symbols_copy">➋</span></li>
                                    <li class="softnesttools_symbols"><span class="softnesttools_symbols_copy">➌</span></li>
                                    <li class="softnesttools_symbols"><span class="softnesttools_symbols_copy">➍</span></li>
                                    <li class="softnesttools_symbols"><span class="softnesttools_symbols_copy">➎</span></li>
                                    <li class="softnesttools_symbols"><span class="softnesttools_symbols_copy">➏</span></li>
                                    <li class="softnesttools_symbols"><span class="softnesttools_symbols_copy">➐</span></li>
                                    <li class="softnesttools_symbols"><span class="softnesttools_symbols_copy">➑</span></li>
                                    <li class="softnesttools_symbols"><span class="softnesttools_symbols_copy">➒</span></li>
                                    <li class="softnesttools_symbols"><span class="softnesttools_symbols_copy">①</span></li>
                                    <li class="softnesttools_symbols"><span class="softnesttools_symbols_copy">②</span></li>
                                    <li class="softnesttools_symbols"><span class="softnesttools_symbols_copy">③</span></li>
                                    <li class="softnesttools_symbols"><span class="softnesttools_symbols_copy">④</span></li>
                                    <li class="softnesttools_symbols"><span class="softnesttools_symbols_copy">⑤</span></li>
                                    <li class="softnesttools_symbols"><span class="softnesttools_symbols_copy">⑥</span></li>
                                    <li class="softnesttools_symbols"><span class="softnesttools_symbols_copy">⑦</span></li>
                                    <li class="softnesttools_symbols"><span class="softnesttools_symbols_copy">⑧</span></li>
                                    <li class="softnesttools_symbols"><span class="softnesttools_symbols_copy">⑨</span></li>
                                    <li class="softnesttools_symbols"><span class="softnesttools_symbols_copy">•</span></li>
                                    <li class="softnesttools_symbols"><span class="softnesttools_symbols_copy">◘</span></li>
                                    <li class="softnesttools_symbols"><span class="softnesttools_symbols_copy">○</span></li>
                                    <li class="softnesttools_symbols"><span class="softnesttools_symbols_copy">◙</span></li>
                                    <li class="softnesttools_symbols"><span class="softnesttools_symbols_copy">•</span></li>
                                    <li class="softnesttools_symbols"><span class="softnesttools_symbols_copy">‣</span></li>
                                    <li class="softnesttools_symbols"><span class="softnesttools_symbols_copy">⁃</span></li>
                                    <li class="softnesttools_symbols"><span class="softnesttools_symbols_copy">◘</span></li>
                                    <li class="softnesttools_symbols"><span class="softnesttools_symbols_copy">◦</span></li>
                                    <li class="softnesttools_symbols"><span class="softnesttools_symbols_copy">⦾</span></li>
                                    <li class="softnesttools_symbols"><span class="softnesttools_symbols_copy">⦿</span></li>
                                    <li class="softnesttools_symbols"><span class="softnesttools_symbols_copy">¤</span></li>
                                    <li class="softnesttools_symbols"><span class="softnesttools_symbols_copy">·</span></li>
                                    <li class="softnesttools_symbols"><span class="softnesttools_symbols_copy">«</span></li>
                                    <li class="softnesttools_symbols"><span class="softnesttools_symbols_copy">»</span></li>
                                    <li class="softnesttools_symbols"><span class="softnesttools_symbols_copy">➼</span></li>
                                    <li class="softnesttools_symbols"><span class="softnesttools_symbols_copy">➡</span></li>
                                    <li class="softnesttools_symbols"><span class="softnesttools_symbols_copy">⁌</span></li>
                                    <li class="softnesttools_symbols"><span class="softnesttools_symbols_copy">⁍</span></li>
                                    <li class="softnesttools_symbols"><span class="softnesttools_symbols_copy">♥</span></li>
                                    <li class="softnesttools_symbols"><span class="softnesttools_symbols_copy">♦</span></li>
                                    <li class="softnesttools_symbols"><span class="softnesttools_symbols_copy">♣</span></li>
                                    <li class="softnesttools_symbols"><span class="softnesttools_symbols_copy">♠</span></li>
                                    <li class="softnesttools_symbols"><span class="softnesttools_symbols_copy">♫</span></li>
                                    <li class="softnesttools_symbols"><span class="softnesttools_symbols_copy">♪</span></li>
                                    <li class="softnesttools_symbols"><span class="softnesttools_symbols_copy">►</span></li>
                                    <li class="softnesttools_symbols"><span class="softnesttools_symbols_copy">◄</span></li>
                                    <li class="softnesttools_symbols"><span class="softnesttools_symbols_copy">■</span></li>
                                    <li class="softnesttools_symbols"><span class="softnesttools_symbols_copy">▲</span></li>
                                    <li class="softnesttools_symbols"><span class="softnesttools_symbols_copy">▼</span></li>
                                    <li class="softnesttools_symbols"><span class="softnesttools_symbols_copy">☼</span></li>
                                    <li class="softnesttools_symbols"><span class="softnesttools_symbols_copy">⌂</span></li>
                                    <li class="softnesttools_symbols"><span class="softnesttools_symbols_copy">↕</span></li>
                                    <li class="softnesttools_symbols"><span class="softnesttools_symbols_copy">↔</span></li>
                                    <li class="softnesttools_symbols"><span class="softnesttools_symbols_copy">☻</span></li>
                                    <li class="softnesttools_symbols"><span class="softnesttools_symbols_copy">☺</span></li>
                                    <li class="h2copy">
                                        <h2>Gender Symbols</h2>
                                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quo enim repudiandae et omnis, est velit ratione dolore
                                            maxime, non aliquam dolor laboriosam.</p>
                                    </li>
                                    <li class="softnesttools_symbols"><span class="softnesttools_symbols_copy">⚦</span></li>
                                    <li class="softnesttools_symbols"><span class="softnesttools_symbols_copy">⚭</span></li>
                                    <li class="softnesttools_symbols"><span class="softnesttools_symbols_copy">⚢</span></li>
                                    <li class="softnesttools_symbols"><span class="softnesttools_symbols_copy">⚬</span></li>
                                    <li class="softnesttools_symbols"><span class="softnesttools_symbols_copy">⚮</span></li>
                                    <li class="softnesttools_symbols"><span class="softnesttools_symbols_copy">⚣</span></li>
                                    <li class="softnesttools_symbols"><span class="softnesttools_symbols_copy">웃</span></li>
                                    <li class="softnesttools_symbols"><span class="softnesttools_symbols_copy">⚯</span></li>
                                    <li class="softnesttools_symbols"><span class="softnesttools_symbols_copy">⚥</span></li>
                                    <li class="softnesttools_symbols"><span class="softnesttools_symbols_copy">☿</span></li>
                                    <li class="softnesttools_symbols"><span class="softnesttools_symbols_copy">⚩</span></li>
                                    <li class="softnesttools_symbols"><span class="softnesttools_symbols_copy">♀</span></li>
                                    <li class="softnesttools_symbols"><span class="softnesttools_symbols_copy">⚨</span></li>
                                    <li class="softnesttools_symbols"><span class="softnesttools_symbols_copy">⚤</span></li>
                                    <li class="softnesttools_symbols"><span class="softnesttools_symbols_copy">유</span></li>
                                    <li class="softnesttools_symbols"><span class="softnesttools_symbols_copy">⚧</span></li>
                                    <li class="softnesttools_symbols"><span class="softnesttools_symbols_copy">♂</span></li>
                                    <li class="softnesttools_symbols"><span class="softnesttools_symbols_copy">㉾</span></li>
                                    <li class="h2copy">
                                        <h2>Marrige Symbols</h2>
                                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quo enim repudiandae et omnis, est velit ratione dolore
                                            maxime, non aliquam dolor laboriosam.</p>
                                    </li>
                                    <li class="softnesttools_symbols"><span class="softnesttools_symbols_copy">⚭</span></li>
                                    <li class="softnesttools_symbols"><span class="softnesttools_symbols_copy">⚮</span></li>
                                    <li class="softnesttools_symbols"><span class="softnesttools_symbols_copy">⚯</span></li>
                                    <li class="h2copy">
                                        <h2>Music Note Symbols</h2>
                                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quo enim repudiandae et omnis, est velit ratione dolore
                                            maxime, non aliquam dolor laboriosam.</p>
                                    </li>

                                    <li class="softnesttools_symbols">
                                        <span class="softnesttools_symbols_copy">𝄞</span>
                                        <div class="symbol-name">Musical Symbol G Clef</div>
                                    </li>
                                    <li class="softnesttools_symbols">
                                        <span class="softnesttools_symbols_copy">𝄪</span>
                                        <div class="symbol-name">Musical Symbol Double Sharp</div>
                                    </li>
                                    <li class="softnesttools_symbols">
                                        <span class="softnesttools_symbols_copy">𝄽</span>
                                        <div class="symbol-name">Musical Symbol Half Note</div>
                                    </li>
                                    <li class="softnesttools_symbols">
                                        <span class="softnesttools_symbols_copy">🎹</span>
                                        <div class="symbol-name">Musical Keyboard</div>
                                    </li>
                                    <li class="softnesttools_symbols">
                                        <span class="softnesttools_symbols_copy">📢</span>
                                        <div class="symbol-name">Loudspeaker</div>
                                    </li>
                                    <li class="softnesttools_symbols">
                                        <span class="softnesttools_symbols_copy">≠</span>
                                        <div class="symbol-name">Not Equal To</div>
                                    </li>
                                    <li class="softnesttools_symbols">
                                        <span class="softnesttools_symbols_copy">🎤</span>
                                        <div class="symbol-name">Microphone</div>
                                    </li>
                                    <li class="softnesttools_symbols">
                                        <span class="softnesttools_symbols_copy">𝄆</span>
                                        <div class="symbol-name">Musical Symbol Repeat Dots</div>
                                    </li>
                                    <li class="softnesttools_symbols">
                                        <span class="softnesttools_symbols_copy">𝇑</span>
                                        <div class="symbol-name">Musical Symbol Gregorian C Clef</div>
                                    </li>
                                    <li class="softnesttools_symbols">
                                        <span class="softnesttools_symbols_copy">𝄫</span>
                                        <div class="symbol-name">Musical Symbol Double Flat</div>
                                    </li>
                                    <li class="softnesttools_symbols">
                                        <span class="softnesttools_symbols_copy">🎸</span>
                                        <div class="symbol-name">Guitar</div>
                                    </li>
                                    <li class="softnesttools_symbols">
                                        <span class="softnesttools_symbols_copy">🎺</span>
                                        <div class="symbol-name">Trumpet</div>
                                    </li>
                                    <li class="softnesttools_symbols">
                                        <span class="softnesttools_symbols_copy">؂</span>
                                        <div class="symbol-name">Arabic-Indic Per Ten Thousand Sign</div>
                                    </li>
                                    <li class="softnesttools_symbols">
                                        <span class="softnesttools_symbols_copy">≭</span>
                                        <div class="symbol-name">Not Equivalent To</div>
                                    </li>
                                    <li class="softnesttools_symbols">
                                        <span class="softnesttools_symbols_copy">𝄇</span>
                                        <div class="symbol-name">Musical Symbol Repeat Dots</div>
                                    </li>
                                    <li class="softnesttools_symbols">
                                        <span class="softnesttools_symbols_copy">𝄢</span>
                                        <div class="symbol-name">Musical Symbol F Clef</div>
                                    </li>
                                    <li class="softnesttools_symbols">
                                        <span class="softnesttools_symbols_copy">𝄴</span>
                                        <div class="symbol-name">Musical Symbol Common Time</div>
                                    </li>
                                    <li class="softnesttools_symbols">
                                        <span class="softnesttools_symbols_copy">𝅘𝅥𝅱</span>
                                        <div class="symbol-name">Musical Symbol Combining Augmentation Dot</div>
                                    </li>
                                    <li class="softnesttools_symbols">
                                        <span class="softnesttools_symbols_copy">🎻</span>
                                        <div class="symbol-name">Violin</div>
                                    </li>
                                    <li class="softnesttools_symbols">
                                        <span class="softnesttools_symbols_copy">♬</span>
                                        <div class="symbol-name">Beamed Sixteenth Notes</div>
                                    </li>
                                    <li class="softnesttools_symbols">
                                        <span class="softnesttools_symbols_copy">🎵</span>
                                        <div class="symbol-name">Musical Note</div>
                                    </li>
                                    <li class="softnesttools_symbols">
                                        <span class="softnesttools_symbols_copy">𝄜</span>
                                        <div class="symbol-name">Musical Symbol C Clef</div>
                                    </li>
                                    <li class="softnesttools_symbols">
                                        <span class="softnesttools_symbols_copy">𝄼</span>
                                        <div class="symbol-name">Musical Symbol Cut Time</div>
                                    </li>
                                    <li class="softnesttools_symbols">
                                        <span class="softnesttools_symbols_copy">🔊</span>
                                        <div class="symbol-name">Speaker with Three Sound Waves</div>
                                    </li>
                                    <li class="softnesttools_symbols">
                                        <span class="softnesttools_symbols_copy">🎼</span>
                                        <div class="symbol-name">Musical Score</div>
                                    </li>
                                    <li class="softnesttools_symbols">
                                        <span class="softnesttools_symbols_copy">𝄦</span>
                                        <div class="symbol-name">Musical Symbol Fermata</div>
                                    </li>
                                    <li class="softnesttools_symbols">
                                        <span class="softnesttools_symbols_copy">📻</span>
                                        <div class="symbol-name">Radio</div>
                                    </li>
                                    <li class="softnesttools_symbols">
                                        <span class="softnesttools_symbols_copy">°</span>
                                        <div class="symbol-name">Degree Sign</div>
                                    </li>
                                    <li class="softnesttools_symbols">
                                        <span class="softnesttools_symbols_copy">𝄡</span>
                                        <div class="symbol-name">Musical Symbol Pedal Mark</div>
                                    </li>
                                    <li class="softnesttools_symbols">
                                        <span class="softnesttools_symbols_copy">𝄥</span>
                                        <div class="symbol-name">Musical Symbol Da Capo</div>
                                    </li>
                                    <li class="softnesttools_symbols">
                                        <span class="softnesttools_symbols_copy">𝅘𝅥𝅰</span>
                                        <div class="symbol-name">Musical Symbol Combining Stem</div>
                                    </li>
                                    <li class="softnesttools_symbols">
                                        <span class="softnesttools_symbols_copy">🎧</span>
                                        <div class="symbol-name">Headphone</div>
                                    </li>
                                    <li class="softnesttools_symbols">
                                        <span class="softnesttools_symbols_copy">♫</span>
                                        <div class="symbol-name">Beamed Eighth Notes</div>
                                    </li>
                                    <li class="softnesttools_symbols">
                                        <span class="softnesttools_symbols_copy">♯</span>
                                        <div class="symbol-name">Sharp</div>
                                    </li>
                                    <li class="softnesttools_symbols">
                                        <span class="softnesttools_symbols_copy">𝄠</span>
                                        <div class="symbol-name">Musical Symbol Crescendo</div>
                                    </li>
                                    <li class="softnesttools_symbols">
                                        <span class="softnesttools_symbols_copy">𝅘𝅥𝅯</span>
                                        <div class="symbol-name">Musical Symbol Combining Accent</div>
                                    </li>
                                    <li class="softnesttools_symbols">
                                        <span class="softnesttools_symbols_copy">♪</span>
                                        <div class="symbol-name">Eighth Note</div>
                                    </li>
                                    <li class="softnesttools_symbols">
                                        <span class="softnesttools_symbols_copy">𝄐</span>
                                        <div class="symbol-name">Musical Symbol Breath Mark</div>
                                    </li>
                                    <li class="softnesttools_symbols">
                                        <span class="softnesttools_symbols_copy">𝄣</span>
                                        <div class="symbol-name">Musical Symbol Segno</div>
                                    </li>
                                    <li class="softnesttools_symbols">
                                        <span class="softnesttools_symbols_copy">𝄻</span>
                                        <div class="symbol-name">Musical Symbol Coda</div>
                                    </li>
                                    <li class="softnesttools_symbols">
                                        <span class="softnesttools_symbols_copy">𝅘𝅥𝅲</span>
                                        <div class="symbol-name">Musical Symbol Combining Tremolo</div>
                                    </li>
                                    <li class="softnesttools_symbols">
                                        <span class="softnesttools_symbols_copy">📣</span>
                                        <div class="symbol-name">Cheering Megaphone</div>
                                    </li>
                                    <li class="softnesttools_symbols">
                                        <span class="softnesttools_symbols_copy">♭</span>
                                        <div class="symbol-name">Flat</div>
                                    </li>
                                    <li class="softnesttools_symbols">
                                        <span class="softnesttools_symbols_copy">🎶</span>
                                        <div class="symbol-name">Multiple Musical Notes</div>
                                    </li>
                                    <li class="softnesttools_symbols">
                                        <span class="softnesttools_symbols_copy">𝄟</span>
                                        <div class="symbol-name">Musical Symbol Barline</div>
                                    </li>
                                    <li class="softnesttools_symbols">
                                        <span class="softnesttools_symbols_copy">𝄤</span>
                                        <div class="symbol-name">Musical Symbol Dal Segno</div>
                                    </li>
                                    <li class="softnesttools_symbols">
                                        <span class="softnesttools_symbols_copy">𝅗𝅥</span>
                                        <div class="symbol-name">Musical Symbol Quarter Note</div>
                                    </li>
                                    <li class="softnesttools_symbols">
                                        <span class="softnesttools_symbols_copy">𝆒</span>
                                        <div class="symbol-name">Musical Symbol Arpeggiato Up</div>
                                    </li>
                                    <li class="softnesttools_symbols">
                                        <span class="softnesttools_symbols_copy">♩</span>
                                        <div class="symbol-name">Quarter Note</div>
                                    </li>
                                    <li class="softnesttools_symbols">
                                        <span class="softnesttools_symbols_copy">♮</span>
                                        <div class="symbol-name">Natural</div>
                                    </li>
                                    <li class="softnesttools_symbols">
                                        <span class="softnesttools_symbols_copy">𝇐</span>
                                        <div class="symbol-name">Musical Symbol Gregorian F Clef</div>
                                    </li>
                                    <li class="softnesttools_symbols">
                                        <span class="softnesttools_symbols_copy">🎷</span>
                                        <div class="symbol-name">Saxophone</div>
                                    </li>
                                    <li class="softnesttools_symbols">
                                        <span class="softnesttools_symbols_copy">ø</span>
                                        <div class="symbol-name">Latin Small Letter O with Stroke</div>
                                    </li>
                                    <li class="h2copy">
                                        <h2>Spiritual Symbols</h2>
                                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quo enim repudiandae et omnis, est velit ratione dolore
                                            maxime, non aliquam dolor laboriosam.</p>
                                    </li>
                                    <li class="softnesttools_symbols">
                                        <span class="softnesttools_symbols_copy">✜</span>
                                        <div class="symbol-name">Heavy Open Centre Cross</div>
                                    </li>
                                    <li class="softnesttools_symbols">
                                        <span class="softnesttools_symbols_copy">卐</span>
                                        <div class="symbol-name">Swastika</div>
                                    </li>
                                    <li class="softnesttools_symbols">
                                        <span class="softnesttools_symbols_copy">☦</span>
                                        <div class="symbol-name">Orthodox Cross</div>
                                    </li>
                                    <li class="softnesttools_symbols">
                                        <span class="softnesttools_symbols_copy">♁</span>
                                        <div class="symbol-name">Earth</div>
                                    </li>
                                    <li class="softnesttools_symbols">
                                        <span class="softnesttools_symbols_copy">✠</span>
                                        <div class="symbol-name">Maltese Cross</div>
                                    </li>
                                    <li class="softnesttools_symbols">
                                        <span class="softnesttools_symbols_copy">✌</span>
                                        <div class="symbol-name">Victory Hand</div>
                                    </li>
                                    <li class="softnesttools_symbols">
                                        <span class="softnesttools_symbols_copy">卍</span>
                                        <div class="symbol-name">Swastika (Mirrored)</div>
                                    </li>
                                    <li class="softnesttools_symbols">
                                        <span class="softnesttools_symbols_copy">〷</span>
                                        <div class="symbol-name">Tortoise Shell Bracketed CJK Ideograph</div>
                                    </li>
                                    <li class="softnesttools_symbols">
                                        <span class="softnesttools_symbols_copy">☾</span>
                                        <div class="symbol-name">Last Quarter Moon</div>
                                    </li>
                                    <li class="softnesttools_symbols">
                                        <span class="softnesttools_symbols_copy">⚔</span>
                                        <div class="symbol-name">Crossed Swords</div>
                                    </li>
                                    <li class="softnesttools_symbols">
                                        <span class="softnesttools_symbols_copy">✙</span>
                                        <div class="symbol-name">Shadowed White Latin Cross</div>
                                    </li>
                                    <li class="softnesttools_symbols">
                                        <span class="softnesttools_symbols_copy">†</span>
                                        <div class="symbol-name">Dagger</div>
                                    </li>
                                    <li class="softnesttools_symbols">
                                        <span class="softnesttools_symbols_copy">☠</span>
                                        <div class="symbol-name">Skull and Crossbones</div>
                                    </li>
                                    <li class="softnesttools_symbols">
                                        <span class="softnesttools_symbols_copy">☩</span>
                                        <div class="symbol-name">Cross of Jerusalem</div>
                                    </li>
                                    <li class="softnesttools_symbols">
                                        <span class="softnesttools_symbols_copy">❖</span>
                                        <div class="symbol-name">Black Diamond Minus White X</div>
                                    </li>
                                    <li class="softnesttools_symbols">
                                        <span class="softnesttools_symbols_copy">✛</span>
                                        <div class="symbol-name">Open Centre Cross</div>
                                    </li>
                                    <li class="softnesttools_symbols">
                                        <span class="softnesttools_symbols_copy">☣</span>
                                        <div class="symbol-name">Biohazard Sign</div>
                                    </li>
                                    <li class="softnesttools_symbols">
                                        <span class="softnesttools_symbols_copy">♅</span>
                                        <div class="symbol-name">Pluto</div>
                                    </li>
                                    <li class="softnesttools_symbols">
                                        <span class="softnesttools_symbols_copy">✡</span>
                                        <div class="symbol-name">Star of David</div>
                                    </li>
                                    <li class="softnesttools_symbols">
                                        <span class="softnesttools_symbols_copy">☯</span>
                                        <div class="symbol-name">Yin Yang</div>
                                    </li>
                                    <li class="softnesttools_symbols">
                                        <span class="softnesttools_symbols_copy">✟</span>
                                        <div class="symbol-name">Outlined Latin Cross</div>
                                    </li>
                                    <li class="softnesttools_symbols">
                                        <span class="softnesttools_symbols_copy">☮</span>
                                        <div class="symbol-name">Peace Symbol</div>
                                    </li>
                                    <li class="softnesttools_symbols">
                                        <span class="softnesttools_symbols_copy">☨</span>
                                        <div class="symbol-name">Cross of Lorraine</div>
                                    </li>
                                    <li class="softnesttools_symbols">
                                        <span class="softnesttools_symbols_copy">☭</span>
                                        <div class="symbol-name">Hammer and Sickle</div>
                                    </li>
                                    <li class="softnesttools_symbols">
                                        <span class="softnesttools_symbols_copy">✞</span>
                                        <div class="symbol-name">Shadowed Latin Cross</div>
                                    </li>
                                    <li class="softnesttools_symbols">
                                        <span class="softnesttools_symbols_copy">☸</span>
                                        <div class="symbol-name">Wheel of Dharma</div>
                                    </li>
                                    <li class="softnesttools_symbols">
                                        <span class="softnesttools_symbols_copy">✚</span>
                                        <div class="symbol-name">Heavy Greek Cross</div>
                                    </li>
                                    <li class="softnesttools_symbols">
                                        <span class="softnesttools_symbols_copy">⊹</span>
                                        <div class="symbol-name">Hermetic Cross</div>
                                    </li>
                                    <li class="softnesttools_symbols">
                                        <span class="softnesttools_symbols_copy">☢</span>
                                        <div class="symbol-name">Radioactive Sign</div>
                                    </li>
                                    <li class="softnesttools_symbols">
                                        <span class="softnesttools_symbols_copy">☫</span>
                                        <div class="symbol-name">Farsi Symbol</div>
                                    </li>
                                    <li class="softnesttools_symbols">
                                        <span class="softnesttools_symbols_copy">❆</span>
                                        <div class="symbol-name">Heavy Chevron Snowflake</div>
                                    </li>
                                    <li class="softnesttools_symbols">
                                        <span class="softnesttools_symbols_copy">✝</span>
                                        <div class="symbol-name">Latin Cross</div>
                                    </li>
                                    <li class="softnesttools_symbols">
                                        <span class="softnesttools_symbols_copy">‡</span>
                                        <div class="symbol-name">Double Dagger</div>
                                    </li>
                                    <li class="softnesttools_symbols">
                                        <span class="softnesttools_symbols_copy">⚖</span>
                                        <div class="symbol-name">Scales</div>
                                    </li>
                                    <li class="softnesttools_symbols">
                                        <span class="softnesttools_symbols_copy">☬</span>
                                        <div class="symbol-name">Khanda</div>
                                    </li>
                                    <li class="softnesttools_symbols">
                                        <span class="softnesttools_symbols_copy">✢</span>
                                        <div class="symbol-name">Four Teardrop-Spoked Asterisk</div>
                                    </li>
                                    <li class="softnesttools_symbols">
                                        <span class="softnesttools_symbols_copy">☽</span>
                                        <div class="symbol-name">First Quarter Moon</div>
                                    </li>
                                    <li class="h2copy">
                                        <h2>Trademark Symbols</h2>
                                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quo enim repudiandae et omnis, est velit ratione dolore
                                            maxime, non aliquam dolor laboriosam.</p>
                                    </li>
                                    <li class="softnesttools_symbols">
                                        <span class="softnesttools_symbols_copy">✎</span>
                                        <div class="symbol-name">Lower Right Pencil</div>
                                    </li>
                                    <li class="softnesttools_symbols">
                                        <span class="softnesttools_symbols_copy">✂</span>
                                        <div class="symbol-name">Black Scissors</div>
                                    </li>
                                    <li class="softnesttools_symbols">
                                        <span class="softnesttools_symbols_copy">✈</span>
                                        <div class="symbol-name">Airplane</div>
                                    </li>
                                    <li class="softnesttools_symbols">
                                        <span class="softnesttools_symbols_copy">℀</span>
                                        <div class="symbol-name">Account Of</div>
                                    </li>
                                    <li class="softnesttools_symbols">
                                        <span class="softnesttools_symbols_copy">‱</span>
                                        <div class="symbol-name">Per Ten Thousand Sign</div>
                                    </li>
                                    <li class="softnesttools_symbols">
                                        <span class="softnesttools_symbols_copy">©</span>
                                        <div class="symbol-name">Copyright Sign</div>
                                    </li>
                                    <li class="softnesttools_symbols">
                                        <span class="softnesttools_symbols_copy">☟</span>
                                        <div class="symbol-name">White Down Pointing Index</div>
                                    </li>
                                    <li class="softnesttools_symbols">
                                        <span class="softnesttools_symbols_copy">✃</span>
                                        <div class="symbol-name">Upper Right Pencil</div>
                                    </li>
                                    <li class="softnesttools_symbols">
                                        <span class="softnesttools_symbols_copy">№</span>
                                        <div class="symbol-name">Numero Sign</div>
                                    </li>
                                    <li class="softnesttools_symbols">
                                        <span class="softnesttools_symbols_copy">℁</span>
                                        <div class="symbol-name">Addressed To The Subject</div>
                                    </li>
                                    <li class="softnesttools_symbols">
                                        <span class="softnesttools_symbols_copy">Ⓒ</span>
                                        <div class="symbol-name">Circled Latin Capital Letter C</div>
                                    </li>
                                    <li class="softnesttools_symbols">
                                        <span class="softnesttools_symbols_copy">✒</span>
                                        <div class="symbol-name">Black Nib</div>
                                    </li>
                                    <li class="softnesttools_symbols">
                                        <span class="softnesttools_symbols_copy">✄</span>
                                        <div class="symbol-name">Lower Left Scissors</div>
                                    </li>
                                    <li class="softnesttools_symbols">
                                        <span class="softnesttools_symbols_copy">☞</span>
                                        <div class="symbol-name">Black Right Pointing Index</div>
                                    </li>
                                    <li class="softnesttools_symbols">
                                        <span class="softnesttools_symbols_copy">℅</span>
                                        <div class="symbol-name">Care Of</div>
                                    </li>
                                    <li class="softnesttools_symbols">
                                        <span class="softnesttools_symbols_copy">☊</span>
                                        <div class="symbol-name">Ascending Node</div>
                                    </li>
                                    <li class="softnesttools_symbols">
                                        <span class="softnesttools_symbols_copy">℠</span>
                                        <div class="symbol-name">Service Mark</div>
                                    </li>
                                    <li class="softnesttools_symbols">
                                        <span class="softnesttools_symbols_copy">✇</span>
                                        <div class="symbol-name">Tape Drive</div>
                                    </li>
                                    <li class="softnesttools_symbols">
                                        <span class="softnesttools_symbols_copy">⅍</span>
                                        <div class="symbol-name">Aktieselskab</div>
                                    </li>
                                    <li class="softnesttools_symbols">
                                        <span class="softnesttools_symbols_copy">✌</span>
                                        <div class="symbol-name">Victory Hand</div>
                                    </li>
                                    <li class="softnesttools_symbols">
                                        <span class="softnesttools_symbols_copy">℡</span>
                                        <div class="symbol-name">Telephone Sign</div>
                                    </li>
                                    <li class="softnesttools_symbols">
                                        <span class="softnesttools_symbols_copy">✑</span>
                                        <div class="symbol-name">Upper Left Pencil</div>
                                    </li>
                                    <li class="softnesttools_symbols">
                                        <span class="softnesttools_symbols_copy">¶</span>
                                        <div class="symbol-name">Pilcrow Sign</div>
                                    </li>
                                    <li class="softnesttools_symbols">
                                        <span class="softnesttools_symbols_copy">☚</span>
                                        <div class="symbol-name">Black Left Pointing Index</div>
                                    </li>
                                    <li class="softnesttools_symbols">
                                        <span class="softnesttools_symbols_copy">™</span>
                                        <div class="symbol-name">Trade Mark Sign</div>
                                    </li>
                                    <li class="softnesttools_symbols">
                                        <span class="softnesttools_symbols_copy">⌨</span>
                                        <div class="symbol-name">Keyboard</div>
                                    </li>
                                    <li class="softnesttools_symbols">
                                        <span class="softnesttools_symbols_copy">✐</span>
                                        <div class="symbol-name">Upper Right Pencil</div>
                                    </li>
                                    <li class="softnesttools_symbols">
                                        <span class="softnesttools_symbols_copy">☜</span>
                                        <div class="symbol-name">White Left Pointing Index</div>
                                    </li>
                                    <li class="softnesttools_symbols">
                                        <span class="softnesttools_symbols_copy">☏</span>
                                        <div class="symbol-name">White Telephone</div>
                                    </li>
                                    <li class="softnesttools_symbols">
                                        <span class="softnesttools_symbols_copy">®</span>
                                        <div class="symbol-name">Registered Sign</div>
                                    </li>
                                    <li class="softnesttools_symbols">
                                        <span class="softnesttools_symbols_copy">‰</span>
                                        <div class="symbol-name">Per Mille Sign</div>
                                    </li>
                                    <li class="softnesttools_symbols">
                                        <span class="softnesttools_symbols_copy">✆</span>
                                        <div class="symbol-name">Telephone Location Sign</div>
                                    </li>
                                    <li class="softnesttools_symbols">
                                        <span class="softnesttools_symbols_copy">☛</span>
                                        <div class="symbol-name">White Right Pointing Index</div>
                                    </li>
                                    <li class="softnesttools_symbols">
                                        <span class="softnesttools_symbols_copy">℆</span>
                                        <div class="symbol-name">Care Of</div>
                                    </li>
                                    <li class="softnesttools_symbols">
                                        <span class="softnesttools_symbols_copy">✁</span>
                                        <div class="symbol-name">Upper Left Scissors</div>
                                    </li>
                                    <li class="softnesttools_symbols">
                                        <span class="softnesttools_symbols_copy">✏</span>
                                        <div class="symbol-name">Pencil</div>
                                    </li>
                                    <li class="softnesttools_symbols">
                                        <span class="softnesttools_symbols_copy">§</span>
                                        <div class="symbol-name">Section Sign</div>
                                    </li>
                                    <li class="softnesttools_symbols">
                                        <span class="softnesttools_symbols_copy">✉</span>
                                        <div class="symbol-name">Envelope</div>
                                    </li>
                                    <li class="softnesttools_symbols">
                                        <span class="softnesttools_symbols_copy">✍</span>
                                        <div class="symbol-name">Writing Hand</div>
                                    </li>
                                    <li class="softnesttools_symbols">
                                        <span class="softnesttools_symbols_copy">☎</span>
                                        <div class="symbol-name">Black Telephone</div>
                                    </li>
                                    <li class="softnesttools_symbols">
                                        <span class="softnesttools_symbols_copy">☝</span>
                                        <div class="symbol-name">White Up Pointing Index</div>
                                    </li>
                                    <li class="softnesttools_symbols">
                                        <span class="softnesttools_symbols_copy">℗</span>
                                        <div class="symbol-name">Sound Recording Copyright</div>
                                    </li>
                                    <li class="h2copy">
                                        <h2>Currency Symbols</h2>
                                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quo enim repudiandae et omnis, est velit ratione dolore
                                            maxime, non aliquam dolor laboriosam.</p>
                                    </li>

                                    <!-- Currency Symbols -->
                                    <li class="softnesttools_symbols"><span class="softnesttools_symbols_copy">₩</span>
                                        <div class="symbol-name">Won Sign</div>
                                    </li>
                                    <li class="softnesttools_symbols"><span class="softnesttools_symbols_copy">￥</span>
                                        <div class="symbol-name">Yen Sign</div>
                                    </li>
                                    <li class="softnesttools_symbols"><span class="softnesttools_symbols_copy">£</span>
                                        <div class="symbol-name">Pound Sign</div>
                                    </li>
                                    <li class="softnesttools_symbols"><span class="softnesttools_symbols_copy">₵</span>
                                        <div class="symbol-name">Cedi Sign</div>
                                    </li>
                                    <li class="softnesttools_symbols"><span class="softnesttools_symbols_copy">₥</span>
                                        <div class="symbol-name">Mill Sign</div>
                                    </li>
                                    <li class="softnesttools_symbols"><span class="softnesttools_symbols_copy">₳</span>
                                        <div class="symbol-name">Austral Sign</div>
                                    </li>
                                    <li class="softnesttools_symbols"><span class="softnesttools_symbols_copy">$</span>
                                        <div class="symbol-name">Dollar Sign</div>
                                    </li>
                                    <li class="softnesttools_symbols"><span class="softnesttools_symbols_copy">₢</span>
                                        <div class="symbol-name">Cruzeiro Sign</div>
                                    </li>
                                    <li class="softnesttools_symbols"><span class="softnesttools_symbols_copy">ƒ</span>
                                        <div class="symbol-name">Florin Sign</div>
                                    </li>
                                    <li class="softnesttools_symbols"><span class="softnesttools_symbols_copy">₤</span>
                                        <div class="symbol-name">Lira Sign</div>
                                    </li>
                                    <li class="softnesttools_symbols"><span class="softnesttools_symbols_copy">₰</span>
                                        <div class="symbol-name">German Penny Sign</div>
                                    </li>
                                    <li class="softnesttools_symbols"><span class="softnesttools_symbols_copy">€</span>
                                        <div class="symbol-name">Euro Sign</div>
                                    </li>
                                    <li class="softnesttools_symbols"><span class="softnesttools_symbols_copy">৳</span>
                                        <div class="symbol-name">Taka Sign</div>
                                    </li>
                                    <li class="softnesttools_symbols"><span class="softnesttools_symbols_copy">﷼</span>
                                        <div class="symbol-name">Rial Sign</div>
                                    </li>
                                    <li class="softnesttools_symbols"><span class="softnesttools_symbols_copy">₦</span>
                                        <div class="symbol-name">Naira Sign</div>
                                    </li>
                                    <li class="softnesttools_symbols"><span class="softnesttools_symbols_copy">¥</span>
                                        <div class="symbol-name">Yen/Yuan Sign</div>
                                    </li>
                                    <li class="softnesttools_symbols"><span class="softnesttools_symbols_copy">₱</span>
                                        <div class="symbol-name">Peso Sign</div>
                                    </li>
                                    <li class="softnesttools_symbols"><span class="softnesttools_symbols_copy">₠</span>
                                        <div class="symbol-name">Euro-Currency Sign</div>
                                    </li>
                                    <li class="softnesttools_symbols"><span class="softnesttools_symbols_copy">₪</span>
                                        <div class="symbol-name">Shekel Sign</div>
                                    </li>
                                    <li class="softnesttools_symbols"><span class="softnesttools_symbols_copy">₲</span>
                                        <div class="symbol-name">Guarani Sign</div>
                                    </li>
                                    <li class="softnesttools_symbols"><span class="softnesttools_symbols_copy">௹</span>
                                        <div class="symbol-name">Rupee Sign</div>
                                    </li>
                                    <li class="softnesttools_symbols"><span class="softnesttools_symbols_copy">₡</span>
                                        <div class="symbol-name">Colon Sign</div>
                                    </li>
                                    <li class="softnesttools_symbols"><span class="softnesttools_symbols_copy">₫</span>
                                        <div class="symbol-name">Dong Sign</div>
                                    </li>
                                    <li class="softnesttools_symbols"><span class="softnesttools_symbols_copy">৲</span>
                                        <div class="symbol-name">Bengali Rupee Mark</div>
                                    </li>
                                    <li class="softnesttools_symbols"><span class="softnesttools_symbols_copy">₧</span>
                                        <div class="symbol-name">Peseta Sign</div>
                                    </li>
                                    <li class="softnesttools_symbols"><span class="softnesttools_symbols_copy">₭</span>
                                        <div class="symbol-name">Kip Sign</div>
                                    </li>
                                    <li class="softnesttools_symbols"><span class="softnesttools_symbols_copy">¢</span>
                                        <div class="symbol-name">Cent Sign</div>
                                    </li>
                                    <li class="softnesttools_symbols"><span class="softnesttools_symbols_copy">៛</span>
                                        <div class="symbol-name">Riel Sign</div>
                                    </li>
                                    <li class="softnesttools_symbols"><span class="softnesttools_symbols_copy">¤</span>
                                        <div class="symbol-name">Currency Sign</div>
                                    </li>
                                    <li class="softnesttools_symbols"><span class="softnesttools_symbols_copy">₨</span>
                                        <div class="symbol-name">Rupee Sign</div>
                                    </li>
                                    <li class="softnesttools_symbols"><span class="softnesttools_symbols_copy">₯</span>
                                        <div class="symbol-name">Drachma Sign</div>
                                    </li>
                                    <li class="softnesttools_symbols"><span class="softnesttools_symbols_copy">₮</span>
                                        <div class="symbol-name">Tugrik Sign</div>
                                    </li>
                                    <li class="softnesttools_symbols"><span class="softnesttools_symbols_copy">฿</span>
                                        <div class="symbol-name">Baht Sign</div>
                                    </li>
                                    <li class="softnesttools_symbols"><span class="softnesttools_symbols_copy">₴</span>
                                        <div class="symbol-name">Hryvnia Sign</div>
                                    </li>
                                    <li class="softnesttools_symbols"><span class="softnesttools_symbols_copy">₣</span>
                                        <div class="symbol-name">French Franc Sign</div>
                                    </li>
                                    
                                    <!-- Zodiac Symbols -->
                                    <li class="h2copy">
                                        <h2>Zodiac Symbols</h2>
                                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quo enim repudiandae et omnis, est velit ratione dolore
                                            maxime, non aliquam dolor laboriosam.</p>
                                    </li>
                                    <li class="softnesttools_symbols"><span class="softnesttools_symbols_copy">♌︎</span>
                                        <div class="symbol-name">Leo</div>
                                    </li>
                                    <li class="softnesttools_symbols"><span class="softnesttools_symbols_copy">♈︎</span>
                                        <div class="symbol-name">Aries</div>
                                    </li>
                                    <li class="softnesttools_symbols"><span class="softnesttools_symbols_copy">♉︎</span>
                                        <div class="symbol-name">Taurus</div>
                                    </li>
                                    <li class="softnesttools_symbols"><span class="softnesttools_symbols_copy">♐︎</span>
                                        <div class="symbol-name">Sagittarius</div>
                                    </li>
                                    <li class="softnesttools_symbols"><span class="softnesttools_symbols_copy">♋︎</span>
                                        <div class="symbol-name">Cancer</div>
                                    </li>
                                    <li class="softnesttools_symbols"><span class="softnesttools_symbols_copy">♏︎</span>
                                        <div class="symbol-name">Scorpio</div>
                                    </li>
                                    <li class="softnesttools_symbols"><span class="softnesttools_symbols_copy">♓︎</span>
                                        <div class="symbol-name">Pisces</div>
                                    </li>
                                    <li class="softnesttools_symbols"><span class="softnesttools_symbols_copy">♎︎</span>
                                        <div class="symbol-name">Libra</div>
                                    </li>
                                    <li class="softnesttools_symbols"><span class="softnesttools_symbols_copy">♊︎</span>
                                        <div class="symbol-name">Gemini</div>
                                    </li>
                                    <li class="softnesttools_symbols"><span class="softnesttools_symbols_copy">♑︎</span>
                                        <div class="symbol-name">Capricorn</div>
                                    </li>
                                    <li class="softnesttools_symbols"><span class="softnesttools_symbols_copy">♍︎</span>
                                        <div class="symbol-name">Virgo</div>
                                    </li>
                                    <li class="softnesttools_symbols"><span class="softnesttools_symbols_copy">♒︎</span>
                                        <div class="symbol-name">Aquarius</div>
                                    </li>
                                    
                                    <!-- Astrological Symbols -->
                                    <li class="h2copy">
                                        <h2>Astrological Symbols</h2>
                                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quo enim repudiandae et omnis, est velit ratione dolore
                                            maxime, non aliquam dolor laboriosam.</p>
                                    </li>
                                    <li class="softnesttools_symbols"><span class="softnesttools_symbols_copy">☿</span>
                                        <div class="symbol-name">Mercury</div>
                                    </li>
                                    <li class="softnesttools_symbols"><span class="softnesttools_symbols_copy">♃</span>
                                        <div class="symbol-name">Jupiter</div>
                                    </li>
                                    <li class="softnesttools_symbols"><span class="softnesttools_symbols_copy">♇</span>
                                        <div class="symbol-name">Pluto</div>
                                    </li>
                                    <li class="softnesttools_symbols"><span class="softnesttools_symbols_copy">☋</span>
                                        <div class="symbol-name">Descending Node</div>
                                    </li>
                                    <li class="softnesttools_symbols"><span class="softnesttools_symbols_copy">☉</span>
                                        <div class="symbol-name">Sun</div>
                                    </li>
                                    <li class="softnesttools_symbols"><span class="softnesttools_symbols_copy">☊</span>
                                        <div class="symbol-name">Ascending Node</div>
                                    </li>
                                    <li class="softnesttools_symbols"><span class="softnesttools_symbols_copy">♄</span>
                                        <div class="symbol-name">Saturn</div>
                                    </li>
                                    <li class="softnesttools_symbols"><span class="softnesttools_symbols_copy">⚴</span>
                                        <div class="symbol-name">Pallas</div>
                                    </li>
                                    <li class="softnesttools_symbols"><span class="softnesttools_symbols_copy">⊕</span>
                                        <div class="symbol-name">Earth</div>
                                    </li>
                                    <li class="softnesttools_symbols"><span class="softnesttools_symbols_copy">⚶</span>
                                        <div class="symbol-name">Juno</div>
                                    </li>
                                    <li class="softnesttools_symbols"><span class="softnesttools_symbols_copy">♅</span>
                                        <div class="symbol-name">Uranus</div>
                                    </li>
                                    <li class="softnesttools_symbols"><span class="softnesttools_symbols_copy">🌔︎</span>
                                        <div class="symbol-name">Waxing Gibbous Moon</div>
                                    </li>
                                    <li class="softnesttools_symbols"><span class="softnesttools_symbols_copy">☽</span>
                                        <div class="symbol-name">Moon</div>
                                    </li>
                                    <li class="softnesttools_symbols"><span class="softnesttools_symbols_copy">♆</span>
                                        <div class="symbol-name">Neptune</div>
                                    </li>
                                    <li class="softnesttools_symbols"><span class="softnesttools_symbols_copy">⊗</span>
                                        <div class="symbol-name">Opposition</div>
                                    </li>
                                    <li class="softnesttools_symbols"><span class="softnesttools_symbols_copy">🌘︎</span>
                                        <div class="symbol-name">Waning Crescent Moon</div>
                                    </li>
                                    <li class="softnesttools_symbols"><span class="softnesttools_symbols_copy">⚵</span>
                                        <div class="symbol-name">Vesta</div>
                                    </li>
                                    <li class="softnesttools_symbols"><span class="softnesttools_symbols_copy">☄︎</span>
                                        <div class="symbol-name">Comet</div>
                                    </li>
                                    <li class="softnesttools_symbols"><span class="softnesttools_symbols_copy">🌓︎</span>
                                        <div class="symbol-name">First Quarter Moon</div>
                                    </li>
                                    <li class="softnesttools_symbols"><span class="softnesttools_symbols_copy">🌗︎</span>
                                        <div class="symbol-name">Last Quarter Moon</div>
                                    </li>
                                    <li class="softnesttools_symbols"><span class="softnesttools_symbols_copy">♂︎</span>
                                        <div class="symbol-name">Mars</div>
                                    </li>
                                    <li class="softnesttools_symbols"><span class="softnesttools_symbols_copy">🌒︎</span>
                                        <div class="symbol-name">Waxing Crescent Moon</div>
                                    </li>
                                    <li class="softnesttools_symbols"><span class="softnesttools_symbols_copy">♁</span>
                                        <div class="symbol-name">Earth</div>
                                    </li>
                                    <li class="softnesttools_symbols"><span class="softnesttools_symbols_copy">⚕</span>
                                        <div class="symbol-name">Caduceus</div>
                                    </li>
                                    <li class="softnesttools_symbols"><span class="softnesttools_symbols_copy">⛢</span>
                                        <div class="symbol-name">Uranus</div>
                                    </li>
                                    <li class="softnesttools_symbols"><span class="softnesttools_symbols_copy">🌕︎</span>
                                        <div class="symbol-name">Full Moon</div>
                                    </li>
                                    <li class="softnesttools_symbols"><span class="softnesttools_symbols_copy">♀︎</span>
                                        <div class="symbol-name">Venus</div>
                                    </li>
                                    <li class="softnesttools_symbols"><span class="softnesttools_symbols_copy">⚷</span>
                                        <div class="symbol-name">Chiron</div>
                                    </li>
                                    <li class="softnesttools_symbols"><span class="softnesttools_symbols_copy">🌑︎</span>
                                        <div class="symbol-name">New Moon</div>
                                    </li>
                                    <li class="softnesttools_symbols"><span class="softnesttools_symbols_copy">🌖︎</span>
                                        <div class="symbol-name">Waning Gibbous Moon</div>
                                    </li>
                                    <li class="softnesttools_symbols"><span class="softnesttools_symbols_copy">⚸</span>
                                        <div class="symbol-name">Lilith</div>
                                    </li>
                                    <li class="softnesttools_symbols"><span class="softnesttools_symbols_copy">⚳</span>
                                        <div class="symbol-name">Ceres</div>
                                    </li>
                                    
                                    <!-- Dice Symbols -->
                                    <li class="h2copy">
                                        <h2>Dice Symbols</h2>
                                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quo enim repudiandae et omnis, est velit ratione dolore
                                            maxime, non aliquam dolor laboriosam.</p>
                                    </li>
                                    <li class="softnesttools_symbols"><span class="softnesttools_symbols_copy">⚀</span>
                                        <div class="symbol-name">Die Face-1</div>
                                    </li>
                                    <li class="softnesttools_symbols"><span class="softnesttools_symbols_copy">⚁</span>
                                        <div class="symbol-name">Die Face-2</div>
                                    </li>
                                    <li class="softnesttools_symbols"><span class="softnesttools_symbols_copy">⚂</span>
                                        <div class="symbol-name">Die Face-3</div>
                                    </li>
                                    <li class="softnesttools_symbols"><span class="softnesttools_symbols_copy">⚃</span>
                                        <div class="symbol-name">Die Face-4</div>
                                    </li>
                                    <li class="softnesttools_symbols"><span class="softnesttools_symbols_copy">⚄</span>
                                        <div class="symbol-name">Die Face-5</div>
                                    </li>
                                    <li class="softnesttools_symbols"><span class="softnesttools_symbols_copy">⚅</span>
                                        <div class="symbol-name">Die Face-6</div>
                                    </li>
                                    
                                    <!-- Chess & Card Symbols -->
                                    <li class="h2copy">
                                        <h2>Chess & Card Symbols</h2>
                                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quo enim repudiandae et omnis, est velit ratione dolore
                                            maxime, non aliquam dolor laboriosam.</p>
                                    </li>
                                    <li class="softnesttools_symbols"><span class="softnesttools_symbols_copy">♙</span>
                                        <div class="symbol-name">White Pawn</div>
                                    </li>
                                    <li class="softnesttools_symbols"><span class="softnesttools_symbols_copy">♔</span>
                                        <div class="symbol-name">White King</div>
                                    </li>
                                    <li class="softnesttools_symbols"><span class="softnesttools_symbols_copy">♤</span>
                                        <div class="symbol-name">Spade Suit</div>
                                    </li>
                                    <li class="softnesttools_symbols"><span class="softnesttools_symbols_copy">♦</span>
                                        <div class="symbol-name">Diamond Suit</div>
                                    </li>
                                    <li class="softnesttools_symbols"><span class="softnesttools_symbols_copy">♕</span>
                                        <div class="symbol-name">White Queen</div>
                                    </li>
                                    <li class="softnesttools_symbols"><span class="softnesttools_symbols_copy">♖</span>
                                        <div class="symbol-name">White Rook</div>
                                    </li>
                                    <li class="softnesttools_symbols"><span class="softnesttools_symbols_copy">♠</span>
                                        <div class="symbol-name">Spade Suit</div>
                                    </li>
                                    <li class="softnesttools_symbols"><span class="softnesttools_symbols_copy">♝</span>
                                        <div class="symbol-name">Black Bishop</div>
                                    </li>
                                    <li class="softnesttools_symbols"><span class="softnesttools_symbols_copy">♘</span>
                                        <div class="symbol-name">White Knight</div>
                                    </li>
                                    <li class="softnesttools_symbols"><span class="softnesttools_symbols_copy">♟</span>
                                        <div class="symbol-name">Black Pawn</div>
                                    </li>
                                    <li class="softnesttools_symbols"><span class="softnesttools_symbols_copy">♥</span>
                                        <div class="symbol-name">Heart Suit</div>
                                    </li>
                                    <li class="softnesttools_symbols"><span class="softnesttools_symbols_copy">♜</span>
                                        <div class="symbol-name">Black Rook</div>
                                    </li>
                                    <li class="softnesttools_symbols"><span class="softnesttools_symbols_copy">♡</span>
                                        <div class="symbol-name">Heart Suit</div>
                                    </li>
                                    <li class="softnesttools_symbols"><span class="softnesttools_symbols_copy">♛</span>
                                        <div class="symbol-name">Black Queen</div>
                                    </li>
                                    <li class="softnesttools_symbols"><span class="softnesttools_symbols_copy">♗</span>
                                        <div class="symbol-name">White Bishop</div>
                                    </li>
                                    <li class="softnesttools_symbols"><span class="softnesttools_symbols_copy">♧</span>
                                        <div class="symbol-name">Club Suit</div>
                                    </li>
                                    <li class="softnesttools_symbols"><span class="softnesttools_symbols_copy">♞</span>
                                        <div class="symbol-name">Black Knight</div>
                                    </li>
                                    <li class="softnesttools_symbols"><span class="softnesttools_symbols_copy">♚</span>
                                        <div class="symbol-name">Black King</div>
                                    </li>
                                    <li class="softnesttools_symbols"><span class="softnesttools_symbols_copy">♣</span>
                                        <div class="symbol-name">Club Suit</div>
                                    </li>
                                    <li class="softnesttools_symbols"><span class="softnesttools_symbols_copy">♢</span>
                                        <div class="symbol-name">Diamond Suit</div>
                                    </li>
                                    
                                    <!-- Road Signs -->
                                    <li class="h2copy">
                                        <h2>Road Signs</h2>
                                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quo enim repudiandae et omnis, est velit ratione dolore
                                            maxime, non aliquam dolor laboriosam.</p>
                                    </li>
                                    <li class="softnesttools_symbols"><span class="softnesttools_symbols_copy">🚶</span>
                                        <div class="symbol-name">Pedestrian</div>
                                    </li>
                                    <li class="softnesttools_symbols"><span class="softnesttools_symbols_copy">🚨</span>
                                        <div class="symbol-name">Police Car Light</div>
                                    </li>
                                    <li class="softnesttools_symbols"><span class="softnesttools_symbols_copy">🚹</span>
                                        <div class="symbol-name">Men's Room</div>
                                    </li>
                                    <li class="softnesttools_symbols"><span class="softnesttools_symbols_copy">⛒</span>
                                        <div class="symbol-name">Two-Way Traffic</div>
                                    </li>
                                    <li class="softnesttools_symbols"><span class="softnesttools_symbols_copy">⛚</span>
                                        <div class="symbol-name">No Motor Vehicles</div>
                                    </li>
                                    <li class="softnesttools_symbols"><span class="softnesttools_symbols_copy">⛰</span>
                                        <div class="symbol-name">Mountain</div>
                                    </li>
                                    <li class="softnesttools_symbols"><span class="softnesttools_symbols_copy">⛔</span>
                                        <div class="symbol-name">No Entry</div>
                                    </li>
                                    <li class="softnesttools_symbols"><span class="softnesttools_symbols_copy">⛲</span>
                                        <div class="symbol-name">Fountain</div>
                                    </li>
                                    <li class="softnesttools_symbols"><span class="softnesttools_symbols_copy">🚩</span>
                                        <div class="symbol-name">Triangular Flag</div>
                                    </li>
                                    <li class="softnesttools_symbols"><span class="softnesttools_symbols_copy">⛗</span>
                                        <div class="symbol-name">No Bicycles</div>
                                    </li>
                                    <li class="softnesttools_symbols"><span class="softnesttools_symbols_copy">⛐</span>
                                        <div class="symbol-name">No Pedestrians</div>
                                    </li>
                                    <li class="softnesttools_symbols"><span class="softnesttools_symbols_copy">⛼</span>
                                        <div class="symbol-name">No Trucks</div>
                                    </li>
                                    <li class="softnesttools_symbols"><span class="softnesttools_symbols_copy">⛻</span>
                                        <div class="symbol-name">No Buses</div>
                                    </li>
                                    <li class="softnesttools_symbols"><span class="softnesttools_symbols_copy">⚠</span>
                                        <div class="symbol-name">Warning</div>
                                    </li>
                                    <li class="softnesttools_symbols"><span class="softnesttools_symbols_copy">✈</span>
                                        <div class="symbol-name">Airplane</div>
                                    </li>
                                    <li class="softnesttools_symbols"><span class="softnesttools_symbols_copy">🚫</span>
                                        <div class="symbol-name">No Entry</div>
                                    </li>
                                    <li class="softnesttools_symbols"><span class="softnesttools_symbols_copy">☢</span>
                                        <div class="symbol-name">Radioactive</div>
                                    </li>
                                    <li class="softnesttools_symbols"><span class="softnesttools_symbols_copy">⛍</span>
                                        <div class="symbol-name">No Overtaking</div>
                                    </li>
                                    <li class="softnesttools_symbols"><span class="softnesttools_symbols_copy">⛙</span>
                                        <div class="symbol-name">No Horn</div>
                                    </li>
                                    <li class="softnesttools_symbols"><span class="softnesttools_symbols_copy">⛯</span>
                                        <div class="symbol-name">No Stopping</div>
                                    </li>
                                    <li class="softnesttools_symbols"><span class="softnesttools_symbols_copy">♨</span>
                                        <div class="symbol-name">Hot Springs</div>
                                    </li>
                                    <li class="softnesttools_symbols"><span class="softnesttools_symbols_copy">🚭</span>
                                        <div class="symbol-name">No Smoking</div>
                                    </li>
                                    <li class="softnesttools_symbols"><span class="softnesttools_symbols_copy">⛡</span>
                                        <div class="symbol-name">No Parking</div>
                                    </li>
                                    <li class="softnesttools_symbols"><span class="softnesttools_symbols_copy">🚸</span>
                                        <div class="symbol-name">Children Crossing</div>
                                    </li>
                                    <li class="softnesttools_symbols"><span class="softnesttools_symbols_copy">⛽</span>
                                        <div class="symbol-name">Fuel Pump</div>
                                    </li>
                                    <li class="softnesttools_symbols"><span class="softnesttools_symbols_copy">🛑</span>
                                        <div class="symbol-name">Stop Sign</div>
                                    </li>
                                    <li class="softnesttools_symbols"><span class="softnesttools_symbols_copy">⛫</span>
                                        <div class="symbol-name">No U-Turn</div>
                                    </li>
                                    <li class="softnesttools_symbols"><span class="softnesttools_symbols_copy">♿</span>
                                        <div class="symbol-name">Wheelchair</div>
                                    </li>
                                    <li class="softnesttools_symbols"><span class="softnesttools_symbols_copy">☏</span>
                                        <div class="symbol-name">Telephone</div>
                                    </li>
                                    <li class="softnesttools_symbols"><span class="softnesttools_symbols_copy">☠</span>
                                        <div class="symbol-name">Skull and Crossbones</div>
                                    </li>
                                    <li class="softnesttools_symbols"><span class="softnesttools_symbols_copy">🚦</span>
                                        <div class="symbol-name">Traffic Light</div>
                                    </li>
                                    <li class="softnesttools_symbols"><span class="softnesttools_symbols_copy">⛘</span>
                                        <div class="symbol-name">No Left Turn</div>
                                    </li>
                                    <li class="softnesttools_symbols"><span class="softnesttools_symbols_copy">⛾</span>
                                        <div class="symbol-name">No Right Turn</div>
                                    </li>
                                    <li class="softnesttools_symbols"><span class="softnesttools_symbols_copy">🚧</span>
                                        <div class="symbol-name">Construction</div>
                                    </li>
                                    <li class="softnesttools_symbols"><span class="softnesttools_symbols_copy">🚻</span>
                                        <div class="symbol-name">Restroom</div>
                                    </li>
                                    <li class="softnesttools_symbols"><span class="softnesttools_symbols_copy">⛕</span>
                                        <div class="symbol-name">No Through Road</div>
                                    </li>
                                    <li class="softnesttools_symbols"><span class="softnesttools_symbols_copy">☡</span>
                                        <div class="symbol-name">Caution</div>
                                    </li>
                                    <li class="softnesttools_symbols"><span class="softnesttools_symbols_copy">✆</span>
                                        <div class="symbol-name">Telephone Location</div>
                                    </li>
                                    <li class="softnesttools_symbols"><span class="softnesttools_symbols_copy">🚬</span>
                                        <div class="symbol-name">Smoking</div>
                                    </li>
                                    <li class="softnesttools_symbols"><span class="softnesttools_symbols_copy">☣</span>
                                        <div class="symbol-name">Biohazard</div>
                                    </li>
                                    <li class="softnesttools_symbols"><span class="softnesttools_symbols_copy">⛛</span>
                                        <div class="symbol-name">No Straight Through</div>
                                    </li>
                                    <li class="softnesttools_symbols"><span class="softnesttools_symbols_copy">⛜</span>
                                        <div class="symbol-name">No Left or Right Turn</div>
                                    </li>
                                    <li class="softnesttools_symbols"><span class="softnesttools_symbols_copy">🚷</span>
                                        <div class="symbol-name">No Pedestrians</div>
                                    </li>
                                    <li class="softnesttools_symbols"><span class="softnesttools_symbols_copy">🚥</span>
                                        <div class="symbol-name">Traffic Light</div>
                                    </li>
                                    <li class="softnesttools_symbols"><span class="softnesttools_symbols_copy">☎</span>
                                        <div class="symbol-name">Telephone</div>
                                    </li>
                                    <li class="softnesttools_symbols"><span class="softnesttools_symbols_copy">🚺</span>
                                        <div class="symbol-name">Women's Room</div>
                                    </li>
                                    <li class="softnesttools_symbols"><span class="softnesttools_symbols_copy">⚡</span>
                                        <div class="symbol-name">High Voltage</div>
                                    </li>
                                    <li class="softnesttools_symbols"><span class="softnesttools_symbols_copy">⛌</span>
                                        <div class="symbol-name">No Entry for Vehicles</div>
                                    </li>
                                    <li class="softnesttools_symbols"><span class="softnesttools_symbols_copy">⛠</span>
                                        <div class="symbol-name">No Entry for Pedestrians</div>
                                    </li>
                                    <li class="softnesttools_symbols"><span class="softnesttools_symbols_copy">☕</span>
                                        <div class="symbol-name">Hot Beverage</div>
                                    </li>
                                    <li class="softnesttools_symbols"><span class="softnesttools_symbols_copy">⛖</span>
                                        <div class="symbol-name">No Entry for Bicycles</div>
                                    </li>
                                    <li class="softnesttools_symbols"><span class="softnesttools_symbols_copy">⛬</span>
                                        <div class="symbol-name">No Entry for Trucks</div>
                                    </li>
                                    <li class="h2copy">
                                        <h2>Smiley Face Symbols</h2>
                                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quo enim repudiandae et omnis, est velit ratione dolore
                                            maxime, non aliquam dolor laboriosam.</p>
                                    </li>
                                <!-- Emojis -->
                                <li class="softnesttools_symbols"><span class="softnesttools_symbols_copy">〲</span>
                                <div class="symbol-name">Vertical Kana Repeat Mark</div>
                                </li>
                                <li class="softnesttools_symbols"><span class="softnesttools_symbols_copy">😸</span>
                                <div class="symbol-name">Grinning Cat Face with Smiling Eyes</div>
                                </li>
                                <li class="softnesttools_symbols"><span class="softnesttools_symbols_copy">😼</span>
                                <div class="symbol-name">Cat Face with Wry Smile</div>
                                </li>
                                <li class="softnesttools_symbols"><span class="softnesttools_symbols_copy">🙋</span>
                                <div class="symbol-name">Happy Person Raising One Hand</div>
                                </li>
                                <li class="softnesttools_symbols"><span class="softnesttools_symbols_copy">ジ</span>
                                <div class="symbol-name">Katakana Letter Ji</div>
                                </li>
                                <li class="softnesttools_symbols"><span class="softnesttools_symbols_copy">⍥</span>
                                <div class="symbol-name">APL Functional Symbol Circle Diaeresis</div>
                                </li>
                                <li class="softnesttools_symbols"><span class="softnesttools_symbols_copy">ὣ</span>
                                <div class="symbol-name">Greek Small Letter Omega with Dasia and Oxia</div>
                                </li>
                                <li class="softnesttools_symbols"><span class="softnesttools_symbols_copy">ӫ</span>
                                <div class="symbol-name">Cyrillic Small Letter O with Diaeresis</div>
                                </li>
                                <li class="softnesttools_symbols"><span class="softnesttools_symbols_copy">ൠ</span>
                                <div class="symbol-name">Malayalam Letter Vocalic Rr</div>
                                </li>
                                <li class="softnesttools_symbols"><span class="softnesttools_symbols_copy">ꐡ</span>
                                <div class="symbol-name">Yi Syllable Hxie</div>
                                </li>
                                <li class="softnesttools_symbols"><span class="softnesttools_symbols_copy">ꈋ</span>
                                <div class="symbol-name">Yi Syllable Hxop</div>
                                </li>
                                <li class="softnesttools_symbols"><span class="softnesttools_symbols_copy">⚨</span>
                                <div class="symbol-name">Vertical Male with Stroke Sign</div>
                                </li>
                                <li class="softnesttools_symbols"><span class="softnesttools_symbols_copy">☹</span>
                                <div class="symbol-name">Frowning Face</div>
                                </li>
                                <li class="softnesttools_symbols"><span class="softnesttools_symbols_copy">😋</span>
                                <div class="symbol-name">Face Savoring Food</div>
                                </li>
                                <li class="softnesttools_symbols"><span class="softnesttools_symbols_copy">😓</span>
                                <div class="symbol-name">Downcast Face with Sweat</div>
                                </li>
                                <li class="softnesttools_symbols"><span class="softnesttools_symbols_copy">🙏</span>
                                <div class="symbol-name">Folded Hands</div>
                                </li>
                                <li class="softnesttools_symbols"><span class="softnesttools_symbols_copy">シ</span>
                                <div class="symbol-name">Katakana Letter Shi</div>
                                </li>
                                <li class="softnesttools_symbols"><span class="softnesttools_symbols_copy">😐</span>
                                <div class="symbol-name">Neutral Face</div>
                                </li>
                                <li class="softnesttools_symbols"><span class="softnesttools_symbols_copy">😹</span>
                                <div class="symbol-name">Cat Face with Tears of Joy</div>
                                </li>
                                <li class="softnesttools_symbols"><span class="softnesttools_symbols_copy">🙊</span>
                                <div class="symbol-name">Speak-No-Evil Monkey</div>
                                </li>
                                <li class="softnesttools_symbols"><span class="softnesttools_symbols_copy">🙌</span>
                                <div class="symbol-name">Raising Hands</div>
                                </li>
                                <li class="softnesttools_symbols"><span class="softnesttools_symbols_copy">⍤</span>
                                <div class="symbol-name">APL Functional Symbol Quad Diaeresis</div>
                                </li>
                                <li class="softnesttools_symbols"><span class="softnesttools_symbols_copy">⍨</span>
                                <div class="symbol-name">APL Functional Symbol Tilde Diaeresis</div>
                                </li>
                                <li class="softnesttools_symbols"><span class="softnesttools_symbols_copy">Ӫ</span>
                                <div class="symbol-name">Cyrillic Capital Letter O with Diaeresis</div>
                                </li>
                                <li class="softnesttools_symbols"><span class="softnesttools_symbols_copy">ಠ</span>
                                <div class="symbol-name">Kannada Letter Ttha</div>
                                </li>
                                <li class="softnesttools_symbols"><span class="softnesttools_symbols_copy">ꐠ</span>
                                <div class="symbol-name">Yi Syllable Hxie</div>
                                </li>
                                <li class="softnesttools_symbols"><span class="softnesttools_symbols_copy">ꐕ</span>
                                <div class="symbol-name">Yi Syllable Hxie</div>
                                </li>
                                <li class="softnesttools_symbols"><span class="softnesttools_symbols_copy">⚧</span>
                                <div class="symbol-name">Transgender Symbol</div>
                                </li>
                                <li class="softnesttools_symbols"><span class="softnesttools_symbols_copy">⚢</span>
                                <div class="symbol-name">Double Female Sign</div>
                                </li>
                                <li class="softnesttools_symbols"><span class="softnesttools_symbols_copy">😊</span>
                                <div class="symbol-name">Smiling Face with Smiling Eyes</div>
                                </li>
                                <li class="softnesttools_symbols"><span class="softnesttools_symbols_copy">😌</span>
                                <div class="symbol-name">Relieved Face</div>
                                </li>
                                <li class="softnesttools_symbols"><span class="softnesttools_symbols_copy">😢</span>
                                <div class="symbol-name">Crying Face</div>
                                </li>
                                <li class="softnesttools_symbols"><span class="softnesttools_symbols_copy">ッ</span>
                                <div class="symbol-name">Katakana Letter Small Tsu</div>
                                </li>
                                <li class="softnesttools_symbols"><span class="softnesttools_symbols_copy">😥</span>
                                <div class="symbol-name">Sad but Relieved Face</div>
                                </li>
                                <li class="softnesttools_symbols"><span class="softnesttools_symbols_copy">😺</span>
                                <div class="symbol-name">Smiling Cat Face with Open Mouth</div>
                                </li>
                                <li class="softnesttools_symbols"><span class="softnesttools_symbols_copy">🙀</span>
                                <div class="symbol-name">Weary Cat Face</div>
                                </li>
                                <li class="softnesttools_symbols"><span class="softnesttools_symbols_copy">🙍</span>
                                <div class="symbol-name">Person Frowning</div>
                                </li>
                                <li class="softnesttools_symbols"><span class="softnesttools_symbols_copy">ت</span>
                                <div class="symbol-name">Arabic Letter Teh</div>
                                </li>
                                <li class="softnesttools_symbols"><span class="softnesttools_symbols_copy">⍩</span>
                                <div class="symbol-name">APL Functional Symbol Star Diaeresis</div>
                                </li>
                                <li class="softnesttools_symbols"><span class="softnesttools_symbols_copy">ӛ</span>
                                <div class="symbol-name">Cyrillic Small Letter O with Diaeresis</div>
                                </li>
                                <li class="softnesttools_symbols"><span class="softnesttools_symbols_copy">ఠ</span>
                                <div class="symbol-name">Telugu Letter Ttha</div>
                                </li>
                                <li class="softnesttools_symbols"><span class="softnesttools_symbols_copy">웃</span>
                                <div class="symbol-name">Hangul Syllable Us</div>
                                </li>
                                <li class="softnesttools_symbols"><span class="softnesttools_symbols_copy">ꌇ</span>
                                <div class="symbol-name">Yi Syllable Hxie</div>
                                </li>
                                <li class="softnesttools_symbols"><span class="softnesttools_symbols_copy">ꃼ</span>
                                <div class="symbol-name">Yi Syllable Hxie</div>
                                </li>
                                <li class="softnesttools_symbols"><span class="softnesttools_symbols_copy">㋡</span>
                                <div class="symbol-name">Square Hiragana Hoka</div>
                                </li>
                                <li class="softnesttools_symbols"><span class="softnesttools_symbols_copy">😂</span>
                                <div class="symbol-name">Face with Tears of Joy</div>
                                </li>
                                <li class="softnesttools_symbols"><span class="softnesttools_symbols_copy">😍</span>
                                <div class="symbol-name">Smiling Face with Heart-Eyes</div>
                                </li>
                                <li class="softnesttools_symbols"><span class="softnesttools_symbols_copy">😚</span>
                                <div class="symbol-name">Kissing Face with Closed Eyes</div>
                                </li>
                                <li class="softnesttools_symbols"><span class="softnesttools_symbols_copy">ヅ</span>
                                <div class="symbol-name">Katakana Letter Du</div>
                                </li>
                                <li class="softnesttools_symbols"><span class="softnesttools_symbols_copy">😻</span>
                                <div class="symbol-name">Smiling Cat Face with Heart-Eyes</div>
                                </li>
                                <li class="softnesttools_symbols"><span class="softnesttools_symbols_copy">ϡ</span>
                                <div class="symbol-name">Greek Sampi Symbol</div>
                                </li>
                                <li class="softnesttools_symbols"><span class="softnesttools_symbols_copy">ὕ</span>
                                <div class="symbol-name">Greek Small Letter Upsilon with Dasia</div>
                                </li>
                                <li class="softnesttools_symbols"><span class="softnesttools_symbols_copy">ഋ</span>
                                <div class="symbol-name">Malayalam Letter Vocalic R</div>
                                </li>
                                <li class="softnesttools_symbols"><span class="softnesttools_symbols_copy">ꉕ</span>
                                <div class="symbol-name">Yi Syllable Hxie</div>
                                </li>
                                <li class="softnesttools_symbols"><span class="softnesttools_symbols_copy">☺</span>
                                <div class="symbol-name">Smiling Face</div>
                                </li>
                                <li class="softnesttools_symbols"><span class="softnesttools_symbols_copy">😒</span>
                                <div class="symbol-name">Unamused Face</div>
                                </li>
                                <li class="softnesttools_symbols"><span class="softnesttools_symbols_copy">😈</span>
                                <div class="symbol-name">Smiling Face with Horns</div>
                                </li>
                                <li class="softnesttools_symbols"><span class="softnesttools_symbols_copy">🙈</span>
                                <div class="symbol-name">See-No-Evil Monkey</div>
                                </li>
                                <li class="softnesttools_symbols"><span class="softnesttools_symbols_copy">⍢</span>
                                <div class="symbol-name">APL Functional Symbol Circle Diaeresis</div>
                                </li>
                                <li class="softnesttools_symbols"><span class="softnesttools_symbols_copy">ӭ</span>
                                <div class="symbol-name">Cyrillic Small Letter E with Diaeresis</div>
                                </li>
                                <li class="softnesttools_symbols"><span class="softnesttools_symbols_copy">ꑇ</span>
                                <div class="symbol-name">Yi Syllable Hxie</div>
                                </li>
                                <li class="softnesttools_symbols"><span class="softnesttools_symbols_copy">⚥</span>
                                <div class="symbol-name">Male and Female Sign</div>
                                </li>
                                <li class="softnesttools_symbols"><span class="softnesttools_symbols_copy">😆</span>
                                <div class="symbol-name">Grinning Squinting Face</div>
                                </li>
                                <li class="softnesttools_symbols"><span class="softnesttools_symbols_copy">😠</span>
                                <div class="symbol-name">Angry Face</div>
                                </li>
                                <li class="softnesttools_symbols"><span class="softnesttools_symbols_copy">😤</span>
                                <div class="symbol-name">Face with Steam from Nose</div>
                                </li>
                                <li class="softnesttools_symbols"><span class="softnesttools_symbols_copy">😇</span>
                                <div class="symbol-name">Smiling Face with Halo</div>
                                </li>
                                <li class="softnesttools_symbols"><span class="softnesttools_symbols_copy">😿</span>
                                <div class="symbol-name">Crying Cat Face</div>
                                </li>
                                <li class="softnesttools_symbols"><span class="softnesttools_symbols_copy">🙇</span>
                                <div class="symbol-name">Person Bowing</div>
                                </li>
                                <li class="softnesttools_symbols"><span class="softnesttools_symbols_copy">ﭢ</span>
                                <div class="symbol-name">Arabic Ligature Yeh with Hamza Above with Alef Final Form</div>
                                </li>
                                <li class="softnesttools_symbols"><span class="softnesttools_symbols_copy">⍡</span>
                                <div class="symbol-name">APL Functional Symbol Circle Diaeresis</div>
                                </li>
                                <li class="softnesttools_symbols"><span class="softnesttools_symbols_copy">ӟ</span>
                                <div class="symbol-name">Cyrillic Small Letter Ze with Diaeresis</div>
                                </li>
                                <li class="softnesttools_symbols"><span class="softnesttools_symbols_copy">ӱ</span>
                                <div class="symbol-name">Cyrillic Small Letter U with Diaeresis</div>
                                </li>
                                <li class="softnesttools_symbols"><span class="softnesttools_symbols_copy">유</span>
                                <div class="symbol-name">Hangul Syllable Yu</div>
                                </li>
                                <li class="softnesttools_symbols"><span class="softnesttools_symbols_copy">옺</span>
                                <div class="symbol-name">Hangul Syllable Oe</div>
                                </li>
                                <li class="softnesttools_symbols"><span class="softnesttools_symbols_copy">ꆜ</span>
                                <div class="symbol-name">Yi Syllable Hxie</div>
                                </li>
                                <li class="softnesttools_symbols"><span class="softnesttools_symbols_copy">⚤</span>
                                <div class="symbol-name">Male and Female Sign</div>
                                </li>
                                <li class="softnesttools_symbols"><span class="softnesttools_symbols_copy">😁</span>
                                <div class="symbol-name">Beaming Face with Smiling Eyes</div>
                                </li>
                                <li class="softnesttools_symbols"><span class="softnesttools_symbols_copy">😅</span>
                                <div class="symbol-name">Grinning Face with Sweat</div>
                                </li>
                                <li class="softnesttools_symbols"><span class="softnesttools_symbols_copy">😘</span>
                                <div class="symbol-name">Face Blowing a Kiss</div>
                                </li>
                                <li class="softnesttools_symbols"><span class="softnesttools_symbols_copy">😞</span>
                                <div class="symbol-name">Disappointed Face</div>
                                </li>
                                <li class="softnesttools_symbols"><span class="softnesttools_symbols_copy">😣</span>
                                <div class="symbol-name">Persevering Face</div>
                                </li>
                                <li class="softnesttools_symbols"><span class="softnesttools_symbols_copy">😾</span>
                                <div class="symbol-name">Pouting Cat Face</div>
                                </li>
                                <li class="softnesttools_symbols"><span class="softnesttools_symbols_copy">ﾂ</span>
                                <div class="symbol-name">Halfwidth Katakana Letter Tu</div>
                                </li>
                                <li class="softnesttools_symbols"><span class="softnesttools_symbols_copy">ӓ</span>
                                <div class="symbol-name">Cyrillic Small Letter A with Diaeresis</div>
                                </li>
                                <li class="softnesttools_symbols"><span class="softnesttools_symbols_copy">ټ</span>
                                <div class="symbol-name">Arabic Letter Teh with Ring</div>
                                </li>
                                <li class="softnesttools_symbols"><span class="softnesttools_symbols_copy">ꆛ</span>
                                <div class="symbol-name">Yi Syllable Hxie</div>
                                </li>
                                <li class="softnesttools_symbols"><span class="softnesttools_symbols_copy">〠</span>
                                <div class="symbol-name">Postal Mark Face</div>
                                </li>
                                <li class="softnesttools_symbols"><span class="softnesttools_symbols_copy">😖</span>
                                <div class="symbol-name">Confounded Face</div>
                                </li>
                                <li class="softnesttools_symbols"><span class="softnesttools_symbols_copy">ツ</span>
                                <div class="symbol-name">Katakana Letter Tsu</div>
                                </li>
                                <li class="softnesttools_symbols"><span class="softnesttools_symbols_copy">😵</span>
                                <div class="symbol-name">Dizzy Face</div>
                                </li>
                                <li class="softnesttools_symbols"><span class="softnesttools_symbols_copy">😺</span>
                                <div class="symbol-name">Smiling Cat Face with Open Mouth</div>
                                </li>
                                <li class="softnesttools_symbols"><span class="softnesttools_symbols_copy">🙅</span>
                                <div class="symbol-name">Person Gesturing No</div>
                                </li>
                                <li class="softnesttools_symbols"><span class="softnesttools_symbols_copy">🙎</span>
                                <div class="symbol-name">Person Pouting</div>
                                </li>
                                <li class="softnesttools_symbols"><span class="softnesttools_symbols_copy">Ü</span>
                                <div class="symbol-name">Latin Capital Letter U with Diaeresis</div>
                                </li>
                                <li class="softnesttools_symbols"><span class="softnesttools_symbols_copy">ὃ</span>
                                <div class="symbol-name">Greek Small Letter Omicron with Dasia</div>
                                </li>
                                <li class="softnesttools_symbols"><span class="softnesttools_symbols_copy">Ӛ</span>
                                <div class="symbol-name">Cyrillic Capital Letter E with Diaeresis</div>
                                </li>
                                <li class="softnesttools_symbols"><span class="softnesttools_symbols_copy">ㆅ</span>
                                <div class="symbol-name">Hangul Letter Ssanghieuh</div>
                                </li>
                                <li class="softnesttools_symbols"><span class="softnesttools_symbols_copy">우</span>
                                <div class="symbol-name">Hangul Syllable U</div>
                                </li>
                                <li class="softnesttools_symbols"><span class="softnesttools_symbols_copy">ꌈ</span>
                                <div class="symbol-name">Yi Syllable Hxie</div>
                                </li>
                                <li class="softnesttools_symbols"><span class="softnesttools_symbols_copy">☃</span>
                                <div class="symbol-name">Snowman</div>
                                </li>
                                <li class="softnesttools_symbols"><span class="softnesttools_symbols_copy">㋛</span>
                                <div class="symbol-name">Square Hiragana Hoka</div>
                                </li>
                                <li class="softnesttools_symbols"><span class="softnesttools_symbols_copy">😃</span>
                                <div class="symbol-name">Grinning Face with Big Eyes</div>
                                </li>
                                <li class="softnesttools_symbols"><span class="softnesttools_symbols_copy">😏</span>
                                <div class="symbol-name">Smirking Face</div>
                                </li>
                                <li class="softnesttools_symbols"><span class="softnesttools_symbols_copy">😜</span>
                                <div class="symbol-name">Winking Face with Tongue</div>
                                </li>
                                <li class="softnesttools_symbols"><span class="softnesttools_symbols_copy">〴</span>
                                <div class="symbol-name">Vertical Kana Repeat Mark</div>
                                </li>
                                <li class="softnesttools_symbols"><span class="softnesttools_symbols_copy">😷</span>
                                <div class="symbol-name">Face with Medical Mask</div>
                                </li>
                                <li class="softnesttools_symbols"><span class="softnesttools_symbols_copy">😽</span>
                                <div class="symbol-name">Kissing Cat Face with Closed Eyes</div>
                                </li>
                                <li class="softnesttools_symbols"><span class="softnesttools_symbols_copy">🙆</span>
                                <div class="symbol-name">Person Gesturing OK</div>
                                </li>
                                <li class="softnesttools_symbols"><span class="softnesttools_symbols_copy">ｼ</span>
                                <div class="symbol-name">Halfwidth Katakana Letter Shi</div>
                                </li>
                                <li class="softnesttools_symbols"><span class="softnesttools_symbols_copy">Ѷ</span>
                                <div class="symbol-name">Cyrillic Capital Letter Yat</div>
                                </li>
                                <li class="softnesttools_symbols"><span class="softnesttools_symbols_copy">ё</span>
                                <div class="symbol-name">Cyrillic Small Letter Io</div>
                                </li>
                                <li class="softnesttools_symbols"><span class="softnesttools_symbols_copy">ӧ</span>
                                <div class="symbol-name">Cyrillic Small Letter O with Diaeresis</div>
                                </li>
                                <li class="softnesttools_symbols"><span class="softnesttools_symbols_copy">ة</span>
                                <div class="symbol-name">Arabic Letter Teh Marbuta</div>
                                </li>
                                <li class="softnesttools_symbols"><span class="softnesttools_symbols_copy">옻</span>
                                <div class="symbol-name">Hangul Syllable Ot</div>
                                </li>
                                <li class="softnesttools_symbols"><span class="softnesttools_symbols_copy">ꈌ</span>
                                <div class="symbol-name">Yi Syllable Hxie</div>
                                </li>
                                <li class="softnesttools_symbols"><span class="softnesttools_symbols_copy">⚣</span>
                                <div class="symbol-name">Double Male Sign</div>
                                </li>
                                <li class="softnesttools_symbols"><span class="softnesttools_symbols_copy">☻</span>
                                <div class="symbol-name">Black Smiling Face</div>
                                </li>
                                <li class="softnesttools_symbols"><span class="softnesttools_symbols_copy">😄</span>
                                <div class="symbol-name">Grinning Face with Smiling Eyes</div>
                                </li>
                                <li class="softnesttools_symbols"><span class="softnesttools_symbols_copy">😔</span>
                                <div class="symbol-name">Pensive Face</div>
                                </li>
                                <li class="softnesttools_symbols"><span class="softnesttools_symbols_copy">😝</span>
                                <div class="symbol-name">Squinting Face with Tongue</div>
                                </li>
                                <li class="softnesttools_symbols"><span class="softnesttools_symbols_copy">😎</span>
                                <div class="symbol-name">Smiling Face with Sunglasses</div>
                                </li>
                                <li class="softnesttools_symbols"><span class="softnesttools_symbols_copy">🙉</span>
                                <div class="symbol-name">Hear-No-Evil Monkey</div>
                                </li>
                                <li class="softnesttools_symbols"><span class="softnesttools_symbols_copy">⍣</span>
                                <div class="symbol-name">APL Functional Symbol Star Diaeresis</div>
                                </li>
                                <li class="softnesttools_symbols"><span class="softnesttools_symbols_copy">ӵ</span>
                                <div class="symbol-name">Cyrillic Small Letter Che with Diaeresis</div>
                                </li>
                                <li class="softnesttools_symbols"><span class="softnesttools_symbols_copy">ꐦ</span>
                                <div class="symbol-name">Yi Syllable Hxie</div>
                                </li>
                                <li class="softnesttools_symbols"><span class="softnesttools_symbols_copy">⚦</span>
                                <div class="symbol-name">Male with Stroke Sign</div>
                                </li>
                                <li class="softnesttools_symbols"><span class="softnesttools_symbols_copy">😉</span>
                                <div class="symbol-name">Winking Face</div>
                                </li>
                                <li class="softnesttools_symbols"><span class="softnesttools_symbols_copy">😡</span>
                                <div class="symbol-name">Pouting Face</div>
                                </li>
                                <li class="softnesttools_symbols"><span class="softnesttools_symbols_copy">☠</span>
                                <div class="symbol-name">Skull and Crossbones</div>
                                </li>

                                <!-- Phonetic Symbols -->
                                <li class="h2copy">
                                <h2>Phonetic Symbols</h2>
                                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quo enim repudiandae et omnis, est velit ratione dolore
                                    maxime, non aliquam dolor laboriosam.</p>
                                </li>
                                <li class="softnesttools_symbols"><span class="softnesttools_symbols_copy">ʌ</span>
                                <div class="symbol-name">Open-Mid Back Unrounded Vowel</div>
                                </li>
                                <li class="softnesttools_symbols"><span class="softnesttools_symbols_copy">ɑ:</span>
                                <div class="symbol-name">Open Back Unrounded Vowel</div>
                                </li>
                                <li class="softnesttools_symbols"><span class="softnesttools_symbols_copy">æ</span>
                                <div class="symbol-name">Near-Open Front Unrounded Vowel</div>
                                </li>
                                <li class="softnesttools_symbols"><span class="softnesttools_symbols_copy">e</span>
                                <div class="symbol-name">Close-Mid Front Unrounded Vowel</div>
                                </li>
                                <li class="softnesttools_symbols"><span class="softnesttools_symbols_copy">ə</span>
                                <div class="symbol-name">Schwa</div>
                                </li>
                                <li class="softnesttools_symbols"><span class="softnesttools_symbols_copy">ɜ:</span>
                                <div class="symbol-name">Open-Mid Central Unrounded Vowel</div>
                                </li>
                                <li class="softnesttools_symbols"><span class="softnesttools_symbols_copy">ɪ</span>
                                <div class="symbol-name">Near-Close Near-Front Unrounded Vowel</div>
                                </li>
                                <li class="softnesttools_symbols"><span class="softnesttools_symbols_copy">i:</span>
                                <div class="symbol-name">Close Front Unrounded Vowel</div>
                                </li>
                                <li class="softnesttools_symbols"><span class="softnesttools_symbols_copy">ɒ</span>
                                <div class="symbol-name">Open Back Rounded Vowel</div>
                                </li>
                                <li class="softnesttools_symbols"><span class="softnesttools_symbols_copy">ɔ:</span>
                                <div class="symbol-name">Open-Mid Back Rounded Vowel</div>
                                </li>
                                <li class="softnesttools_symbols"><span class="softnesttools_symbols_copy">ʊ</span>
                                <div class="symbol-name">Near-Close Near-Back Rounded Vowel</div>
                                </li>
                                <li class="softnesttools_symbols"><span class="softnesttools_symbols_copy">u:</span>
                                <div class="symbol-name">Close Back Rounded Vowel</div>
                                </li>
                                <li class="softnesttools_symbols"><span class="softnesttools_symbols_copy">aɪ</span>
                                <div class="symbol-name">Diphthong /aɪ/</div>
                                </li>
                                <li class="softnesttools_symbols"><span class="softnesttools_symbols_copy">aʊ</span>
                                <div class="symbol-name">Diphthong /aʊ/</div>
                                </li>
                                <li class="softnesttools_symbols"><span class="softnesttools_symbols_copy">eɪ</span>
                                <div class="symbol-name">Diphthong /eɪ/</div>
                                </li>
                                <li class="softnesttools_symbols"><span class="softnesttools_symbols_copy">oʊ</span>
                                <div class="symbol-name">Diphthong /oʊ/</div>
                                </li>
                                <li class="softnesttools_symbols"><span class="softnesttools_symbols_copy">ɔɪ</span>
                                <div class="symbol-name">Diphthong /ɔɪ/</div>
                                </li>
                                <li class="softnesttools_symbols"><span class="softnesttools_symbols_copy">eə</span>
                                <div class="symbol-name">Diphthong /eə/</div>
                                </li>
                                <li class="softnesttools_symbols"><span class="softnesttools_symbols_copy">ɪə</span>
                                <div class="symbol-name">Diphthong /ɪə/</div>
                                </li>
                                <li class="softnesttools_symbols"><span class="softnesttools_symbols_copy">ʊə</span>
                                <div class="symbol-name">Diphthong /ʊə/</div>
                                </li>
                                <li class="softnesttools_symbols"><span class="softnesttools_symbols_copy">b</span>
                                <div class="symbol-name">Voiced Bilabial Plosive</div>
                                </li>
                                <li class="softnesttools_symbols"><span class="softnesttools_symbols_copy">d</span>
                                <div class="symbol-name">Voiced Alveolar Plosive</div>
                                </li>
                                <li class="softnesttools_symbols"><span class="softnesttools_symbols_copy">f</span>
                                <div class="symbol-name">Voiceless Labiodental Fricative</div>
                                </li>
                                <li class="softnesttools_symbols"><span class="softnesttools_symbols_copy">g</span>
                                <div class="symbol-name">Voiced Velar Plosive</div>
                                </li>
                                <li class="softnesttools_symbols"><span class="softnesttools_symbols_copy">h</span>
                                <div class="symbol-name">Voiceless Glottal Fricative</div>
                                </li>
                                <li class="softnesttools_symbols"><span class="softnesttools_symbols_copy">j</span>
                                <div class="symbol-name">Palatal Approximant</div>
                                </li>
                                <li class="softnesttools_symbols"><span class="softnesttools_symbols_copy">k</span>
                                <div class="symbol-name">Voiceless Velar Plosive</div>
                                </li>
                                <li class="softnesttools_symbols"><span class="softnesttools_symbols_copy">l</span>
                                <div class="symbol-name">Alveolar Lateral Approximant</div>
                                </li>
                                <li class="softnesttools_symbols"><span class="softnesttools_symbols_copy">m</span>
                                <div class="symbol-name">Bilabial Nasal</div>
                                </li>
                                <li class="softnesttools_symbols"><span class="softnesttools_symbols_copy">n</span>
                                <div class="symbol-name">Alveolar Nasal</div>
                                </li>
                                <li class="softnesttools_symbols"><span class="softnesttools_symbols_copy">ŋ</span>
                                <div class="symbol-name">Velar Nasal</div>
                                </li>
                                <li class="softnesttools_symbols"><span class="softnesttools_symbols_copy">p</span>
                                <div class="symbol-name">Voiceless Bilabial Plosive</div>
                                </li>
                                <li class="softnesttools_symbols"><span class="softnesttools_symbols_copy">r</span>
                                <div class="symbol-name">Alveolar Trill</div>
                                </li>
                                <li class="softnesttools_symbols"><span class="softnesttools_symbols_copy">s</span>
                                <div class="symbol-name">Voiceless Alveolar Fricative</div>
                                </li>
                                <li class="softnesttools_symbols"><span class="softnesttools_symbols_copy">ʃ</span>
                                <div class="symbol-name">Voiceless Postalveolar Fricative</div>
                                </li>
                                <li class="softnesttools_symbols"><span class="softnesttools_symbols_copy">t</span>
                                <div class="symbol-name">Voiceless Alveolar Plosive</div>
                                </li>
                                <li class="softnesttools_symbols"><span class="softnesttools_symbols_copy">tʃ</span>
                                <div class="symbol-name">Voiceless Postalveolar Affricate</div>
                                </li>
                                <li class="softnesttools_symbols"><span class="softnesttools_symbols_copy">θ</span>
                                <div class="symbol-name">Voiceless Dental Fricative</div>
                                </li>
                                <li class="softnesttools_symbols"><span class="softnesttools_symbols_copy">ð</span>
                                <div class="symbol-name">Voiced Dental Fricative</div>
                                </li>
                                <li class="softnesttools_symbols"><span class="softnesttools_symbols_copy">v</span>
                                <div class="symbol-name">Voiced Labiodental Fricative</div>
                                </li>
                                <li class="softnesttools_symbols"><span class="softnesttools_symbols_copy">w</span>
                                <div class="symbol-name">Labial-Velar Approximant</div>
                                </li>
                                <li class="softnesttools_symbols"><span class="softnesttools_symbols_copy">z</span>
                                <div class="symbol-name">Voiced Alveolar Fricative</div>
                                </li>
                                <li class="softnesttools_symbols"><span class="softnesttools_symbols_copy">ʒ</span>
                                <div class="symbol-name">Voiced Postalveolar Fricative</div>
                                </li>
                                <li class="softnesttools_symbols"><span class="softnesttools_symbols_copy">dʒ</span>
                                <div class="symbol-name">Voiced Postalveolar Affricate</div>
                                </li>
                                    <li class="h2copy">
                                        <h2>Food Symbols</h2>
                                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quo enim repudiandae et omnis, est velit ratione dolore
                                            maxime, non aliquam dolor laboriosam.</p>
                                    </li>

                                <!-- Food & Drink Symbols -->
                                <li class="softnesttools_symbols"><span class="softnesttools_symbols_copy">🍠</span>
                                <div class="symbol-name">Roasted Sweet Potato</div>
                                </li>
                                <li class="softnesttools_symbols"><span class="softnesttools_symbols_copy">🥄</span>
                                <div class="symbol-name">Spoon</div>
                                </li>
                                <li class="softnesttools_symbols"><span class="softnesttools_symbols_copy">🎂</span>
                                <div class="symbol-name">Birthday Cake</div>
                                </li>
                                <li class="softnesttools_symbols"><span class="softnesttools_symbols_copy">☕</span>
                                <div class="symbol-name">Hot Beverage</div>
                                </li>
                                <li class="softnesttools_symbols"><span class="softnesttools_symbols_copy">🥂</span>
                                <div class="symbol-name">Clinking Glasses</div>
                                </li>
                                <li class="softnesttools_symbols"><span class="softnesttools_symbols_copy">🍛</span>
                                <div class="symbol-name">Curry and Rice</div>
                                </li>
                                <li class="softnesttools_symbols"><span class="softnesttools_symbols_copy">🍴</span>
                                <div class="symbol-name">Fork and Knife</div>
                                </li>
                                <li class="softnesttools_symbols"><span class="softnesttools_symbols_copy">🍦</span>
                                <div class="symbol-name">Soft Ice Cream</div>
                                </li>
                                <li class="softnesttools_symbols"><span class="softnesttools_symbols_copy">🍵</span>
                                <div class="symbol-name">Teacup Without Handle</div>
                                </li>
                                <li class="softnesttools_symbols"><span class="softnesttools_symbols_copy">🍶</span>
                                <div class="symbol-name">Sake Bottle and Cup</div>
                                </li>
                                <li class="softnesttools_symbols"><span class="softnesttools_symbols_copy">🍝</span>
                                <div class="symbol-name">Spaghetti</div>
                                </li>
                                <li class="softnesttools_symbols"><span class="softnesttools_symbols_copy">🍡</span>
                                <div class="symbol-name">Dango</div>
                                </li>
                                <li class="softnesttools_symbols"><span class="softnesttools_symbols_copy">🍨</span>
                                <div class="symbol-name">Ice Cream</div>
                                </li>
                                <li class="softnesttools_symbols"><span class="softnesttools_symbols_copy">🍩</span>
                                <div class="symbol-name">Doughnut</div>
                                </li>
                                <li class="softnesttools_symbols"><span class="softnesttools_symbols_copy">🍸</span>
                                <div class="symbol-name">Cocktail Glass</div>
                                </li>
                                <li class="softnesttools_symbols"><span class="softnesttools_symbols_copy">🥤</span>
                                <div class="symbol-name">Cup with Straw</div>
                                </li>
                                <li class="softnesttools_symbols"><span class="softnesttools_symbols_copy">🍚</span>
                                <div class="symbol-name">Cooked Rice</div>
                                </li>
                                <li class="softnesttools_symbols"><span class="softnesttools_symbols_copy">🍪</span>
                                <div class="symbol-name">Cookie</div>
                                </li>
                                <li class="softnesttools_symbols"><span class="softnesttools_symbols_copy">🥃</span>
                                <div class="symbol-name">Tumbler Glass</div>
                                </li>
                                <li class="softnesttools_symbols"><span class="softnesttools_symbols_copy">🥢</span>
                                <div class="symbol-name">Chopsticks</div>
                                </li>
                                <li class="softnesttools_symbols"><span class="softnesttools_symbols_copy">🥛</span>
                                <div class="symbol-name">Glass of Milk</div>
                                </li>
                                <li class="softnesttools_symbols"><span class="softnesttools_symbols_copy">🍥</span>
                                <div class="symbol-name">Fish Cake with Swirl</div>
                                </li>
                                <li class="softnesttools_symbols"><span class="softnesttools_symbols_copy">🍽</span>
                                <div class="symbol-name">Fork and Knife with Plate</div>
                                </li>
                                <li class="softnesttools_symbols"><span class="softnesttools_symbols_copy">🍰</span>
                                <div class="symbol-name">Shortcake</div>
                                </li>
                                <li class="softnesttools_symbols"><span class="softnesttools_symbols_copy">🍯</span>
                                <div class="symbol-name">Honey Pot</div>
                                </li>
                                <li class="softnesttools_symbols"><span class="softnesttools_symbols_copy">🍺</span>
                                <div class="symbol-name">Beer Mug</div>
                                </li>
                                <li class="softnesttools_symbols"><span class="softnesttools_symbols_copy">🍤</span>
                                <div class="symbol-name">Fried Shrimp</div>
                                </li>
                                <li class="softnesttools_symbols"><span class="softnesttools_symbols_copy">🍮</span>
                                <div class="symbol-name">Custard</div>
                                </li>
                                <li class="softnesttools_symbols"><span class="softnesttools_symbols_copy">🍻</span>
                                <div class="symbol-name">Clinking Beer Mugs</div>
                                </li>
                                <li class="softnesttools_symbols"><span class="softnesttools_symbols_copy">🍜</span>
                                <div class="symbol-name">Steaming Bowl</div>
                                </li>
                                <li class="softnesttools_symbols"><span class="softnesttools_symbols_copy">🍣</span>
                                <div class="symbol-name">Sushi</div>
                                </li>
                                <li class="softnesttools_symbols"><span class="softnesttools_symbols_copy">🥧</span>
                                <div class="symbol-name">Pie</div>
                                </li>
                                <li class="softnesttools_symbols"><span class="softnesttools_symbols_copy">🍭</span>
                                <div class="symbol-name">Lollipop</div>
                                </li>
                                <li class="softnesttools_symbols"><span class="softnesttools_symbols_copy">🍷</span>
                                <div class="symbol-name">Wine Glass</div>
                                </li>
                                <li class="softnesttools_symbols"><span class="softnesttools_symbols_copy">🍢</span>
                                <div class="symbol-name">Oden</div>
                                </li>
                                <li class="softnesttools_symbols"><span class="softnesttools_symbols_copy">🥟</span>
                                <div class="symbol-name">Dumpling</div>
                                </li>
                                <li class="softnesttools_symbols"><span class="softnesttools_symbols_copy">🍧</span>
                                <div class="symbol-name">Shaved Ice</div>
                                </li>
                                <li class="softnesttools_symbols"><span class="softnesttools_symbols_copy">🍬</span>
                                <div class="symbol-name">Candy</div>
                                </li>
                                <li class="softnesttools_symbols"><span class="softnesttools_symbols_copy">🍹</span>
                                <div class="symbol-name">Tropical Drink</div>
                                </li>
                                <li class="softnesttools_symbols"><span class="softnesttools_symbols_copy">🥠</span>
                                <div class="symbol-name">Fortune Cookie</div>
                                </li>
                                <li class="softnesttools_symbols"><span class="softnesttools_symbols_copy">🍼</span>
                                <div class="symbol-name">Baby Bottle</div>
                                </li>

                                <!-- Fruit Symbols -->
                                <li class="h2copy">
                                <h2>Fruit Symbols</h2>
                                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quo enim repudiandae et omnis, est velit ratione dolore
                                    maxime, non aliquam dolor laboriosam.</p>
                                </li>
                                <li class="softnesttools_symbols"><span class="softnesttools_symbols_copy">🥝</span>
                                <div class="symbol-name">Kiwi Fruit</div>
                                </li>
                                <li class="softnesttools_symbols"><span class="softnesttools_symbols_copy">🥥</span>
                                <div class="symbol-name">Coconut</div>
                                </li>
                                <li class="softnesttools_symbols"><span class="softnesttools_symbols_copy">🥦</span>
                                <div class="symbol-name">Broccoli</div>
                                </li>
                                <li class="softnesttools_symbols"><span class="softnesttools_symbols_copy">🍍</span>
                                <div class="symbol-name">Pineapple</div>
                                </li>
                                <li class="softnesttools_symbols"><span class="softnesttools_symbols_copy">🥑</span>
                                <div class="symbol-name">Avocado</div>
                                </li>
                                <li class="softnesttools_symbols"><span class="softnesttools_symbols_copy">🍆</span>
                                <div class="symbol-name">Eggplant</div>
                                </li>
                                <li class="softnesttools_symbols"><span class="softnesttools_symbols_copy">🍇</span>
                                <div class="symbol-name">Grapes</div>
                                </li>
                                <li class="softnesttools_symbols"><span class="softnesttools_symbols_copy">🍏</span>
                                <div class="symbol-name">Green Apple</div>
                                </li>
                                <li class="softnesttools_symbols"><span class="softnesttools_symbols_copy">🥕</span>
                                <div class="symbol-name">Carrot</div>
                                </li>
                                <li class="softnesttools_symbols"><span class="softnesttools_symbols_copy">🍄</span>
                                <div class="symbol-name">Mushroom</div>
                                </li>
                                <li class="softnesttools_symbols"><span class="softnesttools_symbols_copy">🍌</span>
                                <div class="symbol-name">Banana</div>
                                </li>
                                <li class="softnesttools_symbols"><span class="softnesttools_symbols_copy">🌽</span>
                                <div class="symbol-name">Ear of Corn</div>
                                </li>
                                <li class="softnesttools_symbols"><span class="softnesttools_symbols_copy">🍑</span>
                                <div class="symbol-name">Peach</div>
                                </li>
                                <li class="softnesttools_symbols"><span class="softnesttools_symbols_copy">🍋</span>
                                <div class="symbol-name">Lemon</div>
                                </li>
                                <li class="softnesttools_symbols"><span class="softnesttools_symbols_copy">🍎</span>
                                <div class="symbol-name">Red Apple</div>
                                </li>
                                <li class="softnesttools_symbols"><span class="softnesttools_symbols_copy">🥜</span>
                                <div class="symbol-name">Peanuts</div>
                                </li>
                                <li class="softnesttools_symbols"><span class="softnesttools_symbols_copy">🍈</span>
                                <div class="symbol-name">Melon</div>
                                </li>
                                <li class="softnesttools_symbols"><span class="softnesttools_symbols_copy">🌶</span>
                                <div class="symbol-name">Hot Pepper</div>
                                </li>
                                <li class="softnesttools_symbols"><span class="softnesttools_symbols_copy">🍒</span>
                                <div class="symbol-name">Cherries</div>
                                </li>
                                <li class="softnesttools_symbols"><span class="softnesttools_symbols_copy">🍊</span>
                                <div class="symbol-name">Tangerine</div>
                                </li>
                                <li class="softnesttools_symbols"><span class="softnesttools_symbols_copy">🥔</span>
                                <div class="symbol-name">Potato</div>
                                </li>
                                <li class="softnesttools_symbols"><span class="softnesttools_symbols_copy">🍅</span>
                                <div class="symbol-name">Tomato</div>
                                </li>
                                <li class="softnesttools_symbols"><span class="softnesttools_symbols_copy">🍉</span>
                                <div class="symbol-name">Watermelon</div>
                                </li>
                                <li class="softnesttools_symbols"><span class="softnesttools_symbols_copy">🥒</span>
                                <div class="symbol-name">Cucumber</div>
                                </li>
                                <li class="softnesttools_symbols"><span class="softnesttools_symbols_copy">🍓</span>
                                <div class="symbol-name">Strawberry</div>
                                </li>

                                <!-- Sun Symbols -->
                                <li class="h2copy">
                                <h2>Sun Symbols</h2>
                                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quo enim repudiandae et omnis, est velit ratione dolore
                                    maxime, non aliquam dolor laboriosam.</p>
                                </li>
                                <li class="softnesttools_symbols"><span class="softnesttools_symbols_copy">⛅️</span>
                                <div class="symbol-name">Sun Behind Cloud</div>
                                </li>
                                <li class="softnesttools_symbols"><span class="softnesttools_symbols_copy">🌞</span>
                                <div class="symbol-name">Sun with Face</div>
                                </li>
                                <li class="softnesttools_symbols"><span class="softnesttools_symbols_copy">🌝</span>
                                <div class="symbol-name">Full Moon with Face</div>
                                </li>
                                <li class="softnesttools_symbols"><span class="softnesttools_symbols_copy">🌥</span>
                                <div class="symbol-name">Sun Behind Large Cloud</div>
                                </li>
                                <li class="softnesttools_symbols"><span class="softnesttools_symbols_copy">☼</span>
                                <div class="symbol-name">White Sun</div>
                                </li>
                                <li class="softnesttools_symbols"><span class="softnesttools_symbols_copy">🌄</span>
                                <div class="symbol-name">Sunrise Over Mountains</div>
                                </li>
                                <li class="softnesttools_symbols"><span class="softnesttools_symbols_copy">🌅</span>
                                <div class="symbol-name">Sunrise</div>
                                </li>
                                <li class="softnesttools_symbols"><span class="softnesttools_symbols_copy">☀</span>
                                <div class="symbol-name">Black Sun with Rays</div>
                                </li>
                                <li class="softnesttools_symbols"><span class="softnesttools_symbols_copy">🌤</span>
                                <div class="symbol-name">Sun Behind Small Cloud</div>
                                </li>

                                <!-- Moon Symbols -->
                                <li class="h2copy">
                                <h2>Moon Symbols</h2>
                                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quo enim repudiandae et omnis, est velit ratione dolore
                                    maxime, non aliquam dolor laboriosam.</p>
                                </li>
                                <li class="softnesttools_symbols"><span class="softnesttools_symbols_copy">🌖</span>
                                <div class="symbol-name">Waning Gibbous Moon</div>
                                </li>
                                <li class="softnesttools_symbols"><span class="softnesttools_symbols_copy">☽</span>
                                <div class="symbol-name">First Quarter Moon</div>
                                </li>
                                <li class="softnesttools_symbols"><span class="softnesttools_symbols_copy">㊊</span>
                                <div class="symbol-name">Circled Ideograph Moon</div>
                                </li>
                                <li class="softnesttools_symbols"><span class="softnesttools_symbols_copy">🌗</span>
                                <div class="symbol-name">Last Quarter Moon</div>
                                </li>
                                <li class="softnesttools_symbols"><span class="softnesttools_symbols_copy">☾</span>
                                <div class="symbol-name">Last Quarter Moon</div>
                                </li>
                                <li class="softnesttools_symbols"><span class="softnesttools_symbols_copy">⚸</span>
                                <div class="symbol-name">Lilith</div>
                                </li>
                                <li class="softnesttools_symbols"><span class="softnesttools_symbols_copy">🌘</span>
                                <div class="symbol-name">Waning Crescent Moon</div>
                                </li>
                                <li class="softnesttools_symbols"><span class="softnesttools_symbols_copy">🌓</span>
                                <div class="symbol-name">First Quarter Moon</div>
                                </li>
                                <li class="softnesttools_symbols"><span class="softnesttools_symbols_copy">🌕</span>
                                <div class="symbol-name">Full Moon</div>
                                </li>
                                <li class="softnesttools_symbols"><span class="softnesttools_symbols_copy">月</span>
                                <div class="symbol-name">Moon Ideograph</div>
                                </li>
                                <li class="softnesttools_symbols"><span class="softnesttools_symbols_copy">🌙</span>
                                <div class="symbol-name">Crescent Moon</div>
                                </li>
                                <li class="softnesttools_symbols"><span class="softnesttools_symbols_copy">🌑</span>
                                <div class="symbol-name">New Moon</div>
                                </li>
                                <li class="softnesttools_symbols"><span class="softnesttools_symbols_copy">☪</span>
                                <div class="symbol-name">Star and Crescent</div>
                                </li>
                                <li class="softnesttools_symbols"><span class="softnesttools_symbols_copy">🌚</span>
                                <div class="symbol-name">New Moon with Face</div>
                                </li>
                                <li class="softnesttools_symbols"><span class="softnesttools_symbols_copy">🌝</span>
                                <div class="symbol-name">Full Moon with Face</div>
                                </li>
                                <li class="softnesttools_symbols"><span class="softnesttools_symbols_copy">🌒</span>
                                <div class="symbol-name">Waxing Crescent Moon</div>
                                </li>
                                <li class="softnesttools_symbols"><span class="softnesttools_symbols_copy">🎑</span>
                                <div class="symbol-name">Moon Viewing Ceremony</div>
                                </li>
                                <li class="softnesttools_symbols"><span class="softnesttools_symbols_copy">🌔</span>
                                <div class="symbol-name">Waxing Gibbous Moon</div>
                                </li>
                                <li class="softnesttools_symbols"><span class="softnesttools_symbols_copy">🌛</span>
                                <div class="symbol-name">First Quarter Moon with Face</div>
                                </li>

                                <!-- Weather Symbols -->
                                <li class="h2copy">
                                <h2>Weather Symbols</h2>
                                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quo enim repudiandae et omnis, est velit ratione dolore
                                    maxime, non aliquam dolor laboriosam.</p>
                                </li>
                                <li class="softnesttools_symbols"><span class="softnesttools_symbols_copy">🌈</span>
                                <div class="symbol-name">Rainbow</div>
                                </li>
                                <li class="softnesttools_symbols"><span class="softnesttools_symbols_copy">☉</span>
                                <div class="symbol-name">Sun</div>
                                </li>
                                <li class="softnesttools_symbols"><span class="softnesttools_symbols_copy">㎎</span>
                                <div class="symbol-name">Milligram Sign</div>
                                </li>
                                <li class="softnesttools_symbols"><span class="softnesttools_symbols_copy">☼</span>
                                <div class="symbol-name">White Sun</div>
                                </li>
                                <li class="softnesttools_symbols"><span class="softnesttools_symbols_copy">❄</span>
                                <div class="symbol-name">Snowflake</div>
                                </li>
                                <li class="softnesttools_symbols"><span class="softnesttools_symbols_copy">🌛</span>
                                <div class="symbol-name">First Quarter Moon with Face</div>
                                </li>
                                <li class="softnesttools_symbols"><span class="softnesttools_symbols_copy">☀</span>
                                <div class="symbol-name">Black Sun with Rays</div>
                                </li>
                                <li class="softnesttools_symbols"><span class="softnesttools_symbols_copy">☃</span>
                                <div class="symbol-name">Snowman</div>
                                </li>
                                <li class="softnesttools_symbols"><span class="softnesttools_symbols_copy">🌌</span>
                                <div class="symbol-name">Milky Way</div>
                                </li>
                                <li class="softnesttools_symbols"><span class="softnesttools_symbols_copy">㏕</span>
                                <div class="symbol-name">Square Mm</div>
                                </li>
                                <li class="softnesttools_symbols"><span class="softnesttools_symbols_copy">☽</span>
                                <div class="symbol-name">First Quarter Moon</div>
                                </li>
                                <li class="softnesttools_symbols"><span class="softnesttools_symbols_copy">🌙</span>
                                <div class="symbol-name">Crescent Moon</div>
                                </li>
                                <li class="softnesttools_symbols"><span class="softnesttools_symbols_copy">☁</span>
                                <div class="symbol-name">Cloud</div>
                                </li>
                                <li class="softnesttools_symbols"><span class="softnesttools_symbols_copy">⛄</span>
                                <div class="symbol-name">Snowman Without Snow</div>
                                </li>
                                <li class="softnesttools_symbols"><span class="softnesttools_symbols_copy">°</span>
                                <div class="symbol-name">Degree Sign</div>
                                </li>
                                <li class="softnesttools_symbols"><span class="softnesttools_symbols_copy">㎞</span>
                                <div class="symbol-name">Square Km</div>
                                </li>
                                <li class="softnesttools_symbols"><span class="softnesttools_symbols_copy">☾</span>
                                <div class="symbol-name">Last Quarter Moon</div>
                                </li>
                                <li class="softnesttools_symbols"><span class="softnesttools_symbols_copy">☈</span>
                                <div class="symbol-name">Thunderstorm</div>
                                </li>
                                <li class="softnesttools_symbols"><span class="softnesttools_symbols_copy">🌀</span>
                                <div class="symbol-name">Cyclone</div>
                                </li>
                                <li class="softnesttools_symbols"><span class="softnesttools_symbols_copy">℉</span>
                                <div class="symbol-name">Degree Fahrenheit</div>
                                </li>
                                <li class="softnesttools_symbols"><span class="softnesttools_symbols_copy">♨</span>
                                <div class="symbol-name">Hot Springs</div>
                                </li>
                                <li class="softnesttools_symbols"><span class="softnesttools_symbols_copy">ϟ</span>
                                <div class="symbol-name">Greek Keraia</div>
                                </li>
                                <li class="softnesttools_symbols"><span class="softnesttools_symbols_copy">㏑</span>
                                <div class="symbol-name">Natural Logarithm</div>
                                </li>
                                <li class="softnesttools_symbols"><span class="softnesttools_symbols_copy">🌔</span>
                                <div class="symbol-name">Waxing Gibbous Moon</div>
                                </li>
                                <li class="softnesttools_symbols"><span class="softnesttools_symbols_copy">☔</span>
                                <div class="symbol-name">Umbrella with Rain Drops</div>
                                </li>
                                <li class="softnesttools_symbols"><span class="softnesttools_symbols_copy">🌊</span>
                                <div class="symbol-name">Water Wave</div>
                                </li>
                                <li class="softnesttools_symbols"><span class="softnesttools_symbols_copy">㎝</span>
                                <div class="symbol-name">Square Cm</div>
                                </li>
                                <li class="softnesttools_symbols"><span class="softnesttools_symbols_copy">㏎</span>
                                <div class="symbol-name">Square Km</div>
                                </li>
                                <li class="softnesttools_symbols"><span class="softnesttools_symbols_copy">☇</span>
                                <div class="symbol-name">Lightning</div>
                                </li>
                                <li class="softnesttools_symbols"><span class="softnesttools_symbols_copy">🌓</span>
                                <div class="symbol-name">First Quarter Moon</div>
                                </li>
                                <li class="softnesttools_symbols"><span class="softnesttools_symbols_copy">🌂</span>
                                <div class="symbol-name">Closed Umbrella</div>
                                </li>
                                <li class="softnesttools_symbols"><span class="softnesttools_symbols_copy">㎜</span>
                                <div class="symbol-name">Square Mm</div>
                                </li>
                                <li class="softnesttools_symbols"><span class="softnesttools_symbols_copy">❆</span>
                                <div class="symbol-name">Heavy Chevron Snowflake</div>
                                </li>
                                <li class="softnesttools_symbols"><span class="softnesttools_symbols_copy">⛅</span>
                                <div class="symbol-name">Sun Behind Cloud</div>
                                </li>
                                <li class="softnesttools_symbols"><span class="softnesttools_symbols_copy">🔥</span>
                                <div class="symbol-name">Fire</div>
                                </li>
                                <li class="softnesttools_symbols"><span class="softnesttools_symbols_copy">℃</span>
                                <div class="symbol-name">Degree Celsius</div>
                                </li>
                                <li class="softnesttools_symbols"><span class="softnesttools_symbols_copy">㎡</span>
                                <div class="symbol-name">Square M</div>
                                </li>
                                <li class="softnesttools_symbols"><span class="softnesttools_symbols_copy">♁</span>
                                <div class="symbol-name">Earth</div>
                                </li>
                                <li class="softnesttools_symbols"><span class="softnesttools_symbols_copy">☄</span>
                                <div class="symbol-name">Comet</div>
                                </li>
                                <li class="softnesttools_symbols"><span class="softnesttools_symbols_copy">☂</span>
                                <div class="symbol-name">Umbrella</div>
                                </li>
                                <li class="softnesttools_symbols"><span class="softnesttools_symbols_copy">💧</span>
                                <div class="symbol-name">Droplet</div>
                                </li>
                                <li class="softnesttools_symbols"><span class="softnesttools_symbols_copy">㎏</span>
                                <div class="symbol-name">Square Kg</div>
                                </li>
                                <li class="softnesttools_symbols"><span class="softnesttools_symbols_copy">㏄</span>
                                <div class="symbol-name">Square Cm</div>
                                </li>
                                <li class="softnesttools_symbols"><span class="softnesttools_symbols_copy">❅</span>
                                <div class="symbol-name">Heavy Chevron Snowflake</div>
                                </li>
                                <li class="softnesttools_symbols"><span class="softnesttools_symbols_copy">🌑</span>
                                <div class="symbol-name">New Moon</div>
                                </li>
                                <li class="softnesttools_symbols"><span class="softnesttools_symbols_copy">⚡</span>
                                <div class="symbol-name">High Voltage</div>
                                </li>
                                <li class="softnesttools_symbols"><span class="softnesttools_symbols_copy">㏒</span>
                                <div class="symbol-name">Logarithm</div>
                                </li>
                                <li class="softnesttools_symbols"><span class="softnesttools_symbols_copy">🌕</span>
                                <div class="symbol-name">Full Moon</div>
                                </li>

                                <!-- Time Symbols -->
                                <li class="h2copy">
                                <h2>Time Symbols</h2>
                                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quo enim repudiandae et omnis, est velit ratione dolore
                                    maxime, non aliquam dolor laboriosam.</p>
                                </li>
                                <li class="softnesttools_symbols"><span class="softnesttools_symbols_copy">⏰</span>
                                <div class="symbol-name">Alarm Clock</div>
                                </li>
                                <li class="softnesttools_symbols"><span class="softnesttools_symbols_copy">🕐</span>
                                <div class="symbol-name">One O’Clock</div>
                                </li>
                                <li class="softnesttools_symbols"><span class="softnesttools_symbols_copy">🕑</span>
                                <div class="symbol-name">Two O’Clock</div>
                                </li>
                                <li class="softnesttools_symbols"><span class="softnesttools_symbols_copy">🕒</span>
                                <div class="symbol-name">Three O’Clock</div>
                                </li>
                                <li class="softnesttools_symbols"><span class="softnesttools_symbols_copy">🕓</span>
                                <div class="symbol-name">Four O’Clock</div>
                                </li>
                                <li class="softnesttools_symbols"><span class="softnesttools_symbols_copy">🕔</span>
                                <div class="symbol-name">Five O’Clock</div>
                                </li>
                                <li class="softnesttools_symbols"><span class="softnesttools_symbols_copy">🕕</span>
                                <div class="symbol-name">Six O’Clock</div>
                                </li>
                                <li class="softnesttools_symbols"><span class="softnesttools_symbols_copy">🕖</span>
                                <div class="symbol-name">Seven O’Clock</div>
                                </li>
                                <li class="softnesttools_symbols"><span class="softnesttools_symbols_copy">🕗</span>
                                <div class="symbol-name">Eight O’Clock</div>
                                </li>
                                <li class="softnesttools_symbols"><span class="softnesttools_symbols_copy">🕘</span>
                                <div class="symbol-name">Nine O’Clock</div>
                                </li>
                                <li class="softnesttools_symbols"><span class="softnesttools_symbols_copy">🕙</span>
                                <div class="symbol-name">Ten O’Clock</div>
                                </li>
                                <li class="softnesttools_symbols"><span class="softnesttools_symbols_copy">🕚</span>
                                <div class="symbol-name">Eleven O’Clock</div>
                                </li>
                                <li class="softnesttools_symbols"><span class="softnesttools_symbols_copy">🕛</span>
                                <div class="symbol-name">Twelve O’Clock</div>
                                </li>
                                <li class="softnesttools_symbols"><span class="softnesttools_symbols_copy">🕜</span>
                                <div class="symbol-name">One-Thirty</div>
                                </li>
                                <li class="softnesttools_symbols"><span class="softnesttools_symbols_copy">🕝</span>
                                <div class="symbol-name">Two-Thirty</div>
                                </li>
                                <li class="softnesttools_symbols"><span class="softnesttools_symbols_copy">🕞</span>
                                <div class="symbol-name">Three-Thirty</div>
                                </li>
                                <li class="softnesttools_symbols"><span class="softnesttools_symbols_copy">🕟</span>
                                <div class="symbol-name">Four-Thirty</div>
                                </li>
                                <li class="softnesttools_symbols"><span class="softnesttools_symbols_copy">🕠</span>
                                <div class="symbol-name">Five-Thirty</div>
                                </li>
                                <li class="softnesttools_symbols"><span class="softnesttools_symbols_copy">🕡</span>
                                <div class="symbol-name">Six-Thirty</div>
                                </li>
                                <li class="softnesttools_symbols"><span class="softnesttools_symbols_copy">🕢</span>
                                <div class="symbol-name">Seven-Thirty</div>
                                </li>
                                <li class="softnesttools_symbols"><span class="softnesttools_symbols_copy">🕣</span>
                                <div class="symbol-name">Eight-Thirty</div>
                                </li>
                                <li class="softnesttools_symbols"><span class="softnesttools_symbols_copy">🕤</span>
                                <div class="symbol-name">Nine-Thirty</div>
                                </li>
                                <li class="softnesttools_symbols"><span class="softnesttools_symbols_copy">🕥</span>
                                <div class="symbol-name">Ten-Thirty</div>
                                </li>
                                <li class="softnesttools_symbols"><span class="softnesttools_symbols_copy">🕦</span>
                                <div class="symbol-name">Eleven-Thirty</div>
                                </li>
                                <li class="softnesttools_symbols"><span class="softnesttools_symbols_copy">📅</span>
                                <div class="symbol-name">Calendar</div>
                                </li>
                                <li class="softnesttools_symbols"><span class="softnesttools_symbols_copy">📆</span>
                                <div class="symbol-name">Tear-Off Calendar</div>
                                </li>
                                <li class="softnesttools_symbols"><span class="softnesttools_symbols_copy">🗓</span>
                                <div class="symbol-name">Spiral Calendar</div>
                                </li>
                                <li class="softnesttools_symbols"><span class="softnesttools_symbols_copy">⌚</span>
                                <div class="symbol-name">Watch</div>
                                </li>
                                <li class="softnesttools_symbols"><span class="softnesttools_symbols_copy">⏱</span>
                                <div class="symbol-name">Stopwatch</div>
                                </li>
                                <li class="softnesttools_symbols"><span class="softnesttools_symbols_copy">𝍄</span>
                                <div class="symbol-name">Clock Face One-Thirty</div>
                                </li>
                                <li class="softnesttools_symbols"><span class="softnesttools_symbols_copy">⌛</span>
                                <div class="symbol-name">Hourglass</div>
                                </li>
                                <li class="softnesttools_symbols"><span class="softnesttools_symbols_copy">⏳</span>
                                <div class="symbol-name">Hourglass with Flowing Sand</div>
                                </li>
                                <li class="softnesttools_symbols"><span class="softnesttools_symbols_copy">⧖</span>
                                <div class="symbol-name">Hourglass with Flowing Sand</div>
                                </li>
                                <li class="softnesttools_symbols"><span class="softnesttools_symbols_copy">⧗</span>
                                <div class="symbol-name">Hourglass with Flowing Sand</div>
                                </li>
                                <li class="softnesttools_symbols"><span class="softnesttools_symbols_copy">⋈</span>
                                <div class="symbol-name">Hourglass with Flowing Sand</div>
                                </li>
                                <li class="softnesttools_symbols"><span class="softnesttools_symbols_copy">⧑</span>
                                <div class="symbol-name">Hourglass with Flowing Sand</div>
                                </li>
                                <li class="softnesttools_symbols"><span class="softnesttools_symbols_copy">⧒</span>
                                <div class="symbol-name">Hourglass with Flowing Sand</div>
                                </li>
                                <li class="softnesttools_symbols"><span class="softnesttools_symbols_copy">⧓</span>
                                <div class="symbol-name">Hourglass with Flowing Sand</div>
                                </li>
                                <li class="softnesttools_symbols"><span class="softnesttools_symbols_copy">⧔</span>
                                <div class="symbol-name">Hourglass with Flowing Sand</div>
                                </li>
                                <li class="softnesttools_symbols"><span class="softnesttools_symbols_copy">⧕</span>
                                <div class="symbol-name">Hourglass with Flowing Sand</div>
                                </li>


                                    <li class="h2copy">
                                        <h2>Bracket Symbols</h2>
                                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quo enim repudiandae et omnis, est velit ratione dolore
                                            maxime, non aliquam dolor laboriosam.</p>
                                    </li>

                                <li class="softnesttools_symbols"><span class="softnesttools_symbols_copy" title="Left Angle Bracket">〈</span></li>
                                <li class="softnesttools_symbols"><span class="softnesttools_symbols_copy" title="Right Angle Bracket">〉</span></li>
                                <li class="softnesttools_symbols"><span class="softnesttools_symbols_copy" title="Right White Curly Bracket">﹜</span>
                                </li>
                                <li class="softnesttools_symbols"><span class="softnesttools_symbols_copy" title="Small Left Parenthesis">﹙</span></li>
                                <li class="softnesttools_symbols"><span class="softnesttools_symbols_copy" title="Left Corner Bracket">﹁</span></li>
                                <li class="softnesttools_symbols"><span class="softnesttools_symbols_copy" title="Right Corner Bracket">﹂</span></li>
                                <li class="softnesttools_symbols"><span class="softnesttools_symbols_copy"
                                    title="Left Black Lenticular Bracket">【</span></li>
                                <li class="softnesttools_symbols"><span class="softnesttools_symbols_copy"
                                    title="Right Black Lenticular Bracket">】</span></li>
                                <li class="softnesttools_symbols"><span class="softnesttools_symbols_copy"
                                    title="Right White Lenticular Bracket">﹞</span></li>
                                <li class="softnesttools_symbols"><span class="softnesttools_symbols_copy"
                                    title="Left White Lenticular Bracket">﹛</span></li>
                                <li class="softnesttools_symbols"><span class="softnesttools_symbols_copy" title="Small Right Parenthesis">﹚</span></li>
                                <li class="softnesttools_symbols"><span class="softnesttools_symbols_copy" title="Left-Pointing Angle Bracket">〈</span>
                                </li>
                                <li class="softnesttools_symbols"><span class="softnesttools_symbols_copy" title="Left White Corner Bracket">『</span>
                                </li>
                                <li class="softnesttools_symbols"><span class="softnesttools_symbols_copy" title="Right White Corner Bracket">』</span>
                                </li>
                                <li class="softnesttools_symbols"><span class="softnesttools_symbols_copy" title="Top Left Curly Bracket">︷</span></li>
                                <li class="softnesttools_symbols"><span class="softnesttools_symbols_copy" title="Bottom Left Curly Bracket">︸</span>
                                </li>
                                <li class="softnesttools_symbols"><span class="softnesttools_symbols_copy" title="Right-Pointing Angle Bracket">〉</span>
                                </li>
                                <li class="softnesttools_symbols"><span class="softnesttools_symbols_copy"
                                    title="Single Left-Pointing Angle Quotation Mark">‹</span></li>
                                <li class="softnesttools_symbols"><span class="softnesttools_symbols_copy"
                                    title="Left White Tortoise Shell Bracket">〘</span></li>
                                <li class="softnesttools_symbols"><span class="softnesttools_symbols_copy"
                                    title="Right White Tortoise Shell Bracket">〙</span></li>
                                <li class="softnesttools_symbols"><span class="softnesttools_symbols_copy" title="Left Double Angle Bracket">《</span>
                                </li>
                                <li class="softnesttools_symbols"><span class="softnesttools_symbols_copy" title="Right Double Angle Bracket">》</span>
                                </li>
                                <li class="softnesttools_symbols"><span class="softnesttools_symbols_copy"
                                    title="Right-Pointing Double Angle Quotation Mark">»</span></li>
                                <li class="softnesttools_symbols"><span class="softnesttools_symbols_copy" title="Bottom Right Curly Bracket">﹀</span>
                                </li>
                                <li class="softnesttools_symbols"><span class="softnesttools_symbols_copy" title="Fullwidth Right Parenthesis">）</span>
                                </li>
                                <li class="softnesttools_symbols"><span class="softnesttools_symbols_copy" title="Small Less-Than Sign">﹤</span></li>
                                <li class="softnesttools_symbols"><span class="softnesttools_symbols_copy" title="Top Left White Parenthesis">︹</span>
                                </li>
                                <li class="softnesttools_symbols"><span class="softnesttools_symbols_copy" title="Top Right White Parenthesis">︺</span>
                                </li>
                                <li class="softnesttools_symbols"><span class="softnesttools_symbols_copy" title="Wavy Overline">︿</span></li>
                                <li class="softnesttools_symbols"><span class="softnesttools_symbols_copy" title="Fullwidth Left Parenthesis">（</span>
                                </li>
                                <li class="softnesttools_symbols"><span class="softnesttools_symbols_copy" title="Left White Square Bracket">〚</span>
                                </li>
                                <li class="softnesttools_symbols"><span class="softnesttools_symbols_copy" title="Right White Square Bracket">〛</span>
                                </li>
                                <li class="softnesttools_symbols"><span class="softnesttools_symbols_copy" title="Fullwidth Less-Than Sign">＜</span>
                                </li>
                                <li class="softnesttools_symbols"><span class="softnesttools_symbols_copy" title="Fullwidth Greater-Than Sign">＞</span>
                                </li>
                                <li class="softnesttools_symbols"><span class="softnesttools_symbols_copy" title="Top Left Corner Bracket">︻</span></li>
                                <li class="softnesttools_symbols"><span class="softnesttools_symbols_copy" title="Top Right Corner Bracket">︼</span>
                                </li>
                                <li class="softnesttools_symbols"><span class="softnesttools_symbols_copy" title="Left Square Bracket">[</span></li>
                                <li class="softnesttools_symbols"><span class="softnesttools_symbols_copy" title="Right Square Bracket">]</span></li>
                                <li class="softnesttools_symbols"><span class="softnesttools_symbols_copy" title="Left Corner Bracket">「</span></li>
                                <li class="softnesttools_symbols"><span class="softnesttools_symbols_copy" title="Right Corner Bracket">」</span></li>
                                <li class="softnesttools_symbols"><span class="softnesttools_symbols_copy" title="Top Left Parenthesis">︵</span></li>
                                <li class="softnesttools_symbols"><span class="softnesttools_symbols_copy" title="Top Right Parenthesis">︶</span></li>
                                <li class="softnesttools_symbols"><span class="softnesttools_symbols_copy"
                                    title="Single Right-Pointing Angle Quotation Mark">›</span></li>
                                <li class="softnesttools_symbols"><span class="softnesttools_symbols_copy"
                                    title="Left-Pointing Double Angle Quotation Mark">«</span></li>
                                <li class="softnesttools_symbols"><span class="softnesttools_symbols_copy"
                                    title="Left White Lenticular Bracket">〖</span></li>
                                <li class="softnesttools_symbols"><span class="softnesttools_symbols_copy"
                                    title="Right White Lenticular Bracket">〗</span></li>
                                <li class="softnesttools_symbols"><span class="softnesttools_symbols_copy" title="Left White Parenthesis">〔</span></li>
                                <li class="softnesttools_symbols"><span class="softnesttools_symbols_copy" title="Right White Parenthesis">〕</span></li>
                                <li class="softnesttools_symbols"><span class="softnesttools_symbols_copy" title="Double Wavy Overline">︽</span></li>
                                <li class="softnesttools_symbols"><span class="softnesttools_symbols_copy" title="Double Wavy Underline">︾</span></li>
                                <li class="softnesttools_symbols"><span class="softnesttools_symbols_copy" title="Left White Corner Bracket">﹃</span>
                                </li>
                                <li class="softnesttools_symbols"><span class="softnesttools_symbols_copy" title="Right White Corner Bracket">﹄</span>
                                </li>
                                <li class="softnesttools_symbols"><span class="softnesttools_symbols_copy" title="Left Curly Bracket">｛</span></li>
                                <li class="softnesttools_symbols"><span class="softnesttools_symbols_copy" title="Right Curly Bracket">｝</span></li>
                                <li class="softnesttools_symbols"><span class="softnesttools_symbols_copy" title="Small Greater-Than Sign">﹥</span></li>
                                <li class="softnesttools_symbols"><span class="softnesttools_symbols_copy"
                                    title="Small Left Tortoise Shell Bracket">﹝</span></li>
                                    

                                    <li class="h2copy">
                                        <h2>Square & Rectangle Symbols</h2>
                                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quo enim repudiandae et omnis, est velit ratione dolore
                                            maxime, non aliquam dolor laboriosam.</p>
                                    </li>
                                    <li class="softnesttools_symbols"><span class="softnesttools_symbols_copy">🔲</span></li>
                                    <li class="softnesttools_symbols"><span class="softnesttools_symbols_copy">◧</span></li>
                                    <li class="softnesttools_symbols"><span class="softnesttools_symbols_copy">▣</span></li>
                                    <li class="softnesttools_symbols"><span class="softnesttools_symbols_copy">▅</span></li>
                                    <li class="softnesttools_symbols"><span class="softnesttools_symbols_copy">█</span></li>
                                    <li class="softnesttools_symbols"><span class="softnesttools_symbols_copy">▬</span></li>
                                    <li class="softnesttools_symbols"><span class="softnesttools_symbols_copy">▯</span></li>
                                    <li class="softnesttools_symbols"><span class="softnesttools_symbols_copy">◫</span></li>
                                    <li class="softnesttools_symbols"><span class="softnesttools_symbols_copy">❚</span></li>
                                    <li class="softnesttools_symbols"><span class="softnesttools_symbols_copy">🔷</span></li>
                                    <li class="softnesttools_symbols"><span class="softnesttools_symbols_copy">◽</span></li>
                                    <li class="softnesttools_symbols"><span class="softnesttools_symbols_copy">▋</span></li>
                                    <li class="softnesttools_symbols"><span class="softnesttools_symbols_copy">▀</span></li>
                                    <li class="softnesttools_symbols"><span class="softnesttools_symbols_copy">◨</span></li>
                                    <li class="softnesttools_symbols"><span class="softnesttools_symbols_copy">▄</span></li>
                                    <li class="softnesttools_symbols"><span class="softnesttools_symbols_copy">▆</span></li>
                                    <li class="softnesttools_symbols"><span class="softnesttools_symbols_copy">▔</span></li>
                                    <li class="softnesttools_symbols"><span class="softnesttools_symbols_copy">▪</span></li>
                                    <li class="softnesttools_symbols"><span class="softnesttools_symbols_copy">▱</span></li>
                                    <li class="softnesttools_symbols"><span class="softnesttools_symbols_copy">■</span></li>
                                    <li class="softnesttools_symbols"><span class="softnesttools_symbols_copy">⬜</span></li>
                                    <li class="softnesttools_symbols"><span class="softnesttools_symbols_copy">💠</span></li>
                                    <li class="softnesttools_symbols"><span class="softnesttools_symbols_copy">◾</span></li>
                                    <li class="softnesttools_symbols"><span class="softnesttools_symbols_copy">⊠</span></li>
                                    <li class="softnesttools_symbols"><span class="softnesttools_symbols_copy">◩</span></li>
                                    <li class="softnesttools_symbols"><span class="softnesttools_symbols_copy">▧</span></li>
                                    <li class="softnesttools_symbols"><span class="softnesttools_symbols_copy">▇</span></li>
                                    <li class="softnesttools_symbols"><span class="softnesttools_symbols_copy">▎</span></li>
                                    <li class="softnesttools_symbols"><span class="softnesttools_symbols_copy">▫</span></li>
                                    <li class="softnesttools_symbols"><span class="softnesttools_symbols_copy">☴</span></li>
                                    <li class="softnesttools_symbols"><span class="softnesttools_symbols_copy">□</span></li>
                                    <li class="softnesttools_symbols"><span class="softnesttools_symbols_copy">◇</span></li>
                                    <li class="softnesttools_symbols"><span class="softnesttools_symbols_copy">🔹</span></li>
                                    <li class="softnesttools_symbols"><span class="softnesttools_symbols_copy">∎</span></li>
                                    <li class="softnesttools_symbols"><span class="softnesttools_symbols_copy">▢</span></li>
                                    <li class="softnesttools_symbols"><span class="softnesttools_symbols_copy">▊</span></li>
                                    <li class="softnesttools_symbols"><span class="softnesttools_symbols_copy">▮</span></li>
                                    <li class="softnesttools_symbols"><span class="softnesttools_symbols_copy">❙</span></li>
                                    <li class="softnesttools_symbols"><span class="softnesttools_symbols_copy">🔶</span></li>
                                    <li class="softnesttools_symbols"><span class="softnesttools_symbols_copy">❑</span></li>
                                    <li class="softnesttools_symbols"><span class="softnesttools_symbols_copy">▂</span></li>
                                    <li class="softnesttools_symbols"><span class="softnesttools_symbols_copy">▒</span></li>
                                    <li class="softnesttools_symbols"><span class="softnesttools_symbols_copy">☷</span></li>
                                    <li class="softnesttools_symbols"><span class="softnesttools_symbols_copy">☖</span></li>
                                    <li class="softnesttools_symbols"><span class="softnesttools_symbols_copy">⊟</span></li>
                                    <li class="softnesttools_symbols"><span class="softnesttools_symbols_copy">❐</span></li>
                                    <li class="softnesttools_symbols"><span class="softnesttools_symbols_copy">▦</span></li>
                                    <li class="softnesttools_symbols"><span class="softnesttools_symbols_copy">▁</span></li>
                                    <li class="softnesttools_symbols"><span class="softnesttools_symbols_copy">▍</span></li>
                                    <li class="softnesttools_symbols"><span class="softnesttools_symbols_copy">░</span></li>
                                    <li class="softnesttools_symbols"><span class="softnesttools_symbols_copy">☱</span></li>
                                    <li class="softnesttools_symbols"><span class="softnesttools_symbols_copy">☳</span></li>
                                    <li class="softnesttools_symbols"><span class="softnesttools_symbols_copy">◈</span></li>
                                    <li class="softnesttools_symbols"><span class="softnesttools_symbols_copy">⎚</span></li>
                                    <li class="softnesttools_symbols"><span class="softnesttools_symbols_copy">⊞</span></li>
                                    <li class="softnesttools_symbols"><span class="softnesttools_symbols_copy">▥</span></li>
                                    <li class="softnesttools_symbols"><span class="softnesttools_symbols_copy">▐</span></li>
                                    <li class="softnesttools_symbols"><span class="softnesttools_symbols_copy">☲</span></li>
                                    <li class="softnesttools_symbols"><span class="softnesttools_symbols_copy">◊</span></li>
                                    <li class="softnesttools_symbols"><span class="softnesttools_symbols_copy">⬛</span></li>
                                    <li class="softnesttools_symbols"><span class="softnesttools_symbols_copy">⊡</span></li>
                                    <li class="softnesttools_symbols"><span class="softnesttools_symbols_copy">◪</span></li>
                                    <li class="softnesttools_symbols"><span class="softnesttools_symbols_copy">▨</span></li>
                                    <li class="softnesttools_symbols"><span class="softnesttools_symbols_copy">▉</span></li>
                                    <li class="softnesttools_symbols"><span class="softnesttools_symbols_copy">▏</span></li>
                                    <li class="softnesttools_symbols"><span class="softnesttools_symbols_copy">▭</span></li>
                                    <li class="softnesttools_symbols"><span class="softnesttools_symbols_copy">☵</span></li>
                                    <li class="softnesttools_symbols"><span class="softnesttools_symbols_copy">❘</span></li>
                                    <li class="softnesttools_symbols"><span class="softnesttools_symbols_copy">◆</span></li>
                                    <li class="softnesttools_symbols"><span class="softnesttools_symbols_copy">🔸</span></li>
                                    <li class="softnesttools_symbols"><span class="softnesttools_symbols_copy">🔳</span></li>
                                    <li class="softnesttools_symbols"><span class="softnesttools_symbols_copy">❏</span></li>
                                    <li class="softnesttools_symbols"><span class="softnesttools_symbols_copy">▤</span></li>
                                    <li class="softnesttools_symbols"><span class="softnesttools_symbols_copy">▩</span></li>
                                    <li class="softnesttools_symbols"><span class="softnesttools_symbols_copy">▌</span></li>
                                    <li class="softnesttools_symbols"><span class="softnesttools_symbols_copy">▕</span></li>
                                    <li class="softnesttools_symbols"><span class="softnesttools_symbols_copy">☰</span></li>
                                    <li class="softnesttools_symbols"><span class="softnesttools_symbols_copy">☶</span></li>
                                    <li class="softnesttools_symbols"><span class="softnesttools_symbols_copy">〓</span></li>
                                    <li class="softnesttools_symbols"><span class="softnesttools_symbols_copy">⎔</span></li>
                                    <li class="softnesttools_symbols"><span class="softnesttools_symbols_copy">❒</span></li>
                                    <li class="softnesttools_symbols"><span class="softnesttools_symbols_copy">▃</span></li>
                                    <li class="softnesttools_symbols"><span class="softnesttools_symbols_copy">▓</span></li>
                                    <li class="softnesttools_symbols"><span class="softnesttools_symbols_copy">▰</span></li>
                                    <li class="softnesttools_symbols"><span class="softnesttools_symbols_copy">☗</span></li>
                                    <li class="h2copy">
                                        <h2>Triangle Symbols</h2>
                                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quo enim repudiandae et omnis, est velit ratione dolore
                                            maxime, non aliquam dolor laboriosam.</p>
                                    </li>
                                    <li class="softnesttools_symbols"><span class="softnesttools_symbols_copy">⧑</span></li>
                                    <li class="softnesttools_symbols"><span class="softnesttools_symbols_copy">◥</span></li>
                                    <li class="softnesttools_symbols"><span class="softnesttools_symbols_copy">▴</span></li>
                                    <li class="softnesttools_symbols"><span class="softnesttools_symbols_copy">⋈</span></li>
                                    <li class="softnesttools_symbols"><span class="softnesttools_symbols_copy">▷</span></li>
                                    <li class="softnesttools_symbols"><span class="softnesttools_symbols_copy">◃</span></li>
                                    <li class="softnesttools_symbols"><span class="softnesttools_symbols_copy">⧎</span></li>
                                    <li class="softnesttools_symbols"><span class="softnesttools_symbols_copy">⋖</span></li>
                                    <li class="softnesttools_symbols"><span class="softnesttools_symbols_copy">⋭</span></li>
                                    <li class="softnesttools_symbols"><span class="softnesttools_symbols_copy">⍙</span></li>
                                    <li class="softnesttools_symbols"><span class="softnesttools_symbols_copy">⊿</span></li>
                                    <li class="softnesttools_symbols"><span class="softnesttools_symbols_copy">◄</span></li>
                                    <li class="softnesttools_symbols"><span class="softnesttools_symbols_copy">◣</span></li>
                                    <li class="softnesttools_symbols"><span class="softnesttools_symbols_copy">◤</span></li>
                                    <li class="softnesttools_symbols"><span class="softnesttools_symbols_copy">⨝</span></li>
                                    <li class="softnesttools_symbols"><span class="softnesttools_symbols_copy">ᛒ</span></li>
                                    <li class="softnesttools_symbols"><span class="softnesttools_symbols_copy">▿</span></li>
                                    <li class="softnesttools_symbols"><span class="softnesttools_symbols_copy">▹</span></li>
                                    <li class="softnesttools_symbols"><span class="softnesttools_symbols_copy">⫸</span></li>
                                    <li class="softnesttools_symbols"><span class="softnesttools_symbols_copy">⋗</span></li>
                                    <li class="softnesttools_symbols"><span class="softnesttools_symbols_copy">⨺</span></li>
                                    <li class="softnesttools_symbols"><span class="softnesttools_symbols_copy">⩢</span></li>
                                    <li class="softnesttools_symbols"><span class="softnesttools_symbols_copy">▲</span></li>
                                    <li class="softnesttools_symbols"><span class="softnesttools_symbols_copy">⏫</span></li>
                                    <li class="softnesttools_symbols"><span class="softnesttools_symbols_copy">◢</span></li>
                                    <li class="softnesttools_symbols"><span class="softnesttools_symbols_copy">⏏</span></li>
                                    <li class="softnesttools_symbols"><span class="softnesttools_symbols_copy">ᐉ</span></li>
                                    <li class="softnesttools_symbols"><span class="softnesttools_symbols_copy">⊲</span></li>
                                    <li class="softnesttools_symbols"><span class="softnesttools_symbols_copy">◭</span></li>
                                    <li class="softnesttools_symbols"><span class="softnesttools_symbols_copy">△</span></li>
                                    <li class="softnesttools_symbols"><span class="softnesttools_symbols_copy">⋫</span></li>
                                    <li class="softnesttools_symbols"><span class="softnesttools_symbols_copy">⏃</span></li>
                                    <li class="softnesttools_symbols"><span class="softnesttools_symbols_copy">⧏</span></li>
                                    <li class="softnesttools_symbols"><span class="softnesttools_symbols_copy">►</span></li>
                                    <li class="softnesttools_symbols"><span class="softnesttools_symbols_copy">◂</span></li>
                                    <li class="softnesttools_symbols"><span class="softnesttools_symbols_copy">▽</span></li>
                                    <li class="softnesttools_symbols"><span class="softnesttools_symbols_copy">⧋</span></li>
                                    <li class="softnesttools_symbols"><span class="softnesttools_symbols_copy">⋬</span></li>
                                    <li class="softnesttools_symbols"><span class="softnesttools_symbols_copy">⩠</span></li>
                                    <li class="softnesttools_symbols"><span class="softnesttools_symbols_copy">🔺</span></li>
                                    <li class="softnesttools_symbols"><span class="softnesttools_symbols_copy">◹</span></li>
                                    <li class="softnesttools_symbols"><span class="softnesttools_symbols_copy">▻</span></li>
                                    <li class="softnesttools_symbols"><span class="softnesttools_symbols_copy">⩥</span></li>
                                    <li class="softnesttools_symbols"><span class="softnesttools_symbols_copy">⨹</span></li>
                                    <li class="softnesttools_symbols"><span class="softnesttools_symbols_copy">ꔪ</span></li>
                                    <li class="softnesttools_symbols"><span class="softnesttools_symbols_copy">⏩</span></li>
                                    <li class="softnesttools_symbols"><span class="softnesttools_symbols_copy">📐</span></li>
                                    <li class="softnesttools_symbols"><span class="softnesttools_symbols_copy">◸</span></li>
                                    <li class="softnesttools_symbols"><span class="softnesttools_symbols_copy">⊳</span></li>
                                    <li class="softnesttools_symbols"><span class="softnesttools_symbols_copy">◅</span></li>
                                    <li class="softnesttools_symbols"><span class="softnesttools_symbols_copy">⧖</span></li>
                                    <li class="softnesttools_symbols"><span class="softnesttools_symbols_copy">⩤</span></li>
                                    <li class="softnesttools_symbols"><span class="softnesttools_symbols_copy">⏄</span></li>
                                    <li class="softnesttools_symbols"><span class="softnesttools_symbols_copy">⧌</span></li>
                                    <li class="softnesttools_symbols"><span class="softnesttools_symbols_copy">⑅</span></li>
                                    <li class="softnesttools_symbols"><span class="softnesttools_symbols_copy">⧓</span></li>
                                    <li class="softnesttools_symbols"><span class="softnesttools_symbols_copy">▸</span></li>
                                    <li class="softnesttools_symbols"><span class="softnesttools_symbols_copy">∇</span></li>
                                    <li class="softnesttools_symbols"><span class="softnesttools_symbols_copy">ⴵ</span></li>
                                    <li class="softnesttools_symbols"><span class="softnesttools_symbols_copy">⏅</span></li>
                                    <li class="softnesttools_symbols"><span class="softnesttools_symbols_copy">≜</span></li>
                                    <li class="softnesttools_symbols"><span class="softnesttools_symbols_copy">▼</span></li>
                                    <li class="softnesttools_symbols"><span class="softnesttools_symbols_copy">⏬</span></li>
                                    <li class="softnesttools_symbols"><span class="softnesttools_symbols_copy">▶</span></li>
                                    <li class="softnesttools_symbols"><span class="softnesttools_symbols_copy">⚠</span></li>
                                    <li class="softnesttools_symbols"><span class="softnesttools_symbols_copy">◁</span></li>
                                    <li class="softnesttools_symbols"><span class="softnesttools_symbols_copy">⊴</span></li>
                                    <li class="softnesttools_symbols"><span class="softnesttools_symbols_copy">◮</span></li>
                                    <li class="softnesttools_symbols"><span class="softnesttools_symbols_copy">⍋</span></li>
                                    <li class="softnesttools_symbols"><span class="softnesttools_symbols_copy">⋪</span></li>
                                    <li class="softnesttools_symbols"><span class="softnesttools_symbols_copy">ꕔ</span></li>
                                    <li class="softnesttools_symbols"><span class="softnesttools_symbols_copy">⧐</span></li>
                                    <li class="softnesttools_symbols"><span class="softnesttools_symbols_copy">⧒</span></li>
                                    <li class="softnesttools_symbols"><span class="softnesttools_symbols_copy">⏪</span></li>
                                    <li class="softnesttools_symbols"><span class="softnesttools_symbols_copy">▾</span></li>
                                    <li class="softnesttools_symbols"><span class="softnesttools_symbols_copy">⪧</span></li>
                                    <li class="softnesttools_symbols"><span class="softnesttools_symbols_copy">∆</span></li>
                                    <li class="softnesttools_symbols"><span class="softnesttools_symbols_copy">⊵</span></li>
                                    <li class="softnesttools_symbols"><span class="softnesttools_symbols_copy">⟠</span></li>
                                    <li class="softnesttools_symbols"><span class="softnesttools_symbols_copy">ꘜ</span></li>
                                    <li class="softnesttools_symbols"><span class="softnesttools_symbols_copy">⌲</span></li>
                                    <li class="softnesttools_symbols"><span class="softnesttools_symbols_copy">ߜ</span></li>
                                    <li class="softnesttools_symbols"><span class="softnesttools_symbols_copy">◬</span></li>
                                    <li class="softnesttools_symbols"><span class="softnesttools_symbols_copy">◀</span></li>
                                    <li class="softnesttools_symbols"><span class="softnesttools_symbols_copy">◺</span></li>
                                    <li class="softnesttools_symbols"><span class="softnesttools_symbols_copy">▵</span></li>
                                    <li class="softnesttools_symbols"><span class="softnesttools_symbols_copy">⫷</span></li>
                                    <li class="softnesttools_symbols"><span class="softnesttools_symbols_copy">⨻</span></li>

                                    
                                </ul>

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
         // Function to copy text to clipboard
      function copyToClipboard(text) {
         const textarea = document.createElement("textarea");
         textarea.value = text;
         document.body.appendChild(textarea);
         textarea.select();
         document.execCommand("copy");
         document.body.removeChild(textarea);
         alert(`Copied: ${text}`);
      }

      // Add click event listeners to all symbols
      document.querySelectorAll(".softnesttools_symbols").forEach((item) => {
         item.addEventListener("click", () => {
            const symbol = item.querySelector(".softnesttools_symbols_copy").textContent;
            copyToClipboard(symbol);
         });
      });
    </script>
@endpush
