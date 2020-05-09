<?php
include('auth.php');
include('../connect.php');
?>

<?php
$title="Lecturer's Detail";
	 $Lecturer_ID=$_REQUEST['Lecturer_ID'];  
$query="SELECT * FROM lecturer WHERE Lecturer_ID='".$Lecturer_ID."'";
	$resource=mysql_query($query,$link) or die ("An unexpected error occured while <b>updating</b> the record, Please try again!");
	$result=mysql_fetch_array($resource);

$sql = "SELECT * FROM course WHERE Lecturer_ID='".$Lecturer_ID."'";
$results = mysql_query($sql, $link); // process the query

$username_array = array(); // start an array

while($row = mysql_fetch_array($results)){ 
  $username_array[] = "- ".$row['Course_Name']." - ".$row['Course_Code'].""; 
}

$username_string = implode("<br/>", $username_array); 

$content="<center><table width=\"440\" style=\"border-width: 2px; border-style: dotted; border-color: green; border-radius: 25px; background-color: #EFFBEF;\" ><tr><td>

<center>

<center><table width=\"410\">
<tr><br/><td width=\"115\"><center><img src=\"http://".$result[8]."\" width=\"95\" height=\"105\" border=\"1\"></img></center></td>
<td width=\"295\"><h2>".$result[2]."

".$result[3]."</h2><b>

Department of ".$result[7]."
</b>
<br/><i>Kuliyyah of ".$result[6]."</i></td>
<tr><td colspan=\"2\">
<b>Current Subject</b><br/>
".
$username_string."<br/><br/>
</td></tr>
<tr><td colspan=\"2\">
<b>Office Location: </b>".$result[10]."<br/><br/>
</td></tr>
<tr><td>	
<img src=\"../image/phone1.png\"></img> 0".$result[4]."</td>
<td>&nbsp;&nbsp;&nbsp;&nbsp;<img src=\"../image/email1.png\"></img>".$result[5]."</td></tr>
<tr><td colspan=\"2\">
<center><br/><br/>
<table width=\"230\" style=\"border-width: 1px; border-style: dotted; border-color: green; border-radius: 10px; background-color: #EFFBEF;\" >
<tr>
<td><a href=\"lecturer.php\"><center><b>Lecturer's List</b></center></a></td>
<td><a href=\"modifylecturer.php?Lecturer_ID=".$Lecturer_ID."\"><center><b>Modify Record</b></center></a></td></tr></table></center>
</td></tr>

</table>
</center>
</td></tr></table>

</center>

		";

include ("../tempelate.php");
	?>