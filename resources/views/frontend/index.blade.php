@extends('frontend.layout.main')
@section('content')

<style>
  body {margin:0;height:2000px;}
  
  .icon-bar {
    position: fixed;
    top: 50%;
    left: 97.5%;
    -webkit-transform: translateY(-50%);
    -ms-transform: translateY(-50%);
    transform: translateY(-50%);
  }
  
  .icon-bar a {
    display: block;
    text-align: center;
    padding: 10px;
    transition: all 0.3s ease;
    color: white;
    font-size: 15px;
  }
  
  .icon-bar a:hover {
    background-color: #000;
  }
  
  .facebook {
    background: #3B5998;
    color: white;
  }
  
  .twitter {
    background: #55ACEE;
    color: white;
  }
  
  
  </style>
<section id="hero">
  <div id="heroCarousel" data-bs-interval="5000" class="carousel slide carousel-fade" data-bs-ride="carousel">

    <ol class="carousel-indicators" id="hero-carousel-indicators"></ol>

    <div class="carousel-inner" role="listbox">

      <!-- Slide 1 -->
      <div class="carousel-item active" style="background-image: url(assets/img/slide/slide-1.jpeg)">
        <div class="carousel-container">
          <div class="container">
            <h2 class="animate__animated animate__fadeInDown d51">Enjoy a  Relaxing</span> visit</span><br>to Montgomery Alabama</h2>
            <p class="d51">Dwella mantgomery , AL|5 Listing</p>
            
          </div>
        </div>
      </div>

            
      <!-- Slide 2 -->
      <div class="carousel-item" style="background-image: url('https://img.freepik.com/premium-photo/clean-white-bedroom-nice-view-guesthouse-accommodation-pillows-blankets-white-white-photo-frame-white-space-text_25250-122.jpg?w=2000')">
        <div class="carousel-container">
          <div class="container">
            <h2 class="animate__animated animate__fadeInDown d51" >Modern Downtown Loft </h2>
            <p class="animate__animated animate__fadeInUp d52" >Birmingham, Alabama, is known as the “Dinner Table of the South.” From <br>the country’s best barbecue to global dishes with the influence of the American South </p>
          <p class="d52">Dwella mantgomery , AL|5 Listing</p>
          </div>

        </div>

      </div>
      <!-- Slide 3 -->
      <div class="carousel-item" style="background-image: url('https://media.cntraveler.com/photos/61e08b00abc79c35233fa50b/master/w_2045,h_1363,c_limit/Bedroom-ArtHotel-DenverCO-CRHotel.jpeg')">
        <div class="carousel-container">
          <div class="container ">
            <h2 class="animate__animated animate__fadeInDown d51" >Dwella's unique spaces<br>for travel, work and life </h2>
            <p class="animate__animated animate__fadeInUp d52">Birmingham, Alabama, is known as the<br>“Dinner Table of the South.” From the country’s best barbecue<br> to global dishes with the influence of <br>the American South </p>
          <p class=" d52">Dwella mantgomery , AL|5 Listing</p>
          </div>

        </div>

      </div>

      <!-- Slide 4 -->
      <div class="carousel-item" style="background-image: url(assets/img/slide/slide-4.jpg)">
        <div class="carousel-container">
          <div class="container">
            <h2 class="animate__animated animate__fadeInDown d51">Dwella's unique spaces <br>to Birmingham Alabama </h2>
             <p class=" d52">Dwella mantgomery , AL|5 Listing</p>
          </div>
        </div>
      </div>

    </div>

    <a class="carousel-control-prev" href="#heroCarousel" role="button" data-bs-slide="prev">
      <span class="carousel-control-prev-icon bi bi-chevron-left" aria-hidden="true"></span>
    </a>

    <a class="carousel-control-next" href="#heroCarousel" role="button" data-bs-slide="next">
      <span class="carousel-control-next-icon bi bi-chevron-right" aria-hidden="true"></span>
    </a>

  </div>
</section>

