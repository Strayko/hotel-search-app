@extends('layouts.admin')

@section('content')

    <nav class="navbar navbar-expand-sm navbar-dark bg-dark p-0">
        <div class="container">
            <a href="/bronze" class="navbar-brand">Admin</a>
            <button class="navbar-toggler" data-toggle="collapse" data-target="#navbarCollapse">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collpase navbar-collapse" id="navbarCollapse">
                <ul class="navbar-nav">
                    <li class="nav-item px-2">
                        <a href="/bronze" class="nav-link">Dashboard</a>
                    </li>
                    <li class="nav-item px-2">
                        <a href="{{route('restaurant-bronze.index')}}" class="nav-link active">Restaurant</a>
                    </li>
                </ul>

                <ul class="navbar-nav ml-auto">
                    <li class="nav-item dropdown mr-3">
                        <a href="#" class="nav-link dropdown-toggle" data-toggle="dropdown">
                            <i class="fas fa-user"></i> {{Auth::user()->name}}
                        </a>
                        <div class="dropdown-menu">
                            <a href="{{route('user-bronze.edit', Auth::user()->id)}}" class="dropdown-item">
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
    <header id="main-header" class="py-2 bg-primary text-white">
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
                    <a href="#" class="btn btn-primary btn-block" data-toggle="modal" data-target="#addRestaurantModal">
                        <i class="fas fa-plus"></i> Add Restaurant
                    </a>
                </div>
                <div class="col-md-6 ml-auto">
                    <div class="input-group">
                        <input type="text" class="form-control" placeholder="Search Restaurants...">
                        <div class="input-group-append">
                            <button class="btn btn-primary">Search</button>
                        </div>
                    </div>
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
                            <h4>Latest Restaurants</h4>
                        </div>

                        <table class="table table-striped">
                            <thead class="thead-dark">
                            <tr>
                                <th>Id</th>
                                <th>Photo</th>
                                <th>Owner</th>
                                <th>Package</th>
                                <th>Title</th>
                                <th>Body</th>
                                <th>Created</th>
                                <th>Updated</th>
                                <th></th>
                            </tr>
                            </thead>
                            <tbody>
                            @if($restaurants)
                                @foreach($restaurants as $restaurant)
                                    <tr>
                                        <td>{{$restaurant->id}}</td>
                                        <td><img height="50" src="{{$restaurant->photo ? $restaurant->photo->file : 'http://placehold.it/400x400'}}" alt=""></td>
                                        <td>{{$restaurant->user->name}}</td>
                                        <td>{{$restaurant->user ? $restaurant->user->package->name : 'Uncategorized'}}</td>
                                        <td>{{$restaurant->title}}</td>
                                        <td>{{str_limit($restaurant->body, 10)}}</td>
                                        <td>{{$restaurant->created_at->diffForHumans()}}</td>
                                        <td>{{$restaurant->updated_at->diffForHumans()}}</td>
                                        <td>
                                            <a href="{{route('restaurant-bronze.edit', $restaurant->id)}}" class="btn btn-secondary">
                                                <i class="fas fa-utensils"></i> Edit
                                            </a>
                                            <a href="#" class="d-inline-block">
                                                {!! Form::open(['method'=>'DELETE', 'action'=>['BronzeRestaurantController@destroy', $restaurant->id]]) !!}
                                                <button type="submit" class="btn btn-secondary"><i class="fas fa-trash-alt"></i> Delete</button>
                                                {!! Form::close() !!}
                                            </a>
                                        </td>
                                    </tr>
                                @endforeach
                            @endif
                            </tbody>
                        </table>
                        <!-- PAGINATION -->
                        <nav class="ml-4">
                            <ul class="pagination">
                                <li class="page-item disabled">
                                    <a href="#" class="page-link">Previous</a>
                                </li>
                                <li class="page-item active">
                                    <a href="#" class="page-link">1</a>
                                </li>
                                <li class="page-item">
                                    <a href="#" class="page-link">2</a>
                                </li>
                                <li class="page-item">
                                    <a href="#" class="page-link">3</a>
                                </li>
                                <li class="page-item">
                                    <a href="#" class="page-link">Next</a>
                                </li>
                            </ul>
                        </nav>
                    </div>
                </div>
            </div>
        </div>
    </section>

    {{--MODAL--}}
    <div class="modal fade" id="addRestaurantModal">
        <div class="modal-dialog modal-lg">
            <div class="modal-content">
                <div class="modal-header bg-primary text-white">
                    <h5 class="modal-title">Add Restaurant</h5>
                    <button class="close" data-dismiss="modal">
                        <span>&times;</span>
                    </button>
                </div>
                <div class="modal-body">

                    {!! Form::open(['method'=>'POST', 'action'=>'BronzeRestaurantController@store', 'files'=>true]) !!}
                    {{csrf_field()}}
                    <div class="form-group">
                        {!! Form::label('title', 'Title:') !!}
                        {!! Form::text('title', null, ['class'=>'form-control']) !!}
                    </div>

                    <div class="form-group">
                        {!! Form::label('body', 'Description:') !!}
                        {!! Form::textarea('body', null, ['class'=>'form-control', 'rows'=>3]) !!}
                    </div>
                    <div class="form-group">
                        {!! Form::label('photo_id', 'Photo:') !!}
                        {!! Form::file('photo_id', null, ['class'=>'form-control']) !!}
                    </div>

                </div>
                <div class="modal-footer">
                    {!! Form::submit('Create Restaurant', ['class'=>'btn btn-primary']) !!}
                    {!! Form::close() !!}
                </div>
            </div>
        </div>
    </div>

@endsection

@section('footer')

@endsection