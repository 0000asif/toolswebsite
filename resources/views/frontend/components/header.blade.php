@php
    use App\Models\Setting;
    use App\Models\BatchCategory;
    $setting = Setting::first();
@endphp

<style>
   button.search_button {
    border: none;
    background: no-repeat;
    /* padding: 0 0 0px 13px; */
}
.perfect_search1 {
    border: none;
    border-radius: 17px;
    padding: 5px 10px;
    width: 250px;
}
.header_search {
    display: inline-block;
    margin-left: 8px;
    border: 1px solid #ddd;
    border-radius: 14px;
}


 .header_search_mobile {
        display: flex;
        justify-content: center;
        align-items: center;
        width: 100%;
        padding: 10px;
    }

    .search-wrapper {
        display: flex;
        width: 100%;
        max-width: 400px;
        border: 1px solid #ccc;
        border-radius: 5px;
        overflow: hidden;
    }

    .perfect_search {
        flex: 1;
        padding: 10px;
        border: none;
        outline: none;
    }

    #home_search {
        background: #007bff;
        border: none;
        color: white;
        padding: 10px 15px;
        cursor: pointer;
        display: flex;
        align-items: center;
        justify-content: center;
    }

    #home_search i {
        font-size: 16px;
    }

    @media (max-width: 768px) {
        .header_search_mobile {
            display: flex !important;
        }
    }
    ul.sub_menu {
    width: 250px;
    overflow: scroll;
}
</style>
<!-- ======= Top Header ======= -->



<!-- ======= Header ======= -->
<header id="header" class="header sticky-top">
    <div class="container container-xl d-flex align-items-center justify-content-between">
        <div>
            <div>
                <a href="#">
                    {{-- <img style="max-width:200px;" class="" src="{{ asset('image/setting/' . $setting->logo) }}"
                        alt="Logo" /> --}}
                        <h4 class="site_logo">SoftNestTools</h4>
                </a>
                {{-- <div class="header_search">
                    <input type="text" id="search_value" class="perfect_search1" placeholder="সার্চ করুন">
                    <button type="submit" id="" class="search_button home_search_button"><i class="bi bi-search"></i></button>
                </div> --}}
            </div>
        </div>
        <div class="d-flex align-items-center justify-content-between">
            <nav id="navbar" class="navbar">
                <div id="overlay"></div>
                <ul>
                    <li>
                        @php
                            $tools = App\Models\Blog::where('category_id','12')->where('status','1')->get();
                            $games = App\Models\Blog::where('category_id','13')->where('status','1')->get();
                            $jobs = App\Models\Blog::where('category_id','8')->where('status','1')->get();
                        @endphp
                        <div class="ncc-main-menu">
                            <ul class="nav navbar-nav">
                                <li><a href="{{ url('/') }}">Home </a></li>
                                <li><a href="{{ route('blogs') }}"> All Tools </a></li>

                                <li><a href="#"> Job ▼</a>
                                    <ul class="sub_menu">
                                        @foreach ($jobs as $item)
                                        <li><a href="{{ route('ViewSingleTools',$item->slug) }}"> {{ $item->title ?? "" }} </a>
                                        @endforeach
                                    </ul>
                                </li>

                                <li><a href="#"> Icone & Emoji ▼</a>
                                    <ul class="sub_menu">
                                        @foreach ($tools as $item)
                                        <li><a href="{{ route('ViewSingleTools',$item->slug) }}"> {{ $item->title ?? "" }} </a>
                                        @endforeach
                                    </ul>
                                </li>

                                <li><a href="#"> Game ▼</a>
                                    <ul class="sub_menu">
                                        @foreach ($games as $item)
                                        <li><a href="{{ route('ViewSingleTools',$item->slug) }}"> {{ $item->title ?? "" }} </a>
                                        @endforeach
                                    </ul>
                                </li>
                    </li>
                </ul>
        </div>
        </li>
        <li class="d-lg-flex d-block align-items-center">
        </li>
        </ul>
        </nav><!-- .navbar -->
        <div id="wrapper">
            <div id="iconId" class="circle icon">
                <span class="line top"></span>
                <span class="line middle"></span>
                <span class="line bottom"></span>
            </div>
        </div>
    </div>

    </div>



</header>

