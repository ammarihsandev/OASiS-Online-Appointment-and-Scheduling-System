<?php

session_start();
$title = "My Appointment History";
include("../header.php");
include("../connect.php");
?>

<?php
include("../navi.php");
?>

<div role="main" class="ui-content jqm-content">
<p>
<?php
$title="My Appointment Schedule";
$Student_ID = $_SESSION['myuser'];
		$query="SELECT * FROM appointment WHERE Student_ID = '".$Student_ID."' ORDER BY App_ID DESC ";
		  $resource=mysql_query($query,$link);
		  $username_array = array();	
	
	while($row = mysql_fetch_array($resource)){

			$query2="SELECT * FROM lecturer WHERE Lecturer_ID = '".$row['Lecturer_ID']."' ";
		  $resource2=mysql_query($query2,$link);
	while($row2 = mysql_fetch_array($resource2)){
	
	if ($row['Note'] == "cancel")
	{
	$status = "<img src=\"https://www.iiumoasis.com/image/red.png\" title=\"cancel\" width=\"7\" height=\"7\" border=\"0\" ></img>";
	}
	else if ($row['Note'] == "ok")
	{
	$status = "<img src=\"https://www.iiumoasis.com/image/green.png\" title=\"ok\" width=\"7\" height=\"7\" border=\"0\" ></img>";
	}
 
$name = $row2['Lecturer_fname']."&nbsp;".$row2['Lecturer_lname']; 
$dateo = substr($row['App_time'], 0, 5); 
$dateneh = date("d M", strtotime($row['App_date']));

 $username_array[] = "<tr><td><center>".$status."</center></td><td>".substr($name, 0, 20)."</td><td>".$dateneh.", ".$dateo."</td><td>".substr($row['App_reason'], 0, 50)."</td><td><center>
	<a href=\"viewapp.php?App_ID=".$row['App_ID']."&Lecturer_ID=".$row['Lecturer_ID']."\"><img title=\"View Appointment\" width=\"22\" height=\"22\"  border=\"0\" src=\"https://www.iiumoasis.com/image/viewapp.png\"/></a>
	</center></td></tr>";
}
}
$username_string = implode("", $username_array); 
	
	echo"
<center><table width=\"95%\" style=\"border-width: 2px; border-style: dotted; border-color: #E8F8EB; border-radius: 25px; background-color: #F1FAF3;\" ><tr><td><br/>


<tr>
<div  align=\"right\"><a href=\"schedule.php\"><img  border=\"0\" src=\"https://www.iiumoasis.com/image/myschedule.png\" title=\"View Appointment History\"></img></a>&nbsp;&nbsp;&nbsp;</div><br>
	<td></td><td><b>Lecturer Name</b></td><td><b>App. Time</b></td><td><b>Action</b></td></tr>".$username_string." 	 		
	</table>";
	
	?>
	
	
	
	</p>
</div>

<?php
include("../footer.php");
?>