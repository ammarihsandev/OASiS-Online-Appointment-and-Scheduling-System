<?php
include('auth.php');
?>
<?php
$title="Student's List";
		$query="SELECT * FROM student";
		  $resource=mysql_query($query,$link);
		  $username_array = array();
	
	while($row = mysql_fetch_array($resource)){ 
  $username_array[] = "<tr><td><center>".$row['Student_ID']."</center></td><td><center>".$row['Student_fname']." ".$row['Student_lname']."</center></td><td><center>".$row['Student_email']."</center></td><td><center>0".$row['Student_phone']."</center></td><td><center>
	<a href=\"viewstudent.php?Student_ID=".$row['Student_ID']."\"><img title=\"View Details\" width=\"24\" height=\"24\"  border=\"0\" src=\"../image/approve.ico\"/></a> &nbsp; &nbsp;
	<a href=\"modifystudent.php?Student_ID=".$row['Student_ID']."\"><img title=\"Modify Record\" width=\"24\" height=\"24\"  border=\"0\" src=\"../image/modifyx.ico\"/></a> &nbsp; &nbsp;<a href=\"deletestudent.php?Student_ID=".$row['Student_ID']."\"><img title=\"Delete Record\" width=\"24\" height=\"24\" border=\"0\" src=\"../image/deletex.ico\"/></a>	
	</center></td></tr>";
}
$username_string = implode("", $username_array); 
	
$content="
<center><br><a href=\"regstudent.php\" ><table style=\"background-color: #EFFBEF; border: 1px solid green;\"><tr><td><b>Register New Student</b> <img src=\"../image/add.ico\" width=\"20\"></td></tr></table></a><br/><table width=\"650\" style=\"background-color: #EFFBEF; border: 1px solid green;\"><tr>
	<td><center><b>Matric</b></center></td><td><center><b>Student's Name</b></center></td><td><center><b>Email Address</b></center></td><td><center><b>Phone No</b></center></td><td><center><b>Action</b></center></td></tr>".$username_string." 	 	
	

	</table>";
	
include ("../tempelate.php");
	?>