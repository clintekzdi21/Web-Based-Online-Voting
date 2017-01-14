<?php

include ('connection.php');

 $query1="SELECT * from accounts";
 $result1=pg_query($query1);
$row = pg_fetch_row($result1);
	
		if($row[0] == '')
    	{
    	?>
    		<p>
				 Don't have an account yet ?&nbsp; <a href="javascript:;" id="register-btn">Create an account</a>
			</p>
		<?php
		}

		else
		{
		?>
		<strong><p style = "margin-left:20px;">
				Have a Vision? Make the Right Decision! <br>
				--------------VOTE WISELY!--------------
			</p></strong>
		<?php
		}
?>