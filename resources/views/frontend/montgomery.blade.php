@extends('frontend.layout.main')

@section('content')
<style>
  #rangeValue {
  position: relative;
  display: block;
  text-align: center;
 
  color: #999;
  font-weight: 400;
}
.range {
  width: 559px;
  height: 23px;
  -webkit-appearance: none;
  background: #15d0d3;
  outline: none;
  border-radius: 15px;
  overflow: hidden;
  box-shadow: inset 0 0 5px rgba(0, 0, 0, 1);
}
.range::-webkit-slider-thumb {
  -webkit-appearance: none;
  width: 15px;
  height: 15px;
  border-radius: 50%;
  background: #15d0d3;
  cursor: pointer;
  border: 4px solid #333;
  box-shadow: -407px 0 0 400px #111;
}
#map {
          height:100%;
        }
</style>

<script type="text/javascript">
  function rangeSlide(value) {
      document.getElementById('rangeValue').innerHTML = value;
  }
</script>

{{-- {{dd($value->title->title)}} --}}
<div class="container-fluid">
  <div class="col-md-12">
    <div class="row" style="margin-top: 70px">
      <div class="col-md-7" style="height:600px; overflow-y:scroll">

        <form action="" method="get" class="col-9 ">
          <div class="row">
            <div class="col-md-8">
              <div class="inputWithIcon">
                <input type="text" placeholder="Where do You want  to go ?">
               
              </div>
            </div>

            <div class="col-md-4">
              <div class="inputWithIcon">
                <input type="text" placeholder="Check-in"  id="checkindate" name="checkindate">
           
              </div>
            </div>
          </div>

          <div class="row">
            <div class="col-md-4">
              <div class="inputWithIcon">
                <input type="text" placeholder="check-out"  id="checkoutdate" name="checkoutdate">
              
              </div>
            </div>

            <div class="col-md-4">
              <div class="inputWithIcon">
                <input type="text" placeholder="Guests">
                 
              </div>
            </div>

            <div class="col-md-4">
              <div class="inputWithIcon"style="border: 2px solid darkgray; margin-top: 10px;">
                <select name="room" id="room" class="form-control">
                  <option value="">Room</option>
                  <option value="1">1</option>
                  <option value="2">2</option>
                  <option value="3">3</option>
                  <option value="4">4</option>
                  <option value="5">5</option>
                  <option value="6">6</option>
                </select>
              </div>
            </div>
          </div>

          <div class="row">
            <div class="col-md-4">
             
            </div>

            <div class="col-md-4">
             
            </div>

            <div class="col-md-4">
              <div class="inputWithIcon">
                <input type="text" placeholder="All Types"  list="browsers1" >
                <datalist id="browsers1" name="browsers1">
                  <option value="All Types">All Types</option>
                  <option value="Apartment (6)">Apartment (6)</option>
                  
                </datalist>
             
              </div>
            </div>
          </div>

          <div class="row">
            <div class="col-md-4">
              <div class="inputWithIcon">
                <input type="text" placeholder="All Sizes"  list="allsizes" >
                <datalist id="allsizes">
                  <option value="All Sizes">All Sizes</option>
                  <option value="Private Room (6)">Private Room (6)</option>
                  
                </datalist>
          
              </div>
            </div>
            <div class="col-md-4">
         
              <div class="inputWithIcon" style="border: 2px solid darkgray; margin-top: 10px;">
                <select id="bedrooms" name="bedrooms" class="form-control" >
                  <option value="">Bedrooms</option>
                  <option value="1">1</option>
                  <option value="2">2</option>
                  <option value="3">3</option>
                  <option value="4">4</option>
                  <option value="5">5</option>
                  <option value="6">6</option>
                </select>
               
              </div>
            </div>

            <div class="col-md-4">
              <div class="inputWithIcon"style="border: 2px solid darkgray; margin-top: 10px;">
               
                <select name="bathrooms" id="bathrooms" class="form-control" >
                  <option value="">Bathrooms</option>
                  <option value="1">1</option>
                  <option value="2">2</option>
                  <option value="3">3</option>
                  <option value="4">4</option>
                  <option value="5">5</option>
                  <option value="6">6</option>
                </select>
              
              </div>
            </div>
          </div>
          <div class="row">
            <div class="col-md-12">
              <p>Price range: <b>0 to 150</b></p>
              <span id="rangeValue">0</span>
              <Input class="range" type="range" name="price_per_night" value="0" min="0" max="150" onChange="rangeSlide(this.value)" onmousemove="rangeSlide(this.value)">
              
             
            </div>
          </div>
          <div class="col-md-2"> <button class="btn btn-success">Search</button></div>
          <div class="col-md-2" style="    margin-top: -41px;margin-left: 300px;">  <a href="{{url('/montgomery')}}/{{$place}}">
            <button class="btn btn-success" type="button">Reset</button>
            </a></div>

        </form>
       
         
          <section>
            <p>Listings in "Montgomery"</p>
          
            @foreach ( $file as $value)
            @php 
            $str1  = str_replace("[","",$value->filenames);
            $str2  = str_replace("]","",$str1);
            $str3  = str_replace('"','',$str2);
            $str = explode(",",$str3);
          @endphp
            <div class="col-md-12">
              <div class="row d111">
                <div class="col-md-4"><a href="{{url('/montgomeryimg')}}/{{$place}}-{{$value->files_id}}-{{$value->title->title}}"><img src="{{asset('uploads/students/'.$str[0])}}" height="100%"  width="100%" class="d11"/></a><p style="color: white; margin-top: -39px;  margin-left: 10px;">USD {{$value->title->feacture->price_per_night}} /night</p></div>
                
                <div class="col-md-8">
                  <p class="d113"><a href="{{url('/montgomeryimg')}}/{{$place}}-{{$value->files_id}}-{{$value->title->title}}">{{$value->title->title}}</a></p>
                  <p class="d112" style="color: gray"> {!!Str::limit($value->title->content, 70)!!}</p>
                 
                  <p class="d112"><i class="fa fa-map-marker" aria-hidden="true"></i> &nbsp;{{$value->title->feacture->address}}</p>
                  <p class="d112"><i class="fa fa-home" aria-hidden="true"></i> &nbsp;Apartment / Private room</p>
                </div>
              </div>
            </div>
            @endforeach
          </section>
      </div>
     
      {{-- MAP DIV --}}
      <div class="col-md-5">
        <div id="map"></div>
      </div>
      <script type="text/javascript">
      
 function initMap() {
   const uluru = { lat:32.379729012766234, lng:-86.30684171106206 };   
   const map = new google.maps.Map(document.getElementById("map"), {
     zoom: 15,
     center: uluru,
   });
   const contentString =
         '<img src="https://media-cdn.tripadvisor.com/media/photo-s/17/b9/78/91/capital-o-3539-hotel.jpg"  width="210" height="157">'
        
   const infowindow = new google.maps.InfoWindow({
     content: contentString,
   });
   const marker = new google.maps.Marker({
     position: uluru,
     map,
     title: "Click For more details"
  
   });
 
   marker.addListener("click", () => {
     infowindow.open({
       anchor: marker,
       map,
       shouldFocus: false,
     });
   });
 }
 marker.addListener('mouseover', function() {
    infowindow.open(map, this);
});
 
 window.initMap = initMap;

     </script>
     
     <script type="text/javascript"
         src="https://maps.google.com/maps/api/js?key={{ env('GOOGLE_MAP_KEY') }}&callback=initMap" ></script>
      {{-- MAP DIV END --}}
    </div>
  </div>
</div>
@endsection
