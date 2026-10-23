{{-- @extends('web.include.header') --}}
@extends('web.template.layout')
@section('content')


<!-- Hero Section Start -->
<section class="hero-section">

    <div class="swiper banner-active">

        <div class="swiper-wrapper">

            @foreach($banners as $banner)

                <div class="swiper-slide">

                    <div class="hero-1">

                        {{-- Background --}}
                        <div class="hero-bg bg-cover"
                             style="background-image: url('{{ asset($banner->image) }}');">
                        </div>

                        {{-- Left Shape --}}
                        <div class="circle-left">

                            <img src="{{ asset('images/banner/circle-left.png') }}"
                                 alt="">

                        </div>

                        {{-- Object Shape --}}
                        <div class="object-shape">

                            <img src="{{ asset('images/banner/object-1-1.png') }}"
                                 alt="">

                        </div>

                        <div class="container">

                            <div class="row g-4">

                                <div class="col-lg-8">

                                    <div class="hero-content">

                                        {{-- Sub Heading --}}
                                        @if($banner->sub_heading)

                                            <h4 class="hero-sub wow fadeInUp">

                                                {{ $banner->sub_heading }}

                                            </h4>

                                        @endif

                                        {{-- Heading --}}
                                        <h1 class="hero-title char-animation">

                                            {{ $banner->heading }}

                                        </h1>

                                        {{-- Description --}}
                                        @if($banner->description)

                                            <p class="wow fadeInUp"
                                               data-wow-delay=".3s">

                                                {{ $banner->description }}

                                            </p>

                                        @endif

                                        {{-- Button --}}
                                        @if($banner->button_text && $banner->button_link)

                                            <div class="hero-button wow fadeInUp"
                                                 data-wow-delay=".5s">

                                                <a href="{{ $banner->button_link }}"
                                                   class="theme-btn">

                                                    <i class="fa-solid fa-heart"></i>

                                                    {{ $banner->button_text }}

                                                </a>

                                            </div>

                                        @endif

                                    </div>

                                </div>

                            </div>

                        </div>

                    </div>

                </div>

            @endforeach

        </div>

    </div>

</section>













<!-- Feature Section Start -->
<section class="feature-section fix section-padding">
  <div class="container">

    <div class="row justify-content-center">
      <div class="col-lg-7">

        <div class="sec-title text-center">

          <div class="sec-sub-title">
            <h6 class="sub-title tz-sub-tilte tz-sub-anim tx-subTitle">
              Our Focus Areas
            </h6>
          </div>

          <h2 class="title tx-title sec_title tz-itm-title tz-itm-anim">
            Building Stronger Communities <br>
            Through Sustainable Development
          </h2>

        </div>

      </div>
    </div>

    <div class="row">

      <!-- Block 1 -->
      <div class="col-xl-3 col-lg-4 col-md-6 wow fadeInUp" data-wow-delay=".2s">

        <div class="feature-block-1">

          <div class="icon">
            <img src="{{asset('images/icons/icon1-1.png')}}" alt="">
          </div>

          <div class="content">

            <h4 class="title">
              Rural Development
            </h4>

            <p>
              Empowering rural communities through sustainable initiatives, awareness programs,
              livelihood support, and grassroots development activities.
            </p>

          </div>

        </div>

      </div>

      <!-- Block 2 -->
      <div class="col-xl-3 col-lg-4 col-md-6 wow fadeInUp" data-wow-delay=".4s">

        <div class="feature-block-1">

          <div class="icon bg-2">
            <img src="{{asset('images/icons/icon1-2.png')}}" alt="">
          </div>

          <div class="content">

            <h4 class="title">
              Agriculture & Farmer Welfare
            </h4>

            <p>
              Supporting farmers through agricultural awareness, sustainable farming practices,
              capacity-building, and rural livelihood initiatives.
            </p>

          </div>

        </div>

      </div>

      <!-- Block 3 -->
      <div class="col-xl-3 col-lg-4 col-md-6 wow fadeInUp" data-wow-delay=".6s">

        <div class="feature-block-1">

          <div class="icon bg-3">
            <img src="{{asset('images/icons/icon1-3.png')}}" alt="">
          </div>

          <div class="content">

            <h4 class="title">
              Education & Skill Development
            </h4>

            <p>
              Promoting education, vocational training, digital literacy, and youth skill
              development for long-term empowerment and self-reliance.
            </p>

          </div>

        </div>

      </div>

      <!-- Block 4 -->
      <div class="col-xl-3 col-lg-4 col-md-6 wow fadeInUp" data-wow-delay=".8s">
        <div class="feature-block-1">
          <div class="icon bg-4">
            <img src="{{asset('images/icons/icon1-4.png')}}" alt="">
          </div>
          <div class="content">
            <h4 class="title">
              Nature & Environmental Conservation
            </h4>

            <p>
              Organizing plantation drives, environmental awareness campaigns, and sustainability
              initiatives to protect natural resources and ecosystems.
            </p>

          </div>

        </div>

      </div>

    </div>
  </div>
