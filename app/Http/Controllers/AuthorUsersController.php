<?php

namespace App\Http\Controllers;

use App\Http\Requests\UserRegisterRequest;
use App\Package;
use App\Photo;
use App\Restaurant;
use App\User;
use Carbon\Carbon;
use DateTime;
use Illuminate\Http\Request;

class AuthorUsersController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

	    $users = User::all();
	    $packages = Package::pluck('name', 'id')->all();

        return view('author.index', compact('users', 'packages', 'restaurants'));
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
    public function store(UserRegisterRequest $request)
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


	    switch($request->get('package_id')) {
            case '1':
                $dateTime = Carbon::now();
                $dateTime->modify('+5 hour');
                $dateTime->format('Y-m-d H:i:s');
                $input['package_expiry'] = $dateTime;
            break;
            case '2':
                $dateTime = Carbon::now();
                $dateTime->modify('+10 hour');
                $dateTime->format('Y-m-d H:i:s');
                $input['package_expiry'] = $dateTime;
            break;
            case '3':
                $dateTime = Carbon::now();
                $dateTime->modify('+15 hour');
                $dateTime->format('Y-m-d H:i:s');
                $input['package_expiry'] = $dateTime;
            break;
        }



	    User::create($input);

	    return redirect('/login');

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
        //
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
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
