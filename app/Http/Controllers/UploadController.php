<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UploadController extends Controller
{
    public function upload(Request $request)
    {
		$this->validate($request, [
			'file' => 'required',
		]);

		$file = $request->file('file');
		$loc = '/public/documents/hotel_images';
        $name = "hotel_" + Auth::id();

        $file->move($loc, $name);
        
        return $loc + "/" + $name;
	}
}
