	<a id="dhan" href="#responsive" data-toggle="modal" class="config">xxx</a>
	<div id="responsive" class="modal fade" tabindex="-1" aria-hidden="true">
								<div class="modal-dialog">
									<div class="modal-content">
										<div class="modal-header">
											<button type="button" class="close" data-dismiss="modal" aria-hidden="true"></button>
											<h4 class="modal-title">Responsive & Scrollable</h4>
										</div>
										<div class="modal-body">
											<div class="scroller" style="height:300px" data-always-visible="1" data-rail-visible1="1">
												<div class="row">
													<form id="uploadimage" action="" method="post" enctype="multipart/form-data">
													<div class="col-md-12">
													<div class="col-md-5">
													
														<div class="row">
														<div class="col-md-10">														
														<img id= "blah" src="http://www.placehold.it/200x150/EFEFEF/AAAAAA&amp;text=no+image" alt="your imge"/>
														<input type="file" name="file" id="file" required />
														</div>
														</div>
														
													</div>

													<div class="col-md-7">
													<div class="row">
														<h4>Name</h4>
														<p>
															<input id="fullname1" type="text" class="col-md-7 form-control">
														</p>
														<h4>Course</h4>
														<p>
															<input id="course1" type="text" class="col-md-7 form-control">
														</p>
														
													</div>
													</div>
																										
														<div class="col-md-10">
														<div class="row">
														<h4>Partylist</h4>
														<select id="" class="form-control">
															<?php
																include ('connection.php');
																$query1="SELECT * FROM Partylist";
														 		$result1=pg_query($query1);
														 		while($row = pg_fetch_row($result1)){
														 			?>
																<option value="<?php echo $row[0];?>"><?php echo $row[1];?></option>
																	<?php
																}
															?>
														</select>
														
														
														<h4>Position</h4>
														<select id="" class="form-control">
															<?php
																include ('connection.php');
																$query1="SELECT * FROM Positions";
														 		$result1=pg_query($query1);
														 		while($row = pg_fetch_row($result1)){
														 			?>
																<option value="<?php echo $row[0];?>"><?php echo $row[1];?></option>
																	<?php
																}
															?>
														</select>
														</div>
														</div>

													</div>

													
												</div>
											</div>
										</div>
										<div class="modal-footer">
											<button type="button" data-dismiss="modal" class="btn btn-default">Close</button>
											<input type="submit" value="Upload" class="submit" />
										</div>
										</form>
									</div>
								</div>
							</div>