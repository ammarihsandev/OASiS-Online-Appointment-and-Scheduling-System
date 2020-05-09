<?php
include('auth.php');
?>

<?php
$title="Update My Profile";
$query="SELECT * FROM student WHERE Student_ID='".$_SESSION['myuser']."'";
	$resource=mysql_query($query,$link) or die ("An unexpected error occured while <b>deleting</b> the record, Please try again!");
	$result=mysql_fetch_array($resource);

$content="

<center><br/>
<center>
<font style=\"border-width: 2px; border-style: dotted; border-color: green; color: #0000FF; border-radius: 5px; background-color: #E6E6E6;\"> <a href=\"http://iiumoasis.com/student/profile.php\">&nbsp;&nbsp;My Profile&nbsp;&nbsp; </a></font>
<font style=\"border-width: 2px; border-style: dotted; border-color: green; border-radius: 5px; color: #0000FF; background-color: #FAFAFA;\"> &nbsp;&nbsp;Edit Profile&nbsp;&nbsp; </font></center>
<table width=\"450\" style=\"border-width: 2px; border-style: dotted; border-color: green; border-radius: 25px; background-color: #FAFAFA;\" ><tr><td><br/>
<center><table width=\"410\">
<tr><td>

 Updating the record for Student with matric <b>".$result[0]."</b><br/><br/>
<form action=\"profileedit_exec.php\" method=\"post\" enctype=\"multipart/form-data\" name=\"editprofile\">
<input type=\"hidden\" name=\"proimage\" value=\"".$result[8]."\">
  <center><table width=\"370\">
 <tr><td width=\"240\"><b>First Name</b></td><td><input type=\"text\" name=\"Student_fname\" value=\"".$result[2]."\" required  STYLE=\"border-style: dotted; border-color: #2E2EFE; color: black; bgcolor:#A9F5F2; width: 210px;height: 24px\" size=\"1\" ></td></tr>
 <tr><td><b>Second Name</b></td><td><input type=\"text\" name=\"Student_lname\" value=\"".$result[3]."\" required  STYLE=\"border-style: dotted; border-color: #2E2EFE; color: black; bgcolor:#A9F5F2; width: 210px;height: 24px\" size=\"1\" ></td></tr>
 <tr><td><b>Email Address</b></td><td><input type=\"text\" name=\"Student_email\" value=\"".$result[5]."\" required  STYLE=\"border-style: dotted; border-color: #2E2EFE; color: black; bgcolor:#A9F5F2; width: 210px;height: 24px\" size=\"1\" ></td></tr>
 <tr><td><b>Phone Number</b></td><td><input type=\"text\" name=\"Student_phone\" value=\"".$result[4]."\" required  STYLE=\"border-style: dotted; border-color: #2E2EFE; color: black; bgcolor:#A9F5F2; width: 210px;height: 24px\" size=\"1\" ></td></tr>
 <tr><td><b>Picture Profile</b></td><td><input type=\"file\" name=\"image\" value=\"Upload Profile Picture\" /></td></tr>
 <tr><td colspan=\"2\"><center><br/><input type=\"submit\" class=\"btn\" name=\"go\" value=\"Update Information\" onclick=\"alert(document.myform.opttwo.options[document.myform.opttwo.selectedIndex].value);\"></center></td></tr>
 </table></center></form>
<br /></td></tr></table></center></td></tr></table></center>

		";

include ("../tempelate.php");
	?>