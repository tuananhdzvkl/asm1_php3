<!doctype html>
<html class="no-js" lang="zxx">

<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title> Hosting | Template</title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="manifest" href="site.webmanifest">
    <link rel="shortcut icon" type="image/x-icon" href="{{ asset('assets/img/favicon.ico') }}">

    <!-- CSS here -->
    <link rel="stylesheet" href="{{ asset('assets/css/bootstrap.min.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/owl.carousel.min.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/slicknav.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/flaticon.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/progressbar_barfiller.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/gijgo.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/animate.min.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/animated-headline.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/magnific-popup.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/fontawesome-all.min.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/themify-icons.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/slick.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/nice-select.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/style.css') }}">
    @stack('styles')
</head>

<body>
    <!-- ? Preloader Start -->
    @include('user.layouts.preloader')
    <!-- Preloader Start -->
    @include('user.layouts.header')
    <main>
        <!-- Slider Area Start-->
        <div class="slider-area slider-bg ">
            <!-- Single Slider -->
            <div class="single-slider d-flex align-items-center slider-height3">
                <div class="container">
                    <div class="row align-items-center justify-content-center">
                        <div class="col-xl-8 col-lg-9 col-md-12 ">
                            <div class="hero__caption hero__caption3 text-center">
                                <h1 data-animation="fadeInLeft" data-delay=".6s ">Help center</h1>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Slider Shape -->
            <div class="slider-shape d-none d-lg-block">
                <img class="slider-shape1" src="{{ asset('assets/img/hero/top-left-shape.png') }}" alt="">
            </div>
        </div>
        <!-- Slider Area End -->
        <!-- ask questions -->
        <section class="ask-questions section-padding40 fix">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-xl-8 col-lg-9 col-md-10 ">
                        <!-- Section Tittle -->
                        <div class="section-tittle section-tittle2 text-center mb-90">
                            <h2>Frequently ask questions</h2>
                            <p>Supercharge your WordPress hosting with detailed website analytics, marketing tools. Our
                                experts are just part of the reason Bluehost is the ideal home for your WordPress
                                website. We're here to help you succeed!</p>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-lg-6 col-md-6">
                        <div class="single-question  single-question2 d-flex mb-50">
                            <span> Q.</span>
                            <div class="pera">
                                <h2>Why can't people connect to the web server on my PC?</h2>
                                <p>We operate one of the most advanced 100 Gbit networks in the world, complete with
                                    Anycast support and extensive DDoS protection.</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6 col-md-6">
                        <div class="single-question  single-question2 d-flex mb-50">
                            <span> Q.</span>
                            <div class="pera">
                                <h2>What domain name should I choose for my site?</h2>
                                <p>We operate one of the most advanced 100 Gbit networks in the world, complete with
                                    Anycast support and extensive DDoS protection.</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6 col-md-6">
                        <div class="single-question  single-question2 d-flex mb-50">
                            <span> Q.</span>
                            <div class="pera">
                                <h2>How can I make my website work without www. in front?</h2>
                                <p>We operate one of the most advanced 100 Gbit networks in the world, complete with
                                    Anycast support and extensive DDoS protection.</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6 col-md-6">
                        <div class="single-question  single-question2 d-flex mb-50">
                            <span> Q.</span>
                            <div class="pera">
                                <h2>Why does Internet Information Server want a password?</h2>
                                <p>We operate one of the most advanced 100 Gbit networks in the world, complete with
                                    Anycast support and extensive DDoS protection.</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-xl-12 ">
                        <div class="more-btn text-center mt-20">
                            <a href="#" class="btn">Go to Support</a>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- End ask questions -->
    </main>
    @include('user.layouts.footer')
  <!-- JS here -->

  <script src="{{asset('assets/js/vendor/modernizr-3.5.0.min.js')}}"></script>
  <!-- Jquery, Popper, Bootstrap -->
  <script src="{{asset('assets/js/vendor/jquery-1.12.4.min.js')}}"></script>
  <script src="{{asset('assets/js/popper.min.js')}}"></script>
  <script src="{{asset('assets/js/bootstrap.min.js')}}"></script>
  <!-- Jquery Mobile Menu -->
  <script src="{{asset('assets/js/jquery.slicknav.min.js')}}"></script>

  <!-- Jquery Slick , Owl-Carousel Plugins -->
  <script src="{{asset('assets/js/owl.carousel.min.js')}}"></script>
  <script src="{{asset('assets/js/slick.min.js')}}"></script>
  <!-- One Page, Animated-HeadLin -->
  <script src="{{asset('assets/js/wow.min.js')}}"></script>
  <script src="{{asset('assets/js/animated.headline.js')}}"></script>
  <script src="{{asset('assets/js/jquery.magnific-popup.js')}}"></script>

  <!-- Date Picker -->
  <script src="{{asset('assets/js/gijgo.min.js')}}"></script>

  <!-- Video bg -->
  <script src="{{asset('assets/js/jquery.vide.js')}}"></script>

  <!-- Nice-select, sticky -->
  <script src="{{asset('assets/js/jquery.nice-select.min.js')}}"></script>
  <script src="{{asset('assets/js/jquery.sticky.js')}}"></script>
  <!-- Progress -->
  <script src="{{asset('assets/js/jquery.barfiller.js')}}"></script>

  <!-- counter , waypoint,Hover Direction -->
  <script src="{{asset('assets/js/jquery.counterup.min.js')}}"></script>
  <script src="{{asset('assets/js/waypoints.min.js')}}"></script>
  <script src="{{asset('assets/js/jquery.countdown.min.js')}}"></script>
  <script src="{{asset('assets/js/hover-direction-snake.min.js')}}"></script>

  <!-- contact js -->
  <script src="{{asset('assets/js/contact.js')}}"></script>
  <script src="{{asset('assets/js/jquery.form.js')}}"></script>
  <script src="{{asset('assets/js/jquery.validate.min.js')}}"></script>
  <script src="{{asset('assets/js/mail-script.js')}}"></script>
  <script src="{{asset('assets/js/jquery.ajaxchimp.min.js')}}"></script>

  <!-- Jquery Plugins, main Jquery -->
  <script src="{{asset('assets/js/plugins.js')}}"></script>
  <script src="{{asset('assets/js/main.js')}}"></script>
  @stack('scripts')
</body>
</html>