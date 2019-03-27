<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Home Property | Home</title>

    <!-- Favicon -->
    <link rel="shortcut icon" href="img/favicon.ico" type="image/x-icon">

    {{--<link href="{{ asset('css/bootstrap.css') }}" rel="stylesheet">--}}
    {{--<link href="{{ asset('css/default-theme.css') }}" rel="stylesheet">--}}
    {{--<link href="{{ asset('css/font-awesome.css') }}" rel="stylesheet">--}}
    {{--<link href="{{ asset('css/jquery.fancybox.css') }}" rel="stylesheet">--}}
    {{--<link href="{{ asset('css/nouislider.css') }}" rel="stylesheet">--}}
    {{--<link href="{{ asset('css/slick.css') }}" rel="stylesheet">--}}
    {{--<link href="{{ asset('css/style.css') }}" rel="stylesheet">--}}
    <link href="{{ asset('css/libs.css') }}" rel="stylesheet">
    <link href="{{ asset('css/custom.css') }}" rel="stylesheet">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css" integrity="sha384-50oBUHEmvpQ+1lW4y57PTFmhCaXp0ML5d60M1M7uH2+nqUivzIebhndOJK28anvf" crossorigin="anonymous">


    <!-- Google Font -->
    <link href='https://fonts.googleapis.com/css?family=Vollkorn' rel='stylesheet' type='text/css'>
    <link href='https://fonts.googleapis.com/css?family=Open+Sans' rel='stylesheet' type='text/css'>


    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
    <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->

</head>
<body class="aa-price-range">
<!-- Pre Loader -->

<!-- SCROLL TOP BUTTON -->
<a class="scrollToTop" href="#"><i class="fa fa-angle-double-up"></i></a>
<!-- END SCROLL TOP BUTTON -->

<!-- Start header section -->
<header id="aa-header">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="aa-header-area">
                    <div class="row">
                        <div class="col-md-6 col-sm-6 col-xs-6">
                            <div class="aa-header-left">
                                <div class="aa-telephone-no">
                                    <span class="fa fa-phone"></span>
                                    1-900-523-3564
                                </div>
                                <div class="aa-email hidden-xs">
                                    <span class="fa fa-envelope-o"></span> info@markups.com
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6 col-sm-6 col-xs-6">
                            <div class="aa-header-right">
                                {{--<a href="register.html" class="aa-register">Register</a>--}}
                                {{--<a href="signin.html" class="aa-login">Login</a>--}}
                                @if (Route::has('login'))
                                    {{--<div class="top-right links">--}}
                                    @auth

                                        <a href="{{ url('/admin') }}" class="aa-login">Admin</a>

                                    @else
                                        <a href="{{ route('login') }}" class="aa-login">Login</a>
                                        <p class="white-pipe">|</p>
                                        @if (Route::has('register'))
                                            <a href="{{ route('register.index') }}" class="aa-register">Register</a>
                                        @endif
                                    @endauth
                                    {{--</div>--}}
                                @endif
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</header>
<!-- End header section -->

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
                <a class="navbar-brand aa-logo" href="index.html"> Restaurant <span>Property</span></a>
                <!-- Image based logo -->
                <!-- <a class="navbar-brand aa-logo-img" href="index.html"><img src="img/logo.png" alt="logo"></a> -->
            </div>
            <div id="navbar" class="navbar-collapse collapse">
                <ul id="top-menu" class="nav navbar-nav navbar-right aa-main-nav">
                    <li class="active"><a href="index.html">HOME</a></li>
                    <li class="dropdown">
                        <a class="dropdown-toggle" data-toggle="dropdown" href="properties.html">PROPERTIES <span class="caret"></span></a>
                        <ul class="dropdown-menu" role="menu">
                            <li><a href="properties.html">PROPERTIES</a></li>
                            <li><a href="properties-detail.html">PROPERTIES DETAIL</a></li>
                        </ul>
                    </li>
                    <li><a href="gallery.html">GALLERY</a></li>
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
                    <h2>Restaurant Details</h2>
                    <ol class="breadcrumb">
                        <li><a href="#">HOME</a></li>
                        <li class="active">Restaurant Details</li>
                    </ol>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- End Proerty header  -->

