@extends('layouts.frontend')
<title>Contact</title>
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
                        <li class="active"><a href="{{route('contact.contact')}}">CONTACT</a></li>
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
                        <h2>CONTACT</h2>
                        <ol class="breadcrumb">
                            <li><a href="/">HOME</a></li>
                            <li class="active">Contact</li>
                        </ol>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- End Proerty header  -->



    <section id="aa-contact">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="aa-contact-area">

                        <div class="aa-contact-bottom">
                            <div class="aa-title">
                                <h2>Send Your Message</h2>
                                <span></span>
                                <p>Your email address will not be published. Required fields are marked <strong class="required">*</strong></p>
                            </div>
                            <div class="aa-contact-form">
                                <form class="contactform">
                                    <p class="comment-form-author">
                                        <label for="author">Name <span class="required">*</span></label>
                                        <input type="text" name="author" value="" size="30" required="required">
                                    </p>
                                    <p class="comment-form-email">
                                        <label for="email">Email <span class="required">*</span></label>
                                        <input type="email" name="email" value="" aria-required="true" required="required">
                                    </p>
                                    <p class="comment-form-url">
                                        <label for="subject">Subject</label>
                                        <input type="text" name="subject">
                                    </p>
                                    <p class="comment-form-comment">
                                        <label for="comment">Message</label>
                                        <textarea name="comment" cols="45" rows="8" aria-required="true" required="required"></textarea>
                                    </p>
                                    <p class="form-submit">
                                        <input type="submit" name="submit" class="aa-browse-btn" value="Send Message">
                                    </p>
                                </form>
                            </div>
                        </div>

                        <div class="aa-contact-top" style="margin-top: 6rem;">
                            <div class="aa-contact-top-left">
                                <iframe width="100%" height="450" frameborder="0" allowfullscreen="" style="border:0" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d6851.201919469417!2d-86.11773906635584!3d33.47324776828677!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x888bdb60cc49c571%3A0x40451ca6baf275c7!2s36008+AL-77%2C+Talladega%2C+AL+35160%2C+USA!5e0!3m2!1sbn!2sbd!4v1460452919256"></iframe>
                            </div>
                            <div class="aa-contact-top-right">
                                <h2>Contact</h2>
                                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Beatae placeat aspernatur aperiam, quisquam voluptas enim tempore ab itaque nam modi eos corrupti distinctio nobis labore dolorum quae tenetur. Sapiente, sequi.</p>
                                <ul class="contact-info-list">
                                    <li> <i class="fa fa-phone"></i> 1-700-564-6321</li>
                                    <li> <i class="fa fa-envelope"></i> info@homeproperty.com</li>
                                    <li> <i class="fa fa-map-marker"></i> 36008 AL-77, Talladega, AL 35160, USA</li>
                                </ul>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </section>

@endsection

@section('footer')

@endsection