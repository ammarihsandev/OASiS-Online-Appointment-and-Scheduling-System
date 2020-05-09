<?php
session_start();
include('auth.php');
?>

<script type="text/javascript" src="../js/kulliyyahs.js"></script>

<?php
$title="Student Panel";
unset($_SESSION["search"]);
$content="
<br><br/><center><table border=\"0\"width=\"700\">
	<tr><td>&nbsp;</td><td>
	<center><h1> </h1></center>
	Welcome ".$_SESSION['myuser']." in Student Panel. <br>
	In this page, you can manage your appointment activities.
	<br>You can search and check the lecturer's time availability <br/>using the search box besides. <br/>
	<br/><br/>
	<br/>
	<u>Your Status:</u><br/>
	<i>You have 0 unread messages<br/>
	You have 0 appointments<br/></i><br/>
	<td width=\"260\" bgcolor=\"#D8D8D8\" >
	<form name=\"myform\" method=\"POST\" action=\"../search.php\"><div align=\"center\">
	<br/><input type=\"text\" placeholder=\"Enter Lecturer's Name\" name=\"query\" value=\"\" STYLE=\"width: 225px;height: 25px\" size=\"1\" ></input><br/><br/>
<select name=\"Student_kul\" style=\"size:1; width: 225px;\"  onchange=\"setOptions(document.myform.Student_kul.options[document.myform.Student_kul.selectedIndex].value);\">
<option name=\"Student_kul\" value=\" \" selected=\"selected\">All Kulliyyahs</option>
<option name=\"Student_kul\" value=\"Ahmad Ibrahim Kulliyah of Laws\">Ahmad Ibrahim Kulliyah of Laws</option>
<option name=\"Student_kul\" value=\"Centre for Languages and Preuniversity Academic Development\">Centre for Languages and Preuniversity Academic Development</option>
<option name=\"Student_kul\" value=\"Institute of Education\">Institute of Education</option>
<option name=\"Student_kul\" value=\"Kulliyyah of Economics & Management Sciences\">Kulliyyah of Economics & Management Sciences</option>
<option name=\"Student_kul\" value=\"Kulliyyah of Architecture and Enviromental Design\">Kulliyyah of Architecture and Enviromental Design</option>
<option name=\"Student_kul\" value=\"Kulliyyah of Information and Communcation Technology\">Kulliyyah of Information and Communcation Technology</option>
<option name=\"Student_kul\" value=\"Kulliyyah of Engineering\">Kulliyyah of Engineering</option>
<option name=\"Student_kul\" value=\"Kulliyyah of Islamic Revealed Knowledge and Human Sciences\">Kulliyyah of Islamic Revealed Knowledge and Human Sciences</option>
<option name=\"Student_kul\" value=\"Kulliyyah of Allied Health Sciences\">Kulliyyah of Allied Health Sciences</option>
<option name=\"Student_kul\" value=\"Kulliyyah of Medicine\">Kulliyyah of Medicine</option>
<option name=\"Student_kul\" value=\"Kulliyyah of Nursing\">Kulliyyah of Nursing</option>
<option name=\"Student_kul\" value=\"Kulliyyah of Science\">Kulliyyah of Science</option>
<option name=\"Student_kul\" value=\"Kulliyyah of Pharmacy\">Kulliyyah of Pharmacy</option>
<option name=\"Student_kul\" value=\"Kulliyyah of Dentistry\">Kulliyyah of Dentistry</option>
<option name=\"Student_kul\" value=\"Kulliyyah of Languages and Management\">Kulliyyah of Languages and Management</option>
</select><br> <br>
<select name=\"Student_dep\" size=\"1\" style=\"size:1; width: 225px;\">
<option name=\"Student_dep\"value=\" \" selected=\"selected\">All Departments</option>
</select>
<br/><br/><input type=\"submit\" class=\"btn\" name=\"go\" value=\"VIEW AVAILABLE TIME\">
</div></form></td><td width=\"15\">&nbsp;</td></tr></table></center>



";
include ("../tempelate.php");
	?>