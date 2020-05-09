<?php

session_start();
$title = "My Appointment History";
include("../header.php");
include("../connect.php");
include("../navi.php");
?>

<div role="main" class="ui-content jqm-content">
<p align="justify"><strong><center>
	

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
<center><a href=\"schedule.php\"><img title=\"Back To Schedule\" width=\"24\" height=\"24\"  border=\"0\" src=\"https://www.iiumoasis.com/image/back-icon.png\"/></a>
&nbsp; &nbsp; &nbsp; &nbsp; <a href=\"cancelapp.php?App_ID=".$App_ID."&Lecturer_ID=".$Lecturer_ID."\"><img title=\"Cancel Appointment\" width=\"24\" height=\"24\"  border=\"0\" src=\"https://www.iiumoasis.com/image/remove-icon.png\"/></a>
</center></td></tr>";
}
else if ($result[8] == "cancel")
{
$cekstat="<tr><td colspan=\"2\"><center><font color=\"red\"><b>The Appopointment status is \"canceled\".</b></font></center></td></tr><tr><td colspan=\"2\">
<center><a href=\"schedule.php\"><img title=\"Back To Schedule\" width=\"24\" height=\"24\"  border=\"0\" src=\"../image/back-icon.png\"/></a>
</center></td></tr>";
}


$dateo = date("g:i a", strtotime($result[App_time])); 
$dateneh = date("d/m/Y", strtotime($result[App_date]));

	
echo "
<center>
<table width=\"97%\" style=\"border-width: 2px; border-style: dotted; border-color: green; border-radius: 25px; background-color: #FAFAFA;\" ><tr><td>
<center><table width=\"94%\">
<tr><td>&nbsp;  </td><td><b></b></td></tr>
<tr><td>Appointment ID  </td><td><b>".$result[0]."</b></td></tr>
<tr><td>Appointment Time </td><td><b>".$dateneh.", ".$dateo."</b></td></tr>
<tr><td>Creation date  </td><td><b>".$result[App_creationtime]."</b></td></tr>
<tr><td>Lecturer Name </td><td><b>".$result2[2]."&nbsp;".$result2[3]."</b></td></tr>
<tr><td>Lecturer Office   </td><td> <b>".$result2[10]."</b></td></tr>
<tr><td>Lecturer Phone </td><td><b>0".$result2[4]."</b></td></tr>
<tr><td>Lecturer Email  </td><td><b>".$result2[5]."</b></td></tr>
<tr><td> &nbsp; </td><td><b></b></td></tr>
".$cekstat."
</table></center>
<br></td></tr></table></center>		";

	?>
	
	
	
	
	
	
	
	

	</center>
</strong></p>
</div>

<?php
include('../footer.php');
	?>