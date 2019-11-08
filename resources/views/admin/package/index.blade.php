{{--@extends('layouts.admin')--}}

{{--@section('content')--}}
{{--    <nav class="navbar navbar-expand-sm navbar-dark bg-dark p-0">--}}
{{--        <div class="container">--}}
{{--            <a href="/" class="navbar-brand">Home</a>--}}
{{--            <button class="navbar-toggler" data-toggle="collapse" data-target="#navbarCollapse">--}}
{{--                <span class="navbar-toggler-icon"></span>--}}
{{--            </button>--}}
{{--            <div class="collpase navbar-collapse" id="navbarCollapse">--}}
{{--                <ul class="navbar-nav">--}}
{{--                    <li class="nav-item px-2">--}}
{{--                        <a href="/admin2" class="nav-link">Dashboard</a>--}}
{{--                    </li>--}}
{{--                    <li class="nav-item px-2">--}}
{{--                        <a href="{{route('restaurants.index')}}" class="nav-link">Restaurants</a>--}}
{{--                    </li>--}}
{{--                    <li class="nav-item px-2">--}}
{{--                        <a href="{{route('packages.index')}}" class="nav-link active">Packages</a>--}}
{{--                    </li>--}}
{{--                    <li class="nav-item px-2">--}}
{{--                        <a href="{{route('users.index')}}" class="nav-link">Users</a>--}}
{{--                    </li>--}}
{{--                    <li class="nav-item px-2">--}}
{{--                        <a href="{{route('media.index')}}" class="nav-link">Media</a>--}}
{{--                    </li>--}}
{{--                    <li class="nav-item px-2">--}}
{{--                        <a href="{{route('comments.index')}}" class="nav-link">Comments</a>--}}
{{--                    </li>--}}
{{--                    <li class="nav-item px-2">--}}
{{--                        <a href="{{route('locations.index')}}" class="nav-link">Locations</a>--}}
{{--                    </li>--}}
{{--                    <li class="nav-item dropdown">--}}
{{--                        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">--}}
{{--                            Others--}}
{{--                        </a>--}}
{{--                        <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">--}}
{{--                            <a class="dropdown-item" href="{{route('foods.index')}}">Foods</a>--}}
{{--                            <a class="dropdown-item" href="{{route('distance.index')}}">Distance</a>--}}
{{--                            <a class="dropdown-item" href="{{route('blog.index')}}">Blog</a>--}}
{{--                        </div>--}}
{{--                    </li>--}}
{{--                </ul>--}}

{{--                <ul class="navbar-nav ml-auto">--}}
{{--                    <li class="nav-item dropdown mr-3">--}}
{{--                        <a href="#" class="nav-link dropdown-toggle" data-toggle="dropdown">--}}
{{--                            <i class="fas fa-user"></i> {{Auth::user()->name}}--}}
{{--                        </a>--}}
{{--                        <div class="dropdown-menu">--}}

{{--                            <a href="{{route('users.edit', Auth::user()->id)}}" class="dropdown-item">--}}
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
{{--    <header id="main-header" class="py-2 bg-secondary text-white">--}}
{{--        <div class="container">--}}
{{--            <div class="row">--}}
{{--                <div class="col-md-6">--}}
{{--                    <h1><i class="fas fa-box"></i> Packages</h1>--}}
{{--                </div>--}}
{{--            </div>--}}
{{--        </div>--}}
{{--    </header>--}}

{{--    <!-- SEARCH -->--}}
{{--    <section id="search" class="py-4 mb-4 bg-light">--}}
{{--        <div class="container">--}}
{{--            <div class="row">--}}
{{--                <div class="col-md-3">--}}
{{--                    <a href="#" class="btn btn-secondary btn-block" data-toggle="modal" data-target="#addPackageModal">--}}
{{--                        <i class="fas fa-plus"></i> Add Package--}}
{{--                    </a>--}}
{{--                </div>--}}
{{--                <div class="col-md-3">--}}
{{--                    <a href="#" class="btn btn-secondary btn-block sorting" data-sorting_type="asc" data-column_name="id">--}}
{{--                        <i class="fas fa-box"></i> Sorting Packages--}}
{{--                    </a>--}}
{{--                </div>--}}
{{--                <div class="col-md-6 ml-auto">--}}
{{--                    <div class="form-group">--}}
{{--                        <input type="text" name="serach" id="serach" class="form-control" placeholder="Search Packages...">--}}
{{--                    </div>--}}
{{--                </div>--}}
{{--            </div>--}}
{{--        </div>--}}
{{--    </section>--}}

{{--    <section id="categories">--}}
{{--        <div class="container">--}}
{{--            <div class="row">--}}
{{--                <div class="col">--}}
{{--                    <div class="card">--}}
{{--                        <div class="card-header">--}}
{{--                            @if(Session::has('deleted_package'))--}}
{{--                                <p class="alert alert-danger">{{session('deleted_package')}}</p>--}}
{{--                            @endif--}}
{{--                            <h4>Latest Packages</h4>--}}
{{--                        </div>--}}
{{--                        <table class="table table-striped">--}}
{{--                            <thead class="thead-dark">--}}
{{--                            <tr>--}}
{{--                                <th>Id</th>--}}
{{--                                <th>Name</th>--}}
{{--                                <th>Created</th>--}}
{{--                                <th>Updated</th>--}}
{{--                                <th></th>--}}

{{--                            </tr>--}}
{{--                            </thead>--}}
{{--                            <tbody>--}}
{{--                            @include('admin.ajax.packages_data')--}}
{{--                            </tbody>--}}
{{--                        </table>--}}
{{--                        <input type="hidden" name="hidden_page" id="hidden_page" value="1" />--}}
{{--                        <input type="hidden" name="hidden_column_name" id="hidden_column_name" value="id" />--}}
{{--                        <input type="hidden" name="hidden_sort_type" id="hidden_sort_type" value="asc" />--}}
{{--                    </div>--}}
{{--                </div>--}}
{{--            </div>--}}
{{--        </div>--}}
{{--    </section>--}}


{{--    <!-- ADD PACKAGE MODAL -->--}}
{{--    <div class="modal fade" id="addPackageModal">--}}
{{--        <div class="modal-dialog modal-lg">--}}
{{--            <div class="modal-content">--}}
{{--                <div class="modal-header bg-secondary text-white">--}}
{{--                    <h5 class="modal-title">Add Package</h5>--}}
{{--                    <button class="close" data-dismiss="modal">--}}
{{--                        <span>&times;</span>--}}
{{--                    </button>--}}
{{--                </div>--}}
{{--                <div class="modal-body">--}}
{{--                    {!! Form::open(['method'=>'POST', 'action'=>'AdminPackagesController@store']) !!}--}}
{{--                        {{csrf_field()}}--}}
{{--                        <div class="form-group">--}}
{{--                            {!! Form::label('name', 'Name:') !!}--}}
{{--                            {!! Form::text('name', null, ['class'=>'form-control']) !!}--}}
{{--                        </div>--}}

{{--                </div>--}}
{{--                <div class="modal-footer">--}}
{{--                    {!! Form::submit('Create Package', ['class'=>'btn btn-secondary']) !!}--}}
{{--                    {!! Form::close() !!}--}}
{{--                </div>--}}
{{--            </div>--}}
{{--        </div>--}}
{{--    </div>--}}

{{--@endsection--}}

{{--@section('footer')--}}
{{--    <script>--}}
{{--        $(document).ready(function(){--}}

{{--            function clear_icon()--}}
{{--            {--}}
{{--                $('#id_icon').html('');--}}
{{--                $('#post_title_icon').html('');--}}
{{--            }--}}

{{--            function fetch_data(page, sort_type, sort_by, query)--}}
{{--            {--}}
{{--                $.ajax({--}}
{{--                    url:"/admin2/packages/46x2bvCw8JfSHT24?page="+page+"&sortby="+sort_by+"&sorttype="+sort_type+"&query="+query,--}}
{{--                    success:function(data)--}}
{{--                    {--}}
{{--                        $('tbody').html('');--}}
{{--                        $('tbody').html(data);--}}
{{--                    }--}}
{{--                })--}}
{{--            }--}}

{{--            $(document).on('keyup', '#serach', function(){--}}
{{--                var query = $('#serach').val();--}}
{{--                var column_name = $('#hidden_column_name').val();--}}
{{--                var sort_type = $('#hidden_sort_type').val();--}}
{{--                var page = $('#hidden_page').val();--}}
{{--                fetch_data(page, sort_type, column_name, query);--}}
{{--            });--}}

{{--            $(document).on('click', '.sorting', function(){--}}
{{--                var column_name = $(this).data('column_name');--}}
{{--                var order_type = $(this).data('sorting_type');--}}
{{--                var reverse_order = '';--}}
{{--                if(order_type == 'asc')--}}
{{--                {--}}
{{--                    $(this).data('sorting_type', 'desc');--}}
{{--                    reverse_order = 'desc';--}}
{{--                    clear_icon();--}}
{{--                    $('#'+column_name+'_icon').html('<span class="glyphicon glyphicon-triangle-bottom"></span>');--}}
{{--                }--}}
{{--                if(order_type == 'desc')--}}
{{--                {--}}
{{--                    $(this).data('sorting_type', 'asc');--}}
{{--                    reverse_order = 'asc';--}}
{{--                    clear_icon--}}
{{--                    $('#'+column_name+'_icon').html('<span class="glyphicon glyphicon-triangle-top"></span>');--}}
{{--                }--}}
{{--                $('#hidden_column_name').val(column_name);--}}
{{--                $('#hidden_sort_type').val(reverse_order);--}}
{{--                var page = $('#hidden_page').val();--}}
{{--                var query = $('#serach').val();--}}
{{--                fetch_data(page, reverse_order, column_name, query);--}}
{{--            });--}}

{{--            $(document).on('click', '.pagination a', function(event){--}}
{{--                event.preventDefault();--}}
{{--                var page = $(this).attr('href').split('page=')[1];--}}
{{--                $('#hidden_page').val(page);--}}
{{--                var column_name = $('#hidden_column_name').val();--}}
{{--                var sort_type = $('#hidden_sort_type').val();--}}

{{--                var query = $('#serach').val();--}}

{{--                $('li').removeClass('active');--}}
{{--                $(this).parent().addClass('active');--}}
{{--                fetch_data(page, sort_type, column_name, query);--}}
{{--            });--}}

{{--        });--}}
{{--    </script>--}}
{{--@endsection--}}











@extends('layouts.admin-thema')
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.0/jquery.min.js"></script>
<style>
    .form-inline {
        display: inline;
    }
    #selectorLng {
        border: 1px solid #CACACA;
        border-radius: 15px;
        float: right;
    }
</style>
@section('content')
<!-- START MENU -->
<section id="admin2-dashboard">
    <div class="admin2-menu">
        <ol>
            <a href="/{{$parametarExport}}"><li><img src="{{asset('img/logo-white.svg')}}" alt=""></li></a>
            <a href="/{{$parametarExport}}"><li class="p-lead home-menu-toggle">Home</li></a>
            <a href="{{route('user.edit', [app()->getLocale(), Auth::user()->id])}}"><p class="p-lead admin-menu-name">{{Auth::user()->name}}</p></a>
            <hr>
            <a href="/{{$parametarExport}}/admin2"><li class="p-lead"><i class="fas fa-home"></i> Dashboard</li></a>
            <a href="{{route('restaurants.index', app()->getLocale())}}"><li class="p-lead"><i class="fas fa-utensils"></i> Restaurants</li></a>
            <a href="{{route('packages.index', app()->getLocale())}}"><li class="p-lead active"><i class="fas fa-box"></i> Packages</li></a>
            <a href="{{route('users.index', app()->getLocale())}}"><li class="p-lead"><i class="fas fa-users"></i> Users</li></a>
            <a href="{{route('media.index', app()->getLocale())}}"><li class="p-lead"><i class="fas fa-camera"></i> Media</li></a>
            <a href="{{route('comments.index', app()->getLocale())}}"><li class="p-lead"><i class="fas fa-comments"></i> Comments</li></a>
            <a href="{{route('locations.index', app()->getLocale())}}"><li class="p-lead"><i class="fas fa-map-marker-alt"></i> Locations</li></a>
            <a href="{{route('foods.index', app()->getLocale())}}"><li class="p-lead"><i class="fas fa-hamburger"></i> Foods</li></a>
            <a href="{{route('distance.index', app()->getLocale())}}"><li class="p-lead"><i class="fab fa-font-awesome-flag"></i> Distances</li></a>
            <a href="{{route('blog.index', app()->getLocale())}}"><li class="p-lead"><i class="fab fa-blogger-b"></i> Blog</li></a>
            <a href="{{route('logout', app()->getLocale())}}" onclick="event.preventDefault();
            document.getElementById('logout-form').submit();"><p class="p-lead logout-menu-show"><i class="fas fa-sign-out-alt"></i> {{__('Logout')}}</p></a>
            <form id="logout-form" action="{{ route('logout', app()->getLocale()) }}" method="POST" style="display: none;">
                @csrf
            </form>
        </ol>
    </div>
    <!-- END MENU -->

    <!-- START PACKAGE CONTENT -->
    <div class="admin2-dashboard-content">
        <div class="dashboard-header">
            <i class="fas fa-box"></i><h2>Packages</h2>

            <a class="toggle-menu-link" href="javascript:void(0);" onclick="myFunction()">
                <i class="fas fa-bars"></i>
            </a>

            <a href="{{route('logout', app()->getLocale())}}" onclick="event.preventDefault();
            document.getElementById('logout-form').submit();">
                <p class="p-lead"><i class="fas fa-sign-out-alt"></i> {{__('Logout')}}</p></a>
            <form id="logout-form" action="{{ route('logout', app()->getLocale()) }}" method="POST" style="display: none;">
                @csrf
            </form>

            <a href="{{route('users.edit', [app()->getLocale(), Auth::user()->id])}}"><p class="p-lead">{{Auth::user()->name}}</p> <img src="{{Auth::user()->photo->file}}" alt=""></a>
        </div>
        <div class="dashboard-content">
            <select name="selectorLng" id="selectorLng" onchange="location = this.value;">
                @if($parametarExport == 'de')
                    @foreach (config('app.available_locales') as $locale)
                        <option value="{{ route(\Illuminate\Support\Facades\Route::currentRouteName(), $locale) }}">
                            <a class="nav-link"
                               href="{{ route(\Illuminate\Support\Facades\Route::currentRouteName(), $locale) }}"
                               @if (app()->getLocale() == $locale) style="font-weight: bold; text-decoration: underline" @endif>{{ strtoupper($locale) }}</a>
                        </option>
                    @endforeach
                @elseif($parametarExport == 'en')
                    @foreach (array_reverse(config('app.available_locales')) as $locale)
                        <option value="{{ route(\Illuminate\Support\Facades\Route::currentRouteName(), $locale) }}">
                            <a class="nav-link"
                               href="{{ route(\Illuminate\Support\Facades\Route::currentRouteName(), $locale) }}"
                               @if (app()->getLocale() == $locale) style="font-weight: bold; text-decoration: underline" @endif>{{ strtoupper($locale) }}</a>
                        </option>
                    @endforeach
                @endif
            </select>
            <div class="search-inputs">
                <i class="fas fa-search"></i>
                <input class="search" name="serach" id="serach" type="text" placeholder="Search packages ...">
                <div class="add-button-box">
                    <a class="header-inputs-red" href="{{route('packages.create', app()->getLocale())}}"><i class="fas fa-plus"></i> ADD PACKAGE</a>
                </div>
                <div class="sorting-button-box">
                    <a class="header-inputs-tirkiz sorting" data-sorting_type="asc" data-column_name="id" href="#"><i class="fas fa-utensils"></i> SORTING PACKAGES</a>
                </div>
            </div>
            <div class="dashboard-table" id="restaurants-table">
                <table>
                    <thead>
                    <tr>
                        <th>ID</th>
                        <th>NAME</th>
                        <th>CREATED</th>
                        <th>UPDATED</th>
                    </tr>
                    </thead>
                    <tbody>
                    <tr>
                        @include('admin.ajax.packages_data')
                    </tr>
                    </tbody>
                </table>
                <input type="hidden" name="hidden_page" id="hidden_page" value="1" />
                <input type="hidden" name="hidden_column_name" id="hidden_column_name" value="id" />
                <input type="hidden" name="hidden_sort_type" id="hidden_sort_type" value="asc" />
            </div>

        </div>
    </div>
</section>
<!-- END PACKAGE CONTENT -->
@endsection

@section('footer')
    <script>
        $(document).ready(function(){

            function clear_icon()
            {
                $('#id_icon').html('');
                $('#post_title_icon').html('');
            }

            var parametarSet;
            var parametar = window.location.href;
            var parametarExport = parametar.match(/en/);
            if (parametarExport == 'en') {
                parametarSet = 'en';
            } else {
                parametarSet = 'de'
            }

            function fetch_data(page, sort_type, sort_by, query)
            {
                $.ajax({
                    url:"/"+parametarSet+"/admin2/packages/46x2bvCw8JfSHT24?page="+page+"&sortby="+sort_by+"&sorttype="+sort_type+"&query="+query,
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