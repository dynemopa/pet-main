



@extends('layouts.app')

@section('content')

<a href="{{route('front_page')}}"> <button type="button" class="btn btn-success text-right">Add List</button></a>
<button type="button" onclick="window.print()" class="btn btn-success text-right">Print</button>
  <div class="header bg-primary pb-6">
    <div class="container-fluid">
      <div class="header-body">
        <div class="row align-items-center py-4">
          <div class="col-lg-6 col-7">
            <h6 class="h2 text-white d-inline-block mb-0">All List</h6>
          </div>

          <div class="col-lg-6 col-7">
      
          </div>
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
                    <th scope="col">title</th>
                    <th scope="col">Mobile Video</th>
                    <th scope="col">Background Video</th>
                    <th scope="col">Slider Image</th>
                    <th scope="col">Action</th>
                </tr>
              </thead>
              <tbody class="list">
                  
                        @foreach ( $all as $value)
                        @php 
                        $str3  = str_replace('"','',$value->images);
                        $str = explode(",",$str3);
                        @endphp
                   
                        <tr>
                            <td>{{$value->title}}</td>   
                            <td>
                              <video playsinline="playsinline"  style="width:100%;height: 50px;">
                                <source src="{{asset('uploads/students/'.$value->mobile_video)}}" type="video/mp4">
                              </video>
                            </td>
                            <td>
                              <video playsinline="playsinline"  style="width:100%;height: 50px;">
                                <source src="{{asset('uploads/students/'.$value->choose_video)}}" type="video/mp4">
                              </video>
                            </td>
                            <td>  <img src="{{asset('uploads/students/'.$str[0])}}" style="height:50px; width:70px"/></td>
                            
                            <td>
                             <?php
                                 if($value->status=='0')
                                 {
                              ?>
                                  <a href="{{url('showvideo/')}}/{{$value->id}}" class="text-white"> 
                                    <button class="btn btn-primary">See</button>
                                  </a>
                              <?php
                                 }
                                 else
                                 {
                                ?>
                                 <a href="#" class="text-white"> 
                                  <button class="btn btn-danger">Selected</button>
                                </a>
                                <?php
                                 }
                              ?>
                           
                            <a href="{{url('deletevideo/')}}/{{$value->id}}" class="text-white"> 
                                <button class="btn btn-primary"> Delete</button>
                             </a>
                            </td>
                        </tr>
                        @endforeach 
              </tbody>
            </table>
          </div>
         
@endsection
