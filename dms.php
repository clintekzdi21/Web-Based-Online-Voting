<?php

include('konek.php');

function candidate($pos){

$sql = "SELECT b.student_id,b.fullname,c.course_name,d.college_name, a.sd_id, e.party_name, f.position_name
  from candidates g join stud_details a on a.sd_id=g.sd_id 
  join students b on a.student_id=b.student_id 
  join courses c on a.course_id=c.course_id
  join colleges d on c.college_id= d.college_id 
  join partylist e on e.party_id=g.party_id
  join positions f on f.position_id=g.position_id
  where f.position_id=$pos";
 $result1=pg_query($sql);
         
      while($row = pg_fetch_row($result1)){
			?> 
<h4>
      <input type="checkbox" id="closeButton ">
     </input>
			<a type="checkbox" class="list-group-item" href="#" onclick="dhan('<?php echo $row[0]; ?>')" ><?php echo $row[1];?></a>
      <br><br></h4>
												
			<?php
		}
	}

?>