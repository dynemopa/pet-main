@extends('frontend.layout.main')

@section('content')
  <!-- support section -->
<div  class="container support_text" style=" padding-top:80px">
  <div>
    <p class="d57" >Hi! What can we help you with?</p>
  </div>

         
    <div class="input-group d511">  
      <div class="input-group-prepend">  
         <i class="fa fa-search d59"> </i>  
      </div>  
      <input type="search" placeholder="Search here..." aria-describedby="button-addon8" class="form-control d58" >  
    </div>  
 
    <div class="col-md-12">
      <div class="row " style="padding-top: 60px">
        <div class="col-md-4 " >
          <div class="d73">
           <center> <p  class="d72">Our response to Covid-19</p></center>
          </div>
        </div>
  
        <div class="col-md-4 ">
          <div  class="d73">
            <center><p class="d72">How do I check-in?</p></center>
          </div>
        </div>
  
        <div class="col-md-4 ">
          <div  class="d73">
           <center> <p  class="d72">Dwella House Rules</p></center>
          </div>
        </div>
      </div>
    </div><br>
  
  <div>
    <p style="font-size: 30px; font-family: Times New Roman, Times, serif;">All Topics</p>
  </div>
  
  <div class="col-md-12">
    <div class="row ">
      <div class="col-md-4 " >
        <div  class="d74"  style="height: 100%;" >
         <center> <p  class="d72"><b>Finding and Booking a Sonder</b></p></center>
         <ul>
          <li class="d75"  data-toggle="collapse" data-target="#demo">How do I book?</li>
          <div id="demo" class="collapse">
            Lorem ipsum dolor sit amet, consectetur adipisicing elit,
            sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
            quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.
          </div>
          <li class="d75">Are there any extra charges or fees?</li>
          <li class="d75">When and how do I pay?</li>
          <li class="d75">Is there a security deposit?</li>
          <li class="d75">How do I extend my booking?</li>
          <li class="d75">How do I cancel my stay?</li>
          <li class="d75">How do I request an invoice or receipt?</li>
          <li class="d75">Why do I need to create an account to make a reservation?</li>
         
         
        </ul>  
        
        </div>
      </div>

      <div class="col-md-4 ">
        <div  class="d74"  style="height: 100%;" >
          <center><p class="d72"><b>Checking In</b></p></center>
          <ul>
            <li class="d75">What's Sonder’s online check-in process?</li>
            <li class="d75">When's the best time to complete your online check-in process?</li>
            <li class="d75">How will Dwella verify my identity?</li>
            <li class="d75">How will Dwella store & protect my personal information?</li>
            <li class="d75">Do I need to complete the online check-in process if I booked through a third party?</li>
            <li class="d75">Who in my travel party needs to complete the online check-in process?</li>
            <li class="d75">Once I have completed the online check-in process, when will I receive the access instructions for my Dwella?</li>
           
          </ul> 
       
        </div>
      </div>

      <div class="col-md-4  ">
        <div  class="d74">
         <center> <p  class="d72"><b>Staying with us</b></p></center>
         <ul>
          <li  class="d75">How do I access the Wi-Fi?</li>
          <li  class="d75">How do I request an early check-in or a late checkout?</li>
          <li  class="d75">What are your terms of service?</li>
          <li  class="d75">Do you provide daily housekeeping service?</li>
          <li  class="d75">Can I request additional beds if I want extra guests to stay?</li>
          <li  class="d75">Do I need to bring my own toiletries?</li>
          <li  class="d75">How do I request extra towels and sheets?</li>
          <li  class="d75">How do I report an issue during my stay?</li>
          <li  class="d75">What are your house rules?</li>
          
        </ul> 
        </div>
      </div>
    </div>
  </div>
  <hr>

  
</div>


 
  @endsection