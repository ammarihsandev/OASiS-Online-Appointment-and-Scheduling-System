<?php
session_start();
include('menuheader.php');
$title="Search Consultation Time";
include('header.php');

?>

<?php

date_default_timezone_set("Asia/Kuala_Lumpur");
$Student_ID = $_SESSION['myuser'];		
$Lecturer_ID = '1234';
                 

$lkul = $_REQUEST['Lecturer_kull'];
$ldep = $_REQUEST['Lecturer_dep'];
$format = 'm/d/Y l';  
$ts = time();         
$date = date($format, $ts); 

if (!isset($_SESSION["search"]))
{ session_start();
$_SESSION["search"] = $_REQUEST['query'];
$lname = '1234';
}
else
{
$lname = '1234';
}

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
		echo "<table border=\"1\" bordercolor=\"green\" bgcolor=\"#DEFFD1\"><tr><td> 

		<table><tr><td width=\"134px\"> &nbsp</td><td colspan=\"5\" width=\"450\"><center><a href=\"?nw=0\">...PRE</a>&nbsp; &nbsp; &nbsp;<a href=\"?nw=2&\">NEXT...</a> </center><center></td>";
		
		echo "</tr><tr><td width=\"134px\">&nbsp</td>";
		for ($i = 7; $i < 12; $i++) 
		{
		echo "<td width=\"90px\" bgcolor=\"#B2F9B2\"><center><font=\"arial\"><small><b>".date("l <\b\\r> d/m/Y", $ts + $i * 86400) . "</b></small></font></center></td>";
		}
		echo "</tr>";
	
	
	$query3="SELECT * FROM lecturer WHERE Lecturer_fname LIKE '%".$lname."%' OR Lecturer_lname LIKE '%".$lname."%'" ;
		  $resource3=mysql_query($query3,$link);
		while($row3 = mysql_fetch_array($resource3)){
		
		
		echo "<tr><td width=\"134px\" valign=\"top\"><center><img width=\"80px\" height=\"100px\" src=\"http://".$row3[Lecturer_img]."\" title=\"".$row3[Lecturer_fname]."&nbsp;".$row3[Lecturer_lname]."\"</img><br>".$row3[Lecturer_fname]."&nbsp;".$row3[Lecturer_lname]."<br><small>".$row3[Lecturer_dep]."</small><br><a href=\"lecturer.php?Lecturer_ID=".$row3[Lecturer_ID]."\">view profile</a><br><a href=\"message.php?Lecturer_ID=".$row3[Lecturer_ID]."\">Message</a></center></td><td colspan=\"5\" width=\"465\">
		
		<table border=\"0\" width=\"465\"><tr bgcolor=\"#DEFFD1\">";

	$query2="SELECT * FROM avatime WHERE Lecturer_ID = '".$row3[Lecturer_ID]."' ORDER BY time ASC";
		  $resource2=mysql_query($query2,$link);
		  while($row2 = mysql_fetch_array($resource2))
		  {
		for ($i = 7; $i < 12; $i++) 
		{
		$dayList = date("l", $ts + $i * 86400);
		$dateList = date("d-m-Y", $ts + $i * 86400);
		$dayDB = $row2['day'];  
		
		
			if ($dayList == $dayDB)
			{
					
if (!isset($_SESSION['myuser']))
			
  echo "
		
		
		<td width=\"93px\" onMouseOver=\"this.style.background='#B2F9B2'\" onMouseOut=\"this.style.background='#DEFFD1'\"><a href=\"#\" onclick=\"popup('popUpDiv')\"><center><small>".date('h:i A', strtotime($row2['time']))."</small></center></a></td>
		
		<div id=\"blanket\" style=\"display:none;\"></div>
	<div id=\"popUpDiv\" style=\"display:none;\">
    	
		<center>
		<br>

<img src=\"image/warning.png\" title=\"Login Required\"></img><br/>
Login Required to Make an Appointment...<br>
Please Login to Your Account!
<br><br>
					<a href=\"login2.php\">Click Here to Login</a>
<br><br>
<br/>
<a href=\"#\" onclick=\"popup('popUpDiv')\" >Close Window</a></center>

	</div>"
	; 
	else
		
								echo "<td width=\"93px\" onMouseOver=\"this.style.background='#B2F9B2'\" onMouseOut=\"this.style.background='#DEFFD1'\"><a href=\"confirm.php?Lecturer_ID=".$row3['Lecturer_ID']."&time=".$row2['time']."&day=".$dayList."&datex=".$dateList."\"><center><small>".date('h:i A', strtotime($row2['time']))."".$rows." </small></center></a></td>"; 
							
			}
				else
			{
			echo "<td width=\"93px\">&nbsp; </td>"; }
				}		
		echo "</tr>"; }
		echo "</table></td></tr><tr><td colspan=\"6\"><hr width=\"100%\" size=\"2\" color=\"green\"></td></tr>";}
		
		echo "</table>
		
		</td></tr></table></center><br/></td></tr></table>";
		
	}

