<?php
$title = "Update My Profile US";
include("../header.php");
include("../connect.php");
?>
<?php
session_start();
include('../navi.php');
?>
<div role="main" class="ui-content jqm-content">
<p>


<?php
$query="SELECT * FROM student WHERE Student_ID='".$_SESSION['myuser']."'";
	$resource=mysql_query($query,$link) or die ("An unexpected error occured while <b>deleting</b> the record, Please try again!");
	$result=mysql_fetch_array($resource);

echo "
<center>
<table width=\"95%\" style=\"border-width: 2px; border-style: dotted; border-color: #E8F8EB; border-radius: 25px; background-color: #F1FAF3;\" ><tr><td><br/>
<center><table width=\"95%\">
<tr><td>

 <center>Updating the record for Student with matric <b>".$result[0]."</b></center><br/><br/>
<form action=\"profileedit_exec.php\" method=\"post\" enctype=\"multipart/form-data\" name=\"editprofile\">
<input type=\"hidden\" name=\"proimage\" value=\"".$result[8]."\">
  <center><table width=\"100%\">
 <tr><td width=\"200\"><b>First Name</b></td><td><input type=\"text\" name=\"Student_fname\" value=\"".$result[2]."\" required  STYLE=\"border-style: dotted; border-color: #2E2EFE; color: black; bgcolor:#A9F5F2;height: 24px\" size=\"1\" ></td></tr>
 <tr><td><b>Second Name</b></td><td><input type=\"text\" name=\"Student_lname\" value=\"".$result[3]."\" required  STYLE=\"border-style: dotted; border-color: #2E2EFE; color: black; bgcolor:#A9F5F2; height: 24px\" size=\"1\" ></td></tr>
 <tr><td><b>Email Address</b></td><td><input type=\"text\" name=\"Student_email\" value=\"".$result[5]."\" required  STYLE=\"border-style: dotted; border-color: #2E2EFE; color: black; bgcolor:#A9F5F2; height: 24px\" size=\"1\" ></td></tr>
 <tr><td><b>Phone Number</b></td><td><input type=\"text\" name=\"Student_phone\" value=\"".$result[4]."\" required  STYLE=\"border-style: dotted; border-color: #2E2EFE; color: black; bgcolor:#A9F5F2; height: 24px\" size=\"1\" ></td></tr>
 <tr><td><b>Picture Profile</b></td><td><input type=\"file\" name=\"image\" value=\"Upload Profile Picture\" /></td></tr>
 <tr><td colspan=\"2\"><center><br/><input type=\"submit\" class=\"btn\" name=\"go\" value=\"Update Information\"></center></td></tr>
 </table></center></form>
<br /></td></tr></table></center></td></tr></table></center>

		";

	?>


</p>
</div>
	
<?php
include("../footer.php");
?>