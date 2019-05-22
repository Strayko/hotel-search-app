@if($photos)
    @foreach($photos as $photo)
        <tr>
            <td><input class="checkBoxes" type="checkbox" name="checkBoxArray[]" value="{{$photo->id}}"></td>
            <td>{{$photo->id}}</td>
            <td><img height="50" src="{{$photo->file}}" alt=""></td>
            <td>{{$photo->created_at ? $photo->created_at : 'no data'}}</td>
            <td class="d-flex justify-content-end">

            </td>
        </tr>
    @endforeach
@endif
<tr>
    <td colspan="10" align="center">
        <div style="display: inline-flex">
            {{ $photos->onEachSide(1)->links() }}
        </div>
    </td>
</tr>