<?php
include('auth.php');
?>
<?php
$title="My Appointment Schedule";
$Lecturer_ID = $_SESSION['myuser'];
		$query="SELECT * FROM appointment WHERE Lecturer_ID = '".$Lecturer_ID."' ORDER BY App_ID DESC ";
		  $resource=mysql_query($query,$link);
		  $username_array = array();	
	
	while($row = mysql_fetch_array($resource)){

			$query2="SELECT * FROM student WHERE Student_ID = '".$row['Student_ID']."' ";
		  $resource2=mysql_query($query2,$link);
	while($row2 = mysql_fetch_array($resource2)){
	
	if ($row['Note'] == "cancel")
	{
	$status = "<img src=\"http://iiumoasis.com/image/red.png\" title=\"cancel\" width=\"7\" height=\"7\" border=\"0\" ></img>";
	}
	else if ($row['Note'] == "ok")
	{
	$status = "<img src=\"http://iiumoasis.com/image/green.png\" title=\"ok\" width=\"7\" height=\"7\" border=\"0\" ></img>";
	}
 
$name = $row2['Student_fname']."&nbsp;".$row2['Student_lname']; 
$dateo = substr($row['App_time'], 0, 10); 
 $username_array[] = "<tr><td><center>".$status."</center></td><td>".substr($name, 0, 20)."</td><td>".$dateo."</td><td>".substr($row['App_reason'], 0, 50)."</td><td><center>
	<a href=\"viewapp.php?App_ID=".$row['App_ID']."&Student_ID=".$row['Student_ID']."\"><img title=\"View Appointment\" width=\"22\" height=\"22\"  border=\"0\" src=\"../image/viewapp.png\"/></a>
	</center></td></tr>";
}
}
$username_string = implode("", $username_array); 
	
$content="
<div  align=\"right\"><a href=\"history.php\"><img  border=\"0\" src=\"../image/history.png\" title=\"View Appointment History\"></img></a></div>
<center><br/><table width=\"650\" style=\"background-color: #EFFBEF; border: 1px solid green;\"><tr>
	<td></td><td><b>Student Name</b></td><td><b>App. Time</b></td><td><b>Reason</b></td><td><center><b>Action</b></center></td></tr>".$username_string." 	 		
	</table>";
	
include ("../tempelate.php");
	?>