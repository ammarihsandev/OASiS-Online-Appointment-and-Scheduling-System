<html>
<head>

	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>IIUM OASiS Mobile | Online Appointment and Scheduling System</title>
	<meta name="description" content="IIUM OASiS is an online appointment maker platform in IIUM Univeristy. OASiS stands for Online Appointment and Scheduling System. This website developed as the Final Year Project for Kulliyyah of Information and Communication Technology IIUM.">
	<meta name="keywords" content="IIUM OASIS, FYP, Final Year Project, website, KICT, IIUM, International Islamic University, Information System, Online appointment">
	<meta name="author" content="Ammar Ihsan Nasution - 1118503">
	<link rel="icon" href="https://www.iiumoasis.com/image/sc.gif" type="image">
	<link rel="shortcut icon" href="https://www.iiumoasis.com/image/sc.gif" type="image">
	
	<link rel="stylesheet" href="css/themes/default/jquery.mobile-1.4.5.min.css">
	<link rel="stylesheet" href="_assets/css/jqm-demos.css">
    <link rel="stylesheet" href="http://fonts.googleapis.com/css?family=Open+Sans:300,400,700">
	<script  type="text/javascript" src="js/jquery.js"></script>
	<script  type="text/javascript" src="_assets/js/index.js"></script>
	<script  type="text/javascript" src="js/jquery.mobile-1.4.5.min.js"></script>
        
	</head>
<body>
<div data-role="page" class="jqm-demos jqm-home">
	<div data-role="header"  class="jqm-header">
<center><h2><img src="image/oasis.png" alt="LOGO"></h2></center>
		<a href="#" class="jqm-navmenu-link ui-btn ui-btn-icon-notext ui-corner-all ui-icon-bars ui-nodisc-icon ui-alt-icon ui-btn-left">Menu</a>
	
<?php
include("cornerlink.php");
?>	
<?php
include("navi.php");
unset($_SESSION["search"]);
echo $_SESSION["search"];
?>

<script type="text/javascript" src="https://www.iiumoasis.com/js/kulliyyahl.js"></script>


<p align="center"><strong><table border="0" bgcolor="#F9F9F9">
<tr><td><center><strong><h2>IIUM Online Appointment and Scheduling System
<img src="https://iiumoasis.com/image/grey.png" alt="Line" width="100%" height="5"></h2></strong></center></td></tr>
<tr><td><center><img width="100%" src="image/banner.png"  alt="Banner"></center></td></tr>
<tr><td><form name="myform" method="POST" action="search.php"><div align="center">
	<br><input type="text" placeholder="Enter Lecturer's Name" name=\"query\" value="" STYLE="width: 90%px;height: 10px" size="1" ></input>
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
<input type="submit" class="btn" name="go" value="VIEW AVAILABLE TIME">
</div></form></td></tr></table>
<br/></strong></p>

	
<div data-role="footer" data-position="fixed" data-tap-toggle="false" class="jqm-footer">
		<p>IIUM OASiS Mobile Version</p>
		<p>International Islamic University Malaysia (IIUM) </p>
	</div>  
	
</div><!-- /page -->

</body>
</html>