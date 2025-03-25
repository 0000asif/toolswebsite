@extends('frontend.components.front-master')
@section('front_content')
    <!-- ======= All Post Section  ======= -->
    <div class="breadcrumb_section bg_gray page-title-mini">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-md-12">
                    <div class="category_title">
                        <h2>Categories</h2>
                    </div>
                    <div class="category_list">
                        <ul class="list-inline" style="display: flex; justify-content:space-between">
                            @foreach ($categories as $category)
                                <li class="list-inline-item"
                                    style="background-color: beige; padding:5px; border-radius:10px;">
                                    <a href="" class="category_item">{{ $category->name }}</a>
                                </li>
                            @endforeach
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- END SECTION BREADCRUMB -->

    <div class="container">
        <div class="row mt-3">

            <div class="col-md-12 col-12">

                <!-- Show Blog filter  -->
                <div class="mas_filter all-product">
                    <div class="container">
                        <div class="row">
                            <div class="col-md-12">
                                <div class="blog_page_title">
                                    <h1 class=" text-white">ব্লগ পেজ </h1>
                                    <p>আমাদের প্লাটফর্ম এ প্রকাশিত সকল ব্লগ / নিউজ</p>
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
                                                    <label for="sub_category_id"> ফিল্টার ক্যাটাগরি </label>
                                                    <select id="sub_category_id" class="form-control select2">
                                                        <option value="">সকল ফিল্টার ক্যাটাগরি </option>
                                                        <option value="populer">জনপ্রীয়</option>
                                                        <option value="new">নতুন ব্লগ </option>
                                                        <option value="old">পুরাতন ব্লগ </option>
                                                    </select>
                                                </div>
                                            </div>
                                            <div class="col-md-3  col-12">
                                                <div class="filter_item">
                                                    <label for="batch_id"> প্রকাশের তারিখ </label>
                                                    <select id="batch_id" class="form-control">
                                                        <option value="">প্রকাশের তারিখ</option>
                                                        <option value="2">আজকের ব্লগ </option>
                                                        <option value="3">এই সপ্তাহের সকল ব্লগ </option>
                                                        <option value="4">এই মাসের সকল ব্লগ </option>
                                                        <option value="6">এই বছররের সকল ব্লগ </option>
                                                    </select>
                                                </div>
                                            </div>

                                            <div class="col-md-3 col-12">
                                                <div class="filter_item">
                                                    <label for="">ফিল্টার করুন </label> <br>
                                                    <button id="filter" class="sirajganj_btn-primary w-100 ">ফিল্টার
                                                    </button>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="row my-3">
                    @foreach ($posts as $post)
                        <div class="col-md-4 col-12">
                            <div class="school_card">
                                <div class="school_card_img">
                                    <a href="{{ Route('blog.view', $post->slug) }}">
                                        <img width="400" height="500" src="{{ asset('image/post/' . $post->img) }}"
                                            class="attachment-custom-size size-custom-size" alt="{{ $post->alt_text }}"
                                            decoding="async" />
                                    </a>
                                </div>
                                <div class="mas_batch">
                                    <h2><a href="">{{ $post->title }}</a></h2>
                                    <span class="blog-date">
                                        <i class="bi bi-alarm"></i>
                                        {{ $post->created_at->format('Y-m-d') }}
                                    </span> By -
                                    <span class="blog-author">
                                        <i class="bi bi-person"></i>
                                        {{ $post->user->name }}
                                    </span>
                                    <p style="text-align: justify;margin: 6px 0;">{!! Str::limit($post->content, 150) !!}</p>
                                </div>
                            </div>
                        </div>
                    @endforeach
                </div>
                <!-- =========== Show All Blog ===============  -->


            </div>

            {{-- <div class="col-md-3 col-12">
                <div class="blog_sidebar_search mb-3">
                    <input type="text" id="blog_sidebar_serach_input" class="form-control blog_sidebar_serach_input"
                        placeholder="অনুসন্ধান করুন ">
                    <button type="button" id="blog_sidebar_serach_btn" class="blog_sidebar_serach_btn">
                        <i class="bi bi-search"></i>
                    </button>
                </div>
                <div class="blog_sidebar">
                    <div class="aside_body">
                        <li><a href="#"></a><i class="bi bi-house-fill"></i> <span class="aside_item">হোম </span>
                        </li>
                        <li><a href="#"></a><i class="bi bi-house-fill"></i> <span class="aside_item">প্রোফাইল
                            </span>
                        </li>
                        <li><a href="#"></a><i class="bi bi-house-fill"></i> <span class="aside_item">রক্ত </span>
                        </li>
                        <li><a href="#"></a><i class="bi bi-house-fill"></i> <span class="aside_item">পছন্দের
                                তালিকা
                            </span></li>
                        <li><a href="#"></a><i class="bi bi-house-fill"></i> <span class="aside_item">ব্লগ </span>
                        </li>
                        <li><a href="#"></a><i class="bi bi-house-fill"></i> <span
                                class="aside_item">লগইন/রেজিস্ট্রেশন
                                করুন </span></li>

                        <li class="aside_devider">আমাদের সাথে যুক্ত হোন </li>

                        <li><a href="#"></a><i class="bi bi-house-fill"></i> <span class="aside_item">ফেসবুক পেজ
                            </span>
                        </li>
                        <li><a href="#"></a><i class="bi bi-house-fill"></i> <span class="aside_item">ফেসবুক গ্রুপ
                            </span></li>
                        <li><a href="#"></a><i class="bi bi-house-fill"></i> <span class="aside_item">ইমেইল </span>
                        </li>
                        <li><a href="#"></a><i class="bi bi-house-fill"></i> <span class="aside_item">হোয়াটসঅ্যাপ
                            </span></li>
                        <li><a href="#"></a><i class="bi bi-house-fill"></i> <span class="aside_item">ইউটিউব
                            </span>
                        </li>

                        <li class="aside_devider">প্রয়োজনীয় লিংক </li>

                        <li><a href="#"></a><i class="bi bi-house-fill"></i> <span class="aside_item">আমাদের
                                প্লাটফর্ম
                                সম্পর্কে </span></li>
                        <li><a href="#"></a><i class="bi bi-house-fill"></i> <span class="aside_item">যোগাযোগ
                            </span>
                        </li>
                        <li><a href="#"></a><i class="bi bi-house-fill"></i> <span class="aside_item">প্রাইভেসি
                                পলিসি
                            </span></li>
                        <li><a href="#"></a><i class="bi bi-house-fill"></i> <span class="aside_item">বিজ্ঞাপন দিন
                            </span></li>
                        <li><a href="#"></a><i class="bi bi-house-fill"></i> <span class="aside_item">টার্মস &
                                কন্ডিশন্স
                            </span></li>

                        <li class="aside_devider">জনপ্রীয় ক্যাটাগরি </li>

                        <li><a href="#"></a><i class="bi bi-house-fill"></i> <span class="aside_item">আমাদের
                                প্লাটফর্ম
                                সম্পর্কে </span></li>
                        <li><a href="#"></a><i class="bi bi-house-fill"></i> <span class="aside_item">যোগাযোগ
                            </span>
                        </li>
                        <li><a href="#"></a><i class="bi bi-house-fill"></i> <span class="aside_item">প্রাইভেসি
                                পলিসি
                            </span></li>
                        <li><a href="#"></a><i class="bi bi-house-fill"></i> <span class="aside_item">বিজ্ঞাপন দিন
                            </span></li>
                        <li><a href="#"></a><i class="bi bi-house-fill"></i> <span class="aside_item">টার্মস &
                                কন্ডিশন্স
                            </span></li>

                    </div>
                </div>
            </div> --}}
        </div>

    </div>
@endsection
