@foreach($distances as $distance)
    <tr>
        <td>{{$distance->id}}</td>
        <td>{{$distance->distance}}</td>
        <td>{{$distance->created_at->diffForHumans()}}</td>
        <td>{{$distance->updated_at->diffForHumans()}}</td>

        <td class="center-buttons">
            <a href="{{route('distance.edit', $distance->id)}}" class="blue">
                Edit
            </a>

                {!! Form::open(['method'=>'DELETE', 'action'=>['AdminRadiusController@destroy', $distance->id], 'class'=>'form-inline']) !!}
                <input type="submit" class="red-input" value="Delete">
                {!! Form::close() !!}

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

