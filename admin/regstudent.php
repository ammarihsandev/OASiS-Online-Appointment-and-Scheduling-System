<script type="text/javascript" src="../js/kulliyyahs.js"></script>
<?php
include('auth.php');
?>

<?php
$title="Register New Student";
$content="<center><table width=\"350\" style=\"border-width: 2px; border-style: dotted; border-color: green; border-radius: 25px; background-color: #EFFBEF;\" ><tr><td><br/>
	
<center><i>Please Enter Student's Information</i><table> <form id=\"form1\" name=\"myform\" method=\"post\" action=\"regstudent_exec.php\">
 <tr><td>  	        <input type=\"text\" name=\"Student_ID\" style=\"border-width:4px;font-weight:bold; width: 220px;height: 24px;\" placeholder=\"Matric No\" required></td></tr>
<tr><td>			<input type=\"text\" name=\"Student_fname\" style=\"border-width:4px;font-weight:bold; width: 220px;height: 24px;\" placeholder=\"First Name\" required> </td></tr>
<tr><td>	    	<input type=\"text\" name=\"Student_lname\" style=\"border-width:4px;font-weight:bold; width: 220px;height: 24px;\" placeholder=\"Second Name\" required> </td></tr>
<tr><td>	  <select name=\"Student_kul\" style=\"border-width:4px; width: 220px;\"  onchange=\"setOptions(document.myform.Student_kul.options[document.myform.Student_kul.selectedIndex].value);\">
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
</select></td></tr>
<tr><td>
<select name=\"Student_dep\" size=\"1\" style=\"border-width:4px; width: 220px;\">
<option  name=\"Student_dep\"value=\" \" selected=\"selected\">All Departments</option>
</select></td></tr>
	<tr><td>    	<input type=\"text\" name=\"Student_email\" style=\"border-width:4px;font-weight:bold; width: 220px;height: 24px\" placeholder=\"Email address\" ></td></tr>
	<tr><td>    	<input type=\"text\" name=\"Student_phone\" style=\"border-width:4px;font-weight:bold; width: 220px;height: 24px\" placeholder=\"Phone Number\" ></td></tr>
	
	<tr><td><center><input type=\"submit\" class=\"btn\" value=\"Register The Student\"></center>
      </form>	  
</center>
</td></tr>
 </table></center></form><br/>
</td></tr></table></center></td></tr></table></center>
		";

include ("../tempelate.php");
	?>