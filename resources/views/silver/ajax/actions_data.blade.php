@foreach($actions as $action)
    <tr>
        <td>{{$action->restaurant->title}}</td>
        <td>{{Str::limit($action->title, 15)}}</td>
        <td>{{Str::limit($action->body, 10)}}</td>
        <td>{{$action->created_at->diffForHumans()}}</td>
        <td>{{$action->updated_at->diffForHumans()}}</td>
        <td>
            @if($action->is_active == 1)
                {!! Form::open(['method'=>'PATCH', 'action'=>['AuthorActionsController@updateActions', $action->id]]) !!}
                <input type="hidden" name="is_active" value="0">
                {!! Form::submit('Un-approve', ['class'=>'btn btn-success']) !!}
                {!! Form::close() !!}
            @else
                {!! Form::open(['method'=>'PATCH', 'action'=>['AuthorActionsController@updateActions', $action->id]]) !!}
                <input type="hidden" name="is_active" value="1">
                {!! Form::submit('Approve', ['class'=>'btn btn-info']) !!}
                {!! Form::close() !!}
            @endif
        </td>
        <td>
            <a href="{{route('actions.edit', $action->id)}}" class="btn btn-secondary">
                <i class="fas fa-calendar-alt"></i> Edit/Delete
            </a>
        </td>
    </tr>
@endforeach
<tr>
    <td colspan="10" align="center">
        <div style="display: inline-flex">
            {{ $actions->onEachSide(1)->links() }}
        </div>
    </td>
</tr>