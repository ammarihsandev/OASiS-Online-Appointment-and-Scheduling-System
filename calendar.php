<?php
include('menuheader.php');
?>
<link href="css/calendar.css" type="text/css" rel="stylesheet" />
<?php
date_default_timezone_set('Asia/Kuala_Lumpur');
?>
<?php
$title="My Calender";
include ("calendars.php");
$calendar = new Calendar(); 
$content= "
<center>Today is ".date("l, d/m/Y").
"<br/>The time is " . date("h:i:sa").
"</br></br>". $calendar->show().
"</center>"

;
		

include ("tempelate.php");
	?>