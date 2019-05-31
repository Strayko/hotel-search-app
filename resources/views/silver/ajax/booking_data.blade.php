@foreach($booking as $item)
    <tr>
        <td>{{Str::limit($item->restaurant_title, 15)}}</td>
        <td>{{Str::limit($item->name, 17)}}</td>
        <td>{{Str::limit($item->email, 15)}}</td>
        <td>{{Str::limit($item->phone, 15)}}</td>
        <td>{{$item->date}}</td>
        <td>{{$item->time}}</td>
        <td>{{$item->party}}</td>
        <td>
            <a href="{{route('bookingEdit', $item->id)}}" class="btn btn-secondary">
                <i class="fas fa-calendar-check"></i> Show
            </a>
            <a href="#" class="d-inline-block mt-1">
                {!! Form::open(['method'=>'DELETE', 'action'=>['OnlineBookingController@destroy', $item->id]]) !!}
                <button type="submit" class="btn btn-secondary"><i class="fas fa-trash-alt"></i> Delete</button>
                {!! Form::close() !!}
            </a>
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