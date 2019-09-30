{{--@extends('layouts.app')--}}

{{--@section('content')--}}
{{--<div class="container">--}}
{{--    <div class="row justify-content-center">--}}
{{--        <div class="col-md-8">--}}
{{--            <div class="card">--}}
{{--                <div class="card-header">{{ __('Reset Password') }}</div>--}}

{{--                <div class="card-body">--}}
{{--                    <form method="POST" action="{{ route('password.update') }}">--}}
{{--                        @csrf--}}

{{--                        <input type="hidden" name="token" value="{{ $token }}">--}}

{{--                        <div class="form-group row">--}}
{{--                            <label for="email" class="col-md-4 col-form-label text-md-right">{{ __('E-Mail Address') }}</label>--}}

{{--                            <div class="col-md-6">--}}
{{--                                <input id="email" type="email" class="form-control{{ $errors->has('email') ? ' is-invalid' : '' }}" name="email" value="{{ $email ?? old('email') }}" required autofocus>--}}

{{--                                @if ($errors->has('email'))--}}
{{--                                    <span class="invalid-feedback" role="alert">--}}
{{--                                        <strong>{{ $errors->first('email') }}</strong>--}}
{{--                                    </span>--}}
{{--                                @endif--}}
{{--                            </div>--}}
{{--                        </div>--}}

{{--                        <div class="form-group row">--}}
{{--                            <label for="password" class="col-md-4 col-form-label text-md-right">{{ __('Password') }}</label>--}}
{{--                            <div class="col-md-6">--}}
{{--                                <input id="password" type="password" class="form-control{{ $errors->has('password') ? ' is-invalid' : '' }}" name="password" required>--}}

{{--                                @if ($errors->has('password'))--}}
{{--                                    <span class="invalid-feedback" role="alert">--}}
{{--                                        <strong>{{ $errors->first('password') }}</strong>--}}
{{--                                    </span>--}}
{{--                                @endif--}}
{{--                            </div>--}}
{{--                        </div>--}}

{{--                        <div class="form-group row">--}}
{{--                            <label for="password-confirm" class="col-md-4 col-form-label text-md-right">{{ __('Confirm Password') }}</label>--}}

{{--                            <div class="col-md-6">--}}
{{--                                <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required>--}}
{{--                            </div>--}}
{{--                        </div>--}}

{{--                        <div class="form-group row mb-0">--}}
{{--                            <div class="col-md-6 offset-md-4">--}}
{{--                                <button type="submit" class="btn btn-primary">--}}
{{--                                    {{ __('Reset Password') }}--}}
{{--                                </button>--}}
{{--                            </div>--}}
{{--                        </div>--}}
{{--                    </form>--}}
{{--                </div>--}}
{{--            </div>--}}
{{--        </div>--}}
{{--    </div>--}}
{{--</div>--}}
{{--@endsection--}}

















{{--<!DOCTYPE html>--}}
{{--<html lang="en">--}}
{{--<head>--}}
{{--    <meta charset="utf-8">--}}
{{--    <meta http-equiv="X-UA-Compatible" content="IE=edge">--}}
{{--    <meta name="viewport" content="width=device-width, initial-scale=1">--}}
{{--    <title>Reset Password</title>--}}

{{--    <!-- Favicon -->--}}
{{--    <link rel="shortcut icon" href="img/favicon.ico" type="image/x-icon">--}}


{{--    <link href="{{ asset('css/libs.css') }}" rel="stylesheet">--}}


{{--    <!-- Google Font -->--}}
{{--    <link href='https://fonts.googleapis.com/css?family=Vollkorn' rel='stylesheet' type='text/css'>--}}
{{--    <link href='https://fonts.googleapis.com/css?family=Open+Sans' rel='stylesheet' type='text/css'>--}}


{{--    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->--}}
{{--    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->--}}
{{--    <!--[if lt IE 9]>--}}
{{--    <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>--}}
{{--    <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>--}}
{{--    <![endif]-->--}}


