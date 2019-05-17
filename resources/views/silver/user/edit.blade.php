@extends('layouts.admin')
<title>Edit User</title>
@section('content')

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
                        <a href="{{route('restaurant.index')}}" class="nav-link">Restaurants</a>
                    </li>
                    @if($gold)
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
                    <h1><i class="fas fa-user"></i> Edit Profile</h1>
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
                    {!! Form::open(['method'=>'DELETE', 'action'=>['SilverUserController@destroy', $user->id]]) !!}
                    <button type="submit" class="btn btn-danger btn-block"><i class="fas fa-trash-alt"></i> Delete Account</button>
                    {!! Form::close() !!}
                </div>
            </div>
        </div>
    </section>

    <div class="container">
        @include('includes.form_error')
        {{--<h1>Edit User</h1>--}}
        <div class="row">
            <div class="col-md-6">
                <div class="card">
                    <div class="card-header">
                        <h4>Profile</h4>
                    </div>

                    <div class="card-body">
                        {!! Form::model($user, ['method'=>'PATCH', 'action'=>['SilverUserController@update', $user->id], 'files'=>true]) !!}
                        <div class="form-group">
                            {!! Form::label('name', 'Name:') !!}
                            {!! Form::text('name', null, ['class'=>'form-control']) !!}
                        </div>

                        <div class="form-group">
                            {!! Form::label('email', 'Email:') !!}
                            {!! Form::email('email', null, ['class'=>'form-control']) !!}
                        </div>

                        <div class="form-group">
                            {!! Form::label('password', 'Password:') !!}
                            {!! Form::password('password', ['class'=>'form-control']) !!}
                            <small class="text-muted">Leave empty to keep the same</small>
                        </div>

                        <div class="form-group">
                            {!! Form::label('package_id', 'Package:') !!}
                            {!! Form::select('package_id', $packages, null, ['class'=>'form-control']) !!}
                        </div>

                        <div class="form-group">
                            {!! Form::label('is_active', 'Status:') !!}
                            {!! Form::select('is_active', array(1 => 'Active', 0 => 'Not Active'), null, ['class'=>'form-control']) !!}
                        </div>

                        <div class="form-group">
                            {!! Form::label('photo_id', 'Photo:') !!}
                            <small class="text-muted">Leave empty to keep the same</small>
                            {!! Form::file('photo_id', null, ['class'=>'form-control']) !!}
                        </div>

                        <div class="form-group">
                            <div class="row d-flex justify-content-end">
                                <div class="col-md-6">
                                    <button type="submit" class="btn btn-success btn-block"> Update Profile</button>
                                    {!! Form::close() !!}
                                </div>
                            </div>
                        </div>
                    </div>

                </div>

            </div>
            <div class="col-md-6">
                <img width="300" src="{{$user->photo ? $user->photo->file : 'http://placehold.it/400x400'}}" class="img-fluid img-thumbnail rounded" alt="">
            </div>

        </div>
    </div>

@endsection

@section('footer')

@endsection

