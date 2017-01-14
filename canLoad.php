<?php

include ('connection.php');

 $query1="SELECT b.fullname,c.course_name, e.party_name, f.position_name, g.cand_id,g.c_details,a.sd_id
		  from candidates g join stud_details a on a.sd_id=g.sd_id 
		  join students b on a.student_id=b.student_id 
		  join courses c on a.course_id=c.course_id
		  join partylist e on e.party_id=g.party_id
		  join positions f on f.position_id=g.position_id ";
            $result1=pg_query($query1);
         
          while($row = pg_fetch_row($result1)){
		
		
       	?>  
	
<tr class="table">	
<td><?php echo $row[0];?></td>
<td><?php echo $row[1];?></td>
<td><?php echo $row[2];?></td>
<td><?php echo $row[3];?></td>
<td class="center" style="display:none"><?php echo $row[5];?></td>
<td class="center" style="display:none"><?php echo $row[6];?></td>
<td class="center" style="display:none"><?php echo $row[4];?></td>
<td><a class="upcand" href="javascript:;">Edit</a></td>
<!--td><a class="gamerz" href="javascript:UpdateCandidate(<?php echo $row[4];?>)">Edit</a></td>
<!--td><a class="delete" href="javascript:;">Delete</a></td-->
</tr>

<?php

}

?>