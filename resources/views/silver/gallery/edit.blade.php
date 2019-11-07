{{--@extends('layouts.admin')--}}
{{--<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/dropzone/4.3.0/min/dropzone.min.css">--}}
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
{{--                        <a href="{{route('gallery.index')}}" class="nav-link active">Gallery</a>--}}
{{--                    </li>--}}
{{--                    <li class="nav-item px-2">--}}
{{--                        <a href="{{route('booking')}}" class="nav-link">Booking</a>--}}
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
{{--    <header id="main-header" class="py-2 bg-secondary text-white">--}}
{{--        <div class="container">--}}
{{--            <div class="row">--}}
{{--                <div class="col-md-6">--}}
{{--                    <h1><i class="fas fa-image"></i> Gallery</h1>--}}
{{--                </div>--}}
{{--            </div>--}}
{{--        </div>--}}
{{--    </header>--}}

{{--    <!-- SEARCH -->--}}
{{--    <section id="search" class="py-4 mb-4 bg-light">--}}
{{--        <div class="container">--}}
{{--            <div class="row">--}}
{{--                <div class="col-md-3">--}}
{{--                    <a href="/admin/gallery" class="btn btn-primary btn-block">--}}
{{--                        <i class="fas fa-arrow-left"></i> Back--}}
{{--                    </a>--}}
{{--                </div>--}}

{{--                <div class="col-md-3">--}}
{{--                    <a href="#" class="btn btn-secondary btn-block sorting" data-sorting_type="asc" data-column_name="id">--}}
{{--                        <i class="fas fa-images"></i> Sorting Gallery--}}
{{--                    </a>--}}
{{--                </div>--}}
{{--                <div class="col-md-6 ml-auto">--}}
{{--                    <div class="form-group">--}}
{{--                        <input type="text" name="serach" id="serach" class="form-control" placeholder="Search Gallery...">--}}
{{--                    </div>--}}
{{--                </div>--}}
{{--            </div>--}}
{{--            <div class="row">--}}
{{--                <div class="col-md-3">--}}

{{--                    {{ Form::model($restaurants, ['method'=>'PUT', 'action'=>['AuthorGalleryController@update', $restaurants->id], 'files'=>true]) }}--}}
{{--                    <div class="custom-file mb-3">--}}
{{--                        {{ Form::label('file', 'Upload...', ['class'=>'custom-file-label'])}}--}}
{{--                        {{ Form::file('file[]', array('multiple'=>true,'accept'=>'image/*','class'=>'custom-file-input'))  }}--}}
{{--                    </div>--}}

{{--                    {{ Form::submit('Upload', ['class'=>'btn btn-success btn-block'])  }}--}}
{{--                    {{ Form::close()  }}--}}
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
{{--                            <h4>Latest Pictures</h4>--}}


{{--                            <form action="delete/gallery" method="post" class="form-inline">--}}
{{--                                {{csrf_field()}}--}}
{{--                                {{method_field('delete')}}--}}
{{--                                <div class="form-group mr-3">--}}
{{--                                    <select name="checkBoxArray" id="" class="form-control">--}}
{{--                                        <option value="">Delete</option>--}}
{{--                                    </select>--}}
{{--                                </div>--}}
{{--                                <div class="form-group">--}}
{{--                                    <input type="submit" name="delete_all" class="btn btn-primary px-5" value="Submit">--}}
{{--                                </div>--}}
{{--                            </form>--}}
{{--                        </div>--}}
{{--                        @if(count($gallerys) > 0)--}}
{{--                        <table class="table table-striped">--}}
{{--                            <thead class="thead-dark">--}}
{{--                            <tr>--}}
{{--                                <th><input type="checkbox" id="options"></th>--}}
{{--                                <th>Picture</th>--}}
{{--                                <th>Created</th>--}}
{{--                                <th></th>--}}
{{--                            </tr>--}}
{{--                            </thead>--}}
{{--                            <tbody>--}}

{{--                                @include('silver.ajax.gallerys_data')--}}
{{--                                @else--}}
{{--                                <h1 class="text-center">Upload your gallery</h1>--}}
{{--                            @endif--}}
{{--                            </tbody>--}}
{{--                        </table>--}}
{{--                            <input type="hidden" name="hidden_page" id="hidden_page" value="1" />--}}
{{--                            <input type="hidden" name="hidden_column_name" id="hidden_column_name" value="id" />--}}
{{--                            <input type="hidden" name="hidden_sort_type" id="hidden_sort_type" value="asc" />--}}
{{--                        </form>--}}
{{--                        <div class="row">--}}
{{--                            <div class="col-12 d-flex justify-content-center">--}}
{{--                                {{$gallerys->onEachSide(1)->links()}}--}}
{{--                            </div>--}}
{{--                        </div>--}}


{{--                    </div>--}}
{{--                </div>--}}
{{--            </div>--}}
{{--        </div>--}}
{{--    </section>--}}

{{--    <!-- ADD MEDIA MODAL -->--}}
{{--    <div class="modal fade" id="addMediaModal">--}}
{{--        <div class="modal-dialog modal-lg">--}}
{{--            <div class="modal-content">--}}
{{--                <div class="modal-header bg-secondary text-white">--}}
{{--                    <h5 class="modal-title">Upload</h5>--}}
{{--                    <button class="close" data-dismiss="modal">--}}
{{--                        <span>&times;</span>--}}
{{--                    </button>--}}
{{--                </div>--}}
{{--                <div class="modal-body">--}}

{{--                    {!! Form::open(['method'=>'POST', 'action'=>'AuthorGalleryController@store', 'class'=>'dropzone']) !!}--}}

{{--                    {!! Form::close() !!}--}}
{{--                </div>--}}
{{--                <div class="modal-footer">--}}
{{--                    <div class="form-group">--}}

{{--                    </div>--}}
{{--                </div>--}}
{{--            </div>--}}
{{--        </div>--}}
{{--    </div>--}}

{{--@endsection--}}

{{--@section('footer')--}}

{{--    <script src="https://cdnjs.cloudflare.com/ajax/libs/dropzone/4.3.0/min/dropzone.min.js"></script>--}}
{{--    <script src="{{ asset('js/jquery.min.js') }}"></script>--}}
{{--    <script>--}}
{{--        $(document).ready(function() {--}}
{{--            $('#options').click(function() {--}}
{{--                if(this.checked) {--}}
{{--                    $('.checkBoxes').each(function() {--}}
{{--                        this.checked = true;--}}
{{--                    })--}}
{{--                } else {--}}
{{--                    $('.checkBoxes').each(function() {--}}
{{--                        this.checked = false;--}}
{{--                    });--}}
{{--                }--}}
{{--            });--}}
{{--        });--}}
{{--    </script>--}}
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
{{--                    url:"/admin/gallery/{id}/cKS3dpqP6xF6qZEf?page="+page+"&sortby="+sort_by+"&sorttype="+sort_type+"&query="+query,--}}
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
    #upload-form-buttons {
        display: inline;
    }
    #file {
        display: none;
    }
    .page-item {
        display: inline-block;
    }
    .page-item.disabled {
        padding: 5px 20px 5px 20px;
        background-color: #c45555;
    }
    .active .page-link {
        padding: 20px;
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
            <a href="/{{$parametarExport}}/admin"><li class="p-lead"><i class="fas fa-home"></i> Dashboard</li></a>
            <a href="{{route('restaurant.index', app()->getLocale())}}"><li class="p-lead"><i class="fas fa-utensils"></i> Restaurants</li></a>
            <a href="{{route('event.index', app()->getLocale())}}"><li class="p-lead"><i class="fas fa-calendar-alt"></i> Events</li></a>
            <a href="{{route('gallery.index', app()->getLocale())}}"><li class="p-lead active"><i class="fas fa-camera"></i> Gallery</li></a>
            <a href="{{route('booking', app()->getLocale())}}"><li class="p-lead"><i class="fas fa-paste"></i> Booking</li></a>
            @if($platinium)
                <a href="{{route('actions.index', app()->getLocale())}}"><li class="p-lead"><i class="fas fa-wallet"></i> Actions</li></a>
            @endif
            <a href="#"><p class="p-lead logout-menu-show"><i class="fas fa-sign-out-alt"></i> Logout</p></a>
        </ol>
    </div>
    <!-- END MENU -->

    <!-- START PACKAGE CONTENT -->
    <div class="admin2-dashboard-content">
        <div class="dashboard-header">
            <i class="fas fa-camera"></i><h2>Photos</h2>

            <a class="toggle-menu-link" href="javascript:void(0);" onclick="myFunction()">
                <i class="fas fa-bars"></i>
            </a>

            <a href="{{route('logout', app()->getLocale())}}" onclick="event.preventDefault();
            document.getElementById('logout-form').submit();">
                <p class="p-lead"><i class="fas fa-sign-out-alt"></i> {{__('Logout')}}</p></a>
            <form id="logout-form" action="{{ route('logout', app()->getLocale()) }}" method="POST" style="display: none;">
                @csrf
            </form>

            <a href="{{route('user.edit', [app()->getLocale(), Auth::user()->id])}}"><p class="p-lead">{{Auth::user()->name}}</p> <img src="{{Auth::user()->photo->file}}" alt=""></a>
        </div>
        <div class="dashboard-content">
            <select name="selectorLng" id="selectorLng" onchange="location = this.value;">
                @if($parametarExport == 'de')
                    @foreach (config('app.available_locales') as $locale)
                        <option value="{{ route(\Illuminate\Support\Facades\Route::currentRouteName(), [$locale, $restaurants]) }}">
                            <a class="nav-link"
                               href="{{ route(\Illuminate\Support\Facades\Route::currentRouteName(), [$locale, $restaurants]) }}"
                               @if (app()->getLocale() == $locale) style="font-weight: bold; text-decoration: underline" @endif>{{ strtoupper($locale) }}</a>
                        </option>
                    @endforeach
                @elseif($parametarExport == 'en')
                    @foreach (array_reverse(config('app.available_locales')) as $locale)
                        <option value="{{ route(\Illuminate\Support\Facades\Route::currentRouteName(), [$locale, $restaurants]) }}">
                            <a class="nav-link"
                               href="{{ route(\Illuminate\Support\Facades\Route::currentRouteName(), [$locale, $restaurants]) }}"
                               @if (app()->getLocale() == $locale) style="font-weight: bold; text-decoration: underline" @endif>{{ strtoupper($locale) }}</a>
                        </option>
                    @endforeach
                @endif
            </select>


            <div class="search-inputs gallery-search">
{{--                <i class="fas fa-search"></i>--}}
{{--                <input class="search-2" id="serach" name="serach" type="text" placeholder="Search photo ...">--}}

                {{ Form::model($restaurants, ['method'=>'PUT', 'id'=>'upload-form-buttons', 'action'=>['AuthorGalleryController@update', app()->getLocale(), $restaurants->id], 'files'=>true]) }}
                <div class="add-button-box add-button-all only-width">
                {{ Form::label('file', 'Browse...', ['class'=>'custom-file-label only-left-correction'])}}
                {{ Form::file('file[]', array('multiple'=>true,'accept'=>'image/*','id'=>'file'))  }}
                </div>
                <div class="add-button-box add-button-all add-margin-left only-upload-width">
                    {{ Form::submit('Upload', ['class'=>'header-inputs-tirkiz-3'])  }}
                </div>
                {{ Form::close()  }}

{{--                <div class="sorting-button-box add-button-all add-margin-left last-margin-left only-width">--}}
{{--                    <a class="header-inputs-tirkiz sorting" data-sorting_type="asc" data-column_name="id" href="#"><i class="fas fa-camera"></i> SORTING PHOTOS</a>--}}
{{--                </div>--}}
            </div>
            <div class="dashboard-table" id="restaurants-table">
                <form action="delete/gallery" method="post" class="form-inline">
                {{csrf_field()}}
                {{method_field('delete')}}
                    <select class="media-select" name="checkBoxArray" id="">
                        <option>DELETE</option>
                    </select>
                    <input class="media-submit" name="delete_all" type="submit" value="Submit">
                    @if(count($gallerys) > 0)
                    <table class="table table-striped">
                    <thead class="thead-dark">
                    <tr>
                        <th class="checkb"></th>
                        <th>PICTURE</th>
                        <th>CREATED</th>
                    </tr>
                    </thead>
                    <tbody>
                    @foreach($gallerys as $gallery)
                        <tr>
                            <td><input class="checkBoxes" type="checkbox" name="checkBoxArray[]" value="{{$gallery->id}}"></td>
                            <td><img src="{{URL::asset('/gallery/' . $gallery->photo)}}" alt="" height="100" width="100"></td>
                            {{--<td><img height="50" src="{{$restaurant->file}}" alt=""></td>--}}
                            <td>{{$gallery->created_at ? $gallery->created_at->diffForHumans() : 'no data'}}</td>
                            <td class="d-flex justify-content-end">

                            </td>
                        </tr>
                    @endforeach
                    <tr>
                        <td colspan="10" align="center">
                            <div style="display: inline-flex">
                                {{ $gallerys->onEachSide(1)->links() }}
                            </div>
                        </td>
                    </tr>
                    @else
                        <h1 class="text-center">Upload your gallery</h1>
                    @endif
                    </tbody>
                </table>

                </form>

            </div>

        </div>
    </div>
</section>
<!-- END PACKAGE CONTENT -->
@endsection

@section('footer')
    <script>
        $(document).ready(function() {
            $('#options').click(function() {
                if(this.checked) {
                    $('.checkBoxes').each(function() {
                        this.checked = true;
                    })
                } else {
                    $('.checkBoxes').each(function() {
                        this.checked = false;
                    });
                }
            });
        });
    </script>

@endsection