@extends('layouts.frontend')
<title>Locations</title>
<style>
    #aa-property-header {
        background-image: url("{{asset('images/single_page_header.jpg')}}")!important;
    }
</style>
@section('content')

    <!-- Start menu section -->
    <section id="aa-menu-area">
        <nav class="navbar navbar-default main-navbar" role="navigation">
            <div class="container">
                <div class="navbar-header">
                    <!-- FOR MOBILE VIEW COLLAPSED BUTTON -->
                    <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
                        <span class="sr-only">Toggle navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                    <!-- LOGO -->
                    <!-- Text based logo -->
                    <a class="navbar-brand aa-logo" href="/"> Restaurant <span>Logo</span></a>
                    <!-- Image based logo -->
                    <!-- <a class="navbar-brand aa-logo-img" href="index.html"><img src="img/logo.png" alt="logo"></a> -->
                </div>
                <div id="navbar" class="navbar-collapse collapse">
                    <ul id="top-menu" class="nav navbar-nav navbar-right aa-main-nav">
                        <li><a href="/">HOME</a></li>

                        <li><a href="{{route('plan_and_price.planAndPrice')}}">PLAN AND PRICE</a></li>
                        <li><a href="{{route('show_all.showAll')}}">SHOW ALL</a></li>
                        <li class="active"><a href="{{route('locations.locations')}}">LOCATIONS</a></li>
                        <li><a href="{{route('contact.contact')}}">CONTACT</a></li>

                    </ul>
                </div><!--/.nav-collapse -->
            </div>
        </nav>
    </section>
    <!-- End menu section -->

    <!-- Start Proerty header  -->
    <section id="aa-property-header">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="aa-property-header-inner">
                        <h2>Show All</h2>
                        <ol class="breadcrumb">
                            <li><a href="/">HOME</a></li>
                            <li class="active">Show All</li>
                        </ol>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- End Proerty header  -->


        


@endsection

@section('footer')

@endsection