<section class="container" id="rcorners3" style=" margin-top: -46px;">
  <form action="{{url('/montgomery')}}/{{"Montgomery"}}" method="get">
  <div id="rcorners2">
      

      <div class="col-md-12">
        <div class="row">
          <div class="col-md-4">
            <div id="rcorners5">
              <div class="row">
                <div class="col-md-1">
                  <i class="fa fa-search" aria-hidden="true"></i></i>
                </div>

                <div class="col-md-11" style="margin-top:-32px; margin-left:15px;">
                  <input style="width: 90%;" class="form-control d53" list="browsers" name="city" placeholder="Birmingham & Montgomery" >
                  <datalist id="browsers">
                    <option value="Birmingham">Birmingham</option>
                    <option value="Montgomery">Montgomery</option>
                    <option value="Downtown Montgomery, Birmingham">Downtown Montgomery, Birmingham</option>
                    <option value="Downtown Montgomery">Downtown Montgomery</option>
                    <option value="United States">United States</option>
                    <option value="West Midlands">West Midlands</option>
                    
                  </datalist>
                </div>
              </div>
            </div>
          </div>
          <div class="col-md-2">
            <div id="rcorners5">
              <div class="row">
                <div class="col-md-1">
                  <i class="fa fa-calendar" aria-hidden="true"></i>
                </div>

                <div class="col-md-10" style="margin-top:-39px; margin-left:15px;">
                  <input type="text" id="checkindate" name="checkin" class="form-control d53" placeholder="Check In" style="padding: 5px;">
                </div>
              </div>
            </div>
          </div>

          <div class="col-md-2">
            <div id="rcorners5">
              <div class="row">
                <div class="col-md-1">
                  <i class="fa fa-calendar" aria-hidden="true"></i>
                </div>

                <div class="col-md-10" style="margin-top:-39px; margin-left:15px;">
                  <input type="text" id="checkoutdate" name="checkout" class="form-control d53" placeholder="Check Out" style="padding: 5px;">
                </div>
              </div>
            </div>
          </div>
          <div class="col-md-2">
            <div  id="rcorners6" style="margin-left: -39px;">
              <div class="row d54">
                <div class="col-md-1">
                <i class="fa fa-user" aria-hidden="true"></i>
                </div>
                <div class="col-md-10" style="margin-top:-15px; margin-left:15px;">Guests
                    <button onclick="decrement()" class="d5"><span style="font-size: 30px">-</span></button>
                    <input style="width: 31%" name="guest" id=demoInput class=" d55"  type=number min=1 max=10 >
                    <button onclick="increment()" class="d5" >+</button>
                    
                </div>
              </div>
            </div>

          </div>
          <div class="col-md-2" style="padding-top: 9px; padding-left: 26px;">
           <button type="submit"  class="btn btn-primary d56">Search</button>
          </div>
        </div>
      </div>

 </div>
</form>
</section>
<section class="test3">
  <h2 class="bar">Two Great Cities</h2>
  <p class="test2">From a room for a night to a loft for as long as you like, there’s a Dwella for every occasion.</p>



 <div class="col-md-12">
   <div class="row">
      <div class="col-md-6" > 
        @php
        $string = "Montgomery";
      @endphp 
      <a href="{{url('/montgomery')}}/{{$string}}"> <img src="https://images.unsplash.com/photo-1625244724120-1fd1d34d00f6?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxzZWFyY2h8MXx8aG90ZWxzfGVufDB8fDB8fA%3D%3D&w=1000&q=80" class="img-fluid imgrad1" alt="Responsive image" /><p class="p1"><b> 5 Listings</b></p></a>
      
        
      <h2  class="p2">{{$string}} </h2>
      </div>
      @php
      $string = "Birmingham";
    @endphp 
      <div class="col-md-6"> 
        <a href="{{url('/montgomery')}}/{{$string}}"> <img src="https://images.unsplash.com/photo-1615460549969-36fa19521a4f?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxzZWFyY2h8MzR8fGhvdGVsfGVufDB8fDB8fA%3D%3D&w=1000&q=80" class="img-fluid imgrad2 " alt="Responsive image"/>
        <p class="p1"><b> 1 Listings</b></p></a>
        <h2 class="p2">{{$string}}</h2>
      </div>
    </div>
  </div>

  
     
