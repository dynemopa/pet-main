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
    public function gallery($id)
    {
     
        $title=title::with('file','feacture')->where('id','=',$id)->get();
        return  view('frontend.gallery', compact('title'));
        
     
      
    }
}
