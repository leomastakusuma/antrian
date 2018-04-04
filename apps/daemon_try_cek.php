<?php 
	$id = $_POST['counter']; //id
	$loket = $_POST['loket']; // counter

	include "mysql_connect.php";		
	$hasil = $mysqli->query('select * from data_antrian where id='.$id.' and counter='.$loket.'');
	$data = $hasil->fetch_array();
	echo json_encode(array('huft' => $data['status']));
	include 'mysql_close.php';
	
?>