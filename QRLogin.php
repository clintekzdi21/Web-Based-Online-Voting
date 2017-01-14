<?php
include ('connection.php');


if (isset($_POST['login'])){
$myusername=$_POST['usern'];
$password=$_POST['passw'];

$qry="SELECT ACCOUNT_ID FROM account WHERE username='$myusername' AND userpass='$password'";
$result = pg_query($qry);
//$result=ibase_query($connect,$query);
$row=pg_fetch_row($result);
		if($row == false){
				echo "D M D";
			}
			else{
				//$_SESSION['username'] = $_POST['myusername'];
			session_start();
				$_SESSION['username'] = $row[0];
				 echo '<script language="Javascript">
                      window.location = "index.php"
                       </script>';
			}
		}
?>