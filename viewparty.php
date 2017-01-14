<?php

include ('connection.php');

$partyid=$_GET['id'];

 $query1="Select a.cand_id,b.party_name, b.party_id,c.position_name,d.acad_year,e.fullname,f.course_name
		  from candidates a join partylist b on a.party_id=b.party_id
		       join positions c on a.position_id=c.position_id
		       join stud_details d on d.sd_id=a.sd_id
		       join students e on e.student_id=d.student_id
				join courses f on f.course_id=d.course_id	
				where b.party_id ='$partyid'";
    $result1=pg_query($query1);
         
          while($row = pg_fetch_row($result1)){

        	?>  

		<tr class="odd">
		   <td class=" "><?php echo $row[4];?></td>
         <td class=" "><?php echo $row[3];?></td>
           <td class=" "><?php echo $row[5];?></td>
              <td class=" "><?php echo $row[6];?></td>
              
              </td>
        </tr>

<?php

}

?>