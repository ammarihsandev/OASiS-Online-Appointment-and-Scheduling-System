<script type="text/javascript" src="../js/kulliyyahs.js"></script>
<?php
include('auth.php');
?>

<?php
$title="Update Student's Information";
$Student_ID=$_REQUEST['Student_ID']; 
$query="SELECT * FROM student WHERE Student_ID='".$Student_ID."'";
	$resource=mysql_query($query,$link) or die ("An unexpected error occured while <b>deleting</b> the record, Please try again!");
	$result=mysql_fetch_array($resource);

$content="<center><table width=\"350\" style=\"border-width: 2px; border-style: dotted; border-color: green; border-radius: 25px; background-color: #EFFBEF;\" ><tr><td><br/>
	
<center>
<i>Please Update Student's Information</i><table width=\"320\"> <form id=\"form1\" name=\"myform\" method=\"post\" action=\"modifystudent_exec.php\">
<tr><td>Matric Number</td><td><b>".$result[0]."</b></td></tr>	
<input type=\"hidden\" name=\"Student_ID\" value=\"".$result[0]."\">
<tr><td>First Name</td><td>			<input type=\"text\" name=\"Student_fname\" style=\"border-width:4px;font-weight:bold; width: 190px;height: 24px;\" value=\"".$result[2]."\" required> </td></tr>
<tr><td>Second Name</td><td>	    	<input type=\"text\" name=\"Student_lname\" style=\"border-width:4px;font-weight:bold; width: 190px;height: 24px;\" value=\"".$result[3]."\" required> </td></tr>
<tr><td>Kulliyyah</td><td>	  <select name=\"Student_kul\" style=\"border-width:4px; width: 190px;\"  onchange=\"setOptions(document.myform.Student_kul.options[document.myform.Student_kul.selectedIndex].value);\">
<option name=\"Student_kul\" value=\"".$result[6]."\" selected=\"selected\">".$result[6]."</option>
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
<tr><td>Department</td><td>
<select name=\"Student_dep\" size=\"1\" style=\"border-width:4px; width: 190px;\">
<option  name=\"Student_dep\"value=\"".$result[7]."\" selected=\"selected\">".$result[7]."</option>
</select></td></tr>
	<tr><td>Phone Number</td><td>    	<input type=\"text\" name=\"Student_phone\" style=\"border-width:4px;font-weight:bold; width: 190px;height: 24px\" value=\"0".$result[4]."\"></td></tr>
	<tr><td>Email Address</td><td>    	<input type=\"text\" name=\"Student_email\" style=\"border-width:4px;font-weight:bold; width: 190px;height: 24px\" value=\"".$result[5]."\" ></td></tr>
	
	<tr><td colspan=\"2\"><center><input type=\"submit\" class=\"btn\" value=\"Update The Information\"></center>
      </form>	 
</center>
</td></tr>
 </table></center></form><br/>
</td></tr></table></center></td></tr></table></center>
		";

include ("../tempelate.php");
	?>