{{--</head>--}}
{{--<body>--}}
{{--<section id="aa-signin">--}}
{{--    <div class="container">--}}
{{--        <div class="row">--}}
{{--            <div class="col-md-12">--}}
{{--                <div class="aa-signin-area">--}}
{{--                    <div class="aa-signin-form">--}}
{{--                        <div class="aa-signin-form-title">--}}
{{--                            <a class="aa-property-home" href="/">Home</a>--}}
{{--                            <h4>Reset Password</h4>--}}
{{--                        </div>--}}

{{--                        <form method="POST" action="{{ route('password.update') }}" class="contactform">--}}
{{--                            @csrf--}}
{{--                            <input type="hidden" name="token" value="{{ $token }}">--}}
{{--                            <div class="aa-single-field">--}}
{{--                                <label for="email">E-Mail Address <span class="required">*</span></label>--}}
{{--                                <input id="email" type="email" class="form-control{{ $errors->has('email') ? ' is-invalid' : '' }}" name="email" value="{{ $email ?? old('email') }}" required autofocus>--}}

{{--                                @if ($errors->has('email'))--}}
{{--                                    <span class="invalid-feedback" role="alert">--}}
{{--                                        <strong>{{ $errors->first('email') }}</strong>--}}
{{--                                    </span>--}}
{{--                                @endif--}}
{{--                            </div>--}}

{{--                            <div class="aa-single-field">--}}
{{--                                <label for="password">New Password <span class="required">*</span></label>--}}
{{--                                <input id="password" type="password" class="form-control{{ $errors->has('password') ? ' is-invalid' : '' }}" name="password" required>--}}
{{--                                @if ($errors->has('password'))--}}
{{--                                    <span class="invalid-feedback" role="alert">--}}
{{--                                        <strong>{{ $errors->first('password') }}</strong>--}}
{{--                                    </span>--}}
{{--                                @endif--}}
{{--                            </div>--}}

{{--                            <div class="aa-single-field">--}}
{{--                                <label for="password-confirm">Confirm Password <span class="required">*</span></label>--}}
{{--                                <input id="password-confirm" type="password" name="password_confirmation" class="form-control" required>--}}
{{--                            </div>--}}

{{--                            <div class="aa-single-submit">--}}
{{--                                <button type="submit" class="btn btn-primary">--}}
{{--                                    {{ __('Confirm New Password') }}--}}
{{--                                </button>--}}

{{--                            </div>--}}
{{--                        </form>--}}
{{--                    </div>--}}
{{--                </div>--}}
{{--            </div>--}}
{{--        </div>--}}
{{--    </div>--}}
{{--</section>--}}

{{--<script src="{{ asset('js/libs.js') }}"></script>--}}

{{--</body>--}}
{{--</html>--}}






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

    {{--    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.5.9/slick.min.css">--}}
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.5.9/slick-theme.min.css">

    <!-- HTML5 shiv and Respond.js IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
    <script src="https://cdnjscloudflare.com/ajax/libs/html5shiv/3.7.3/html5shiv.min.js"></script>
    <script src="https://cdnjscloudflare.com/ajax/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->

    <style>
        .invalid-feedback {
            margin-top: 3px;
            margin-left: 10px;
            font-size: 12px;
            position: absolute;
            color: red;
        }
    </style>

    <title>New Password</title>
</head>
<body>


<!-- START LOGO AND MENU -->
<section id="menu" class="menu">
    <div class="container-menu">

        <div class="logo alignLeft center-response">
            <a href="index.html"><img src="{{asset('img/logo.svg')}}" class="logo-img" alt=""></a>
        </div>

        <a class="toggle-menu-link" href="javascript:void(0);" onclick="myFunction()">
            <i class="fas fa-bars"></i>
        </a>

        <nav class="navbar" id="navbar">
            <!--<div class="burger-nav"></div>-->
            <ul class="nav alignRight center-response">
                <li><a class="mobile-font" href="/">Homepage</a></li>
                <li><a class="mobile-font" href="{{route('plans-and-pricing.planAndPrice')}}">Plans&Pricing</a></li>
                <li><a class="mobile-font" href="{{route('restaurants.showAll')}}">Restaurants</a></li>
                <li><a class="mobile-font" href="{{route("contact.contact")}}">Contact</a></li>
                <li class="menu-buttons-block">
                <li class="menu-collapse"><a href="{{route('login')}}" class="sign-in">Sign in</a></li>
                <li class="menu-collapse top-distance-mobile"><a href="{{route('register.index')}}" class="register">Register</a></li>
            </ul>
        </nav>

    </div>
</section>
<!-- END LOGO AND MENU -->

<!-- START NEW PASSWORD -->
<section id="newPassword">
    <div class="container">
        <div class="newPassword-box">
            <div class="resetPassword-container">
                <h4>New Password</h4>


                    <form method="POST" action="{{ route('password.update') }}" class="contactform">
                    @csrf
                    <input type="hidden" name="token" value="{{ $token }}">


                        <i class="fas fa-envelope" id="fa-envelope" style="margin-top:11px!important;"></i>

                        <input id="email" type="email" class="reset-email-input{{ $errors->has('email') ? ' is-invalid' : '' }}" name="email" value="{{ $email ?? old('email') }}" placeholder="Email" required autofocus>

                        @if ($errors->has('email'))
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $errors->first('email') }}</strong>
                            </span>
                        @endif

                        <i class="fas fa-lock"></i>
                        <input id="password" type="password" class="reset-email-input{{ $errors->has('password') ? ' is-invalid' : '' }}" name="password" placeholder="New Password" required>
                        @if ($errors->has('password'))
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $errors->first('password') }}</strong>
                            </span>
                        @endif

                        <i class="fas fa-lock"></i>
                        <input id="password-confirm" type="password" name="password_confirmation" class="reset-email-input" placeholder="Confirm Password" required>

                        <input class="send-link-input" type="submit" value="Send link">


                </form>

