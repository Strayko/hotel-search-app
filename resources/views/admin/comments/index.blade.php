@extends('layouts.admin')

@section('content')
    <nav class="navbar navbar-expand-sm navbar-dark bg-dark p-0">
        <div class="container">
            <a href="/admin2" class="navbar-brand">Admin</a>
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
                <div class="col-md-3">
                    <a href="#" class="btn btn-secondary btn-block" data-toggle="modal" data-target="#addPackageModal">
                        <i class="fas fa-plus"></i> Add Comment
                    </a>
                </div>
                <div class="col-md-6 ml-auto">
                    <div class="input-group">
                        <input type="text" class="form-control" placeholder="Search Packages...">
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
                            <h4>Latest Comments</h4>
                        </div>
                        @if(count($comments) > 0)
                        <table class="table table-striped">
                            <thead class="thead-dark">
                            <tr>
                                <th>Id</th>
                                <th>Author</th>
                                <th>Email</th>
                                <th>Body</th>
                                <th></th>


                            </tr>
                            </thead>
                            <tbody>
                                    @foreach($comments as $comment)
                                    <tr>
                                        <td>{{$comment->id}}</td>
                                        <td>{{$comment->author}}</td>
                                        <td>{{$comment->email}}</td>
                                        <td>{{$comment->body}}</td>
                                        <td><a href="{{route('single_restaurant.restaurant', $comment->restaurant->id)}}">View Restaurant</a></td>


                                        {{--<td class="d-flex justify-content-end">--}}
                                            {{--<a href="{{route('packages.edit', $comment->id)}}" class="btn btn-secondary">--}}
                                                {{--<i class="fas fa-box"></i> Edit--}}
                                            {{--</a>--}}
                                            {{--<a href="#" class="d-inline-block ml-1">--}}
                                                {{--{!! Form::open(['method'=>'POST', 'action'=>['RestaurantCommentController@index', $comment->id]]) !!}--}}
                                                {{--<button type="submit" class="btn btn-secondary"><i class="fas fa-trash"></i> Delete</button>--}}
                                                {{--{!! Form::close() !!}--}}
                                            {{--</a>--}}
                                        {{--</td>--}}
                                    </tr>
                                    @endforeach

                                 @else
                                    <h1 class="text-center">No Comments</h1>

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