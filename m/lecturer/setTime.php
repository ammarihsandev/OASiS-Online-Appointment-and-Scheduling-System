<?php
include('auth.php');
?>

<script type="text/javascript" src="../js/kulliyyah.js"></script>

<?php
$title="Setting Consultation Time";
include ("../header.php");
?>
<center>

<?php
$checkboxl = $_POST["timeava"];
$day = $_POST["day"];
if($_POST["Submit"]=="Submit")
{
for ($i=0; $i<sizeof($checkboxl);$i++) {
$query="INSERT INTO AvaTime (Lecturer_ID, day, time) VALUES ('".$_SESSION['myuser']."', '".$day."', '".$checkboxl[$i]."')";
mysql_query($query) or die(mysql_error());
}
echo "Your Time Availabilty sucesfully inserted<br>Click here to View Your Time Availabilty!<br/>Click here to add another time availabilty!";
}
?>

</center>

<?php
include ("../footer.php");
	?>