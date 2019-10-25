{{--@extends('layouts.app')--}}

{{--@section('content')--}}
{{--<div class="container">--}}
    {{--<div class="row justify-content-center">--}}
        {{--<div class="col-md-8">--}}
            {{--<div class="card">--}}
                {{--<div class="card-header">{{ __('Login') }}</div>--}}

                {{--<div class="card-body">--}}
                    {{--<form method="POST" action="{{ route('login') }}">--}}
                        {{--@csrf--}}

                        {{--<div class="form-group row">--}}
                            {{--<label for="email" class="col-md-4 col-form-label text-md-right">{{ __('E-Mail Address') }}</label>--}}

                            {{--<div class="col-md-6">--}}
                                {{--<input id="email" type="email" class="form-control{{ $errors->has('email') ? ' is-invalid' : '' }}" name="email" value="{{ old('email') }}" required autofocus>--}}

                                {{--@if ($errors->has('email'))--}}
                                    {{--<span class="invalid-feedback" role="alert">--}}
                                        {{--<strong>{{ $errors->first('email') }}</strong>--}}
                                    {{--</span>--}}
                                {{--@endif--}}
                            {{--</div>--}}
                        {{--</div>--}}

                        {{--<div class="form-group row">--}}
                            {{--<label for="password" class="col-md-4 col-form-label text-md-right">{{ __('Password') }}</label>--}}

                            {{--<div class="col-md-6">--}}
                                {{--<input id="password" type="password" class="form-control{{ $errors->has('password') ? ' is-invalid' : '' }}" name="password" required>--}}

                                {{--@if ($errors->has('password'))--}}
                                    {{--<span class="invalid-feedback" role="alert">--}}
                                        {{--<strong>{{ $errors->first('password') }}</strong>--}}
                                    {{--</span>--}}
                                {{--@endif--}}
                            {{--</div>--}}
                        {{--</div>--}}

                        {{--<div class="form-group row">--}}
                            {{--<div class="col-md-6 offset-md-4">--}}
                                {{--<div class="form-check">--}}
                                    {{--<input class="form-check-input" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>--}}

                                    {{--<label class="form-check-label" for="remember">--}}
                                        {{--{{ __('Remember Me') }}--}}
                                    {{--</label>--}}
                                {{--</div>--}}
                            {{--</div>--}}
                        {{--</div>--}}

                        {{--<div class="form-group row mb-0">--}}
                            {{--<div class="col-md-8 offset-md-4">--}}
                                {{--<button type="submit" class="btn btn-primary">--}}
                                    {{--{{ __('Login') }}--}}
                                {{--</button>--}}

                                {{--@if (Route::has('password.request'))--}}
                                    {{--<a class="btn btn-link" href="{{ route('password.request') }}">--}}
                                        {{--{{ __('Forgot Your Password?') }}--}}
                                    {{--</a>--}}
                                {{--@endif--}}
                            {{--</div>--}}
                        {{--</div>--}}
                    {{--</form>--}}
                {{--</div>--}}
            {{--</div>--}}
        {{--</div>--}}
    {{--</div>--}}
{{--</div>--}}
{{--@endsection--}}










@extends('layouts.frontend-thema')
<title>Login</title>
<style>
    .invalid-feedback {
        font-size: 13px;
        display: block;
    }
    .help-block {
        margin-top: -16px;
        margin-left: 10px;
        font-size: 12px;
        position: absolute;
        color: red;
    }
    #selectorLng {
        border: 1px solid #F46767;
        border-radius: 15px;
    }
    #selectorLng {
        border: 1px solid #F46767;
        border-radius: 15px;
    }
