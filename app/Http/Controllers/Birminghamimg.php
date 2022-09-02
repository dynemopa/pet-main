<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Auth;
use App\Models\title;
use App\Models\feacture;
use App\Models\file;
use Illuminate\support\DB;

class Birminghamimg extends Controller
{
    public function index($files_id,$title)
    {
       
        //  $file = file::with( ['title','title.feacture'])->wherehas('title.feacture',function ($query) use ($title)
        //    {
        //     $query->where('title','=',$title);
        //    })->get();
        //    dd(file);

        // $file1 = file::with( ['title','title.feacture'])->take(3)->get();
        $file1 = file::with( ['title','title.feacture'])->wherehas('title.feacture',function ($query)
           {
            $query->where('address','=','Birmingham');
           })->take(3)->get();
          
        $userid = Auth::user();
        $file=file::with('title','title.feacture')->where('files_id','=',$files_id)->get();
     return  view('frontend.Birminghamimg', compact('file','userid','file1'));
    }
}
