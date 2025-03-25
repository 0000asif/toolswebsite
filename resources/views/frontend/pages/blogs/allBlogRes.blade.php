@if ($posts->isNotEmpty())
    <div class="container sirajganj_all_blogs_res_container">
        <div class="row my-3 sirajganj_all_blogs_res_row">
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
                                <img style="object-fit: cover;"  src="{{ $post->img ? asset('public/image/post/' . $post->img) : asset('public/frontend/assets/img/placeholder.jpg') }}"
                                    class="attachment-custom-size size-custom-size img-fluid blog_image"
                                    alt="{{ $post->alt_text }}" decoding="async" loading="lazy" />
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
        </div>
        <div class="d-flex justify-content-center front_pagination">
            {{ $posts->links('pagination::bootstrap-4') }}
        </div>
    </div>
@else
    <div class="text-center my-4">
        <span>দুঃখিত ! কোন ডাটা খুজে পাওয়া যায়নি । <a href="{{ route('CustomerProfile') }}" class="text-primary">ডাটা
                যুক্ত করতে এখানে ক্লিক করুন</a></span>
    </div>
@endif
