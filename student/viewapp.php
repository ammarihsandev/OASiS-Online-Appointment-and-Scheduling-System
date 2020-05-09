<?php
include('auth.php');
?>
<?php
$title="View the Appointment Information";
$App_ID=$_REQUEST['App_ID'];
$Lecturer_ID=$_REQUEST['Lecturer_ID'];
$query2="SELECT * FROM lecturer WHERE Lecturer_ID='".$Lecturer_ID."'";
	$resource2=mysql_query($query2,$link) or die ("An unexpected error occured while <b>updating</b> the record, Please try again!");
	$result2=mysql_fetch_array($resource2);
	
$query="SELECT * FROM appointment WHERE App_ID='".$App_ID."'";
	$resource=mysql_query($query,$link) or die ("An unexpected error occured while <b>updating</b> the record, Please try again!");
	$result=mysql_fetch_array($resource);

if ($result[8] == "ok")
{
$cekstat="<tr><td colspan=\"2\">
<center><a href=\"schedule.php\"><img title=\"Back To Schedule\" width=\"24\" height=\"24\"  border=\"0\" src=\"../image/back-icon.png\"/></a>
&nbsp; &nbsp; &nbsp; &nbsp; <a href=\"cancelapp.php?App_ID=".$App_ID."&Lecturer_ID=".$Lecturer_ID."\"><img title=\"Cancel Appointment\" width=\"24\" height=\"24\"  border=\"0\" src=\"../image/remove-icon.png\"/></a>
</center></td></tr>";
}
else if ($result[8] == "cancel")
{
$cekstat="<tr><td colspan=\"2\"><center><font color=\"red\"><b>The Appopointment status is \"canceled\".</b></font></center></td></tr><tr><td colspan=\"2\">
<center><a href=\"schedule.php\"><img title=\"Back To Schedule\" width=\"24\" height=\"24\"  border=\"0\" src=\"../image/back-icon.png\"/></a>
</center></td></tr>";
}
	
$content="
<center>
<table width=\"470\" style=\"border-width: 2px; border-style: dotted; border-color: green; border-radius: 25px; background-color: #FAFAFA;\" ><tr><td>
<center><table width=\"430\">
<tr><td>&nbsp;  </td><td><b></b></td></tr>
<tr><td>Appointment ID  </td><td><b>".$result[0]."</b></td></tr>
<tr><td>Appointment Time </td><td><b>".$result[4]."</b></td></tr>
<tr><td>Creation date  </td><td><b>".$result[3]."</b></td></tr>
<tr><td>Lecturer Name </td><td><b>".$result2[2]."&nbsp;".$result2[3]."</b></td></tr>
<tr><td>Lecturer Office   </td><td> <b>".$result2[10]."</b></td></tr>
<tr><td>Lecturer Phone </td><td><b>0".$result2[4]."</b></td></tr>
<tr><td>Lecturer Email  </td><td><b>".$result2[5]."</b></td></tr>
<tr><td> &nbsp; </td><td><b></b></td></tr>
".$cekstat."
</table></center>
<br></td></tr></table></center>		";

include ("../tempelate.php");
	?>