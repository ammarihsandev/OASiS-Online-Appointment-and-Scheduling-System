<?php
include('auth.php');
include('../connect.php');
?>

<?php
$title="Register New Lecturer";
	 $Lecturer_ID=$_REQUEST['Lecturer_ID']; 
	 $Lecturer_fname=$_REQUEST['Lecturer_fname']; 
	 $Lecturer_lname=$_REQUEST['Lecturer_lname']; 
	 $Lecturer_kul=$_REQUEST['Lecturer_kul']; 
	 $Lecturer_dep=$_REQUEST['Lecturer_dep']; 
	 $Lecturer_email=$_REQUEST['Lecturer_email']; 
	 $Lecturer_phone=$_REQUEST['Lecturer_phone']; 
	 $Lecturer_office=$_REQUEST['Lecturer_office']; 
	 
	 	 $query="INSERT INTO lecturer (Lecturer_ID, Lecturer_fname, Lecturer_lname, Lecturer_kul, Lecturer_dep, Lecturer_email, Lecturer_phone, Lecturer_office) values('".$Lecturer_ID."', '".$Lecturer_fname."','".$Lecturer_lname."','".$Lecturer_kul."','".$Lecturer_dep."','".$Lecturer_email."','".$Lecturer_phone."','".$Lecturer_office."')";
		  if(!mysql_query($query,$link))
		  {die ("<center><h3>An unexpected error occured while sending your request, Please try again!</h3></center>");}
		  else
		 {
		  
$content="<center><table width=\"350\" style=\"border-width: 2px; border-style: dotted; border-color: green; border-radius: 25px; background-color: #EFFBEF;\" ><tr><td><br/>
	
<center><i>The Lecturer Information successfully<br/> inserted to the system!<br/>Please Fill The Lecturer's Courses<br/></i>
<table>
<form method=\"post\" action=\"reglecturer_exec2.php\">
<table>
<input type=\"hidden\" name=\"Lecturer_ID\" value=\"".$Lecturer_ID."\">
<tr><td><input type=\"checkbox\" id=\"count\" name=\"count[]\"/></td><td><input type=\"text\" id=\"course\" style=\"border-width:4px;font-weight:bold; width: 100px;height: 24px;\" placeholder=\"Course Code\" name=\"course[]\" value=\"\" /> </td><td><input style=\"border-width:4px;font-weight:bold; width: 160px;height: 24px;\" placeholder=\"Course Name\" type=\"text\" id=\"coursen\" name=\"coursen[]\" value=\"\" /> </td></tr>
<tr><td><input type=\"checkbox\" id=\"count\" name=\"count[]\"/></td><td><input type=\"text\" id=\"course\" style=\"border-width:4px;font-weight:bold; width: 100px;height: 24px;\" placeholder=\"Course Code\" name=\"course[]\" value=\"\" /> </td><td><input style=\"border-width:4px;font-weight:bold; width: 160px;height: 24px;\" placeholder=\"Course Name\" type=\"text\" id=\"coursen\" name=\"coursen[]\" value=\"\" /> </td></tr>
<tr><td><input type=\"checkbox\" id=\"count\" name=\"count[]\"/></td><td><input type=\"text\" id=\"course\" style=\"border-width:4px;font-weight:bold; width: 100px;height: 24px;\" placeholder=\"Course Code\" name=\"course[]\" value=\"\" /> </td><td><input style=\"border-width:4px;font-weight:bold; width: 160px;height: 24px;\" placeholder=\"Course Name\" type=\"text\" id=\"coursen\" name=\"coursen[]\" value=\"\" /> </td></tr>
<tr><td><input type=\"checkbox\" id=\"count\" name=\"count[]\"/></td><td><input type=\"text\" id=\"course\" style=\"border-width:4px;font-weight:bold; width: 100px;height: 24px;\" placeholder=\"Course Code\" name=\"course[]\" value=\"\" /> </td><td><input style=\"border-width:4px;font-weight:bold; width: 160px;height: 24px;\" placeholder=\"Course Name\" type=\"text\" id=\"coursen\" name=\"coursen[]\" value=\"\" /> </td></tr>
<tr><td><input type=\"checkbox\" id=\"count\" name=\"count[]\"/></td><td><input type=\"text\" id=\"course\" style=\"border-width:4px;font-weight:bold; width: 100px;height: 24px;\" placeholder=\"Course Code\" name=\"course[]\" value=\"\" /> </td><td><input style=\"border-width:4px;font-weight:bold; width: 160px;height: 24px;\" placeholder=\"Course Name\" type=\"text\" id=\"coursen\" name=\"coursen[]\" value=\"\" /> </td></tr>
<tr><td><input type=\"checkbox\" id=\"count\" name=\"count[]\"/></td><td><input type=\"text\" id=\"course\" style=\"border-width:4px;font-weight:bold; width: 100px;height: 24px;\" placeholder=\"Course Code\" name=\"course[]\" value=\"\" /> </td><td><input style=\"border-width:4px;font-weight:bold; width: 160px;height: 24px;\" placeholder=\"Course Name\" type=\"text\" id=\"coursen\" name=\"coursen[]\" value=\"\" /> </td></tr>
</table>
<center><input type=\"Submit\" class=\"btn\" name=\"Submit\" value=\"Add The Courses\"></center>
</form><br/>
</td></tr></table></center></td></tr></table></center>

";}

include ("../tempelate.php");
	?>