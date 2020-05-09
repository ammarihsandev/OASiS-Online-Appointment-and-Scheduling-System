<?php
include("checkdevice.php");
include("connect.php");
?>
<script type="application/ld+json">
{
   "@context": "http://schema.org",
   "@type": "WebSite",
   "url": "https://www.iiumoasis.com/",
   "potentialAction": {
     "@type": "SearchAction",
     "target": "https://www.iiumoasis.com/search.php?query={search_term_string}",
     "query-input": "required name=search_term_string"
   }
}
</script>
<?php
session_start();
if (!isset($_SESSION['myuser']))
{
$topmenu= "<table width=\"100%\" border=\"2\" bordercolor=\"#A4A4A4\">
				<tr><td>
					<table width=\"100%\" bgcolor=\"#E6E6E6\" border=\"0\"><form action=\"login_auth.php\" method=\"post\">
					<tr><td> <small><b> USERNAME</b></small></td><td><input type=\"text\" name=\"myuser\" size=\"18\"></td></tr>
					<tr><td> <small><b> PASSWORD</b></small></td><td><input type=\"password\" name=\"mypass\" size=\"18\"></td></tr>
					<tr><td colspan=\"2\"><center><input type=\"image\" src=\"image/login.png\" onmouseover=\"this.src='image/login2.png';\"
      onmouseout=\"this.src='image/login.png';\"width=\"220\" height=\"30\"></center></td></tr>
					</form></table>
				</td></tr>
			</table>";  
}
else {
$myuser2 = $_SESSION['myuser'];
if (strlen($myuser2) == 7){
	echo "<script language=\"javascript\" type=\"text/javascript\">
window.location=\"student/index.php\";
</script>";}
else if (strlen($myuser2) == 4)
			{ 
		echo "<script language=\"javascript\" type=\"text/javascript\">
window.location=\"lecturer/index.php\";
</script>";
			}
	else	{
		echo "<script language=\"javascript\" type=\"text/javascript\">
window.location=\"admin/index.php\";
</script>";
			}
			}
?>
<?php

unset($_SESSION["search"]);


$query="SELECT * FROM website WHERE Site_ID='1'";
	$resource=mysql_query($query,$link) or die ("An unexpected error occured while <b>updating</b> the record, Please try again!");
	$result=mysql_fetch_array($resource);


$title="IIUM OASIS | IIUM Online Appointment Scheduling System";
date_default_timezone_set('Asia/Kuala_Lumpur');
$content="
<center><table border=\"0\" bgcolor=\"#D8D8D8\" width=\"800\">
	<tr><td width=\"15\"> </td><td><img src=\"".$result[banner]."\" alt=\"banner image\" title=\"Set Appointment, See Your Lecturer\" height=\"200\" width=\"500\"></img></td>
	<td>
	<form name=\"myform\" method=\"POST\" action=\"search.php\"><div align=\"center\">
	<br><input type=\"text\" placeholder=\"Enter Lecturer's Name\" value=\"\" name=\"query\" STYLE=\"width: 250px;height: 26px\" size=\"1\" ></input><br><br>

<select name=\"Student_kul\" style=\"size:1; width: 250px;\"  onchange=\"setOptions(document.myform.Student_kul.options[document.myform.Student_kul.selectedIndex].value);\">
<option name=\"Lecturer_kul\" value=\" \" selected=\"selected\">All Kulliyyahs</option>
<option name=\"Lecturer_kul\" value=\"Ahmad Ibrahim Kulliyah of Laws\">Ahmad Ibrahim Kulliyah of Laws</option>
<option name=\"Lecturer_kul\" value=\"Centre for Languages and Preuniversity Academic Development\">Centre for Languages and Preuniversity Academic Development</option>
<option name=\"Lecturer_kul\" value=\"Institute of Education\">Institute of Education</option>
<option name=\"Lecturer_kul\" value=\"Kulliyyah of Economics & Management Sciences\">Kulliyyah of Economics & Management Sciences</option>
<option name=\"Lecturer_kul\" value=\"Kulliyyah of Architecture and Enviromental Design\">Kulliyyah of Architecture and Enviromental Design</option>
<option name=\"Lecturer_kul\" value=\"Kulliyyah of Information and Communcation Technology\">Kulliyyah of Information and Communcation Technology</option>
<option name=\"Lecturer_kul\" value=\"Kulliyyah of Engineering\">Kulliyyah of Engineering</option>
<option name=\"Lecturer_kul\" value=\"Kulliyyah of Islamic Revealed Knowledge and Human Sciences\">Kulliyyah of Islamic Revealed Knowledge and Human Sciences</option>
<option name=\"Lecturer_kul\" value=\"Kulliyyah of Allied Health Sciences\">Kulliyyah of Allied Health Sciences</option>
<option name=\"Lecturer_kul\" value=\"Kulliyyah of Medicine\">Kulliyyah of Medicine</option>
<option name=\"Lecturer_kul\" value=\"Kulliyyah of Nursing\">Kulliyyah of Nursing</option>
<option name=\"Lecturer_kul\" value=\"Kulliyyah of Science\">Kulliyyah of Science</option>
<option name=\"Lecturer_kul\" value=\"Kulliyyah of Pharmacy\">Kulliyyah of Pharmacy</option>
<option name=\"Lecturer_kul\" value=\"Kulliyyah of Dentistry\">Kulliyyah of Dentistry</option>
<option name=\"Lecturer_kul\" value=\"Kulliyyah of Languages and Management\">Kulliyyah of Languages and Management</option>
</select><br> <br>
<select name=\"Lecturer_dep\" size=\"1\" style=\"size:1; width: 250px;\">
<option name=\"Lecturer_dep\"value=\" \" selected=\"selected\">All Departments</option>
</select>
<br><br><input type=\"submit\" class=\"btn\" name=\"go\" value=\"VIEW AVAILABLE TIME\">
</div></form></td><td width=\"15\"> </td></tr></table></center>

<img src=\"image/grey.png\" title=\"IIUM OASiS\" alt=\"line\" width=\"800\" height=\"5\"></img>

<br><br><br>

<center><table width=\"740\" bgcolor=\"#F2F2F2\" height=\"90\" class=\"content\" >
<tr><td><p align=\"right\"><a class=\"brc\" href=\"#\"><small>Today is ".date("l, d/m/Y")." </small></a></p><center><table width=\"600\"><tr><td colspan=\"5\"><center><i><b><h2>IIUM Online Appointment and Scheduling System</h2><h3>\"Set an Appointment with Your Lecturer in 3 Steps!\"</h3><br><b></i></center></td></tr><tr>
<td width=\"33%\"><center><b>-(1)-<br></center></td>
<td ><center><b><p></p><br></center></td>
<td width=\"33%\"><center><b>-(2)-<br></center></td>
<td ><center><b><p></p><br></center></td>
<td width=\"33%\"><center><b>-(3)- </center></td></tr>
<tr><td width=\"33%\"><center><img src=\"image/select.png\" alt=\"Select The Lecturer\"  title=\"Select The Lecturer\" ></img></center></td>
<td><center><img title=\"Next\" src=\"image/arrowr (5).png\" alt=\"First Arrow\"></img></center></td>
<td width=\"33%\"><center><img  alt=\"Pick Available Time\"  title=\"Pick Available Time\" src=\"image/pick.png\"></img></center></td>
<td><center><img alt=\"Second Arrow\" src=\"image/arrowr (5).png\" title=\"Next\" ></img></center></td>
<td width=\"33%\"><center><img src=\"image/meet.png\" alt=\"Meet Your Lecturer\" title=\"Meet Your Lecturer\" ></img></center></td></tr>
<tr>
<td width=\"33%\"><center><small><b>Select Your Lecturer!</center></td>
<td ><center><b> <br></center></td>
<td width=\"33%\"><center><small><b>Pick the Available Time!<br></center></td>
<td ><center><b> <br></center></td>
<td width=\"33%\"><center><small><b>Meet Your Lecturer!<br></center></td>
<tr><td> </td></tr>
</table><p></p></center></td></tr>
</table></center>

";
include ("tempelate2.php");
	?>