@foreach($gallerys as $gallery)
    <tr>
        <td><input class="checkBoxes" type="checkbox" name="checkBoxArray[]" value="{{$gallery->id}}"></td>
        <td><img src="{{URL::asset('/gallery/' . $gallery->photo)}}" alt="" height="100" width="100"></td>
        {{--<td><img height="50" src="{{$restaurant->file}}" alt=""></td>--}}
        <td>{{$gallery->created_at ? $gallery->created_at->diffForHumans() : 'no data'}}</td>
        <td class="d-flex justify-content-end">

        </td>
    </tr>
@endforeach
<tr>
    <td colspan="10" align="center">
        <div style="display: inline-flex">
            {{ $gallerys->onEachSide(1)->links() }}
        </div>
    </td>
</tr>