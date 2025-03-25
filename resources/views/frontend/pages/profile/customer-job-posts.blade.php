@extends('frontend.components.front-master')
@section('metaauthor')
    User All Job Posts
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
            <a href="{{ Route('CustomerProfile') }}" class="sirajganj_btn-header"><i class="bi bi-arrow-left"></i> Back</a>
            <div class="col-md-12">
                <div class="right-text mb-3">
                    <div class="mas_batch">
                        <div class="cadrd">
                            <div class="card-hesader align-items-center text-center">
                                <h2 class="profile_color">আমার সকল চাকরির বিজ্ঞপ্তি
                                </h2>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="table-responsive">
                    @if (count($jobposts) == 0)
                        <div class="alert alert-danger"></div>
                    @else
                        <table class="table table-bordered">
                            <thead>
                                <tr>
                                    <th>SL</th>
                                    <th>Title</th>
                                    <th>Company Name</th>
                                    <th>Job Category</th>
                                    <th>Created At</th>
                                    <th>Deadline</th>
                                    <th>Status</th>
                                    <th>Actions</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($jobposts as $post)
                                    <tr>
                                        <td>{{ $loop->iteration }}</td>
                                        <td>{{ $post->title ?? '' }}</td>
                                        <td>{{ $post->company_name ?? '' }}</td>
                                        <td>{{ $post->jobCategory->name ?? '' }}</td>
                                        <td>{{ $post->created_at->format('d M Y') }}</td>
                                        <td>{{ date('d M Y', strtotime($post->deadline)) ?? '' }}</td>
                                        <td>
                                            @if ($post->status == 0)
                                                <span class="badge bg-warning">Pending</span>
                                            @elseif ($post->status == 1)
                                                <span class="badge bg-primary">Approved</span>
                                            @endif
                                        </td>
                                        <td>
                                            <a href="{{ route('job.view', $post->slug) }}"
                                                class="sirajganj_btn-header  btn-info btn-sm">View</a>
                                            {{-- <a href="{{ route('post.edit', $post->id) }}"
                                                class="btn btn-warning btn-sm">Edit</a>
                                            <form action="{{ route('post.destroy', $post->id) }}" method="POST"
                                                style="display:inline;">
                                                @csrf
                                                @method('DELETE')
                                                <button type="submit" class="btn btn-danger btn-sm">Delete</button>
                                            </form> --}}
                                        </td>
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
                    @endif

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

@endpush
