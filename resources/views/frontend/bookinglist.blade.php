



@extends('layouts.app')

@section('content')

{{-- <a href="{{route('bookingadd')}}"> <button type="button" class="btn btn-success text-right">Add Booking</button></a> --}}
  <div class="header bg-primary pb-6">
    <div class="container-fluid">
      <div class="header-body">
        <div class="row align-items-center py-4">
          <div class="col-lg-6 col-7">
            <h6 class="h2 text-white d-inline-block mb-0">Booking Information</h6>
          </div>
          <form action="" method="get" class="col-9 ">
            <div class="form-group">
              <div class="col-md-12">
                <div class="row">
                  <div class="col-md-8">
                    <input type="search" name="search" id="search" class="form-control" value="{{$search}}" placeholder="Enter Guest" >
                  </div>
                  <div class="col-md-4">
                    <button class="btn btn-primary">Search</button>
                    <a  href="{{url('booking/')}}">
                    <button class="btn btn-primary" type="button">Reset</button>
                    </a>
                  </div>
                </div>
              </div>
             </div>
          </form>
        </div>
      </div>
    </div>
  </div>
  <div class="container-fluid mt--6">
    <div class="row">
      <div class="col">
        <div class="card bg-default shadow">
          <div class="card-header bg-transparent border-0">
            @if (session('status'))
            <div class="alert alert-success">
                {{ session('status') }}
            </div>
        @endif
        @if (session('error'))
        <div class="alert alert-danger">
            {{ session('error') }}
        </div>
    @endif
  

   
          <div class="table-responsive">
            <table class="table align-items-center table-dark table-flush">
              <thead class="thead-dark">
                <tr>
                  
                    <th scope="col">Check-In</th>
                    <th scope="col">Check-Out</th>
                    <th scope="col">Guest</th>
                    <th scope="col">Action</th>
        
                </tr>
              </thead>
              @foreach ( $booking as $value)
            
              <tbody class="list">
               
                <td>{{$value->checkin}}</td>
                <td>{{$value->checkout}}</td>
                <td>{{$value->guest}}</td>
                <td>
              
                  <a href="{{url('allbooking/')}}/{{$value->id}}" class="text-white"> 
                    <span class="mr-2"><i class="fa fa-eye" aria-hidden="true"></i></span>
                  </a>

                    <a href="{{url('editbooking/')}}/{{$value->id}}"   class="text-white"> 
                      <span class="mr-2"><i class="fa fa-edit" title="View User"></i></span>
                    </a>

                    <a data-toggle="modal" data-target="#exampleModal{{$value->id}}" > <span class="mr-2"><i class="fa fa-trash" aria-hidden="true"></i></span> </a>
                            <div class="modal fade" id="exampleModal{{$value->id}}" tabindex="-1" role="dialog"  aria-hidden="true">

                              <form  action="{{url('/deletebooking/')}}/{{$value->id}}"  method="get">
                               
                                {{ csrf_field() }}
                                <div class="modal-dialog" role="document">
                                  <div class="modal-content">
                                    <div class="modal-header">
                                      <h5 class="modal-title" id="exampleModalLabel">Delete Validation Box</h5>
                                      <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                        <span aria-hidden="true">&times;</span>
                                      </button>
                                    </div>
                                    <div class="modal-body">
                                     
                                      <label for="delete">Please Enter Validation Code</label>
                                      <input type='text' class="form-control"  class="form-control" name='text1' id="text1"  autocomplete="off"/>
                                    </div>
                                    <div class="modal-footer">
                                      <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                                      <button type="submit" class="btn btn-primary" id="submit" name="submit">Delete</button>
                                      
                                    </div>
                                  </div>
                                </div>
                              </div>
                            </form>


                    
            </td>
               
              </tbody>
  
              @endforeach
   
@endsection







