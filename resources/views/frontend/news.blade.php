@extends('frontend.layout.main')

@section('content')
<div class="container-fluid" style=" margin-top:66px">
    <div>
        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d215731.35909383564!2d-86.38612523887772!3d32.34401162432513!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x888e8194b0d481f9%3A0x8e1b511d354285ff!2sMontgomery%2C%20AL%2C%20USA!5e0!3m2!1sen!2sin!4v1662362387403!5m2!1sen!2sin" width="100%" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
    </div>
    <div class="col-md-12">
        <div class="row">
            <div class="col-md-8" style="padding: 95px;line-height: 22px;     text-align: justify;">
               <h1 style="font-family: 'Times New Roman', Times, serif">How we’ve increased cleaning standards for Dwella</h1>
               <p>At Dwella, we know that now more than ever, a clean and safe place to stay is a top concern. Your health and well-being are our top priority, so we’ve taken a number of steps designed to enhance our existing processes and safeguard our community.</p>
               <p>In addition to launching enhanced cleaning protocols (more details below), Dwella properties are unique in that they already have limited face-to-face interactions for guests. Many units have washer/dryers and full kitchens, which makes it easy to cook from your Dwella — or order delivery to your door through platforms like Postmates, one of our partners in the United States. This, paired with our elevated cleaning protocols, makes Dwella a great option for those who want to minimize contact and practice social distancing.</p>
               <p>We have built upon our foundation of pre-existing high cleaning standards with additional Covid-19 specific recommendations from the WHO, and CDC guidelines. Every single, housekeeper has undergone extensive training to ensure they employ Dwella’s high standards each and every time. We’re taking extra measures to implement best practices for cleaning and sterilization across our units, both in your Dwella and building-wide.</p>
               <p>To that end, we want to be as transparent as possible with how we’re cleaning Dwella spaces. Below is a list of some of our current processes designed to ensure our spaces are as clean as possible for every guest’s arrival.</p>
               <p>All housekeepers must wash their hands following CDC handwashing guidelines upon entering a unit. This includes before putting on gloves and after removing gloves. Disposable gloves are worn and discarded after each cleaning. We do not allow reusable gloves.</p>
               <p>All housekeepers wear masks whenever they are inside Dwella buildings. No exceptions.</p>
               <p>We ask cleaners to use disposable paper towels where possible, and ensure that any cleaning cloths are properly laundered between uses and are limited to one area.</p>
               <p>Our cleaners use EPA-registered, and CDC approved, and cleaning products, including Clorox, Lysol, and isopropyl alcohol.</p>
               <p>All surfaces are cleaned, then disinfected. Disinfection takes place using EPA registered products.</p>
               <p>We ask housekeepers to remove and replace all linen, regardless of whether it appears to be used. Similarly, we direct them to replace consumables after each clean, including shampoo and conditioner.</p>
               <p>Additionally, housekeepers are directed to put added emphasis on disinfecting all high-touch surfaces, with a detailed checklist included in our proprietary housecleaning app. They include:</p>
               <p>-Both sides of the door</p>
               <p>-Keypads and doorknobs of every door in the unit</p>
               <p>-Furniture upholstery, with an emphasis on couch/chair arms using fabric sanitizer</p>
               <ul style="list-style-type:square;">
                <li>Remote controls</li>
                <li>Light switches</li>
                <li>All faucet knobs</li>
                <li>Refrigerator/freezer handles</li>
                <li>All cabinet and appliance handles</li>
                <li>Fan cords</li>
                <li>Headboards</li>
                <li>Toilet flush handles and toilet brush/holder</li>
                <li>Thermostat buttons</li>
                <li>Waste bins</li>
              </ul>
              <p>Cleaning shared touch-points within common areas of the building is a priority. For buildings leased entirely by Dwella, we’ve instructed our housekeepers to disinfect all shared touch points, and have closed gyms, lounge areas, and other communal spaces. For buildings shared with residents or guests with other organizations, we have coordinated with landlords to ensure cleaning protocols match our high expectations.</p>
              <p>We know how important it is to provide a clean space for our guests, and we look forward to continuing to provide enhanced cleaning services for every Dwella space. Book your Dwella today.</p>
              <img src="https://mb5.bfe.myftpupload.com/wp-content/uploads/2022/07/Clean-Apartment.webp" height="250px" width="100%">
            </div>
            <div class="col-md-4" style="padding-right: 86px; padding-top: 150px;">
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
@endsection