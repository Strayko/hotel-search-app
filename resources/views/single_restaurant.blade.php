{{--@extends('layouts.frontend')--}}
{{--<title>Restaurant</title>--}}
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
{{--                        <h2>Restaurant Details</h2>--}}
{{--                        <ol class="breadcrumb">--}}
{{--                            <li><a href="/">HOME</a></li>--}}
{{--                            <li class="active">Restaurant Details</li>--}}
{{--                        </ol>--}}
{{--                    </div>--}}
{{--                </div>--}}
{{--            </div>--}}
{{--        </div>--}}
{{--    </section>--}}
{{--    <!-- End Proerty header  -->--}}

{{--    <!-- Start Blog  -->--}}
{{--    <section id="aa-blog">--}}
{{--        <div class="container">--}}
{{--            <div class="row">--}}
{{--                <div class="col-md-12">--}}
{{--                    <div class="aa-blog-area">--}}
{{--                        <div class="row">--}}
{{--                            <div class="col-md-8">--}}
{{--                                <div class="aa-blog-content">--}}
{{--                                    <div class="row">--}}
{{--                                        <div class="col-md-12">--}}
{{--                                            <article class="aa-blog-single aa-blog-details">--}}

{{--                                                    @if(Session::has('comment_message'))--}}
{{--                                                    <div class="alert alert-success">--}}
{{--                                                        {{session('comment_message')}}--}}
{{--                                                    </div>--}}
{{--                                                    @endif--}}
{{--                                                    @if(Session::has('online_booking'))--}}
{{--                                                        <div class="alert alert-success">--}}
{{--                                                            {{session('online_booking')}}--}}
{{--                                                        </div>--}}
{{--                                                    @endif--}}

{{--                                                <figure class="aa-blog-img">--}}
{{--                                                    <a href="#"><img alt="img" src="{{$restaurant->photo ? $restaurant->photo->file : $restaurant->photoPlaceholder()}}"></a>--}}
{{--                                                    <span class="aa-date-tag">{{$restaurant->created_at->diffForHumans()}}</span>--}}
{{--                                                </figure>--}}
{{--                                                <div class="aa-blog-single-content">--}}
{{--                                                    <h2>{{$restaurant->title}}</h2>--}}
{{--                                                    <h4 style="float: right;">--}}
{{--                                                        @if($time > $restaurant->contact->opening && $time < $restaurant->contact->closing)--}}
{{--                                                            OPEN--}}
{{--                                                            @else--}}
{{--                                                            CLOSED--}}
{{--                                                        @endif--}}
{{--                                                    </h4>--}}
{{--                                                    <div class="hidden">...</div>--}}
{{--                                                    <p style="float: right; clear: both;">Open: {{$restaurant->contact->opening}}</p>--}}
{{--                                                    <p style="float: right; clear: both;">Closed: {{$restaurant->contact->closing}}</p>--}}
{{--                                                    <div class="aa-blog-single-bottom">--}}
{{--                                                        <i class="fa fa-user"></i> {{$restaurant->user->name}}--}}
{{--                                                        <i class="fas fa-comments"></i> {{$restaurant->comments->count()}}--}}
{{--                                                    </div>--}}
{{--                                                    <p>{{$restaurant->body}}</p>--}}
{{--                                                    @if(!empty($restaurant->documents->document))--}}
{{--                                                        <a href="{{ asset('documents/' . $restaurant->documents->document) }}" target="_blank"><h2 style="display: inline-block;"><i class="fas fa-file-pdf"></i></h2></a>--}}
{{--                                                        @else--}}
{{--                                                        <p>You dont have pdf</p>--}}
{{--                                                        @endif--}}


{{--                                                    <h3><i class="fas fa-file-pdf"></i></h3>{{ link_to_asset('documents/' . $restaurant->documents->document, 'Open the pdf!') }}--}}
{{--                                                    <blockquote>--}}
{{--                                                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Cupiditate explicabo consequuntur, impedit aut similique cum.</p>--}}
{{--                                                        <cite>- Mr. josep</cite>--}}
{{--                                                    </blockquote>--}}
{{--                                                    @if($event)--}}
{{--                                                    <h1>{{$event->title}}</h1>--}}
{{--                                                    <img width="400" alt="img" src="{{$event->photo ? $restaurant->photo->file : $restaurant->photoPlaceholder()}}">--}}
{{--                                                    <p style="margin-top: 20px;">{{$event->body}}</p>--}}
{{--                                                    @endif--}}


