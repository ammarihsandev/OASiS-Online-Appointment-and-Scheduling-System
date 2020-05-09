<?php
session_start();
$inactive = 300; // Set timeout period in seconds

if (isset($_SESSION['timeout'])) {
    $session_life = time() - $_SESSION['timeout'];
    if ($session_life > $inactive) {
        session_destroy();
        header("Location: ../expired.php");
    }
}
$_SESSION['timeout'] = time();


if (!isset($_SESSION['myuser']))
{
echo "<script language=\"javascript\" type=\"text/javascript\">
window.location=\"../index.php\";
</script>";
}

$myuser2 = $_SESSION['myuser'];
if (strlen($myuser2) == 4)
			{ 
		echo "<script language=\"javascript\" type=\"text/javascript\">
window.location=\"http://fyp.masmai.com/lecturer/index.php\";
</script>";
			}
	else if	 (strlen($myuser2) == 7){
		echo "<script language=\"javascript\" type=\"text/javascript\">
window.location=\"http://fyp.masmai.com/student/index.php\";
</script>";
			}


include('../menuheader.php');
?>