<?php 
include 'db_connect.php';
extract($_GET);
$get = $conn->query("SELECT * FROM faculty where id=$id ")->fetch_array();
$qry = $conn->query("DELETE FROM faculty where id = $id ");
$qry2 = $conn->query("DELETE FROM users where google_id = '".$get['user_id']."' ");
if($qry && $qry2)
	echo true;
?>