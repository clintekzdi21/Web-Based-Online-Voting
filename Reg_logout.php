<?php
	// Inialize session
	session_start();
	
	// Delete certain session
	unset($_SESSION['username']);
	// Delete all session variables
	// session_destroy();
	
	// Jump to login page
	echo '<script language="Javascript">
                        window.location = "Registration.php"
                        </script>';
?>