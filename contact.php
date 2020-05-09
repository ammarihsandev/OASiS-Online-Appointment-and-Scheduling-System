<?php
include('menuheader.php');
?>
<link href="../css/contact.css" rel="stylesheet">	

<?php
$title="Contact Us";
$content="

<center>
<i>We welcome your questions, comments and suggestions. </i>
</br>
<table><tr><td>
<form method=\"post\" action=\"contact_exec.php\">
<div class=\"dynamiclabel\">
<input name=\"name\" id=\"name\" placeholder=\"Your Name\" type=\"text\">
<label for=\"name\">Enter Your Name</label>
</div>
<div class=\"dynamiclabel\"><input name=\"email\" id=\"email\" placeholder=\"Your Email Address\" type=\"text\">
<label for=\"email\">Enter Your Email Address</label>
</div>
<div class=\"dynamiclabel\"><input name=\"subject\" id=\"email\" placeholder=\"Your Message Subject\" type=\"text\">
<label for=\"subject\">Enter Your Message Subject</label>
</div>
<div class=\"dynamiclabel\">
    <textarea name=\"message\" id=\"message\" placeholder=\"Your Message\"></textarea>
    <label for=\"message\">Enter Your Message</label>
  </div>
<center><input id=\"bigbutton\" type=\"submit\" value=\"S U B M I T\" /></center>
  </form></td></tr></table>


		";

include ("tempelate.php");
	?>