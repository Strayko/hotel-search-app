@foreach($distances as $distance)
    <tr>
        <td>{{$distance->id}}</td>
        <td>{{$distance->distance}}</td>
        <td>{{$distance->created_at->diffForHumans()}}</td>
        <td>{{$distance->updated_at->diffForHumans()}}</td>

        <td class="d-flex justify-content-end">
            <a href="{{route('distance.edit', $distance->id)}}" class="btn btn-secondary">
                <i class="fas fa-location-arrow"></i> Edit
            </a>
            <a href="#" class="d-inline-block ml-1">
                {!! Form::open(['method'=>'DELETE', 'action'=>['AdminRadiusController@destroy', $distance->id]]) !!}
                <button type="submit" class="btn btn-secondary"><i class="fas fa-trash"></i> Delete</button>
                {!! Form::close() !!}
            </a>
        </td>
    </tr>
@endforeach
<tr>
    <td colspan="10" align="center">
        <div style="display: inline-flex">
            {{ $distances->onEachSide(1)->links() }}
        </div>
    </td>
</tr>