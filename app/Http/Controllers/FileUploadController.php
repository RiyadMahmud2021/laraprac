<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FileUploadController extends Controller
{
    public function fileUploadPage(){
        return view('fileUpload/fileUpload');
    }
}
