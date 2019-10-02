{{--@extends('layouts.admin')--}}

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
{{--                        <a href="/admin2" class="nav-link">Dashboard</a>--}}
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
{{--                        <a href="{{route('locations.index')}}" class="nav-link active">Locations</a>--}}
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
{{--    <header id="main-header" class="py-2 bg-light text-black">--}}
{{--        <div class="container">--}}
{{--            <div class="row">--}}
{{--                <div class="col-md-6">--}}
{{--                    <h1><i class="fas fa-map-marker-alt"></i> Edit Location</h1>--}}
{{--                </div>--}}
{{--            </div>--}}
{{--        </div>--}}
{{--    </header>--}}

{{--    <!-- SEARCH -->--}}
{{--    <section id="actions" class="py-4 mb-4 bg-light">--}}
{{--        <div class="container">--}}
{{--            <div class="row">--}}
{{--                <div class="col-md-3">--}}
{{--                    <a href="/admin2" class="btn btn-primary btn-block">--}}
{{--                        <i class="fas fa-arrow-left"></i> Back To Dashboard--}}
{{--                    </a>--}}
{{--                </div>--}}
{{--                <div class="col-md-3">--}}
{{--                    {!! Form::open(['method'=>'DELETE', 'action'=>['AdminLocationsController@destroy', $location->id]]) !!}--}}
{{--                    <button type="submit" class="btn btn-danger btn-block"><i class="fas fa-trash-alt"></i> Delete Location</button>--}}
{{--                    {!! Form::close() !!}--}}
{{--                </div>--}}
{{--            </div>--}}
{{--        </div>--}}
{{--    </section>--}}

{{--    <section id="categories">--}}
{{--        <div class="container">--}}
{{--            <div class="row">--}}
{{--                <div class="col-6">--}}
{{--                    <div class="card">--}}
{{--                        <div class="card-header">--}}
{{--                            <h4>Location</h4>--}}
{{--                        </div>--}}
{{--                        <div class="card-body">--}}
{{--                            {!! Form::model($location, ['method'=>'PATCH', 'action'=>['AdminLocationsController@update', $location->id], 'files'=>true]) !!}--}}
{{--                            {{csrf_field()}}--}}
{{--                            <div class="form-group">--}}
{{--                                {!! Form::label('name', 'Name:') !!}--}}
{{--                                {!! Form::text('name', null, ['class'=>'form-control']) !!}--}}
{{--                            </div>--}}
{{--                            <div class="form-group">--}}
{{--                                {!! Form::label('photo_id', 'Photo:') !!}--}}
{{--                                {!! Form::file('photo_id', null, ['class'=>'form-control']) !!}--}}
{{--                            </div>--}}


{{--                            <div class="form-group">--}}
{{--                                <div class="row">--}}
{{--                                    <div class="col-md-6">--}}
{{--                                        <button type="submit" class="btn btn-success btn-block"><i class="fas fa-map-marker-alt"></i> Update Location</button>--}}
{{--                                        {!! Form::close() !!}--}}
{{--                                    </div>--}}
{{--                                </div>--}}
{{--                            </div>--}}
{{--                        </div>--}}
{{--                    </div>--}}
{{--                </div>--}}
{{--                <div class="col-md-6">--}}
{{--                    <img width="300" height="300" src="{{$location->photo ? $location->photo->file : 'http://placehold.it/400x400'}}" class="img-fluid img-thumbnail rounded" alt="">--}}
{{--                </div>--}}
{{--            </div>--}}
{{--        </div>--}}
{{--    </section>--}}