{{--                                                    @foreach($gallerys as $gallery)--}}
{{--                                                            <img src="{{URL::asset('/gallery/' . $gallery->photo)}}" alt="profile Pic" height="200" width="200">--}}
{{--                                                    @endforeach--}}

{{--                                                    @if($actions)--}}
{{--                                                        <h2>{{$actions->title}}</h2>--}}
{{--                                                        <p>{{$actions->body}}</p>--}}
{{--                                                        <h3>{{$actions->benefits}}</h3>--}}
{{--                                                    @endif--}}


{{--                                                </div>--}}
{{--                                            </article>--}}
{{--                                        </div>--}}


{{--                                        <div class="col-md-12">--}}
{{--                                        <div class="comment-reply-container">--}}
{{--                                                <button class="toggle-reply btn btn-secondary" style="margin-bottom: 10px;">Online Booking</button>--}}

{{--                                                <div class="comment-reply" style="display: none; width: 100%;">--}}
{{--                                                    {!! Form::open(['method'=>'POST', 'action'=>'AuthorRestaurantController@store']) !!}--}}
{{--                                                    {{csrf_field()}}--}}
{{--                                                    <input type="hidden" name="user_id" value="{{$restaurant->user->id}}">--}}
{{--                                                    <input type="hidden" name="restaurant_title" value="{{$restaurant->title}}">--}}
{{--                                                    <h3>Book a table:</h3>--}}

{{--                                                    <div class="form-group">--}}
{{--                                                        {!! Form::label('date', 'Date:', ['class'=>'col-2 col-form-label']) !!}--}}
{{--                                                        <div class="col-10">--}}
{{--                                                            {!! Form::date('date', null, ['class'=>'form-control', 'style'=>'line-height: 20px;']) !!}--}}
{{--                                                        </div>--}}
{{--                                                    </div>--}}
{{--                                                    <div class="form-group">--}}
{{--                                                        {!! Form::label('time', 'Time:', ['class'=>'col-2 col-form-label']) !!}--}}
{{--                                                        <div class="col-10">--}}
{{--                                                            {!! Form::time('time', null, ['class'=>'form-control', 'style'=>'line-height: 20px;']) !!}--}}
{{--                                                        </div>--}}
{{--                                                    </div>--}}
{{--                                                    {!! Form::label('party', 'Party:') !!}--}}
{{--                                                    <select class="form-control" name="party">--}}
{{--                                                        <option>1</option>--}}
{{--                                                        <option>2</option>--}}
{{--                                                        <option>3</option>--}}
{{--                                                        <option>4</option>--}}
{{--                                                        <option>5</option>--}}
{{--                                                        <option>6</option>--}}
{{--                                                        <option>7</option>--}}
{{--                                                        <option>8</option>--}}
{{--                                                        <option>9</option>--}}
{{--                                                        <option>10</option>--}}
{{--                                                    </select>--}}
{{--                                                    <h3>Contact Details:</h3>--}}
{{--                                                    <div class="form-group">--}}
{{--                                                        {!! Form::label('name', 'Name:') !!}--}}
{{--                                                        {!! Form::text('name', null, ['class'=>'form-control']) !!}--}}
{{--                                                    </div>--}}
{{--                                                    <div class="form-group">--}}
{{--                                                        {!! Form::label('email', 'Email:') !!}--}}
{{--                                                        {!! Form::email('email', null, ['class'=>'form-control']) !!}--}}
{{--                                                    </div>--}}
{{--                                                    <div class="form-group">--}}
{{--                                                        {!! Form::label('phone', 'Phone:') !!}--}}
{{--                                                        {!! Form::text('phone', null, ['class'=>'form-control']) !!}--}}
{{--                                                    </div>--}}
{{--                                                    <div class="form-group">--}}
{{--                                                        {!! Form::label('body', 'Description:') !!}--}}
{{--                                                        {!! Form::textarea('body', null, ['class'=>'form-control', 'rows'=>3, 'placeholder'=>'Optional']) !!}--}}
{{--                                                    </div>--}}