</section>

<section class="section1 container-fluid" style="height: 26%;">
<div class="col-md-12">
  <div class="row">
      <div class="col-md-6 p4">
        <div class="row">
          <div class="col-md-12 "> 
            <h1 class="p3">Mobile version of Dwella</h1>
            <p>From award-winning interiors to curated neighborhood guides, our stays celebrate what’s special about each city we call home.</p>
          </div>
        </div>

        <div class="row">
          <div class="col-md-3 "> <i class="fa fa-comments-o fa-2xs p5" aria-hidden="true"></i></div>
          <div class="col-md-3 "> <p>24/7 in-app customer service</p></div>
          <div class="col-md-3 "> <i class="fa fa-wifi p5" aria-hidden="true"></i></i></div>
          <div class="col-md-3 "> <p>One-tap WiFi access</p></div>
        </div>

        <div class="row">
          <div class="col-md-3 "> <i class="fa fa-map-marker p5" aria-hidden="true"></i></div>
          <div class="col-md-3 "> <p>Neighborhood guides</p></div>
          <div class="col-md-3 "><i class="fa fa-clock-o p5" aria-hidden="true"></i></i></div>
          <div class="col-md-3 "> <p>Request late checkout</p></div>
        </div>
      </div>
     
     
     <div class="col-md-6" id="rigt-mob-dwella">
        <div class="col-md-12" >             
            <video id="mob-video" src="https://secureservercdn.net/198.71.233.183/mb5.bfe.myftpupload.com/wp-content/uploads/2022/07/final_62bec758f95a5f00be46a52c_443752__1__AdobeExpress-1.mp4" autoplay="" loop="" muted="muted" playsinline="" controlslist="nodownload "></video>
         
        </div>

    </div>
</section>



<section>
<h5 class="h5header">A stay infused with creativity and culture</h5>
<p class="p6">From award-winning interiors to curated neighborhood guides, our stays celebrate what’s special about each city we call home</p>
 
</section>

