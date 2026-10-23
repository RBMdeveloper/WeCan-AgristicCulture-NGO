@extends('web.template.layout')
@section('content')

@php
    $isPaid       = $donation->status === 'paid';
    $primaryColor = $isPaid ? '#28a745' : '#dc3545';
    $bgLight      = $isPaid ? '#f8fff9' : '#fff8f8';
@endphp

<style>
    .receipt-card {
        background: #ffffff;
        border-top: 8px solid {{ $primaryColor }};
        border-radius: 15px;
        position: relative;
        overflow: hidden;
    }
    .status-watermark {
        position: absolute;
        top: 50%;
        left: 50%;
        transform: translate(-50%, -50%) rotate(-30deg);
        font-size: 100px;
        font-weight: 900;
        color: {{ $isPaid ? 'rgba(40,167,69,0.05)' : 'rgba(220,53,69,0.07)' }};
        white-space: nowrap;
        pointer-events: none;
        text-transform: uppercase;
        z-index: 0;
    }
    .table-custom td {
        padding: 15px 0;
        border-top: 1px solid #f1f1f1;
    }
    @media print {
        body * { visibility: hidden; }
        .printable-area, .printable-area * { visibility: visible; }
        .printable-area { position: absolute; left: 0; top: 0; width: 100%; }
        .no-print { display: none !important; }
        .receipt-card { -webkit-print-color-adjust: exact; print-color-adjust: exact; }
    }
</style>

<section class="page-title" style="background-image: url({{ asset('images/resource/page-title.jpg') }});">
    <div class="auto-container">
        <div class="title-outer text-center">
            <h1 class="title">{{ $isPaid ? 'Thank You!' : 'Payment Failed' }}</h1>
            <ul class="page-breadcrumb">
                <li><a href="{{ route('index') }}">Home</a></li>
                <li>{{ $isPaid ? 'Donation Receipt' : 'Payment Failed' }}</li>
            </ul>
        </div>
    </div>
</section>

