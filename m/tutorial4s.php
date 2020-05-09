<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet"  href="//code.jquery.com/mobile/git/jquery.mobile-git.css">
	<script src="js/jquery-1.10.1.js"></script>
	<script src="js/jquery.mobile-git.js"></script>
	<script src="js/jquery.mobile.nestedlists.js"></script>
	<link rel="stylesheet" href="css/themes/default/jquery.mobile-1.4.5.min.css">
	<link rel="stylesheet" href="_assets/css/jqm-demos.css">
    <link rel="stylesheet" href="http://fonts.googleapis.com/css?family=Open+Sans:300,400,700">
	<script src="js/jquery.js"></script>
	<script src="_assets/js/index.js"></script>
	<script src="js/jquery.mobile-1.4.5.min.js"></script>
      <title>Tutorial For Student | IIUM OASiS</title>

	
</head>
<body>

<div data-role="page" class="jqm-demos jqm-home">
	<div data-role="header"  class="jqm-header">
	<h2><img src="image/oasis.png" alt="IIUM OASIS"></h2>
		<a href="#" class="jqm-navmenu-link ui-btn ui-btn-icon-notext ui-corner-all ui-icon-bars ui-nodisc-icon ui-alt-icon ui-btn-left">Menu</a>
		<?php
		include("cornerlink.php");
		?>

		<?php
include("navi.php");
?>
		<div data-role="content" id="content">
			<ul data-role="listview" data-child-pages="true">
				<li data-role="list-divider"><h1><center>Tutorial For Student</h1></center></li>
				<li>
					Login To the Website
					<ul>
						<li>1. Go to the IIUM OASiS website</li>
						<li>2. Enter your username (matric no)</li>
						<li>3. Enter your password</li>
						<li>4. Click "log in" button</li>
					</ul>
				</li>
				<li>
					<h1>View the schedule and the history</h1>
					<ul>
						<li>1. Log in to IIUM OASiS</li>
						<li>2. Click "my schedule" menu to view appointmnet schedule</li>
						<li>3. Click "my history" tab to view past schedule (history)</li>
					</ul>
				</li>
				<li>
					<h1>View and Update own profile</h1>
					<ul>
						<li>1. Click "my profile" menu to view the profile</li>
						<li>2. Click "edit profile" tab to update the profile</li>
						<li>3. Write your updated information.</li>
						<li>4. Click on the update button</li>
					</ul>
				</li>
				<li>
					<h1>View the Lecturer's information</h1>
					<ul>
						<li>1. Log in to IIUM OASiS</li>
						<li>2. Enter the Lecturer's Name</li>
						<li>3. Choose the Lecturer's Kuliyyah</li>
						<li>4. Choose the Lecturer's Department</li>
						<li>5. Click "View Available Time" button</li>
						<li>6. After moment, you will see the result page</li>
						<li>7. Click "View Lecturer's Information" button</li>
					</ul>
				</li>
				<li>
					<h1>Set an Appointment</h1>
					<ul>
						<li>1. Log in to IIUM OASiS</li>
						<li>2. Enter the Lecturer's Name</li>
						<li>3. Choose the Lecturer's Kuliyyah</li>
						<li>4. Choose the Lecturer's Department</li>
						<li>5. Click "View Available Time" button</li>
						<li>6. After moment, you will see the result page</li>
						<li>7. Pick your available time</li>
						<li>8. Review and confirm your appointment</li>
					</ul>
				</li>
				<li>
					<h1>Send Message to the Lecturer</h1>
					<ul>
						<li>1. Log in to IIUM OASiS</li>
						<li>2. Enter the Lecturer's Name</li>
						<li>3. Choose the Lecturer's Kuliyyah</li>
						<li>4. Choose the Lecturer's Department</li>
						<li>5. Click "View Available Time" button</li>
						<li>6. After moment, you will see the result page</li>
						<li>7. Click "View Lecturer's Information" menu</li>
						<li>8. Click "message" button</li>
						<li>9. Enter your message details</li>
						<li>10. Click on the "send" button</li>
					</ul>
				</li>
				<li>
					<h1>View and Reply Message</h1>
					<ul>
						<li>1. Log in to IIUM OASiS</li>
						<li>2. Click "my message" menu to view the message</li>
						<li>3. Choose the message, and click on the "reply" button</li>
						<li>4. Write your message and click "send" button</li>
					</ul>
				</li>
				<li>
					<h1>Cancel the appointment</h1>
					<ul>
						<li>1. Log in to the website</li>
						<li>2. Click on the View Schedule menu</li>
						<li>3. Choose the appointment schedule</li>
						<li>4. Click on the 'cancel' button</li>
						<li>5. Confirm cancelation</li>
					</ul>
				</li>
				<li>
					<h1>Log out from the website</h1>
					<ul>
						<li>1. Go to the top of the page</li>
						<li>2. Click on the "log out" button</li>
					</ul>
				</li>
			</ul>
			<br/><br/>
		</div><!-- /content -->
	<div data-role="footer" data-position="fixed" data-tap-toggle="false" class="jqm-footer">
		<p>IIUM OASiS Mobile</p>
		<p>International Islamic University Malaysia (IIUM) </p>
	</div>  
	
</div><!-- /page -->

</body>
</html>