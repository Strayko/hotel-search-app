@extends('layouts.frontend')
<title>Plan and price</title>
<style>
    #aa-property-header {
        background-image: url("{{asset('images/single_page_header.jpg')}}")!important;
    }


</style>
<link rel="stylesheet" href="{{asset('css/planAndPrice.css')}}">
{{--<link rel="stylesheet" href="{{asset('css/bootstrap4.css')}}">--}}
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

                        <li class="active"><a href="{{route('plan_and_price.planAndPrice')}}">PLAN AND PRICE</a></li>
                        <li class="dropdown">
                            <a class="dropdown-toggle" data-toggle="dropdown" href="blog-archive.html">BLOG <span class="caret"></span></a>
                            <ul class="dropdown-menu" role="menu">
                                <li><a href="blog-archive.html">BLOG</a></li>
                                <li><a href="blog-single.html">BLOG DETAILS</a></li>
                            </ul>
                        </li>
                        <li><a href="contact.html">CONTACT</a></li>
                        <li><a href="404.html">404 PAGE</a></li>
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
                        <h2>PLAN AND PRICE</h2>
                        <ol class="breadcrumb">
                            <li><a href="/">HOME</a></li>
                            <li class="active">Plan and price</li>
                        </ol>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- End Proerty header  -->

    <div class="row">
        <div class="container">

        </div>
    </div>

    {{-- Plan and Price START --}}
    <section id="pricePlans">
        <ul id="plans">
            <li class="plan">
                <ul class="planContainer">
                    <li class="title"><h2>Free</h2></li>
                    <li class="price"><p>FREE</p></li>
                    <li>
                        <ul class="options">
                            <li>1x <span>Installation</span></li>
                            <li>Odoo <span>documentation</span></li>
                            <li>Unlimited <span>option 3</span></li>
                            <li>Unlimited <span>option 4</span></li>
                            <li>1x <span>option 5</span></li>
                        </ul>
                    </li>
                    <li class="button"><a href="#">ORDER NOW</a></li>
                </ul>
            </li>

            <li class="plan">
                <ul class="planContainer">
                    <li class="title"><h2 class="bestPlanTitle">Silver</h2></li>
                    <li class="price"><p class="bestPlanPrice">€28</p></li>
                    <li>
                        <ul class="options">
                            <li>2x <span>option 1</span></li>
                            <li>Free <span>option 2</span></li>
                            <li>Unlimited <span>option 3</span></li>
                            <li>Unlimited <span>option 4</span></li>
                            <li>2x <span>option 5</span></li>
                        </ul>
                    </li>
                    <li class="button"><a class="bestPlanButton" href="#">ORDER NOW</a></li>
                </ul>
            </li>

            <li class="plan">
                <ul class="planContainer">
                    <li class="title"><h2>Gold</h2></li>
                    <li class="price"><p>€46</p></li>
                    <li>
                        <ul class="options">
                            <li>2x <span>option 1</span></li>
                            <li>Free <span>option 2</span></li>
                            <li>Unlimited <span>option 3</span></li>
                            <li>Unlimited <span>option 4</span></li>
                            <li>3x <span>option 5</span></li>
                        </ul>
                    </li>
                    <li class="button"><a href="#">ORDER NOW</a></li>
                </ul>
            </li>

            <li class="plan">
                <ul class="planContainer">
                    <li class="title"><h2>Platinum</h2></li>
                    <li class="price"><p>€52</p></li>
                    <li>
                        <ul class="options">
                            <li>2x <span>option 1</span></li>
                            <li>Free <span>option 2</span></li>
                            <li>Unlimited <span>option 3</span></li>
                            <li>Unlimited <span>option 4</span></li>
                            <li>5x <span>option 5</span></li>
                        </ul>
                    </li>
                    <li class="button"><a href="#">ORDER NOW</a></li>
                </ul>
            </li>
        </ul> <!-- End ul#plans -->
    </section>
    {{-- Plan and Price END --}}

@endsection

@section('footer')

@endsection