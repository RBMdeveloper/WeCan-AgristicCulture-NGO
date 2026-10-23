@extends('admin.template.admin_master')

@section('content')

<div class="page-content">
    <div class="container-fluid">

        {{-- Success Message --}}
        @if(session('success'))
            <div class="alert alert-success alert-dismissible fade show" role="alert">
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

                    {{-- Card Header --}}
                    <div class="card-header">

                        <div class="row align-items-center">

                            <div class="col">
                                <h4 class="card-title">
                                    Banner Management
                                </h4>
                            </div>

                            <div class="col-auto">

                                <button class="btn btn-primary btn-sm"
                                        data-bs-toggle="modal"
                                        data-bs-target="#addBannerModal">

                                    <i class="icofont-plus"></i>
                                    Add Banner

                                </button>

                            </div>

                        </div>

                    </div>

                    {{-- Card Body --}}
                    <div class="card-body">

                        <div class="alert alert-info">

                            <strong>Ordering System:</strong>

                            Drag banners up/down to reorder them.

                        </div>

                        <div class="table-responsive">

                            <table class="table table-hover align-middle mb-0">

                                <thead class="thead-light">

                                    <tr>

                                        <th width="50">#</th>

                                        <th width="120">Image</th>

                                        <th>Heading</th>

                                        <th>Button</th>

                                        <th>Status</th>

                                        <th width="180">Action</th>

                                    </tr>

                                </thead>

                                <tbody id="sortable-banner">

                                    @forelse($banners as $banner)

                                        <tr data-id="{{ $banner->id }}">

                                            {{-- Drag --}}
                                            <td>
                                                <i class="icofont-drag drag-handle"
                                                   style="cursor: move; font-size:20px;">
                                                </i>
                                            </td>

                                            {{-- Image --}}
                                            <td>

                                                <img src="{{ asset($banner->image) }}"
                                                     width="100"
                                                     height="60"
                                                     style="object-fit:cover;
                                                            border-radius:8px;">

                                            </td>

                                            {{-- Heading --}}
                                            <td>

                                                <div class="fw-bold">
                                                    {{ $banner->heading }}
                                                </div>

                                                @if($banner->sub_heading)
                                                    <small class="text-muted">
                                                        {{ $banner->sub_heading }}
                                                    </small>
                                                @endif

                                            </td>

                                            {{-- Button --}}
                                            <td>

                                                @if($banner->button_text)

                                                    <span class="badge bg-primary">

                                                        {{ $banner->button_text }}

                                                    </span>

                                                @else

                                                    <span class="text-muted">
                                                        —
                                                    </span>

                                                @endif

                                            </td>

                                            {{-- Status --}}
                                            <td>

                                                @if($banner->status)

                                                    <a href="{{ route('admin.banners.change_status', $banner->id) }}"
                                                       class="badge bg-success text-decoration-none">

                                                        Active

                                                    </a>

                                                @else

                                                    <a href="{{ route('admin.banners.change_status', $banner->id) }}"
                                                       class="badge bg-danger text-decoration-none">

                                                        Inactive

                                                    </a>

                                                @endif

                                            </td>

                                            {{-- Actions --}}
                                            <td>

                                                {{-- Edit --}}
                                                <button class="btn btn-sm btn-outline-primary editBannerBtn"
                                                        data-id="{{ $banner->id }}"
                                                        data-sub_heading="{{ $banner->sub_heading }}"
                                                        data-heading="{{ $banner->heading }}"
                                                        data-description="{{ $banner->description }}"
                                                        data-button_text="{{ $banner->button_text }}"
                                                        data-button_link="{{ $banner->button_link }}"
                                                        data-status="{{ $banner->status }}">

                                                    <i class="icofont-edit"></i>

                                                </button>

                                                {{-- Delete --}}
                                                <form action="{{ route('admin.banners.destroy', $banner->id) }}"
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

                                                No banners found.

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

{{-- ================= ADD MODAL ================= --}}
<div class="modal fade"
     id="addBannerModal"
     tabindex="-1">

    <div class="modal-dialog modal-lg">

        <div class="modal-content">

            <form action="{{ route('admin.banners.store') }}"
                  method="POST"
                  enctype="multipart/form-data">

                @csrf

                <div class="modal-header">

                    <h5 class="modal-title">
                        Add Banner
                    </h5>

                    <button type="button"
                            class="btn-close"
                            data-bs-dismiss="modal">
                    </button>

                </div>

                <div class="modal-body">

                    <div class="row">

                        {{-- Image --}}
                        <div class="col-md-12 mb-3">

                            <label class="form-label">
                                Banner Image *
                            </label>

                            <input type="file"
                                   name="image"
                                   class="form-control"
                                   required>

                        </div>

                        {{-- Sub Heading --}}
                        <div class="col-md-6 mb-3">

                            <label class="form-label">
                                Sub Heading
                            </label>

                            <input type="text"
                                   name="sub_heading"
                                   class="form-control">

                        </div>

                        {{-- Heading --}}
                        <div class="col-md-6 mb-3">

                            <label class="form-label">
                                Heading *
                            </label>

                            <input type="text"
                                   name="heading"
                                   class="form-control"
                                   required>

                        </div>

                        {{-- Description --}}
                        <div class="col-md-12 mb-3">

                            <label class="form-label">
                                Description
                            </label>

                            <textarea name="description"
                                      rows="4"
                                      class="form-control"></textarea>

                        </div>

                        {{-- Button Text --}}
                        <div class="col-md-6 mb-3">

                            <label class="form-label">
                                Button Text
                            </label>

                            <input type="text"
                                   name="button_text"
                                   class="form-control">

                        </div>

                        {{-- Button Link --}}
                        <div class="col-md-6 mb-3">

                            <label class="form-label">
                                Button Link
                            </label>

                            <input type="text"
                                   name="button_link"
                                   class="form-control">

                        </div>

                    </div>

                </div>

                <div class="modal-footer">

                    <button type="submit"
                            class="btn btn-primary">

                        Save Banner

                    </button>

                </div>

            </form>

        </div>

    </div>

