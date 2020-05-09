<?php 
 
  include 'db.php';
  $con = mysql_connect($host,$user,$pass);
  $dbs = mysql_select_db($databaseName, $con);

 
  $result = mysql_query("SELECT * FROM student");

$data = array();
while ( $row = mysql_fetch_row($result) )
{
  $data[] = $row;
}
echo json_encode( $data );

?>