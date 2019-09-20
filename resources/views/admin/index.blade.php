{{--@extends('layouts.admin')--}}
{{--<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/dropzone/4.3.0/min/dropzone.min.css">--}}
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
{{--                        <a href="/admin2" class="nav-link active">Dashboard</a>--}}
{{--                    </li>--}}
{{--                    <li class="nav-item px-2">--}}
{{--                        <a href="{{route('restaurants.index')}}" class="nav-link">Restaurants</a>--}}
{{--                    </li>--}}
{{--                    <li class="nav-item px-2">--}}
{{--                        <a href="{{route('packages.index')}}" class="nav-link">Packages</a>--}}
{{--                    </li>--}}
{{--                    <li class="nav-item px-2">--}}
{{--                        <a href="{{route('users.index')}}" class="nav-link">Users</a>--}}
{{--                    </li>--}}
{{--                    <li class="nav-item px-2">--}}
{{--                        <a href="{{route('media.index')}}" class="nav-link">Media</a>--}}
{{--                    </li>--}}
{{--                    <li class="nav-item px-2">--}}
{{--                        <a href="{{route('comments.index')}}" class="nav-link">Comments</a>--}}
{{--                    </li>--}}
{{--                    <li class="nav-item px-2">--}}
{{--                        <a href="{{route('locations.index')}}" class="nav-link">Locations</a>--}}
{{--                    </li>--}}
{{--                    <li class="nav-item dropdown">--}}
{{--                        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">--}}
{{--                            Others--}}
{{--                        </a>--}}
{{--                        <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">--}}
{{--                            <a class="dropdown-item" href="{{route('foods.index')}}">Foods</a>--}}
{{--                            <a class="dropdown-item" href="{{route('distance.index')}}">Distance</a>--}}
{{--                            <a class="dropdown-item" href="{{route('blog.index')}}">Blog</a>--}}
{{--                        </div>--}}
{{--                    </li>--}}
{{--                </ul>--}}

{{--                <ul class="navbar-nav ml-auto">--}}
{{--                    <li class="nav-item dropdown mr-3">--}}
{{--                        <a href="#" class="nav-link dropdown-toggle" data-toggle="dropdown">--}}
{{--                            <i class="fas fa-user"></i> {{Auth::user()->name}}--}}
{{--                        </a>--}}
{{--                        <div class="dropdown-menu">--}}
{{--                            <a href="{{route('users.edit', Auth::user()->id)}}" class="dropdown-item">--}}
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
{{--    <header id="main-header" class="py-2 bg-light text-black mb-5">--}}
{{--        <div class="container">--}}
{{--            <div class="row">--}}
{{--                <div class="col-md-6">--}}
{{--                    <h1><i class="fas fa-cog"></i> Dashboard</h1>--}}
{{--                </div>--}}
{{--            </div>--}}
{{--        </div>--}}
{{--    </header>--}}

{{--    <!-- ACTIONS -->--}}
{{--    <section id="actions" class="py-4 mb-4 bg-light">--}}
{{--        <div class="container">--}}
{{--            <div class="row">--}}
{{--                <div class="col-md-3">--}}
{{--                    <a href="#" class="btn btn-primary btn-block" data-toggle="modal" data-target="#addPostModal">--}}
{{--                        <i class="fas fa-plus"></i> Add Restaurant--}}
{{--                    </a>--}}
{{--                </div>--}}
{{--                <div class="col-md-3">--}}
{{--                    <a href="#" class="btn btn-success btn-block" data-toggle="modal" data-target="#addCategoryModal">--}}
{{--                        <i class="fas fa-plus"></i> Add Package--}}
{{--                    </a>--}}
{{--                </div>--}}
{{--                <div class="col-md-3">--}}
{{--                    <a href="#" class="btn btn-warning btn-block" data-toggle="modal" data-target="#addUserModal">--}}
{{--                        <i class="fas fa-plus"></i> Add User--}}
{{--                    </a>--}}
{{--                </div>--}}
{{--                <div class="col-md-3">--}}
{{--                    <a href="#" class="btn btn-info btn-block" data-toggle="modal" data-target="#addMediaModal">--}}
{{--                        <i class="fas fa-plus"></i> Upload--}}
{{--                    </a>--}}
{{--                </div>--}}
{{--            </div>--}}
{{--        </div>--}}
{{--    </section>--}}

{{--    <!-- RESTAURANTS -->--}}
{{--    <section id="posts">--}}
{{--        <div class="container">--}}
{{--            <div class="row">--}}
{{--                <div class="col-md-9">--}}
{{--                    <div class="card">--}}
{{--                        <div class="card-header">--}}
{{--                            <h4>Latest Restaurants</h4>--}}
{{--                        </div>--}}
{{--                        <table class="table table-striped">--}}
{{--                            <thead class="thead-dark">--}}
{{--                            <tr>--}}
{{--                                <th>Id</th>--}}
{{--                                <th>Photo</th>--}}
{{--                                <th>User</th>--}}
{{--                                <th>Restaurant</th>--}}
{{--                                <th>Package</th>--}}
{{--                                <th>Body</th>--}}
{{--                                <th>Created</th>--}}

{{--                                <th></th>--}}
{{--                            </tr>--}}
{{--                            </thead>--}}
{{--                            <tbody>--}}
{{--                            @if($restaurants)--}}
{{--                                @foreach($restaurants as $restaurant)--}}
{{--                                    <tr>--}}
{{--                                        <td>{{$restaurant->id}}</td>--}}
{{--                                        <td><img height="50" width="50" src="{{$restaurant->photo ? $restaurant->photo->file : 'http://placehold.it/400x400'}}" alt=""></td>--}}
{{--                                        <td>{{$restaurant->user->name}}</td>--}}
{{--                                        <td>{{$restaurant->title}}</td>--}}
{{--                                        <td>{{$restaurant->user ? $restaurant->user->package->name : 'Uncategorized'}}</td>--}}
{{--                                        <td>{{str_limit($restaurant->body, 20)}}</td>--}}
{{--                                        <td>{{$restaurant->created_at->diffForHumans()}}</td>--}}

{{--                                        <td>--}}
{{--                                            <a href="{{route('single_restaurant.restaurant', $restaurant->slug)}}" class="btn btn-secondary">--}}
{{--                                                <i class="fas fa-utensils"></i> View--}}
{{--                                            </a>--}}
{{--                                        </td>--}}
{{--                                    </tr>--}}
{{--                                @endforeach--}}
{{--                            @endif--}}

{{--                            </tbody>--}}
{{--                        </table>--}}
{{--                        <!-- PAGINATION -->--}}
{{--                        <div class="row">--}}
{{--                            <div class="col-12 d-flex justify-content-center">--}}
{{--                                {{$restaurants->onEachSide(1)->links()}}--}}
{{--                            </div>--}}
{{--                        </div>--}}
{{--                    </div>--}}
{{--                </div>--}}
{{--                <div class="col-md-3">--}}
{{--                    <div class="card text-center bg-primary text-white mb-3">--}}
{{--                        <div class="card-body">--}}
{{--                            <h3>Restaurants</h3>--}}
{{--                            <h4 class="display-4">--}}
{{--                                <i class="fas fa-utensils"></i> {{$restaurantsall->count()}}--}}
{{--                            </h4>--}}
{{--                            <a href="{{route('restaurants.index')}}" class="btn btn-outline-light btn-sm">View</a>--}}
{{--                        </div>--}}
{{--                    </div>--}}
{{--                    <div class="card text-center bg-success text-white mb-3">--}}
{{--                        <div class="card-body">--}}
{{--                            <h3>Packages</h3>--}}
{{--                            <h4 class="display-4">--}}
{{--                                <i class="fas fa-box"></i> {{$package->count()}}--}}
{{--                            </h4>--}}
{{--                            <a href="{{route('packages.index')}}" class="btn btn-outline-light btn-sm">View</a>--}}
{{--                        </div>--}}
{{--                    </div>--}}
{{--                    <div class="card text-center bg-warning text-white mb-3">--}}
{{--                        <div class="card-body">--}}
{{--                            <h3>Users</h3>--}}
{{--                            <h4 class="display-4">--}}
{{--                                <i class="fas fa-users"></i> {{$users->count()}}--}}
{{--                            </h4>--}}
{{--                            <a href="{{route('users.index')}}" class="btn btn-outline-light btn-sm">View</a>--}}
{{--                        </div>--}}
{{--                    </div>--}}
{{--                </div>--}}
{{--            </div>--}}
{{--        </div>--}}
{{--    </section>--}}

{{--    <!-- MODALS -->--}}
{{--    <!-- ADD RESTAURANTS MODAL -->--}}
{{--    <div class="modal fade" id="addPostModal">--}}
{{--        <div class="modal-dialog modal-lg">--}}
{{--            <div class="modal-content">--}}
{{--                <div class="modal-header bg-primary text-white">--}}
{{--                    <h5 class="modal-title">Add Restaurant</h5>--}}
{{--                    <button class="close" data-dismiss="modal">--}}
{{--                        <span>&times;</span>--}}
{{--                    </button>--}}
{{--                </div>--}}
{{--                <div class="modal-body">--}}

{{--                        {!! Form::open(['method'=>'POST', 'action'=>'AdminRestaurantsController@store', 'files'=>true]) !!}--}}
{{--                        {{csrf_field()}}--}}
{{--                        <div class="form-group">--}}
{{--                            {!! Form::label('title', 'Title:') !!}--}}
{{--                            {!! Form::text('title', null, ['class'=>'form-control']) !!}--}}
{{--                        </div>--}}
{{--                        <div class="form-group">--}}
{{--                            {!! Form::label('location_id', 'Location:') !!}--}}
{{--                            {!! Form::select('location_id', ['' => 'Choose Location'] + $locations, null, ['class'=>'form-control']) !!}--}}
{{--                        </div>--}}

{{--                        <div class="form-group">--}}
{{--                            {!! Form::label('food_id', 'Food:') !!}--}}
{{--                            {!! Form::select('food_id', ['' => 'Choose Food'] + $foods, null, ['class'=>'form-control']) !!}--}}
{{--                        </div>--}}

{{--                        <div class="form-group">--}}
{{--                            {!! Form::label('body', 'Description:') !!}--}}
{{--                            {!! Form::textarea('body', null, ['class'=>'form-control', 'rows'=>3]) !!}--}}
{{--                        </div>--}}
{{--                        <div class="form-group">--}}
{{--                            {!! Form::label('photo_id', 'Photo:') !!}--}}
{{--                            {!! Form::file('photo_id', null, ['class'=>'form-control']) !!}--}}
{{--                        </div>--}}

{{--                </div>--}}
{{--                <div class="modal-footer">--}}
{{--                    {!! Form::submit('Create Restaurant', ['class'=>'btn btn-primary']) !!}--}}
{{--                    {!! Form::close() !!}--}}
{{--                </div>--}}

{{--                </div>--}}

{{--            </div>--}}
{{--        </div>--}}
{{--    </div>--}}

{{--    <!-- ADD MEDIA MODAL -->--}}
{{--    <div class="modal fade" id="addMediaModal">--}}
{{--        <div class="modal-dialog modal-lg">--}}
{{--            <div class="modal-content">--}}
{{--                <div class="modal-header bg-info text-white">--}}
{{--                    <h5 class="modal-title">Upload</h5>--}}
{{--                    <button class="close" data-dismiss="modal">--}}
{{--                        <span>&times;</span>--}}
{{--                    </button>--}}
{{--                </div>--}}
{{--                <div class="modal-body">--}}

{{--                    {!! Form::open(['method'=>'POST', 'action'=>'AdminMediaController@store', 'class'=>'dropzone']) !!}--}}

{{--                    {!! Form::close() !!}--}}
{{--                </div>--}}
{{--                <div class="modal-footer">--}}
{{--                    <div class="form-group">--}}

{{--                    </div>--}}
{{--                </div>--}}
{{--            </div>--}}
{{--        </div>--}}
{{--    </div>--}}

{{--    <!-- ADD PACKAGE MODAL -->--}}
{{--    <div class="modal fade" id="addCategoryModal">--}}
{{--        <div class="modal-dialog modal-lg">--}}
{{--            <div class="modal-content">--}}
{{--                <div class="modal-header bg-success text-white">--}}
{{--                    <h5 class="modal-title">Add Package</h5>--}}
{{--                    <button class="close" data-dismiss="modal">--}}
{{--                        <span>&times;</span>--}}
{{--                    </button>--}}
{{--                </div>--}}
{{--                <div class="modal-body">--}}
{{--                    {!! Form::open(['method'=>'POST', 'action'=>'AdminPackagesController@store']) !!}--}}
{{--                    {{csrf_field()}}--}}
{{--                    <div class="form-group">--}}
{{--                        {!! Form::label('name', 'Name:') !!}--}}
{{--                        {!! Form::text('name', null, ['class'=>'form-control']) !!}--}}
{{--                    </div>--}}

{{--                </div>--}}
{{--                <div class="modal-footer">--}}
{{--                    {!! Form::submit('Create Package', ['class'=>'btn btn-success']) !!}--}}
{{--                    {!! Form::close() !!}--}}
{{--                </div>--}}
{{--            </div>--}}
{{--        </div>--}}
{{--    </div>--}}

{{--    <!-- ADD MEDIA MODAL -->--}}
{{--    <div class="modal fade" id="addMediaModal">--}}
{{--        <div class="modal-dialog modal-lg">--}}
{{--            <div class="modal-content">--}}
{{--                <div class="modal-header bg-info text-white">--}}
{{--                    <h5 class="modal-title">Upload</h5>--}}
{{--                    <button class="close" data-dismiss="modal">--}}
{{--                        <span>&times;</span>--}}
{{--                    </button>--}}
{{--                </div>--}}
{{--                <div class="modal-body">--}}


{{--                </div>--}}
{{--                <div class="modal-footer">--}}
{{--                    <div class="form-group">--}}
{{--                        {!! Form::submit('Create User', ['class'=>'btn btn-warning']) !!}--}}
{{--                    </div>--}}
{{--                    {!! Form::close() !!}--}}
{{--                    <button class="btn btn-warning" data-dismiss="modal">Save Changes</button>--}}

{{--                </div>--}}
{{--            </div>--}}
{{--        </div>--}}
{{--    </div>--}}

{{--    <!-- ADD USER MODAL -->--}}
{{--    <div class="modal fade" id="addUserModal">--}}
{{--        <div class="modal-dialog modal-lg">--}}
{{--            <div class="modal-content">--}}
{{--                <div class="modal-header bg-warning text-white">--}}
{{--                    <h5 class="modal-title">Add User</h5>--}}
{{--                    <button class="close" data-dismiss="modal">--}}
{{--                        <span>&times;</span>--}}
{{--                    </button>--}}
{{--                </div>--}}
{{--                <div class="modal-body">--}}
{{--                    {!! Form::open(['method'=>'POST', 'action'=>'AdminUsersController@store', 'files'=>true]) !!}--}}
{{--                    <div class="form-group">--}}
{{--                        {!! Form::label('name', 'Name:') !!}--}}
{{--                        {!! Form::text('name', null, ['class'=>'form-control']) !!}--}}
{{--                    </div>--}}

{{--                    <div class="form-group">--}}
{{--                        {!! Form::label('email', 'Email:') !!}--}}
{{--                        {!! Form::email('email', null, ['class'=>'form-control']) !!}--}}
{{--                    </div>--}}

{{--                    <div class="form-group">--}}
{{--                        {!! Form::label('password', 'Password:') !!}--}}
{{--                        {!! Form::password('password', ['class'=>'form-control']) !!}--}}
{{--                    </div>--}}

{{--                    <div class="form-group">--}}
{{--                        {!! Form::label('role_id', 'Role:') !!}--}}
{{--                        {!! Form::select('role_id', ['' => 'Choose Options'] + $roles, null, ['class'=>'form-control']) !!}--}}
{{--                    </div>--}}

{{--                    <div class="form-group">--}}
{{--                        {!! Form::label('package_id', 'Package:') !!}--}}
{{--                        {!! Form::select('package_id', ['' => 'Choose Packages'] + $packages, null, ['class'=>'form-control']) !!}--}}
{{--                    </div>--}}

{{--                    <div class="form-group">--}}
{{--                        {!! Form::label('is_active', 'Status:') !!}--}}
{{--                        {!! Form::select('is_active', array(1 => 'Active', 0 => 'Not Active'), 0, ['class'=>'form-control']) !!}--}}
{{--                    </div>--}}

{{--                    <div class="form-group">--}}
{{--                        {!! Form::label('photo_id', 'Photo:') !!}--}}
{{--                        {!! Form::file('photo_id', null, ['class'=>'form-control']) !!}--}}
{{--                    </div>--}}


{{--                </div>--}}
{{--                <div class="modal-footer">--}}
{{--                    <div class="form-group">--}}
{{--                        {!! Form::submit('Create User', ['class'=>'btn btn-warning']) !!}--}}
{{--                    </div>--}}
{{--                    {!! Form::close() !!}--}}
{{--                    <button class="btn btn-warning" data-dismiss="modal">Save Changes</button>--}}
{{--                </div>--}}
{{--            </div>--}}
{{--        </div>--}}
{{--    </div>--}}
{{--@endsection--}}

{{--@section('footer')--}}
{{--    <script src="https://cdnjs.cloudflare.com/ajax/libs/dropzone/4.3.0/min/dropzone.min.js"></script>--}}
{{--@endsection--}}












@extends('layouts.admin-thema')

@section('content')
<!-- START MENU -->
<section id="admin2-dashboard">
    <div class="admin2-menu">
        <ol>
            <a href="/"><li><img src="{{asset('img/logo-white.svg')}}" alt=""></li></a>
            <a href="/"><li class="p-lead home-menu-toggle">Home</li></a>
            <a href="{{route('user.edit', Auth::user()->id)}}"><p class="p-lead admin-menu-name">{{Auth::user()->name}}</p></a>
            <hr>
            <a href="/admin2"><li class="p-lead active"><i class="fas fa-home"></i> Dashboard</li></a>
            <a href="{{route('restaurants.index')}}"><li class="p-lead"><i class="fas fa-utensils"></i> Restaurants</li></a>
            <a href="{{route('packages.index')}}"><li class="p-lead"><i class="fas fa-box"></i> Packages</li></a>
            <a href="{{route('users.index')}}"><li class="p-lead"><i class="fas fa-users"></i> Users</li></a>
            <a href="{{route('media.index')}}"><li class="p-lead"><i class="fas fa-camera"></i> Media</li></a>
            <a href="{{route('comments.index')}}"><li class="p-lead"><i class="fas fa-comments"></i> Comments</li></a>
            <a href="{{route('locations.index')}}"><li class="p-lead"><i class="fas fa-map-marker-alt"></i> Locations</li></a>
            <a href="{{route('foods.index')}}"><li class="p-lead"><i class="fas fa-hamburger"></i> Foods</li></a>
            <a href="{{route('distance.index')}}"><li class="p-lead"><i class="fab fa-font-awesome-flag"></i> Distances</li></a>
            <a href="{{route('blog.index')}}"><li class="p-lead"><i class="fab fa-blogger-b"></i> Blog</li></a>
            <a href="{{route('logout')}}" onclick="event.preventDefault();
            document.getElementById('logout-form').submit();"><p class="p-lead logout-menu-show"><i class="fas fa-sign-out-alt"></i> {{__('Logout')}}</p></a>
            <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                @csrf
            </form>
        </ol>
    </div>
    <!-- END MENU -->

    <!-- START DASHBOARD CONTENT -->
    <div class="admin2-dashboard-content">
        <div class="dashboard-header">
            <i class="fas fa-home"></i><h2>Dashboard</h2>

            <a class="toggle-menu-link" href="javascript:void(0);" onclick="myFunction()">
                <i class="fas fa-bars"></i>
            </a>

            <a href="{{route('logout')}}" onclick="event.preventDefault();
            document.getElementById('logout-form').submit();">
                <p class="p-lead"><i class="fas fa-sign-out-alt"></i> {{__('Logout')}}</p></a>
            <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                @csrf
            </form>

            <a href="{{route('user.edit', Auth::user()->id)}}"><p class="p-lead">{{Auth::user()->name}}</p> <img src="{{Auth::user()->photo->file}}" alt=""></a>
        </div>
        <div class="dashboard-content">
            <div class="dashboard-table dashboard-table-top-margin">
                <table>
                    <tr>
                        <th>ID</th>
                        <th>PHOTO</th>
                        <th>USER</th>
                        <th>RESTAURANT</th>
                        <th>PACKAGE</th>
                    </tr>
                    @if($restaurants)
                        @foreach($restaurants as $restaurant)
                            <tr>
                                <td>{{$restaurant->id}}</td>
                                <td><img height="50" width="50" src="{{$restaurant->photo ? $restaurant->photo->file : 'http://placehold.it/400x400'}}" alt=""></td>
                                <td>{{$restaurant->user->name}}</td>
                                <td>{{$restaurant->title}}</td>
                                <td>{{$restaurant->user ? $restaurant->user->package->name : 'Uncategorized'}}</td>
                                <td class="center-buttons"><a href="{{route('single_restaurant.restaurant', $restaurant->slug)}}">View</a></td>
                            </tr>
                        @endforeach
                    @endif

                </table>
            </div>
            <div class="dashboard-right-box">
                <div class="green-box">
                    <p class="p-lead">RESTAURANTS</p>
                    <p class="p-lead-number">{{$restaurantsall->count()}}</p>
                    <a href="{{route('restaurants.index')}}"><p class="p-lead-all">View all <i class="fas fa-arrow-right"></i></p></a>
                </div>
                <div class="blue-box">
                    <p class="p-lead">COMMENTS</p>
                    <p class="p-lead-number">Undefined</p>
                    <a href="#"><p class="p-lead-all">View all <i class="fas fa-arrow-right"></i></p></a>
                </div>
                <div class="yellow-box">
                    <p class="p-lead">USERS</p>
                    <p class="p-lead-number">{{$users->count()}}</p>
                    <a href="{{route('users.index')}}"><p class="p-lead-all">View all <i class="fas fa-arrow-right"></i></p></a>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- END DASHBOARD CONTENT -->
@endsection

@section('footer')

@endsection