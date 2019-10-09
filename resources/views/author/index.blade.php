{{--<!DOCTYPE html>--}}
{{--<html lang="en">--}}
{{--<head>--}}
{{--    <meta charset="utf-8">--}}
{{--    <meta http-equiv="X-UA-Compatible" content="IE=edge">--}}
{{--    <meta name="viewport" content="width=device-width, initial-scale=1">--}}
{{--    <title>Home Property | Register</title>--}}

{{--    <!-- Favicon -->--}}
{{--    <link rel="shortcut icon" href="img/favicon.ico" type="image/x-icon">--}}


{{--    <link href="{{ asset('css/libs.css') }}" rel="stylesheet">--}}


{{--    <!-- Google Font -->--}}
{{--    <link href='https://fonts.googleapis.com/css?family=Vollkorn' rel='stylesheet' type='text/css'>--}}
{{--    <link href='https://fonts.googleapis.com/css?family=Open+Sans' rel='stylesheet' type='text/css'>--}}


{{--    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->--}}
{{--    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->--}}
{{--    <!--[if lt IE 9]>--}}
{{--    <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>--}}
{{--    <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>--}}
{{--    <![endif]-->--}}
{{--    <script src="https://www.google.com/recaptcha/api.js" async defer></script>--}}


{{--</head>--}}
{{--<body>--}}

{{--<section id="aa-signin">--}}
{{--    <div class="container">--}}
{{--        <div class="row">--}}

{{--            <div class="col-md-12">--}}

{{--                <div class="aa-signin-area">--}}
{{--                    <div class="aa-signin-form">--}}
{{--                        <div class="aa-signin-form-title">--}}
{{--                            <a class="aa-property-home" href="/">Home</a>--}}
{{--                            <h4>Create your account and Stay with us</h4>--}}
{{--                            @include('includes.frontend_form_error')--}}
{{--                            </div>--}}


{{--                        {!! Form::open(['method'=>'POST', 'action'=>'AuthorUsersController@store', 'files'=>true]) !!}--}}
{{--                        <input type="hidden" name="package_expiry">--}}
{{--                        <div class="aa-single-field">--}}
{{--                            <label for="name">Name <span class="required">*</span></label>--}}
{{--                            <input type="text" required="required" aria-required="true" value="" name="name">--}}
{{--                            {!! Form::text('name', null, ['class'=>'form-control']) !!}--}}
{{--                        </div>--}}
{{--                        <div class="aa-single-field">--}}
{{--                            <label for="email">Email <span class="required">*</span></label>--}}
{{--                            <input type="email" required="required" aria-required="true" value="" name="email">--}}
{{--                            {!! Form::email('email', null, ['class'=>'form-control']) !!}--}}
{{--                        </div>--}}
{{--                        <div class="aa-single-field">--}}
{{--                            <label for="password">Password <span class="required">*</span></label>--}}
{{--                            <input type="password" name="password">--}}
{{--                            {!! Form::password('password', ['class'=>'form-control']) !!}--}}
{{--                        </div>--}}

{{--                        <div class="aa-single-field">--}}
{{--                            <label for="package_id">Package <span class="required">*</span></label>--}}
{{--                            {!! Form::select('package_id', ['' => 'Choose Packages'] + $packages, null, ['class'=>'form-control']) !!}--}}
{{--                        </div>--}}

{{--                        <div class="aa-single-field">--}}
{{--                            <label for="photo_id">Photo:</label>--}}
{{--                            {!! Form::file('photo_id', null, ['class'=>'form-control']) !!}--}}
{{--                        </div>--}}



{{--                        <div class="aa-single-field{{ $errors->has('g-recaptcha-response') ? ' has-error' : '' }}">--}}
{{--                            <div class="col-md-6" style="margin-left: -14px!important;">--}}
{{--                                {!! NoCaptcha::display() !!}--}}
{{--                                @if ($errors->has('g-recaptcha-response'))--}}
{{--                                    <span class="help-block">--}}
{{--                                        <strong>{{ $errors->first('g-recaptcha-response') }}</strong>--}}
{{--                                    </span>--}}
{{--                                @endif--}}
{{--                            </div>--}}
{{--                        </div>--}}



