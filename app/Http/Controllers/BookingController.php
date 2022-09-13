<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\file;
use App\Models\title;
use App\Models\feacture;
use App\Models\booking;
use DB;

class BookingController extends Controller
{
    
  public function add()
  {    
    return view('frontend.booking');
  }
  public function showbooking(Request $request)
  {  
 
    $request->validate( [
        'name' => 'required',
        'checkin'=>'required',
        'checkout'=>'required',
        'guest'=>'required',
        
    ]);
    
   
   $booking=new booking();
   $booking->files_id= $request['files_id'];
    $booking->name= $request['name'];
    $booking->checkin= $request['checkin'];
    $booking->checkout= $request['checkout'];
    $booking->guest= $request['guest'];
    $booking->save();
    
    return back()->with('success', 'Your Data has been successfully added');
  }

  public function index( Request $request)
  {    
    $search=$request['search']?? "";
    if($search !="")
    {
        $booking=booking::where('name','LIKE',"%$search%")->orwhere('email','LIKE',"%$search%")->get();
    }
    else
    {
        $booking=booking::all();
    }
    return view('frontend.bookinglist',compact('booking','search'));
  }
  public function allbooking($id)
  {    
  $booking=booking::find($id);
    return view('frontend.allbooking',compact('booking'));
  }
  public function editbooking($id)
  {   
    $booking=booking::find($id); 
    return view('frontend.editbooking',compact('booking'));
  }
  public function updatebooking( Request $request, $id)
  {   
   
    
    $booking=booking::find($id); 
    $booking->name= $request['name'];
    $booking->checkin= $request['checkin'];
    $booking->checkout= $request['checkout'];
    $booking->guest= $request['guest'];
    $booking->update();

    return back()->with('success', 'Data Update successfully');
  }
  public function deletebooking( Request $request, $id)
  {
  
    $booking=booking::find($id);
    if( $request->text1!='delete')
    {
        return back()->with('error', 'Not Deleted');
    }
    else
    {
      $booking=booking::where('id','=',$id)->delete();
        return back()->with('status', 'Data Deleted successfully');
    }
  }
}