{{--                                                    {!! Form::submit('Send Reservation', ['class'=>'btn btn-secondary pull-right', 'style'=>'margin-top: 20px;']) !!}--}}
{{--                                                    {!! Form::close() !!}--}}
{{--                                                    </div>--}}

{{--                                                </div>--}}

{{--                                        </div>--}}



{{--                                        <!-- Post tags -->--}}
{{--                                        <div class="col-md-12">--}}
{{--                                            <div class="aa-blog-post-tag">--}}
{{--                                                <ul>--}}
{{--                                                    <li>TAGES:</li>--}}
{{--                                                    <li><a href="#">POPERTY,</a></li>--}}
{{--                                                    <li><a href="#">LAND,</a></li>--}}
{{--                                                    <li><a href="#">FLAT,</a></li>--}}
{{--                                                    <li><a href="#">RENT,</a></li>--}}
{{--                                                    <li><a href="#">SALE,</a></li>--}}
{{--                                                    <li><a href="#">OFFICE</a></li>--}}
{{--                                                </ul>--}}
{{--                                            </div>--}}
{{--                                        </div>--}}
{{--                                        <!-- Social Share -->--}}
{{--                                        <div class="col-md-12">--}}
{{--                                            <div class="aa-properties-social">--}}
{{--                                                <ul>--}}

{{--                                                    <li></li>--}}
{{--                                                    @if($restaurant->social->facebook)--}}
{{--                                                    <li><a href="{{$restaurant->social->facebook}}"><i class="fab fa-facebook"></i></a></li>--}}
{{--                                                    @endif--}}
{{--                                                    @if($restaurant->social->twitter)--}}
{{--                                                    <li><a href="{{$restaurant->social->twitter}}"><i class="fab fa-twitter"></i></a></li>--}}
{{--                                                    @endif--}}
{{--                                                    @if($restaurant->social->instagram)--}}
{{--                                                    <li><a href="{{$restaurant->social->instagram}}"><i class="fab fa-instagram"></i></a></li>--}}
{{--                                                    @endif--}}
{{--                                                    @if($restaurant->social->google)--}}
{{--                                                    <li><a href="{{$restaurant->social->google}}"><i class="fab fa-google-plus"></i></a></li>--}}
{{--                                                    @endif--}}

{{--                                                </ul>--}}
{{--                                            </div>--}}
{{--                                        </div>--}}
{{--                                        <!-- post navigation -->--}}
{{--                                        <div class="col-md-12">--}}
{{--                                            <div class="aa-blog-navigation">--}}
{{--                                                <div class="aa-blog-pagination-left">--}}
{{--                                                    <a href="#" class="aa-prev">--}}
{{--                                                        <span class="fa fa-angle-double-left"></span>--}}
{{--                                                        PREV--}}
{{--                                                    </a>--}}
{{--                                                </div>--}}
{{--                                                <div class="aa-blog-pagination-right">--}}
{{--                                                    <a href="#" class="aa-next">--}}
{{--                                                        NEXT--}}
{{--                                                        <span class="fa fa-angle-double-right"></span>--}}
{{--                                                    </a>--}}
{{--                                                </div>--}}
{{--                                            </div>--}}
{{--                                        </div>--}}
{{--                                        <!-- Related Restaurant -->--}}
{{--                                        <div class="col-md-12">--}}
{{--                                            <div class="aa-blog-related-post">--}}
{{--                                                <div class="aa-title">--}}
{{--                                                    <h2>Related Restaurant</h2>--}}
{{--                                                    <span></span>--}}
{{--                                                </div>--}}
{{--                                                <div class="aa-blog-related-post-area">--}}
{{--                                                    <div class="row">--}}
{{--                                                        @if($relateds)--}}
{{--                                                            @foreach($relateds as $related)--}}
{{--                                                        <div class="col-md-6 col-sm-6">--}}
{{--                                                            <article class="aa-blog-single">--}}
{{--                                                                <figure class="aa-blog-img">--}}
{{--                                                                    <a href="{{route('single_restaurant.restaurant', $related->slug)}}"><img width="360" height="199" src="{{$related->photo ? $related->photo->file : $related->photoHome()}}" alt="img"></a>--}}
{{--                                                                    <span class="aa-date-tag">{{$related->created_at->diffForHumans()}}</span>--}}
{{--                                                                </figure>--}}
{{--                                                                <div class="aa-blog-single-content">--}}
{{--                                                                    <h3><a href="{{route('single_restaurant.restaurant', $related->slug)}}">{{$related->title}}</a></h3>--}}
{{--                                                                    <p>{{Str::limit($related->body, 120)}}</p>--}}
{{--                                                                    <div class="aa-blog-single-bottom">--}}
{{--                                                                        <i class="fa fa-user"></i> {{$related->user->name}}--}}
{{--                                                                        <i class="fas fa-comments"></i> {{$related->comments->count()}}--}}
{{--                                                                    </div>--}}
{{--                                                                </div>--}}
{{--                                                            </article>--}}
{{--                                                        </div>--}}
{{--                                                            @endforeach--}}
{{--                                                        @endif--}}

