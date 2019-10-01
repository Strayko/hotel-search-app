{{--@extends('layouts.admin')--}}
{{--<title>Show Reservation</title>--}}
{{--<style>--}}
{{--    .remove-caret::after {--}}
{{--        display:none!important;--}}
{{--    }--}}
{{--    #all-read {--}}
{{--        border: none;--}}
{{--        background: white;--}}
{{--        cursor: pointer;--}}
{{--        color: green;--}}
{{--    }--}}
{{--    #all-read:hover {--}}
{{--        background: rgba(128,255,0,0.2);--}}
{{--    }--}}
{{--    #green-item:hover {--}}
{{--        background: rgba(128,255,0,0.2);--}}
{{--    }--}}
{{--    #green-item {--}}
{{--        background: rgba(211,211,211,0.3);--}}
{{--        margin-top: 1px;--}}
{{--        margin-bottom: 1px;--}}
{{--    }--}}
{{--</style>--}}

{{--@section('content')--}}
{{--    <body>--}}
{{--    <nav class="navbar navbar-expand-sm navbar-dark bg-dark p-0">--}}
{{--        <div class="container">--}}
{{--            <a href="/" class="navbar-brand">Home</a>--}}
{{--            <button class="navbar-toggler" data-toggle="collapse" data-target="#navbarCollapse">--}}
{{--                <span class="navbar-toggler-icon"></span>--}}
{{--            </button>--}}
{{--            <div class="collpase navbar-collapse" id="navbarCollapse">--}}
{{--                <ul class="navbar-nav">--}}
{{--                    <li class="nav-item px-2">--}}
{{--                        <a href="/admin" class="nav-link">Dashboard</a>--}}
{{--                    </li>--}}
{{--                    <li class="nav-item px-2">--}}
{{--                        <a href="{{route('restaurant.index')}}" class="nav-link">Restaurants</a>--}}
{{--                    </li>--}}
{{--                    <li class="nav-item px-2">--}}
{{--                        <a href="{{route('event.index')}}" class="nav-link">Events</a>--}}
{{--                    </li>--}}
{{--                    <li class="nav-item px-2">--}}
{{--                        <a href="{{route('gallery.index')}}" class="nav-link">Gallery</a>--}}
{{--                    </li>--}}
{{--                    <li class="nav-item px-2">--}}
{{--                        <a href="{{route('booking')}}" class="nav-link active">Booking</a>--}}
{{--                    </li>--}}
{{--                    @if($platinium)--}}
{{--                        <li class="nav-item px-2">--}}
{{--                            <a href="{{route('actions.index')}}" class="nav-link">Actions</a>--}}
{{--                        </li>--}}
{{--                    @endif--}}
{{--                </ul>--}}

{{--                <ul class="navbar-nav ml-auto">--}}
{{--                    <li class="nav-item dropdown mr-3">--}}
{{--                        <a href="#" class="nav-link dropdown-toggle remove-caret" data-toggle="dropdown">--}}
{{--                            <i class="fas fa-bell mt-1"></i>--}}
{{--                            @if(count($notifications) > 0)--}}
{{--                                <span class="badge badge-light">{{count($notifications)}}</span>--}}
{{--                            @endif--}}

{{--                        </a>--}}
{{--                        @if(count($notifications) > 0)--}}
{{--                            <div class="dropdown-menu">--}}

{{--                                {!! Form::open(['method'=>'POST', 'action'=>'OnlineBookingController@update']) !!}--}}
{{--                                <input id="all-read" class="dropdown-item" type="submit" value="Mark all read">--}}
{{--                                {!! Form::close() !!}--}}

{{--                                @foreach($notifications as $notification)--}}
{{--                                    <a id="green-item" href="{{route('bookingEdit', $notification->id)}}" class="dropdown-item">--}}
{{--                                        {{Str::limit($notification->restaurant_title, 20)}} -> {{Str::limit($notification->name, 20)}}, {{$notification->party}}--}}
{{--                                    </a>--}}
{{--                                @endforeach--}}
{{--                            </div>--}}
{{--                        @else--}}
{{--                            <div class="dropdown-menu">--}}
{{--                                <p class="dropdown-item">You dont have notifications</p>--}}
{{--                            </div>--}}
{{--                        @endif--}}
{{--                    </li>--}}
{{--                    <li class="nav-item dropdown mr-3">--}}
{{--                        <a href="#" class="nav-link dropdown-toggle" data-toggle="dropdown">--}}
{{--                            <i class="fas fa-user"></i> {{Auth::user()->name}}--}}
{{--                        </a>--}}
{{--                        <div class="dropdown-menu">--}}
{{--                            <a href="{{route('user.edit', Auth::user()->id)}}" class="dropdown-item">--}}
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
{{--                    <h1><i class="fas fa-calendar-alt"></i> Show Reservation</h1>--}}
{{--                </div>--}}
{{--            </div>--}}
{{--        </div>--}}
{{--    </header>--}}

{{--    <!-- ACTIONS -->--}}
{{--    <section id="actions" class="py-4 mb-4 bg-light">--}}
{{--        <div class="container">--}}
{{--            <div class="row">--}}
{{--                <div class="col-md-3">--}}
{{--                    <a href="/admin/booking" class="btn btn-primary btn-block">--}}
{{--                        <i class="fas fa-arrow-left"></i> Back--}}
{{--                    </a>--}}
{{--                </div>--}}
{{--                <div class="col-md-3">--}}
{{--                    {!! Form::open(['method'=>'DELETE', 'action'=>['OnlineBookingController@destroy', $booking->id]]) !!}--}}
{{--                    <button type="submit" class="btn btn-danger btn-block"><i class="fas fa-trash-alt"></i> Delete Reservation</button>--}}
{{--                    {!! Form::close() !!}--}}
{{--                </div>--}}
{{--            </div>--}}
{{--        </div>--}}
{{--    </section>--}}

{{--    <div class="container">--}}
{{--        <h1>Edit User</h1>--}}
{{--        <div class="row">--}}

{{--            <div class="col-md-6">--}}
{{--                @include('includes.user_form_error')--}}
{{--                <div class="card">--}}
{{--                    <div class="card-header">--}}
{{--                        <h4>Reservation</h4>--}}

{{--                    </div>--}}

{{--                    <div class="card-body">--}}

{{--                    <h4>Restaurant:</h4>--}}
{{--                    <p>{{$booking->restaurant_title}}</p>--}}
{{--                        <hr>--}}
{{--                    <h4>Name:</h4>--}}
{{--                    <p>{{$booking->name}}</p>--}}
{{--                        <hr>--}}
{{--                    <h4>Email:</h4>--}}
{{--                    <p>{{$booking->email}}</p>--}}
{{--                        <hr>--}}
{{--                    <h4>Phone:</h4>--}}
{{--                    <p>{{$booking->phone}}</p>--}}
{{--                        <hr>--}}
{{--                    <h4>Date:</h4>--}}
{{--                    <p>{{$booking->date}}</p>--}}
{{--                        <hr>--}}
{{--                    <h4>Time:</h4>--}}
{{--                    <p>{{$booking->time}}</p>--}}
{{--                        <hr>--}}
{{--                    <h4>Party:</h4>--}}
{{--                    <p>{{$booking->party}}</p>--}}
{{--                        <hr>--}}
{{--                    <h4>Description:</h4>--}}
{{--                    <p>{{$booking->body}}</p>--}}


{{--                    </div>--}}
{{--                    <div class="card-footer text-muted">--}}
{{--                        {{$booking->created_at->diffForHumans()}}--}}
{{--                    </div>--}}
{{--                </div>--}}

{{--            </div>--}}


{{--        </div>--}}
{{--    </div>--}}
{{--    </body>--}}
{{--@endsection--}}

{{--@section('footer')--}}

{{--@endsection--}}










@extends('layouts.admin-thema')
@section('title', 'Show Booking')
@section('content')
<!-- START MENU -->
<section id="admin2-dashboard">
    <div class="admin2-menu">
        <ol>
            <a href="/"><li><img src="{{asset('img/logo-white.svg')}}" alt=""></li></a>
            <a href="/"><li class="p-lead home-menu-toggle">Home</li></a>
            <a href="{{route('user.edit', Auth::user()->id)}}"><p class="p-lead admin-menu-name">{{Auth::user()->name}}</p></a>
            <hr>
            <a href="/admin"><li class="p-lead"><i class="fas fa-home"></i> Dashboard</li></a>
            <a href="{{route('restaurant.index')}}"><li class="p-lead"><i class="fas fa-utensils"></i> Restaurants</li></a>
            @if($platinium || $gold)
                <a href="{{route('event.index')}}"><li class="p-lead"><i class="fas fa-calendar-alt"></i> Events</li></a>
                <a href="{{route('gallery.index')}}"><li class="p-lead"><i class="fas fa-camera"></i> Gallery</li></a>
                <a href="{{route('booking')}}"><li class="p-lead active"><i class="fas fa-paste"></i> Booking</li></a>
            @endif
            @if($platinium)
                <a href="{{route('actions.index')}}"><li class="p-lead"><i class="fas fa-wallet"></i> Actions</li></a>
            @endif
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
            <i class="fas fa-paste"></i><h2>Reservation</h2>

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
            <a href="/admin/booking" class="back-button">Back</a>
            {!! Form::open(['method'=>'DELETE', 'action'=>['OnlineBookingController@destroy', $booking->id]]) !!}
            <input type="submit" class="delete-button" value="Delete">
            {!! Form::close() !!}

            <div class="create-form">
                <div class="form-left" id="form-left">
                    <p class="p-lead-h4">Reservation</p>

                    <label class="label-grey-small">RESTAURANT</label>
                    <p class="p-lead">{{$booking->restaurant_title}}</p>
                    <hr class="hr-reservation">
                    <label class="label-grey-small">NAME</label>
                    <p class="p-lead">{{$booking->name}}</p>
                    <hr class="hr-reservation">
                    <label class="label-grey-small">EMAIL</label>
                    <p class="p-lead">{{$booking->email}}</p>
                    <hr class="hr-reservation">
                    <label class="label-grey-small">PHONE</label>
                    <p class="p-lead">{{$booking->phone}}</p>
                    <hr class="hr-reservation">
                    <label class="label-grey-small">DATE</label>
                    <p class="p-lead">{{$booking->date}}</p>
                    <hr class="hr-reservation">
                    <label class="label-grey-small">TIME</label>
                    <p class="p-lead">{{$booking->time}}</p>
                    <hr class="hr-reservation">
                    <label class="label-grey-small">PARTY</label>
                    <p class="p-lead">{{$booking->party}}</p>
                    <hr class="hr-reservation">
                    <label class="label-grey-small">DESCRIPTION</label>
                    <p class="p-lead">{{$booking->body}}</p>


                    <p class="time-ago">{{$booking->created_at->diffForHumans()}}</p>


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