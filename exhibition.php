<?php
 
include('connect.php');
$title="FYP Exhibition 2015";
 
include('menuheader.php');
 
?>
 
<script src="ckeditor/ckeditor.js"></script>
	<link href="ckeditor/sample.css" rel="stylesheet">
 
<?php
$query="SELECT * FROM website WHERE Site_ID='1'";
	$resource=mysql_query($query,$link) or die ("An unexpected error occured while <b>updating</b> the record, Please try again!");
	$row=mysql_fetch_array($resource);
$content="<br>	
 ".$row[exhibition]." 
		";
include ("tempelate.php");
	?>