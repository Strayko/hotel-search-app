@foreach($restaurants as $restaurant)
    <tr>

        <td>{{Str::limit($restaurant->title, 40)}}</td>
        <td>{{$restaurant->gallery->count()}}</td>

        <td class="d-flex justify-content-center" style="text-align: center;">
            <a href="{{route('gallery.edit', $restaurant->id)}}" class="btn btn-secondary">
               Upload/Delete
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