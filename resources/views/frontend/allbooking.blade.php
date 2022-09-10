@extends('layouts.app')

@section('content')

<div id="booking" class="section">
     <div class="section-center"> 
        <div class="container"> 
            <div class="row"> 
                <div class="booking-form">
                     <div class="form-header"> 
                        <h1>Booking</h1>
                     </div>
                         <div class="form-group">
                             <input class="form-control" type="text"  value="{{$booking->name}}" readonly> 
                             </div> 
                             <div class="row"> 
                                <div class="col-md-6"> 
                                    <div class="form-group"> 
                                        <input class="form-control"  type="date" value="{{$booking->checkin}}" readonly> 
                                        <span class="form-label">Check In</span> 
                                    </div> </div> <div class="col-md-6"> 
                                        <div class="form-group">
                                             <input class="form-control"  type="date"  value="{{$booking->checkout}}" readonly> 
                                             <span class="form-label">Check out</span> 
                                            </div>
                                         </div>
                                         </div>
                                          <div class="row"> 
                                            <div class="col-md-4">
                                                 <div class="form-group"> 
                                                    
                                                    <input class="form-control" type="text"  value="{{$booking->rooms}}" readonly> 
                                                        
                                                         </div> 
                                                        </div> 
                                                        <div class="col-md-4">
                                                             <div class="form-group">
                                                                <input class="form-control" type="text"  value="{{$booking->guest}}" readonly> 
                                                                    
                                                                     </div>
                                                                     </div> 
                                                                                 </div>
                                                                                  <div class="row">
                                                                                     <div class="col-md-6">
                                                                                         <div class="form-group"> 
                                                                                            <input class="form-control" type="email" value="{{$booking->email}}" readonly> 
                                                                                            <span class="form-label">Email</span>
                                                                                         </div>
                                                                                         </div>
                                                                                          <div class="col-md-6">
                                                                                             <div class="form-group">
                                                                                                 <input class="form-control" type="tel"  value="{{$booking->phone}}" readonly>
                                                                                                 <span class="form-label">Phone</span> 
                                                                                                </div> 
                                                                                            </div> 
                                                                                        </div>
                                                                                        
                                                                                        </form> 
                                                                                    </div>
                                                                                 </div> 
                                                                                </div> 
                                                                             </div>
</div>

@endsection