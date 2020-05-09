<?php
include('auth.php');
?>

<?php
$title="Setting Consultation Time";
include ("../header.php");
?>
<?php
$checkboxl = $_POST["timeava"];
$day = $_POST["day"];

for ($i=0; $i<sizeof($checkboxl);$i++) {
$query="INSERT INTO avatime (Lecturer_ID, day, time) VALUES ('".$_SESSION['myuser']."', '".$day."', '".$checkboxl[$i]."')";
mysql_query($query) or die(mysql_error());
}


echo "<center><table width=\"350\" style=\"border-width: 2px; border-style: dotted; border-color: green; border-radius: 25px; background-color: #EFFBEF;\" >
<tr><td><br/><center>
Your Consultation Time updated successfully!<br/>Please <a href=\"index.php\">
<b>Click Here</b></a> to view your Consultation Time.<br/>&nbsp;<br/>Or Please <a href=\"consultationtime.php\">
<b>Click Here</b></a> to add and set Your Consultation Time for other day.</center><br/>&nbsp;</td></tr></table></center>";
?>

<?php
include ("../footer.php");
	?>