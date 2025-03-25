@extends('frontend.components.front-master')
@section('metaauthor')
    User Favorite List
@endsection
@section('front_content')
    <div class="container">
        <div class="row">
            <a href="{{ Route('CustomerProfile') }}" class="sirajganj_btn-header mt-3"><i class="bi bi-arrow-left"></i>
                Back</a>
            <div class="col-md-12 sirajganj_customer_profile_container">

                <div class="right-text my-5">
                    <div class="mas_batch">
                        <div class="card">
                            <div class="card-header">
                                <h2><a href="#">পছন্দের তালিকা</a></h2>
                            </div>
                        </div>
                        <div class="wishlist">
                            <!-- Wishlist Item -->
                            @foreach ($favorites as $item)
                                <div class="row border align-items-center rounded shadow-sm g-3 p-3 mb-3 sirajganj_customer_profile_row">
                                    <!-- Image Column -->

                                    <div class="col-3 col-sm-2 col-12 text-center">
                                        @if ($item->post->main_img)
                                            <img src="{{ asset('images/blogs/' . $item->post->main_img) }}"alt="Wishlist Item"
                                                class="img-fluid rounded" style="object-fit: cover; max-height: 80px;">
                                        @endif
                                    </div>


                                    <!-- Content Column -->
                                    <div class="col-7 col-sm-8 col-12 wish_middle">
                                        <h5 class="mb-1">{{ $item->post->title }}</h5>
                                        @if ($item->post->phone)
                                            <p class="mb-0 text-muted"><i class="bi bi-telephone"></i>
                                                {{ $item->post->phone }}</p>
                                        @endif
                                        @if ($item->post->email)
                                            <p class="mb-1 text-muted"><i class="bi bi-envelope"></i>
                                                {{ $item->post->email }}</p>
                                        @endif

                                        <a href="{{ Route('single.post', $item->post->slug) }}"
                                            class="text-white bg-primary"
                                            style="padding: 0px 5px;border-radius: 5px;"><small>Details</small></a>
                                    </div>

                                    <div class="col-2 col-sm-2 col-12 text-center text-end">
                                        <a href="javascript:void(0);" data-id="{{ $item->id }}" class="delete_btn">
                                            <i class="bi bi-trash-fill"></i>
                                        </a>
                                    </div>

                                </div>
                            @endforeach

                        </div>
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
                title: "Successful!",
                text: "{{ Session::get('success') }}",
                icon: "success",
                width: 600,
                padding: "3em",
                color: "#716add",
                background: "#fff url(https://sweetalert2.github.io/images/trees.png)",

            });
        </script>
    @endif
    <script>
        $.ajaxSetup({
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            }
        });

        $(document).on('click', '.delete_btn', function(e) {
            e.preventDefault();
            let favoriteId = $(this).data('id'); // Get the ID of the favorite item
            let parentRow = $(this).closest('.row'); // Target the parent row for removal

            if (confirm('Are you sure you want to delete this favorite?')) {
                $.ajax({
                    url: "{{ route('customer.favoriteListDelete') }}",
                    type: "POST",
                    data: {
                        id: favoriteId,
                        _token: "{{ csrf_token() }}"
                    },
                    success: function(response) {
                        if (response.success) {
                            parentRow.fadeOut('slow', function() {
                                $(this).remove();
                            });
                        } else {
                            alert(response.message);
                        }
                    },
                    error: function(xhr) {
                        alert('Something went wrong. Please try again.');
                    }
                });
            }
        });
    </script>
@endpush
