{{--@extends('layouts.admin')--}}
{{--<title>Edit User</title>--}}
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
{{--                    @if($platinium || $gold)--}}
{{--                        <li class="nav-item px-2">--}}
{{--                            <a href="{{route('event.index')}}" class="nav-link">Events</a>--}}
{{--                        </li>--}}
{{--                        <li class="nav-item px-2">--}}
{{--                            <a href="{{route('gallery.index')}}" class="nav-link">Gallery</a>--}}
{{--                        </li>--}}
{{--                        <li class="nav-item px-2">--}}
{{--                            <a href="{{route('booking')}}" class="nav-link">Booking</a>--}}
{{--                        </li>--}}
{{--                    @endif--}}
{{--                    @if($platinium)--}}
{{--                        <li class="nav-item px-2">--}}
{{--                            <a href="{{route('actions.index')}}" class="nav-link">Actions</a>--}}
{{--                        </li>--}}
{{--                    @endif--}}
{{--                </ul>--}}

{{--                <ul class="navbar-nav ml-auto">--}}
{{--                    @if($platinium || $gold)--}}
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
{{--                    @endif--}}
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
{{--                    <h1><i class="fas fa-user"></i> Edit Profile</h1>--}}
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
{{--                    {!! Form::open(['method'=>'DELETE', 'action'=>['SilverUserController@destroy', $user->id]]) !!}--}}
{{--                    <button type="submit" class="btn btn-danger btn-block"><i class="fas fa-trash-alt"></i> Delete Account</button>--}}
{{--                    {!! Form::close() !!}--}}
{{--                </div>--}}
{{--            </div>--}}
{{--        </div>--}}
{{--    </section>--}}

{{--    <div class="container">--}}
{{--        @include('includes.form_error')--}}
{{--        <h1>Edit User</h1>--}}
{{--        <div class="row">--}}
{{--            <div class="col-md-6">--}}
{{--                <div class="card">--}}
{{--                    <div class="card-header">--}}
{{--                        <h4>Profile</h4>--}}
{{--                    </div>--}}

{{--                    <div class="card-body">--}}
{{--                        {!! Form::model($user, ['method'=>'PATCH', 'action'=>['SilverUserController@update', $user->id], 'files'=>true]) !!}--}}
{{--                        <div class="form-group">--}}
{{--                            {!! Form::label('name', 'Name:') !!}--}}
{{--                            {!! Form::text('name', null, ['class'=>'form-control']) !!}--}}
{{--                        </div>--}}

{{--                        <div class="form-group">--}}
{{--                            {!! Form::label('email', 'Email:') !!}--}}
{{--                            {!! Form::email('email', null, ['class'=>'form-control']) !!}--}}
{{--                        </div>--}}

{{--                        <div class="form-group">--}}
{{--                            {!! Form::label('password', 'Password:') !!}--}}
{{--                            {!! Form::password('password', ['class'=>'form-control']) !!}--}}
{{--                            <small class="text-muted">Leave empty to keep the same</small>--}}
{{--                        </div>--}}

{{--                        <div class="form-group">--}}
{{--                            {!! Form::label('package_id', 'Package:') !!}--}}
{{--                            {!! Form::select('package_id', $packages, null, ['class'=>'form-control']) !!}--}}
{{--                        </div>--}}

{{--                        <div class="form-group">--}}
{{--                            {!! Form::label('is_active', 'Status:') !!}--}}
{{--                            {!! Form::select('is_active', array(1 => 'Active', 0 => 'Not Active'), null, ['class'=>'form-control']) !!}--}}
{{--                        </div>--}}

{{--                        <div class="form-group">--}}
{{--                            {!! Form::label('photo_id', 'Photo:') !!}--}}
{{--                            <small class="text-muted">Leave empty to keep the same</small>--}}
{{--                            {!! Form::file('photo_id', null, ['class'=>'form-control']) !!}--}}
{{--                        </div>--}}

{{--                        <div class="form-group">--}}
{{--                            <div class="row d-flex justify-content-end">--}}
{{--                                <div class="col-md-6">--}}
{{--                                    <button type="submit" class="btn btn-success btn-block"> Update Profile</button>--}}
{{--                                    {!! Form::close() !!}--}}
{{--                                </div>--}}
{{--                            </div>--}}
{{--                        </div>--}}
{{--                    </div>--}}

