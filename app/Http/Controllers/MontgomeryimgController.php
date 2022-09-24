<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\title;
use App\Models\feacture;
use App\Models\file;
use App\Models\User;
use Auth;
use Illuminate\support\DB;



class MontgomeryimgController extends Controller
{
    public function index($place,$slug)
    {
 
        $title1=title::with('file','feacture')->where('city','=',$place)->take(3)->get();
        $title=title::with('file','feacture')->where('slug','=',$slug)->get();
      
      
        // $file1 = file::with( ['title','title.feacture'])->wherehas('title.feacture',function ($query) use ($place)
        //    {
        //     $query->where('city','=',$place);
        //    })->take(3)->get();
        
        $userid = Auth::user();
        // $file = file::with( ['title','title.feacture'])->wherehas('title.feacture',function ($query) use ($slug)
        // {
        //  $query->where('slug','=',$slug);
        // })->get();
      
     return  view('frontend.montgomeryimg', compact('title1','userid','title','place'));
    }
}
