<?php

session_start();
$title = "Cancel Appointment";
include("../header.php");
include("../connect.php");
include("../navi.php");
?>

<div role="main" class="ui-content jqm-content">
<p align="justify"><strong><center>
	


<?php
$title="Cancel the Appointment";
$App_ID=$_REQUEST['App_ID'];
$Lecturer_ID=$_REQUEST['Lecturer_ID'];
$Student_ID=$_SESSION['myuser'];

	$query="SELECT * FROM appointment WHERE App_ID='".$App_ID."'";
	$resource=mysql_query($query,$link) or die ("An unexpected error occured while <b>deleting</b> the record, Please try again!");
	$result=mysql_fetch_array($resource);

	$query2="SELECT * FROM lecturer WHERE Lecturer_ID='".$Lecturer_ID."'";
	$resource2=mysql_query($query2,$link) or die ("An unexpected error occured while <b>deleting</b> the record, Please try again!");
	$result2=mysql_fetch_array($resource2);

	$query3="SELECT * FROM student WHERE Student_ID='".$Student_ID."'";
	$resource3=mysql_query($query3,$link) or die ("An unexpected error occured while <b>deleting</b> the record, Please try again!");
	$result3=mysql_fetch_array($resource3);
	
	

$dateo = date("g:i a", strtotime($result['App_time']));
$dateneh = date("d M Y", strtotime($result['App_date']));

echo "

<center><br>
<table width=\"95%\" style=\"border-width: 2px; border-style: dotted; border-color: green; border-radius: 25px; background-color: #FAFAFA;\" ><tr><td><br/>
<center><center><table width=\"93%\">
<tr><td>
<center><font color=\"red\"><b>Attention!</b></font></center> <br>
You are going to cancel the appointment with your lecturer.
<table>
<tr><td>Lecturer Name </td><td><b>".$result2[2]."&nbsp;".$result2[3]."</b></td></tr>
<tr><td>Appointment ID</td><td><b>".$result[0]." </b></td></tr>
<tr><td>Appointment Time &nbsp; &nbsp;</td><td><b>".$dateneh.", ".$dateo." </b></td></tr>
</table>
<br><hr><br>
If you sure with this action, please state your reason and click on cancelation button.</center>
<form action=\"cancelapp_exec.php\" method=\"post\" name=\"cancelappointment\">
 <center><table width=\"90%\">
 <input type=\"hidden\" name=\"App_ID\" value=\"".$App_ID."\">
 <input type=\"hidden\" name=\"App_time\" value=\"".$dateneh.", ".$dateo."\">
 <input type=\"hidden\" name=\"Lecturer_email\" value=\"".$result2[5]."\">
 <input type=\"hidden\" name=\"lecturername\" value=\"".$result2[2]."$nbsp;".$result2[3]."\">
 <input type=\"hidden\" name=\"studentname\" value=\"".$result3[2]."$nbsp;".$result3[3]."\">
 <input type=\"hidden\" name=\"Appointment_ID\" value=\"".$Appointment_ID."\">
 <tr><td><b>Please State Your Cancelation Reason </b></td><td><textarea name=\"cancel_reason\" required  STYLE=\"border-style: dotted; border-color: #2E2EFE; color: black; bgcolor:#A9F5F2; width: 210px;height: 48px\" size=\"1\" ></textarea></td></tr>
<tr><td colspan=\"2\"><center><br/><input type=\"submit\" class=\"btn\" name=\"go\" value=\"Cancel Appointment\"></center></td></tr>
 </table></center></form>
<br /></td></tr></table></center></td></tr></table></center>
		";

	?>
	
	

	</center>
</strong></p>
</div>

<?php
include('../footer.php');
	?>