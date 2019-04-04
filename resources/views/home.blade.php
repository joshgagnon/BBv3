@extends('layouts.master')
@section('title')
@parent
@stop
@section('content')

<section id="top">
    <img class="logo" src="{{ asset('images/bb3.png') }}" alt="Redvale Ridge B&B" />


<div class='nav-links'>
<a href="#home-head">
The Home
</a>
<a href="#rooms-head">
Rooms & Rates
</a>

    <a href="#hosts-head">
    About Us
    </a>
    <a href="#location-head">
    Bookings
    </a>

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


<div style="zoom: 0.7;" id="TA_certificateOfExcellence438" class="TA_certificateOfExcellence"><ul id="sOEnGP2" class="TA_links SLE3djcIzL8"><li id="13ubKiW" class="rWj2hpDKUkF"><a target="_blank" href="https://www.tripadvisor.co.nz/Hotel_Review-g8099604-d7986014-Reviews-Redvale_Ridge_B_B-Redwood_Valley_Nelson_Tasman_Region_South_Island.html"><img src="https://www.tripadvisor.co.nz/img/cdsi/img2/awards/CoE2017_WidgetAsset-14348-2.png" alt="TripAdvisor" class="widCOEImg" id="CDSWIDCOELOGO"/></a></li></ul></div><script async src="https://www.jscache.com/wejs?wtype=certificateOfExcellence&amp;uniq=438&amp;locationId=7986014&amp;lang=en_NZ&amp;year=2017&amp;display_version=2"></script>

	</div>


</div>
</section>

<section id="about">
<h2 id="about-head">Redvale Ridge Bed and Breakfast</h2>
<div class="container">
<div class="row">
<div class="col-lg-6">
<p>Welcome to our beautiful contemporary country home situated on top of a ridge at 114 Redvale Rd, in the award winning GALEO Estate, Tasman, South Island, New Zealand. In building our home we
thought about health, well-being and impact on the environment so incorporated many eco
features. The views from our home are simply stunning, taking in the Western Ranges,
Tasman Bay out to D’Urville Island and at night the twinkling lights of Nelson.</p>
<p>Being between the thriving town of Richmond and the beautiful coastal village of Mapua, we
are surrounded by wineries, craft breweries, artists and food producers and are close to the
popular coastal section of the Tasman Great Taste Trail and the beautiful Moturoa/Rabbit
Island Beach and Recreation area. We are also centrally located between Nelson and Motueka
– approximately 20 mins to each.</p>
</div>
<div class="col-lg-6">
<p>Our rural sub-division is known for its bird life and here you will see Pukeko, quail, ducks,
plover, swallows, kingfisher, low flying hawks and in increasing numbers our wonderful
native birds such as the fantail and tui.</p>
<p>There are a number of cafes and restaurants within a short distance including the wonderful
Playhouse Café and Theatre. We also offer an optional tasting platter on the night of
arrival.</p>
<p>We are happy to share with you our love of New Zealand and especially the south island and
help you make plans for all the wonderful things to do and see in this area; we can also assist with bookings.
</p>
</div>
</div>


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



<section id="house">
<h2 id="home-head">The Home</h2>
<div class="container">
<div class="row">
<div class="col-lg-6">
<p>Built in 2012 our home is a large, one level dwelling with two purpose built B&B rooms on the
eastern side. The house incorporates many eco features, which are:</p>
<ul class="list">
<li>Passive solar, thermally and energy efficient design</li>

<li>Thermally broken throughout the building envelope</li>

<li>Hybrid systems which includes power and water automated management</li>

<li>Solar panels for hot water and power</li>

<li>Non toxic building materials</li>

<li>Recycled Blue Gum wallboards</li>

<li>Uprated natural wool insulation</li>

<li>Low VOC paint and finishes</li>

<li>Energy efficient lighting and appliances</li>

<li>Recycled plastic bottle carpet in bedrooms</li>

