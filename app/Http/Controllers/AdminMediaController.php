<?php

namespace App\Http\Controllers;

use App\Pdf;
use App\Photo;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Response;

class AdminMediaController extends Controller
{
    public function index() {

    	$photos = Photo::orderBy('id', 'asc')->paginate(5);
    	return view('admin.media.index', compact('photos'));
    }

    function fetch_data(Request $request)
    {
        if($request->ajax())
        {
            $sort_by = $request->get('sortby');
            $sort_type = $request->get('sorttype');
            $query = $request->get('query');
            $query = str_replace(" ", "%", $query);
            $photos = Photo::where('id', 'like', '%'.$query.'%')
                ->orWhere('file', 'like', '%'.$query.'%')
                ->orderBy($sort_by, $sort_type)
                ->paginate(5);
            return view('admin.ajax.media_data', compact('photos'))->render();
        }
    }

    public function store(Request $request) {

    	$file = $request->file('file');
    	if($request->hasFile('file')) {
            foreach($file as $fil) {
                $name = time(). $fil->getClientOriginalName();
                $fil->move('images', $name);
                Photo::create(['file'=>$name]);
            }
        }
    	return redirect()->back();
//    	$name = time() . $file->getClientOriginalName();
//    	$file->move('images', $name);
//    	Photo::create(['file'=>$name]);
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
