<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Auth;


class ShowProfileController extends Controller
{
   
    public function showprofile(Request $request)
    {
        
         $userid = Auth::user()->id;
         $all = user::find($userid);
         $all->getMetas();
       
         return view('frontend.showprofile',['data'=>$all]);
    }
    public function update(Request $request)
    {
      
        $user = Auth::user()->id;
        $all = User::find($user);
  
       
        $all->name = $request->name;
        $all->email =  $request->email;
        // $all->image =  $request->image;
       
        if($request->hasfile('image'))
        {
            $file= $request->file('image');
            $extention=$file->getClientOriginalExtension();
            $filename=time().'.'.$extention;
            $file->move('uploads/students/', $filename);
            $all->image=$filename;
        }
     
        $all->save();
        return redirect()->back()->with('status','recorded insert successfully');

    
        // public function update(Request $request,$id)
        // {
        //  $student=student::find($id);
        //  $student->name=$request->input('name');
        //  $student->email=$request->input('email');
        //  if($request->hasfile('profile_image'))
        //  {
        //      $file= $request->file('profile_image');
        //      $extention=$file->getClientOriginalExtension();
        //      $filename=time().'.'.$extention;
        //      $file->move('uploads/students/', $filename);
        //      $student->profile_image=$filename;
        //  }
        //  $student->update();
        //  return redirect()->back()->with('status','recorded Update successfully');
        // }
 }
}
