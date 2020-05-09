<?php
$title = "Contact US";
include("header.php");
?>

<?php
session_start();
include('navi.php');
?>
  
<link href="css/contact.css" rel="stylesheet">
<div role="main" class="ui-content jqm-content">
<p align="center"><strong><i>We welcome your questions, comments and suggestions. </i>

<table><tr><td>
<form method="post" action="contact_exec.php">
<div class="dynamiclabel">
<input name="name" id="name" placeholder="Your Name" type="text">
<label for="name">Enter Your Name</label>
</div>
<div class="dynamiclabel"><input name="email" id="email" placeholder="Your Email Address" type="text">
<label for="email">Enter Your Email Address</label>
</div>
<div class="dynamiclabel"><input name="subject" id="email" placeholder="Your Message Subject" type="text">
<label for="subject">Enter Your Message Subject</label>
</div>
<div class="dynamiclabel">
    <textarea name="message" id="message" placeholder="Your Message"></textarea>
    <label for="message">Enter Your Message</label>
  </div>
<center><input id="bigbutton" type="submit" value="S U B M I T" /></center>
  </form></td></tr></table>
<br/><br/></strong></p>	</div>

<?php
include("footer.php");
?>