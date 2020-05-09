<?php
$title="Lecturer's Information";
include('menuheader.php');
include('header.php');
?>

<?php
$Lecturer_ID = $_REQUEST["Lecturer_ID"];
$query="SELECT * FROM lecturer WHERE Lecturer_ID='".$Lecturer_ID."'";
	$resource=mysql_query($query,$link) or die ("An unexpected error occured while <b>updating</b> the record, Please try again!");
	$result=mysql_fetch_array($resource);


$sql = "SELECT * FROM course WHERE Lecturer_ID='".$Lecturer_ID."'";
$results = mysql_query($sql, $link); // process the query
$username_array = array(); // start an array
while($row = mysql_fetch_array($results)){ 
  $username_array[] = "- ".$row['Course_Name']." - ".$row['Course_Code'].""; 
}

$username_string = implode("<br/>&nbsp;&nbsp;&nbsp;", $username_array); 

echo "
<center><br/><table width=\"100%\"><tr><td width=\"300\">
<table style=\"border-width: 2px; border-style: dotted; border-color: green; border-radius: 25px; background-color: #FAFAFA;\" ><tr><td><br/>
<table><tr><td width=\"30%\">&nbsp;&nbsp;&nbsp;<img src=\"http://".$result[8]."\" width=\"70\"></img>
</td><td width=\"70%\">
<b>".$result[2]."
".$result[3]."</b><br>".$result[7]."
<br><i>".$result[6]."</i><br></td></tr></table>

<b>&nbsp;&nbsp;&nbsp;Office Location: </b>".$result[10]."<br>&nbsp;&nbsp;&nbsp;<b>Current Subject</b><br>
&nbsp;&nbsp;&nbsp;".
$username_string."<br><br>


&nbsp;&nbsp;&nbsp;<img src=\"/image/phone1.png\"></img> 0".$result[4]."
<br> &nbsp;&nbsp;&nbsp;<img src=\"/image/email1.png\"></img>".$result[5]." ";

if (!isset($_SESSION['myuser']))
			
  echo "		
	<br><br>	<a href=\"#\" onclick=\"popup('popUpDiv')\"><center><img src=\"image/smsg2.png\" title=\"Send Message\" alt=\"Send Message\"></img></center></a>
	<br></td></tr></table>
</center>
		
		<div id=\"blanket\" style=\"display:none;\"></div>
	<div id=\"popUpDiv\" style=\"display:none;\">
    	
		<center>
		<br>

<img src=\"image/warning.png\" title=\"Login Required\"></img><br/>
Login Required ...!!!<br>
Please Login to Your Account!
<br><br>
					<a href=\"login2.php\">Click Here to Login</a>
<br><br>
<br/>
<a href=\"#\" onclick=\"popup('popUpDiv')\" >Close Window</a></center>

	</div>"
	; 
	else

echo"<br><br>	<a href=\"student/viewmessage.php?Lecturer_ID=".$Lecturer_ID."\"><center><img src=\"image/smsg2.png\" title=\"Send Message\" alt=\"Send Message\"></img></center></a>
<br></td></tr></table>
</center>
";




		date_default_timezone_set("Asia/Kuala_Lumpur");
$Student_ID = $_SESSION['myuser'];



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

echo "</td><td width=\"12\">&nbsp;</td><td width=\"270\" valign=\"top\"><table width=\"270\" style=\"border-width: 2px; border-style: dotted; border-color: green; border-radius: 25px; background-color: #FAFAFA;\" ><tr><td>
<center><br><b>SET an APPOINTMENT!</b><center>";	
	
