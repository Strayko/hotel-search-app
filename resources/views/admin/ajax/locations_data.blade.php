@if($locations)
    @foreach($locations as $location)
        <tr>
            <td>{{$location->id}}</td>
            <td><img height="50" width="50" src="{{$location->photo ? $location->photo->file : 'http://placehold.it/400x400'}}" alt=""></td>
            <td>{{$location->name}}</td>
            <td>{{$location->created_at->diffForHumans()}}</td>
            <td>{{$location->updated_at->diffForHumans()}}</td>

            <td class="d-flex justify-content-end">
                <a href="{{route('locations.edit', $location->id)}}" class="btn btn-secondary">
                    <i class="fas fa-map-marker-alt"></i> Edit
                </a>
                <a href="#" class="d-inline-block ml-1">
                    {!! Form::open(['method'=>'DELETE', 'action'=>['AdminLocationsController@destroy', $location->id]]) !!}
                    <button type="submit" class="btn btn-secondary"><i class="fas fa-trash"></i> Delete</button>
                    {!! Form::close() !!}
                </a>
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