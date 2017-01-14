<?php

	$action = $_POST['actionjs'];
	
	include ('connection.php');

	if($action=="updateparty"){
	$pid=$_POST['pid'];
	$pname=$_POST['parname'];
	$query1=pg_query("update Partylist SET Party_name='$pname' where party_id=$pid");

	 }
	 
	else if($action=="updatecollege"){
	$cid=$_POST['cid'];
	$colName=$_POST['colname'];
	
	$query1=pg_query("update Colleges SET College_Name='$colName' where college_id=$cid");

	 }

	else if($action=="updateposition"){
	$posid=$_POST['posId'];
	$posname=$_POST['posName'];
	$maxwin=$_POST['maxw'];
	
	$query1=pg_query("update Positions SET Position_Name='$posname', Maxwin=$maxwin where position_id=$posid");

	 }

	else if($action == "UPstudent"){
	$sd=$_POST['sdid'];
	$studID=$_POST['sID'];
	$studName=$_POST['sName'];
	$courId=$_POST['cID'];
	$acadyear=$_POST['ac'];
	$semes=$_POST['sem'];

	
	$query =pg_query("update students SET fullname='$studName' where student_id = $studID");
	$query1  =pg_query("update stud_details SET acad_year='$acadyear', semester='$semes', student_id=$studID, 
						course_id=$courId where sd_id = $sd");
	
	if($query && $query1){
		echo "Information Modified";
	 }
	 else{ 
		echo "An error occurred!"; 
	}
	}

	else if($action == "UPaccount"){
	$acc_id=$_POST['a_id'];
	$pid=$_POST['p_id'];
	$on=$_POST['owner'];
	$un=$_POST['user'];
	$pass=$_POST['passw'];
	$npass=$_POST['newp'];
	$cpass=$_POST['conp'];
	$passe =md5($pass);

	if(($pid==$passe) & ($npass==$cpass)) {
		$newp =md5($npass);
	$query1 = pg_query("update accounts SET ownername='$on', username='$un', userpass='$newp' where account_id = $acc_id");

	if($query1){
		echo "Information Modified";
	 }
	 else{ 
		echo "An error occurred!"; 
		}

	}
	else{
		echo "Error Occured!";

	}
	}
	else if($action=="UPcourse"){
	$couID=$_POST['coID'];
	$cname=$_POST['couName'];
	$colID=$_POST['selCol'];
	
	$query1=pg_query("update courses SET course_name='$cname', college_id=$colID where course_id=$couID");

	if($query1){
		echo "Information Modified";
	 }
	 else{ 
		echo "An error occurred!"; 
	}
	}

	else if($action=="UPset"){
	$did=$_POST['deid'];
	$status=$_POST['stat'];
	$userID = $_COOKIE["USERID"];

	if($status =='INACTIVE'){
	$query1=pg_query("update dateofelection SET account_id=$userID, status=1 where de_id=$did");

	if($query1){
		echo "Information Modified";
	 }
	 else{ 
		echo "An error occurred!"; 
	}
	}
	else{
	$query1=pg_query("update dateofelection SET account_id=$userID, status=0 where de_id=$did");
	if($query1){
		echo "Information Modified";
	 }
	 else{ 
		echo "An error occurred!"; 

	 }
	}
}

	// else if($action=="UPset1"){
	// $did=$_POST['deid'];
	// // $acc_id=$_POST['accid'];
	// // $status=$_POST['stat'];
	// $userID = $_COOKIE["USERID"];

	// $query1=pg_query("update dateofelection SET account_id=$userID, status=0 where de_id=$did");

	// if($query1){
	// 	echo "Information Modified";
	//  }
	//  else{ 
	// 	echo "An error occurred!"; 

	// }
	// }



?>