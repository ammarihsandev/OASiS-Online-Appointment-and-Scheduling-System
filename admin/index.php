<?php
include('auth.php');
include('../connect.php');
?>


<style type="text/css">
a:link {color: #000000; text-decoration: none}
a:visited {color: #006600; text-decoration: none}
a:hover {color: #FFCC00; text-decoration: none}
a:active {color: #FF00CC; text-decoration: none}
</style>

<?php
$title="Administrator Panel";

$query="SELECT * FROM appointment";
	$resource=mysql_query($query,$link) or die ("An unexpected error occured while <b>counting</b> the record, Please try again!");
	$result=mysql_fetch_array($resource);

$date = date('Y-m-d');
$oneDayAgo = strtotime ( '-1 day' , strtotime ( $date ) ) ; 
$oneWeekAgo = strtotime ( '-1 week' , strtotime ( $date ) ) ; 
$oneMonthAgo = strtotime ( '-1 month' , strtotime ( $date ) ) ; 
$oneYearAgo = strtotime ( '-12 month' , strtotime ( $date ) ) ; 

$query5="SELECT COUNT(*) FROM appointment WHERE App_date > '".date ('Y-m-d',$oneDayAgo )."' AND App_date < '".$date."'";
	$resource5=mysql_query($query5,$link) or die ("An unexpected error occured while <b>counting</b> the record, Please try again!");
	$result5=mysql_fetch_array($resource5);
$query6="SELECT COUNT(*) FROM appointment WHERE App_date > '".date ('Y-m-d',$oneWeekAgo )."' AND App_date < '".$date."'";
	$resource6=mysql_query($query6,$link) or die ("An unexpected error occured while <b>counting</b> the record, Please try again!");
	$result6=mysql_fetch_array($resource6);
$query7="SELECT COUNT(*) FROM appointment WHERE App_date > '".date ('Y-m-d',$oneMonthAgo )."' AND App_date < '".$date."'";
	$resource7=mysql_query($query7,$link) or die ("An unexpected error occured while <b>counting</b> the record, Please try again!");
	$result7=mysql_fetch_array($resource7);
$query8="SELECT COUNT(*) FROM appointment WHERE App_date > '".date ('Y-m-d',$oneYearAgo )."' AND App_date < '".$date."'";
	$resource8=mysql_query($query8,$link) or die ("An unexpected error occured while <b>counting</b> the record, Please try again!");
	$result8=mysql_fetch_array($resource8);


$query1="SELECT COUNT(*) FROM lecturer";
	$resource1=mysql_query($query1,$link) or die ("An unexpected error occured while <b>counting</b> the record, Please try again!");
	$result1=mysql_fetch_array($resource1);

$query2="SELECT COUNT(*) FROM student";
	$resource2=mysql_query($query2,$link) or die ("An unexpected error occured while <b>counting</b> the record, Please try again!");
	$result2=mysql_fetch_array($resource2);

$query3="SELECT COUNT(*) FROM appointment";
	$resource3=mysql_query($query3,$link) or die ("An unexpected error occured while <b>counting</b> the record, Please try again!");
	$result3=mysql_fetch_array($resource3);

$query4="SELECT COUNT(*) FROM message";
	$resource4=mysql_query($query4,$link) or die ("An unexpected error occured while <b>counting</b> the record, Please try again!");
	$result4=mysql_fetch_array($resource4);



$content="
<br><br/><center><table border=\"0\"width=\"650\">
	<tr><td>&nbsp;</td><td>
	<center><h1> </h1></center>
	Welcome ".$myuser." in Administrator Panel. <br>
	In this page, you can manage IIUM OASiS Website.
	<br><br>
	<br>
	<u>Your Status:</u><br>
	<i>You have 0 unread messages<br>
<br><hr>
<center><b>Database Records</b><table width=\"380\" border=\"1\" bordercolor=\"#D8D8D8\">
<tr><td>Total Lecturer</td><td><center> ".$result1[0]." records</center></td></tr>
<tr><td>Total Student</td><td><center> ".$result2[0]." records</center></td></tr>
<tr><td>Total Appointment</td><td><center>".$result3[0]."  records</center></td></tr>
<tr><td>Total Message</td><td><center> ".$result4[0]." records</center></td></tr></table></center>
<br>
<center><b>Total Appointment Records</b><table width=\"380\" border=\"1\" bordercolor=\"#D8D8D8\">
<tr><td>Today</td><td><center> ".$result5[0]." record</center></td></tr>
<tr><td>This Week</td><td><center> ".$result6[0]." record</center></td></tr>
<tr><td>This month</td><td><center>".$result7[0]."  records</center></td></tr>
<tr><td>This Year</td><td><center> ".$result8[0]." records</center></td></tr></table></center>
	<td width=\"30\">
	</td><td width=\"190\" bgcolor=\"#E6E6E6\"><center>

<table width=\"90%\" border=\"1\" bordercolor=\"#BDBDBD\"><tr><td colspan=\"2\"><center><b>** WEBSITE SETTING **</b></center></td></tr>
<tr><td><center><a target=\"popup\" onclick=\"window.open('editor2.php?mid=1','name','width=350,height=200')\">Website Name</a></center></td><tr/>
<tr><td><center><a target=\"popup\" onclick=\"window.open('editor2.php?mid=2','name','width=350,height=200')\">Website Title</a></center></td><tr/>
<tr><td><center><a target=\"popup\" onclick=\"window.open('editor2.php?mid=3','name','width=350,height=200')\">Description</a></center></td><tr/>
<tr><td><center><a target=\"popup\" onclick=\"window.open('editor2.php?mid=4','name','width=350,height=200')\">Logo (Desktop)</a></center></td><tr/>
<tr><td><center><a target=\"popup\" onclick=\"window.open('editor2.php?mid=5','name','width=350,height=200')\">Logo (Mobile)</a></center></td><tr/>
<tr><td><center><a target=\"popup\" onclick=\"window.open('editor2.php?mid=6','name','width=350,height=200')\">Web Banner</a></center></td><tr/>
<tr><td><center><a target=\"popup\" onclick=\"window.open('editor2.php?mid=7','name','width=350,height=200')\">Web Footer</a></center></td><tr/>
</table>

<br>
<table width=\"90%\" border=\"1\" bordercolor=\"#BDBDBD\"><tr><td colspan=\"2\"><center><b>** PAGES SETTING **</b></center></td></tr><tr><td>
<center><a href=\"editor.php?mid=1\"><img src=\"https://www.iiumoasis.com/image/1about.png\"></img><br>About Us</a></center></td>
<td><center><a href=\"editor.php?mid=2\"><img src=\"https://www.iiumoasis.com/image/1news.png\"></img><br>News/Info</a></center></td><tr/>
<tr><td><center><a href=\"editor.php?mid=3\"><img src=\"https://www.iiumoasis.com/image/1apps.png\"></img><br>Features</a></center></td>
<td><center><a href=\"editor.php?mid=4\"><img src=\"https://www.iiumoasis.com/image/1exhibition.png\"></img><br>Exhibition</a></center></td></tr></table>

</td></tr></table></center>



";
include ("../tempelate.php");
	?>