<?php

namespace App\Http\Controllers\simple_image_upload;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Validator,Redirect,Response,File;
use App\photo;

class ImageUploadController extends Controller
{
    public function index()
    {
    	return view('simple_image_upload.index');
    }

    public function store(Request $request)

       request()->validate ([
       	     'profile_image' => 'required|image|cocoa:jpeg|max:2048',
       	     ]);

       if ($files = $request->file('profile_image')) {
       	// Define upload path
           $destinationPath = public_path('/profile_images/'); // upload path
		// Upload Orginal Image           
           $profileImage = date('YmdHis') . "." . $files->getClientOriginalExtension();
           $files->move($destinationPath, $profileImage);

           $insert['image'] = "$profileImage";
        // Save In Database
			$imagemodel= new Photo();
			$imagemodel->photo_name="$profileImage";
			$imagemodel->save();
        }
        return back()->with('success', 'Image Uploaded successfully');
    }
}