<!--  tab field -->
<section>
<div class="container">
  
    <div class="row">
      @php
          $city="Montgomery";
      @endphp
      <a rel="tab_div1" onclick="javascript:ShowMyDiv(this);" class="btn btn-primary rs">{{$city}}</a>
        

      @php
      $city="Birmingham";
  @endphp
      <a rel="tab_div2" onclick="javascript:ShowMyDiv(this);" class="btn btn-primary rs">{{$city}}</a>
        
    </div>
 
   <div class="tabcontents">
      <div class="tabcontent" id="tab_div1" style="display: block;">
       <div class="col-md-12">
          <div class="row">
              <div class="col-md-6" >
                <img src=" https://secureservercdn.net/198.71.233.183/mb5.bfe.myftpupload.com/wp-content/uploads/2022/02/04-1-1.png" class="img-fluid imgrad1" alt="Responsive image" />

              </div>
              <div class="col-md-6" >
                <i class="fa fa-map-marker" aria-hidden="true"> 79th Commerce St</i>
                <p class="d46" >79 Commerce St.</p>
                <p>Located in the Heart of downtown Montgomery in the Alabama region, there is no equal.  Never seen before views of Commerce and Bibb Streets. Walking distance to numerous restaurants, pubs, parks and entertainment. Rosa Parks Museum and Civil Rights Memorial nearby, Dwella at 79 Commerce Street provides accommodations with free private parking.<br> Popular points of interest near the apartment include Dexter Avenue Baptist Church, Alabama Capitol and Montgomery Performing Arts Centre. The nearest airport is Montgomery Regional Airport, 7 miles from Dwella at 79 Commerce Street.<br> Couples in particular like the location – they rated it 10 for a two-person trip</p>


               
              </div>
              <section>

    <div class="album py-5">
      <div class="container">

        <div class="row">
          <div class="col-md-4">
            <div class="card mb-4 box-shadow d411 " >
              <img class="card-img-top d411" src="https://secureservercdn.net/198.71.233.183/mb5.bfe.myftpupload.com/wp-content/uploads/2022/03/b3ad365b-b1ff-4a9b-9e6f-b2b201fdaab7-400x314.jpeg">
              <div class="card-body d412" >
                <p class="card-text  d49" >Spacious 1BR at 79 Commerce</p>
                 <i class="fa fa-map-marker" aria-hidden="true"></i><div style="font-size: 14px; color: darkgray; margin-top: -24px; margin-left: 21px;">Downtown Montgomery, Downtowns, Montgomery, Montgomery</div>
                 <i class="fa fa-home" aria-hidden="true"></i>
                 <div style="font-size: 14px; color: darkgray; margin-top: -24px; margin-left: 21px;">Apartment / Private room</div>
               
              </div>
            </div>
          </div>
          <div class="col-md-4">
            <div class="card mb-4 box-shadow d411 ">
              <img class="card-img-top d411" src="https://secureservercdn.net/198.71.233.183/mb5.bfe.myftpupload.com/wp-content/uploads/2015/04/05-400x314.jpeg" alt="Card image cap">
              <div class="card-body d412 ">
                <span class="fa fa-star checked"></span>
                  <span class="fa fa-star checked"></span>
                  <span class="fa fa-star checked"></span>
                  <span class="fa fa-star checked"></span>
                  <span class="fa fa-star checked"></span>
                   <p class="card-text d49 " >Charming 1BR at 79 Commerce</p>
                    <i class="fa fa-map-marker" aria-hidden="true"></i><div style="font-size: 14px; color: darkgray; margin-top: -24px; margin-left: 21px;">Downtown Montgomery, Downtowns, Montgomery, Montgomery</div>
                 <i class="fa fa-home" aria-hidden="true"></i>
                 <div style="font-size: 14px; color: darkgray; margin-top: -24px; margin-left: 21px;">Apartment / Private room</div>
               
               
              </div>
            </div>
          </div>
          <div class="col-md-4">
            <div class="card mb-4 box-shadow d411 ">
              <img class="card-img-top d411 " src="https://secureservercdn.net/198.71.233.183/mb5.bfe.myftpupload.com/wp-content/uploads/2022/03/04-400x314.jpg">
              <div class="card-body d412 " >

                <p class="card-text  d49" >Bright 1 BR at 79 Commerce</p>
                 <i class="fa fa-map-marker" aria-hidden="true"></i><div style="font-size: 14px; color: darkgray; margin-top: -24px; margin-left: 21px;">Downtowns, Montgomery, Montgomery</div>
                 <i class="fa fa-home" aria-hidden="true"></i>
                 <div style="font-size: 14px; color: darkgray; margin-top: -24px; margin-left: 21px;">Apartment / Private room</div>
              
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
   
          </div>
        </div> 



      </div>
      <div class="tabcontent" id="tab_div2" style="display: none;">

          <div class="col-md-12">
            <div class="row">
              <div class="col-md-6" >
                <img src=" https://secureservercdn.net/198.71.233.183/mb5.bfe.myftpupload.com/wp-content/uploads/2022/02/04-1-1.png" class="img-fluid imgrad1" alt="Responsive image" />
              </div>
              <div class="col-md-6" >
                <i class="fa fa-map-marker" aria-hidden="true"> The Waites</i>
                <p class="d46" >About the Waites</p>
                <p>The Waites is a brand-new community opening June 2017 offering 45 residences and retail space in the heart of downtown Birmingham. Here you will experience the best qualities of modern, urban living paired with the comfort and convenience of having an exciting city right at your doorstep. We are located only steps away from UAB and some of the city’s largest employers.<br> Popular points of interest near the apartment include Dexter Avenue Baptist Church, Alabama Capitol and Montgomery Performing Arts Centre. The nearest airport is Montgomery Regional Airport, 7 miles from Dwella at 79 Commerce Street.<br> Couples in particular like the location – they rated it 10 for a two-person trip</p>
              </div>
            </div>
               <section>

    <div class="album py-5">
      <div class="container">

        <div class="row">
          <div class="col-md-4">
            <div class="card mb-4 box-shadow d411 " >
              <img class="card-img-top d411" src="https://secureservercdn.net/198.71.233.183/mb5.bfe.myftpupload.com/wp-content/uploads/2022/03/12_707_Richard_Arrington_Blvd12_mls-400x314.jpg">
              <div class="card-body d412" >
                <p class="card-text  d49" >Spacious 1BR at 79 Commerce</p>
                 <i class="fa fa-map-marker" aria-hidden="true"></i><div style="font-size: 14px; color: darkgray; margin-top: -24px; margin-left: 21px;">Birmingham</div>
                 <i class="fa fa-home" aria-hidden="true"></i>
                 <div style="font-size: 14px; color: darkgray; margin-top: -24px; margin-left: 21px;">Apartment / Private room</div>
               
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
          </div>
       </div>
