@extends('layouts.admin')
<title>Restaurant</title>
<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyA1jIRmJ7b6Zxqwr65GHiuVVj8j-RXuke8&sensor=false&libraries=places"></script>
<style>
    #map_canvas { width:100%; height:300px; }
    #pointers {
        cursor: pointer!important;
    }
    #grey-color {
        color: grey;
    }
</style>
{{--<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>--}}

<script type="text/javascript">

    var geocoder;
    var map;
    var lat;
    var lng;

    function initialize() {
        geocoder = new google.maps.Geocoder();
        var latlng = new google.maps.LatLng(46.818188, 8.227511999999933);
        var myOptions = {
            zoom: 16,
            center: latlng,
            mapTypeId: google.maps.MapTypeId.ROADMAP
        };
        map = new google.maps.Map(document.getElementById("map_canvas"), myOptions);
    }

    function codeAddress() {
        var address = document.getElementById("address").value;
        geocoder.geocode( { 'address': address}, function(results, status) {
            if (status == google.maps.GeocoderStatus.OK) {
                map.setCenter(results[0].geometry.location);
                var marker = new google.maps.Marker;
                document.getElementById('lat').value = results[0].geometry.location.lat();
                document.getElementById('lng').value = results[0].geometry.location.lng();

            } else {
                document.getElementById('lat').value = '';
                document.getElementById('lng').value = '';
                alert("YOU HAVE NOT SELECTED ANYTHING OR IS INCORRECT GOOGLE MAP FORMAT!");
            }
        });
    }

    function init() {
        var input = document.getElementById('address');
        var autocomplete = new google.maps.places.Autocomplete(input);
    }

    google.maps.event.addDomListener(window, 'load', init);

