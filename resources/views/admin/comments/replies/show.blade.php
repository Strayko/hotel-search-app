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
                        <a href="/admin2" class="nav-link">Dashboard</a>
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
                    <li class="nav-item px-2">
                        <a href="{{route('comments.index')}}" class="nav-link active">Comments</a>
                    </li>
                    <li class="nav-item px-2">
                        <a href="{{route('locations.index')}}" class="nav-link">Locations</a>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            Others
                        </a>
                        <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                            <a class="dropdown-item" href="{{route('foods.index')}}">Foods</a>
                            <a class="dropdown-item" href="{{route('distance.index')}}">Distance</a>
                            <a class="dropdown-item" href="{{route('blog.index')}}">Blog</a>
                        </div>
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
    <header id="main-header" class="py-2 bg-secondary text-white">
        <div class="container">
            <div class="row">
                <div class="col-md-6">
                    <h1><i class="fas fa-comments"></i> Comments</h1>
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
                        <input type="text" class="form-control" placeholder="Search Replies...">
                        <div class="input-group-append">
                            <button class="btn btn-secondary">Search</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section id="categories">
        <div class="container">
            <div class="row">
                <div class="col">
                    <div class="card">
                        <div class="card-header">
                            @if(Session::has('deleted_package'))
                                <p class="alert alert-danger">{{session('deleted_package')}}</p>
                            @endif
                            <h4>Latest Replies</h4>
                        </div>
                        @if(count($replies) > 0)
                            <table class="table table-striped">
                                <thead class="thead-dark">
                                <tr>
                                    <th>Id</th>
                                    <th>Author</th>
                                    <th>Email</th>
                                    <th>Replies</th>
                                    <th>Restaurant</th>
                                    <th></th>
                                    <th></th>
                                </tr>
                                </thead>
                                <tbody>
                                @foreach($replies as $reply)
                                    <tr>
                                        <td>{{$reply->id}}</td>
                                        <td>{{$reply->author}}</td>
                                        <td>{{$reply->email}}</td>
                                        <td>{{$reply->body}}</td>
                                        <td><a href="{{route('single_restaurant.restaurant', $reply->comment->restaurant->slug)}}">{{$reply->comment->restaurant->title}}</a></td>
                                        <td>
                                            @if($reply->is_active == 1)
                                                {!! Form::open(['method'=>'PATCH', 'action'=>['CommentRepliesController@update', $reply->id]]) !!}
                                                <input type="hidden" name="is_active" value="0">
                                                {!! Form::submit('Un-approve', ['class'=>'btn btn-success']) !!}
                                                {!! Form::close() !!}
                                            @else
                                                {!! Form::open(['method'=>'PATCH', 'action'=>['CommentRepliesController@update', $reply->id]]) !!}
                                                <input type="hidden" name="is_active" value="1">
                                                {!! Form::submit('Approve', ['class'=>'btn btn-info']) !!}
                                                {!! Form::close() !!}
                                            @endif
                                        </td>
                                        <td>
                                            {!! Form::open(['method'=>'DELETE', 'action'=>['CommentRepliesController@destroy', $reply->id]]) !!}
                                            {!! Form::submit('Delete', ['class'=>'btn btn-danger']) !!}
                                            {!! Form::close() !!}
                                        </td>
                                    </tr>
                                @endforeach

                                @else
                                    <h1 class="text-center">No Replies</h1>

                                @endif
                                </tbody>
                            </table>
                    </div>
                </div>
            </div>
        </div>
    </section>


    <!-- ADD PACKAGE MODAL -->
    <div class="modal fade" id="addPackageModal">
        <div class="modal-dialog modal-lg">
            <div class="modal-content">
                <div class="modal-header bg-secondary text-white">
                    <h5 class="modal-title">Add Comment</h5>
                    <button class="close" data-dismiss="modal">
                        <span>&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    {!! Form::open(['method'=>'POST', 'action'=>'AdminPackagesController@store']) !!}
                    {{csrf_field()}}
                    <div class="form-group">
                        {!! Form::label('name', 'Comment:') !!}
                        {!! Form::text('name', null, ['class'=>'form-control']) !!}
                    </div>

                </div>
                <div class="modal-footer">
                    {!! Form::submit('Create Comment', ['class'=>'btn btn-secondary']) !!}
                    {!! Form::close() !!}
                </div>
            </div>
        </div>
    </div>

@endsection

@section('footer')

@endsection