</section>
<!--  end tab section -->




<!-- video section -->
<section>
    <div class="video-background-holder">
<div class="video-background-overlay"></div>
<video playsinline="playsinline" autoplay="autoplay" muted="muted" loop="loop">
      <source src="https://images.sonder.com/video/upload/v1618348428/catalina/homepage/background-video.mp4" type="video/mp4">
  </video>
<div class="video-background-content container h-100">
  <div class="d-flex h-100 text-center align-items-center">
    <div class="w-100 text-white">
      <h1 class="test1">Visit Historical<br>Montgomery, Alabama</h1>
      <p class="test2">Montgomery has a lively art scene with the popular Alabama Shakespeare Festival, <br>the Montgomery Museum of Fine Arts and Performing Arts Center.</p>
      <div class="col-md-2" style="padding-top: 9px;">
           <button type="button"  class="btn btn-primary">Book Now</button>
          </div>
      
    </div>
  </div>
</div>
</div>
</section>
<!-- End video section -->
<!-- start heading -->
<section>
<div>
  <p  class="heading_bar">What are Guests are saying</p>
  <p  class="heading_bar2">We are committed to making our clients happy with our services</p>
</div>
</section>
<!-- end heading -->

<!-- slider section -->

<section class="testimonials">
    <div class="container">
      <div class="row">
        <div class="col-sm-12">
          <div id="customers-testimonials" class="owl-carousel">

            <!--TESTIMONIAL 1 -->
            <div class="item"  >
              <div class="shadow-effect" style=" background-color: #ffeebf;">
                
                <p>KRESStacular !!I decided to try out Dwella Kress in downtown Montgomery and let me tell you.... I WILL NEVER STAY AT ANOTHER PROPERTY WHEN VISITING! The process of booking was very easy and I enjoyed knowing that the person of contact was only a text message away! The apartment was very clean and quiet. </p><br>
                <p>Bridgshe'</p>
                 <span class="fa fa-star checked"></span>
                <span class="fa fa-star checked"></span>
                <span class="fa fa-star checked"></span>
                <span class="fa fa-star checked"></span>
                 <span class="fa fa-star checked"></span>
              </div>
            </div>
            <!--END OF TESTIMONIAL 1 -->
            <!--TESTIMONIAL 2 -->
            <div class="item">
              <div class="shadow-effect" style=" background-color: #eaece2;;">
                
                <p>I highly recommend staying at Dwella Loft. We were there for work and based on pricing in the area much more worth paying for dwella loft than staying at a Airbnb or hotel rate. The check in was so easy and fast. The kitchen was fully furnished and bed was very comfortable. It’s above mellow mushroom downtown so very convenient to any nighttime downtown activities.</p><br>
                <p>Nicole Hill</p>
                <span class="fa fa-star checked"></span>
                <span class="fa fa-star checked"></span>
                <span class="fa fa-star checked"></span>
                <span class="fa fa-star checked"></span>
                <span class="fa fa-star checked"></span>
              
            </div>
          </div>
            <!--END OF TESTIMONIAL 2 -->
            <!--TESTIMONIAL 3 -->
            <div class="item">
              <div class="shadow-effect" style="  background-color: #d6c1c1;">
                
                <p>Amazing service. I booked with Dwella for 3 nights as I was in Alabama for work. The apartment had everything I needed and bed was extremely comfortable. The WIFI was very fast, which is good for work. They also checked on me almost everyday to make sure I had everything I needed.</p><br>
                <p> Michael  "Moe's Tube" Khoury </p>
                <span class="fa fa-star checked"></span>
                <span class="fa fa-star checked"></span>
                <span class="fa fa-star checked"></span>
                <span class="fa fa-star checked"></span>
                <span class="fa fa-star checked"></span>
              </div>
            </div>
            <!--END OF TESTIMONIAL 3 -->
            
          </div>
        </div>
      </div>
    </div>
  </section>
