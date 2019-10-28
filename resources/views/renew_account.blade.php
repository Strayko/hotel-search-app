{{--<!DOCTYPE html>--}}
{{--<html lang="en">--}}
{{--<head>--}}
{{--    <meta charset="utf-8">--}}
{{--    <meta http-equiv="X-UA-Compatible" content="IE=edge">--}}
{{--    <meta name="viewport" content="width=device-width, initial-scale=1">--}}
{{--    <title>Home Property | Register</title>--}}

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
{{--    <script src="https://www.google.com/recaptcha/api.js" async defer></script>--}}


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
{{--                            <h4 style="color:red!important;">Your account has expired please extend it</h4>--}}

{{--                        </div>--}}


{{--                        {!! Form::open(['method'=>'POST', 'action'=>'RenewAccountController@renewAccount', 'files'=>true]) !!}--}}
{{--                        <input type="hidden" name="package_expiry">--}}
{{--                        <input type="hidden" name="is_active">--}}

{{--                        <div class="aa-single-field">--}}
{{--                            <label for="email">Email <span class="required">*</span></label>--}}
{{--                            <input type="email" required="required" aria-required="true" value="" name="email">--}}
{{--                            {!! Form::email('email', null, ['class'=>'form-control']) !!}--}}
{{--                        </div>--}}

{{--                        <div class="aa-single-field">--}}
{{--                            <label for="package_id">Package <span class="required">*</span></label>--}}
{{--                            {!! Form::select('package_id', ['' => 'Choose Packages'] + $packages, null, ['class'=>'form-control']) !!}--}}
{{--                        </div>--}}



{{--                        <div class="aa-single-submit">--}}
{{--                            {!! Form::submit('Renew Account', ['class'=>'btn btn-warning']) !!}--}}
{{--                        </div>--}}
{{--                        {!! Form::close() !!}--}}
{{--                    </div>--}}
{{--                </div>--}}
{{--            </div>--}}
{{--        </div>--}}
{{--    </div>--}}
{{--</section>--}}


{{--<!-- jQuery library -->--}}
{{--<!--<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script> -->--}}
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
        .help-block {
            margin-top: 4px;
            margin-left: 10px;
            font-size: 12px;
            position: absolute;
            color: red;
        }
        #selectorLng {
            border: 1px solid #F46767;
            border-radius: 15px;
        }
    </style>

    <title>Renew Account</title>
</head>
<body>


