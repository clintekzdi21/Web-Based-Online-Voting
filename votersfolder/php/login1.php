<?php 

	include ('connection.php');

	header("Content-Type: application/json");


	$myusername=$_POST["username"];
	$password=$_POST["password"];
	
	$today = "SELECT to_char(NOW(),'yyyy-mm-dd')";
	$result1=pg_query($today);
	$row1 = pg_fetch_row($result1);	
	
	$checkDate = "SELECT * FROM dateofelection Where e_date = '$row1[0]' and status = 1 ";

	$query="SELECT * FROM Voters_Password VP JOIN stud_details SD ON SD.sd_id = VP.sd_id
			JOIN students S ON S.student_id = SD.student_id
			JOIN courses C ON C.course_id = SD.course_id
			JOIN colleges CL ON CL.college_id = C.college_id 
			WHERE s.student_id=$myusername AND VP.vpassword='$password'";
	//print_r($query);
	$da=0+date("h");

	$da=$da+5;
	if($da>12)
	$da=$da-12;

	

	$result=pg_query($dbconn,$query);
	$row=pg_fetch_array($result);
	$data = array();

	$resultDate=pg_query($dbconn,$checkDate);
	$rowDate=pg_fetch_array($resultDate);

	if($rowDate == true)
	{
		if($row == true)
		{
				//$_SESSION['usernama'] = $row[1];

				$selectQuery = 'Select vp_id from sessions Where vp_id = '. $row['vp_id'] . ' LIMIT 1';
				$resultSelect = pg_query($dbconn,$selectQuery);

				
				if($VP_ID=pg_fetch_row($resultSelect))
				{
					print json_encode(array('success'=>false,'msg'=>'Already voted','user'=>$data));
				}
				else
				{
					$insertquery='INSERT INTO sessions(timein,vp_id) values(NOW(),'.$row['vp_id'].');';
					$resultInsert = pg_query($insertquery);

					$ifExist = 'Select * from sessions Where vp_id = '.$row['vp_id'].' LIMIT 1';
					$exist = pg_query($dbconn,$ifExist);

					if($dataExist=pg_fetch_array($exist))
					{

					//select dateof election

						$dateElection = 'SELECT * FROM dateofelection Where status = 1 LIMIT 1;';
						$resultDate = pg_query($dbconn,$dateElection);
						$date=pg_fetch_array($resultDate);
					
						array_push($data, $row);
						array_push($data, $date);
						array_push($data, $dataExist);
						$_SESSION['username'] = $row[0];
						$_SESSION['own'] = $row[1];

						print json_encode(array('success'=>true,'msg'=>'Successfully Login','user'=>$data));
					}
				}
		}
	}
	else
	{
		print json_encode(array('success'=>false,'msg'=>'error','user'=>$data));
	}
		
?>
