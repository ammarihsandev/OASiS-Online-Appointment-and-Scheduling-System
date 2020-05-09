<?php
include('auth.php');
include('../connect.php');
?>

<?php
$title="Register New Student";
	 $Student_ID=$_REQUEST['Student_ID']; 
	 $Student_fname=$_REQUEST['Student_fname']; 
	 $Student_lname=$_REQUEST['Student_lname']; 
	 $Student_kul=$_REQUEST['Student_kul']; 
	 $Student_dep=$_REQUEST['Student_dep']; 
	 $Student_email=$_REQUEST['Student_email']; 
	 $Student_phone=$_REQUEST['Student_phone']; 
	 
	 	 $query="INSERT INTO student (Student_ID, Student_fname, Student_lname, Student_kul, Student_dep, Student_email, Student_phone) values('".$Student_ID."', '".$Student_fname."','".$Student_lname."','".$Student_kul."','".$Student_dep."','".$Student_email."','".$Student_phone."')";
		  if(!mysql_query($query,$link))
		  {die ("<center><h3>An unexpected error occured while sending your request, Please try again!</h3></center>");}
		  else
		 {
	
$content="<center><table width=\"350\" style=\"border-width: 2px; border-style: dotted; border-color: green; border-radius: 25px; background-color: #EFFBEF;\" ><tr><td><br/>
	
<center><i>The Student Information successfully<br/> inserted to the system!<br/>Please Fill The Student's Courses<br/></i>
<table>
<form method=\"post\" action=\"regstudent_exec2.php\">
<table>
<input type=\"hidden\" name=\"Student_ID\" value=\"".$Student_ID."\">
<tr><td><input type=\"checkbox\" id=\"count\" name=\"count[]\"/></td><td><input type=\"text\" id=\"course\" style=\"border-width:4px;font-weight:bold; width: 100px;height: 24px;\" placeholder=\"Course Code\" name=\"course[]\" value=\"\" /> </td><td><input style=\"border-width:4px;font-weight:bold; width: 160px;height: 24px;\" placeholder=\"Course Name\" type=\"text\" id=\"coursen\" name=\"coursen[]\" value=\"\" /> </td></tr>
<tr><td><input type=\"checkbox\" id=\"count\" name=\"count[]\"/></td><td><input type=\"text\" id=\"course\" style=\"border-width:4px;font-weight:bold; width: 100px;height: 24px;\" placeholder=\"Course Code\" name=\"course[]\" value=\"\" /> </td><td><input style=\"border-width:4px;font-weight:bold; width: 160px;height: 24px;\" placeholder=\"Course Name\" type=\"text\" id=\"coursen\" name=\"coursen[]\" value=\"\" /> </td></tr>
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