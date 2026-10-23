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

        {{-- ===================== PAGE HEADER ===================== --}}

        <div class="row mb-4">

            <div class="col-md-12">

                <h4 class="mb-1">
                    Contact Messages
                </h4>

                <p class="text-muted mb-0">
                    Manage all website contact inquiries
                </p>

            </div>

        </div>

        {{-- ===================== CONTACT TABLE ===================== --}}

        <div class="card border-0 shadow-sm">

            <div class="card-body">

                <div class="table-responsive">

                    <table class="table table-bordered align-middle">

                        <thead class="table-light">

                            <tr>

                                <th width="70">
                                    #
                                </th>

                                <th>
                                    Name
                                </th>

                                <th>
                                    Email
                                </th>

                                <th>
                                    Phone
                                </th>

                                <th>
                                    Subject
                                </th>

                                <th>
                                    Message
                                </th>

                                <th width="140">
                                    Date
                                </th>

                                <th width="120">
                                    Action
                                </th>

                            </tr>

                        </thead>

                        <tbody>

                            @forelse($messages as $key => $message)

                                <tr>

                                    {{-- Serial --}}
                                    <td>
                                        {{ $key + 1 }}
                                    </td>

                                    {{-- Name --}}
                                    <td>
                                        {{ $message->name }}
                                    </td>

                                    {{-- Email --}}
                                    <td>
                                        {{ $message->email }}
                                    </td>

                                    {{-- Phone --}}
                                    <td>
                                        {{ $message->phone ?? 'N/A' }}
                                    </td>

                                    {{-- Subject --}}
                                    <td>
                                        {{ $message->subject }}
                                    </td>

                                    {{-- Message --}}
                                    <td style="min-width: 250px;">

                                        {{ \Illuminate\Support\Str::limit($message->message, 120) }}

                                    </td>

                                    {{-- Date --}}
                                    <td>
                                        {{ optional($message->created_at)->format('d M Y') }}
                                    </td>

                                    {{-- Action --}}
                                    <td>

                                        {{-- View Button --}}
                                        <button type="button"
                                                class="btn btn-primary btn-sm mb-1"
                                                data-bs-toggle="modal"
                                                data-bs-target="#viewMessageModal{{ $message->id }}">

                                            <i class="icofont-eye"></i>

                                        </button>

                                        {{-- Delete Form --}}
                                        <form action="{{ route('admin.contact_messages.destroy', $message->id) }}"
                                              method="POST"
                                              class="d-inline"
                                              onsubmit="return confirm('Are you sure you want to delete this message?')">

                                            @csrf
                                            @method('DELETE')

                                            <button type="submit"
                                                    class="btn btn-danger btn-sm">

                                                <i class="icofont-trash"></i>

                                            </button>

                                        </form>

                                    </td>

                                </tr>



                                {{-- ===================== VIEW MODAL ===================== --}}

                                <div class="modal fade"
                                     id="viewMessageModal{{ $message->id }}"
                                     tabindex="-1"
                                     aria-hidden="true">

                                    <div class="modal-dialog modal-lg modal-dialog-centered">

                                        <div class="modal-content border-0">

                                            <div class="modal-header">

                                                <h5 class="modal-title">
                                                    Contact Message Details
                                                </h5>

                                                <button type="button"
                                                        class="btn-close"
                                                        data-bs-dismiss="modal">
                                                </button>

                                            </div>

                                            <div class="modal-body">

                                                <div class="row g-3">

                                                    {{-- Name --}}
                                                    <div class="col-md-6">

                                                        <label class="fw-bold mb-1">
                                                            Name
                                                        </label>

                                                        <div class="form-control">
                                                            {{ $message->name }}
                                                        </div>

                                                    </div>

                                                    {{-- Email --}}
                                                    <div class="col-md-6">

                                                        <label class="fw-bold mb-1">
                                                            Email
                                                        </label>

                                                        <div class="form-control">
                                                            {{ $message->email }}
                                                        </div>

                                                    </div>

                                                    {{-- Phone --}}
                                                    <div class="col-md-6">

                                                        <label class="fw-bold mb-1">
                                                            Phone
                                                        </label>

                                                        <div class="form-control">
                                                            {{ $message->phone ?? 'N/A' }}
                                                        </div>

                                                    </div>

                                                    {{-- Subject --}}
                                                    <div class="col-md-6">

                                                        <label class="fw-bold mb-1">
                                                            Subject
                                                        </label>

                                                        <div class="form-control">
                                                            {{ $message->subject }}
                                                        </div>

                                                    </div>

                                                    {{-- Message --}}
                                                    <div class="col-12">

                                                        <label class="fw-bold mb-1">
                                                            Message
                                                        </label>

                                                        <div class="form-control"
                                                             style="min-height: 180px; white-space: pre-wrap;">

                                                            {{ $message->message }}

                                                        </div>

                                                    </div>

                                                </div>

                                            </div>

                                            <div class="modal-footer">

                                                <button type="button"
                                                        class="btn btn-secondary"
                                                        data-bs-dismiss="modal">

                                                    Close

                                                </button>

                                            </div>

                                        </div>

                                    </div>

                                </div>

                            @empty

                                <tr>

                                    <td colspan="8" class="text-center py-5">

                                        <h5 class="mb-2">
                                            No Contact Messages Found
                                        </h5>

                                        <p class="text-muted mb-0">
                                            Contact inquiries will appear here.
                                        </p>

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

@endsection