</div>

{{-- ================= EDIT MODAL ================= --}}
<div class="modal fade"
     id="editBannerModal"
     tabindex="-1">

    <div class="modal-dialog modal-lg">

        <div class="modal-content">

            <form id="editBannerForm"
                  method="POST"
                  enctype="multipart/form-data">

                @csrf

                <div class="modal-header">

                    <h5 class="modal-title">
                        Edit Banner
                    </h5>

                    <button type="button"
                            class="btn-close"
                            data-bs-dismiss="modal">
                    </button>

                </div>

                <div class="modal-body">

                    <div class="row">

                        {{-- Image --}}
                        <div class="col-md-12 mb-3">

                            <label class="form-label">
                                Banner Image
                            </label>

                            <input type="file"
                                   name="image"
                                   class="form-control">

                        </div>

                        {{-- Sub Heading --}}
                        <div class="col-md-6 mb-3">

                            <label class="form-label">
                                Sub Heading
                            </label>

                            <input type="text"
                                   name="sub_heading"
                                   id="edit_sub_heading"
                                   class="form-control">

                        </div>

                        {{-- Heading --}}
                        <div class="col-md-6 mb-3">

                            <label class="form-label">
                                Heading *
                            </label>

                            <input type="text"
                                   name="heading"
                                   id="edit_heading"
                                   class="form-control"
                                   required>

                        </div>

                        {{-- Description --}}
                        <div class="col-md-12 mb-3">

                            <label class="form-label">
                                Description
                            </label>

                            <textarea name="description"
                                      rows="4"
                                      id="edit_description"
                                      class="form-control"></textarea>

                        </div>

                        {{-- Button Text --}}
                        <div class="col-md-6 mb-3">

                            <label class="form-label">
                                Button Text
                            </label>

                            <input type="text"
                                   name="button_text"
                                   id="edit_button_text"
                                   class="form-control">

                        </div>

                        {{-- Button Link --}}
                        <div class="col-md-6 mb-3">

                            <label class="form-label">
                                Button Link
                            </label>

                            <input type="text"
                                   name="button_link"
                                   id="edit_button_link"
                                   class="form-control">

                        </div>

                        {{-- Status --}}
                        <div class="col-md-6 mb-3">

                            <label class="form-label">
                                Status
                            </label>

                            <select name="status"
                                    id="edit_status"
                                    class="form-select">

                                <option value="1">Active</option>

                                <option value="0">Inactive</option>

                            </select>

                        </div>

                    </div>

                </div>

                <div class="modal-footer">

                    <button type="submit"
                            class="btn btn-primary">

                        Update Banner

                    </button>

                </div>

            </form>

        </div>

    </div>

</div>
{{-- SortableJS --}}
<script src="https://cdn.jsdelivr.net/npm/sortablejs@1.15.0/Sortable.min.js"></script>
<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
<script>

$(document).ready(function () {

    // =========================
    // EDIT MODAL
    // =========================

    $('.editBannerBtn').click(function () {

        let id = $(this).data('id');

        $('#edit_sub_heading').val($(this).data('sub_heading'));
        $('#edit_heading').val($(this).data('heading'));
        $('#edit_description').val($(this).data('description'));
        $('#edit_button_text').val($(this).data('button_text'));
        $('#edit_button_link').val($(this).data('button_link'));
        $('#edit_status').val($(this).data('status'));

        $('#editBannerForm').attr(
            'action',
            '/admin/banners/update/' + id
        );

        // Bootstrap 5
        let modal = new bootstrap.Modal(
            document.getElementById('editBannerModal')
        );

        modal.show();

    });


    // =========================
    // SORTABLE
    // =========================

    let sortable = document.getElementById('sortable-banner');

    new Sortable(sortable, {

        animation: 150,

        handle: '.drag-handle',

        onEnd: function () {

            let orders = [];

            $('#sortable-banner tr').each(function(index) {

                orders.push({
                    id: $(this).data('id'),
                    position: index + 1
                });

            });

            $.ajax({

                url: "{{ route('admin.banners.update_order') }}",

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


