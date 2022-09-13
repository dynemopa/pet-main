@extends('layouts.app')

@section('content')

    <div class="form-group">
      <label for="exampleInputEmail1">Name</label>
      <input class="form-control" type="text"  value="{{$booking->name}}" readonly> 
    </div>
    <div class="form-group">
      <label for="exampleInputPassword1">Check In</label>
      <input class="form-control"  type="date" value="{{$booking->checkin}}" readonly> 
    </div>
    <div class="form-group">
        <label for="exampleInputPassword1">Check Out</label>
        <input class="form-control"  type="date"  value="{{$booking->checkout}}" readonly> 
    </div>
    <div class="form-group">
        <label for="exampleInputPassword1">Guests</label>
        <input class="form-control" type="text"  value="{{$booking->guest}}" readonly> 
    </div>
@endsection