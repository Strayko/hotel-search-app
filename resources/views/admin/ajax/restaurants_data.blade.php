@if($restaurants)
    @foreach($restaurants as $restaurant)
        <tr>
            <td>{{$restaurant->id}}</td>
            <td><img height="50" width="50" src="{{$restaurant->photo ? $restaurant->photo->file : 'http://placehold.it/400x400'}}" alt=""></td>
            <td>{{Str::limit($restaurant->user->name, 10)}}</td>
            <td>{{$restaurant->user->package ? $restaurant->user->package->name : 'Uncategorized'}}</td>
            <td>{{Str::limit($restaurant->title, 16)}}</td>
            <td>{{Str::limit($restaurant->body, 10)}}</td>
            <td><a href="{{route('single_restaurant.restaurant', $restaurant->slug)}}">Restaurant</a></td>
            <td><a href="{{route('comments.show', $restaurant->id)}}">View</a></td>
            <td>{{$restaurant->created_at->diffForHumans()}}</td>
            <td>
                <a href="{{route('restaurants.edit', $restaurant->id)}}" class="btn btn-secondary">
                    <i class="fas fa-utensils"></i> Edit
                </a>
                <a href="#" class="d-inline-block">
                    {!! Form::open(['method'=>'DELETE', 'action'=>['AdminRestaurantsController@destroy', $restaurant->id]]) !!}
                    <button type="submit" class="btn btn-secondary"><i class="fas fa-trash-alt"></i> Delete</button>
                    {!! Form::close() !!}
                </a>
            </td>
        </tr>
    @endforeach
@endif
<tr>
    <td colspan="10" align="center">
        <div style="display: inline-flex">
            {{ $restaurants->onEachSide(1)->links() }}
        </div>
    </td>
</tr>