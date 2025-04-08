@extends('backend.layout.master-admin')
@section('content')
    <style>
        .arrow-down {
            display: inline-block;
            width: 0;
            height: 0;
            border-left: 13px solid transparent;
            border-right: 13px solid transparent;
            border-top: 13px solid #007bff;
            /* Color of the arrow */
            /* Space between text and arrow */
            vertical-align: middle;
            /* Align the arrow with the text */
            position: absolute;
            top: 36px;
            right: 43px;
        }

        .allPost {
            border-top: 13px solid #ffc107 !important;
        }

        .publish {
            border-top: 13px solid #28a745 !important;
        }

        .trash {
            border-top: 13px solid #343a40 !important;
        }

        .pending {
            border-top: 13px solid #dc3545 !important;
        }
    </style>
    @include('backend.components.alert')
    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <section class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-6">
                        @if ($type == 'trash')
                            <h1>Show Trash Tools</h1>
                        @elseif ($type == 'pending')
                            <h1>Show All Pending Tools</h1>
                        @elseif ($type == 'all')
                            <h1>Show All Tools</h1>
                        @elseif ($type == 'public')
                            <h1>Show All Publish Tools</h1>
                        @endif
                    </div>
                    <div class="col-sm-6">
                        <ol class="breadcrumb float-sm-right">
                            <li class="breadcrumb-item"><a href="{{ route('home') }}">Home</a></li>
                            <li class="breadcrumb-item active">Tools</li>
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
                            <div class="card-header d-flex align-items-center justify-content-end">

                                <a href="{{ route('tools.create') }}" class="btn btn-primary">Add_new</a>


                            </div>
                            <!-- /.card-header -->
                            <div class="card-body">
                                <table id="example1" class="table table-bordered table-striped">
                                    <thead>
                                        <tr>
                                            <th>SL</th>
                                            <th>Date</th>
                                            <th>Image</th>
                                            <th>Title</th>
                                            <th>Views</th>
                                            <th>Added By</th>
                                            <th>Category</th>
                                            <th>Status</th>
                                            <th>Actions</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @forelse ($blogs as $blog)
                                            <tr>
                                                <td>{{ $loop->iteration }}</td>
                                                <td>{{ $blog->created_at->diffForHumans() }}</td>

                                                <td>
                                                    <img src="{{ asset('public/images/blogs/' . $blog->main_img) }}"
                                                        alt=" img" width="100" height="100">
                                                </td>
                                                <td>{{ $blog->title }}</td>
                                                <td>{{ $blog->view ?? '0' }}</td>
                                                <td>{{ $blog->user->name ?? '' }}</td>
                                                <td>{{ $blog->category->name }}</td>
                                                <td>
                                                    <span class="badge {{ $blog->status ? 'bg-success' : 'bg-danger' }}">
                                                        {{ $blog->status ? 'Active' : 'Inactive' }}
                                                    </span>
                                                </td>

                                                <td>
                                                    <div class="btn-group">

                                                        {{-- Click to copy blog link --}}
                                                        {{-- <button class="btn btn-primary btn-sm"
                                                            onclick="copyToClipboard('{{ route('single.post', $blog->slug) }}')">
                                                            <i class="fa fa-link"></i>
                                                        </button> --}}

                                                        <a target="__blank" href="{{ route('tools.show', $blog->slug) }}"
                                                            class="btn btn-info btn-sm"><i class="fa fa-eye"></i></a>

                                                        <a href="{{ route('tools.edit', $blog->id) }}"
                                                            class="btn btn-warning btn-sm"><i class="fa fa-edit"></i></a>

                                                        @if ($type == 'trash')
                                                            <a href="{{ route('BlogRestor', $blog->id) }}"
                                                                class="btn btn-primary btn-sm">Restore</i></a>
                                                        @else
                                                            <a href="{{ route('BlogTrash', $blog->id) }}"
                                                                class="btn btn-danger btn-sm">Trash</i></a>
                                                        @endif

                                                        @if (Auth()->user()->type == 1)
                                                            <a type="button"
                                                                onclick="confirmDelete(event, {{ $blog->id }})"
                                                                href="javascript:void(0)"
                                                                class="btn btn-dark btn-sm tableEdit">
                                                                <i class="fa fa-trash"></i>
                                                            </a>

                                                            <form id="delete-form-{{ $blog->id }}"
                                                                action="{{ route('tools.destroy', $blog->id) }}"
                                                                method="POST" style="display: none;">
                                                                @csrf
                                                                @method('DELETE')
                                                            </form>
                                                        @endif
                                                    </div>

                                                </td>
                                            </tr>
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
                toastr.success('Post link copied to clipboard!');
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