</section>





<!-- About Section Start -->
<section class="about-section section-padding fix section-bg">

  <div class="object-shape float-bob-y d-none d-xxl-block">
    <img src="{{asset('images/icons/object1-1.png')}}" alt="">
  </div>

  <div class="layer-shape1 float-bob-x d-none d-xxl-block">
    <img src="{{asset('images/icons/layer1-1.png')}}" alt="">
  </div>

  <div class="layer-shape2 float-bob-y d-none d-xxl-block">
    <img src="{{asset('images/icons/layer1-2.png')}}" alt="">
  </div>

  <div class="container">
    <div class="row g-4">

      <!-- Left Images -->
      <div class="col-xl-6 col-lg-8">

        <div class="about-left-thumb-items">

          <div class="row">

            <div class="col-lg-4 col-md-4 col-sm-5 col-5 wow fadeInUp" data-wow-delay=".3s">

              <div class="uni-icon">
                <img style="height: 150px;" src="{{asset('website/logo.png')}}" alt="img">
              </div>

              <div class="thumb-1">
                <img src="{{asset('website/img/111.jpg')}}" alt="img">
              </div>

            </div>

            <div class="col-lg-8 col-md-8 col-sm-7 col-7 wow fadeInUp" data-wow-delay=".5s">

              <div class="thumb-2">
                <img src="{{asset('website/img/collabnhpc.jpeg')}}" alt="img">
              </div>

            </div>

          </div>

        </div>

      </div>

      <!-- Right Content -->
      <div class="col-xl-6 col-lg-8 wow fadeInUp" data-wow-delay=".3s">

        <div class="about-right-content">

          <div class="sec-title mb-0">

            <div class="sec-sub-title">
              <h6 class="sub-title tz-sub-tilte tz-sub-anim tx-subTitle">
                Who We Are
              </h6>
            </div>

            <h2 class="title tx-title sec_title tz-itm-title tz-itm-anim">
              A Registered Grassroots Organisation Working For Sustainable Community Development
            </h2>

          </div>

          <!-- Tabs -->
          <ul class="nav">

            <li class="nav-item">
              <a href="#thumb1" data-bs-toggle="tab" class="nav-link active">
                Our Mission.
              </a>
            </li>

            <li class="nav-item">
              <a href="#thumb2" data-bs-toggle="tab" class="nav-link">
                Our Vision.
              </a>
            </li>

          </ul>

          <div class="tab-content">

            <!-- Mission -->
            <div id="thumb1" class="tab-pane fade show active">

              <p class="about-text">
                We Can Organisation is committed to empowering communities through
                sustainable rural development, agriculture, education, environmental conservation,
                cultural preservation, and social awareness initiatives across Assam and North-East India.
                We work closely with farmers, youth, women, and local communities to create inclusive
                and long-term social impact.
              </p>

              <div class="about-bottom-area">

                <a href="{{route('about')}}" class="theme-btn">
                  <i class="fa-solid fa-heart"></i> Explore More
                </a>

                <div class="text-area">
                  <h3 class="title">2015</h3>
                  <p>Registered <br> Community Organisation</p>
                </div>

              </div>

            </div>

            <!-- Vision -->
            <div id="thumb2" class="tab-pane fade">

              <p class="about-text">
                Our vision is to build a self-reliant, environmentally conscious, culturally enriched,
                and socially empowered society where every individual has access to opportunities,
                sustainable livelihoods, education, and community participation while preserving
                traditional values and natural resources for future generations.
              </p>

              <div class="about-bottom-area">

                <a href="{{route('about')}}" class="theme-btn">
                  <i class="fa-solid fa-heart"></i> Explore More
                </a>

                <div class="text-area">
                  <h3 class="title">100%</h3>
                  <p>Community Driven <br> & Transparent</p>
                </div>

              </div>

            </div>

          </div>

        </div>

      </div>

    </div>
  </div>

