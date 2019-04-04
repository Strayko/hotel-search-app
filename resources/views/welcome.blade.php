@extends('layouts.frontend')
<title>Home</title>
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
                            {{--<div class="col-md-2">--}}
                                {{--<div class="aa-single-advance-search">--}}
                                    {{--<select>--}}
                                        {{--<option value="0" selected>Category</option>--}}
                                        {{--<option value="1">Flat</option>--}}
                                        {{--<option value="2">Land</option>--}}
                                        {{--<option value="3">Plot</option>--}}
                                        {{--<option value="4">Commercial</option>--}}
                                    {{--</select>--}}
                                {{--</div>--}}
                            {{--</div>--}}
                            {{--<div class="col-md-2">--}}
                                {{--<div class="aa-single-advance-search">--}}
                                    {{--<select>--}}
                                        {{--<option value="0" selected>Type</option>--}}
                                        {{--<option value="1">Flat</option>--}}
                                        {{--<option value="2">Land</option>--}}
                                        {{--<option value="3">Plot</option>--}}
                                        {{--<option value="4">Commercial</option>--}}
                                    {{--</select>--}}
                                {{--</div>--}}
                            {{--</div>--}}
                            {{--<div class="col-md-2">--}}
                                {{--<div class="aa-single-advance-search">--}}
                                    {{--<select>--}}
                                        {{--<option value="0" selected>Type</option>--}}
                                        {{--<option value="1">Flat</option>--}}
                                        {{--<option value="2">Land</option>--}}
                                        {{--<option value="3">Plot</option>--}}
                                        {{--<option value="4">Commercial</option>--}}
                                    {{--</select>--}}
                                {{--</div>--}}
                            {{--</div>--}}
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


    <!-- Latest property -->
    <section id="aa-latest-property">
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

@endsection

@section('footer')

@endsection