@extends('admin.template.admin_master')

@section('content')

<div class="page-content">

    <div class="container-fluid">

        {{-- ===================== ALERTS ===================== --}}

        @if(session('success'))
            <div class="alert alert-success alert-dismissible fade show" role="alert">
                {{ session('success') }}

                <button type="button"
                        class="btn-close"
                        data-bs-dismiss="alert">
                </button>
            </div>
        @endif

        @if(session('error'))
            <div class="alert alert-danger alert-dismissible fade show" role="alert">
                {{ session('error') }}

                <button type="button"
                        class="btn-close"
                        data-bs-dismiss="alert">
                </button>
            </div>
        @endif

        @if($errors->any())
            <div class="alert alert-danger alert-dismissible fade show" role="alert">

                <ul class="mb-0">
                    @foreach($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>

                <button type="button"
                        class="btn-close"
                        data-bs-dismiss="alert">
                </button>
            </div>
        @endif

        {{-- ===================== PAGE HEADER ===================== --}}

        <div class="row mb-4">

            <div class="col-md-6">
                <h4 class="mb-0">
                    Gallery Management
                </h4>

                <p class="text-muted mb-0">
                    Manage website gallery images
                </p>
            </div>

            <div class="col-md-6 text-md-end mt-3 mt-md-0">

                <button type="button"
                        class="btn btn-primary"
                        data-bs-toggle="modal"
                        data-bs-target="#galleryUploadModal">

                    <i class="icofont-plus-circle"></i>
                    Add Gallery Image

                </button>

            </div>

        </div>

        {{-- ===================== GALLERY GRID ===================== --}}

        <div class="row">

            @forelse($galleries as $gallery)

                <div class="col-xl-3 col-lg-4 col-md-6 mb-4">

                    <div class="card border-0 shadow-sm h-100 acdo-gallery-admin-card">

                        {{-- Image --}}
                        <div class="acdo-gallery-image-wrapper">

                            <img src="{{ asset($gallery->image) }}"
                                 alt="Gallery Image"
                                 class="img-fluid acdo-gallery-image">

                        </div>

                        {{-- Card Footer --}}
                        <div class="card-body text-center">

                            <small class="text-muted d-block mb-3">
                                Uploaded:
                                {{ optional($gallery->created_at)->format('d M Y') }}
                            </small>

                            {{-- Delete Form --}}
                            <form action="{{ route('admin.gallery.destroy', $gallery->id) }}"
                                  method="POST"
                                  onsubmit="return confirm('Are you sure you want to delete this image?')">

                                @csrf
                                @method('DELETE')

                                <button type="submit"
                                        class="btn btn-danger btn-sm w-100">

                                    <i class="icofont-trash"></i>
                                    Delete Image

                                </button>

                            </form>

                        </div>

                    </div>

                </div>

            @empty

                <div class="col-12">

                    <div class="card border-0 shadow-sm">

                        <div class="card-body text-center py-5">

                            <i class="icofont-image fs-1 text-muted"></i>

                            <h5 class="mt-3">
                                No Gallery Images Found
                            </h5>

                            <p class="text-muted mb-0">
                                Upload your first gallery image.
                            </p>

                        </div>

                    </div>

                </div>

            @endforelse

        </div>

    </div>

</div>

{{-- ===================== UPLOAD MODAL ===================== --}}

<div class="modal fade"
     id="galleryUploadModal"
     tabindex="-1"
     aria-hidden="true">

    <div class="modal-dialog modal-dialog-centered">

        <div class="modal-content border-0">

            <div class="modal-header">

                <h5 class="modal-title">
                    Upload Gallery Image
                </h5>

                <button type="button"
                        class="btn-close"
                        data-bs-dismiss="modal">
                </button>

            </div>

            <form action="{{ route('admin.gallery.store') }}"
                  method="POST"
                  enctype="multipart/form-data">

                @csrf

                <div class="modal-body">

                    <div class="mb-3">

                        <label class="form-label">
                            Select Image
                        </label>

                        <input type="file"
                               name="image"
                               class="form-control"
                               accept="image/*"
                               required>

                    </div>

                </div>

                <div class="modal-footer">

                    <button type="button"
                            class="btn btn-secondary"
                            data-bs-dismiss="modal">

                        Close

                    </button>

                    <button type="submit"
                            class="btn btn-primary">

                        <i class="icofont-upload-alt"></i>
                        Upload Image

                    </button>

                </div>

            </form>

        </div>

    </div>

</div>

{{-- ===================== CUSTOM CSS ===================== --}}

<style>

.acdo-gallery-admin-card{
    overflow: hidden;
    border-radius: 12px;
}

.acdo-gallery-image-wrapper{
    height: 240px;
    overflow: hidden;
    background: #f8f9fa;
}

.acdo-gallery-image{
    width: 100%;
    height: 100%;
    object-fit: cover;
    transition: 0.4s ease;
}

.acdo-gallery-admin-card:hover .acdo-gallery-image{
    transform: scale(1.05);
}

</style>

@endsection