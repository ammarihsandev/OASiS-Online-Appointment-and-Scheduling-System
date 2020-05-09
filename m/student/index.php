<?php

session_start();
$title = "Student Panel";
include("../header.php");
?>

<?php
include("../navi.php");
?>

<script type="text/javascript" src="https://www.iiumoasis.com/js/kulliyyahl.js"></script>


<div role="main" class="ui-content jqm-content">
<p>



<center><table border="0" bgcolor="#F9F9F9">
<tr><td><center><strong>
	Welcome "<?php echo $_SESSION['myuser'];?>" in Student Panel. <br>
	In this page, you can manage your appointment activities.
	<br>You can search and check the lecturer's time availability using the search box below. <br>
	<br>
	<br>
	<u>Your Status:</u><br>
	<i>You have 0 unread messages<br>
	You have 0 appointments<br><br></i></td></tr>
	<tr><td width=\"100%\" bgcolor=\"#D8D8D8\" >
<img src="../image/grey.png" alt="Line" width="100%" height="5"></strong></center></td></tr>
<tr><td><form name="myform" method="POST" action="../search.php"><div align="center">
	<br><input type="text" placeholder="Enter Lecturer's Name" name=\"lname\" value="" STYLE="width: 90%px;height: 10px" size="1" ></input>
<select name="Student_kul" style="size:1; width: 90%px;"  onchange="setOptions(document.myform.Student_kul.options[document.myform.Student_kul.selectedIndex].value);">
<option name="Lecturer_kul" value=" " selected="selected">All Kulliyyahs</option>
<option name="Lecturer_kul" value="Ahmad Ibrahim Kulliyah of Laws">Ahmad Ibrahim Kulliyah of Laws</option>
<option name="Lecturer_kul" value="Centre for Languages and Preuniversity Academic Development">Centre for Languages and Preuniversity Academic Development</option>
<option name="Lecturer_kul" value="Institute of Education">Institute of Education</option>
<option name="Lecturer_kul" value="Kulliyyah of Economics & Management Sciences">Kulliyyah of Economics & Management Sciences</option>
<option name="Lecturer_kul" value="Kulliyyah of Architecture and Enviromental Design">Kulliyyah of Architecture and Enviromental Design</option>
<option name="Lecturer_kul" value="Kulliyyah of Information and Communcation Technology">Kulliyyah of Information and Communcation Technology</option>
<option name="Lecturer_kul" value="Kulliyyah of Engineering">Kulliyyah of Engineering</option>
<option name="Lecturer_kul" value="Kulliyyah of Islamic Revealed Knowledge and Human Sciences">Kulliyyah of Islamic Revealed Knowledge and Human Sciences</option>
<option name="Lecturer_kul" value="Kulliyyah of Allied Health Sciences">Kulliyyah of Allied Health Sciences</option>
<option name="Lecturer_kul" value="Kulliyyah of Medicine">Kulliyyah of Medicine</option>
<option name="Lecturer_kul" value="Kulliyyah of Nursing">Kulliyyah of Nursing</option>
<option name="Lecturer_kul" value="Kulliyyah of Science">Kulliyyah of Science</option>
<option name="Lecturer_kul" value="Kulliyyah of Pharmacy">Kulliyyah of Pharmacy</option>
<option name="Lecturer_kul" value="Kulliyyah of Dentistry">Kulliyyah of Dentistry</option>
<option name="Lecturer_kul" value="Kulliyyah of Languages and Management">Kulliyyah of Languages and Management</option>
</select>
<select name="Lecturer_dep" size="1" style="size:1; width: 90%px;">
<option name="Lecturer_dep"value=" " selected="selected">All Departments</option>
</select><hr color="#F9F9F9">
<input type="submit" class="btn" name="go" value="VIEW AVAILABLE TIME" onclick="alert(document.myform.opttwo.options[document.myform.opttwo.selectedIndex].value);">
</div></form></td></tr></table></center>
<br/>
	
	</p>
</div>

<?php
include("../footer.php");
?>