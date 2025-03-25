@extends('frontend.components.front-master')
@section('front_content')
    <div class="mas_filter all-product">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="head d-flex justify-content-center">
                        <h1 class="head1 text-white m-0"> সার্চ রেজাল্ট ! </h1>
                    </div>

                </div>
            </div>
        </div>
    </div>


    <div class="course-home-section">

        <div class="container">

            <span id="allBloodPost">
                <div class="">
                    <div class="container">

                        <div class="col-md-12">
                            <div class="row mt-3">
                                <div class="col-md-12 col-12">
                                    <!-- =============== show all doner list ============  -->
                                    <div class="my-3">
                                        <div class="row">
                                            <a href="{{ Route('frontHome') }}" class="sirajganj_btn-header"><i
                                                    class="bi bi-arrow-left"></i> Back</a>
                                            <div class="col-md-0"></div>
                                            <div class="col-md-12 col-12">

                                                <div class="card">
                                                    <div class="card-body">
                                                        <div class="container">
                                                            <h2 class="bg-success p-1 text-white">Search Results : <span
                                                                    style="color:#f9ff00 !important;">{{ $query }}</span>
                                                            </h2>

                                                            <!-- Blogs -->
                                                            <h4>সকল পোষ্ট হতে সার্চ রেজাল্ট</h4>

                                                            <div class="row">
                                                                @foreach ($results['blogs'] as $blog)
                                                                    <div
                                                                        class="col-12 col-sm-6 col-md-4 col-lg-3 home_post_container">
                                                                        <div class="school_card">
                                                                            <div class="post_card_header">
                                                                                <div class="post_card_view">
                                                                                    <span class="post_card_view_icon">
                                                                                        <i class="bi bi-eye"></i>
                                                                                        <span>{{ $blog->view ?? '0' }}</span>
                                                                                    </span>
                                                                                </div>
                                                                            </div>
                                                                            <div class="school_card_img">
                                                                                <a
                                                                                    href="{{ route('single.post', $blog->slug) }}">
                                                                                    <img width="400" height="500"
                                                                                        src="{{ asset('public/images/blogs/' . $blog->main_img) }}"
                                                                                        class="img-fluid blog_image"
                                                                                        alt="{{ $blog->alt_text }}"
                                                                                        style="object-fit: cover;" />
                                                                                </a>
                                                                            </div>
                                                                            <div class="mas_batch">
                                                                                <h2>
                                                                                    <a
                                                                                        href="{{ route('single.post', $blog->slug) }}">{{ $blog->title }}</a>
                                                                                </h2>
                                                                                <p>
                                                                                <div class="post_info_list">
                                                                                    @if ($blog->address)
                                                                                        <li><i class="bi bi-geo-alt"></i>
                                                                                            <span>{{ $blog->address }}</span>
                                                                                        </li>
                                                                                    @endif
                                                                                    @if ($blog->phone)
                                                                                        <li><i class="bi bi-telephone"></i>
                                                                                            <span>{{ $blog->phone }}</span>
                                                                                        </li>
                                                                                    @endif
                                                                                </div>
                                                                                </p>
                                                                                <div class="post_info_btn_main btn-sm">
                                                                                    <a href="{{ route('single.post', $blog->slug) }}"
                                                                                        class="sirajganj_btn-primary">
                                                                                        বিস্তারিত
                                                                                    </a>
                                                                                    @if ($blog->google_map)
                                                                                        <a href="{{ $blog->google_map ?? '' }}"
                                                                                            target="_blank"
                                                                                            class="sirajganj_btn-primary">
                                                                                            গুগল ম্যাপ
                                                                                        </a>
                                                                                    @endif
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                @endforeach
                                                            </div>

                                                            <!-- Posts -->
                                                            <h4>সকল ব্লগ হতে সার্চ রেজাল্ট </h4>
                                                            @foreach ($results['posts'] as $post)
                                                                <li><span>ব্লগ
                                                                        ক্যাটাগরিঃ</span>{{ $post->category->name ?? '' }}
                                                                </li>
                                                                <li><span>ব্লগ টাইটেলঃ</span><a
                                                                        href="{{ route('single.post', $post->slug) }}">{{ $post->title }}</a>
                                                                </li>
                                                            @endforeach

                                                            <!-- Jobs -->
                                                            <h4>সকল চাকরির বিজ্ঞাপন হতে সার্চ রেজাল্ট </h4>
                                                            @foreach ($results['jobs'] as $job)
                                                                <li> <span>ক্যাটাগরিঃ</span>{{ $job->jobCategory->name ?? '' }}
                                                                </li>
                                                                <li> <span>টাইটেলঃ</span><a
                                                                        href="{{ route('single.post', $job->id) }}">{{ $job->title }}</a>
                                                                </li>
                                                            @endforeach

                                                            <!-- Categories -->
                                                            @foreach ($results['categories'] as $category)
                                                                <h4>সকল পোষ্ট ক্যাটাগরি হতে সার্চ রেজাল্ট</h4>
                                                                <div class="col-md-2 col-4">
                                                                    <a
                                                                        href="{{ Route('frontCategory', $category->slug) }}">
                                                                        <div class="sirajganj_cat_card">
                                                                            @if ($category->image == null)
                                                                                <img src="{{ asset('public/image/jobcategory/default.png') }}"
                                                                                    alt="img">
                                                                            @else
                                                                                <img src="{{ asset('public/image/category/' . $category->image) }}"
                                                                                    alt="img">
                                                                            @endif

                                                                            <h2>{{ $category->name ?? 'N/A' }} </h2>
                                                                        </div>
                                                                    </a>
                                                                </div>

                                                                {{-- <li><a
                                                                        href="{{ route('frontCategory', $category->slug) }}">{{ $category->name }}</a>
                                                                </li> --}}
                                                            @endforeach

                                                            <!-- Mahfils -->
                                                            <h4>মাহফিল পোষ্টার হতে সার্চ রেজাল্ট </h4>
                                                            @foreach ($results['mahfils'] as $mahfil)
                                                                <div class="col-md-4 col-lg-4 col-12">
                                                                    <div class="school_card">
                                                                        <div class="mahfil_poster">
                                                                            <a
                                                                                href="{{ asset('image/mahfil/' . $mahfil->img) }}">
                                                                                <img width="400" height="500"
                                                                                    src="{{ asset('public/image/mahfil/' . $mahfil->img) }}"
                                                                                    class="attachment-custom-size size-custom-size value_image"
                                                                                    alt="" decoding="async" />
                                                                            </a>
                                                                        </div>
                                                                        <div class="mas_batch">
                                                                            <h2><a
                                                                                    href="#">{{ $mahfil->address }}</a>
                                                                            </h2>

                                                                            <p>
                                                                            <div class="post_info_list">
                                                                                <li><i class="bi bi-calendar-event"></i>
                                                                                    <span>{{ $mahfil->date ?? '' }}</span>
                                                                                </li>

                                                                            </div>
                                                                            </p>

                                                                            <div class="post_info_btn_main btn-sm">
                                                                                <a href="{{ asset('image/mahfil/' . $mahfil->img) }}"
                                                                                    class="sirajganj_btn-primary">পোষ্টার
                                                                                    দেখুন </a>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            @endforeach

                                                            <!-- Blood Donors -->
                                                            @foreach ($results['blood_donors'] as $donor)
                                                                <h4>ব্লাড ডোনার হতে সার্চ রেজেল্ট </h4>
                                                                <li><a href="#">{{ $donor->name }}</a>
                                                                </li>
                                                                <li><b>Address : </b>{{ $doner->upazila->bn_name ?? '' }}
                                                                </li>
                                                                <li><b>Blood Group : </b>{{ $doner->blood_group ?? '' }}
                                                                </li>
                                                                <li><b>Contact Number :
                                                                    </b>{{ $doner->contract_number ?? '' }}</li>
                                                                <li><b>Last Donate :
                                                                    </b>{{ $doner->last_donation_date ?? '' }}</li>
                                                                <li><b>Blood Group : </b>{{ $doner->note ?? '' }}</li>
                                                            @endforeach

                                                            <!-- Blood Posts -->
                                                            @foreach ($results['blood_posts'] as $bloodPost)
                                                                <h4>সকল রক্তের প্রয়োজন হতে সার্চ রেজাল্ট</h4>
                                                                <li><a href="#">{{ $bloodPost->patient_info }}</a>
                                                                </li>
                                                                <li><span>রোগির
                                                                        সমস্যাঃ</span>{{ $bloodPost->patient_info ?? '' }}
                                                                </li>
                                                                <li><span>রোগির
                                                                        লোকঃ</span>{{ $bloodPost->contact_number ?? '' }}
                                                                </li>
                                                                <li><span>কন্টাক্ট
                                                                        নাম্বারঃ</span>{{ $bloodPost->contact_number ?? '' }}
                                                                </li>
                                                                <li><span>রক্তের
                                                                        গ্রুপঃ</span>{{ $bloodPost->blood_group ?? '' }}
                                                                </li>
                                                                <li><span>রক্তের
                                                                        পরিমানঃ</span>{{ $bloodPost->blood_amount ?? '' }}
                                                                </li>
                                                                <li><span>হাসপাতাল এর
                                                                        ঠিকানাঃ</span>{{ $bloodPost->hospital_name ?? '' }}
                                                                    - {{ $bloodPost->hospital_address ?? '' }}</li>
                                                            @endforeach
                                                        </div>

                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-md-0"></div>
                                        </div>

                                    </div>
                                </div>
                            </div>

                        </div>
                    </div>
            </span>

        </div>
    </div>
@endsection
@push('front_js')
    <script></script>
@endpush