{{--                        <div class="aa-single-submit">--}}
{{--                            {!! Form::submit('Create User', ['class'=>'btn btn-warning']) !!}--}}
{{--                        </div>--}}
{{--                        {!! Form::close() !!}--}}
{{--                    </div>--}}
{{--                </div>--}}
{{--            </div>--}}
{{--        </div>--}}
{{--    </div>--}}
{{--</section>--}}


{{--<!-- jQuery library -->--}}
{{--<!--<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script> -->--}}
{{--<script src="{{ asset('js/libs.js') }}"></script>--}}

{{--</body>--}}
{{--</html>--}}















@extends('layouts.frontend-thema')
<title>Register</title>
<style>
    .help-block {
        margin-top: -16px;
        margin-left: 10px;
        font-size: 12px;
        position: absolute;
        color: red;
    }
    #file-upload-filename {
        font-size: 12px;
        margin-left: 5px;
        margin-top: 7px;
        white-space: nowrap;
        overflow: hidden;
        text-overflow: ellipsis;
        max-width: 150px;
    }
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
</style>
@section('content')
<!-- START LOGO AND MENU -->
<section id="menu" class="menu">
    <div class="container-menu">

        <div class="logo alignLeft center-response">
            <a href="/"><img src="{{asset('img/logo.svg')}}" class="logo-img" alt=""></a>
        </div>

        <a class="toggle-menu-link" href="javascript:void(0);" onclick="myFunction()">
            <i class="fas fa-bars"></i>
        </a>

        <nav class="navbar" id="navbar">
            <!--<div class="burger-nav"></div>-->
            <ul class="nav alignRight center-response">
                <li><a class="mobile-font" href="/">Homepage</a></li>
                <li><a class="mobile-font" href="{{route('plans-and-pricing.planAndPrice')}}">Plans&Pricing</a></li>
                <li><a class="mobile-font" href="{{route('restaurants.showAll')}}">Restaurants</a></li>
                <li><a class="mobile-font" href="{{route("contact.contact")}}">Contact</a></li>
                <li class="menu-buttons-block">
                <li class="menu-collapse"><a href="{{route('login')}}" class="sign-in">Sign in</a></li>
                <li class="menu-collapse top-distance-mobile"><a href="{{route('register.index')}}" class="register">Register</a></li>
            </ul>
        </nav>

    </div>
</section>
<!-- END LOGO AND MENU -->

