<?php

namespace App\Http\Controllers;

use App\Booking;
use App\Package;
use App\Photo;
use App\Role;
use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Session;

class SilverUserController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $user = Auth::user();
        $notifications = Booking::where('user_id', $user->id)
            ->where('is_read', 1)
            ->get();
        $platinium = User::where('package_id', Auth::user()->isPlatinium())->first();
        $gold = User::where('package_id', Auth::user()->isGold())->first();
	    $user = User::findOrFail($id);
	    $packages = Package::pluck('name', 'id')->all();
	    return view('silver.user.edit', compact ('user', 'packages', 'platinium', 'gold', 'notifications'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
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
	    return redirect('/admin');
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
	        DB::delete('delete from events where user_id = ?', [$user->id]);
		    $user->forceDelete();
		    Session::flash('deleted_user', 'The User has been deleted');
		    return redirect('/admin2/users');
	    } else {
            DB::delete('delete from events where user_id = ?', [$user->id]);
		    unlink( public_path() . $user->photo->file );
		    $user->forceDelete();
		    Session::flash('deleted_user', 'The User has been deleted');
		    return redirect('/admin2/users');
	    }

    }
}
