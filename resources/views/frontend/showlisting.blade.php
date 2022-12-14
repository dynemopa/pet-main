



@extends('layouts.app')

@section('content')

<a href="{{route('listing')}}"> <button type="button" class="btn btn-success text-right" style="background-color: #1282a2;">Add List</button></a>
<button type="button" onclick="window.print()" class="btn btn-success text-right" style="background-color: #1282a2;">Print</button>
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
                    
                    <th scope="col">image</th>
                    <th scope="col">title</th>
                    <th scope="col">slug</th>
                    <th scope="col">content</th>
                    <th scope="col">price_per_night</th>
                    <th scope="col">Action</th>
        
                </tr>
              </thead>
              <tbody class="list">
                      <tr>
                        @foreach ( $title as $value)
                          @php 
                            $str1  = str_replace("[","",$value->file->filenames);
                            $str2  = str_replace("]","",$str1);
                            $str3  = str_replace('"','',$str2);
                            $str = explode(",",$str3);
                          @endphp
                        <td>
                            <img src="{{asset('uploads/students/'.$str[0])}}" style="height:50px; width:50px"/>
                        </td>
                        <td>{{$value->title}}</td>
                        <td>{{$value->slug}}</td>
                        <td> {!!Str::limit($value->content,30)!!}</td>
                        <td>{{$value->price_per_night}}</td>
                        <td>
                          
                          <a href="{{url('showlist/')}}/{{$value->id}}" class="text-white"> 
                            <span class="mr-2"><i class="fa fa-eye" aria-hidden="true"></i></span>
                          </a>
                          
                         <a href="{{url('listedit/')}}/{{$value->id}}/{{$value->file->id}}/{{$value->feacture->id}}"   class="text-white"> 
                            <span class="mr-2"><i class="fa fa-edit" title="View User"></i></span>
                          </a>
                       
                          <a data-toggle="modal" data-target="#exampleModal{{$value->id}}{{$value->file->id}}{{$value->feacture->id}}" > 
                            <span class="mr-2"><i class="fa fa-trash" aria-hidden="true"></i></span>
                          </a>
                        
                        </td>
                          <div class="modal fade" id="exampleModal{{$value->id}}{{$value->file->id}}{{$value->feacture->id}}" tabindex="-1" role="dialog"  aria-hidden="true">
                            <form  action="{{url('listdelete/')}}/{{$value->id}}/{{$value->file->id}}/{{$value->feacture->id}}"  method="get">
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


                            {{-- <a data-toggle="modal" data-target="#exampleModal{{$value->id}}" > <span class="mr-2"><i class="fa fa-trash" aria-hidden="true"></i></span> </a> --}}
                            {{-- <div class="modal fade" id="exampleModal{{$value->id}}" tabindex="-1" role="dialog"  aria-hidden="true"> --}}
                           
                            </td> 
                        </td>
                      </tr>
                      @endforeach 
              </tbody>
            </table>
          </div>
            <div class="row" style=" margin-top:30px; ">
              {{$title->links()}}
            </div>
            <style>
              .w-5
              {
                display: none;
              }
            </style>
         
  
  
   
@endsection
