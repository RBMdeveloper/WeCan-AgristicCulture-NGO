@extends('web.template.layout')
@section('content')

<!-- Privacy Policy Page Start -->
<section class="page-title" style="background-image: url(images/resource/page-title.jpg);">
    <div class="auto-container">
        <div class="title-outer text-center">
            <h1 class="title">Privacy Policy</h1>
            <ul class="page-breadcrumb">
                {{-- <li><a href="/">Home</a></li> --}}
                <li><a href="{{route('index')}}">Home</a></li>

                <li>Privacy Policy</li>
            </ul>
        </div>
    </div>
</section>

<section class="acdo-privacy-section section-padding">
    <div class="container">

        <div class="acdo-privacy-wrapper">

            <!-- Intro -->
            <div class="acdo-privacy-block">
                <h2 class="acdo-privacy-title">Privacy Policy</h2>

                <p class="acdo-privacy-text">
                    We Can Organisation respects your privacy and is committed
                    to protecting your personal information. This Privacy Policy explains how we collect,
                    use, and safeguard your information when you visit our website or interact with us.
                </p>
            </div>

            <!-- Information We Collect -->
            <div class="acdo-privacy-block">
                <h3 class="acdo-privacy-subtitle">Information We Collect</h3>

                <ul class="acdo-privacy-list">
                    <li>
                        Personal information such as your name, email address, phone number,
                        and postal address when voluntarily submitted through forms, donations,
                        or communication with us.
                    </li>

                    <li>
                        Non-personal information such as browser type, IP address, device information,
                        and pages visited may be collected automatically through cookies and analytics tools.
                    </li>
                </ul>
            </div>

            <!-- Use of Information -->
            <div class="acdo-privacy-block">
                <h3 class="acdo-privacy-subtitle">Use of Information</h3>

                <ul class="acdo-privacy-list">
                    <li>
                        To process donations and provide donation acknowledgements or receipts.
                    </li>

                    <li>
                        To communicate updates about our initiatives, programs, events,
                        volunteering opportunities, and organizational activities.
                    </li>

                    <li>
                        To improve our website functionality, user experience,
                        and communication effectiveness through analytics and feedback.
                    </li>
                </ul>
            </div>

            <!-- Sharing of Information -->
            <div class="acdo-privacy-block">
                <h3 class="acdo-privacy-subtitle">Sharing of Information</h3>

                <ul class="acdo-privacy-list">
                    <li>
                        We do not sell, rent, or trade your personal information to third parties.
                    </li>

                    <li>
                        Information may be shared with trusted service providers who support
                        website operations, payment processing, or communication services,
                        subject to confidentiality obligations.
                    </li>

                    <li>
                        We may disclose information if required by law,
                        government authorities, or legal processes.
                    </li>
                </ul>
            </div>

            <!-- Data Security -->
            <div class="acdo-privacy-block">
                <h3 class="acdo-privacy-subtitle">Data Security</h3>

                <ul class="acdo-privacy-list">
                    <li>
                        We implement appropriate technical and organizational measures
                        to protect your personal information from unauthorized access,
                        disclosure, misuse, or alteration.
                    </li>

                    <li>
                        While we strive to use commercially acceptable security measures,
                        no internet transmission or storage system can be guaranteed as completely secure.
                    </li>
                </ul>
            </div>

            <!-- Cookies -->
            <div class="acdo-privacy-block">
                <h3 class="acdo-privacy-subtitle">Cookies</h3>

                <ul class="acdo-privacy-list">
                    <li>
                        Our website may use cookies and similar technologies
                        to enhance user experience and analyze website traffic.
                    </li>

                    <li>
                        Users may choose to disable cookies through browser settings,
                        although some website features may not function properly.
                    </li>
                </ul>
            </div>

            <!-- User Rights -->
            <div class="acdo-privacy-block">
                <h3 class="acdo-privacy-subtitle">Your Rights</h3>

                <ul class="acdo-privacy-list">
                    <li>
                        You may request access to, correction of,
                        or deletion of your personal information by contacting us directly.
                    </li>

                    <li>
                        You may opt out of receiving future communications from us
                        at any time through unsubscribe links or direct communication.
                    </li>
                </ul>
            </div>

            <!-- Contact -->
            <div class="acdo-privacy-contact">
                <h3 class="acdo-privacy-subtitle">Contact Us</h3>

                <p class="acdo-privacy-text">
                    If you have any questions regarding this Privacy Policy,
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
/* Privacy Policy Custom CSS */

.acdo-privacy-section {
    background: #ffffff;
}

.acdo-privacy-wrapper {
    max-width: 950px;
    margin: 0 auto;
    background: #fff;
    padding: 50px;
    border-radius: 14px;
    box-shadow: 0 10px 40px rgba(0,0,0,0.06);
}

.acdo-privacy-block {
    margin-bottom: 40px;
}

.acdo-privacy-title {
    font-size: 42px;
    font-weight: 700;
    color: #1F5E2E;
    margin-bottom: 20px;
    line-height: 1.2;
}

.acdo-privacy-subtitle {
    font-size: 26px;
    font-weight: 600;
    color: #1F5E2E;
    margin-bottom: 18px;
}

.acdo-privacy-text {
    font-size: 16px;
    line-height: 1.9;
    color: #555;
    margin-bottom: 0;
}

.acdo-privacy-list {
    padding-left: 20px;
    margin: 0;
}

.acdo-privacy-list li {
    font-size: 16px;
    line-height: 1.9;
    color: #555;
    margin-bottom: 12px;
}

.acdo-privacy-contact {
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

    .acdo-privacy-wrapper {
        padding: 30px 20px;
    }

    .acdo-privacy-title {
        font-size: 32px;
    }

    .acdo-privacy-subtitle {
        font-size: 22px;
    }
}
</style>

@endsection