else if ($nw == 2)
	{
		echo "<table border=\"1\" bordercolor=\"green\" bgcolor=\"#DEFFD1\"><tr><td> 

		<table><tr><td width=\"134px\"> &nbsp</td><td colspan=\"5\" width=\"450\"><center><a href=\"?nw=1\">...PRE</a>&nbsp; &nbsp; &nbsp;<a href=\"?nw=0\"><a href=\"?nw=3\">NEXT...</a> </center><center></td>";
		
		echo "</tr><tr><td width=\"134px\">&nbsp</td>";
		for ($i = 14; $i < 19; $i++) 
		{
		echo "<td width=\"90px\" bgcolor=\"#B2F9B2\"><center><font=\"arial\"><small><b>".date("l <\b\\r> d/m/Y", $ts + $i * 86400) . "</b></small></font></center></td>";
		}
		echo "</tr>";
		
		$query3="SELECT * FROM lecturer WHERE Lecturer_fname LIKE '%".$lname."%' OR Lecturer_lname LIKE '%".$lname."%'" ;
	  $resource3=mysql_query($query3,$link);
		while($row3 = mysql_fetch_array($resource3)){
		
		
echo "<tr><td width=\"134px\" valign=\"top\"><center><img width=\"80px\" height=\"100px\" src=\"http://".$row3[Lecturer_img]."\" title=\"".$row3[Lecturer_fname]."&nbsp;".$row3[Lecturer_lname]."\"</img><br>".$row3[Lecturer_fname]."&nbsp;".$row3[Lecturer_lname]."<br><small>".$row3[Lecturer_dep]."</small><br><a href=\"lecturer.php?Lecturer_ID=".$row3[Lecturer_ID]."\">view profile</a><br><a href=\"message.php?Lecturer_ID=".$row3[Lecturer_ID]."\">Message</a></center></td><td colspan=\"5\" width=\"465\">
				<table border=\"0\" width=\"465\"><tr bgcolor=\"#DEFFD1\">";

		$query2="SELECT * FROM avatime WHERE Lecturer_ID = '".$row3[Lecturer_ID]."' ORDER BY time ASC";
		  $resource2=mysql_query($query2,$link);
		while($row2 = mysql_fetch_array($resource2)){
		for ($i = 14; $i < 19; $i++) 
		{
		$dayList = date("l", $ts + $i * 86400);
		$dateList = date("d-m-Y", $ts + $i * 86400);
		$dayDB = $row2['day'];
		if ($dayList == $dayDB) 
		{		
if (!isset($_SESSION['myuser']))
			
  echo "
		
		
		<td width=\"93px\" onMouseOver=\"this.style.background='#B2F9B2'\" onMouseOut=\"this.style.background='#DEFFD1'\"><a href=\"#\" onclick=\"popup('popUpDiv')\"><center><small>".date('h:i A', strtotime($row2['time']))."</small></center></a></td>
		
		<div id=\"blanket\" style=\"display:none;\"></div>
	<div id=\"popUpDiv\" style=\"display:none;\">
    	
		<center>
		<br>

<img src=\"image/warning.png\" title=\"Login Required\"></img><br/>
Login Required to Make an Appointment...<br>
Please Login to Your Account!
<br><br>
					<a href=\"login2.php\">Click Here to Login</a>
<br><br>
<br/>
<a href=\"#\" onclick=\"popup('popUpDiv')\" >Close Window</a></center>

	</div>"
	; 
	else
		
		echo "<td width=\"93px\" onMouseOver=\"this.style.background='#B2F9B2'\" onMouseOut=\"this.style.background='#DEFFD1'\"><a href=\"confirm.php?Lecturer_ID=".$row3['Lecturer_ID']."&time=".$row2['time']."&day=".$dayList."&date=".$dateList."\"><center><small>".date('h:i A', strtotime($row2['time']))."</small></center></a></td>"; }
		else
		{
		echo "<td width=\"93px\">&nbsp;</td>"; }		}		
		echo "</tr>"; }
		echo "</table></td></tr><tr><td colspan=\"6\"><hr width=\"100%\" size=\"2\" color=\"green\"></td></tr>";}
		
		echo "</table>
		
		</td></tr></table></center><br/></td></tr></table>";
		
	}

