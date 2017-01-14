<?php 

	include ('connection.php');

	header("Content-Type: application/json");

	$query=" Select std.fullname,c.c_image,crs.course_name,clg.college_name,pl.party_name,p.position_name,p.position_id,
			(NULLIF(count(v.Session_ID),100)),(SELECT count(*) FROM students)
			FROM students std 
			LEFT JOIN stud_details sd ON sd.student_id = std.student_id
			LEFT JOIN candidates c ON c.sd_id = sd.sd_id
			JOIN positions p ON p.position_id = c.position_id
			LEFT JOIN PartyList pl ON pl.party_id = c.party_id
			LEFT JOIN courses crs ON crs.course_id = sd.course_id
			LEFT JOIN colleges clg ON clg.college_id = crs.college_id
			LEFT JOIN votes v ON v.cand_id = c.cand_id
			LEFT JOIN sessions s ON s.session_id = v.session_id
			LEFt JOIN voters_password vp ON vp.vp_id = s.vp_id
			LEFT JOIN dateofelection doe ON doe.de_id = v.de_id 
			GROUP BY std.fullname,c.c_image,crs.course_name,clg.college_name,pl.party_name,p.position_name,p.sortorder,p.position_id 
			ORDER BY p.sortorder";

	$result=pg_query($dbconn,$query);

	$data = array();
	while($row=pg_fetch_array($result)){

		header('Content-type: image/jpeg');
		$unes_image = pg_unescape_bytea($row['c_image']);

		$data2 = array('fullname'=>$row['fullname'],
						'c_image'=>base64_encode($unes_image),
						'course_name'=>$row['course_name'],
						'college_name'=>$row['college_name'],
						'party_name'=>$row['party_name'],
						'position_name'=>$row['position_name'],
						'nullif'=>$row['nullif'],
						'position_id'=>$row['position_id'],
						'count'=>$row['count']);

		array_push($data, $data2);
	}

	 print json_encode(array('success'=>true,'msg'=>'','result'=>$data));

?>