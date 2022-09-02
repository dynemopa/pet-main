<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Auth;

class ProfilerController extends Controller
{
   public function showuser(Request $request)
   {
        $userid = Auth::user()->id;
        $all = user::find($userid);
        $all->getMetas();
        //dd($all);
        return view('frontend.profile',['data'=>$all]);
   }
   public function  delete()
    {
       $userid = Auth::user()->id;
        $user=user::where('id','=',$userid)->delete();
        return view('/frontend/index');
    }
    public function update(Request $request)
    {
      $userid = Auth::user();

      //dd($request->Mobile);

      $userid->updateMeta([
         'Mobile' =>$request->Mobile,
         'Address' =>$request->Address,
         'website' =>$request->website,
         'about_me' =>$request->about_me,
         'skype' =>$request->skype,
         'live' =>$request->live,
         'facebook_url' =>$request->facebook_url,
         'twitter_url' =>$request->twitter_url,
         'payment_info' =>$request->payment_info,
         'linkendin_url' =>$request->linkendin_url,
         'email_receving' =>$request->email_receving,
         'pinterest_url' =>$request->pinterest_url,
         'instagram_url' =>$request->instagram_url,
         'youtube_url' =>$request->youtube_url,
      ]);

         
         return view('/frontend/index')->with('status',"Data Update Successfully");

    }
   
   
}
