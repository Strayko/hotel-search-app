@extends('layouts.frontend')
<title>Home</title>
<style>
    #search-fields {
        margin-top: -250px!important;
        background-color: rgba(221, 221, 221, 0.0)!important;
    }
    #aa-advance-search .aa-advance-search-area .aa-advance-search-top .aa-single-advance-search select {
        height: 50px!important;
    }
    #aa-advance-search .aa-advance-search-area .aa-advance-search-top .aa-single-advance-search .aa-search-btn {
        height: 50px!important;
        margin-top: 40px;
    }
</style>
<link rel="stylesheet" href="{{asset('css/planAndPrice.css')}}">
@section('content')

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
                    <a class="navbar-brand aa-logo" href="/"> Restaurant <span>Logo</span></a>
                    <!-- Image based logo -->
                    <!-- <a class="navbar-brand aa-logo-img" href="index.html"><img src="img/logo.png" alt="logo"></a> -->
                </div>
                <div id="navbar" class="navbar-collapse collapse">
                    <ul id="top-menu" class="nav navbar-nav navbar-right aa-main-nav">
                        <li class="active"><a href="/">HOME</a></li>
                        <li><a href="{{route('plan_and_price.planAndPrice')}}">PLAN AND PRICE</a></li>
                        <li><a href="{{route('show_all.showAll')}}">SHOW ALL</a></li>
                        <li><a href="{{route('locations.locations')}}">LOCATIONS</a></li>
                        <li><a href="{{route('contact.contact')}}">CONTACT</a></li>

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
                    <img src="{{asset('images/slider1.jpg')}}" alt="">
                    <!-- Top slider content -->



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
            <div id="search-fields" class="aa-advance-search-area">
                <div class="form">
                    <div class="aa-advance-search-top">
                        <div class="row">
                            <div class="col-md-12">
                                <div class="aa-single-advance-search">
                                    <form action="{{URL::to('/search')}}" method="POST" role="search">
                                        {{csrf_field()}}
                                        <div class="col-md-4">
                                            <div class="aa-single-advance-search">
                                                <input style="height: 50px;" type="text" name="q" id="address" placeholder="Type Restaurant...">
                                            </div>
                                        </div>

                                        <div class="col-md-4">
                                            <div class="aa-single-advance-search">

                                                    {!! Form::select('name', [''=>'Choose Location'] + $locations, null, ['class'=>'form-control']) !!}

                                            </div>
                                        </div>

                                        <div class="col-md-4">
                                            <div class="aa-single-advance-search">

                                                {!! Form::select('food', [''=>'Choose Food'] + $foods, null, ['class'=>'form-control']) !!}

                                            </div>
                                        </div>

                                        <div class="col-md-4">

                                        </div>

                                        <div class="col-md-4">
                                            <div class="aa-single-advance-search">
                                                <input class="aa-search-btn" type="submit" id="submit" value="Search">
                                            </div>
                                        </div>

                                    </form>
                                    {{--<input type="text" placeholder="Type Your Location">--}}
                                </div>
                            </div>



                        </div>
                    </div>

                </div>
            </div>
        </div>
    </section>
    <!-- / Advance Search -->


    <section id="aa-latest-property">
        <div class="container">
            <div class="aa-latest-property-area">
                <div class="aa-title">
                    <h2>All Locations</h2>
                    <span></span>
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Cum sit ea nobis quae vero voluptatibus.</p>
                </div>
                <div class="aa-latest-properties-content">
                    <div class="row">

                        @if(count($locationss) > 0)
                            @foreach($locationss as $locationn)
                                <div class="col-md-3">
                                    <article class="aa-properties-item">
                                        <a href="{{route('single_location.locationCategory', $locationn->id)}}" class="aa-properties-item-img">
                                            <img width="262" height="199" src="{{$locationn->photo ? $locationn->photo->file : $locationn->noPhoto()}}" alt="img">

                                        </a>
                                        <div class="aa-tag for-sale">
                                            {{$locationn->name}}
                                            (<b>{{$locationn->restaurant->count()}}</b>)
                                        </div>

                                    </article>
                                </div>
                            @endforeach
                        @else
                            <h1 class="text-center">No Locations</h1>
                        @endif


                    </div>
                    <div class="row">
                        <div class="col-sm-12 text-center">

                        </div>
                    </div>
                </div>

            </div>

        </div>

    </section>
    <!-- / Latest property -->


    <!-- Latest property -->
    <section id="aa-latest-property" style="padding: 30px 0 100px 0;">
        <div class="container">
            <div class="aa-latest-property-area">
                <div class="aa-title">
                    <h2>Latest Restaurants</h2>
                    <span></span>
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Cum sit ea nobis quae vero voluptatibus.</p>
                </div>
                <div class="aa-latest-properties-content">
                    <div class="row">
                        @if($restaurants)
                            @foreach($restaurants as $restaurant)
                                <div class="col-md-4">
                                    <article class="aa-properties-item">
                                        <a href="{{route('single_restaurant.restaurant', $restaurant->slug)}}" class="aa-properties-item-img">
                                            <img width="360" height="199" src="{{$restaurant->photo ? $restaurant->photo->file : $restaurant->photoHome()}}" alt="img">
                                        </a>
                                        <div class="aa-tag for-sale">
                                            {{$restaurant->created_at->diffForHumans()}}
                                        </div>
                                        <div class="aa-properties-item-content">
                                            <div class="aa-properties-info">
                                                <span>5 Rooms</span>
                                                <span>2 Beds</span>
                                                <span>3 Baths</span>
                                                <span>1100 SQ FT</span>
                                            </div>
                                            <div class="aa-properties-about" style="height: 12rem">
                                                <h3><a href="{{route('single_restaurant.restaurant', $restaurant->slug)}}">{{$restaurant->title}}</a></h3>
                                                <p>{{Str::limit($restaurant->body, 120)}}</p>
                                            </div>
                                            <div class="aa-properties-detial">
                                            <span class="aa-price">
                                              $35000
                                            </span>
                                                <a href="{{route('single_restaurant.restaurant', $restaurant->slug)}}" class="aa-secondary-btn">View Details</a>
                                            </div>
                                        </div>
                                    </article>
                                </div>
                            @endforeach
                        @endif
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- / Latest property -->


    <section id="aa-latest-property" style="padding: 30px 0 50px 0;">
        <div class="container">
            <div class="aa-latest-property-area">
                <div class="aa-title">
                    <h2>Plan and Price</h2>
                    <span></span>
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Cum sit ea nobis quae vero voluptatibus.</p>
                </div>

                <section id="pricePlans">
                    <ul id="plans">
                        <li class="plan">
                            <ul class="planContainer">
                                <li class="title"><h2>Free</h2></li>
                                <li class="price"><p>FREE</p></li>
                                <li>
                                    <ul class="options">
                                        <li>30 <span>Show</span></li>
                                        <li>Publishing <span>Admin Moderation</span></li>
                                        <li>Period <span>30 days</span></li>
                                        <li><i class="fas fa-check text-success"></i> <span>Main Image</span></li>
                                        <li><i class="fas fa-check text-success"></i> <span>Contact Information</span></li>
                                        <li><i class="fas fa-check text-success"></i> <span>Description</span></li>
                                        <li><i class="fas fa-times"></i> <span>Social Media Links</span></li>
                                        <li><i class="fas fa-times"></i> <span>Opening Hours</span></li>
                                        <li><i class="fas fa-times"></i> <span>Upload PDF (like Menu)</span></li>
                                        <li><i class="fas fa-times"></i> <span>Picture Gallery</span></li>
                                        <li><i class="fas fa-times"></i> <span>Map</span></li>
                                        <li><i class="fas fa-times"></i> <span>Video</span></li>
                                        <li><i class="fas fa-times"></i> <span>Rating System With Comments</span></li>
                                        <li><i class="fas fa-times"></i> <span>(1x Advertising In The <br>Newsletter Per Year)</span></li>
                                        <li><i class="fas fa-times"></i> <span>(Reservation Possible Over ausgang.bayern)</span></li>
                                        <li><i class="fas fa-times"></i> <span>(Photo Upload By Customer <br>Of The Partner Company <br>"With Own Login")</span></li>
                                        <li><i class="fas fa-times"></i> <span>(Info About Current <br>Opening Status)</span></li>
                                        <li><i class="fas fa-times"></i> <span>(So top contribution <br>on home page)</span></li>
                                        <li><i class="fas fa-times"></i> <span>Competition System</span></li>
                                        <li><i class="fas fa-times"></i> <span>Deal Actions</span></li>

                                    </ul>
                                </li>
                                <li class="button"><a href="{{route('register.index')}}">REGISTER</a></li>
                            </ul>
                        </li>

                        <li class="plan">
                            <ul class="planContainer">
                                <li class="title"><h2>Silver</h2></li>
                                <li class="price"><p>€28</p></li>
                                <li>
                                    <ul class="options">
                                        <li>30 <span>Show</span></li>
                                        <li>Publishing <span>Admin Moderation</span></li>
                                        <li>Period <span>365 days</span></li>
                                        <li><i class="fas fa-check text-success"></i> <span>Main Image</span></li>
                                        <li><i class="fas fa-check text-success"></i> <span>Contact Information</span></li>
                                        <li><i class="fas fa-check text-success"></i> <span>Description</span></li>
                                        <li><i class="fas fa-check text-success"></i> <span>Social Media Links</span></li>
                                        <li><i class="fas fa-check text-success"></i> <span>Opening Hours</span></li>
                                        <li><i class="fas fa-check text-success"></i> <span>Upload PDF (like Menu)</span></li>
                                        <li><i class="fas fa-times"></i> <span>Picture Gallery</span></li>
                                        <li><i class="fas fa-times"></i> <span>Map</span></li>
                                        <li><i class="fas fa-times"></i> <span>Video</span></li>
                                        <li><i class="fas fa-times"></i> <span>Rating System With Comments</span></li>
                                        <li><i class="fas fa-times"></i> <span>(1x Advertising In The <br>Newsletter Per Year)</span></li>
                                        <li><i class="fas fa-times"></i> <span>(Reservation Possible Over ausgang.bayern)</span></li>
                                        <li><i class="fas fa-times"></i> <span>(Photo Upload By Customer <br>Of The Partner Company <br>"With Own Login")</span></li>
                                        <li><i class="fas fa-times"></i> <span>(Info About Current <br>Opening Status)</span></li>
                                        <li><i class="fas fa-times"></i> <span>(So top contribution <br>on home page)</span></li>
                                        <li><i class="fas fa-times"></i> <span>Competition System</span></li>
                                        <li><i class="fas fa-times"></i> <span>Deal Actions</span></li>

                                    </ul>
                                </li>
                                <li class="button"><a href="{{route('register.index')}}">REGISTER</a></li>
                            </ul>
                        </li>

                        <li class="plan">
                            <ul class="planContainer">
                                <li class="title"><h2 class="bestPlanTitle">Gold</h2></li>
                                <li class="price"><p class="bestPlanPrice">€46</p></li>
                                <li>
                                    <ul class="options">
                                        <li>100 <span>Show</span></li>
                                        <li>Publishing <span>Admin Moderation</span></li>
                                        <li>Period <span>365 days</span></li>
                                        <li><i class="fas fa-check text-success"></i> <span>Main Image</span></li>
                                        <li><i class="fas fa-check text-success"></i> <span>Contact Information</span></li>
                                        <li><i class="fas fa-check text-success"></i> <span>Description</span></li>
                                        <li><i class="fas fa-check text-success"></i> <span>Social Media Links</span></li>
                                        <li><i class="fas fa-check text-success"></i> <span>Opening Hours</span></li>
                                        <li><i class="fas fa-check text-success"></i> <span>Upload PDF (like Menu)</span></li>
                                        <li><i class="fas fa-check text-success"></i> <span>Picture Gallery</span></li>
                                        <li><i class="fas fa-check text-success"></i> <span>Map</span></li>
                                        <li><i class="fas fa-check text-success"></i> <span>Video</span></li>
                                        <li><i class="fas fa-check text-success"></i> <span>Rating System With Comments</span></li>
                                        <li><i class="fas fa-check text-success"></i> <span>(1x Advertising In The <br>Newsletter Per Year)</span></li>
                                        <li><i class="fas fa-check text-success"></i> <span>(Reservation Possible Over ausgang.bayern)</span></li>
                                        <li><i class="fas fa-check text-success"></i> <span>(Photo Upload By Customer <br>Of The Partner Company <br>"With Own Login")</span></li>
                                        <li><i class="fas fa-check text-success"></i> <span>(Info About Current <br>Opening Status)</span></li>
                                        <li><i class="fas fa-times"></i> <span>(So top contribution <br>on home page)</span></li>
                                        <li><i class="fas fa-times"></i> <span>Competition System</span></li>
                                        <li><i class="fas fa-times"></i> <span>Deal Actions</span></li>

                                    </ul>
                                </li>
                                <li class="button"><a class="bestPlanButton" href="{{route('register.index')}}">REGISTER</a></li>
                            </ul>
                        </li>

                        <li class="plan">
                            <ul class="planContainer">
                                <li class="title"><h2>Platinum</h2></li>
                                <li class="price"><p>€52</p></li>
                                <li>
                                    <ul class="options">
                                        <li>100 <span>Show</span></li>
                                        <li>Publishing <span>Admin Moderation</span></li>
                                        <li>Period <span>365 days</span></li>
                                        <li><i class="fas fa-check text-success"></i> <span>Main Image</span></li>
                                        <li><i class="fas fa-check text-success"></i> <span>Contact Information</span></li>
                                        <li><i class="fas fa-check text-success"></i> <span>Description</span></li>
                                        <li><i class="fas fa-check text-success"></i> <span>Social Media Links</span></li>
                                        <li><i class="fas fa-check text-success"></i> <span>Opening Hours</span></li>
                                        <li><i class="fas fa-check text-success"></i> <span>Upload PDF (like Menu)</span></li>
                                        <li><i class="fas fa-check text-success"></i> <span>Picture Gallery</span></li>
                                        <li><i class="fas fa-check text-success"></i> <span>Map</span></li>
                                        <li><i class="fas fa-check text-success"></i> <span>Video</span></li>
                                        <li><i class="fas fa-check text-success"></i> <span>Rating System With Comments</span></li>
                                        <li><i class="fas fa-check text-success"></i> <span>(1x Advertising In The <br>Newsletter Per Year)</span></li>
                                        <li><i class="fas fa-check text-success"></i> <span>(Reservation Possible Over ausgang.bayern)</span></li>
                                        <li><i class="fas fa-check text-success"></i> <span>(Photo Upload By Customer <br>Of The Partner Company <br>"With Own Login")</span></li>
                                        <li><i class="fas fa-check text-success"></i> <span>(Info About Current <br>Opening Status)</span></li>
                                        <li><i class="fas fa-check text-success"></i> <span>(So top contribution <br>on home page)</span></li>
                                        <li><i class="fas fa-check text-success"></i> <span>Competition System</span></li>
                                        <li><i class="fas fa-check text-success"></i> <span>Deal Actions</span></li>
                                    </ul>
                                </li>
                                <li class="button"><a href="{{route('register.index')}}">REGISTER</a></li>
                            </ul>
                        </li>
                    </ul> <!-- End ul#plans -->
                </section>

            </div>
        </div>
    </section>


    <section id="aa-latest-property" style="padding: 30px 0 100px 0;">
        <div class="container">
            <div class="aa-latest-property-area">
                <div class="aa-title">
                    <h2>About us</h2>
                    <span></span>
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Cum sit ea nobis quae vero voluptatibus.</p>
                </div>

                <div class="row">
                    <div class="col-md-12">
                        <div class="aa-about-us-area">
                            <div class="row">
                                <div class="col-md-5">
                                    <div class="aa-about-us-left">
                                        <img src="{{asset('images/about-us.jpg')}}" alt="image">
                                    </div>
                                </div>
                                <div class="col-md-7">
                                    <div class="aa-about-us-right">
                                        <div class="aa-title">

                                        </div>
                                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Repellat ab dignissimos vitae maxime adipisci blanditiis rerum quae quos! Id at rerum maxime modi fugit vero corrupti, ad atque sit laborum ipsum sunt blanditiis suscipit odio, aut nostrum assumenda nobis rem a maiores temporibus non commodi laboriosam, doloremque expedita! Corporis, provident?</p>
                                        <ul>
                                            <li>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Esse, blanditiis.</li>
                                            <li>Lorem ipsum dolor sit amet, consectetur adipisicing elit.</li>
                                            <li>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quia.</li>
                                            <li>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Esse, blanditiis.</li>
                                            <li>Lorem ipsum dolor sit amet, consectetur adipisicing elit.</li>
                                            <li>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quia.</li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>


@endsection

@section('footer')

@endsection