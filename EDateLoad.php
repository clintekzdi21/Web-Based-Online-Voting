<?php

include ('connection.php');

 $query1="SELECT * from DateofElection";
 $result1=pg_query($query1);
         
$checkDate = "SELECT to_char(NOW(),'yyyy-mm-dd')";
$result=pg_query($checkDate);
$row1 = pg_fetch_row($result);

    while($row = pg_fetch_row($result1))
    {
      //echo "$row1[0]";
      if($row[1] == $row1[0])
      {
        //$date = date("d-m-Y",strtotime($row[1]));
        if($row[3]== 0) 
        {
          $stat = 'INACTIVE';
          echo "<tr  style='color:red;'>
                  <td>".$row[1]."</td>
                  <td>".$stat."</td>
					       <td class='center' style='display:none'>".$row[0]."</td>
					       <td><a class='setElec' href='javascript:;''>Start</a></td>
                </tr>";
        }
        else
        {
          $stat = 'Active';
          echo "<tr style='color:green;'>
                  <td>".$row[1]."</td>
                  <td>".$stat."</td>
					        <td class='center' style='display:none'>".$row[0]."</td>
					        <td><a class='setElec1' href='javascript:;''>Stop</a></td>
                </tr>";
        }
      }
    }
?>  