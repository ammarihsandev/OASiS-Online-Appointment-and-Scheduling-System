<?php
include('menuheader.php');
include('connect.php');
$title="Appointment Information";
include ("header.php");

	 $cdate = "1998-09-12";
$query="SELECT * FROM student WHERE Student_ID = '".$Student_ID."'";
		  $resource=mysql_query($query,$link);
		$row = mysql_fetch_array($resource);
$Student_name = $row[Student_fname]."&nbsp;".$row[Student_lname];


 $query2="INSERT INTO appointment (App_date) values('".$cdate."')";  
if(!mysql_query($query2,$link)){
die('Could not enter data: ' . mysql_error());}
	  else
	 {
		  
echo "succes"
		;  
}




include ("footer.php");
	?>		