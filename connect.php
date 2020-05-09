<?php
	$link=mysql_connect("localhost","ainstudio","") or die("Cannot Connect to the database!");
	mysql_select_db("iiumoasis",$link) or die ("Cannot select the database!");
?>