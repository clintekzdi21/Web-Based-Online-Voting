<?php
	
include ('connection.php');

 $query1="Select a.student_id, a.course_id, b.fullname, c.course_name 
		  from Stud_details a,Students b,  courses c
		  where a.student_id=b.student_id and a.course_id=c.course_id";
 
 $result1=pg_query($query1);
 $data = array();
 while($row = pg_fetch_array($result1)){
	array_push($data,$row);
 }
 print json_encode(array('success' =>true,'students' =>$data));

?>