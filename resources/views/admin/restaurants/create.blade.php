{{--@extends('layouts.admin')--}}
{{--<title>Restaurant</title>--}}
{{--<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyA1jIRmJ7b6Zxqwr65GHiuVVj8j-RXuke8&sensor=false&libraries=places"></script>--}}
{{--<style>--}}
{{--    #map_canvas { width:100%; height:300px; }--}}
{{--    #pointers {--}}
{{--        cursor: pointer!important;--}}
{{--    }--}}
{{--    #grey-color {--}}
{{--        color: grey;--}}
{{--    }--}}
{{--</style>--}}
{{--<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>--}}

{{--<script type="text/javascript">--}}

{{--    var geocoder;--}}
{{--    var map;--}}
{{--    var lat;--}}
{{--    var lng;--}}

{{--    function initialize() {--}}
{{--        geocoder = new google.maps.Geocoder();--}}
{{--        var latlng = new google.maps.LatLng(46.818188, 8.227511999999933);--}}
{{--        var myOptions = {--}}
{{--            zoom: 16,--}}
{{--            center: latlng,--}}
{{--            mapTypeId: google.maps.MapTypeId.ROADMAP--}}
{{--        };--}}
{{--        map = new google.maps.Map(document.getElementById("map_canvas"), myOptions);--}}
{{--    }--}}

{{--    function codeAddress() {--}}
{{--        var address = document.getElementById("address").value;--}}
{{--        geocoder.geocode( { 'address': address}, function(results, status) {--}}
{{--            if (status == google.maps.GeocoderStatus.OK) {--}}
{{--                map.setCenter(results[0].geometry.location);--}}
{{--                var marker = new google.maps.Marker;--}}
{{--                document.getElementById('lat').value = results[0].geometry.location.lat();--}}
{{--                document.getElementById('lng').value = results[0].geometry.location.lng();--}}

{{--            } else {--}}
{{--                document.getElementById('lat').value = '';--}}
{{--                document.getElementById('lng').value = '';--}}
{{--                alert("YOU HAVE NOT SELECTED ANYTHING OR IS INCORRECT GOOGLE MAP FORMAT!");--}}
{{--            }--}}
{{--        });--}}
{{--    }--}}

{{--    function init() {--}}
{{--        var input = document.getElementById('address');--}}
{{--        var autocomplete = new google.maps.places.Autocomplete(input);--}}
{{--    }--}}

{{--    google.maps.event.addDomListener(window, 'load', init);--}}

{{--</script>--}}
{{--@section('content')--}}
{{--    <body onload="initialize()">--}}
{{--    <nav class="navbar navbar-expand-sm navbar-dark bg-dark p-0">--}}
{{--        <div class="container">--}}
{{--            <a href="/" class="navbar-brand">Home</a>--}}
{{--            <button class="navbar-toggler" data-toggle="collapse" data-target="#navbarCollapse">--}}
{{--                <span class="navbar-toggler-icon"></span>--}}
{{--            </button>--}}
{{--            <div class="collpase navbar-collapse" id="navbarCollapse">--}}
{{--                <ul class="navbar-nav">--}}
{{--                    <li class="nav-item px-2">--}}
{{--                        <a href="/admin2" class="nav-link">Dashboard</a>--}}
{{--                    </li>--}}
{{--                    <li class="nav-item px-2">--}}
{{--                        <a href="{{route('restaurants.index')}}" class="nav-link active">Restaurants</a>--}}
{{--                    </li>--}}
{{--                    <li class="nav-item px-2">--}}
{{--                        <a href="{{route('packages.index')}}" class="nav-link">Packages</a>--}}
{{--                    </li>--}}
{{--                    <li class="nav-item px-2">--}}
{{--                        <a href="{{route('users.index')}}" class="nav-link">Users</a>--}}
{{--                    </li>--}}
{{--                    <li class="nav-item px-2">--}}
{{--                        <a href="{{route('media.index')}}" class="nav-link">Media</a>--}}
{{--                    </li>--}}
{{--                    <li class="nav-item px-2">--}}
{{--                        <a href="{{route('comments.index')}}" class="nav-link">Comments</a>--}}
{{--                    </li>--}}
{{--                    <li class="nav-item px-2">--}}
{{--                        <a href="{{route('locations.index')}}" class="nav-link">Locations</a>--}}
{{--                    </li>--}}
{{--                    <li class="nav-item dropdown">--}}
{{--                        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">--}}
{{--                            Others--}}
{{--                        </a>--}}
{{--                        <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">--}}
{{--                            <a class="dropdown-item" href="{{route('foods.index')}}">Foods</a>--}}
{{--                            <a class="dropdown-item" href="{{route('distance.index')}}">Distance</a>--}}
{{--                            <a class="dropdown-item" href="{{route('blog.index')}}">Blog</a>--}}
{{--                        </div>--}}
{{--                    </li>--}}
{{--                </ul>--}}

{{--                <ul class="navbar-nav ml-auto">--}}
{{--                    <li class="nav-item dropdown mr-3">--}}
{{--                        <a href="#" class="nav-link dropdown-toggle" data-toggle="dropdown">--}}
{{--                            <i class="fas fa-user"></i> {{Str::limit(Auth::user()->name, 14)}}--}}
{{--                        </a>--}}
{{--                        <div class="dropdown-menu">--}}
{{--                            <a href="{{route('users.edit', Auth::user()->id)}}" class="dropdown-item">--}}
{{--                                <i class="fas fa-user-circle"></i> Profile--}}
{{--                            </a>--}}
{{--                            <a href="settings.html" class="dropdown-item">--}}
{{--                                <i class="fas fa-cog"></i> Settings--}}
{{--                            </a>--}}
{{--                        </div>--}}
{{--                    </li>--}}
{{--                    <li class="nav-item">--}}
{{--                        <a href="{{route('logout')}}" onclick="event.preventDefault();--}}
{{--                         document.getElementById('logout-form').submit();" class="nav-link">--}}
{{--                            <i class="fas fa-user-times"></i> {{ __('Logout') }}--}}
{{--                        </a>--}}
{{--                        <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">--}}
{{--                            @csrf--}}
{{--                        </form>--}}
{{--                    </li>--}}
{{--                </ul>--}}
{{--            </div>--}}
{{--        </div>--}}
{{--    </nav>--}}

{{--    <!-- HEADER -->--}}
{{--    <header id="main-header" class="py-2 bg-light text-black">--}}
{{--        <div class="container">--}}
{{--            <div class="row">--}}
{{--                <div class="col-md-6">--}}
{{--                    <h1><i class="fas fa-utensils"></i> Create Restaurant</h1>--}}
{{--                </div>--}}
{{--            </div>--}}
{{--        </div>--}}
{{--    </header>--}}

{{--    <!-- ACTIONS -->--}}
{{--    <section id="actions" class="py-4 mb-4 bg-light">--}}
{{--        <div class="container">--}}
{{--            <div class="row">--}}
{{--                <div class="col-md-3">--}}
{{--                    <a href="/admin2" class="btn btn-primary btn-block">--}}
{{--                        <i class="fas fa-arrow-left"></i> Back To Dashboard--}}
{{--                    </a>--}}
{{--                </div>--}}
{{--                <div class="col-md-3">--}}

{{--                </div>--}}
{{--            </div>--}}
{{--        </div>--}}
{{--    </section>--}}

{{--    <div class="container">--}}
{{--        --}}{{--<h1>Edit User</h1>--}}
{{--        <div class="row">--}}
{{--            <div class="col-md-6">--}}
{{--                <div id="map_canvas"></div>--}}

{{--            </div>--}}
{{--            <div class="col-md-6 order-first">--}}
{{--                @include('includes.user_form_error')--}}
{{--                <div class="card">--}}
{{--                    <div class="card-header">--}}
{{--                        <h4>Restaurant</h4>--}}

{{--                    </div>--}}

{{--                    <div class="card-body">--}}


{{--                        --}}{{--<div>--}}
{{--                        --}}{{--<input id="address" type="text" onchange="codeAddress()">--}}
{{--                        --}}{{--<input type="button" value="Localizar!" onclick="codeAddress()"><br>--}}
{{--                        --}}{{--</div>--}}

{{--                        {!! Form::open(['method'=>'POST', 'action'=>'AdminRestaurantsController@store', 'files'=>true]) !!}--}}
{{--                        {{csrf_field()}}--}}
{{--                        <div class="form-group">--}}
{{--                            {!! Form::label('title', 'Name:') !!}--}}
{{--                            {!! Form::text('title', null, ['class'=>'form-control']) !!}--}}
{{--                        </div>--}}
{{--                        <div class="form-group">--}}
{{--                            {!! Form::label('location_id', 'City:') !!}--}}
{{--                            {!! Form::select('location_id', ['' => 'Choose Location'] + $locations, null, ['class'=>'form-control']) !!}--}}
{{--                        </div>--}}

{{--                        <div class="form-group">--}}
{{--                            {!! Form::label('address', 'Address Google Map:') !!}--}}
{{--                            {!! Form::text('address', null, ['class'=>'form-control', 'placeholder'=>'example: Passau, Padu Innstrasse', 'onchange'=>'codeAddress()']) !!}--}}

{{--                            <div class="custom-control custom-checkbox mb-3">--}}
{{--                            <input type="checkbox" id="yourBox" class="custom-control-input" />--}}
{{--                            <label id="pointers" class="custom-control-label" for="yourBox"><span id="grey-color">Not registered on google map</span></label>--}}
{{--                            </div>--}}
{{--                        </div>--}}

{{--                        <div class="form-group">--}}
{{--                            {!! Form::label('food_id', 'Food:') !!}--}}
{{--                            {!! Form::select('food_id', ['' => 'Choose Food'] + $foods, null, ['class'=>'form-control']) !!}--}}
{{--                        </div>--}}

{{--                        <div class="form-group">--}}
{{--                            {!! Form::label('body', 'Description:') !!}--}}
{{--                            {!! Form::textarea('body', null, ['class'=>'form-control', 'rows'=>3]) !!}--}}
{{--                        </div>--}}

{{--                        <div class="custom-file mb-3">--}}
{{--                            {!! Form::label('photo_id', 'Upload Picture', ['class'=>'custom-file-label', 'id'=>'pointers']) !!}--}}
{{--                            {!! Form::file('photo_id', null, ['class'=>'custom-file-input']) !!}--}}
{{--                        </div>--}}
{{--                        <div class="custom-file mb-3">--}}
{{--                            {!! Form::label('pdf_id', 'Upload PDF', ['class'=>'custom-file-label', 'id'=>'pointers']) !!}--}}
{{--                            {!! Form::file('pdf_id', null, ['class'=>'custom-file-input']) !!}--}}
{{--                        </div>--}}

{{--                        <div class="form-group" style="display:none;">--}}
{{--                            {!! Form::label('lat', 'Lat:') !!}--}}
{{--                            {!! Form::text('lat', null) !!}--}}
{{--                        </div>--}}
{{--                        <div class="form-group" style="display:none;">--}}
{{--                            {!! Form::label('lng', 'Lng:') !!}--}}
{{--                            {!! Form::text('lng', null) !!}--}}
{{--                        </div>--}}


{{--                            <div class="form-group">--}}
{{--                                <div class="row d-flex justify-content-end">--}}
{{--                                    <div class="col-md-6">--}}
{{--                                        <button type="submit" class="btn btn-success btn-block"><i class="fas fa-utensils"></i> Create Restaurant</button>--}}
{{--                                        {!! Form::close() !!}--}}

{{--                                    </div>--}}
{{--                                </div>--}}
{{--                            </div>--}}

{{--                    </div>--}}
{{--                </div>--}}

{{--            </div>--}}


{{--        </div>--}}
{{--    </div>--}}
{{--    </body>--}}
{{--@endsection--}}

{{--@section('footer')--}}
{{--    <script>--}}
{{--        document.getElementById('yourBox').onchange = function() {--}}
{{--            document.getElementById('address').disabled = this.checked;--}}
{{--            document.getElementById('address').value = '';--}}
{{--            document.getElementById('lat').value = '';--}}
{{--            document.getElementById('lng').value = '';--}}
{{--        };--}}
{{--    </script>--}}
{{--@endsection--}}










        <!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    <!-- CUSTOM STYLE -->
    <link rel="stylesheet" href="{{asset('css/admin.css')}}" type="text/css" >
    <link rel="stylesheet" href="{{asset('css/adminMediaQuery.css')}}" type="text/css" >

    <!-- FONT AWESOME -->
    <script src="https://kit.fontawesome.com/003e33b51d.js"></script>

    <!-- HTML5 shiv and Respond.js IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
    <script src="https://cdnjscloudflare.com/ajax/libs/html5shiv/3.7.3/html5shiv.min.js"></script>
    <script src="https://cdnjscloudflare.com/ajax/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.0/jquery.min.js"></script>
    <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyA1jIRmJ7b6Zxqwr65GHiuVVj8j-RXuke8&sensor=false&libraries=places"></script>
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
    <style>
        input.invalid {
            background-color: #ffdddd!important;
        }
        select.invalid {
            background-color: #ffdddd!important;
        }
        textarea.invalid {
            background-color: #ffdddd!important;
        }
        .tab {
            display: none;
        }

        button:hover {
            opacity: 0.8;
        }
        #prevBtn {
            background-color: #bbbbbb;
        }
        .step {
            height: 15px;
            width: 15px;
            margin: 0 2px;
            background-color: #bbbbbb;
            border: none;
            border-radius: 50%;
            display: inline-block;
            opacity: 0.5;
        }
        .step.active {
            opacity: 1;
        }
        .step.finish {
            background-color: #77a1ee;
        }
        #yourBox {
            -ms-transform: scale(0.7); /* IE */
            -moz-transform: scale(0.7); /* FF */
            -webkit-transform: scale(0.7); /* Safari and Chrome */
            -o-transform: scale(0.7); /* Opera */
            transform: scale(0.7);
            margin-bottom: 11px;
        }
        #checkbox-text {
            font-size: 12px;
            position: absolute;
            margin-top: 4px;
            color: grey;
        }
        #address {
            margin-bottom: 0;
        }
        #margin-top-label {
            margin-top: 8px;
        }
        #opening {
            margin-bottom: 0;
        }
        #closing {
            margin-bottom: 0;
        }
        #label-grey-block {
            display: block;
            margin-top: 11px;
        }
        .label-grey-size {
            font-size: 12px!important;
            float: right;
        }
        .form-buttons .form-next {
            font-family: AvenirNextLTPro-Regular, 'sans-serif';
        }
        .form-buttons .form-previous {
            font-family: AvenirNextLTPro-Regular, 'sans-serif';
        }
        #selectorLng {
            border: 1px solid #CACACA;
            border-radius: 15px;
            float: right;
        }
    </style>

    <title>Dashboard</title>
</head>
<body onload="initialize()">

<!-- START MENU -->
<section id="admin2-dashboard">
    <div class="admin2-menu">
        <ol>
            <a href="/{{$parametarExport}}"><li><img src="{{asset('img/logo-white.svg')}}" alt=""></li></a>
            <a href="/{{$parametarExport}}"><li class="p-lead home-menu-toggle">Home</li></a>
            <a href="{{route('user.edit', [app()->getLocale(), Auth::user()->id])}}"><p class="p-lead admin-menu-name">{{Auth::user()->name}}</p></a>
            <hr>
            <a href="/{{$parametarExport}}/admin2"><li class="p-lead"><i class="fas fa-home"></i> Dashboard</li></a>
            <a href="{{route('restaurants.index', app()->getLocale())}}"><li class="p-lead active"><i class="fas fa-utensils"></i> Restaurants</li></a>
            <a href="{{route('packages.index', app()->getLocale())}}"><li class="p-lead"><i class="fas fa-box"></i> Packages</li></a>
            <a href="{{route('users.index', app()->getLocale())}}"><li class="p-lead"><i class="fas fa-users"></i> Users</li></a>
            <a href="{{route('media.index', app()->getLocale())}}"><li class="p-lead"><i class="fas fa-camera"></i> Media</li></a>
            <a href="{{route('comments.index', app()->getLocale())}}"><li class="p-lead"><i class="fas fa-comments"></i> Comments</li></a>
            <a href="{{route('locations.index', app()->getLocale())}}"><li class="p-lead"><i class="fas fa-map-marker-alt"></i> Locations</li></a>
            <a href="{{route('foods.index', app()->getLocale())}}"><li class="p-lead"><i class="fas fa-hamburger"></i> Foods</li></a>
            <a href="{{route('distance.index', app()->getLocale())}}"><li class="p-lead"><i class="fab fa-font-awesome-flag"></i> Distances</li></a>
            <a href="{{route('blog.index', app()->getLocale())}}"><li class="p-lead"><i class="fab fa-blogger-b"></i> Blog</li></a>
            <a href="{{route('logout', app()->getLocale())}}" onclick="event.preventDefault();
            document.getElementById('logout-form').submit();"><p class="p-lead logout-menu-show"><i class="fas fa-sign-out-alt"></i> {{__('Logout')}}</p></a>
            <form id="logout-form" action="{{ route('logout', app()->getLocale()) }}" method="POST" style="display: none;">
                @csrf
            </form>
        </ol>
    </div>
    <!-- END MENU -->

    <!-- START RESTAURANT CONTENT -->
    <div class="admin2-dashboard-content">
        <div class="dashboard-header">
            <i class="fas fa-utensils"></i><h2>Restaurants</h2>

            <a class="toggle-menu-link" href="javascript:void(0);" onclick="myFunction()">
                <i class="fas fa-bars"></i>
            </a>

            <a href="{{route('logout', app()->getLocale())}}" onclick="event.preventDefault();
            document.getElementById('logout-form').submit();">
                <p class="p-lead"><i class="fas fa-sign-out-alt"></i> {{__('Logout')}}</p></a>
            <form id="logout-form" action="{{ route('logout', app()->getLocale()) }}" method="POST" style="display: none;">
                @csrf
            </form>

            <a href="{{route('users.edit', [app()->getLocale(), Auth::user()->id])}}"><p class="p-lead">{{Auth::user()->name}}</p> <img src="{{Auth::user()->photo->file}}" alt=""></a>
        </div>
        <div class="dashboard-content" id="user-admin-create-restaurant">
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
            <div class="create-form">
                <div class="form-left">
                    <p class="p-lead-h4">Create a new restaurant</p>



                    {!! Form::open(['method'=>'POST', 'action'=>['AdminRestaurantsController@store', app()->getLocale()], 'files'=>true, 'id'=>'regForm']) !!}
                    {{csrf_field()}}
                    <div class="tab">

                        {!! Form::label('title', 'TITLE', ['class'=>'label-grey-small']) !!}
                        {!! Form::text('title', null, ['class'=>'check create-form-input', 'id'=>'title', 'oninput'=>'this.className = "check create-form-input"']) !!}

                        {!! Form::label('location_id', 'CITY', ['class'=>'label-grey-small']) !!}
                        {!! Form::select('location_id', ['' => 'Choose Location'] + $locations, null, ['class'=>'check create-form-select', 'id'=>'city', 'oninput'=>'this.className = "create-form-select check"']) !!}

                        {!! Form::label('address', 'ADDRESS', ['class'=>'label-grey-small']) !!}
                        {!! Form::text('address', null, ['class'=>'create-form-input', 'id'=>'address', 'placeholder'=>'example: Passau, Padu Innstrasse', 'onchange'=>'codeAddress()']) !!}
                        <div class="custom-control custom-checkbox mb-3">
                            <input type="checkbox" id="yourBox" class="custom-control-input" />
                            <label id="checkbox-text" class="custom-control-label" for="yourBox">Not registered on google map</label>
                        </div>

                        {!! Form::label('food_id', 'FOOD CATEGORY', ['class'=>'label-grey-small', 'id'=>'margin-top-label']) !!}
                        {!! Form::select('food_id', ['' => 'Choose Food'] + $foods, null, ['class'=>'check create-form-select', 'id'=>'food', 'oninput'=>'this.className = "create-form-select check"']) !!}

                        {!! Form::label('body', 'RESTAURANT DESCRIPTION', ['class'=>'label-grey-small']) !!}
                        {!! Form::textarea('body', null, ['class'=>'check create-form-textarea', 'id'=>'description', 'oninput'=>'this.className = "create-form-textarea check"', 'rows'=>3]) !!}

                    </div>

                    <div class="tab">
                        {!! Form::label('facebook', 'FACEBOOK', ['class'=>'label-grey-small']) !!}
                        {!! Form::text('facebook', null, ['class'=>'create-form-input']) !!}

                        {!! Form::label('twitter', 'TWITTER', ['class'=>'label-grey-small']) !!}
                        {!! Form::text('twitter', null, ['class'=>'create-form-input']) !!}

                        {!! Form::label('instagram', 'INSTAGRAM', ['class'=>'label-grey-small']) !!}
                        {!! Form::text('instagram', null, ['class'=>'create-form-input']) !!}

                        {!! Form::label('google', 'GOOGLE PLUS', ['class'=>'label-grey-small']) !!}
                        {!! Form::text('google', null, ['class'=>'create-form-input']) !!}
                    </div>

                    <div class="tab">
                        {!! Form::label('address2', 'ADDRESS', ['class'=>'label-grey-small']) !!}
                        {!! Form::text('address2', null, ['class'=>'create-form-input']) !!}

                        {!! Form::label('email', 'EMAIL', ['class'=>'label-grey-small']) !!}
                        {!! Form::email('email', null, ['class'=>'create-form-input']) !!}

                        {!! Form::label('telephone', 'TEL', ['class'=>'label-grey-small']) !!}
                        {!! Form::text('telephone', null, ['class'=>'create-form-input']) !!}

                        {!! Form::label('mobile', 'MOB', ['class'=>'label-grey-small']) !!}
                        {!! Form::text('mobile', null, ['class'=>'create-form-input']) !!}

                        <label for="opening" class="label-grey-small">OPENING TIME</label>
                        <input class="create-form-input check" type="time" name="opening" id="opening" oninput="this.className = 'create-form-input check'">
                        <small class="label-grey-small label-grey-size">Example: 07:30 AM</small>

                        <label for="closing" id="label-grey-block" class="label-grey-small">CLOSING TIME</label>
                        <input class="create-form-input check" type="time" name="closing" id="closing" oninput="this.className = 'create-form-input check'">
                        <small class="label-grey-small label-grey-size">Example: 05:30 PM</small>

                    </div>



                    <div style="text-align:center;margin-top:40px;">
                        <span class="step"></span>
                        <span class="step"></span>
                        <span class="step"></span>

                    </div>
                </div>


                <div class="form-right">

                    <div class="google-maps" id="map_canvas"></div>

                    <div class="upload-image">
                        <p class="label-grey-image-r">UPLOAD IMAGE</p>
                        <button type="button" class="input-file">

                            {!! Form::file('photo_id', null, ['class'=>'custom-file-input', 'id'=>'file-input']) !!}
                            {!! Form::label('photo_id', 'BROWSE', ['class'=>'custom-file-label', 'id'=>'pointers']) !!}
                        </button>
                        <hr class="between-fields">
                    </div>


                    <div class="upload-image">
                        <p class="label-grey-image">UPLOAD MENU PDF</p>
                        <button type="button" class="input-file">

                            {!! Form::label('pdf_id', 'BROWSE', ['class'=>'custom-file-label', 'id'=>'pointers']) !!}
                            {!! Form::file('pdf_id', null, ['class'=>'custom-file-input', 'id'=>'file-input2']) !!}
                        </button>
                        <hr class="between-fields">
                    </div>

                    <div class="form-group" style="display:none;">
                        {!! Form::label('lat', 'Lat:') !!}
                        {!! Form::text('lat', null) !!}
                    </div>
                    <div class="form-group" style="display:none;">
                        {!! Form::label('lng', 'Lng:') !!}
                        {!! Form::text('lng', null) !!}
                    </div>
                    {!! Form::close() !!}

                    <div class="form-buttons">
                        <button id="prevBtn" onclick="nextPrev(-1)" class="form-previous"><i class="fas fa-arrow-left"></i> Previous</button>
                        <button id="nextBtn" onclick="nextPrev(1)" class="form-next">Next <i class="fas fa-arrow-right"></i></button>
                    </div>

                </div>
            </div>
        </div>
    </div>
    </div>
    </div>
</section>
<!-- END RESTAURANT CONTENT -->


<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
<script>
    $('.toggle-menu-link').click( function() {
        $(".admin2-menu").toggleClass("admin-navbar").css({"display": "block!important", "z-index": "9999", "box-shadow": "1px 1px 2px rgba(0,0,0,.5)"});
    } );
</script>
<script>
    document.getElementById('yourBox').onchange = function() {
        document.getElementById('address').disabled = this.checked;
        document.getElementById('address').value = '';
        document.getElementById('lat').value = '';
        document.getElementById('lng').value = '';
    };
</script>
<script>
    var currentTab = 0;
    showTab(currentTab);

    function showTab(n) {
        var x = document.getElementsByClassName("tab");
        x[n].style.display = "block";
        if (n == 0) {
            document.getElementById("prevBtn").style.display = "none";
        } else {
            document.getElementById("prevBtn").style.display = "inline";
        }
        if (n == (x.length - 1)) {
            document.getElementById("nextBtn").innerHTML = "Submit";
        } else {
            document.getElementById("nextBtn").innerHTML = "Next";
        }
        fixStepIndicator(n)
    }

    function nextPrev(n) {
        var x = document.getElementsByClassName("tab");
        var y = document.getElementsByClassName("check");

        if (n == 1 && !validateForm()) return false;
        x[currentTab].style.display = "none";
        currentTab = currentTab + n;
        if (currentTab >= x.length) {
            document.getElementById("regForm").submit();
            return false;
        }
        showTab(currentTab);
    }

    function validateForm() {
        var x, y, i, valid = true;
        x = document.getElementsByClassName("tab");
        y = x[currentTab].getElementsByClassName("check");
        for (i = 0; i < y.length; i++) {
            if (y[i].value == "") {
                y[i].className += " invalid";
                valid = false;
            }
        }
        if (valid) {
            document.getElementsByClassName("step")[currentTab].className += " finish";
        }
        return valid;
    }

    function fixStepIndicator(n) {
        var i, x = document.getElementsByClassName("step");
        for (i = 0; i < x.length; i++) {
            x[i].className = x[i].className.replace(" active", "");
        }
        x[n].className += " active";
    }
</script>
</body>
</html>