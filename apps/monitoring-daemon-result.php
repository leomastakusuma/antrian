<?php
	ini_set('display_errors', '0');
    $id = $_POST['id'];

	include "mysql_connect.php";
	$result = $mysqli->query('UPDATE data_antrian SET status= 2 WHERE id='.$id.''); // wait
	if (!$result)
	echo json_encode(array('status'=>0));
	else
	echo json_encode(array('status'=>1));
	include 'mysql_close.php';

