@extends('admin.template.admin_master')

@section('content')

<div class="page-content">
    <div class="container-fluid">

        {{-- Success Message --}}
        @if(session('success'))
            <div class="alert alert-success alert-dismissible fade show" role="alert">
                {{ session('success') }}
                <button type="button" class="btn-close" data-bs-dismiss="alert"></button>
            </div>
        @endif

        {{-- ===================== STATS CARDS ===================== --}}
        <div class="row mb-4">

            <div class="col-xl-2 col-md-4 col-6 mb-3">
                <div class="card border-0 shadow-sm h-100">
                    <div class="card-body text-center">
                        <div class="mb-2">
                            <i class="icofont-donate fs-2 text-primary"></i>
                        </div>
                        <h5 class="fw-bold mb-0">{{ $stats['total_donations'] }}</h5>
                        <small class="text-muted">Total Records</small>
                    </div>
                </div>
            </div>

            <div class="col-xl-2 col-md-4 col-6 mb-3">
                <div class="card border-0 shadow-sm h-100">
                    <div class="card-body text-center">
                        <div class="mb-2">
                            <i class="icofont-check-circled fs-2 text-success"></i>
                        </div>
                        <h5 class="fw-bold mb-0">{{ $stats['total_paid'] }}</h5>
                        <small class="text-muted">Paid</small>
                    </div>
                </div>
            </div>

            <div class="col-xl-2 col-md-4 col-6 mb-3">
                <div class="card border-0 shadow-sm h-100">
                    <div class="card-body text-center">
                        <div class="mb-2">
                            <i class="icofont-close-circled fs-2 text-danger"></i>
                        </div>
                        <h5 class="fw-bold mb-0">{{ $stats['total_failed'] }}</h5>
                        <small class="text-muted">Failed</small>
                    </div>
                </div>
            </div>

            <div class="col-xl-2 col-md-4 col-6 mb-3">
                <div class="card border-0 shadow-sm h-100">
                    <div class="card-body text-center">
                        <div class="mb-2">
                            <i class="icofont-rupee fs-2 text-warning"></i>
                        </div>
                        <h5 class="fw-bold mb-0">₹{{ number_format($stats['total_amount'], 0) }}</h5>
                        <small class="text-muted">Total Collected</small>
                    </div>
                </div>
            </div>

            <div class="col-xl-2 col-md-4 col-6 mb-3">
                <div class="card border-0 shadow-sm h-100">
                    <div class="card-body text-center">
                        <div class="mb-2">
                            <i class="icofont-sun fs-2 text-info"></i>
                        </div>
                        <h5 class="fw-bold mb-0">₹{{ number_format($stats['today_amount'], 0) }}</h5>
                        <small class="text-muted">Today</small>
                    </div>
                </div>
            </div>

            <div class="col-xl-2 col-md-4 col-6 mb-3">
                <div class="card border-0 shadow-sm h-100">
                    <div class="card-body text-center">
                        <div class="mb-2">
                            <i class="icofont-calendar fs-2 text-secondary"></i>
                        </div>
                        <h5 class="fw-bold mb-0">₹{{ number_format($stats['this_month'], 0) }}</h5>
                        <small class="text-muted">This Month</small>
                    </div>
                </div>
            </div>

        </div>
        {{-- ===================== END STATS ===================== --}}

        <div class="row">
            <div class="col-12">
                <div class="card">

                    <div class="card-header">
                        <div class="row align-items-center">
                            <div class="col">
                                <h4 class="card-title">Donation Transactions</h4>
                            </div>
                        </div>
                    </div>

                    {{-- ===================== FILTERS ===================== --}}
                    <div class="card-body pb-0">
                        <form method="GET" action="{{ route('admin.dashboard') }}">
                            <div class="row g-2 align-items-end">

                                {{-- Search --}}
                                <div class="col-md-3">
                                    <label class="form-label small text-muted">Search</label>
                                    <input
                                        type="text"
                                        name="search"
                                        class="form-control form-control-sm"
                                        placeholder="Name, phone, email, receipt..."
                                        value="{{ request('search') }}">
                                </div>

                                {{-- Status --}}
                                <div class="col-md-2">
                                    <label class="form-label small text-muted">Status</label>
                                    <select name="status" class="form-select form-select-sm">
                                        <option value="">All Status</option>
                                        <option value="paid"    {{ request('status') == 'paid'    ? 'selected' : '' }}>Paid</option>
                                        <option value="failed"  {{ request('status') == 'failed'  ? 'selected' : '' }}>Failed</option>
                                        <option value="created" {{ request('status') == 'created' ? 'selected' : '' }}>Created</option>
                                    </select>
                                </div>

                                {{-- From Date --}}
                                <div class="col-md-2">
                                    <label class="form-label small text-muted">From Date</label>
                                    <input
                                        type="date"
                                        name="from_date"
                                        class="form-control form-control-sm"
                                        value="{{ request('from_date') }}">
                                </div>

                                {{-- To Date --}}
                                <div class="col-md-2">
                                    <label class="form-label small text-muted">To Date</label>
                                    <input
                                        type="date"
                                        name="to_date"
                                        class="form-control form-control-sm"
                                        value="{{ request('to_date') }}">
                                </div>

                                {{-- Buttons --}}
                                <div class="col-md-3">
                                    <button type="submit" class="btn btn-sm btn-primary me-1">
                                        <i class="icofont-search-1"></i> Filter
                                    </button>
                                    <a href="{{ route('admin.dashboard') }}" class="btn btn-sm btn-outline-secondary">
                                        <i class="icofont-refresh"></i> Reset
                                    </a>
                                </div>

                            </div>
                        </form>
                    </div>
                    {{-- ===================== END FILTERS ===================== --}}

                    <div class="card-body pt-3">
                        <div class="table-responsive">
                            <table class="table table-hover mb-0">
                                <thead class="thead-light">
                                    <tr>
                                        <th>#</th>
                                        <th>Receipt No</th>
                                        <th>Donor</th>
                                        <th>Contact</th>
                                        <th>Amount</th>
                                        <th>Status</th>
                                        <th>Date</th>
                                        <th>Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @forelse($donations as $index => $donation)
                                    <tr>
                                        <td>{{ $donations->firstItem() + $index }}</td>

                                        <td>
                                            <span class="text-muted small">
                                                {{ $donation->receipt_number ?? '—' }}
                                            </span>
                                        </td>

                                        <td>
                                            <div class="fw-bold">{{ $donation->donor_name }}</div>
                                            @if($donation->donor_company)
                                                <small class="text-muted">{{ $donation->donor_company }}</small>
                                            @endif
                                        </td>

                                        <td>
                                            <div class="small">{{ $donation->donor_phone }}</div>
                                            @if($donation->donor_email)
                                                <div class="small text-muted">{{ $donation->donor_email }}</div>
                                            @endif
                                        </td>

                                        <td class="fw-bold">
                                            ₹{{ number_format($donation->donation_amount, 2) }}
                                        </td>

                                        <td>
                                            @if($donation->status === 'paid')
                                                <span class="badge text-success border border-success px-2">Paid</span>
                                            @elseif($donation->status === 'failed')
                                                <span class="badge text-danger border border-danger px-2">Failed</span>
                                            @else
                                                <span class="badge text-warning border border-warning px-2">Created</span>
                                            @endif
                                        </td>

                                        <td>
                                            <small>
                                                {{ optional($donation->created_at)->timezone('Asia/Kolkata')->format('d M Y') }}
                                                <br>
                                                <span class="text-muted">
                                                    {{ optional($donation->created_at)->timezone('Asia/Kolkata')->format('h:i A') }}
                                                </span>
                                            </small>
                                        </td>

                                        <td>
                                            {{-- View Receipt --}}
                                            <a href="{{ route('donation.receipt', $donation->order_id) }}"
                                                target="_blank"
                                                class="btn btn-xs btn-outline-primary me-1"
                                                title="View Receipt">
                                                <i class="icofont-eye-alt"></i>
                                            </a>

                                            {{-- Delete --}}
                                            <form
                                                action="{{ route('admin.donations.destroy', $donation->id) }}"
                                                method="POST"
                                                class="d-inline"
                                                onsubmit="return confirm('Are you sure you want to delete this donation record?')">
                                                @csrf
                                                @method('DELETE')
                                                <button type="submit"
                                                    class="btn btn-xs btn-outline-danger"
                                                    title="Delete">
                                                    <i class="icofont-trash"></i>
                                                </button>
                                            </form>
                                        </td>

                                    </tr>
                                    @empty
                                    <tr>
                                        <td colspan="8" class="text-center text-muted py-4">
                                            No donation records found.
                                        </td>
                                    </tr>
                                    @endforelse
                                </tbody>
                            </table>
                        </div>

                        {{-- Pagination --}}
                        @if($donations->hasPages())
                            <div class="mt-3">
                                {{ $donations->links() }}
                            </div>
                        @endif

                    </div>
                </div>
            </div>
        </div>

    </div>
</div>

@endsection