<?php
	session_start();

		include ('connection.php');

		if (isset($_POST['Login'])){
		$myusername=$_POST["username"];
		$password=$_POST["password"];
		$pass=md5($password);

		$query="SELECT ACCOUNT_ID,OWNERNAME FROM ACCOUNTS WHERE account_role=1 AND USERNAME='$myusername' AND USERPASS='$pass';";
		$result=pg_query($dbconn,$query);
		$row=pg_fetch_row($result);
		
			if($row == true)
			{
				
				$_SESSION['username'] = $row[0];
				$_SESSION['own'] = $row[1];
				setcookie('USERID',$row[0]);
				;
				echo '<script language="Javascript">
                      window.location = "RegisterVoter.php"
                      </script>';
				
			}
			else
			{
				echo '<script type="text/Javascript">
                      alert("Wrong Credentials! \n \n Invalid Password and Username!");
                      </script>';
			}

			
								
		
			}


?>