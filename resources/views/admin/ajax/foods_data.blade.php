@foreach($foods as $food)
    <tr>
        <td>{{$food->id}}</td>
        <td>{{$food->name}}</td>
        <td>{{$food->created_at->diffForHumans()}}</td>
        <td>{{$food->updated_at->diffForHumans()}}</td>

        <td class="d-flex justify-content-end">
            <a href="{{route('foods.edit', $food->id)}}" class="btn btn-secondary">
                <i class="fas fa-pepper-hot"></i> Edit
            </a>
            <a href="#" class="d-inline-block ml-1">
                {!! Form::open(['method'=>'DELETE', 'action'=>['AdminFoodController@destroy', $food->id]]) !!}
                <button type="submit" class="btn btn-secondary"><i class="fas fa-trash"></i> Delete</button>
                {!! Form::close() !!}
            </a>
        </td>
    </tr>
@endforeach
<tr>
    <td colspan="10" align="center">
        <div style="display: inline-flex">
            {{ $foods->onEachSide(1)->links() }}
        </div>
    </td>
</tr>