@extends('web.template.layout')
@section('content')

<!-- Cancellation & Refund Policy Page Start -->
{{-- <section class="page-title" style="background-image: url(images/resource/page-title.jpg);"> --}}
<section class="page-title" style="background-image: url('{{asset('images/resource/page-title.jpg')}}');">

    <div class="auto-container">
        <div class="title-outer text-center">
            <h1 class="title">Cancellation & Refund Policy</h1>
            <ul class="page-breadcrumb">
                {{-- <li><a href="/">Home</a></li> --}}
                <li><a href="{{route('index')}}">Home</a></li>

                <li>Cancellation & Refund Policy</li>
            </ul>
        </div>
    </div>
</section>

<section class="acdo-refund-section section-padding">
    <div class="container">

        <div class="acdo-refund-wrapper">

            <!-- Intro -->
            <div class="acdo-refund-block">
                <h2 class="acdo-refund-title">Cancellation & Refund Policy</h2>

                <p class="acdo-refund-text">
                    At We Can Organisation, we value the trust and support of our donors,
                    volunteers, and well-wishers. As a non-profit organization, we are committed to maintaining
                    transparency and fairness in all financial transactions. Please read our Cancellation &
                    Refund Policy carefully before making any contribution or payment.
                </p>
            </div>

            <!-- Donations -->
            <div class="acdo-refund-block">
                <h3 class="acdo-refund-subtitle">Donations</h3>

                <ul class="acdo-refund-list">

                    <li>
                        All donations made to We Can Organisation are voluntary and generally non-refundable.
                    </li>

                    <li>
                        Once a donation is successfully processed through our website or authorized payment channels,
                        it cannot normally be canceled or reversed.
                    </li>

                    <li>
                        In case of an incorrect donation amount, duplicate transaction, or technical payment error,
                        donors are requested to contact us within 7 days of the transaction date.
                    </li>

                    <li>
                        Refund requests will be reviewed on a case-by-case basis and processed if found valid and genuine.
                    </li>

                </ul>
            </div>

            <!-- Event / Registration -->
            <div class="acdo-refund-block">
                <h3 class="acdo-refund-subtitle">Event Registrations & Other Contributions</h3>

                <ul class="acdo-refund-list">

                    <li>
                        Any registration fees, participation fees, or contributions towards events, workshops,
                        campaigns, or activities may not be refundable unless specifically mentioned.
                    </li>

                    <li>
                        We Can Organisation reserves the right to approve or deny refund requests
                        based on the nature of the transaction and circumstances involved.
                    </li>

                </ul>
            </div>

            <!-- Processing -->
            <div class="acdo-refund-block">
                <h3 class="acdo-refund-subtitle">Refund Processing</h3>

                <ul class="acdo-refund-list">

                    <li>
                        Approved refunds will be processed through the original mode of payment wherever possible.
                    </li>

                    <li>
                        Refund processing timelines may vary depending on banking systems and payment gateways.
                    </li>

                </ul>
            </div>

            <!-- Contact -->
            <div class="acdo-refund-contact">
                <h3 class="acdo-refund-subtitle">Contact Us</h3>

                <p class="acdo-refund-text">
                    For any concerns regarding donations, payment issues, event registrations, or refund requests,
                    please contact us:
                </p>

                <div class="acdo-contact-info">

                    <p>
                        <strong>Call Us:</strong>
                        <a href="tel:+919957709886">+91 99577 09886</a>
                    </p>

                    <p>
                        <strong>Email:</strong>
                        <a href="mailto:wecanngo@gmail.com">wecanngo@gmail.com</a>
                    </p>

                </div>
            </div>

        </div>

    </div>
</section>

<style>
/* Cancellation & Refund Policy Custom CSS */

.acdo-refund-section {
    background: #ffffff;
}

.acdo-refund-wrapper {
    max-width: 950px;
    margin: 0 auto;
    background: #fff;
    padding: 50px;
    border-radius: 14px;
    box-shadow: 0 10px 40px rgba(0,0,0,0.06);
}

.acdo-refund-block {
    margin-bottom: 40px;
}

.acdo-refund-title {
    font-size: 42px;
    font-weight: 700;
    color: #1F5E2E;
    margin-bottom: 20px;
    line-height: 1.2;
}

.acdo-refund-subtitle {
    font-size: 26px;
    font-weight: 600;
    color: #1F5E2E;
    margin-bottom: 18px;
}

.acdo-refund-text {
    font-size: 16px;
    line-height: 1.9;
    color: #555;
    margin-bottom: 0;
}

.acdo-refund-list {
    padding-left: 20px;
    margin: 0;
}

.acdo-refund-list li {
    font-size: 16px;
    line-height: 1.9;
    color: #555;
    margin-bottom: 12px;
}

.acdo-refund-contact {
    margin-top: 50px;
    padding-top: 30px;
    border-top: 1px solid #e5e5e5;
}

.acdo-contact-info p {
    font-size: 17px;
    margin-bottom: 12px;
    color: #333;
}

.acdo-contact-info a {
    color: #1F5E2E;
    text-decoration: none;
    font-weight: 600;
}

.acdo-contact-info a:hover {
    color: #F4C430;
}

@media (max-width: 767px) {

    .acdo-refund-wrapper {
        padding: 30px 20px;
    }

    .acdo-refund-title {
        font-size: 32px;
    }

    .acdo-refund-subtitle {
        font-size: 22px;
    }
}
</style>

@endsection
