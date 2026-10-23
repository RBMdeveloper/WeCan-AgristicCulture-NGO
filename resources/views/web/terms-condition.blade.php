@extends('web.template.layout')
@section('content')

<!-- Terms & Conditions Page Start -->
<section class="page-title" style="background-image: url(images/resource/page-title.jpg);">
    <div class="auto-container">
        <div class="title-outer text-center">
            <h1 class="title">Terms & Conditions</h1>
            <ul class="page-breadcrumb">
                {{-- <li><a href="/">Home</a></li> --}}
                <li><a href="{{route('index')}}">Home</a></li>

                <li>Terms & Conditions</li>
            </ul>
        </div>
    </div>
</section>

<section class="acdo-terms-section section-padding">
    <div class="container">

        <div class="acdo-terms-wrapper">

            <!-- Intro -->
            <div class="acdo-terms-block">
                <h2 class="acdo-terms-title">Terms & Conditions</h2>

                <p class="acdo-terms-text">
                    Welcome to the official website of We Can Organisation.
                    By accessing and using this website, you agree to comply with and be bound by the following
                    Terms & Conditions. Please read them carefully before using our website or services.
                </p>
            </div>

            <!-- Website Usage -->
            <div class="acdo-terms-block">
                <h3 class="acdo-terms-subtitle">Website Usage</h3>

                <ul class="acdo-terms-list">
                    <li>
                        The content available on this website is intended for general informational and awareness purposes only.
                    </li>

                    <li>
                        Users agree not to misuse, disrupt, or attempt unauthorized access to any part of the website.
                    </li>

                    <li>
                        Any unlawful use of this website may result in legal action under applicable laws.
                    </li>
                </ul>
            </div>

            <!-- Donations -->
            <div class="acdo-terms-block">
                <h3 class="acdo-terms-subtitle">Donations</h3>

                <ul class="acdo-terms-list">
                    <li>
                        Donations made to We Can Organisation are voluntary and non-refundable unless otherwise stated.
                    </li>

                    <li>
                        We reserve the right to utilize donated funds for community development, education, environmental initiatives,
                        cultural preservation, and other organizational objectives.
                    </li>

                    <li>
                        Donation receipts will be provided subject to applicable regulations and availability of required donor information.
                    </li>
                </ul>
            </div>

            <!-- Intellectual Property -->
            <div class="acdo-terms-block">
                <h3 class="acdo-terms-subtitle">Intellectual Property Rights</h3>

                <ul class="acdo-terms-list">
                    <li>
                        All website content including text, graphics, logos, images, and materials are the property of
                        We Can Organisation unless otherwise stated.
                    </li>

                    <li>
                        Unauthorized copying, reproduction, distribution, or modification of website content is strictly prohibited.
                    </li>
                </ul>
            </div>

            <!-- Third Party Links -->
            <div class="acdo-terms-block">
                <h3 class="acdo-terms-subtitle">Third-Party Links</h3>

                <ul class="acdo-terms-list">
                    <li>
                        This website may include links to external websites for informational purposes.
                    </li>

                    <li>
                        We Can Organisation is not responsible for the content, privacy policies,
                        or practices of any third-party websites.
                    </li>
                </ul>
            </div>

            <!-- Limitation -->
            <div class="acdo-terms-block">
                <h3 class="acdo-terms-subtitle">Limitation of Liability</h3>

                <ul class="acdo-terms-list">
                    <li>
                        We Can Organisation shall not be liable for any direct, indirect,
                        incidental, or consequential damages arising from the use of this website.
                    </li>

                    <li>
                        We do not guarantee uninterrupted availability, security, or error-free functionality of the website.
                    </li>
                </ul>
            </div>

            <!-- Changes -->
            <div class="acdo-terms-block">
                <h3 class="acdo-terms-subtitle">Changes to Terms</h3>

                <ul class="acdo-terms-list">
                    <li>
                        We reserve the right to update or modify these Terms & Conditions at any time without prior notice.
                    </li>

                    <li>
                        Continued use of the website after changes are posted constitutes acceptance of the revised terms.
                    </li>
                </ul>
            </div>

            <!-- Governing Law -->
            <div class="acdo-terms-block">
                <h3 class="acdo-terms-subtitle">Governing Law</h3>

                <p class="acdo-terms-text">
                    These Terms & Conditions shall be governed and interpreted in accordance with the laws of India.
                    Any disputes arising from the use of this website shall be subject to the jurisdiction of competent courts in Assam, India.
                </p>
            </div>

            <!-- Contact -->
            <div class="acdo-terms-contact">
                <h3 class="acdo-terms-subtitle">Contact Us</h3>

                <p class="acdo-terms-text">
                    If you have any questions regarding these Terms & Conditions, please contact us:
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
/* Terms & Conditions Custom CSS */

.acdo-terms-section {
    background: #ffffff;
}

.acdo-terms-wrapper {
    max-width: 950px;
    margin: 0 auto;
    background: #fff;
    padding: 50px;
    border-radius: 14px;
    box-shadow: 0 10px 40px rgba(0,0,0,0.06);
}

.acdo-terms-block {
    margin-bottom: 40px;
}

.acdo-terms-title {
    font-size: 42px;
    font-weight: 700;
    color: #1F5E2E;
    margin-bottom: 20px;
    line-height: 1.2;
}

.acdo-terms-subtitle {
    font-size: 26px;
    font-weight: 600;
    color: #1F5E2E;
    margin-bottom: 18px;
}

.acdo-terms-text {
    font-size: 16px;
    line-height: 1.9;
    color: #555;
    margin-bottom: 0;
}

.acdo-terms-list {
    padding-left: 20px;
    margin: 0;
}

.acdo-terms-list li {
    font-size: 16px;
    line-height: 1.9;
    color: #555;
    margin-bottom: 12px;
}

.acdo-terms-contact {
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

    .acdo-terms-wrapper {
        padding: 30px 20px;
    }

    .acdo-terms-title {
        font-size: 32px;
    }

    .acdo-terms-subtitle {
        font-size: 22px;
    }
}
</style>

@endsection
