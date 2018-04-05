<?php 

	include "mysql_connect.php";		
	$hasil = $mysqli->query('select * from data_images');		
	$data = mysqli_fetch_all($hasil,MYSQLI_ASSOC);
	echo json_encode($data);
	include 'mysql_close.php';
?>