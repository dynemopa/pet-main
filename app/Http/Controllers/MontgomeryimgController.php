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
    public function index($place,$files_id,$title)
    {
       
      
        //  $file = file::with( ['title','title.feacture'])->wherehas('title.feacture',function ($query) use ($title)
        //    {
        //     $query->where('title','=',$title);
        //    })->get();
        //    dd(file);

        // $file1 = file::with( ['title','title.feacture'])->take(3)->get();
        $file1 = file::with( ['title','title.feacture'])->wherehas('title.feacture',function ($query) use ($place)
           {
            $query->where('address','=',$place);
           })->take(3)->get();
          
        $userid = Auth::user();
        $file=file::with('title','title.feacture')->where('files_id','=',$files_id)->get();
     return  view('frontend.montgomeryimg', compact('file','userid','file1','place'));
    }
}
