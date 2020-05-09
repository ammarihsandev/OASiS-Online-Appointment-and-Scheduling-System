<?php
session_start();

if (!isset($_SESSION['myuser']))
{
echo "<div data-role=\"panel\" class=\"jqm-navmenu-panel\" data-position=\"left\" data-display=\"overlay\" data-theme=\"a\"><ul class=\"jqm-list ui-alt-icon ui-nodisc-icon\">
<li data-icon=\"home\"><a href=\"index.php\">Home</a></li>
<li><a href=\"about.php\" data-ajax=\"false\">About OASiS</a></li>
<li><a href=\"oasisfeature.php\" data-ajax=\"false\">OASiS Features</a></li>
<li><a href=\"oasisnews.php\" data-ajax=\"false\">OASiS News/Info</a></li>
<li><a href=\"tutorial4l.php\" data-ajax=\"false\">Tutorial For Lecturer</a></li>
<li><a href=\"tutorial4s.php\" data-ajax=\"false\">Tutorial For Student</a></li>
<li><a href=\"faq.php\" data-ajax=\"false\">Frequently Ask Questions</a></li>
<li><a href=\"contact.php\" data-ajax=\"false\">Contact Us</a></li>
		     </ul>
		</div> ";
}
else 

$myuser2 = $_SESSION['myuser'];
if (strlen($myuser2) == 4)
{
echo "<div data-role=\"panel\" class=\"jqm-navmenu-panel\" data-position=\"left\" data-display=\"overlay\" data-theme=\"a\"><ul class=\"jqm-list ui-alt-icon ui-nodisc-icon\">
<li data-icon=\"home\"><a href=\"https://m.iiumoasis.com/lecturer/index.php\">Home</a></li>
<li><a href=\"https://m.iiumoasis.com/lecturer/profile.php\" data-ajax=\"false\">My Profile</a></li>
<li><a href=\"https://m.iiumoasis.com/lecturer/message.php\" data-ajax=\"false\">My Message</a></li>
<li><a href=\"https://m.iiumoasis.com/lecturer/schedule.php\" data-ajax=\"false\">My Schedule</a></li>
<li><a href=\"https://m.iiumoasis.com/about.php\" data-ajax=\"false\">About OASiS</a></li>
<li><a href=\"https://m.iiumoasis.com/oasisfeature.php\" data-ajax=\"false\">OASiS Features</a></li>
<li><a href=\"https://m.iiumoasis.com/oasisnews.php\" data-ajax=\"false\">OASiS News/Info</a></li>
<li><a href=\"https://m.iiumoasis.com/tutorial4l.php\" data-ajax=\"false\">Tutorial For Lecturer</a></li>
<li><a href=\"https://m.iiumoasis.com/faq.php\" data-ajax=\"false\">Frequently Ask Questions</a></li>
<li><a href=\"https://m.iiumoasis.com/contact.php\" data-ajax=\"false\">Contact Us</a></li>
		     </ul>
		</div> ";
}

else if (strlen($myuser2) == 7)
{
echo "<div data-role=\"panel\" class=\"jqm-navmenu-panel\" data-position=\"left\" data-display=\"overlay\" data-theme=\"a\"><ul class=\"jqm-list ui-alt-icon ui-nodisc-icon\">
<li data-icon=\"home\"><a href=\"https://m.iiumoasis.com/student/index.php\">Home</a></li>
<li><a href=\"https://m.iiumoasis.com/student/profile.php\" data-ajax=\"false\">My Profile</a></li>
<li><a href=\"https://m.iiumoasis.com/student/message.php\" data-ajax=\"false\">My Message</a></li>
<li><a href=\"https://m.iiumoasis.com/student/schedule.php\" data-ajax=\"false\">My Schedule</a></li>
<li><a href=\"https://m.iiumoasis.com/about.php\" data-ajax=\"false\">About OASiS</a></li>
<li><a href=\"https://m.iiumoasis.com/oasisfeature.php\" data-ajax=\"false\">OASiS Features</a></li>
<li><a href=\"https://m.iiumoasis.com/oasisnews.php\" data-ajax=\"false\">OASiS News/Info</a></li>
<li><a href=\"https://m.iiumoasis.com/tutorial4s.php\" data-ajax=\"false\">Tutorial For Student</a></li>
<li><a href=\"https://m.iiumoasis.com/faq.php\" data-ajax=\"false\">Frequently Ask Questions</a></li>
<li><a href=\"https://m.iiumoasis.com/contact.php\" data-ajax=\"false\">Contact Us</a></li>
		     </ul>
		</div> ";
}
?>