<li>Pellet fire and panel heaters for heating when required</li>
</ul>
<p>Guests have their own parking area and entrance allowing for autonomy when needed. There
are a number of seating areas outside for relaxing and taking in the stunning views.  Our spa is
great to sit in at night where you can gaze at the twinkling night sky or the lights of Nelson. </p>
<p>Our home is full of beautiful art work in many mediums, a lot of which has been bought in the
‘top of the south’. We have a number of beautiful books on New Zealand, which are lovely to
sit and relax with and we have a number of board games to have fun with.</p>


</div>
<div class="col-lg-6">
	 @include('partials.carousel', array('images' => $house,'bg' => false, 'id' => 'house-cara'))
<p>Our garden is a large developing one.  At the front of the house there is a beautiful border
garden broken by an outdoor seating and fire area. In different areas around the house there
are natives, fruit trees, raised vegetable and herb gardens and a camellia hedge. The gully part
of the section contains mostly native shrubs, trees and grasses.</p>

</div>

</div>

</section>

<section id="rooms">
<h2 id="rooms-head">B&amp;B Rooms and Rates</h2>
<div class="container">
<div class="row">
<div class="col-lg-6">
<p>There are two luxurious rooms, the Red Room and Green Room, both with King beds.  </p>

<p>Each room has:</p>
<ul class="list">
<li>Beautiful ensuites</li>

<li>Table and chairs inside and out</li>

<li>Quality beds and bedding</li>

<li>Free WiFi</li>

<li>32" TV, DVD player with a selection of DVDs</li>

<li>CD/USB stereo system</li>

<li>Tea and coffee facilities with freshly ground coffee and baking daily</li>

<li>Small fridge with water and milk provided</li>

<li>Wardrobe and luggage racks</li>

<li>Original artwork</li>


<li>Access to outside patio</li>


</ul>
<p>
*One load of washing included during stay.

</p>
<p>
<strong><em>Rates</em></strong><br/>
$205 - $250 per night.<br/>
</p>



<p>
Children by prior arrangement only, thank you.
</p>
</div>
<div class="col-lg-6">
	 @include('partials.carousel', array('images' => $rooms,'bg' => false, 'id' => 'rooms-cara'))
     <p>
<strong><em>Cancellation Policy</em></strong><br/>
<ul>
<li>Two days prior to arrival: 50%</li>
<li>One day prior to arrival: 100%</li>
<li>No shows: 100%</li>
</ul>
</p>

</div>
</div>
</div>
</section>



<section id="sustainability">
<h2 id="sustainability-head">Sustainability</h2>
<div class="container">
<div class="row">
<div class="col-lg-6">
    <p></p>
<ul class="list">
<li>GALEO has won a New Zealand Institute of Surveyors Award of Excellence for Sustainability.
<li>We built our home with a company that emphasises sustainability.</li>
<li>We have 16 solar panels on the roof and feed back to the grid. We also use a local power company who uses any excess profits to give back to the local community.</li>
<li>Because our sub-division has its own sewage system, we only use biodegradable cleaning products.</li>
<li>We recycle glass, plastics and metals.</li>



</ul>
</div>
<div class="col-lg-6">
        <p></p>
<ul class="list">
    <li>Vegetable scraps are composted and coffee grounds are put on the garden.</li>
<li>We buy in bulk to cut down on packaging.</li>
<li>We have planted thousands of plants most of them natives.</li>
<li>We grow vegetables, fruit trees, citrus trees and berries.</li>
<li>We only use our dryer for fluffing towels.</li>
<li>We provide body wash and hand wash in refillable dispensers and will provide shampoo and conditioner if requested.</li>
<li>We have LED lighting but do not turn on lights where not necessary.  We also use sensor lights in critical places.</li>
</ul>
</div>

</div>

</section>







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


<section id="todo">
<h2 id="todo-head">Things To Do</h2>
<div class="container">
<div class="row">
<div class="col-lg-6">
	 @include('partials.carousel', array('images' => $thingstodo,'bg' => false, 'id' => 'things-cara'))
