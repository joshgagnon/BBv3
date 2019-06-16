@extends('layouts.master')
@section('title')
@parent
@stop
@section('content')

<section id="top" class="home-page">
    <img class="logo" src="{{ asset('images/bb3.png') }}" alt="Redvale Ridge B&B" />


<div class='nav-links'>
<a href="#home-head">
The Home
</a>
<a href="#rooms-head">
Rooms & Rates
</a>
    <a href="#sustainability">
    Sustainability
    </a>
    <a href="#hosts-head">
    About Us
    </a>
    <a href="#location-head">
    Bookings
    </a>

</div>

<div class="booking-wrapper">
<button type="button" class="btn btn-danger" data-toggle="modal" data-target="#calendar-modal">
Check availability &amp; make a booking
</button>
</div>



    </section>
<section class="container-fluid header">
     @include('partials.carousel', array('images' => $banner,'bg' => true, 'id' => 'banner-cara'))

</section>

<!--<section id="navigation">
<div class="container">
	<a href="#house" class="">The Home</a>
	<a href="#rooms" class="">Rooms & Rates</a>
	<a href="#todo" class="">Things To Do</a>
	<a href="#hosts" class="">Hosts</a>
	<a href="#food" class="">Food</a>
</div>
</section>-->

<section id="intro">
		A beautiful contemporary, country Bed and Breakfast, centrally located between Nelson and Motueka, Tasman Bay, New Zealand.
</section>

<section id="quotes">
    <div class="container">
    <div class="row">
    <div class="col-md-6">
        <p class="quote">"Best of B&B experiences."</p><span class="quote-attribution">- Clemens (AT)</span>
    </div>
    <div class="col-md-6">
        <p class="quote">"Best B&B we have stayed at!"</p><span class="quote-attribution">- John (NZ)</span>
    </div>
    </div>
    </div>
</section>

<section id="main-menu">
<div class="container">


	<div id="links" >

<div id="hc-ratingRatingHotel" style="
    transform: scale(0.8);
    margin: 0 !important;
    padding: 0;
    transform-origin: bottom;
">
<div id="hc-ratingRatingHotel__inner"> <img id="hc-ratingRatingHotel__ribbon" src="https://media.datahc.com/ratinghotel/stellar2/ribbon.png"/>
<span id="hc-ratingRatingHotel__year">2018</span>
<span id="hc-ratingRatingHotel__award">RECOGNITION OF EXCELLENCE</span>
<div id="hc-ratingRatingHotel__hotelink"> <a id="hc-ratingRatingHotel__hotelname" target="_blank" href="javascript:void(0)">Redvale Ridge B&B</a> </div>
<a id="hc-ratingRatingHotel__hclink" target="_blank" href="http://www.hotelscombined.co.nz">HotelsCombined</a> </div>
<div id="hc-ratingRatingHotel__rating"> <span id="hc-ratingRatingHotel__number">10.0</span>
<span id="hc-ratingRatingHotel__pipe"></span> <span id="hc-ratingRatingHotel__ratedby">Rated by Guests</span> </div> </div>
<div id="hc-data__hotellink" style="display: none;">Redvale_Ridge_BB</div>
<script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/webfont/1/webfont.js"> </script>
<script>(function(){var rand = Math.floor((Math.random() * 99999999) + 1); function loadjscssfile(a,b){if("js"==b){var c=document.createElement("script");c.setAttribute("type","text/javascript"),c.setAttribute("src",a)}else if("css"==b){var
c=document.createElement("link");c.setAttribute("rel","stylesheet"),c.setAttribute("type","text/css"),c.setAttribute("href",a)}"undefined"!=typeof c&&document.getElementsByTagName("head")[0].appendChild(c)}
loadjscssfile('https://media.datahc.com/ratinghotel/stellar2/styles.css?v' + rand, 'css'); loadjscssfile('https://media.datahc.com/ratinghotel/stellar2/script.js?v' + rand, 'js'); })(); </script>


		<div>
			<a target="_blank" href="http://www.bedandbreakfastnz.co.nz/redvale-ridge-bed-and-breakfast-nelson.html" ><img class="association" src="{{ asset('images/bandbassoc.png') }}" alt="B and B Association" /></a>
        </div>

        <div>   <a target="_blank" href="https://www.facebook.com/rrbandb"><img class="facebook" src="{{ asset('images/FB-f-Logo__blue_144.png') }}" alt="Find us on Facebook" /></a></div>
		<div>	<a target="_blank" href="https://www.instagram.com/redvaleridge"><img class="facebook" src="{{ asset('images/insta.png') }}" alt="Find us on Instagram" /></a></div>
		<!-- <div>
		<div id="TA_rated860" class="TA_rated">
		<ul id="dYlfdXwAbI" class="TA_links iMWitMLK86gO">
		<li id="G8rQPvOxA" class="XwqrStLvO3">
		<a target="_blank" href="http://www.tripadvisor.co.nz/Hotel_Review-g8099604-d7986014-Reviews-Redvale_Ridge_B_B-Redwood_Valley_Nelson_Tasman_Region_South_Island.html"><img src="http://www.tripadvisor.co.nz/img/cdsi/img2/badges/ollie-11424-2.gif" alt="TripAdvisor"/></a>
		</li>
		</ul>
		</div>
		<script src="http://www.jscache.com/wejs?wtype=rated&amp;uniq=860&amp;locationId=7986014&amp;lang=en_NZ&amp;display_version=2"></script>
		</div> -->




