<?php
include('auth.php');
include('../connect.php');

$title="Update Student's Information";

	 $Student_ID=$_REQUEST['Student_ID']; 
	 $Student_fname=$_REQUEST['Student_fname']; 
	 $Student_lname=$_REQUEST['Student_lname']; 
	 $Student_kul=$_REQUEST['Student_kul']; 
	 $Student_dep=$_REQUEST['Student_dep']; 
	 $Student_phone=$_REQUEST['Student_phone']; 
	 $Student_email=$_REQUEST['Student_email']; 
			
			
	 $query="UPDATE student SET Student_fname ='".$Student_fname."', Student_lname='".$Student_lname."', Student_kul='".$Student_kul."', Student_dep='".$Student_dep."', Student_phone='".$Student_phone."', Student_email='".$Student_email."' WHERE Student_ID='".$Student_ID."'";
	
		  if(!mysql_query($query,$link))
		  {die (
		  
		  $content="
<br/><center><h3>An unexpected error occured while saving the record, Please try again!</h3></center>");}
		  else
		 {
		 $content = "<center><table width=\"350\" style=\"border-width: 2px; border-style: dotted; border-color: green; border-radius: 25px; background-color: #EFFBEF;\" ><tr><td><br/><center>
New Information successfully<br/> 
updated in the system!<br/>Please <a href=\"viewstudent.php?Student_ID=".$Student_ID."\"><b>Click Here</b></a> to view <br/>the Student's information<br/>&nbsp;</center></td></tr></table></center>";}

		  
		  
include ("../tempelate.php");
	 ?>