</div>
<div class="col-lg-6 list">
<p>Below are just some of the things to do in this area. </p>
<ul class="list">

<li>Cycling: The Great Taste Trail <a href="http://www.trailjourneys.co.nz/nelson">www.trailjourneys.co.nz/nelson</a>

<a href="http://www.gentlecycling.co.nz">www.gentlecycling.co.nz</a>, <a href="http://www.wheeliefantastic.co.nz">www.wheeliefantastic.co.nz</a></li>

<li>Wineries (25) and Wine Tours www.baytoursnelson.co.nz <a href="http://www.nelsonwineart.co.nz">www.nelsonwineart.co.nz</a></li>

<li>Beer and Craft Breweries <a href="http://www.craftbrewingcapital.co.nz">www.craftbrewingcapital.co.nz</a></li>

<li>Art/Craft/Pottery Trails <a href="http://www.rubycoastarts.co.nz">www.rubycoastarts.co.nz</a></li>

<li>Boating and Kayaking <a href="http://www.abeltasmanseashuttles.co.nz">www.abeltasmanseashuttles.co.nz</a></li>

<li>Abel Tasman Excursions <a href="http://www.abeltasman.co.nz">www.abeltasman.co.nz</a>, <a href="www.abeltasman.co.nz/a-day/">www.abeltasman.co.nz/a-day</a></li>

<li>Mapua Ferry <a href="http://www.mapuaferry.co.nz">www.mapuaferry.co.nz</a></li>

<li>Tramping</li>


<li>Fishing: Sea and River</li>

<li>Golfing: A number of courses within a short distance. We have a male and female set of clubs.</a></li>

<li>Walks</a></li>

<li>Happy Valley Adventures <a href="http://www.happtvalleyadventures.co.nz">www.happtvalleyadventures.co.nz</a></li>



<li>Beaches</li>

<li>Markets <a href="http://www.nelsonmarket.co.nz">www.nelsonmarket.co.nz</a></li>

<li>Shopping: Richmond and Nelson both offer great shopping.</li>
</ul>
</div>
</div>
</section>

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
Broadspectrum as a telco technician and I work weekend nights at a local
café/theatre restaurant. Our two adult children currently live in Australia. The
other member of our family is Tsar our Russian Blue cat.</p>

<p>We love all kinds of art and this is reflected inside and outside our home. We
have a large garden, which we planted from bare ground six years ago and
keeping this maintained keeps us busy. When we get time off we like to explore
our local area and further afield. We love music and go to concerts when we can.</p>
<p>After three seasons of operation we are proud to rate highly on review sites.</p>
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




<section id="location">
	<h2  id="location-head">Location &amp; Bookings</h2>
<div class="container">
<div class="row">
<div class="col-md-6">
<iframe src="https://www.google.com/maps/embed/v1/place?q=redvale%20ridge%20b%26b%20richmond&key=AIzaSyBcUlrIphw6eoWvKt_Ln7vEeeJkhgg-iL8"width="100%" height="450" frameborder="0" style="border:0" id="googleMap"></iframe>
</div>

<div class="col-md-6">
    <p />
<div id="SMART-widget-container"><a target="_blank" href="https://smartgms.com/book/smartcal?cid=88303"><img src="https://smartgms.com/site/templates/img/smartres/buttons/button06.png" width="144" height="40" alt="Availability and Book Now"></a></div>
<div>


<p>- Or book directly using the contact details below -</p>
<p><strong>Phone</strong> <a href="tel:+64224566478">+64 224 566 478</a></p>
<p><strong>Email</strong> <a href="mailto:redvaleridge@gmail.com">redvaleridge@gmail.com</a></p>
<p><strong>Address</strong><br/>

114 Redvale Rd<br/>
Galeo Estate<br/>
Redwood Valley<br/>
Tasman<br/>
South Island<br/>
New Zealand
 </p>

</div>
</div>
</div>
</div>
</section>


@stop
