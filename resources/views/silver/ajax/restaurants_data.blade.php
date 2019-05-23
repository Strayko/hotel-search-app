@foreach($restaurants as $restaurant)
    <tr>
        <td><img height="50" width="50" src="{{$restaurant->photo ? $restaurant->photo->file : 'http://placehold.it/400x400'}}" alt=""></td>
        <td>{{Str::limit($restaurant->title, 15)}}</td>
        <td>{{Str::limit($restaurant->body, 10)}}</td>
        <td><a href="{{route('single_restaurant.restaurant', $restaurant->slug)}}">Restaurant</a></td>
        <td>{{$restaurant->created_at->diffForHumans()}}</td>
        <td>{{$restaurant->updated_at->diffForHumans()}}</td>
        <td>
            <a href="{{route('restaurant.edit', $restaurant->id)}}" class="btn btn-secondary">
                <i class="fas fa-utensils"></i> Edit/Delete
            </a>
        </td>
    </tr>
@endforeach
<tr>
    <td colspan="10" align="center">
        <div style="display: inline-flex">
            {{ $restaurants->onEachSide(1)->links() }}
        </div>
    </td>
</tr>