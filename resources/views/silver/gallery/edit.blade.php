@extends('layouts.admin')
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/dropzone/4.3.0/min/dropzone.min.css">
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
                    <h1><i class="fas fa-image"></i> Gallery</h1>
                </div>
            </div>
        </div>
    </header>

    <!-- SEARCH -->
    <section id="search" class="py-4 mb-4 bg-light">
        <div class="container">
            <div class="row">
                <div class="col-md-3">
                    {{ Form::model($restaurants, ['method'=>'PUT', 'action'=>['AuthorGalleryController@update', $restaurants->id], 'files'=>true]) }}
                    <div class="custom-file mb-3">
                        {{ Form::label('file', 'Upload...', ['class'=>'custom-file-label'])}}
                        {{ Form::file('file[]', array('multiple'=>true,'accept'=>'image/*','class'=>'custom-file-input'))  }}
                    </div>

                    {{ Form::submit('Upload', ['class'=>'btn btn-success btn-block'])  }}
                    {{ Form::close()  }}
                </div>
                <div class="col-md-6 ml-auto">
                    <div class="input-group">
                        <input type="text" class="form-control" placeholder="Search Media...">
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
                            <h4>Latest Pictures</h4>


                            <form action="delete/gallery" method="post" class="form-inline">
                                {{csrf_field()}}
                                {{method_field('delete')}}
                                <div class="form-group mr-3">
                                    <select name="checkBoxArray" id="" class="form-control">
                                        <option value="">Delete</option>
                                    </select>
                                </div>
                                <div class="form-group">
                                    <input type="submit" name="delete_all" class="btn btn-primary px-5" value="Submit">
                                </div>
                        </div>
                        @if(count($gallerys) > 0)
                        <table class="table table-striped">
                            <thead class="thead-dark">
                            <tr>
                                <th><input type="checkbox" id="options"></th>
                                <th>Picture</th>
                                <th>Created</th>
                                <th></th>
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
                                @else
                                <h1 class="text-center">Upload your gallery</h1>
                            @endif
                            </tbody>
                        </table>
                        </form>
                        {{--<div class="row">--}}
                            {{--<div class="col-12 d-flex justify-content-center">--}}
                                {{--{{$photos->onEachSide(1)->links()}}--}}
                            {{--</div>--}}
                        {{--</div>--}}


                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- ADD MEDIA MODAL -->
    <div class="modal fade" id="addMediaModal">
        <div class="modal-dialog modal-lg">
            <div class="modal-content">
                <div class="modal-header bg-secondary text-white">
                    <h5 class="modal-title">Upload</h5>
                    <button class="close" data-dismiss="modal">
                        <span>&times;</span>
                    </button>
                </div>
                <div class="modal-body">

                    {!! Form::open(['method'=>'POST', 'action'=>'AuthorGalleryController@store', 'class'=>'dropzone']) !!}

                    {!! Form::close() !!}
                </div>
                <div class="modal-footer">
                    <div class="form-group">

                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection

@section('footer')

    <script src="https://cdnjs.cloudflare.com/ajax/libs/dropzone/4.3.0/min/dropzone.min.js"></script>
    <script src="{{ asset('js/jquery.min.js') }}"></script>
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