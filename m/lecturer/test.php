<?php
include('auth.php');
?>

<script type="text/javascript" src="../js/kulliyyah.js"></script>

<?php
$title="Setting Consultation Time";
include ("../header.php");
?>

<style>
input[type=radio] {
		display:none;
	}

	input[type=radio] + label {
		display:inline-block;
		margin:-2px;
		padding: 4px 12px;
		margin-bottom: 0;
		font-size: 14px;
		line-height: 20px;
		color: #333;
		text-align: center;
		text-shadow: 0 1px 1px rgba(255,255,255,0.75);
		vertical-align: middle;
		cursor: pointer;
		background-color: #f5f5f5;
		background-image: -moz-linear-gradient(top,#fff,#e6e6e6);
		background-image: -webkit-gradient(linear,0 0,0 100%,from(#fff),to(#e6e6e6));
		background-image: -webkit-linear-gradient(top,#fff,#e6e6e6);
		background-image: -o-linear-gradient(top,#fff,#e6e6e6);
		background-image: linear-gradient(to bottom,#fff,#e6e6e6);
		background-repeat: repeat-x;
		border: 1px solid #ccc;
		border-color: #e6e6e6 #e6e6e6 #bfbfbf;
		border-color: rgba(0,0,0,0.1) rgba(0,0,0,0.1) rgba(0,0,0,0.25);
		border-bottom-color: #b3b3b3;
		filter: progid:DXImageTransform.Microsoft.gradient(startColorstr='#ffffffff',endColorstr='#ffe6e6e6',GradientType=0);
		filter: progid:DXImageTransform.Microsoft.gradient(enabled=false);
		-webkit-box-shadow: inset 0 1px 0 rgba(255,255,255,0.2),0 1px 2px rgba(0,0,0,0.05);
		-moz-box-shadow: inset 0 1px 0 rgba(255,255,255,0.2),0 1px 2px rgba(0,0,0,0.05);
		box-shadow: inset 0 1px 0 rgba(255,255,255,0.2),0 1px 2px rgba(0,0,0,0.05);
	}

	input[type=radio]:checked + label {
		   background-image: none;
		outline: 0;
		-webkit-box-shadow: inset 0 2px 4px rgba(0,0,0,0.15),0 1px 2px rgba(0,0,0,0.05);
		-moz-box-shadow: inset 0 2px 4px rgba(0,0,0,0.15),0 1px 2px rgba(0,0,0,0.05);
		box-shadow: inset 0 2px 4px rgba(0,0,0,0.15),0 1px 2px rgba(0,0,0,0.05);
			background-color:#e0e0e0;
	}
</style>
<style>
input[type=checkbox] {
		display:none;
	}

	input[type=checkbox] + label {
		display:inline-block;
		margin:-2px;
		padding: 4px 12px;
		margin-bottom: 0;
		font-size: 14px;
		line-height: 20px;
		color: #333;
		text-align: center;
		text-shadow: 0 1px 1px rgba(255,255,255,0.75);
		vertical-align: middle;
		cursor: pointer;
		background-color: #f5f5f5;
		background-image: -moz-linear-gradient(top,#fff,#e6e6e6);
		background-image: -webkit-gradient(linear,0 0,0 100%,from(#fff),to(#e6e6e6));
		background-image: -webkit-linear-gradient(top,#fff,#e6e6e6);
		background-image: -o-linear-gradient(top,#fff,#e6e6e6);
		background-image: linear-gradient(to bottom,#fff,#e6e6e6);
		background-repeat: repeat-x;
		border: 1px solid #ccc;
		border-color: #e6e6e6 #e6e6e6 #bfbfbf;
		border-color: rgba(0,0,0,0.1) rgba(0,0,0,0.1) rgba(0,0,0,0.25);
		border-bottom-color: #b3b3b3;
		filter: progid:DXImageTransform.Microsoft.gradient(startColorstr='#ffffffff',endColorstr='#ffe6e6e6',GradientType=0);
		filter: progid:DXImageTransform.Microsoft.gradient(enabled=false);
		-webkit-box-shadow: inset 0 1px 0 rgba(255,255,255,0.2),0 1px 2px rgba(0,0,0,0.05);
		-moz-box-shadow: inset 0 1px 0 rgba(255,255,255,0.2),0 1px 2px rgba(0,0,0,0.05);
		box-shadow: inset 0 1px 0 rgba(255,255,255,0.2),0 1px 2px rgba(0,0,0,0.05);
	}

	input[type=checkbox]:checked + label {
		   background-image: none;
		outline: 0;
		-webkit-box-shadow: inset 0 2px 4px rgba(0,0,0,0.15),0 1px 2px rgba(0,0,0,0.05);
		-moz-box-shadow: inset 0 2px 4px rgba(0,0,0,0.15),0 1px 2px rgba(0,0,0,0.05);
		box-shadow: inset 0 2px 4px rgba(0,0,0,0.15),0 1px 2px rgba(0,0,0,0.05);
			background-color:#e0e0e0;
	}
</style>

<style type="text/css">
.over {
color:#9cf;
background:#88FFA6;
}
fieldset {
display:inline;
padding:10px;
margin:10px
}
fieldset, .out {
color:#0A2A0A;
background:#A9F5A9;
}
legend {
color:#fff;
background:#0B3B0B;
}
</style>

<center><br/><table width="650" style="background-color: #EFFBEF; border: 1px solid green;"><tr><td>
<center><br/><br/>
<form action="setTime.php" method="POST">
<b><i>1. Please Select the Day!</i></b><br/><br/>
<center><fieldset onmouseover="this.className='over';"onmouseout="this.className='out';"><table border="0" width="420">
<tr><td><center><input name="day" type="radio" id="radio1" value="Monday"><label for="radio1"><b>Monday</label>
<input name="day" type="radio" id="radio2" value="Tuesday"><label for="radio2">Tuesday</label>
<input name="day" type="radio" id="radio3" value="Wednesday"><label for="radio3">Wednesday</label>
<input name="day" type="radio" id="radio4" value="Thursday"><label for="radio4">Thursday</label>
<input name="day" type="radio" id="radio5" value="Friday"><label for="radio5">Friday</b></td></tr></table></fieldset></center>
<br/><hr/><br/>
<b><i>2. Please Select Your Time Availability!</i></b><br/><br/>
<table width="400" border="0"><tr><td>

<center><fieldset onmouseover="this.className='over';"onmouseout="this.className='out';"><table border="0" width="380">
<legend>
<b>A. 08.30 AM - 10.00 AM</b>
</legend>
<tr><td><center><input type="checkbox" id="checkbox16" name="timeava[]" value="08:30:00">
   <label for="checkbox16">&nbsp; 08.30 AM &nbsp;</label>
<input type="checkbox" id="checkbox17" name="timeava[]" value="09:00:00">
   <label for="checkbox17">&nbsp; 09.00 AM &nbsp;</label>
<input type="checkbox" id="checkbox18" name="timeava[]" value="09:30:00">
   <label for="checkbox18">&nbsp; 09.30 AM &nbsp;</label> 
</center></td></tr></table></fieldset>
</center>


<center><fieldset onmouseover="this.className='over';"onmouseout="this.className='out';"><table border="0" width="380">
<legend>
<b>B. 10.00 AM - 11.30 AM</b>
</legend>
<tr><td><center><input type="checkbox" id="checkbox13" name="timeava[]" value="10:00:00">
   <label for="checkbox13">&nbsp; 10.00 AM &nbsp;</label>
<input type="checkbox" id="checkbox14" name="timeava[]" value="10:30:00">
   <label for="checkbox14">&nbsp; 10.30 AM &nbsp;</label>
<input type="checkbox" id="checkbox15" name="timeava[]" value="11:00:00">
   <label for="checkbox15">&nbsp; 11.00 AM &nbsp;</label> 
</center></td></tr></table></fieldset>
</center>


<center><fieldset onmouseover="this.className='over';"onmouseout="this.className='out';"><table border="0" width="380">
<legend>
<b>C. 11.30 AM - 01.00 PM</b>
</legend>
<tr><td><center><input type="checkbox" id="checkbox10" name="timeava[]" value="11:30:00">
   <label for="checkbox10">&nbsp; 11.30 AM &nbsp;</label>
<input type="checkbox" id="checkbox11" name="timeava[]" value="12:00:00">
   <label for="checkbox11">&nbsp; 12.00 AM &nbsp;</label>
<input type="checkbox" id="checkbox12" name="timeava[]" value="12:30:00">
   <label for="checkbox12">&nbsp; 12.30 AM &nbsp;</label> 
</center></td></tr></table></fieldset>
</center>


<center><fieldset onmouseover="this.className='over';"onmouseout="this.className='out';"><table border="0" width="380">
<legend>
<b>D. 02.00 PM - 03.30 PM</b>
</legend>
<tr><td><center><input type="checkbox" id="checkbox7" name="timeava[]" value="14:00:00">
   <label for="checkbox7">&nbsp; 02.00 PM &nbsp;</label>
<input type="checkbox" id="checkbox8" name="timeava[]" value="14:30:00">
   <label for="checkbox8">&nbsp; 02.30 PM &nbsp;</label>
<input type="checkbox" id="checkbox9" name="timeava[]" value="15:00:00">
   <label for="checkbox9">&nbsp; 03.00 PM &nbsp;</label> 
</center></td></tr></table></fieldset>
</center>


<center><fieldset onmouseover="this.className='over';"onmouseout="this.className='out';"><table border="0" width="380">
<legend>
<b>E. 03.30 PM - 05.00 PM</b>
</legend>
<tr><td><center><input type="checkbox" id="checkbox4" name="timeava[]" value="15:30:00">
   <label for="checkbox4">&nbsp; 03.30 PM &nbsp;</label>
<input type="checkbox" id="checkbox5" name="timeava[]" value="16:00:00">
   <label for="checkbox5">&nbsp; 04.00 PM &nbsp;</label>
<input type="checkbox" id="checkbox6" name="timeava[]" value="16:30:00">
   <label for="checkbox6">&nbsp; 04.30 PM &nbsp;</label> 
</center></td></tr></table></fieldset>
</center>



<center><fieldset onmouseover="this.className='over';"onmouseout="this.className='out';"><table border="0" width="380">
<legend>
<b>F. 05.00 PM - 06.30 PM</b>
</legend>
<tr><td><center><input type="checkbox" id="checkbox1" name="timeava[]" value="17:00:00">
   <label for="checkbox1">&nbsp; 05.00 PM &nbsp;</label>
<input type="checkbox" id="checkbox2" name="timeava[]" value="17:30:00">
   <label for="checkbox2">&nbsp; 05.30 PM &nbsp;</label>
<input type="checkbox" id="checkbox3" name="timeava[]" value="18:00:00">
   <label for="checkbox3">&nbsp; 06.00 PM &nbsp;</label> 
</center></td></tr></table></fieldset>
</center><br/>
<center>
<input type="image" name="image" src="../image/settime.png" ></center>

</form></center>
</td></tr></table></table>
</center>
	
	
	

<?php
include ("../footer.php");
	?>