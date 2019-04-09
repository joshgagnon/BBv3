@extends('layouts.master')
@section('title')
@parent
@stop
@section('content')
<section id="bookings" class="manage-page">
<div class=" mb-3">
	<h2>Bookings Calendar</h2>
	<div class="calendar">
	</div>
</div>
<div class="container">
<div class="form-row mb-3">


           <div class="calendar-container" >
               
               
           </div>
          </div>
    <div class="form-row">
        <div class="col-md-6 offset-md-3">
            <div class="form-group">
                 <input class="form-control calendar-date-field" name="date-field" placeholder="Date"/> 
            </div>
        </div>
    </div>

    <div class="form-row">
        <div class="col-md-6 offset-md-3 text-center">

            <div class="form-check form-check-inline">
              <input class="form-check-input room-availability" type="checkbox" name="red-room" id="red-room" value="true" disabled>
              <label class="form-check-label" for="red-room">Red Room Available</label>
            </div>

            <div class="form-check form-check-inline">
              <input class="form-check-input room-availability" type="checkbox" name="green-room" id="green-room" value="true" disabled>
              <label class="form-check-label" for="green-room">Green Room Available</label>
            </div>

        </div>
    </div>

</div>



</div>

</section>
@stop