<?php

include ('connection.php');

 $query1="Select a.student_id, a.course_id, b.fullname, c.course_name, a.sd_id
		  from stud_details a,Students b,  courses c
		  where a.student_id=b.student_id and a.course_id=c.course_id";
            $result1=pg_query($query1);
 
          while($row = pg_fetch_row($result1)){
            $query = pg_query("Select sd_id from candidates where sd_id=$row[4]");
            $row1 = pg_fetch_row($query);

          	if($row1[0] == $row[4]){
          		 echo "<tr  style='color:red; font-size:13px;'>
                     <td>".$row[0]."</td>
					           <td>".$row[2]."</td>
					           <td>".$row[3]."</td>
					           <td class='center' style='display:none'>".$row[4]."</td>
					           <td><a>Registered</a></td>
                    </tr>";
          	}
          	else{
          		 echo "<tr style='font-size:13px;'>
                    <td>".$row[0]."</td>
					           <td>".$row[2]."</td>
					           <td>".$row[3]."</td>
					           <td class='center' style='display:none'>".$row[4]."</td>
					           <td><a class='registerstudent' href='javascript:;''>Register Candidate</a></td>
                    </tr>";
          	}
}
?>  