@foreach($actions as $action)
    <tr>
        <td>{{Str::limit($action->restaurant->title, 20)}}</td>
        <td>{{Str::limit($action->title, 20)}}</td>
        <td>{{Str::limit($action->body, 20)}}</td>
        <td>{{$action->created_at->diffForHumans()}}</td>
        <td>{{$action->updated_at->diffForHumans()}}</td>
        <td class="center-buttons">
            @if($action->is_active == 1)
                {!! Form::open(['method'=>'PATCH', 'action'=>['AuthorActionsController@updateActions', $action->id]]) !!}
                <input type="hidden" name="is_active" value="0">
                {!! Form::submit('Un-approve', ['class'=>'blue-input ajax-input', 'id'=>'blue-input-user-admin']) !!}
                {!! Form::close() !!}
            @else
                {!! Form::open(['method'=>'PATCH', 'action'=>['AuthorActionsController@updateActions', $action->id]]) !!}
                <input type="hidden" name="is_active" value="1">
                {!! Form::submit('Approve', ['class'=>'blue-input ajax-input', 'id'=>'blue-input-user-admin']) !!}
                {!! Form::close() !!}
            @endif
        </td>
        <td>
            <a href="{{route('actions.edit', $action->id)}}" class="blue ajax-input-2" id="blue-user-admin">
                 Edit/Delete
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