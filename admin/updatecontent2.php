<?php
include('auth.php');
include('../connect.php');



	 $oasiscontent=$_REQUEST['oasiscontent']; 
	 $menucontent=$_REQUEST['menucontent']; 		
			
	 $query="UPDATE website SET ".$menucontent." ='".$oasiscontent."' WHERE Site_ID='1'";
	
		  if(!mysql_query($query,$link))
		  {die (
		  
		  $content="
<br/><center><h3>An unexpected error occured while saving the record, Please try again!</h3></center>");}
		  else
		 {


		 echo "<center><br>Information updated Successfully!<br><br><br> <a href=\"javascript:window.close()\">Close Window</a></center>";}
		  

	 ?>	