@extends('frontend.components.front-master')
@section('front_content')
    <div class="mas_filter all-product">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="head d-flex justify-content-center">
                        <h1 class="head1 text-white">সকল পোস্ট </h1>
                    </div>
                    <div class="card">
                        <div class="card-body">
                            <div class="row">
                                <div class="col-md-3  col-12">
                                    <div class="filter_item">
                                        <label for="category_id">ক্যাটাগরি সিলেক্ট করুন </label>
                                        <select id="category_id" class="form-control select2">
                                            <option value="">সকল ক্যাটাগরি </option>
                                            <option value="3">Gov. School Admission</option>
                                            <option value="4">Admission</option>
                                            <option value="5">Academy Class</option>
                                            <option value="7">Pre Cadet</option>
                                            <option value="2">Cadet</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="col-md-3  col-12">
                                    <div class="filter_item">
                                        <label for="sub_category_id">সাব ক্যাটাগরি সিলেক্ট করুন </label>
                                        <select id="sub_category_id" class="form-control">
                                            <option value="">সকল সাব ক্যাটাগরি ব্যাচ </option>
                                            <option value="3">Class Five</option>
                                            <option value="6">Class Eight</option>
                                            <option value="5">Class Six</option>
                                            <option value="1">Class Two</option>
                                            <option value="2">Class Seven</option>
                                            <option value="13">Class Eight</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="col-md-2  col-12">
                                    <div class="filter_item">
                                        <label for="batch_id"> উপজেলা </label>
                                        <select id="batch_id" class="form-control">
                                            <option value="">সকল ব্যাচ </option>
                                            <option value="2">Gov. School Admission</option>
                                            <option value="3">Admission Class Eight</option>
                                            <option value="4">Academy Class Class Six</option>
                                            <option value="6">Pre Cadet For Class Two</option>
                                            <option value="7">Cadet For Class Seven</option>
                                            <option value="8">Admission Class Eight</option>
                                            <option value="9">অষ্টম শ্রেণি একাডেমিক প্রোগ্রাম - ২০২৫</option>
                                        </select>
                                    </div>
                                </div>

                                <div class="col-md-2  col-12">
                                    <div class="filter_item">
                                        <label for="batch_id"> এলাকা </label>
                                        <select id="batch_id" class="form-control">
                                            <option value="">সকল ব্যাচ </option>
                                            <option value="2">Gov. School Admission</option>
                                            <option value="3">Admission Class Eight</option>
                                            <option value="4">Academy Class Class Six</option>
                                            <option value="6">Pre Cadet For Class Two</option>
                                            <option value="7">Cadet For Class Seven</option>
                                            <option value="8">Admission Class Eight</option>
                                            <option value="9">অষ্টম শ্রেণি একাডেমিক প্রোগ্রাম - ২০২৫</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="col-md-2 col-12">
                                    <div class="filter_item">
                                        <label for="">ফিল্টার করুন </label> <br>
                                        <button id="filter" class="sirajganj_btn-primary w-100 ">ফিল্টার </button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>


    <div class="course-home-section">

        <div class="container">

            <span id="allInfoContent">
                <div class="container my-4">
                    <div class="row py-3">
                        @foreach ($blogs as $blog)
                            <div class="col-md-4 col-lg-3 col-12">
                                <div class="school_card">
                                    <div class="school_card_img">
                                        <a href="{{ route('single.post', $blog->slug) }}">
                                            <img width="400" height="500"
                                                src="{{ asset('images/blogs/' . $blog->main_img) }}"
                                                class="attachment-custom-size size-custom-size" alt="{{ $blog->alt_text }}"
                                                decoding="async" />
                                        </a>
                                    </div>
                                    <div class="mas_batch">
                                        <h2><a href="{{ route('single.post', $blog->slug) }}">{{ $blog->title }}</a>
                                        </h2>

                                        <p>
                                        <div class="post_info_list">
                                            <li><i class="bi bi-geo-alt"></i> <span>{{ $blog->address }}</span></li>
                                            <li><i class="bi bi-telephone"></i> <span>{{ $blog->phone }}</span></li>
                                            <li><i class="bi bi-envelope"></i> <span>{{ $blog->email }}</span></li>
                                            <li><i class="bi bi-facebook"></i> <a href="{{ $blog->facebook_link }}"
                                                    target="_blank">
                                                    Facebook</a></li>
                                        </div>
                                        </p>

                                        <div class="post_info_btn_main">
                                            <a href="{{ route('single.post', $blog->slug) }}"
                                                class="sirajganj_btn-primary">বিস্তারিত </a>
                                            <a href="{{ $blog->google_map ?? '' }}" target="_blank"
                                                class="sirajganj_btn-primary">গুগল ম্যাপ</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        @endforeach
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
@endsection
