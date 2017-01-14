<?php

include ('connection.php');

 $query1="Select a.cand_id,b.party_name, b.party_id,c.position_name,d.acad_year,e.fullname
																			from candidates a join partylist b on a.party_id=b.party_id
																			join positions c on a.position_id=c.position_id
																			join stud_details d on d.sd_id=a.sd_id
																			join students e on e.student_id=d.student_id";
            $result1=pg_query($query1);
         
          while($row = pg_fetch_row($result1)){

        	?>  

<tr>
<td><?php echo $row[1];?></td>
<td class="center" style="display:none"><?php echo $row[0];?></td>

<td class="center" style="display:none">Points</td>
<td class="center" style="display:none">Notes</td>
<td><a class="upParty" href="javascript:;">Edit</a></td>
<td><a class="delete" style="" href="javascript:;">Cancel</a></td>

<td><a class="view" style="" href="javascript:;">
<a href="#modal_partCan" data-toggle="modal" class="config" id="<?php echo $row[2];?>">View Candidate</a></a></td>

</tr>

<?php

}

?>