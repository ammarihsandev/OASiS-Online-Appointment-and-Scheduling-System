<?php
include('auth.php');
include('../connect.php');

$title="Update Lecturer's Information";

	 $oasiscontent=$_REQUEST['oasiscontent']; 
	 $menucontent=$_REQUEST['menucontent']; 		
			
	 $query="UPDATE website SET ".$menucontent." ='".$oasiscontent."' WHERE Site_ID='1'";
	
		  if(!mysql_query($query,$link))
		  {die (
		  
		  $content="
<br/><center><h3>An unexpected error occured while saving the record, Please try again!</h3></center>");}
		  else
		 {

if ($menucontent== "about"){
$link = "../about.php";}
else if ($menucontent== "features"){
$link = "../oasisfeature.php";}
else if ($menucontent== "news"){
$link = "../oasisnews.php";}
else if ($menucontent== "exhibition"){
$link = "../exhibition.php";}

		 $content = "<center><table width=\"350\" style=\"border-width: 2px; border-style: dotted; border-color: green; border-radius: 25px; background-color: #EFFBEF;\" ><tr><td><br/><center>
News/Info successfully<br/> 
updated in the system!<br/>Please <a href=\"".$link."\"><b>Click Here</b></a> to view <br/>the updated information<br/>&nbsp;</center></td></tr></table></center>";}
		  
include ("../tempelate.php");
	 ?>	