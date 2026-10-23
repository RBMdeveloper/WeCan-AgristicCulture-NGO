@extends('web.template.layout')
@section('content')

    <section class="page-title" style="background-image: url(images/resource/page-title.jpg);">
        <div class="auto-container">
            <div class="title-outer text-center">
                <h1 class="title">Donate Now</h1>
                <ul class="page-breadcrumb">
                    <li><a href="{{ route('index') }}">Home</a></li>
                    <li>Donate Now</li>
                </ul>
            </div>
        </div>
    </section>

    <!-- Donation Section -->

    <section class="donation-section section-bg fix section-padding">
        <div class="donation-image fix">
            <img data-speed=".8" src="{{ asset('images/resource/donation-image.jpg') }}" alt="">
        </div>
        <div class="shape-1 d-none d-xl-block">
            <img src="{{ asset('images/icons/shape1-1.png') }}" alt="">
        </div>
        <div class="shape-2 d-none d-xl-block">
            <img src="{{ asset('images/icons/shape1-2.png') }}" alt="">
        </div>
        <div class="shape-3 d-none d-xl-block">
            <img src="{{ asset('images/icons/shape1-3.png') }}" alt="">
        </div>

        <div class="container">
            <div class="row g-0">

                <!-- Left Content -->
                <div class="col-xl-5 col-lg-6">
                    <div class="donation-content-items">
                        <div class="hand-shape">
                            <img src="{{ asset('images/icons/hand-shape.png') }}" alt="">
                        </div>
                        <div class="sec-title mb-0">
                            <div class="sec-sub-title">
                                <h6 class="sub-title tz-sub-tilte tz-sub-anim tx-subTitle color-2">
                                    Support Sustainable Community Development
                                </h6>
                            </div>
                            <h2 class="title tx-title sec_title tz-itm-title tz-itm-anim text-white">
                                Together We Can Empower Communities & Build Sustainable Futures
                            </h2>
                        </div>
                        <p class="text wow fadeInUp" data-wow-delay=".3s">
                            Your support helps We Can Organisation implement impactful initiatives in rural development, agriculture, education, environmental conservation, cultural preservation, and community empowerment across Assam and North-East India.
                        </p>
                        <div class="mt-3 text-white">
                          <p class="text-white">
  Registered Under Societies Registration Act XXI of 1860
</p>
                            <p class="text-white"><i class="fa-solid fa-phone"></i> +91 99577 09886</p>
                            <p class="text-white"><i class="fa-solid fa-envelope"></i> wecanngo@gmail.com</p>
                        </div>
                    </div>
                </div>

                <!-- Right Form -->
                <div class="col-xl-7 col-lg-6">
                    <div class="donation-form-box-items">
                        <h3 class="donation-title char-animation">Make Donation</h3>

                        {{-- Error Message --}}
                        @if (session('error'))
                            <div class="alert alert-danger mb-3">{{ session('error') }}</div>
                        @endif

                        {{-- Validation Errors --}}
                        @if ($errors->any())
                            <div class="alert alert-danger mb-3">
                                <ul class="mb-0">
                                    @foreach ($errors->all() as $error)
                                        <li>{{ $error }}</li>
                                    @endforeach
                                </ul>
                            </div>
                        @endif

                        <form method="POST" action="{{ route('donation.create') }}" class="wow fadeInUp"
                            data-wow-delay=".3s">
                            @csrf

                            {{-- Name + Phone --}}
                            <div class="input-group-row">
                                <input type="text" name="donor_name" placeholder="Enter Your Name"
                                    value="{{ old('donor_name') }}" required>
                                <input type="tel" name="donor_phone" placeholder="Your Phone Number"
                                    value="{{ old('donor_phone') }}" required>
                            </div>
                            {{-- ADD THIS EMAIL FIELD --}}
                            <input type="email" name="donor_email" placeholder="Email Address (Optional)"
                                value="{{ old('donor_email') }}" class="full-width">

                            {{-- Company --}}
                            <input type="text" name="donor_company" placeholder="Company Name (Optional)"
                                value="{{ old('donor_company') }}" class="full-width">

                            {{-- Hidden amount field — value set by JS --}}
                            <input type="hidden" name="donation_amount" id="donation_amount_input"
                                value="{{ old('donation_amount', 1000) }}">

                            {{-- Display amount (readonly) --}}
                            <input type="text" id="selected-amount-display" class="full-width amount-input"
                                placeholder="Select or Enter Amount" value="₹{{ old('donation_amount', 1000) }}" readonly>

                            {{-- Custom Amount Input (hidden by default) --}}
                            <input type="number" id="custom-amount-input" class="full-width amount-input"
                                placeholder="Enter custom amount (₹)" min="1"
                                style="display:none; margin-top: 10px;">

                            {{-- Amount Buttons --}}
                            <div class="amount-selection">
                                <div class="amount-item" data-amount="500">₹500</div>
                                <div class="amount-item active" data-amount="1000">₹1000</div>
                                <div class="amount-item" data-amount="2000">₹2000</div>
                                <div class="amount-item" data-amount="5000">₹5000</div>
                                <div class="amount-item custom-trigger" data-amount="custom">Custom</div>
                            </div>

                            <button type="submit" class="theme-btn mt-3">
                                <i class="fa-solid fa-heart"></i> Submit Donation
                            </button>

                        </form>
                    </div>
                </div>

            </div>
        </div>
    </section>

    {{-- Amount Selection Script --}}
    <script>
        document.addEventListener('DOMContentLoaded', function() {

            const amountItems = document.querySelectorAll('.amount-item');
            const displayInput = document.getElementById('selected-amount-display');
            const hiddenInput = document.getElementById('donation_amount_input');
            const customInput = document.getElementById('custom-amount-input');

            amountItems.forEach(function(item) {
                item.addEventListener('click', function() {

                    // Remove active from all
                    amountItems.forEach(i => i.classList.remove('active'));
                    this.classList.add('active');

                    const val = this.getAttribute('data-amount');

                    if (val === 'custom') {
                        // Show custom input
                        customInput.style.display = 'block';
                        displayInput.style.display = 'none';
                        customInput.focus();
                        hiddenInput.value = '';
                    } else {
                        // Hide custom input
                        customInput.style.display = 'none';
                        displayInput.style.display = 'block';
                        displayInput.value = '₹' + val;
                        hiddenInput.value = val;
                    }
                });
            });

            // When user types custom amount
            customInput.addEventListener('input', function() {
                hiddenInput.value = this.value;
            });

        });
    </script>

@endsection
