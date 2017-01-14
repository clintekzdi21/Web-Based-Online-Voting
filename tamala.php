<?php 

require_once('connection.php');

header("Content-Type: application/json");

$username = $_POST['username'];
$password = $_POST['password'];
	
$qry="SELECT * FROM accounts WHERE username='$username' AND userpass='$password' ";
$result = pg_query($qry);

	if($result) {
		if(pg_num_rows($result) > 0) {
			$member = pg_fetch_array($result);
			
		 	setcookie("USERID", $member['account_id']);
			
				print json_encode(array('success'=>true,'msg'=>'error','user'=>$member));
			exit();
		}
	}

?>