<section style="padding: 60px 0; background: #f4f7f6;">
    <div class="container">
        <div class="printable-area mx-auto" style="max-width: 700px;">

            <div class="card shadow-lg p-5 receipt-card">
                <div class="status-watermark">{{ $isPaid ? 'SUCCESS' : 'FAILED' }}</div>

                <div style="position: relative; z-index: 1;">

                    {{-- Header --}}
                    <div class="row align-items-center mb-4">
                        <div class="col-8">
                            <h4 class="fw-bold mb-1" style="color: #1a1a1a; text-transform: uppercase; letter-spacing: 1px;">
                                We Can Organisation
                            </h4>
                            <p class="text-muted small mb-0">Empowering communities across North-East India</p>
                        </div>
                        <div class="col-4 text-end">
                            @if($isPaid)
                                <span class="badge bg-success" style="font-size: 0.85rem; padding: 8px 15px;">
                                    PAID RECEIPT
                                </span>
                            @else
                                <span class="badge bg-danger" style="font-size: 0.85rem; padding: 8px 15px;">
                                    PAYMENT FAILED
                                </span>
                            @endif
                            <div class="mt-2">
                                <small class="text-muted">Receipt No:</small>
                                <div class="fw-bold">#{{ $donation->receipt_number }}</div>
                            </div>
                        </div>
                    </div>

                    <hr>

                    {{-- Donor + Date --}}
                    <div class="row my-4">
                        <div class="col-6">
                            <p class="text-muted small mb-1">Donor Details</p>
                            <h5 class="mb-0">{{ $donation->donor_name }}</h5>
                            <p class="mb-0 small">{{ $donation->donor_phone }}</p>
                            @if($donation->donor_email)
                                <p class="mb-0 small">{{ $donation->donor_email }}</p>
                            @endif
                            @if($donation->donor_company)
                                <p class="small text-muted">{{ $donation->donor_company }}</p>
                            @endif
                        </div>
                        <div class="col-6 text-end">
                            <p class="text-muted small mb-1">Date & Time</p>
                            <p class="fw-bold">
                                {{ optional($donation->receipt_generated_at)
                                    ->timezone('Asia/Kolkata')
                                    ->format('d M Y, h:i A') }}
                            </p>
                            <p class="text-muted small mb-1">Transaction Status</p>
                            <p class="fw-bold {{ $isPaid ? 'text-success' : 'text-danger' }}">
                                {{ $isPaid ? 'Completed Successfully' : 'Declined / Failed' }}
                            </p>
                        </div>
                    </div>

                    {{-- Amount Table --}}
                    <table class="table table-custom mb-0">
                        <thead style="background: {{ $bgLight }};">
                            <tr>
                                <th class="border-0 px-3">Description</th>
                                <th class="border-0 text-end px-3">Amount</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td class="border-0 px-3">
                                    Donation towards Organisation Initiatives
                                </td>
                                <td class="border-0 text-end px-3 fw-bold">
                                    ₹{{ number_format($donation->donation_amount, 2) }}
                                </td>
                            </tr>
                        </tbody>
                    </table>

                    {{-- Total --}}
                    <div class="row justify-content-end mt-3">
                        <div class="col-5">
                            <div class="d-flex justify-content-between p-3 rounded"
                                style="background: {{ $bgLight }}; border: 1px solid {{ $primaryColor }}33;">
                                <span class="fw-bold">
                                    {{ $isPaid ? 'Total Paid:' : 'Amount:' }}
                                </span>
                                <span class="fw-bold {{ $isPaid ? 'text-success' : 'text-danger' }}"
                                    style="font-size: 1.2rem;">
                                    ₹{{ number_format($donation->donation_amount, 2) }}
                                </span>
                            </div>
                        </div>
                    </div>

                    {{-- Footer Note --}}
                    <div class="row mt-5 pt-2">
                        <div class="col-7">
                            @if($isPaid)
                                <p class="small text-muted">
                                    <strong>Note:</strong> Thank you for your generous support.
                                    This is an official proof of donation. All contributions are
                                    used for charitable and community development purposes.
                                </p>
                            @else
                                <div class="p-3 border border-danger rounded bg-light">
                                    <p class="small text-danger mb-0">
                                        <strong>Transaction Alert:</strong> Your payment was not
                                        successful. If any amount was debited, it will be refunded
                                        by your bank within 5–7 business days.
                                    </p>
                                </div>
                            @endif
                        </div>
                        <div class="col-5 text-center">
                            @if($isPaid)
                                <div class="mt-3">
                                    <div style="border-top: 2px solid #333; padding-top: 10px; display: inline-block; min-width: 180px;">
                                        <small class="text-muted">We Can Organisation</small>
                                    </div>
                                </div>
                            @else
                                <div class="mt-4">
                                    <span class="text-muted small fw-bold"
                                        style="border: 2px solid #ddd; padding: 10px; display: inline-block; border-radius: 5px; text-transform: uppercase;">
                                        Transaction Record Only
                                    </span>
                                </div>
                            @endif
                        </div>
                    </div>

                </div>
            </div>

            {{-- Action Buttons --}}
            <div class="text-center mt-4 no-print">
                <div class="d-inline-block shadow-sm rounded p-1 bg-white">
                    <button onclick="window.print()" class="btn btn-dark btn-lg px-4">
                        <i class="fas fa-print"></i> Print Receipt
                    </button>

                    @if(!$isPaid)
                        <a href="{{ route('donate') }}" class="btn btn-danger btn-lg px-4">
                            <i class="fas fa-redo"></i> Try Again
                        </a>
                    @else
                        <a href="{{ route('index') }}" class="btn btn-outline-primary btn-lg px-4">
                            <i class="fas fa-home"></i> Home
                        </a>
                    @endif
                </div>
            </div>

        </div>
    </div>
</section>

@endsection