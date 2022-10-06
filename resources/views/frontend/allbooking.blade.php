@extends('layouts.app')

@section('content')
@foreach($booking as $value)
<a href="{{route('booking')}}"> <button type="button" class="btn btn-success text-right">Back</button></a>
    <div class="form-group">
      <label for="exampleInputEmail1">Name</label>
      <input class="form-control" type="text"  value="{{$value->name}}" readonly> 
    </div>
    <div class="form-group">
      <label for="exampleInputPassword1">Check In</label>
      <input class="form-control"  type="date" value="{{$value->checkin}}" readonly> 
    </div>
    <div class="form-group">
        <label for="exampleInputPassword1">Check Out</label>
        <input class="form-control"  type="date"  value="{{$value->checkout}}" readonly> 
    </div>
    <div class="form-group">
        <label for="exampleInputPassword1">Guests</label>
        <input class="form-control" type="text"  value="{{$value->guest}}" readonly> 
    </div>
    {{-- <div class="form-group">
      <label for="exampleInputPassword1">address</label>
      <input class="form-control" type="text"  value="{{$booking->guest}}" readonly> 
  </div> --}}
  @endforeach
@endsection