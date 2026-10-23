@extends('web.template.layout')
@section('content')

<!-- Shipping & Delivery Page Start -->
<section class="page-title" style="background-image: url(images/resource/page-title.jpg);">
    <div class="auto-container">
        <div class="title-outer text-center">
            <h1 class="title">Shipping & Delivery</h1>
            <ul class="page-breadcrumb">
                {{-- <li><a href="/">Home</a></li> --}}
                <li><a href="{{route('index')}}">Home</a></li>

                <li>Shipping & Delivery</li>
            </ul>
        </div>
    </div>
</section>

<section class="acdo-shipping-section section-padding">
    <div class="container">

        <div class="acdo-shipping-wrapper">

            <!-- Content -->
            <div class="acdo-shipping-block">

                <h2 class="acdo-shipping-title">Shipping & Delivery</h2>

                <p class="acdo-shipping-text">
                    Shipping & Delivery is currently not applicable for We Can Organisation.
                </p>

                <p class="acdo-shipping-text">
                    As a non-profit organization, we primarily focus on community development initiatives,
                    awareness programs, cultural activities, and donation-based support services.
                </p>

                <p class="acdo-shipping-text">
                    If you have any questions or require further clarification, please contact us:
                </p>

                <!-- Contact Info -->
                <div class="acdo-shipping-contact">

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
/* Shipping & Delivery Custom CSS */

.acdo-shipping-section {
    background: #ffffff;
}

.acdo-shipping-wrapper {
    max-width: 850px;
    margin: 0 auto;
    background: #fff;
    padding: 50px;
    border-radius: 14px;
    box-shadow: 0 10px 40px rgba(0,0,0,0.06);
}

.acdo-shipping-title {
    font-size: 42px;
    font-weight: 700;
    color: #1F5E2E;
    margin-bottom: 25px;
    line-height: 1.2;
}

.acdo-shipping-text {
    font-size: 16px;
    line-height: 1.9;
    color: #555;
    margin-bottom: 18px;
}

.acdo-shipping-contact {
    margin-top: 35px;
    padding-top: 25px;
    border-top: 1px solid #e5e5e5;
}

.acdo-shipping-contact p {
    font-size: 17px;
    margin-bottom: 12px;
    color: #333;
}

.acdo-shipping-contact a {
    color: #1F5E2E;
    text-decoration: none;
    font-weight: 600;
}

.acdo-shipping-contact a:hover {
    color: #F4C430;
}

@media (max-width: 767px) {

    .acdo-shipping-wrapper {
        padding: 30px 20px;
    }

    .acdo-shipping-title {
        font-size: 32px;
    }
}
</style>

@endsection
