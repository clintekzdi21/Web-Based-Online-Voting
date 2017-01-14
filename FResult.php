<?php

include ('connection.php');

 $query1="Select std.fullname,c.c_image,crs.course_name,clg.college_name,pl.party_name,p.position_name,p.position_id,
			(NULLIF(count(v.Session_ID),100)),(SELECT count(*) FROM students)
			FROM students std 
			LEFT JOIN stud_details sd ON sd.student_id = std.student_id
			LEFT JOIN candidates c ON c.sd_id = sd.sd_id
			JOIN positions p ON p.position_id = c.position_id
			LEFT JOIN PartyList pl ON pl.party_id = c.party_id
			LEFT JOIN courses crs ON crs.course_id = sd.course_id
			LEFT JOIN colleges clg ON clg.college_id = crs.college_id
			LEFT JOIN votes v ON v.cand_id = c.cand_id
			LEFT JOIN sessions s ON s.session_id = v.session_id
			LEFt JOIN voters_password vp ON vp.vp_id = s.vp_id
			LEFT JOIN dateofelection doe ON doe.de_id = v.de_id 
			WHERE p.sortorder=1
			GROUP BY std.fullname,c.c_image,crs.course_name,clg.college_name,pl.party_name,p.position_name,p.sortorder,p.position_id 
			ORDER BY p.sortorder";
			
    $result1=pg_query($query1);
   	
		while($row = pg_fetch_row($result1))
    	{
    	?><tr class="odd">
			<strong><ul style="font-size:25px;"><?php echo $row[5];?></ul></strong> 
      		<td></td>
           	<td class=" "><?php echo $row[0];?></td>
            <td class=" "><?php echo $row[4];?></td>
            <td class=" "><?php echo $row[7];?></td>
        	</tr>
		<?php
		}
    
    
?>