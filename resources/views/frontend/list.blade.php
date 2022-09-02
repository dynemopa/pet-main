@extends('layouts.app')

@section('content')
  <div class="header bg-primary pb-6">
    <div class="container-fluid">
      <div class="header-body">
        <div class="row align-items-center py-4">
          <div class="col-lg-6 col-7">
            <h6 class="h2 text-white d-inline-block mb-0">Template Information</h6>
          </div>
          <form action="" method="get" class="col-9 ">
            <div class="form-group">
              <div class="col-md-12">
                <div class="row">
                  <div class="col-md-8">
                    <input type="search" name="search" id="search" class="form-control" placeholder="Enter Name And Email For Search" value="{{$search}}">
                  </div>
                  <div class="col-md-2"> <button class="btn btn-primary">Search</button></div>
                  <div class="col-md-2"> <a  href="{{url('list/')}}"
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
  <div>

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
              <thead style="background-color: #edb2b2">
                <tr>
                  <th>@sortablelink('name')
                  </th>
                  <th>@sortablelink('email') 
                  </th>
                  <th>Action</th>
                </tr>
              </thead>
               
              <tbody class="list">
                  
                  @foreach ( $user as $value)
                      <tr>
                        
                        <td>{{$value->name}}</td>
                        <td>{{$value->email}}</td>
                        <td>
                            <a href="{{url('edit/')}}/{{$value->id}}"  class="text-white">
                            <span class="mr-2"><i class="fa fa-edit" title="View User"></i></span>
                            </a>
                        
                            {{-- <a href="{{url('delete/')}}/{{$value->id}}" onclick="return confirm('Are you sure you want to delete this item?');">Delete</a> --}}
                            {{-- <a href="{{url('delete/')}}/{{$value->id}}"   onclick="myFunction()">Delete</a> --}}
                             {{-- <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal"> --}}
                            {{-- <a data-toggle="modal" data-target="#exampleModal"> <span class="mr-2"><i class="fa fa-trash" aria-hidden="true"></i></span></a> --}}
                            {{-- </button>  --}}
                            <a data-toggle="modal" data-target="#exampleModal{{$value->id}}" > <span class="mr-2"><i class="fa fa-trash" aria-hidden="true"></i></span> </a>
                            <div class="modal fade" id="exampleModal{{$value->id}}" tabindex="-1" role="dialog"  aria-hidden="true">

                              <form  action="{{url('/deletevalidation/')}}/{{$value->id}}"  method="get">
                               
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
                            
                           
                            
                              {{-- <a onclick="myFunction()"> <span class="mr-2"><i class="fa fa-trash" aria-hidden="true"></i></span></a> --}}
                              {{-- <a href="{{url('delete/')}}/{{$value->id}}">  <button class="btn btn-xs btn-danger btn-flat show_confirm" data-toggle="tooltip" title='Delete'>Delete</button></a> --}}
                         </td>
                        </td>
                      </tr>
                    @endforeach
                 
                 
              </tbody>
           
          </div>

          <div class="card-footer py-4">
            {{-- <a id="demo" href="{{url('delete/')}}/{{$value->id}}"> </a>
           --}}
              
          </div>
        </div>
      </div>
    </div>
  </div>
  
  {{-- <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel">Modal title</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body">
          <label for="exampleInputEmail1">Enter The conformation Code</label>
          <input type="text" class="form-control" id="conformation" aria-describedby="emailHelp" placeholder="Enter Code">
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
          <a  href="{{url('delete/')}}/{{$value->id}}" ><button type="button" class="btn btn-primary">Delete</button></a>
        </div>
      </div>
    </div>
  </div> --}}
  {{-- <script>
    function myFunction() {
      let text;
      let person = prompt("Please Enter Validation Code ", "");
      if (person =="delete" || person == "delete") {
        text = "Click on to delete ";
      } else {
        text = "";
      }
      document.getElementById("demo").innerHTML = text;
    }
    </script> --}}
   
@endsection