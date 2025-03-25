@extends('backend.layout.master-admin')
@section('content')
    @include('backend.components.alert')
    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <section class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-6">
                        <h1>Blog</h1>
                    </div>
                    <div class="col-sm-6">
                        <ol class="breadcrumb float-sm-right">
                            <li class="breadcrumb-item"><a href="{{ route('home') }}">Home</a></li>
                            <li class="breadcrumb-item active">Blog</li>
                        </ol>
                    </div>
                </div>
            </div><!-- /.container-fluid -->
        </section>

        <!-- Main content -->
        <section class="content">

            <div class="container-fluid">
                <div class="row">
                    <div class="col-12">
                        <div class="card">
                            <div class="card-header d-flex align-items-center">
                                <div class="flex-grow-1">
                                    <h3 class="card-title">Show All Blog</h3>
                                </div>
                                <div>
                                    <a href="{{ route('blog.create') }}" class="btn btn-primary btn-sm">Add New</a>
                                </div>
                            </div>
                            <!-- /.card-header -->
                            <div class="card-body">
                                <table id="example1" class="table table-bordered table-striped">
                                    <thead class="bg-gradient-light">
                                        <tr>
                                            <th>NO:</th>
                                            <th>Image</th>
                                            <th>Date </th>
                                            <th>Title</th>
                                            <th>Category Name</th>
                                            <th>View</th>
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
                                                    <img src="{{ asset('public/image/post/' . $blog->img) }}"
                                                        alt="Post Image" width="60">
                                                </td>
                                                <td>{{ $blog->created_at->diffForHumans() }}</td>
                                                <td>
                                                    @php
                                                        $words = explode(' ', $blog->title);
                                                        $firstTenWords = implode(' ', array_slice($words, 0, 10));
                                                    @endphp
                                                    {{ $firstTenWords }} ......
                                                </td>
                                                {{-- <td>{{ $blog->title }}</td> --}}
                                                <td>{{ $blog->category->name ?? '' }}</td>
                                                <td>{{ $blog->view ?? '' }}</td>
                                                <td>
                                                    @if ($blog->status == '1')
                                                        <span class="badge badge-primary">Active</span>
                                                    @else
                                                        <span class="badge badge-danger">Inactive</span>
                                                    @endif
                                                </td>
                                                <td>
                                                    {{ $blog->customer->name ?? 'N/A' }}
                                                </td>
                                                <td>
                                                    <div class="btn btn-group" role="group">
                                                        @if ($blog->status == '1')
                                                            
                                                        {{-- Click to copy blog link --}}
                                                        <button class="btn btn-warning btn-sm"
                                                            onclick="copyToClipboard('{{ route('blog.view', $blog->slug) }}')">
                                                            <i class="fa fa-link"></i>
                                                        </button>

                                                        @endif
                                                        <a target="__blank" class="btn btn-success btn-sm"
                                                            href="{{ route('blog.show', $blog->slug) }}" target="__blank">
                                                            <i class="fa fa-eye"></i>
                                                        </a>

                                                        <a class="btn btn-primary btn-sm"
                                                            href="{{ route('blog.edit', $blog->id) }}">
                                                            <i class="fa fa-edit"></i>
                                                        </a>

                                                        @if (Auth()->user()->type == '1')
                                                            <a type="button"
                                                                onclick="confirmDelete(event, {{ $blog->id }})"
                                                                href="javascript:void(0)"
                                                                class="btn btn-danger btn-sm tableEdit">
                                                                <i class="fa fa-trash"></i>
                                                            </a>

                                                            <form id="delete-form-{{ $blog->id }}"
                                                                action="{{ route('blog.destroy', $blog->id) }}"
                                                                method="POST" style="display: none;">
                                                                @csrf
                                                                @method('DELETE')
                                                            </form>
                                                        @endif
                                                </td>
                                            </tr>
                                            {{-- @include('admin.modal.blog-delete') --}}
                                        @endforeach
                                    </tbody>
                                </table>
                            </div>
                            <!-- /.card-body -->
                        </div>
                        <!-- /.card -->
                    </div>
                    <!-- /.col -->
                </div>
                <!-- /.row -->
            </div>
            <!-- /.container-fluid -->
        </section>

        <!-- /.content -->
    </div>
@endsection
@push('js')
    <script>
        function copyToClipboard(url) {
            navigator.clipboard.writeText(url).then(() => {
                toastr.success('Blog link copied to clipboard!');
            }).catch(err => {
                console.error('Failed to copy: ', err);
            });
        }
    </script>

    <script>
        function confirmDelete(event, userId) {
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
                if (result.value) {
                    $("#delete-form-" + userId).submit();
                } else if (result.dismiss === Swal.DismissReason.cancel) {
                    console.log('User cancelled deletion');
                }
            });
        }
    </script>
@endpush
