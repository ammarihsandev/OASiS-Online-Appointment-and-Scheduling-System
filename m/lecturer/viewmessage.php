	 <?php

$title="My Conversation";
include("../header.php");
include("../connect.php");
?>
<?php
session_start();
include('../navi.php');
?>
<div role="main" class="ui-content jqm-content">
<p>

<?php
$Lecturer_ID = $_SESSION['myuser'];
$Message_ID=$_REQUEST['Message_ID'];
$Student_ID=$_REQUEST['Student_ID'];


$query5="UPDATE message SET Note = 'read' WHERE Note ='unread' AND Student_ID = '".$Student_ID."' AND Lecturer_ID = '".$Lecturer_ID."' AND Sender = 'student'";
$resource2=mysql_query($query5,$link);

	$query="SELECT * FROM message WHERE Lecturer_ID = '".$Lecturer_ID."' ORDER BY Message_ID ASC ";
	  $resource=mysql_query($query,$link);
	  $username_array = array();
	
	while($row = mysql_fetch_array($resource)){	
	$Student_ID = $row['Student_ID'];
$query3="SELECT * FROM lecturer WHERE Lecturer_ID = '".$Lecturer_ID."' ";
		  $resource3=mysql_query($query3,$link);
		while($row3 = mysql_fetch_array($resource3)){
  $lecturername = $row3['Lecturer_fname']."&nbsp;".$row3['Lecturer_lname'];
			$query2="SELECT * FROM student WHERE Student_ID = '".$row['Student_ID']."' ";
		  $resource2=mysql_query($query2,$link);
		  while($row2 = mysql_fetch_array($resource2)){
	$studentname = $row2['Student_fname']."&nbsp;".$row2['Student_lname'];

$Student_email = $row2['Student_email'];
	if ($row['Note'] == "read")
	{
	$status = "&nbsp; &nbsp; &nbsp; <img src=\"http://fyp.masmai.com/image/checkorg.png\" title=\"Read\" width=\"12\" height=\"12\" border=\"0\" ></img>";
	}
	else if ($row['Note'] == "unread")
	{
	$status = "&nbsp; &nbsp; &nbsp; <img src=\"http://fyp.masmai.com/image/checkunread.png\" title=\"Unread\" width=\"12\" height=\"12\" border=\"0\" ></img>";
	}
	else if ($row['Note'] == "replied")
	{
	$status = "&nbsp;";
	}
 
$name = $row2['Student_fname']."&nbsp;".$row2['Student_lname']; 
$dateo = substr($row['Message_time'], 0, 10); 
if ($row['Sender'] == "lecturer")
	{
	$image = "<img src=\"http://".$row3['Lecturer_img']."\" title=\"".$row3['Lecturer_fname']."\" width=\"73\" height=\"90\" border=\"0\" ></img>";
	$sendername = $row3['Lecturer_fname']."&nbsp;".$row3['Lecturer_lname'];
	}
	else if ($row['Sender'] == "student")
	{
	$image = "<img src=\"http://".$row2['Student_img']."\" title=\"".$row2['Student_fname']."\" width=\"73\" height=\"90\" border=\"0\" ></img>";
	$sendername = $row2['Student_fname']."&nbsp;".$row2['Student_lname'];
	}

 $username_array[] = "<tr><td width=\"110\" height=\"120\"><center>".$image."</center></td><td><i><small>".$row['Message_time']."</small></i><br/><b>".$sendername."&nbsp;: </b><br/>".$row['Message_content']."&nbsp;&nbsp;&nbsp;".$status."</td></tr><tr><td colspan=\"2\"><hr/></td></tr>"; 
	}
	}
	}
$username_string = implode("", $username_array); 	
$content="
<center><br/><table width=\"98%\" style=\"background-color: #EFFBEF; border: 1px solid green;\"><tr><td><td><td></td></tr><tr>
	<td><center><table width=\"97.5%\" style=\"background-color: #E1F9E1; border:1px dotted #6DDF6D\">".$username_string." 	 		
	<tr><td colspan=\"2\"><center>
	<table width=\"96%\" border=\"0\">
	<tr><td width=\"94%\"> <form action=\"sendmessage.php\" method=\"POST\">
		<input name=\"lecturername\" value=\"".$lecturername."\" type=\"hidden\">
		<input name=\"studentname\" value=\"".$studentname."\" type=\"hidden\">
		<input name=\"Message_ID\" value=\"".$Message_ID."\" type=\"hidden\">
		<input name=\"Lecturer_ID\" value=\"".$Lecturer_ID."\" type=\"hidden\">
		<input name=\"Student_email\" value=\"".$Student_email."\" type=\"hidden\">
		<input name=\"Student_ID\" type=\"hidden\" value=\"".$Student_ID."\">
	</td><td></td></tr><tr><td><textarea cols=\"58\" rows=\"3\" name=\"Message_content\" placeholder=\"Write a message...\" required=\"required\"></textarea></td><td width=\"85\"><input type=\"image\" src=\"http://fyp.masmai.com/image/send.png\" width=\"85\" height=\"47\"></img></td></tr></table></center></td></tr><tr><td colspan=\"2\"><hr bgcolor=\"#E1F9E1\"/></td></tr></table><br/></center></td></tr>
	</table>";



	?>

<?php
echo $content;

?>
</p>
</div>
	
<?php
include("../footer.php");
?>
	 