@extends('web.template.layout')
@section('content')
    <section class="page-title" style="background-image: url(images/resource/page-title.jpg);">
        <div class="auto-container">
            <div class="title-outer text-center">
                <h1 class="title">About Us</h1>
                <ul class="page-breadcrumb">
                    {{-- <li><a href="/">Home</a></li> --}}
                    <li><a href="{{ route('index') }}">Home</a></li>
                    <li>About Us</li>
                    {{-- <li><a href="{{route('about')}}">About</a></li> --}}

                </ul>
            </div>
        </div>
    </section>


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
                <img src="{{asset('website/3.png')}}" alt="img">
              </div>

            </div>

            <div class="col-lg-8 col-md-8 col-sm-7 col-7 wow fadeInUp" data-wow-delay=".5s">

              <div class="thumb-2">
                <img src="{{asset('website/7.png')}}" alt="img">
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


    <!-- Feature Section Start -->
    <section class="feature-section fix section-padding">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-7">
                    <div class="sec-title text-center">
                        <div class="sec-sub-title">
                            <h6 class="sub-title tz-sub-tilte tz-sub-anim tx-subTitle">What We Do</h6>
                        </div>
                        <h2 class="title tx-title sec_title tz-itm-title tz-itm-anim">
                            Driving Sustainable Development <br> Across Communities
                        </h2>
                    </div>
                </div>
            </div>

            <div class="row">

                <!-- Block 1 -->
                <div class="col-xl-3 col-lg-4 col-md-6 wow fadeInUp" data-wow-delay=".2s">
                    <div class="feature-block-1">
                        <div class="icon">
                            {{-- <img src="images/icons/icon1-1.png" alt=""> --}}
                            <img src="{{ asset('images/icons/icon1-1.png') }}" alt="">

                        </div>
                        <div class="content">
                            <h4 class="title">Art & Cultural Development</h4>
                            <p>
                                Preserving and promoting traditional heritage, folk art, and cultural identity through
                                events, workshops, and community participation.
                            </p>
                        </div>
                    </div>
                </div>

                <!-- Block 2 -->
                <div class="col-xl-3 col-lg-4 col-md-6 wow fadeInUp" data-wow-delay=".4s">
                    <div class="feature-block-1">
                        <div class="icon bg-2">
                            {{-- <img src="images/icons/icon1-2.png" alt=""> --}}
                            <img src="{{ asset('images/icons/icon1-2.png') }}" alt="">

                        </div>
                        <div class="content">
                            <h4 class="title">Education & Skill Development</h4>
                            <p>
                                Providing literacy programs, digital education, and vocational training to empower youth and
                                build sustainable careers.
                            </p>
                        </div>
                    </div>
                </div>

                <!-- Block 3 -->
                <div class="col-xl-3 col-lg-4 col-md-6 wow fadeInUp" data-wow-delay=".6s">
                    <div class="feature-block-1">
                        <div class="icon bg-3">
                            {{-- <img src="images/icons/icon1-3.png" alt=""> --}}
                            <img src="{{ asset('images/icons/icon1-3.png') }}" alt="">

                        </div>
                        <div class="content">
                            <h4 class="title">Environment & Sustainability</h4>
                            <p>
                                Promoting conservation through plantation drives, awareness campaigns, and sustainable
                                practices for future generations.
                            </p>
                        </div>
                    </div>
                </div>

                <!-- Block 4 -->
                <div class="col-xl-3 col-lg-4 col-md-6 wow fadeInUp" data-wow-delay=".8s">
                    <div class="feature-block-1">
                        <div class="icon bg-4">
                            {{-- <img src="images/icons/icon1-4.png" alt=""> --}}
                            <img src="{{ asset('images/icons/icon1-4.png') }}" alt="">

                        </div>
                        <div class="content">
                            <h4 class="title">Women & Community Empowerment</h4>
                            <p>
                                Strengthening women, SHGs, and communities through leadership programs, livelihood support,
                                and social awareness initiatives.
                            </p>
                        </div>
                    </div>
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
                                Development Organisation helped our village with awareness programs and skill training.
                                Today, many youth are earning and supporting their families with confidence.
                            </p>
                            <div class="client-info">
                                <div class="client-img">
                                    {{-- <img src="images/resource/testi1-1.jpg" alt=""> --}}
                                    <img src="{{ asset('images/resource/testi1-1.jpg') }}" alt="">

                                </div>
                                <div class="info-content">
                                    <h5 class="name">Ranjit Das</h5>
                                    <span>Community Member, Assam</span>
                                </div>
                            </div>
                            <div class="quote-icon">
                                {{-- <img src="images/icons/quote1-1.png" alt=""> --}}
                                <img src="{{ asset('images/icons/quote1-1.png') }}" alt="">

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
                                Development Organisation’s initiatives, we learned better farming techniques and improved
                                our income. Their support has made a real difference in our lives.
                            </p>
                            <div class="client-info">
                                <div class="client-img">
                                    {{-- <img src="images/resource/testi1-1.jpg" alt=""> --}}
                                    <img src="{{ asset('images/resource/testi1-1.jpg') }}" alt="">

                                </div>
                                <div class="info-content">
                                    <h5 class="name">Mitali Devi</h5>
                                    <span>Farmer, Dhemaji</span>
                                </div>
                            </div>
                            <div class="quote-icon">
                                {{-- <img src="images/icons/quote1-1.png" alt=""> --}}
                                <img src="{{ asset('images/icons/quote1-1.png') }}" alt="">

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
                                Development Organisation’s cultural programs helped preserve our traditions while giving
                                young people a platform to showcase their talent and identity.
                            </p>
                            <div class="client-info">
                                <div class="client-img">
                                    {{-- <img src="images/resource/testi1-1.jpg" alt=""> --}}
                                    <img src="{{ asset('images/resource/testi1-1.jpg') }}" alt="">

                                </div>
                                <div class="info-content">
                                    <h5 class="name">Dipankar Bora</h5>
                                    <span>Youth Participant</span>
                                </div>
                            </div>
                            <div class="quote-icon">
                                {{-- <img src="images/icons/quote1-1.png" alt=""> --}}
                                <img src="{{ asset('images/icons/quote1-1.png') }}" alt="">

                            </div>

                        </div>
                    </div>

                </div>
            </div>

            <!-- Slider Arrows -->
            <div class="array-button">
                <button class="array-prev">
                    {{-- <img src="images/icons/arrow-1.svg" alt=""> --}}
                    <img src="{{ asset('images/icons/arrow-1.svg') }}" alt="">

                </button>
                <button class="array-next">
                    {{-- <img src="images/icons/arrow-2.svg" alt=""> --}}
                    <img src="{{ asset('images/icons/arrow-2.svg') }}" alt="">

                </button>
            </div>

            <!-- Bottom Text -->
            <div class="testi-text wow fadeInUp" data-wow-delay=".5s">
                <h5 class="testi-title">
                    Your monthly <a href="#">contribution</a> helps empower communities, support livelihoods, and
                    create sustainable impact across Assam.
                </h5>
            </div>

        </div>
    </section>
@endsection
