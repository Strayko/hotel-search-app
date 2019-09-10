<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    <!-- CUSTOM STYLE -->
    <link rel="stylesheet" href="{{asset('css/style.css')}}">
    <link rel="stylesheet" href="{{asset('css/styleMediaQuery.css')}}">

    <!-- FONT AWESOME -->
    <script src="https://kit.fontawesome.com/003e33b51d.js"></script>

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.5.9/slick.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.5.9/slick-theme.min.css">

    <!-- HTML5 shiv and Respond.js IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
    <script src="https://cdnjscloudflare.com/ajax/libs/html5shiv/3.7.3/html5shiv.min.js"></script>
    <script src="https://cdnjscloudflare.com/ajax/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->

    <title>Homepage</title>
</head>
<body>



@yield('content')



@yield('footer')

<!-- START FOOTER -->
<section id="footer">
    <div class="container">
        <div class="footer-left">
            <img src="img/logo-white.svg" alt="">
            <p class="p-lead">Subscribe to our newsletter</p>
            <i class="far fa-envelope"></i>
            <input type="text" class="newsletter-input">
            <input type="submit" class="newsletter-submit" value="Send">
        </div>
        <div class="footer-right">
            <div class="footer-menu">
                <ol>
                    <li><a href="index.html">Homepage</a></li>
                    <li><a href="plans&pricing.html">Plans&Pricing</a></li>
                    <li><a href="restaurants.html">Restaurants</a></li>
                    <li><a href="contact.html">Contact</a></li>
                </ol>
            </div>
            <div class="footer-social-icon">
                <a href="#"><i class="fab fa-facebook-f"></i></a>
                <a href="#"><i class="fab fa-instagram"></i></a>
                <a href="#"><i class="fab fa-twitter"></i></a>
            </div>
        </div>
        <hr>
        <p class="copyright">Created by Swisswebprofi &copy; 2019</p>
    </div>
</section>
<!-- END FOOTER -->

<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.5.9/slick.min.js"></script>
<script src="{{ asset('js/script.js') }}"></script>
<script>
    $('.toggle-menu-link').click( function() {
        $("#navbar").toggleClass("navbar").css({"display": "block!important"});
    } );
</script>
</body>
</html>