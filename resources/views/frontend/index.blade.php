@extends('frontend.components.front-master')
@section('front_content')
    <!-- ======= Hero Section Slider ======= -->
    @include('frontend.components.slider')
    <!-- ======= Hero Section Slider ======= -->

    <!-- ======= Top Category Name  ======= -->
    <section class="course-home-section home_section_main" id="catSection" style="position: relative; padding-top: 95px;">
        <div class="o_we_shape o_illustration_doodle_03"
            style="background-image:  url('public/images/03.svg'); 
                background-position: top center;
    background-size: 100% auto;
    background-repeat: no-repeat no-repeat;">
        </div>
        <div class="car_card1">
            <div class="head d-flex justify-content-center">
                <h1 class="home_heading">Find your best tools all is here</h1>
            </div>
            <div class="mas_filter">
                <div class="row front_home">
                    <div class="col-md-2 col-12">

                    </div>
                    <div class="col-md-8 col-12">
                        <div class="row front_search">
                            <div class="col-md-10 col-12">
                                <input type="text" id="search" autocomplete="off"
                                    class="form-control cat_search_input" placeholder="Search here">
                            </div>
                            <div class="col-md-2 col-12">
                                <button type="button" id="globalSearch" class="sirajganj_btn-primary w-100">
                                    <i class="bi bi-search"></i>
                                </button>

                            </div>
                            <ul id="suggestions" class="search_result"></ul>
                        </div>
                    </div>
                    <div class="col-md-2 col-12">

                    </div>
                </div>
            </div>

            {{--  <div class="container">
                @foreach ($success_storys as $department_id => $stories)
                    <div class="row">
                        <div class="col-md-12 text-center">
                            <h2 class="mb-4">{{ $stories->first()->department->name }}</h2>
                        </div>
                    </div>
                    <div class="row">
                        @foreach ($stories as $story)
                            <div class="col-md-3 col-sm-6 mb-4">
                                <div class="success-card">
                                    <img src="{{ asset('image/story/' . $story->img) }}" class="card-img-top"
                                        alt="Profile Image">
                                    <div class="success-card-body">
                                        <h5 class="card-title">{{ $story->name }}</h5>
                                        <p class="card-text">{{ $story->position }}<br>{{ $story->company }}</p>
                                        <a href="#" class="btn"> (SESSION: {{ $story->session }})</a>
                                    </div>
                                </div>
                            </div>
                        @endforeach
                    </div>
                @endforeach
            </div> --}}

            @foreach ($tools as $category_id => $all_tools)
                <span id="categoryContent" style="display: block; margin-bottom: 50px;">
                    <div class="container car_card my-3">
                        <div class="sirajga_main_category">
                            <div class="row category_row">
                                <div class="row" style="row-gap: 2px;">
                                    <div class="col-12">
                                        <h2 class="text-center">
                                            <a href="#"
                                                class="homepage_category_main">{{ $all_tools->first()->category->name }}</a>
                                        </h2>
                                    </div>
                                    <div class="col-12">
                                        <p class="homepage_category_para">
                                            {!! $all_tools->first()->category->text !!}</p>
                                    </div>
                                </div>

                                @foreach ($all_tools as $tool)
                                    <div class="col-md-3 col-4">
                                        <a href="{{ route('ViewSingleTools', $tool->slug) }}">
                                            <div class="sirajganj_cat_card">
                                                <img src="{{ asset('public/images/blogs/' . $tool->main_img) }}"
                                                    alt="img" style="height: 100px; object-fit: cover;">
                                                <h5>{{ $tool->title }}</h5>
                                            </div>
                                        </a>
                                    </div>
                                @endforeach

                            </div>
                        </div>
                    </div>
                </span>
            @endforeach

            {{-- <div id="preloader" style="display: none;">
                <div class="spinner-border text-primary" role="status">
                    <span class="sr-only">Loading...</span>
                </div>
            </div> --}}
        </div>
    </section>



    {{-- ==== About Section ============ --}}
    @include('frontend.components.about_section')
    {{-- about section end   --}}



    <!-- ======= Download Our Mobile Apps Section ======= -->
    <section class="download-app-section" id="catSection">
        <div class="container text-center">
            <h2 class="section-title">Download Our Mobile Apps</h2>
            <p class="section-description">Stay connected with us on the go. Download our mobile app for the best
                experience.</p>
            <div class="app-buttons">
                <a href="{{ route('MobileApps') }}" class="btn btn-primary">
                    <i class="bi bi-arrow-down-circle"></i> Click Here to Download Our Mobile Apps
                </a>
            </div>
        </div>
    </section>
    <!-- ======= End Download Our Mobile Apps Section ======= -->
@endsection
@push('front_js')
    <script>
        $(document).on('click', '#globalSearch', function() {
            let query = $('.cat_search_input').val();

            if (query) {
                // Redirect to global search result page with query parameter
                window.location.href = "{{ route('GlobalSearch') }}?query=" + encodeURIComponent(query);
            }
        });
    </script>
    <script>
        $(document).ready(function() {
            $('#search').on('input', function() {
                let query = $(this).val();
                if (query.length > 2) {
                    $.ajax({
                        url: "{{ route('search') }}", // Laravel route for dynamic search
                        type: "GET",
                        data: {
                            query: query
                        },
                        success: function(data) {
                            let suggestions = '';
                            data.forEach(item => {
                                suggestions +=
                                    <
                                    li > < a href =
                                    "/sirajganj-city/sirajganj_city/search-result/${item.id}" >
                                    $ {
                                        item.title
                                    } < /a></li > ;
                            });
                            $('#suggestions').html(suggestions);
                        }
                    });
                } else {
                    $('#suggestions').html('');
                }
            });

            // Optional: Hide suggestions when clicking outside
            $(document).on('click', function(e) {
                if (!$(e.target).closest('#search').length) {
                    $('#suggestions').html('');
                }
            });
        });
    </script>
@endpush
