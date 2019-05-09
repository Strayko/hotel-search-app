<?php

namespace App\Http\Controllers;

use App\Pdf;
use App\Photo;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Response;

class AdminMediaController extends Controller
{
    public function index() {

    	$photos = Photo::orderBy('id', 'desc')->paginate(10);
    	return view('admin.media.index', compact('photos'));
    }

    public function store(Request $request) {
    	$file = $request->file('file');
    	$name = time() . $file->getClientOriginalName();
    	$file->move('images', $name);
    	Photo::create(['file'=>$name]);
    }

    public function destroy($id) {
		$photo = Photo::findOrFail($id);
		unlink(public_path() . $photo->file);
		$photo->delete();

    }

    public function deleteMedia(Request $request) {

    	if(isset($request->delete_all) && !empty($request->checkBoxArray)) {
		    $photos = Photo::findOrFail($request->checkBoxArray);
		    foreach($photos as $photo) {
			    $photo->delete();
		    }
		    return redirect()->back();
	    } else {
    		return redirect()->back();
	    }
    }
}
