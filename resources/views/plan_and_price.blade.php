{{--@extends('layouts.frontend')--}}
{{--<title>Plan and price</title>--}}
{{--<style>--}}
{{--    #aa-property-header {--}}
{{--        background-image: url("{{asset('images/header11.jpg')}}")!important;--}}
{{--    }--}}


{{--</style>--}}
{{--<link rel="stylesheet" href="{{asset('css/planAndPrice.css')}}">--}}
{{--<link rel="stylesheet" href="{{asset('css/bootstrap4.css')}}">--}}
{{--@section('content')--}}

{{--    <!-- Start menu section -->--}}
{{--    <section id="aa-menu-area">--}}
{{--        <nav class="navbar navbar-default main-navbar" role="navigation">--}}
{{--            <div class="container">--}}
{{--                <div class="navbar-header">--}}
{{--                    <!-- FOR MOBILE VIEW COLLAPSED BUTTON -->--}}
{{--                    <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">--}}
{{--                        <span class="sr-only">Toggle navigation</span>--}}
{{--                        <span class="icon-bar"></span>--}}
{{--                        <span class="icon-bar"></span>--}}
{{--                        <span class="icon-bar"></span>--}}
{{--                    </button>--}}
{{--                    <!-- LOGO -->--}}
{{--                    <!-- Text based logo -->--}}
{{--                    <a class="navbar-brand aa-logo" href="/"> Restaurant <span>Logo</span></a>--}}
{{--                    <!-- Image based logo -->--}}
{{--                    <!-- <a class="navbar-brand aa-logo-img" href="index.html"><img src="img/logo.png" alt="logo"></a> -->--}}
{{--                </div>--}}
{{--                <div id="navbar" class="navbar-collapse collapse">--}}
{{--                    <ul id="top-menu" class="nav navbar-nav navbar-right aa-main-nav">--}}
{{--                        <li><a href="/">HOME</a></li>--}}

{{--                        <li class="active"><a href="{{route('plan_and_price.planAndPrice')}}">PLAN AND PRICE</a></li>--}}
{{--                        <li><a href="{{route('show_all.showAll')}}">SHOW ALL</a></li>--}}
{{--                        <li><a href="{{route('locations.locations')}}">LOCATIONS</a></li>--}}
{{--                        <li><a href="{{route('contact.contact')}}">CONTACT</a></li>--}}

{{--                    </ul>--}}
{{--                </div><!--/.nav-collapse -->--}}
{{--            </div>--}}
{{--        </nav>--}}
{{--    </section>--}}
{{--    <!-- End menu section -->--}}

{{--    <!-- Start Proerty header  -->--}}
{{--    <section id="aa-property-header">--}}
{{--        <div class="container">--}}
{{--            <div class="row">--}}
{{--                <div class="col-md-12">--}}
{{--                    <div class="aa-property-header-inner">--}}
{{--                        <h2>PLAN AND PRICE</h2>--}}
{{--                        <ol class="breadcrumb">--}}
{{--                            <li><a href="/">HOME</a></li>--}}
{{--                            <li class="active">Plan and price</li>--}}
{{--                        </ol>--}}
{{--                    </div>--}}
{{--                </div>--}}
{{--            </div>--}}
{{--        </div>--}}
{{--    </section>--}}
{{--    <!-- End Proerty header  -->--}}



{{--    --}}{{-- Plan and Price START --}}
{{--    <div class="container">--}}
{{--        <div class="row"></div>--}}
{{--    </div>--}}
{{--    <section id="aa-latest-property" style="padding: 30px 0 50px 0;">--}}
{{--        <div class="container">--}}
{{--            <div class="aa-latest-property-area">--}}
{{--                <div class="aa-title" style="margin: 70px 0 70px 0">--}}
{{--                    <h2>Plan and Price</h2>--}}
{{--                    <span></span>--}}
{{--                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Cum sit ea nobis quae vero voluptatibus.</p>--}}
{{--                </div>--}}

{{--                <section id="pricePlans">--}}
{{--                    <ul id="plans">--}}
{{--                        <li class="plan">--}}
{{--                            <ul class="planContainer">--}}
{{--                                <li class="title"><h2>Free</h2></li>--}}
{{--                                <li class="price"><p>FREE</p></li>--}}
{{--                                <li>--}}
{{--                                    <ul class="options">--}}
{{--                                        <li>30 <span>Show</span></li>--}}
{{--                                        <li>Publishing <span>Admin Moderation</span></li>--}}
{{--                                        <li>Period <span>30 days</span></li>--}}
{{--                                        <li><i class="fas fa-check text-success"></i> <span>Main Image</span></li>--}}
{{--                                        <li><i class="fas fa-check text-success"></i> <span>Contact Information</span></li>--}}
{{--                                        <li><i class="fas fa-check text-success"></i> <span>Description</span></li>--}}
{{--                                        <li><i class="fas fa-times"></i> <span>Social Media Links</span></li>--}}
{{--                                        <li><i class="fas fa-times"></i> <span>Opening Hours</span></li>--}}
{{--                                        <li><i class="fas fa-times"></i> <span>Upload PDF (like Menu)</span></li>--}}
{{--                                        <li><i class="fas fa-times"></i> <span>Picture Gallery</span></li>--}}
{{--                                        <li><i class="fas fa-times"></i> <span>Map</span></li>--}}
{{--                                        <li><i class="fas fa-times"></i> <span>Video</span></li>--}}
{{--                                        <li><i class="fas fa-times"></i> <span>Rating System With Comments</span></li>--}}
{{--                                        <li><i class="fas fa-times"></i> <span>(1x Advertising In The <br>Newsletter Per Year)</span></li>--}}
{{--                                        <li><i class="fas fa-times"></i> <span>(Reservation Possible Over ausgang.bayern)</span></li>--}}
{{--                                        <li><i class="fas fa-times"></i> <span>(Photo Upload By Customer <br>Of The Partner Company <br>"With Own Login")</span></li>--}}
{{--                                        <li><i class="fas fa-times"></i> <span>(Info About Current <br>Opening Status)</span></li>--}}
{{--                                        <li><i class="fas fa-times"></i> <span>(So top contribution <br>on home page)</span></li>--}}
{{--                                        <li><i class="fas fa-times"></i> <span>Competition System</span></li>--}}
{{--                                        <li><i class="fas fa-times"></i> <span>Deal Actions</span></li>--}}

{{--                                    </ul>--}}
{{--                                </li>--}}
{{--                                <li class="button"><a href="{{route('register.index')}}">REGISTER</a></li>--}}
{{--                            </ul>--}}
{{--                        </li>--}}

{{--                        <li class="plan">--}}
{{--                            <ul class="planContainer">--}}
{{--                                <li class="title"><h2>Silver</h2></li>--}}
{{--                                <li class="price"><p>€28</p></li>--}}
{{--                                <li>--}}
{{--                                    <ul class="options">--}}
{{--                                        <li>30 <span>Show</span></li>--}}
{{--                                        <li>Publishing <span>Admin Moderation</span></li>--}}
{{--                                        <li>Period <span>365 days</span></li>--}}
{{--                                        <li><i class="fas fa-check text-success"></i> <span>Main Image</span></li>--}}
{{--                                        <li><i class="fas fa-check text-success"></i> <span>Contact Information</span></li>--}}
{{--                                        <li><i class="fas fa-check text-success"></i> <span>Description</span></li>--}}
{{--                                        <li><i class="fas fa-check text-success"></i> <span>Social Media Links</span></li>--}}
{{--                                        <li><i class="fas fa-check text-success"></i> <span>Opening Hours</span></li>--}}
{{--                                        <li><i class="fas fa-check text-success"></i> <span>Upload PDF (like Menu)</span></li>--}}
{{--                                        <li><i class="fas fa-times"></i> <span>Picture Gallery</span></li>--}}
{{--                                        <li><i class="fas fa-times"></i> <span>Map</span></li>--}}
{{--                                        <li><i class="fas fa-times"></i> <span>Video</span></li>--}}
{{--                                        <li><i class="fas fa-times"></i> <span>Rating System With Comments</span></li>--}}
{{--                                        <li><i class="fas fa-times"></i> <span>(1x Advertising In The <br>Newsletter Per Year)</span></li>--}}
{{--                                        <li><i class="fas fa-times"></i> <span>(Reservation Possible Over ausgang.bayern)</span></li>--}}
{{--                                        <li><i class="fas fa-times"></i> <span>(Photo Upload By Customer <br>Of The Partner Company <br>"With Own Login")</span></li>--}}
{{--                                        <li><i class="fas fa-times"></i> <span>(Info About Current <br>Opening Status)</span></li>--}}
{{--                                        <li><i class="fas fa-times"></i> <span>(So top contribution <br>on home page)</span></li>--}}
{{--                                        <li><i class="fas fa-times"></i> <span>Competition System</span></li>--}}
{{--                                        <li><i class="fas fa-times"></i> <span>Deal Actions</span></li>--}}

{{--                                    </ul>--}}
{{--                                </li>--}}
{{--                                <li class="button"><a href="{{route('register.index')}}">REGISTER</a></li>--}}
{{--                            </ul>--}}
{{--                        </li>--}}

{{--                        <li class="plan">--}}
{{--                            <ul class="planContainer">--}}
{{--                                <li class="title"><h2 class="bestPlanTitle">Gold</h2></li>--}}
{{--                                <li class="price"><p class="bestPlanPrice">€46</p></li>--}}
{{--                                <li>--}}
{{--                                    <ul class="options">--}}
{{--                                        <li>100 <span>Show</span></li>--}}
{{--                                        <li>Publishing <span>Admin Moderation</span></li>--}}
{{--                                        <li>Period <span>365 days</span></li>--}}
{{--                                        <li><i class="fas fa-check text-success"></i> <span>Main Image</span></li>--}}
{{--                                        <li><i class="fas fa-check text-success"></i> <span>Contact Information</span></li>--}}
{{--                                        <li><i class="fas fa-check text-success"></i> <span>Description</span></li>--}}
{{--                                        <li><i class="fas fa-check text-success"></i> <span>Social Media Links</span></li>--}}
{{--                                        <li><i class="fas fa-check text-success"></i> <span>Opening Hours</span></li>--}}
{{--                                        <li><i class="fas fa-check text-success"></i> <span>Upload PDF (like Menu)</span></li>--}}
{{--                                        <li><i class="fas fa-check text-success"></i> <span>Picture Gallery</span></li>--}}
{{--                                        <li><i class="fas fa-check text-success"></i> <span>Map</span></li>--}}
{{--                                        <li><i class="fas fa-check text-success"></i> <span>Video</span></li>--}}
{{--                                        <li><i class="fas fa-check text-success"></i> <span>Rating System With Comments</span></li>--}}
{{--                                        <li><i class="fas fa-check text-success"></i> <span>(1x Advertising In The <br>Newsletter Per Year)</span></li>--}}
{{--                                        <li><i class="fas fa-check text-success"></i> <span>(Reservation Possible Over ausgang.bayern)</span></li>--}}
{{--                                        <li><i class="fas fa-check text-success"></i> <span>(Photo Upload By Customer <br>Of The Partner Company <br>"With Own Login")</span></li>--}}
{{--                                        <li><i class="fas fa-check text-success"></i> <span>(Info About Current <br>Opening Status)</span></li>--}}
{{--                                        <li><i class="fas fa-times"></i> <span>(So top contribution <br>on home page)</span></li>--}}
{{--                                        <li><i class="fas fa-times"></i> <span>Competition System</span></li>--}}
{{--                                        <li><i class="fas fa-times"></i> <span>Deal Actions</span></li>--}}

{{--                                    </ul>--}}
{{--                                </li>--}}
{{--                                <li class="button"><a class="bestPlanButton" href="{{route('register.index')}}">REGISTER</a></li>--}}
{{--                            </ul>--}}
{{--                        </li>--}}

{{--                        <li class="plan">--}}
{{--                            <ul class="planContainer">--}}
{{--                                <li class="title"><h2>Platinum</h2></li>--}}
{{--                                <li class="price"><p>€52</p></li>--}}
{{--                                <li>--}}
{{--                                    <ul class="options">--}}
{{--                                        <li>100 <span>Show</span></li>--}}
{{--                                        <li>Publishing <span>Admin Moderation</span></li>--}}
{{--                                        <li>Period <span>365 days</span></li>--}}
{{--                                        <li><i class="fas fa-check text-success"></i> <span>Main Image</span></li>--}}
{{--                                        <li><i class="fas fa-check text-success"></i> <span>Contact Information</span></li>--}}
{{--                                        <li><i class="fas fa-check text-success"></i> <span>Description</span></li>--}}
{{--                                        <li><i class="fas fa-check text-success"></i> <span>Social Media Links</span></li>--}}
{{--                                        <li><i class="fas fa-check text-success"></i> <span>Opening Hours</span></li>--}}
{{--                                        <li><i class="fas fa-check text-success"></i> <span>Upload PDF (like Menu)</span></li>--}}
{{--                                        <li><i class="fas fa-check text-success"></i> <span>Picture Gallery</span></li>--}}
{{--                                        <li><i class="fas fa-check text-success"></i> <span>Map</span></li>--}}
{{--                                        <li><i class="fas fa-check text-success"></i> <span>Video</span></li>--}}
{{--                                        <li><i class="fas fa-check text-success"></i> <span>Rating System With Comments</span></li>--}}
{{--                                        <li><i class="fas fa-check text-success"></i> <span>(1x Advertising In The <br>Newsletter Per Year)</span></li>--}}
{{--                                        <li><i class="fas fa-check text-success"></i> <span>(Reservation Possible Over ausgang.bayern)</span></li>--}}
{{--                                        <li><i class="fas fa-check text-success"></i> <span>(Photo Upload By Customer <br>Of The Partner Company <br>"With Own Login")</span></li>--}}
{{--                                        <li><i class="fas fa-check text-success"></i> <span>(Info About Current <br>Opening Status)</span></li>--}}
{{--                                        <li><i class="fas fa-check text-success"></i> <span>(So top contribution <br>on home page)</span></li>--}}
{{--                                        <li><i class="fas fa-check text-success"></i> <span>Competition System</span></li>--}}
{{--                                        <li><i class="fas fa-check text-success"></i> <span>Deal Actions</span></li>--}}
{{--                                    </ul>--}}
{{--                                </li>--}}
{{--                                <li class="button"><a href="{{route('register.index')}}">REGISTER</a></li>--}}
{{--                            </ul>--}}
{{--                        </li>--}}
{{--                    </ul> <!-- End ul#plans -->--}}
{{--                </section>--}}

{{--            </div>--}}
{{--        </div>--}}
{{--    </section>--}}

{{--@endsection--}}

{{--@section('footer')--}}

{{--@endsection--}}









@extends('layouts.frontend-thema')
<title>Plans and Pricing</title>
<style>
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
                <li><a class="active mobile-font" href="{{route('plans-and-pricing.planAndPrice', app()->getLocale())}}">Plans&Pricing</a></li>
                <li><a class="mobile-font" href="{{route('restaurants.showAll', app()->getLocale())}}">Restaurants</a></li>
                <li><a class="mobile-font" href="{{route('contact.contact', app()->getLocale())}}">Contact</a></li>
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
<!-- START HEADER -->
<section id="header">
    <div class="container">
        <h2>Plans & Pricing</h2>
        <p class="p-lead">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Distinctio nisi nostrum nulla, omnis temporibus voluptatem.</p>
    </div>
</section>
<!-- END HEADER -->

<!-- START PLANS -->
<section id="plans">
    <div class="container">
        <div class="first-two">
            <div id="free">
                <div class="free-header">
                    <h3>FREE</h3>
                </div>
                <div class="free-header-2">
                    <p class="p-lead">Free</p>
                </div>
                <div class="content">
                    <p class="p-lead"><strong>30</strong> Show</p>
                    <p class="p-lead"><strong>Publishing</strong> Admin Moderation</p>
                    <p class="p-lead"><strong>Period</strong> 30 Days</p>
                    <p class="p-lead"><i class="fas fa-check"></i> Main Image</p>
                    <p class="p-lead"><i class="fas fa-check"></i> Contact Information</p>
                    <p class="p-lead"><i class="fas fa-check"></i> Description</p>
                    <p class="p-lead"><i class="fas fa-times"></i> Social Media Links</p>
                    <p class="p-lead"><i class="fas fa-times"></i> Opening Hours</p>
                    <p class="p-lead"><i class="fas fa-times"></i> Upload PDF (like Menu)</p>
                    <p class="p-lead"><i class="fas fa-times"></i> Picture Gallery</p>
                    <p class="p-lead"><i class="fas fa-times"></i> Map</p>
                    <p class="p-lead"><i class="fas fa-times"></i> Video</p>
                    <p class="p-lead"><i class="fas fa-times"></i> Rating System With</p>
                    <p class="p-lead"><i class="fas fa-times"></i> Comments</p>
                    <p class="p-lead"><i class="fas fa-times"></i> (1x Advertising In The Newsletter Per Year)</p>
                    <p class="p-lead"><i class="fas fa-times"></i> (Reservation Possible Over ausgang.bayern)</p>
                    <p class="p-lead"><i class="fas fa-times"></i> (Photo Upload By Customer Of The Partner Company "With Own Login")</p>
                    <p class="p-lead"><i class="fas fa-times"></i> (Info About Current Opening Status)</p>
                    <p class="p-lead"><i class="fas fa-times"></i> (So top contribution on homepage)</p>
                    <p class="p-lead"><i class="fas fa-times"></i> Competition System</p>
                    <p class="p-lead"><i class="fas fa-times"></i> Deal Actions</p>
                    <a href="{{route('register.index', app()->getLocale())}}">Register</a>
                </div>
            </div>
            <div id="silver">
                <div class="free-header">
                    <h3>SILVER</h3>
                </div>
                <div class="free-header-2">
                    <p class="p-lead">&euro; 28</p>
                </div>
                <div class="content">
                    <p class="p-lead"><strong>30</strong> Show</p>
                    <p class="p-lead"><strong>Publishing</strong> Admin Moderation</p>
                    <p class="p-lead"><strong>Period</strong> 365 Days</p>
                    <p class="p-lead"><i class="fas fa-check"></i> Main Image</p>
                    <p class="p-lead"><i class="fas fa-check"></i> Contact Information</p>
                    <p class="p-lead"><i class="fas fa-check"></i> Description</p>
                    <p class="p-lead"><i class="fas fa-check"></i> Social Media Links</p>
                    <p class="p-lead"><i class="fas fa-check"></i> Opening Hours</p>
                    <p class="p-lead"><i class="fas fa-check"></i> Upload PDF (like Menu)</p>
                    <p class="p-lead"><i class="fas fa-times"></i> Picture Gallery</p>
                    <p class="p-lead"><i class="fas fa-times"></i> Map</p>
                    <p class="p-lead"><i class="fas fa-times"></i> Video</p>
                    <p class="p-lead"><i class="fas fa-times"></i> Rating System With</p>
                    <p class="p-lead"><i class="fas fa-times"></i> Comments</p>
                    <p class="p-lead"><i class="fas fa-times"></i> (1x Advertising In The Newsletter Per Year)</p>
                    <p class="p-lead"><i class="fas fa-times"></i> (Reservation Possible Over ausgang.bayern)</p>
                    <p class="p-lead"><i class="fas fa-times"></i> (Photo Upload By Customer Of The Partner Company "With Own Login")</p>
                    <p class="p-lead"><i class="fas fa-times"></i> (Info About Current Opening Status)</p>
                    <p class="p-lead"><i class="fas fa-times"></i> (So top contribution on homepage)</p>
                    <p class="p-lead"><i class="fas fa-times"></i> Competition System</p>
                    <p class="p-lead"><i class="fas fa-times"></i> Deal Actions</p>
                    <a href="{{route('register.index', app()->getLocale())}}">Register</a>
                </div>
            </div>
        </div>
        <div class="second-two">
            <div id="gold">
                <div class="free-header">
                    <h3>GOLD</h3>
                </div>
                <div class="free-header-2">
                    <p class="p-lead">&euro; 46</p>
                </div>
                <div class="content">
                    <p class="p-lead"><strong>100</strong> Show</p>
                    <p class="p-lead"><strong>Publishing</strong> Admin Moderation</p>
                    <p class="p-lead"><strong>Period</strong> 365 Days</p>
                    <p class="p-lead"><i class="fas fa-check"></i> Main Image</p>
                    <p class="p-lead"><i class="fas fa-check"></i> Contact Information</p>
                    <p class="p-lead"><i class="fas fa-check"></i> Description</p>
                    <p class="p-lead"><i class="fas fa-check"></i> Social Media Links</p>
                    <p class="p-lead"><i class="fas fa-check"></i> Opening Hours</p>
                    <p class="p-lead"><i class="fas fa-check"></i> Upload PDF (like Menu)</p>
                    <p class="p-lead"><i class="fas fa-check"></i> Picture Gallery</p>
                    <p class="p-lead"><i class="fas fa-check"></i> Map</p>
                    <p class="p-lead"><i class="fas fa-check"></i> Video</p>
                    <p class="p-lead"><i class="fas fa-check"></i> Rating System With</p>
                    <p class="p-lead"><i class="fas fa-check"></i> Comments</p>
                    <p class="p-lead"><i class="fas fa-check"></i> (1x Advertising In The Newsletter Per Year)</p>
                    <p class="p-lead"><i class="fas fa-check"></i> (Reservation Possible Over ausgang.bayern)</p>
                    <p class="p-lead"><i class="fas fa-check"></i> (Photo Upload By Customer Of The Partner Company "With Own Login")</p>
                    <p class="p-lead"><i class="fas fa-check"></i> (Info About Current Opening Status)</p>
                    <p class="p-lead"><i class="fas fa-times"></i> (So top contribution on homepage)</p>
                    <p class="p-lead"><i class="fas fa-times"></i> Competition System</p>
                    <p class="p-lead"><i class="fas fa-times"></i> Deal Actions</p>
                    <a href="{{route('register.index', app()->getLocale())}}">Register</a>
                </div>
            </div>
            <div id="platinum">
                <div class="free-header">
                    <h3>PLATINUM</h3>
                </div>
                <div class="free-header-2">
                    <p class="p-lead">&euro; 52</p>
                </div>
                <div class="content">
                    <p class="p-lead"><strong>100</strong> Show</p>
                    <p class="p-lead"><strong>Publishing</strong> Admin Moderation</p>
                    <p class="p-lead"><strong>Period</strong> 365 Days</p>
                    <p class="p-lead"><i class="fas fa-check"></i> Main Image</p>
                    <p class="p-lead"><i class="fas fa-check"></i> Contact Information</p>
                    <p class="p-lead"><i class="fas fa-check"></i> Description</p>
                    <p class="p-lead"><i class="fas fa-check"></i> Social Media Links</p>
                    <p class="p-lead"><i class="fas fa-check"></i> Opening Hours</p>
                    <p class="p-lead"><i class="fas fa-check"></i> Upload PDF (like Menu)</p>
                    <p class="p-lead"><i class="fas fa-check"></i> Picture Gallery</p>
                    <p class="p-lead"><i class="fas fa-check"></i> Map</p>
                    <p class="p-lead"><i class="fas fa-check"></i> Video</p>
                    <p class="p-lead"><i class="fas fa-check"></i> Rating System With</p>
                    <p class="p-lead"><i class="fas fa-check"></i> Comments</p>
                    <p class="p-lead"><i class="fas fa-check"></i> (1x Advertising In The Newsletter Per Year)</p>
                    <p class="p-lead"><i class="fas fa-check"></i> (Reservation Possible Over ausgang.bayern)</p>
                    <p class="p-lead"><i class="fas fa-check"></i> (Photo Upload By Customer Of The Partner Company "With Own Login")</p>
                    <p class="p-lead"><i class="fas fa-check"></i> (Info About Current Opening Status)</p>
                    <p class="p-lead"><i class="fas fa-check"></i> (So top contribution on homepage)</p>
                    <p class="p-lead"><i class="fas fa-check"></i> Competition System</p>
                    <p class="p-lead"><i class="fas fa-check"></i> Deal Actions</p>
                    <a href="{{route('register.index', app()->getLocale())}}">Register</a>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- END PLANS -->

@endsection

@section('footer')

@endsection