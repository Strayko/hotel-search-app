@foreach($comments as $comment)
    <tr>
        <td>{{$comment->id}}</td>
        <td>{{$comment->author}}</td>
        <td>{{$comment->email}}</td>
        <td>{{Str::limit($comment->body, 15)}}</td>
        <td><a id="comment-link-restaurant" href="{{route('single_restaurant.restaurant', $comment->restaurant->slug)}}">{{Str::limit($comment->restaurant->title, 30)}}</a></td>

        <td class="center-buttons">
            @if($comment->is_active == 1)
                {!! Form::open(['method'=>'PATCH', 'action'=>['RestaurantCommentController@update', $comment->id]]) !!}
                <input type="hidden" name="is_active" value="0">
                {!! Form::submit('Un-approve', ['class'=>'blue-input']) !!}
                {!! Form::close() !!}
            @else
                {!! Form::open(['method'=>'PATCH', 'action'=>['RestaurantCommentController@update', $comment->id]]) !!}
                <input type="hidden" name="is_active" value="1">
                {!! Form::submit('Approve', ['class'=>'blue-input'] ) !!}
                {!! Form::close() !!}
            @endif
        </td>
        <td>
            {!! Form::open(['method'=>'DELETE', 'action'=>['RestaurantCommentController@destroy', $comment->id]]) !!}
            {!! Form::submit('Delete', ['class'=>'red-input']) !!}
            {!! Form::close() !!}
        </td>
    </tr>
@endforeach
<tr>
    <td colspan="10" align="center">
        <div style="display: inline-flex">
            {{ $comments->onEachSide(1)->links() }}
        </div>
    </td>
</tr>

