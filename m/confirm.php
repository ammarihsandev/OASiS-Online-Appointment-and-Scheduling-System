


<?php
session_start();
$title="Appointment Information";
include('header.php');
include('connect.php');
include('navi.php');
?>

<div role="main" class="ui-content jqm-content">
<p align="justify"><strong>
	


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
You are going to set an appointment with Lecturer Name!<br>
The appointment information shows below<br>
<br>

<div id=\"id-elemen-yang-ingin-di-print\"><center>
<table width=\"98%\" style=\"border-width: 2px; border-style: dotted; border-color: red; border-radius: 25px; background-color: #FAFAFA;\" ><tr><td>
<center><br>

<h3>APPOINTMENT DETAILS</h3>
Lecturer Name : ".$Lecturer_name."
<table width=\"95%\" border=\"0\"><tr><td><center><img src=\"https://www.iiumoasis.com/image/calendar_logo.jpg\" width=\"17\"></img>&nbsp; ".$day.", ".$datex."	</center>	</td>
<td><center><img src=\"https://www.iiumoasis.com/image/clock_logo.png\" width=\"20\">	 at ".date('h:i A', strtotime($time))."</center></td></tr>
<tr><td colspan=\"2\"><center>
<br>

<img src=\"https://www.iiumoasis.com/image/pinmap_logo.png\" width=\"20\"></img> Venue: ".$row[Lecturer_office]."</center><br><br></td></tr></table>
<form method=\"POST\" action=\"confirmed.php\">
Please Enter Your appointment reason <br/>
<br><input name=\"reason\" type=\"text\" style=\"width:250px;font-weight:bold;border-color:#F5A9A9;border:2;height:30px\" required>
<input name=\"venue\" value=\"".$row[Lecturer_office]."\" type=\"hidden\">
<input name=\"Lecturer_email\" value=\"".$row[Lecturer_email]."\" type=\"hidden\">
<input name=\"Lecturer_phone\" value=\"".$row[Lecturer_phone]."\" type=\"hidden\">
<input name=\"Lecturer_kul\" value=\"".$row[Lecturer_kul]."\" type=\"hidden\">
<input name=\"Lecturer_dep\" value=\"".$row[Lecturer_dep]."\" type=\"hidden\">
<input name=\"time\" value=\"".$time."\" type=\"hidden\">
<input name=\"day\" value=\"".$day."\" type=\"hidden\">
<input name=\"Lecturer_name\" value=\"".$Lecturer_name."\" type=\"hidden\">
<input name=\"datex\" value=\"".$datex."\" type=\"hidden\">
<input name=\"xdate\" value=\"".$ndate."\" type=\"hidden\">
<input name=\"Lecturer_ID\" value=\"".$Lecturer_ID."\" type=\"hidden\">
<br><br><input type=\"submit\" value=\"Set an Appointment\">
</form>
<br><td></tr></table><br></center></td></tr></table></center></div>

<br>";
	?>
	

	
</strong></p>
</div>

<?php
include('footer.php');
	?>