{{--                                                    </div>--}}
{{--                                                </div>--}}
{{--                                            </div>--}}
{{--                                        </div>--}}

{{--                                        <!-- comments -->--}}

{{--                                        <div class="col-md-12">--}}
{{--                                            <div class="aa-comments-area">--}}
{{--                                                @if(count($comments) > 0)--}}
{{--                                                <h3>{{$commentss->count()}} Comments</h3>--}}
{{--                                                @else--}}
{{--                                                <h3>No Comments</h3>--}}
{{--                                                @endif--}}
{{--                                                <div class="comments">--}}
{{--                                                    <ul class="commentlist">--}}
{{--                                                        @if(count($comments) > 0)--}}
{{--                                                            @foreach($comments as $comment)--}}
{{--                                                                <li>--}}
{{--                                                                    <div class="media">--}}
{{--                                                                        <div class="media-left">--}}
{{--                                                                            <img alt="img" src="{{$comment->photo}}" class="media-object news-img">--}}
{{--                                                                        </div>--}}
{{--                                                                        <div class="media-body">--}}
{{--                                                                            <h4 class="author-name">{{$comment->author}}</h4>--}}
{{--                                                                            <span class="comments-date"> {{$comment->created_at->diffForHumans()}}</span>--}}

{{--                                                                            <span class="author-tag">Author</span>--}}

{{--                                                                            <p>{{$comment->body}}</p>--}}
{{--                                                                        </div>--}}
{{--                                                                    </div>--}}
{{--                                                                    <div class="comment-reply-container">--}}
{{--                                                                        @if(Auth::check())--}}
{{--                                                                            <button class="toggle-reply btn btn-secondary pull-right">Reply</button>--}}

{{--                                                                            <div class="comment-reply" style="display: none; width: 90%;">--}}
{{--                                                                                {!! Form::open(['method'=>'POST', 'action'=>'CommentRepliesController@createReply']) !!}--}}
{{--                                                                                {{csrf_field()}}--}}
{{--                                                                                <input type="hidden" name="comment_id" value="{{$comment->id}}">--}}
{{--                                                                                <div class="form-group">--}}
{{--                                                                                    {!! Form::label('body', 'Body:') !!}--}}
{{--                                                                                    {!! Form::textarea('body', null, ['class'=>'form-control', 'rows'=>1]) !!}--}}
{{--                                                                                </div>--}}

{{--                                                                                {!! Form::submit('Create', ['class'=>'btn btn-secondary']) !!}--}}
{{--                                                                                {!! Form::close() !!}--}}
{{--                                                                            </div>--}}
{{--                                                                        @else--}}
{{--                                                                            <h4 class="required" style="display: none;">Login/Register to reply</h4>--}}
{{--                                                                        @endif--}}
{{--                                                                    </div>--}}
{{--                                                                </li>--}}

