<?php

	include "mysql_connect.php";
	$rstClient = $mysqli->query('SELECT count(*) as count FROM client_antrian');
	$rowClient = $rstClient->fetch_array();
	if($rowClient['count']>0){
		$jmlClient = $rowClient['count'];
	}else{
		$jmlClient = 0;
	}
	echo json_encode( array('client'=> $jmlClient) );
	include 'mysql_close.php';
