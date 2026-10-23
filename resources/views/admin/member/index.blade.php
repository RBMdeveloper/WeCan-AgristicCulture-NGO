@extends('admin.template.admin_master')

@section('content')

<div class="page-content">

    <div class="container-fluid">

        {{-- Success Message --}}
        @if(session('success'))

            <div class="alert alert-success alert-dismissible fade show">

                {{ session('success') }}

                <button type="button"
                        class="btn-close"
                        data-bs-dismiss="alert">
                </button>

            </div>

        @endif


        {{-- Validation Errors --}}
        @if ($errors->any())

            <div class="alert alert-danger alert-dismissible fade show">

                <ul class="mb-0">

                    @foreach ($errors->all() as $error)

                        <li>{{ $error }}</li>

                    @endforeach

                </ul>

                <button type="button"
                        class="btn-close"
                        data-bs-dismiss="alert">
                </button>

            </div>

        @endif


        <div class="row">

            <div class="col-12">

                <div class="card">

                    {{-- Header --}}
                    <div class="card-header">

                        <div class="row align-items-center">

                            <div class="col">

                                <h4 class="card-title">

                                    Team Members

                                </h4>

                            </div>

                            <div class="col-auto">

                                <button class="btn btn-primary btn-sm"
                                        data-bs-toggle="modal"
                                        data-bs-target="#addMemberModal">

                                    <i class="icofont-plus"></i>

                                    Add Member

                                </button>

                            </div>

                        </div>

                    </div>


                    {{-- Body --}}
                    <div class="card-body">

                        <div class="alert alert-info">

                            Drag members up/down to reorder them.

                        </div>

                        <div class="table-responsive">

                            <table class="table table-hover align-middle mb-0">

                                <thead>

                                    <tr>

                                        <th width="50">#</th>

                                        <th width="120">Photo</th>

                                        <th>Name</th>

                                        <th>Designation</th>

                                        <th>Status</th>

                                        <th width="180">Action</th>

                                    </tr>

                                </thead>

                                <tbody id="sortable-members">

                                    @forelse($members as $member)

                                        <tr data-id="{{ $member->id }}">

                                            {{-- Drag --}}
                                            <td>

                                                <i class="icofont-drag drag-handle"
                                                   style="cursor: move; font-size:20px;">
                                                </i>

                                            </td>


                                            {{-- Photo --}}
                                            <td>

                                                <img src="{{ asset($member->photo) }}"
                                                     width="70"
                                                     height="70"
                                                     style="object-fit:cover;
                                                            border-radius:50%;">

                                            </td>


                                            {{-- Name --}}
                                            <td>

                                                <div class="fw-bold">

                                                    {{ $member->name }}

                                                </div>

                                            </td>


                                            {{-- Designation --}}
                                            <td>

                                                {{ $member->designation }}

                                            </td>


                                            {{-- Status --}}
                                            <td>

                                                @if($member->status)

                                                    <a href="{{ route('admin.members.change_status', $member->id) }}"
                                                       class="badge bg-success text-decoration-none">

                                                        Active

                                                    </a>

                                                @else

                                                    <a href="{{ route('admin.members.change_status', $member->id) }}"
                                                       class="badge bg-danger text-decoration-none">

                                                        Inactive

                                                    </a>

                                                @endif

                                            </td>


                                            {{-- Actions --}}
                                            <td>

                                                {{-- Edit --}}
                                                <button class="btn btn-sm btn-outline-primary editMemberBtn"

                                                        data-id="{{ $member->id }}"
                                                        data-name="{{ $member->name }}"
                                                        data-designation="{{ $member->designation }}"
                                                        data-status="{{ $member->status }}">

                                                    <i class="icofont-edit"></i>

                                                </button>


                                                {{-- Delete --}}
                                                <form action="{{ route('admin.members.destroy', $member->id) }}"
                                                      method="POST"
                                                      class="d-inline"
                                                      onsubmit="return confirm('Are you sure?')">

                                                    @csrf
                                                    @method('DELETE')

                                                    <button type="submit"
                                                            class="btn btn-sm btn-outline-danger">

                                                        <i class="icofont-trash"></i>

                                                    </button>

                                                </form>

                                            </td>

                                        </tr>

                                    @empty

                                        <tr>

                                            <td colspan="6"
                                                class="text-center text-muted py-5">

                                                No members found.

                                            </td>

                                        </tr>

                                    @endforelse

                                </tbody>

                            </table>

                        </div>

                    </div>

                </div>

            </div>

        </div>

    </div>

</div>



