<?php

namespace App\Http\Controllers;


use Illuminate\Http\Request;
use App\Models\title;
use App\Models\feacture;
use App\Models\file;
use App\Models\User;
use Auth;
use Illuminate\support\DB;

class GalleryController extends Controller
{
    public function gallery($file_id)
    {
        $file=file::with('title','title.feacture')->where('files_id','=',$file_id)->get();
        return  view('frontend.gallery', compact('file'));
        
     
      
    }
}
