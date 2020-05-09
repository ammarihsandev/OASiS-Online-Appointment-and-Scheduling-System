<?php
include('auth.php');
?>
<?php
$title="Lecturer's List";
		$query="SELECT * FROM lecturer";
		  $resource=mysql_query($query,$link);
		  $username_array = array();
	
	while($row = mysql_fetch_array($resource)){ 
  $username_array[] = "<tr><td><center>".$row['Lecturer_ID']."</center></td><td><center>".$row['Lecturer_fname']." ".$row['Lecturer_lname']."</center></td><td><center>".$row['Lecturer_email']."</center></td><td><center>0".$row['Lecturer_phone']."</center></td><td><center>
	<a href=\"viewlecturer.php?Lecturer_ID=".$row['Lecturer_ID']."\"><img title=\"View Details\" width=\"24\" height=\"24\"  border=\"0\" src=\"../image/approve.ico\"/></a> &nbsp; &nbsp;
	<a href=\"modifylecturer.php?Lecturer_ID=".$row['Lecturer_ID']."\"><img title=\"Modify Record\" width=\"24\" height=\"24\"  border=\"0\" src=\"../image/modifyx.ico\"/></a> &nbsp; &nbsp;<a href=\"deletelecturer.php?Lecturer_ID=".$row['Lecturer_ID']."\"><img title=\"Delete Record\" width=\"24\" height=\"24\" border=\"0\" src=\"../image/deletex.ico\"/></a>	
	</center></td></tr>";
}
$username_string = implode("", $username_array); 
	
$content="
<center><br><a href=\"reglecturer.php\" ><table style=\"background-color: #EFFBEF; border: 1px solid green;\"><tr><td><b>Register New Lecturer</b> <img src=\"../image/add.ico\" width=\"20\"></td></tr></table></a><br/><table width=\"650\" style=\"background-color: #EFFBEF; border: 1px solid green;\"><tr>
	<td><center><b>S. ID</b></center></td><td><center><b>Lecturer's Name</b></center></td><td><center><b>Email Address</b></center></td><td><center><b>Phone No</b></center></td><td><center><b>Action</b></center></td></tr>".$username_string." 	 	
	

	</table>";
	
include ("../tempelate.php");
	?>