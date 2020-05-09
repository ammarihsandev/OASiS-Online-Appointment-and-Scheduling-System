<?php
session_start();
if (!isset($_SESSION['myuser']))
{
echo "<script language=\"javascript\" type=\"text/javascript\">
window.location=\"../index.php\";
</script>";
}
include('../menuheader.php');
?>