@extends('layouts.admin')
<title>Restaurant</title>
<style>

</style>

@section('content')
    <body>
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
                    <li class="nav-item px-2">
                        <a href="{{route('event.index')}}" class="nav-link active">Events</a>
                    </li>
                    <li class="nav-item px-2">
                        <a href="{{route('gallery.index')}}" class="nav-link">Gallery</a>
                    </li>
                    <li class="nav-item px-2">
                        <a href="{{route('booking')}}" class="nav-link">Booking</a>
                    </li>
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
                    <h1><i class="fas fa-calendar-alt"></i> Edit Event</h1>
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
                    {!! Form::open(['method'=>'DELETE', 'action'=>['AuthorEventController@destroy', $events->id]]) !!}
                    <button type="submit" class="btn btn-danger btn-block"><i class="fas fa-trash-alt"></i> Delete Event</button>
                    {!! Form::close() !!}
                </div>
            </div>
        </div>
    </section>

    <div class="container">
        {{--<h1>Edit User</h1>--}}
        <div class="row">

            <div class="col-md-6">
                @include('includes.user_form_error')
                <div class="card">
                    <div class="card-header">
                        <h4>Event</h4>

                    </div>

                    <div class="card-body">



                        {!! Form::model($events, ['method'=>'PATCH', 'action'=>['AuthorEventController@update', $events->id], 'files'=>true]) !!}
                        {{csrf_field()}}
                        <div class="form-group">
                            {!! Form::label('title', 'Name:') !!}
                            {!! Form::text('title', null, ['class'=>'form-control']) !!}
                        </div>
                        <div class="form-group">
                            {!! Form::label('body', 'Description:') !!}
                            {!! Form::textarea('body', null, ['class'=>'form-control', 'rows'=>3]) !!}
                        </div>
                        <div class="form-group">
                            {!! Form::label('restaurant_id', 'Restaurant:') !!}
                            {!! Form::select('restaurant_id', ['' => 'Choose Restaurant'] + $restaurants, null, ['class'=>'form-control']) !!}
                        </div>
                        <small class="text-muted">Leave empty to keep the same</small>
                        <div class="custom-file mb-3">
                            {!! Form::label('photo_id', 'Upload Picture', ['class'=>'custom-file-label', 'id'=>'pointers']) !!}
                            {!! Form::file('photo_id', null, ['class'=>'custom-file-input']) !!}
                        </div>


                        <div class="form-group">
                            <div class="row d-flex justify-content-end">
                                <div class="col-md-6">
                                    <button type="submit" class="btn btn-success btn-block"><i class="fas fa-calendar-alt"></i> Update Event</button>
                                    {!! Form::close() !!}
                                </div>
                            </div>
                        </div>



                        {{--@if($silver)--}}
                        {{--@include('silver.includes.create.silver_create_restaurant')--}}
                        {{--@elseif($bronze)--}}
                        {{--@include('silver.includes.create.bronze_create_restaurant')--}}
                        {{--@elseif($gold)--}}
                        {{--@include('silver.includes.create.gold_create_restaurant')--}}
                        {{--@endif--}}

                    </div>
                </div>

            </div>


        </div>
    </div>
    </body>
@endsection

@section('footer')

@endsection