<div style="zoom: 0.7;" id="TA_certificateOfExcellence977" class="TA_certificateOfExcellence"><ul id="o3tsAfq" class="TA_links dDaWEI7aS"><li id="8dyklGiPEb7" class="941Hz5KnJ"><a target="_blank" href="https://www.tripadvisor.co.nz/Hotel_Review-g8099604-d7986014-Reviews-Redvale_Ridge_B_B-Redwood_Valley_Nelson_Tasman_Region_South_Island.html"><img src="https://www.tripadvisor.co.nz/img/cdsi/img2/awards/CoE2017_WidgetAsset-14348-2.png" alt="TripAdvisor" class="widCOEImg" id="CDSWIDCOELOGO"/></a></li></ul></div><script async src="https://www.jscache.com/wejs?wtype=certificateOfExcellence&amp;uniq=977&amp;locationId=7986014&amp;lang=en_NZ&amp;year=2018&amp;display_version=2" data-loadtrk onload="this.loadtrk=true"></script>


</div>
</section>


<section id="bg-pic-1">
    <div class="container no-bg bright">
    <div class="col-md-8 col-md-offset-2">
    <div class="quote-overlay">
        <p class="quote">"Quiet, clean, modern, comfortable and lovely people too."</p><span class="quote-attribution">- Patrick (NZ)</span>

        <p class="quote">"Wonderful Stay! Great accommodations, delicious home baked goods, and a breathtaking view.</p><span class="quote-attribution">- Julia (US)</span>
    </div>
    </div>
    </div>
    </div>
</section>

@include('partials.about')

@include('partials.house')

@include('partials.rooms')

@include('partials.sustainability')




<section id="bg-pic-2">
    <div class="container no-bg bright">
    <div class="col-md-8 col-md-offset-2">
    <div class="quote-overlay">
        <p class="quote">"Our hosts were very accommodating, friendly and helpful. The setting is magical has to be seen."</p><span class="quote-attribution">- David (GB)</span>

        <p class="quote">"Great room, wonderful views, excellent breakfast, charming hosts. It was just perfect"</p><span class="quote-attribution">- Bert (AU)</span>
    </div>
    </div>
    </div>
    </div>
</section>


@include('partials.thingstodo')


<section id="hosts">
<div class="container">
<div class="row">

