<?php
 
include ('connection.php');

 $sql = "SELECT * from STUD_DETAILS";
 $result = pg_query($sql);

 $data = array();
 
 while($row = pg_fetch_array($result)) {

 	
   $row_data = array(
  	       

    'SD_ID' => $row[0]


	);
  array_push($data, $row_data);
 }
 
 echo json_encode($data);
?>