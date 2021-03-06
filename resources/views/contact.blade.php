{{--@extends('layouts.frontend')--}}
{{--<title>Contact</title>--}}
{{--<style>--}}
{{--    #aa-property-header {--}}
{{--        background-image: url("{{asset('images/header11.jpg')}}")!important;--}}
{{--    }--}}
{{--</style>--}}
{{--@section('content')--}}

{{--    <!-- Start menu section -->--}}
{{--    <section id="aa-menu-area">--}}
{{--        <nav class="navbar navbar-default main-navbar" role="navigation">--}}
{{--            <div class="container">--}}
{{--                <div class="navbar-header">--}}
{{--                    <!-- FOR MOBILE VIEW COLLAPSED BUTTON -->--}}
{{--                    <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">--}}
{{--                        <span class="sr-only">Toggle navigation</span>--}}
{{--                        <span class="icon-bar"></span>--}}
{{--                        <span class="icon-bar"></span>--}}
{{--                        <span class="icon-bar"></span>--}}
{{--                    </button>--}}
{{--                    <!-- LOGO -->--}}
{{--                    <!-- Text based logo -->--}}
{{--                    <a class="navbar-brand aa-logo" href="/"> Restaurant <span>Logo</span></a>--}}
{{--                    <!-- Image based logo -->--}}
{{--                    <!-- <a class="navbar-brand aa-logo-img" href="index.html"><img src="img/logo.png" alt="logo"></a> -->--}}
{{--                </div>--}}
{{--                <div id="navbar" class="navbar-collapse collapse">--}}
{{--                    <ul id="top-menu" class="nav navbar-nav navbar-right aa-main-nav">--}}
{{--                        <li><a href="/">HOME</a></li>--}}

{{--                        <li><a href="{{route('plan_and_price.planAndPrice')}}">PLAN AND PRICE</a></li>--}}
{{--                        <li><a href="{{route('show_all.showAll')}}">SHOW ALL</a></li>--}}
{{--                        <li><a href="{{route('locations.locations')}}">LOCATIONS</a></li>--}}
{{--                        <li class="active"><a href="{{route('contact.contact')}}">CONTACT</a></li>--}}
{{--                    </ul>--}}
{{--                </div><!--/.nav-collapse -->--}}
{{--            </div>--}}
{{--        </nav>--}}
{{--    </section>--}}
{{--    <!-- End menu section -->--}}

{{--    <!-- Start Proerty header  -->--}}
{{--    <section id="aa-property-header">--}}
{{--        <div class="container">--}}
{{--            <div class="row">--}}
{{--                <div class="col-md-12">--}}
{{--                    <div class="aa-property-header-inner">--}}
{{--                        <h2>CONTACT</h2>--}}
{{--                        <ol class="breadcrumb">--}}
{{--                            <li><a href="/">HOME</a></li>--}}
{{--                            <li class="active">Contact</li>--}}
{{--                        </ol>--}}
{{--                    </div>--}}
{{--                </div>--}}
{{--            </div>--}}
{{--        </div>--}}
{{--    </section>--}}
{{--    <!-- End Proerty header  -->--}}



{{--    <section id="aa-contact">--}}
{{--        <div class="container">--}}
{{--            <div class="row">--}}
{{--                <div class="col-md-12">--}}
{{--                    @if(Session::has('form_submitted'))--}}

{{--                        <h2 class="alert alert-danger text-center">--}}
{{--                            <button type="button" class="close" data-dismiss="alert" aria-label="Close">--}}
{{--                                <span aria-hidden="true">&times;</span>--}}
{{--                            </button>--}}
{{--                            {{session('form_submitted')}}</h2>--}}
{{--                    @endif--}}
{{--                    <div class="aa-contact-area">--}}

{{--                        <div class="aa-contact-bottom">--}}
{{--                            <div class="aa-title">--}}

{{--                                <h2>Send Your Message</h2>--}}
{{--                                <span></span>--}}
{{--                                <p>Your email address will not be published. Required fields are marked <strong class="required">*</strong></p>--}}
{{--                            </div>--}}
{{--                            <div class="aa-contact-form">--}}
{{--                                {!! Form::open(['url'=>'contact', 'class'=>'contactform']) !!}--}}
{{--                                    <p class="comment-form-author">--}}
{{--                                        <label for="author">Name <span class="required">*</span></label>--}}
{{--                                        <input type="text" name="author" value="" size="30" required="required">--}}
{{--                                    </p>--}}
{{--                                    <p class="comment-form-email">--}}
{{--                                        <label for="email">Email <span class="required">*</span></label>--}}
{{--                                        <input type="email" name="email" value="" aria-required="true" required="required">--}}
{{--                                    </p>--}}
{{--                                    <p class="comment-form-url">--}}
{{--                                        <label for="subject">Subject</label>--}}
{{--                                        <input type="text" name="subject">--}}
{{--                                    </p>--}}
{{--                                    <p class="comment-form-comment">--}}
{{--                                        <label for="comment">Message</label>--}}
{{--                                        <textarea name="comment" cols="45" rows="8" aria-required="true" required="required"></textarea>--}}
{{--                                    </p>--}}
{{--                                    <p class="form-submit">--}}
{{--                                        <input type="submit" name="submit" class="aa-browse-btn" value="Send Message">--}}
{{--                                    </p>--}}
{{--                                {!! Form::close() !!}--}}
{{--                            </div>--}}
{{--                        </div>--}}

{{--                        <div class="aa-contact-top" style="margin-top: 6rem;">--}}
{{--                            <div class="aa-contact-top-left">--}}
{{--                                <iframe width="100%" height="450" frameborder="0" allowfullscreen="" style="border:0" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d6851.201919469417!2d-86.11773906635584!3d33.47324776828677!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x888bdb60cc49c571%3A0x40451ca6baf275c7!2s36008+AL-77%2C+Talladega%2C+AL+35160%2C+USA!5e0!3m2!1sbn!2sbd!4v1460452919256"></iframe>--}}
{{--                            </div>--}}
{{--                            <div class="aa-contact-top-right">--}}
{{--                                <h2>Contact</h2>--}}
{{--                                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Beatae placeat aspernatur aperiam, quisquam voluptas enim tempore ab itaque nam modi eos corrupti distinctio nobis labore dolorum quae tenetur. Sapiente, sequi.</p>--}}
{{--                                <ul class="contact-info-list">--}}
{{--                                    <li> <i class="fa fa-phone"></i> 1-700-564-6321</li>--}}
{{--                                    <li> <i class="fa fa-envelope"></i> info@homeproperty.com</li>--}}
{{--                                    <li> <i class="fa fa-map-marker"></i> 36008 AL-77, Talladega, AL 35160, USA</li>--}}
{{--                                </ul>--}}
{{--                            </div>--}}
{{--                        </div>--}}

{{--                    </div>--}}
{{--                </div>--}}
{{--            </div>--}}
{{--        </div>--}}
{{--    </section>--}}

{{--@endsection--}}

{{--@section('footer')--}}

{{--@endsection--}}












@extends('layouts.frontend-thema')
<title>Contact</title>
<style>
    .help-block {
        margin-top: 44px;
        margin-left: -257px;
        font-size: 12px;
        position: absolute;
        color: red;
    }
    .form-flex-message {
        display: flex;
        justify-content: center;
        background-color: green;
        color: #fff;
        height: 81px;
        align-items: center;
        top: 0;
        z-index: 99999;
        position: sticky;
    }
    #form-is-send {
        display: flex;
    }
    #selectorLng {
        border: 1px solid #F46767;
        border-radius: 15px;
    }
</style>
@section('content')
    @if(Session::has('form_submitted'))
    <div class="form-flex-message">
            <p id="form-is-send">{{session('form_submitted')}}</p>
    </div>
    @endif
<!-- START LOGO AND MENU -->
<section id="menu" class="menu">
    <div class="container-menu">

        <div class="logo alignLeft center-response">
            @if($parametarExport == 'en')
                <a href="/en"><img src="{{asset('img/logo.svg')}}" class="logo-img" alt=""></a>
            @else
                <a href="/de"><img src="{{asset('img/logo.svg')}}" class="logo-img" alt=""></a>
            @endif
        </div>

        <a class="toggle-menu-link" href="javascript:void(0);" onclick="myFunction()">
            <i class="fas fa-bars"></i>
        </a>

        <nav class="navbar" id="navbar">
            <!--<div class="burger-nav"></div>-->
            <ul class="nav alignRight center-response">
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
                @if($parametarExport == 'en')
                    <li><a class="mobile-font" href="/en">{{__('home.Homepage')}}</a></li>
                @else
                    <li><a class="mobile-font" href="/de">{{__('home.Homepage')}}</a></li>
                @endif
                <li><a class="mobile-font" href="{{route('plans-and-pricing.planAndPrice', app()->getLocale())}}">Plans&Pricing</a></li>
                <li><a class="mobile-font" href="{{route('restaurants.showAll', app()->getLocale())}}">Restaurants</a></li>
                <li><a class="active mobile-font" href="{{route("contact.contact", app()->getLocale())}}">Contact</a></li>
                <li class="menu-buttons-block">
                @if (Route::has('login'))
                    {{--<div class="top-right links">--}}
                    @auth

                        @if($parametarExport == 'en')
                            <li class="menu-collapse"><a href="/en/admin" class="sign-in">Admin</a></li>
                        @else
                            <li class="menu-collapse"><a href="/de/admin" class="sign-in">Admin</a></li>
                        @endif

                        <li class="menu-collapse"><a href="{{route('logout', app()->getLocale())}}" onclick="event.preventDefault();
                                            document.getElementById('logout-form').submit();" class="register">{{ __('Logout') }}</a></li>
                        <a href="{{route('logout', app()->getLocale())}}" onclick="event.preventDefault();
                                            document.getElementById('logout-form').submit();" class="aa-login">

                        </a>
                        <form id="logout-form" action="{{ route('logout', app()->getLocale()) }}" method="POST" style="display: none;">
                            @csrf
                        </form>

                    @else
                        <li class="menu-collapse"><a href="{{route('login', app()->getLocale())}}" class="sign-in">Sign in</a></li>


                        @if (Route::has('register'))
                            <li class="menu-collapse top-distance-mobile"><a href="{{route('register.index', app()->getLocale())}}" class="register">Register</a></li>

                        @endif
                    @endauth
                    {{--</div>--}}
                @endif
            </ul>
        </nav>

    </div>
</section>
<!-- END LOGO AND MENU -->

<!-- START CONTACT -->
<section id="contact">
    <div class="container">
        <div class="contact-header">
            <div class="contact-left">
                <h2>Get in touch</h2>
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Consequatur consequuntur earum, labore maxime nam natus quas quos repudiandae tenetur unde!</p>
            </div>
            <div class="contact-right">
                <img src="{{asset('img/logo-white.svg')}}" alt="">
            </div>
        </div>
        <div class="contact-form">
            <div class="contact-form-left">
                <div class="container-inside-form">
                    <h3>Contact us</h3>

                    {!! Form::open(['url'=>'contact', 'class'=>'contactform']) !!}
                    <div class="form-input-first">
                        <i class="fas fa-user"></i><input type="text" name="author" class="input-style input-responsive-contact" placeholder="Name">
                        @if ($errors->has('author'))
                            <span class="help-block">
                                <strong>{{ $errors->first('author') }}</strong>
                            </span>
                        @endif
                        <i class="fas fa-home icon-display-block"></i><input type="text" name="firma" class="input-style input-responsive-contact input-contact-space input-style-margin" placeholder="Firma">
                    </div>
                    <div class="form-input-second">
                        <i class="fas fa-envelope"></i><input type="email" name="email" aria-required="true" class="input-style input-responsive-contact" placeholder="Email">
                        @if ($errors->has('email'))
                            <span class="help-block">
                                <strong>{{ $errors->first('email') }}</strong>
                            </span>
                        @endif
                        <i class="fas fa-phone-alt icon-display-block"></i><input type="text" name="telefonnumber" class="input-style input-contact-space input-responsive-contact input-style-margin" placeholder="Telefonnumber">
                    </div>
                    <div class="form-textarea">
                        <i class="fas fa-pencil-alt"></i><textarea class="textarea-responsive-contact" name="comment" id="textarea-responsive-contact" cols="30" rows="10" placeholder="Ihre Nachricht"></textarea>
                    </div>
                    <input type="submit" name="submit" class="submit" value="Send">
                    {!! Form::close() !!}

                </div>

            </div>

            <div class="contact-form-right">
                <div class="contact-form-text">
                    <h4>ADRESS</h4>
                    <p class="p-lead-margin">Some address 1</p>
                    <p>CH-8330 Pfaffikon ZH</p>
                </div>
                <div class="contact-form-text-2">
                    <h4>RUFEN SIE UNS AN</h4>
                    <p class="p-lead-top">123 456 78 90</p>
                </div>
                <div class="contact-form-text-3">
                    <h4>EMAIL</h4>
                    <p class="p-lead-top">example@gmail.com</p>
                </div>
            </div>
        </div>

        <div class="contact-info">
            <div class="info-1">
                <h4>ADDRESS</h4>
                <p class="p-lead">Some address 1</p>
            </div>
            <div class="info-2">
                <h4>RUFEN SIE UNS AN</h4>
                <p class="p-lead">123 456 78 90</p>
            </div>
            <div class="info-3">
                <h4>EMAIL</h4>
                <p class="p-lead">example@gmail.com</p>
            </div>
        </div>

    </div>
</section>
<!-- END CONTACT -->
@endsection

@section('footer')
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
    <script>
        $("document").ready(function(){
            setTimeout(function(){
                $(".help-block").fadeOut(1000, function() {$(this).remove()});
            }, 5000 );
        });

        setTimeout(function(){
            $(".form-flex-message").fadeOut(1000, function() {$(this).remove()});
        }, 5000 );

    </script>


@endsection

