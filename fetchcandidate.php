<?php
 
include('connection.php');

 $id = $_GET['cid'];

 $query = "SELECT * FROM CANDIDATES where cand_id=$id";
 $result = pg_query($query);

 
 $data = array();
 
 while($row = pg_fetch_row($result)) {

   $row_data = array(

        'CAND_ID' => $row[0];
        'C_DETAILS' => $row[1];
        base64_decode('C_IMAGE') => $row[2];
        'SD_ID' => $row[3];
        'PARTY_ID' => $row[4];
        'POSITION_ID' => $row[5];
        'REG_DATE' => $row[6];

	);

  array_push($data, $row_data);
 }
 
 echo json_encode($data);

?>