{{--                </div>--}}

{{--            </div>--}}
{{--            <div class="col-md-6">--}}
{{--                <img width="300" src="{{$user->photo ? $user->photo->file : 'http://placehold.it/400x400'}}" class="img-fluid img-thumbnail rounded" alt="">--}}
{{--            </div>--}}

{{--        </div>--}}
{{--    </div>--}}

{{--@endsection--}}

{{--@section('footer')--}}

{{--@endsection--}}












{{--@extends('layouts.admin-thema')--}}
{{--<style>--}}
{{--    .leave-empty {--}}
{{--        font-size: 12px;--}}
{{--        display: block;--}}
{{--        color: grey;--}}
{{--        margin-bottom: 8px;--}}
{{--    }--}}
{{--    .distance-bottom {--}}
{{--        margin-bottom: 0!important;--}}
{{--    }--}}
{{--</style>--}}
{{--@section('content')--}}
{{--<!-- START MENU -->--}}
{{--<section id="admin2-dashboard">--}}
{{--    <div class="admin2-menu">--}}
{{--        <ol>--}}
{{--            <a href="/"><li><img src="{{asset('img/logo-white.svg')}}" alt=""></li></a>--}}
{{--            <a href="/"><li class="p-lead home-menu-toggle">Home</li></a>--}}
{{--            <a href="{{route('user.edit', Auth::user()->id)}}"><p class="p-lead admin-menu-name">{{Auth::user()->name}}</p></a>--}}
{{--            <hr>--}}
{{--            <a href="/admin"><li class="p-lead"><i class="fas fa-home"></i> Dashboard</li></a>--}}
{{--            <a href="{{route('restaurant.index')}}"><li class="p-lead"><i class="fas fa-utensils"></i> Restaurants</li></a>--}}
{{--            @if($platinium || $gold)--}}
{{--                <a href="{{route('event.index')}}"><li class="p-lead"><i class="fas fa-calendar-alt"></i> Events</li></a>--}}
{{--                <a href="{{route('gallery.index')}}"><li class="p-lead"><i class="fas fa-camera"></i> Gallery</li></a>--}}
{{--                <a href="{{route('booking')}}"><li class="p-lead"><i class="fas fa-paste"></i> Booking</li></a>--}}
{{--            @endif--}}
{{--            @if($platinium)--}}
{{--                <a href="{{route('actions.index')}}"><li class="p-lead"><i class="fas fa-wallet"></i> Actions</li></a>--}}
{{--            @endif--}}
{{--            <a href="{{route('logout')}}" onclick="event.preventDefault();--}}
{{--            document.getElementById('logout-form').submit();"><p class="p-lead logout-menu-show"><i class="fas fa-sign-out-alt"></i> {{__('Logout')}}</p></a>--}}
{{--            <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">--}}
{{--                @csrf--}}
{{--            </form>--}}
{{--        </ol>--}}
{{--    </div>--}}
{{--    <!-- END MENU -->--}}

{{--    <!-- START PACKAGE CONTENT -->--}}
{{--    <div class="admin2-dashboard-content">--}}
{{--        <div class="dashboard-header">--}}
{{--            <i class="fas fa-users"></i><h2>Users</h2>--}}
{{--            <a href="{{route('logout')}}" onclick="event.preventDefault();--}}
{{--            document.getElementById('logout-form').submit();">--}}
{{--                <p class="p-lead"><i class="fas fa-sign-out-alt"></i> {{__('Logout')}}</p></a>--}}
{{--            <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">--}}
{{--                @csrf--}}
{{--            </form>--}}

{{--            <a href="{{route('user.edit', Auth::user()->id)}}"><p class="p-lead">{{Auth::user()->name}}</p> <img src="{{Auth::user()->photo->file}}" alt=""></a>--}}
{{--        </div>--}}
{{--        <div class="dashboard-content">--}}

{{--            <a href="/admin" id="back-button" class="back-button">Dashboard</a>--}}
{{--            {!! Form::open(['method'=>'DELETE', 'action'=>['SilverUserController@destroy', $user->id]]) !!}--}}
{{--            <input type="submit" class="delete-button" value="Delete">--}}
{{--            {!! Form::close() !!}--}}


{{--            <div class="create-form">--}}
{{--                <div class="form-left">--}}
{{--                    <p class="p-lead-h4">Edit user</p>--}}

{{--                    {!! Form::model($user, ['method'=>'PATCH', 'action'=>['SilverUserController@update', $user->id], 'files'=>true]) !!}--}}

{{--                    {!! Form::label('name', 'NAME', ['class'=>'label-grey-small']) !!}--}}
{{--                    {!! Form::text('name', null, ['class'=>'create-form-input', 'id'=>'name']) !!}--}}

{{--                    {!! Form::label('email', 'EMAIL', ['class'=>'label-grey-small']) !!}--}}
{{--                    {!! Form::email('email', null, ['class'=>'create-form-input', 'id'=>'email']) !!}--}}

{{--                    {!! Form::label('password', 'PASSWORD', ['class'=>'label-grey-small']) !!}--}}
{{--                    {!! Form::password('password', ['class'=>'create-form-input distance-bottom', 'id'=>'password']) !!}--}}
{{--                    <small class="leave-empty">Leave empty the keep same</small>--}}

{{--                    {!! Form::label('package_id', 'PACKAGE', ['class'=>'label-grey-small']) !!}--}}
{{--                    {!! Form::select('package_id', $packages, null, ['class'=>'create-form-select', 'id'=>'package']) !!}--}}

{{--                    {!! Form::label('is_active', 'STATUS', ['class'=>'label-grey-small']) !!}--}}
{{--                    {!! Form::select('is_active', array(1 => 'Active', 0 => 'Not Active'), null, ['class'=>'create-form-select', 'id'=>'status']) !!}--}}

{{--                    <div class="upload-image">--}}
{{--                        <p class="label-grey-image-r">UPLOAD IMAGE</p>--}}
{{--                        <button type="button" class="input-file">--}}

{{--                            {!! Form::file('photo_id', null, ['class'=>'custom-file-input', 'id'=>'file-input']) !!}--}}
{{--                            {!! Form::label('photo_id', 'PHOTO', ['class'=>'custom-file-label', 'id'=>'pointers']) !!}--}}
{{--                        </button>--}}
{{--                        <hr class="between-fields">--}}
{{--                    </div>--}}

{{--                    <button class="create-input-button" type="submit"><i class="fas fa-users"></i> UPDATE</button>--}}
{{--                    {!! Form::close() !!}--}}
{{--                </div>--}}

{{--                <div class="form-right">--}}
{{--                    <div class="google-maps"></div>--}}
{{--                </div>--}}

{{--            </div>--}}
{{--        </div>--}}
{{--    </div>--}}
{{--    </div>--}}
{{--</section>--}}
{{--<!-- END PACKAGE CONTENT -->--}}
{{--@endsection--}}

{{--@section('footer')--}}

{{--@endsection--}}










@extends('layouts.admin-thema')
@section('title', 'Edit user')
@section('style', '
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
            <a href="/{{$parametarExport}}/admin"><li class="p-lead home-menu-toggle">Home</li></a>
            <a href="{{route('user.edit', [app()->getLocale(), Auth::user()->id])}}"><p class="p-lead admin-menu-name">{{Auth::user()->name}}</p></a>
            <hr>
            <a href="/{{$parametarExport}}/admin"><li class="p-lead"><i class="fas fa-home"></i> Dashboard</li></a>
            <a href="{{route('restaurant.index', app()->getLocale())}}"><li class="p-lead"><i class="fas fa-utensils"></i> Restaurants</li></a>
            @if($platinium || $gold)
                <a href="{{route('event.index', app()->getLocale())}}"><li class="p-lead"><i class="fas fa-calendar-alt"></i> Events</li></a>
                <a href="{{route('gallery.index', app()->getLocale())}}"><li class="p-lead"><i class="fas fa-camera"></i> Gallery</li></a>
            @endif
            @if($platinium || $gold || $silver)
                <a href="{{route('booking', app()->getLocale())}}"><li class="p-lead"><i class="fas fa-paste"></i> Booking</li></a>
            @endif
            @if($platinium)
                <a href="{{route('actions.index', app()->getLocale())}}"><li class="p-lead"><i class="fas fa-wallet"></i> Actions</li></a>
            @endif

            <a href="{{route('logout', app()->getLocale())}}" onclick="event.preventDefault();
            document.getElementById('logout-form').submit();"><p class="p-lead logout-menu-show"><i class="fas fa-sign-out-alt"></i> {{__('Logout')}}</p></a>
            <form id="logout-form" action="{{ route('logout', app()->getLocale()) }}" method="POST" style="display: none;">--}}
                @csrf
            </form>
        </ol>
    </div>
    <!-- END MENU -->

    <!-- START PACKAGE CONTENT -->
    <div class="admin2-dashboard-content">
        <div class="dashboard-header">
            <i class="fas fa-users"></i><h2>Users</h2>

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
                        <option value="{{ route(\Illuminate\Support\Facades\Route::currentRouteName(), [$locale, $user]) }}">
                            <a class="nav-link"
                               href="{{ route(\Illuminate\Support\Facades\Route::currentRouteName(), [$locale, $user]) }}"
                               @if (app()->getLocale() == $locale) style="font-weight: bold; text-decoration: underline" @endif>{{ strtoupper($locale) }}</a>
                        </option>
                    @endforeach
                @elseif($parametarExport == 'en')
                    @foreach (array_reverse(config('app.available_locales')) as $locale)
                        <option value="{{ route(\Illuminate\Support\Facades\Route::currentRouteName(), [$locale, $user]) }}">
                            <a class="nav-link"
                               href="{{ route(\Illuminate\Support\Facades\Route::currentRouteName(), [$locale, $user]) }}"
                               @if (app()->getLocale() == $locale) style="font-weight: bold; text-decoration: underline" @endif>{{ strtoupper($locale) }}</a>
                        </option>
                    @endforeach
                @endif
            </select>
            <a href="/{{$parametarExport}}/admin" id="back-button" class="back-button">Dashboard</a>
            {!! Form::open(['method'=>'DELETE', 'action'=>['SilverUserController@destroy', app()->getLocale(), $user->id]]) !!}
            <input type="submit" class="delete-button" value="Delete">
            {!! Form::close() !!}

            <div class="create-form">
                <div class="form-left">
                    <p class="p-lead-h4">Edit user</p>

                    {!! Form::model($user, ['method'=>'PATCH', 'action'=>['SilverUserController@update', app()->getLocale(), $user->id], 'files'=>true]) !!}

                    {!! Form::label('name', 'NAME', ['class'=>'label-grey-small']) !!}
                    {!! Form::text('name', null, ['class'=>'create-form-input', 'id'=>'name']) !!}

                    {!! Form::label('email', 'EMAIL', ['class'=>'label-grey-small']) !!}
                    {!! Form::email('email', null, ['class'=>'create-form-input', 'id'=>'email']) !!}

                    {!! Form::label('password', 'PASSWORD', ['class'=>'label-grey-small']) !!}
                    {!! Form::password('password', ['class'=>'create-form-input', 'id'=>'password']) !!}

                    {!! Form::label('package_id', 'PACKAGE', ['class'=>'label-grey-small']) !!}
                    {!! Form::select('package_id', $packages, null, ['class'=>'create-form-select', 'id'=>'package']) !!}

                    {!! Form::label('is_active', 'STATUS', ['class'=>'label-grey-small']) !!}
                    {!! Form::select('is_active', array(1 => 'Active', 0 => 'Not Active'), null, ['class'=>'create-form-select', 'id'=>'status']) !!}


                    <div class="upload-image">
                        <p id="image-r" class="label-grey-image-r">UPLOAD IMAGE</p>
                        <button type="button" class="input-file">
                            {!! Form::file('photo_id', null, ['id'=>'file-input']) !!}
                            {!! Form::label('photo_id', 'BROWSE') !!}
                        </button>
                        <hr class="between-fields">
                    </div>

                    <button class="create-input-button" type="submit"><i class="fas fa-users"></i> UPDATE</button>

                    {!! Form::close() !!}
                </div>

                <div class="form-right">
                    <div class="google-maps" style="height: 200px!important; background-color: transparent!important;">
                        <img width="300" src="{{$user->photo ? $user->photo->file : 'http://placehold.it/400x400'}}" class="img-fluid img-thumbnail rounded" style="width:100%; height: 100%;" alt="">
                    </div>
                </div>

            </div>
        </div>
    </div>
    </div>
</section>
<!-- END PACKAGE CONTENT -->
@endsection

@section('footer')

@endsection