{{--                <i class="fas fa-envelope"></i>--}}
{{--                <input class="reset-email-input" type="email" placeholder="Email">--}}
{{--                <i class="fas fa-lock"></i>--}}
{{--                <input class="reset-email-input" type="password" placeholder="New Password">--}}
{{--                <i class="fas fa-lock"></i>--}}
{{--                <input class="reset-email-input" type="password" placeholder="Confirm Password">--}}
{{--                <input class="send-link-input" type="submit" value="Send link">--}}
            </div>
        </div>
    </div>
</section>
<!-- END NEW PASSWORD -->


<!-- START FOOTER -->
<section id="footer">
    <div class="container">
        <div class="footer-left">
            <img src="{{asset('img/logo-white.svg')}}" alt="">
            <p class="p-lead">Subscribe to our newsletter</p>
            <i class="far fa-envelope"></i>
            <input type="text" class="newsletter-input">
            <input type="submit" class="newsletter-submit" value="Send">
        </div>
        <div class="footer-right">
            <div class="footer-menu">
                <ol>
                    <li><a href="/">Homepage</a></li>
                    <li><a href="{{route('plans-and-pricing.planAndPrice')}}">Plans&Pricing</a></li>
                    <li><a href="{{route('restaurants.showAll')}}">Restaurants</a></li>
                    <li><a href="{{route('contact.contact')}}">Contact</a></li>
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





















{{--@extends('layouts.frontend-thema')--}}
{{--<style>--}}
{{--    .invalid-feedback {--}}
{{--        font-size: 17px;--}}
{{--        display: block;--}}
{{--    }--}}
{{--</style>--}}
{{--@section('content')--}}
{{--<!-- START LOGO AND MENU -->--}}
{{--<section id="menu" class="menu">--}}
{{--    <div class="container-menu">--}}

{{--        <div class="logo alignLeft center-response">--}}
{{--            <a href="index.html"><img src="{{asset('img/logo.svg')}}" class="logo-img" alt=""></a>--}}
{{--        </div>--}}

{{--        <a class="toggle-menu-link" href="javascript:void(0);" onclick="myFunction()">--}}
{{--            <i class="fas fa-bars"></i>--}}
{{--        </a>--}}

