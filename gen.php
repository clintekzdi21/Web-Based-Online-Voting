<?php 
	session_start();
	require_once('connection.php');
	include('generate.php');

	if (isset($_POST["Ok"])){	
	
		$studentid=$_POST['Stud_ID'];
		//echo($studentid);
		$userID = $_COOKIE["USERID"];
		$resultss= pg_query($dbconn," SELECt * from accounts WHERE account_id = $userID " );
		$row1= pg_fetch_array($resultss);
	
		$query ="SELECT sd.sd_id FROM students s INNER JOIN stud_details sd ON s.student_id = sd.student_id where sd.student_id=$studentid group by sd.sd_id";
		$result = pg_query($query);
		$count =0;
		$row= pg_fetch_array($result);
		    	
		$expiration = "SELECT CURRENT_DATE + 5 date";
		$results = pg_query($expiration);
		$arr = pg_fetch_array($results);

		$password = generatePassword();
		//echo($password);
		
	 	 $sql1 = "INSERT INTO voters_password(vpassword,expirydate,createdby,sd_id,account_id,v_status) 	 values('".$password."','".$arr['date']."','". $row1[1] ."',". $row[0] ."," .$userID. " , ".$count."  )";
		 $res=pg_query($sql1);

		if($sql1){  
		 $_SESSION['idnum'] = $studentid;
		 $_SESSION['pass'] = $password;
		 $_SESSION['expire']=$arr['date'];
		 setcookie('ID',$studentid);
		 

         echo '<script language="Javascript">
         	window.location = "RegisterVoter.php"
			window.open("Reg_printpass.php", "",  "left=300, top=200, width=700,height=300")</script>';
      }
		
	}

?>	