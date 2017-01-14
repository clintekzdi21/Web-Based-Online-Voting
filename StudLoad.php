<?php

include ('connection.php');

 $query1="Select a.*, b.fullname, c.course_name 
		  from Stud_details a,Students b,  courses c
		  where a.student_id=b.student_id and a.course_id=c.course_id";
            $result1=pg_query($query1);
         
          while($row = pg_fetch_row($result1)){

          	// $name = iconv("UTF-8", "ISO-8859-1//TRANSLIT", $row[5]), PHP_EOL;
        	?>  
        		
				<tr>
				<td><?php echo $row[3];?></td>
				<td><?php echo $row[5];?></td>
				<td><?php echo $row[6];?></td>
				<td><?php echo $row[2];?></td>
				<td><?php echo $row[1];?></td>
				<td class="center" style="display:none"><?php echo $row[0];?></td>
				<td><a class="upStud" href="javascript:;">Edit</a></td>
				</tr>

			<?php

}

?>