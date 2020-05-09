<?php

include('../connect.php');
include('auth.php');
include('../menuheader.php');
if ($_GET["mid"]==1){
$menucontent = "about";}
else if ($_GET["mid"]==2){
$menucontent = "features";}
else if ($_GET["mid"]==4){
$menucontent = "exhibition";}
else if ($_GET["mid"]==3){
$menucontent = "news";}
else {
echo "<script type=\"text/javascript\">
window.location = \"http://www.iiumoasis.com\"
</script>";
}
$title="Updating the '".$menucontent."' content";
?>


<script src="../ckeditor/ckeditor.js"></script>
	<link href="../ckeditor/sample.css" rel="stylesheet">
	
<?php

$query="SELECT * FROM website WHERE Site_ID='1'";
	$resource=mysql_query($query,$link) or die ("An unexpected error occured while <b>updating</b> the record, Please try again!");
	$row=mysql_fetch_array($resource);
 


$content="	<br><form action=\"updatecontent.php\" method=\"post\">
		<textarea cols=\"80\" id=\"editor1\" name=\"oasiscontent\" rows=\"10\">
 ".$row[$menucontent]." 
		</textarea>
<input type=\"hidden\" name=\"menucontent\" value=\"".$menucontent."\">
		<script>
			CKEDITOR.replace( 'editor1' );

		</script>
		<p>
			<center><input type=\"submit\" value=\"Update Content\"></center>
		</p>
	</form>";
	
include ("../tempelate.php");
	?>
