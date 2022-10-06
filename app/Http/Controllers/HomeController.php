<?php

namespace App\Http\Controllers;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Auth;
use App\Models\title;
use App\Models\User;
use App\Models\feacture;
use App\Models\file;
use App\Models\video;
use Illuminate\support\DB;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
    //    $this->middleware(['auth','verified']);
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
       
       
     
        if(Auth::check() && Auth::guard()->user()->user_type == 1)
        {
          
        $file=file::count();
        $user=user::where('user_type','0')->count();
        $admin=user::where('user_type','1')->count();
        
        return view('dashboard',compact('file','user','admin'));
        }
        else
        {  $title1=title::with('file','feacture')->where('city','=','Montgomery')->take(3)->get();
            $title2=title::with('file','feacture')->where('city','=','mathura')->take(3)->get();
            $video=video::where('status','=','1')->get();
           return view('frontend.index',compact('title1','title2','video'));
        }
        
    }

    public function home()
    {
        return view('frontend.index',compact('title'));
    }
}
