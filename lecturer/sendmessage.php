<?php
include('../menuheader.php');
$title="Reply Message";
include ("../header.php");
?>

<?php
$email="info@iiumoasis.com";
$Message_content=$_REQUEST['Message_content'];
$Student_ID=$_REQUEST['Student_ID'];
$Message_ID=$_REQUEST['Message_ID'];
$Lecturer_ID=$_REQUEST['Lecturer_ID'];
$studentname=$_REQUEST['studentname'];
$lecturername=$_REQUEST['lecturername'];
$ToEmail =$_REQUEST['Student_email'];
$ToSubject = "IIUM OASIS | New Message from $lecturername";
date_default_timezone_set('Asia/Kuala_Lumpur');
$date = date("d/m/Y, h:i a");



$EmailBody =   "
IIUM OASIS Message Notification\n\n
Dear $lecturername, You just got new message in IIUM OASIS. \n
Time: $date \n
Sender: $studentname\n<br/>
Message: $Message_content \n<br/>
\n
<b>To Reply this message</b>, please <a href=\"http://iiumoasis.com\">login</a> to your IIUM OASIS account.\n
Thank you...\n\n";

$Message = $EmailBody;

$headers .= "Content-type: text/html; charset=iso-8859-1\r\n";
$headers .= "From: ".$email."\r\n";
$headers .= "MIME-Version: 1.0\r\n";

mail($ToEmail,$ToSubject,$Message, $headers);

$query2="UPDATE message SET Note = \"replied\" WHERE Student_ID ='".$Student_ID."' AND Lecturer_ID ='".$Lecturer_ID."' AND Sender = 'student'";
$resource2=mysql_query($query2,$link);
	

	 $query="INSERT INTO message (Lecturer_ID, Student_ID, Message_content, Message_time, Sender) values('".$Lecturer_ID."', '".$Student_ID."', '".$Message_content."', '".$date."', 'lecturer')";
		  if(!mysql_query($query,$link))
		  {die ("<center><h3>An unexpected error occurred while sending your request, Please try again!</h3></center>");}
		  else
		 {
		  
$content="<center>Your Message sent successfully. We will Reply your Message soon! </center>

";}


echo "<center><strong><br/><br/>Message sent successfully...</strong><br/>
<br><br/><img src=\"../image/loading.gif\"></img></center> <br/>
<script language=\"javascript\" type=\"text/javascript\">
window.setTimeout('window.location=\"viewmessage.php?Message_ID=".$Message_ID."&Student_ID=".$Student_ID."\";',0);
</script></center>";

include ("../footer.php");
	?>