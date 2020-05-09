<?php
session_start();
$connection = mysql_connect("mysql.1freehosting.com", "u160323153_myfyp", "myfyppass");
 
// select the database that we will be using
mysql_select_db("u160323153_myfyp");
 

// build and execute the query
$sql = "SELECT * FROM course WHERE Student_ID='".$_SESSION['myuser']."'";
$result = mysql_query($sql);
 

 while ($row = mysql_fetch_array($result))
{
  echo $row['Course_Code']. " - ". $row['Course_Name'];
  echo "<br />";
}
 
	?>