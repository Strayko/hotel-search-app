@extends('layouts.admin-thema')

@section('content')
    <!-- START MENU -->
    <section id="admin2-dashboard">
        <div class="admin2-menu">
            <ol>
                <a href="/"><li><img src="{{asset('img/logo-white.svg')}}" alt=""></li></a>
                <a href="/"><li class="p-lead home-menu-toggle">Home</li></a>
                <a href="{{route('user.edit', Auth::user()->id)}}"><p class="p-lead admin-menu-name">{{Auth::user()->name}}</p></a>
                <hr>
                <a href="/admin2"><li class="p-lead"><i class="fas fa-home"></i> Dashboard</li></a>
                <a href="{{route('restaurants.index')}}"><li class="p-lead"><i class="fas fa-utensils"></i> Restaurants</li></a>
                <a href="{{route('packages.index')}}"><li class="p-lead"><i class="fas fa-box"></i> Packages</li></a>
                <a href="{{route('users.index')}}"><li class="p-lead"><i class="fas fa-users"></i> Users</li></a>
                <a href="{{route('media.index')}}"><li class="p-lead"><i class="fas fa-camera"></i> Media</li></a>
                <a href="{{route('comments.index')}}"><li class="p-lead"><i class="fas fa-comments"></i> Comments</li></a>
                <a href="{{route('locations.index')}}"><li class="p-lead active"><i class="fas fa-map-marker-alt"></i> Locations</li></a>
                <a href="{{route('foods.index')}}"><li class="p-lead"><i class="fas fa-hamburger"></i> Foods</li></a>
                <a href="{{route('distance.index')}}"><li class="p-lead"><i class="fab fa-font-awesome-flag"></i> Distances</li></a>
                <a href="{{route('blog.index')}}"><li class="p-lead"><i class="fab fa-blogger-b"></i> Blog</li></a>
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
                <i class="fas fa-map-marker-alt"></i><h2>Locations</h2>

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
                <div class="create-form">
                    <div class="form-left">
                        @if ($errors->any())
                            <div class="alert alert-danger">
                                <ul>
                                    @foreach ($errors->all() as $error)
                                        <li style="color: red;">{{ $error }}</li>
                                    @endforeach
                                </ul>
                            </div>
                        @endif
                        <p class="p-lead-h4">Create a new location</p>

                        {!! Form::open(['method'=>'POST', 'action'=>'AdminLocationsController@store', 'files'=>true]) !!}
                        {{csrf_field()}}
                        {!! Form::label('name', 'NAME', ['class'=>'label-grey-small']) !!}
                        {!! Form::text('name', null, ['class'=>'create-form-input', 'id'=>'name', 'required']) !!}

                        <div class="upload-image upload-user-image">
                            <p id="image-r" class="label-grey-image-r">UPLOAD IMAGE</p>
                            <button type="button" class="input-file">
                                <input type="file" name="photo_id" id="photo_id"/>
                                <label for="photo_id">BROWSE</label>
                            </button>
                            <hr class="between-fields">
                        </div>

                        <button class="create-input-button" type="submit"><i class="fas fa-map-marker-alt"></i> CREATE</button>
                        {!! Form::close() !!}
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