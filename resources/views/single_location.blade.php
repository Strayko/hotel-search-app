@extends('layouts.frontend')
<title>Location</title>
<style>
    #aa-property-header {
        background-image: url("{{asset('images/header11.jpg')}}")!important;
    }
</style>
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
                        <li><a href="/">HOME</a></li>

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

    <!-- Start Proerty header  -->
    <section id="aa-property-header">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="aa-property-header-inner">
                        <h2>Restaurants Location</h2>
                        <ol class="breadcrumb">
                            <li><a href="/">HOME</a></li>
                            <li class="active">Restaurants Location</li>
                        </ol>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- End Proerty header  -->


    <section id="aa-latest-property">
        <div class="container">
            <div class="aa-latest-property-area">
                <div class="aa-title">
                    <h2>Restaurants</h2>
                    <span></span>
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Cum sit ea nobis quae vero voluptatibus.</p>
                </div>
                <div class="aa-latest-properties-content">
                    <div class="row">
                        @if(count($restaurantLocation) > 0)
                            @foreach($restaurantLocation as $locations)
                                <div class="col-md-4">
                                    <article class="aa-properties-item">
                                        <a href="{{route('single_restaurant.restaurant', $locations->slug)}}" class="aa-properties-item-img">
                                            <img width="360" height="199" src="{{$locations->photo ? $locations->photo->file : $locations->photoHome()}}" alt="img">
                                        </a>
                                        <div class="aa-tag for-sale">
                                            {{$locations->created_at->diffForHumans()}}
                                        </div>
                                        <div class="aa-properties-item-content">
                                            <div class="aa-properties-info">
                                                <span>5 Rooms</span>
                                                <span>2 Beds</span>
                                                <span>3 Baths</span>
                                                <span>1100 SQ FT</span>
                                            </div>
                                            <div class="aa-properties-about" style="height: 12rem">
                                                <h3><a href="{{route('single_restaurant.restaurant', $locations->slug)}}">{{$locations->title}}</a></h3>
                                                <p>{{Str::limit($locations->body, 120)}}</p>
                                            </div>
                                            <div class="aa-properties-detial">
                                            <span class="aa-price">
                                              $35000
                                            </span>
                                                <a href="{{route('single_restaurant.restaurant', $locations->slug)}}" class="aa-secondary-btn">View Details</a>
                                            </div>
                                        </div>
                                    </article>
                                </div>
                            @endforeach
                            @else
                            <h2 class="text-center">No Restaurants</h2>
                        @endif

                    </div>
                    <div class="row">
                        <div class="col-sm-12 text-center">
                            {{--{{$restaurants->onEachSide(1)->links()}}--}}
                        </div>
                    </div>
                </div>

            </div>

        </div>

    </section>
    <!-- / Latest property -->


@endsection

@section('footer')

@endsection