{{--                                                                @if(count($comment->replies) > 0)--}}
{{--                                                                    @foreach($comment->replies as $reply)--}}
{{--                                                                        @if($reply->is_active == 1)--}}
{{--                                                                            nested comments--}}
{{--                                                                            <ul class="children">--}}
{{--                                                                                <li class="author-comments">--}}
{{--                                                                                    <div class="media">--}}
{{--                                                                                        <div class="media-left">--}}
{{--                                                                                            <img alt="img" src="{{$reply->photo}}" class="media-object news-img">--}}
{{--                                                                                        </div>--}}
{{--                                                                                        <div class="media-body">--}}
{{--                                                                                            <h4 class="author-name">{{$reply->author}}</h4>--}}
{{--                                                                                            <span class="comments-date">{{$reply->created_at->diffForHumans()}}</span>--}}

{{--                                                                                            <p>{{$reply->body}}</p>--}}
{{--                                                                                        </div>--}}
{{--                                                                                    </div>--}}
{{--                                                                                </li>--}}
{{--                                                                            </ul>--}}
{{--                                                                        @endif--}}
{{--                                                                    @endforeach--}}
{{--                                                                @endif--}}

{{--                                                            @endforeach--}}
{{--                                                        @endif--}}


{{--                                                    </ul>--}}


{{--                                                    <!-- comments pagination -->--}}
{{--                                                    <nav>--}}
{{--                                                        <ul class="pagination comments-pagination">--}}
{{--                                                            <div class="row">--}}
{{--                                                                <div class="text-center">--}}
{{--                                                                    {{$comments->onEachSide(1)->links()}}--}}
{{--                                                                </div>--}}
{{--                                                            </div>--}}
{{--                                                        </ul>--}}
{{--                                                    </nav>--}}
{{--                                                </div>--}}
{{--                                            </div>--}}
{{--                                        </div>--}}
{{--                                        <!-- Respond box -->--}}
{{--                                        <div class="col-md-12">--}}
{{--                                            <div id="respond">--}}
{{--                                                @if(Auth::check())--}}
{{--                                                    <h3 class="reply-title">Leave a Comment</h3>--}}
{{--                                                    {!! Form::open(['method'=>'POST', 'action'=>'RestaurantCommentController@store']) !!}--}}
{{--                                                    <input type="hidden" name="restaurant_id" value="{{$restaurant->id}}">--}}
{{--                                                    <p class="comment-notes">--}}
{{--                                                        Lorem ipsum st dolor amet. <span class="required">*</span>--}}
{{--                                                    </p>--}}

{{--                                                    <p class="comment-form-comment">--}}
{{--                                                        <label for="body">Body:</label>--}}
{{--                                                        <textarea id="body" required="required" aria-required="true" rows="8" cols="45" name="body"></textarea>--}}

{{--                                                    </p>--}}

{{--                                                    <p class="form-submit">--}}
{{--                                                        <input type="submit" value="Post Comment" class="aa-browse-btn" name="submit">--}}
{{--                                                    </p>--}}
{{--                                                    {!! Form::close() !!}--}}
{{--                                                @else--}}
{{--                                                    <h3 class="required">Login/Register to see form</h3>--}}
{{--                                                @endif--}}

{{--                                            </div>--}}
{{--                                        </div>--}}
{{--                                    </div>--}}
{{--                                </div>--}}
{{--                            </div>--}}
{{--                            <!-- Start blog sidebar -->--}}
{{--                            <div class="col-md-4">--}}
{{--                                <aside class="aa-blog-sidebar">--}}
{{--                                    <!-- Start single sidebar -->--}}

