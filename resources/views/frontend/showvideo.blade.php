@extends('layouts.app')

@section('content')

@foreach($all as $value)
@php 

    $str3  = str_replace('"','',$value->images);
    $str = explode(",",$str3);

@endphp
<a href="{{route('page')}}"> <button type="button" class="btn btn-success text-right">Back</button></a>
<div class="container p-5">
    <div class="col-md-12">
        <div class="row">
            <div class="col-md-5" >
                <h3 style="color: rgb(223, 149, 39)">Mobile Video</h3>
                <div style="border:2px solid black">
                    <video playsinline="playsinline" autoplay="autoplay" muted="muted" loop="loop" style="width:100%;height: 231px;">
                        <source src="{{asset('uploads/students/'.$value->mobile_video)}}" type="video/mp4">
                    </video>
                </div>
            </div>
            <div class="col-md-2"></div>
            <div class="col-md-5" >
                <h3 style="color: rgb(223, 149, 39)"> Background video</h3>
                <div style="border:2px solid black">
                    <video playsinline="playsinline" autoplay="autoplay" muted="muted" loop="loop" style="width:100%;height: 231px;">
                        <source src="{{asset('uploads/students/'.$value->choose_video)}}" type="video/mp4">
                    </video>
            </div>
            </div>
        </div>
        
       
    </div>
    <h2 style="margin-top: 51px;margin-left:427px; color:red">Slider Image</h2>
    <div class="row" style="margin-top: 20px;margin-left: 186px;">
        @for ($x = 0; $x < count($str); $x++)
        <img src="{{asset('uploads/students/'.$str[$x])}}" style="height:100px; width:100px"/>
        @endfor
       </div>
       <div style="margin-top: 20px;margin-left:42%"><a href="{{url('show_front/')}}/{{$value->id}}"><button class="btn btn-primary">Show in index page</button></a></div>
</div>

@endforeach
@endsection