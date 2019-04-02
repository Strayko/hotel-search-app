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
                        <li><a href="{{route('show_all.showAll')}}">SHOW ALL</a></li>
                        <li><a href="{{route('contact.contact')}}">CONTACT</a></li>
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
                            <li>30 <span>Show</span></li>
                            <li>Publishing <span>Admin Moderation</span></li>
                            <li>Period <span>30 days</span></li>
                            <li><i class="fas fa-check text-success"></i> <span>Main Image</span></li>
                            <li><i class="fas fa-check text-success"></i> <span>Contact Information</span></li>
                            <li><i class="fas fa-check text-success"></i> <span>Description</span></li>

                        </ul>
                    </li>
                    <li class="button"><a href="{{route('register.index')}}">REGISTER</a></li>
                </ul>
            </li>

            <li class="plan">
                <ul class="planContainer">
                    <li class="title"><h2>Silver</h2></li>
                    <li class="price"><p>€28</p></li>
                    <li>
                        <ul class="options">
                            <li>30 <span>Show</span></li>
                            <li>Publishing <span>Admin Moderation</span></li>
                            <li>Period <span>365 days</span></li>
                            <li><i class="fas fa-check text-success"></i> <span>Main Image</span></li>
                            <li><i class="fas fa-check text-success"></i> <span>Contact Information</span></li>
                            <li><i class="fas fa-check text-success"></i> <span>Description</span></li>
                            <li><i class="fas fa-check text-success"></i> <span>Social Media Links</span></li>
                            <li><i class="fas fa-check text-success"></i> <span>Opening Hours</span></li>
                            <li><i class="fas fa-check text-success"></i> <span>Upload PDF (like Menu)</span></li>

                        </ul>
                    </li>
                    <li class="button"><a href="{{route('register.index')}}">REGISTER</a></li>
                </ul>
            </li>

            <li class="plan">
                <ul class="planContainer">
                    <li class="title"><h2 class="bestPlanTitle">Gold</h2></li>
                    <li class="price"><p class="bestPlanPrice">€46</p></li>
                    <li>
                        <ul class="options">
                            <li>100 <span>Show</span></li>
                            <li>Publishing <span>Admin Moderation</span></li>
                            <li>Period <span>365 days</span></li>
                            <li><i class="fas fa-check text-success"></i> <span>Main Image</span></li>
                            <li><i class="fas fa-check text-success"></i> <span>Contact Information</span></li>
                            <li><i class="fas fa-check text-success"></i> <span>Description</span></li>
                            <li><i class="fas fa-check text-success"></i> <span>Social Media Links</span></li>
                            <li><i class="fas fa-check text-success"></i> <span>Opening Hours</span></li>
                            <li><i class="fas fa-check text-success"></i> <span>Upload PDF (like Menu)</span></li>
                            <li><i class="fas fa-check text-success"></i> <span>Picture Gallery</span></li>
                            <li><i class="fas fa-check text-success"></i> <span>Map</span></li>
                            <li><i class="fas fa-check text-success"></i> <span>Video</span></li>
                            <li><i class="fas fa-check text-success"></i> <span>Rating System With Comments</span></li>
                            <li><i class="fas fa-check text-success"></i> <span>(1x Advertising In The <br>Newsletter Per Year)</span></li>
                            <li><i class="fas fa-check text-success"></i> <span>(Reservation Possible Over ausgang.bayern)</span></li>
                            <li><i class="fas fa-check text-success"></i> <span>(Photo Upload By Customer <br>Of The Partner Company <br>"With Own Login")</span></li>
                            <li><i class="fas fa-check text-success"></i> <span>(Info About Current <br>Opening Status)</span></li>

                        </ul>
                    </li>
                    <li class="button"><a class="bestPlanButton" href="{{route('register.index')}}">REGISTER</a></li>
                </ul>
            </li>

            <li class="plan">
                <ul class="planContainer">
                    <li class="title"><h2>Platinum</h2></li>
                    <li class="price"><p>€52</p></li>
                    <li>
                        <ul class="options">
                            <li>100 <span>Show</span></li>
                            <li>Publishing <span>Admin Moderation</span></li>
                            <li>Period <span>365 days</span></li>
                            <li><i class="fas fa-check text-success"></i> <span>Main Image</span></li>
                            <li><i class="fas fa-check text-success"></i> <span>Contact Information</span></li>
                            <li><i class="fas fa-check text-success"></i> <span>Description</span></li>
                            <li><i class="fas fa-check text-success"></i> <span>Social Media Links</span></li>
                            <li><i class="fas fa-check text-success"></i> <span>Opening Hours</span></li>
                            <li><i class="fas fa-check text-success"></i> <span>Upload PDF (like Menu)</span></li>
                            <li><i class="fas fa-check text-success"></i> <span>Picture Gallery</span></li>
                            <li><i class="fas fa-check text-success"></i> <span>Map</span></li>
                            <li><i class="fas fa-check text-success"></i> <span>Video</span></li>
                            <li><i class="fas fa-check text-success"></i> <span>Rating System With Comments</span></li>
                            <li><i class="fas fa-check text-success"></i> <span>(1x Advertising In The <br>Newsletter Per Year)</span></li>
                            <li><i class="fas fa-check text-success"></i> <span>(Reservation Possible Over ausgang.bayern)</span></li>
                            <li><i class="fas fa-check text-success"></i> <span>(Photo Upload By Customer <br>Of The Partner Company <br>"With Own Login")</span></li>
                            <li><i class="fas fa-check text-success"></i> <span>(Info About Current <br>Opening Status)</span></li>
                            <li><i class="fas fa-check text-success"></i> <span>(So top contribution <br>on home page)</span></li>
                            <li><i class="fas fa-check text-success"></i> <span>Competition System</span></li>
                            <li><i class="fas fa-check text-success"></i> <span>Deal Actions</span></li>
                        </ul>
                    </li>
                    <li class="button"><a href="{{route('register.index')}}">REGISTER</a></li>
                </ul>
            </li>
        </ul> <!-- End ul#plans -->
    </section>
    {{-- Plan and Price END --}}

@endsection

@section('footer')

@endsection