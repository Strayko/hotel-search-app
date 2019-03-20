{{--<!doctype html>--}}
{{--<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">--}}
{{--<head>--}}
    {{--<meta charset="utf-8">--}}
    {{--<meta name="viewport" content="width=device-width, initial-scale=1">--}}

    {{--<title>Laravel</title>--}}

    {{--<!-- Fonts -->--}}
    {{--<link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">--}}

    {{--<!-- Styles -->--}}
    {{--<style>--}}
        {{--html, body {--}}
            {{--background-color: #fff;--}}
            {{--color: #636b6f;--}}
            {{--font-family: 'Nunito', sans-serif;--}}
            {{--font-weight: 200;--}}
            {{--height: 100vh;--}}
            {{--margin: 0;--}}
        {{--}--}}
        {{--.full-height {--}}
            {{--height: 100vh;--}}
        {{--}--}}
        {{--.flex-center {--}}
            {{--align-items: center;--}}
            {{--display: flex;--}}
            {{--justify-content: center;--}}
        {{--}--}}
        {{--.position-ref {--}}
            {{--position: relative;--}}
        {{--}--}}
        {{--.top-right {--}}
            {{--position: absolute;--}}
            {{--right: 10px;--}}
            {{--top: 18px;--}}
        {{--}--}}
        {{--.content {--}}
            {{--text-align: center;--}}
        {{--}--}}
        {{--.title {--}}
            {{--font-size: 84px;--}}
        {{--}--}}
        {{--.links > a {--}}
            {{--color: #636b6f;--}}
            {{--padding: 0 25px;--}}
            {{--font-size: 13px;--}}
            {{--font-weight: 600;--}}
            {{--letter-spacing: .1rem;--}}
            {{--text-decoration: none;--}}
            {{--text-transform: uppercase;--}}
        {{--}--}}
        {{--.m-b-md {--}}
            {{--margin-bottom: 30px;--}}
        {{--}--}}
    {{--</style>--}}
{{--</head>--}}
{{--<body>--}}
{{--<div class="flex-center position-ref full-height">--}}
    {{--@if (Route::has('login'))--}}
        {{--<div class="top-right links">--}}
            {{--@auth--}}
                {{--<a href="{{ url('/home') }}">Home</a>--}}
            {{--@else--}}
                {{--<a href="{{ route('login') }}">Login</a>--}}

                {{--@if (Route::has('register'))--}}
                    {{--<a href="{{ route('register') }}">Register</a>--}}
                {{--@endif--}}
            {{--@endauth--}}
        {{--</div>--}}
    {{--@endif--}}

    {{--<div class="content">--}}
        {{--<div class="title m-b-md">--}}
            {{--Laravel--}}
        {{--</div>--}}

        {{--<div class="links">--}}
            {{--<a href="https://laravel.com/docs">Docs</a>--}}
            {{--<a href="https://laracasts.com">Laracasts</a>--}}
            {{--<a href="https://laravel-news.com">News</a>--}}
            {{--<a href="https://blog.laravel.com">Blog</a>--}}
            {{--<a href="https://nova.laravel.com">Nova</a>--}}
            {{--<a href="https://forge.laravel.com">Forge</a>--}}
            {{--<a href="https://github.com/laravel/laravel">GitHub</a>--}}
        {{--</div>--}}
    {{--</div>--}}
{{--</div>--}}
{{--</body>--}}
{{--</html>--}}



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Home Property | Home</title>

    <!-- Favicon -->
    <link rel="shortcut icon" href="img/favicon.ico" type="image/x-icon">

    {{--<link href="{{ asset('css/bootstrap.css') }}" rel="stylesheet">--}}
    {{--<link href="{{ asset('css/default-theme.css') }}" rel="stylesheet">--}}
    {{--<link href="{{ asset('css/font-awesome.css') }}" rel="stylesheet">--}}
    {{--<link href="{{ asset('css/jquery.fancybox.css') }}" rel="stylesheet">--}}
    {{--<link href="{{ asset('css/nouislider.css') }}" rel="stylesheet">--}}
    {{--<link href="{{ asset('css/slick.css') }}" rel="stylesheet">--}}
    {{--<link href="{{ asset('css/style.css') }}" rel="stylesheet">--}}
    <link href="{{ asset('css/libs.css') }}" rel="stylesheet">
    <link href="{{ asset('css/custom.css') }}" rel="stylesheet">


    <!-- Google Font -->
    <link href='https://fonts.googleapis.com/css?family=Vollkorn' rel='stylesheet' type='text/css'>
    <link href='https://fonts.googleapis.com/css?family=Open+Sans' rel='stylesheet' type='text/css'>


    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
    <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->

</head>
<body class="aa-price-range">
<!-- Pre Loader -->

<!-- SCROLL TOP BUTTON -->
<a class="scrollToTop" href="#"><i class="fa fa-angle-double-up"></i></a>
<!-- END SCROLL TOP BUTTON -->

<!-- Start header section -->
<header id="aa-header">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="aa-header-area">
                    <div class="row">
                        <div class="col-md-6 col-sm-6 col-xs-6">
                            <div class="aa-header-left">
                                <div class="aa-telephone-no">
                                    <span class="fa fa-phone"></span>
                                    1-900-523-3564
                                </div>
                                <div class="aa-email hidden-xs">
                                    <span class="fa fa-envelope-o"></span> info@markups.com
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6 col-sm-6 col-xs-6">
                            <div class="aa-header-right">
                                {{--<a href="register.html" class="aa-register">Register</a>--}}
                                {{--<a href="signin.html" class="aa-login">Login</a>--}}
                                @if (Route::has('login'))
                                    {{--<div class="top-right links">--}}
                                        @auth
                                            <a href="{{ url('/home') }}" class="aa-login">Home</a>
                                        @else
                                            <a href="{{ route('login') }}" class="aa-login">Login</a>
                                    <p class="white-pipe">|</p>
                                            @if (Route::has('register'))
                                                <a href="{{ route('register.index') }}" class="aa-register">Register</a>
                                            @endif
                                        @endauth
                                    {{--</div>--}}
                                @endif
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</header>
<!-- End header section -->

<!-- Start menu section -->
<section id="aa-menu-area">
    <nav class="navbar navbar-default main-navbar" role="navigation">
        <div class="container">
            <div class="navbar-header">
                <!-- FOR MOBILE VIEW COLLAPSED BUTTON -->
                <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <!-- LOGO -->
                <!-- Text based logo -->
                <a class="navbar-brand aa-logo" href="index.html"> Home <span>Property</span></a>
                <!-- Image based logo -->
                <!-- <a class="navbar-brand aa-logo-img" href="index.html"><img src="img/logo.png" alt="logo"></a> -->
            </div>
            <div id="navbar" class="navbar-collapse collapse">
                <ul id="top-menu" class="nav navbar-nav navbar-right aa-main-nav">
                    <li class="active"><a href="index.html">HOME</a></li>
                    <li class="dropdown">
                        <a class="dropdown-toggle" data-toggle="dropdown" href="properties.html">PROPERTIES <span class="caret"></span></a>
                        <ul class="dropdown-menu" role="menu">
                            <li><a href="properties.html">PROPERTIES</a></li>
                            <li><a href="properties-detail.html">PROPERTIES DETAIL</a></li>
                        </ul>
                    </li>
                    <li><a href="gallery.html">GALLERY</a></li>
                    <li class="dropdown">
                        <a class="dropdown-toggle" data-toggle="dropdown" href="blog-archive.html">BLOG <span class="caret"></span></a>
                        <ul class="dropdown-menu" role="menu">
                            <li><a href="blog-archive.html">BLOG</a></li>
                            <li><a href="blog-single.html">BLOG DETAILS</a></li>
                        </ul>
                    </li>
                    <li><a href="contact.html">CONTACT</a></li>
                    <li><a href="404.html">404 PAGE</a></li>
                </ul>
            </div><!--/.nav-collapse -->
        </div>
    </nav>
</section>
<!-- End menu section -->

<!-- Start slider  -->
<section id="aa-slider">
    <div class="aa-slider-area">
        <!-- Top slider -->
        <div class="aa-top-slider">
            <!-- Top slider single slide -->
            <div class="aa-top-slider-single">
                <img src="https://source.unsplash.com/random/1200x800" alt="img">
                <!-- Top slider content -->
                <div class="aa-top-slider-content">
                    <span class="aa-top-slider-catg">Duplex</span>
                    <h2 class="aa-top-slider-title">1560 Square Feet</h2>
                    <p class="aa-top-slider-location"><i class="fa fa-map-marker"></i>South Beach, Miami (USA)</p>
                    <span class="aa-top-slider-off">30% OFF</span>
                    <p class="aa-top-slider-price">$460,000</p>
                    <a href="#" class="aa-top-slider-btn">Read More <span class="fa fa-angle-double-right"></span></a>
                </div>
                <!-- / Top slider content -->
            </div>
            <!-- / Top slider single slide -->
            <!-- Top slider single slide -->



            <!-- / Top slider single slide -->
            <!-- Top slider single slide -->

        </div>
    </div>
</section>
<!-- End slider  -->

<!-- Advance Search -->
<section id="aa-advance-search">
    <div class="container">
        <div class="aa-advance-search-area">
            <div class="form">
                <div class="aa-advance-search-top">
                    <div class="row">
                        <div class="col-md-4">
                            <div class="aa-single-advance-search">
                                <input type="text" placeholder="Type Your Location">
                            </div>
                        </div>
                        <div class="col-md-2">
                            <div class="aa-single-advance-search">
                                <select>
                                    <option value="0" selected>Category</option>
                                    <option value="1">Flat</option>
                                    <option value="2">Land</option>
                                    <option value="3">Plot</option>
                                    <option value="4">Commercial</option>
                                </select>
                            </div>
                        </div>
                        <div class="col-md-2">
                            <div class="aa-single-advance-search">
                                <select>
                                    <option value="0" selected>Type</option>
                                    <option value="1">Flat</option>
                                    <option value="2">Land</option>
                                    <option value="3">Plot</option>
                                    <option value="4">Commercial</option>
                                </select>
                            </div>
                        </div>
                        <div class="col-md-2">
                            <div class="aa-single-advance-search">
                                <select>
                                    <option value="0" selected>Type</option>
                                    <option value="1">Flat</option>
                                    <option value="2">Land</option>
                                    <option value="3">Plot</option>
                                    <option value="4">Commercial</option>
                                </select>
                            </div>
                        </div>
                        <div class="col-md-2">
                            <div class="aa-single-advance-search">
                                <input class="aa-search-btn" type="submit" value="Search">
                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </div>
</section>
<!-- / Advance Search -->



<!-- Footer -->
<footer id="aa-footer">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="aa-footer-area">
                    <div class="row">
                        <div class="col-md-3 col-sm-6 col-xs-12">
                            <div class="aa-footer-left">
                                <p>Designed by <a rel="nofollow" href="#">Swisswebprofi</a></p>
                            </div>
                        </div>
                        <div class="col-md-3 col-sm-6 col-xs-12">
                            <div class="aa-footer-middle">
                                <a href="#"><i class="fa fa-facebook"></i></a>
                                <a href="#"><i class="fa fa-twitter"></i></a>
                                <a href="#"><i class="fa fa-google-plus"></i></a>
                                <a href="#"><i class="fa fa-youtube"></i></a>
                            </div>
                        </div>
                        <div class="col-md-6 col-sm-12 col-xs-12">
                            <div class="aa-footer-right">
                                <a href="#">Home</a>
                                <a href="#">Support</a>
                                <a href="#">License</a>
                                <a href="#">FAQ</a>
                                <a href="#">Privacy & Term</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</footer>
<!-- / Footer -->



<!-- jQuery library -->
<!--<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script> -->
{{--<script src="{{ asset('js/bootstrap.js') }}"></script>--}}
{{--<script src="{{ asset('js/custom.js') }}"></script>--}}
{{--<script src="{{ asset('js/jquery.fancybox.pack.js') }}"></script>--}}
{{--<script src="{{ asset('js/jquery.min.js') }}"></script>--}}
{{--<script src="{{ asset('js/jquery.mixitup.js') }}"></script>--}}
{{--<script src="{{ asset('js/nouislider.js') }}"></script>--}}
{{--<script src="{{ asset('js/slick.js') }}"></script>--}}
<script src="{{ asset('js/libs.js') }}"></script>

</body>
</html>