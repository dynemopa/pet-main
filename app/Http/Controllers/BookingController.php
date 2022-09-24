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
        'checkin'=>'required|after_or_equal:today',
        'checkout'=>'required|after_or_equal:today',
        'guest'=>'required',
        
    ]);
   
 
   
   $booking=new booking();
    $booking->title_id= $request['title_id'];
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
       //$booking=file::with(['title','title.feacture','booking'])->get();
       //dd( $booking);
      //  $booking=file::with( ['title','title.feacture','booking'])->wherehas('title.feacture',function ($query) 
      //  {
      //   $query->where('','=','12');
      //  })->get();

         $booking=booking::with('files.title.feacture')->get();
        
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