</style>
@section('content')
<!-- START LOGO AND MENU -->
<section id="menu" class="menu">
    <div class="container-menu">

        <div class="logo alignLeft center-response">
            @if($parametar == 'en')
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
                    @if($parametar == 'de')
                        @foreach (config('app.available_locales') as $locale)
                                <option value="{{ route(\Illuminate\Support\Facades\Route::currentRouteName(), $locale) }}">
                                <a class="nav-link"
                                   href="{{ route(\Illuminate\Support\Facades\Route::currentRouteName(), $locale) }}"
                                   @if (app()->getLocale() == $locale) style="font-weight: bold; text-decoration: underline" @endif>{{ strtoupper($locale) }}</a>
                                </option>
                        @endforeach
                    @elseif($parametar == 'en')
                        @foreach (array_reverse(config('app.available_locales')) as $locale)
                            <option value="{{ route(\Illuminate\Support\Facades\Route::currentRouteName(), $locale) }}">
                                <a class="nav-link"
                                   href="{{ route(\Illuminate\Support\Facades\Route::currentRouteName(), $locale) }}"
                                   @if (app()->getLocale() == $locale) style="font-weight: bold; text-decoration: underline" @endif>{{ strtoupper($locale) }}</a>
                            </option>
                        @endforeach
                    @endif
                </select>
                @if($parametar == 'en')
                    <li><a class="active mobile-font" href="/en">{{__('home.Homepage')}}</a></li>
                @else
                    <li><a class="active mobile-font" href="/de">{{__('home.Homepage')}}</a></li>
                @endif
                <li><a class="mobile-font" href="{{route('plans-and-pricing.planAndPrice')}}">Plans&Pricing</a></li>
                <li><a class="mobile-font" href="{{route('restaurants.showAll')}}">Restaurants</a></li>
                <li><a class="mobile-font" href="{{route("contact.contact")}}">Contact</a></li>
                <li class="menu-buttons-block">
                <li class="menu-collapse"><a href="{{route('login', app()->getLocale())}}" class="sign-in">Sign in</a></li>
                <li class="menu-collapse top-distance-mobile"><a href="{{route('register.index', app()->getLocale())}}" class="register">Register</a></li>
            </ul>
        </nav>

    </div>
</section>
<!-- END LOGO AND MENU -->

<!-- START SIGN IN -->
<section id="signin">
    <div class="container">
        <div class="signin-container">
            <div class="content-signin">

                <img src="{{asset('img/logo.svg')}}" alt="">
                <h4>Sign In</h4>




                <form method="POST" action="{{ route('login', app()->getLocale()) }}" class="contactform">
                @csrf
                <i class="fas fa-envelope"></i><input class="signin-input signin-input-responsive{{ $errors->has('email') ? ' is-invalid' : '' }}" id="email" type="email" name="email" value="{{old('email')}}" autofocus placeholder="Email">
                @if ($errors->has('email'))
                    <span class="help-block">
                    <strong>{{ $errors->first('email') }}</strong>
                </span>
                @endif

                <i class="fas fa-lock"></i><input name="password" class="signin-input signin-input-responsive{{ $errors->has('password') ? ' is-invalid' : '' }}" id="password" type="password" placeholder="Password">
                @if ($errors->has('password'))
                    <span class="help-block">
                    <strong>{{ $errors->first('password') }}</strong>
                </span>
                @endif

                <label class="checkbox-container"> {{ __('Remember Me') }}
                    <input class="form-check-input" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>
                    <span class="checkmark"></span>
                </label>

                @if (Route::has('password.request'))
                    <a class="signin-forgot-pass" href="{{ route('password.request', app()->getLocale()) }}">
                        {{ __('Forgot Your Password?') }}
                    </a>
                @endif

                <input class="login-content-btn" type="submit" value="Login">

                <p class="p-lead">You don't have account yet?<a href="user/register">CREATE IT NOW</a></p>
                </form>







{{--                                        <form method="POST" action="{{ route('login') }}" class="contactform">--}}
{{--                                            @csrf--}}
{{--                                            <div class="aa-single-field">--}}
{{--                                                <label for="email">Email <span class="required">*</span></label>--}}
{{--                                                <input id="email" type="email" class="form-control{{ $errors->has('email') ? ' is-invalid' : '' }}" name="email" value="{{ old('email') }}" required autofocus>--}}
{{--                                                @if ($errors->has('email'))--}}
{{--                                                    <span class="invalid-feedback" role="alert">--}}
{{--                                                        <strong>{{ $errors->first('email') }}</strong>--}}
{{--                                                    </span>--}}
{{--                                                @endif--}}
{{--                                            </div>--}}
{{--                                            <div class="aa-single-field">--}}
{{--                                                <label for="password">Password <span class="required">*</span></label>--}}
{{--                                                <input id="password" type="password" class="form-control{{ $errors->has('password') ? ' is-invalid' : '' }}" name="password" required>--}}
{{--                                                @if ($errors->has('password'))--}}
{{--                                                    <span class="invalid-feedback" role="alert">--}}
{{--                                                        <strong>{{ $errors->first('password') }}</strong>--}}
{{--                                                    </span>--}}
{{--                                                @endif--}}
{{--                                            </div>--}}
{{--                                            <div class="aa-single-field">--}}

