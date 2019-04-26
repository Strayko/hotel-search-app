@extends('layouts.frontend')
<title>Locations</title>
<style>
    #aa-property-header {
        background-image: url("{{asset('images/header11.jpg')}}")!important;
    }
</style>
<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyA1jIRmJ7b6Zxqwr65GHiuVVj8j-RXuke8&sensor=false&libraries=places"></script>
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
                        <h2>Search</h2>
                        <ol class="breadcrumb">
                            <li><a href="/">HOME</a></li>
                            <li class="active">Search</li>
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
                    <h2>All Search</h2>
                    <span></span>
                    @if(isset($details))
                    <p>The Search results for your query <b>{{$query}}</b> are :</p>

                </div>
                <div class="aa-latest-properties-content">
                    <div class="row">
                        {{--@if(isset($details))--}}
                            @foreach($details as $user)
                                <div class="col-md-4">
                                    <article class="aa-properties-item">
                                        <a href="{{route('single_restaurant.restaurant', $user->slug)}}" class="aa-properties-item-img">
                                            <img width="360" height="199" src="{{$user->photo ? $user->photo->file : $user->photoHome()}}" alt="img">
                                        </a>
                                        <div class="aa-tag for-sale">
                                            {{$user->created_at->diffForHumans()}}
                                        </div>
                                        <div class="aa-properties-item-content">
                                            <div class="aa-properties-info">
                                                <span>5 Rooms</span>
                                                <span>2 Beds</span>
                                                <span>3 Baths</span>
                                                <span>1100 SQ FT</span>
                                            </div>
                                            <div class="aa-properties-about" style="height: 12rem">
                                                <h3><a href="{{route('single_restaurant.restaurant', $user->slug)}}">{{$user->title}}</a></h3>
                                                <p>{{Str::limit($user->body, 120)}}</p>
                                            </div>
                                            <div class="aa-properties-detial">
                                            <span class="aa-price">
                                              $35000
                                            </span>
                                                <a href="{{route('single_restaurant.restaurant', $user->slug)}}" class="aa-secondary-btn">View Details</a>
                                            </div>
                                        </div>
                                    </article>
                                </div>

                            @endforeach
                        @elseif(isset($message))
                            <h3>{{$message}}</h3>

                        @endif



                    </div>

                    <div class="container">
                        <div class="row">
                            <div id="map" style="width: 100%; height: 400px; margin-top: 5rem;">{!! Mapper::render() !!}</div>
                        </div>
                    </div>

                    {{--<div class="row">--}}
                        {{--<div class="col-sm-12 text-center">--}}
                            {{--{{$details->onEachSide(1)->links()}}--}}
                        {{--</div>--}}
                    {{--</div>--}}
                </div>



            </div>

        </div>

    </section>
    <!-- / Latest property -->


@endsection

@section('footer')
    <script type="text/javascript">

        function onMapLoad()
        {
            var map, infoWindow;
            function initMap() {
                map = new google.maps.Map(document.getElementById('map'), {
                    center: {lat: -34.397, lng: 150.644},
                    zoom: 6
                });
                infoWindow = new google.maps.InfoWindow;

                // Try HTML5 geolocation.
                if (navigator.geolocation) {
                    navigator.geolocation.getCurrentPosition(function(position) {
                        var pos = {
                            lat: position.coords.latitude,
                            lng: position.coords.longitude
                        };

                        infoWindow.setPosition(pos);
                        infoWindow.setContent('Location found.');
                        infoWindow.open(map);
                        map.setCenter(pos);
                    }, function() {
                        handleLocationError(true, infoWindow, map.getCenter());
                    });
                } else {
                    // Browser doesn't support Geolocation
                    handleLocationError(false, infoWindow, map.getCenter());
                }
            }

            function handleLocationError(browserHasGeolocation, infoWindow, pos) {
                infoWindow.setPosition(pos);
                infoWindow.setContent(browserHasGeolocation ?
                    'Error: The Geolocation service failed.' :
                    'Error: Your browser doesn\'t support geolocation.');
                infoWindow.open(map);
            }

        }
    </script>
@endsection