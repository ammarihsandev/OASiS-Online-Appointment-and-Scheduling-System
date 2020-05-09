<?php
$title = "My Profile Information";
include("../header.php");
include("../connect.php");
?>
<?php
session_start();
include('../navi.php');
?>
<div role="main" class="ui-content jqm-content">
<p>
<?php
$query="SELECT * FROM lecturer WHERE Lecturer_ID='".$_SESSION['myuser']."'";

	$resource=mysql_query($query,$link) or die ("An unexpected error occured while <b>updating</b> the record, Please try again!");
	$result=mysql_fetch_array($resource);
		
$connection = mysql_connect("mysql.1freehosting.com", "u432221022_myfyp", "myfyppass");
// select the database that we will be using
mysql_select_db("u432221022_myfyp");


$sql = "SELECT * FROM course WHERE Lecturer_ID='".$_SESSION['myuser']."'";
$results = mysql_query($sql); // process the query

$username_array = array(); // start an array

while($row = mysql_fetch_array($results)){ 
  $username_array[] = "- ".$row['Course_Name']." - ".$row['Course_Code'].""; 
}

$username_string = implode("<br/>", $username_array); 

 
echo "
<center>
<table width=\"95%\" style=\"border-width: 2px; border-style: dotted; border-color: #E9F7EB; border-radius: 25px; background-color: #F1FAF3;\" ><tr><td><br>
<center><table width=\"95%\">
<tr><td><center><img src=\"http://".$result[8]."\" width=\"95\" height=\"105\" border=\"1\"></img></center></td></tr>
<tr><td ><h2>".$result[2]."

".$result[3]."</h2><b>

Department of ".$result[7]."
</b>
<br/><i>Kuliyyah of ".$result[6]."</i></td>
<tr><td colspan=\"2\">
<br><b>Current Subject</b><br/>
".
$username_string."<br/><br/>
</td></tr>
<tr><td>	
<img src=\"https://www.iiumoasis.com/image/phone1.png\"></img> 0".$result[4]."</td></tr>
<tr><td><img src=\"https://www.iiumoasis.com/image/email1.png\"></img>".$result[5]."</td></tr>
</table>
</center>
<br/></td></tr>
<tr><td colspan=\"2\"><a href=\"profileedit.php\" title=\"Edit My Profile\"><center><table  style=\"border-width: 5px; border-color: #FFFFFF; border-radius: 25px; background-color: #BCF7C9;\" ><tr><td> <b> Edit Profile Information </b> </td></tr></table></center></a><br><td></tr></table>
</center>	";
	?>
</p>
</div>
	
<?php
include("../footer.php");
?>