{{--                                    <!-- Start single sidebar -->--}}
{{--                                    <div class="aa-blog-sidebar-single">--}}
{{--                                        <h3>Cities</h3>--}}
{{--                                        <ul class="aa-blog-catg">--}}
{{--                                            @if($locations)--}}
{{--                                                @foreach($locations as $location)--}}
{{--                                                    <li><a href="{{route('single_location.locationCategory', $location->id)}}">{{$location->name}}</a></li>--}}
{{--                                                @endforeach--}}
{{--                                            @endif--}}
{{--                                        </ul>--}}
{{--                                    </div>--}}
{{--                                    <!-- Start single sidebar -->--}}
{{--                                    <div class="aa-blog-sidebar-single">--}}
{{--                                        <h3>Type of food</h3>--}}
{{--                                        <div class="tag-cloud">--}}
{{--                                            @if($foods)--}}
{{--                                                @foreach($foods as $food)--}}
{{--                                                    <a href="#">{{$food->name}}</a>--}}
{{--                                                @endforeach--}}
{{--                                            @endif--}}
{{--                                        </div>--}}
{{--                                    </div>--}}
{{--                                    <!-- Start single sidebar -->--}}
{{--                                    <div class="aa-blog-sidebar-single">--}}
{{--                                        <h3>Recent Restaurant</h3>--}}
{{--                                        <div class="aa-blog-recent-post">--}}
{{--                                            @if($restaurantRecents)--}}
{{--                                                @foreach($restaurantRecents as $restaurantRecent)--}}
{{--                                                    <div class="media">--}}
{{--                                                        <div class="media-left">--}}
{{--                                                            <a href="{{route('single_restaurant.restaurant', $restaurantRecent->slug)}}">--}}
{{--                                                                <img alt="img" src="{{$restaurantRecent->photo ? $restaurantRecent->photo->file : $restaurantRecent->singleRestaurant()}}" class="media-object">--}}
{{--                                                            </a>--}}
{{--                                                        </div>--}}
{{--                                                        <div class="media-body">--}}
{{--                                                            <h4 class="media-heading"><a href="{{route('single_restaurant.restaurant', $restaurantRecent->slug)}}">{{$restaurantRecent->title}}</a></h4>--}}
{{--                                                            <p>{{Str::limit($restaurantRecent->body, 80)}}</p>--}}
{{--                                                            <span>{{$restaurantRecent->created_at->diffForHumans()}}</span>--}}
{{--                                                        </div>--}}
{{--                                                    </div>--}}
{{--                                                @endforeach--}}
{{--                                            @endif--}}


{{--                                        </div>--}}
{{--                                    </div>--}}

{{--                                </aside>--}}
{{--                            </div>--}}
{{--                        </div>--}}
{{--                    </div>--}}
{{--                </div>--}}
{{--            </div>--}}
{{--        </div>--}}
{{--    </section>--}}
{{--    <!-- / Blog  -->--}}

{{--@endsection--}}

{{--@section('footer')--}}

{{--@endsection--}}















@extends('layouts.frontend-thema')
<style>
    .contact-restaurant-content .p-title-2 {
        margin-left: 211px!important;
        position: absolute!important;
    }
    .title-address .p-lead-light {
        display: inline-block;
    }
</style>
@section('content')
<!-- START LOGO AND MENU -->
<section id="menu" class="menu">
    <div class="container-menu">

        <div class="logo alignLeft center-response">
            <a href="index.html"><img src="{{asset('img/logo.svg')}}" class="logo-img" alt=""></a>
        </div>

        <a class="toggle-menu-link" href="javascript:void(0);" onclick="myFunction()">
            <i class="fas fa-bars"></i>
        </a>

        <nav class="navbar" id="navbar">
            <!--<div class="burger-nav"></div>-->
            <ul class="nav alignRight center-response">
                <li><a class="mobile-font" href="/">Homepage</a></li>
                <li><a class="mobile-font" href="{{route('plans-and-pricing.planAndPrice')}}">Plans&Pricing</a></li>
                <li><a class="mobile-font" href="{{route('restaurants.showAll')}}">Restaurants</a></li>
                <li><a class="mobile-font" href="{{route("contact.contact")}}">Contact</a></li>
                <li class="menu-buttons-block">
                <li class="menu-collapse"><a href="{{route('login')}}" class="sign-in">Sign in</a></li>
                <li class="menu-collapse top-distance-mobile"><a href="{{route('register.index')}}" class="register">Register</a></li>
            </ul>
        </nav>

    </div>
</section>
<!-- END LOGO AND MENU -->

<!-- START HEADER -->
<section id="header">
    <div class="container">
        <h2 class="single-page-header">Restaurant details</h2>
        <p class="p-lead">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Distinctio nisi nostrum nulla, omnis temporibus voluptatem.</p>
    </div>
