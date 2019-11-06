{{--@extends('layouts.admin')--}}
{{--<title>Restaurant</title>--}}
{{--<style>--}}
{{--    .remove-caret::after {--}}
{{--        display:none!important;--}}
{{--    }--}}
{{--    #all-read {--}}
{{--        border: none;--}}
{{--        background: white;--}}
{{--        cursor: pointer;--}}
{{--        color: green;--}}
{{--    }--}}
{{--    #all-read:hover {--}}
{{--        background: rgba(128,255,0,0.2);--}}
{{--    }--}}
{{--    #green-item:hover {--}}
{{--        background: rgba(128,255,0,0.2);--}}
{{--    }--}}
{{--    #green-item {--}}
{{--        background: rgba(211,211,211,0.3);--}}
{{--        margin-top: 1px;--}}
{{--        margin-bottom: 1px;--}}
{{--    }--}}
{{--</style>--}}

{{--@section('content')--}}
{{--    <body>--}}
{{--    <nav class="navbar navbar-expand-sm navbar-dark bg-dark p-0">--}}
{{--        <div class="container">--}}
{{--            <a href="/" class="navbar-brand">Home</a>--}}
{{--            <button class="navbar-toggler" data-toggle="collapse" data-target="#navbarCollapse">--}}
{{--                <span class="navbar-toggler-icon"></span>--}}
{{--            </button>--}}
{{--            <div class="collpase navbar-collapse" id="navbarCollapse">--}}
{{--                <ul class="navbar-nav">--}}
{{--                    <li class="nav-item px-2">--}}
{{--                        <a href="/admin" class="nav-link">Dashboard</a>--}}
{{--                    </li>--}}
{{--                    <li class="nav-item px-2">--}}
{{--                        <a href="{{route('restaurant.index')}}" class="nav-link">Restaurants</a>--}}
{{--                    </li>--}}
{{--                    <li class="nav-item px-2">--}}
{{--                        <a href="{{route('event.index')}}" class="nav-link active">Events</a>--}}
{{--                    </li>--}}
{{--                    <li class="nav-item px-2">--}}
{{--                        <a href="{{route('gallery.index')}}" class="nav-link">Gallery</a>--}}
{{--                    </li>--}}
{{--                    <li class="nav-item px-2">--}}
{{--                        <a href="{{route('booking')}}" class="nav-link">Booking</a>--}}
{{--                    </li>--}}
{{--                    @if($platinium)--}}
{{--                        <li class="nav-item px-2">--}}
{{--                            <a href="{{route('actions.index')}}" class="nav-link">Actions</a>--}}
{{--                        </li>--}}
{{--                    @endif--}}
{{--                </ul>--}}

{{--                <ul class="navbar-nav ml-auto">--}}
{{--                    <li class="nav-item dropdown mr-3">--}}
{{--                        <a href="#" class="nav-link dropdown-toggle remove-caret" data-toggle="dropdown">--}}
{{--                            <i class="fas fa-bell mt-1"></i>--}}
{{--                            @if(count($notifications) > 0)--}}
{{--                                <span class="badge badge-light">{{count($notifications)}}</span>--}}
{{--                            @endif--}}

{{--                        </a>--}}
{{--                        @if(count($notifications) > 0)--}}
{{--                            <div class="dropdown-menu">--}}

{{--                                {!! Form::open(['method'=>'POST', 'action'=>'OnlineBookingController@update']) !!}--}}
{{--                                <input id="all-read" class="dropdown-item" type="submit" value="Mark all read">--}}
{{--                                {!! Form::close() !!}--}}

{{--                                @foreach($notifications as $notification)--}}
{{--                                    <a id="green-item" href="{{route('bookingEdit', $notification->id)}}" class="dropdown-item">--}}
{{--                                        {{Str::limit($notification->restaurant_title, 20)}} -> {{Str::limit($notification->name, 20)}}, {{$notification->party}}--}}
{{--                                    </a>--}}
{{--                                @endforeach--}}
{{--                            </div>--}}
{{--                        @else--}}
{{--                            <div class="dropdown-menu">--}}
{{--                                <p class="dropdown-item">You dont have notifications</p>--}}
{{--                            </div>--}}
{{--                        @endif--}}
{{--                    </li>--}}
{{--                    <li class="nav-item dropdown mr-3">--}}
{{--                        <a href="#" class="nav-link dropdown-toggle" data-toggle="dropdown">--}}
{{--                            <i class="fas fa-user"></i> {{Auth::user()->name}}--}}
{{--                        </a>--}}
{{--                        <div class="dropdown-menu">--}}
{{--                            <a href="{{route('user.edit', Auth::user()->id)}}" class="dropdown-item">--}}
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
{{--                    <h1><i class="fas fa-calendar-alt"></i> Create Event</h1>--}}
{{--                </div>--}}
{{--            </div>--}}
{{--        </div>--}}
{{--    </header>--}}

{{--    <!-- ACTIONS -->--}}
{{--    <section id="actions" class="py-4 mb-4 bg-light">--}}
{{--        <div class="container">--}}
{{--            <div class="row">--}}
{{--                <div class="col-md-3">--}}
{{--                    <a href="/admin" class="btn btn-primary btn-block">--}}
{{--                        <i class="fas fa-arrow-left"></i> Back To Dashboard--}}
{{--                    </a>--}}
{{--                </div>--}}
{{--                <div class="col-md-3">--}}

{{--                </div>--}}
{{--            </div>--}}
{{--        </div>--}}
{{--    </section>--}}

{{--    <div class="container">--}}
{{--        <h1>Edit User</h1>--}}
{{--        <div class="row">--}}

{{--            <div class="col-md-6">--}}
{{--                @include('includes.user_form_error')--}}
{{--                <div class="card">--}}
{{--                    <div class="card-header">--}}
{{--                        <h4>Event</h4>--}}

{{--                    </div>--}}

{{--                    <div class="card-body">--}}



{{--                        {!! Form::open(['method'=>'POST', 'action'=>'AuthorEventController@store', 'files'=>true]) !!}--}}
{{--                        {{csrf_field()}}--}}
{{--                        <div class="form-group">--}}
{{--                            {!! Form::label('title', 'Name:') !!}--}}
{{--                            {!! Form::text('title', null, ['class'=>'form-control']) !!}--}}
{{--                        </div>--}}
{{--                        <div class="form-group">--}}
{{--                            {!! Form::label('body', 'Description:') !!}--}}
{{--                            {!! Form::textarea('body', null, ['class'=>'form-control', 'rows'=>3]) !!}--}}
{{--                        </div>--}}
{{--                        <div class="form-group">--}}
{{--                            {!! Form::label('restaurant_id', 'Restaurant:') !!}--}}
{{--                            {!! Form::select('restaurant_id', ['' => 'Choose Restaurant'] + $restaurants, null, ['class'=>'form-control']) !!}--}}
{{--                        </div>--}}
{{--                        <div class="custom-file mb-3">--}}
{{--                            {!! Form::label('photo_id', 'Upload Picture', ['class'=>'custom-file-label', 'id'=>'pointers']) !!}--}}
{{--                            {!! Form::file('photo_id', null, ['class'=>'custom-file-input']) !!}--}}
{{--                        </div>--}}


{{--                            <div class="form-group">--}}
{{--                                <div class="row d-flex justify-content-end">--}}
{{--                                    <div class="col-md-6">--}}
{{--                                        <button type="submit" class="btn btn-success btn-block"><i class="fas fa-calendar-alt"></i> Create Event</button>--}}
{{--                                        {!! Form::close() !!}--}}
{{--                                    </div>--}}
{{--                                </div>--}}
{{--                            </div>--}}



{{--                        @if($silver)--}}
{{--                            @include('silver.includes.create.silver_create_restaurant')--}}
{{--                        @elseif($bronze)--}}
{{--                            @include('silver.includes.create.bronze_create_restaurant')--}}
{{--                        @elseif($gold)--}}
{{--                            @include('silver.includes.create.gold_create_restaurant')--}}
{{--                        @endif--}}

{{--                    </div>--}}
{{--                </div>--}}

{{--            </div>--}}


{{--        </div>--}}
{{--    </div>--}}
{{--    </body>--}}
{{--@endsection--}}

{{--@section('footer')--}}

{{--@endsection--}}












@extends('layouts.admin-thema')
@section('title', 'Create Event')
@section('style', '
        .help-block {
            margin-top: -10px;
            font-size: 12px;
            float: right;
            color: red;
        }
        #selectorLng {
        border: 1px solid #CACACA;
        border-radius: 15px;
        float: right;
    }
')
@section('content')
<!-- START MENU -->
<section id="admin2-dashboard">
    <div class="admin2-menu">
        <ol>
            <a href="/{{$parametarExport}}"><li><img src="{{asset('img/logo-white.svg')}}" alt=""></li></a>
            <a href="/{{$parametarExport}}"><li class="p-lead home-menu-toggle">Home</li></a>
            <a href="{{route('user.edit', [app()->getLocale(), Auth::user()->id])}}"><p class="p-lead admin-menu-name">{{Auth::user()->name}}</p></a>
            <hr>
            <a href="/{{$parametarExport}}/admin"><li class="p-lead"><i class="fas fa-home"></i> Dashboard</li></a>
            <a href="{{route('restaurant.index', app()->getLocale())}}"><li class="p-lead"><i class="fas fa-utensils"></i> Restaurants</li></a>
            @if($platinium || $gold)
                <a href="{{route('event.index', app()->getLocale())}}"><li class="p-lead active"><i class="fas fa-calendar-alt"></i> Events</li></a>
                <a href="{{route('gallery.index', app()->getLocale())}}"><li class="p-lead"><i class="fas fa-camera"></i> Gallery</li></a>
                <a href="{{route('booking')}}"><li class="p-lead"><i class="fas fa-paste"></i> Booking</li></a>
            @endif
            @if($platinium)
                <a href="{{route('actions.index')}}"><li class="p-lead"><i class="fas fa-wallet"></i> Actions</li></a>
            @endif
            <a href="{{route('logout', app()->getLocale())}}" onclick="event.preventDefault();
            document.getElementById('logout-form').submit();"><p class="p-lead logout-menu-show"><i class="fas fa-sign-out-alt"></i> {{__('Logout')}}</p></a>
            <form id="logout-form" action="{{ route('logout', app()->getLocale()) }}" method="POST" style="display: none;">
                @csrf
            </form>
        </ol>
    </div>
    <!-- END MENU -->

    <!-- START PACKAGE CONTENT -->
    <div class="admin2-dashboard-content">
        <div class="dashboard-header">
            <i class="fas fa-calendar-alt"></i><h2>Events</h2>

            <a class="toggle-menu-link" href="javascript:void(0);" onclick="myFunction()">
                <i class="fas fa-bars"></i>
            </a>

            <a href="{{route('logout', app()->getLocale())}}" onclick="event.preventDefault();
            document.getElementById('logout-form').submit();">
                <p class="p-lead"><i class="fas fa-sign-out-alt"></i> {{__('Logout')}}</p></a>
            <form id="logout-form" action="{{ route('logout', app()->getLocale()) }}" method="POST" style="display: none;">
                @csrf
            </form>

            <a href="{{route('user.edit', [app()->getLocale(), Auth::user()->id])}}"><p class="p-lead">{{Auth::user()->name}}</p> <img src="{{Auth::user()->photo->file}}" alt=""></a>
        </div>

        <div class="dashboard-content">
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
{{--                    @if ($errors->any())--}}
{{--                        <div class="alert alert-danger">--}}
{{--                            <ul>--}}
{{--                                @foreach ($errors->all() as $error)--}}
{{--                                    <li style="color: red;">{{ $error }}</li>--}}
{{--                                @endforeach--}}
{{--                            </ul>--}}
{{--                        </div>--}}
{{--                    @endif--}}
                    <p class="p-lead-h4">Create a new event</p>

                    {!! Form::open(['method'=>'POST', 'action'=>['AuthorEventController@store', app()->getLocale()], 'files'=>true]) !!}
                    {{csrf_field()}}
                    {!! Form::label('title', 'NAME', ['class'=>'label-grey-small']) !!}
                    {!! Form::text('title', null, ['class'=>'create-form-input', 'id'=>'name']) !!}
                    @if($errors->has('title'))
                        <span class="help-block">
                            <strong>{{$errors->first('title')}}</strong>
                        </span>
                    @endif

                    {!! Form::label('body', 'EVENT DESCRIPTION', ['class'=>'label-grey-small']) !!}
                    {!! Form::textarea('body', null, ['class'=>'create-form-textarea', 'id'=>'description', 'rows'=>3]) !!}
                    @if($errors->has('body'))
                        <span class="help-block">
                            <strong>{{$errors->first('body')}}</strong>
                        </span>
                    @endif

                    {!! Form::label('restaurant_id', 'RESTAURANT', ['class'=>'label-grey-small']) !!}
                    {!! Form::select('restaurant_id', ['' => 'Choose Restaurant'] + $restaurants, null, ['class'=>'create-form-select', 'id'=>'restaurant']) !!}
                    @if($errors->has('restaurant_id'))
                        <span class="help-block">
                            <strong>{{$errors->first('restaurant_id')}}</strong>
                        </span>
                    @endif


                    <div class="upload-image upload-user-image">
                        <p id="image-r" class="label-grey-image-r">UPLOAD IMAGE</p>
                        <button type="button" class="input-file">
                            <input type="file" name="photo_id" id="photo_id"/>
                            <label for="photo_id">BROWSE</label>
                        </button>
                        <hr class="between-fields">
                    </div>

                    <button class="create-input-button" type="submit"><i class="fas fa-calendar-alt"></i> CREATE</button>
                    {!! Form::close() !!}
                </div>



            </div>
        </div>
    </div>
    </div>
</section>
<!-- END PACKAGE CONTENT -->
@endsection

@section('footer')
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
    <script>
        $("document").ready(function(){
            setTimeout(function(){
                $(".help-block").fadeOut(1000, function() {$(this).remove()});
            }, 5000 );
        });


    </script>
@endsection