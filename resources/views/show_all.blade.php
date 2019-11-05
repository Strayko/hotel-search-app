{{--@extends('layouts.frontend')--}}
{{--<title>Show All</title>--}}
{{--<style>--}}
{{--    #aa-property-header {--}}
{{--        background-image: url("{{asset('images/header11.jpg')}}")!important;--}}
{{--    }--}}
{{--</style>--}}
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

{{--                        <li><a href="{{route('plan_and_price.planAndPrice')}}">PLAN AND PRICE</a></li>--}}
{{--                        <li class="active"><a href="{{route('show_all.showAll')}}">SHOW ALL</a></li>--}}
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
{{--                        <h2>Show All</h2>--}}
{{--                        <ol class="breadcrumb">--}}
{{--                            <li><a href="/">HOME</a></li>--}}
{{--                            <li class="active">Show All</li>--}}
{{--                        </ol>--}}
{{--                    </div>--}}
{{--                </div>--}}
{{--            </div>--}}
{{--        </div>--}}
{{--    </section>--}}
{{--    <!-- End Proerty header  -->--}}

{{--    <section id="aa-latest-property">--}}
{{--        <div class="container">--}}
{{--            <div class="aa-latest-property-area">--}}
{{--                <div class="aa-title">--}}
{{--                    <h2>All Restaurants</h2>--}}
{{--                    <span></span>--}}
{{--                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Cum sit ea nobis quae vero voluptatibus.</p>--}}
{{--                </div>--}}
{{--                <div class="aa-latest-properties-content">--}}
{{--                    <div class="row">--}}
{{--                        @if($restaurants)--}}
{{--                            @foreach($restaurants as $restaurant)--}}
{{--                                <div class="col-md-4">--}}
{{--                                    <article class="aa-properties-item">--}}
{{--                                        <a href="{{route('single_restaurant.restaurant', $restaurant->slug)}}" class="aa-properties-item-img">--}}
{{--                                            <img width="360" height="199" src="{{$restaurant->photo ? $restaurant->photo->file : $restaurant->photoHome()}}" alt="img">--}}
{{--                                        </a>--}}
{{--                                        <div class="aa-tag for-sale">--}}
{{--                                            {{$restaurant->created_at->diffForHumans()}}--}}
{{--                                        </div>--}}
{{--                                        <div class="aa-properties-item-content">--}}
{{--                                            <div class="aa-properties-info">--}}
{{--                                                <span>5 Rooms</span>--}}
{{--                                                <span>2 Beds</span>--}}
{{--                                                <span>3 Baths</span>--}}
{{--                                                <span>1100 SQ FT</span>--}}
{{--                                            </div>--}}
{{--                                            <div class="aa-properties-about" style="height: 12rem">--}}
{{--                                                <h3><a href="{{route('single_restaurant.restaurant', $restaurant->slug)}}">{{$restaurant->title}}</a></h3>--}}
{{--                                                <p>{{Str::limit($restaurant->body, 120)}}</p>--}}
{{--                                            </div>--}}
{{--                                            <div class="aa-properties-detial">--}}
{{--                                            <span class="aa-price">--}}
{{--                                              $35000--}}
{{--                                            </span>--}}
{{--                                                <a href="{{route('single_restaurant.restaurant', $restaurant->slug)}}" class="aa-secondary-btn">View Details</a>--}}
{{--                                            </div>--}}
{{--                                        </div>--}}
{{--                                    </article>--}}
{{--                                </div>--}}
{{--                            @endforeach--}}
{{--                        @endif--}}

{{--                    </div>--}}
{{--                    <div class="row">--}}
{{--                        <div class="col-sm-12 text-center">--}}
{{--                            {{$restaurants->onEachSide(1)->links()}}--}}
{{--                        </div>--}}
{{--                    </div>--}}
{{--                </div>--}}

{{--            </div>--}}

{{--        </div>--}}

{{--    </section>--}}
{{--    <!-- / Latest property -->--}}

{{--@endsection--}}

{{--@section('footer')--}}

{{--@endsection--}}











@extends('layouts.frontend-thema')
<title>Restaurants</title>
<style>
    .page-item {
        display: inline-block;
    }
    @media screen and (max-width: 550px) {
        .restaurants-h4-page {
            font-size: 15px!important;
        }
    }
    /*#restaurants-h4-id {*/
    /*    font-size: 15px!important;*/
    /*}*/
    /*#restaurants-h4-id2 {*/
    /*    font-size: 15px!important;*/
    /*}*/
    @media screen and (max-width: 494px) {
        #restaurants-h4-id {
            font-size: 13px!important;
        }
        #restaurants-h4-id2 {
            font-size: 13px!important;
        }
    }
    @media screen and (max-width: 494px) {
        .mobile-font {
            font-size: 11px!important;
        }
    }
    @media screen and (max-width: 440px) {
        #restaurants-h4-id {
            white-space: nowrap!important;
            overflow: hidden!important;
            text-overflow: ellipsis!important;
            max-width: 150px!important;
        }
        #restaurants-h4-id2 {
            white-space: nowrap!important;
            overflow: hidden!important;
            text-overflow: ellipsis!important;
            max-width: 150px!important;
        }
    }
    a[rel~="prev"] {
        font-size: 48px;
        margin-top: -17px;
        position: absolute;
    }
    a[rel~="next"] {
        font-size: 48px;
        margin-top: -17px;
        position: absolute;
    }

    .page-item {
        display: inline-block;
        color: #e24f4c;
        padding: 5px 12px 5px 12px;
    }
    .page-item.disabled {

    }
    .page-link {
        color: #e24f4c;
        text-decoration: none;
        margin-left: -16px;
    }
    .active .page-link {
        -webkit-border-radius: 50px!important;
        -moz-border-radius: 50px!important;
        border-radius: 50px!important;
        color: white;
        background-color: #e24f4c;
        padding: 5px 12px 5px 12px;
    }
    .font-size-menu-font {
        font-size: 17px!important;
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
                <li><a class="mobile-font font-size-menu-font" href="{{route('plans-and-pricing.planAndPrice', app()->getLocale())}}">Plans&Pricing</a></li>
                <li><a class="active mobile-font font-size-menu-font" href="{{route('restaurants.showAll', app()->getLocale())}}">Restaurants</a></li>
                <li><a class="mobile-font font-size-menu-font" href="{{route('contact.contact', app()->getLocale())}}">Contact</a></li>
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
        <h2>Restaurants</h2>
        <p class="p-lead">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Distinctio nisi nostrum nulla, omnis temporibus voluptatem.</p>
    </div>
</section>
<!-- END HEADER -->

<!-- START RESTAURANTS -->
<section id="restaurants">
    <div class="container">
        <div class="head-content">
            <h3>Popular</h3>
        </div>
        <div class="restaurants-content">


            @if($restaurants)
                @foreach($restaurants as $restaurant)
                    <a href="{{route('single_restaurant.restaurant', ['locale'=>app()->getLocale(), 'id'=>$restaurant->slug])}}">
                        <div class="restaurant-box">
                            <div class="pic-box">
                                <img src="{{asset('img/popular_place.png')}}" class="imgs" alt="">
                            </div>
                            <div class="container-box">
                                <div class="container-box-header">
                                    <h4 id="restaurants-h4-id2" class="restaurants-h4-page">{{Str::limit($restaurant->title, 20)}}</h4>
                                    <img src="{{asset('img/star.svg')}}" class="svg star star-float-left" alt="">
                                    <img src="{{asset('img/star.svg')}}" class="svg star star-float-left" alt="">
                                    <img src="{{asset('img/star.svg')}}" class="svg star star-float-left" alt="">
                                    <img src="{{asset('img/star.svg')}}" class="svg star star-float-left" alt="">
                                    <img src="{{asset('img/star.svg')}}" class="svg star star-float-left" alt="">
                                </div>
                                <div class="container-box-footer">
                                    <img src="{{asset('img/location-minify.svg')}}" class="svg locationAndStar" alt=""><p class="mobile-font">{{$restaurant->location->name}}</p>
                                    <hr>
                                    <img src="{{asset('img/chat-minify.svg')}}" class="svg locationAndStar" alt=""><p class="mobile-font">34 Commnets</p>
                                </div>
                            </div>
                        </div>
                    </a>
                @endforeach
            @endif

        </div>

{{--        <div class="pagination">--}}
{{--            <img src="img/left-arrow-angle-white-red.svg" class="pagination-left" alt="">--}}
{{--            <p class="p-lead p-circle">1</p>--}}
{{--            <p class="p-lead">2</p>--}}
{{--            <p class="p-lead mobile-none-pagination">3</p>--}}
{{--            <p class="p-lead mobile-none-pagination">4</p>--}}
{{--            <p class="p-lead">...</p>--}}
{{--            <p class="p-lead">9</p>--}}
{{--            <img src="img/right-arrow-angle-white-red.svg" class="pagination-right" alt="">--}}
{{--        </div>--}}


                {{$restaurants->onEachSide(1)->links()}}


        <h3 class="restaurants-h3">All Restaurants</h3>
        <div class="restaurants-content">

            @if($restaurants)
                @foreach($restaurants as $restaurant)
                    <a href="{{route('single_restaurant.restaurant', ['locale'=>app()->getLocale(), 'id'=>$restaurant->slug])}}">
                        <div class="restaurant-box">
                            <div class="pic-box">
                                <img src="{{asset('img/popular_place.png')}}" class="imgs" alt="">
                            </div>
                            <div class="container-box">
                                <div class="container-box-header">
                                    <h4 id="restaurants-h4-id" class="restaurants-h4-page">{{Str::limit($restaurant->title, 20)}}</h4>
                                    <img src="{{asset('img/star.svg')}}" class="svg star star-float-left" alt="">
                                    <img src="{{asset('img/star.svg')}}" class="svg star star-float-left" alt="">
                                    <img src="{{asset('img/star.svg')}}" class="svg star star-float-left" alt="">
                                    <img src="{{asset('img/star.svg')}}" class="svg star star-float-left" alt="">
                                    <img src="{{asset('img/star.svg')}}" class="svg star star-float-left" alt="">
                                </div>
                                <div class="container-box-footer">
                                    <img src="{{asset('img/location-minify.svg')}}" class="svg locationAndStar" alt=""><p>{{$restaurant->location->name}}</p>
                                    <hr>
                                    <img src="{{asset('img/chat-minify.svg')}}" class="svg locationAndStar" alt=""><p>34 Commnets</p>
                                </div>
                            </div>
                        </div>
                    </a>
                @endforeach
            @endif

{{--            <div class="pagination pagination-last-bottom">--}}
{{--                <img src="img/left-arrow-angle-white-red.svg" class="pagination-left" alt="">--}}
{{--                <p class="p-lead p-circle">1</p>--}}
{{--                <p class="p-lead">2</p>--}}
{{--                <p class="p-lead mobile-none-pagination">3</p>--}}
{{--                <p class="p-lead mobile-none-pagination">4</p>--}}
{{--                <p class="p-lead">...</p>--}}
{{--                <p class="p-lead">9</p>--}}
{{--                <img src="img/right-arrow-angle-white-red.svg" class="pagination-right" alt="">--}}
{{--            </div>--}}

                {{$restaurants->onEachSide(1)->links()}}

        </div>
    </div>
</section>
<!-- END RESTAURANTS -->
@endsection

@section('footer')

@endsection