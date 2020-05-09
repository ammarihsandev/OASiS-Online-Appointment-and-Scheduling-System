<?php
include('../menuheader.php');
include('../connect.php');
$title="Unset Time Confirmation";
include ("../header.php");
?>
<?php

	 $Lecturer_ID=$_REQUEST['Lecturer_ID']; 
	 $time=$_REQUEST['time'];
	 $day=$_REQUEST['day']; 
	 $datex=$_REQUEST['datex']; 
	 $venue=$_REQUEST['venue']; 
	 $Lecturer_name=$_REQUEST['Lecturer_name']; 
	 $Lecturer_office=$_REQUEST['Lecturer_office']; 

$query="SELECT * FROM lecturer WHERE Lecturer_ID = '".$Lecturer_ID."'";
		  $resource=mysql_query($query,$link);
		$row = mysql_fetch_array($resource);
		


$Lecturer_name = $row[Lecturer_fname]."&nbsp;".$row[Lecturer_lname];


$ndate= date("Y-m-d ",strtotime($datex));

echo" 
<center>
You are going to unset time availability!<br>
The appointment information shows below<br>
<br>

<div id=\"id-elemen-yang-ingin-di-print\"><center>
<table width=\"500\" style=\"border-width: 2px; border-style: dotted; border-color: red; border-radius: 25px; background-color: #FAFAFA;\" ><tr><td>
<center><br>

<h3>APPOINTMENT DETAILS</h3>
<table width=\"400\" border=\"0\"><tr><td><center><img src=\"../image/calendar_logo.jpg\" width=\"17\"></img>&nbsp; ".$day.", ".$datex."	</center>	</td>
<td><center><img src=\"../image/clock_logo.png\" width=\"20\">	 at ".date('h:i A', strtotime($time))."</center></td></tr>
<tr><td colspan=\"2\"><center>
<br>

</center><br><br></td></tr></table>
<form method=\"POST\" action=\"confirmed.php\">
<input name=\"time\" value=\"".$time."\" type=\"hidden\">
<input name=\"day\" value=\"".$day."\" type=\"hidden\">
<input name=\"datex\" value=\"".$datex."\" type=\"hidden\">
<input name=\"xdate\" value=\"".$ndate."\" type=\"hidden\">
<input name=\"Lecturer_ID\" value=\"".$Lecturer_ID."\" type=\"hidden\">
<br><br><input type=\"submit\" value=\"Unset the Time\">
</form>
<br><td></tr></table><br></center></td></tr></table></center></div>

<br>";
include ("../footer.php");
	?>