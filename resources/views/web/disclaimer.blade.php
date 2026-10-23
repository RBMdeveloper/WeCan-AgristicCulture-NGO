@extends('web.template.layout')
@section('content')

<!-- Disclaimer Page Start -->
<section class="page-title" style="background-image: url(images/resource/page-title.jpg);">
    <div class="auto-container">
        <div class="title-outer text-center">
            <h1 class="title">Disclaimer</h1>
            <ul class="page-breadcrumb">
                {{-- <li><a href="/">Home</a></li> --}}
                <li><a href="{{route('index')}}">Home</a></li>

                <li>Disclaimer</li>
            </ul>
        </div>
    </div>
</section>

<section class="acdo-disclaimer-section section-padding">
    <div class="container">

        <div class="acdo-disclaimer-wrapper">

            <!-- Intro -->
            <div class="acdo-disclaimer-block">
                <h2 class="acdo-disclaimer-title">Disclaimer</h2>

                <p class="acdo-disclaimer-text">
                    The content provided on the We Can Organisation website is for informational purposes only.
                    We strive to keep all information accurate, updated, and reliable; however, we make no warranties or
                    representations regarding the completeness, reliability, suitability, or accuracy of the information available on this website.
                </p>
            </div>

            <!-- General Disclaimer -->
            <div class="acdo-disclaimer-block">
                <h3 class="acdo-disclaimer-subtitle">General Disclaimer</h3>

                <ul class="acdo-disclaimer-list">
                    <li>
                        All information on this website is provided “as is” without any guarantees of completeness,
                        accuracy, or timeliness.
                    </li>

                    <li>
                        We Can Organisation shall not be held responsible for any loss or damage
                        arising from the use of this website or reliance on any information provided herein.
                    </li>
                </ul>
            </div>

            <!-- External Links -->
            <div class="acdo-disclaimer-block">
                <h3 class="acdo-disclaimer-subtitle">External Links</h3>

                <ul class="acdo-disclaimer-list">
                    <li>
                        Our website may contain links to third-party websites for informational and reference purposes.
                    </li>

                    <li>
                        We do not control, endorse, or take responsibility for the content, policies, or practices of
                        external websites.
                    </li>
                </ul>
            </div>

            <!-- No Professional Advice -->
            <div class="acdo-disclaimer-block">
                <h3 class="acdo-disclaimer-subtitle">No Professional Advice</h3>

                <ul class="acdo-disclaimer-list">
                    <li>
                        Nothing on this website constitutes legal, financial, medical, or professional advice.
                    </li>

                    <li>
                        Visitors are advised to consult qualified professionals for guidance related to specific concerns
                        or situations.
                    </li>
                </ul>
            </div>

            <!-- Limitation of Liability -->
            <div class="acdo-disclaimer-block">
                <h3 class="acdo-disclaimer-subtitle">Limitation of Liability</h3>

                <ul class="acdo-disclaimer-list">
                    <li>
                        Under no circumstances shall We Can Organisation be liable for any direct,
                        indirect, incidental, or consequential damages arising from the use of this website.
                    </li>

                    <li>
                        This includes, but is not limited to, loss of data, business interruption, or loss of goodwill.
                    </li>
                </ul>
            </div>

            <!-- Copyright -->
            <div class="acdo-disclaimer-block">
                <h3 class="acdo-disclaimer-subtitle">Copyright Notice</h3>

                <ul class="acdo-disclaimer-list">
                    <li>
                        All content, text, images, graphics, and materials on this website are protected under applicable
                        copyright and intellectual property laws.
                    </li>

                    <li>
                        Unauthorized reproduction, distribution, or use of website content without written permission may
                        result in legal action.
                    </li>
                </ul>
            </div>

            <!-- Contact -->
            <div class="acdo-disclaimer-contact">
                <h3 class="acdo-disclaimer-subtitle">Contact Us</h3>

                <p class="acdo-disclaimer-text">
                    If you have any questions regarding this Disclaimer, please contact us:
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
/* Disclaimer Page Custom CSS */

.acdo-disclaimer-section {
    background: #ffffff;
}

.acdo-disclaimer-wrapper {
    max-width: 950px;
    margin: 0 auto;
    background: #fff;
    padding: 50px;
    border-radius: 14px;
    box-shadow: 0 10px 40px rgba(0,0,0,0.06);
}

.acdo-disclaimer-block {
    margin-bottom: 40px;
}

.acdo-disclaimer-title {
    font-size: 42px;
    font-weight: 700;
    color: #1F5E2E;
    margin-bottom: 20px;
    line-height: 1.2;
}

.acdo-disclaimer-subtitle {
    font-size: 26px;
    font-weight: 600;
    color: #1F5E2E;
    margin-bottom: 18px;
}

.acdo-disclaimer-text {
    font-size: 16px;
    line-height: 1.9;
    color: #555;
    margin-bottom: 0;
}

.acdo-disclaimer-list {
    padding-left: 20px;
    margin: 0;
}

.acdo-disclaimer-list li {
    font-size: 16px;
    line-height: 1.9;
    color: #555;
    margin-bottom: 12px;
}

.acdo-disclaimer-contact {
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

    .acdo-disclaimer-wrapper {
        padding: 30px 20px;
    }

    .acdo-disclaimer-title {
        font-size: 32px;
    }

    .acdo-disclaimer-subtitle {
        font-size: 22px;
    }
}
</style>

@endsection
