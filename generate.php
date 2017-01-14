<?php
	function generatePassword($length=7)
	{
		$chars="0123456789";
		$password = substr(str_shuffle($chars),0,$length);
		//$pass =trim($password);
		return ($password);
	}
?>