<!-- START REGISTER -->
<section id="register">
    <div class="container">
        <div class="register-content">
            <div class="register-container">
                <img src="{{asset('img/logo.svg')}}" alt="">
{{--                @include('includes.frontend_form_error')--}}
                <h4>Create an account and stay with us</h4>
                {!! Form::open(['method'=>'POST', 'action'=>'AuthorUsersController@store', 'files'=>true, 'id'=>'regForm']) !!}
                {{csrf_field()}}
                <div class="tab">
                <input type="hidden" name="package_expiry">
                <i class="fas fa-user"></i>{!! Form::text('name', null, ['class'=>'register-input check input-register-responsive', 'placeholder'=>'Name', 'oninput'=>'this.className = "check input-register-responsive register-input"']) !!}
                @if ($errors->has('name'))
                    <span class="help-block">
                        <strong>{{ $errors->first('name') }}</strong>
                    </span>
                @endif
                <i class="fas fa-envelope"></i>{!! Form::email('email', null, ['class'=>'register-input check input-register-responsive', 'placeholder'=>'Email', 'oninput'=>'this.className = "check register-input input-register-responsive"']) !!}
                @if ($errors->has('email'))
                    <span class="help-block">
                        <strong>{{ $errors->first('email') }}</strong>
                    </span>
                @endif
                <i class="fas fa-lock"></i>{!! Form::password('password', ['class'=>'check register-input input-register-responsive', 'placeholder'=>'Password', 'oninput'=>'this.className = "check register-input input-register-responsive"']) !!}
                @if ($errors->has('password'))
                    <span class="help-block">
                        <strong>{{ $errors->first('password') }}</strong>
                    </span>
                @endif
                <i class="fas fa-box"></i>{!! Form::select('package_id', ['' => 'Choose Packages'] + $packages, null, ['id'=>'register-package']) !!}
                @if ($errors->has('package_id'))
                    <span class="help-block">
                        <strong>{{ $errors->first('package_id') }}</strong>
                    </span>
                @endif

                <div class="upload-btn-wrapper">
                    <button class="btn">Upload picture</button>
                        <input type="file" name="photo_id" id="file-upload" />
                        <div id="file-upload-filename"></div>
                </div>
                </div>
                <div class="tab">
                    <form class="form-horizontal" method="POST" id="payment-form" role="form" action="{!!route('addmoney.stripe')!!}" >
                        {{ csrf_field() }}
                        <div class='form-row'>
                            <div class='col-xs-12 form-group card required'>
                                <label class='control-label'>Card Number</label>
                                <input autocomplete='off' class='form-control card-number' size='20' type='text' name="card_no" id="card_no">
                            </div>
                        </div>
                        <div class='form-row'>
                            <div class='col-xs-4 form-group cvc required'>
                                <label class='control-label'>CVV</label>
                                <input autocomplete='off' class='form-control card-cvc' placeholder='ex. 311' size='4' type='text' name="cvvNumber" id="cvvNumber">
                            </div>
                            <div class='col-xs-4 form-group expiration required'>
                                <label class='control-label'>Expiration</label>
                                <input class='form-control card-expiry-month' placeholder='MM' size='4' type='text' name="ccExpiryMonth" id="ccExpiryMonth">
                            </div>
                            <div class='col-xs-4 form-group expiration required'>
                                <label class='control-label'> </label>
                                <input class='form-control card-expiry-year' placeholder='YYYY' size='4' type='text' name="ccExpiryYear" id="ccExpiryYear">
                                <input class='form-control card-expiry-year' placeholder='YYYY' size='4' type='hidden' name="amount" value="300">
                            </div>
                        </div>
                        <div class='form-row'>
                            <div class='col-md-12' style="margin-left:-10px;">
                                <div class='form-control total btn btn-primary' >
                                    Total:
                                    <span class='amount'>$20.49</span>
                                </div>
                            </div>
                        </div>
                        <div class='form-row'>
                            <div class='col-md-12 form-group'>
                                <button class='form-control btn btn-success submit-button' type='submit'>Pay »</button>
                            </div>
                        </div>
                        <div class='form-row'>
                            <div class='col-md-12 error form-group hide'>
                                <div class='alert-danger alert'>
                                    Please correct the errors and try again.
                                </div>
                            </div>
                        </div>
                    </form>
                </div>
{{--                <div class="aa-single-field{{ $errors->has('g-recaptcha-response') ? ' has-error' : '' }}">--}}
{{--                    <div class="col-md-6" style="margin-left: -14px!important;">--}}
{{--                        {!! NoCaptcha::display() !!}--}}
{{--                        @if ($errors->has('g-recaptcha-response'))--}}
{{--                            <span class="help-block">--}}
{{--                                <strong>{{ $errors->first('g-recaptcha-response') }}</strong>--}}
{{--                            </span>--}}
{{--                        @endif--}}
{{--                    </div>--}}
{{--                </div>--}}

{{--                {!! Form::submit('Register', ['class'=>'register-submit']) !!}--}}
                <div style="text-align:center;margin-top:40px;">
                    <span class="step"></span>
                    <span class="step"></span>

                </div>

                {!! Form::close() !!}
                <div class="form-buttons">
                    <button id="prevBtn" onclick="nextPrev(-1)" class="form-previous"><i class="fas fa-arrow-left"></i> Previous</button>
                    <button id="nextBtn" onclick="nextPrev(1)" class="form-next">Next <i class="fas fa-arrow-right"></i></button>
                </div>

            </div>
        </div>
    </div>
</section>
<!-- END REGISTER -->
@endsection

@section('footer')
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
    <script>
        $("document").ready(function(){
            setTimeout(function(){
                $(".help-block").fadeOut(1000, function() {$(this).remove()});
            }, 5000 );
        });

        var input = document.getElementById( 'file-upload' );
        var infoArea = document.getElementById( 'file-upload-filename' );
        input.addEventListener( 'change', showFileName );
        function showFileName( event ) {
            var input = event.srcElement;
            var fileName = input.files[0].name;
            infoArea.textContent = fileName;
        }

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

