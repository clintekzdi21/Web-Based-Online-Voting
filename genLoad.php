<?php

include ('connection.php');

 $query1="Select a.student_id, a.course_id, b.fullname, c.course_name, a.sd_id
      from Stud_details a,Students b,  courses c
      where a.student_id=b.student_id and a.course_id=c.course_id";
    $result1=pg_query($query1);
         
     while($row = pg_fetch_row($result1)) 
     {
        $query = pg_query("Select sd_id from voters_password where sd_id=$row[4]");
            $row1 = pg_fetch_row($query);

            ?>  
            <tr class="odd">
               <td  class=" "><?php echo $row[2];?></td>
                 <td class=" " style="display:none"><?php echo $row[0];?></td>
                    <td class=" "><?php echo $row[3];?></td>
                    <td class=" ">
                      <div class="text-center">
                               
            <?php
            if($row1[0] == $row[4])
            {
              ?>
               <input class="hidden" style="display:none" data-id="<?php echo $row[0];?> " type="checkbox" id="<?php echo $row[0];?>" value="<?php echo $row[0];?>"<?php echo "<td><a class = '' href='Reg_printpass.php' > </a></td>"; ?>                     
                </td>
            </tr>
            <?php
          }
          else
          {
             ?>  
              <input class="hidden" style="display:none" data-id="<?php echo $row[0];?>" type="checkbox" id="<?php echo $row[0];?>" value="<?php echo $row[0];?>"<?php echo "<td><a class='generatepass' href='javascript:;''>Generate</a></td>"; ?>
                </td>
            </tr>         
            <?php
          }
      }

?>