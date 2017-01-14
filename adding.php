<?php	

	include ('connection.php');
	$actions=$_POST['action'];

	if($actions=="addparty")
	{
		$pname=$_POST['partyname'];

		if(empty($pname) || ($pname == ' '))  
		{
			echo ('Please fill out the required field');
		}
	 	else
	 	{
			$query=pg_query("INSERT INTO partylist(party_name) VALUES('$pname');");
			if($query)
			{
				echo "Data Added Successfully!";
			}	
			else
			{ 
			echo "An Error Occurred!"; 
			}
		}
	}

	else if($actions=="addposition")
	{
		$posname=$_POST['position'];
		$max=$_POST['maxwin'];
		$pOr=$_POST['posort'];

		if(empty($posname) || (empty($max)) || (empty($pOr)) || ($posname == ' '))
		{
			echo ('Please fill out the required field');
		}
	 	else
	 	{
			$query=pg_query("INSERT INTO positions(position_name,maxwin,sortorder) VALUES('$posname',$max,$pOr);");
			if($query)
			{
				echo "Data Added Successfully!";
			}
			else
			{ 
				echo "An Error Occurred!"; 
			}
		}
	}
	
	else if($actions=="addcollege")
	{
		$cname=$_POST['colName'];
    
    	if(empty($cname) || ($cname == ' '))  
    	{
		 	echo ('Please fill out the required field');
		}
		else
		{
			$query=pg_query("INSERT INTO colleges(college_name) VALUES('$cname');");
			if($query)
			{
				echo "Data Added Successfully!";
			}
			else
			{ 
				echo "An Error Occurred!"; 
			}
		}
	}

	else if($actions=="addcourses")
	{
		$collegeid = $_POST['cidx'];
		$coursename = $_POST['cnamex'];
	
	 	if(empty($coursename) || ($coursename == ' '))  
	 	{
	 		echo ('Please fill out the required field');
	 	}
 		else
 		{
			$query=pg_query("INSERT INTO courses(course_name, college_id) VALUES('$coursename',$collegeid);");
			if($query)
			{
				echo "Data Added Successfully!";
			}
			else
			{ 
				echo "An Error Occurred!"; 
			}
	
		}
	}

	else if($actions=="addAccount")
	{
		$oname = $_POST['name1'];
		$uname = $_POST['user1'];
		$Opass = $_POST['pass1'];
		$password=md5($Opass);
		$Arole = $_POST['role1'];
		

	 	if(empty($oname) || ($oname == ' ') || (empty($uname)) || ($uname == ' ') || (empty($Opass)) || ($Opass == ' '))
	 	{
	 		echo ('Please fill out the required field');
	 	}
 		else
 		{
			$query=pg_query("INSERT INTO accounts(ownername,username,userpass,account_role) VALUES('$oname','$uname','$password',$Arole);");
			if($query)
			{
				echo "Data Added Successfully!";
			}
			else
			{ 
				echo "An Error Occurred!"; 
				
			}
	
		}
	}

	else if($actions=="addstudent")
	{
		$sID = $_POST['sid'];
		$sName = $_POST['sname'];
		$ay = $_POST['acad'];
		$sc = $_POST['selcour'];
		$semes = $_POST['sem'];
	
		if(empty($sID) || (empty($sName)) || (empty($ay)) || ($sName== ' ') || ($ay== ' '))  
		{
			echo ('Please fill out the required field');
		}
	 	else
	 	{
			$query=pg_query("INSERT INTO students(student_id, fullname) VALUES($sID,'$sName');");
			$query1=pg_query("INSERT INTO stud_details(acad_year,semester,student_id,course_id) VALUES('$ay','$semes',$sID,$sc);");
			if($query && $query1)
			{
				echo "Data Added Successfully!";
			}
			else
			{ 
				echo "An Error Occurred!"; 
			}
		}
	}

	else if($actions=="addelecDate")
	{
		$ed=$_POST['elecD'];

    	if(empty($ed))  
    	{
			echo ('Please fill out the required field');
		}
		else
		{
			$userID = $_COOKIE["USERID"];
			// $resultss= pg_query($dbconn," SELECT * from accounts WHERE account_id = $userID " );
			// $row1= pg_fetch_array($resultss);
			//echo $ed;
			//echo $row1[0];
			//die();
			$query=pg_query("INSERT INTO dateofelection(e_date,account_id,status) VALUES('$ed', $userID,0);");
			if($query)
			{
				echo "Data Added Successfully!";
			}
			else
			{ 
				echo "An Error Occurred!"; 
			}
		}
	}
?>