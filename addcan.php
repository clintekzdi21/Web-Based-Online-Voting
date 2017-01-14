<?php
	if (isset($_POST["Save"])){	
	
	
	($_FILES[$fieldname]['error'] == 0)
	or error($errors[$_FILES[$fieldname]['error']], $uploadForm);
	
// check that the file we are working on really was an HTTP upload
@is_uploaded_file($_FILES[$fieldname]['tmp_name'])
	or error('not an HTTP upload', $uploadForm);
	
// validation... since this is an image upload script we 
// should run a check to make sure the upload is an image
@getimagesize($_FILES[$fieldname]['tmp_name'])
	or error('only image uploads are allowed', $uploadForm);
	
// make a unique filename for the uploaded file and check it is 
// not taken... if it is keep trying until we find a vacant one
$now = time();
while(file_exists($uploadFilename = $uploadsDirectory.$now.'-'.$_FILES[$fieldname]['name']))
{
	$now++;
}

// now let's move the file to its final and allocate it with the new filename
@move_uploaded_file($_FILES[$fieldname]['tmp_name'], $uploadFilename)
	or error('receiving directory insuffiecient permission', $uploadForm);
	
// If you got this far, everything has worked and the file has been successfully saved.
// We are now going to redirect the client to the success page.
//header('Location: ' . $uploadSuccess);

$file_name = $uploadFilename;

$img = fopen($file_name, 'r') or die("cannot read image\n");
$data = fread($img, filesize($file_name));

$es_data = pg_escape_bytea($data);
fclose($img);

	
	$date = date("Y/m/d H:i:s");
	$details = @$_POST['details'];
	 
		$b = (int)@$_POST['party_select'];
	$c = (int)@$_POST['position_select'];
	
		$num =(int)@$_POST['idnum'];
	$a = (int)@$_POST['course_select'];
		
	$select = pg_query($db, "select * from student_details where idstudent='$num' and idcourse='$a'");  
	$rowselect = pg_fetch_assoc($select); 
	
	//echo "<input type='text' name='duh' value='rowselect[idstuddet]' /> ";
	//$id=(int)@$_GET['duh'];

	$query = "INSERT INTO candidates(date_reg,c_image, c_details,idparty,idposition,idstuddet) VALUES('" . $date. "', '$es_data', '" . $details. "', '" . $b. "' , '" . $c. "', '$rowselect[idstuddet]')";
        $result = pg_query($query); 
        if (!$result) { 
           // $errormessage = pg_last_error(); 
            //echo "Error with query: " . $errormessage;
			echo "<script>alert('Check Course Selected');
		 window.location='viewStudents.php'</script>";
        
        } 
		else{
		 echo "<script>alert('inserted succesfully');
		 window.location='viewStudents.php'</script>";
		}
 
        pg_close(); 
	
	}
	?>