</section>




<!-- Counter Section Start -->
<section class="counter-section fix">
  <div class="container">
    <div class="counter-wrapper wow fadeInUp" data-wow-delay=".3s">

      <!-- Item 1 -->
      <div class="counter-items">
        <div class="icon">
          {{-- <img src="images/icons/counter-icon-1-1.png" alt=""> --}}
          <img src="{{asset('images/icons/counter-icon-1-1.png')}}" alt="">

        </div>
        <div class="content">
          <h3 class="count-box">
            <span class="count-text" data-speed="3000" data-stop="50">0</span>+
          </h3>
          <p>Communities Reached</p>
        </div>
      </div>

      <!-- Item 2 -->
      <div class="counter-items">
        <div class="icon">
          {{-- <img src="images/icons/counter-icon-1-2.png" alt=""> --}}
            <img src="{{asset('images/icons/counter-icon-1-2.png')}}" alt="">


        </div>
        <div class="content">
          <h3 class="count-box">
            <span class="count-text" data-speed="3000" data-stop="5000">0</span>+
          </h3>
          <p>Beneficiaries Impacted</p>
        </div>
      </div>

      <!-- Item 3 -->
      <div class="counter-items">
        <div class="icon">
          {{-- <img src="images/icons/counter-icon-1-3.png" alt=""> --}}
          <img src="{{asset('images/icons/counter-icon-1-3.png')}}" alt="">

        </div>
        <div class="content">
          <h3 class="count-box">
            <span class="count-text" data-speed="3000" data-stop="100">0</span>+
          </h3>
          <p>Programs & Campaigns Conducted</p>
        </div>
      </div>

      <!-- Item 4 -->
      <div class="counter-items">
        <div class="icon">
          {{-- <img src="images/icons/counter-icon-1-4.png" alt=""> --}}
          <img src="{{asset('images/icons/counter-icon-1-4.png')}}" alt="">

        </div>
        <div class="content">
          <h3 class="count-box">
            <span class="count-text" data-speed="3000" data-stop="100">0</span>%
          </h3>
          <p>Community Driven & Transparent</p>
        </div>
      </div>

    </div>
  </div>
</section>





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



<!-- =========================
 Infinite Photo Marquee Section
 Modern • Responsive • Conflict-Free
========================= -->

<section class="xv-marquee-gallery-section">
  

  <div class="xv-marquee-wrapper">
    <div class="xv-marquee-track">

      <!-- ORIGINAL 10 IMAGES -->
      <div class="xv-marquee-item">
        <img src="{{ asset('website/img/1.jpg') }}" alt="">
      </div>
      <div class="xv-marquee-item">
        <img src="{{ asset('website/img/5.jpeg') }}" alt="">
      </div>
      <div class="xv-marquee-item">
        <img src="{{ asset('website/img/7.jpeg') }}" alt="">
      </div>
      <div class="xv-marquee-item">
        <img src="{{ asset('website/img/9.jpg') }}" alt="">
      </div>
      <div class="xv-marquee-item">
        <img src="{{ asset('website/img/11.jpg') }}" alt="">
      </div>
      <div class="xv-marquee-item">
        <img src="{{ asset('website/img/15.jpg') }}" alt="">
      </div>
      <div class="xv-marquee-item">
        <img src="{{ asset('website/img/17.jpg') }}" alt="">
      </div>
      <div class="xv-marquee-item">
        <img src="{{ asset('website/img/19.jpg') }}" alt="">
      </div>
      <div class="xv-marquee-item">
        <img src="{{ asset('website/img/20.jpg') }}" alt="">
      </div>
      <div class="xv-marquee-item">
        <img src="{{ asset('website/img/collabnhpc.jpeg') }}" alt="">
      </div>
      <div class="xv-marquee-item">
        <img src="{{ asset('website/img/WhatsApp Image 2025-06-21 at 11.59.08 AM.jpeg') }}" alt="">
      </div>
      

         

    </div>
  </div>
</section>





