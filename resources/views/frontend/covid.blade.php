@extends('frontend.layout.main')
@section('content')
<div class="container-fluid" style=" margin-top:140px;margin-bottom: 65px;">

    <div class="col-md-12">
        <div class="row">
            <div class="col-md-4">
                <h3>Category Archives: covid</h3>
                <div class="card" style="width: 25rem;">
                    <img class="card-img-top" src="https://mb5.bfe.myftpupload.com/wp-content/uploads/2022/07/hero-longtermlease-400x242.webp" alt="Card image cap">
                    <div class="card-body">
                      <h5 class="card-title">How we’ve increased cleaning...</h5>
                      <p class="card-text">At Dwella, we know that now more than ever, a clean and safe place to stay is a top concern. Your health and well-being are ...</p>
                     
                    </div>
                  </div>
            </div>
            <div class="col-md-4">
                
            </div>
            <div class="col-md-4">
                <div style="  padding: 26px; background-color: #eaece3; margin-top:10px">
                    <p>Login</p>
                    @if (Auth::check())
                    <div class="col-md-12">
                        <input type="text" placeholder="Username" name="username" id="username" value="{{$userid->name}}">
                    </div>
                    <div class="col-md-12">
                        <input type="password" placeholder="Password" name="password" id="password"value="{{$userid->password}}">
                    </div>
                    @else
                    <div class="col-md-12">
                        <input class="from-control"   type="text" placeholder="Username"  autocomplete="off" >
                    </div>
                    <div class="col-md-12">
                        <input class="from-control"   type="text" placeholder="password"  autocomplete="off" >
                    </div>
                    @endif
                    <div class="col-md-12">
                        <button type="button" class="btn btn-primary" style="width: 100%">Login</button>
                    </div>
                    <p style="color: black; font-size:15px"><a href="{{ route('register') }}">Don't have an account?</a> |<a href="{{ route('password.request') }}">Forgot Password?</a></p>
                </div>
            </div>
        </div>
    </div>

</div>
@endsection