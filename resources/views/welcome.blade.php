<!doctype html>
<html class="no-js" lang="zxx">

<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title> Hosting | Template</title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="manifest" href="site.webmanifest">
    <link rel="shortcut icon" type="image/x-icon" href="{{asset('admin_assets/image/favicon.png')}}">

    <!-- CSS here -->
    <link rel="stylesheet" href="{{asset('admin_assets/css/bootstrap.min.css')}}">
    <link href="{{asset('https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css')}}" rel="stylesheet">
    <link rel="stylesheet" href="{{asset('https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css')}}"/>
    <link rel="stylesheet" href="{{asset('admin_assets/css/owl.carousel.min.css')}}">
    <link rel="stylesheet" href="{{asset('admin_assets/css/slicknav.css')}}">
    <link rel="stylesheet" href="{{asset('admin_assets/css/flaticon.css')}}">
    <link rel="stylesheet" href="{{asset('admin_assets/css/progressbar_barfiller.css')}}">
    <link rel="stylesheet" href="{{asset('admin_assets/css/gijgo.css')}}">
    <link rel="stylesheet" href="{{asset('admin_assets/css/animate.min.css')}}">
    <link rel="stylesheet" href="{{asset('admin_assets/css/animated-headline.css')}}">
    <link rel="stylesheet" href="{{asset('admin_assets/css/magnific-popup.css')}}">
    <link rel="stylesheet" href="{{asset('admin_assets/css/fontawesome-all.min.css')}}">
    <link rel="stylesheet" href="{{asset('admin_assets/css/themify-icons.css')}}">
    <link rel="stylesheet" href="{{asset('admin_assets/css/slick.css')}}">
    <link rel="stylesheet" href="{{asset('admin_assets/css/nice-select.css')}}">
    <link rel="stylesheet" href="{{asset('admin_assets/css/welcome.css')}}">
    @stack('styles')
</head>

<body>
    <!-- ? Preloader Start -->
    @include('user.layouts.preloader')
    <!-- Preloader Start -->
    @include('user.layouts.header')
    <main>
        <!-- Slider Area Start-->
        @include('user.layouts.slide')
        <!-- Slider Area End -->
        <!-- Domain-search start -->
        @include('user.layouts.domain')
        <!-- Domain-search End -->
        <!--? Team -->
       @include('user.layouts.team')
        <!-- Services End -->
        <!--? Pricing Card Start -->
       @include('user.layouts.pricing')
        <!-- Pricing Card End -->
        <!--? About Area Start -->
        @include('user.layouts.about')
        <!-- About Area End -->
        <!-- ask questions -->
       @include('user.layouts.question')
        <!-- End ask questions -->
        <!--? Testimonial Area Start -->
        @include('user.layouts.testimonial')
        <!--? Testimonial Area End -->
    </main>
    @include('user.layouts.footer')
   

    <!-- JS here -->

    <script src="{{asset('admin_assets/js/vendor/modernizr-3.5.0.min.js')}}"></script>
    <script src="{{asset('https://code.jquery.com/jquery-3.5.1.slim.min.js')}}"></script>
    <script src="{{asset('https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.4/dist/umd/popper.min.js')}}"></script>
    <script src="{{asset('https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js')}}"></script>

    <!-- Jquery, Popper, Bootstrap -->
    <script src="{{asset('admin_assets/js/vendor/jquery-1.12.4.min.js')}}"></script>
    <script src="{{asset('admin_assets/js/popper.min.js')}}"></script>
    <script src="{{asset('admin_assets/js/bootstrap.min.js')}}"></script>
    <!-- Jquery Mobile Menu -->
    <script src="{{asset('admin_assets/js/jquery.slicknav.min.js')}}"></script>

    <!-- Jquery Slick , Owl-Carousel Plugins -->
    <script src="{{asset('admin_assets/js/owl.carousel.min.js')}}"></script>
    <script src="{{asset('admin_assets/js/slick.min.js')}}"></script>
    <!-- One Page, Animated-HeadLin -->
    <script src="{{asset('admin_assets/js/wow.min.js')}}"></script>
    <script src="{{asset('admin_assets/js/animated.headline.js')}}"></script>
    <script src="{{asset('admin_assets/js/jquery.magnific-popup.js')}}"></script>

    <!-- Date Picker -->
    <script src="{{asset('admin_assets/js/gijgo.min.js')}}"></script>

    <!-- Video bg -->
    <script src="{{asset('admin_assets/js/jquery.vide.js')}}"></script>

    <!-- Nice-select, sticky -->
    <script src="{{asset('admin_assets/js/jquery.nice-select.min.js')}}"></script>
    <script src="{{asset('admin_assets/js/jquery.sticky.js')}}"></script>
    <!-- Progress -->
    <script src="{{asset('admin_assets/js/jquery.barfiller.js')}}"></script>

    <!-- counter , waypoint,Hover Direction -->
    <script src="{{asset('admin_assets/js/jquery.counterup.min.js')}}"></script>
    <script src="{{asset('admin_assets/js/waypoints.min.js')}}"></script>
    <script src="{{asset('admin_assets/js/jquery.countdown.min.js')}}"></script>
    <script src="{{asset('admin_assets/js/hover-direction-snake.min.js')}}"></script>

    <!-- contact js -->
    <script src="{{asset('admin_assets/js/contact.js')}}"></script>
    <script src="{{asset('admin_assets/js/jquery.form.js')}}"></script>
    <script src="{{asset('admin_assets/js/jquery.validate.min.js')}}"></script>
    <script src="{{asset('admin_assets/js/mail-script.js')}}"></script>
    <script src="{{asset('admin_assets/js/jquery.ajaxchimp.min.js')}}"></script>

    <!-- Jquery Plugins, main Jquery -->
    <script src="{{asset('admin_assets/js/plugins.js')}}"></script>
    <script src="{{asset('admin_assets/js/main.js')}}"></script>
    @stack('scripts')
</body>

</html>
