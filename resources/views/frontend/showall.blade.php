
@extends('layouts.app')

@section('content')



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
            <div class="form-group">
                <label for="">Image</label><br>
                @for ($x = 0; $x < count($str); $x++)
                <img src="{{asset('uploads/students/'.$str[$x])}}" style="height:100px; width:100px"/>
                @endfor
            </div>
       
       
            <div class="form-group">
              <label for="">Title</label>
              <input type="text" class="form-control" id="title"value="{{$value->title}}" readonly>
            </div>
            <div class="form-group">
                <label for="">Content</label>
                <textarea class="form-control" id="content" name="content001" rows="4" cols="50" readonly >{{$value->content}}</textarea><br>
            </div>
            <div class="form-group">
                <label for="">Price Per Night</label>
                <input type="text" class="form-control" id="title"value="{{$value->price_per_night}}" readonly>
            </div>
            <div class="form-group">
                <label for="">cleaning_fee</label>
                <input type="text" class="form-control" id="title"value="{{$value->feacture->cleaning_fee}}" readonly>
            </div>
            <div class="form-group">
                <label for="">Sleeping Situation</label><br><br>
                <input type="checkbox" id="sleeping_situation" name="sleeping_situation[]" value="1 King Bed" {{in_array('1 King Bed', $sleeping_situation)? 'checked':''}}  onclick="return false;">
                <label for="">1 King Bed</label><br>
                <input type="checkbox" id="sleeping_situation" name=" sleeping_situation[]" value="1 Couch"  {{in_array('1 Couch', $sleeping_situation)? 'checked':''}}  onclick="return false;">
                <label for="vehicle1">1 Couch</label>
            
            </div>
            <div class="form-group">
                <label for="">address</label>
                <input type="text" class="form-control" id="title"value="{{$value->feacture->address}}" readonly>
            </div>
            <div class="form-group">
                <label for="">area</label>
                <input type="text" class="form-control" id="title"value="{{$value->feacture->area}}" readonly>
            </div>
            <div class="form-group">
                <label for="">state</label>
                <input type="text" class="form-control" id="title"value="{{$value->feacture->state}}" readonly>
            </div>
            <div class="form-group">
                <label for="">country</label>
                <input type="text" class="form-control" id="title"value="{{$value->feacture->country}}" readonly>
            </div>
            <div class="form-group">
                <label for="">city</label>
                <input type="text" class="form-control" id="title"value="{{$value->city}}" readonly>
            </div>
            <div class="form-group">
                <label for="">zip</label>
                <input type="text" class="form-control" id="title"value="{{$value->feacture->zip}}" readonly>
            </div>
            <div class="form-group">
                <label for="">property_id</label>
                <input type="text" class="form-control" id="title"value="{{$value->feacture->property_id}}" readonly>
            </div>
            <div class="form-group">
                <label for="">room</label>
                <input type="text" class="form-control" id="title"value="{{$value->feacture->room}}" readonly>
            </div>
            <div class="form-group">
                <label for="">bathrooms</label>
                <input type="text" class="form-control" id="title"value="{{$value->feacture->bathrooms}}" readonly>
            </div>
            <div class="form-group">
                <label for="">property_size</label>
                <input type="text" class="form-control" id="title"value="{{$value->feacture->property_size}}" readonly>
            </div>
            <div class="form-group">
                <label for="">bedrooms</label>
                <input type="text" class="form-control" id="bedrooms"value="{{$value->feacture->bedrooms}}" readonly>
            </div>
            <div class="form-group">
                <label for="">please_note</label>
                <textarea type="text" class="form-control" id="please_note001"  readonly>{{$value->feacture->please_note}}</textarea>
            </div>
            <div class="col-md-12">
                <label for="">amenities and Features</label><br>
                <div class="row">
                    <div class="col-md-4">
                       
                        <input type="checkbox" id="amenities" name="amenities[]" value="Air Conditioner" {{in_array('Air Conditioner', $amenities)? 'checked':''}}  onclick="return false;">
                        <label for="vehicle1"> Air Conditioner</label><br>
                        <input type="checkbox" id="amenities" name="amenities[]"value="Breakfast Included"  {{in_array('Breakfast Included', $amenities)? 'checked':''}}  onclick="return false;" >
                        <label for="vehicle2">Breakfast Included</label><br>
                        <input type="checkbox" id="amenities" name="amenities[]"value="Dryer "  {{in_array('Dryer', $amenities)? 'checked':''}}  onclick="return false;">
                        <label for="vehicle3"> Dryer</label><br>
                
                        <input type="checkbox" id="amenities" name="amenities[]"value="Essentials "  {{in_array('Essentials', $amenities)? 'checked':''}}  onclick="return false;">
                        <label for="vehicle1">Essentials</label><br>
                        <input type="checkbox" id="amenities" name="amenities[]"value="Fax "  {{in_array('Fax', $amenities)? 'checked':''}}  onclick="return false;">
                        <label for="vehicle2">Fax</label><br>
                        <input type="checkbox" id="amenities" name="amenities[]"value=" Gym"  {{in_array('Gym', $amenities)? 'checked':''}}  onclick="return false;">
                        <label for="vehicle3"> Gym</label><br>
                
                        <input type="checkbox" id="amenities" name="amenities[]"value="Hot Tub "  {{in_array('Hot Tub', $amenities)? 'checked':''}}  onclick="return false;">
                        <label for="vehicle1">Hot Tub</label><br>
                        <input type="checkbox" id="amenities" name="amenities[]"value=" Internet"  {{in_array('Internet', $amenities)? 'checked':''}}  onclick="return false;">
                        <label for="vehicle2">Internet</label><br>
                        <input type="checkbox" id="amenities" name="amenities[]"value="Non Smoking "  {{in_array('Non Smoking', $amenities)? 'checked':''}}  onclick="return false;">
                        <label for="vehicle3"> Non Smoking</label><br>
                
                       
                    </div>
                    <div class="col-md-4">
                        <input type="checkbox" id="amenities" name="amenities[]"value=" Phone (booth/lines)"  {{in_array('Phone (booth/lines)', $amenities)? 'checked':''}}  onclick="return false;" >
                        <label for="vehicle1">Phone (booth/lines)</label><br>
                        <input type="checkbox" id="amenities" name="amenities[]"value="Projector(s) " {{in_array('Projector(s)', $amenities)? 'checked':''}}  onclick="return false;">
                        <label for="vehicle2">Projector(s)</label><br>
                        <input type="checkbox" id="amenities" name="amenities[]"value="Smoking Allowed " {{in_array('Smoking Allowed', $amenities)? 'checked':''}}  onclick="return false;">
                        <label for="vehicle3"> Smoking Allowed</label><br>
                
                        <input type="checkbox" id="amenities" name="amenities[]"value="TV " {{in_array('TV', $amenities)? 'checked':''}}  onclick="return false;">
                        <label for="vehicle1">TV</label><br>
                        <input type="checkbox" id="amenities" name="amenities[]"value="Wheelchair Accessible " {{in_array('Wheelchair Accessible', $amenities)? 'checked':''}}  onclick="return false;">
                        <label for="vehicle2">Wheelchair Accessible</label><br>
                       
                        <input type="checkbox" id="amenities" name="amenities[]"value="Bar / Restaurant "  {{in_array('Bar / Restaurant', $amenities)? 'checked':''}}  onclick="return false;">
                        <label for="vehicle3">Bar / Restaurant</label><br>
                
                        <input type="checkbox" id="amenities" name="amenities[]"value="Doorman "  {{in_array('Doorman', $amenities)? 'checked':''}}  onclick="return false;">
                        <label for="vehicle1">Doorman</label><br>
                        <input type="checkbox" id="amenities" name="amenities[]"value=" Elevator in Building" {{in_array('Elevator in Building', $amenities)? 'checked':''}}  onclick="return false;">
                        <label for="vehicle2">Elevator in Building</label><br>
                        <input type="checkbox" id="amenities" name="amenities[]"value="Family/Kid Friendly " {{in_array('Family/Kid Friendly', $amenities)? 'checked':''}}  onclick="return false;">
                        <label for="vehicle3">Family/Kid Friendly</label><br>
                
                    </div>
                    <div class="col-md-4">
                        
                        <input type="checkbox" id="amenities" name="amenities[]"value="Free Parking on Premises "  {{in_array('Free Parking on Premises', $amenities)? 'checked':''}}  onclick="return false;">
                        <label for="vehicle1">Free Parking on Premises</label><br>
                        <input type="checkbox" id="amenities" name="amenities[]" value="Heating"  {{in_array('Heating', $amenities)? 'checked':''}}  onclick="return false;">
                        <label for="vehicle2">Heating</label><br>
                        <input type="checkbox" id="amenities" name="amenities[]" value="Indoor Fireplace "  {{in_array('Indoor Fireplace', $amenities)? 'checked':''}}  onclick="return false;">
                        <label for="vehicle3">Indoor Fireplace</label><br>
                
                        <input type="checkbox" id="amenities" name="amenities[]"value=" Kitchen"  {{in_array('Kitchen', $amenities)? 'checked':''}}  onclick="return false;">
                        <label for="vehicle1">Kitchen</label><br>
                        <input type="checkbox" id="amenities" name="amenities[]" value="Pets Allowed " {{in_array('Pets Allowed', $amenities)? 'checked':''}}  onclick="return false;">
                        <label for="vehicle2">Pets Allowed</label><br>
                        <input type="checkbox" id="amenities" name="amenities[]"value="Pool " {{in_array('Pool', $amenities)? 'checked':''}}  onclick="return false;">
                        <label for="vehicle3">Pool</label><br>
                
                        <input type="checkbox" id="amenities" name="amenities[]"value=" Scanner / Printer" {{in_array('Scanner / Printer', $amenities)? 'checked':''}}  onclick="return false;">
                        <label for="vehicle1">Scanner / Printer</label><br>
                        <input type="checkbox" id="amenities" name="amenities[]"value="Suitable for Events "  {{in_array('Suitable for Events', $amenities)? 'checked':''}}  onclick="return false;">
                        <label for="vehicle2">Suitable for Events</label><br>
                        <input type="checkbox" id="amenities" name="amenities[]"value=" Washer"  {{in_array('Washer', $amenities)? 'checked':''}}  onclick="return false;">
                        <label for="vehicle3">Washer</label><br>
                
                        <input type="checkbox" id="amenities" name="amenities[]"value=" Wireless Internet"  {{in_array('Wireless Internet', $amenities)? 'checked':''}}  onclick="return false;">
                        <label for="vehicle3">Wireless Internet</label><br>
        
                    </div>
                </div>
            </div>
            {{-- <div class="form-group">
                <label for="">terms</label>
                <input type="text" class="form-control" id="title"value="{{$value->post->terms}}" readonly>
            </div> --}}
            <div>
                <label for="">Terms and Conditions</label><br>
      
                <input type="checkbox" id="terms" name="terms[]" value="Smoking Allowed "  {{in_array('Smoking Allowed', $terms)? 'checked':''}}  onclick="return false;">
                <label for="vehicle1">Smoking Allowed</label><br>
                <input type="checkbox" id=" terms" name="terms[]" value="Pets Allowed "  {{in_array('Pets Allowed', $terms)? 'checked':''}}  onclick="return false;">
                <label for="vehicle2"> Pets Allowed</label><br>
                <input type="checkbox" id="terms" name="terms[]" value="Party Allowed "  {{in_array('Party Allowed', $terms)? 'checked':''}}  onclick="return false;">
                <label for="vehicle3">Party Allowed</label><br>
                <input type="checkbox" id=" terms" name="terms[]" value=" Children Allowed "  {{in_array('Children Allowed', $terms)? 'checked':''}}  onclick="return false;">
                <label for="vehicle3"> Children Allowed</label><br>
            </div>
        
       
        @endforeach
          
    
    
@endsection