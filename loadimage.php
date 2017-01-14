<?php 
	
	include ('connection.php');

	header("Content-Type: application/json");

	$ID = $_POST['ID'];

	$query="SELECT * FROM candidates c JOIN stud_details sd ON c.sd_id = sd.sd_id where c.sd_id =  '$ID';";

	$result=pg_query($dbconn,$query);
	$data = array();
	while($row = pg_fetch_array($result)){

		
		header('Content-type: image/jpeg');
		$unes_image = pg_unescape_bytea($row['c_image']);
		
		$data2 = array('c_image'=>base64_encode($unes_image));
		
		array_push($data, $data2);
		
	}
	print json_encode(array('success'=>true,'msg'=>'','image'=>$data));

?>