<?php
include('auth.php');
include('../connect.php');
?>
<?php
$title="Reply Message";
 $contact_id=$_REQUEST['contact_id']; 
	
	
		$query="SELECT * FROM contact WHERE contact_id ='".$contact_id."'";
		  $resource=mysql_query($query,$link);
	
	
	while($row = mysql_fetch_array($resource)){ 
 $msg = "<form method=\"POST\" action=\"replymessage_exec.php\">
<input type=\"hidden\" name=\"contact_email\" value=\"".$row['contact_email']."\">
<input type=\"hidden\" name=\"contact_name\" value=\"".$row['contact_name']."\">
<input type=\"hidden\" name=\"contact_message\" value=\"".$row['contact_message']."\">
<input type=\"hidden\" name=\"contact_time\" value=\"".$row['contact_time']."\">
<input type=\"hidden\" name=\"contact_id\" value=\"".$row['contact_id']."\">
<center><br/><table width=\"650\" style=\"background-color: #EFFBEF; border: 1px solid green;\"><tr><td><center><table width=\"500\" border=\"0\"> 	
<br/><tr><td width=\"30%\"><b>Receiver Name</b></td><td width=\"70%\">".$row['contact_name']."</td></tr>
<tr><td><b>Receiver Email</b></td><td>".$row['contact_email']."</td></tr>
<tr><td><b>Message</b></td><td><hr/>".$row['contact_message']."</td></tr>
<tr><td><b>Reply</b> </td><td><textarea name=\"message\" rows=\"7\" cols=\"45\" placeholder=\"Write a message...\"style=\"color: #0B3B0B; background-color: #D8F6CE\"></textarea></td></tr>
<tr><td></td><td>&nbsp; <br/><input type=\"submit\" class=\"btn\" name=\"go\" value=\"Reply Message\">&nbsp; <br/><br/></td></tr>
</table></center></td></tr></table></center>";
}
$content=$msg;
include ("../tempelate.php");
	?>