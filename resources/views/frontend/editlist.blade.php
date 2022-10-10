




@extends('layouts.app')

@section('content')



  <a href="{{route('showlisting')}}"> <button type="button" class="btn btn-primary text-right">BACK</button></a>
    <div class="container">

    @if (count($errors) > 0)
    <div class="alert alert-danger">
        <strong>Sorry!</strong> Here have some issue please check<br><br>
        <ul>
          @foreach ($errors->all() as $error)
              <li>{{ $error }}</li>
          @endforeach
        </ul>
    </div>
    @endif
      
    @if(session('success'))
    <div class="alert alert-success">
      {{ session('success') }}
    </div> 
    @endif

    @foreach ( $title as $value)

        @php
        $sleeping_situation=json_decode($value->feacture->sleeping_situation);
        @endphp 
         @php
         $amenities=json_decode($value->feacture->amenities);
         
         @endphp 
          @php
          $terms=json_decode($value->feacture->terms);
         
          @endphp 

        @php 
        $str1  = str_replace("[","",$value->file->filenames);
        $str2  = str_replace("]","",$str1);
        $str3  = str_replace('"','',$str2);
        $str = explode(",",$str3);
        @endphp
      

   
   
     <form  method="post"  action=" {{url('/updatelist/')}}/{{$value->id}}/{{$value->file->id}}/{{$value->feacture->id}}"   enctype="multipart/form-data">
       
        @csrf
       
        <div class="input-group realprocode control-group lst increment" >
            <input type="file" name="filenames[]" class="myfrm form-control" ><br>
           
           <div class="input-group-btn" style="padding-left: 10px"> 
             <button class="btn btn-success" type="button"><i class="fldemo glyphicon glyphicon-plus"></i>Add</button>
           </div>
         </div>
         <div class="clone hide">
           <div class="hdtuto control-group lst input-group" style="margin-top:10px">
             <input type="file" name="filenames[]" class="myfrm form-control">
             <div class="input-group-btn" style="padding-left: 10px"> 
               <button class="btn btn-danger" type="button"><i class="fldemo glyphicon glyphicon-remove"></i> Remove</button>
             </div>
           </div>
         </div>

        <div class="form-group">
            <label for="">title</label>
            <input id="title"  class="form-control"  name="title"value="{{$value->title}}">
        </div>
        <div class="form-group">
            <label for="">Slug</label>
            <input id="slug"  class="form-control"  name="slug"value="{{$value->slug}}" readonly>
        </div>
        <div class="form-group">
                <label for="">Content</label>
                <textarea  class="form-control" name="content" rows="4" cols="50" id="content"  >{!!$value ->content!!}</textarea>
        </div>
        <div class="form-group">
            <label for="">Price Per Night</label>
            <input type="number" class="form-control" name="price_per_night" id="price_per_night" value="{{$value->price_per_night}}" >
        </div>
        <div class="form-group">
            <label for="">Cleaning Fee</label>
            <input type="number" class="form-control"name="cleaning_fee" id="cleaning_fee" value="{{$value->feacture->cleaning_fee}}" >
        </div>
        <div class="form-group">
            <label for="">Sleeping Situation</label><br><br>
            <input type="checkbox" id="sleeping_situation" name="sleeping_situation[]" value="1 King Bed" {{in_array('1 King Bed', $sleeping_situation)? 'checked':''}}  >
            <label for="">1 King Bed</label><br>
            <input type="checkbox" id="sleeping_situation" name=" sleeping_situation[]" value="1 Couch"  {{in_array('1 Couch', $sleeping_situation)? 'checked':''}} >
            <label for="vehicle1">1 Couch</label>
        </div>
        <div class="form-group">
            <label for="">address</label>
            <input type="text" class="form-control" name="address" id="title"value="{{$value->feacture->address}}" >
        </div>
        <div class="form-group">
            <label for="">area</label>
            <input type="text" class="form-control" name="area" id="title"value="{{$value->feacture->area}}" >
        </div>
        <div class="form-group">
            <label for="">state</label>
            <input type="text" class="form-control" name="state" id="state"value="{{$value->feacture->state}}" >
        </div>
        <div class="form-group">
            <label for="">country</label>
            <input type="text" class="form-control" name="country" id="country"value="{{$value->feacture->country}}" >
        </div>
        <div class="form-group">
            <label for="">city</label>
            <input type="text" class="form-control" name="city" id="title"value="{{$value->city}}" >
        </div>
        <div class="form-group">
            <label for="">zip</label>
            <input type="number" class="form-control" name="zip" id="zip"value="{{$value->feacture->zip}}" >
        </div>
        <div class="form-group">
            <label for="">property_id</label>
            <input type="number" class="form-control" name="property_id" id="property_id"value="{{$value->property_id}}" >
        </div>
       
        <div class="form-group">
            <label>Room</label><br/>
            <select name="room" id="room" class="form-control">
                <option value="">Rooms</option>
                <option value="1"{{($value->feacture->room === '1') ? 'Selected' : ''}}>1</option>
                <option value="2"{{($value->feacture->room === '2') ? 'Selected' : ''}}>2</option>
                <option value="3"{{($value->feacture->room === '3') ? 'Selected' : ''}}>3</option>
                <option value="4"{{($value->feacture->room === '4') ? 'Selected' : ''}}>4</option>
                <option value="5"{{($value->feacture->room === '5') ? 'Selected' : ''}}>5</option>
                <option value="6"{{($value->feacture->room === '6') ? 'Selected' : ''}}>6</option>
              </select>
          </div>
          <div class="form-group">
            <label for="">Bathrooms</label>
            <select name="bathrooms" id="bathrooms" class="form-control">
              <option value="">Bathrooms</option>
              <option value="1"{{($value->feacture->bathrooms === '1') ? 'Selected' : ''}}>1</option>
              <option value="2"{{($value->feacture->bathrooms === '2') ? 'Selected' : ''}}>2</option>
              <option value="3"{{($value->feacture->bathrooms === '3') ? 'Selected' : ''}}>3</option>
              <option value="4"{{($value->feacture->bathrooms === '4') ? 'Selected' : ''}}>4</option>
              <option value="5"{{($value->feacture->bathrooms === '5') ? 'Selected' : ''}}>5</option>
              <option value="6"{{($value->feacture->bathrooms === '6') ? 'Selected' : ''}}>6</option>
            </select>
        </div>
        <div class="form-group">
            <label for="">property_size</label>
            <input type="text" class="form-control" name="property_size" id="property_size"value="{{$value->feacture->property_size}}" >
        </div>
        <div class="form-group">
            <label for="">Bedrooms:</label>
            <select name="bedrooms" id="bedrooms" class="form-control">
              <option value="">Bedrooms</option>
              <option value="1"{{($value->feacture->bedrooms === '1') ? 'Selected' : ''}}>1</option>
              <option value="2"{{($value->feacture->bedrooms === '2') ? 'Selected' : ''}}>2</option>
              <option value="3"{{($value->feacture->bedrooms === '3') ? 'Selected' : ''}}>3</option>
              <option value="4"{{($value->feacture->bedrooms === '4') ? 'Selected' : ''}}>4</option>
              <option value="5"{{($value->feacture->bedrooms === '5') ? 'Selected' : ''}}>5</option>
              <option value="6"{{($value->feacture->bedrooms === '6') ? 'Selected' : ''}}>6</option>
            </select>
            
        </div>
        <div class="form-group">
            <label for="">please_note</label>
            <textarea type="text" class="form-control" name="please_note" id="please_note" >{{$value->feacture->please_note}}</textarea>
        </div>
        <div class="col-md-12">
            <label for="">amenities and Features</label><br>
            <div class="row">
                <div class="col-md-4">
                
                    <input type="checkbox" id="amenities" name="amenities[]" value="Air Conditioner" {{in_array('Air Conditioner', $amenities)? 'checked':''}}  >
                    <label for="vehicle1"> Air Conditioner</label><br>
                    <input type="checkbox" id="amenities" name="amenities[]"value="Breakfast Included"  {{in_array('Breakfast Included', $amenities)? 'checked':''}} >
                    <label for="vehicle2">Breakfast Included</label><br>
                    <input type="checkbox" id="amenities" name="amenities[]"value="Dryer "  {{in_array('Dryer', $amenities)? 'checked':''}}  >
                    <label for="vehicle3"> Dryer</label><br>
            
                    <input type="checkbox" id="amenities" name="amenities[]"value="Essentials "  {{in_array('Essentials', $amenities)? 'checked':''}}  >
                    <label for="vehicle1">Essentials</label><br>
                    <input type="checkbox" id="amenities" name="amenities[]"value="Fax "  {{in_array('Fax', $amenities)? 'checked':''}} >
                    <label for="vehicle2">Fax</label><br>
                    <input type="checkbox" id="amenities" name="amenities[]"value=" Gym"  {{in_array('Gym', $amenities)? 'checked':''}}  >
                    <label for="vehicle3"> Gym</label><br>
            
                    <input type="checkbox" id="amenities" name="amenities[]"value="Hot Tub "  {{in_array('Hot Tub', $amenities)? 'checked':''}}  >
                    <label for="vehicle1">Hot Tub</label><br>
                    <input type="checkbox" id="amenities" name="amenities[]"value=" Internet"  {{in_array('Internet', $amenities)? 'checked':''}}  >
                    <label for="vehicle2">Internet</label><br>
                    <input type="checkbox" id="amenities" name="amenities[]"value="Non Smoking "  {{in_array('Non Smoking', $amenities)? 'checked':''}} >
                    <label for="vehicle3"> Non Smoking</label><br>
            
                
                </div>
                <div class="col-md-4">
                    <input type="checkbox" id="amenities" name="amenities[]"value=" Phone (booth/lines)"  {{in_array('Phone (booth/lines)', $amenities)? 'checked':''}}  >
                    <label for="vehicle1">Phone (booth/lines)</label><br>
                    <input type="checkbox" id="amenities" name="amenities[]"value="Projector(s) " {{in_array('Projector(s)', $amenities)? 'checked':''}} >
                    <label for="vehicle2">Projector(s)</label><br>
                    <input type="checkbox" id="amenities" name="amenities[]"value="Smoking Allowed " {{in_array('Smoking Allowed', $amenities)? 'checked':''}}  >
                    <label for="vehicle3"> Smoking Allowed</label><br>
            
                    <input type="checkbox" id="amenities" name="amenities[]"value="TV " {{in_array('TV', $amenities)? 'checked':''}}  >
                    <label for="vehicle1">TV</label><br>
                    <input type="checkbox" id="amenities" name="amenities[]"value="Wheelchair Accessible " {{in_array('Wheelchair Accessible', $amenities)? 'checked':''}}  >
                    <label for="vehicle2">Wheelchair Accessible</label><br>
                
                    <input type="checkbox" id="amenities" name="amenities[]"value="Bar / Restaurant "  {{in_array('Bar / Restaurant', $amenities)? 'checked':''}} >
                    <label for="vehicle3">Bar / Restaurant</label><br>
            
                    <input type="checkbox" id="amenities" name="amenities[]"value="Doorman "  {{in_array('Doorman', $amenities)? 'checked':''}} >
                    <label for="vehicle1">Doorman</label><br>
                    <input type="checkbox" id="amenities" name="amenities[]"value=" Elevator in Building" {{in_array('Elevator in Building', $amenities)? 'checked':''}}  >
                    <label for="vehicle2">Elevator in Building</label><br>
                    <input type="checkbox" id="amenities" name="amenities[]"value="Family/Kid Friendly " {{in_array('Family/Kid Friendly', $amenities)? 'checked':''}}  >
                    <label for="vehicle3">Family/Kid Friendly</label><br>
            
                </div>
                <div class="col-md-4">
                    
                    <input type="checkbox" id="amenities" name="amenities[]"value="Free Parking on Premises "  {{in_array('Free Parking on Premises', $amenities)? 'checked':''}}  >
                    <label for="vehicle1">Free Parking on Premises</label><br>
                    <input type="checkbox" id="amenities" name="amenities[]" value="Heating"  {{in_array('Heating', $amenities)? 'checked':''}}  >
                    <label for="vehicle2">Heating</label><br>
                    <input type="checkbox" id="amenities" name="amenities[]" value="Indoor Fireplace "  {{in_array('Indoor Fireplace', $amenities)? 'checked':''}} >
                    <label for="vehicle3">Indoor Fireplace</label><br>
            
                    <input type="checkbox" id="amenities" name="amenities[]"value=" Kitchen"  {{in_array('Kitchen', $amenities)? 'checked':''}}  >
                    <label for="vehicle1">Kitchen</label><br>
                    <input type="checkbox" id="amenities" name="amenities[]" value="Pets Allowed " {{in_array('Pets Allowed', $amenities)? 'checked':''}}  >
                    <label for="vehicle2">Pets Allowed</label><br>
                    <input type="checkbox" id="amenities" name="amenities[]"value="Pool " {{in_array('Pool', $amenities)? 'checked':''}}  >
                    <label for="vehicle3">Pool</label><br>
            
                    <input type="checkbox" id="amenities" name="amenities[]"value=" Scanner / Printer" {{in_array('Scanner / Printer', $amenities)? 'checked':''}}  >
                    <label for="vehicle1">Scanner / Printer</label><br>
                    <input type="checkbox" id="amenities" name="amenities[]"value="Suitable for Events "  {{in_array('Suitable for Events', $amenities)? 'checked':''}} >
                    <label for="vehicle2">Suitable for Events</label><br>
                    <input type="checkbox" id="amenities" name="amenities[]"value=" Washer"  {{in_array('Washer', $amenities)? 'checked':''}}  >
                    <label for="vehicle3">Washer</label><br>
            
                    <input type="checkbox" id="amenities" name="amenities[]"value=" Wireless Internet"  {{in_array('Wireless Internet', $amenities)? 'checked':''}}  >
                    <label for="vehicle3">Wireless Internet</label><br>

                </div>
            </div>
        </div>
    
        <div>
            <label for="">Terms and Conditions</label><br>
            <input type="checkbox" id="terms" name="terms[]" value="Smoking Allowed "  {{in_array('Smoking Allowed', $terms)? 'checked':''}}  >
            <label for="vehicle1">Smoking Allowed</label><br>
            <input type="checkbox" id=" terms" name="terms[]" value="Pets Allowed "  {{in_array('Pets Allowed', $terms)? 'checked':''}}  >
            <label for="vehicle2"> Pets Allowed</label><br>
            <input type="checkbox" id="terms" name="terms[]" value="Party Allowed "  {{in_array('Party Allowed', $terms)? 'checked':''}}  >
            <label for="vehicle3">Party Allowed</label><br>
            <input type="checkbox" id=" terms" name="terms[]" value=" Children Allowed "  {{in_array('Children Allowed', $terms)? 'checked':''}}  >
            <label for="vehicle3"> Children Allowed</label><br>
        </div>
        <button type="submit" class="btn btn-success"  onclick="return confirm('Are you sure?')" >Submit</button>
    </form>    
    @endforeach    
   

<script type="text/javascript">
    $(document).ready(function() {
      $(".btn-success").click(function(){ 
          var lsthmtl = $(".clone").html();
          $(".increment").after(lsthmtl);
      });
      $("body").on("click",".btn-danger",function(){ 
          $(this).parents(".hdtuto").remove();
      });
    });
</script>
<script>
    CKEDITOR.replace('content');
  </script>
   <script>
    $("#title").change(function(){
     $("button[type='submit']").prop('disabled',true);
         $.ajax({
        url:'{{route("title.slug")}}',
        type:'get',
        data:{title:$(this).val()},  
        datatype:'json',
        success:function(response){
          $("button[type='submit']").prop('disabled',false);
          $("#slug").val(response.slug);
        }
      })
      
    });
  </script>  

 @endsection