if ($nw == 1)
	{
		echo "<a href=\"?Lecturer_ID=".$Lecturer_ID."&nw=0\">...PRE</a>&nbsp; &nbsp; &nbsp;<a href=\"?Lecturer_ID=".$Lecturer_ID."&nw=2\">NEXT... </a></center><center><table border=\"1\" bordercolor=\"green\" bgcolor=\"#DEFFD1\"><tr><td> <table border=\"0\"><tr bgcolor=\"#B2F9B2\">";
		for ($i = 7; $i < 12; $i++) 
		{
		echo "<td bgcolor=\"#B2F9B2\"><center><font=\"arial\"><small><b>".date("D <\b\\r> m/d", $ts + $i * 86400) . "</b></small></font></center></td>";
		}
		echo "</tr><tr>";
		$query2="SELECT * FROM avatime WHERE Lecturer_ID = '".$Lecturer_ID."' ORDER BY time ASC";
		  $resource2=mysql_query($query2,$link);
		while($row2 = mysql_fetch_array($resource2)){
		for ($i = 7; $i < 12; $i++) 
		{
		$dayList = date("l", $ts + $i * 86400);
		$dateList = date("m/d/Y", $ts + $i * 86400);
		$dayDB = $row2['day'];
		if ($dayList == $dayDB) 
		{		
	
if (!isset($_SESSION['myuser']))
{			
  echo "<td onMouseOver=\"this.style.background='#BCF5A9'\" onMouseOut=\"this.style.background='#DEFFD1'\"><a href=\"#\" onclick=\"popup('popUpDiv')\" ><center><small>".date('h:i A', strtotime($row2['time']))."</small></center></a></td>
		
		<div id=\"blanket\" style=\"display:none;\"></div>
	<div id=\"popUpDiv\" style=\"display:none;\">
    	
		<center>
		<br>

<img src=\"image/warning.png\" title=\"Login Required\"></img><br/>
Login Required ...<br>
Please Login to Your Account!
<br><br>
					<a href=\"login2.php\">Click Here to Login</a>
<br><br>
<br/>
<a href=\"#\" onclick=\"popup('popUpDiv')\" >Close Window</a></center>

	</div>"
; }
	else
	{
echo"<td onMouseOver=\"this.style.background='#BCF5A9'\" onMouseOut=\"this.style.background='#DEFFD1'\"><a href=\"confirm.php?Lecturer_ID=".$Lecturer_ID."&time=".$row2['time']."&day=".$dayList."&date=".$dateList."\"><center><small>".date('h:i A', strtotime($row2['time']))."</small></center></a></td>";}


	}
		else
		{
		echo "<td></td>"; }		}		
		echo "</tr>"; }
		echo "</table></td></tr></table></center><br/></td></tr></table>";
	}

else if ($nw == 2)
	{
		echo "<a href=\"?Lecturer_ID=".$Lecturer_ID."&nw=1\">...PRE</a>&nbsp; &nbsp; &nbsp;<a href=\"?Lecturer_ID=".$Lecturer_ID."&nw=3\">NEXT... </a></center><center><table border=\"1\" bordercolor=\"green\" bgcolor=\"#DEFFD1\"><tr><td> <table border=\"0\"><tr bgcolor=\"#B2F9B2\">";
     	for ($i = 14; $i < 19; $i++) 
		{
		echo "<td bgcolor=\"#B2F9B2\"><center><font=\"arial\"><small><b>".date("D <\b\\r> m/d", $ts + $i * 86400) . "</b></small></font></center></td>";
		}
		echo "</tr><tr>";
		$query2="SELECT * FROM avatime WHERE Lecturer_ID = '".$Lecturer_ID."' ORDER BY time ASC";
		  $resource2=mysql_query($query2,$link);
		while($row2 = mysql_fetch_array($resource2)){
		for ($i = 14; $i < 19; $i++) 
		{
		$dayList = date("l", $ts + $i * 86400);
		$dateList = date("m/d/Y", $ts + $i * 86400);
		$dayDB = $row2['day'];
		if ($dayList == $dayDB) 
		{		
	
if (!isset($_SESSION['myuser']))
{			
  echo "<td onMouseOver=\"this.style.background='#BCF5A9'\" onMouseOut=\"this.style.background='#DEFFD1'\"><a href=\"#\" onclick=\"popup('popUpDiv')\" ><center><small>".date('h:i A', strtotime($row2['time']))."</small></center></a></td>
		
		<div id=\"blanket\" style=\"display:none;\"></div>
	<div id=\"popUpDiv\" style=\"display:none;\">
    	
		<center>
		<br>

<img src=\"image/warning.png\" title=\"Login Required\"></img><br/>
Login Required ...<br>
Please Login to Your Account!
<br><br>
					<a href=\"login2.php\">Click Here to Login</a>
<br><br>
<br/>
<a href=\"#\" onclick=\"popup('popUpDiv')\" >Close Window</a></center>

	</div>"
		; }else
	{
echo"<td onMouseOver=\"this.style.background='#BCF5A9'\" onMouseOut=\"this.style.background='#DEFFD1'\"><a href=\"confirm.php?Lecturer_ID=".$Lecturer_ID."&time=".$row2['time']."&day=".$dayList."&date=".$dateList."\"><center><small>".date('h:i A', strtotime($row2['time']))."</small></center></a></td>";}


	}
		else
		{
		echo "<td></td>"; }		}		
		echo "</tr>"; }
		echo "</table></td></tr></table></center><br/></td></tr></table>";
	}

