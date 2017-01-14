<?php 
	
	//session_start();

	include ('connection.php');

	header("Content-Type: application/json");

	$positionID = $_POST['positionID'];

	$query="SELECT * FROM candidates C JOIN stud_details SD ON SD.sd_id = C.sd_id 
			JOIN students S ON s.student_id = SD.student_id JOIN partylist P ON P.party_id = C.party_id 
			JOIN courses CRS ON CRS.course_id = SD.course_id JOIN colleges CL ON CL.college_id = CRS.college_id 
			JOIN positions PST ON PST.position_id = C.position_id Where PST.position_id = '$positionID' ;";

	$result=pg_query($dbconn,$query);


	$data = array();
	while($row=pg_fetch_array($result)){
		
		header('Content-type: image/jpeg');
		$unes_image = pg_unescape_bytea($row['c_image']);
		
		$data2 = array('acad_year'=>$row['acad_year'],
						'c_image'=>base64_encode($unes_image),
						'cand_id'=>$row['cand_id'],
						'c_details'=>$row['c_details'],
						'college_id'=>$row['college_id'],
						'college_name'=>$row['college_name'],
						'course_id'=>$row['course_id'],
						'course_name'=>$row['course_name'],
						'reg_date'=>$row['reg_date'],
						'fullname'=>$row['fullname'],
						'maxwin'=>$row['maxwin'],
						'party_id'=>$row['party_id'],
						'party_name'=>$row['party_name'],
						'position_id'=>$row['position_id'],
						'position_name'=>$row['position_name'],
						'sd_id'=>$row['sd_id'],
						'semester'=>$row['semester'],
						'student_id'=>$row['student_id'],
						'platform'=>$row['platform']);
						
		array_push($data, $data2);
		
	}

	 print json_encode(array('success'=>true,'msg'=>'','candidates'=>$data));
?>