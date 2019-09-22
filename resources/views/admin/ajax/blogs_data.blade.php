@foreach($blogs as $blog)
    <tr>
        <td>{{$blog->id}}</td>
        <td><img height="50" width="50" src="{{$blog->photo ? $blog->photo->file : 'http://placehold.it/400x400'}}" alt=""></td>
        <td>{{$blog->title}}</td>
        <td>{{$blog->body}}</td>
        <td>{{$blog->created_at->diffForHumans()}}</td>
        <td class="center-buttons">
            <a href="{{route('blog.edit', $blog->id)}}" class="blue">
                 Edit
            </a>

                {!! Form::open(['method'=>'DELETE', 'action'=>['AdminBlogController@destroy', $blog->id], 'class'=>'form-inline']) !!}
            <input type="submit" class="red-input" value="Delete">
                {!! Form::close() !!}

        </td>
    </tr>
@endforeach
<tr>
    <td colspan="10" align="center">
        <div style="display: inline-flex">
            {{ $blogs->onEachSide(1)->links() }}
        </div>
    </td>
</tr>





