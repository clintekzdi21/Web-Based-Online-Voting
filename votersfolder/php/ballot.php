<?php 

	include ('connection.php');

	header("Content-Type: application/json");

	$data = $_POST['data'];

	$sql = array();
	foreach($data as $row){
			
			 $sql[] = '('.$row['cand_id'].','.$row['session_id'].','.$row['de_id'].')';
		}

		$query = 'INSERT INTO votes(cand_id,session_id,de_id) VALUES '.implode(',', $sql);

		if ($result = pg_query($query)) {
			print json_encode(array('success'=>true,'msg'=>'Thank you for participating the election'));


			$UpdateSessions='UPDATE sessions set timeout= NOW() WHERE vp_id = '.$row['vp_id'].';';
			$resultSessions = pg_query($UpdateSessions);

		}else{
		   	print json_encode(array('success'=>false,'msg'=>'Error while submitting your ballot. Please try again!'));
		 }

?>