<?php 

	include "mysql_connect.php";		
	$hasil = $mysqli->query('select * from data_images where status=1');		
	$data = $hasil->fetch_array();
	echo json_encode($data);
	include 'mysql_close.php';
?>