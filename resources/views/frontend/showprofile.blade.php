@extends('layouts.app')

@section('content')
<form action="{{ route('update') }}" method="post" enctype="multipart/form-data">
    @csrf
<div class="container">
    <div class="col-md-12">
        <div class="row">
            <div col-md-4></div>
            <div col-md-8>
              
                    <!-- Email input -->
                    <div class="form-outline mb-4">
                      <input type="text" name="name" id="name" class="form-control" value="{{$data->name}}" />
                      <label class="form-label" for="form2Example1">Name</label>
                    </div>
                  
                    <!-- Password input -->
                    <div class="form-outline mb-4">
                      <input type="email" name="email" id="email" class="form-control" value="{{$data->email}}" />
                      <label class="form-label" for="form2Example2">Email</label>
                    </div>
                   
                    <div class="form-outline mb-4">
                        <input type="file" name="image" id="image" class="form-control"  />
                        <label class="form-label" for="image">Image</label>
                    </div>
                    <tr>
                       
                       <td>
                        <h1>Old Image</h1>
                        <img src="{{asset('uploads/students/'.$data->image)}}" width="70px" height="70px">
                       </td>
                      
                    </tr>
                      
                    
                  
                    <!-- 2 column grid layout for inline styling -->
                    
                  
                    <!-- Submit button -->
                    <button type="submit" class="btn btn-primary btn-block mb-4">Update Profile</button>
                  
                    <!-- Register buttons -->
                    
                  
                      
                  
                  
                      
                    </div>
                
            </div>

        </div>
    </div>
</div>
</form>
{{-- <form action="{{ route('update-profile') }}" method="get">

    <div class="main" style=" padding-left:30px">
        <div class="row justify-content-between text-left">
            @foreach($data->metarelation as $datas)
                <div class="form-group col-sm-6 flex-column d-flex"> 
                    <label class="form-control-label px-3">{{$datas->key}}<span class="text-danger"> *</span></label> 
                    <input type="text" id="{{$datas->key}}" name="{{$datas->key}}" placeholder="" value="{{$datas->value}}" onblur="validate(4)"> 
                </div>
            @endforeach
        </div>
    
        
    
        {{-- <a href="{{url('delete/')}}"><button type="button" class="btn btn-danger">Delete Account</button></a> --}}
        <button type="submit" class="btn btn-success">Update profile</button>
        </div>
    </form> --}}
  


@endsection