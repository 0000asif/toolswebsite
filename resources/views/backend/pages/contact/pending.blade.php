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
    </style>
    @include('backend.components.alert')
    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <section class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-6">
                        <h1>Pending Contact</h1>
                    </div>
                    <div class="col-sm-6">
                        <ol class="breadcrumb float-sm-right">
                            <li class="breadcrumb-item"><a href="{{ route('home') }}">Home</a></li>
                            <li class="breadcrumb-item active">Pending Contact</li>
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
                        <div class="card card-primary card-outline">
                            <div class="card-header d-flex align-items-center">
                                <div class="row w-100 py-3">
                                    <div class="col-md-2 col-6">
                                        {{-- // 0 = Pending | 1 = Confirmed | 2 = Send To Courier | 3 = Delivery | 4 = Cancel --}}
                                        @php
                                            use App\Models\Contact;
                                            $pending = Contact::where('status', '0')->count();
                                            $confirmed = Contact::where('status', '1')->count();
                                            $cancel = Contact::where('status', '2')->count();
                                            $trash = Contact::where('status', '3')->count();
                                        @endphp
                                        <a href="{{ route('contact.index') }}" class="btn btn-primary w-100">Pending
                                            &nbsp;&nbsp;&nbsp;&nbsp;<span
                                                class="badge badge-dark right">{{ $pending }}</span>
                                        </a>
                                        <span id="activeStatus" class="arrow-down"></span>
                                    </div>
                                    <div class="col-md-2 col-6">
                                        <a href="{{ route('CompletedContact') }}" class="btn btn-success w-100">Confirm
                                            &nbsp;&nbsp;&nbsp;&nbsp;<span
                                                class="badge badge-dark right">{{ $confirmed }}</span>
                                        </a>
                                    </div>
                                    <div class="col-md-2 col-6">
                                        <a href="{{ route('CancelContact') }}" class="btn btn-warning w-100">Cancel
                                            &nbsp;&nbsp;&nbsp;&nbsp;<span
                                                class="badge badge-dark right">{{ $cancel }}</span>
                                        </a>
                                    </div>
                                    {{-- <div class="col-md-2 col-6">
                                        <a href="#" class="btn btn-secondary w-100">Pending Order</a>
                                    </div> --}}
                                    <div class="col-md-2 col-6">
                                        <a href="{{ route('TrashContact') }}" class="btn btn-danger w-100">
                                            Trash
                                            &nbsp;&nbsp;&nbsp;&nbsp;<span
                                                class="badge badge-dark right">{{ $trash }}</span>
                                        </a>
                                    </div>
                                </div>

                            </div>
                            <!-- /.card-header -->
                            <div class="card-body">
                                <table id="example1" class="table table-bordered table-striped">
                                    <thead class="bg-gradient-light">
                                        <tr>
                                            <th>NO:</th>
                                            <th>Date</th>
                                            <th>Upd By</th>
                                            <th>Name</th>
                                            <th>Number</th>
                                            <th>Email</th>
                                            <th>Text</th>
                                            <th>Status</th>
                                            <th>Type</th>
                                            <th>Action</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach ($pending_contact as $value)
                                            <tr>
                                                <td>{{ $loop->iteration }}</td>
                                                <td>{{ $value->created_at->diffForHumans() }}</td>
                                                <td>{{ $value->user->name ?? "" }}</td>
                                                <td>{{ $value->name ?? '' }}</td>
                                                <td>{{ $value->number ?? '' }}</td>
                                                <td>{{ $value->email ?? '' }}</td>
                                                <td>
                                                    @php
                                                        $words = explode(' ', $value->text);
                                                        $firstTenWords = implode(' ', array_slice($words, 0, 15));
                                                    @endphp
                                                    <span class="short-text">{{ $firstTenWords }}...</span>
                                                    <span class="full-text"
                                                        style="display: none;">{{ $value->text }}</span>
                                                    <a href="javascript:void(0);" class="toggle-text"
                                                        onclick="toggleText(this)">more</a>
                                                </td>

                                                <td>
                                                    @if ($value->status == '0')
                                                        <span class="badge badge-primary">Pending</span>
                                                    @elseif ($value->status == '1')
                                                        <span class="badge badge-success">Confirmed</span>
                                                    @elseif ($value->status == '2')
                                                        <span class="badge badge-warning">Cancel</span>
                                                    @elseif ($value->status == '3')
                                                        <span class="badge badge-dark">Trash</span>
                                                    @endif
                                                </td>
                                                <td>
                                                    @if ($value->type == '1')
                                                        <span class="badge badge-success">Contact</span>
                                                    @elseif ($value->type == '2')
                                                        <span class="badge badge-warning">Adds</span>
                                                    @endif
                                                </td>
                                                <td>
                                                    {{-- <div class="btn btn-group" role="group"> --}}

                                                    {{-- <a class="btn btn-success btn-sm"
                                                            href="{{ route('post.show', $value->id) }}">
                                                            <i class="fa fa-eye"></i>
                                                        </a>

                                                        <a class="btn btn-primary btn-sm"
                                                            href="{{ route('post.edit', $value->id) }}">
                                                            <i class="fa fa-edit"></i>
                                                        </a>

                                                        <a type="button"
                                                            onclick="confirmDelete(event, {{ $value->id }})"
                                                            href="javascript:void(0)"
                                                            class="btn btn-danger btn-sm tableEdit">
                                                            <i class="fa fa-trash"></i>
                                                        </a>

                                                        <form id="delete-form-{{ $value->id }}"
                                                            action="{{ route('post.destroy', $value->id) }}" method="POST"
                                                            style="display: none;">
                                                            @csrf
                                                            @method('DELETE')
                                                        </form> --}}

                                                  <form action="{{ route('contact.update',$value->id) }}" method="post">
                                                    @csrf
                                                    @method('PUT')
                                                      <select name="status" id="" class="form-control">
                                                        <option value="0">Pending</option>
                                                        <option value="1">Confirmed</option>
                                                        <option value="2">Cancel</option>
                                                        <option value="3">Move To Trash</option>
                                                    </select>
                                                    <button class="btn btn-primary w-100 mt-2">Submit</button>
                                                  </form>
                                                </td>
                                            </tr>
                                            {{-- @include('admin.modal.value-delete') --}}
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
        function toggleText(element) {
            let shortText = element.previousElementSibling.previousElementSibling;
            let fullText = element.previousElementSibling;

            if (shortText.style.display === "none") {
                shortText.style.display = "inline";
                fullText.style.display = "none";
                element.textContent = "more";
            } else {
                shortText.style.display = "none";
                fullText.style.display = "inline";
                element.textContent = "less";
            }
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
