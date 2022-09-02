
@extends('frontend.layout.main')
@section('content')

 
<style>
  .centered {
  position: absolute;
  top: 40%;
  left: 50%;
 
  transform: translate(-50%, -50%);
}
.centered1 {
  position: absolute;
  top: 55%;
  left: 50%;
 
  transform: translate(-50%, -50%);
}
#wave {
  position: relative;
  height: 70px;
  width: 600px;
  background: #e0efe3;
}
#wave:before {
  content: "";
  display: block;
  position: absolute;
  border-radius: 100% 50%;
  width: 340px;
  height: 80px;
  background-color: white;
  right: -5px;
  top: 40px;
}
#wave:after {
  content: "";
  display: block;
  position: absolute;
  border-radius: 100% 50%;
  width: 300px;
  height: 70px;
  background-color: #e0efe3;
  left: 0;
  top: 27px;
}
  </style><!-- map section -->
<section>
  <div >
    <img src="https://images.sonder.com/image/upload/c_fill,f_auto,w_1440,e_brightness_hsb:-20/v1596476240/sondercom/about/header_new.jpg" height="500px" width="100%"/>
    {{-- <div class="centered"style="color:white; font-size:50px">Dwella, the future of hospitality</div> --}}
    <center> <p class="centered" style="color:white; font-size:81px; font-family: Times New Roman, Times, serif; line-height:68px">Dwella, the future of hospitality</p></center>
    <cemter><p class="centered1" style="color:white;font-family: Times New Roman, Times, serif; ">At Dwella, we’re on a mission to redefine hospitality by bringing exceptional stays everywhere.</p></cemter>
  </div>
  <div class="container">
    <div class="col-md-12">
      <div class="row">
        <div class="col-md-6">
          <div data-aos="fade-right">
            <img src="https://mb5.bfe.myftpupload.com/wp-content/uploads/2022/03/the-waites-birmingham-al-building-photo-1024x683.jpg" class="img-fluid imgrad3" alt="Responsive image" />
          </div>
        </div>
        <div class="col-md-6">
          <div data-aos="fade-left">
            <p style=" padding-top: 63px;padding-left: 63px; padding-right: 63px;  font-size: 52px;font-family: Times New Roman, Times, serif;">Who we are</p>
            <p style=" padding-left: 63px;">Dwella is a full-service corporate housing and vacation rental management company for premier properties in the central Alabama area. When people visit Montgomery they want to experience what it’s like to be a local.  We give them that experience by providing the amenities and services of a hotel, but through privately owned properties.</p>
          </div>
        </div>
        
      </div>
    </div>
  </div>
  

  
    <div class="container">
      <div class="col-md-12">
        <div class="row">
          <div class="col-md-6">
            <div data-aos="fade-right">
                <p style=" padding-top: 63px;padding-left: 63px; padding-right: 63px; line-height: 51px; font-size: 52px;font-family: Times New Roman, Times, serif;">Designed for Today’s Traveler</p>
                <p style=" padding-left: 63px;">Dwella is a full-service corporate housing and vacation rental management company for premier properties in the central Alabama area. When people visit Montgomery they want to experience what it’s like to be a local. We give them that experience by providing the amenities and services of a hotel, but through privately owned properties.</p>
            </div>
           </div>
          
            <div class="col-md-6">
              <div data-aos="fade-left">
               <img src="https://images.sonder.com/image/upload/c_fill,f_auto,w_1440/v1594143990/sondercom/about/why.jpg" class="img-fluid imgrad3" alt="Responsive image" />
              </div>
            </div>
          
          
        </div>
      </div>
    </div>
   
    
  
    <div>
    <img src="https://mb5.bfe.myftpupload.com/wp-content/uploads/2022/07/center.webp" height="500px" width="100%" style=" border:2px solid black;border-radius: 0px 230px 0px 0px;"/> 
  </div>
</section>
@endsection
  <!-- end map section -->

  