<?php 

$host = "localhost"; 
$user = "postgres"; 
$pass = "masterkey"; 
$db = "OnlineVoting"; 

$con = pg_connect("host=$host dbname=$db user=$user password=$pass")
    or die ("Could not connect to server\n");

$query = "SELECT c_image FROM candidates";
$res = pg_query($con, $query) or die (pg_last_error($con)); 

while($row=pg_fetch_array($res)){
	
	header('Content-type: image/jpeg');
	$unes_image = pg_unescape_bytea($row['c_image']);

	echo (implode('',$unes_image));

}

// $data = pg_fetch_result($res, 'c_image');

// header('Content-type: image/jpeg');
// $unes_image = pg_unescape_bytea($data);

// echo ($unes_image);

//$file_name = "15.jpg";
$img = fopen($file_name,'wb') or die("cannot open image\n");
fwrite($img, $unes_image) or die("cannot write image data\n");
fclose($img);


pg_close($con); 

?>