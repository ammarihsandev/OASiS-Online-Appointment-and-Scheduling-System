
<?php

session_start();
$title = "Cancel Appointment History";
include("../header.php");
include("../connect.php");
include("../navi.php");
?>

<div role="main" class="ui-content jqm-content">
<p align="justify"><strong><center>
	



<?php
$email="info@iiumoasis.com";
$Message_content=$_REQUEST['cancel_reason'];
$App_ID=$_REQUEST['App_ID'];
$App_time=$_REQUEST['App_time'];
$studentname=$_REQUEST['studentname'];
$lecturername=$_REQUEST['lecturername'];
$ToEmail =$_REQUEST['Student_email'];
$ToSubject = "IIUM OASIS | Appointment Cancelation at $App_time";
date_default_timezone_set('Asia/Kuala_Lumpur');
$date = date("d/m/Y, h:i a");



$EmailBody =   "
IIUM OASIS Appointment Cancelation Notification\n\n
Dear $lecturername, You just got new message in IIUM OASIS. \n
Appointment ID: $App_ID \n
Appointment time: $App_time \n
Cancelation time: $date \n
Lecturer name: $lecturername\n
Cancelation reason: $Message_content \n
\n
To View your appointment list, please login to your IIUM OASIS account.\n
Thank you...\n\n";

$Message = $EmailBody;

$headers .= "Content-type: text; charset=iso-8859-1\r\n";
$headers .= "From:".$email."\r\n";

mail($ToEmail,$ToSubject,$Message, $headers);

$query2="UPDATE appointment SET Note = 'cancel' WHERE App_ID ='".$App_ID."'";
$resource2=mysql_query($query2,$link);

$query="UPDATE appointment SET Cancel_reason = '".$Message_content."' WHERE App_ID ='".$App_ID."'";
$resource=mysql_query($query,$link);

echo "<center><table width=\"350\" style=\"border-width: 2px; border-style: dotted; border-color: green; border-radius: 25px; background-color: #EFFBEF;\" >
<tr><td><br/><center>
The Appointment canceled successfully! <br/> <a href=\"schedule.php\">Click Here</a> to view your Appointment Schedule.<br>&nbsp;</center></td></tr></table></center>";
	?>	

	</center>
</strong></p>
</div>

<?php
include('../footer.php');
	?>