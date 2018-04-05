<?php
	include "mysql_connect.php";
	$current = !empty($_POST) ? $_POST : '';
	$rstClient = $mysqli->query('SELECT count(*) as count FROM data_antrian where type="C"');
	$rowClient = $rstClient->fetch_array();
    $jmlClient = 1;

	if($rowClient['count']>0){
		$jmlClient = $rowClient['count'] + 1;
	}


	if(!empty($_POST)){
		$results = $mysqli->query("INSERT INTO data_antrian (id,waktu,counter,status,type) VALUES (".$jmlClient.",'','0',3,'C')");
		$jmlClient = $jmlClient+1;

	}
	echo json_encode( array('next'=> $jmlClient) );
	include 'mysql_close.php';
    