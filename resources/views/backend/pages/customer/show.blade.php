@extends('backend.layout.master-admin')

@section('content')
    @include('backend.components.alert')
    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <section class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-6">
                        <h1>Customer Details</h1>
                    </div>
                    <div class="col-sm-6">
                        <ol class="breadcrumb float-sm-right">
                            <li class="breadcrumb-item"><a href="{{ route('home') }}">Home</a></li>
                            <li class="breadcrumb-item"><a href="{{ route('customer.index') }}">Customers</a></li>
                            <li class="breadcrumb-item active">Customer Details</li>
                        </ol>
                    </div>
                </div>
            </div>
        </section>

        <!-- Main content -->
        <section class="content">
            <div class="container-fluid">
                <!-- Summary Cards Section -->
                <div class="row mt-4">
                    <div class="col-md-4 col-lg-2 col-sm-6 mb-4">
                        <div class="card text-center bg-info text-white" style="min-height: 150px;">
                            <div class="card-body d-flex flex-column justify-content-center">
                                <h6 class="card-title" style="font-size: 1rem;">Total Post Write</h6>
                                @php
                                    $total_post = App\Models\Post::where('customer_id', $customer->id)->count();
                                @endphp
                                <p class="card-text" style="font-size: 1.5rem; font-weight: bold;">
                                    {{ $total_post }}</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4 col-lg-2 col-sm-6 mb-4">
                        <div class="card text-center bg-success text-white" style="min-height: 150px;">
                            <div class="card-body d-flex flex-column justify-content-center">
                                <h6 class="card-title" style="font-size: 1rem;">Total Blog Write</h6>
                                @php
                                    $total_blog = App\Models\Blog::where('customer_id', $customer->id)->count();
                                @endphp
                                <p class="card-text" style="font-size: 1.5rem; font-weight: bold;">
                                    {{ $total_blog }}</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4 col-lg-2 col-sm-6 mb-4">
                        <div class="card text-center bg-warning text-white" style="min-height: 150px;">
                            <div class="card-body d-flex flex-column justify-content-center">
                                <h6 class="card-title" style="font-size: 1rem;">Total Job Post</h6>
                                @php
                                    $total_job = App\Models\Job::where('customer_id', $customer->id)->count();
                                @endphp
                                <p class="card-text" style="font-size: 1.5rem; font-weight: bold;">
                                    {{ $total_job }}</p>
                            </div>
                        </div>
                    </div>
                    {{-- <div class="col-md-4 col-lg-2 col-sm-6 mb-4">
                        <div class="card text-center bg-danger text-white" style="min-height: 150px;">
                            <div class="card-body d-flex flex-column justify-content-center">
                                @php
                                    $balance = App\Models\User::where('id', $customer->id)->sum('balance');
                                @endphp
                                <h6 class="card-title" style="font-size: 1rem;">Balance</h6>
                                <p class="card-text" style="font-size: 1.5rem; font-weight: bold;">
                                    ${{ number_format($balance, 2) }}</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4 col-lg-2 col-sm-6 mb-4">
                        <div class="card text-center bg-primary text-white" style="min-height: 150px;">
                            <div class="card-body d-flex flex-column justify-content-center">
                                <h6 class="card-title" style="font-size: 1rem;">Total Blog Comments</h6>
                                @php
                                    $total_comments = App\Models\BlogComment::where('user_id', $customer->id)
                                        ->where('status', '1')
                                        ->count();
                                @endphp
                                <p class="card-text" style="font-size: 1.5rem; font-weight: bold;">{{ $total_comments }}</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4 col-lg-2 col-sm-6 mb-4">
                        <div class="card text-center bg-secondary text-white" style="min-height: 150px;">
                            <div class="card-body d-flex flex-column justify-content-center">
                                <h6 class="card-title" style="font-size: 1rem;">Total Project Reviews</h6>
                                @php
                                    $total_comments = App\Models\ProjectReview::where('user_id', $customer->id)
                                        ->where('status', '1')
                                        ->count();
                                @endphp
                                <p class="card-text" style="font-size: 1.5rem; font-weight: bold;">{{ $total_comments }}</p>
                            </div>
                        </div>
                    </div> --}}
                </div>


                <!-- Basic Information Section -->
                <div class="col-12 mb-4">
                    <div class="card">
                        <div class="card-header bg-primary text-white">
                            <h3 class="card-title">Customer Information</h3>
                        </div>
                        <div class="card-body">
                            <div class="row">
                                <div class="col-md-6">
                                    <p><strong>Name:</strong> {{ $customer->name ?? 'N/A' }}</p>
                                    <p><strong>Email:</strong> {{ $customer->email ?? 'N/A' }}</p>
                                </div>
                                <div class="col-md-6">
                                    <p><strong>Phone Number:</strong> {{ $customer->phone ?? 'N/A' }}</p>
                                    <p><strong>Status:</strong>
                                        @if ($customer->status == 1)
                                            <span class="badge badge-success">Active</span>
                                        @else
                                            <span class="badge badge-danger">Inactive</span>
                                        @endif
                                    </p>
                                </div>
                                <div class="col-md-6">
                                    <p><strong>Address:</strong> {{ $customer->address ?? 'N/A' }}</p>
                                    <p><strong>Created Time</strong> {{ date('d-M-Y', strtotime($customer->created_at)) }}
                                    </p>
                                </div>
                                <div class="col-12">
                                    <p>
                                        <strong>Image</strong>
                                        <img src="{{ asset('images/customers/' . $customer->image) }}" alt="Current Image"
                                            width="100">
                                    </p>
                                </div>
                                <div class="col-12">
                                    <a href="{{ route('customer.edit', $customer->id) }}" class="btn btn-primary">Edit
                                        Customer</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="card">
                    <div class="card-header d-flex align-items-center">
                        <div class="flex-grow-1">
                            <h3 class="card-title">Show <b>{{ $customer->name ?? 'N/A' }} </b> Blog Created</h3>
                        </div>
                        <div>
                            <a href="{{ route('blogs.index') }}" class="btn btn-primary btn-sm">View All Blogs</a>
                        </div>
                    </div>
                    <!-- /.card-header -->
                    <div class="card-body">
                        <table id="example1" class="table table-bordered table-striped">
                            <thead>
                                <tr>
                                    <th>SL</th>
                                    <th>Image</th>
                                    <th>Title</th>
                                    <th>Category</th>
                                    <th>Status</th>
                                    <th>Created At</th>
                                    <th>Actions</th>
                                </tr>
                            </thead>
                            <tbody>
                                @forelse ($blogs as $blog)
                                    <tr>
                                        <td>{{ $loop->iteration }}</td>
                                        <td>
                                            <img src="{{ asset('images/blogs/' . $blog->main_img) }}" alt="Blog Image"
                                                width="100" height="100">
                                        </td>

                                        <td>{{ $blog->title }}</td>
                                        <td>{{ $blog->category->name }}</td>
                                        <td>
                                            <span class="badge {{ $blog->status ? 'bg-success' : 'bg-danger' }}">
                                                {{ $blog->status ? 'Active' : 'Inactive' }}
                                            </span>
                                        </td>
                                        <td>{{ $blog->created_at->format('d M, Y') }}</td>
                                        <td>
                                            <a href="{{ route('blogs.show', $blog->id) }}" class="btn btn-info btn-sm"><i
                                                    class="fa fa-eye"></i></a>
                                            <a href="{{ route('blogs.edit', $blog->id) }}"
                                                class="btn btn-warning btn-sm"><i class="fa fa-edit"></i></a>

                                            <a type="button" onclick="confirmDelete(event, {{ $blog->id }})"
                                                href="javascript:void(0)" class="btn btn-danger btn-sm tableEdit">
                                                <i class="fa fa-trash"></i>
                                            </a>

                                            <form id="delete-form-{{ $blog->id }}"
                                                action="{{ route('blogs.destroy', $blog->id) }}" method="POST"
                                                style="display: none;">
                                                @csrf
                                                @method('DELETE')
                                            </form>
                                        </td>
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                    <!-- /.card-body -->
                </div>

                <div class="card">
                    <div class="card-header d-flex align-items-center">
                        <div class="flex-grow-1">
                            <h3 class="card-title">Show <b>{{ $customer->name ?? 'N/A' }} </b> Post Created</h3>
                        </div>
                        <div>
                            <a href="{{ route('post.index') }}" class="btn btn-primary btn-sm">View All Posts</a>
                        </div>
                    </div>
                    <!-- /.card-header -->
                    <div class="card-body">
                        <table id="example1" class="table table-bordered table-striped">
                            <thead class="bg-gradient-light">
                                <tr>
                                    <th>NO:</th>
                                    <th>Image</th>
                                    <th>Title</th>
                                    <th>Category Name</th>
                                    <th>Status</th>
                                    <th>Added By</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($blogs as $blog)
                                    <tr>
                                        <td>{{ $loop->iteration }}</td>
                                        <td>
                                            <img src="{{ asset('image/post/' . $blog->img) }}" alt="Post Image"
                                                width="60">
                                        </td>
                                        <td>
                                            @php
                                                $words = explode(' ', $blog->title);
                                                $firstTenWords = implode(' ', array_slice($words, 0, 10));
                                            @endphp
                                            {{ $firstTenWords }} ......
                                        </td>
                                        {{-- <td>{{ $blog->title }}</td> --}}
                                        <td>{{ $blog->category->name ?? '' }}</td>
                                        <td>
                                            @if ($blog->status == '1')
                                                <span class="badge badge-primary">Active</span>
                                            @else
                                                <span class="badge badge-danger">Inactive</span>
                                            @endif
                                        </td>
                                        <td>
                                            {{ $blog->user->name ?? 'N/A' }}
                                        </td>
                                        <td>
                                            <div class="btn btn-group" role="group">

                                                <a class="btn btn-success btn-sm"
                                                    href="{{ route('post.show', $blog->id) }}">
                                                    <i class="fa fa-eye"></i>
                                                </a>

                                                <a class="btn btn-primary btn-sm"
                                                    href="{{ route('post.edit', $blog->id) }}">
                                                    <i class="fa fa-edit"></i>
                                                </a>

                                                <a type="button" onclick="confirmDelete(event, {{ $blog->id }})"
                                                    href="javascript:void(0)" class="btn btn-danger btn-sm tableEdit"><i
                                                        class="fa fa-trash"></i></a>
                                            </div>
                                            <!-- Delete form -->
                                            <form id="delete-form-{{ $blog->id }}"
                                                action="{{ route('post.destroy', $blog->id) }}" method="POST"
                                                style="display: none;">
                                                @csrf
                                                @method('DELETE')
                                            </form>
                                        </td>
                                    </tr>
                                    {{-- @include('admin.modal.blog-delete') --}}
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                    <!-- /.card-body -->
                </div>

                <div class="card">
                    <div class="card-header d-flex align-items-center">
                        <div class="flex-grow-1">
                            <h3 class="card-title">Show <b>{{ $customer->name ?? 'N/A' }} </b> Job Created</h3>
                        </div>
                        <div>
                            <a href="{{ route('job.index') }}" class="btn btn-primary btn-sm">View All Jobs</a>
                        </div>
                    </div>
                    <!-- /.card-header -->
                    <div class="card-body">
                        <table id="example1" class="table table-bordered table-striped">
                            <thead class="thead-light">
                                <tr>
                                    <th>SL</th>
                                    <th>Title</th>
                                    <th>Company Name</th>
                                    <th>Location</th>
                                    <th>Salary</th>
                                    <th>Status</th>
                                    <th>Actions</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($jobs as $value)
                                    <tr>
                                        <td>{{ $loop->iteration }}</td>
                                        <td>{{ $value->title }}</td>
                                        <td>{{ $value->company_name }}</td>
                                        <td>{{ $value->location }}</td>
                                        <td>{{ $value->salary }}</td>
                                        <td>
                                            @if ($value->status == '1')
                                                <span class="badge badge-primary">Active</span>
                                            @else
                                                <span class="badge badge-danger">InActive</span>
                                            @endif
                                        </td>
                                        <td>

                                            <a href="{{ route('job.show', $value->id) }}"
                                                class="btn btn-success btn-sm tableEdit"><i class="fa fa-eye"></i>
                                            </a>

                                            <a href="{{ route('job.edit', $value->id) }}"
                                                class="btn btn-info btn-sm tableEdit"><i class="fa fa-edit"></i>
                                            </a>

                                            <a type="button" onclick="confirmDelete(event, {{ $value->id }})"
                                                href="javascript:void(0)" class="btn btn-danger btn-sm tableEdit"><i
                                                    class="fa fa-trash"></i></a>

                                            <!-- Delete form -->
                                            <form id="delete-form-{{ $value->id }}"
                                                action="{{ route('job.destroy', $value->id) }}" method="POST"
                                                style="display: none;">
                                                @csrf
                                                @method('DELETE')
                                            </form>
                                        </td>
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                    <!-- /.card-body -->
                </div>

                {{-- <!-- Footer Actions -->
                <div class="row mt-4">
                    <div class="col-12 text-center">
                        <a href="{{ route('customer.index') }}" class="btn btn-primary">Back to Customers</a>

                        <button type="button" onclick="confirmDelete(event, {{ $customer->id }})"
                            class="btn btn-danger">Delete Customer</button>

                        <!-- Delete form -->
                        <form id="delete-form-{{ $customer->id }}"
                            action="{{ route('customer.destroy', $customer->id) }}" method="POST"
                            style="display: none;">
                            @csrf
                            @method('DELETE')
                        </form>
                    </div>
                </div> --}}
            </div>
        </section>
    </div>
@endsection

@push('js')
    <script>
        function confirmDelete(event, customerId) {
            event.preventDefault();

            Swal.fire({
                title: 'Are you sure?',
                text: "You won't be able to revert this!",
                icon: 'warning',
                showCancelButton: true,
                confirmButtonColor: '#d33',
                cancelButtonColor: '#3085d6',
                confirmButtonText: 'Yes, delete it!'
            }).then((result) => {
                if (result.isConfirmed) {
                    $("#delete-form-" + customerId).submit();
                } else if (result.dismiss === Swal.DismissReason.cancel) {
                    console.log('User cancelled deletion');
                }
            });
        }
    </script>
@endpush
