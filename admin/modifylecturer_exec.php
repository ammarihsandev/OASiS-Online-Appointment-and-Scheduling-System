<?php
include('auth.php');
include('../connect.php');

$title="Update Lecturer's Information";

	 $Lecturer_ID=$_REQUEST['Lecturer_ID']; 
	 $Lecturer_fname=$_REQUEST['Lecturer_fname']; 
	 $Lecturer_lname=$_REQUEST['Lecturer_lname']; 
	 $Lecturer_kul=$_REQUEST['Lecturer_kul']; 
	 $Lecturer_dep=$_REQUEST['Lecturer_dep']; 
	 $Lecturer_phone=$_REQUEST['Lecturer_phone']; 
	 $Lecturer_email=$_REQUEST['Lecturer_email']; 
	 $Lecturer_office=$_REQUEST['Lecturer_office'];
			
			
	 $query="UPDATE lecturer SET Lecturer_fname ='".$Lecturer_fname."', Lecturer_lname='".$Lecturer_lname."', Lecturer_kul='".$Lecturer_kul."', Lecturer_dep='".$Lecturer_dep."', Lecturer_phone='".$Lecturer_phone."', Lecturer_email='".$Lecturer_email."', Lecturer_office='".$Lecturer_office."' WHERE Lecturer_ID='".$Lecturer_ID."'";
	
		  if(!mysql_query($query,$link))
		  {die (
		  
		  $content="
<br/><center><h3>An unexpected error occured while saving the record, Please try again!</h3></center>");}
		  else
		 {
		 $content = "<center><table width=\"350\" style=\"border-width: 2px; border-style: dotted; border-color: green; border-radius: 25px; background-color: #EFFBEF;\" ><tr><td><br/><center>
New Information successfully<br/> 
updated in the system!<br/>Please <a href=\"viewlecturer.php?Lecturer_ID=".$Lecturer_ID."\"><b>Click Here</b></a> to view <br/>the Lecturer's information<br/>&nbsp;</center></td></tr></table></center>";}

		  
		  
include ("../tempelate.php");
	 ?>