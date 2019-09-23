<?php

namespace App\Http\Controllers;

use App\Http\Requests\UserEditRequest;
use App\Http\Requests\UsersRequest;
use App\Package;
use App\Photo;
use App\Restaurant;
use App\Role;
use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Session;
use Carbon\Carbon;

class AdminUsersController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

//        $date = Carbon::now();
//        $package_expiry = User::where('package_expiry', '<', $date)->delete();
//
//        dd($package_expiry);

//        foreach ($package_expiry as $key => $object) {
//            echo $expiry = $object->package_expiry;
//        }

//        if($date > $expiry) {
//            $totalUsers = \DB::table('users')->where('package_expiry', '<', $date)
//              ->delete();
//        }



        $users = User::orderBy('id', 'asc')->paginate(5);
	    $roles = Role::pluck('name', 'id')->all();
	    $packages = Package::pluck('name', 'id')->all();


        return view('admin.users.index', compact('users', 'roles', 'packages'));
    }

    function fetch_data(Request $request)
    {
        if($request->ajax())
        {
            $sort_by = $request->get('sortby');
            $sort_type = $request->get('sorttype');
            $query = $request->get('query');
            $query = str_replace(" ", "%", $query);
            $users = User::where('id', 'like', '%'.$query.'%')
                ->orWhere('name', 'like', '%'.$query.'%')
                ->orWhere('email', 'like', '%'.$query.'%')
                ->orderBy($sort_by, $sort_type)
                ->paginate(5);
            return view('admin.ajax.users_data', compact('users'))->render();
        }
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {

        $roles = Role::pluck('name', 'id')->all();
        $packages = Package::pluck('name', 'id')->all();
        return view('admin.users.create', compact('roles', 'packages'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(UsersRequest $request)
    {


	    if(trim($request->password) == '') {
		    $input = $request->except('password');
	    } else {
		    $input = $request->all();
		    $input['password'] = bcrypt($request->password);
	    }

    	if($file = $request->file('photo_id')) {
    		$name = time() . $file->getClientOriginalName();
    		$file->move('images', $name);
    		$photo = Photo::create(['file'=>$name]);
    		$input['photo_id'] = $photo->id;
    	}


    	User::create($input);

    	return redirect('/admin2/users');

        //return $request->all();
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        return view('admin.users.show');
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
    	$user = User::findOrFail($id);
	    $roles = Role::pluck('name', 'id')->all();
	    $packages = Package::pluck('name', 'id')->all();
        return view('admin.users.edit', compact('roles', 'user', 'packages'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(UserEditRequest $request, $id)
    {
        $user = User::findOrFail($id);
	    if(trim($request->password) == '') {
		    $input = $request->except('password');
	    } else {
		    $input = $request->all();
		    $input['password'] = bcrypt($request->password);
	    }

        if($file = $request->file('photo_id')) {
        	$name = time() . $file->getClientOriginalName();
        	$file->move('images', $name);
        	$photo = Photo::create(['file' => $name]);
        	$input['photo_id'] = $photo->id;
        }
        $user->update($input);
        return redirect('/admin2/users');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
		$user = User::findOrFail($id);
		if($user->photo_id == 1) {
			$user->delete();
			Session::flash('deleted_user', 'The User has been deleted');
			return redirect('/admin2/users');
		} else {
			unlink( public_path() . $user->photo->file );
            DB::delete('delete from photos where id = ?',[$user->photo->id]);
			$user->delete();
			Session::flash('deleted_user', 'The User has been deleted');
			return redirect('/admin2/users');
		}

    }
}
