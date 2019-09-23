@foreach($users as $user)
    <tr>
        <td>{{$user->id}}</td>
        <td><img height="50" width="50" src="{{$user->photo ? $user->photo->file : 'http://placehold.it/400x400'}}" alt=""></td>
        <td>{{Str::limit($user->name, 16)}}</td>
        <td>{{Str::limit($user->email, 23)}}</td>
        <td>{{$user->role->name}}</td>
        <td>{{$user->package ? $user->package->name : 'Uncategorized'}}</td>
        <td>{{$user->is_active == 1 ? 'Active' : 'Not Active'}}</td>
        <td>{{$user->created_at->diffForHumans()}}</td>

        <td class="center-buttons">
            <a href="{{route('users.edit', $user->id)}}" class="blue">
                 Edit
            </a>

                {!! Form::open(['method'=>'DELETE', 'action'=>['AdminUsersController@destroy', $user->id], 'class'=>'form-inline']) !!}
                <input type="submit" class="red-input" value="Delete">
                {{--{!! Form::submit('Delete User', ['class'=>'btn btn-secondary']) !!}--}}
                {!! Form::close() !!}

        </td>
    </tr>
@endforeach
<tr>
    <td colspan="10" align="center">
        <div style="display: inline-flex">
           {{ $users->onEachSide(1)->links() }}
        </div>
    </td>
</tr>

