@if($restaurants)
    @foreach($restaurants as $restaurant)
        <tr>
            <td>{{$restaurant->id}}</td>
            <td><img height="50" width="50" src="{{$restaurant->photo ? $restaurant->photo->file : 'http://placehold.it/400x400'}}" alt=""></td>
            <td>{{Str::limit($restaurant->user->name, 10)}}</td>
            <td>{{$restaurant->user->package ? $restaurant->user->package->name : 'Uncategorized'}}</td>
            <td>{{Str::limit($restaurant->title, 16)}}</td>
            <td>{{Str::limit($restaurant->body, 10)}}</td>
            <td><a class="hidden-background-a" href="{{route('single_restaurant.restaurant', [app()->getLocale(), $restaurant->slug])}}">Restaurant</a></td>
            <td><a class="hidden-background-a" href="{{route('comments.show', [app()->getLocale(), $restaurant->id])}}">View</a></td>
            <td>{{$restaurant->created_at->diffForHumans()}}</td>
            <td class="center-buttons">
                <a href="{{route('restaurants.edit', [app()->getLocale(), $restaurant->id])}}" class="blue">
                    Edit
                </a>

                    {!! Form::open(['method'=>'DELETE', 'action'=>['AdminRestaurantsController@destroy', app()->getLocale(), $restaurant->id], 'class'=>'form-inline']) !!}
                    <input type="submit" class="red-input" id="red-input-booking" value="Delete">
                    {!! Form::close() !!}

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