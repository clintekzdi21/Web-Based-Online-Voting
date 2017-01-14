<?php
include('konek.php');
include ('dms.php');
$count=0;
$sql = "SELECT * from positions";
 $result1=pg_query($sql);
         
      while($row = pg_fetch_row($result1)){
			?> 
      <div class="panel panel-default">
			<div class="panel-heading">
                    <h4 class="panel-title">
                    <?php echo '<a class="accordion-toggle collapsed" data-toggle="collapse" data-parent="#accordion1" href="'."#collapse_1".$count.'">'; ?> 
                    <?php echo $row[1];?> </a>
                    </h4>
                  </div><?php echo '<div id="'."collapse_1".$count.'" class="panel-collapse collapse" style="height: 0px;"> ';?>
                    <div class="panel-body">
                    
                  
				  <div class="list-group">
					 <!--input type="checkbox" id="closeButton "  class="list-group-item" href="#"-->
					          <?php
                      candidate($row[0]);
                      ?>
					  <!--/input-->

            <!--button type="button" class="btn btn-default" style="float:right;" data-dismiss="modal" onclick="dhan()">view details</button-->
                      </div>
                    </div>
                  </div>
              </div>
			<?php
      $count++;
		}

?>