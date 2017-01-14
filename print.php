<?php 
include ('connection.php');

header("Content-Type: application/json");
$data = array();
foreach($_POST['data'] as $key => $value)
{

	 $query1="SElECT s.student_id,s.fullname, vp.vpassword FROM students s
	 		JOIN stud_details sd ON sd.student_id = s.student_id 
	 		JOIN voters_password vp ON vp.sd_id = sd.sd_id Where s.student_id = '" . $value . "' ";
		 $result1=pg_query($query1);
		 
		 while($row = pg_fetch_array($result1)){
			array_push($data,$row);
		 }

}

print json_encode(array('success' =>true,'students' =>$data));
	
?>