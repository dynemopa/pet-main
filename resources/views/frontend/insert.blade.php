
@extends('layouts.app')

@section('content')

    <a href="{{route('page')}}"> <button type="button" class="btn btn-success text-right">Back</button></a>
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
    <form method="POST" action="{{url('uploadVideo')}}"enctype="multipart/form-data" >
        {{ csrf_field() }}
        <div class="container p-4 ">
            <div class="form-group">
                <label for="formGroupExampleInput">Title</label>
                <input type="text" class="form-control"  name="title"  placeholder="Example input">
            </div>
           
            <div class="mb-3">
              <label for="formFileDisabled" class="form-label">Mobile Video</label>
              <input class="form-control" name="mobile_video" type="file" id="formFileMultiple" >
            </div>

            <div class="mb-3">
              <label for="formFileDisabled" class="form-label">Backgroung video</label>
              <input class="form-control" name="choose_video" type="file" id="formFileMultiple" >
            </div>
            
            <div class="mb-3">
              <label for="formFileDisabled" class="form-label">Mutiple Image for Slider</label>
              <input class="form-control" name="images[]" type="file" id="formFileMultiple" multiple>
            </div>
            <div>
                <button class="btn btn-primary" type="submit">Upload</button>
            </div>
        </div>
      </form>
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
  
@endsection