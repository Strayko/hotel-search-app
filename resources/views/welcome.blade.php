{{--@extends('layouts.frontend')--}}
{{--<title>Home</title>--}}
{{--<style>--}}
{{--    #search-fields {--}}
{{--        margin-top: -350px!important;--}}
{{--        background-color: rgba(221, 221, 221, 0.0)!important;--}}
{{--    }--}}
{{--    #aa-advance-search .aa-advance-search-area .aa-advance-search-top .aa-single-advance-search select {--}}
{{--        height: 50px!important;--}}
{{--    }--}}
{{--    #aa-advance-search .aa-advance-search-area .aa-advance-search-top .aa-single-advance-search .aa-search-btn {--}}
{{--        height: 50px!important;--}}
{{--        margin-top: 40px;--}}
{{--    }--}}
{{--</style>--}}
{{--<link rel="stylesheet" href="{{asset('css/planAndPrice.css')}}">--}}
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
{{--                        <li class="active"><a href="/">HOME</a></li>--}}
{{--                        <li><a href="{{route('plan_and_price.planAndPrice')}}">PLAN AND PRICE</a></li>--}}
{{--                        <li><a href="{{route('show_all.showAll')}}">SHOW ALL</a></li>--}}
{{--                        <li><a href="{{route('locations.locations')}}">LOCATIONS</a></li>--}}
{{--                        <li><a href="{{route('contact.contact')}}">CONTACT</a></li>--}}

{{--                    </ul>--}}
{{--                </div><!--/.nav-collapse -->--}}
{{--            </div>--}}
{{--        </nav>--}}
{{--    </section>--}}
{{--    <!-- End menu section -->--}}

{{--    <!-- Start slider  -->--}}
{{--    <section id="aa-slider">--}}
{{--        <div class="aa-slider-area">--}}
{{--            <!-- Top slider -->--}}
{{--            <div class="aa-top-slider">--}}
{{--                <!-- Top slider single slide -->--}}
{{--                <div class="aa-top-slider-single">--}}
{{--                    <img src="{{asset('images/slider1.jpg')}}" alt="">--}}
{{--                    <!-- Top slider content -->--}}



{{--                    <!-- / Top slider content -->--}}
{{--                </div>--}}
{{--                <!-- / Top slider single slide -->--}}
{{--                <!-- Top slider single slide -->--}}


{{--                <!-- / Top slider single slide -->--}}
{{--                <!-- Top slider single slide -->--}}

{{--            </div>--}}
{{--        </div>--}}
{{--    </section>--}}
{{--    <!-- End slider  -->--}}

{{--    <!-- Advance Search -->--}}
{{--    <section id="aa-advance-search">--}}
{{--        <div class="container">--}}
{{--            <div id="search-fields" class="aa-advance-search-area">--}}
{{--                <div class="form">--}}
{{--                    <div class="aa-advance-search-top">--}}
{{--                        <div class="row">--}}
{{--                            <div class="col-md-12">--}}
{{--                                <div class="aa-single-advance-search">--}}
{{--                                    <form action="{{URL::to('/search')}}" method="POST" role="search">--}}
{{--                                        {{csrf_field()}}--}}
{{--                                        <div class="col-md-3">--}}
{{--                                            <div class="aa-single-advance-search">--}}
{{--                                                <input style="height: 50px;" type="text" name="q" id="address" placeholder="Type Restaurant...">--}}
{{--                                            </div>--}}
{{--                                        </div>--}}

{{--                                        <div class="col-md-3">--}}
{{--                                            <div class="aa-single-advance-search">--}}

{{--                                                {!! Form::select('name', [''=>'Choose Location'] + $locations, null, ['class'=>'form-control']) !!}--}}

{{--                                            </div>--}}
{{--                                        </div>--}}

{{--                                        <div class="col-md-3">--}}
{{--                                            <div class="aa-single-advance-search">--}}

{{--                                                {!! Form::select('food', [''=>'Choose Food'] + $foods, null, ['class'=>'form-control']) !!}--}}

{{--                                            </div>--}}
{{--                                        </div>--}}

{{--                                        <div class="col-md-3">--}}
{{--                                            <div class="aa-single-advance-search">--}}

{{--                                                {!! Form::select('distance', [100=>'Choose Distance'] + $distance, null, ['class'=>'form-control']) !!}--}}

{{--                                            </div>--}}
{{--                                        </div>--}}

{{--                                        <div class="col-md-4">--}}

{{--                                        </div>--}}

{{--                                        <div class="col-md-4">--}}
{{--                                            <div class="aa-single-advance-search">--}}
{{--                                                <input class="aa-search-btn" type="submit" id="submit" value="Search">--}}
{{--                                            </div>--}}
{{--                                        </div>--}}



{{--                                    </form>--}}
{{--                                    <input type="text" placeholder="Type Your Location">--}}
{{--                                </div>--}}
{{--                            </div>--}}



{{--                        </div>--}}
{{--                    </div>--}}

{{--                </div>--}}
{{--            </div>--}}
{{--        </div>--}}
{{--    </section>--}}
{{--    <!-- / Advance Search -->--}}


{{--    <section id="aa-latest-property">--}}
{{--        <div class="container">--}}
{{--            <div class="aa-latest-property-area">--}}
{{--                <div class="aa-title">--}}
{{--                    <h2>All Locations</h2>--}}
{{--                    <span></span>--}}
{{--                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Cum sit ea nobis quae vero voluptatibus.</p>--}}
{{--                </div>--}}
{{--                <div class="aa-latest-properties-content">--}}
{{--                    <div class="row">--}}

{{--                        @if(count($locationss) > 0)--}}
{{--                            @foreach($locationss as $locationn)--}}
{{--                                <div class="col-md-3">--}}
{{--                                    <article class="aa-properties-item">--}}
{{--                                        <a href="{{route('single_location.locationCategory', $locationn->id)}}" class="aa-properties-item-img">--}}
{{--                                            <img width="262" height="199" src="{{$locationn->photo ? $locationn->photo->file : $locationn->noPhoto()}}" alt="img">--}}

{{--                                        </a>--}}
{{--                                        <div class="aa-tag for-sale">--}}
{{--                                            {{$locationn->name}}--}}
{{--                                            (<b>{{$locationn->restaurant->count()}}</b>)--}}
{{--                                        </div>--}}

{{--                                    </article>--}}
{{--                                </div>--}}
{{--                            @endforeach--}}
{{--                        @else--}}
{{--                            <h1 class="text-center">No Locations</h1>--}}
{{--                        @endif--}}


{{--                    </div>--}}
{{--                    <div class="row">--}}
{{--                        <div class="col-sm-12 text-center">--}}

{{--                        </div>--}}
{{--                    </div>--}}
{{--                </div>--}}

{{--            </div>--}}

{{--        </div>--}}

{{--    </section>--}}
{{--    <!-- / Latest property -->--}}


{{--    <!-- Latest property -->--}}
{{--    <section id="aa-latest-property" style="padding: 30px 0 100px 0;">--}}
{{--        <div class="container">--}}
{{--            <div class="aa-latest-property-area">--}}
{{--                <div class="aa-title">--}}
{{--                    <h2>Latest Restaurants</h2>--}}
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
{{--                </div>--}}
{{--            </div>--}}
{{--        </div>--}}
{{--    </section>--}}
{{--    <!-- / Latest property -->--}}


{{--    <section id="aa-latest-property" style="padding: 30px 0 50px 0;">--}}
{{--        <div class="container">--}}
{{--            <div class="aa-latest-property-area">--}}
{{--                <div class="aa-title">--}}
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


{{--    <section id="aa-latest-property" style="padding: 30px 0 100px 0;">--}}
{{--        <div class="container">--}}
{{--            <div class="aa-latest-property-area">--}}
{{--                <div class="aa-title">--}}
{{--                    <h2>About us</h2>--}}
{{--                    <span></span>--}}
{{--                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Cum sit ea nobis quae vero voluptatibus.</p>--}}
{{--                </div>--}}

{{--                <div class="row">--}}
{{--                    <div class="col-md-12">--}}
{{--                        <div class="aa-about-us-area">--}}
{{--                            <div class="row">--}}
{{--                                <div class="col-md-5">--}}
{{--                                    <div class="aa-about-us-left">--}}
{{--                                        <img src="{{asset('images/about-us.jpg')}}" alt="image">--}}
{{--                                    </div>--}}
{{--                                </div>--}}
{{--                                <div class="col-md-7">--}}
{{--                                    <div class="aa-about-us-right">--}}
{{--                                        <div class="aa-title">--}}

{{--                                        </div>--}}
{{--                                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Repellat ab dignissimos vitae maxime adipisci blanditiis rerum quae quos! Id at rerum maxime modi fugit vero corrupti, ad atque sit laborum ipsum sunt blanditiis suscipit odio, aut nostrum assumenda nobis rem a maiores temporibus non commodi laboriosam, doloremque expedita! Corporis, provident?</p>--}}
{{--                                        <ul>--}}
{{--                                            <li>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Esse, blanditiis.</li>--}}
{{--                                            <li>Lorem ipsum dolor sit amet, consectetur adipisicing elit.</li>--}}
{{--                                            <li>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quia.</li>--}}
{{--                                            <li>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Esse, blanditiis.</li>--}}
{{--                                            <li>Lorem ipsum dolor sit amet, consectetur adipisicing elit.</li>--}}
{{--                                            <li>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quia.</li>--}}
{{--                                        </ul>--}}
{{--                                    </div>--}}
{{--                                </div>--}}
{{--                            </div>--}}
{{--                        </div>--}}
{{--                    </div>--}}
{{--                </div>--}}
{{--            </div>--}}
{{--        </div>--}}
{{--    </section>--}}


{{--@endsection--}}

{{--@section('footer')--}}

{{--@endsection--}}









@extends('layouts.frontend-thema')
<title>Top Restaurant</title>
<style>
    .search input {
        font-size-adjust:0.5;
    }
    .alert-renew-successful {
        display: flex;
    }
    .success-message-alert {
        display: flex;
        justify-content: center;
        background-color: green;
        color: #fff;
        height: 81px;
        align-items: center;
        top: 0;
        z-index: 99999;
        position: sticky;
    }
    #selectorLng {
        border: 1px solid #F46767;
        border-radius: 15px;
    }
</style>
<link rel="stylesheet" href="{{asset('css/slickMin.css')}}">
@section('content')
    @if(session()->has('account-renew-successful'))
    <div class="success-message-alert">
        <div class="alert-renew-successful">
            {{ session()->get('account-renew-successful') }}
        </div>
    </div>
    @endif
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

{{--        <ul class="navbar-nav ml-auto">--}}

{{--                <li class="nav-item">--}}
{{--                    --}}
{{--                </li>--}}

{{--        </ul>--}}

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
                    <li><a class="active mobile-font" href="/en">{{__('home.Homepage')}}</a></li>
                @else
                    <li><a class="active mobile-font" href="/de">{{__('home.Homepage')}}</a></li>
                @endif

                <li><a class="mobile-font" href="{{route('plans-and-pricing.planAndPrice', app()->getLocale())}}">Plans&Pricing</a></li>
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
<section id="slider">
    <div class="container">



        <!-- START MAIN SEARCH -->
        <div class="search">
            <h1>Discover great restaurants</h1>
            <form action="{{URL::to('/search')}}" method="POST" role="search">
            {{csrf_field()}}
            <input type="text" name="q" id="address" class="first-input" placeholder="What are you looking for?">



            {!! Form::select('name', [''=>'Choose Location'] + $locations, null, ['class'=>'form-control', 'id'=>'location']) !!}
            {!! Form::select('food', [''=>'Choose Food'] + $foods, null, ['class'=>'form-control', 'id'=>'category']) !!}
            {!! Form::select('distance', [100=>'Choose Distance'] + $distance, null, ['class'=>'last-input', 'id'=>'distance']) !!}
            <input type="submit" value="Search" id="submit">
            </form>
        </div>
        <!-- END MAIN SEARCH -->
    </div>

    <!-- START POPULAR PLACES -->
    <div class="popular-places">
        <div class="container">
            <h2>Popular places</h2>
            <p class="p-lead">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ad aut minima natus <span class="mobile-none-p">necessitatibus odit quisquam</span></p>
        </div>
        <div class="container-arrow">
            <div class="main-slider">
                <img src="img/left-circle-arrow-white.svg" class="left left-circle" alt="">
                <img src="img/left-circle-arrow-red.svg" class="left left-circle" alt="">

                <img src="img/right-circle-arrow-white.svg" class="right right-circle" alt="">
                <img src="img/right-circle-arrow-red.svg" class="right right-circle" alt="">
                <div class="slider slider-nav">





{{--                    @if($restaurants)--}}
{{--                        @foreach($restaurants as $restaurant)--}}
{{--                            <div class="col-md-4">--}}
{{--                                <article class="aa-properties-item">--}}
{{--                                    <a href="{{route('single_restaurant.restaurant', $restaurant->slug)}}" class="aa-properties-item-img">--}}
{{--                                        <img width="360" height="199" src="{{$restaurant->photo ? $restaurant->photo->file : $restaurant->photoHome()}}" alt="img">--}}
{{--                                    </a>--}}
{{--                                    <div class="aa-tag for-sale">--}}
{{--                                        {{$restaurant->created_at->diffForHumans()}}--}}
{{--                                    </div>--}}
{{--                                    <div class="aa-properties-item-content">--}}
{{--                                        <div class="aa-properties-info">--}}
{{--                                            <span>5 Rooms</span>--}}
{{--                                            <span>2 Beds</span>--}}
{{--                                            <span>3 Baths</span>--}}
{{--                                            <span>1100 SQ FT</span>--}}
{{--                                        </div>--}}
{{--                                        <div class="aa-properties-about" style="height: 12rem">--}}
{{--                                            <h3><a href="{{route('single_restaurant.restaurant', $restaurant->slug)}}">{{$restaurant->title}}</a></h3>--}}
{{--                                            <p>{{Str::limit($restaurant->body, 120)}}</p>--}}
{{--                                        </div>--}}
{{--                                        <div class="aa-properties-detial">--}}
{{--                                            <span class="aa-price">--}}
{{--                                              $35000--}}
{{--                                            </span>--}}
{{--                                            <a href="{{route('single_restaurant.restaurant', $restaurant->slug)}}" class="aa-secondary-btn">View Details</a>--}}
{{--                                        </div>--}}
{{--                                    </div>--}}
{{--                                </article>--}}
{{--                            </div>--}}
{{--                        @endforeach--}}
{{--                    @endif--}}




                    @if($restaurants)
                        @foreach($restaurants as $restaurant)
                            <div>
                                <a href="{{route('single_restaurant.restaurant', $restaurant->slug)}}">
                                    <div class="restaurant-box">
                                        <div class="pic-box">
                                            <img src="img/popular_place.png" class="imgs" alt="">
                                        </div>
                                        <div class="container-box">
                                            <div class="container-box-header">

                                                <img src="img/star.svg" class="svg star" alt="">
                                                <img src="img/star.svg" class="svg star" alt="">
                                                <img src="img/star.svg" class="svg star" alt="">
                                                <img src="img/star.svg" class="svg star" alt="">
                                                <img src="img/star.svg" class="svg star" alt="">

                                                <h4>{{Str::limit($restaurant->title, 20)}}</h4>
                                            </div>
                                            <div class="container-box-footer">
                                                <img src="img/location-minify.svg" class="svg locationAndStar" alt=""><p>{{$restaurant->location->name}}</p>
                                                <hr>
                                                <img src="img/chat-minify.svg" class="svg locationAndStar" alt=""><p>34 Commnets</p>
                                            </div>
                                        </div>
                                    </div>
                                </a>
                            </div>
                        @endforeach
                    @endif





                </div>
                <div class="slider slider-nav-s">

                    @if($restaurants)
                        @foreach($restaurants as $restaurant)
                            <div>
                                <a href="{{route('single_restaurant.restaurant', $restaurant->slug)}}">
                                    <div class="restaurant-box">
                                        <div class="pic-box">
                                            <img src="img/popular_place.png" class="imgs" alt="">
                                        </div>
                                        <div class="container-box">
                                            <div class="container-box-header">
                                                <h4>{{Str::limit($restaurant->title, 20)}}</h4>
                                                <img src="img/star.svg" class="svg star" alt="">
                                                <img src="img/star.svg" class="svg star" alt="">
                                                <img src="img/star.svg" class="svg star" alt="">
                                                <img src="img/star.svg" class="svg star" alt="">
                                                <img src="img/star.svg" class="svg star" alt="">
                                            </div>
                                            <div class="container-box-footer">
                                                <img src="img/location-minify.svg" class="svg locationAndStar" alt=""><p>{{$restaurant->location->name}}</p>
                                                <hr>
                                                <img src="img/chat-minify.svg" class="svg locationAndStar" alt=""><p>34 Commnets</p>
                                            </div>
                                        </div>
                                    </div>
                                </a>
                            </div>
                        @endforeach
                    @endif

                </div>
                <div class="slider slider-nav-r">

                    @if($restaurants)
                        @foreach($restaurants as $restaurant)
                            <div>
                                <a href="{{route('single_restaurant.restaurant', $restaurant->slug)}}">
                                    <div class="restaurant-box">
                                        <div class="pic-box">
                                            <img src="img/popular_place.png" class="imgs" alt="">
                                        </div>
                                        <div class="container-box">
                                            <div class="container-box-header">
                                                <h4>{{Str::limit($restaurant->title, 20)}}</h4>
                                                <img src="img/star.svg" class="svg star" alt="">
                                                <img src="img/star.svg" class="svg star" alt="">
                                                <img src="img/star.svg" class="svg star" alt="">
                                                <img src="img/star.svg" class="svg star" alt="">
                                                <img src="img/star.svg" class="svg star" alt="">
                                            </div>
                                            <div class="container-box-footer">
                                                <img src="img/location-minify.svg" class="svg locationAndStar" alt=""><p>{{$restaurant->location->name}}</p>
                                                <hr>
                                                <img src="img/chat-minify.svg" class="svg locationAndStar" alt=""><p>34 Commnets</p>
                                            </div>
                                        </div>
                                    </div>
                                </a>
                            </div>
                        @endforeach
                    @endif

                </div>
            </div>
        </div>
    </div>
    <!-- END POPULAR PLACES -->

</section>

<!-- START RECENTLY ADDED PLACES -->
<section id="recently-added-places">
    <div class="container">
        <h2>Recently added places</h2>
        <p class="p-lead">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ad aut minima natus necessitatibus odit quisquam.</p>
    </div>
    <div class="main container-top-minus">
        <div class="slider slider-nav2">

            @if($restaurants)
                @foreach($restaurants as $restaurant)
                    <div>
                        <div class="recently-box">
                            <a href="{{route('single_restaurant.restaurant', $restaurant->slug)}}">
                                <div class="cube-box">
                                    <img src="img/recent_place.png" alt="">
                                </div>
                                <div class="cube-box-footer">
                                    <h4>{{Str::limit($restaurant->title, 15)}}</h4>
                                    <img src="img/location-minify.svg" class="svg location" alt=""><p>{{$restaurant->location->name}}</p>
                                </div>
                            </a>
                        </div>
                    </div>
                @endforeach
            @endif

        </div>
        <div class="slider slider-nav2-s">

            @if($restaurants)
                @foreach($restaurants as $restaurant)
                    <div>
                        <div class="recently-box">
                            <a href="{{route('single_restaurant.restaurant', $restaurant->slug)}}">
                                <div class="cube-box">
                                    <img src="img/recent_place.png" alt="">
                                </div>
                                <div class="cube-box-footer">
                                    <h4>{{Str::limit($restaurant->title, 15)}}</h4>
                                    <img src="img/location-minify.svg" class="svg location" alt=""><p>{{$restaurant->location->name}}</p>
                                </div>
                            </a>
                        </div>
                    </div>
                @endforeach
            @endif

        </div>
        <div class="slider slider-nav2-r">

            @if($restaurants)
                @foreach($restaurants as $restaurant)
                    <div>
                        <div class="recently-box">
                            <a href="{{route('single_restaurant.restaurant', $restaurant->slug)}}">
                                <div class="cube-box">
                                    <img src="img/recent_place.png" alt="">
                                </div>
                                <div class="cube-box-footer">
                                    <h4>{{Str::limit($restaurant->title, 15)}}</h4>
                                    <img src="img/location-minify.svg" class="svg location" alt=""><p>{{$restaurant->location->name}}</p>
                                </div>
                            </a>
                        </div>
                    </div>
                @endforeach
            @endif

        </div>

    </div>
</section>
<!-- END RECENTLY ADDED PLACES -->

<!-- START ABOUT US -->
<section id="about-us">
    <div class="container">
        <div class="about-us-left">
            <h2>About us</h2>
            <p class="p-lead">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Accusantium asperiores dignissimos fuga tempore? Consequuntur, dolor dolore dolorum hic id iste magnam nisi, officia quidem sed sit unde. Accusamus accusantium aspernatur at consequatur error excepturi natus quidem, soluta tempore voluptates! Accusamus facere fugiat quae quia voluptas!</p>
            <p class="p-lead p-none-mobile">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Asperiores ducimus facilis illo molestias qui tempora. At consequuntur eaque earum in iste officiis quaerat quasi reiciendis repellendus, velit veniam veritatis voluptatum.</p>
        </div>
        <div class="about-us-right">
            <div class="about-us-right-first">
                <img src="img/event.svg" class="svg event" alt="">
                <div class="about-number">
                    <h2>5000+</h2>
                    <h3>Extraordinary places</h3>
                </div>
            </div>
            <div class="about-us-right-second">
                <img src="img/team.svg" class="svg event team" alt="">
                <div class="about-number">
                    <h2>3400+</h2>
                    <h3>Satisfied users</h3>
                </div>
            </div>
            <div class="about-us-right-three">
                <img src="img/chat-white.svg" class="svg event chat" alt="">
                <div class="about-number">
                    <h2>2800+</h2>
                    <h3>Comments</h3>
                </div>
            </div>
        </div>

    </div>
</section>
<!-- END ABOUT US -->

<!-- START TESTIMONIALS -->
<section id="testimonials">
    <div class="container">
        <h2>Testimonials</h2>
        <img src="img/right-arrow-angle-white-red.svg" class="right right-circle" alt="">
    </div>
    <div class="main-3">
        <div class="slider slider-for-3">
            <div>
                <i class="fas fa-quote-left"></i>
                <div class="testimonial-text">
                    <h2>Lorem Ipsum</h2>
                    <p class="p-lead">Dolor sit amer</p>
                    <p class="p-lead p-margin">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Facere, neque?</p>
                </div>
            </div>
            <div>
                <i class="fas fa-quote-left"></i>
                <div class="testimonial-text">
                    <h2>Lorem Ipsum</h2>
                    <p class="p-lead">Dolor sit amer</p>
                    <p class="p-lead p-margin">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Eum, repellat.</p>
                </div>
            </div>
            <div>
                <i class="fas fa-quote-left"></i>
                <div class="testimonial-text">
                    <h2>Lorem Ipsum</h2>
                    <p class="p-lead">Dolor sit amer</p>
                    <p class="p-lead p-margin">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Nostrum, unde.</p>
                </div>
            </div>
            <div>
                <i class="fas fa-quote-left"></i>
                <div class="testimonial-text">
                    <h2>Lorem Ipsum</h2>
                    <p class="p-lead">Dolor sit amer</p>
                    <p class="p-lead p-margin">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Minima, rerum!</p>
                </div>
            </div>
            <div>
                <i class="fas fa-quote-left"></i>
                <div class="testimonial-text">
                    <h2>Lorem Ipsum</h2>
                    <p class="p-lead">Dolor sit amer</p>
                    <p class="p-lead p-margin">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Natus, tenetur.</p>
                </div>
            </div>
        </div>
        <div class="slider slider-nav-3">
            <div>
                <img src="img/testimonial1.png" class="testimonials-pic" alt="">
            </div>
            <div>
                <img src="img/testimonial2.png" class="testimonials-pic" alt="">
            </div>
            <div>
                <img src="img/testimonial3.png" class="testimonials-pic" alt="">
            </div>
            <div>
                <img src="img/testimonial1.png" class="testimonials-pic" alt="">
            </div>
            <div>
                <img src="img/testimonial2.png" class="testimonials-pic" alt="">
            </div>
        </div>
        <div class="slider slider-nav-3-s">
            <div>
                <img src="img/testimonial1.png" class="testimonials-pic" alt="">
            </div>
            <div>
                <img src="img/testimonial2.png" class="testimonials-pic" alt="">
            </div>
            <div>
                <img src="img/testimonial3.png" class="testimonials-pic" alt="">
            </div>
            <div>
                <img src="img/testimonial1.png" class="testimonials-pic" alt="">
            </div>
            <div>
                <img src="img/testimonial2.png" class="testimonials-pic" alt="">
            </div>
        </div>
        <div class="slider slider-nav-3-r">
            <div>
                <img src="img/testimonial1.png" class="testimonials-pic" alt="">
            </div>
            <div>
                <img src="img/testimonial2.png" class="testimonials-pic" alt="">
            </div>
            <div>
                <img src="img/testimonial3.png" class="testimonials-pic" alt="">
            </div>
            <div>
                <img src="img/testimonial1.png" class="testimonials-pic" alt="">
            </div>
            <div>
                <img src="img/testimonial2.png" class="testimonials-pic" alt="">
            </div>
        </div>

    </div>
</section>
<!-- END TESTIMONIALS -->

<!-- START JOIN OUR COMMUNITY -->
<section id="community">
    <div class="container">
        <div class="community-left">
            <h2>Join our community</h2>
            <p class="p-lead">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Accusamus consectetur magni repellat voluptas voluptatem. Aliquam labore quod sed sit unde.</p>
        </div>
        <div class="community-right">
            <a href="{{route('register.index', app()->getLocale())}}">Register now</a>
        </div>
    </div>
</section>
<!-- END JOIN OUR COMMUNITY -->
@endsection

@section('footer')
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
    <script>
        $("document").ready(function(){
            setTimeout(function(){
                $(".success-message-alert").fadeOut(1000, function() {$(this).remove()});
            }, 5000 );
        });


    </script>
@endsection