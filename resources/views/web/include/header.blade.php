<!DOCTYPE html>
<html lang="en">

<!-- Mirrored from html.kodesolution.com/2026/hopenest-html/index.php by HTTrack Website Copier/3.x [XR&CO'2014], Mon, 23 Feb 2026 10:38:36 GMT -->
<head>
<meta charset="utf-8">

<title>Agristic Cultural Development Organisation in Assam | WE CAN NGO </title>

<meta name="description" content="WE CAN is a grassroots NGO in Assam working on education, rural development, culture, environment, women empowerment, and sustainable livelihoods across North-East India.">

<meta name="keywords" content="NGO in Assam, Rural Development NGO, Cultural Development Organisation, WE CAN NGO, Women Empowerment Assam, Skill Development NGO, CSR NGO India, North East NGO">

<meta name="author" content="WE CAN NGO">

<!-- Open Graph (Social Sharing) -->
<meta property="og:title" content="WE CAN NGO | Community Development in Assam">
<meta property="og:description" content="Empowering communities through education, culture, sustainability, and social impact across North-East India.">
<meta property="og:image" content="{{ asset('website/logo.png') }}">
<meta property="og:type" content="website">

<!-- Stylesheets -->
<link href="{{ asset('css/bootstrap.min.css') }}" rel="stylesheet">
<link href="{{ asset('css/style.css') }}" rel="stylesheet">

<!-- Favicon -->
<link rel="shortcut icon" href="{{ asset('website/logo.png') }}" type="image/x-icon">

<!-- Responsive -->
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
</head>

<body>
  <div class="page-wrapper">

    <!-- Preloader Start -->
    {{-- <div id="preloader" class="preloader">
      <div class="animation-preloader">
        <div class="spinner"></div>
        <div class="txt-loading">
          <span data-text-preloader="W" class="letters-loading"> W </span>
          <span data-text-preloader="E" class="letters-loading"> E </span>
          <span data-text-preloader=" " class="letters-loading">&nbsp;</span>
          <span data-text-preloader="C" class="letters-loading"> C </span>
          <span data-text-preloader="A" class="letters-loading"> A </span>
          <span data-text-preloader="N" class="letters-loading"> N </span>
        </div>
        <p class="text-center">Loading</p>
      </div>
      <div class="loader">
        <div class="row">
          <div class="col-3 loader-section section-left">
            <div class="bg"></div>
          </div>
          <div class="col-3 loader-section section-left">
            <div class="bg"></div>
          </div>
          <div class="col-3 loader-section section-right">
            <div class="bg"></div>
          </div>
          <div class="col-3 loader-section section-right">
            <div class="bg"></div>
          </div>
        </div>
      </div>
    </div> --}}

    <!-- Back To Top Start -->
    <button id="back-top" class="back-to-top">
      <i class="fa-regular fa-arrow-up"></i>
    </button>

    <!-- MouseCursor Start -->
    <div class="mouseCursor cursor-outer"></div>
    <div class="mouseCursor cursor-inner"></div>

    <!-- Main Header-->
    <header class="main-header header-style-one header-1">
      {{-- <a href="index.php" class="main-logo"> --}}
      <a href="{{route('index')}}" class="main-logo">

        <!-- <img src="website/logo1.png" alt="WE CAN NGO Logo"> -->
        <img src="{{asset('website/logo1.png')}}" alt="WE CAN NGO Logo">

      </a>

<a href="page-contact.html" class="link-btn">Join as Volunteer</a>

<!-- Header Lower -->
<div class="container d-none d-lg-block">
  <div class="header-top-wrapper">
    <ul>
      <li>
        <i class="fa-solid fa-location-dot"></i>
        Machkhowa Bilotia, Dhemaji, Assam – 787057
      </li>
      <li>
        <i class="fa-solid fa-envelope"></i>
        <a href="mailto:wecanngo@gmail.com">wecanngo@gmail.com</a>
      </li>
    </ul>

    <div class="social-icon">
      <span>Follow Us:</span>
      <div class="social-icon">
        <a href="#" aria-label="Twitter"><i class="fa-brands fa-x-twitter"></i></a>
        <a href="#" aria-label="Facebook"><i class="fa-brands fa-facebook-f"></i></a>
        <a href="#" aria-label="Instagram"><i class="fa-brands fa-instagram"></i></a>
        <a href="#" aria-label="YouTube"><i class="fa-brands fa-youtube"></i></a>
      </div>
    </div>
  </div>
</div>
      <div class="header-lower">
        <!-- Main box -->
        <div class="container">
          <div class="main-box">
            <!--Nav Box-->
            <div class="nav-outer">
              <div class="logo d-none">
                <!-- <a href="index.php"> -->
                <a href="{{route('index')}}">
                    <!-- <img src="website/logo1.png" alt="img"> -->
                    <img src="{{asset('website/logo1.png')}}" alt="img">
                </a>
              </div>
              <nav class="nav main-menu">
                <ul class="navigation">
                  <li><a href="{{ route('index') }}">Home</a></li>
                  
                  <li><a  href="{{ route('about') }}">About</a></li>
                  <li><a  href="{{ route('service') }}">Services</a></li>
                  <li><a  href="{{ route('members') }}">Members</a></li>
                  <li><a href="{{ route('gallery') }}">Gallery</a></li>
                  <li><a href="{{ route('contact') }}">Contact</li>
                </ul>
              </nav>
              <div class="outer-box">
                <!-- Main Menu End-->
                <div class="ui-btn-outer">
                  <div class="ui-btn-search">
                    <a href="{{ route('donate') }}" class="theme-btn"><i class="fa-solid fa-heart"></i> Donate Now</a>
                  </div>

                  <!-- Mobile Nav toggler -->
                </div>
                <div class="mobile-nav-toggler"><span class="icon lnr-icon-bars"></span></div>
              </div>
            </div>
          </div>
        </div>
      </div>
      <!-- End Header Lower -->

      <!-- Mobile Menu  -->
      <div class="mobile-menu">
        <div class="menu-backdrop"></div>

        <!--Here Menu Will Come Automatically Via Javascript / Same Menu as in Header-->
        <nav class="menu-box">
          <div class="upper-box">
            <div class="nav-logo">
              <a href="index.php">
                <img src="website/logo1.png" alt="">
              </a>
            </div>
            <div class="close-btn"><i class="icon fa fa-times"></i></div>
          </div>

          <ul class="navigation clearfix">
            <!--Keep This Empty / Menu will come through Javascript-->
          </ul>
          <ul class="contact-list-one">
            <li>
              <!-- Contact Info Box -->
              <div class="contact-info-box">
                <i class="icon lnr-icon-phone-handset"></i>
                <span class="title">Call Now</span>
                <a href="tel:+92880098670">+92 (8800) - 98670</a>
              </div>
            </li>
            <li>
              <!-- Contact Info Box -->
              <div class="contact-info-box">
                <span class="icon lnr-icon-envelope1"></span>
                <span class="title">Send Email</span>
                <a href="mailto:help@company.com">help@company.com</a>
              </div>
            </li>
            <li>
              <!-- Contact Info Box -->
              <div class="contact-info-box">
                <span class="icon lnr-icon-clock"></span>
                <span class="title">Send Email</span>
                Mon - Sat 8:00 - 6:30, Sunday - CLOSED
              </div>
            </li>
          </ul>

          <ul class="social-links">
            <li><a href="#"><i class="fab fa-twitter"></i></a></li>
            <li><a href="#"><i class="fab fa-facebook-f"></i></a></li>
            <li><a href="#"><i class="fab fa-pinterest"></i></a></li>
            <li><a href="#"><i class="fab fa-instagram"></i></a></li>
          </ul>
        </nav>
      </div>
      <!-- End Mobile Menu -->

      <!-- Header Search -->
      <div class="search-popup">
        <span class="search-back-drop"></span>
        <button class="close-search"><span class="fa fa-times"></span></button>

        
      </div>
      <!-- End Header Search -->

      <!-- Sticky Header  -->
      <div class="sticky-header">
        <div class="auto-container">
          <div class="inner-container">
            <!--Logo-->
            <div class="logo">
              <a href="{{ route('index') }}"><img src="{{ asset('website/logo2.png') }}" alt="img"></a>
            </div>

            <!--Right Col-->
            <div class="nav-outer">
              <!-- Main Menu -->
              <nav class="main-menu">
                <div class="navbar-collapse show collapse clearfix">
                  <ul class="navigation clearfix">
                    <!--Keep This Empty / Menu will come through Javascript-->
                  </ul>
                </div>
              </nav>
              <!-- Main Menu End-->

              <!--Mobile Navigation Toggler-->
             <div class="mobile-nav-toggler"><span class="icon lnr-icon-bars"></span></div>
            </div>
          </div>
        </div>
      </div>
      <!-- End Sticky Menu -->
    </header>
    <!--End Main Header -->
   
    <div id="smooth-wrapper">
      <div id="smooth-content">

