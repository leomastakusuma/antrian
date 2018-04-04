<?php
	$loket = $_POST['loket'];
	
	include "mysql_connect.php";
	$rstClient = $mysqli->query("SELECT * FROM data_antrian WHERE counter='' AND status=3 LIMIT 1");
	$rowClient = $rstClient->fetch_array();
	if(count($rowClient)>0){
		$id = $rowClient['id'];
		$results = $mysqli->query('UPDATE data_antrian SET counter='.$loket.', status=0 WHERE id='.$id.'');
		$next_counter = $id;
		$data['idle'] = "FALSE";
		//update
	}else{
		//insert
		$results = $mysqli->query('INSERT INTO data_antrian (waktu,counter,status) VALUES ("'.date("Y-m-d H:i:s").'",'.$loket.',3)');
		$next_counter = $mysqli->insert_id;

		$rstClient = $mysqli->query("SELECT * FROM data_antrian WHERE counter='' AND status=3 LIMIT 1");
		$rowClient = $rstClient->fetch_array();
		if(count($rowClient)>0){
			$data['idle'] = "TRUE";
		}

	}
	$data['next'] = $next_counter;
	echo json_encode($data);
	include 'mysql_close.php';
	
?>