<?php
include('auth.php');
?>
<?php
$title="Message's List";
		$query="SELECT * FROM contact ORDER BY contact_id DESC";
		  $resource=mysql_query($query,$link);
		  $username_array = array();
	
	while($row = mysql_fetch_array($resource)){

	if ($row['note'] == "read")
	{
	$status = "<img src=\"http://fyp.masmai.com/image/orange.png\" title=\"Read\" width=\"7\" height=\"7\" border=\"0\" ></img>";
	}
	else if ($row['note'] == "unread")
	{
	$status = "<img src=\"http://fyp.masmai.com/image/red.png\" title=\"Unread\" width=\"7\" height=\"7\" border=\"0\" ></img>";
	}
	else if ($row['note'] == "replied")
	{
	$status = "<img src=\"http://fyp.masmai.com/image/green.png\" title=\"Replied\" width=\"7\" height=\"7\" border=\"0\" ></img>";
	}
	
$dateo = substr($row['contact_time'], 0, 10); 
 $username_array[] = "<tr><td><center>".$status."</center></td><td>".substr($row['contact_name'], 0, 25)."</td><td>".substr($row['contact_subject'], 0, 25)."</td><td><center>".$dateo."</center></td><td><center>
	<a href=\"viewmessage.php?contact_id=".$row['contact_id']."\"><img title=\"View Message\" width=\"24\" height=\"24\"  border=\"0\" src=\"../image/modifyx.ico\"/></a> &nbsp; &nbsp;
	<a href=\"deletemessage.php?contact_id=".$row['contact_id']."\"><img title=\"Delete Message\" width=\"24\" height=\"24\" border=\"0\" src=\"../image/deletex.ico\"/></a>	
	</center></td></tr>";
}
$username_string = implode("", $username_array); 
	
$content="
<center><br/><table width=\"650\" style=\"background-color: #EFFBEF; border: 1px solid green;\"><tr>
	<td></td><td><b>Sender Name</b></td><td><b>Subject</b></td><td><center><b>Date</b></center></td><td><center><b>Action</b></center></td></tr>".$username_string." 	 	
	

	</table>";
	
include ("../tempelate.php");
	?>