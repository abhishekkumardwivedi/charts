<?php
$con = mysql_connect("localhost","root","admin");

if (!$con) {
  die('Could not connect: ' . mysql_error());
}

mysql_select_db("restoclouddb", $con);

$sth = mysql_query("SELECT table_no FROM past");
$rows = array();
while($r = mysql_fetch_array($sth)) {
    $rows['categories'][] = $r['table_no'];
}

$result = array();
array_push($result,$rows);

print json_encode($result, JSON_NUMERIC_CHECK);

mysql_close($con);
?>
