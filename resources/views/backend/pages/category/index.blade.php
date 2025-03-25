@extends('backend.layout.master-admin')
@section('content')
    @include('backend.components.alert')
    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <section class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-6">
                        <h1>Category</h1>
                    </div>
                    <div class="col-sm-6">
                        <ol class="breadcrumb float-sm-right">
                            <li class="breadcrumb-item"><a href="{{ route('home') }}">Home</a></li>
                            <li class="breadcrumb-item active">Category</li>
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
                                    <h3 class="card-title">Show Category</h3>
                                </div>
                                <div>
                                    <a href="{{ route('category.create') }}" class="btn btn-primary btn-sm">Add New</a>
                                </div>
                            </div>
                            <!-- /.card-header -->
                            <div class="card-body">
                                <table id="example1" class="table table-bordered table-striped">
                                    <thead>
                                        <tr>
                                            <th>NO:</th>
                                            <th>Category Name</th>
                                            <th>Image</th>
                                            <th>View</th>
                                            <th>Staus</th>
                                            <th>Created at</th>
                                            <th>Action</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach ($categories as $value)
                                            <tr>
                                                <td>{{ $loop->iteration }}</td>
                                                <td>{{ $value->name }}</td>
                                                <td>

                                                    <img src="{{ asset('public/image/category/' . $value->image) }}"
                                                        alt="Current Image" width="100">
                                                </td>
                                                 <td>{{ $value->view ?? "" }}</td>
                                                <td>
                                                    @if ($value->status == 1)
                                                        <span class="badge badge-success">Active</span>
                                                    @else
                                                          <span class="badge badge-danger">Inactive</span>
                                                    @endif
                                                </td>
                                               <td>{{ $value->created_at->diffForHumans() }}</td>
                                              

                                                <td>
                                                    <a href="{{ route('category.edit', $value->id) }}"
                                                        class="btn btn-warning btn-sm"><i class="fa fa-edit"></i></a>

                                                    <a type="button" onclick="confirmDelete(event, {{ $value->id }})"
                                                        href="javascript:void(0)" class="btn btn-danger btn-sm tableEdit">
                                                        <i class="fa fa-trash"></i>
                                                    </a>

                                                    <form id="delete-form-{{ $value->id }}"
                                                        action="{{ route('category.destroy', $value->id) }}" method="POST"
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
