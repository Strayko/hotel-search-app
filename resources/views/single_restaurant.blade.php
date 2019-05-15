@extends('layouts.frontend')
<title>Restaurant</title>
<style>
    #aa-property-header {
        background-image: url("{{asset('images/header11.jpg')}}")!important;
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
                        <li><a href="{{route('locations.locations')}}">LOCATIONS</a></li>
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
                                                    <div class="alert alert-success">
                                                        {{session('comment_message')}}
                                                    </div>
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
                                                    @if(!empty($restaurant->documents->document))
                                                        <a href="{{ asset('documents/' . $restaurant->documents->document) }}" target="_blank"><h2 style="display: inline-block;"><i class="fas fa-file-pdf"></i></h2></a>
                                                        @else
                                                        <p>You dont have pdf</p>
                                                        @endif


                                                    {{--<h3><i class="fas fa-file-pdf"></i></h3>{{ link_to_asset('documents/' . $restaurant->documents->document, 'Open the pdf!') }}--}}
                                                    {{--<blockquote>--}}
                                                        {{--<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Cupiditate explicabo consequuntur, impedit aut similique cum.</p>--}}
                                                        {{--<cite>- Mr. josep</cite>--}}
                                                    {{--</blockquote>--}}
                                                    @if($event)
                                                    <h1>{{$event->title}}</h1>
                                                    <img width="400" alt="img" src="{{$event->photo ? $restaurant->photo->file : $restaurant->photoPlaceholder()}}">
                                                    <p style="margin-top: 20px;">{{$event->body}}</p>
                                                    @endif
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
                                                                    <a href="{{route('single_restaurant.restaurant', $related->slug)}}"><img width="360" height="199" src="{{$related->photo ? $related->photo->file : $related->photoHome()}}" alt="img"></a>
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
                                                <h3>{{$commentss->count()}} Comments</h3>
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
                                                            <div class="row">
                                                                <div class="text-center">
                                                                    {{$comments->onEachSide(1)->links()}}
                                                                </div>
                                                            </div>
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

                                    <!-- Start single sidebar -->
                                    <div class="aa-blog-sidebar-single">
                                        <h3>Cities</h3>
                                        <ul class="aa-blog-catg">
                                            @if($locations)
                                                @foreach($locations as $location)
                                                    <li><a href="{{route('single_location.locationCategory', $location->id)}}">{{$location->name}}</a></li>
                                                @endforeach
                                            @endif
                                        </ul>
                                    </div>
                                    <!-- Start single sidebar -->
                                    <div class="aa-blog-sidebar-single">
                                        <h3>Type of food</h3>
                                        <div class="tag-cloud">
                                            @if($foods)
                                                @foreach($foods as $food)
                                                    <a href="#">{{$food->name}}</a>
                                                @endforeach
                                            @endif
                                        </div>
                                    </div>
                                    <!-- Start single sidebar -->
                                    <div class="aa-blog-sidebar-single">
                                        <h3>Recent Restaurant</h3>
                                        <div class="aa-blog-recent-post">
                                            @if($restaurantRecents)
                                                @foreach($restaurantRecents as $restaurantRecent)
                                                    <div class="media">
                                                        <div class="media-left">
                                                            <a href="{{route('single_restaurant.restaurant', $restaurantRecent->slug)}}">
                                                                <img alt="img" src="{{$restaurantRecent->photo ? $restaurantRecent->photo->file : $restaurantRecent->singleRestaurant()}}" class="media-object">
                                                            </a>
                                                        </div>
                                                        <div class="media-body">
                                                            <h4 class="media-heading"><a href="{{route('single_restaurant.restaurant', $restaurantRecent->slug)}}">{{$restaurantRecent->title}}</a></h4>
                                                            <p>{{Str::limit($restaurantRecent->body, 80)}}</p>
                                                            <span>{{$restaurantRecent->created_at->diffForHumans()}}</span>
                                                        </div>
                                                    </div>
                                                @endforeach
                                            @endif


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