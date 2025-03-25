@extends('frontend.components.front-master')
@section('metaauthor')
    User Profile
@endsection
@section('front_content')
    @php
        use App\Models\Blog;
        use App\Models\Post;
        $customer = Auth::guard('customer')->user();
        $post = Blog::where('customer_id', $customer->id)->count();
        $blog = Post::where('customer_id', $customer->id)->count();

    @endphp
    <div class="container">
        <div class="row mt-5">

            {{-- ============= Side Bar Start ===============  --}}
            @include('frontend.components.profile_sidebar')
            {{-- ============= Side Bar End ===============  --}}
            <div class="col-md-9">

                <!-- profile card  -->
                <div class="left-imgs">
                    <div class="row">
                        <div class="col-md-3">
                            <div class="profile_card">
                                <a href="{{ Route('customer.blog') }}">
                                    <div class="icon mb-2">
                                        <i class="bi bi-file-earmark-text-fill"></i>
                                    </div>
                                    <h4>Total Posts</h4>
                                    <h5>{{ $post ?? '0' }}</h5>
                                </a>
                            </div>
                        </div>
                        <div class="col-md-3">
                            <div class="profile_card">
                                <a href="{{ Route('customer.post') }}">
                                    <div class="icon mb-2">
                                        <i class="bi bi-substack"></i>
                                    </div>
                                    <h4>Total Blogs</h4>
                                    <h5>{{ $blog ?? '' }}</h5>
                                </a>
                            </div>
                        </div>
                        <div class="col-md-3">
                            <div class="profile_card">
                                <a href="#">
                                    <div class="icon mb-2">
                                        <i class="bi bi-file-earmark-text-fill"></i>
                                    </div>
                                    <h4>Total Adds</h4>
                                    <h5>{{ '0' }}</h5>
                                </a>
                            </div>
                        </div>
                        <div class="col-md-3">
                            <div class="profile_card">
                                <a href="{{ Route('customer.jobpost') }}">
                                    <div class="icon mb-2">
                                        <i class="bi bi-file-earmark-text-fill"></i>
                                    </div>
                                    <h4>Total Job Posts</h4>
                                    <h5></h5>
                                </a>
                            </div>
                        </div>
                    </div>

                </div>

                <div class="right-text my-5">
                    <div class="mas_batch">
                        <div class="card">
                            <div class="card-header">
                                <h2><a href="#">{{ $customer->name ?? 'N/A' }}</a>
                                </h2>
                            </div>
                        </div>
                        <p>
                        <div class="profile_info_list text-center">
                            <!-- Profile Picture -->
                            <div class="profile_pic mb-3">
                                @if ($customer->image)
                                    <img src="{{ asset('images/customers/' . $customer->image) }}" alt="Profile Picture"
                                        class="rounded-circle img-fluid">
                                @else
                                    {{ 'No Image' }}
                                @endif
                            </div>

                            <!-- Action Buttons -->
                            <div class="action_buttons mb-3">
                                <a href="{{ Route('customer.update') }}" class="btn btn-primary me-2"
                                    style="padding: 5px 15px; font-size:14px;">Update Profile</a>
                                <a href="{{ Route('customer.passwordupdate') }}" class="btn btn-secondary"
                                    style="padding: 5px 15px; font-size:14px;">Change Password</a>
                                {{-- <button class="btn btn-secondary"></button> --}}
                            </div>

                            <!-- Information List -->
                            <ul class="list-unstyled">
                                <li><i class="bi bi-geo-alt"></i> <span>{{ $customer->address ?? 'N/A' }} </span></li>
                                <li><i class="bi bi-telephone"></i> <span>{{ $customer->phone ?? 'N/A' }}</span></li>
                                <li><i class="bi bi-envelope"></i> <span>{{ $customer->email ?? 'N/A' }}</span></li>
                            </ul>
                        </div>

                        </p>
                    </div>
                </div>
            </div>


        </div>

    </div>
@endsection
@push('front_js')

    @if (Session::has('success'))
        <script>
            Swal.fire({
                title: "Login Successful!",
                text: "{{ Session::get('success') }}",
                icon: "success",
                width: 600,
                padding: "3em",
                color: "#716add",
                background: "#fff url(https://sweetalert2.github.io/images/trees.png)",
                backdrop: `
                rgba(0,0,123,0.4)
                url("https://sweetalert2.github.io/images/nyan-cat.gif")
                left top
                no-repeat
            `
            });
        </script>
    @endif

@endpush
