<?php

include ('connection.php');

 $query1="Select a.course_name, a.course_id, b.college_name
		  from courses a, colleges b
		  where a.college_id=b.college_id";
 $result1=pg_query($query1);
         
    while($row = pg_fetch_row($result1))
    {
    ?>  
		<tr>
			<td><?php echo $row[0];?></td>
			<td class="center" style="display:none"><?php echo $row[2];?></td>
			<td class="center" style="display:none"><?php echo $row[1];?></td>
			<td class="center" style="display:none">Notes</td>
			<td><a class="upcourse" href="javascript:;">Edit</a></td>
			<!--td><a class="delete" href="javascript:;">Delete</a></td-->
		</tr>
	<?php
	}
?>