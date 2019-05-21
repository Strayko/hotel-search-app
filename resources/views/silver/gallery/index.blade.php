@extends('layouts.admin')
<title>Event</title>
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
                        <a href="{{route('restaurant.index')}}" class="nav-link">Restaurants</a>
                    </li>
                    <li class="nav-item px-2">
                        <a href="{{route('event.index')}}" class="nav-link">Events</a>
                    </li>
                    <li class="nav-item px-2">
                        <a href="{{route('gallery.index')}}" class="nav-link active">Gallery</a>
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
                    <h1><i class="fas fa-images"></i> Gallery</h1>
                </div>
            </div>
        </div>
    </header>

    <!-- SEARCH -->
    <section id="search" class="py-4 mb-4 bg-light">
        <div class="container">
            <div class="row">
                {{--<div class="col-md-3">--}}
                    {{--<a href="{{route('event.create')}}" class="btn btn-secondary btn-block">--}}
                        {{--<i class="fas fa-plus"></i> Add Event--}}
                    {{--</a>--}}
                {{--</div>--}}

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
                            <h4>Gallery</h4>
                        </div>
                        @if(count($restaurants) > 0)
                            <table class="table table-striped">
                                <thead class="thead-dark">
                                <tr>

                                    <th>Restaurant</th>
                                    <th>Count</th>
                                    <th></th>

                                </tr>
                                </thead>
                                <tbody>

                                @foreach($restaurants as $restaurant)
                                    <tr>

                                        <td>{{$restaurant->title}}</td>
                                        <td>{{$restaurant->gallery->count()}}</td>

                                        <td class="d-flex justify-content-center">
                                            <a href="{{route('gallery.edit', $restaurant->id)}}" class="btn btn-secondary">
                                                <i class="fas fa-images"></i> Upload/Delete
                                            </a>
                                        </td>
                                    </tr>
                                @endforeach
                                @else
                                    <h1 class="text-center">First add restaurant</h1>
                                @endif
                                </tbody>
                            </table>
                            <!-- PAGINATION -->

                    </div>
                </div>
            </div>
        </div>
    </section>


@endsection

@section('footer')

@endsection
