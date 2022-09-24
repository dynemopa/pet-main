@extends('frontend.layout.main')

@section('content')

<style>
    .d113
    {
        font-family: "Times New Roman", Times, serif;
    }
    .d114
    {
        padding: 30px; 
        background-color: #eaece3;
        font-family: "Times New Roman", Times, serif;
        margin-top: 20px;
        color: gray

        
    }
    .d115
    {
        color: black;
    }
    .demo {
  opacity: 1;
}
.demo:hover {
  opacity: 0.6;
}

        #map {
          height: 400px;
        }

    </style>
  

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


<!-- Gallery -->
<div class="container-fluid " style="margin-top: 66px">
    <div class="col-md-12">
        <div class="row">
        
            <div class="col-md-6"> <img src="{{asset('uploads/students/'.$str[0])}}" style=" width:100%; height:100%"/></div>
            <div class="col-md-6">
                <div class="row">
                    <div class="col-md-6"><img src="{{asset('uploads/students/'.$str[1])}}" style=" width:100% ;height:100%"/></div>
                    <div class="col-md-6"><img src="{{asset('uploads/students/'.$str[2])}}" style=" width:100%;height:100%"/></div>

                </div>
                <div class="row" style=" margin-top: 10px;">
                    <div class="col-md-6"><img src="{{asset('uploads/students/'.$str[3])}}" style=" width:100%;height:100%"/></div>
                    <div class="col-md-6">  <a href="{{url('/gallery/')}}/{{$value->title_id}}"><img class="demo" src="{{asset('uploads/students/'.$str[4])}}" style=" width:100%;height:100%;cursor: pointer;"/><p style="color: white; margin-top: -119px;  margin-left: 98px; color:black; font-size:20px"><b>See All Image</b></p></a></div>

                </div>
            </div>
           
        </div>
    </div>
    <div class="container" style="margin-top:35px">
        <div class="col-md-12">
            <div class="row">
                <div class="col-md-8">
                    <p class="d113" style="font-size: 22px">{{$value->title}}</p>
                    <p class="d113" ><span><i class="fa fa-home" aria-hidden="true"></i></span>&nbsp; <a href="{{url('/montgomery')}}">Private room</a> &nbsp;&nbsp; <span>&nbsp;<i class="fa fa-building" aria-hidden="true"></i></span> &nbsp;<a href="{{url('/montgomery')}}">Apartment</a> &nbsp;&nbsp;<span>&nbsp;<i class="fa fa-user" aria-hidden="true"></i> &nbsp;8 Guests&nbsp;&nbsp;<span>&nbsp;<i class="fa fa-bed" aria-hidden="true"></i></span>&nbsp;1 Bedroom</p>
                    <p class="d113" style="font-size: 15px">{!!$value->content!!}</p>
                    <div class=" shadow-sm p-3 mb-5  rounded d114 " >
                        <p>Property Price</p>
                        <div class="col-md-12">
                            <div class="row">
                                <div class="col-md-6"><p style=" font-size:13px; "><b>Price per night:</b> USD {{$value->price_per_night}}</p></div>
                                <div class="col-md-6"><p style=" font-size:13px; "><b>Cleaning Fee:</b> USD {{$value->feacture->cleaning_fee}} Single Fee</p></div>

                            </div>
                        </div>
                     </div>
                    <div class="d114" >
                        <p>Sleeping Situation</p>
                        <div class="col-md-12">
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="">Sleeping Situation</label><br><br>
                                        <input type="checkbox" id="sleeping_situation" name="sleeping_situation[]" value="1 King Bed" {{in_array('1 King Bed', $sleeping_situation)? 'checked':''}}  onclick="return false;">
                                        <label for="">1 King Bed</label><br>
                                        <input type="checkbox" id="sleeping_situation" name=" sleeping_situation[]" value="1 Couch"  {{in_array('1 Couch', $sleeping_situation)? 'checked':''}}  onclick="return false;">
                                        <label for="vehicle1">1 Couch</label>
                                    
                                    </div>
                                </div>
                                </div>
                            </div>
                    </div>
                    <div class=" shadow-sm p-3 mb-5  rounded d114 " style="line-height: 8px" >
                        <p>Property Address</p>
                        <div class="col-md-12">
                            <div class="row">
                                <div class="col-md-6">
                                    <p style=" font-size:13px; ">Address: {{$value->feacture->address}}</p>
                                    <p style=" font-size:13px; ">Area: {{$value->feacture->area}}</p>
                                    <p style=" font-size:13px; ">State:{{$value->feacture->state}}</p>
                                    <p style=" font-size:13px; ">Country: {{$value->feacture->country}}</p>
                                </div>
                                <div class="col-md-6">
                                    <p style=" font-size:13px; ">City:{{$value->city}}</p>
                                    <p style=" font-size:13px; ">County:{{$value->feacture->country}}</p>
                                    <p style=" font-size:13px; ">Zip:{{$value->feacture->zip}}</p>
                                </div>
                            </div>
                        </div>
                     </div>
                            <div class=" shadow-sm p-3 mb-5  rounded d114" style="line-height: 8px" >
                                <p>Property Details</p>
                                <div class="col-md-12">
                                    <div class="row">
                                        <div class="col-md-6">
                                            <p style=" font-size:13px; ">Property ID:{{$value->property_id}}</p>
                                            <p style=" font-size:13px; ">Rooms: {{$value->feacture->room}}</p>
                                            <p style=" font-size:13px; ">Bathrooms: {{$value->feacture->bathrooms}}</p>
                                        </div>
                                        <div class="col-md-6">
                                            <p style=" font-size:13px; ">Property Size:{{$value->feacture->property_size}} ft2</p>
                                            <p style=" font-size:13px; ">Bedrooms: {{$value->feacture->bedrooms}}</p>
                                            <p style=" font-size:13px; ">Please Note:{{$value->feacture->please_note}}</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class=" shadow-sm p-3 mb-5  rounded d114" style="line-height: 8px" >
                                <p>Amenities and Features</p>
                                <p style=" font-size:14px; ">Other Features</p>
                                <div class="col-md-12">
                                    <div class="row" style="line-height: 38px;">
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
                            </div>
                            <div class=" shadow p-3 mb-5 rounded d114" style="line-height: 27px" >
                                <p style="font-size: 20px">Terms and Conditions</p>
                                <input type="checkbox" id="terms" name="terms[]" value="Smoking Allowed "  {{in_array('Smoking Allowed', $terms)? 'checked':''}}  onclick="return false;">
                                <label for="vehicle1">Smoking Allowed</label><br>
                                <input type="checkbox" id=" terms" name="terms[]" value="Pets Allowed "  {{in_array('Pets Allowed', $terms)? 'checked':''}}  onclick="return false;">
                                <label for="vehicle2"> Pets Allowed</label><br>
                                <input type="checkbox" id="terms" name="terms[]" value="Party Allowed "  {{in_array('Party Allowed', $terms)? 'checked':''}}  onclick="return false;">
                                <label for="vehicle3">Party Allowed</label><br>
                                <input type="checkbox" id=" terms" name="terms[]" value=" Children Allowed "  {{in_array('Children Allowed', $terms)? 'checked':''}}  onclick="return false;">
                                <label for="vehicle3"> Children Allowed</label><br><br>
                                <p><b>Cancellation Policy</b></p>
                                <div>
                                    <p  style="font-family:Times New Roman, Times, serif;">Cancellation Policy: • Guests can cancel up to 5 days before check-in with no cancellation fees. • We offer flexible cancellations for all reservations made on DwellaStays.com. The specific policy for your reservation is dependent on the rate selected at the time of booking. • For longer stays that are paid on a monthly basis, we require at least 30 days notice to cancel or modify without fees. • A 24-hour grace period applies for all stays before check-in begins. You may cancel any reservation up to 24 hours after booking as long as it is at least one day before your check-in.</p>
                                </div>
                            </div>
                </div> 
              
                @endforeach
              
                <div class="col-md-4" style=" margin-top:10px"> 
                    <div class="d113" style="    background-color: #8b6013e0; padding: 11px;">
                        <center><p>USD 150 per night</p></center>
                    </div>
                    <form action="{{url('/showbooking/')}}" method="get">
                        @if(session('success'))
                            <div class="alert alert-success">
                            {{ session('success') }}
                            </div> 
                        @endif
                           
                
                        <div style="  padding: 26px; background-color: #eaece3;">
                        <p >Book Now</p>
                        <div class="col-md-12">

                            <div class="form-group">
                                <input class="form-control" type="hidden" name="title_id" value="{{$value->title_id}}"> 
                            </div> 
                            
                            <div class="form-group">
                                <input class="form-control" type="text" name="name" id="name" placeholder="Name"> 
                                <span class="text-danger">
                                    @error('name')
                                    {{$message}}
                                    @enderror 
                                </span>
                            </div> 
                            <div class="col-md-12">
                                <input class="form-control" name="checkin" onfocus="(this.type='date')" id="checkin" type="text" placeholder="Check In">
                                <span class="text-danger">
                                    @error('checkin')
                                    {{$message}}
                                    @enderror
                                 </span>
                            </div>
                        </div>
                        <div class="col-md-12">
                            <div class="col-md-12">
                                <input class="form-control" type="text" name="checkout"  onfocus="(this.type='date')" id="checkout"  placeholder="Check Out"> 
                                <span class="text-danger">
                                    @error('checkout')
                                    {{$message}}
                                    @enderror 
                                </span>
                            </div>
                        </div>
                     
                        <div class="col-md-12">
                            <div class="form-group">
                                <input class="form-control" type="text" name="guest" id="guest" placeholder="Guest"> 
                                <span class="text-danger">
                                    @error('guest')
                                    {{$message}}
                                    @enderror 
                                </span>
                            </div>
                        </div>
                        @if (Auth::check())
                        <div class="col-md-12">
                            <button type="submit" class="btn btn-primary" style="width: 100%">Book Now</button>
                        </div>

                        </div>
                        @else
                        <div class="col-md-12">
                        <button type="button" class="btn btn-info" style="width: 100%">  <a href="{{route('login')}}" >Book Now</a></button>
                        </div>
                        @endif
                    </form>
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
    <div>
        <div id="map"></div>
    </div>
    <script type="text/javascript">
       // This example displays a marker at the center of Australia.
