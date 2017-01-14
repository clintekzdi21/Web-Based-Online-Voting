<?php
 
include('allin/konek.php');

 $aid = $_GET['pid'];

 $sql = "SELECT * from ACCOUNT where idaccount=$aid";
 $result = pg_query($sql);

 $data = array();
 
 while($row = pg_fetch_array($result)) {

 	
   $row_data = array(
  	       

    'USERNAME' => $row[1],
    'USERPASS' => $row[2],
    'IDACCOUNT' => $row[0]

	);
  array_push($data, $row_data);
 }
 
 echo json_encode($data);
?>