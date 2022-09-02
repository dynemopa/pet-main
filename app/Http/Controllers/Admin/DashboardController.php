<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\title;
use App\Models\feacture;
use App\Models\file;
use App\Models\User;
use Illuminate\support\DB;
class DashboardController extends Controller
{
    public function dashboard()
    {
        $file=file::count();
        $user=user::where('user_type','0')->count();
        $admin=user::where('user_type','1')->count();
        
        return view('dashboard',compact('file','user','admin'));
    }
}
