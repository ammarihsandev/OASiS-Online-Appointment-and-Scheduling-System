<?php
$title="IIUM OASiS Features";
include('header.php');
include('connect.php');
?>
<?php
session_start();
include('navi.php');
?>
<div role="main" class="ui-content jqm-content">
<p align="justify"><strong>


<?php
$query="SELECT * FROM website WHERE Site_ID='1'";
	$resource=mysql_query($query,$link) or die ("An unexpected error occured while <b>updating</b> the record, Please try again!");
	$row=mysql_fetch_array($resource);
echo "<br>	
 ".$row[features]." 
		";
?>

</strong></p>

</div>


<?php
include('footer.php');
	?>