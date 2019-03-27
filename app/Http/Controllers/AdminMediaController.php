<?php

namespace App\Http\Controllers;

use App\Photo;
use Illuminate\Http\Request;

class AdminMediaController extends Controller
{
    public function index() {

    	$photos = Photo::paginate(10);
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
		return redirect('/admin2/media');
    }
}
