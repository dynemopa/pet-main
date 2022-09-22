<?php

namespace App\Http\Controllers\frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\title;
use App\Models\feacture;
use App\Models\file;
use DB;

class MontgomeryController extends Controller
{
    public function index(Request $request,$place)
    {
        if($request!="")
        {
            $city=$request['city']?? "";
            $checkin =($request->checkin)?\Carbon\Carbon::createFromFormat('m/d/Y',$request->checkin)->format('Y-m-d'): ""; 
            $checkout=($request->checkout)?\Carbon\Carbon::createFromFormat('m/d/Y',$request->checkout)->format('Y-m-d'):'';
            $guest=$request['guest']?? "";
            $bedrooms=$request['bedrooms']?? "";
            $bathrooms=$request['bathrooms']?? "";
            $room=$request['room']?? "";

            $file = file::with( ['title','title.feacture.booking'])->wherehas('title.feacture',function ($query) use($place,$bedrooms,$bathrooms)
            {
                
                $query->where('city','=',$place);
            })->get();
        }
      
        return view('frontend.montgomery',compact('file','place'));
    }
}