<!-- Start Blog  -->
<section id="aa-blog">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="aa-blog-area">
                    <div class="row">
                        <div class="col-md-8">
                            <div class="aa-blog-content">
                                <div class="row">
                                    <div class="col-md-12">
                                        <article class="aa-blog-single aa-blog-details">
                                            @if(Session::has('comment_message'))
                                                {{session('comment_message')}}
                                            @endif
                                            <figure class="aa-blog-img">
                                                <a href="#"><img alt="img" src="{{$restaurant->photo ? $restaurant->photo->file : $restaurant->photoPlaceholder()}}"></a>
                                                <span class="aa-date-tag">{{$restaurant->created_at->diffForHumans()}}</span>
                                            </figure>
                                            <div class="aa-blog-single-content">
                                                <h2>{{$restaurant->title}}</h2>
                                                <div class="aa-blog-single-bottom">
                                                    <a class="aa-blog-author" href="#"><i class="fa fa-user"></i> {{$restaurant->user->name}}</a>
                                                    <a class="aa-blog-comments" href="#"><i class="fas fa-comments"></i>6</a>
                                                </div>
                                                <p>{{$restaurant->body}}</p>
                                                <p>{{$restaurant->body}}</p>
                                                <blockquote>
                                                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Cupiditate explicabo consequuntur, impedit aut similique cum.</p>
                                                    <cite>- Mr. josep</cite>
                                                </blockquote>
                                                <h1>H1 Title</h1>
                                                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Officia inventore commodi labore. Doloremque voluptas ullam iusto nemo quisquam, saepe sit.</p>
                                                <h2>H2 Title</h2>
                                                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Officia inventore commodi labore. Doloremque voluptas ullam iusto nemo quisquam, saepe sit.</p>
                                                <h3>H3 Title</h3>
                                                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Officia inventore commodi labore. Doloremque voluptas ullam iusto nemo quisquam, saepe sit.</p>
                                                <h4>H4 Title</h4>
                                                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Inventore, provident.</p>

                                            </div>
                                        </article>
                                    </div>
                                    <!-- Post tags -->
                                    <div class="col-md-12">
                                        <div class="aa-blog-post-tag">
                                            <ul>
                                                <li>TAGES:</li>
                                                <li><a href="#">POPERTY,</a></li>
                                                <li><a href="#">LAND,</a></li>
                                                <li><a href="#">FLAT,</a></li>
                                                <li><a href="#">RENT,</a></li>
                                                <li><a href="#">SALE,</a></li>
                                                <li><a href="#">OFFICE</a></li>
                                            </ul>
                                        </div>
                                    </div>
                                    <!-- Social Share -->
                                    <div class="col-md-12">
                                        <div class="aa-properties-social">
                                            <ul>
                                                <li>Share</li>
                                                <li><a href="#"><i class="fab fa-facebook-square"></i></a></li>
                                                <li><a href="#"><i class="fab fa-twitter-square"></i></a></li>
                                                <li><a href="#"><i class="fab fa-google-plus-square"></i></a></li>
                                                <li><a href="#"><i class="fab fa-pinterest-square"></i></a></li>
                                            </ul>
                                        </div>
                                    </div>
                                    <!-- post navigation -->
                                    <div class="col-md-12">
                                        <div class="aa-blog-navigation">
                                            <div class="aa-blog-pagination-left">
                                                <a href="#" class="aa-prev">
                            <span class="fa fa-angle-double-left">
                            </span>
                                                    PREV
                                                </a>
                                            </div>
                                            <div class="aa-blog-pagination-right">
                                                <a href="#" class="aa-next">
                                                    NEXT
                                                    <span class="fa fa-angle-double-right">
                            </span>
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- Related Restaurant -->
                                    <div class="col-md-12">
                                        <div class="aa-blog-related-post">
                                            <div class="aa-title">
                                                <h2>Related Restaurant</h2>
                                                <span></span>
                                            </div>
                                            <div class="aa-blog-related-post-area">
                                                <div class="row">
                                                    <div class="col-md-6 col-sm-6">
                                                        <article class="aa-blog-single">
                                                            <figure class="aa-blog-img">
                                                                <a href="#"><img src="img/blog-img-1.jpg" alt="img"></a>
                                                                <span class="aa-date-tag">15 April, 16</span>
                                                            </figure>
                                                            <div class="aa-blog-single-content">
                                                                <h3><a href="#">Lorem ipsum dolor sit amet, consectetur.</a></h3>
                                                                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Optio est quaerat magnam exercitationem voluptas, voluptatem sed quam ab laborum voluptatum tempore dolores itaque, molestias vitae.</p>
                                                                <div class="aa-blog-single-bottom">
                                                                    <a href="#" class="aa-blog-author"><i class="fa fa-user"></i> Admin</a>
                                                                    <a href="#" class="aa-blog-comments"><i class="fa fa-comment-o"></i>6</a>
                                                                </div>
                                                            </div>
                                                        </article>
                                                    </div>
                                                    <div class="col-md-6 col-sm-6">
                                                        <article class="aa-blog-single">
                                                            <figure class="aa-blog-img">
                                                                <a href="#"><img src="img/blog-img-2.jpg" alt="img"></a>
                                                                <span class="aa-date-tag">15 April, 16</span>
                                                            </figure>
                                                            <div class="aa-blog-single-content">
                                                                <h3><a href="#">Lorem ipsum dolor sit amet, consectetur.</a></h3>
                                                                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Optio est quaerat magnam exercitationem voluptas, voluptatem sed quam ab laborum voluptatum tempore dolores itaque, molestias vitae.</p>
                                                                <div class="aa-blog-single-bottom">
                                                                    <a href="#" class="aa-blog-author"><i class="fa fa-user"></i> Admin</a>
                                                                    <a href="#" class="aa-blog-comments"><i class="fa fa-comment-o"></i>6</a>
                                                                </div>
                                                            </div>
                                                        </article>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    <!-- comments -->

                                    <div class="col-md-12">
                                        <div class="aa-comments-area">
                                            <h3>5 Comments</h3>
                                            <div class="comments">
                                                <ul class="commentlist">
                                                    @if(count($comments) > 0)
                                                        @foreach($comments as $comment)
                                                    <li>
                                                        <div class="media">
                                                            <div class="media-left">
                                                                <img alt="img" src="{{$comment->photo}}" class="media-object news-img">
                                                            </div>
                                                            <div class="media-body">
                                                                <h4 class="author-name">{{$comment->author}}</h4>
                                                                <span class="comments-date"> {{$comment->created_at->diffForHumans()}}</span>
                                                                <p>{{$comment->body}}</p>
                                                            </div>
                                                        </div>
                                                        <div class="comment-reply-container">
                                                            @if(Auth::check())
                                                            <button class="toggle-reply btn btn-secondary pull-right">Reply</button>

                                                            <div class="comment-reply" style="display: none; width: 90%;">
                                                            {!! Form::open(['method'=>'POST', 'action'=>'CommentRepliesController@createReply']) !!}
                                                            {{csrf_field()}}
                                                            <input type="hidden" name="comment_id" value="{{$comment->id}}">
                                                            <div class="form-group">
                                                                {!! Form::label('body', 'Body:') !!}
                                                                {!! Form::textarea('body', null, ['class'=>'form-control', 'rows'=>1]) !!}
                                                            </div>

                                                            {!! Form::submit('Create', ['class'=>'btn btn-secondary']) !!}
                                                            {!! Form::close() !!}
                                                            </div>
                                                            @else
                                                                <h4 class="required" style="display: none;">Login/Register to reply</h4>
                                                            @endif
                                                        </div>
                                                    </li>

                                                        @if(count($comment->replies) > 0)
                                                            @foreach($comment->replies as $reply)
                                                                @if($reply->is_active == 1)
                                                            {{--nested comments--}}
                                                            <ul class="children">
                                                                <li class="author-comments">
                                                                    <div class="media">
                                                                        <div class="media-left">
                                                                            <img alt="img" src="{{$reply->photo}}" class="media-object news-img">
                                                                        </div>
                                                                        <div class="media-body">
                                                                            <h4 class="author-name">{{$reply->author}}</h4>
                                                                            <span class="comments-date">{{$reply->created_at->diffForHumans()}}</span>
                                                                            <span class="author-tag">Author</span>
                                                                            <p>{{$reply->body}}</p>
                                                                        </div>
                                                                    </div>
                                                                </li>
                                                            </ul>
                                                                    @endif
                                                                @endforeach
                                                            @endif

                                                        @endforeach
                                                    @endif






                                                </ul>
                                                <!-- comments pagination -->
                                                <nav>
                                                    <ul class="pagination comments-pagination">
                                                        <li>
                                                            <a aria-label="Previous" href="#">
                                                                <span aria-hidden="true">«</span>
                                                            </a>
                                                        </li>
                                                        <li><a href="#">1</a></li>
                                                        <li><a href="#">2</a></li>
                                                        <li><a href="#">3</a></li>
                                                        <li><a href="#">4</a></li>
                                                        <li><a href="#">5</a></li>
                                                        <li>
                                                            <a aria-label="Next" href="#">
                                                                <span aria-hidden="true">»</span>
                                                            </a>
                                                        </li>
                                                    </ul>
                                                </nav>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- Respond box -->
                                    <div class="col-md-12">
                                        <div id="respond">
                                            @if(Auth::check())
                                            <h3 class="reply-title">Leave a Comment</h3>
                                            {!! Form::open(['method'=>'POST', 'action'=>'RestaurantCommentController@store']) !!}
                                            <input type="hidden" name="restaurant_id" value="{{$restaurant->id}}">
                                                <p class="comment-notes">
                                                    Lorem ipsum st dolor amet. <span class="required">*</span>
                                                </p>

                                                <p class="comment-form-comment">
                                                    <label for="body">Body:</label>
                                                    <textarea id="body" required="required" aria-required="true" rows="8" cols="45" name="body"></textarea>

                                                </p>

                                                <p class="form-submit">
                                                    <input type="submit" value="Post Comment" class="aa-browse-btn" name="submit">
                                                </p>
                                            {!! Form::close() !!}
                                                @else
                                                <h3 class="required">Login/Register to see form</h3>
                                            @endif

                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- Start blog sidebar -->
                        <div class="col-md-4">
                            <aside class="aa-blog-sidebar">
                                <!-- Start single sidebar -->
                                <div class="aa-blog-sidebar-single">
                                    <form action="">
                                        <div class="aa-blog-search">
                                            <input class="aa-search-text" type="text" placeholder="Search...">
                                            <button class="aa-search-submit" type="submit">
                                                <i class="fa fa-search"></i>
                                            </button>
                                        </div>
                                    </form>
                                </div>
                                <!-- Start single sidebar -->
                                <div class="aa-blog-sidebar-single">
                                    <h3>Categories</h3>
                                    <ul class="aa-blog-catg">
                                        <li>Properties <span>15000</span></li>
                                        <li>Apartment <span>5000</span></li>
                                        <li>Office  <span>3000</span></li>
                                        <li>Residential <span>4500</span></li>
                                        <li>Commercial <span>1000</span>
                                            <ul>
                                                <li>category 2.1 <span>50</span></li>
                                                <li>category 2.2 <span>100</span></li>
                                            </ul>
                                        </li>
                                        <li>Villa <span>800</span></li>
                                        <li>Bungalow  <span>200</span></li>
                                        <li>News <span>375</span></li>
                                        <li>Reviews <span>458</span></li>
                                    </ul>
                                </div>
                                <!-- Start single sidebar -->
                                <div class="aa-blog-sidebar-single">
                                    <h3>Tags</h3>
                                    <div class="tag-cloud">
                                        <a href="#">Apartment</a>
                                        <a href="#">Propery</a>
                                        <a href="#">Residential</a>
                                        <a href="#">Commercial</a>
                                        <a href="#">Office</a>
                                        <a href="#">Rent</a>
                                        <a href="#">Sale</a>
                                        <a href="#">Villa</a>
                                    </div>
                                </div>
                                <!-- Start single sidebar -->
                                <div class="aa-blog-sidebar-single">
                                    <h3>Recent Post</h3>
                                    <div class="aa-blog-recent-post">
                                        <div class="media">
                                            <div class="media-left">
                                                <a href="#">
                                                    <img alt="img" src="img/blog-img-3.jpg" class="media-object">
                                                </a>
                                            </div>
                                            <div class="media-body">
                                                <h4 class="media-heading"><a href="#">This is Title</a></h4>
                                                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit.</p>
                                                <span>15 April, 16</span>
                                            </div>
                                        </div>
                                        <div class="media">
                                            <div class="media-left">
                                                <a href="#">
                                                    <img alt="img" src="img/blog-img-2.jpg" class="media-object">
                                                </a>
                                            </div>
                                            <div class="media-body">
                                                <h4 class="media-heading"><a href="#">This is Title</a></h4>
                                                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit.</p>
                                                <span>15 April, 16</span>
                                            </div>
                                        </div>
                                        <div class="media">
                                            <div class="media-left">
                                                <a href="#">
                                                    <img alt="img" src="img/blog-img-1.jpg" class="media-object">
                                                </a>
                                            </div>
                                            <div class="media-body">
                                                <h4 class="media-heading"><a href="#">This is Title</a></h4>
                                                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit.</p>
                                                <span>15 April, 16</span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!-- Start single sidebar -->
                                <div class="aa-blog-sidebar-single">
                                    <div class="aa-banner-ads">
                                        <a href="#">
                                            <img src="img/banner-ads.jpg" alt="banner img">
                                        </a>
                                    </div>
                                </div>
                            </aside>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- / Blog  -->