else if ($nw == 3)
	{
		echo "<a href=\"?Lecturer_ID=".$Lecturer_ID."&nw=2\">...PRE</a>&nbsp; &nbsp; &nbsp;<a href=\"?Lecturer_ID=".$Lecturer_ID."&nw=4\">NEXT... </a></center><center><table border=\"1\" bordercolor=\"green\" bgcolor=\"#DEFFD1\"><tr><td> <table border=\"0\"><tr bgcolor=\"#B2F9B2\">";
		for ($i = 21; $i < 26; $i++) 
		{
		echo "<td bgcolor=\"#B2F9B2\"><center><font=\"arial\"><small><b>".date("D <\b\\r> m/d", $ts + $i * 86400) . "</b></small></font></center></td>";
		}
		echo "</tr><tr>";
		$query2="SELECT * FROM avatime WHERE Lecturer_ID = '".$Lecturer_ID."' ORDER BY time ASC";
		  $resource2=mysql_query($query2,$link);
		while($row2 = mysql_fetch_array($resource2)){
		for ($i = 21; $i < 26; $i++) 
		{
		$dayList = date("l", $ts + $i * 86400);
		$dateList = date("m/d/Y", $ts + $i * 86400);
		$dayDB = $row2['day'];
		if ($dayList == $dayDB) 
		{		
	
if (!isset($_SESSION['myuser']))
{			
  echo "<td onMouseOver=\"this.style.background='#BCF5A9'\" onMouseOut=\"this.style.background='#DEFFD1'\"><a href=\"#\" onclick=\"popup('popUpDiv')\" ><center><small>".date('h:i A', strtotime($row2['time']))."</small></center></a></td>
		
		<div id=\"blanket\" style=\"display:none;\"></div>
	<div id=\"popUpDiv\" style=\"display:none;\">
    	
		<center>
		<br>

<img src=\"image/warning.png\" title=\"Login Required\"></img><br/>
Login Required ...<br>
Please Login to Your Account!
<br><br>
					<a href=\"login2.php\">Click Here to Login</a>
<br><br>
<br/>
<a href=\"#\" onclick=\"popup('popUpDiv')\" >Close Window</a></center>

	</div>"
		; }else
	{
echo"<td onMouseOver=\"this.style.background='#BCF5A9'\" onMouseOut=\"this.style.background='#DEFFD1'\"><a href=\"confirm.php?Lecturer_ID=".$Lecturer_ID."&time=".$row2['time']."&day=".$dayList."&date=".$dateList."\"><center><small>".date('h:i A', strtotime($row2['time']))."</small></center></a></td>";}


	}
		else
		{
		echo "<td></td>"; }		}		
		echo "</tr>"; }
		echo "</table></td></tr></table></center><br/></td></tr></table>";
	}

