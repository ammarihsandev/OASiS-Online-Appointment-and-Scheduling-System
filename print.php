<?php

$errmsg = "";
if (! @mysql_connect("127.0.0.1","wellho","xxxxxxxx") {
        $errmsg = "Cannot connect to database";
        print ($errmsg);
        exit();
        }
@mysql_select_db("wellho");

// get the .pdf

$gotten = @mysql_query("select * from pdf order by pid desc limit 1");
$row = @mysql_fetch_assoc($gotten);
$bytes = $row[imgdata];
header("Content-type: application/pdf");
header('Content-disposition: attachment; filename="thing.pdf"');
print $bytes;
?>