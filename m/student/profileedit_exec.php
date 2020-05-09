	 <?php
$title = "Update Profile Information";
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


	 $Student_fname=$_REQUEST['Student_fname'];
	 $Student_lname=$_REQUEST['Student_lname']; 
	 $Student_email=$_REQUEST['Student_email'];
	 $image=$_REQUEST['image'];
	 $Student_phone=$_REQUEST['Student_phone']; 
	 $StudentImg=$_REQUEST['proimage'];
	 
	 
	 if(!file_exists($_FILES['image']['tmp_name']) || !is_uploaded_file($_FILES['image']['tmp_name'])) {
    
	$location=$StudentImg;
	
}
else
{
	 
	$file=$_FILES['image']['tmp_name'];
	$image= addslashes(file_get_contents($_FILES['image']['tmp_name']));
	$image_name= addslashes($_FILES['image']['name']);
			
			move_uploaded_file($_FILES["image"]["tmp_name"],"../photos/student/" . $_FILES["image"]["name"]);
			$location="iiumoasis.com/photos/student/" . $_FILES["image"]["name"];
			
			
	}
			
			
	 $query="UPDATE student SET Student_fname ='".$Student_fname."', Student_lname='".$Student_lname."', Student_email='".$Student_email."', Student_img='".$location."', Student_phone='".$Student_phone."' WHERE Student_ID='".$_SESSION['myuser']."'";
	
	
		
		  if(!mysql_query($query,$link))
		  {die (
		  
		  $content="
<br/><center><h3>An unexpected error occured while saving the record, Please try again!</h3></center>");}
		  else
		 {
		 echo "<center><table width=\"350\" style=\"border-width: 2px; border-style: dotted; border-color: green; border-radius: 25px; background-color: #EFFBEF;\" >
<tr><td><br/><center>
Your Information updated successfully! <br/> <a href=\"profile.php\">Click Here</a> to view your profile.<br/>&nbsp;</center></td></tr></table></center>
";}

		  
	?>
</p>
</div>
	
<?php
include("../footer.php");
?>