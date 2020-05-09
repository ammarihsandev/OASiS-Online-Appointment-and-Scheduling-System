<?php
include('auth.php');
include('../connect.php');
?>

<?php
$title="Lecturer Registration";
$inputl = $_POST["course"];
$input2 = $_POST["coursen"];
$count = $_POST["count"];
$Lecturer_ID = $_POST["Lecturer_ID"];

for ($i=0; $i<sizeof($count);$i++) {
$query="INSERT INTO course(Lecturer_ID, Course_Code, Course_Name) VALUES ('".$Lecturer_ID."', '".$inputl[$i]."', '".$input2[$i]."')";
mysql_query($query) or die(mysql_error());
}
$content="<center><table width=\"350\" style=\"border-width: 2px; border-style: dotted; border-color: green; border-radius: 25px; background-color: #EFFBEF;\" >
<tr><td><br/><center>
New Lecturer and Course Information<br/> successfully 
 inserted to the system!<br/>Please <a href=\"viewlecturer.php?Lecturer_ID=".$Lecturer_ID."\">
<b>Click Here</b></a> to view <br/>the Lecturer's information<br/>&nbsp;</center></td></tr></table></center>";

include ("../tempelate.php");
	?>