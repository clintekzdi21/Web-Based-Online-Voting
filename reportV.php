<?php

include ('connection.php');

 $query1="SELECT s.student_id,s.FullName, c.course_name FROM Students s
			JOIN stud_details sd ON sd.student_id = s.student_id
			JOIN courses c ON sd.course_id = c.course_id
			JOIN voters_password vp ON vp.sd_id = sd.sd_id
			where vp.vp_id NOT in (select vp_id from votes vt LEFT JOIN sessions ses ON vt.session_id = ses.session_id)
			order by s.fullname";
			
    $result1=pg_query($query1);
    $count =1;     
          while($row = pg_fetch_row($result1)){
          	
        	?>  

		<tr class="odd">
         <td class=" "><?php echo $count;?></td>
         <td class=" "><?php echo $row[0];?></td>
           <td class=" "><?php echo $row[1];?></td>
              <td class=" "><?php echo $row[2];?></td>
        </tr>

<?php
$count = $count + 1;
}

?>