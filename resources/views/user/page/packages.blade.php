<!doctype html>
<html class="no-js" lang="zxx">

<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title> Hosting | Template</title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="manifest" href="site.webmanifest">
    <link rel="shortcut icon" type="image/x-icon" href="{{asset('assets/img/favicon.ico')}}">

    <!-- CSS here -->
    <link rel="stylesheet" href="{{asset('assets/css/bootstrap.min.css')}}">
    <link rel="stylesheet" href="{{asset('assets/css/owl.carousel.min.css')}}">
    <link rel="stylesheet" href="{{asset('assets/css/slicknav.css')}}">
    <link rel="stylesheet" href="{{asset('assets/css/flaticon.css')}}">
    <link rel="stylesheet" href="{{asset('assets/css/progressbar_barfiller.css')}}">
    <link rel="stylesheet" href="{{asset('assets/css/gijgo.css')}}">
    <link rel="stylesheet" href="{{asset('assets/css/animate.min.css')}}">
    <link rel="stylesheet" href="{{asset('assets/css/animated-headline.css')}}">
    <link rel="stylesheet" href="{{asset('assets/css/magnific-popup.css')}}">
    <link rel="stylesheet" href="{{asset('assets/css/fontawesome-all.min.css')}}">
    <link rel="stylesheet" href="{{asset('assets/css/themify-icons.css')}}">
    <link rel="stylesheet" href="{{asset('assets/css/slick.css')}}">
    <link rel="stylesheet" href="{{asset('assets/css/nice-select.css')}}">
    <link rel="stylesheet" href="{{asset('assets/css/style.css')}}">
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
            <div class="single-slider d-flex align-items-center slider-height2">
                <div class="container">
                    <div class="row align-items-center justify-content-center">
                        <div class="col-xl-8 col-lg-9 col-md-12 ">
                            <div class="hero__caption hero__caption2 text-center">
                                <h1 data-animation="fadeInLeft" data-delay=".6s ">Choose plan which fit for you</h1>
                                <p data-animation="fadeInLeft" data-delay=".8s">Supercharge your WordPress hosting with detailed website analytics, marketing tools. Our experts are just part of the reason Bluehost is the ideal home for your WordPress website. We're here to help you succeed!</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>    
            <!-- Slider Shape -->
            <div class="slider-shape d-none d-lg-block">
                <img class="slider-shape1" src="{{asset('assets/img/hero/top-left-shape.png')}}" alt="">
            </div>
        </div>
        <!-- Slider Area End -->
        <!--? Pricing Card Start -->
        <section class="pricing-card-area pricing-card-area2 fix">
            <div class="container">
                <div class="row">
                    <div class="col-xl-4 col-lg-4 col-md-6 col-sm-10">
                        <div class="single-card text-center mb-30">
                            <div class="card-top">
                                <img src="{{asset('assets/img/icon/price1.svg')}}" alt="">
                                <h4>Shared Hosting</h4>
                                <p>Starting at</p>
                            </div>
                            <div class="card-mid">
                                <h4>$4.67 <span>/ month</span></h4>
                            </div>
                            <div class="card-bottom">
                                <ul>
                                    <li>2 TB of space</li>
                                    <li>unlimited bandwidth</li>
                                    <li>full backup systems</li>
                                    <li>free domain</li>
                                    <li>unlimited database</li>
                                </ul>
                                <a href="#" class="borders-btn">Get Started</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-4 col-lg-4 col-md-6 col-sm-10">
                        <div class="single-card text-center mb-30">
                            <div class="card-top">
                                <img src="{{asset('assets/img/icon/price2.svg')}}" alt="">
                                <h4>Dedicated Hosting</h4>
                                <p>Starting at</p>
                            </div>
                            <div class="card-mid">
                                <h4>$4.67 <span>/ month</span></h4>
                            </div>
                            <div class="card-bottom">
                                <ul>
                                    <li>2 TB of space</li>
                                    <li>unlimited bandwidth</li>
                                    <li>full backup systems</li>
                                    <li>free domain</li>
                                    <li>unlimited database</li>
                                </ul>
                                <a href="#" class="borders-btn">Get Started</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-4 col-lg-4 col-md-6 col-sm-10">
                        <div class="single-card text-center mb-30">
                            <div class="card-top">
                                <img src="{{asset('assets/img/icon/price3.svg')}}" alt="">
                                <h4>Cloud Hosting</h4>
                                <p>Starting at</p>
                            </div>
                            <div class="card-mid">
                                <h4>$4.67 <span>/ month</span></h4>
                            </div>
                            <div class="card-bottom">
                                <ul>
                                    <li>2 TB of space</li>
                                    <li>unlimited bandwidth</li>
                                    <li>full backup systems</li>
                                    <li>free domain</li>
                                    <li>unlimited database</li>
                                </ul>
                                <a href="#" class="borders-btn">Get Started</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- Pricing Card End -->
        <!--? About-1 Area Start -->
        <div class="about-area1 section-padding40">
            <div class="container">
                <div class="row align-items-center justify-content-between">
                    <div class="col-xl-5 col-lg-5 col-md-8 col-sm-10">
                        <!-- about-img -->
                        <div class="about-img ">
                            <img src="{{asset('assets/img/gallery/about1.png')}}" alt="">
                        </div>
                    </div>
                    <div class="col-xl-7 col-lg-7 col-md-12">
                        <div class="about-caption ">
                            <!-- Section Tittle -->
                            <div class="section-tittle section-tittle2 mb-30">
                                <h2>Global server location</h2>
                            </div>
                            <p class="mb-40">Supercharge your WordPress hosting with detailed website analytics, marketing tools. Our experts are just part of the reason Bluehost is the ideal home for your WordPress website. We're here to help you succeed!</p>
                            <ul>
                                <li>
                                    <img src="{{asset('assets/img/icon/right.svg')}}" alt="">
                                    <p>WordPress hosting with detailed website</p>
                                </li>
                                <li>
                                    <img src="{{asset('assets/img/icon/right.svg')}}" alt="">
                                    <p>Our experts are just part of the reason</p>
                                </li>
                                <li>
                                    <img src="{{asset('assets/img/icon/right.svg')}}" alt="">
                                    <p> Detailed website analytics</p>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- About-1 Area End -->
        <!--? About-2 Area Start -->
        <div class="about-area1 pb-bottom">
            <div class="container">
                <div class="row align-items-center justify-content-between">
                    <div class="col-xl-7 col-lg-7 col-md-12">
                        <div class="about-caption about-caption3 mb-50">
                            <!-- Section Tittle -->
                            <div class="section-tittle section-tittle2 mb-30">
                                <h2>Dedicated support</h2>
                            </div>
                            <p class="mb-40">Supercharge your WordPress hosting with detailed website analytics, marketing tools. Our experts are just part of the reason Bluehost is the ideal home for your WordPress website. We're here to help you succeed!</p>
                            <ul class="mb-30">
                                <li>
                                    <img src="{{asset('assets/img/icon/right.svg')}}" alt="">
                                    <p>WordPress hosting with detailed website</p>
                                </li>
                                <li>
                                    <img src="{{asset('assets/img/icon/right.svg')}}" alt="">
                                    <p>Our experts are just part of the reason</p>
                                </li>
                            </ul>
                            <a href="#" class="btn"><i class="fas fa-phone-alt"></i>(10) 892-293 2678</a>
                        </div>
                    </div>
                    <div class="col-xl-5 col-lg-5 col-md-8 col-sm-10">
                        <!-- about-img -->
                        <div class="about-img ">
                            <img src="{{asset('assets/img/gallery/about2.png')}}" alt="">
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- About-2 Area End -->
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