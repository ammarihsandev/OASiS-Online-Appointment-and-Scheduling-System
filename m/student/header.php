<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title><?php echo $title; ?> | IIUM OASiS </title>
	<meta name="description" content="IIUM OASiS is an Online Appointment and Scheduling System in IIUM. Developed as Final Year Project (FYP) for Kuliyyah of ICT, IIUM." >
	<meta name="keywords" content="IIUM OASIS, FYP, Final Year Project, website, KICT, IIUM, International Islamic University, Information System, Online appointment" >
	<meta name="author" content="Ammar Ihsan Nasution - 1118503">
	<link rel="icon" href="/image/sc.gif" type="image">
	<link rel="shortcut icon" href="/image/sc.gif" type="image">
	<link rel="stylesheet" href="/m/css/themes/default/jquery.mobile-1.4.5.min.css">
	<link rel="stylesheet" href="/m/_assets/css/jqm-demos.css">
    <link rel="stylesheet" href="http://fonts.googleapis.com/css?family=Open+Sans:300,400,700">
	<script src="/m/js/jquery.js"></script>
	<script src="/m/_assets/js/index.js"></script>
	<script src="/m/js/jquery.mobile-1.4.5.min.js"></script>
	</head>
<body>
<div data-role="page" class="jqm-demos jqm-home">
	<div data-role="header"  class="jqm-header">
<h2><img src="/m/image/oasis.png" alt="IIUM OASIS"></h2><p><strong><?php echo $title; ?></strong></p>
		<a href="#" class="jqm-navmenu-link ui-btn ui-btn-icon-notext ui-corner-all ui-icon-bars ui-nodisc-icon ui-alt-icon ui-btn-left">Menu</a>


<?php
session_start();
if (!isset($_SESSION['myuser']))
{
echo "<a href=\"#popupLogin\" data-rel=\"popup\" data-position-to=\"window\" class=\"jqm-search-link ui-btn ui-btn-icon-notext ui-corner-all ui-icon-user ui-nodisc-icon ui-alt-icon ui-btn-right\" data-transition=\"pop\">Sign in</a> 
</div>
<div data-role=\"popup\" id=\"popupLogin\" data-theme=\"a\" class=\"ui-corner-all\">
    <form method=\"post\" action=\"login_auth.php\">
        <div style=\"padding:10px 20px;\">
            <h3>Please Log In</h3>
            <label for=\"un\" class=\"ui-hidden-accessible\">Username:</label>
            <input type=\"text\" name=\"user\" id=\"un\" value=\"\" placeholder=\"username\" data-theme=\"a\">
            <label for=\"pw\" class=\"ui-hidden-accessible\">Password:</label>
            <input type=\"password\" name=\"pass\" id=\"pw\" value=\"\" placeholder=\"password\" data-theme=\"a\">
            <button type=\"submit\" class=\"ui-btn ui-corner-all ui-shadow ui-btn-b ui-btn-icon-left ui-icon-check\">Log In</button>
        </div>
    </form>
</div>";
}
else 
{
echo "<a href=\"http://fyp.masmai.com/m/logout.php\" class=\"jqm-search-link ui-btn ui-btn-icon-notext ui-corner-all ui-icon-power ui-nodisc-icon ui-alt-icon ui-btn-right\">Logout</a></div>";
}
?>