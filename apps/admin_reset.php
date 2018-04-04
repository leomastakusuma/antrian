<?php

	include "mysql_connect.php";
	$rstClient = $mysqli->query('TRUNCATE TABLE data_antrian');
	echo json_encode( array('status'=> "Data Berhasil di Reset") );
	include 'mysql_close.php';
