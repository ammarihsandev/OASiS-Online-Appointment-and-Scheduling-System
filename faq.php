
<?php
include('menuheader.php');
?>

<script type="text/javascript">
	function showStuff(id) {
		document.getElementById(id).style.display = 'block';
	}
function hideStuff(id) {
		document.getElementById(id).style.display = 'none';
	}
</script>

<?php
$title="Frequently Ask Questions (FAQs)";
$content= "
	
	<h3 class=\"faq\" onclick=\"showStuff('answer1'); return false;\"><img src=\"image/check.png\" width=\"22\">&nbsp;</img>What is IIUM OASIS?</h3>
<span id=\"answer1\" style=\"display: none;\"><p style=\"background-color:#E9E9E9;padding:10px;\"  onclick=\"hideStuff('answer1'); \"><small>IIUM OASiS is an online appointment maker platform in IIUM University. OASiS stands for Online Appointment and Scheduling System. It developed as an online system for creating and managing the appointment for the Lecturer and the Student in IIUM. Student can set an appointment with their lecturers for consultation. While the Lecturer can provide thair available time to the students.</small></p></span>

<h3 class=\"faq\" onclick=\"showStuff('answer2'); return false;\"><img src=\"image/check.png\" width=\"22\">&nbsp;</img>How do I log into IIUM OASiS?</h3>
<span id=\"answer2\" style=\"display: none;\"><p style=\"background-color:#E9E9E9;padding:10px;\"  onclick=\"hideStuff('answer2'); \"><small>Go to IIUM OASiS website. In the top of the portal, you may log in using your username (matric number for the student or staff id for the lecturer) and your password.</small></p></span>

<h3 class=\"faq\" onclick=\"showStuff('answer3'); return false;\"><img src=\"image/check.png\" width=\"22\">&nbsp;</img>I cannot log in to IIUM OASiS. What should I do?
</h3>
<span id=\"answer3\" style=\"display: none;\"><p style=\"background-color:#E9E9E9;padding:10px;\"  onclick=\"hideStuff('answer3'); \"><small>If you cannot login, make sure of the following:<br/>
If you are a new staff/lecturer, please request for an IIUM e-mail address.<br/>
If you are a new student, make sure you have changed your temporary pin no given to you by AMAD/CPS when you first came to IIUM. Log into the MyIIUM portal and update your profile. Than, activate your account at the MyIIUM portal.
If you still cannot login, send e-mail to erecsson20@yahoo.com</small></p></span>

<h3 class=\"faq\" onclick=\"showStuff('answer4'); return false;\"><img src=\"image/check.png\" width=\"22\">&nbsp;</img>Can I edit my profile in IIUM OASiS?</h3>
<span id=\"answer4\" style=\"display: none;\"><p style=\"background-color:#E9E9E9;padding:10px;\"  onclick=\"hideStuff('answer4'); \"><small>Yes, all users can update and modify their personal informations including their email address, phone number, and their address. All users can also upload and change their profiles pictures on IIUM OASiS.</small></p></span>

<h3 class=\"faq\" onclick=\"showStuff('answer5'); return false;\"><img src=\"image/check.png\" width=\"22\">&nbsp;</img>I don't see the available time for the current lecturer. What should I do?</h3>

<span id=\"answer5\" style=\"display: none;\"><p style=\"background-color:#E9E9E9;padding:10px;\"  onclick=\"hideStuff('answer5'); \"><small>If this is happen to you, there are two possiblities. Either the lecturer did not update their available time or the available time has booked by others students.
You may ask and request for other time for consultation to the lecturer by sending the message to the lecturer on IIUM OASiS.</small></p></span>

<h3 class=\"faq\" onclick=\"showStuff('answer6'); return false;\"><img src=\"image/check.png\" width=\"22\">&nbsp;</img>Suddenly, I can't come at consultation hour. What should I do?</h3>
<span id=\"answer6\" style=\"display: none;\"><p style=\"background-color:#E9E9E9;padding:10px;\"  onclick=\"hideStuff('answer6'); \"><small>For unavoidable circumtances, yoou can cancle the appointment. Go to your schedule details. Select the appointment and click on the cancel button.</small></p></span>

<h3 class=\"faq\" onclick=\"showStuff('answer7'); return false;\"><img src=\"image/check.png\" width=\"22\">&nbsp;</img>Will I receive notification via e-mail for a new appointment?</h3>
<span id=\"answer7\" style=\"display: none;\"><p style=\"background-color:#E9E9E9;padding:10px;\"  onclick=\"hideStuff('answer7'); \"><small>Yes, E-mail notification about the appointment details will be sent to all students and the lecturer automatically when the new appointment setted.</small></p></span>

<h3 class=\"faq\" onclick=\"showStuff('answer8'); return false;\"><img src=\"image/check.png\" width=\"22\">&nbsp;</img>How I can learn on how to use IIUM OASiS?</h3>
<span id=\"answer8\" style=\"display: none;\"><p style=\"background-color:#E9E9E9;padding:10px;\"  onclick=\"hideStuff('answer8'); \"><small>To learn more on how to use IIUM OASiS, please refer to the manual and video tutorials available for the lecturers and the students. You will see the link in the bottom of this page. If you have any questions, please submit your questions in contact us page.</small></p></span>
<small><br/>
If you have more questions, please contact ammar.ihsan@live.iium.edu.my for further assistance</small>

";

include ("tempelate.php");
	?>