<div class="col-lg-6">
<h2  class="bgh">&nbsp;</h2>
<h2  id="hosts-head">About Us</h2>
<img class="bg-image" src="{{ asset('images/hosts.jpg') }}" width="100%" alt="The Hosts, Barbara & Fraser Grant">
<p>Hello from your hosts Barb and Fraser Grant.</p>
<p>From a farming background in Southland we moved to the gorgeous ‘Top of the
South’ 20 years ago. As well as running our B&amp;B, Fraser works full-time for
Broadspectrum as a telco technician. Our two adult children currently live in Australia. The
other member of our family is Tsar our Russian Blue cat.</p>

<p>We love all kinds of art and this is reflected inside and outside our home. We
have a large garden, which we planted from bare ground six years ago and
keeping this maintained keeps us busy. When we get time off we like to explore
our local area and further afield. We love music and go to concerts when we can.</p>
<p>After four seasons of operation we are proud to rate highly on review sites.</p>
</div>


<div class="col-lg-6">
<h2  class="bgh">&nbsp;</h2>
<h2  id="food-head">Food</h2>
	@include('partials.carousel', array('images' => $food,'bg' => false, 'id' => 'food-cara'))

<p>Choice of continental or full cooked breakfast. Talk to us about the options.</p>
<p>Fresh baking daily.</p>
<p>Optional: Tasting platter on arrival $35, must be pre-ordered.</p>
<p>* All dietary needs catered for. Gluten free a specialty.
</p>


</div>
</div>
</div>
</section>



@include('partials.location');


<div class="modal fade" id="calendar-modal" tabindex="-1" role="dialog" aria-labelledby="calendar-modal" aria-hidden="true">
  <div class="modal-dialog modal-lg" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Check Availability</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">


        <form method="post" id="request-form" action="inquiry" class="needs-validation">
            @csrf
          <div class="form-row mb-3">

           <div class="calendar-container" >


           </div>

          </div>

           <p class="text-center">Beds represent availability of the Red and Green rooms.</p>


          <div class="form-row">

            <div class="col">
                    <div class="form-group">
                 <input class="form-control name" name="name" placeholder="Name" required/>
                     <div class="invalid-feedback">Required</div>
            </div>
            </div>
            <div class="col">
                <div class="form-group">
                 <input class="form-control email" name="email" placeholder="Email" required/>
                 <div class="invalid-feedback">Required</div>
             </div>
            </div>
          </div>


          <div class="form-row mb-3">
            <div class="col">
                 <input class="form-control date-field-start" name="datestart" placeholder="Start Date"/>
            </div>

            <div class="col">
                 <input class="form-control date-field-end" name="dateend" placeholder="End Date" />
            </div>
          </div>


          <div class="form-row">
            <div class="col">
                 <textarea class="form-control"  rows="3" name="messagetext" placeholder="Message"></textarea>
            </div>
          </div>

        </form>


      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
        <button type="button" class="btn btn-primary submit-request">Send Request</button>
      </div>
    </div>
  </div>
</div>



<div class="modal fade" id="confirmation-modal" tabindex="-1" role="dialog" aria-labelledby="confirmation-modal" aria-hidden="true">
  <div class="modal-dialog modal-lg" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Request Sent</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">

    <div class="alert alert-success" role="alert">
    <h4 class="alert-heading">Thank you!</h4>
           A request for availability has been sent to the hosts.  They will respond via email very soon.
       </div>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-primary" data-dismiss="modal">Ok</button>
      </div>
    </div>
  </div>
</div>




<div class="modal fade" id="failure-modal" tabindex="-1" role="dialog" aria-labelledby="failure-modal" aria-hidden="true">
  <div class="modal-dialog modal-lg" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Request Failure</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">

    <div class="alert alert-warning" role="alert">
    <h4 class="alert-heading">Failed to Send Request</h4>
        Please try contacting the hosts directly @ <a href="mailto:redvaleridge@gmail.com">redvaleridge@gmail.com</a>
       </div>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-primary" data-dismiss="modal">Ok</button>
      </div>
    </div>
  </div>
</div>


@stop
