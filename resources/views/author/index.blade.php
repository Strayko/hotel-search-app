<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Home Property | Register</title>

    <!-- Favicon -->
    <link rel="shortcut icon" href="img/favicon.ico" type="image/x-icon">


    <link href="{{ asset('css/libs.css') }}" rel="stylesheet">


    <!-- Google Font -->
    <link href='https://fonts.googleapis.com/css?family=Vollkorn' rel='stylesheet' type='text/css'>
    <link href='https://fonts.googleapis.com/css?family=Open+Sans' rel='stylesheet' type='text/css'>


    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
    <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
    <script src="https://www.google.com/recaptcha/api.js" async defer></script>


</head>
<body>

<section id="aa-signin">
    <div class="container">
        <div class="row">

            <div class="col-md-12">

                <div class="aa-signin-area">
                    <div class="aa-signin-form">
                        <div class="aa-signin-form-title">
                            <a class="aa-property-home" href="/">Home</a>
                            <h4>Create your account and Stay with us</h4>
                            @include('includes.frontend_form_error')
                            </div>


                        {!! Form::open(['method'=>'POST', 'action'=>'AuthorUsersController@store', 'files'=>true]) !!}
                        <input type="hidden" name="package_expiry">
                        <div class="aa-single-field">
                            <label for="name">Name <span class="required">*</span></label>
                            {{--<input type="text" required="required" aria-required="true" value="" name="name">--}}
                            {!! Form::text('name', null, ['class'=>'form-control']) !!}
                        </div>
                        <div class="aa-single-field">
                            <label for="email">Email <span class="required">*</span></label>
                            {{--<input type="email" required="required" aria-required="true" value="" name="email">--}}
                            {!! Form::email('email', null, ['class'=>'form-control']) !!}
                        </div>
                        <div class="aa-single-field">
                            <label for="password">Password <span class="required">*</span></label>
                            {{--<input type="password" name="password">--}}
                            {!! Form::password('password', ['class'=>'form-control']) !!}
                        </div>

                        <div class="aa-single-field">
                            <label for="package_id">Package <span class="required">*</span></label>
                            {!! Form::select('package_id', ['' => 'Choose Packages'] + $packages, null, ['class'=>'form-control']) !!}
                        </div>

                        <div class="aa-single-field">
                            <label for="photo_id">Photo:</label>
                            {!! Form::file('photo_id', null, ['class'=>'form-control']) !!}
                        </div>



                        <div class="aa-single-field{{ $errors->has('g-recaptcha-response') ? ' has-error' : '' }}">
                            <div class="col-md-6" style="margin-left: -14px!important;">
                                {!! NoCaptcha::display() !!}
                                @if ($errors->has('g-recaptcha-response'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('g-recaptcha-response') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>



                        <div class="aa-single-submit">
                            {!! Form::submit('Create User', ['class'=>'btn btn-warning']) !!}
                        </div>
                        {!! Form::close() !!}
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>


<!-- jQuery library -->
<!--<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script> -->
<script src="{{ asset('js/libs.js') }}"></script>

</body>
</html>
