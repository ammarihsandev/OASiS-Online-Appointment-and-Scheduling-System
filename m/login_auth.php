<?php
session_start();
?>
<?php
include('connect.php');

$myuser = $_POST['user'];
$mypass = $_POST['pass'];

$encrypted_mypass=md5($mypass);

$query= "SELECT * FROM student WHERE Student_ID='".$myuser."' AND Student_pass='".$encrypted_mypass."'";
$result=mysql_query($query);
$count=mysql_num_rows($result);	
if($count == 1)
 {
 $_SESSION['myuser'] = $myuser;
header("location:student/index.php");  }
  else  
 {
  $query2= "SELECT * FROM lecturer WHERE Lecturer_ID='".$myuser."' AND Lecturer_pass='".$encrypted_mypass."'";
  $result2=mysql_query($query2);
  $count2=mysql_num_rows($result2);
  if($count2 == 1)
 {
  $_SESSION['myuser'] = $myuser;

header("location:lecturer/index.php");
 }
 else
 {
 
header("location:login.php");
 }
 }
 
  
?>