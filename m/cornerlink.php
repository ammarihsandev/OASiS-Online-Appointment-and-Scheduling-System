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