</script>
@section('content')
    <body onload="initialize()">
    <nav class="navbar navbar-expand-sm navbar-dark bg-dark p-0">
        <div class="container">
            <a href="/" class="navbar-brand">Home</a>
            <button class="navbar-toggler" data-toggle="collapse" data-target="#navbarCollapse">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collpase navbar-collapse" id="navbarCollapse">
                <ul class="navbar-nav">
                    <li class="nav-item px-2">
                        <a href="/admin2" class="nav-link">Dashboard</a>
                    </li>
                    <li class="nav-item px-2">
                        <a href="{{route('restaurants.index')}}" class="nav-link active">Restaurants</a>
                    </li>
                    <li class="nav-item px-2">
                        <a href="{{route('packages.index')}}" class="nav-link">Packages</a>
                    </li>
                    <li class="nav-item px-2">
                        <a href="{{route('users.index')}}" class="nav-link">Users</a>
                    </li>
                    <li class="nav-item px-2">
                        <a href="{{route('media.index')}}" class="nav-link">Media</a>
                    </li>
                    <li class="nav-item px-2">
                        <a href="{{route('comments.index')}}" class="nav-link">Comments</a>
                    </li>
                    <li class="nav-item px-2">
                        <a href="{{route('locations.index')}}" class="nav-link">Locations</a>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            Others
                        </a>
                        <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                            <a class="dropdown-item" href="{{route('foods.index')}}">Foods</a>
                            <a class="dropdown-item" href="{{route('distance.index')}}">Distance</a>
                        </div>
                    </li>
                </ul>

                <ul class="navbar-nav ml-auto">
                    <li class="nav-item dropdown mr-3">
                        <a href="#" class="nav-link dropdown-toggle" data-toggle="dropdown">
                            <i class="fas fa-user"></i> {{Str::limit(Auth::user()->name, 14)}}
                        </a>
                        <div class="dropdown-menu">
                            <a href="{{route('users.edit', Auth::user()->id)}}" class="dropdown-item">
                                <i class="fas fa-user-circle"></i> Profile
                            </a>
                            <a href="settings.html" class="dropdown-item">
                                <i class="fas fa-cog"></i> Settings
                            </a>
                        </div>
                    </li>
                    <li class="nav-item">
                        <a href="{{route('logout')}}" onclick="event.preventDefault();
                         document.getElementById('logout-form').submit();" class="nav-link">
                            <i class="fas fa-user-times"></i> {{ __('Logout') }}
                        </a>
                        <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                            @csrf
                        </form>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

    <!-- HEADER -->
    <header id="main-header" class="py-2 bg-light text-black">
        <div class="container">
            <div class="row">
                <div class="col-md-6">
                    <h1><i class="fas fa-utensils"></i> Create Restaurant</h1>
                </div>
            </div>
        </div>
    </header>

    <!-- ACTIONS -->
    <section id="actions" class="py-4 mb-4 bg-light">
        <div class="container">
            <div class="row">
                <div class="col-md-3">
                    <a href="/admin2" class="btn btn-primary btn-block">
                        <i class="fas fa-arrow-left"></i> Back To Dashboard
                    </a>
                </div>
                <div class="col-md-3">

                </div>
            </div>
        </div>
    </section>

    <div class="container">
        {{--<h1>Edit User</h1>--}}
        <div class="row">
            <div class="col-md-6">
                <div id="map_canvas"></div>

            </div>
            <div class="col-md-6 order-first">
                @include('includes.user_form_error')
                <div class="card">
                    <div class="card-header">
                        <h4>Restaurant</h4>

                    </div>

                    <div class="card-body">


                        {{--<div>--}}
                        {{--<input id="address" type="text" onchange="codeAddress()">--}}
                        {{--<input type="button" value="Localizar!" onclick="codeAddress()"><br>--}}
                        {{--</div>--}}

                        {!! Form::open(['method'=>'POST', 'action'=>'AdminRestaurantsController@store', 'files'=>true]) !!}
                        {{csrf_field()}}
                        <div class="form-group">
                            {!! Form::label('title', 'Name:') !!}
                            {!! Form::text('title', null, ['class'=>'form-control']) !!}
                        </div>
                        <div class="form-group">
                            {!! Form::label('location_id', 'City:') !!}
                            {!! Form::select('location_id', ['' => 'Choose Location'] + $locations, null, ['class'=>'form-control']) !!}
                        </div>

                        <div class="form-group">
                            {!! Form::label('address', 'Address Google Map:') !!}
                            {!! Form::text('address', null, ['class'=>'form-control', 'placeholder'=>'example: Passau, Padu Innstrasse', 'onchange'=>'codeAddress()']) !!}

                            <div class="custom-control custom-checkbox mb-3">
                            <input type="checkbox" id="yourBox" class="custom-control-input" />
                            <label id="pointers" class="custom-control-label" for="yourBox"><span id="grey-color">Not registered on google map</span></label>
                            </div>
                        </div>

                        <div class="form-group">
                            {!! Form::label('food_id', 'Food:') !!}
                            {!! Form::select('food_id', ['' => 'Choose Food'] + $foods, null, ['class'=>'form-control']) !!}
                        </div>

                        <div class="form-group">
                            {!! Form::label('body', 'Description:') !!}
                            {!! Form::textarea('body', null, ['class'=>'form-control', 'rows'=>3]) !!}
                        </div>

                        <div class="custom-file mb-3">
                            {!! Form::label('photo_id', 'Upload Picture', ['class'=>'custom-file-label', 'id'=>'pointers']) !!}
                            {!! Form::file('photo_id', null, ['class'=>'custom-file-input']) !!}
                        </div>
                        <div class="custom-file mb-3">
                            {!! Form::label('pdf_id', 'Upload PDF', ['class'=>'custom-file-label', 'id'=>'pointers']) !!}
                            {!! Form::file('pdf_id', null, ['class'=>'custom-file-input']) !!}
                        </div>

                        <div class="form-group" style="display:none;">
                            {!! Form::label('lat', 'Lat:') !!}
                            {!! Form::text('lat', null) !!}
                        </div>
                        <div class="form-group" style="display:none;">
                            {!! Form::label('lng', 'Lng:') !!}
                            {!! Form::text('lng', null) !!}
                        </div>


                            <div class="form-group">
                                <div class="row d-flex justify-content-end">
                                    <div class="col-md-6">
                                        <button type="submit" class="btn btn-success btn-block"><i class="fas fa-utensils"></i> Create Restaurant</button>
                                        {!! Form::close() !!}

                                    </div>
                                </div>
                            </div>

                    </div>
                </div>

            </div>


        </div>
    </div>
    </body>
@endsection

@section('footer')
    <script>
        document.getElementById('yourBox').onchange = function() {
            document.getElementById('address').disabled = this.checked;
            document.getElementById('address').value = '';
            document.getElementById('lat').value = '';
            document.getElementById('lng').value = '';
        };
    </script>
@endsection