@if($packages)
    @foreach($packages as $package)
        <tr>
            <td>{{$package->id}}</td>
            <td>{{$package->name}}</td>
            <td>{{$package->created_at->diffForHumans()}}</td>
            <td>{{$package->updated_at->diffForHumans()}}</td>

            <td class="center-buttons">
                <a href="{{route('packages.edit', $package->id)}}" class="blue">
                    Edit
                </a>
                {!! Form::open(['method'=>'DELETE', 'action'=>['AdminPackagesController@destroy', $package->id], 'class'=>'form-inline']) !!}
                <input type="submit" class="red-input" value="Delete">
                {!! Form::close() !!}
            </td>
        </tr>
    @endforeach
@endif
<tr>
    <td colspan="10" align="center">
        <div style="display: inline-flex">
            {{ $packages->onEachSide(1)->links() }}
        </div>
    </td>
</tr>


