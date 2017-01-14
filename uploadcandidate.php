<?php
	include('connection.php');

$directory_self = str_replace(basename($_SERVER['PHP_SELF']), '', $_SERVER['PHP_SELF']);

// make a note of the directory that will recieve the uploaded files
$uploadsDirectory = $_SERVER['DOCUMENT_ROOT'] . $directory_self . 'upload/';

// make a note of the location of the upload form in case we need it
$uploadForm = 'http://' . $_SERVER['HTTP_HOST'] . $directory_self . 'my_modals.php';

// make a note of the location of the success page
//$uploadSuccess = 'http://' . $_SERVER['HTTP_HOST'] . $directory_self . 'upload.success.php';

// name of the fieldname used for the file in the HTML form
$fieldname = 'file';
// Now let's deal with the upload

// possible PHP upload errors
$errors = array(1 => 'php.ini max file size exceeded', 
                2 => 'html form max file size exceeded', 
                3 => 'file upload was only partial', 
                4 => 'no file was attached');

				
				
	if (isset($_POST["Register"])){	
	
	
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

$partyid = (int)@$_POST['parlist'];
$posid = (int)@$_POST['poslist'];
$datereg = date("Y/m/d H:i:s");
//$datereg=$_POST['date1'];
$studdet=$_POST['fname'];
$cdetails=pg_escape_string($_POST['cdetail']);
$platform=pg_escape_string($_POST['plat']);

//echo $es_data;

$query=pg_query("INSERT INTO candidates(c_details,c_image,sd_id,party_id,position_id,reg_date,platform) VALUES('$cdetails','$es_data',$studdet,$partyid,$posid,'$datereg','platform');");
     if($query){ 
         echo "<script>alert('Registered succesfully');
		 window.location='cadidates.php'</script>";
      }
  
        
	pg_close();
 }
  
  else if(isset($_POST["Update"])){	

($_FILES[$fieldname]['error'] == 0)
or error($errors[$_FILES[$fieldname]['error']], $uploadForm);
	

@is_uploaded_file($_FILES[$fieldname]['tmp_name'])
	or error('not an HTTP upload', $uploadForm);
	

@getimagesize($_FILES[$fieldname]['tmp_name'])
	or error('only image uploads are allowed', $uploadForm);
	

$now = time();
while(file_exists($uploadFilename = $uploadsDirectory.$now.'-'.$_FILES[$fieldname]['name']))
{
	$now++;
}

@move_uploaded_file($_FILES[$fieldname]['tmp_name'], $uploadFilename)
	or error('receiving directory insuffiecient permission', $uploadForm);
	

$file_name = $uploadFilename;

$img = fopen($file_name, 'r') or die("cannot read image\n");
$data = fread($img, filesize($file_name));
$es_data = pg_escape_bytea($data);

fclose($img);

$partyid = (int)@$_POST['parlist'];
$posid = (int)@$_POST['poslist'];
$datereg = date("Y/m/d H:i:s");
//$datereg=$_POST['date1'];
$studdet=$_POST['fname'];
$cdetails=$_POST['cdetail'];
$cid=$_POST['candid'];
//echo $es_data;


$query=pg_query("update candidates SET c_details='$cdetails', c_image='$es_data', sd_id=$studdet, party_id=$partyid, position_id=$posid, reg_date='$datereg' where cand_id=$cid");
     if($query){  
         echo "<script>alert('Updated succesfully');
		 window.location='candidate.php'</script>";
      }
   // echo pg_last_error($dbconn);
        
	pg_close();
	}


 
  

?>	