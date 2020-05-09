<?php
include('../menuheader.php');
$title="Reply Message";
include ("../header.php");
?>

<?php
$email="info@fyp.masmai.com";
$message=$_POST['message'];
$contact_id=$_POST['contact_id'];
$contact_name=$_POST['contact_name'];
$contact_time=$_POST['contact_time'];
$contact_message=$_POST['contact_message'];
$ToEmail =$_POST['contact_email'];
$ToSubject = "Respond from IIUM OASiS";

$query2="UPDATE contact SET note = \"replied\" WHERE contact_id ='".$contact_id."'";
$resource2=mysql_query($query2,$link);
	
	

$EmailBody =   "
IIUM OASIS Email Responding\n\n
Message: $message \n\n

------------------------------------------\n
$contact_time\n
Name : $contact_name \n
Email : $ToEmail \n
Message : $contact_message \n\n";

$Message = $EmailBody;


$headers .= "Content-type: text; charset=iso-8859-1\r\n";
$headers .= "From:".$email."\r\n";

mail($ToEmail,$ToSubject,$Message, $headers);


echo "

<center><table width=\"350\" style=\"border-width: 2px; border-style: dotted; border-color: green; border-radius: 25px; background-color: #EFFBEF;\" >
<tr><td><br/><center>
<center><br/>The Email successfully sent to ".$ToEmail.".<br/>Please <b><a href=\"message.php\">Click Here</a> </b>to back to the Message list</center><br/>&nbsp;</center></td></tr></table></center>
";

include ("../footer.php");
	?>