{{--                                                    <input class="form-check-input" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>--}}
{{--                                                <label class="form-check-label" for="remember">--}}
{{--                                                    {{ __('Remember Me') }}--}}
{{--                                                </label>--}}

{{--                                            </div>--}}
{{--                                            <div class="aa-single-submit">--}}
{{--                                                <button type="submit" class="btn btn-primary">--}}
{{--                                                    {{ __('Login') }}--}}
{{--                                                </button>--}}

{{--                                                @if (Route::has('password.request'))--}}
{{--                                                    <a class="btn btn-link" href="{{ route('password.request') }}">--}}
{{--                                                        {{ __('Forgot Your Password?') }}--}}
{{--                                                    </a>--}}
{{--                                                @endif--}}
{{--                                                <p>Don't Have A Account Yet? <a href="user/register">CREATE NOW!</a></p>--}}
{{--                                            </div>--}}
{{--                                        </form>--}}





            </div>
        </div>
    </div>
</section>
<!-- END SIGN IN -->
@endsection

@section('footer')
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
    <script>
        $("document").ready(function(){
            setTimeout(function(){
                $(".help-block").fadeOut(1000, function() {$(this).remove()});
            }, 5000 );
        });



    </script>
@endsection









{{--<!DOCTYPE html>--}}
{{--<html lang="en">--}}
{{--<head>--}}
{{--    <meta charset="utf-8">--}}
{{--    <meta http-equiv="X-UA-Compatible" content="IE=edge">--}}
{{--    <meta name="viewport" content="width=device-width, initial-scale=1">--}}
{{--    <title>Home Property | Signin</title>--}}

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
{{--                            <h4>Sign in to your account</h4>--}}

{{--                        </div>--}}
{{--                        <form method="POST" action="{{ route('login') }}" class="contactform">--}}
{{--                            @csrf--}}
{{--                            <div class="aa-single-field">--}}
{{--                                <label for="email">Email <span class="required">*</span></label>--}}
{{--                                <input type="email" required="required" aria-required="true" value="" name="email">--}}
{{--                                <input id="email" type="email" class="form-control{{ $errors->has('email') ? ' is-invalid' : '' }}" name="email" value="{{ old('email') }}" required autofocus>--}}
{{--                                @if ($errors->has('email'))--}}
{{--                                    <span class="invalid-feedback" role="alert">--}}
{{--                                        <strong>{{ $errors->first('email') }}</strong>--}}
{{--                                    </span>--}}
{{--                                @endif--}}
{{--                            </div>--}}
{{--                            <div class="aa-single-field">--}}
{{--                                <label for="password">Password <span class="required">*</span></label>--}}
{{--                                <input type="password" name="password">--}}
{{--                                <input id="password" type="password" class="form-control{{ $errors->has('password') ? ' is-invalid' : '' }}" name="password" required>--}}
{{--                                @if ($errors->has('password'))--}}
{{--                                    <span class="invalid-feedback" role="alert">--}}
{{--                                        <strong>{{ $errors->first('password') }}</strong>--}}
{{--                                    </span>--}}
{{--                                @endif--}}
{{--                            </div>--}}
{{--                            <div class="aa-single-field">--}}

{{--                                    <input class="form-check-input" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>--}}
{{--                                <label class="form-check-label" for="remember">--}}
{{--                                    {{ __('Remember Me') }}--}}
{{--                                </label>--}}

{{--                            </div>--}}
{{--                            <div class="aa-single-submit">--}}
{{--                                <button type="submit" class="btn btn-primary">--}}
{{--                                    {{ __('Login') }}--}}
{{--                                </button>--}}

{{--                                @if (Route::has('password.request'))--}}
{{--                                    <a class="btn btn-link" href="{{ route('password.request') }}">--}}
{{--                                        {{ __('Forgot Your Password?') }}--}}
{{--                                    </a>--}}
{{--                                @endif--}}
{{--                                <p>Don't Have A Account Yet? <a href="user/register">CREATE NOW!</a></p>--}}
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
