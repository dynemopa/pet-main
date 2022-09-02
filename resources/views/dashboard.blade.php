@extends('layouts.app')

@section('content')

<div class="container-fluid">
    <div class="row" style="margin-right: 40px;margin-left: -44px;">
        <div class=" col-md-4">
            <div class="card bg-primary" style="width:400px;">
                <div class="card-body bg-danger text-white m-4 ">
                <h4 class="card-title">Totel Admin</h4>
                <h1 class="card-text text-white">{{$admin}}</h1>
                <a href="{{url('/list/')}}" class="btn btn-primary">See All</a>
                </div>
            </div>
        </div>

        <div class=" col-md-4">
            <div class="card bg-primary" style="width:400px;">
                <div class="card-body bg-info text-white  m-4" >
                <h4 class="card-title">Totel Data</h4>
                <h1 class="card-text text-white">{{$file}}</h1>
                <a href="{{url('/showlisting/')}}" class="btn btn-primary">See All</a>
                </div>
            </div>
        </div>
        <div class=" col-md-4">
            <div class="card bg-primary" style="width:400px;">
                <div class="card-body bg-info text-white  m-4" >
                <h4 class="card-title">Totel User</h4>
                <h1 class="card-text text-white">{{$user}}</h1>
                <a href="{{url('/list/')}}" class="btn btn-primary">See All</a>
                </div>
            </div>
        </div>


       
    </div>
</div>






@endsection