<!--  end slider section -->
<!-- start Album sction -->
<section>

    <div class="album py-5">
      <div class="container " data-aos="zoom-in  "  >

        <div class="row">
          <div class="col-md-4">
            <div class="card mb-4 box-shadow d48">
              <a href="{{url('/news')}}"><img class="card-img-top d47" src="https://secureservercdn.net/198.71.233.183/mb5.bfe.myftpupload.com/wp-content/uploads/2022/07/hero-longtermlease-300x200.webp"></a>
              <div class="card-body d43" >
                <p class="card-text  d42" >How we’ve increased cleaning standards for Dwella across the globe</p>
                 <p class="card-text d41"  >At Dwella, we know that now more than ever, a clean and safe place to stay is a top concern. Your health and well-being are</p>
                <div class="d-flex justify-content-between align-items-center">
                  
                 
                </div>
              </div>
            </div>
          </div>
          <div class="col-md-4">
            <div class="card mb-4 box-shadow d48">
              <a href="{{url('/news')}}"><img class="card-img-top d47" src="https://secureservercdn.net/198.71.233.183/mb5.bfe.myftpupload.com/wp-content/uploads/2022/07/Hayleigh-300x197.webp" alt="Card image cap"></a>
              <div class="card-body d43">
                <p class="card-text d42" >Life at Dwella: creating memorable experiences for our guests</p>
                <p class="card-text d41">Our Service Principles are a set of values that guides our customer guest services team members when we’re communicating with guests. We incorporate our principles</p>
                <div class="d-flex justify-content-between align-items-center">
                  
               
                </div>
              </div>
            </div>
          </div>
          <div class="col-md-4">
            <div class="card mb-4 box-shadow d48">
            <a href="{{url('/news')}}">  <img class="card-img-top d47" src="https://secureservercdn.net/198.71.233.183/mb5.bfe.myftpupload.com/wp-content/uploads/2022/07/Sonder-Living-Room-1-300x200.webp"></a>
              <div class="card-body d43" >
                <p class="card-text d42" >Introducing Dwella backgrounds for your next Zoom meeting</p>
                <p class="card-text d41"  >These days, it feels like everyone lives on Zoom, whether for team check-ins, all-hands meetings, or happy hours with friends and family. That’s why one</p>
                <div class="d-flex justify-content-between align-items-center">
                 
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <div class="container text-center d45">
      <center>
       <a href="{{url('/blog')}}"><button type="button" class="btn btn-success">Go to blog</button></a>
    </center>
    </div>
</section>
<div class="icon-bar">
  <a href="https://www.facebook.com/login/" class="facebook"><i class="fa fa-facebook"></i></a> 
  <a href="https://www.instagram.com/accounts/login/" class="twitter"><i class="fa fa-instagram"></i></a> 
</div>


<!-- end  Album sction -->
  @endsection