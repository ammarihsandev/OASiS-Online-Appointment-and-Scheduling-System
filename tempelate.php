<?php
include("checkdevice.php");
?><html>

<?php
include("connect.php");
$query="SELECT * FROM website WHERE Site_ID='1'";
	$resource=mysql_query($query,$link) or die ("An unexpected error occured while <b>updating</b> the record, Please try again!");
	$result=mysql_fetch_array($resource);
?>

<head>
	<title><?php echo $title." | IIUM OASiS |"; ?></title>
	<meta name="description" content="IIUM OASiS is an Online Appointment and Scheduling System in IIUM. Developed as Final Year Project (FYP) for Kuliyyah of ICT, IIUM." >
	<meta name="keywords" content="IIUM OASIS, FYP, Final Year Project, website, KICT, IIUM, International Islamic University, Information System, Online appointment" >
	<meta name="author" content="Ammar Ihsan Nasution - 1118503" />
	<link rel="icon" href="../image/sc.gif" type="image" >
	<link rel="shortcut icon" href="../image/sc.gif" type="image" >

<script type="text/javascript" src="../css/css-pop.js"></script>
	<link rel="stylesheet" type="text/css" href="../css/style.css">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" >

</head>
<body>
	<div id="container">
	<div id="header">
<center>	<table width="96%" border="0" ><tr><td><table width="100%" border="0" cellpadding="2" >
	<tr><td width="10%"><a href="../index.php"><img src="<?php echo $result[logo_desktop]; ?>"></img></a></td>
		<td width="56%">
			<h1 class="title"><?php echo $result[title]; ?></h1>
			<div class="desc"><?php echo $result[title_desc]; ?></div></td>
		<td width="34%">
			<?php
			echo $topmenu;
			
			?>  
		</td>
	</tr>
	</table></td></tr></table></center>
	</div>

<img src="../image/grey.png" alt="line" title="line" width="800" height="10"></img>
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
		<?php echo $content; ?>
		</br></br></br>
        </td></tr></table></center>
	</td></tr></table></center>
		
		</br><br/>

<img src="../image/grey.png" alt="line" title="line" width="800" height="3"></img>
		<div class="clear"></div>

	<div id="footmenu">	<center><table width="100%" border="0" bordercolor="#CDCECD">
	<tr><td width="20%"><div id="footmenutext">IIUM OASiS</div>
		<td width="20%"><div id="footmenutext">BLOG</div>
		<td width="20%"><div id="footmenutext">TUTORIAL</div>
		<td width="20%"><div id="footmenutext">RESOURCES</div>
		<td width="20%"><div id="footmenutext">FOLLOW US</div>
	</tr>
	<tr>
	<td><center>
	<a href="../contact.php"  class="bmenu">CONTACT US</a><br/><a href="../exhibition.php" class="bmenu">EXHIBITION</a><br/><a href="../m/index.php"  class="bmenu">MOBILE</a>
	</center></td>
	<td><center>
	<a href="../about.php"  class="bmenu">ABOUT OASIS</a><br/><a href="../oasisnews.php"  class="bmenu">INFO / NEWS</a><br/><a href="../oasisfeature.php"  class="bmenu">OUR FEATURES</a>
	</center></td>
	<td><center>
	<a href="../tutorial4l.php"  class="bmenu">LECTURER</a><br><a href="../tutorial4s.php" class="bmenu">STUDENT</a><br/><a href="../faq.php"  class="bmenu">FAQs</a>
	</center></td>
	<td><center>
	<a href="http://iium.edu.my" target="_blank"  class="bmenu">IIUM</a><br/><a href="http://my.iium.edu.my" target="_blank" class="bmenu">My IIUM</a><br/><a href="http://italeem.iium.edu.my" target="_blank" class="bmenu">ITaleem</a>
	</center></td>
	<td><center>
	<a href="http://www.facebook.com/Official.IIUM" target="_blank" class="bmenu">Facebook</a><br/><a href="http://www.twitter.com/OfficialIIUM" target="_blank" class="bmenu">Twitter</a><br/><a href="https://www.youtube.com/user/IIUMOfficial/user" target="_blank" class="bmenu">Youtube</a>
	</center></td>
	</tr>
	</table></center></div>

	   <div class="clear"></div>
        <div id="footer"><?php echo $result[footer]; ?></div>
</body>
</html>