else if ($nw == 3)
	{
		echo "<table border=\"1\" bordercolor=\"green\" bgcolor=\"#DEFFD1\"><tr><td> 

		<table><tr><td width=\"134px\"> &nbsp</td><td colspan=\"5\" width=\"450\"><center><a href=\"?nw=2\">...PRE</a>&nbsp; &nbsp; &nbsp;<a href=\"?nw=4\">NEXT... </a></center><center></td>";
		
		echo "</tr><tr><td width=\"134px\">&nbsp</td>";
		for ($i = 21; $i < 26; $i++) 
		{
		echo "<td width=\"90px\" bgcolor=\"#B2F9B2\"><center><font=\"arial\"><small><b>".date("l <\b\\r> d/m/Y", $ts + $i * 86400) . "</b></small></font></center></td>";
		}
		echo "</tr>";
		
			$query3="SELECT * FROM lecturer WHERE Lecturer_fname LIKE '%".$lname."%' OR Lecturer_lname LIKE '%".$lname."%'" ;
	  $resource3=mysql_query($query3,$link);
		while($row3 = mysql_fetch_array($resource3)){
		
		
echo "<tr><td width=\"134px\" valign=\"top\"><center><img width=\"80px\" height=\"100px\" src=\"http://".$row3[Lecturer_img]."\" title=\"".$row3[Lecturer_fname]."&nbsp;".$row3[Lecturer_lname]."\"</img><br>".$row3[Lecturer_fname]."&nbsp;".$row3[Lecturer_lname]."<br><small>".$row3[Lecturer_dep]."</small><br><a href=\"lecturer.php?Lecturer_ID=".$row3[Lecturer_ID]."\">view profile</a><br><a href=\"message.php?Lecturer_ID=".$row3[Lecturer_ID]."\">Message</a></center></td><td colspan=\"5\" width=\"465\">
				<table border=\"0\" width=\"465\"><tr bgcolor=\"#DEFFD1\">";

		$query2="SELECT * FROM avatime WHERE Lecturer_ID = '".$row3[Lecturer_ID]."' ORDER BY time ASC";
		  $resource2=mysql_query($query2,$link);
		while($row2 = mysql_fetch_array($resource2)){
		for ($i = 21; $i < 26; $i++) 
		{
		$dayList = date("l", $ts + $i * 86400);
		$dateList = date("d-m-Y", $ts + $i * 86400);
		$dayDB = $row2['day'];
		if ($dayList == $dayDB) 
		{		
if (!isset($_SESSION['myuser']))
			
  echo "
		
		
		<td width=\"93px\" onMouseOver=\"this.style.background='#B2F9B2'\" onMouseOut=\"this.style.background='#DEFFD1'\"><a href=\"#\" onclick=\"popup('popUpDiv')\"><center><small>".date('h:i A', strtotime($row2['time']))."</small></center></a></td>
		
		<div id=\"blanket\" style=\"display:none;\"></div>
	<div id=\"popUpDiv\" style=\"display:none;\">
    	
		<center>
		<br>

<img src=\"image/warning.png\" title=\"Login Required\"></img><br/>
Login Required to Make an Appointment...<br>
Please Login to Your Account!
<br><br>
					<a href=\"login2.php\">Click Here to Login</a>
<br><br>
<br/>
<a href=\"#\" onclick=\"popup('popUpDiv')\" >Close Window</a></center>

	</div>"
	; 
	else
		
		echo "<td width=\"93px\" onMouseOver=\"this.style.background='#B2F9B2'\" onMouseOut=\"this.style.background='#DEFFD1'\"><a href=\"confirm.php?Lecturer_ID=".$row3['Lecturer_ID']."&time=".$row2['time']."&day=".$dayList."&datex=".$dateList."\"><center><small>".date('h:i A', strtotime($row2['time']))."</small></center></a></td>"; }
		else
		{
		echo "<td width=\"93px\">&nbsp;</td>"; }		}		
		echo "</tr>"; }
		echo "</table></td></tr><tr><td colspan=\"6\"><hr width=\"100%\" size=\"2\" color=\"green\"></td></tr>";}
		
		echo "</table>
		
		</td></tr></table></center><br/></td></tr></table>";
		
	}

