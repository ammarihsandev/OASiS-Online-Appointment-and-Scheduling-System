<?php
session_start();
include('connect.php');
if (!isset($_SESSION['myuser']))
{
$topmenu= "<table width=\"100%\" border=\"2\" bordercolor=\"#A4A4A4\">
				<tr><td>
					<table width=\"100%\" bgcolor=\"#E6E6E6\" border=\"0\"><form action=\"login_auth.php\" method=\"post\">
					<tr><td>&nbsp;&nbsp;<small><b>USERNAME</b></small></td><td><input type=\"text\" name=\"myuser\" size=\"18\" required></td></tr>
					<tr><td>&nbsp;&nbsp;<small><b>PASSWORD</b></small></td><td><input type=\"password\" name=\"mypass\" size=\"18\" required></td></tr>
					<tr><td colspan=\"2\"><center><input type=\"image\" src=\"image/login.png\" onmouseover=\"this.src='image/login2.png';\"
      onmouseout=\"this.src='image/login.png';\"width=\"220\" height=\"30\"></center></td></tr>
					</form></table>
				</td></tr>
			</table>";  
}
else {
$myuser2 = $_SESSION['myuser'];
if (strlen($myuser2) == 7){
$queryx="SELECT * FROM student WHERE Student_ID='".$_SESSION['myuser']."'";
	$resourcex=mysql_query($queryx,$link) or die ("An unexpected error occured while <b>updating</b> the record, Please try again!");
	$resultx=mysql_fetch_array($resourcex);
	
	$topmenu= "<table width=\"80%\" border=\"0\" >
				<tr><td>		
					<table width=\"100%\"  bgcolor=\"#ededed\" border=\"0\"  cellspacing=\"0\" cellpadding=\"0\">
					<tr><td colspan=\"2\"><center><b>WELCOME ".$resultx[2]."</b></center></td></tr>
					<tr><td><center><a href=\"http://".$_SERVER['HTTP_HOST']."/student/profile.php\" class=\"menuinside\">My Profile</a></center></td>
					<td><center><a href=\"http://".$_SERVER['HTTP_HOST']."/student/schedule.php\" class=\"menuinside\">My Schedule</a></center></td></tr>
					<tr><td><center><a href=\"http://".$_SERVER['HTTP_HOST']."/student/message.php\" class=\"menuinside\">My Message</a></center></td>
					<td><center><a href=\"http://".$_SERVER['HTTP_HOST']."/logout.php\" class=\"menuinside\"><font color=\"#8A0829\">LOGOUT</font></a></center></td></tr>
					</table>
				</td></tr>
			</table>";}
else if (strlen($myuser2) == 4)
			{
$queryx="SELECT * FROM lecturer WHERE Lecturer_ID='".$_SESSION['myuser']."'";
	$resourcex=mysql_query($queryx,$link) or die ("An unexpected error occured while <b>updating</b> the record, Please try again!");
	$resultx=mysql_fetch_array($resourcex);
	
			$topmenu= "<table width=\"100%\"  bgcolor=\"#ededed\"  border=\"0\"  cellspacing=\"0\" cellpadding=\"0\">
				<tr><td>		
					<table width=\"100%\" border=\"0\">
					<tr><td colspan=\"2\"><center><b>WELCOME ".$resultx[2]."</b></center></td></tr>
					<tr><td><center><a href=\"http://".$_SERVER['HTTP_HOST']."/lecturer/profile.php\" class=\"menuinside\">My Profile</a></center></td>
					<td><center><a href=\"http://".$_SERVER['HTTP_HOST']."/lecturer/schedule.php\" class=\"menuinside\">My Schedule</a></center></td></tr>
					<tr><td><center><a href=\"http://".$_SERVER['HTTP_HOST']."/lecturer/message.php\" class=\"menuinside\">My Message</a></center></td>
					<td><center><a href=\"http://".$_SERVER['HTTP_HOST']."/logout.php\" class=\"menuinside\"><font color=\"#8A0829\">LOGOUT</font></a></center></td></tr>
					</table>
				</td></tr>
			</table>";
			}
	else	{
	$queryx="SELECT * FROM admin WHERE Admin_Username='".$_SESSION['myuser']."'";
	$resourcex=mysql_query($queryx,$link) or die ("An unexpected error occured while <b>updating</b> the record, Please try again!");
	$resultx=mysql_fetch_array($resourcex);
		$topmenu= "<table width=\"100%\" border=\"0\" >
				<tr><td>		
					<table width=\"100%\" bgcolor=\"#ededed\"  border=\"0\"  cellspacing=\"0\" cellpadding=\"0\">
					<tr><td colspan=\"2\"><center><b>WELCOME ".$resultx[2]."</b></center></td></tr>
					<tr><td><center><a href=\"http://".$_SERVER['HTTP_HOST']."/admin/lecturer.php\" class=\"menuinside\">Lecturer</a></center></td>
					<td><center><a href=\"http://".$_SERVER['HTTP_HOST']."/admin/student.php\" class=\"menuinside\">Student</a></center></td></tr>
					<tr><td><center><a href=\"http://".$_SERVER['HTTP_HOST']."/admin/message.php\" class=\"menuinside\">Message</a></center></td>
					<td><center><a href=\"http://".$_SERVER['HTTP_HOST']."/logout.php\" class=\"menuinside\"><font color=\"#8A0829\">LOGOUT</font></a></center></td></tr>
					</table>
				</td></tr>
			</table>";
			}
			
			
			
			}
?>