{{--        <nav class="navbar" id="navbar">--}}
{{--            <!--<div class="burger-nav"></div>-->--}}
{{--            <ul class="nav alignRight center-response">--}}
{{--                <li><a class="mobile-font" href="/">Homepage</a></li>--}}
{{--                <li><a class="mobile-font" href="{{route('plans-and-pricing.planAndPrice')}}">Plans&Pricing</a></li>--}}
{{--                <li><a class="mobile-font" href="{{route('restaurants.showAll')}}">Restaurants</a></li>--}}
{{--                <li><a class="mobile-font" href="{{route("contact.contact")}}">Contact</a></li>--}}
{{--                <li class="menu-buttons-block">--}}
{{--                <li class="menu-collapse"><a href="{{route('login')}}" class="sign-in">Sign in</a></li>--}}
{{--                <li class="menu-collapse top-distance-mobile"><a href="{{route('register.index')}}" class="register">Register</a></li>--}}
{{--            </ul>--}}
{{--        </nav>--}}

{{--    </div>--}}
{{--</section>--}}
{{--<!-- END LOGO AND MENU -->--}}

{{--<!-- START NEW PASSWORD -->--}}
{{--<section id="newPassword">--}}
{{--    <div class="container">--}}
{{--        <div class="newPassword-box">--}}
{{--            <div class="resetPassword-container">--}}
{{--                <h4>New Password</h4>--}}







{{--                <form method="POST" action="{{ route('password.update') }}" class="contactform">--}}
{{--                    @csrf--}}
{{--                    <input type="hidden" name="token" value="{{ $token }}">--}}
{{--                    <div class="aa-single-field">--}}
{{--                        <label for="email">E-Mail Address <span class="required">*</span></label>--}}
{{--                        <input id="email" type="email" class="form-control{{ $errors->has('email') ? ' is-invalid' : '' }}" name="email" value="{{ $email ?? old('email') }}" required autofocus>--}}

{{--                        @if ($errors->has('email'))--}}
{{--                            <span class="invalid-feedback" role="alert">--}}
{{--                                        <strong>{{ $errors->first('email') }}</strong>--}}
{{--                                    </span>--}}
{{--                        @endif--}}
{{--                    </div>--}}

{{--                    <div class="aa-single-field">--}}
{{--                        <label for="password">New Password <span class="required">*</span></label>--}}
{{--                        <input id="password" type="password" class="form-control{{ $errors->has('password') ? ' is-invalid' : '' }}" name="password" required>--}}
{{--                        @if ($errors->has('password'))--}}
{{--                            <span class="invalid-feedback" role="alert">--}}
{{--                                        <strong>{{ $errors->first('password') }}</strong>--}}
{{--                                    </span>--}}
{{--                        @endif--}}
{{--                    </div>--}}

{{--                    <div class="aa-single-field">--}}
{{--                        <label for="password-confirm">Confirm Password <span class="required">*</span></label>--}}
{{--                        <input id="password-confirm" type="password" name="password_confirmation" class="form-control" required>--}}
{{--                    </div>--}}

{{--                    <div class="aa-single-submit">--}}
{{--                        <button type="submit" class="btn btn-primary">--}}
{{--                            {{ __('Confirm New Password') }}--}}
{{--                        </button>--}}

{{--                    </div>--}}
{{--                </form>--}}






{{--                <form method="POST" action="{{ route('password.update') }}" class="contactform">--}}
{{--                @csrf--}}

{{--                <i class="fas fa-envelope" style="margin-top:11px!important;"></i>--}}
{{--                <input id="email" type="email" class="reset-email-input{{ $errors->has('email') ? ' is-invalid' : '' }}" name="email" value="{{ $email ?? old('email') }}" placeholder="Email" required autofocus>--}}
{{--                @if ($errors->has('email'))--}}
{{--                    <span class="invalid-feedback" role="alert">--}}
{{--                        <strong>{{ $errors->first('email') }}</strong>--}}
{{--                    </span>--}}
{{--                @endif--}}

{{--                <i class="fas fa-lock"></i>--}}
{{--                <input id="password" type="password" class="reset-email-input{{ $errors->has('password') ? ' is-invalid' : '' }}" name="password" placeholder="New Password" required>--}}
{{--                @if ($errors->has('password'))--}}
{{--                    <span class="invalid-feedback" role="alert">--}}
{{--                        <strong>{{ $errors->first('password') }}</strong>--}}
{{--                    </span>--}}
{{--                @endif--}}

{{--                <i class="fas fa-lock"></i>--}}
{{--                <input id="password-confirm" type="password" name="password_confirmation" class="reset-email-input" placeholder="Confirm Password" required>--}}

