@extends('admin.template.admin_master')

@section('content')
<div class="page-content">
    {{-- ===================== Change Password Section ===================== --}}
    <div class="container-fluid mt-4">
        <div class="row justify-content-center">
            <div class="col-lg-6 col-md-8">
                <div class="card shadow-sm border-0">
                    <div class="card-header bg-light d-flex justify-content-between align-items-center">
                        <h4 class="card-title mb-0">
                            <i class="las la-key me-2 text-primary"></i> Change Password
                        </h4>
                        <span class="text-muted small">Secure your account</span>
                    </div>

                    <div class="card-body px-4 py-4">

                        {{-- Success / Error Messages --}}
                        @if (Session::has('message'))
                            <div class="alert alert-success alert-dismissible fade show" role="alert">
                                <i class="las la-check-circle me-1"></i> {{ Session::get('message') }}
                                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                            </div>
                        @endif

                        @if (Session::has('error'))
                            <div class="alert alert-danger alert-dismissible fade show" role="alert">
                                <i class="las la-exclamation-circle me-1"></i> {{ Session::get('error') }}
                                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                            </div>
                        @endif

                        {{-- Change Password Form --}}
                        <form method="POST" action="{{ route('admin.change_password') }}">
                            @csrf

                            {{-- Current Password --}}
                            <div class="mb-4">
                                <label for="current_password" class="form-label fw-semibold">
                                    <i class="las la-lock me-1 text-secondary"></i> Current Password
                                </label>
                                <input type="password"
                                       name="current_password"
                                       id="current_password"
                                       class="form-control form-control-lg @error('current_password') is-invalid @enderror"
                                       placeholder="Enter current password"
                                       required>
                                @error('current_password')
                                    <span class="invalid-feedback d-block mt-1">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>

                            {{-- New Password --}}
                            <div class="mb-4">
                                <label for="new_password" class="form-label fw-semibold">
                                    <i class="las la-shield-alt me-1 text-secondary"></i> New Password
                                </label>
                                <input type="password"
                                       name="new_password"
                                       id="new_password"
                                       class="form-control form-control-lg @error('new_password') is-invalid @enderror"
                                       placeholder="Enter new password"
                                       required>
                                @error('new_password')
                                    <span class="invalid-feedback d-block mt-1">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>

                            {{-- Confirm Password --}}
                            <div class="mb-4">
                                <label for="confirm_password" class="form-label fw-semibold">
                                    <i class="las la-check-double me-1 text-secondary"></i> Re-enter New Password
                                </label>
                                <input type="password"
                                       name="confirm_password"
                                       id="confirm_password"
                                       class="form-control form-control-lg @error('confirm_password') is-invalid @enderror"
                                       placeholder="Re-enter new password"
                                       required>
                                @error('confirm_password')
                                    <span class="invalid-feedback d-block mt-1">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>

                            {{-- Submit Button --}}
                            <div class="d-grid">
                                <button type="submit" class="btn btn-primary btn-lg">
                                    <i class="las la-save me-1"></i> Update Password
                                </button>
                            </div>
                        </form>
                    </div><!-- end card-body -->
                </div><!-- end card -->
            </div><!-- end col -->
        </div><!-- end row -->
    </div><!-- end container-fluid -->
</div><!-- end page-content -->
@endsection
