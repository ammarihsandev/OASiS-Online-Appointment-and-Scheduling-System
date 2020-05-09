<html>

<head>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<title><?php echo $title." IIUM OASiS | "; ?></title>
	<meta name="description" content="IIUM OASiS is an Online Appointment and Scheduling System in IIUM. Developed as Final Year Project (FYP) for Kuliyyah of ICT, IIUM.">
	<meta name="keywords" content="IIUM OASIS, FYP, Final Year Project, website, KICT, IIUM, International Islamic University, Information System, Online appointment" >
	<meta name="author" content="Ammar Ihsan Nasution - 1118503">
	<link rel="icon" href="../image/sc.gif" type="image" >
	<link rel="shortcut icon" href="../image/sc.gif" type="image">
	<link rel="stylesheet" type="text/css" href="../css/style.css">

<script type="text/javascript" src="../js/popup.js"></script>
</head>
<body>
	<div id="container">
	<div id="header">
<center>	<table width="96%" border="0" ><tr><td><table width="100%" border="0" cellpadding="2" >
	<tr><td width="10%"><a href="../index.php"><img src="../image/logo.png"></img></a></td>
		<td width="56%">
			<h1 class="title">IIUM OASiS</h1>
			<div class="desc">IIUM Online Appointment and Scheduling System</div></td>
		<td width="34%">
			<?php
			echo $topmenu;
			
			?>  
		</td>
	</tr>
	</table></td></tr></table></center>
	</div>

<img src="../image/grey.png" width="800" height="10"></img>
<center><table width="93%" border="0"><tr><td><p align="left"><a class="brc" href="../index.php"><img src="../image/home.png" width="16" height="16"></img> HOME >> </a> <a class="brc" href="<?php
$domain = $_SERVER['HTTP_HOST'];
$path = $_SERVER['SCRIPT_NAME'];
$queryString = $_SERVER['QUERY_STRING'];
$url = "http://" . $domain . $_SERVER['REQUEST_URI'];
echo $url;
?>"> <?php
 echo $title; ?></a>
</p></td><td><p align="right"><a class="brc" href="#">Today is <?php date_default_timezone_set('Asia/Kuala_Lumpur'); echo date("l, d/m/Y");?></a></p></td></tr></table></center>

	
		<br/>
<center><table width="740" bgcolor="#F2F2F2" height="90" class="content" ><tr><td>
<center><table width="600">
		<tr><td>	<br/>			
<h2><center><u><?php echo $title; ?></u></center></h2>