<!-- Faq Section Start -->
<section class="faq-section fix section-padding">

  <div class="container">

    <div class="sec-title text-center">

      <div class="sec-sub-title">
        <h6 class="sub-title tz-sub-tilte tz-sub-anim tx-subTitle">
          FAQs
        </h6>
      </div>

      <h2 class="title tx-title sec_title tz-itm-title tz-itm-anim">
        Frequently Asked Questions
      </h2>

    </div>

    <div class="row justify-content-center">

      <div class="col-lg-10">

        <div class="faq-content-1">

          <ul class="accordion-box">

            <!-- 01 -->
            <li class="accordion block active-block wow fadeInUp">

              <div class="acc-btn active">

                <span class="number">01</span>

                What is We Can Organisation?

                <div class="icon fa-regular fa-plus"></div>

              </div>

              <div class="acc-content current">

                <div class="content">

                  <div class="text">
                    We Can Organisation is a registered grassroots
                    community development organization working across Assam and North-East India
                    in the fields of rural development, agriculture, education, environmental
                    conservation, cultural preservation, women empowerment, youth engagement,
                    and sustainable community initiatives.
                  </div>

                </div>

              </div>

            </li>

            <!-- 02 -->
            <li class="accordion block wow fadeInUp" data-wow-delay=".2s">

              <div class="acc-btn">

                <span class="number">02</span>

                What are the main focus areas of your organisation?

                <div class="icon fa-regular fa-plus"></div>

              </div>

              <div class="acc-content">

                <div class="content">

                  <div class="text">
                    Our major focus areas include rural development, agriculture & farmer welfare,
                    education & skill development, environmental conservation, women empowerment,
                    youth development, cultural preservation, health awareness, and community
                    participation initiatives.
                  </div>

                </div>

              </div>

            </li>

            <!-- 03 -->
            <li class="accordion block wow fadeInUp" data-wow-delay=".4s">

              <div class="acc-btn">

                <span class="number">03</span>

                How can I support or contribute to your initiatives?

                <div class="icon fa-regular fa-plus"></div>

              </div>

              <div class="acc-content">

                <div class="content">

                  <div class="text">
                    You can support We Can Organisation through donations,
                    volunteering, partnerships, awareness campaigns, CSR collaborations,
                    community participation, and by helping us expand our sustainable development initiatives.
                  </div>

                </div>

              </div>

            </li>

            <!-- 04 -->
            <li class="accordion block wow fadeInUp" data-wow-delay=".6s">

              <div class="acc-btn">

                <span class="number">04</span>

                Where does your organisation operate?

                <div class="icon fa-regular fa-plus"></div>

              </div>

              <div class="acc-content">

                <div class="content">

                  <div class="text">
                    We Can Organisation primarily operates in Assam
                    and across various regions of North-East India, focusing on rural,
                    semi-urban, and community-based development activities.
                  </div>

                </div>

              </div>

            </li>

            <!-- 05 -->
            <li class="accordion block wow fadeInUp" data-wow-delay=".8s">

              <div class="acc-btn">

                <span class="number">05</span>

                Do you collaborate with CSR partners and other organisations?

                <div class="icon fa-regular fa-plus"></div>

              </div>

              <div class="acc-content">

                <div class="content">

                  <div class="text">
                    Yes, we actively collaborate with corporate CSR partners, institutions,
                    community groups, and organisations to implement impactful development,
                    environmental, educational, and social welfare initiatives with measurable community outcomes.
                  </div>

                </div>

              </div>

            </li>

          </ul>

        </div>

      </div>

    </div>

  </div>

</section>

