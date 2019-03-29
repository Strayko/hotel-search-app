@extends('layouts.frontend')
<title>Restaurant</title>
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
                            <li><a href="/">HOME</a></li>
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
                                                        <i class="fa fa-user"></i> {{$restaurant->user->name}}
                                                        <i class="fas fa-comments"></i> {{$restaurant->comments->count()}}
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
                                                        <span class="fa fa-angle-double-left"></span>
                                                        PREV
                                                    </a>
                                                </div>
                                                <div class="aa-blog-pagination-right">
                                                    <a href="#" class="aa-next">
                                                        NEXT
                                                        <span class="fa fa-angle-double-right"></span>
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
                                                        @if($relateds)
                                                            @foreach($relateds as $related)
                                                        <div class="col-md-6 col-sm-6">
                                                            <article class="aa-blog-single">
                                                                <figure class="aa-blog-img">
                                                                    <a href="{{route('single_restaurant.restaurant', $related->slug)}}"><img src="{{$related->photo ? $related->photo->file : $related->photoHome()}}" alt="img"></a>
                                                                    <span class="aa-date-tag">{{$related->created_at->diffForHumans()}}</span>
                                                                </figure>
                                                                <div class="aa-blog-single-content">
                                                                    <h3><a href="{{route('single_restaurant.restaurant', $related->slug)}}">{{$related->title}}</a></h3>
                                                                    <p>{{Str::limit($related->body, 120)}}</p>
                                                                    <div class="aa-blog-single-bottom">
                                                                        <i class="fa fa-user"></i> {{$related->user->name}}
                                                                        <i class="fas fa-comments"></i> {{$related->comments->count()}}
                                                                    </div>
                                                                </div>
                                                            </article>
                                                        </div>
                                                            @endforeach
                                                        @endif

                                                    </div>
                                                </div>
                                            </div>
                                        </div>

                                        <!-- comments -->

                                        <div class="col-md-12">
                                            <div class="aa-comments-area">
                                                @if(count($comments) > 0)
                                                <h3>{{$comments->count()}} Comments</h3>
                                                @else
                                                <h3>No Comments</h3>
                                                @endif
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

                                                                            {{--<span class="author-tag">Author</span>--}}

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

@endsection

@section('footer')

@endsection