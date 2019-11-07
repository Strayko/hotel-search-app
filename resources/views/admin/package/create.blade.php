@extends('layouts.admin-thema')

@section('title', 'Create Package')
@section('style', '
        .help-block {
            margin-top: -10px;
            font-size: 12px;
            position: absolute;
            color: red;
        }
        #selectorLng {
        border: 1px solid #CACACA;
        border-radius: 15px;
        float: right;
    }
')

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
                <div class="create-form">
                    <div class="form-left">
{{--                        @if ($errors->any())--}}
{{--                            <div class="alert alert-danger">--}}
{{--                                <ul>--}}
{{--                                    @foreach ($errors->all() as $error)--}}
{{--                                        <li style="color: red;">{{ $error }}</li>--}}
{{--                                    @endforeach--}}
{{--                                </ul>--}}
{{--                            </div>--}}
{{--                        @endif--}}
                        <p class="p-lead-h4">Create a new package</p>

                        {!! Form::open(['method'=>'POST', 'action'=>['AdminPackagesController@store', app()->getLocale()]]) !!}
                        {{csrf_field()}}
                        {!! Form::label('name', 'NAME', ['class'=>'label-grey-small']) !!}
                        {!! Form::text('name', null, ['class'=>'create-form-input', 'id'=>'name']) !!}
                        @if ($errors->has('name'))
                            <span class="help-block">
                                <strong>{{ $errors->first('name') }}</strong>
                            </span>
                        @endif

                        <button class="create-input-button" type="submit"><i class="fas fa-box"></i> CREATE</button>
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
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
    <script>
        $("document").ready(function(){
            setTimeout(function(){
                $(".help-block").fadeOut(1000, function() {$(this).remove()});
            }, 5000 );
        });


    </script>
@endsection