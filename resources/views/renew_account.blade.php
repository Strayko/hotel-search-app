{{--@extends('layouts.app')--}}

{{--@section('content')--}}
{{--<div class="container">--}}
{{--<div class="row justify-content-center">--}}
{{--<div class="col-md-8">--}}
{{--<div class="card">--}}
{{--<div class="card-header">{{ __('Register') }}</div>--}}

{{--<div class="card-body">--}}
{{--<form method="POST" action="{{ route('register') }}">--}}
{{--@csrf--}}

{{--<div class="form-group row">--}}
{{--<label for="name" class="col-md-4 col-form-label text-md-right">{{ __('Name') }}</label>--}}

{{--<div class="col-md-6">--}}
{{--<input id="name" type="text" class="form-control{{ $errors->has('name') ? ' is-invalid' : '' }}" name="name" value="{{ old('name') }}" required autofocus>--}}

{{--@if ($errors->has('name'))--}}
{{--<span class="invalid-feedback" role="alert">--}}
{{--<strong>{{ $errors->first('name') }}</strong>--}}
{{--</span>--}}
{{--@endif--}}
{{--</div>--}}
{{--</div>--}}

{{--<div class="form-group row">--}}
{{--<label for="email" class="col-md-4 col-form-label text-md-right">{{ __('E-Mail Address') }}</label>--}}

{{--<div class="col-md-6">--}}
{{--<input id="email" type="email" class="form-control{{ $errors->has('email') ? ' is-invalid' : '' }}" name="email" value="{{ old('email') }}" required>--}}

{{--@if ($errors->has('email'))--}}
{{--<span class="invalid-feedback" role="alert">--}}
{{--<strong>{{ $errors->first('email') }}</strong>--}}
{{--</span>--}}
{{--@endif--}}
{{--</div>--}}
{{--</div>--}}

{{--<div class="form-group row">--}}
{{--<label for="password" class="col-md-4 col-form-label text-md-right">{{ __('Password') }}</label>--}}

{{--<div class="col-md-6">--}}
{{--<input id="password" type="password" class="form-control{{ $errors->has('password') ? ' is-invalid' : '' }}" name="password" required>--}}

{{--@if ($errors->has('password'))--}}
{{--<span class="invalid-feedback" role="alert">--}}
{{--<strong>{{ $errors->first('password') }}</strong>--}}
{{--</span>--}}
{{--@endif--}}
{{--</div>--}}
{{--</div>--}}

{{--<div class="form-group row">--}}
{{--<label for="password-confirm" class="col-md-4 col-form-label text-md-right">{{ __('Confirm Password') }}</label>--}}

{{--<div class="col-md-6">--}}
{{--<input id="password-confirm" type="password" class="form-control" name="password_confirmation" required>--}}
{{--</div>--}}
{{--</div>--}}




{{--<div class="form-group row mb-0">--}}
{{--<div class="col-md-6 offset-md-4">--}}
{{--<button type="submit" class="btn btn-primary">--}}
{{--{{ __('Register') }}--}}
{{--</button>--}}
{{--</div>--}}
{{--</div>--}}
{{--</form>--}}
{{--</div>--}}
{{--</div>--}}
{{--</div>--}}
{{--</div>--}}
{{--</div>--}}
{{--@endsection--}}



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
                            <h4 style="color:red!important;">Your account has expired please extend it</h4>
                            {{--<div class="flash-message">--}}

                                {{--@foreach (['danger', 'warning', 'success', 'info'] as $msg)--}}

                                    {{--@if(Session::has('alert-' . $msg))--}}



                                        {{--<p class="alert alert-{{ $msg }}">{{ Session::get('alert-' . $msg) }} <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a></p>--}}

                                    {{--@endif--}}

                                {{--@endforeach--}}

                            {{--</div> <!-- end .flash-message -->--}}
                        </div>
                        {{--{!! Form::open(['method'=>'POST', 'action'=>'AdminUsersController@store', 'files'=>true]) !!}--}}
                        {{--<div class="form-group">--}}
                        {{--{!! Form::label('name', 'Name:') !!}--}}
                        {{--{!! Form::text('name', null, ['class'=>'form-control']) !!}--}}
                        {{--</div>--}}

                        {{--<div class="form-group">--}}
                        {{--{!! Form::label('email', 'Email:') !!}--}}
                        {{--{!! Form::email('email', null, ['class'=>'form-control']) !!}--}}
                        {{--</div>--}}

                        {{--<div class="form-group">--}}
                        {{--{!! Form::label('password', 'Password:') !!}--}}
                        {{--{!! Form::password('password', ['class'=>'form-control']) !!}--}}
                        {{--</div>--}}

                        {{--<div class="form-group">--}}
                        {{--{!! Form::label('role_id', 'Role:') !!}--}}
                        {{--{!! Form::select('role_id', ['' => 'Choose Options'] + $roles, null, ['class'=>'form-control']) !!}--}}
                        {{--</div>--}}

                        {{--<div class="form-group">--}}
                        {{--{!! Form::label('is_active', 'Status:') !!}--}}
                        {{--{!! Form::select('is_active', array(1 => 'Active', 0 => 'Not Active'), 0, ['class'=>'form-control']) !!}--}}
                        {{--</div>--}}

                        {{--<div class="form-group">--}}
                        {{--{!! Form::label('photo_id', 'Photo:') !!}--}}
                        {{--{!! Form::file('photo_id', null, ['class'=>'form-control']) !!}--}}
                        {{--</div>--}}


                        {{--</div>--}}
                        {{--<div class="modal-footer">--}}
                        {{--<div class="form-group">--}}
                        {{--{!! Form::submit('Create User', ['class'=>'btn btn-warning']) !!}--}}
                        {{--</div>--}}
                        {{--{!! Form::close() !!}--}}
                        {{--<button class="btn btn-warning" data-dismiss="modal">Save Changes</button>--}}

                        {!! Form::open(['method'=>'POST', 'action'=>'RenewAccountController@renewAccount', 'files'=>true]) !!}
                        <input type="hidden" name="package_expiry">
                        <input type="hidden" name="is_active">

                        <div class="aa-single-field">
                            <label for="email">Email <span class="required">*</span></label>
                            {{--<input type="email" required="required" aria-required="true" value="" name="email">--}}
                            {!! Form::email('email', null, ['class'=>'form-control']) !!}
                        </div>

                        <div class="aa-single-field">
                            <label for="package_id">Package <span class="required">*</span></label>
                            {!! Form::select('package_id', ['' => 'Choose Packages'] + $packages, null, ['class'=>'form-control']) !!}
                        </div>



                        <div class="aa-single-submit">
                            {!! Form::submit('Renew Account', ['class'=>'btn btn-warning']) !!}
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
