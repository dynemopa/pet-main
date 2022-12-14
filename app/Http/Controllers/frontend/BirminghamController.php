<?php

namespace App\Http\Controllers\frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\title;
use App\Models\feacture;
use App\Models\file;
use Illuminate\support\DB;

class BirminghamController extends Controller
{
    public function index(Request $request)
    {
       
        if($request!="")
        {
            $bedrooms=$request['bedrooms']?? "";
            $bathrooms=$request['bathrooms']?? "";
            $room=$request['room']?? "";
            $price_per_night=$request['price_per_night']?? "";
           
           // search by all
            if($bedrooms !="" && $bathrooms !="" && $room!="")
            {
                $file = file::with( ['title','title.feacture'])->wherehas('title.feacture',function ($query) use ($bathrooms,$bedrooms,$room)
                { 
                    if($bedrooms !="")
                    {
                        $query->where('bathrooms','=',$bathrooms); 
                        $query->where('address','=','Birmingham');
                    }
                    if($bathrooms !="")
                    {
                        $query->where('bedrooms','=',$bedrooms);
                        $query->where('address','=','Birmingham');
                    }
                    if($room!="")
                    {
                        $query->where('room','=',$room);
                        $query->where('address','=','Birmingham');
                    }
                     })->get();
          
                 return view('frontend.birmingham',compact('file'));
            }
            if( $bathrooms !="" && $room!="")
            {
                $file = file::with( ['title','title.feacture'])->wherehas('title.feacture',function ($query) use ($bathrooms,$room)
                {
                        $query->where('bathrooms','=',$bathrooms);
                        $query->where('room','=',$room);
                        $query->where('address','=','Birmingham');
                 })->get();
          
                 return view('frontend.birmingham',compact('file'));
            }
            if( $bedrooms !="" && $room!="")
            {
                $file = file::with( ['title','title.feacture'])->wherehas('title.feacture',function ($query) use ($bedrooms,$room)
                {
                        $query->where('bedrooms','=',$bedrooms);
                        $query->where('room','=',$room);
                        $query->where('address','=','Birmingham');
                 })->get();
          
                 return view('frontend.birmingham',compact('file'));
            } 
            if($bedrooms !="" && $bathrooms !="")
            {
                $file = file::with( ['title','title.feacture'])->wherehas('title.feacture',function ($query) use ($bathrooms,$bedrooms)
                {
                        $query->where('bathrooms','=',$bathrooms);
                        $query->where('bedrooms','=',$bedrooms);
                        $query->where('address','=','Birmingham');
                   
                 })->get();
          
                 return view('frontend.birmingham',compact('file'));
            }
            // search by bedrooms
            if($bedrooms !="")
            {
               
                $file = file::with( ['title','title.feacture'])->wherehas('title.feacture',function ($query) use ($bedrooms)
                {
                    $query->where('bedrooms','=',$bedrooms);
                    $query->where('address','=','Birmingham');
                })->get();
                return view('frontend.birmingham',compact('file'));
           
            }
              // search by bathrooms
            if($bathrooms !="")
            {
                $file = file::with( ['title','title.feacture'])->wherehas('title.feacture',function ($query) use ($bathrooms)
                {
                        $query->where('bathrooms','=',$bathrooms);
                        $query->where('address','=','Birmingham');
                       
                 })->get();
            return view('frontend.birmingham',compact('file'));
                 
            }
             // search by rooms
            if($room !="")
            {
                $file = file::with( ['title','title.feacture'])->wherehas('title.feacture',function ($query) use ($room)
                {
                        $query->where('room','=',$room);
                        $query->where('address','=','Birmingham');
                 })->get();
            return view('frontend.birmingham',compact('file'));
                 
            }
             // search by price
            if($price_per_night !="")
            {
                $file = file::with( ['title','title.feacture'])->wherehas('title.feacture',function ($query) use ($price_per_night)
                {
                        $query->where('price_per_night','=',$price_per_night);
                        $query->where('address','=','Birmingham');
                 })->get();
            return view('frontend.birmingham',compact('file'));
                 
            }
            else
            {
                // $file=file::with(['title','title.feacture'])->get(); 
                // return view('frontend.montgomery',compact('file'));
                $file = file::with( ['title','title.feacture'])->wherehas('title.feacture',function ($query)
                {
                 $query->where('address','=','Birmingham');
                })->get();
                     return view('frontend.birmingham',compact('file'));
            }
        }
       
        // $bedrooms=$request['bedrooms']?? "";
        // $bathrooms=$request['bathrooms']?? "";
        // if($bedrooms !=" ")
        // {
        //    $file = file::with( ['title','title.feacture'])->wherehas('title.feacture',function ($query) use ($bedrooms)
        //    {
        //     $query->where('bedrooms','=',$bedrooms);
        //    })->get();
        // }

        // else
        // { 
        //     $file=file::with(['title','title.feacture'])->get(); 
        // }
       
      
     
    }
}
