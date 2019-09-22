@if($locations)
    @foreach($locations as $location)
        <tr>
            <td>{{$location->id}}</td>
            <td><img height="50" width="50" src="{{$location->photo ? $location->photo->file : 'http://placehold.it/400x400'}}" alt=""></td>
            <td>{{$location->name}}</td>
            <td>{{$location->created_at->diffForHumans()}}</td>
            <td>{{$location->updated_at->diffForHumans()}}</td>

            <td class="center-buttons">
                <a href="{{route('locations.edit', $location->id)}}" class="blue">
                     Edit
                </a>

                    {!! Form::open(['method'=>'DELETE', 'action'=>['AdminLocationsController@destroy', $location->id], 'class'=>'form-inline']) !!}
                    <input type="submit" class="red-input" value="Delete">
                    {!! Form::close() !!}

            </td>
        </tr>
    @endforeach
@endif
<tr>
    <td colspan="10" align="center">
        <div style="display: inline-flex">
            {{ $locations->onEachSide(1)->links() }}
        </div>
    </td>
</tr>

