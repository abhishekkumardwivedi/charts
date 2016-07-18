<?php
$con = mysql_connect("localhost","root","admin");

if (!$con) {
  die('Could not connect: ' . mysql_error());
}

mysql_select_db("restoclouddb", $con);

$sth = mysql_query("SELECT table_no FROM past");
$rows = array();
$rows['name'] = 'Average';

// Average time taken on each table
while($r = mysql_fetch_array($sth)) {
    $sum = 0;
    $count = 0;
    
    $sth1 = mysql_query("SELECT time_to_sec(timediff(ack, req)) FROM orders where table_no=" . $r['table_no']);
    while($rr = mysql_fetch_assoc($sth1)) {
        $sum = $sum + $rr['time_to_sec(timediff(ack, req))'];
        $count = $count + 1;
    }
    if($count == 0) {
        $rows['data'][] = 0;
    } else {
        $rows['data'][] = ($sum/$count);
    }
}

$result = array();
array_push($result,$rows);
//array_push($result,$rows1);

print json_encode($result, JSON_NUMERIC_CHECK);

mysql_close($con);
?>
