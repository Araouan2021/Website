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
}
