<?php

include('../connect.php');
include('auth.php');

if ($_GET["mid"]==1){
$menucontent = "title";}
else if ($_GET["mid"]==2){
$menucontent = "title_desc";}
else if ($_GET["mid"]==3){
$menucontent = "description";}
else if ($_GET["mid"]==4){
$menucontent = "logo_desktop";}
else if ($_GET["mid"]==5){
$menucontent = "logo_mobile";}
else if ($_GET["mid"]==6){
$menucontent = "banner";}
else if ($_GET["mid"]==7){
$menucontent = "footer";}
else {
echo "<script type=\"text/javascript\">
window.location = \"http://www.iiumoasis.com\"
</script>";
}

?>

	
<?php

$query="SELECT * FROM website WHERE Site_ID='1'";
	$resource=mysql_query($query,$link) or die ("An unexpected error occured while <b>updating</b> the record, Please try again!");
	$row=mysql_fetch_array($resource);

echo"<br><br><center><b> Updating website ".$menucontent." ...</b><br><br><form action=\"updatecontent2.php\" method=\"post\">

	<textarea cols=\"40\" id=\"editor1\" name=\"oasiscontent\" rows=\"3\">".$row[$menucontent]."</textarea>

		<input type=\"hidden\" name=\"menucontent\" value=\"".$menucontent."\">
	<br><br>		<center><input type=\"submit\" value=\"Update Content\"></center>
	</form></center>";
	

	?>
