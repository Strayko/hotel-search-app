@extends('layouts.admin')
<title>Restaurant</title>
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
                        <a href="{{route('restaurant.index')}}" class="nav-link active">Restaurants</a>
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
                    <h1><i class="fas fa-user"></i> Edit Restaurant</h1>
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
                    {!! Form::open(['method'=>'DELETE', 'action'=>['SilverRestaurantController@destroy', $restaurants->id]]) !!}
                    <button type="submit" class="btn btn-danger btn-block"><i class="fas fa-trash-alt"></i> Delete Restaurant</button>
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
                        <h4>Restaurant</h4>
                    </div>

                    <div class="card-body">

                        @if($silver)
                            @include('silver.includes.edit.silver_edit_restaurant')
                        @elseif($bronze)
                            @include('silver.includes.edit.bronze_edit_restaurant')
                        @elseif($gold)
                            @include('silver.includes.edit.gold_edit_restaurant')
                        @endif

                    </div>
                </div>

            </div>
            <div class="col-md-6">
                <img width="500" src="{{$restaurants->photo ? $restaurants->photo->file : 'http://placehold.it/400x400'}}" class="img-fluid img-thumbnail rounded" alt="">
            </div>

        </div>
    </div>

@endsection

@section('footer')

@endsection

