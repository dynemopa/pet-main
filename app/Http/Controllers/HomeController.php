<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Auth;
use App\Models\title;
use App\Models\User;
use App\Models\feacture;
use App\Models\file;
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
            return view('home');
        }
        else
        {
           return view('frontend.index');
        }
        
    }

    public function home()
    {
        return view('frontend.index');
    }
}