{{--    <!-- ADD PACKAGE MODAL -->--}}
{{--    <div class="modal fade" id="addPackageModal">--}}
{{--        <div class="modal-dialog modal-lg">--}}
{{--            <div class="modal-content">--}}
{{--                <div class="modal-header bg-success text-white">--}}
{{--                    <h5 class="modal-title">Add Package</h5>--}}
{{--                    <button class="close" data-dismiss="modal">--}}
{{--                        <span>&times;</span>--}}
{{--                    </button>--}}
{{--                </div>--}}
{{--                <div class="modal-body">--}}
{{--                    {!! Form::open(['method'=>'POST', 'action'=>'AdminLocationsController@store', 'files'=>true]) !!}--}}
{{--                    {{csrf_field()}}--}}
{{--                    <div class="form-group">--}}
{{--                        {!! Form::label('name', 'Name:') !!}--}}
{{--                        {!! Form::text('name', null, ['class'=>'form-control']) !!}--}}
{{--                    </div>--}}
{{--                    <div class="form-group">--}}
{{--                        {!! Form::label('photo_id', 'Photo:') !!}--}}
{{--                        {!! Form::file('photo_id', null, ['class'=>'form-control']) !!}--}}
{{--                    </div>--}}

{{--                </div>--}}
{{--                <div class="modal-footer">--}}
{{--                    {!! Form::submit('Create ', ['class'=>'btn btn-success']) !!}--}}
{{--                    {!! Form::close() !!}--}}
{{--                </div>--}}
{{--            </div>--}}
{{--        </div>--}}
{{--    </div>--}}

{{--@endsection--}}

{{--@section('footer')--}}

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
                <a href="/admin2"><li class="p-lead"><i class="fas fa-home"></i> Dashboard</li></a>
                <a href="{{route('restaurants.index')}}"><li class="p-lead"><i class="fas fa-utensils"></i> Restaurants</li></a>
                <a href="{{route('packages.index')}}"><li class="p-lead"><i class="fas fa-box"></i> Packages</li></a>
                <a href="{{route('users.index')}}"><li class="p-lead"><i class="fas fa-users"></i> Users</li></a>
                <a href="{{route('media.index')}}"><li class="p-lead"><i class="fas fa-camera"></i> Media</li></a>
                <a href="{{route('comments.index')}}"><li class="p-lead"><i class="fas fa-comments"></i> Comments</li></a>
                <a href="{{route('locations.index')}}"><li class="p-lead active"><i class="fas fa-map-marker-alt"></i> Locations</li></a>
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

        <!-- START PACKAGE CONTENT -->
        <div class="admin2-dashboard-content">
            <div class="dashboard-header">
                <i class="fas fa-map-marker-alt"></i><h2>Locations</h2>

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
                <div class="create-form">
                    <div class="form-left">
                        @if ($errors->any())
                            <div class="alert alert-danger">
                                <ul>
                                    @foreach ($errors->all() as $error)
                                        <li style="color: red;">{{ $error }}</li>
                                    @endforeach
                                </ul>
                            </div>
                        @endif
                        <p class="p-lead-h4">Edit location</p>

                        {!! Form::model($location, ['method'=>'PATCH', 'action'=>['AdminLocationsController@update', $location->id], 'files'=>true]) !!}
                        {{csrf_field()}}
                        {!! Form::label('name', 'NAME', ['class'=>'label-grey-small']) !!}
                        {!! Form::text('name', null, ['class'=>'create-form-input', 'id'=>'name', 'required']) !!}

                        {!! Form::label('value', 'VALUE', ['class'=>'label-grey-small']) !!}
                        {!! Form::text('value', null, ['class'=>'create-form-input', 'id'=>'value', 'required', 'placeholder'=>'Same as name']) !!}

                        <div class="upload-image upload-user-image">
                            <p id="image-r" class="label-grey-image-r">UPLOAD IMAGE</p>
                            <button type="button" class="input-file">
                                <input type="file" name="photo_id" id="photo_id"/>
                                <label for="photo_id">BROWSE</label>
                            </button>
                            <hr class="between-fields">
                        </div>

                        <button class="create-input-button" type="submit"><i class="fas fa-map-marker-alt"></i> UPDATE</button>
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

@endsection