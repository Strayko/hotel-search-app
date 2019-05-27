@extends('layouts.admin')
<title>Restaurant</title>
<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyA1jIRmJ7b6Zxqwr65GHiuVVj8j-RXuke8&sensor=false&libraries=places"></script>
<style>
    #map_canvas { width:100%; height:300px; }
    #pointers {
        cursor: pointer!important;
    }
</style>
<style>



    input.invalid {
        background-color: #ffdddd;
    }

    select.invalid {
        background-color: #ffdddd;
    }

    textarea.invalid {
        background-color: #ffdddd;
    }

    .tab {
        display: none;
    }

    button {
        background-color: #4CAF50;
        color: #ffffff;
        border: none;
        padding: 10px 20px;
        font-size: 17px;
        font-family: Raleway;
        cursor: pointer;
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
        background-color: #4CAF50;
    }
</style>

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
                        <a href="/admin" class="nav-link">Dashboard</a>
                    </li>
                    <li class="nav-item px-2">
                        <a href="{{route('restaurant.index')}}" class="nav-link active">Restaurants</a>
                    </li>
                    @if($platinium || $gold)
                        <li class="nav-item px-2">
                            <a href="{{route('event.index')}}" class="nav-link">Events</a>
                        </li>
                        <li class="nav-item px-2">
                            <a href="{{route('gallery.index')}}" class="nav-link">Gallery</a>
                        </li>
                    @endif
                </ul>

                <ul class="navbar-nav ml-auto">
                    <li class="nav-item dropdown mr-3">
                        <a href="#" class="nav-link dropdown-toggle" data-toggle="dropdown">
                            <i class="fas fa-user"></i> {{Auth::user()->name}}
                        </a>
                        <div class="dropdown-menu">
                            <a href="{{route('user.edit', Auth::user()->id)}}" class="dropdown-item">
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
                    <a href="/admin" class="btn btn-primary btn-block">
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

                {{--<div class="card mt-4">--}}
                    {{--<div class="card-header">--}}
                        {{--<h4>Contact Information</h4>--}}
                    {{--</div>--}}
                    {{--<div class="card-body">--}}

                        {{--<div class="form-group">--}}
                            {{--{!! Form::label('address2', 'Address:') !!}--}}
                            {{--{!! Form::text('address2', null, ['class'=>'form-control']) !!}--}}
                        {{--</div>--}}

                        {{--<div class="form-group">--}}
                            {{--{!! Form::label('email', 'Email:') !!}--}}
                            {{--{!! Form::email('email', null, ['class'=>'form-control']) !!}--}}
                        {{--</div>--}}
                        {{--<div class="form-row">--}}
                            {{--<div class="col form-group">--}}
                                {{--{!! Form::label('telephone', 'Tel:') !!}--}}
                                {{--{!! Form::text('telephone', null, ['class'=>'form-control']) !!}--}}
                            {{--</div>--}}
                            {{--<div class="col form-group">--}}
                                {{--{!! Form::label('mobile', 'Mob:') !!}--}}
                                {{--{!! Form::text('mobile', null, ['class'=>'form-control']) !!}--}}
                            {{--</div>--}}
                        {{--</div>--}}
                        {{--<div class="form row">--}}
                            {{--<div class="col form-group">--}}
                                {{--<label for="example-time-input">Opening Time:</label>--}}
                                {{--<input class="form-control" type="time" value="00:00:00" id="example-time-input">--}}
                            {{--</div>--}}
                            {{--<div class="col form-group">--}}
                                {{--<label for="example-time-input">Closing Time:</label>--}}
                                {{--<input class="form-control" type="time" value="12:00:00" id="example-time-input">--}}
                            {{--</div>--}}
                        {{--</div>--}}
                    {{--</div>--}}
                {{--</div>--}}

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

                        {{--@if($frei)--}}
                            {{--@include('silver.includes.create.frei_create_restaurant')--}}
                        {{--@elseif($silver)--}}
                            {{--@include('silver.includes.create.silver_create_restaurant')--}}
                        {{--@elseif($gold)--}}
                            {{--@include('silver.includes.create.gold_create_restaurant')--}}
                        {{--@elseif($platinium)--}}
                            {{--@include('silver.includes.create.platinium_create_restaurant')--}}
                        {{--@endif--}}




                            <!-- One "tab" for each step in the form: -->
                            {!! Form::open(['method'=>'POST', 'action'=>'SilverRestaurantController@store', 'files'=>true, 'id'=>'regForm']) !!}
                            {{csrf_field()}}
                                <div class="tab">
                                    <div class="form-group">
                                        {!! Form::label('title', 'Title:') !!}
                                        {!! Form::text('title', null, ['class'=>'check form-control', 'oninput'=>'this.className = "form-control check"']) !!}
                                    </div>
                                    <div class="form-group">
                                        {!! Form::label('location_id', 'City:') !!}
                                        {!! Form::select('location_id', ['' => 'Choose Location'] + $locations, null, ['class'=>'check form-control', 'oninput'=>'this.className = "form-control check"']) !!}
                                    </div>
                                    <div class="form-group">
                                        {!! Form::label('address', 'Address Google Map:') !!}
                                        {!! Form::text('address', null, ['class'=>'form-control', 'placeholder'=>'example: Passau, Padu Innstrasse', 'onchange'=>'codeAddress()']) !!}

                                        <div class="custom-control custom-checkbox mb-3">
                                            <input type="checkbox" id="yourBox" class="custom-control-input" />
                                            <label id="pointers" class="custom-control-label" for="yourBox">Not registered on google map</label>
                                        </div>

                                    </div>
                                    <div class="form-group">
                                        {!! Form::label('food_id', 'Food:') !!}
                                        {!! Form::select('food_id', ['' => 'Choose Food'] + $foods, null, ['class'=>'check form-control', 'oninput'=>'this.className = "form-control check"']) !!}
                                    </div>
                                    <div class="form-group">
                                        {!! Form::label('body', 'Description:') !!}
                                        {!! Form::textarea('body', null, ['class'=>'check form-control', 'oninput'=>'this.className = "form-control check"', 'rows'=>3]) !!}
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
                                </div>





                                <div class="tab">
                                    <div class="form-group">
                                        {!! Form::label('facebook', 'Facebook:') !!}
                                        {!! Form::text('facebook', null, ['class'=>'form-control']) !!}
                                    </div>
                                    <div class="form-group">
                                        {!! Form::label('twitter', 'Twitter:') !!}
                                        {!! Form::text('twitter', null, ['class'=>'form-control']) !!}
                                    </div>
                                    <div class="form-group">
                                        {!! Form::label('instagram', 'Instagram:') !!}
                                        {!! Form::text('instagram', null, ['class'=>'form-control']) !!}
                                    </div>
                                    <div class="form-group">
                                        {!! Form::label('google', 'Google Plus:') !!}
                                        {!! Form::text('google', null, ['class'=>'form-control']) !!}
                                    </div>
                                </div>
                                {!! Form::close() !!}
                                <div style="overflow:auto;">
                                    <div style="float:right;">
                                        <button class="btn" id="prevBtn" onclick="nextPrev(-1)">Previous</button>
                                        <button class="btn btn-success" id="nextBtn" onclick="nextPrev(1)">Next</button>
                                    </div>
                                </div>
                                <!-- Circles which indicates the steps of the form: -->
                                <div style="text-align:center;margin-top:40px;">
                                    <span class="step"></span>
                                    <span class="step"></span>

                                </div>



                    </div>
                </div>

            </div>


        </div>
    </div>



{{--<div class="container">--}}
    {{--<div class="row">--}}
{{--<div class="col-md-6">--}}
    {{--<form id="regFormd" action="/action_page.php">--}}

    {{--</form>--}}
{{--</div>--}}
    {{--</div>--}}
{{--</div>--}}



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
@endsection