// When the user clicks the marker, an info window opens.
function initMap() {
  const uluru = { lat:27.493792116948285, lng:77.6564221294328 };
  const map = new google.maps.Map(document.getElementById("map"), {
    zoom: 15,
    center: uluru,
  });
  const contentString =
   
   
   
        '<img src="https://media-cdn.tripadvisor.com/media/photo-s/17/b9/78/91/capital-o-3539-hotel.jpg" alt="Girl in a jacket" width="300px" height="157">'
   

  const infowindow = new google.maps.InfoWindow({
    content: contentString,
  });
  const marker = new google.maps.Marker({
    position: uluru,
    map,
    title: "Uluru (Ayers Rock)",
  });

  marker.addListener("click", () => {
    infowindow.open({
      anchor: marker,
      map,
      shouldFocus: false,
    });
  });
}

window.initMap = initMap;
    </script>
    
    <script type="text/javascript"
        src="https://maps.google.com/maps/api/js?key={{ env('GOOGLE_MAP_KEY') }}&callback=initMap" ></script>
    
  
  

  
 
    <div class="container">
        <div class="col-md-12 m-4">
           
            <div class="row">
                @foreach($title1 as $value1)
                @php 
                $str1  = str_replace("[","",$value1->file->filenames);
                $str2  = str_replace("]","",$str1);
                $str3  = str_replace('"','',$str2);
                $str = explode(",",$str3);
            @endphp
               
                <div class="col-md-4">
                   
                   
                  <div class="card mb-4 box-shadow d411 " >
                    <a href="{{url('/montgomeryimg')}}/{{$place}}-{{$value->slug}}"> <img style=" height: 233px;" class="card-img-top d411" src="{{asset('uploads/students/'.$str[0])}}"></a><p style="color: white; margin-top: -39px;  margin-left: 10px;">USD {{$value1->price_per_night}} /night</p>
                    <div class="card-body d412" >
                      <p class="card-text  d49" >{{$value1->title}}</p>
                       <i class="fa fa-map-marker" aria-hidden="true"></i><div style="font-size: 14px; color: darkgray; margin-top: -24px; margin-left: 21px;">{{$value1->feacture->address}}</div>
                       <i class="fa fa-home" aria-hidden="true"></i>
                       <div style="font-size: 14px; color: darkgray; margin-top: -24px; margin-left: 21px;">Apartment / Private room</div>
                     
                    </div>
                  </div>
                </div>
                @endforeach
              </div>
           

        </div>
     
            
    </div>

</div>




  @endsection