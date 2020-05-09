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


	 $Lecturer_fname=$_REQUEST['Lecturer_fname'];
	 $Lecturer_lname=$_REQUEST['Lecturer_lname']; 
	 $Lecturer_email=$_REQUEST['Lecturer_email'];

	 $Lecturer_office=$_REQUEST['Lecturer_office'];
	 $image=$_REQUEST['image'];
	 $Lecturer_phone=$_REQUEST['Lecturer_phone']; 
	 $LecturerImg=$_REQUEST['proimage'];
	 
	 
	 if(!file_exists($_FILES['image']['tmp_name']) || !is_uploaded_file($_FILES['image']['tmp_name'])) {
    
	$location=$LecturerImg;
	
}
else
{
	 
	$file=$_FILES['image']['tmp_name'];
	$image= addslashes(file_get_contents($_FILES['image']['tmp_name']));
	$image_name= addslashes($_FILES['image']['name']);
			
			move_uploaded_file($_FILES["image"]["tmp_name"],"../photos/lecturer/" . $_FILES["image"]["name"]);
			$location="iiumoasis.com/photos/lecturer/" . $_FILES["image"]["name"];
			
			
	}
			
			
	 $query="UPDATE lecturer SET Lecturer_fname ='".$Lecturer_fname."', Lecturer_lname='".$Lecturer_lname."', Lecturer_email='".$Lecturer_email."', Lecturer_img='".$location."', Lecturer_phone='".$Lecturer_phone."', Lecturer_office='".$Lecturer_office."' WHERE Lecturer_ID='".$_SESSION['myuser']."'";
	
	
		
		  if(!mysql_query($query,$link))
		  {die (
		  
		  $content="
<br/><center><h3>An unexpected error occured while saving the record, Please try again!</h3></center>");}
		  else
		 {
		 echo "<center><table width=\"350\" style=\"border-width: 2px; border-style: dotted; border-color: green; border-radius: 25px; background-color: #EFFBEF;\" >
<tr><td><br/><center>
Your Information updated successfully!<br/> 
 inserted to the system!<br/>Please <a href=\"profile.php\">
<b>Click Here</b></a> to view your profile.<br/>&nbsp;</center></td></tr></table></center>";}

		  
		
	 ?>

</p>
</div>
	
<?php
include("../footer.php");
?>


