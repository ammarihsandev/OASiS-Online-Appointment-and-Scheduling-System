<?php
include('../menuheader.php');
$title="My Consultation Time";
include('../header.php');
?>
<?php

		date_default_timezone_set("Asia/Kuala_Lumpur");
		
$Lecturer_ID = $_SESSION['myuser'];
		$query="SELECT * FROM avatime WHERE Lecturer_ID = '".$Lecturer_ID."' ORDER BY day, time ASC";
		  $resource=mysql_query($query,$link);
	while($row = mysql_fetch_array($resource)){
	
 
echo"<table><tr><td>Hari</td><td>Time</td></tr><tr><td>".$row['day']."</td><td>".$row['time']."</td></tr></table>";

}

$format = 'm/d/Y l';  
$ts = time();         
$date = date($format, $ts); 

$ts = strtotime($date);
// calculate the number of days since Monday
$dow = date('w', $ts);
$offset = $dow - 1;
if ($offset < 0) {
    $offset = 6;
}
$nw = $_REQUEST["nw"];

// calculate timestamp for the Monday
$ts = $ts - $offset*86400;

	
	
if ($nw == 1)
	{
		echo "<br/><br/><a href=\"?nw=0\">PRE</a>&nbsp;&nbsp;&nbsp;<a href=\"?nw=2\">NEXT </a><table border=\"1\"><tr><td> <table border=\"0\"><tr>";
		for ($i = 7; $i < 12; $i++) 
		{
		echo "<td><center><b>".date("l <\b\\r> m/d/Y", $ts + $i * 86400) . "</b></center></td>";
		}
		echo "</tr><tr>";
		$query2="SELECT * FROM avatime WHERE Lecturer_ID = '".$Lecturer_ID."' ORDER BY time ASC";
		  $resource2=mysql_query($query2,$link);
		while($row2 = mysql_fetch_array($resource2)){
		for ($i = 7; $i < 12; $i++) 
		{
		$dateA = date("m/d/Y", $ts + $i * 86400);
		$dateB = '04/02/2015';
		$dayA = date("l", $ts + $i* 86400);
		$dayB= $row2['day'];
		
		$dayList = date("l", $ts + $i * 86400);
		$dayDB = $row2['day'];
		 
		
		if ($dayList == $dayDB) 
		{
		
		echo "<td><center><a href=\"confirm.php?time=".$row2['time']."&day=".$dayList."\">".$row2['time']."</center></td>";
		
		}
		else
		{
		echo "<td></td>";
		}
		
		}		
		echo "</tr>";
		}
		echo "</table></td></tr></table>";
	}

else if ($nw == 2)
	{
		echo "<br/><br/><a href=\"?nw=1\">PRE</a>&nbsp;&nbsp;&nbsp;<a href=\"?nw=3\">NEXT </a> <table border=\"1\"><tr>";
     	for ($i = 14; $i < 19; $i++) 
		{
			echo "<td><center><b>".date("l <\b\\r> m/d/Y", $ts + $i * 86400) . "</b></center></td>";
		}
			echo "</tr></table>";
	}

else if ($nw == 3)
	{
		echo "<br/><br/><a href=\"?nw=2\">PRE</a>&nbsp;&nbsp;&nbsp;<a href=\"?nw=4\">NEXT </a> <table border=\"1\"><tr>";
		for ($i = 21; $i < 26; $i++) 
		{
			echo "<td><center><b>".date("l <\b\\r> m/d/Y", $ts + $i * 86400) . "</b></center></td>";
		}
			echo "</tr></table>";
	}

else if($nw == 4)
	{
		echo "<br/><br/><a href=\"?nw=3\">PRE</a>&nbsp;&nbsp;&nbsp; NEXT <table border=\"1\"><tr>";
		for ($i = 28; $i < 33; $i++) 
		{
			echo "<td><center><b>".date("l <\b\\r> m/d/Y", $ts + $i * 86400) . "</b></center></td>";
		}
			echo "</tr></table>";
	}

else 
	{
		echo "<br/><br/>PRE &nbsp;&nbsp;&nbsp;<a href=\"?nw=1\">NEXT </a>
	<table border=\"1\"><tr><td> 
		<table border=\"0\"><tr><td>Lecturer Info</td>";
		for ($i = 0; $i < 5; $i++) 
		{
			echo "<td><center><b>".date("l <\b\\r> m/d/Y", $ts + $i * 86400) . "</b></center></td>";
		}
			echo "</tr>";		
		$query3="SELECT * FROM lecturer";
		  $resource3=mysql_query($query3,$link);	
		while($row3 = mysql_fetch_array($resource3)){
			echo "<tr><td>".$row3['Lecturer_fname']."</td><td><table>";
		$query2="SELECT * FROM avatime WHERE Lecturer_ID = '".$Lecturer_ID."' ORDER BY time ASC";
		  $resource2=mysql_query($query2,$link);
		while($row2 = mysql_fetch_array($resource2)){
		for ($i = 7; $i < 12; $i++) 
		{
		$dateA = date("m/d/Y", $ts + $i * 86400);
		$dateB = '04/02/2015';
		$dayA = date("l", $ts + $i* 86400);
		$dayB= $row2['day'];
		$dayList = date("l", $ts + $i * 86400);
		$dateC = time("d/m/Y", $ts + $i * 86400);		
		$dayDB = $row2['day'];
		
		if ($dayList == $dayDB) 
		{
		echo "<tr><td><center><a href=\"confirm.php?time=".$row2['time']."&day=".$dayList."\">".$row2['time']."</center></td></tr>";
		}
		else
		{
		echo "<tr><td></td></tr>";
		}
		}}
		echo "</table></td></tr>";
		}
		echo "</table></td></tr></table>";
	}

	
include ("../footer.php");
	?>