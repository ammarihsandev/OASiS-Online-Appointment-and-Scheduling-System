<?php
$title="Login Page";
include("header.php");
?>

<?php
session_start();
include('navi.php');
?>
<div role="main" class="ui-content jqm-content">
<p align="center"><strong>
	You need to login to set an appointment.... <br><br>Please Enter Your <br/>Username and Password<br/><table width="250" height="80" border="2" bordercolor="#A4A4A4">
				<tr><td>
					<center><form action="login_auth.php" method="post"><table width="100%" bgcolor="#E6E6E6" border="0">
					<tr><td>&nbsp;&nbsp;<small><b>USERNAME</b></small></td><td><input type="text" name="user" required></td></tr>
					<tr><td>&nbsp;&nbsp;<small><b>PASSWORD</b></small></td><td><input type="password" name="pass" required></td></tr>
					<tr><td colspan="2"><center><input type="image" src="https://www.iiumoasis.com/image/login.png" onmouseover="this.src='https://www.iiumoasis.com/image/login2.png';"
      onmouseout="this.src='https://www.iiumoasis.com/image/login.png';"width="250" height="40"></center></td></tr>
					</table></form></center>
        </td></tr></table><br/><br/>Please <a href="contact.php">Contact Us</a> If have have problem to login to the system.
<br/><br/></strong></p></div>

	
<?php
include("footer.php");
?>