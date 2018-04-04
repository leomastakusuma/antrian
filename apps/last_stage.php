<?php
$loket = !empty($_POST['loket']) ? $_POST['loket'] : 0;
include "mysql_connect.php";
$date = date("Y-m-d");
$results = $mysqli->query('SELECT Max(id) as id FROM data_antrian WHERE counter='.$loket.'');
$row = $results->fetch_array();
if ($row['id'] == NULL) {
	$data = array('next' => 0);
} else {
	$data = array('next' => $row['id']);
}
echo json_encode($data);
include 'mysql_close.php';

?>