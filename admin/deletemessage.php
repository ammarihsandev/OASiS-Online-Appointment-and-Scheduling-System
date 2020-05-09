<?php
include('auth.php');
include('../connect.php');

$title="Delete Message's Record";

	 $contact_id=$_REQUEST['contact_id']; 
			
	 $query="DELETE FROM contact WHERE contact_id='".$contact_id."'";
	
		  if(!mysql_query($query,$link))
		  {die (
		  
		  $content="
<br/><center><h3>An unexpected error occured while deleting the record, Please try again!</h3></center>");}
		  else
		 {
		 $content = "<center><table width=\"350\" style=\"border-width: 2px; border-style: dotted; border-color: green; border-radius: 25px; background-color: #EFFBEF;\" ><tr><td><br/><center>
The message successfully<br/> 
removed from the system!<br/>Please <a href=\"message.php\"><b>Click Here</b></a> to view <br/>the message's list<br/>&nbsp;</center></td></tr></table></center>";}

		  
		  
include ("../tempelate.php");
	 ?>