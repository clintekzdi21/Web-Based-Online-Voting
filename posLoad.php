<?php

include ('connection.php');

 $query1="SELECT * FROM Positions";
            $result1=pg_query($query1);
         
          while($row = pg_fetch_row($result1)){

        	?>  

<tr>
<td><?php echo $row[1];?></td>
<td><?php echo $row[2];?></td>
<td class="center" style="display:none"><?php echo $row[0];?></td>
<td class="center" style="display:none">Notes</td>
<td><a class="upPosition" href="javascript:;">Edit</a></td>
<td><a class="delete" style="display:none" href="javascript:;">Delete</a></td>
</tr>

<?php

}

?>