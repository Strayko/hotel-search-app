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


    /* Mark input boxes that gets an error on validation: */
    input.invalid {
        background-color: #ffdddd;
    }

    /* Hide all steps by default: */
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

    /* Make circles that indicate the steps of the form: */
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

    /* Mark the steps that are finished and valid: */
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
                    @if($platinium)
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

                        @if($frei)
                            @include('silver.includes.create.frei_create_restaurant')
                        @elseif($silver)
                            @include('silver.includes.create.silver_create_restaurant')
                        @elseif($gold)
                            @include('silver.includes.create.gold_create_restaurant')
                        @elseif($platinium)
                            @include('silver.includes.create.platinium_create_restaurant')
                        @endif

                    </div>
                </div>

            </div>


        </div>
    </div>



{{--<div class="container">--}}
    {{--<div class="row">--}}
{{--<div class="col-md-6">--}}
    {{--<form id="regFormd" action="/action_page.php">--}}
        {{--<div class="card">--}}
            {{--<div class="card-header">--}}
                {{--<h4>Restaurant</h4>--}}
            {{--</div>--}}
        {{--<!-- One "tab" for each step in the form: -->--}}
            {{--<div class="card-body">--}}
        {{--<div class="tab">--}}
            {{--<div class="form-group">--}}
                {{--{!! Form::label('address2', 'Address:') !!}--}}
                {{--{!! Form::text('address2', null, ['class'=>'form-control', "oninput"=>"this.className = 'form-control'"]) !!}--}}
            {{--</div>--}}
        {{--</div>--}}
        {{--<div class="tab">--}}
            {{--<div class="form-group">--}}
                {{--{!! Form::label('email', 'Email:') !!}--}}
                {{--{!! Form::email('email', null, ['class'=>'form-control', 'oninput'=>'this.className = ""']) !!}--}}
            {{--</div>--}}
        {{--</div>--}}

        {{--<div style="overflow:auto;">--}}
            {{--<div style="float:right;">--}}
                {{--<button class="btn" type="button" id="prevBtn" onclick="nextPrev(-1)">Previous</button>--}}
                {{--<button class="btn btn-success" type="button" id="nextBtn" onclick="nextPrev(1)">Next</button>--}}
            {{--</div>--}}
        {{--</div>--}}
        {{--<!-- Circles which indicates the steps of the form: -->--}}
        {{--<div style="text-align:center;margin-top:40px;">--}}
            {{--<span class="step"></span>--}}
            {{--<span class="step"></span>--}}

        {{--</div>--}}
            {{--</div>--}}
        {{--</div>--}}
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
    {{--<script>--}}
        {{--var currentTab = 0; // Current tab is set to be the first tab (0)--}}
        {{--showTab(currentTab); // Display the current tab--}}

        {{--function showTab(n) {--}}
            {{--// This function will display the specified tab of the form...--}}
            {{--var x = document.getElementsByClassName("tab");--}}
            {{--x[n].style.display = "block";--}}
            {{--//... and fix the Previous/Next buttons:--}}
            {{--if (n == 0) {--}}
                {{--document.getElementById("prevBtn").style.display = "none";--}}
            {{--} else {--}}
                {{--document.getElementById("prevBtn").style.display = "inline";--}}
            {{--}--}}
            {{--if (n == (x.length - 1)) {--}}
                {{--document.getElementById("nextBtn").innerHTML = "Submit";--}}
            {{--} else {--}}
                {{--document.getElementById("nextBtn").innerHTML = "Next";--}}
            {{--}--}}
            {{--//... and run a function that will display the correct step indicator:--}}
            {{--fixStepIndicator(n)--}}
        {{--}--}}

        {{--function nextPrev(n) {--}}
            {{--// This function will figure out which tab to display--}}
            {{--var x = document.getElementsByClassName("tab");--}}
            {{--// Exit the function if any field in the current tab is invalid:--}}
            {{--if (n == 1 && !validateForm()) return false;--}}
            {{--// Hide the current tab:--}}
            {{--x[currentTab].style.display = "none";--}}
            {{--// Increase or decrease the current tab by 1:--}}
            {{--currentTab = currentTab + n;--}}
            {{--// if you have reached the end of the form...--}}
            {{--if (currentTab >= x.length) {--}}
                {{--// ... the form gets submitted:--}}
                {{--document.getElementById("regForm").submit();--}}
                {{--return false;--}}
            {{--}--}}
            {{--// Otherwise, display the correct tab:--}}
            {{--showTab(currentTab);--}}
        {{--}--}}

        {{--function validateForm() {--}}
            {{--// This function deals with validation of the form fields--}}
            {{--var x, y, i, valid = true;--}}
            {{--x = document.getElementsByClassName("tab");--}}
            {{--y = x[currentTab].getElementsByTagName("input");--}}
            {{--// A loop that checks every input field in the current tab:--}}
            {{--for (i = 0; i < y.length; i++) {--}}
                {{--// If a field is empty...--}}
                {{--if (y[i].value == "") {--}}
                    {{--// add an "invalid" class to the field:--}}
                    {{--y[i].className += " invalid";--}}
                    {{--// and set the current valid status to false--}}
                    {{--valid = false;--}}
                {{--}--}}
            {{--}--}}
            {{--// If the valid status is true, mark the step as finished and valid:--}}
            {{--if (valid) {--}}
                {{--document.getElementsByClassName("step")[currentTab].className += " finish";--}}
            {{--}--}}
            {{--return valid; // return the valid status--}}
        {{--}--}}

        {{--function fixStepIndicator(n) {--}}
            {{--// This function removes the "active" class of all steps...--}}
            {{--var i, x = document.getElementsByClassName("step");--}}
            {{--for (i = 0; i < x.length; i++) {--}}
                {{--x[i].className = x[i].className.replace(" active", "");--}}
            {{--}--}}
            {{--//... and adds the "active" class on the current step:--}}
            {{--x[n].className += " active";--}}
        {{--}--}}
    {{--</script>--}}
@endsection