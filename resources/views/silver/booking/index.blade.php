@extends('layouts.admin')
<title>Restaurant</title>
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
    #green-item {
        background: rgba(211,211,211,0.3);
        margin-top: 1px;
        margin-bottom: 1px;
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
                        @if($platinium)
                            <li class="nav-item px-2">
                                <a href="{{route('actions.index')}}" class="nav-link">Actions</a>
                            </li>
                        @endif

                </ul>

                <ul class="navbar-nav ml-auto">



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
                                <a id="green-item" href="{{route('bookingEdit', $notification->id)}}" class="dropdown-item">
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
                            @if(Session::has('deleted_reservations'))

                                <p class="alert alert-danger">
                                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                        <span aria-hidden="true">&times;</span>
                                    </button>
                                    {{session('deleted_reservations')}}</p>
                            @endif
                            <h4>Reservations</h4>
                        </div>

                            @if(count($booking) > 0)
                            <table class="table table-striped">
                                <thead class="thead-dark">
                                <tr>
                                    <th>Restaurant</th>
                                    <th>Name</th>
                                    <th>Phone</th>
                                    <th>Date</th>
                                    <th>Time</th>
                                    <th>Created</th>
                                    <th>Party</th>
                                    <th></th>
                                </tr>
                                </thead>
                                <tbody>

                                @include('silver.ajax.booking_data')
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
    <script>
        $(document).ready(function(){

            function clear_icon()
            {
                $('#id_icon').html('');
                $('#post_title_icon').html('');
            }

            function fetch_data(page, sort_type, sort_by, query)
            {
                $.ajax({
                    url:"/admin/booking/8NAkT49naKfcwhwQ?page="+page+"&sortby="+sort_by+"&sorttype="+sort_type+"&query="+query,
                    success:function(data)
                    {
                        $('tbody').html('');
                        $('tbody').html(data);
                    }
                })
            }

            $(document).on('keyup', '#serach', function(){
                var query = $('#serach').val();
                var column_name = $('#hidden_column_name').val();
                var sort_type = $('#hidden_sort_type').val();
                var page = $('#hidden_page').val();
                fetch_data(page, sort_type, column_name, query);
            });

            $(document).on('click', '.sorting', function(){
                var column_name = $(this).data('column_name');
                var order_type = $(this).data('sorting_type');
                var reverse_order = '';
                if(order_type == 'asc')
                {
                    $(this).data('sorting_type', 'desc');
                    reverse_order = 'desc';
                    clear_icon();
                    $('#'+column_name+'_icon').html('<span class="glyphicon glyphicon-triangle-bottom"></span>');
                }
                if(order_type == 'desc')
                {
                    $(this).data('sorting_type', 'asc');
                    reverse_order = 'asc';
                    clear_icon
                    $('#'+column_name+'_icon').html('<span class="glyphicon glyphicon-triangle-top"></span>');
                }
                $('#hidden_column_name').val(column_name);
                $('#hidden_sort_type').val(reverse_order);
                var page = $('#hidden_page').val();
                var query = $('#serach').val();
                fetch_data(page, reverse_order, column_name, query);
            });

            $(document).on('click', '.pagination a', function(event){
                event.preventDefault();
                var page = $(this).attr('href').split('page=')[1];
                $('#hidden_page').val(page);
                var column_name = $('#hidden_column_name').val();
                var sort_type = $('#hidden_sort_type').val();

                var query = $('#serach').val();

                $('li').removeClass('active');
                $(this).parent().addClass('active');
                fetch_data(page, sort_type, column_name, query);
            });

        });
    </script>
@endsection