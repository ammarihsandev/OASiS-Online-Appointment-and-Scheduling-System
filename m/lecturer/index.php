<?php

session_start();
$title = "Student Panel";
include("../header.php");
?>

<?php
include("../navi.php");
?>

<div role="main" class="ui-content jqm-content">
<p>

<script type="text/javascript" src="../js/kulliyyah.js"></script>

<?php
$title="Lecturer Panel";
echo "
<br><br/><center><table border=\"0\"width=\"700\">
	<tr><td>&nbsp;</td><td>
	<center><h1> </h1></center>
	Welcome ".$myuser." in Lecturer Panel. <br>
	In this page, you can manage your appointment activities.
	
	<br/><br/>
	<br/>
	<u>Your Status:</u><br/>
	<i>You have 0 unread messages<br/>
	You have 0 appointments<br/></i><br/>
	<td width=\"110\">
	</td><td width=\"15\">&nbsp;</td></tr></table></center> ";
	?>

	</p>
</div>

<?php
include("../footer.php");
?>