else if($nw == 4)
	{
		echo "<table border=\"1\" bordercolor=\"green\" bgcolor=\"#DEFFD1\"><tr><td> 

		<table><tr><td width=\"134px\"> &nbsp</td><td colspan=\"5\" width=\"450\"><center><a href=\"?nw=3\">...PRE</a>&nbsp; &nbsp; &nbsp;<a href=\"?nw=5\">NEXT... </a></center><center></td>";
		
		echo "</tr><tr><td width=\"134px\">&nbsp</td>";
		for ($i = 28; $i < 33; $i++) 
		{
		echo "<td width=\"90px\" bgcolor=\"#B2F9B2\"><center><font=\"arial\"><small><b>".date("l <\b\\r> d/m/Y", $ts + $i * 86400) . "</b></small></font></center></td>";
		}
		echo "</tr>";
		
		$query3="SELECT * FROM lecturer WHERE Lecturer_fname LIKE '%".$lname."%' OR Lecturer_lname LIKE '%".$lname."%'" ;
	  $resource3=mysql_query($query3,$link);
		while($row3 = mysql_fetch_array($resource3)){
		
		
echo "<tr><td width=\"134px\" valign=\"top\"><center><img width=\"80px\" height=\"100px\" src=\"http://".$row3[Lecturer_img]."\" title=\"".$row3[Lecturer_fname]."&nbsp;".$row3[Lecturer_lname]."\"</img><br>".$row3[Lecturer_fname]."&nbsp;".$row3[Lecturer_lname]."<br><small>".$row3[Lecturer_dep]."</small><br><a href=\"lecturer.php?Lecturer_ID=".$row3[Lecturer_ID]."\">view profile</a><br><a href=\"message.php?Lecturer_ID=".$row3[Lecturer_ID]."\">Message</a></center></td><td colspan=\"5\" width=\"465\">
				<table border=\"0\" width=\"465\"><tr bgcolor=\"#DEFFD1\">";

		$query2="SELECT * FROM avatime WHERE Lecturer_ID = '".$row3[Lecturer_ID]."' ORDER BY time ASC";
		  $resource2=mysql_query($query2,$link);
		while($row2 = mysql_fetch_array($resource2)){
		for ($i = 28; $i < 33; $i++) 
		{
		$dayList = date("l", $ts + $i * 86400);
		$dateList = date("d-m-Y", $ts + $i * 86400);
		$dayDB = $row2['day'];
		if ($dayList == $dayDB) 
		{		
if (!isset($_SESSION['myuser']))
			
  echo "
		
		
		<td width=\"93px\" onMouseOver=\"this.style.background='#B2F9B2'\" onMouseOut=\"this.style.background='#DEFFD1'\"><a href=\"#\" onclick=\"popup('popUpDiv')\"><center><small>".date('h:i A', strtotime($row2['time']))."</small></center></a></td>
		
		<div id=\"blanket\" style=\"display:none;\"></div>
	<div id=\"popUpDiv\" style=\"display:none;\">
    	
		<center>
		<br>

<img src=\"image/warning.png\" title=\"Login Required\"></img><br/>
Login Required to Make an Appointment...<br>
Please Login to Your Account!
<br><br>
					<a href=\"login2.php\">Click Here to Login</a>
<br><br>
<br/>
<a href=\"#\" onclick=\"popup('popUpDiv')\" >Close Window</a></center>

	</div>"
	; 
	else
		
		echo "<td width=\"93px\" onMouseOver=\"this.style.background='#B2F9B2'\" onMouseOut=\"this.style.background='#DEFFD1'\"><a href=\"confirm.php?Lecturer_ID=".$row3['Lecturer_ID']."&time=".$row2['time']."&day=".$dayList."&datex=".$dateList."\"><center><small>".date('h:i A', strtotime($row2['time']))."</small></center></a></td>"; }
		else
		{
		echo "<td width=\"93px\">&nbsp;</td>"; }		}		
		echo "</tr>"; }
		echo "</table></td></tr><tr><td colspan=\"6\"><hr width=\"100%\" size=\"2\" color=\"green\"></td></tr>";}
		
		echo "</table>
		
		</td></tr></table></center><br/></td></tr></table>";
		
	}

	else if($nw == 5)
	{
		echo "<table border=\"1\" bordercolor=\"green\" bgcolor=\"#DEFFD1\"><tr><td> 

		<table><tr><td width=\"134px\"> &nbsp</td><td colspan=\"5\" width=\"450\"><center><a href=\"?nw=4\">...PRE</a>&nbsp; &nbsp; &nbsp;NEXT... </center><center></td>";
		
		echo "</tr><tr><td width=\"134px\">&nbsp</td>";
		for ($i = 35; $i < 40; $i++) 
		{
		echo "<td width=\"90px\" bgcolor=\"#B2F9B2\"><center><font=\"arial\"><small><b>".date("l <\b\\r> d/m/Y", $ts + $i * 86400) . "</b></small></font></center></td>";
		}
		echo "</tr>";
		
		$query3="SELECT * FROM lecturer WHERE Lecturer_fname LIKE '%".$lname."%' OR Lecturer_lname LIKE '%".$lname."%'" ;
	  $resource3=mysql_query($query3,$link);
		while($row3 = mysql_fetch_array($resource3)){
		
		
echo "<tr><td width=\"134px\" valign=\"top\"><center><img width=\"80px\" height=\"100px\" src=\"http://".$row3[Lecturer_img]."\" title=\"".$row3[Lecturer_fname]."&nbsp;".$row3[Lecturer_lname]."\"</img><br>".$row3[Lecturer_fname]."&nbsp;".$row3[Lecturer_lname]."<br><small>".$row3[Lecturer_dep]."</small><br><a href=\"lecturer.php?Lecturer_ID=".$row3[Lecturer_ID]."\">view profile</a><br><a href=\"message.php?Lecturer_ID=".$row3[Lecturer_ID]."\">Message</a></center></td><td colspan=\"5\" width=\"465\">
				<table border=\"0\" width=\"465\"><tr bgcolor=\"#DEFFD1\">";

		$query2="SELECT * FROM avatime WHERE Lecturer_ID = '".$row3[Lecturer_ID]."' ORDER BY time ASC";
		  $resource2=mysql_query($query2,$link);
		while($row2 = mysql_fetch_array($resource2)){
		for ($i = 35; $i < 40; $i++) 
		{
		$dayList = date("l", $ts + $i * 86400);
		$dateList = date("d-m-Y", $ts + $i * 86400);
		$dayDB = $row2['day'];
		if ($dayList == $dayDB) 
		{		
if (!isset($_SESSION['myuser']))
			
  echo "
		
		
		<td width=\"93px\" onMouseOver=\"this.style.background='#B2F9B2'\" onMouseOut=\"this.style.background='#DEFFD1'\"><a href=\"#\" onclick=\"popup('popUpDiv')\"><center><small>".date('h:i A', strtotime($row2['time']))."</small></center></a></td>
		
		<div id=\"blanket\" style=\"display:none;\"></div>
	<div id=\"popUpDiv\" style=\"display:none;\">
    	
		<center>
		<br>

<img src=\"image/warning.png\" title=\"Login Required\"></img><br/>
Login Required to Make an Appointment...<br>
Please Login to Your Account!
<br><br>
					<a href=\"login2.php\">Click Here to Login</a>
<br><br>
<br/>
<a href=\"#\" onclick=\"popup('popUpDiv')\" >Close Window</a></center>

	</div>"
	; 
	else
		
		echo "<td width=\"93px\" onMouseOver=\"this.style.background='#B2F9B2'\" onMouseOut=\"this.style.background='#DEFFD1'\"><a href=\"confirm.php?Lecturer_ID=".$row3['Lecturer_ID']."&time=".$row2['time']."&day=".$dayList."&datex=".$dateList."\"><center><small>".date('h:i A', strtotime($row2['time']))."</small></center></a></td>"; }
		else
		{
		echo "<td width=\"93px\">&nbsp;</td>"; }		}		
		echo "</tr>"; }
		echo "</table></td></tr><tr><td colspan=\"6\"><hr width=\"100%\" size=\"2\" color=\"green\"></td></tr>";}
		
		echo "</table>
		
		</td></tr></table></center><br/></td></tr></table>";
		
	}
	
