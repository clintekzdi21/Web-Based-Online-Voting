<?php 
	
	//session_start();

	include ('connection.php');

	header("Content-Type: application/json");

	$query="SELECT * FROM positions ORDER BY sortorder";

	$result=pg_query($dbconn,$query);

	$data = array();
	while($row=pg_fetch_array($result)){

		array_push($data, $row);
	}

	 print json_encode(array('success'=>true,'msg'=>'','positions'=>$data));

?>