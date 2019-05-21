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
                        <a href="{{route('comments.index')}}" class="nav-link">Comments</a>
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
                            <i class="fas fa-user"></i> {{Str::limit(Auth::user()->name, 14)}}
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
                    <h1><i class="fab fa-blogger-b"></i> Blog</h1>
                </div>
            </div>
        </div>
    </header>

    <!-- SEARCH -->
    <section id="search" class="py-4 mb-4 bg-light">
        <div class="container">
            <div class="row">
                <div class="col-md-3">
                    <a href="{{route('blog.create')}}" class="btn btn-secondary btn-block">
                        <i class="fas fa-plus"></i> Add Blog
                    </a>
                </div>
                <div class="col-md-6 ml-auto">
                    <div class="input-group">
                        <input type="text" class="form-control" placeholder="Search Blog...">
                        <div class="input-group-append">
                            <button class="btn btn-secondary">Search</button>
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
                            @if(Session::has('deleted_blog'))
                                <p class="alert alert-danger">
                                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                        <span aria-hidden="true">&times;</span>
                                    </button>
                                    {{session('deleted_blog')}}</p>
                            @endif
                            <h4>Latest Blog</h4>
                        </div>
                        @if(count($blogs) > 0)
                        <table class="table table-striped">
                            <thead class="thead-dark">
                            <tr>
                                <th>Id</th>
                                <th>Photo</th>
                                <th>Title</th>
                                <th>Body</th>
                                <th>Created</th>
                                <th></th>
                            </tr>
                            </thead>
                            <tbody>

                                @foreach($blogs as $blog)
                                    <tr>
                                        <td>{{$blog->id}}</td>
                                        <td><img height="50" width="50" src="{{$blog->photo ? $blog->photo->file : 'http://placehold.it/400x400'}}" alt=""></td>
                                        <td>{{$blog->title}}</td>
                                        <td>{{$blog->body}}</td>
                                        <td>{{$blog->created_at->diffForHumans()}}</td>
                                        <td class="d-flex justify-content-center">
                                            <a href="{{route('blog.edit', $blog->id)}}" class="btn btn-secondary mr-1">
                                                <i class="fas fa-utensils"></i> Edit
                                            </a>
                                            <a href="#" class="d-inline-block">
                                                {!! Form::open(['method'=>'DELETE', 'action'=>['AdminBlogController@destroy', $blog->id]]) !!}
                                                <button type="submit" class="btn btn-secondary"><i class="fas fa-trash-alt"></i> Delete</button>
                                                {!! Form::close() !!}
                                            </a>
                                        </td>
                                    </tr>
                                @endforeach
                                @else
                                    <h1 class="text-center">Create blog</h1>
                            @endif
                            </tbody>
                        </table>
                        <!-- PAGINATION -->
                        {{--<div class="row">--}}
                            {{--<div class="col-12 d-flex justify-content-center">--}}
                                {{--{{$restaurants->onEachSide(1)->links()}}--}}
                            {{--</div>--}}
                        {{--</div>--}}
                    </div>
                </div>
            </div>
        </div>
    </section>



@endsection

@section('footer')

@endsection