{{--                <input class="send-link-input" type="submit" value="Send link">--}}
{{--                </form>--}}

{{--            </div>--}}
{{--        </div>--}}
{{--    </div>--}}
{{--</section>--}}
{{--<!-- END NEW PASSWORD -->--}}
{{--@endsection--}}

{{--@section('footer')--}}

{{--@endsection--}}







{{--@extends('layouts.frontend-thema')--}}
{{--<title>New Password</title>--}}
{{--@section('content')--}}
{{--<!-- START LOGO AND MENU -->--}}
{{--<section id="menu" class="menu">--}}
{{--    <div class="container-menu">--}}

{{--        <div class="logo alignLeft center-response">--}}
{{--            <a href="index.html"><img src="{{asset('img/logo.svg')}}" class="logo-img" alt=""></a>--}}
{{--        </div>--}}

{{--        <a class="toggle-menu-link" href="javascript:void(0);" onclick="myFunction()">--}}
{{--            <i class="fas fa-bars"></i>--}}
{{--        </a>--}}

{{--        <nav class="navbar" id="navbar">--}}
{{--            <!--<div class="burger-nav"></div>-->--}}
{{--            <ul class="nav alignRight center-response">--}}
{{--                <li><a class="mobile-font" href="/">Homepage</a></li>--}}
{{--                <li><a class="mobile-font" href="{{route('plans-and-pricing.planAndPrice')}}">Plans&Pricing</a></li>--}}
{{--                <li><a class="mobile-font" href="{{route('restaurants.showAll')}}">Restaurants</a></li>--}}
{{--                <li><a class="mobile-font" href="{{route("contact.contact")}}">Contact</a></li>--}}
{{--                <li class="menu-buttons-block">--}}
{{--                <li class="menu-collapse"><a href="{{route('login')}}" class="sign-in">Sign in</a></li>--}}
{{--                <li class="menu-collapse top-distance-mobile"><a href="{{route('register.index')}}" class="register">Register</a></li>--}}
{{--            </ul>--}}
{{--        </nav>--}}

{{--    </div>--}}
{{--</section>--}}
{{--<!-- END LOGO AND MENU -->--}}

{{--<!-- START NEW PASSWORD -->--}}
{{--<section id="newPassword">--}}
{{--    <div class="container">--}}
{{--        <div class="newPassword-box">--}}
{{--            <div class="resetPassword-container">--}}
{{--                <h4>New Password</h4>--}}




{{--                <form method="POST" action="{{ route('password.update') }}" class="contactform">--}}
{{--                    @csrf--}}
{{--                    <input type="hidden" name="token" value="{{ $token }}">--}}

{{--                        <i class="fas fa-envelope"></i>--}}
{{--                        <input id="email" type="email" class="reset-email-input {{ $errors->has('email') ? ' is-invalid' : '' }}" name="email" value="{{ $email ?? old('email') }}" placeholder="Email" required autofocus>--}}
{{--                        @if ($errors->has('email'))--}}
{{--                            <span class="invalid-feedback" role="alert">--}}
{{--                                <strong>{{ $errors->first('email') }}</strong>--}}
{{--                            </span>--}}
{{--                        @endif--}}

{{--                        <i class="fas fa-lock"></i>--}}
{{--                        <input id="password" type="password" class="reset-email-input {{ $errors->has('password') ? ' is-invalid' : '' }}" placeholder="New Password" name="password" required>--}}
{{--                        @if ($errors->has('password'))--}}
{{--                            <span class="invalid-feedback" role="alert">--}}
{{--                                <strong>{{ $errors->first('password') }}</strong>--}}
{{--                            </span>--}}
{{--                        @endif--}}

{{--                        <i class="fas fa-lock"></i>--}}
{{--                        <input id="password-confirm" type="password" name="password_confirmation" class="reset-email-input" placeholder="Confirm Password" required>--}}

{{--                        <input class="send-link-input" type="submit" value="Send link">--}}

{{--                </form>--}}




{{--            </div>--}}
{{--        </div>--}}
{{--    </div>--}}
{{--</section>--}}
{{--<!-- END NEW PASSWORD -->--}}
{{--@endsection--}}

{{--@section('footer')--}}

{{--@endsection--}}
