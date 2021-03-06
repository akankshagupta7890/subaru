<div class="appointment-section">
<div class="container">

<form name='appointment' method='post' action="" onsubmit="return appointval();" id="appointment">   
<h2>enquire or book an apointment now</h2>
<p>For further information use our convenient online enquiry form, and one of our specialised technician will call you to discuss your enquiry. Remember, the more specific details you can provide, the more accurate our assessment will be. Alternatively, call us any time in business hours and talk to Niazi on (02) 9915-9900 or 0420 319 049.</p>
<div class="row coloumn-form" id='booking-cal'>

<div class="col-xs-12 col-md-6">
<div class="calender">
<h4>Select your appointment booking date</h4>
<div id="container" style="margin: 10px 0 0 0; height: 250px"></div>
</div>
</div>
<div class="col-xs-12 col-md-6">
<div class="appointment-form">
<div class="row">
<div id="loader"></div>    
<div class="col-md-6">
<input type="text" class="form-control" placeholder="First Name" value="" id="fname" name="fname">
<span class="error" id="fnameerror"></span>
</div> <!--col-md-6-->
<div class="col-md-6">
<input type="text" class="form-control" placeholder="Last Name" value="" id="lname" name="lname">
<span class="error" id="lnameerror"></span>
</div> <!--col-md-6-->
<div class="col-md-6">
<input type="text" class="form-control" placeholder="Email" value="" id="email" name="email">
<span class="error" id="emailerror"></span>
</div> <!--col-md-6-->
<div class="col-md-6">
<input type="text" class="form-control" placeholder="Phone" value="" id="phone" name="phone">
<span class="error" id="phoneerror"></span>
</div> <!--col-md-6-->
<div class="col-md-6">
<input type="text" class="form-control" placeholder="VIN" value="" id="vin" name="vin">
<span class="error" id="vinerror"></span>
</div> <!--col-md-6-->
<div class="col-md-6">
<input type="text" class="form-control" placeholder="" value="" id="afvin" name="afvin">
</div> <!--col-md-6-->

<div class="col-md-4">
<input type="text" class="form-control" placeholder="SUBARU" value="" name="subaru" id="subaru">
<span class="error" id="subaruerror"></span>
</div> <!--col-md-6-->
<div class="col-md-4">
<select class="form-control" name="model" id="model">
<option value="">Model</option>
<option value="Model">Model-200</option>
<option value="Model">Model-200V</option>
</select>
<span class="error" id="modelerror"></span>    
</div> <!--col-md-4-->
<div class="col-md-4">
<select class="form-control" name="modyear" id="modyear">
<option value="">Year</option>
<option value="2011">2011</option>
<option value="2012">2012</option>
</select>
<span class="error" id="modyearerror"></span>    
</div> <!--col-md-4-->
<div class="col-md-4">
<select class="form-control" name="engine" id="engine">
<option value="">Engine</option>
<option value="Engine1">Engine1</option>
<option value="Engine2">Engine2</option>
</select>
<span class="error" id="engineerror"></span>    
</div> <!--col-md-4-->
<div class="col-md-4">
<select class="form-control" name="transmission" id="transmission">
<option value="">Transmission</option>
<option value="Transmission1">Transmission1</option>
<option value="Transmission2">Transmission2</option>
</select>
<span class="error" id="transmissionerror"></span>    
</div> <!--col-md-4-->

<div class="col-md-4">
<select class="form-control" name="engineother" id="engineother">
<option value="Other">Other</option>
</select>    
</div> <!--col-md-4-->

<div class="col-md-4">
<input class="form-control" type="text" placeholder="KM" name="km" id="km">
<span class="error" id="kmerror"></span>
</div> <!--col-md-4-->

<div class="col-md-4">
<select class="form-control" name="serviceint" id="serviceint">
<option value="">Service Interval</option>
<option value="Service Interval1">Service Interval1</option>
<option value="Service Interval2">Service Interval2</option>
</select>
<span class="error" id="serviceinterror"></span>    
</div> <!--col-md-4-->

<div class="col-md-4">
<select class="form-control" name="kmother" id="kmother">
<option value="Other">Other</option>
</select>
</div> <!--col-md-4-->

<div class="col-xs-12">
<textarea class="form-control" placeholder="Refine with keywords" name="refine" id="refine"></textarea>
</div> <!--col-xs-12-->

<div class="appointment-date">
<p>Your Appointment Date:</p> 
<input id="datepicker-example14" type="text" value="<?php echo date('m/d/Y'); ?>">
</div> 
<input type="submit" class="btn btn-default btn-appointment" value="submit" name="submit">

<div class="col-md-12"><span id="success-app"></span></div>
</div> 
    
</div>
</div> <!--col-xs-12-->
</div>
</form>
</div>
</div> <!---appointment-section Close--->