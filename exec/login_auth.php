<?php
session_start();
?>
<?php
include('connect.php');

$myuser = $_POST['myuser'];
$mypass = $_POST['mypass'];

$encrypted_mypass=md5($mypass);

$query= "SELECT * FROM student WHERE Student_ID='".$myuser."' AND Student_pass='".$encrypted_mypass."'";
$result=mysql_query($query);
$count=mysql_num_rows($result);	
if($count == 1)
 {
 $_SESSION['myuser'] = $myuser;
echo "<script language=\"javascript\" type=\"text/javascript\">
window.location=\"../student/index.php\";
</script>";
   }
  else  
 {
  $query2= "SELECT * FROM lecturer WHERE Lecturer_ID='".$myuser."' AND Lecturer_pass='".$encrypted_mypass."'";
  $result2=mysql_query($query2);
  $count2=mysql_num_rows($result2);
  if($count2 == 1)
 {
  $_SESSION['myuser'] = $myuser;
echo "<script language=\"javascript\" type=\"text/javascript\">
window.location=\"../lecturer/index.php\";
</script>";
 }
 else 
 {
  $query2= "SELECT * FROM admin WHERE Admin_username='".$myuser."' AND Admin_pass='".$encrypted_mypass."'";
  $result2=mysql_query($query2);
  $count2=mysql_num_rows($result2);
  if($count2 == 1)
 {
  $_SESSION['myuser'] = $myuser;
echo "<script language=\"javascript\" type=\"text/javascript\">
window.location=\"../admin/index.php\";
</script>";
 }
 else
 {
 
echo "<script language=\"javascript\" type=\"text/javascript\">
window.location=\"../login.php\";
</script>";
 }
 }
 }
  
?>