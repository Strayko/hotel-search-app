@extends('layouts.admin')

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
                        <a href="{{route('restaurant.index')}}" class="nav-link active">Restaurant</a>
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
    <header id="main-header" class="py-2 bg-secondary text-white">
        <div class="container">
            <div class="row">
                <div class="col-md-6">
                    <h1><i class="fas fa-utensils"></i> Restaurants</h1>
                </div>
            </div>
        </div>
    </header>

    <!-- SEARCH -->
    <section id="search" class="py-4 mb-4 bg-light">
        <div class="container">
            <div class="row">
                <div class="col-md-3">
                    <a href="#" class="btn btn-secondary btn-block" data-toggle="modal" data-target="#addRestaurantModal">
                        <i class="fas fa-plus"></i> Add Restaurant
                    </a>
                </div>

            </div>
        </div>
    </section>
    @include('includes.form_error')

    <!-- RESTAURANTS -->
    <section id="posts">
        <div class="container">
            <div class="row">
                <div class="col">
                    <div class="card">
                        <div class="card-header">
                            @if(Session::has('deleted_restaurant'))
                                <p class="alert alert-danger">{{session('deleted_restaurant')}}</p>
                            @endif
                            <h4>Restaurants</h4>
                        </div>
                        @if(count($restaurants) > 0)
                        <table class="table table-striped">
                            <thead class="thead-dark">
                            <tr>
                                <th>Photo</th>
                                <th>Title</th>
                                <th>Body</th>
                                <th>View</th>
                                <th>Created</th>
                                <th>Updated</th>
                                <th></th>
                            </tr>
                            </thead>
                            <tbody>

                                @foreach($restaurants as $restaurant)
                                    <tr>
                                        <td><img height="50" width="50" src="{{$restaurant->photo ? $restaurant->photo->file : 'http://placehold.it/400x400'}}" alt=""></td>
                                        <td>{{Str::limit($restaurant->title, 15)}}</td>
                                        <td>{{Str::limit($restaurant->body, 10)}}</td>
                                        <td><a href="{{route('single_restaurant.restaurant', $restaurant->slug)}}">Restaurant</a></td>
                                        <td>{{$restaurant->created_at->diffForHumans()}}</td>
                                        <td>{{$restaurant->updated_at->diffForHumans()}}</td>
                                        <td>
                                            <a href="{{route('restaurant.edit', $restaurant->id)}}" class="btn btn-secondary">
                                                <i class="fas fa-utensils"></i> Edit/Delete
                                            </a>
                                        </td>
                                    </tr>
                                @endforeach
                                @else
                                <h1 class="text-center">Please add your Restaurant</h1>
                            @endif
                            </tbody>
                        </table>
                        <!-- PAGINATION -->

                    </div>
                </div>
            </div>
        </div>
    </section>

    {{--MODAL--}}
    <div class="modal fade" id="addRestaurantModal">
        <div class="modal-dialog modal-lg">
            <div class="modal-content">
                <div class="modal-header bg-secondary text-white">
                    <h5 class="modal-title">Add Restaurant</h5>
                    <button class="close" data-dismiss="modal">
                        <span>&times;</span>
                    </button>
                </div>
                <div class="modal-body">

                    @if($gold)
                        @include('silver.includes.create.gold_create_restaurant')
                    @elseif($silver)
                        @include('silver.includes.create.silver_create_restaurant')
                    @elseif($bronze)
                        @include('silver.includes.create.bronze_create_restaurant')
                    @endif

            </div>
        </div>
    </div>
    </div>
@endsection

@section('footer')

@endsection