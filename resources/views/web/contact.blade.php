@extends('web.template.layout')
@section('content')


        <!-- Start main-content -->
        {{-- <section class="page-title" style="background-image: url(images/resource/page-title.jpg);"> --}}
          <section class="page-title" style="background-image: url('{{asset('images/resource/page-title.jpg')}}');">

          <div class="auto-container">
            <div class="title-outer text-center">
              <h1 class="title">Conatct</h1>
              <ul class="page-breadcrumb">
                {{-- <li><a href="/">Home</a></li> --}}
                <li><a href="{{route('index')}}">Home</a></li>

                {{-- <li>Conatct</li> --}}
                <li><a href="{{route('contact')}}">Contact</a></li>

              </ul>
            </div>
          </div>
        </section>
        <!-- end main-content -->

        <!--Contact Details Start-->
<section class="contact-details">
  <div class="container pt-110 pb-70">
    <div class="row">

     <!-- Left Contact Form -->
<div class="col-xl-7 col-lg-6">

    <div class="sec-title black">
        <h2>Feel Free to Contact Us</h2>
    </div>

    {{-- Success Message --}}
    @if(session('success'))
        <div class="alert alert-success alert-dismissible fade show" role="alert">

            {{ session('success') }}

            <button type="button"
                    class="btn-close"
                    data-bs-dismiss="alert">
            </button>

        </div>
    @endif

    {{-- Error Message --}}
    @if(session('error'))
        <div class="alert alert-danger alert-dismissible fade show" role="alert">

            {{ session('error') }}

            <button type="button"
                    class="btn-close"
                    data-bs-dismiss="alert">
            </button>

        </div>
    @endif

    {{-- Validation Errors --}}
    @if($errors->any())

        <div class="alert alert-danger alert-dismissible fade show" role="alert">

            <ul class="mb-0">

                @foreach($errors->all() as $error)

                    <li>{{ $error }}</li>

                @endforeach

            </ul>

            <button type="button"
                    class="btn-close"
                    data-bs-dismiss="alert">
            </button>

        </div>

    @endif

    <!-- Contact Form -->
    <form id="contact_form"
          name="contact_form"
          action="{{ route('contact.store') }}"
          method="POST">

        @csrf

        <div class="row">

            <div class="col-sm-6">

                <div class="mb-3">

                    <input name="form_name"
                           class="form-control"
                           type="text"
                           placeholder="Enter Your Name"
                           value="{{ old('form_name') }}">

                </div>

            </div>

            <div class="col-sm-6">

                <div class="mb-3">

                    <input name="form_email"
                           class="form-control required email"
                           type="email"
                           placeholder="Enter Your Email"
                           value="{{ old('form_email') }}">

                </div>

            </div>

        </div>

        <div class="row">

            <div class="col-sm-6">

                <div class="mb-3">

                    <input name="form_subject"
                           class="form-control required"
                           type="text"
                           placeholder="Enter Subject"
                           value="{{ old('form_subject') }}">

                </div>

            </div>

            <div class="col-sm-6">

                <div class="mb-3">

                    <input name="form_phone"
                           class="form-control"
                           type="text"
                           placeholder="Enter Phone Number"
                           value="{{ old('form_phone') }}">

                </div>

            </div>

        </div>

        <div class="mb-3">

            <textarea name="form_message"
                      class="form-control required"
                      rows="7"
                      placeholder="Write Your Message">{{ old('form_message') }}</textarea>

        </div>

        <div class="mb-5">

            <input name="form_botcheck"
                   class="form-control"
                   type="hidden"
                   value="" />

            <button type="submit"
                    class="theme-btn btn-style-one mb-2 mb-sm-0"
                    data-loading-text="Please wait...">

                <span class="btn-title">
                    Send Message
                </span>

            </button>

            <button type="reset"
                    class="theme-btn btn-style-one"
                    data-loading-text="Please wait...">

                <span class="btn-title">
                    Reset
                </span>

            </button>

        </div>

    </form>
    <!-- Contact Form Validation-->

</div>

      <!-- Right Contact Info -->
      <div class="col-xl-5 col-lg-6">

        <div class="contact-details__right">

          <div class="sec-title black">
            <h2>Get in Touch With Us</h2>

            <div class="text">
              We Can Organisation is committed to empowering communities through education,
              cultural preservation, environmental awareness, and sustainable development initiatives across Assam
              and North-East India.
            </div>
          </div>

          <ul class="list-unstyled contact-details__info">

            <!-- Phone -->
            <li>
              <div class="icon">
                <span class="fa-classic fa-light fa-phone-plus"></span>
              </div>

              <div class="text">
                <h6 class="mb-1">Call Us</h6>

                <a href="tel:+919957709886">
                  +91 99577 09886
                </a>
              </div>
            </li>

            <!-- Email -->
            <li>
              <div class="icon">
                <span class="fal fa-envelope"></span>
              </div>

              <div class="text">
                <h6 class="mb-1">Write Email</h6>

                <a href="mailto:wecanngo@gmail.com">
                  wecanngo@gmail.com
                </a>
              </div>
            </li>

            <!-- Address -->
            <li>
              <div class="icon">
                <span class="fal fa-location-arrow"></span>
              </div>

              <div class="text">
                <h6 class="mb-1">Visit Us</h6>

                <span>
                  Machkhowa Bilotia, Dhemaji, Assam – 787057 <br>
                  Branch Office: Guwahati, Assam – 781022
                </span>
              </div>
            </li>

          </ul>

        </div>

      </div>

    </div>
  </div>
</section>
        <!--Contact Details End-->

        <!-- Map Section-->
      <section class="map-section">
    
  <iframe
    class="map w-100"
    src="https://maps.google.com/maps?q=Machkhowa%20Bilotia%20Dhemaji%20Assam&t=&z=13&ie=UTF8&iwloc=&output=embed"
    allowfullscreen=""
    loading="lazy"
    referrerpolicy="no-referrer-when-downgrade">
  </iframe>

</section>
        <!--End Map Section-->

@endsection

