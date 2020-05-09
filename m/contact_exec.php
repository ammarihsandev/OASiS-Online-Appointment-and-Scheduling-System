<?php
$title = "Contact Us";
include("header.php");
?>


<?php
$title="Contact Us";
	 $contact_name=$_REQUEST['name']; 
	 $contact_email=$_REQUEST['email'];
	 $contact_subject=$_REQUEST['subject']; 
	 $contact_message=$_REQUEST['message']; 
date_default_timezone_set('Asia/Kuala_Lumpur');
$date = date("d/m/Y, h:i a");
	 $query="INSERT INTO contact (contact_name, contact_email, contact_subject, contact_message, contact_time) values('".$contact_name."', '".$contact_email."', '".$contact_subject."', '".$contact_message."', '".$date."')";
		  if(!mysql_query($query,$link))
		  {die ("<center><h3>An unexpected error occured while sending your request, Please try again!</h3></center>");}
		  else
		 {
?>		  
<center><table style="border-width: 2px; border-style: dotted; border-color: green; border-radius: 25px; background-color: #EFFBEF;" >
<tr><td><br/><center>
<center><br/><p>Your Message sent successfully. We will Reply your Message soon! Thank You! </p></center><br/>&nbsp;</center></td></tr></table></center>

<?php
}
include ("footer.php");
?>