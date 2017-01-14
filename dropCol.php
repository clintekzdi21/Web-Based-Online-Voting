<?php

include ('connection.php');

 $query1="SELECT * FROM Colleges";
            $result1=pg_query($query1);
         
          while($row = pg_fetch_row($result1)){

        	?>  

<li>
	<a href="#"><?php echo $row[1];?></a>
</li>

<?php

}

?>