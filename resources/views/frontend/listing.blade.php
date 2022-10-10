@extends('layouts.app')

@section('content')

  <a href="{{route('showlisting')}}"> <button type="button" class="btn btn-primary text-right">BACK</button></a>
    <div class="container">
  
      
    @if(session('success'))
    <div class="alert alert-success">
      {{ session('success') }}
    </div> 
    @endif
    <div>
      <center><h1><u>Listing From</u></h1></center>
    </div>
     
  
    <form  method="post" action="{{url('/file/')}}"  enctype="multipart/form-data">
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
        <span style="color: red">@error('filenames'){{$message}}@enderror</span>
        
    <div class="form-group">
        <label for="">title</label>
       
        <input type="text" id="title"  class="form-control"  name="title"  value="{{old('title')}}" required >
       <span style="color: red">@error('title'){{$message}}@enderror</span>
      </div>
      <div class="form-group">
        <label for="">slug</label>
        <input type="text" class="form-control"  name="slug"  id="slug"  required >
       <span style="color: red">@error('slug'){{$message}}@enderror</span>
      </div>
      <div class="form-group">
        <label for="">content</label>

     <textarea class="form-control" id="content" name="content" rows="4" cols="50" required >{{ old('content') }}</textarea><br>
     <span style="color: red">@error('content'){{$message}}@enderror</span>
      
      </div>
      <div class="form-group">
          <label for="">Price per Night</label>
          <input type="text" class="form-control" id="price_per_night" name="price_per_night" value="{{old('price_per_night')}}"required ><br>
          <span style="color: red">@error('price_per_night'){{$message}}@enderror</span>
      </div>
      <div class="form-group">
          <label for="">Cleaning Fee: </label>
          <input type="text" class="form-control" id="cleaning_fee" name="cleaning_fee" value="{{old('cleaning_fee')}}" required><br>
          <span style="color: red">@error('cleaning_fee'){{$message}}@enderror</span>
      </div>
      <div class="form-group">
          <label for="">Sleeping Situation</label><br><br>
          <input type="checkbox" id="sleeping_situation" name="sleeping_situation[]" value="1 King Bed">
          <label for="">1 King Bed</label><br>
          <input type="checkbox" id="sleeping_situation" name=" sleeping_situation[]" value="1 Couch">
          <label for="vehicle1">1 Couch</label><br>
          <span style="color: red">@error('sleeping_situation'){{$message}}@enderror</span>
      </div>
      <div  class="form-group">
          <h3>Property Address</h3>
          
          <div class="form-group">
            <label for="">address</label>
            <input type="text" class="form-control" id="address" name="address"  ><br>
              <span style="color: red">@error('address'){{$message}}@enderror</span>
          </div>
          <div class="form-group">
              <label for="">Area:</label>
              <input type="text" class="form-control" id="area" name="area" value="{{old('area')}}" required ><br>
              <span style="color: red">@error('area'){{$message}}@enderror</span>
          </div>
          <div class="form-group">
              <label for="">State:</label>
              <input type="text" class="form-control" id="state" name="state" value="{{old('state')}}" required>
              <span style="color: red">@error('state'){{$message}}@enderror</span>
          </div>
          <div class="form-group">
              <label for="">Country:</label>

              {{-- <input type="text" class="form-control" id="country" name="country"> --}}
              <select class="form-control" id="country" name="country" >
                <option value="" selected>Country</option>
                <option value="Afghanistan">Afghanistan</option>
                <option value="Albania">Albania</option>
                <option value="Algeria">Algeria</option>
                <option value="American Samoa">American Samoa</option>
                <option value="Andorra">Andorra</option>
                <option value="Angola">Angola</option>
                <option value="Anguilla">Anguilla</option>
                <option value="Antartica">Antarctica</option>
                <option value="Antigua and Barbuda">Antigua and Barbuda</option>
                <option value="Argentina">Argentina</option>
                <option value="Armenia">Armenia</option>
                <option value="Aruba">Aruba</option>
                <option value="Australia">Australia</option>
                <option value="Austria">Austria</option>
                <option value="Azerbaijan">Azerbaijan</option>
                <option value="Bahamas">Bahamas</option>
                <option value="Bahrain">Bahrain</option>
                <option value="Bangladesh">Bangladesh</option>
                <option value="Barbados">Barbados</option>
                <option value="Belarus">Belarus</option>
                <option value="Belgium">Belgium</option>
                <option value="Belize">Belize</option>
                <option value="Benin">Benin</option>
                <option value="Bermuda">Bermuda</option>
                <option value="Bhutan">Bhutan</option>
                <option value="Bolivia">Bolivia</option>
                <option value="Bosnia and Herzegowina">Bosnia and Herzegowina</option>
                <option value="Botswana">Botswana</option>
                <option value="Bouvet Island">Bouvet Island</option>
                <option value="Brazil">Brazil</option>
                <option value="British Indian Ocean Territory">British Indian Ocean Territory</option>
                <option value="Brunei Darussalam">Brunei Darussalam</option>
                <option value="Bulgaria">Bulgaria</option>
                <option value="Burkina Faso">Burkina Faso</option>
                <option value="Burundi">Burundi</option>
                <option value="Cambodia">Cambodia</option>
                <option value="Cameroon">Cameroon</option>
                <option value="Canada">Canada</option>
                <option value="Cape Verde">Cape Verde</option>
                <option value="Cayman Islands">Cayman Islands</option>
                <option value="Central African Republic">Central African Republic</option>
                <option value="Chad">Chad</option>
                <option value="Chile">Chile</option>
                <option value="China">China</option>
                <option value="Christmas Island">Christmas Island</option>
                <option value="Cocos Islands">Cocos (Keeling) Islands</option>
                <option value="Colombia">Colombia</option>
                <option value="Comoros">Comoros</option>
                <option value="Congo">Congo</option>
                <option value="Congo">Congo, the Democratic Republic of the</option>
                <option value="Cook Islands">Cook Islands</option>
                <option value="Costa Rica">Costa Rica</option>
                <option value="Cota D'Ivoire">Cote d'Ivoire</option>
                <option value="Croatia">Croatia (Hrvatska)</option>
                <option value="Cuba">Cuba</option>
                <option value="Cyprus">Cyprus</option>
                <option value="Czech Republic">Czech Republic</option>
                <option value="Denmark">Denmark</option>
                <option value="Djibouti">Djibouti</option>
                <option value="Dominica">Dominica</option>
                <option value="Dominican Republic">Dominican Republic</option>
                <option value="East Timor">East Timor</option>
                <option value="Ecuador">Ecuador</option>
                <option value="Egypt">Egypt</option>
                <option value="El Salvador">El Salvador</option>
                <option value="Equatorial Guinea">Equatorial Guinea</option>
                <option value="Eritrea">Eritrea</option>
                <option value="Estonia">Estonia</option>
                <option value="Ethiopia">Ethiopia</option>
                <option value="Falkland Islands">Falkland Islands (Malvinas)</option>
                <option value="Faroe Islands">Faroe Islands</option>
                <option value="Fiji">Fiji</option>
                <option value="Finland">Finland</option>
                <option value="France">France</option>
                <option value="France Metropolitan">France, Metropolitan</option>
                <option value="French Guiana">French Guiana</option>
                <option value="French Polynesia">French Polynesia</option>
                <option value="French Southern Territories">French Southern Territories</option>
                <option value="Gabon">Gabon</option>
                <option value="Gambia">Gambia</option>
                <option value="Georgia">Georgia</option>
                <option value="Germany">Germany</option>
                <option value="Ghana">Ghana</option>
                <option value="Gibraltar">Gibraltar</option>
                <option value="Greece">Greece</option>
                <option value="Greenland">Greenland</option>
                <option value="Grenada">Grenada</option>
                <option value="Guadeloupe">Guadeloupe</option>
                <option value="Guam">Guam</option>
                <option value="Guatemala">Guatemala</option>
                <option value="Guinea">Guinea</option>
                <option value="Guinea-Bissau">Guinea-Bissau</option>
                <option value="Guyana">Guyana</option>
                <option value="Haiti">Haiti</option>
                <option value="Heard and McDonald Islands">Heard and Mc Donald Islands</option>
                <option value="Holy See">Holy See (Vatican City State)</option>
                <option value="Honduras">Honduras</option>
                <option value="Hong Kong">Hong Kong</option>
                <option value="Hungary">Hungary</option>
                <option value="Iceland">Iceland</option>
                <option value="India">India</option>
                <option value="Indonesia">Indonesia</option>
                <option value="Iran">Iran (Islamic Republic of)</option>
                <option value="Iraq">Iraq</option>
                <option value="Ireland">Ireland</option>
                <option value="Israel">Israel</option>
                <option value="Italy">Italy</option>
                <option value="Jamaica">Jamaica</option>
                <option value="Japan">Japan</option>
                <option value="Jordan">Jordan</option>
                <option value="Kazakhstan">Kazakhstan</option>
                <option value="Kenya">Kenya</option>
                <option value="Kiribati">Kiribati</option>
                <option value="Democratic People's Republic of Korea">Korea, Democratic People's Republic of</option>
                <option value="Korea">Korea, Republic of</option>
                <option value="Kuwait">Kuwait</option>
                <option value="Kyrgyzstan">Kyrgyzstan</option>
                <option value="Lao">Lao People's Democratic Republic</option>
                <option value="Latvia">Latvia</option>
                <option value="Lebanon" >Lebanon</option>
                <option value="Lesotho">Lesotho</option>
                <option value="Liberia">Liberia</option>
                <option value="Libyan Arab Jamahiriya">Libyan Arab Jamahiriya</option>
                <option value="Liechtenstein">Liechtenstein</option>
                <option value="Lithuania">Lithuania</option>
                <option value="Luxembourg">Luxembourg</option>
                <option value="Macau">Macau</option>
                <option value="Macedonia">Macedonia, The Former Yugoslav Republic of</option>
                <option value="Madagascar">Madagascar</option>
                <option value="Malawi">Malawi</option>
                <option value="Malaysia">Malaysia</option>
                <option value="Maldives">Maldives</option>
                <option value="Mali">Mali</option>
                <option value="Malta">Malta</option>
                <option value="Marshall Islands">Marshall Islands</option>
                <option value="Martinique">Martinique</option>
                <option value="Mauritania">Mauritania</option>
                <option value="Mauritius">Mauritius</option>
                <option value="Mayotte">Mayotte</option>
                <option value="Mexico">Mexico</option>
                <option value="Micronesia">Micronesia, Federated States of</option>
                <option value="Moldova">Moldova, Republic of</option>
                <option value="Monaco">Monaco</option>
                <option value="Mongolia">Mongolia</option>
                <option value="Montserrat">Montserrat</option>
                <option value="Morocco">Morocco</option>
                <option value="Mozambique">Mozambique</option>
                <option value="Myanmar">Myanmar</option>
                <option value="Namibia">Namibia</option>
                <option value="Nauru">Nauru</option>
                <option value="Nepal">Nepal</option>
                <option value="Netherlands">Netherlands</option>
                <option value="Netherlands Antilles">Netherlands Antilles</option>
                <option value="New Caledonia">New Caledonia</option>
                <option value="New Zealand">New Zealand</option>
                <option value="Nicaragua">Nicaragua</option>
                <option value="Niger">Niger</option>
                <option value="Nigeria">Nigeria</option>
                <option value="Niue">Niue</option>
                <option value="Norfolk Island">Norfolk Island</option>
                <option value="Northern Mariana Islands">Northern Mariana Islands</option>
                <option value="Norway">Norway</option>
                <option value="Oman">Oman</option>
                <option value="Pakistan">Pakistan</option>
                <option value="Palau">Palau</option>
                <option value="Panama">Panama</option>
                <option value="Papua New Guinea">Papua New Guinea</option>
                <option value="Paraguay">Paraguay</option>
                <option value="Peru">Peru</option>
                <option value="Philippines">Philippines</option>
                <option value="Pitcairn">Pitcairn</option>
                <option value="Poland">Poland</option>
                <option value="Portugal">Portugal</option>
                <option value="Puerto Rico">Puerto Rico</option>
                <option value="Qatar">Qatar</option>
                <option value="Reunion">Reunion</option>
                <option value="Romania">Romania</option>
                <option value="Russia">Russian Federation</option>
                <option value="Rwanda">Rwanda</option>
                <option value="Saint Kitts and Nevis">Saint Kitts and Nevis</option> 
                <option value="Saint LUCIA">Saint LUCIA</option>
                <option value="Saint Vincent">Saint Vincent and the Grenadines</option>
                <option value="Samoa">Samoa</option>
                <option value="San Marino">San Marino</option>
                <option value="Sao Tome and Principe">Sao Tome and Principe</option> 
                <option value="Saudi Arabia">Saudi Arabia</option>
                <option value="Senegal">Senegal</option>
                <option value="Seychelles">Seychelles</option>
                <option value="Sierra">Sierra Leone</option>
                <option value="Singapore">Singapore</option>
                <option value="Slovakia">Slovakia (Slovak Republic)</option>
                <option value="Slovenia">Slovenia</option>
                <option value="Solomon Islands">Solomon Islands</option>
                <option value="Somalia">Somalia</option>
                <option value="South Africa">South Africa</option>
                <option value="South Georgia">South Georgia and the South Sandwich Islands</option>
                <option value="Span">Spain</option>
                <option value="SriLanka">Sri Lanka</option>
                <option value="St. Helena">St. Helena</option>
                <option value="St. Pierre and Miguelon">St. Pierre and Miquelon</option>
                <option value="Sudan">Sudan</option>
                <option value="Suriname">Suriname</option>
                <option value="Svalbard">Svalbard and Jan Mayen Islands</option>
                <option value="Swaziland">Swaziland</option>
                <option value="Sweden">Sweden</option>
                <option value="Switzerland">Switzerland</option>
                <option value="Syria">Syrian Arab Republic</option>
                <option value="Taiwan">Taiwan, Province of China</option>
                <option value="Tajikistan">Tajikistan</option>
                <option value="Tanzania">Tanzania, United Republic of</option>
                <option value="Thailand">Thailand</option>
                <option value="Togo">Togo</option>
                <option value="Tokelau">Tokelau</option>
                <option value="Tonga">Tonga</option>
                <option value="Trinidad and Tobago">Trinidad and Tobago</option>
                <option value="Tunisia">Tunisia</option>
                <option value="Turkey">Turkey</option>
                <option value="Turkmenistan">Turkmenistan</option>
                <option value="Turks and Caicos">Turks and Caicos Islands</option>
                <option value="Tuvalu">Tuvalu</option>
                <option value="Uganda">Uganda</option>
                <option value="Ukraine">Ukraine</option>
                <option value="United Arab Emirates">United Arab Emirates</option>
                <option value="United Kingdom">United Kingdom</option>
                <option value="United States">United States</option>
                <option value="United States Minor Outlying Islands">United States Minor Outlying Islands</option>
                <option value="Uruguay">Uruguay</option>
                <option value="Uzbekistan">Uzbekistan</option>
                <option value="Vanuatu">Vanuatu</option>
                <option value="Venezuela">Venezuela</option>
                <option value="Vietnam">Viet Nam</option>
                <option value="Virgin Islands (British)">Virgin Islands (British)</option>
                <option value="Virgin Islands (U.S)">Virgin Islands (U.S.)</option>
                <option value="Wallis and Futana Islands">Wallis and Futuna Islands</option>
                <option value="Western Sahara">Western Sahara</option>
                <option value="Yemen">Yemen</option>
                <option value="Serbia">Serbia</option>
                <option value="Zambia">Zambia</option>
                <option value="Zimbabwe">Zimbabwe</option>
            </select>
            <span style="color: red">@error('country'){{$message}}@enderror</span>
          </div>
          <div class="form-group">
              <label for="">City:</label>
              <select class="form-control" id="city" name="city" >
                <option value="" selected>City</option>
                <option value="Montgomery">Montgomery</option>
                <option value="Birmingham">Birmingham</option>
              </select>
              <span style="color: red">@error('city'){{$message}}@enderror</span>
          </div>
          <div class="form-group">
              <label for="">Zip</label>
              <input type="number" class="form-control" id="zip" name="zip" value="{{old('zip')}}" required>
              <span style="color: red">@error('zip'){{$message}}@enderror</span>
          </div>
      </div>
      <div>
          <label for="">Property Details</label>
          <div class="form-group">
              <label for="">Property ID</label>
              <input type="number" class="form-control" id="property_id" name="property_id" value="{{old('property_id')}}"required >
              <span style="color: red">@error('property_id'){{$message}}@enderror</span>
          </div>
          <div class="form-group">
            <label>Room</label><br/>
            <select name="room" id="room" class="form-control" >
                <option value="">Rooms</option>
                <option value="1">1</option>
                <option value="2">2</option>
                <option value="3">3</option>
                <option value="4">4</option>
                <option value="5">5</option>
                <option value="6">6</option>
              </select>
              <span style="color: red">@error('room'){{$message}}@enderror</span>
          </div>
          <div class="form-group">
              <label for="">Bathrooms</label>
              <select name="bathrooms" id="bathrooms" class="form-control">
                <option value="">Bathrooms</option>
                <option value="1">1</option>
                <option value="2">2</option>
                <option value="3">3</option>
                <option value="4">4</option>
                <option value="5">5</option>
                <option value="6">6</option>
              </select>
              <span style="color: red">@error('bathrooms'){{$message}}@enderror</span>
          </div>
          <div class="form-group">
              <label for="">Property Size:</label>
              <input type="text" class="form-control" id="property_size:" name="property_size" placeholder=" Example:25ft2" value="{{old('property_size')}}" required ><br>
              <span style="color: red">@error('property_size'){{$message}}@enderror</span>
          </div>
          <div class="form-group">
              <label for="">Bedrooms:</label>
              <select name="bedrooms" id="bedrooms" class="form-control">
                <option value="">Bedrooms</option>
                <option value="1">1</option>
                <option value="2">2</option>
                <option value="3">3</option>
                <option value="4">4</option>
                <option value="5">5</option>
                <option value="6">6</option>
              </select>
              <span style="color: red">@error('bedrooms'){{$message}}@enderror</span>
              
          </div>
          <div class="form-group">
              <label for="">Please Note:</label>
              
              <textarea  rows="4" cols="50" class="form-control" id="please_note" name="please_note"  value="{{old('please_note')}}" required></textarea><br>
              <span style="color: red">@error('please_note'){{$message}}@enderror</span>
          </div>
      </div><br>
    <div class="col-md-12">
        <label for="">amenities and Features</label><br>
        <div class="row">
            <div class="col-md-4">
               
                <input type="checkbox" id="amenities" name="amenities[]" value="Air Conditioner ">
                <label for="vehicle1"> Air Conditioner</label><br>
                <input type="checkbox" id="amenities" name="amenities[]"value="Breakfast Included< ">
                <label for="vehicle2">Breakfast Included</label><br>
                <input type="checkbox" id="amenities" name="amenities[]"value="Dryer ">
                <label for="vehicle3"> Dryer</label><br>
        
                <input type="checkbox" id="amenities" name="amenities[]"value="Essentials ">
                <label for="vehicle1">Essentials</label><br>
                <input type="checkbox" id="amenities" name="amenities[]"value="Fax ">
                <label for="vehicle2">Fax</label><br>
                <input type="checkbox" id="amenities" name="amenities[]"value=" Gym">
                <label for="vehicle3"> Gym</label><br>
        
                <input type="checkbox" id="amenities" name="amenities[]"value="Hot Tub ">
                <label for="vehicle1">Hot Tub</label><br>
                <input type="checkbox" id="amenities" name="amenities[]"value=" Internet">
                <label for="vehicle2">Internet</label><br>
                <input type="checkbox" id="amenities" name="amenities[]"value="Non Smoking ">
                <label for="vehicle3"> Non Smoking</label><br>
        
               
            </div>
            <div class="col-md-4">
                <input type="checkbox" id="amenities" name="amenities[]"value=" Phone (booth/lines)">
                <label for="vehicle1">Phone (booth/lines)</label><br>
                <input type="checkbox" id="amenities" name="amenities[]"value="Projector(s) ">
                <label for="vehicle2">Projector(s)</label><br>
                <input type="checkbox" id="amenities" name="amenities[]"value="Smoking Allowed ">
                <label for="vehicle3"> Smoking Allowed</label><br>
        
                <input type="checkbox" id="amenities" name="amenities[]"value="TV ">
                <label for="vehicle1">TV</label><br>
                <input type="checkbox" id="amenities" name="amenities[]"value="Wheelchair Accessible ">
                <label for="vehicle2">Wheelchair Accessible</label><br>
               
                <input type="checkbox" id="amenities" name="amenities[]"value="Bar / Restaurant ">
                <label for="vehicle3">Bar / Restaurant</label><br>
        
                <input type="checkbox" id="amenities" name="amenities[]"value="Doorman ">
                <label for="vehicle1">Doorman</label><br>
                <input type="checkbox" id="amenities" name="amenities[]"value=" Elevator in Building">
                <label for="vehicle2">Elevator in Building</label><br>
                <input type="checkbox" id="amenities" name="amenities[]"value="Family/Kid Friendly ">
                <label for="vehicle3">Family/Kid Friendly</label><br>
        
            </div>
            <div class="col-md-4">
                
                <input type="checkbox" id="amenities" name="amenities[]"value="Free Parking on Premises ">
                <label for="vehicle1">Free Parking on Premises</label><br>
                <input type="checkbox" id="amenities" name="amenities[]" value="Heating">
                <label for="vehicle2">Heating</label><br>
                <input type="checkbox" id="amenities" name="amenities[]" value="Indoor Fireplace ">
                <label for="vehicle3">Indoor Fireplace</label><br>
        
                <input type="checkbox" id="amenities" name="amenities[]"value=" Kitchen">
                <label for="vehicle1">Kitchen</label><br>
                <input type="checkbox" id="amenities" name="amenities[]" value="Pets Allowed ">
                <label for="vehicle2">Pets Allowed</label><br>
                <input type="checkbox" id="amenities" name="amenities[]"value="Pool ">
                <label for="vehicle3">Pool</label><br>
        
                <input type="checkbox" id="amenities" name="amenities[]"value=" Scanner / Printer">
                <label for="vehicle1">Scanner / Printer</label><br>
                <input type="checkbox" id="amenities" name="amenities[]"value="Suitable for Events ">
                <label for="vehicle2">Suitable for Events</label><br>
                <input type="checkbox" id="amenities" name="amenities[]"value=" Washer">
                <label for="vehicle3">Washer</label><br>
        
                <input type="checkbox" id="amenities" name="amenities[]"value=" Wireless Internet">
                <label for="vehicle3">Wireless Internet</label><br>
                <span style="color: red">@error('amenities'){{$message}}@enderror</span>
            </div>
        </div>
    </div>
      <br>
      <div>
          <label for="">Terms and Conditions</label><br>

          <input type="checkbox" id="terms" name="terms[]" value="Smoking Allowed ">
          <label for="vehicle1">Smoking Allowed</label><br>
          <input type="checkbox" id=" terms" name="terms[]" value="Pets Allowed ">
          <label for="vehicle2"> Pets Allowed</label><br>
          <input type="checkbox" id="terms" name="terms[]" value="Party Allowed ">
          <label for="vehicle3">Party Allowed</label><br>
          <input type="checkbox" id=" terms" name="terms[]" value=" Children Allowed ">
          <label for="vehicle3"> Children Allowed</label><br>
          <span style="color: red">@error('terms'){{$message}}@enderror</span>
      </div>
      
        <button type="submit" class="btn btn-success" >Submit</button>
      
        
    </form>        
    </div>
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
   <script type="text/javascript" src="http://maps.googleapis.com/maps/api/js?key=AIzaSyAWiV-hsLeWGphGFSkPT3kdGqJU8JgNYuUlibraries=places"></script>

  <script src="jquery.geocomplete.js"></script>
  <script>
    $(document).ready(function(){
      var autocomplete;
      var to='address';
      autocomplete=new google.maps.places.Autocomplete((document.getElementById(to)),{
        types:['geocode'],
      });


    });
   </script>
  
</body>
</html>
    
    @endsection
