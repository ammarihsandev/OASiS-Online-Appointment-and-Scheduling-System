<textarea id="printing-css" style="display:none;">.no-print{display:none}</textarea>
<iframe id="printing-frame" name="print_frame" src="about:blank" style="display:none;"></iframe>
<script type="text/javascript">
function printDiv(elementId) {
 var a = document.getElementById('printing-css').value;
 var b = document.getElementById(elementId).innerHTML;
 window.frames["print_frame"].document.title = document.title;
 window.frames["print_frame"].document.body.innerHTML = '<style>' + a + '</style>' + b;
 window.frames["print_frame"].window.focus();
 window.frames["print_frame"].window.print();
}
</script>
<?php
include('menuheader.php');
include('connect.php');
$title="Appointment Information";
include ("header.php");
?>
<?php

	 $Student_ID= $_SESSION['myuser']; 
	 $Lecturer_ID=$_REQUEST['Lecturer_ID']; 
	 $time=$_REQUEST['time'];
	 $day=$_REQUEST['day'];  
	 $venue=$_REQUEST['venue']; 
	 $Lecturer_email=$_REQUEST['Lecturer_email']; 
	 $Lecturer_phone=$_REQUEST['Lecturer_phone']; 
	 $Lecturer_kul=$_REQUEST['Lecturer_kul']; 
	 $Lecturer_dep=$_REQUEST['Lecturer_dep']; 
	 $Lecturer_name=$_REQUEST['Lecturer_name']; 
	 $cdate=$_REQUEST['xdate'];   
         $ddate=$_REQUEST['datex'];
	 $reason=$_REQUEST['reason']; 
	 $App_reason=$_REQUEST['reason']; 
date_default_timezone_set('Asia/Kuala_Lumpur');
$dateq = date("d/m/Y, h:i a");
	 
$query="SELECT * FROM student WHERE Student_ID = '".$Student_ID."'";
		  $resource=mysql_query($query,$link);
		$row = mysql_fetch_array($resource);
$Student_name = $row[Student_fname]."&nbsp;".$row[Student_lname];

$email= "info@fyp.masmai.com";
$Student_ID= $row['Student_ID'];
$App_reason= $_REQUEST['reason'];
$studentname= $Student_name;
$ToEmail = $_REQUEST['Lecturer_email'];
$ToSubject = "IIUM OASIS | New Appointment from $studentname";

 $query2="INSERT INTO appointment (Lecturer_ID, Student_ID, App_reason, App_date, App_creationtime, App_time) values('".$Lecturer_ID."', '".$Student_ID."', '".$reason."', '".$cdate."', '".$dateq."', '".$time."')";  
if(!mysql_query($query2,$link)){
die('Could not enter data: ' . mysql_error());}
	  else
	 {
		  

echo "
<center>
You have succesfully setted the appointment!<br>
The appointment information shows below<br>
<br>

<div id=\"id-elemen-yang-ingin-di-print\"><center>
<table width=\"500\" style=\"border-width: 2px; border-style: dotted; border-color: red; border-radius: 25px; background-color: #FAFAFA;\" ><tr><td>
<center>

<h3>APPOINTMENT INFORMATION</h3>
Student Name: ".$Student_name." (".$Student_ID.")<br>
Creation time: ".date("l, jS \of F Y h:i A")."<br>
Appointment reason: ".$reason."
<br><br>
<h3>APPOINTMENT DETAILS</h3>

<table width=\"400\" border=\"0\"><tr><td><center><img src=\"../image/calendar_logo.jpg\" width=\"17\"></img>&nbsp; ".$day.", ".$ddate."	</center>	</td>
<td><center><img src=\"../image/clock_logo.png\" width=\"20\">	 at ".date('h:i A', strtotime($time))."</center></td></tr>
<tr><td colspan=\"2\"><center>
<br>
<img src=\"../image/pinmap_logo.png\" width=\"20\"></img> Venue: ".$venue."</center><br><br></td></tr></table>

<i>Appointment made with:</i>
<br>
".$Lecturer_name."<br>
".$Lecturer_kul."<br>
".$Lecturer_dep."<br>
<i>Phone: 0".$Lecturer_phone."</i><br>
<i>Email: ".$Lecturer_email."</i><br>
<br><td></tr></table><br></center></td></tr></table></center></div>


<br>
<center>
<a href=\"student/schedule.php\">View My Schedule</a>&nbsp; &nbsp; &nbsp; &nbsp;
<a href=\"javascript:printDiv('id-elemen-yang-ingin-di-print')\">Print Appointment</a></center>";

		  

$EmailBody =   "
IIUM OASIS Message Notification\n\n
Dear $Lecturer_name, You just got new appointment in IIUM OASIS. \n

Appointment details: \n
Appointment date: $cdate \n
Student Name: $studentname\n
Appointment Reason: $App_reason \n
\n
To view your schedule, please login to your IIUM OASIS account.\n
Thank you...\n\n";

$Message = $EmailBody;

$headers .= "Content-type: text; charset=iso-8859-1\r\n";
$headers .= "From:".$email."\r\n";

mail($ToEmail,$ToSubject,$Message, $headers);

}




include ("footer.php");
	?>		