else if($nw == 4)
	{
		echo "<a href=\"?Lecturer_ID=".$Lecturer_ID."&nw=3\">...PRE</a>&nbsp; &nbsp; &nbsp;<a href=\"?Lecturer_ID=".$Lecturer_ID."&nw=5\">NEXT... </a></center><center><table border=\"1\" bordercolor=\"green\" bgcolor=\"#DEFFD1\"><tr><td> <table border=\"0\"><tr bgcolor=\"#B2F9B2\">";
		for ($i = 28; $i < 33; $i++) 
		{
		echo "<td bgcolor=\"#B2F9B2\"><center><font=\"arial\"><small><b>".date("D <\b\\r> m/d", $ts + $i * 86400) . "</b></small></font></center></td>";
		}
		echo "</tr><tr>";
		$query2="SELECT * FROM avatime WHERE Lecturer_ID = '".$Lecturer_ID."' ORDER BY time ASC";
		  $resource2=mysql_query($query2,$link);
		while($row2 = mysql_fetch_array($resource2)){
		for ($i = 28; $i < 33; $i++) 
		{
		$dayList = date("l", $ts + $i * 86400);
		$dateList = date("m/d/Y", $ts + $i * 86400);
		$dayDB = $row2['day'];
		if ($dayList == $dayDB) 
		{		
	
if (!isset($_SESSION['myuser']))
{			
  echo "<td onMouseOver=\"this.style.background='#BCF5A9'\" onMouseOut=\"this.style.background='#DEFFD1'\"><a href=\"#\" onclick=\"popup('popUpDiv')\" ><center><small>".date('h:i A', strtotime($row2['time']))."</small></center></a></td>
		
		<div id=\"blanket\" style=\"display:none;\"></div>
	<div id=\"popUpDiv\" style=\"display:none;\">
    	
		<center>
		<br>

<img src=\"image/warning.png\" title=\"Login Required\"></img><br/>
Login Required ...<br>
Please Login to Your Account!
<br><br>
					<a href=\"login2.php\">Click Here to Login</a>
<br><br>
<br/>
<a href=\"#\" onclick=\"popup('popUpDiv')\" >Close Window</a></center>

	</div>"
		; }else
	{
echo"<td onMouseOver=\"this.style.background='#BCF5A9'\" onMouseOut=\"this.style.background='#DEFFD1'\"><a href=\"confirm.php?Lecturer_ID=".$Lecturer_ID."&time=".$row2['time']."&day=".$dayList."&date=".$dateList."\"><center><small>".date('h:i A', strtotime($row2['time']))."</small></center></a></td>";}


	}
		else
		{
		echo "<td></td>"; }		}		
		echo "</tr>"; }
		echo "</table></td></tr></table></center><br/></td></tr></table>";
	}

	else if($nw == 5)
	{
		echo "<a href=\"?Lecturer_ID=".$Lecturer_ID."&nw=4\">...PRE</a>&nbsp; &nbsp; &nbsp;NEXT... </center><center><table border=\"1\" bordercolor=\"green\" bgcolor=\"#DEFFD1\"><tr><td> <table border=\"0\"><tr bgcolor=\"#B2F9B2\">";
		for ($i = 35; $i < 40; $i++) 
		{
		echo "<td bgcolor=\"#B2F9B2\"><center><font=\"arial\"><small><b>".date("D <\b\\r> m/d", $ts + $i * 86400) . "</b></small></font></center></td>";
		}
		echo "</tr><tr>";
		$query2="SELECT * FROM avatime WHERE Lecturer_ID = '".$Lecturer_ID."' ORDER BY time ASC";
		  $resource2=mysql_query($query2,$link);
		while($row2 = mysql_fetch_array($resource2)){
		for ($i = 35; $i < 40; $i++) 
		{
		$dayList = date("l", $ts + $i * 86400);
		$dateList = date("m/d/Y", $ts + $i * 86400);
		$dayDB = $row2['day'];
		if ($dayList == $dayDB) 
		{		
	
if (!isset($_SESSION['myuser']))
{			
  echo "<td onMouseOver=\"this.style.background='#BCF5A9'\" onMouseOut=\"this.style.background='#DEFFD1'\"><a href=\"#\" onclick=\"popup('popUpDiv')\" ><center><small>".date('h:i A', strtotime($row2['time']))."</small></center></a></td>
		
		<div id=\"blanket\" style=\"display:none;\"></div>
	<div id=\"popUpDiv\" style=\"display:none;\">
    	
		<center>
		<br>

<img src=\"image/warning.png\" title=\"Login Required\"></img><br/>
Login Required ...<br>
Please Login to Your Account!
<br><br>
					<a href=\"login2.php\">Click Here to Login</a>
<br><br>
<br/>
<a href=\"#\" onclick=\"popup('popUpDiv')\" >Close Window</a></center>

	</div>"
		; }else
	{
echo"<td onMouseOver=\"this.style.background='#BCF5A9'\" onMouseOut=\"this.style.background='#DEFFD1'\"><a href=\"confirm.php?Lecturer_ID=".$Lecturer_ID."&time=".$row2['time']."&day=".$dayList."&date=".$dateList."\"><center><small>".date('h:i A', strtotime($row2['time']))."</small></center></a></td>";}


	}
		else
		{
		echo "<td></td>"; }		}		
		echo "</tr>"; }
		echo "</table></td></tr></table></center><br/></td></tr></table>";
	}
	
