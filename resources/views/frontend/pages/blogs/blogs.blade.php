@extends('frontend.components.front-master')
@section('metaauthor')
    All Blogs
@endsection
@section('front_content')
    <!-- ======= All Post Section  ======= -->
    <div class="breadcrumb_section bg_gray page-title-mini py-3">
        <div class="container ">
            <div class="row align-items-center">
                <div class="col-md-12">
                    <div class="category_title">
                        <h2>সকল ব্লগ এর ক্যাটাগরি </h2>
                    </div>
                    <div class="category_list">
                        <ul class="list-inline category_list_items">
                            @foreach ($categories as $category)
                                <li class="list-inline-item category_item_wrapper mb-3">
                                    <a href="{{ Route('frontblogCategory', $category->slug) }}"
                                        class="category_item">{{ $category->name ?? '' }}</a>
                                </li>
                            @endforeach
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- END SECTION BREADCRUMB -->

    <div class="mas_filter all-product">

        <!-- Show Blog filter  -->
        <div class="container sirajganj_all_blogs_filter">
            <div class="row">
                <div class="col-md-12">
                    <div class="blog_page_title">
                        <h1 class="text-white text-center">ব্লগ পেজ </h1>
                        <p class="text-white text-center">আমাদের প্লাটফর্ম এ প্রকাশিত সকল ব্লগ / নিউজ</p>
                    </div>
                    <div class="card">
                        <div class="card-body sirajganj_all_blogs_card_body">
                            <div class="row sirajganj_all_blogs_row">
                                <div class="col-md-3  col-12">
                                    <div class="filter_item">
                                        <label for="category_id">ক্যাটাগরি সিলেক্ট করুন </label>
                                        <select id="category_id" class="form-control select2">
                                            <option value="">সকল ক্যাটাগরি </option>
                                            @foreach ($categories as $item)
                                                <option value="{{ $item->id }}">{{ $item->name ?? '' }}
                                                </option>
                                            @endforeach
                                        </select>
                                    </div>
                                </div>
                                <div class="col-md-3  col-12">
                                    <div class="filter_item">
                                        <label for="filter1"> ফিল্টার ক্যাটাগরি </label>
                                        <select id="filter1" class="form-control select2">
                                            <option value="">সকল ফিল্টার ক্যাটাগরি </option>
                                            <option value="populer">জনপ্রীয়</option>
                                            <option value="new">নতুন ব্লগ </option>
                                            <option value="old">পুরাতন ব্লগ </option>
                                        </select>
                                    </div>
                                </div>
                                <div class="col-md-3  col-12">
                                    <div class="filter_item">
                                        <label for="filter2"> প্রকাশের তারিখ </label>
                                        <select id="filter2" class="form-control select2">
                                            <option value="">প্রকাশের তারিখ</option>
                                            <option value="today">আজকের ব্লগ </option>
                                            <option value="this_week">এই সপ্তাহের সকল ব্লগ </option>
                                            <option value="this_month">এই মাসের সকল ব্লগ </option>
                                            <option value="this_year">এই বছররের সকল ব্লগ </option>
                                        </select>
                                    </div>
                                </div>

                                <div class="col-md-3 col-12">
                                    <div class="filter_item">
                                        <label for="">ফিল্টার করুন </label> <br>
                                        <button id="blog_filter" class="sirajganj_btn-primary w-100 ">ফিল্টার
                                        </button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>


            <div id="preloader" style="display: none;">
                <div class="spinner-border text-primary" role="status">
                    <span class="sr-only">Loading...</span>
                </div>
            </div>
        </div>
    </div>

    <span id="BlogContent"></span>

    <!-- =========== Show All Blog ===============  -->
@endsection
@push('front_js')
    <script>
        // General function to load content dynamically
        function loadNotices(url, data = {}) {
            $('#preloader').show(); // Show the preloader
            $.ajax({
                url: url,
                type: "GET",
                data: data,
                success: function(response) {
                    $('#BlogContent').html(response); // Update content
                },
                complete: function() {
                    $('#preloader').hide(); // Hide the preloader after request
                },
                error: function(xhr, status, error) {
                    console.error("Error: " + error);
                    alert("Something went wrong. Please try again."); // User feedback
                    $('#preloader').hide(); // Hide preloader on error
                }
            });
        }

        $(document).ready(function() {
            // Filter functionality
            $(document).on('click', '#blog_filter', function(e) {
                e.preventDefault(); // Prevent default form submission
                let data = {
                    category_id: $('#category_id').val(),
                    filter1: $('#filter1').val(),
                    filter2: $('#filter2').val(),
                };
                loadNotices("{{ route('get_blog_filter_data') }}", data);
            });

            // Handle pagination links dynamically
            $(document).on('click', '.pagination a', function(e) {
                e.preventDefault(); // Prevent default navigation
                let url = $(this).attr('href');
                loadNotices(url); // Use the general function
            });
        });
        $(document).ready(function() {
            loadNotices("{{ route('all_blog_response') }}");
        });
    </script>
@endpush
