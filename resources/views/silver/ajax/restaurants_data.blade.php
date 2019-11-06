@foreach($restaurants as $restaurant)
    <tr>
        <td><img height="50" width="50" src="{{$restaurant->photo ? $restaurant->photo->file : 'http://placehold.it/400x400'}}" alt=""></td>
        <td>{{Str::limit($restaurant->title, 15)}}</td>
        <td>{{Str::limit($restaurant->body, 10)}}</td>
        <td><a class="replies" href="{{route('single_restaurant.restaurant', [app()->getLocale(), $restaurant->slug])}}">Restaurant</a></td>
        <td>{{$restaurant->created_at->diffForHumans()}}</td>
        <td>{{$restaurant->updated_at->diffForHumans()}}</td>
        <td>
            <a href="{{route('restaurant.edit', [app()->getLocale(), $restaurant->id])}}" class="btn btn-secondary">
                 Edit/Delete
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

{{--<td>1</td>--}}
{{--<td><img src="../../img/popular_place.png" alt=""></td>--}}
{{--<td>Lou Williams</td>--}}
{{--<td>Platinum</td>--}}
{{--<td>Carpe diem</td>--}}
{{--<td>Lorem ipsum</td>--}}
{{--<td><a class="replies" href="#">Restaurant</a></td>--}}
{{--<td><a class="replies" href="#">View</a></td>--}}
{{--<td>2 days ago</td>--}}
{{--<td class="center-buttons"><a class="blue" href="edit.html">Edit</a> <input type="submit" class="red-input" value="Delete"></td>--}}