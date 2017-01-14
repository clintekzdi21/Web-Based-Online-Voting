<?php

include ('connection.php');

 $query1="SELECT * FROM ACCOUNTS";
            $result1=pg_query($query1);
         
 while($row = pg_fetch_row($result1))
 {
 	if($row[4]== 0)
 	{
	?>  
	<tr>
	<td><?php echo $row[1];?></td>
	<td><?php echo $row[2];?></td>
	<td class="center" style="display:none"><?php echo $row[3];?></td>
	<td>Administrator</td>
	<td><a class="upAcc" href="javascript:;">Edit</a></td>
	<!--td><a class="delete" href="javascript:;">Delete</a></td-->
	</tr>
<?php
	}
	else
	{
	?>  
	<tr>
	<td><?php echo $row[1];?></td>
	<td><?php echo $row[2];?></td>
	<td class="center" style="display:none"><?php echo $row[3];?></td>
	<td>Registration</td>
	<td><a class="upAcc" href="javascript:;">Edit</a></td>
	<!--td><a class="delete" href="javascript:;">Delete</a></td-->
	</tr>
<?php	
	}
}

?>