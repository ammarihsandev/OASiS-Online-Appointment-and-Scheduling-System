<?php
$title="Log out";
include('header.php');
session_start();
session_destroy();
include('navi.php');
?>
	
<div role="main" class="ui-content jqm-content">
<p align="center"><strong><br/>You have succesfully Log out from the system...<br/><br/>Redirecting to the home page...
<br><br/><img src="https://www.iiumoasis.com/image/loading.gif"></img></center> <br/></strong></p></div>
<script language="javascript" type="text/javascript">
window.setTimeout('window.location=\"index.php\";',3000);
</script>
<?php
include('footer.php');
?>