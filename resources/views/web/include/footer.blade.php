<footer class="footer-section bg-cover" style="background-image: url('images/background/footer-bg.jpg');">

    <div class="container">
        <div class="footer-widget-wrapper">
            <div class="row g-4">

                <!-- Logo + About -->
                <div class="col-xl-4 col-lg-6 col-md-6 wow fadeInUp" data-wow-delay=".3s">
                    <div class="footer-content">
                        <a href="index.html" class="footer-logo">
                            <img style="height: 130px;" src="{{ asset('website/logo.png') }}" alt="WE CAN NGO">
                        </a>

                        <p>
                                Agristic Cultural Development Organisation is a registered grassroots
                            development organisation working across Assam and North-East India in
                            the areas of rural development, agriculture, education, environmental
                            conservation, cultural preservation, youth engagement, and sustainable
                            community empowerment initiatives.
                                                </p>
                                                <div class="footer-reg-info">
                            <p>
                                Registered Under Societies Registration Act XXI of 1860
                            </p>

                            <p>
                                Registration No: RS/DMJ/241/C/39 OF 2015-2016
                            </p>
                        </div>

                        {{-- <a href="page-causes.html" class="theme-btn"> --}}
                        <a href="{{ route('donate') }}" class="theme-btn">

                            <i class="fas fa-heart"></i> Donate Now
                        </a>
                    </div>
                </div>

                <!-- Contact Info -->
                <div class="col-xl-3 col-lg-6 col-md-6 wow fadeInUp" data-wow-delay=".5s">
                    <div class="footer-contact-info">
                        <div class="contact-info">
                            <h3 class="number">
                                <a href="tel:+919957709886">+91 99577 09886</a>
                            </h3>
                            <p class="email">
                                <a href="mailto:wecanngo@gmail.com">wecanngo@gmail.com</a>
                            </p>
                        </div>
                        

                        <h4 class="location-title">
                            Machkhowa Bilotia, Dhemaji, Assam – 787057 <br>
                            Branch Office: Guwahati, Assam – 781022
                        </h4>

                        php 
                    </div>
                </div>

                <!-- Important Links -->
                <div class="col-xl-5 col-lg-6 wow fadeInUp" data-wow-delay=".7s">
                    <ul class="footer-menu-list">

                        {{-- <li><a href="about.php"><span>About Us</span></a></li> --}}
                        <li><a href="{{ route('about') }}"><span>About Us</span></a></li>


                        {{-- <li><a href="donate.php"><span>Donate Now</span></a></li> --}}
                        <li><a href="{{ route('donate') }}"><span>Donate Now</span></a></li>


                        {{-- <li><a href="disclaimer.php"><span>Disclaimer</span></a></li> --}}
                        <li><a href="{{ route('disclaimer') }}"><span>Disclaimer</span></a></li>


                        {{-- <li><a href="terms-condition.php"><span>Terms & Conditions</span></a></li> --}}
                        <li><a href="{{ route('terms_condition') }}"><span>Terms & Conditions</span></a></li>


                        {{-- <li><a href="privacy-policy.php"><span>Privacy Policy</span></a></li> --}}
                        <li><a href="{{ route('privacy_policy') }}"><span>Privacy Policy</span></a></li>


                        {{-- <li><a href="cancellation-refund.php"><span>Cancellation & Refund Policy</span></a></li> --}}
                        <li><a href="{{ route('cancellation_refund') }}"><span>Cancellation & Refund Policy</span></a>
                        </li>


                        {{-- <li><a href="shipping.php"><span>Shipping & Delivery</span></a></li> --}}
                        <li><a href="{{ route('shipping') }}"><span>Shipping & Delivery</span></a></li>


                        {{-- <li><a href="contact.php"><span>Contact Us</span></a></li> --}}
                        <li><a href="{{ route('contact') }}"><span>Contact Us</span></a></li>


                    </ul>
                </div>

            </div>
        </div>
    </div>

    <!-- Footer Bottom -->
    <div class="footer-bottom">
        <div class="container">
            <div class="footer-bottom-wrapper wow fadeInUp" data-wow-delay=".3s">

                <p>© 2026 We Can (Agristic Cultural
                    Development Organisation NGO). All Rights Reserved.</p>

                <div class="social-icon">
                    <a href="#"><i class="fa-brands fa-x-twitter"></i></a>
                    <a href="#"><i class="fa-brands fa-facebook-f"></i></a>
                    <a href="#"><i class="fa-brands fa-instagram"></i></a>
                    <a href="#"><i class="fa-brands fa-youtube"></i></a>
                </div>

            </div>
        </div>
    </div>

</footer>
</div>
</div>
</div>

<!-- End Page Wrapper -->
{{-- <script src="js/jquery.js"></script>
<script src="js/popper.min.js"></script>
<script src="js/bootstrap.min.js"></script>
<script src="js/jquery.fancybox.js"></script>
<script src="js/jquery-ui.js"></script>
<script src="js/gsap.js"></script>
<script src="js/three.js"></script>
<script src="js/hover-effect.umd.js"></script> --}}


<script src="{{ asset('js/jquery.js') }}"></script>
<script src="{{ asset('js/popper.min.js') }}"></script>
<script src="{{ asset('js/bootstrap.min.js') }}"></script>
<script src="{{ asset('js/jquery.fancybox.js') }}"></script>
<script src="{{ asset('js/jquery-ui.js') }}"></script>
<script src="{{ asset('js/gsap.js') }}"></script>
<script src="{{ asset('js/three.js') }}"></script>
<script src="{{ asset('js/hover-effect.umd.js') }}"></script>


<!-- <script src="js/gsap-scroll-to-plugin.js"></script>
<script src="js/gsap-scroll-smoother.js"></script>
<script src="js/gsap-scroll-trigger.js"></script>
<script src="js/gsap-split-text.js"></script> -->



<script src="{{ asset('js/split-type.min.js') }}"></script>
<script src="{{ asset('js/parallaxie.js') }}"></script>
<script src="{{ asset('js/jquery.magnific-popup.min.js') }}"></script>
<script src="{{ asset('js/wow.js') }}"></script>
<script src="{{ asset('js/bxslider.js') }}"></script>
<script src="{{ asset('js/nice-select.min.js') }}"></script>
<script src="{{ asset('js/knob.js') }}"></script>
<script src="{{ asset('js/appear.js') }}"></script>
<script src="{{ asset('js/slick.js') }}"></script>
<script src="{{ asset('js/swiper.min.js') }}"></script>
<script src="{{ asset('js/mixitup.js') }}"></script>
<script src="{{ asset('js/script.js') }}"></script>
<script src="{{ asset('js/script-gsap.js') }}"></script>


{{-- <script src="js/split-type.min.js"></script>
<script src="js/parallaxie.js"></script>
<script src="js/jquery.magnific-popup.min.js"></script>
<script src="js/wow.js"></script>
<script src="js/bxslider.js"></script>
<script src="js/nice-select.min.js"></script>
<script src="js/knob.js"></script>
<script src="js/appear.js"></script>
<script src="js/slick.js"></script>
<script src="js/swiper.min.js"></script>
<script src="js/mixitup.js"></script>
<script src="js/script.js"></script>
<script src="js/script-gsap.js"></script> --}}
</body>

</html>