</section>
<!-- END HEADER -->

<!-- START RESTAURANT DETAILS -->
<section id="restaurant-details">
    <div class="container">
        <div class="restaurant-left-box">
            <div class="img-title">
                <img src="{{$restaurant->photo ? $restaurant->photo->file : $restaurant->photoPlaceholder()}}" alt="">
            </div>
            <div class="title-body">
                <h2>{{$restaurant->title}}</h2>
                <img src="{{asset('img/star.svg')}}" class="star" alt="">
                <img src="{{asset('img/star.svg')}}" class="star" alt="">
                <img src="{{asset('img/star.svg')}}" class="star" alt="">
                <img src="{{asset('img/star.svg')}}" class="star" alt="">
                <img src="{{asset('img/star.svg')}}" class="star" alt="">
                <p class="p-lead"><b>5.0</b></p>
            </div>
            <div class="title-body-2">
                <p class="p-lead">
                    @if($time > $restaurant->contact->opening && $time < $restaurant->contact->closing)
                        OPEN
                    @else
                        CLOSED
                    @endif - Closes as {{$restaurant->contact->closing}}</p>
                <p class="p-lead-litle">{{$restaurant->food->name}}</p>
                <div class="d-block">
                    <p class="p-comments">{{$restaurant->comments->count()}} Comments</p>
                    <img src="{{asset('img/chat-minify.svg')}}" alt="">
                </div>
            </div>
            <div class="only-text">
                <p>{{$restaurant->body}}</p>
            </div>
            <div class="contact-restaurant">
                <p class="p-lead">Contact</p>
                <div class="p-lead-bottom"></div>
            </div>
            <div class="contact-restaurant-content">
                <div class="contact-title">
                    <p class="p-title"><b>{{$restaurant->title}}</b></p>
                    <p class="p-title-2"><b>Social:</b></p>
                </div>
                <div class="contact-email-social">
                    <p class="p-lead">{{$restaurant->contact->email}}</p>
                    <p class="p-lead">{{$restaurant->contact->telephone}}</p>
                </div>
                <div class="contact-email-social-2">
                    <a href="{{$restaurant->social->facebook}}"><i class="fab fa-facebook-f"></i></a>
                    <a href="{{$restaurant->social->instagram}}"><i class="fab fa-instagram"></i></a>
                    <a href="{{$restaurant->social->google}}"><i class="fab fa-twitter"></i></a>
                </div>
                <div class="contact-address">
                    <p class="p-lead">{{$restaurant->location->name}}</p>
                    <p class="p-lead">{{$restaurant->contact->address2}}</p>
                </div>
                <div class="contact-pdf">
                    @if(!empty($restaurant->documents->document))
                        <a href="{{ asset('documents/' . $restaurant->documents->document) }}" target="_blank"><h2 style="display: inline-block;">{{$restaurant->documents->document}} <i class="fas fa-file-pdf"></i></h2></a>
                    @else
                        <p>You dont have pdf</p>
                    @endif
                </div>
            </div>
            <div class="gallery">
                <h2>Gallery</h2>
                <div class="gallery-img">

                    @foreach($gallerys as $gallery)
                        <div class="single-img">
                        <img src="{{URL::asset('/gallery/' . $gallery->photo)}}" alt="profile Pic">
                        </div>
                    @endforeach


                </div>
            </div>
            <div class="pagination pagination-last-bottom">
                <img src="{{asset('img/left-arrow-angle-white-red.svg')}}" class="pagination-left" alt="">
                <p class="p-lead p-circle">1</p>
                <p class="p-lead">2</p>
                <p class="p-lead pagi-none">3</p>
                <p class="p-lead pagi-none">4</p>
                <p class="p-lead">...</p>
                <p class="p-lead">9</p>
                <img src="{{asset('img/right-arrow-angle-white-red.svg')}}" class="pagination-right" alt="">
            </div>
            <div class="restaurant-comments">
                <h2>Comments</h2>
                <img class="comments-icon" src="{{asset('img/chat-minify.svg')}}" alt="">
                <p class="p-lead">{{$restaurant->comments->count()}} Comments</p>
            </div>

            @if(count($comments) > 0)
                @foreach($comments as $comment)
                    <div class="comments-section">
                        <div class="comments-image">
                            <img src="{{$comment->photo}}" alt="">
                        </div>
                        <div class="comments-title-body">
                            <p class="p-title">{{$comment->author}}</p>
                            <p class="p-lead">{{$comment->created_at->diffForHumans()}}</p>
                            <p class="p-lead p-lead-body">{{$comment->body}}</p>
                        </div>
                    </div>
                    <div class="hr-spacing">
                        <hr>
                    </div>
                @endforeach
            @endif




            @if(Auth::check())
                {!! Form::open(['method'=>'POST', 'action'=>'RestaurantCommentController@store']) !!}
                    <input type="hidden" name="restaurant_id" value="{{$restaurant->id}}">
                    <div class="leave-a-comment">
                        <i class="fas fa-pencil-alt"></i>
                        <textarea name="body" id="body" required="required" aria-required="true" placeholder="Leave a comment"></textarea>
                        <input class="post-submit" name="submit" type="submit" value="Post">
                    </div>
                {!! Form::close() !!}
            @else
                <h3 class="required">Login/Register to see form</h3>
            @endif





        </div>



        <div class="restaurant-right-box">
            <div class="restaurant-category">
                <h3>Cities</h3>


                @if($locations)
                    @foreach($locations as $location)
                        <p class="p-lead">{{$location->name}}</p>
{{--                        <li><a href="{{route('single_location.locationCategory', $location->id)}}">{{$location->name}}</a></li>--}}
                    @endforeach
                @endif


