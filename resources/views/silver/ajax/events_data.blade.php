@foreach($events as $event)
    <tr>
        <td><img height="50" width="50" src="{{$event->photo ? $event->photo->file : 'http://placehold.it/400x400'}}" alt=""></td>
        <td>{{$event->restaurant->title}}</td>
        <td>{{Str::limit($event->title, 15)}}</td>
        <td>{{Str::limit($event->body, 10)}}</td>
        <td>{{$event->created_at->diffForHumans()}}</td>
        <td>{{$event->updated_at->diffForHumans()}}</td>
        <td>
            @if($event->is_active == 1)
                {!! Form::open(['method'=>'PATCH', 'action'=>['AuthorEventController@updateEvent', $event->id]]) !!}
                <input type="hidden" name="is_active" value="0">
                {!! Form::submit('Un-approve', ['class'=>'btn btn-success']) !!}
                {!! Form::close() !!}
            @else
                {!! Form::open(['method'=>'PATCH', 'action'=>['AuthorEventController@updateEvent', $event->id]]) !!}
                <input type="hidden" name="is_active" value="1">
                {!! Form::submit('Approve', ['class'=>'btn btn-info']) !!}
                {!! Form::close() !!}
            @endif
        </td>
        <td>
            <a href="{{route('event.edit', $event->id)}}" class="btn btn-secondary">
                <i class="fas fa-calendar-alt"></i> Edit/Delete
            </a>
        </td>
    </tr>
@endforeach
<tr>
    <td colspan="10" align="center">
        <div style="display: inline-flex">
            {{ $events->onEachSide(1)->links() }}
        </div>
    </td>
</tr>