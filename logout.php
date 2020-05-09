<?php
session_start();
session_destroy();
?>
	
<?php
$title="Log out";
$topmenu="";
$content="<center><strong><br/><br/>You have succesfully Log out from the system...</strong><br/><br/>Redirecting to the home page...
<br><br/><img src=\"image/loading.gif\"></img></center> <br/>
<script language=\"javascript\" type=\"text/javascript\">
window.setTimeout('window.location=\"index.php\";',3000);
</script></center>";
include('tempelate.php');
?>