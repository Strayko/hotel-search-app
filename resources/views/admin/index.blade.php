@extends('layouts.admin')
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/dropzone/4.3.0/min/dropzone.min.css">
@section('content')

    <nav class="navbar navbar-expand-sm navbar-dark bg-dark p-0">
        <div class="container">
            <a href="/admin" class="navbar-brand">Admin</a>
            <button class="navbar-toggler" data-toggle="collapse" data-target="#navbarCollapse">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collpase navbar-collapse" id="navbarCollapse">
                <ul class="navbar-nav">
                    <li class="nav-item px-2">
                        <a href="/admin" class="nav-link active">Dashboard</a>
                    </li>
                    <li class="nav-item px-2">
                        <a href="{{route('restaurants.index')}}" class="nav-link">Restaurants</a>
                    </li>
                    <li class="nav-item px-2">
                        <a href="{{route('packages.index')}}" class="nav-link">Packages</a>
                    </li>
                    <li class="nav-item px-2">
                        <a href="{{route('users.index')}}" class="nav-link">Users</a>
                    </li>
                    <li class="nav-item px-2">
                        <a href="{{route('media.index')}}" class="nav-link">Media</a>
                    </li>
                </ul>

                <ul class="navbar-nav ml-auto">
                    <li class="nav-item dropdown mr-3">
                        <a href="#" class="nav-link dropdown-toggle" data-toggle="dropdown">
                            <i class="fas fa-user"></i> {{Auth::user()->name}}
                        </a>
                        <div class="dropdown-menu">
                            <a href="{{route('users.edit', Auth::user()->id)}}" class="dropdown-item">
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
                    <h1><i class="fas fa-cog"></i> Dashboard</h1>
                </div>
            </div>
        </div>
    </header>

    <!-- ACTIONS -->
    <section id="actions" class="py-4 mb-4 bg-light">
        <div class="container">
            <div class="row">
                <div class="col-md-3">
                    <a href="#" class="btn btn-primary btn-block" data-toggle="modal" data-target="#addPostModal">
                        <i class="fas fa-plus"></i> Add Restaurant
                    </a>
                </div>
                <div class="col-md-3">
                    <a href="#" class="btn btn-success btn-block" data-toggle="modal" data-target="#addCategoryModal">
                        <i class="fas fa-plus"></i> Add Package
                    </a>
                </div>
                <div class="col-md-3">
                    <a href="#" class="btn btn-warning btn-block" data-toggle="modal" data-target="#addUserModal">
                        <i class="fas fa-plus"></i> Add User
                    </a>
                </div>
                <div class="col-md-3">
                    <a href="#" class="btn btn-info btn-block" data-toggle="modal" data-target="#addMediaModal">
                        <i class="fas fa-plus"></i> Upload
                    </a>
                </div>
            </div>
        </div>
    </section>

    <!-- RESTAURANTS -->
    <section id="posts">
        <div class="container">
            <div class="row">
                <div class="col-md-9">
                    <div class="card">
                        <div class="card-header">
                            <h4>Latest Restaurants</h4>
                        </div>
                        <table class="table table-striped">
                            <thead class="thead-dark">
                            <tr>
                                <th>Id</th>
                                <th>Photo</th>
                                <th>User</th>
                                <th>Restaurant</th>
                                <th>Package</th>
                                {{--<th>Body</th>--}}
                                <th>Created</th>

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
                                        <td>{{$restaurant->title}}</td>
                                        <td>{{$restaurant->user ? $restaurant->user->package->name : 'Uncategorized'}}</td>
                                        {{--<td>{{str_limit($restaurant->body, 20)}}</td>--}}
                                        <td>{{$restaurant->created_at->diffForHumans()}}</td>

                                        <td>
                                            <a href="{{route('restaurants.edit', $restaurant->id)}}" class="btn btn-secondary">
                                                <i class="fas fa-utensils"></i> Details
                                            </a>
                                        </td>
                                    </tr>
                                @endforeach
                            @endif

                            </tbody>
                        </table>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="card text-center bg-primary text-white mb-3">
                        <div class="card-body">
                            <h3>Restaurants</h3>
                            <h4 class="display-4">
                                <i class="fas fa-utensils"></i> {{$restaurants->count()}}
                            </h4>
                            <a href="{{route('restaurants.index')}}" class="btn btn-outline-light btn-sm">View</a>
                        </div>
                    </div>
                    <div class="card text-center bg-success text-white mb-3">
                        <div class="card-body">
                            <h3>Packages</h3>
                            <h4 class="display-4">
                                <i class="fas fa-box"></i> {{$package->count()}}
                            </h4>
                            <a href="{{route('packages.index')}}" class="btn btn-outline-light btn-sm">View</a>
                        </div>
                    </div>
                    <div class="card text-center bg-warning text-white mb-3">
                        <div class="card-body">
                            <h3>Users</h3>
                            <h4 class="display-4">
                                <i class="fas fa-users"></i> {{$users->count()}}
                            </h4>
                            <a href="{{route('users.index')}}" class="btn btn-outline-light btn-sm">View</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- MODALS -->
    <!-- ADD RESTAURANTS MODAL -->
    <div class="modal fade" id="addPostModal">
        <div class="modal-dialog modal-lg">
            <div class="modal-content">
                <div class="modal-header bg-primary text-white">
                    <h5 class="modal-title">Add Restaurant</h5>
                    <button class="close" data-dismiss="modal">
                        <span>&times;</span>
                    </button>
                </div>
                <div class="modal-body">

                        {!! Form::open(['method'=>'POST', 'action'=>'AdminRestaurantsController@store', 'files'=>true]) !!}
                        {{csrf_field()}}
                        <div class="form-group">
                            {!! Form::label('title', 'Title:') !!}
                            {!! Form::text('title', null, ['class'=>'form-control']) !!}
                        </div>
                        <div class="form-group">
                            {!! Form::label('package_id', 'Package:') !!}
                            {!! Form::select('package_id', ['' => 'Choose Packages'] + $packages, null, ['class'=>'form-control']) !!}
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
    </div>

    <!-- ADD MEDIA MODAL -->
    <div class="modal fade" id="addMediaModal">
        <div class="modal-dialog modal-lg">
            <div class="modal-content">
                <div class="modal-header bg-info text-white">
                    <h5 class="modal-title">Upload</h5>
                    <button class="close" data-dismiss="modal">
                        <span>&times;</span>
                    </button>
                </div>
                <div class="modal-body">

                    {!! Form::open(['method'=>'POST', 'action'=>'AdminMediaController@store', 'class'=>'dropzone']) !!}

                    {!! Form::close() !!}
                </div>
                <div class="modal-footer">
                    <div class="form-group">

                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- ADD PACKAGE MODAL -->
    <div class="modal fade" id="addCategoryModal">
        <div class="modal-dialog modal-lg">
            <div class="modal-content">
                <div class="modal-header bg-success text-white">
                    <h5 class="modal-title">Add Package</h5>
                    <button class="close" data-dismiss="modal">
                        <span>&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    {!! Form::open(['method'=>'POST', 'action'=>'AdminPackagesController@store']) !!}
                    {{csrf_field()}}
                    <div class="form-group">
                        {!! Form::label('name', 'Name:') !!}
                        {!! Form::text('name', null, ['class'=>'form-control']) !!}
                    </div>

                </div>
                <div class="modal-footer">
                    {!! Form::submit('Create Package', ['class'=>'btn btn-success']) !!}
                    {!! Form::close() !!}
                </div>
            </div>
        </div>
    </div>

    <!-- ADD MEDIA MODAL -->
    <div class="modal fade" id="addMediaModal">
        <div class="modal-dialog modal-lg">
            <div class="modal-content">
                <div class="modal-header bg-info text-white">
                    <h5 class="modal-title">Upload</h5>
                    <button class="close" data-dismiss="modal">
                        <span>&times;</span>
                    </button>
                </div>
                <div class="modal-body">


                </div>
                <div class="modal-footer">
                    <div class="form-group">
                        {{--{!! Form::submit('Create User', ['class'=>'btn btn-warning']) !!}--}}
                    </div>
                    {{--{!! Form::close() !!}--}}
                    {{--<button class="btn btn-warning" data-dismiss="modal">Save Changes</button>--}}

                </div>
            </div>
        </div>
    </div>

    <!-- ADD USER MODAL -->
    <div class="modal fade" id="addUserModal">
        <div class="modal-dialog modal-lg">
            <div class="modal-content">
                <div class="modal-header bg-warning text-white">
                    <h5 class="modal-title">Add User</h5>
                    <button class="close" data-dismiss="modal">
                        <span>&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    {!! Form::open(['method'=>'POST', 'action'=>'AdminUsersController@store', 'files'=>true]) !!}
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
                    </div>

                    <div class="form-group">
                        {!! Form::label('role_id', 'Role:') !!}
                        {!! Form::select('role_id', ['' => 'Choose Options'] + $roles, null, ['class'=>'form-control']) !!}
                    </div>

                    <div class="form-group">
                        {!! Form::label('package_id', 'Package:') !!}
                        {!! Form::select('package_id', ['' => 'Choose Packages'] + $packages, null, ['class'=>'form-control']) !!}
                    </div>

                    <div class="form-group">
                        {!! Form::label('is_active', 'Status:') !!}
                        {!! Form::select('is_active', array(1 => 'Active', 0 => 'Not Active'), 0, ['class'=>'form-control']) !!}
                    </div>

                    <div class="form-group">
                        {!! Form::label('photo_id', 'Photo:') !!}
                        {!! Form::file('photo_id', null, ['class'=>'form-control']) !!}
                    </div>


                </div>
                <div class="modal-footer">
                    <div class="form-group">
                        {!! Form::submit('Create User', ['class'=>'btn btn-warning']) !!}
                    </div>
                    {!! Form::close() !!}
                    {{--<button class="btn btn-warning" data-dismiss="modal">Save Changes</button>--}}
                </div>
            </div>
        </div>
    </div>
@endsection

@section('footer')
    <script src="https://cdnjs.cloudflare.com/ajax/libs/dropzone/4.3.0/min/dropzone.min.js"></script>
@endsection