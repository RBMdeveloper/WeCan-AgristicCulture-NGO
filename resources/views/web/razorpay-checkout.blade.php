@extends('web.template.layout')
@section('content')

<section class="page-title" style="background-image: url({{ asset('images/resource/page-title.jpg') }});">
    <div class="auto-container">
        <div class="title-outer text-center">
            <h1 class="title">Complete Payment</h1>
            <ul class="page-breadcrumb">
                <li><a href="{{ route('index') }}">Home</a></li>
                <li><a href="{{ route('donate') }}">Donate</a></li>
                <li>Payment</li>
            </ul>
        </div>
    </div>
</section>

<section style="padding: 80px 0; background: #f8f9fa;">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-lg-5 col-md-7">

                <div class="card shadow-lg border-0 rounded-4 p-5 text-center">

                    <div class="mb-4">
                        <i class="fa-solid fa-lock fa-2x" style="color: #28a745;"></i>
                        <h3 class="mt-3 fw-bold">Secure Checkout</h3>
                        <p class="text-muted small">You will be redirected to Razorpay secure payment gateway</p>
                    </div>

                    <div class="text-start mb-4">
                        <table class="table table-borderless mb-0">
                            <tr>
                                <td class="text-muted">Donor</td>
                                <td class="fw-bold">{{ $donor->donor_name }}</td>
                            </tr>
                            <tr>
                                <td class="text-muted">Phone</td>
                                <td class="fw-bold">{{ $donor->donor_phone }}</td>
                            </tr>
                            @if($donor->donor_email)
                                  <tr>
                                      <td class="text-muted">Email</td>
                                      <td class="fw-bold">{{ $donor->donor_email }}</td>
                                  </tr>
                                  @endif
                            @if($donor->donor_company)
                            <tr>
                                <td class="text-muted">Company</td>
                                <td class="fw-bold">{{ $donor->donor_company }}</td>
                            </tr>
                            @endif
                            <tr>
                                <td class="text-muted">Amount</td>
                                <td class="fw-bold text-success" style="font-size: 1.2rem;">
                                    ₹{{ number_format($amount, 2) }}
                                </td>
                            </tr>
                        </table>
                    </div>

                    <button id="payBtn" class="theme-btn w-100">
                        <i class="fa-solid fa-credit-card"></i>
                        Pay ₹{{ number_format($amount, 2) }} Now
                    </button>

                    <a href="{{ route('donate') }}" class="btn btn-link text-muted mt-3 small">
                        ← Cancel & Go Back
                    </a>

                </div>

            </div>
        </div>
    </div>
</section>

{{-- Razorpay JS --}}
<script src="https://checkout.razorpay.com/v1/checkout.js"></script>
<script>

    var options = {
        key: "{{ $key }}",
        amount: "{{ (int)($amount * 100) }}",
        currency: "INR",
        name: "We Can Organisation",
        description: "Donation Payment",
        order_id: "{{ $orderId }}",

        handler: function (response) {
            // Payment successful — submit to verify route
            var form = document.createElement('form');
            form.method = 'POST';
            form.action = "{{ route('donation.verify') }}";

            var csrf = document.createElement('input');
            csrf.type  = 'hidden';
            csrf.name  = '_token';
            csrf.value = "{{ csrf_token() }}";

            var paymentId = document.createElement('input');
            paymentId.type  = 'hidden';
            paymentId.name  = 'razorpay_payment_id';
            paymentId.value = response.razorpay_payment_id;

            var orderId = document.createElement('input');
            orderId.type  = 'hidden';
            orderId.name  = 'razorpay_order_id';
            orderId.value = response.razorpay_order_id;

            var signature = document.createElement('input');
            signature.type  = 'hidden';
            signature.name  = 'razorpay_signature';
            signature.value = response.razorpay_signature;

            form.appendChild(csrf);
            form.appendChild(paymentId);
            form.appendChild(orderId);
            form.appendChild(signature);

            document.body.appendChild(form);
            form.submit();
        },

        modal: {
            // User closed the Razorpay popup
            ondismiss: function () {
                window.location.href = "{{ route('donation.failed', $orderId) }}";
            }
        },

        // Update prefill
        prefill: {
            name:    "{{ $donor->donor_name }}",
            contact: "{{ $donor->donor_phone }}",
            email:   "{{ $donor->donor_email ?? '' }}"  // ADD THIS
        },

        theme: {
            color: "#ff6b35"
        }
    };

    var rzp = new Razorpay(options);

    // Open Razorpay automatically when page loads
    // window.onload = function () {
    //     rzp.open();
    // };

    // Also available on button click
    document.getElementById('payBtn').onclick = function (e) {
        e.preventDefault();
        rzp.open();
    };

    // Payment failed inside Razorpay modal
    rzp.on('payment.failed', function (response) {
        window.location.href = "{{ route('donation.failed', $orderId) }}";
    });

</script>

@endsection