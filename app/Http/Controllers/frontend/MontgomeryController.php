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
           
            // $file = file::with( ['title','booking','title.feacture'])->orWhereHas('title.feacture',function ($query) use ($bathrooms,$bedrooms,$room, $city,$checkin,$checkout,$place)
            //     { 
            //         if($bedrooms !="")
            //         {
            //             $query->where('city','=',$place);
            //             $query->where('bedrooms','=',$bedrooms); 
            //         }
            //         if($bathrooms !="")
            //         {
            //             $query->where('city','=',$place);
            //             $query->where('bathrooms','=',$bathrooms);
            //         }
            //         if($room!="")
            //         {
            //             $query->where('city','=',$place);
            //             $query->where('room','=',$room);
            //         }
            //         else
            //         {
            //             $query->where('city','=',$place); 
            //         }
            //     })->orWhereHas('booking',function ($query1) use ( $city,$checkin,$checkout)
            //     {
            //         if($checkin!="")
            //         {
            //              $query1->where('checkin','=',$checkin);
            //         }
            //         if($checkout!="")
            //         {
            //           $query1->where('checkout','=',$checkout);
            //         }
            //     })->get();
            $file = file::with('title','booking','title.feacture')
            ->orWhereHas('booking', function($q) use ($checkin){
                if($checkin !="")
                {
                 $q->where('checkin','=',$checkin);
                }
               
            })
            ->orWhereHas('title.feacture', function($q) use ($bathrooms ,$place){
                if($bathrooms !="")
                 {
                    $q->where('city','=',$place && 'bathrooms','=',$bathrooms);
                 }
                 else
                 {
                    $q->where('city','=',$place);
                 }
                })->get();
           
                 return view('frontend.montgomery',compact('file','place'));
        }  
    }
}
