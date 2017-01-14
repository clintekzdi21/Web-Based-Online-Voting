<?php

include('connection.php'); //Connect to Database

//Upload File
if (isset($_POST['Submit'])) 
{
	if (is_uploaded_file($_FILES['filename']['tmp_name'])) 
	{
		  echo "<script>alert(' File Uploaded Succesfully!');
			  	window.location = 'students.php'</script>";
	}

	//Import uploaded file to Database
	$handle = fopen($_FILES['filename']['tmp_name'], "r");
	
	while (($data = fgetcsv($handle, 1000, ",")) !== FALSE) 
	{
		$select = pg_query("SELECT course_id from courses where course_name= '$data[2]';");

		if($row= pg_fetch_row($select))
		{

			$my_data = pg_escape_string(utf8_encode($data[1]));
		
			$import=pg_query("INSERT into students(student_id,fullname) values('$data[0]','$my_data');");
		
			$import1 =  pg_query("INSERT into stud_details(acad_year,semester,student_id,course_id) values('$data[3]','$data[4]','$data[0]','$row[0]');");
		
		 	if (!$import && !$import1) 
		 	{ 
            	$errormessage1 = pg_last_error(); 
            	echo "Error with query: " . $errormessage;
           		 exit(); 
        	} 
    	}
	}
	fclose($handle);
}
?>