else 
	{
		echo "<table border=\"1\" bordercolor=\"green\" bgcolor=\"#DEFFD1\"><tr><td> 

		<table><tr><td width=\"134px\"> &nbsp</td><td colspan=\"5\" width=\"450\"><center>...PRE</a>&nbsp; &nbsp; &nbsp;<a href=\"?nw=1\">NEXT... </a></center><center></td>";
		
		echo "</tr><tr><td width=\"134px\">&nbsp</td>";
		for ($i = 0; $i < 5; $i++) 
		{
		echo "<td width=\"90px\" bgcolor=\"#B2F9B2\"><center><font=\"arial\"><small><b>".date("l <\b\\r> d/m/Y", $ts + $i * 86400) . "</b></small></font></center></td>";
		}
		echo "</tr>";
		
		$query3="SELECT * FROM lecturer WHERE Lecturer_fname LIKE '%".$lname."%' OR Lecturer_lname LIKE '%".$lname."%' AND Lecturer_dep LIKE '%".$ldep."%' AND Lecturer_kul LIKE '%".$lkul."%' ";
	  $resource3=mysql_query($query3,$link);
		while($row3 = mysql_fetch_array($resource3)){
		
		
echo "<tr><td width=\"134px\" valign=\"top\"><center><img width=\"80px\" height=\"100px\" src=\"http://".$row3[Lecturer_img]."\" title=\"".$row3[Lecturer_fname]."&nbsp;".$row3[Lecturer_lname]."\"</img><br>".$row3[Lecturer_fname]."&nbsp;".$row3[Lecturer_lname]."<br><small>".$row3[Lecturer_dep]."</small><br><a href=\"lecturer.php?Lecturer_ID=".$row3[Lecturer_ID]."\">view profile</a><br><a href=\"message.php?Lecturer_ID=".$row3[Lecturer_ID]."\">Message</a></center></td><td colspan=\"5\" width=\"465\">
				<table border=\"0\" width=\"465\"><tr bgcolor=\"#DEFFD1\">";

		$query2="SELECT * FROM avatime WHERE Lecturer_ID = '".$row3[Lecturer_ID]."' ORDER BY time ASC";
		  $resource2=mysql_query($query2,$link);
		while($row2 = mysql_fetch_array($resource2)){
		for ($i = 0; $i < 5; $i++) 
		{
		$dayList = date("l", $ts + $i * 86400);
		$dateList = date("d-m-Y", $ts + $i * 86400);
		$dayDB = $row2['day'];
		if ($dayList == $dayDB) 
		{		
if (!isset($_SESSION['myuser']))
			
  echo "
		
		
		<td width=\"93px\" onMouseOver=\"this.style.background='#B2F9B2'\" onMouseOut=\"this.style.background='#DEFFD1'\"><a href=\"#\" onclick=\"popup('popUpDiv')\"><center><small>".date('h:i A', strtotime($row2['time']))."</small></center></a></td>
		
		<div id=\"blanket\" style=\"display:none;\"></div>
	<div id=\"popUpDiv\" style=\"display:none;\">
    	
		<center>
		<br>

<img src=\"image/warning.png\" title=\"Login Required\"></img><br/>
Login Required to Make an Appointment...<br>
Please Login to Your Account!
<br><br>
					<a href=\"login2.php\">Click Here to Login</a>
<br><br>
<br/>
<a href=\"#\" onclick=\"popup('popUpDiv')\" >Close Window</a></center>

	</div>"
	; 
	else
		
	echo "<td width=\"93px\" onMouseOver=\"this.style.background='#B2F9B2'\" onMouseOut=\"this.style.background='#DEFFD1'\"><a href=\"confirm.php?Lecturer_ID=".$row3['Lecturer_ID']."&time=".$row2['time']."&day=".$dayList."&datex=".$dateList."\"><center><small>".date('h:i A', strtotime($row2['time']))."</small></center></a></td>"; 
	}
		else
		{
		echo "<td width=\"93px\">&nbsp;</td>"; }		}		
		echo "</tr>"; }
		echo "</table></td></tr><tr><td colspan=\"6\"><hr width=\"100%\" size=\"2\" color=\"green\"></td></tr>";}
		echo "</table>
		</td></tr></table></center><br/></td></tr></table>";
	}
include ("footer.php");
	?>