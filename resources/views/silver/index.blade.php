@extends('layouts.admin')
<title>Admin</title>
<style>
    .remove-caret::after {
        display:none!important;
    }
    #all-read {
        border: none;
        background: white;
        cursor: pointer;
        color: green;
    }
    #all-read:hover {
        background: rgba(128,255,0,0.2);
    }
    #green-item:hover {
        background: rgba(128,255,0,0.2);
    }
</style>
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
                        <a href="/admin" class="nav-link active">Dashboard</a>
                    </li>
                    <li class="nav-item px-2">
                        <a href="{{route('restaurant.index')}}" class="nav-link">Restaurants</a>
                    </li>
                    @if($platinium || $gold)
                        <li class="nav-item px-2">
                            <a href="{{route('event.index')}}" class="nav-link">Events</a>
                        </li>
                        <li class="nav-item px-2">
                            <a href="{{route('gallery.index')}}" class="nav-link">Gallery</a>
                        </li>
                        <li class="nav-item px-2">
                            <a href="{{route('booking')}}" class="nav-link">Booking</a>
                        </li>
                    @endif
                </ul>

                <ul class="navbar-nav ml-auto">
                    @if($platinium || $gold)
                    <li class="nav-item dropdown mr-3">
                        <a href="#" class="nav-link dropdown-toggle remove-caret" data-toggle="dropdown">
                            <i class="fas fa-bell mt-1"></i>
                            @if(count($notifications) > 0)
                                <span class="badge badge-light">{{count($notifications)}}</span>
                            @endif

                        </a>
                        @if(count($notifications) > 0)
                            <div class="dropdown-menu">

                                {!! Form::open(['method'=>'POST', 'action'=>'OnlineBookingController@update']) !!}
                                <input id="all-read" class="dropdown-item" type="submit" value="Mark all read">
                                {!! Form::close() !!}

                                @foreach($notifications as $notification)
                                    <a id="green-item" href="#" class="dropdown-item">
                                        {{Str::limit($notification->restaurant_title, 20)}} -> {{Str::limit($notification->name, 20)}}, {{$notification->party}}
                                    </a>
                                @endforeach
                            </div>
                        @else
                            <div class="dropdown-menu">
                                <p class="dropdown-item">You dont have notifications</p>
                            </div>
                        @endif
                    </li>
                    @endif
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
    <header id="main-header" class="py-2 bg-light text-black">
        <div class="container">
            <div class="row">
                <div class="col-md-6">
                    <h1><i class="fas fa-cog"></i> Dashboard</h1>
                </div>
            </div>
        </div>
    </header>

    <!-- SEARCH -->
    <section id="search" class="py-4 mb-4 bg-light">
        <div class="container">
            <div class="row">


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
                            <h4>Your Restaurant</h4>
                        </div>
                        <table class="table table-striped">
                            <thead class="thead-dark">
                            <tr>
                                <th>Photo</th>
                                <th>Restaurant</th>
                                <th>Body</th>
                                <th>Comments</th>
                                <th>Created</th>
                                <th></th>
                            </tr>
                            </thead>
                            <tbody>
                            @if($restaurants)
                                @foreach($restaurants as $restaurant)
                                    <tr>
                                        <td><img height="50" width="50" src="{{$restaurant->photo ? $restaurant->photo->file : 'http://placehold.it/400x400'}}" alt=""></td>
                                        <td>{{Str::limit($restaurant->title, 15)}}</td>
                                        <td>{{Str::limit($restaurant->body, 20)}}</td>
                                        <td>{{$restaurant->comments->count()}}</td>
                                        <td>{{$restaurant->created_at->diffForHumans()}}</td>

                                        <td>
                                            <a href="{{route('single_restaurant.restaurant', $restaurant->slug)}}" class="btn btn-secondary">
                                                <i class="fas fa-utensils"></i> View
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
                            <h3><i class="fas fa-box"></i> Package</h3>
                            <h1>
                                 {{$user->package ? $user->package->name : 'Uncategorized'}}
                            </h1>

                        </div>
                    </div>


                </div>
            </div>
        </div>
    </section>



@endsection

@section('footer')

@endsection