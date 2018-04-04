<?php
	include "mysql_connect.php";
	$current = !empty($_POST) ? $_POST : '';
	$rstClient = $mysqli->query('SELECT count(*) as count FROM data_antrian');
	$rowClient = $rstClient->fetch_array();
	$jmlClient = 0;

	if($rowClient['count']>0){
		$jmlClient = $rowClient['count'];
	}


	if(!empty($_POST)){
		$jml = $jmlClient+1;
		$results = $mysqli->query("INSERT INTO data_antrian (id,waktu,counter,status) VALUES (".$jml.",'','0',3)");
		die($results);
	}





	echo json_encode( array('next'=> $jmlClient) );
	include 'mysql_close.php';
    