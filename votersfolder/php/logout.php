<?php 
	
	include ('connection.php');

	$VP_ID = $_POST['data'];

	$UpdateSessions='UPDATE sessions set timeout= NOW() WHERE vp_id = '.$VP_ID.';';
	$resultSessions = pg_query($UpdateSessions);

?>