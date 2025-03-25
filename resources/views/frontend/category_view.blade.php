@extends('frontend.components.front-master')
@section('metadesc')
    {{ $category->meta_description }}
@endsection
@section('metakey')
    {{ $category->meta_keywords }}
@endsection
@section('metaauthor')
    {{ $category->meta_title }}
@endsection
@section('front_content')
    <div class="mas_filter all-product" style="background: #00db89;padding:30px 10px">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="head d-flex justify-content-center">
                        <h4 class="head1 text-white" style="margin-bottom: 0px;font-size:25px">ক্যাটাগরিঃ <span
                                class="text-dark">
                                {{ $category->name }}</span></h4>
                    </div>
                    <div class="category_list d-flex justify-content-center mt-4">
                        <ul class="list-inline category_list_items">
                            @foreach ($sub_cat as $sub_cat)
                                <li class="list-inline-item category_item_wrapper mb-3">
                                    <a href="{{ Route('frontSubCategory', $sub_cat->slug) }}"
                                        class="category_item">{{ $sub_cat->name ?? '' }}</a>
                                </li>
                            @endforeach
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="course-home-section">
        <div class="container">
            <span id="allInfoContent">
                <div class="container my-4 home_post_container">
                    <div class="row py-3">
                        @if ($blogs->count() > 0)
                            @foreach ($blogs as $blog)
                                <div class="col-md-4 col-lg-3 col-12 home_post_container">
                                    <div class="school_card">
                                        <div class="post_card_header">
                                            <div class="post_card_view">
                                                <span class="post_card_view_icon"><i class="bi bi-eye"></i>
                                                    <span>{{ $blog->view ?? '0' }}</span></span>
                                            </div>
                                        </div>
                                        <div class="school_card_img">
                                            <a href="{{ route('single.post', $blog->slug) }}">
                                                <img width="400" height="500"
                                                    src="{{ asset('public/images/blogs/' . $blog->main_img) }}"
                                                    class="attachment-custom-size size-custom-size blog_image"
                                                    alt="{{ $blog->alt_text }}" decoding="async" style="object-fit: cover;" />
                                            </a>
                                        </div>
                                        <div class="mas_batch">
                                            <h2><a href="{{ route('single.post', $blog->slug) }}">{{ $blog->title }}</a>
                                            </h2>

                                            <p>
                                            <div class="post_info_list">
                                                @if ($blog->address )
                                                <li><i class="bi bi-geo-alt"></i> <span>{{ $blog->address }}</span></li>
                                                @endif
                                                @if ($blog->phone)
                                                <li><i class="bi bi-telephone"></i> <span>{{ $blog->phone }}</span></li>
                                                @endif

                                            </div>
                                            </p>

                                            <div class="post_info_btn_main btn-sm">
                                                <a href="{{ route('single.post', $blog->slug) }}"
                                                    class="sirajganj_btn-primary">বিস্তারিত </a>
                                                @if ($blog->google_map)
                                                    <a href="{{ $blog->google_map ?? '' }}" target="_blank"
                                                        class="sirajganj_btn-primary">গুগল ম্যাপ</a>
                                                @endif
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            @endforeach
                        @else
                            <div class="col-md-12">
                                <div class="alert alert-danger">No data found</div>
                            </div>
                        @endif

                    </div>
                </div>

            </span>

            {{-- // Your pagination code here... --}}
            <div>
                <div class="text-center">
                    @if ($blogs->links())
                        {{ $blogs->links('pagination::bootstrap-5') }}
                    @endif
                </div>
            </div>

        </div>
        <div id="preloader" style="display: none;">
            <div class="spinner-border text-primary" role="status">
                <span class="sr-only">Loading...</span>
            </div>
        </div>
    </div>

        <div class="mas_filter all-product" style="background: #e8f0f5;padding:30px 10px">
        <div class="container">
            <div class="row">
               <p>{!! $category->text ?? "" !!}</p>
            </div>
        </div>
    </div>

    </div>
@endsection