<!-- Testimonial Section Start -->
<section class="testimonial-section fix section-padding">
  <div class="container">

    <div class="row justify-content-center">
      <div class="col-lg-7">
        <div class="sec-title text-center">
          <div class="sec-sub-title">
            <h6 class="sub-title tz-sub-tilte tz-sub-anim tx-subTitle">Testimonials</h6>
          </div>
          <h2 class="title tx-title sec_title tz-itm-title tz-itm-anim">
            Voices from Communities We Empower
          </h2>
        </div>
      </div>
    </div>

    <div class="swiper testimonial-slider wow fadeInUp" data-wow-delay=".3s">
      <div class="swiper-wrapper">

        <!-- Testimonial 1 -->
        <div class="swiper-slide">
          <div class="testimonial-block-1">
            <div class="star">
              <i class="fa-solid fa-star"></i>
              <i class="fa-solid fa-star"></i>
              <i class="fa-solid fa-star"></i>
              <i class="fa-solid fa-star"></i>
              <i class="fa-solid fa-star"></i>
            </div>
            <p>
              Agristic Cultural
              Development Organisation helped our village with awareness programs and skill training. Today, many youth are earning and supporting their families with confidence.
            </p>
            <div class="client-info">
              <div class="client-img">
                {{-- <img src="images/resource/testi1-1.jpg" alt=""> --}}
                <img src="{{asset('images/resource/testi1-1.jpg')}}" alt="">

              </div>
              <div class="info-content">
                <h5 class="name">Ranjit Das</h5>
                <span>Community Member, Assam</span>
              </div>
            </div>
            <div class="quote-icon">
              {{-- <img src="images/icons/quote1-1.png" alt=""> --}}
              <img src="{{asset('images/icons/quote1-1.png')}}" alt="">

            </div>
          </div>
        </div>

        <!-- Testimonial 2 -->
        <div class="swiper-slide">
          <div class="testimonial-block-1">
            <div class="star">
              <i class="fa-solid fa-star"></i>
              <i class="fa-solid fa-star"></i>
              <i class="fa-solid fa-star"></i>
              <i class="fa-solid fa-star"></i>
              <i class="fa-solid fa-star"></i>
            </div>
            <p>
              Through Agristic Cultural
              Development Organisation’s initiatives, we learned better farming techniques and improved our income. Their support has made a real difference in our lives.
            </p>
            <div class="client-info">
              <div class="client-img">
                {{-- <img src="images/resource/testi1-1.jpg" alt=""> --}}
                <img src="{{asset('images/resource/testi1-1.jpg')}}" alt="">

              </div>
              <div class="info-content">
                <h5 class="name">Mitali Devi</h5>
                <span>Farmer, Dhemaji</span>
              </div>
            </div>
            <div class="quote-icon">
              {{-- <img src="images/icons/quote1-1.png" alt=""> --}}
              <img src="{{asset('images/icons/quote1-1.png')}}" alt="">

            </div>
          </div>
        </div>

        <!-- Testimonial 3 -->
        <div class="swiper-slide">
          <div class="testimonial-block-1">
            <div class="star">
              <i class="fa-solid fa-star"></i>
              <i class="fa-solid fa-star"></i>
              <i class="fa-solid fa-star"></i>
              <i class="fa-solid fa-star"></i>
              <i class="fa-solid fa-star"></i>
            </div>
            <p>
              Agristic Cultural
              Development Organisation’s cultural programs helped preserve our traditions while giving young people a platform to showcase their talent and identity.
            </p>
            <div class="client-info">
              <div class="client-img">
                {{-- <img src="images/resource/testi1-1.jpg" alt=""> --}}
                <img src="{{asset('images/resource/testi1-1.jpg')}}" alt="">

              </div>
              <div class="info-content">
                <h5 class="name">Dipankar Bora</h5>
                <span>Youth Participant</span>
              </div>
            </div>
            <div class="quote-icon">
              {{-- <img src="images/icons/quote1-1.png" alt=""> --}}
              <img src="{{asset('images/icons/quote1-1.png')}}" alt="">

            </div>
          </div>
        </div>

      </div>
    </div>

    <!-- Slider Arrows -->
    <div class="array-button">
      <button class="array-prev">
        {{-- <img src="images/icons/arrow-1.svg" alt=""> --}}
            <img src="{{asset('images/icons/arrow-1.svg')}}" alt="">
      </button>
      <button class="array-next">
        {{-- <img src="images/icons/arrow-2.svg" alt=""> --}}
            <img src="{{asset('images/icons/arrow-2.svg')}}" alt="">

      </button>
    </div>

    <!-- Bottom Text -->
    <div class="testi-text wow fadeInUp" data-wow-delay=".5s">
      <h5 class="testi-title">
        Your monthly <a href="#">contribution</a> helps empower communities, support livelihoods, and create sustainable impact across Assam.
      </h5>
    </div>

  </div>
</section>




<script>

/* =========================
 OPTIONAL JS
 Smooth restart for hidden tabs
========================= */

(function () {

  const marqueeTrack = document.querySelector('.xv-marquee-track');

  if (!marqueeTrack) return;

  document.addEventListener('visibilitychange', function () {

    if (document.hidden) {
      marqueeTrack.style.animationPlayState = 'paused';
    } else {
      marqueeTrack.style.animationPlayState = 'running';
    }

  });

})();

</script>


@endsection

