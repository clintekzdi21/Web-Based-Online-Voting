<?php

include ('connection.php');

	$queryWhoVoted = "SELECT cl.college_id,cl.college_name,(NULLIF(count(s.FullName),100)) FROM Students s
			JOIN stud_details sd ON sd.student_id = s.student_id
			JOIN courses c ON c.course_id = sd.course_id
			JOIN colleges cl ON cl.college_id = c.college_id
			JOIN voters_password vp ON vp.sd_id = sd.sd_id
			where vp.vp_id NOT IN (select vp_id from votes vt LEFT JOIN sessions ses ON vt.session_id = ses.session_id)
			GROUP BY cl.college_id,cl.college_name;";

	$queryTotalStudentPerCollege = "SELECT cl.college_id,cl.college_name,(NULLIF(count(s.student_id),100)) FROM  colleges cl
			LEFT JOIN courses c ON c.college_id = cl.college_id
			LEFT JOIN stud_details sd ON sd.course_id = c.course_id
			LEFT JOIN students s ON s.student_id = sd.student_id
			GROUP BY cl.college_id,cl.college_name ORDER BY cl.college_id;";

			
    $result1=pg_query($queryWhoVoted);
    $result=pg_query($queryTotalStudentPerCollege);

         
          while($row = pg_fetch_row($result1) && $row1 = pg_fetch_row($result)){
          	$percent = $row[2] / $row1[2] * 100;
        	?>  

		<tr class="odd">
         <td class=" "><?php echo $row[1];?></td>
           <td class=" "><?php echo $percent;?></td>
        </tr>

<?php

}

?>