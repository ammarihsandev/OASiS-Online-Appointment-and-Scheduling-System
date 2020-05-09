<style>
input{
    display: block;
}
</style>
<script>
var currentindex = 0;
function addInput(){
    var lastinput = document.getElementById('input'+currentindex);
    if(lastinput.value != ''){
        var container = document.getElementById('inputcontainer');
        var newinput = document.createElement('input');
        currentindex++;
        newinput.type = "text";
        newinput.name = 'input'+currentindex;
        newinput.id = 'input'+currentindex;
        newinput.onkeyup = addInput;
        container.appendChild(newinput);
    }
}
</script>
<script type="text/javascript" src="../js/kulliyyahl.js"></script>
<?php
include('auth.php');
?>

<?php
$title="Register New Lecturer";
$content="<center><table width=\"350\" style=\"border-width: 2px; border-style: dotted; border-color: green; border-radius: 25px; background-color: #EFFBEF;\" ><tr><td><br/>
	
<center><i>Please Enter Lecturer's Information</i><table> <form id=\"form1\" name=\"myform\" method=\"post\" action=\"reglecturer_exec.php\">
 <tr><td>  	        <input type=\"text\" name=\"Lecturer_ID\" style=\"border-width:4px;font-weight:bold; width: 220px;height: 24px;\" placeholder=\"Staff ID\" required></td></tr>
<tr><td>			<input type=\"text\" name=\"Lecturer_fname\" style=\"border-width:4px;font-weight:bold; width: 220px;height: 24px;\" placeholder=\"First Name\" required> </td></tr>
<tr><td>	    	<input type=\"text\" name=\"Lecturer_lname\" style=\"border-width:4px;font-weight:bold; width: 220px;height: 24px;\" placeholder=\"Second Name\" required> </td></tr>
<tr><td>	  <select name=\"Lecturer_kul\" style=\"border-width:4px; width: 220px;\"  onchange=\"setOptions(document.myform.Lecturer_kul.options[document.myform.Lecturer_kul.selectedIndex].value);\">
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
</select></td></tr>
<tr><td>
<select name=\"Lecturer_dep\" size=\"1\" style=\"border-width:4px; width: 220px;\">
<option name=\"Lecturer_dep\"value=\" \" selected=\"selected\">All Departments</option>
</select></td></tr>
	<tr><td>    	<input type=\"text\" name=\"Lecturer_office\" style=\"border-width:4px;font-weight:bold; width: 220px;height: 24px\" placeholder=\"Office Location\" ></td></tr>
	<tr><td>    	<input type=\"text\" name=\"Lecturer_email\" style=\"border-width:4px;font-weight:bold; width: 220px;height: 24px\" placeholder=\"Email address\" ></td></tr>
	<tr><td>    	<input type=\"text\" name=\"Lecturer_phone\" style=\"border-width:4px;font-weight:bold; width: 220px;height: 24px\" placeholder=\"Phone Number\" ></td></tr>
	
	<tr><td><center><input type=\"submit\" class=\"btn\" name=\"go\" value=\"Register The Lecturer\"></center>
      </form>	  
</center>
</td></tr>
 </table></center></form><br/>
</td></tr></table></center></td></tr></table></center>
		";

include ("../tempelate.php");
	?>