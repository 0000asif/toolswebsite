@extends('frontend.components.front-master')
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
                    {{-- <div class="category_list">
                        <ul class="list-inline category_list_items">
                            @foreach ($sub_cat as $sub_cat)
                                <li class="list-inline-item category_item_wrapper mb-3">
                                    <a href="" class="category_item">{{ $sub_cat->name ?? '' }}</a>
                                </li>
                            @endforeach
                        </ul>
                    </div> --}}
                </div>
            </div>
        </div>
    </div>

    <div class="course-home-section">
        <div class="container">
            <span id="allInfoContent">
                <div class="container my-4">
                    <div class="row py-3">
                        @if ($posts->count() > 0)
                            @foreach ($posts as $post)
                                <div class="col-md-3 col-12">
                                    <div class="school_card">
                                        <div class="post_card_header">

                                            <div class="post_card_view">
                                                <span class="post_card_view_icon"><i class="bi bi-eye"></i>
                                                    <span>{{ $post->view ?? '0' }}</span></span>
                                            </div>
                                        </div>
                                        <!-- Image Section -->
                                        <div class="school_card_img">
                                            <a href="{{ Route('blog.view', $post->slug) }}">
                                                <img src="{{ $post->img ? asset('image/post/' . $post->img) : asset('public/frontend/assets/img/placeholder.jpg') }}"
                                                    class="attachment-custom-size size-custom-size img-fluid blog_image"
                                                    alt="{{ $post->alt_text }}" decoding="async" loading="lazy" style="object-fit: cover;" />
                                            </a>
                                        </div>

                                        <!-- Post Details -->
                                        <div class="mas_batch">
                                            <h2>
                                                <a href="{{ Route('blog.view', $post->slug) }}">{{ $post->title }}</a>
                                            </h2>
                                            <span class="blog-date">
                                                <i class="bi bi-alarm"></i>
                                                {{ $post->created_at->format('Y-m-d') }}
                                            </span> By -
                                            <span class="blog-author">
                                                <i class="bi bi-person"></i>
                                                {{ $post->user->name ?? 'Unknown Author' }}
                                            </span>
                                            <p style="text-align: justify; margin: 6px 0;">
                                                {!! Str::limit(strip_tags($post->content), 150) !!}
                                            </p>
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
                    @if ($posts->links())
                        {{ $posts->links('pagination::bootstrap-5') }}
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
    </div>
@endsection
