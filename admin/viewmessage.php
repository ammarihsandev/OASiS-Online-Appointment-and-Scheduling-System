<?php
include('auth.php');
?>
<?php
$title="Message Detail";
 $contact_id=$_REQUEST['contact_id']; 
	
	$query2="UPDATE contact SET note = \"read\" WHERE contact_id ='".$contact_id."'";
		  $resource2=mysql_query($query2,$link);
	
	
		$query="SELECT * FROM contact WHERE contact_id ='".$contact_id."'";
		  $resource=mysql_query($query,$link);
		  $username_array = array();
	
	while($row = mysql_fetch_array($resource)){ 
  $username_array[] = "<tr><td width=\"30%\"><b>Date and Time</b></td><td width=\"75%\">".$row['contact_time']."</td></tr>
  <tr><td><b>Sender Name</b></td><td>".$row['contact_name']."</td></tr>
  <tr><td><b>Sender Email</b></td><td>".$row['contact_email']."</td></tr>
  <tr><td><b>Subject</b></td><td>".$row['contact_subject']."</td></tr>
  <tr><td><b>Message </b></td><td><hr/>".$row['contact_message']."</td></tr>
<tr><td>&nbsp;</td><td></td></tr>  <tr><td><center>  <a href=\"deletemessage.php?contact_id=".$row['contact_id']."\"><img title=\"Delete Message\" height=\"24\" border=\"0\" src=\"../image/deletemsg.png\"/></a></center></td><td>&nbsp; &nbsp; &nbsp; &nbsp; <a href=\"replymessage.php?contact_id=".$row['contact_id']."\"><img title=\"Reply Message\" height=\"24\"  border=\"0\" src=\"../image/replymsg.png\"/></a>
	 &nbsp; &nbsp; &nbsp; &nbsp; 
	<a href=\"message.php\"><img title=\"Back to Message\" height=\"24\" border=\"0\" src=\"../image/backmsg.png\"/></a> </td></tr>";
}
$username_string = implode("", $username_array); 
	
$content="
<center><br/><table width=\"650\" style=\"background-color: #EFFBEF; border: 1px solid green;\">
<tr><td><br/><center><table width=\"500\" border=\"0\">".$username_string."</table></center><br/></td></tr> 	 	
	

	</table>";
	
include ("../tempelate.php");
	?>