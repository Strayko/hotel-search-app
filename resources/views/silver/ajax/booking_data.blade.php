@foreach($booking as $item)
    <tr>
        <td>{{Str::limit($item->restaurant_title, 15)}}</td>
        <td>{{Str::limit($item->name, 17)}}</td>
        <td>{{Str::limit($item->phone, 15)}}</td>
        <td>{{$item->date}}</td>
        <td>{{$item->time}}</td>
        <td>{{$item->created_at->diffForHumans()}}</td>
        <td>{{$item->party}}</td>
        <td class="center-buttons">
            <a href="{{route('bookingEdit', $item->id)}}" class="blue" id="blue-input-booking">
                 Show
            </a>

                {!! Form::open(['method'=>'DELETE', 'action'=>['OnlineBookingController@destroy', $item->id], 'id'=>'booking-delete-button']) !!}
                 <input type="submit" class="red-input" id="red-input-booking" value="Delete">
                {!! Form::close() !!}

        </td>
    </tr>
@endforeach
<tr>
    <td colspan="10" align="center">
        <div style="display: inline-flex">
            {{ $booking->onEachSide(1)->links() }}
        </div>
    </td>
</tr>

{{--<td class="center-buttons"><a class="blue" id="blue-input-booking" href="edit.html">Show</a> <input type="submit" class="red-input" id="red-input-booking" value="Delete"></td>--}}