<!-- START LOGO AND MENU -->
<section id="menu" class="menu">
    <div class="container-menu">

        <div class="logo alignLeft center-response">
            @if($parametarExport == 'en')
                <a href="/en"><img src="{{asset('img/logo.svg')}}" class="logo-img" alt=""></a>
            @else
                <a href="/de"><img src="{{asset('img/logo.svg')}}" class="logo-img" alt=""></a>
            @endif
        </div>

        <a class="toggle-menu-link" href="javascript:void(0);" onclick="myFunction()">
            <i class="fas fa-bars"></i>
        </a>

        <nav class="navbar" id="navbar">
            <!--<div class="burger-nav"></div>-->
            <ul class="nav alignRight center-response">
                <select name="selectorLng" id="selectorLng" onchange="location = this.value;">
                    @if($parametarExport == 'de')
                        @foreach (config('app.available_locales') as $locale)
                            <option value="{{ route(\Illuminate\Support\Facades\Route::currentRouteName(), $locale) }}">
                                <a class="nav-link"
                                   href="{{ route(\Illuminate\Support\Facades\Route::currentRouteName(), $locale) }}"
                                   @if (app()->getLocale() == $locale) style="font-weight: bold; text-decoration: underline" @endif>{{ strtoupper($locale) }}</a>
                            </option>
                        @endforeach
                    @elseif($parametarExport == 'en')
                        @foreach (array_reverse(config('app.available_locales')) as $locale)
                            <option value="{{ route(\Illuminate\Support\Facades\Route::currentRouteName(), $locale) }}">
                                <a class="nav-link"
                                   href="{{ route(\Illuminate\Support\Facades\Route::currentRouteName(), $locale) }}"
                                   @if (app()->getLocale() == $locale) style="font-weight: bold; text-decoration: underline" @endif>{{ strtoupper($locale) }}</a>
                            </option>
                        @endforeach
                    @endif
                </select>
                @if($parametarExport == 'en')
                    <li><a class="mobile-font" href="/en">{{__('home.Homepage')}}</a></li>
                @else
                    <li><a class="mobile-font" href="/de">{{__('home.Homepage')}}</a></li>
                @endif
                <li><a class="mobile-font" href="{{route('plans-and-pricing.planAndPrice', app()->getLocale())}}">Plans&Pricing</a></li>
                <li><a class="mobile-font" href="{{route('restaurants.showAll', app()->getLocale())}}">Restaurants</a></li>
                <li><a class="mobile-font" href="{{route("contact.contact", app()->getLocale())}}">Contact</a></li>
                <li class="menu-buttons-block">
                @if (Route::has('login'))
                    {{--<div class="top-right links">--}}
                    @auth

                        <li class="menu-collapse"><a href="/admin" class="sign-in">Admin</a></li>

                        <li class="menu-collapse"><a href="{{route('logout', app()->getLocale())}}" onclick="event.preventDefault();
                                            document.getElementById('logout-form').submit();" class="register">{{ __('Logout') }}</a></li>
                        <a href="{{route('logout', app()->getLocale())}}" onclick="event.preventDefault();
                                            document.getElementById('logout-form').submit();" class="aa-login">

                        </a>
                        <form id="logout-form" action="{{ route('logout', app()->getLocale()) }}" method="POST" style="display: none;">
                            @csrf
                        </form>

                    @else
                        <li class="menu-collapse"><a href="{{route('login', app()->getLocale())}}" class="sign-in">Sign in</a></li>


                        @if (Route::has('register'))
                            <li class="menu-collapse top-distance-mobile"><a href="{{route('register.index', app()->getLocale())}}" class="register">Register</a></li>

                        @endif
                    @endauth
                    {{--</div>--}}
                @endif
            </ul>
        </nav>

    </div>
</section>
<!-- END LOGO AND MENU -->

<!-- START RENEW ACCOUNT -->
<section id="newPassword">
    <div class="container">
        <div class="newPassword-box">
            <div class="resetPassword-container">
                <h4>Extend your account</h4>

                <i class="fas fa-envelope"></i>
                {!! Form::open(['method'=>'POST', 'action'=>['RenewAccountController@renewAccount', app()->getLocale()], 'files'=>true]) !!}
                <input type="hidden" name="package_expiry">
                <input type="hidden" name="is_active">
                {!! Form::email('email', null, ['class'=>'reset-email-input', 'placeholder'=>'Email']) !!}
                @if ($errors->has('email'))
                    <span class="help-block">
                        <strong>{{ $errors->first('email') }}</strong>
                    </span>
                @endif
                @if(Session::has('renew-user'))
                    <span class="help-block">
                        <strong>{{session('renew-user')}}</strong>
                    </span>
                @endif
                {!! Form::password('passwordrenew', ['class'=>'reset-email-input', 'placeholder'=>'Password']) !!}
                @if ($errors->has('passwordrenew'))
                    <span class="help-block">
                        <strong>{{ $errors->first('passwordrenew') }}</strong>
                    </span>
                @endif

                <i class="fas fa-box"></i>{!! Form::select('package_id', ['' => 'Choose Packages'] + $packages, null, ['id'=>'register-package']) !!}
                @if ($errors->has('package_id'))
                    <span class="help-block">
                        <strong>{{ $errors->first('package_id') }}</strong>
                    </span>
                @endif
                <div class="aa-single-submit">
                    {!! Form::submit('Renew Account', ['class'=>'send-link-input']) !!}
                </div>
                {!! Form::close() !!}

            </div>
        </div>
    </div>
</section>
<!-- END NEW RENEW ACCOUNT -->


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
                    <li><a href="{{route('plans-and-pricing.planAndPrice', app()->getLocale())}}">Plans&Pricing</a></li>
                    <li><a href="{{route('restaurants.showAll', app()->getLocale())}}">Restaurants</a></li>
                    <li><a href="{{route('contact.contact', app()->getLocale())}}">Contact</a></li>
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
    $("document").ready(function(){
        setTimeout(function(){
            $(".help-block").fadeOut(1000, function() {$(this).remove()});
        }, 5000 );
    });
</script>

</body>
</html>
