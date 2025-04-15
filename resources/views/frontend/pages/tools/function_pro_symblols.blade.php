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
                                ->where('slug', 'fraction-punctuation-symbols-copy')
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
                                <h2>Fraction Symbols</h2>
                                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quo enim repudiandae et omnis, est velit ratione dolore
                                    maxime, non aliquam dolor laboriosam.</p>
                            </li>
                            <li class="softnesttools_symbols">
                                <span class="softnesttools_symbols_copy" title="Greek Small Letter Epsilon">ε</span>
                                <div class="symbol-name">Epsilon</div>
                            </li>
                            <li class="softnesttools_symbols">
                                <span class="softnesttools_symbols_copy" title="Greek Small Letter Pi">π</span>
                                <div class="symbol-name">Pi</div>
                            </li>
                            <li class="softnesttools_symbols">
                                <span class="softnesttools_symbols_copy" title="Greek Small Letter Phi">φ</span>
                                <div class="symbol-name">Phi</div>
                            </li>
                            <li class="softnesttools_symbols">
                                <span class="softnesttools_symbols_copy" title="Subscript Left Parenthesis">₍</span>
                                <div class="symbol-name">Subscript Left Parenthesis</div>
                            </li>
                            <li class="softnesttools_symbols">
                                <span class="softnesttools_symbols_copy" title="Fullwidth Plus Sign">＋</span>
                                <div class="symbol-name">Fullwidth Plus</div>
                            </li>
                            <li class="softnesttools_symbols">
                                <span class="softnesttools_symbols_copy" title="Square Root">√</span>
                                <div class="symbol-name">Square Root</div>
                            </li>
                            <li class="softnesttools_symbols">
                                <span class="softnesttools_symbols_copy" title="Triple Integral">∭</span>
                                <div class="symbol-name">Triple Integral</div>
                            </li>
                            <li class="softnesttools_symbols">
                                <span class="softnesttools_symbols_copy" title="There Does Not Exist">∄</span>
                                <div class="symbol-name">There Does Not Exist</div>
                            </li>
                            <li class="softnesttools_symbols">
                                <span class="softnesttools_symbols_copy" title="Not an Element Of">∉</span>
                                <div class="symbol-name">Not an Element Of</div>
                            </li>
                            <li class="softnesttools_symbols">
                                <span class="softnesttools_symbols_copy" title="Dot Plus">∔</span>
                                <div class="symbol-name">Dot Plus</div>
                            </li>
                            <li class="softnesttools_symbols">
                                <span class="softnesttools_symbols_copy" title="Bullet Operator">∙</span>
                                <div class="symbol-name">Bullet Operator</div>
                            </li>
                            <li class="softnesttools_symbols">
                                <span class="softnesttools_symbols_copy" title="Logical Or">∨</span>
                                <div class="symbol-name">Logical Or</div>
                            </li>
                            <li class="softnesttools_symbols">
                                <span class="softnesttools_symbols_copy" title="Ratio">∶</span>
                                <div class="symbol-name">Ratio</div>
                            </li>
                            <li class="softnesttools_symbols">
                                <span class="softnesttools_symbols_copy" title="Not Tilde Operator">≁</span>
                                <div class="symbol-name">Not Tilde</div>
                            </li>
                            <li class="softnesttools_symbols">
                                <span class="softnesttools_symbols_copy" title="Approximately But Not Actually Equal To">≆</span>
                                <div class="symbol-name">Approximately Not Equal</div>
                            </li>
                            <li class="softnesttools_symbols">
                                <span class="softnesttools_symbols_copy" title="Geometrically Equal To">≑</span>
                                <div class="symbol-name">Geometrically Equal</div>
                            </li>
                            <li class="softnesttools_symbols">
                                <span class="softnesttools_symbols_copy" title="Ring In Equal To">≖</span>
                                <div class="symbol-name">Ring In Equal</div>
                            </li>
                            <li class="softnesttools_symbols">
                                <span class="softnesttools_symbols_copy" title="Identical To">≡</span>
                                <div class="symbol-name">Identical To</div>
                            </li>
                            <li class="softnesttools_symbols">
                                <span class="softnesttools_symbols_copy" title="Less-Than or Equal To">≦</span>
                                <div class="symbol-name">Less-Than or Equal To</div>
                            </li>
                            <li class="softnesttools_symbols">
                                <span class="softnesttools_symbols_copy" title="Neither Greater-Than Nor Equal To">≱</span>
                                <div class="symbol-name">Neither Greater-Than Nor Equal To</div>
                            </li>
                            <li class="softnesttools_symbols">
                                <span class="softnesttools_symbols_copy" title="Less-Than or Greater-Than">≶</span>
                                <div class="symbol-name">Less-Than or Greater-Than</div>
                            </li>
                            <li class="softnesttools_symbols">
                                <span class="softnesttools_symbols_copy" title="Does Not Succeed">⊁</span>
                                <div class="symbol-name">Does Not Succeed</div>
                            </li>
                            <li class="softnesttools_symbols">
                                <span class="softnesttools_symbols_copy" title="Subset of or Equal To">⊆</span>
                                <div class="symbol-name">Subset of or Equal To</div>
                            </li>
                            <li class="softnesttools_symbols">
                                <span class="softnesttools_symbols_copy" title="Square Image of or Equal To">⊑</span>
                                <div class="symbol-name">Square Image of or Equal To</div>
                            </li>
                            <li class="softnesttools_symbols">
                                <span class="softnesttools_symbols_copy" title="Circled Minus">⊖</span>
                                <div class="symbol-name">Circled Minus</div>
                            </li>
                            <li class="softnesttools_symbols">
                                <span class="softnesttools_symbols_copy" title="Squared Dot Operator">⊡</span>
                                <div class="symbol-name">Squared Dot Operator</div>
                            </li>
                            <li class="softnesttools_symbols">
                                <span class="softnesttools_symbols_copy" title="Right Tack">⊦</span>
                                <div class="symbol-name">Right Tack</div>
                            </li>
                            <li class="softnesttools_symbols">
                                <span class="softnesttools_symbols_copy" title="Subset With Dot">⊱</span>
                                <div class="symbol-name">Subset With Dot</div>
                            </li>
                            <li class="softnesttools_symbols">
                                <span class="softnesttools_symbols_copy" title="Original Of">⊶</span>
                                <div class="symbol-name">Original Of</div>
                            </li>
                            <li class="softnesttools_symbols">
                                <span class="softnesttools_symbols_copy" title="N-Ary Logical Or">⋁</span>
                                <div class="symbol-name">N-Ary Logical Or</div>
                            </li>
                            <li class="softnesttools_symbols">
                                <span class="softnesttools_symbols_copy" title="Star Operator">⋆</span>
                                <div class="symbol-name">Star Operator</div>
                            </li>
                            <li class="softnesttools_symbols">
                                <span class="softnesttools_symbols_copy" title="Double Superset">⋑</span>
                                <div class="symbol-name">Double Superset</div>
                            </li>
                            <li class="softnesttools_symbols">
                                <span class="softnesttools_symbols_copy" title="Less-Than With Dot">⋖</span>
                                <div class="symbol-name">Less-Than With Dot</div>
                            </li>
                            <li class="softnesttools_symbols">
                                <span class="softnesttools_symbols_copy" title="Neither Succeeds Nor Equal To">⋡</span>
                                <div class="symbol-name">Neither Succeeds Nor Equal To</div>
                            </li>
                            <li class="softnesttools_symbols">
                                <span class="softnesttools_symbols_copy" title="Less-Than But Not Equivalent To">⋦</span>
                                <div class="symbol-name">Less-Than But Not Equivalent To</div>
                            </li>
                            <li class="softnesttools_symbols">
                                <span class="softnesttools_symbols_copy" title="Down Right Diagonal Ellipsis">⋱</span>
                                <div class="symbol-name">Down Right Diagonal Ellipsis</div>
                            </li>
                            <li class="softnesttools_symbols">
                                <span class="softnesttools_symbols_copy" title="Greek Small Letter Alpha">α</span>
                                <div class="symbol-name">Alpha</div>
                            </li>
                            <li class="softnesttools_symbols">
                                <span class="softnesttools_symbols_copy" title="Greek Small Letter Omicron">ο</span>
                                <div class="symbol-name">Omicron</div>
                            </li>
                            <li class="softnesttools_symbols">
                                <span class="softnesttools_symbols_copy" title="Greek Small Letter Rho">ρ</span>
                                <div class="symbol-name">Rho</div>
                            </li>
                            <li class="softnesttools_symbols">
                                <span class="softnesttools_symbols_copy" title="Subscript Equals Sign">₌</span>
                                <div class="symbol-name">Subscript Equals Sign</div>
                            </li>
                            <li class="softnesttools_symbols">
                                <span class="softnesttools_symbols_copy" title="Subscript Right Parenthesis">₎</span>
                                <div class="symbol-name">Subscript Right Parenthesis</div>
                            </li>
                            <li class="softnesttools_symbols">
                                <span class="softnesttools_symbols_copy" title="Greek Capital Letter Sigma">Σ</span>
                                <div class="symbol-name">Sigma</div>
                            </li>
                            <li class="softnesttools_symbols">
                                <span class="softnesttools_symbols_copy" title="Cube Root">∛</span>
                                <div class="symbol-name">Cube Root</div>
                            </li>
                            <li class="softnesttools_symbols">
                                <span class="softnesttools_symbols_copy" title="There Exists">∃</span>
                                <div class="symbol-name">There Exists</div>
                            </li>
                            <li class="softnesttools_symbols">
                                <span class="softnesttools_symbols_copy" title="Empty Set">∅</span>
                                <div class="symbol-name">Empty Set</div>
                            </li>
                            <li class="softnesttools_symbols">
                                <span class="softnesttools_symbols_copy" title="Minus-Or-Plus Sign">∓</span>
                                <div class="symbol-name">Minus-Or-Plus Sign</div>
                            </li>
                            <li class="softnesttools_symbols">
                                <span class="softnesttools_symbols_copy" title="Division Slash">∕</span>
                                <div class="symbol-name">Division Slash</div>
                            </li>
                            <li class="softnesttools_symbols">
                                <span class="softnesttools_symbols_copy" title="Logical And">∧</span>
                                <div class="symbol-name">Logical And</div>
                            </li>
                            <li class="softnesttools_symbols">
                                <span class="softnesttools_symbols_copy" title="Intersection">∩</span>
                                <div class="symbol-name">Intersection</div>
                            </li>
                            <li class="softnesttools_symbols">
                                <span class="softnesttools_symbols_copy" title="Wreath Product">≀</span>
                                <div class="symbol-name">Wreath Product</div>
                            </li>
                            <li class="softnesttools_symbols">
                                <span class="softnesttools_symbols_copy" title="Minus Tilde">≂</span>
                                <div class="symbol-name">Minus Tilde</div>
                            </li>
                            <li class="softnesttools_symbols">
                                <span class="softnesttools_symbols_copy" title="Approaches the Limit">≐</span>
                                <div class="symbol-name">Approaches the Limit</div>
                            </li>
                            <li class="softnesttools_symbols">
                                <span class="softnesttools_symbols_copy" title="Image of or Approximately Equal To">≒</span>
                                <div class="symbol-name">Image of or Approximately Equal To</div>
                            </li>
                            <li class="softnesttools_symbols">
                                <span class="softnesttools_symbols_copy" title="Not Equal To">≠</span>
                                <div class="symbol-name">Not Equal To</div>
                            </li>
                            <li class="softnesttools_symbols">
                                <span class="softnesttools_symbols_copy" title="Not Identical To">≢</span>
                                <div class="symbol-name">Not Identical To</div>
                            </li>
                            <li class="softnesttools_symbols">
                                <span class="softnesttools_symbols_copy" title="Neither Less-Than Nor Equal To">≰</span>
                                <div class="symbol-name">Neither Less-Than Nor Equal To</div>
                            </li>
                            <li class="softnesttools_symbols">
                                <span class="softnesttools_symbols_copy" title="Less-Than or Equivalent To">≲</span>
                                <div class="symbol-name">Less-Than or Equivalent To</div>
                            </li>
                            <li class="softnesttools_symbols">
                                <span class="softnesttools_symbols_copy" title="Does Not Precede">⊀</span>
                                <div class="symbol-name">Does Not Precede</div>
                            </li>
                            <li class="softnesttools_symbols">
                                <span class="softnesttools_symbols_copy" title="Subset Of">⊂</span>
                                <div class="symbol-name">Subset Of</div>
                            </li>
                            <li class="softnesttools_symbols">
                                <span class="softnesttools_symbols_copy" title="Square Original Of">⊐</span>
                                <div class="symbol-name">Square Original Of</div>
                            </li>
                            <li class="softnesttools_symbols">
                                <span class="softnesttools_symbols_copy" title="Square Image of or Not Equal To">⊒</span>
                                <div class="symbol-name">Square Image of or Not Equal To</div>
                            </li>
                            <li class="softnesttools_symbols">
                                <span class="softnesttools_symbols_copy" title="Squared Times">⊠</span>
                                <div class="symbol-name">Squared Times</div>
                            </li>
                            <li class="softnesttools_symbols">
                                <span class="softnesttools_symbols_copy" title="Right Tack">⊢</span>
                                <div class="symbol-name">Right Tack</div>
                            </li>
                            <li class="softnesttools_symbols">
                                <span class="softnesttools_symbols_copy" title="Subset With Dot">⊰</span>
                                <div class="symbol-name">Subset With Dot</div>
                            </li>
                            <li class="softnesttools_symbols">
                                <span class="softnesttools_symbols_copy" title="Normal Subgroup Of">⊲</span>
                                <div class="symbol-name">Normal Subgroup Of</div>
                            </li>
                            <li class="softnesttools_symbols">
                                <span class="softnesttools_symbols_copy" title="N-Ary Logical And">⋀</span>
                                <div class="symbol-name">N-Ary Logical And</div>
                            </li>
                            <li class="softnesttools_symbols">
                                <span class="softnesttools_symbols_copy" title="N-Ary Intersection">⋂</span>
                                <div class="symbol-name">N-Ary Intersection</div>
                            </li>
                            <li class="softnesttools_symbols">
                                <span class="softnesttools_symbols_copy" title="Double Subset">⋐</span>
                                <div class="symbol-name">Double Subset</div>
                            </li>
                            <li class="softnesttools_symbols">
                                <span class="softnesttools_symbols_copy" title="Double Union">⋒</span>
                                <div class="symbol-name">Double Union</div>
                            </li>
                            <li class="softnesttools_symbols">
                                <span class="softnesttools_symbols_copy" title="Neither Succeeds Nor Equal To">⋠</span>
                                <div class="symbol-name">Neither Succeeds Nor Equal To</div>
                            </li>
                            <li class="softnesttools_symbols">
                                <span class="softnesttools_symbols_copy" title="Not Square Image of or Equal To">⋢</span>
                                <div class="symbol-name">Not Square Image of or Equal To</div>
                            </li>
                            <li class="softnesttools_symbols">
                                <span class="softnesttools_symbols_copy" title="Up Right Diagonal Ellipsis">⋰</span>
                                <div class="symbol-name">Up Right Diagonal Ellipsis</div>
                            </li>
                            <li class="softnesttools_symbols">
                                <span class="softnesttools_symbols_copy" title="Superscript Left Parenthesis">⁽</span>
                                <div class="symbol-name">Superscript Left Parenthesis</div>
                            </li>
                            <li class="softnesttools_symbols">
                                <span class="softnesttools_symbols_copy" title="Greek Small Letter Beta">β</span>
                                <div class="symbol-name">Beta</div>
                            </li>
                            <li class="softnesttools_symbols">
                                <span class="softnesttools_symbols_copy" title="Greek Small Letter Iota">ι</span>
                                <div class="symbol-name">Iota</div>
                            </li>
                            <li class="softnesttools_symbols">
                                <span class="softnesttools_symbols_copy" title="Greek Small Letter Sigma">σ</span>
                                <div class="symbol-name">Sigma</div>
                            </li>
                            <li class="softnesttools_symbols">
                                <span class="softnesttools_symbols_copy" title="Superscript Plus Sign">⁺</span>
                                <div class="symbol-name">Superscript Plus Sign</div>
                            </li>
                            <li class="softnesttools_symbols">
                                <span class="softnesttools_symbols_copy" title="Heavy Multiplication X">✖</span>
                                <div class="symbol-name">Heavy Multiplication X</div>
                            </li>
                            <li class="softnesttools_symbols">
                                <span class="softnesttools_symbols_copy" title="Division Sign">÷</span>
                                <div class="symbol-name">Division Sign</div>
                            </li>
                            <li class="softnesttools_symbols">
                                <span class="softnesttools_symbols_copy" title="Fourth Root">∜</span>
                                <div class="symbol-name">Fourth Root</div>
                            </li>
                            <li class="softnesttools_symbols">
                                <span class="softnesttools_symbols_copy" title="Anticlockwise Integration">∱</span>
                                <div class="symbol-name">Anticlockwise Integration</div>
                            </li>
                            <li class="softnesttools_symbols">
                                <span class="softnesttools_symbols_copy" title="Increment">∆</span>
                                <div class="symbol-name">Increment</div>
                            </li>
                            <li class="softnesttools_symbols">
                                <span class="softnesttools_symbols_copy" title="Contains As Member">∍</span>
                                <div class="symbol-name">Contains As Member</div>
                            </li>
                            <li class="softnesttools_symbols">
                                <span class="softnesttools_symbols_copy" title="Set Minus">∖</span>
                                <div class="symbol-name">Set Minus</div>
                            </li>
                            <li class="softnesttools_symbols">
                                <span class="softnesttools_symbols_copy" title="Measured Angle">∡</span>
                                <div class="symbol-name">Measured Angle</div>
                            </li>
                            <li class="softnesttools_symbols">
                                <span class="softnesttools_symbols_copy" title="Union">∪</span>
                                <div class="symbol-name">Union</div>
                            </li>
                            <li class="softnesttools_symbols">
                                <span class="softnesttools_symbols_copy" title="Geometric Proportion">∺</span>
                                <div class="symbol-name">Geometric Proportion</div>
                            </li>
                            <li class="softnesttools_symbols">
                                <span class="softnesttools_symbols_copy" title="Asymptotically Equal To">≃</span>
                                <div class="symbol-name">Asymptotically Equal To</div>
                            </li>
                            <li class="softnesttools_symbols">
                                <span class="softnesttools_symbols_copy" title="Approximately Equal To">≊</span>
                                <div class="symbol-name">Approximately Equal To</div>
                            </li>
                            <li class="softnesttools_symbols">
                                <span class="softnesttools_symbols_copy" title="Image of or Approximately Equal To">≓</span>
                                <div class="symbol-name">Image of or Approximately Equal To</div>
                            </li>
                            <li class="softnesttools_symbols">
                                <span class="softnesttools_symbols_copy" title="Equal To or Precedes">≚</span>
                                <div class="symbol-name">Equal To or Precedes</div>
                            </li>
                            <li class="softnesttools_symbols">
                                <span class="softnesttools_symbols_copy" title="Strictly Equivalent To">≣</span>
                                <div class="symbol-name">Strictly Equivalent To</div>
                            </li>
                            <li class="softnesttools_symbols">
                                <span class="softnesttools_symbols_copy" title="Much Less-Than">≪</span>
                                <div class="symbol-name">Much Less-Than</div>
                            </li>
                            <li class="softnesttools_symbols">
                                <span class="softnesttools_symbols_copy" title="Greater-Than or Equivalent To">≳</span>
                                <div class="symbol-name">Greater-Than or Equivalent To</div>
                            </li>
                            <li class="softnesttools_symbols">
                                <span class="softnesttools_symbols_copy" title="Precedes">≺</span>
                                <div class="symbol-name">Precedes</div>
                            </li>
                            <li class="softnesttools_symbols">
                                <span class="softnesttools_symbols_copy" title="Superset Of">⊃</span>
                                <div class="symbol-name">Superset Of</div>
                            </li>
                            <li class="softnesttools_symbols">
                                <span class="softnesttools_symbols_copy" title="Subset of With Not Equal To">⊊</span>
                                <div class="symbol-name">Subset of With Not Equal To</div>
                            </li>
                            <li class="softnesttools_symbols">
                                <span class="softnesttools_symbols_copy" title="Square Cap">⊓</span>
                                <div class="symbol-name">Square Cap</div>
                            </li>
                            <li class="softnesttools_symbols">
                                <span class="softnesttools_symbols_copy" title="Circled Dot Operator">⊚</span>
                                <div class="symbol-name">Circled Dot Operator</div>
                            </li>
                            <li class="softnesttools_symbols">
                                <span class="softnesttools_symbols_copy" title="Left Tack">⊣</span>
                                <div class="symbol-name">Left Tack</div>
                            </li>
                            <li class="softnesttools_symbols">
                                <span class="softnesttools_symbols_copy" title="Double Vertical Bar Left Turnstile">⊪</span>
                                <div class="symbol-name">Double Vertical Bar Left Turnstile</div>
                            </li>
                            <li class="softnesttools_symbols">
                                <span class="softnesttools_symbols_copy" title="Contains As Normal Subgroup">⊳</span>
                                <div class="symbol-name">Contains As Normal Subgroup</div>
                            </li>
                            <li class="softnesttools_symbols">
                                <span class="softnesttools_symbols_copy" title="Intercalate">⊺</span>
                                <div class="symbol-name">Intercalate</div>
                            </li>
                            <li class="softnesttools_symbols">
                                <span class="softnesttools_symbols_copy" title="N-Ary Union">⋃</span>
                                <div class="symbol-name">N-Ary Union</div>
                            </li>
                            <li class="softnesttools_symbols">
                                <span class="softnesttools_symbols_copy" title="Right Normal Factor Semidirect Product">⋊</span>
                                <div class="symbol-name">Right Normal Factor Semidirect Product</div>
                            </li>
                            <li class="softnesttools_symbols">
                                <span class="softnesttools_symbols_copy" title="Double Union">⋓</span>
                                <div class="symbol-name">Double Union</div>
                            </li>
                            <li class="softnesttools_symbols">
                                <span class="softnesttools_symbols_copy" title="Less-Than Equal To or Greater-Than">⋚</span>
                                <div class="symbol-name">Less-Than Equal To or Greater-Than</div>
                            </li>
                            <li class="softnesttools_symbols">
                                <span class="softnesttools_symbols_copy" title="Not Square Image of or Equal To">⋣</span>
                                <div class="symbol-name">Not Square Image of or Equal To</div>
                            </li>
                            <li class="softnesttools_symbols">
                                <span class="softnesttools_symbols_copy" title="Not Normal Subgroup Of">⋪</span>
                                <div class="symbol-name">Not Normal Subgroup Of</div>
                            </li>
                            <li class="softnesttools_symbols">
                                <span class="softnesttools_symbols_copy" title="Superscript Right Parenthesis">⁾</span>
                                <div class="symbol-name">Superscript Right Parenthesis</div>
                            </li>
                            <li class="softnesttools_symbols">
                                <span class="softnesttools_symbols_copy" title="Greek Small Letter Delta">δ</span>
                                <div class="symbol-name">Delta</div>
                            </li>
                            <li class="softnesttools_symbols">
                                <span class="softnesttools_symbols_copy" title="Greek Small Letter Upsilon">υ</span>
                                <div class="symbol-name">Upsilon</div>
                            </li>
                            <li class="softnesttools_symbols">
                                <span class="softnesttools_symbols_copy" title="Small Hyphen-Minus">﹣</span>
                                <div class="symbol-name">Small Hyphen-Minus</div>
                            </li>
                            <li class="softnesttools_symbols">
                                <span class="softnesttools_symbols_copy" title="Double Integral">∬</span>
                                <div class="symbol-name">Double Integral</div>
                            </li>
                            <li class="softnesttools_symbols">
                                <span class="softnesttools_symbols_copy" title="Element Of">∈</span>
                                <div class="symbol-name">Element Of</div>
                            </li>
                            <li class="softnesttools_symbols">
                                <span class="softnesttools_symbols_copy" title="Ring Operator">∘</span>
                                <div class="symbol-name">Ring Operator</div>
                            </li>
                            <li class="softnesttools_symbols">
                                <span class="softnesttools_symbols_copy" title="Because">∵</span>
                                <div class="symbol-name">Because</div>
                            </li>
                            <li class="softnesttools_symbols">
                                <span class="softnesttools_symbols_copy" title="Approximately Equal To">≅</span>
                                <div class="symbol-name">Approximately Equal To</div>
                            </li>
                            <li class="softnesttools_symbols">
                                <span class="softnesttools_symbols_copy" title="Equals Colon">≕</span>
                                <div class="symbol-name">Equals Colon</div>
                            </li>
                            <li class="softnesttools_symbols">
                                <span class="softnesttools_symbols_copy" title="Greater-Than or Equal To">≥</span>
                                <div class="symbol-name">Greater-Than or Equal To</div>
                            </li>
                            <li class="softnesttools_symbols">
                                <span class="softnesttools_symbols_copy" title="Neither Greater-Than Nor Equal To">≵</span>
                                <div class="symbol-name">Neither Greater-Than Nor Equal To</div>
                            </li>
                            <li class="softnesttools_symbols">
                                <span class="softnesttools_symbols_copy" title="Not a Superset Of">⊅</span>
                                <div class="symbol-name">Not a Superset Of</div>
                            </li>
                            <li class="softnesttools_symbols">
                                <span class="softnesttools_symbols_copy" title="Circled Plus">⊕</span>
                                <div class="symbol-name">Circled Plus</div>
                            </li>
                            <li class="softnesttools_symbols">
                                <span class="softnesttools_symbols_copy" title="Up Tack">⊥</span>
                                <div class="symbol-name">Up Tack</div>
                            </li>
                            <li class="softnesttools_symbols">
                                <span class="softnesttools_symbols_copy" title="Contains As Normal Subgroup or Equal To">⊵</span>
                                <div class="symbol-name">Contains As Normal Subgroup or Equal To</div>
                            </li>
                            <li class="softnesttools_symbols">
                                <span class="softnesttools_symbols_copy" title="Dot Operator">⋅</span>
                                <div class="symbol-name">Dot Operator</div>
                            </li>
                            <li class="softnesttools_symbols">
                                <span class="softnesttools_symbols_copy" title="Equal and Parallel To">⋕</span>
                                <div class="symbol-name">Equal and Parallel To</div>
                            </li>
                            <li class="softnesttools_symbols">
                                <span class="softnesttools_symbols_copy" title="Greater-Than With Dot">⋥</span>
                                <div class="symbol-name">Greater-Than With Dot</div>
                            </li>
                            <li class="softnesttools_symbols">
                                <span class="softnesttools_symbols_copy" title="Greek Small Letter Nu">ν</span>
                                <div class="symbol-name">Nu</div>
                            </li>
                            <li class="softnesttools_symbols">
                                <span class="softnesttools_symbols_copy" title="Subscript Plus Sign">₊</span>
                                <div class="symbol-name">Subscript Plus Sign</div>
                            </li>
                            <li class="softnesttools_symbols">
                                <span class="softnesttools_symbols_copy" title="Left Arc Less-Than Bracket">⧞</span>
                                <div class="symbol-name">Left Arc Less-Than Bracket</div>
                            </li>
                            <li class="softnesttools_symbols">
                                <span class="softnesttools_symbols_copy" title="Complement">∁</span>
                                <div class="symbol-name">Complement</div>
                            </li>
                            <li class="softnesttools_symbols">
                                <span class="softnesttools_symbols_copy" title="N-Ary Summation">∑</span>
                                <div class="symbol-name">N-Ary Summation</div>
                            </li>
                            <li class="softnesttools_symbols">
                                <span class="softnesttools_symbols_copy" title="Parallel To">∥</span>
                                <div class="symbol-name">Parallel To</div>
                            </li>
                            <li class="softnesttools_symbols">
                                <span class="softnesttools_symbols_copy" title="Sine Wave">∾</span>
                                <div class="symbol-name">Sine Wave</div>
                            </li>
                            <li class="softnesttools_symbols">
                                <span class="softnesttools_symbols_copy" title="Geometrically Equivalent To">≎</span>
                                <div class="symbol-name">Geometrically Equivalent To</div>
                            </li>
                            <li class="softnesttools_symbols">
                                <span class="softnesttools_symbols_copy" title="Questioned Equal To">≞</span>
                                <div class="symbol-name">Questioned Equal To</div>
                            </li>
                            <li class="softnesttools_symbols">
                                <span class="softnesttools_symbols_copy" title="Not Less-Than">≮</span>
                                <div class="symbol-name">Not Less-Than</div>
                            </li>
                            <li class="softnesttools_symbols">
                                <span class="softnesttools_symbols_copy" title="Neither Less-Than Nor Equivalent To">≾</span>
                                <div class="symbol-name">Neither Less-Than Nor Equivalent To</div>
                            </li>
                            <li class="softnesttools_symbols">
                                <span class="softnesttools_symbols_copy" title="Multiset Union">⊎</span>
                                <div class="symbol-name">Multiset Union</div>
                            </li>
                            <li class="softnesttools_symbols">
                                <span class="softnesttools_symbols_copy" title="Squared Plus">⊞</span>
                                <div class="symbol-name">Squared Plus</div>
                            </li>
                            <li class="softnesttools_symbols">
                                <span class="softnesttools_symbols_copy" title="Does Not Prove">⊮</span>
                                <div class="symbol-name">Does Not Prove</div>
                            </li>
                            <li class="softnesttools_symbols">
                                <span class="softnesttools_symbols_copy" title="Right Angle With Arc">⊾</span>
                                <div class="symbol-name">Right Angle With Arc</div>
                            </li>
                            <li class="softnesttools_symbols">
                                <span class="softnesttools_symbols_copy" title="Curly Logical Or">⋎</span>
                                <div class="symbol-name">Curly Logical Or</div>
                            </li>
                            <li class="softnesttools_symbols">
                                <span class="softnesttools_symbols_copy" title="Equal To or Precedes">⋞</span>
                                <div class="symbol-name">Equal To or Precedes</div>
                            </li>
                            <li class="softnesttools_symbols">
                                <span class="softnesttools_symbols_copy" title="Vertical Ellipsis">⋮</span>
                                <div class="symbol-name">Vertical Ellipsis</div>
                            </li>
                            <li class="softnesttools_symbols">
                                <span class="softnesttools_symbols_copy" title="Greek Small Letter Theta">θ</span>
                                <div class="symbol-name">Theta</div>
                            </li>
                            <li class="softnesttools_symbols">
                                <span class="softnesttools_symbols_copy" title="Greek Small Letter Mu">μ</span>
                                <div class="symbol-name">Mu</div>
                            </li>
                            <li class="softnesttools_symbols">
                                <span class="softnesttools_symbols_copy" title="Greek Small Letter Omega">ω</span>
                                <div class="symbol-name">Omega</div>
                            </li>
                            <li class="softnesttools_symbols">
                                <span class="softnesttools_symbols_copy" title="Superscript Latin Small Letter N">ⁿ</span>
                                <div class="symbol-name">Superscript Latin Small Letter N</div>
                            </li>
                            <li class="softnesttools_symbols">
                                <span class="softnesttools_symbols_copy" title="Fullwidth Equals Sign">＝</span>
                                <div class="symbol-name">Fullwidth Equals Sign</div>
                            </li>
                            <li class="softnesttools_symbols">
                                <span class="softnesttools_symbols_copy" title="Infinity">∞</span>
                                <div class="symbol-name">Infinity</div>
                            </li>
                            <li class="softnesttools_symbols">
                                <span class="softnesttools_symbols_copy" title="Volume Integral">∰</span>
                                <div class="symbol-name">Volume Integral</div>
                            </li>
                            <li class="softnesttools_symbols">
                                <span class="softnesttools_symbols_copy" title="For All">∀</span>
                                <div class="symbol-name">For All</div>
                            </li>
                            <li class="softnesttools_symbols">
                                <span class="softnesttools_symbols_copy" title="Does Not Contain As Member">∌</span>
                                <div class="symbol-name">Does Not Contain As Member</div>
                            </li>
                            <li class="softnesttools_symbols">
                                <span class="softnesttools_symbols_copy" title="N-Ary Coproduct">∐</span>
                                <div class="symbol-name">N-Ary Coproduct</div>
                            </li>
                            <li class="softnesttools_symbols">
                                <span class="softnesttools_symbols_copy" title="Angle">∠</span>
                                <div class="symbol-name">Angle</div>
                            </li>
                            <li class="softnesttools_symbols">
                                <span class="softnesttools_symbols_copy" title="Does Not Divide">∤</span>
                                <div class="symbol-name">Does Not Divide</div>
                            </li>
                            <li class="softnesttools_symbols">
                                <span class="softnesttools_symbols_copy" title="Geometric Proportion">∹</span>
                                <div class="symbol-name">Geometric Proportion</div>
                            </li>
                            <li class="softnesttools_symbols">
                                <span class="softnesttools_symbols_copy" title="Reversed Tilde">∽</span>
                                <div class="symbol-name">Reversed Tilde</div>
                            </li>
                            <li class="softnesttools_symbols">
                                <span class="softnesttools_symbols_copy" title="Not Almost Equal To">≉</span>
                                <div class="symbol-name">Not Almost Equal To</div>
                            </li>
                            <li class="softnesttools_symbols">
                                <span class="softnesttools_symbols_copy" title="Equivalent To">≍</span>
                                <div class="symbol-name">Equivalent To</div>
                            </li>
                            <li class="softnesttools_symbols">
                                <span class="softnesttools_symbols_copy" title="Estimates">≙</span>
                                <div class="symbol-name">Estimates</div>
                            </li>
                            <li class="softnesttools_symbols">
                                <span class="softnesttools_symbols_copy" title="Equal To By Definition">≝</span>
                                <div class="symbol-name">Equal To By Definition</div>
                            </li>
                            <li class="softnesttools_symbols">
                                <span class="softnesttools_symbols_copy" title="Greater-Than But Not Equal To">≩</span>
                                <div class="symbol-name">Greater-Than But Not Equal To</div>
                            </li>
                            <li class="softnesttools_symbols">
                                <span class="softnesttools_symbols_copy" title="Not Equivalent To">≭</span>
                                <div class="symbol-name">Not Equivalent To</div>
                            </li>
                            <li class="softnesttools_symbols">
                                <span class="softnesttools_symbols_copy" title="Neither Less-Than Nor Greater-Than">≹</span>
                                <div class="symbol-name">Neither Less-Than Nor Greater-Than</div>
                            </li>
                            <li class="softnesttools_symbols">
                                <span class="softnesttools_symbols_copy" title="Succeeds or Equal To">≽</span>
                                <div class="symbol-name">Succeeds or Equal To</div>
                            </li>
                            <li class="softnesttools_symbols">
                                <span class="softnesttools_symbols_copy" title="Not a Superset of or Equal To">⊉</span>
                                <div class="symbol-name">Not a Superset of or Equal To</div>
                            </li>
                            <li class="softnesttools_symbols">
                                <span class="softnesttools_symbols_copy" title="Multiset Multiplication">⊍</span>
                                <div class="symbol-name">Multiset Multiplication</div>
                            </li>
                            <li class="softnesttools_symbols">
                                <span class="softnesttools_symbols_copy" title="Circled Dot Operator">⊙</span>
                                <div class="symbol-name">Circled Dot Operator</div>
                            </li>
                            <li class="softnesttools_symbols">
                                <span class="softnesttools_symbols_copy" title="Circled Dash">⊝</span>
                                <div class="symbol-name">Circled Dash</div>
                            </li>
                            <li class="softnesttools_symbols">
                                <span class="softnesttools_symbols_copy" title="Forces">⊩</span>
                                <div class="symbol-name">Forces</div>
                            </li>
                            <li class="softnesttools_symbols">
                                <span class="softnesttools_symbols_copy" title="Does Not Force">⊭</span>
                                <div class="symbol-name">Does Not Force</div>
                            </li>
                            <li class="softnesttools_symbols">
                                <span class="softnesttools_symbols_copy" title="Right Tack With Turnstile">⊹</span>
                                <div class="symbol-name">Right Tack With Turnstile</div>
                            </li>
                            <li class="softnesttools_symbols">
                                <span class="softnesttools_symbols_copy" title="Nor">⊽</span>
                                <div class="symbol-name">Nor</div>
                            </li>
                            <li class="softnesttools_symbols">
                                <span class="softnesttools_symbols_copy" title="Left Normal Factor Semidirect Product">⋉</span>
                                <div class="symbol-name">Left Normal Factor Semidirect Product</div>
                            </li>
                            <li class="softnesttools_symbols">
                                <span class="softnesttools_symbols_copy" title="Reversed Tilde Equals">⋍</span>
                                <div class="symbol-name">Reversed Tilde Equals</div>
                            </li>
                            <li class="softnesttools_symbols">
                                <span class="softnesttools_symbols_copy" title="Very Much Greater-Than">⋙</span>
                                <div class="symbol-name">Very Much Greater-Than</div>
                            </li>
                            <li class="softnesttools_symbols">
                                <span class="softnesttools_symbols_copy" title="Equal To or Greater-Than">⋝</span>
                                <div class="symbol-name">Equal To or Greater-Than</div>
                            </li>
                            <li class="softnesttools_symbols">
                                <span class="softnesttools_symbols_copy" title="Greater-Than But Not Equivalent To">⋩</span>
                                <div class="symbol-name">Greater-Than But Not Equivalent To</div>
                            </li>
                            <li class="softnesttools_symbols">
                                <span class="softnesttools_symbols_copy" title="Does Not Succeed or Equal">⋭</span>
                                <div class="symbol-name">Does Not Succeed or Equal</div>
                            </li>
                            <li class="softnesttools_symbols">
                                <span class="softnesttools_symbols_copy" title="Greek Small Letter Eta">η</span>
                                <div class="symbol-name">Eta</div>
                            </li>
                            <li class="softnesttools_symbols">
                                <span class="softnesttools_symbols_copy" title="Greek Small Letter Psi">ψ</span>
                                <div class="symbol-name">Psi</div>
                            </li>
                            <li class="softnesttools_symbols">
                                <span class="softnesttools_symbols_copy" title="Fullwidth Solidus">／</span>
                                <div class="symbol-name">Fullwidth Solidus</div>
                            </li>
                            <li class="softnesttools_symbols">
                                <span class="softnesttools_symbols_copy" title="Surface Integral">∯</span>
                                <div class="symbol-name">Surface Integral</div>
                            </li>
                            <li class="softnesttools_symbols">
                                <span class="softnesttools_symbols_copy" title="Contains As Member">∋</span>
                                <div class="symbol-name">Contains As Member</div>
                            </li>
                            <li class="softnesttools_symbols">
                                <span class="softnesttools_symbols_copy" title="Right Angle">∟</span>
                                <div class="symbol-name">Right Angle</div>
                            </li>
                            <li class="softnesttools_symbols">
                                <span class="softnesttools_symbols_copy" title="Dot Minus">∸</span>
                                <div class="symbol-name">Dot Minus</div>
                            </li>
                            <li class="softnesttools_symbols">
                                <span class="softnesttools_symbols_copy" title="Almost Equal To">≈</span>
                                <div class="symbol-name">Almost Equal To</div>
                            </li>
                            <li class="softnesttools_symbols">
                                <span class="softnesttools_symbols_copy" title="Ring Equal To">≘</span>
                                <div class="symbol-name">Ring Equal To</div>
                            </li>
                            <li class="softnesttools_symbols">
                                <span class="softnesttools_symbols_copy" title="Less-Than But Not Equal To">≨</span>
                                <div class="symbol-name">Less-Than But Not Equal To</div>
                            </li>
                            <li class="softnesttools_symbols">
                                <span class="softnesttools_symbols_copy" title="Neither Less-Than Nor Greater-Than">≸</span>
                                <div class="symbol-name">Neither Less-Than Nor Greater-Than</div>
                            </li>
                            <li class="softnesttools_symbols">
                                <span class="softnesttools_symbols_copy" title="Not a Subset of or Equal To">⊈</span>
                                <div class="symbol-name">Not a Subset of or Equal To</div>
                            </li>
                            <li class="softnesttools_symbols">
                                <span class="softnesttools_symbols_copy" title="Circled Division Slash">⊘</span>
                                <div class="symbol-name">Circled Division Slash</div>
                            </li>
                            <li class="softnesttools_symbols">
                                <span class="softnesttools_symbols_copy" title="True">⊨</span>
                                <div class="symbol-name">True</div>
                            </li>
                            <li class="softnesttools_symbols">
                                <span class="softnesttools_symbols_copy" title="Multimap">⊸</span>
                                <div class="symbol-name">Multimap</div>
                            </li>
                            <li class="softnesttools_symbols">
                                <span class="softnesttools_symbols_copy" title="Bowtie">⋈</span>
                                <div class="symbol-name">Bowtie</div>
                            </li>
                            <li class="softnesttools_symbols">
                                <span class="softnesttools_symbols_copy" title="Very Much Less-Than">⋘</span>
                                <div class="symbol-name">Very Much Less-Than</div>
                            </li>
                            <li class="softnesttools_symbols">
                                <span class="softnesttools_symbols_copy" title="Less-Than But Not Equivalent To">⋨</span>
                                <div class="symbol-name">Less-Than But Not Equivalent To</div>
                            </li>
                            <li class="softnesttools_symbols">
                                <span class="softnesttools_symbols_copy" title="Greek Small Letter Gamma">γ</span>
                                <div class="symbol-name">Gamma</div>
                            </li>
                            <li class="softnesttools_symbols">
                                <span class="softnesttools_symbols_copy" title="Greek Small Letter Kappa">κ</span>
                                <div class="symbol-name">Kappa</div>
                            </li>
                            <li class="softnesttools_symbols">
                                <span class="softnesttools_symbols_copy" title="Greek Small Letter Tau">τ</span>
                                <div class="symbol-name">Tau</div>
                            </li>
                            <li class="softnesttools_symbols">
                                <span class="softnesttools_symbols_copy" title="Superscript Minus">⁻</span>
                                <div class="symbol-name">Superscript Minus</div>
                            </li>
                            <li class="softnesttools_symbols">
                                <span class="softnesttools_symbols_copy" title="Small Plus Sign">﹢</span>
                                <div class="symbol-name">Small Plus Sign</div>
                            </li>
                            <li class="softnesttools_symbols">
                                <span class="softnesttools_symbols_copy" title="Plus-Minus Sign">±</span>
                                <div class="symbol-name">Plus-Minus Sign</div>
                            </li>
                            <li class="softnesttools_symbols">
                                <span class="softnesttools_symbols_copy" title="Integral">∫</span>
                                <div class="symbol-name">Integral</div>
                            </li>
                            <li class="softnesttools_symbols">
                                <span class="softnesttools_symbols_copy" title="Clockwise Contour Integral">∲</span>
                                <div class="symbol-name">Clockwise Contour Integral</div>
                            </li>
                            <li class="softnesttools_symbols">
                                <span class="softnesttools_symbols_copy" title="Nabla">∇</span>
                                <div class="symbol-name">Nabla</div>
                            </li>
                            <li class="softnesttools_symbols">
                                <span class="softnesttools_symbols_copy" title="End of Proof">∎</span>
                                <div class="symbol-name">End of Proof</div>
                            </li>
                            <li class="softnesttools_symbols">
                                <span class="softnesttools_symbols_copy" title="Asterisk Operator">∗</span>
                                <div class="symbol-name">Asterisk Operator</div>
                            </li>
                            <li class="softnesttools_symbols">
                                <span class="softnesttools_symbols_copy" title="Spherical Angle">∢</span>
                                <div class="symbol-name">Spherical Angle</div>
                            </li>
                            <li class="softnesttools_symbols">
                                <span class="softnesttools_symbols_copy" title="Therefore">∴</span>
                                <div class="symbol-name">Therefore</div>
                            </li>
                            <li class="softnesttools_symbols">
                                <span class="softnesttools_symbols_copy" title="Geometric Proportion">∻</span>
                                <div class="symbol-name">Geometric Proportion</div>
                            </li>
                            <li class="softnesttools_symbols">
                                <span class="softnesttools_symbols_copy" title="Not Almost Equal To">≄</span>
                                <div class="symbol-name">Not Almost Equal To</div>
                            </li>
                            <li class="softnesttools_symbols">
                                <span class="softnesttools_symbols_copy" title="Asymptotically Equal To">≋</span>
                                <div class="symbol-name">Asymptotically Equal To</div>
                            </li>
                            <li class="softnesttools_symbols">
                                <span class="softnesttools_symbols_copy" title="Colon Equals">≔</span>
                                <div class="symbol-name">Colon Equals</div>
                            </li>
                            <li class="softnesttools_symbols">
                                <span class="softnesttools_symbols_copy" title="Star Equals">≛</span>
                                <div class="symbol-name">Star Equals</div>
                            </li>
                            <li class="softnesttools_symbols">
                                <span class="softnesttools_symbols_copy" title="Less-Than or Equal To">≤</span>
                                <div class="symbol-name">Less-Than or Equal To</div>
                            </li>
                            <li class="softnesttools_symbols">
                                <span class="softnesttools_symbols_copy" title="Much Greater-Than">≫</span>
                                <div class="symbol-name">Much Greater-Than</div>
                            </li>
                            <li class="softnesttools_symbols">
                                <span class="softnesttools_symbols_copy" title="Neither Greater-Than Nor Equivalent To">≴</span>
                                <div class="symbol-name">Neither Greater-Than Nor Equivalent To</div>
                            </li>
                            <li class="softnesttools_symbols">
                                <span class="softnesttools_symbols_copy" title="Succeeds">≻</span>
                                <div class="symbol-name">Succeeds</div>
                            </li>
                            <li class="softnesttools_symbols">
                                <span class="softnesttools_symbols_copy" title="Not a Subset Of">⊄</span>
                                <div class="symbol-name">Not a Subset Of</div>
                            </li>
                            <li class="softnesttools_symbols">
                                <span class="softnesttools_symbols_copy" title="Superset of With Not Equal To">⊋</span>
                                <div class="symbol-name">Superset of With Not Equal To</div>
                            </li>
                            <li class="softnesttools_symbols">
                                <span class="softnesttools_symbols_copy" title="Square Cup">⊔</span>
                                <div class="symbol-name">Square Cup</div>
                            </li>
                            <li class="softnesttools_symbols">
                                <span class="softnesttools_symbols_copy" title="Circled Asterisk Operator">⊛</span>
                                <div class="symbol-name">Circled Asterisk Operator</div>
                            </li>
                            <li class="softnesttools_symbols">
                                <span class="softnesttools_symbols_copy" title="Down Tack">⊤</span>
                                <div class="symbol-name">Down Tack</div>
                            </li>
                            <li class="softnesttools_symbols">
                                <span class="softnesttools_symbols_copy" title="Double Vertical Bar Right Turnstile">⊫</span>
                                <div class="symbol-name">Double Vertical Bar Right Turnstile</div>
                            </li>
                            <li class="softnesttools_symbols">
                                <span class="softnesttools_symbols_copy" title="Normal Subgroup of or Equal To">⊴</span>
                                <div class="symbol-name">Normal Subgroup of or Equal To</div>
                            </li>
                            <li class="softnesttools_symbols">
                                <span class="softnesttools_symbols_copy" title="Xor">⊻</span>
                                <div class="symbol-name">Xor</div>
                            </li>
                            <li class="softnesttools_symbols">
                                <span class="softnesttools_symbols_copy" title="Diamond Operator">⋄</span>
                                <div class="symbol-name">Diamond Operator</div>
                            </li>
                            <li class="softnesttools_symbols">
                                <span class="softnesttools_symbols_copy" title="Left Semidirect Product">⋋</span>
                                <div class="symbol-name">Left Semidirect Product</div>
                            </li>
                            <li class="softnesttools_symbols">
                                <span class="softnesttools_symbols_copy" title="Pitchfork">⋔</span>
                                <div class="symbol-name">Pitchfork</div>
                            </li>
                            <li class="softnesttools_symbols">
                                <span class="softnesttools_symbols_copy" title="Greater-Than Equal To or Less-Than">⋛</span>
                                <div class="symbol-name">Greater-Than Equal To or Less-Than</div>
                            </li>
                            <li class="softnesttools_symbols">
                                <span class="softnesttools_symbols_copy" title="Not Square Original Of">⋤</span>
                                <div class="symbol-name">Not Square Original Of</div>
                            </li>
                            <li class="softnesttools_symbols">
                                <span class="softnesttools_symbols_copy" title="Does Not Succeed or Equal">⋫</span>
                                <div class="symbol-name">Does Not Succeed or Equal</div>
                            </li>
                            <li class="softnesttools_symbols">
                                <span class="softnesttools_symbols_copy" title="Greek Small Letter Zeta">ζ</span>
                                <div class="symbol-name">Zeta</div>
                            </li>
                            <li class="softnesttools_symbols">
                                <span class="softnesttools_symbols_copy" title="Greek Small Letter Lambda">λ</span>
                                <div class="symbol-name">Lambda</div>
                            </li>
                            <li class="softnesttools_symbols">
                                <span class="softnesttools_symbols_copy" title="Greek Small Letter Chi">χ</span>
                                <div class="symbol-name">Chi</div>
                            </li>
                            <li class="softnesttools_symbols">
                                <span class="softnesttools_symbols_copy" title="Superscript Equals Sign">⁼</span>
                                <div class="symbol-name">Superscript Equals Sign</div>
                            </li>
                            <li class="softnesttools_symbols">
                                <span class="softnesttools_symbols_copy" title="Fullwidth Hyphen-Minus">－</span>
                                <div class="symbol-name">Fullwidth Hyphen-Minus</div>
                            </li>
                            <li class="softnesttools_symbols">
                                <span class="softnesttools_symbols_copy" title="Multiplication Sign">×</span>
                                <div class="symbol-name">Multiplication Sign</div>
                            </li>
                            <li class="softnesttools_symbols">
                                <span class="softnesttools_symbols_copy" title="Contour Integral">∮</span>
                                <div class="symbol-name">Contour Integral</div>
                            </li>
                            <li class="softnesttools_symbols">
                                <span class="softnesttools_symbols_copy" title="Anticlockwise Contour Integral">∳</span>
                                <div class="symbol-name">Anticlockwise Contour Integral</div>
                            </li>
                            <li class="softnesttools_symbols">
                                <span class="softnesttools_symbols_copy" title="Small Element Of">∊</span>
                                <div class="symbol-name">Small Element Of</div>
                            </li>
                            <li class="softnesttools_symbols">
                                <span class="softnesttools_symbols_copy" title="N-Ary Product">∏</span>
                                <div class="symbol-name">N-Ary Product</div>
                            </li>
                            <li class="softnesttools_symbols">
                                <span class="softnesttools_symbols_copy" title="Proportional To">∝</span>
                                <div class="symbol-name">Proportional To</div>
                            </li>
                            <li class="softnesttools_symbols">
                                <span class="softnesttools_symbols_copy" title="Divides">∣</span>
                                <div class="symbol-name">Divides</div>
                            </li>
                            <li class="softnesttools_symbols">
                                <span class="softnesttools_symbols_copy" title="Proportion">∷</span>
                                <div class="symbol-name">Proportion</div>
                            </li>
                            <li class="softnesttools_symbols">
                                <span class="softnesttools_symbols_copy" title="Tilde Operator">∼</span>
                                <div class="symbol-name">Tilde Operator</div>
                            </li>
                            <li class="softnesttools_symbols">
                                <span class="softnesttools_symbols_copy" title="Not Approximately Equal To">≇</span>
                                <div class="symbol-name">Not Approximately Equal To</div>
                            </li>
                            <li class="softnesttools_symbols">
                                <span class="softnesttools_symbols_copy" title="All Equal To">≌</span>
                                <div class="symbol-name">All Equal To</div>
                            </li>
                            <li class="softnesttools_symbols">
                                <span class="softnesttools_symbols_copy" title="Ring Equal To">≗</span>
                                <div class="symbol-name">Ring Equal To</div>
                            </li>
                            <li class="softnesttools_symbols">
                                <span class="softnesttools_symbols_copy" title="Delta Equal To">≜</span>
                                <div class="symbol-name">Delta Equal To</div>
                            </li>
                            <li class="softnesttools_symbols">
                                <span class="softnesttools_symbols_copy" title="Greater-Than or Equal To">≧</span>
                                <div class="symbol-name">Greater-Than or Equal To</div>
                            </li>
                            <li class="softnesttools_symbols">
                                <span class="softnesttools_symbols_copy" title="Between">≬</span>
                                <div class="symbol-name">Between</div>
                            </li>
                            <li class="softnesttools_symbols">
                                <span class="softnesttools_symbols_copy" title="Greater-Than or Less-Than">≷</span>
                                <div class="symbol-name">Greater-Than or Less-Than</div>
                            </li>
                            <li class="softnesttools_symbols">
                                <span class="softnesttools_symbols_copy" title="Precedes or Equal To">≼</span>
                                <div class="symbol-name">Precedes or Equal To</div>
                            </li>
                            <li class="softnesttools_symbols">
                                <span class="softnesttools_symbols_copy" title="Superset of or Equal To">⊇</span>
                                <div class="symbol-name">Superset of or Equal To</div>
                            </li>
                            <li class="softnesttools_symbols">
                                <span class="softnesttools_symbols_copy" title="Multiset Union">⊌</span>
                                <div class="symbol-name">Multiset Union</div>
                            </li>
                            <li class="softnesttools_symbols">
                                <span class="softnesttools_symbols_copy" title="Circled Times">⊗</span>
                                <div class="symbol-name">Circled Times</div>
                            </li>
                            <li class="softnesttools_symbols">
                                <span class="softnesttools_symbols_copy" title="Circled Equals">⊜</span>
                                <div class="symbol-name">Circled Equals</div>
                            </li>
                            <li class="softnesttools_symbols">
                                <span class="softnesttools_symbols_copy" title="Models">⊧</span>
                                <div class="symbol-name">Models</div>
                            </li>
                            <li class="softnesttools_symbols">
                                <span class="softnesttools_symbols_copy" title="Does Not Prove">⊬</span>
                                <div class="symbol-name">Does Not Prove</div>
                            </li>
                            <li class="softnesttools_symbols">
                                <span class="softnesttools_symbols_copy" title="Original Of">⊷</span>
                                <div class="symbol-name">Original Of</div>
                            </li>
                            <li class="softnesttools_symbols">
                                <span class="softnesttools_symbols_copy" title="Nand">⊼</span>
                                <div class="symbol-name">Nand</div>
                            </li>
                            <li class="softnesttools_symbols">
                                <span class="softnesttools_symbols_copy" title="Division Times">⋇</span>
                                <div class="symbol-name">Division Times</div>
                            </li>
                            <li class="softnesttools_symbols">
                                <span class="softnesttools_symbols_copy" title="Right Semidirect Product">⋌</span>
                                <div class="symbol-name">Right Semidirect Product</div>
                            </li>
                            <li class="softnesttools_symbols">
                                <span class="softnesttools_symbols_copy" title="Greater-Than With Dot">⋗</span>
                                <div class="symbol-name">Greater-Than With Dot</div>
                            </li>
                            <li class="softnesttools_symbols">
                                <span class="softnesttools_symbols_copy" title="Equal To or Less-Than">⋜</span>
                                <div class="symbol-name">Equal To or Less-Than</div>
                            </li>
                            <li class="softnesttools_symbols">
                                <span class="softnesttools_symbols_copy" title="Greater-Than But Not Equivalent To">⋧</span>
                                <div class="symbol-name">Greater-Than But Not Equivalent To</div>
                            </li>
                            <li class="softnesttools_symbols">
                                <span class="softnesttools_symbols_copy" title="Does Not Succeed or Equal">⋬</span>
                                <div class="symbol-name">Does Not Succeed or Equal</div>
                            </li>
                            <li class="softnesttools_symbols">
                                <span class="softnesttools_symbols_copy" title="Greek Small Letter Xi">ξ</span>
                                <div class="symbol-name">Xi</div>
                            </li>
                            <li class="softnesttools_symbols">
                                <span class="softnesttools_symbols_copy" title="Subscript Minus Sign">₋</span>
                                <div class="symbol-name">Subscript Minus Sign</div>
                            </li>
                            <li class="softnesttools_symbols">
                                <span class="softnesttools_symbols_copy" title="Mathematical Italic Small Pi">𝜋</span>
                                <div class="symbol-name">Mathematical Italic Small Pi</div>
                            </li>
                            <li class="softnesttools_symbols">
                                <span class="softnesttools_symbols_copy" title="Partial Differential">∂</span>
                                <div class="symbol-name">Partial Differential</div>
                            </li>
                            <li class="softnesttools_symbols">
                                <span class="softnesttools_symbols_copy" title="Minus Sign">−</span>
                                <div class="symbol-name">Minus Sign</div>
                            </li>
                            <li class="softnesttools_symbols">
                                <span class="softnesttools_symbols_copy" title="Not Parallel To">∦</span>
                                <div class="symbol-name">Not Parallel To</div>
                            </li>
                            <li class="softnesttools_symbols">
                                <span class="softnesttools_symbols_copy" title="Sine Wave">∿</span>
                                <div class="symbol-name">Sine Wave</div>
                            </li>
                            <li class="softnesttools_symbols">
                                <span class="softnesttools_symbols_copy" title="Geometrically Equivalent To">≏</span>
                                <div class="symbol-name">Geometrically Equivalent To</div>
                            </li>
                            <li class="softnesttools_symbols">
                                <span class="softnesttools_symbols_copy" title="Questioned Equal To">≟</span>
                                <div class="symbol-name">Questioned Equal To</div>
                            </li>
                            <li class="softnesttools_symbols">
                                <span class="softnesttools_symbols_copy" title="Not Greater-Than">≯</span>
                                <div class="symbol-name">Not Greater-Than</div>
                            </li>
                            <li class="softnesttools_symbols">
                                <span class="softnesttools_symbols_copy" title="Neither Greater-Than Nor Equivalent To">≿</span>
                                <div class="symbol-name">Neither Greater-Than Nor Equivalent To</div>
                            </li>
                            <li class="softnesttools_symbols">
                                <span class="softnesttools_symbols_copy" title="Square Image Of">⊏</span>
                                <div class="symbol-name">Square Image Of</div>
                            </li>
                            <li class="softnesttools_symbols">
                                <span class="softnesttools_symbols_copy" title="Squared Minus">⊟</span>
                                <div class="symbol-name">Squared Minus</div>
                            </li>
                            <li class="softnesttools_symbols">
                                <span class="softnesttools_symbols_copy" title="Vertical Bar Double Left Turnstile">⊯</span>
                                <div class="symbol-name">Vertical Bar Double Left Turnstile</div>
                            </li>
                            <li class="softnesttools_symbols">
                                <span class="softnesttools_symbols_copy" title="Right Triangle">⊿</span>
                                <div class="symbol-name">Right Triangle</div>
                            </li>
                            <li class="softnesttools_symbols">
                                <span class="softnesttools_symbols_copy" title="Curly Logical And">⋏</span>
                                <div class="symbol-name">Curly Logical And</div>
                            </li>
                            <li class="softnesttools_symbols">
                                <span class="softnesttools_symbols_copy" title="Equal To or Succeeds">⋟</span>
                                <div class="symbol-name">Equal To or Succeeds</div>
                            </li>
                            <li class="softnesttools_symbols">
                                <span class="softnesttools_symbols_copy" title="Midline Horizontal Ellipsis">⋯</span>
                                <div class="symbol-name">Midline Horizontal Ellipsis</div>
                            </li>


                            <li class="h2copy">
                                <h2>Punctuation Symbols</h2>
                                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quo enim repudiandae et omnis, est velit ratione dolore
                                    maxime, non aliquam dolor laboriosam.</p>
                            </li>
                            <li class="softnesttools_symbols">
                                <span class="softnesttools_symbols_copy" title="Middle Dot">·</span>
                                <div class="symbol-name">Middle Dot</div>
                            </li>
                            <li class="softnesttools_symbols">
                                <span class="softnesttools_symbols_copy" title="Non-Breaking Hyphen">‑</span>
                                <div class="symbol-name">Non-Breaking Hyphen</div>
                            </li>
                            <li class="softnesttools_symbols">
                                <span class="softnesttools_symbols_copy" title="Figure Dash">‒</span>
                                <div class="symbol-name">Figure Dash</div>
                            </li>
                            <li class="softnesttools_symbols">
                                <span class="softnesttools_symbols_copy" title="Modifier Letter Minus Sign">˗</span>
                                <div class="symbol-name">Modifier Letter Minus Sign</div>
                            </li>
                            <li class="softnesttools_symbols">
                                <span class="softnesttools_symbols_copy" title="Breve">˘</span>
                                <div class="symbol-name">Breve</div>
                            </li>
                            <li class="softnesttools_symbols">
                                <span class="softnesttools_symbols_copy" title="Dot Above">˙</span>
                                <div class="symbol-name">Dot Above</div>
                            </li>
                            <li class="softnesttools_symbols">
                                <span class="softnesttools_symbols_copy" title="Ring Above">˚</span>
                                <div class="symbol-name">Ring Above</div>
                            </li>
                            <li class="softnesttools_symbols">
                                <span class="softnesttools_symbols_copy" title="Ogonek">˛</span>
                                <div class="symbol-name">Ogonek</div>
                            </li>
                            <li class="softnesttools_symbols">
                                <span class="softnesttools_symbols_copy" title="Small Tilde">˜</span>
                                <div class="symbol-name">Small Tilde</div>
                            </li>
                            <li class="softnesttools_symbols">
                                <span class="softnesttools_symbols_copy" title="Double Acute Accent">˝</span>
                                <div class="symbol-name">Double Acute Accent</div>
                            </li>
                            <li class="softnesttools_symbols">
                                <span class="softnesttools_symbols_copy" title="Modifier Letter Small Gamma">ˠ</span>
                                <div class="symbol-name">Modifier Letter Small Gamma</div>
                            </li>
                            <li class="softnesttools_symbols">
                                <span class="softnesttools_symbols_copy" title="Fullwidth Tilde">～</span>
                                <div class="symbol-name">Fullwidth Tilde</div>
                            </li>
                            <li class="softnesttools_symbols">
                                <span class="softnesttools_symbols_copy" title="Inverted Question Mark">¿</span>
                                <div class="symbol-name">Inverted Question Mark</div>
                            </li>
                            <li class="softnesttools_symbols">
                                <span class="softnesttools_symbols_copy" title="Small Comma">﹐</span>
                                <div class="symbol-name">Small Comma</div>
                            </li>
                            <li class="softnesttools_symbols">
                                <span class="softnesttools_symbols_copy" title="Small Full Stop">﹒</span>
                                <div class="symbol-name">Small Full Stop</div>
                            </li>
                            <li class="softnesttools_symbols">
                                <span class="softnesttools_symbols_copy" title="Small Semicolon">﹔</span>
                                <div class="symbol-name">Small Semicolon</div>
                            </li>
                            <li class="softnesttools_symbols">
                                <span class="softnesttools_symbols_copy" title="Small Colon">﹕</span>
                                <div class="symbol-name">Small Colon</div>
                            </li>
                            <li class="softnesttools_symbols">
                                <span class="softnesttools_symbols_copy" title="Fullwidth Comma">，</span>
                                <div class="symbol-name">Fullwidth Comma</div>
                            </li>
                            <li class="softnesttools_symbols">
                                <span class="softnesttools_symbols_copy" title="Fullwidth Full Stop">．</span>
                                <div class="symbol-name">Fullwidth Full Stop</div>
                            </li>
                            <li class="softnesttools_symbols">
                                <span class="softnesttools_symbols_copy" title="Fullwidth Colon">：</span>
                                <div class="symbol-name">Fullwidth Colon</div>
                            </li>
                            <li class="softnesttools_symbols">
                                <span class="softnesttools_symbols_copy" title="En Dash">–</span>
                                <div class="symbol-name">En Dash</div>
                            </li>
                            <li class="softnesttools_symbols">
                                <span class="softnesttools_symbols_copy" title="Em Dash">—</span>
                                <div class="symbol-name">Em Dash</div>
                            </li>
                            <li class="softnesttools_symbols">
                                <span class="softnesttools_symbols_copy" title="Horizontal Bar">―</span>
                                <div class="symbol-name">Horizontal Bar</div>
                            </li>
                            <li class="softnesttools_symbols">
                                <span class="softnesttools_symbols_copy" title="Double Vertical Line">‖</span>
                                <div class="symbol-name">Double Vertical Line</div>
                            </li>
                            <li class="softnesttools_symbols">
                                <span class="softnesttools_symbols_copy" title="Dagger">†</span>
                                <div class="symbol-name">Dagger</div>
                            </li>
                            <li class="softnesttools_symbols">
                                <span class="softnesttools_symbols_copy" title="Double Dagger">‡</span>
                                <div class="symbol-name">Double Dagger</div>
                            </li>
                            <li class="softnesttools_symbols">
                                <span class="softnesttools_symbols_copy" title="Per Mille Sign">‰</span>
                                <div class="symbol-name">Per Mille Sign</div>
                            </li>
                            <li class="softnesttools_symbols">
                                <span class="softnesttools_symbols_copy" title="Per Ten Thousand Sign">‱</span>
                                <div class="symbol-name">Per Ten Thousand Sign</div>
                            </li>
                            <li class="softnesttools_symbols">
                                <span class="softnesttools_symbols_copy" title="Modifier Letter Small H">ʰ</span>
                                <div class="symbol-name">Modifier Letter Small H</div>
                            </li>
                            <li class="softnesttools_symbols">
                                <span class="softnesttools_symbols_copy" title="Modifier Letter Small H With Hook">ʱ</span>
                                <div class="symbol-name">Modifier Letter Small H With Hook</div>
                            </li>
                            <li class="softnesttools_symbols">
                                <span class="softnesttools_symbols_copy" title="Modifier Letter Small J">ʲ</span>
                                <div class="symbol-name">Modifier Letter Small J</div>
                            </li>
                            <li class="softnesttools_symbols">
                                <span class="softnesttools_symbols_copy" title="Modifier Letter Small R">ʳ</span>
                                <div class="symbol-name">Modifier Letter Small R</div>
                            </li>
                            <li class="softnesttools_symbols">
                                <span class="softnesttools_symbols_copy" title="Modifier Letter Small Turned R">ʴ</span>
                                <div class="symbol-name">Modifier Letter Small Turned R</div>
                            </li>
                            <li class="softnesttools_symbols">
                                <span class="softnesttools_symbols_copy" title="Modifier Letter Small Turned R With Hook">ʵ</span>
                                <div class="symbol-name">Modifier Letter Small Turned R With Hook</div>
                            </li>
                            <li class="softnesttools_symbols">
                                <span class="softnesttools_symbols_copy" title="Modifier Letter Small Capital Inverted R">ʶ</span>
                                <div class="symbol-name">Modifier Letter Small Capital Inverted R</div>
                            </li>
                            <li class="softnesttools_symbols">
                                <span class="softnesttools_symbols_copy" title="Modifier Letter Small W">ʷ</span>
                                <div class="symbol-name">Modifier Letter Small W</div>
                            </li>
                            <li class="softnesttools_symbols">
                                <span class="softnesttools_symbols_copy" title="Modifier Letter Small Y">ʸ</span>
                                <div class="symbol-name">Modifier Letter Small Y</div>
                            </li>
                            <li class="softnesttools_symbols">
                                <span class="softnesttools_symbols_copy" title="Low Line">‗</span>
                                <div class="symbol-name">Low Line</div>
                            </li>
                            <li class="softnesttools_symbols">
                                <span class="softnesttools_symbols_copy" title="Left Single Quotation Mark">‘</span>
                                <div class="symbol-name">Left Single Quotation Mark</div>
                            </li>
                            <li class="softnesttools_symbols">
                                <span class="softnesttools_symbols_copy" title="Right Single Quotation Mark">’</span>
                                <div class="symbol-name">Right Single Quotation Mark</div>
                            </li>
                            <li class="softnesttools_symbols">
                                <span class="softnesttools_symbols_copy" title="Single Low-9 Quotation Mark">‚</span>
                                <div class="symbol-name">Single Low-9 Quotation Mark</div>
                            </li>
                            <li class="softnesttools_symbols">
                                <span class="softnesttools_symbols_copy" title="Single High-Reversed-9 Quotation Mark">‛</span>
                                <div class="symbol-name">Single High-Reversed-9 Quotation Mark</div>
                            </li>
                            <li class="softnesttools_symbols">
                                <span class="softnesttools_symbols_copy" title="Left Double Quotation Mark">“</span>
                                <div class="symbol-name">Left Double Quotation Mark</div>
                            </li>
                            <li class="softnesttools_symbols">
                                <span class="softnesttools_symbols_copy" title="Right Double Quotation Mark">”</span>
                                <div class="symbol-name">Right Double Quotation Mark</div>
                            </li>
                            <li class="softnesttools_symbols">
                                <span class="softnesttools_symbols_copy" title="Double Low-9 Quotation Mark">„</span>
                                <div class="symbol-name">Double Low-9 Quotation Mark</div>
                            </li>
                            <li class="softnesttools_symbols">
                                <span class="softnesttools_symbols_copy" title="Double High-Reversed-9 Quotation Mark">‟</span>
                                <div class="symbol-name">Double High-Reversed-9 Quotation Mark</div>
                            </li>
                            <li class="softnesttools_symbols">
                                <span class="softnesttools_symbols_copy" title="Bullet">•</span>
                                <div class="symbol-name">Bullet</div>
                            </li>
                            <li class="softnesttools_symbols">
                                <span class="softnesttools_symbols_copy" title="Triangular Bullet">‣</span>
                                <div class="symbol-name">Triangular Bullet</div>
                            </li>
                            <li class="softnesttools_symbols">
                                <span class="softnesttools_symbols_copy" title="One Dot Leader">․</span>
                                <div class="symbol-name">One Dot Leader</div>
                            </li>
                            <li class="softnesttools_symbols">
                                <span class="softnesttools_symbols_copy" title="Two Dot Leader">‥</span>
                                <div class="symbol-name">Two Dot Leader</div>
                            </li>
                            <li class="softnesttools_symbols">
                                <span class="softnesttools_symbols_copy" title="Horizontal Ellipsis">…</span>
                                <div class="symbol-name">Horizontal Ellipsis</div>
                            </li>
                            <li class="softnesttools_symbols">
                                <span class="softnesttools_symbols_copy" title="Hyphenation Point">‧</span>
                                <div class="symbol-name">Hyphenation Point</div>
                            </li>
                            <li class="softnesttools_symbols">
                                <span class="softnesttools_symbols_copy" title="Prime">′</span>
                                <div class="symbol-name">Prime</div>
                            </li>
                            <li class="softnesttools_symbols">
                                <span class="softnesttools_symbols_copy" title="Double Prime">″</span>
                                <div class="symbol-name">Double Prime</div>
                            </li>
                            <li class="softnesttools_symbols">
                                <span class="softnesttools_symbols_copy" title="Triple Prime">‴</span>
                                <div class="symbol-name">Triple Prime</div>
                            </li>
                            <li class="softnesttools_symbols">
                                <span class="softnesttools_symbols_copy" title="Reversed Prime">‵</span>
                                <div class="symbol-name">Reversed Prime</div>
                            </li>
                            <li class="softnesttools_symbols">
                                <span class="softnesttools_symbols_copy" title="Reversed Double Prime">‶</span>
                                <div class="symbol-name">Reversed Double Prime</div>
                            </li>
                            <li class="softnesttools_symbols">
                                <span class="softnesttools_symbols_copy" title="Reversed Triple Prime">‷</span>
                                <div class="symbol-name">Reversed Triple Prime</div>
                            </li>
                            <li class="softnesttools_symbols">
                                <span class="softnesttools_symbols_copy" title="Heavy Single Turned Comma Quotation Mark Ornament">❛</span>
                                <div class="symbol-name">Heavy Single Turned Comma Quotation Mark Ornament</div>
                            </li>
                            <li class="softnesttools_symbols">
                                <span class="softnesttools_symbols_copy" title="Heavy Single Comma Quotation Mark Ornament">❜</span>
                                <div class="symbol-name">Heavy Single Comma Quotation Mark Ornament</div>
                            </li>
                            <li class="softnesttools_symbols">
                                <span class="softnesttools_symbols_copy" title="Heavy Double Turned Comma Quotation Mark Ornament">❝</span>
                                <div class="symbol-name">Heavy Double Turned Comma Quotation Mark Ornament</div>
                            </li>
                            <li class="softnesttools_symbols">
                                <span class="softnesttools_symbols_copy" title="Heavy Double Comma Quotation Mark Ornament">❞</span>
                                <div class="symbol-name">Heavy Double Comma Quotation Mark Ornament</div>
                            </li>
                            <li class="softnesttools_symbols">
                                <span class="softnesttools_symbols_copy" title="Modifier Letter Prime">ʹ</span>
                                <div class="symbol-name">Modifier Letter Prime</div>
                            </li>
                            <li class="softnesttools_symbols">
                                <span class="softnesttools_symbols_copy" title="Modifier Letter Double Prime">ʺ</span>
                                <div class="symbol-name">Modifier Letter Double Prime</div>
                            </li>
                            <li class="softnesttools_symbols">
                                <span class="softnesttools_symbols_copy" title="Modifier Letter Turned Comma">ʻ</span>
                                <div class="symbol-name">Modifier Letter Turned Comma</div>
                            </li>
                            <li class="softnesttools_symbols">
                                <span class="softnesttools_symbols_copy" title="Modifier Letter Apostrophe">ʼ</span>
                                <div class="symbol-name">Modifier Letter Apostrophe</div>
                            </li>
                            <li class="softnesttools_symbols">
                                <span class="softnesttools_symbols_copy" title="Modifier Letter Reversed Comma">ʽ</span>
                                <div class="symbol-name">Modifier Letter Reversed Comma</div>
                            </li>
                            <li class="softnesttools_symbols">
                                <span class="softnesttools_symbols_copy" title="Modifier Letter Right Half Ring">ʾ</span>
                                <div class="symbol-name">Modifier Letter Right Half Ring</div>
                            </li>
                            <li class="softnesttools_symbols">
                                <span class="softnesttools_symbols_copy" title="Modifier Letter Left Half Ring">ʿ</span>
                                <div class="symbol-name">Modifier Letter Left Half Ring</div>
                            </li>
                            <li class="softnesttools_symbols">
                                <span class="softnesttools_symbols_copy" title="Modifier Letter Glottal Stop">ˀ</span>
                                <div class="symbol-name">Modifier Letter Glottal Stop</div>
                            </li>
                            <li class="softnesttools_symbols">
                                <span class="softnesttools_symbols_copy" title="Modifier Letter Reversed Glottal Stop">ˁ</span>
                                <div class="symbol-name">Modifier Letter Reversed Glottal Stop</div>
                            </li>
                            <li class="softnesttools_symbols">
                                <span class="softnesttools_symbols_copy" title="Modifier Letter Left Arrowhead">˂</span>
                                <div class="symbol-name">Modifier Letter Left Arrowhead</div>
                            </li>
                            <li class="softnesttools_symbols">
                                <span class="softnesttools_symbols_copy" title="Modifier Letter Right Arrowhead">˃</span>
                                <div class="symbol-name">Modifier Letter Right Arrowhead</div>
                            </li>
                            <li class="softnesttools_symbols">
                                <span class="softnesttools_symbols_copy" title="Modifier Letter Up Arrowhead">˄</span>
                                <div class="symbol-name">Modifier Letter Up Arrowhead</div>
                            </li>
                            <li class="softnesttools_symbols">
                                <span class="softnesttools_symbols_copy" title="Modifier Letter Down Arrowhead">˅</span>
                                <div class="symbol-name">Modifier Letter Down Arrowhead</div>
                            </li>
                            <li class="softnesttools_symbols">
                                <span class="softnesttools_symbols_copy" title="Modifier Letter Circumflex Accent">ˆ</span>
                                <div class="symbol-name">Modifier Letter Circumflex Accent</div>
                            </li>
                            <li class="softnesttools_symbols">
                                <span class="softnesttools_symbols_copy" title="Caron">ˇ</span>
                                <div class="symbol-name">Caron</div>
                            </li>
                            <li class="softnesttools_symbols">
                                <span class="softnesttools_symbols_copy" title="Modifier Letter Vertical Line">ˈ</span>
                                <div class="symbol-name">Modifier Letter Vertical Line</div>
                            </li>
                            <li class="softnesttools_symbols">
                                <span class="softnesttools_symbols_copy" title="Modifier Letter Macron">ˉ</span>
                                <div class="symbol-name">Modifier Letter Macron</div>
                            </li>
                            <li class="softnesttools_symbols">
                                <span class="softnesttools_symbols_copy" title="Modifier Letter Acute Accent">ˊ</span>
                                <div class="symbol-name">Modifier Letter Acute Accent</div>
                            </li>
                            <li class="softnesttools_symbols">
                                <span class="softnesttools_symbols_copy" title="Modifier Letter Grave Accent">ˋ</span>
                                <div class="symbol-name">Modifier Letter Grave Accent</div>
                            </li>
                            <li class="softnesttools_symbols">
                                <span class="softnesttools_symbols_copy" title="Modifier Letter Low Vertical Line">ˌ</span>
                                <div class="symbol-name">Modifier Letter Low Vertical Line</div>
                            </li>
                            <li class="softnesttools_symbols">
                                <span class="softnesttools_symbols_copy" title="Modifier Letter Low Macron">ˍ</span>
                                <div class="symbol-name">Modifier Letter Low Macron</div>
                            </li>
                            <li class="softnesttools_symbols">
                                <span class="softnesttools_symbols_copy" title="Modifier Letter Low Grave Accent">ˎ</span>
                                <div class="symbol-name">Modifier Letter Low Grave Accent</div>
                            </li>
                            <li class="softnesttools_symbols">
                                <span class="softnesttools_symbols_copy" title="Modifier Letter Low Acute Accent">ˏ</span>
                                <div class="symbol-name">Modifier Letter Low Acute Accent</div>
                            </li>
                            <li class="softnesttools_symbols">
                                <span class="softnesttools_symbols_copy" title="Modifier Letter Triangular Colon">ː</span>
                                <div class="symbol-name">Modifier Letter Triangular Colon</div>
                            </li>
                            <li class="softnesttools_symbols">
                                <span class="softnesttools_symbols_copy" title="Modifier Letter Half Triangular Colon">ˑ</span>
                                <div class="symbol-name">Modifier Letter Half Triangular Colon</div>
                            </li>
                            <li class="softnesttools_symbols">
                                <span class="softnesttools_symbols_copy" title="Modifier Letter Centered Right Half Ring">˒</span>
                                <div class="symbol-name">Modifier Letter Centered Right Half Ring</div>
                            </li>
                            <li class="softnesttools_symbols">
                                <span class="softnesttools_symbols_copy" title="Modifier Letter Centered Left Half Ring">˓</span>
                                <div class="symbol-name">Modifier Letter Centered Left Half Ring</div>
                            </li>
                            <li class="softnesttools_symbols">
                                <span class="softnesttools_symbols_copy" title="Modifier Letter Up Tack">˔</span>
                                <div class="symbol-name">Modifier Letter Up Tack</div>
                            </li>
                            <li class="softnesttools_symbols">
                                <span class="softnesttools_symbols_copy" title="Modifier Letter Down Tack">˕</span>
                                <div class="symbol-name">Modifier Letter Down Tack</div>
                            </li>
                            <li class="softnesttools_symbols">
                                <span class="softnesttools_symbols_copy" title="Modifier Letter Plus Sign">˖</span>
                                <div class="symbol-name">Modifier Letter Plus Sign</div>
                            </li>
                            <li class="softnesttools_symbols">
                                <span class="softnesttools_symbols_copy" title="Fullwidth Semicolon">；</span>
                                <div class="symbol-name">Fullwidth Semicolon</div>
                            </li>
                            <li class="softnesttools_symbols">
                                <span class="softnesttools_symbols_copy" title="Ideographic Comma">、</span>
                                <div class="symbol-name">Ideographic Comma</div>
                            </li>
                            <li class="softnesttools_symbols">
                                <span class="softnesttools_symbols_copy" title="Ideographic Full Stop">。</span>
                                <div class="symbol-name">Ideographic Full Stop</div>
                            </li>
                            <li class="softnesttools_symbols">
                                <span class="softnesttools_symbols_copy" title="Ditto Mark">〃</span>
                                <div class="symbol-name">Ditto Mark</div>
                            </li>
                            <li class="softnesttools_symbols">
                                <span class="softnesttools_symbols_copy" title="Ideographic Left Corner Bracket">〝</span>
                                <div class="symbol-name">Ideographic Left Corner Bracket</div>
                            </li>
                            <li class="softnesttools_symbols">
                                <span class="softnesttools_symbols_copy" title="Ideographic Right Corner Bracket">〞</span>
                                <div class="symbol-name">Ideographic Right Corner Bracket</div>
                            </li>
                            <li class="softnesttools_symbols">
                                <span class="softnesttools_symbols_copy" title="Presentation Form For Vertical Two Dot Leader">︰</span>
                                <div class="symbol-name">Presentation Form For Vertical Two Dot Leader</div>
                            </li>
                            <li class="softnesttools_symbols">
                                <span class="softnesttools_symbols_copy" title="Fullwidth Exclamation Mark">！</span>
                                <div class="symbol-name">Fullwidth Exclamation Mark</div>
                            </li>

                            
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
