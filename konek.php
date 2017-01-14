<?php

include('connection.php');

 	if(isset($_POST["SignUp"])){

	$ownername = $_POST['ownername'];
	$username = $_POST['username'];
	$password = $_POST['password'];
	//$accRole = $_POST['role'];
	//$rpassword= $_POST['rpss']
	$pass =md5($password);
	
	if(!isset($username) || !isset($ownername) || trim($password) == '')  
	{
		echo "<script>alert('You did not fill out the required fields');</script>";
	}
	else{
        $query = ("INSERT INTO accounts(ownername, username, userpass, account_role) VALUES('$ownername', '$username','$pass',0)");
        $result = pg_query($query); 
        if (!$result) 
        { 
            $errormessage = pg_last_error(); 
            echo "Error with query: " . $errormessage;
            exit(); 
        } 
		else
		{
        	echo '<script language="Javascript">alert("Data Inserted Successfully!")
        			 window.location = "login.php"
        			 </script>';
			sspg_close();
		}
	}
}

?>