{{-- ========================= ADD MODAL ========================= --}}
<div class="modal fade"
     id="addMemberModal"
     tabindex="-1">

    <div class="modal-dialog modal-lg">

        <div class="modal-content">

            <form action="{{ route('admin.members.store') }}"
                  method="POST"
                  enctype="multipart/form-data">

                @csrf

                <div class="modal-header">

                    <h5 class="modal-title">

                        Add Member

                    </h5>

                    <button type="button"
                            class="btn-close"
                            data-bs-dismiss="modal">
                    </button>

                </div>

                <div class="modal-body">

                    <div class="row">

                        {{-- Photo --}}
                        <div class="col-md-12 mb-3">

                            <label class="form-label">

                                Photo *

                            </label>

                            <input type="file"
                                   name="photo"
                                   class="form-control"
                                   required>

                        </div>


                        {{-- Name --}}
                        <div class="col-md-6 mb-3">

                            <label class="form-label">

                                Name *

                            </label>

                            <input type="text"
                                   name="name"
                                   class="form-control"
                                   required>

                        </div>


                        {{-- Designation --}}
                        <div class="col-md-6 mb-3">

                            <label class="form-label">

                                Designation *

                            </label>

                            <input type="text"
                                   name="designation"
                                   class="form-control"
                                   required>

                        </div>

                    </div>

                </div>

                <div class="modal-footer">

                    <button type="submit"
                            class="btn btn-primary">

                        Save Member

                    </button>

                </div>

            </form>

        </div>

    </div>

</div>



{{-- ========================= EDIT MODAL ========================= --}}
<div class="modal fade"
     id="editMemberModal"
     tabindex="-1">

    <div class="modal-dialog modal-lg">

        <div class="modal-content">

            <form id="editMemberForm"
                  method="POST"
                  enctype="multipart/form-data">

                @csrf

                <div class="modal-header">

                    <h5 class="modal-title">

                        Edit Member

                    </h5>

                    <button type="button"
                            class="btn-close"
                            data-bs-dismiss="modal">
                    </button>

                </div>

                <div class="modal-body">

                    <div class="row">

                        {{-- Photo --}}
                        <div class="col-md-12 mb-3">

                            <label class="form-label">

                                Photo

                            </label>

                            <input type="file"
                                   name="photo"
                                   class="form-control">

                        </div>


                        {{-- Name --}}
                        <div class="col-md-6 mb-3">

                            <label class="form-label">

                                Name *

                            </label>

                            <input type="text"
                                   name="name"
                                   id="edit_name"
                                   class="form-control"
                                   required>

                        </div>


                        {{-- Designation --}}
                        <div class="col-md-6 mb-3">

                            <label class="form-label">

                                Designation *

                            </label>

                            <input type="text"
                                   name="designation"
                                   id="edit_designation"
                                   class="form-control"
                                   required>

                        </div>


                        {{-- Status --}}
                        <div class="col-md-6 mb-3">

                            <label class="form-label">

                                Status

                            </label>

                            <select name="status"
                                    id="edit_status"
                                    class="form-select">

                                <option value="1">

                                    Active

                                </option>

                                <option value="0">

                                    Inactive

                                </option>

                            </select>

                        </div>

                    </div>

                </div>

                <div class="modal-footer">

                    <button type="submit"
                            class="btn btn-primary">

                        Update Member

                    </button>

                </div>

            </form>

        </div>

    </div>

</div>



{{-- ========================= SCRIPTS ========================= --}}
<script src="https://cdn.jsdelivr.net/npm/sortablejs@1.15.0/Sortable.min.js"></script>
<!-- jQuery -->
<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>

<!-- Bootstrap 5 -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>

<script>

$(document).ready(function () {

    // =====================================
    // EDIT MODAL
    // =====================================

    $('.editMemberBtn').click(function () {

        let id = $(this).data('id');

        $('#edit_name').val($(this).data('name'));

        $('#edit_designation').val($(this).data('designation'));

        $('#edit_status').val($(this).data('status'));

        $('#editMemberForm').attr(
            'action',
            '/admin/members/update/' + id
        );

        let modal = new bootstrap.Modal(
            document.getElementById('editMemberModal')
        );

        modal.show();

    });


    // =====================================
    // SORTABLE
    // =====================================

    let sortable = document.getElementById('sortable-members');

    new Sortable(sortable, {

        animation: 150,

        handle: '.drag-handle',

        onEnd: function () {

            let orders = [];

            $('#sortable-members tr').each(function(index) {

                orders.push({
                    id: $(this).data('id'),
                    position: index + 1
                });

            });

            $.ajax({

                url: "{{ route('admin.members.update_order') }}",

                type: "POST",

                data: {
                    _token: "{{ csrf_token() }}",
                    orders: orders
                },

                success: function(response) {

                    console.log(response);

                },

                error: function(error) {

                    console.log(error);

                }

            });

        }

    });

});

</script>

@endsection