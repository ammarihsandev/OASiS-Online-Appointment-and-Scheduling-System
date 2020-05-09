<?php
include('../menuheader.php');
include('../connect.php');
$title="Unset Time Availability";
include ("../header.php");
?>
<?php

	 $Student_ID= $_SESSION['myuser']; 
	 $Lecturer_ID=$_REQUEST['Lecturer_ID']; 
	 $time=$_REQUEST['time'];
	 $day=$_REQUEST['day'];  
	 $venue=$_REQUEST['venue']; 
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

$email= "info@iiumoasis.com";
$Student_ID= $row['Student_ID'];
$App_reason= $_REQUEST['reason'];
$studentname= $Student_name;
$ToEmail = $_REQUEST['Lecturer_email'];
$ToSubject = "IIUM OASIS | New Appointment from $studentname";

 $query2="INSERT INTO appointment (Lecturer_ID, Student_ID, App_reason, App_date, App_creationtime, App_time) values('".$Lecturer_ID."', '1111', 'Unsetted', '".$cdate."', '".$dateq."', '".$time."')";  
if(!mysql_query($query2,$link)){
die('Could not enter data: ' . mysql_error());}
	  else
	 {

echo "
<center>
You have succesfully Unsetted the Time Availability!<br>

<br>";

		 

}




include ("../footer.php");
	?>		