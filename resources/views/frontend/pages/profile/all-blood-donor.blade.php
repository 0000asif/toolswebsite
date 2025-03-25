@extends('frontend.components.front-master')
@section('metaauthor')
    User Blood Doners Add
@endsection
@section('front_content')
    @php
        $customer = Auth::guard('customer')->user();

    @endphp
    <div class="container">
        <div class="row my-3">

            {{-- ============= Side Bar Start ===============  --}}
            {{-- @include('frontend.components.profile_sidebar') --}}
            {{-- ============= Side Bar End ===============  --}}
            <a href="{{ Route('CustomerProfile') }}" class="sirajganj_btn-header mt-3"><i class="bi bi-arrow-left"></i>
                Back</a>
            <div class="right-text">
                <div class="mas_batch">
                    <div class="cadrd">
                        <div class="card-hesader align-items-center text-center">
                            <h2><a href="#">আপনার এড করা সকল রক্তদাতা </a>
                            </h2>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-12">

                <div class="table-responsive">
                    <table class="table table-bordered">
                        <thead>
                            <tr>
                                <th>SL</th>
                                <th>Name</th>
                                <th>Blood Group</th>
                                <th>Contract Number</th>
                                <th>Status</th>
                                <th>Created At</th>
                                <th>Actions</th>
                            </tr>
                        </thead>
                        <tbody>
                            @forelse ($donors as $post)
                                <tr>
                                    <td>{{ $loop->iteration }}</td>
                                    <td>{{ $post->name ?? '' }}</td>
                                    <td>{{ $post->blood_group ?? '' }}</td>
                                    <td>{{ $post->contract_number ?? '' }}</td>
                                    <td>
                                        @if ($post->status == 0)
                                            <span class="badge bg-warning">Pending</span>
                                        @elseif ($post->status == 1)
                                            <span class="badge bg-primary">Approved</span>
                                        @endif
                                    </td>
                                    <td>{{ $post->created_at->format('d M Y') }}</td>
                                    <td>
                                        <a href="{{ route('blood_doners') }}"
                                            class="sirajganj_btn-header btn-info btn-sm">View</a>
                                        {{-- <a href="{{ route('post.edit', $post->id) }}"
                                            class="sirajganj_btn-header btn-warning btn-sm">Edit</a>
                                        <button type="button" class="sirajganj_btn-header btn-danger btn-sm"
                                            style="background-color: red"
                                            onclick="confirmDelete({{ $post->id }})">Delete</button>
                                        <form id="delete-form-{{ $post->id }}"
                                            action="{{ route('post.destroy', $post->id) }}" method="POST"
                                            style="display: none;">
                                            @csrf
                                            @method('DELETE')
                                        </form> --}}
                                    </td>
                                </tr>
                            @empty
                                <tr>
                                    <td colspan="5" class="text-center">No posts found.</td>
                                </tr>
                            @endforelse
                        </tbody>
                    </table>
                </div>

            </div>


        </div>

    </div>
@endsection
@push('front_js')

    @if (Session::has('success'))
        <script>
            Swal.fire({
                title: " Successful!",
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
    <script>
        function confirmDelete(postId) {
            Swal.fire({
                title: 'Are you sure?',
                text: "You won't be able to Delete this!",
                icon: 'warning',
                showCancelButton: true,
                confirmButtonColor: '#3085d6',
                cancelButtonColor: '#d33',
                confirmButtonText: 'Yes, delete it!'
            }).then((result) => {
                if (result.isConfirmed) {
                    document.getElementById('delete-form-' + postId).submit();
                }
            })
        }
    </script>
@endpush