{{--                <p class="p-lead">Furth</p>--}}
{{--                <p class="p-lead">Munchen</p>--}}
{{--                <p class="p-lead">Wurzburg</p>--}}
{{--                <p class="p-lead">Aschaffenburg</p>--}}
{{--                <p class="p-lead">Nuremberg</p>--}}
{{--                <p class="p-lead">Ingolstadt</p>--}}
{{--                <p class="p-lead">Passau</p>--}}
{{--                <p class="p-lead">Augsburg</p>--}}
{{--                <p class="p-lead">Bayreuth</p>--}}
{{--                <p class="p-lead">Kempten</p>--}}
{{--                <p class="p-lead">Rosenheim</p>--}}
{{--                <p class="p-lead">Rogensburg</p>--}}


            </div>
            <div class="restaurant-recently-added">
                <h3>Recently added</h3>

                @if($restaurantRecents)
                    @foreach($restaurantRecents as $restaurantRecent)
                        <div class="recently-single-restaurant">
                            <div class="recently-img">
                                <img src="{{$restaurantRecent->photo ? $restaurantRecent->photo->file : $restaurantRecent->singleRestaurant()}}" alt="">
                            </div>
                            <div class="title-address">
                                <p class="p-lead">{{$restaurantRecent->title}}</p>
                                <img src="{{asset('img/location-minify.svg')}}" alt=""><p class="p-lead-light">{{$restaurant->location->name}}</p>
                            </div>
                        </div>
                        <div class="recently-divider"></div>
                        <hr>
                    @endforeach
                @endif


            </div>
            <div class="restaurant-recently-added">
                <h3>Related</h3>

                @if($relateds)
                    @foreach($relateds as $related)
                        <div class="recently-single-restaurant">
                            <div class="recently-img">
                                <img src="{{$related->photo ? $related->photo->file : $related->photoHome()}}" alt="">
                            </div>
                            <div class="title-address">
                                <p class="p-lead">{{$related->title}}</p>
                                <img src="{{asset('img/location-minify.svg')}}" alt=""><p class="p-lead-light">{{$restaurant->location->name}}</p>
                            </div>
                        </div>
                        <div class="recently-divider"></div>
                        <hr>
                    @endforeach
                @endif



                <div class="recently-divider"></div>

            </div>
        </div>

    </div>
</section>
<!-- END RESTAURANT DETAILS -->

<div class="divider-clear-both"></div>
@endsection

@section('footer')

@endsection