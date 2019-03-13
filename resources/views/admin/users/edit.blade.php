@extends('layouts.admin')
<title>Users</title>
@section('content')

    <nav class="navbar navbar-expand-sm navbar-dark bg-dark p-0">
        <div class="container">
            <a href="index.html" class="navbar-brand">Admin</a>
            <button class="navbar-toggler" data-toggle="collapse" data-target="#navbarCollapse">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collpase navbar-collapse" id="navbarCollapse">
                <ul class="navbar-nav">
                    <li class="nav-item px-2">
                        <a href="/admin" class="nav-link">Dashboard</a>
                    </li>
                    <li class="nav-item px-2">
                        <a href="posts.html" class="nav-link">Hotels</a>
                    </li>
                    <li class="nav-item px-2">
                        <a href="categories.html" class="nav-link">Packages</a>
                    </li>
                    <li class="nav-item px-2">
                        <a href="/admin/users" class="nav-link active">Users</a>
                    </li>
                </ul>

                <ul class="navbar-nav ml-auto">
                    <li class="nav-item dropdown mr-3">
                        <a href="#" class="nav-link dropdown-toggle" data-toggle="dropdown">
                            <i class="fas fa-user"></i> Welcome Moamer
                        </a>
                        <div class="dropdown-menu">
                            <a href="profile.html" class="dropdown-item">
                                <i class="fas fa-user-circle"></i> Profile
                            </a>
                            <a href="settings.html" class="dropdown-item">
                                <i class="fas fa-cog"></i> Settings
                            </a>
                        </div>
                    </li>
                    <li class="nav-item">
                        <a href="login.html" class="nav-link">
                            <i class="fas fa-user-times"></i> Logout
                        </a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

    <!-- HEADER -->
    <header id="main-header" class="py-2 bg-warning text-white">
        <div class="container">
            <div class="row">
                <div class="col-md-6">
                    <h1><i class="fas fa-users"></i> Users</h1>
                </div>
            </div>
        </div>
    </header>

    <!-- SEARCH -->
    <section id="search" class="py-4 mb-4 bg-light">
        <div class="container">
            <div class="row">
                <div class="col-md-6 ml-auto">
                    <div class="input-group">
                        <input type="text" class="form-control" placeholder="Search Users...">
                        <div class="input-group-append">
                            <button class="btn btn-warning">Search</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <div class="container">
    @include('includes.form_error')
    <h1>Edit User</h1>
    <div class="row">
    <div class="col-md-6">
    {!! Form::model($user, ['method'=>'PATCH', 'action'=>['AdminUsersController@update', $user->id], 'files'=>true]) !!}
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
        {!! Form::select('role_id', $roles, null, ['class'=>'form-control']) !!}
    </div>

    <div class="form-group">
        {!! Form::label('is_active', 'Status:') !!}
        {!! Form::select('is_active', array(1 => 'Active', 0 => 'Not Active'), null, ['class'=>'form-control']) !!}
    </div>

    <div class="form-group">
        {!! Form::label('photo_id', 'Photo:') !!}
        {!! Form::file('photo_id', null, ['class'=>'form-control']) !!}
    </div>

        <div class="form-group">
            {!! Form::submit('Edit User', ['class'=>'btn btn-warning']) !!}
        </div>
    {!! Form::close() !!}
    </div>
        <div class="col-md-6">
            <img width="300" height="300" src="{{$user->photo ? $user->photo->file : 'http://placehold.it/400x400'}}" class="img-fluid img-thumbnail rounded" alt="">
        </div>
    </div>
    </div>

@endsection

@section('footer')

@endsection