else 
	{
		echo "...PRE&nbsp; &nbsp; &nbsp;<a href=\"?Lecturer_ID=".$Lecturer_ID."&nw=1\">NEXT... </a></center><center><table border=\"1\" bordercolor=\"green\" bgcolor=\"#DEFFD1\"><tr><td> <table border=\"0\"><tr bgcolor=\"#B2F9B2\">";
		for ($i = 0; $i < 5; $i++) 
		{
		echo "<td bgcolor=\"#B2F9B2\"><center><font=\"arial\"><small><b>".date("D <\b\\r> m/d", $ts + $i * 86400) . "</b></small></font></center></td>";
		}
		echo "</tr><tr>";
		$query2="SELECT * FROM avatime WHERE Lecturer_ID = '".$Lecturer_ID."' ORDER BY time ASC";
		  $resource2=mysql_query($query2,$link);
		while($row2 = mysql_fetch_array($resource2)){
		for ($i = 0; $i < 5; $i++) 
		{
		$dayList = date("l", $ts + $i * 86400);
		$dateList = date("m/d/Y", $ts + $i * 86400);
		$dayDB = $row2['day'];
		if ($dayList == $dayDB) 
		{		
	
if (!isset($_SESSION['myuser']))
{			
  echo "<td onMouseOver=\"this.style.background='#BCF5A9'\" onMouseOut=\"this.style.background='#DEFFD1'\"><a href=\"#\" onclick=\"popup('popUpDiv')\" ><center><small>".date('h:i A', strtotime($row2['time']))."</small></center></a></td>
		
		<div id=\"blanket\" style=\"display:none;\"></div>
	<div id=\"popUpDiv\" style=\"display:none;\">
    	
		<center>
		<br>

<img src=\"image/warning.png\" title=\"Login Required\"></img><br/>
Login Required ...<br>
Please Login to Your Account!
<br><br>
					<a href=\"login2.php\">Click Here to Login</a>
<br><br>
<br/>
<a href=\"#\" onclick=\"popup('popUpDiv')\" >Close Window</a></center>

	</div>"
		; }else
	{
echo"<td onMouseOver=\"this.style.background='#BCF5A9'\" onMouseOut=\"this.style.background='#DEFFD1'\"><a href=\"confirm.php?Lecturer_ID=".$Lecturer_ID."&time=".$row2['time']."&day=".$dayList."&date=".$dateList."\"><center><small>".date('h:i A', strtotime($row2['time']))."</small></center></a></td>";}


	}
		else
		{
		echo "<td></td>"; }		}
		echo "</tr>"; }
		echo "</table></td></tr></table></center><br/></td></tr></table>";
	}
echo "</td></tr></table>";

	
include ("footer.php");
	?>