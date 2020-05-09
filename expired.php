<?php
$title="Log in";
$topmenu="";
$content="
<center>		<font color=\"red\">Your Session Expired Due To Inactivity. <br/>Please Log In Again To Continue...</font><br/><br/><table width=\"300\" height=\"100\" border=\"2\" bordercolor=\"#A4A4A4\">
				<tr><td>
					<center><table width=\"100%\" bgcolor=\"#E6E6E6\" border=\"0\"><form action=\"login_auth.php\" method=\"post\">
					<tr><td>&nbsp;&nbsp;<small><b>USERNAME</b></small></td><td><input type=\"text\" name=\"myuser\" size=\"18\" required></td></tr>
					<tr><td>&nbsp;&nbsp;<small><b>PASSWORD</b></small></td><td><input type=\"password\" name=\"mypass\" size=\"18\" required></td></tr>
					<tr><td colspan=\"2\"><center><input type=\"image\" src=\"image/login.png\" onmouseover=\"this.src='image/login2.png';\"
      onmouseout=\"this.src='image/login.png';\"width=\"220\" height=\"30\"></center></td></tr>
					</form></table></center>
        </td></tr></table></center>
			</td></tr></table></center>

		";

include ("tempelate.php");
	?>