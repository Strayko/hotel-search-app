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
                        <a href="{{route('media.index')}}" class="nav-link active">Media</a>
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
                    <h1><i class="fas fa-image"></i> Media</h1>
                </div>
            </div>
        </div>
    </header>

    <!-- SEARCH -->
    <section id="search" class="py-4 mb-4 bg-light">
        <div class="container">
            <div class="row">
                <div class="col-md-3">
                    <a href="#" class="btn btn-secondary btn-block" data-toggle="modal" data-target="#addMediaModal">
                        <i class="fas fa-plus"></i> Upload
                    </a>
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
                            <h4>Latest Media</h4>
                            <form action="delete/media" method="post" class="form-inline">
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

                        <table class="table table-striped">
                            <thead class="thead-dark">
                            <tr>
                                <th><input type="checkbox" id="options"></th>
                                <th>Id</th>
                                <th>Picture</th>
                                <th>Created</th>
                                <th></th>
                            </tr>
                            </thead>
                            <tbody>
                            @if($photos)
                                @foreach($photos as $photo)
                                    <tr>
                                        <td><input class="checkBoxes" type="checkbox" name="checkBoxArray[]" value="{{$photo->id}}"></td>
                                        <td>{{$photo->id}}</td>
                                        <td><img height="50" src="{{$photo->file}}" alt=""></td>
                                        <td>{{$photo->created_at ? $photo->created_at : 'no data'}}</td>
                                        <td class="d-flex justify-content-end">

                                        </td>
                                    </tr>
                                @endforeach
                            @endif
                            </tbody>
                        </table>
                        </form>
                        <div class="row">
                            <div class="col-12 d-flex justify-content-center">
                                {{$photos->onEachSide(1)->links()}}
                            </div>
                        </div>
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

                {!! Form::open(['method'=>'POST', 'action'=>'AdminMediaController@store', 'class'=>'dropzone']) !!}

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