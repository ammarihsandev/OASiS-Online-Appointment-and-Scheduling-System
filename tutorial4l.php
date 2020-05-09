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

$title="Tutorial For Lecturer";
$content= "

	<h3 class=\"faq\" onclick=\"showStuff('answer1'); return false;\"><img src=\"image/check.png\" width=\"22\">&nbsp;</img>Login To the Website</h3>
<span id=\"answer1\" style=\"display: none;\"><p style=\"background-color:#E9E9E9;padding:10px;\"  onclick=\"hideStuff('answer1'); \"><small>- Go to the page <br/>
- Enter your username (matric number)<br/>
- Enter your password<br/>
- Click \"log in\" button</small></p></span>

<h3 class=\"faq\" onclick=\"showStuff('answer2'); return false;\"><img src=\"image/check.png\" width=\"22\">&nbsp;</img>View the schedule and the history</h3>
<span id=\"answer2\" style=\"display: none;\"><p style=\"background-color:#E9E9E9;padding:10px;\"  onclick=\"hideStuff('answer2'); \"><small>- Log in to IIUM OASiS<br/>
- Click on the \"my schedule\" menu to view appointmnet schedule<br/>
- Click on the \"my history\" tab to view past schedule (history)<br/>
</small></p></span>

<h3 class=\"faq\" onclick=\"showStuff('answer3'); return false;\"><img src=\"image/check.png\" width=\"22\">&nbsp;</img>View the schedule and the history
</h3>
<span id=\"answer3\" style=\"display: none;\"><p style=\"background-color:#E9E9E9;padding:10px;\"  onclick=\"hideStuff('answer3'); \"><small>- Log in to IIUM OASiS<br/>
- Click on the \"my schedule\" menu<br/>
- Choose the student's name<br/>
- Click on the \"detail\" button to get the information of the student
</small></p></span>

<h3 class=\"faq\" onclick=\"showStuff('answer4'); return false;\"><img src=\"image/check.png\" width=\"22\">&nbsp;</img>View and Update own profile</h3>
<span id=\"answer4\" style=\"display: none;\"><p style=\"background-color:#E9E9E9;padding:10px;\"  onclick=\"hideStuff('answer4'); \"><small>- Log in to IIUM OASiS<br/>
- Click on the \"my profile\" menu to view the profile<br/>
- Click on the \"edit profile\" tab to update the profile<br/>
- Write the information that you want to update<br/>
- Click on the update button
</small></p></span>

<h3 class=\"faq\" onclick=\"showStuff('answer5'); return false;\"><img src=\"image/check.png\" width=\"22\">&nbsp;</img>Change profile picture</h3>

<span id=\"answer5\" style=\"display: none;\"><p style=\"background-color:#E9E9E9;padding:10px;\"  onclick=\"hideStuff('answer5'); \"><small>- Log in to IIUM OASiS<br/>
- Click on the \"my profile\" menu<br/>
- Click on the \"edit profile\" tab<br/>
- Go to my picture and click the upload button<br/>
- Choose the picture from your computer<br/>
- Click on the update button<br/>
</small></p></span>

<h3 class=\"faq\" onclick=\"showStuff('answer6'); return false;\"><img src=\"image/check.png\" width=\"22\">&nbsp;</img>Set and Update available time</h3>
<span id=\"answer6\" style=\"display: none;\"><p style=\"background-color:#E9E9E9;padding:10px;\"  onclick=\"hideStuff('answer6'); \"><small>- Log in to IIUM OASiS<br/>
- Click on the \"my profile\" menu<br/>
- Click on the \"edit profile\" tab<br/>
- Go to \"available time\" menu<br/>
- Choose your available time<br/>
- Click on the update button<br/>
</small></p></span>

<h3 class=\"faq\" onclick=\"showStuff('answer7'); return false;\"><img src=\"image/check.png\" width=\"22\">&nbsp;</img>View and Reply the message</h3>
<span id=\"answer7\" style=\"display: none;\"><p style=\"background-color:#E9E9E9;padding:10px;\"  onclick=\"hideStuff('answer7'); \"><small>- Log in to IIUM OASiS<br/>
- Click on the \"my message\" menu to view the message<br/>
- Choose the message, and click on the \"reply\" button<br/>
- Write your message and click \"send\" button
</small></p></span>

<h3 class=\"faq\" onclick=\"showStuff('answer8'); return false;\"><img src=\"image/check.png\" width=\"22\">&nbsp;</img>Cancel the appointment</h3>
<span id=\"answer8\" style=\"display: none;\"><p style=\"background-color:#E9E9E9;padding:10px;\"  onclick=\"hideStuff('answer8'); \"><small>- Log in to the website<br/>
- Click on the \"View Schedule\" menu<br/>
- Choose the appointment schedule<br/>
- Click on the \"cancel\" button<br/>
- Confirm cancelation</small></p></span>

<h3 class=\"faq\" onclick=\"showStuff('answer9'); return false;\"><img src=\"image/check.png\" width=\"22\">&nbsp;</img>Log out from the website</h3>
<span id=\"answer9\" style=\"display: none;\"><p style=\"background-color:#E9E9E9;padding:10px;\"  onclick=\"hideStuff('answer9'); \"><small>- Go to the top of the page<br/>
- Click on the \"log out\" button
</small></p></span>



<small><br/>
&nbsp;If you have more questions, please contact ammar.ihsan@live.iium.edu.my for further assistance</small>

";

include ("tempelate.php");
	?>