@extends('layouts.admin')
<title>Restaurant</title>
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
                            <a href="{{route('gallery.index')}}" class="nav-link">Gallery</a>
                        </li>
                        <li class="nav-item px-2">
                            <a href="{{route('booking')}}" class="nav-link active">Booking</a>
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
                    <h1><i class="fas fa-calendar-check"></i> Booking</h1>
                </div>
            </div>
        </div>
    </header>

    <!-- SEARCH -->
    <section id="search" class="py-4 mb-4 bg-light">
        <div class="container">
            <div class="row">
                <div class="col-md-3">
                    <a href="#" class="btn btn-secondary btn-block">
                        <i class="fas fa-plus"></i> Add
                    </a>
                </div>
                <div class="col-md-3">
                    <a href="#" class="btn btn-secondary btn-block sorting" data-sorting_type="asc" data-column_name="id">
                        <i class="fas fa-calendar-check"></i> Sorting Reservations
                    </a>
                </div>
                <div class="col-md-6 ml-auto">
                    <div class="form-group">
                        <input type="text" name="serach" id="serach" class="form-control" placeholder="Search Reservations...">
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
                            <h4>Reservations</h4>
                        </div>

                            @if(count($booking) > 0)
                            <table class="table table-striped">
                                <thead class="thead-dark">
                                <tr>
                                    <th>Restaurant</th>
                                    <th>Name</th>
                                    <th>Email</th>
                                    <th>Description</th>
                                    <th>Phone</th>
                                    <th>Date</th>
                                    <th>Time</th>
                                    <th>Party</th>
                                </tr>
                                </thead>
                                <tbody>

                                @foreach($booking as $item)
                                     <tr>
                                         <td>{{$item->restaurant_title}}</td>
                                         <td>{{$item->name}}</td>
                                         <td>{{$item->email}}</td>
                                         <td>{{$item->body}}</td>
                                         <td>{{$item->phone}}</td>
                                         <td>{{$item->date}}</td>
                                         <td>{{$item->time}}</td>
                                         <td>{{$item->party}}</td>
                                     </tr>
                                @endforeach
                                @else

                                    <h1 class="text-center">Currently do not have reservations ...</h1>
                                @endif
                                </tbody>
                            </table>
                            <input type="hidden" name="hidden_page" id="hidden_page" value="1" />
                            <input type="hidden" name="hidden_column_name" id="hidden_column_name" value="id" />
                            <input type="hidden" name="hidden_sort_type" id="hidden_sort_type" value="asc" />
                            <!-- PAGINATION -->

                    </div>

                </div>
            </div>
        </div>
    </section>


@endsection

@section('footer')

@endsection