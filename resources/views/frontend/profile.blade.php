@extends('layouts.app')

@section('content')
 {{-- <!doctype html>
 <html lang="en">
   <head>
     <title>Title</title>
     <!-- Required meta tags -->
     <meta charset="utf-8">
     <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
 
     <!-- Bootstrap CSS -->
    
     <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
     
   </head>
   <style>
    body {color: #000;overflow-x: hidden;height: 100%;background-image: url("https://i.imgur.com/GMmCQHC.png");background-repeat: no-repeat;background-size: 100% 100%}.card{padding: 30px 40px;margin-top: 60px;margin-bottom: 60px;border: none !important;box-shadow: 0 6px 12px 0 rgba(0,0,0,0.2)}.blue-text{color: #00BCD4}.form-control-label{margin-bottom: 0}input, textarea, button{padding: 8px 15px;border-radius: 5px !important;margin: 5px 0px;box-sizing: border-box;border: 1px solid #ccc;font-size: 18px !important;font-weight: 300}input:focus, textarea:focus{-moz-box-shadow: none !important;-webkit-box-shadow: none !important;box-shadow: none !important;border: 1px solid #00BCD4;outline-width: 0;font-weight: 400}.btn-block{text-transform: uppercase;font-size: 15px !important;font-weight: 400;height: 43px;cursor: pointer}.btn-block:hover{color: #fff !important}button:focus{-moz-box-shadow: none !important;-webkit-box-shadow: none !important;box-shadow: none !important;outline-width: 0}
    </style>
   <body>
    
    <div class="container-fluid px-1 py-5 mx-auto" id="k1" >
        <div class="row d-flex justify-content-center">
            <div class="col-xl-7 col-lg-8 col-md-9 col-11 text-center">
               
                <div class="card">
                    <h5 class="text-center mb-4">Registration Form</h5>
                    <form class="form-card" onsubmit="event.preventDefault()">
                        <div class="row justify-content-between text-left">
                            <div class="form-group col-sm-6 flex-column d-flex"> <label class="form-control-label px-3">name<span class="text-danger"> *</span></label> <input type="text" id="name" name="name" placeholder="Enter your name" value="{{$data->name}}" onblur="validate(1)"> </div>
                            <div class="form-group col-sm-6 flex-column d-flex"> <label class="form-control-label px-3"> email<span class="text-danger"> *</span></label> <input type="email" id="email" name="email" placeholder="" value="{{$data->email}}" onblur="validate(3)"> </div>
                            {{-- <div class="form-group col-sm-6 flex-column d-flex"> <label class="form-control-label px-3">Last name<span class="text-danger"> *</span></label> <input type="text" id="lname" name="lname" placeholder="Enter your last name" onblur="validate(2)"> </div> --}}
                        {{-- </div>
                        <div class="row justify-content-between text-left">
                            @foreach($data->metarelation as $datas)
                                <div class="form-group col-sm-6 flex-column d-flex"> 
                                    <label class="form-control-label px-3">{{$datas->key}}<span class="text-danger"> *</span></label> 
                                    <input type="text" id="{{$datas->key}}" name="{{$datas->key}}" placeholder="" value="{{$datas->value}}" onblur="validate(4)"> 
                                </div>
                            @endforeach
                        </div>
                       
                       
                       
                        <div class="row justify-content-end">
                         
                            <div class="form-group col-sm-12"> <button type="submit" class="btn-block btn-primary">submit</button> </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div> --}}
    
    <link href="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
    <script src="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
    <script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <style>
        body {
          font-family: "Lato", sans-serif;
        }
        
        .sidenav {
          height: 100%;
          width: 200px;
          position: fixed;
          z-index: 1;
          top: 0;
          left: 0;
          background-color: #111;
          overflow-x: hidden;
          padding-top: 20px;
        }
        
        .sidenav a {
          padding: 6px 6px 6px 32px;
          text-decoration: none;
          font-size: 25px;
          color: #818181;
          display: block;
        }
        
        .sidenav a:hover {
          color: #f1f1f1;
        }
        
        .main {
          margin-left: 200px; /* Same as the width of the sidenav */
        }
        
        @media screen and (max-height: 450px) {
          .sidenav {padding-top: 15px;}
          .sidenav a {font-size: 18px;}
        }
        </style>
    <!------ Include the above in your HEAD tag ---------->
    <div class="sidenav">
        <a href="{{url('/dashboard')}}">Dashboard</a> 
        <a href="{{url('/profile')}}">profile</a>
        <a href="{{url('/Favorites')}}">Favorites</a>
        <a href="{{url('/reservations')}}">Reservations</a> 
        <a href="{{url('/inbox')}}">My Inbox</a> 
        <a  href="{{ route('logout') }}"
        onclick="event.preventDefault();
                      document.getElementById('logout-form').submit();">
         {{ __('Logout') }}
      </a>
    </div>
   
        
      
        {{-- <div class="main">
                <div class="col-md-8 py-5 border">
                    <h4 class="pb-4">Please fill with your details</h4>
                    <form>
                        <div class="form-row">
                            <div class="form-group col-md-6">
                                <label>First Name</label>
                              <input id="First Name" name="first_name" placeholder="First Name" class="form-control" type="text"  value="{{$data->name}}">
                            </div>
                            <div class="form-group col-md-6">
                                  <label>Phone</label>
                              <input type="number" class="form-control" id="phone" placeholder="phone">
                            </div>
                          </div>
                        <div class="form-row">
                            <div class="form-group col-md-6">
                                 <label>Last Name</label>
                                <input id="last_name" name=" last_name" placeholder="Last Name" class="form-control" required="required" type="text">
                            </div>
                            <div class="form-group col-md-6">
                                  <label>Mobile</label>
                              <input type="number" class="form-control" id="phone" name="mobile" placeholder="Mobile" required="required">
                            </div>
                        </div>
                        <div class="form-row">
                            <div class="form-group col-md-6">
                                 <label>Email</label>
                                <input id="email" name="email" placeholder="Email" class="form-control" required="required" type="email"  value="{{$data->email}}">
                            </div>
                            <div class="form-group col-md-6">
                                  <label>Website</label>
                              <input type="text" class="form-control" id="website" name="website" placeholder="Website" required="required">
                            </div>
                        </div>
                        <div class="form-row">
                            <div class="form-group col-md-6">
                                 <label>About Me</label>
                               
                                 <textarea id="about_me" name="about_me" rows="1" cols="50"  class="form-control" required="required" type="text"></textarea>
                            </div>
                            <div class="form-group col-md-6">
                                  <label>Skype</label>
                              <input type="text" class="form-control" id="skype" name="skype" placeholder="" required="required">
                            </div>
                        </div>
                        <div class="form-row">
                            <div class="form-group col-md-6">
                                <label>I Live in</label>
                                <input id="live" name="live"   class="form-control" required="required" type="text">
                            </div>
                            <div class="form-group col-md-6">
                                  <label>Facebook URL</label>
                              <input type="text" class="form-control" id="facebook_url" name="facebook_url" required="required">
                            </div>
                        </div>
                        <div class="form-row">
                            <div class="form-group col-md-6">
                                <label>I speak</label>
                                <input id="speak" name="speak"   class="form-control" required="required" type="text">
                            </div>
                            <div class="form-group col-md-6">
                                  <label>Twitter URL</label>
                              <input type="text" class="form-control" id="twitter_url" name="twitter_url" required="required">
                            </div>
                        </div>
                        <div class="form-row">
                            <div class="form-group col-md-6">
                                <label>Payment Info</label>
                                <textarea id="payment_info" name="payment_info"rows="1" cols="50"   class="form-control" required="required" type="text"></textarea>
    
                            </div>
                            <div class="form-group col-md-6">
                                  <label>Linkendin URL</label>
                              <input type="text" class="form-control" id="linkendin_url" name="linkendin_url" required="required">
                            </div>
                        </div>
                         <div class="form-row">
                            <div class="form-group col-md-6">
                                <label>Email for receiving Paypal Payments</label>
                                <input id="email_receving" name="email_receving"   class="form-control" required="required" type="email">
                            </div>
                            <div class="form-group col-md-6">
                                  <label>Pinterest Url</label>
                              <input type="text" class="form-control" id="pinterest_url" name="pinterest_url" required="required">
                            </div>
                        </div>
                        <div class="form-row">
                            <div class="form-group col-md-6">
                                <label>Instagram Url</label>
                                <input id="instagram_url" name="instagram_url"   class="form-control" required="required" type="text">
                            </div>
                            <div class="form-group col-md-6">
                                  <label>YouTube Url</label>
                              <input type="text" class="form-control" id="youtube_url" name="youtube_url" required="required">
                            </div>
                        </div> --}}

                        <form action="{{ route('update-profile') }}" method="get">

                        <div class="main" style=" padding-left:30px">
                            <div class="row justify-content-between text-left">
                                @foreach($data->metarelation as $datas)
                                    <div class="form-group col-sm-6 flex-column d-flex"> 
                                        <label class="form-control-label px-3">{{$datas->key}}<span class="text-danger"> *</span></label> 
                                        <input type="text" id="{{$datas->key}}" name="{{$datas->key}}" placeholder="" value="{{$datas->value}}" onblur="validate(4)"> 
                                    </div>
                                @endforeach
                            </div>
                        
                            
                        
                            <a href="{{url('delete/')}}"><button type="button" class="btn btn-danger">Delete Account</button></a>
                            <button type="submit" class="btn btn-success">Update profile</button>
                            </div>
                        </form>
                      
                    {{-- </form>
                </div>
        </div> --}}
            
    

    

        
       
     <!-- Optional JavaScript -->
     <!-- jQuery first, then Popper.js, then Bootstrap JS -->
     {{-- <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
     <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
     <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
   </body>
 </html> --}}
@endsection