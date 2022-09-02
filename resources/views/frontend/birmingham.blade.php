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
          <div class="col-md-2" style="    margin-top: -41px;margin-left: 300px;">  <a href="{{url('/birmingham')}}">
            
            <button class="btn btn-success" type="button">Reset</button>
            </a></div>

        </form>
       
         
          <section>
            <p>Listings in "Birmingham "</p>
          
            @foreach ( $file as $value)
            @php 
            $str1  = str_replace("[","",$value->filenames);
            $str2  = str_replace("]","",$str1);
            $str3  = str_replace('"','',$str2);
            $str = explode(",",$str3);
          @endphp
            <div class="col-md-12">
              <div class="row d111">
                <div class="col-md-4"><a href="{{url('/Birminghamimg')}}/{{$value->files_id}}-{{$value->title->title}}"><img src="{{asset('uploads/students/'.$str[0])}}" height="100%"  width="100%" class="d11"/></a><p style="color: white; margin-top: -39px;  margin-left: 10px;">USD {{$value->title->feacture->price_per_night}} /night</p></div>
                
                <div class="col-md-8">
                  <p class="d113"><a href="{{url('/Birminghamimg')}}/{{$value->files_id}}-{{$value->title->title}}">{{$value->title->title}}</a></p>
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
        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d13478.601003748958!2d-86.31821427722187!3d32.37492671996069!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x888e816f1ab8dd59%3A0x72da32f6d2345fa4!2sHampton%20Inn%20%26%20Suites%20Montgomery-Downtown!5e0!3m2!1sen!2sin!4v1661752668234!5m2!1sen!2sin" height="600"  style="border:0;  width:100%" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
        {{-- <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3539.091620339562!2d77.63270171437962!3d27.49752594128974!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3973731c342ccfcd%3A0xe39fe31a55b256f5!2sRatanlal%20Phool%20Katori%20Devi%20School%20Mathura!5e0!3m2!1sen!2sin!4v1659440098553!5m2!1sen!2sin"  height="600" style="border:0; width:100%" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe> --}}
      </div>
      {{-- MAP DIV END --}}
    </div>
  </div>
</div>
@endsection
