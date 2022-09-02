@extends('layouts.app')

@section('content')
<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
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
</head>
<body>

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

<div class="main">
 
    <div class="container">
        <div class="form-group">
            <label for="exampleFormControlTextarea1"> </label>
            <textarea class="form-control" id="exampleFormControlTextarea1" rows="5"></textarea>
          </div>
          <div class="form-group">
            <label for="exampleFormControlTextarea1"> </label>
            <textarea class="form-control" id="exampleFormControlTextarea1" rows="5"></textarea>
          </div>
        </div>
</div>
   
</body>
</html> 



@endsection