<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>Upload page</title>
<style type="text/css">
body {
	background: #E3F4FC;
	font: normal 14px/30px Helvetica, Arial, sans-serif;
	color: #2b2b2b;
}
a {
	color:#898989;
	font-size:14px;
	font-weight:bold;
	text-decoration:none;
}
a:hover {
	color:#CC0033;
}

h1 {
	font: bold 14px Helvetica, Arial, sans-serif;
	color: #CC0033;
}
h2 {
	font: bold 14px Helvetica, Arial, sans-serif;
	color: #898989;
}
#container {
	background: #CCC;
	margin: 100px auto;
	width: 945px;
}
#form 			{padding: 20px 150px;}
#form input     {margin-bottom: 20px;}
</style>
</head>
<body>
<div id="container">
<div id="form">

<?php

include "connect.php"; //Connect to Database

//Upload File
if (isset($_POST['submit'])) {
	if (is_uploaded_file($_FILES['filename']['tmp_name'])) {
		//echo "<h1>" . "File ". $_FILES['filename']['name'] ." uploaded successfully." . "</h1>";
		 echo "<script>alert('uploaded succesfully');
			window.location = 'index.php'</script>";
		//readfile($_FILES['filename']['tmp_name']);
	}

	//Import uploaded file to Database
	$handle = fopen($_FILES['filename']['tmp_name'], "r");

	while (($data = fgetcsv($handle, 1000, ",")) !== FALSE) {
		$import="INSERT into students(student_id,fullname) values('$data[0]','$data[1]')";
		$result = pg_query($import); 
		 if (!$result) { 
            $errormessage = pg_last_error(); 
            echo "Error with query: " . $errormessage;
            exit(); 
        } 
		$select = "SELECT course_id from courses where course_name= '$data[2]'";
		$result2 = pg_query($select);
		if($row= pg_fetch_row($result2))
		
		$import1 = "INSERT into stud_details(acad_year,semester,student_id,course_id) values('$data[3]','$data[4]','$data[0]','$row[0]')";
		$result1 = pg_query($import1); 
		 if (!$result1) { 
            $errormessage1 = pg_last_error(); 
            echo "Error with query: " . $errormessage;
            exit(); 
        } 
	}
	

	fclose($handle);

	print "Import done";

	//view upload form
}else {

	print "Upload new csv by browsing to file and clicking on Upload<br />\n";

	print "<form enctype='multipart/form-data' action='upload.php' method='post'>";

	print "File name to import:<br />\n";

	print "<input size='50' type='file' id ='uploadingcsv' name='filename' onchange='checkfile(this);'><br />\n";
	
    //<input type="file" id="uploadImg" name="upload" onchange="checkfile(this);" />

	print "<input type='submit' name='submit' value='Upload' id='dps' disabled='true'></form>";
}
?>
<script>
	function checkfile(sender)

    {

        var validExts = new Array(".csv");

        var fileExt = sender.value;

        fileExt = fileExt.substring(fileExt.lastIndexOf('.'));



        //For Indexof() -IE < 9

        if (!Array.prototype.indexOf)

        {

            Array.prototype.indexOf = function (elt /*, from*/)

            {

                var len = this.length >>> 0;

                var from = Number(arguments[1]) || 0;

                from = (from < 0) ? Math.ceil(from) : Math.floor(from);

                if (from < 0)

                    from += len;

                for (; from < len; from++)

                {

                    if (from in this && this[from] === elt)

                        return from;

                }

                return -1;

            };

        }

        if (validExts.indexOf(fileExt) < 0)

        {

            alert("Invalid file selected, valid files are of " +

               validExts.toString() + " types.");

            sender.value = '';

            return false;

        }

        else
			var btn = document.getElementById("dps");
			btn.disabled = false;
        {

            return true;

        }

    
}</script>




</div>
</div>
</body>
</html>