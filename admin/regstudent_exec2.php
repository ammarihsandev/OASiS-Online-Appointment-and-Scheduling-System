<?php
include('auth.php');
include('../connect.php');
?>

<?php
$title="Student Registration";
$inputl = $_POST["course"];
$input2 = $_POST["coursen"];
$count = $_POST["count"];
$Student_ID = $_POST["Student_ID"];

for ($i=0; $i<sizeof($count);$i++) {
$query="INSERT INTO course(Student_ID, Course_Code, Course_Name) VALUES ('".$Student_ID."', '".$inputl[$i]."', '".$input2[$i]."')";
mysql_query($query) or die(mysql_error());
}
$content="<center><table width=\"350\" style=\"border-width: 2px; border-style: dotted; border-color: green; border-radius: 25px; background-color: #EFFBEF;\" >
<tr><td><br/><center>
New Student and Course Information<br/> 
Successfully Inserted to The System!<br/>Please <a href=\"viewstudent.php?Student_ID=".$Student_ID."\">
<b>Click Here</b></a> to View Your Profile.<br/>&nbsp;</center></td></tr></table></center>";

include ("../tempelate.php");
	?>