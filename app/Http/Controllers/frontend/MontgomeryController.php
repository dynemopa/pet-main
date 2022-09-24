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

            $title=title::with(['file','feacture','booking'])
            ->when($checkin, function($query) use($checkin){
                $query->whereHas('booking', function($query) use($checkin) {
                    $query->where('checkin', '=',$checkin);
                });
            })
            ->when($guest, function($query) use($guest){
                $query->whereHas('booking', function($query) use($guest) {
                    $query->where('guest', '=',$guest);
                });
            })->when($checkout, function($query) use($checkout){
                $query->whereHas('booking', function($query) use($checkout) {
                    $query->where('checkout', '=',$checkout);
                });
            })->when($bedrooms, function($query) use($bedrooms){
                $query->whereHas('feacture', function($query) use($bedrooms) {
                    $query->where('bedrooms', '=',$bedrooms);
                });
            })->when($bathrooms, function($query) use($bathrooms){
                $query->whereHas('feacture', function($query) use($bathrooms) {
                    $query->where('bathrooms', '=',$bathrooms);
                });
            })->when($room, function($query) use($room){
                $query->whereHas('feacture', function($query) use($room) {
                    $query->where('room', '=',$room);
                });
            })->where('city','=',$place)->get();
           
        }
        return view('frontend.montgomery',compact('title','place'));
    }
}
