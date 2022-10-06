<?php

namespace App\Http\Controllers\frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\title;
use App\Models\feacture;
use App\Models\file;
use Illuminate\support\DB;

class HomeController extends Controller
{
   public function index()
   {
      
      $file1 = file::with( ['title','title.feacture'])->wherehas('title.feacture',function ($query) use ($place)
      {
       $query->where('address','=',$place);
      })->take(3)->get();
      
    return  view('frontend.index');
   }
}
