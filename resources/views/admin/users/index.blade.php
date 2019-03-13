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
    @include('includes.form_error')
    <!-- SEARCH -->
    <section id="search" class="py-4 mb-4 bg-light">
        <div class="container">
            <div class="row">
                <div class="col-md-3">
                    <a href="#" class="btn btn-warning btn-block" data-toggle="modal" data-target="#addUserModal">
                        <i class="fas fa-plus"></i> Add User
                    </a>
                </div>
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

    <!-- USERS -->
    <section id="posts">
        <div class="container">
            <div class="row">
                <div class="col">
                    <div class="card">
                        <div class="card-header">
                            <h4>Latest Users</h4>
                        </div>
                        <table class="table table-striped">
                            <thead class="thead-dark">
                            <tr>
                                <th>Id</th>
                                <th>Name</th>
                                <th>Email</th>
                                <th>Status</th>
                                <th>Active</th>
                                <th>Created</th>
                                <th>Updated</th>
                                <th></th>
                            </tr>
                            </thead>
                            <tbody>

                            @if($users)
                                @foreach($users as $user)
                                    <tr>
                                        <td>{{$user->id}}</td>
                                        <td>{{$user->name}}</td>
                                        <td>{{$user->email}}</td>
                                        <td>{{$user->role->name}}</td>
                                        <td>{{$user->is_active == 1 ? 'Active' : 'Not Active'}}</td>
                                        <td>{{$user->created_at->diffForHumans()}}</td>
                                        <td>{{$user->updated_at->diffForHumans()}}</td>
                                        <td>
                                            <a href="details.html" class="btn btn-secondary">
                                                <i class="fas fa-angle-double-right"></i> Details
                                            </a>
                                        </td>
                                    </tr>
                                @endforeach
                            @endif

                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </section>

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
                            {!! Form::label('is_active', 'Status:') !!}
                            {!! Form::select('is_active', array(1 => 'Active', 0 => 'Not Active'), 0, ['class'=>'form-control']) !!}
                        </div>

                        <div class="form-group">
                            {!! Form::label('file', 'File:') !!}
                            {!! Form::file('file', null, ['class'=>'form-control']) !!}
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

@endsection