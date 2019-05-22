@if($packages)
    @foreach($packages as $package)
        <tr>
            <td>{{$package->id}}</td>
            <td>{{$package->name}}</td>
            <td>{{$package->created_at->diffForHumans()}}</td>
            <td>{{$package->updated_at->diffForHumans()}}</td>

            <td class="d-flex justify-content-end">
                <a href="{{route('packages.edit', $package->id)}}" class="btn btn-secondary">
                    <i class="fas fa-box"></i> Edit
                </a>
                <a href="#" class="d-inline-block ml-1">
                    {!! Form::open(['method'=>'DELETE', 'action'=>['AdminPackagesController@destroy', $package->id]]) !!}
                    <button type="submit" class="btn btn-secondary"><i class="fas fa-trash"></i> Delete</button>
                    {!! Form::close() !!}
                </a>
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