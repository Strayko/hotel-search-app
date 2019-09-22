@foreach($foods as $food)
    <tr>
        <td>{{$food->id}}</td>
        <td>{{$food->name}}</td>
        <td>{{$food->created_at->diffForHumans()}}</td>
        <td>{{$food->updated_at->diffForHumans()}}</td>

        <td class="center-buttons">
            <a href="{{route('foods.edit', $food->id)}}" class="blue">
              Edit
            </a>

                {!! Form::open(['method'=>'DELETE', 'action'=>['AdminFoodController@destroy', $food->id], 'class'=>'form-inline']) !!}
                 <input type="submit" class="red-input" value="Delete">
                {!! Form::close() !!}

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