<!-- Footer -->
<footer id="aa-footer">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="aa-footer-area">
                    <div class="row">
                        <div class="col-md-3 col-sm-6 col-xs-12">
                            <div class="aa-footer-left">
                                <p>Designed by <a rel="nofollow" href="#">Swisswebprofi</a></p>
                            </div>
                        </div>
                        <div class="col-md-3 col-sm-6 col-xs-12">
                            <div class="aa-footer-middle">
                                <a href="#"><i class="fa fa-facebook"></i></a>
                                <a href="#"><i class="fa fa-twitter"></i></a>
                                <a href="#"><i class="fa fa-google-plus"></i></a>
                                <a href="#"><i class="fa fa-youtube"></i></a>
                            </div>
                        </div>
                        <div class="col-md-6 col-sm-12 col-xs-12">
                            <div class="aa-footer-right">
                                <a href="#">Home</a>
                                <a href="#">Support</a>
                                <a href="#">License</a>
                                <a href="#">FAQ</a>
                                <a href="#">Privacy & Term</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</footer>
<!-- / Footer -->



<!-- jQuery library -->
<!--<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script> -->
{{--<script src="{{ asset('js/bootstrap.js') }}"></script>--}}
{{--<script src="{{ asset('js/custom.js') }}"></script>--}}
{{--<script src="{{ asset('js/jquery.fancybox.pack.js') }}"></script>--}}
<script src="{{ asset('js/jquery.min.js') }}"></script>
{{--<script src="{{ asset('js/jquery.mixitup.js') }}"></script>--}}
{{--<script src="{{ asset('js/nouislider.js') }}"></script>--}}
{{--<script src="{{ asset('js/slick.js') }}"></script>--}}
<script src="{{ asset('js/libs.js') }}"></script>
<script>
    $(".comment-reply-container .toggle-reply").click(function() {
        $(this).next().slideToggle("slow");
    });
</script>

</body>
</html>