<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Paymentcontroller extends Controller
{
  public function payment()
    {
        return view('frontend.payment');
    }
    public function pay(Request $request)
    {
        dd($request);
        return view('frontend.payment');
    }
  
}
