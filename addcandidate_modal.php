<div class="modal fade" id="modal_reg_Student" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
				<div class="modal-dialog">

					<div class="modal-content">
						<div class="modal-header">
							<button type="button" class="close" data-dismiss="modal" aria-hidden="true"></button>
							<h4 id="cn" class="modal-title"> Add Candidate </h4>
							<h4 id="cn1" style="display:none" class="modal-title"> Update Candidate </h4>
						</div>
						<div id="uploadimage" class="modal-body">
							<div class="row">
						<div class="col-md-5">
									<ul class="list-unstyled profile-nav">
									<div class="form-group last">
										<!--label class="control-label col-md-2">Image Upload</label-->
									<div class="form-group last">
										
										<div class="col-md-9">
											<div class="fileupload fileupload-new" data-provides="fileupload">
												<div  id="previewing" class="fileupload-new thumbnail" style="width: 200px; height: 150px;">
													<img id= "blah" src="http://www.placehold.it/200x150/EFEFEF/AAAAAA&amp;text=no+image" alt="your imge"/>
												</div>
												<input type="file" id="imgInp" />
											
											</div>
										
											
										</div>
									</div>
									</div>
									</div>

									<div class="col-md-7">
										<div class="row">
											<div class="col-md-12 profile-info">
											<div class="form-group has-success">
												<label class="control-label" for="fullname1">Name</label>
												<input type="text" class="form-control" id="fullname1" readonly>
												<label class="control-label" for="idnumber1">Course</label>
												<input type="text" class="form-control" id="course1" readonly>
											</div>
										</div></div></div></div>

								<div class="col-md-12">
									<form role="form">
										<div class="form-body">
											<div class="form-group">
												<label>Select Partylists</label>
												<select id="Sparty" class="form-control">
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
											</div>
											<div class="form-group">
												<label>Select Position</label>
												<select id="Spos" class="form-control">
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
													<!--option>Option 1</option>
													<option>Option 2</option>
													<option>Option 3</option>
													<option>Option 4</option>
													<option>Option 5</option-->
												</select>
											</div>

									</form>
								</div>
							
							</div>
						</div>
						<div class="modal-footer">
							<button id="addcan" type="submit" name="register" class="btn btn-success"> Save </button>
							<button id="upcan" type="button" style="display:none" class="btn btn-success"> Update </button>
							<button type="button" class="btn btn-default" data-dismiss="modal"> Cancel </button>
						</div>
					</div>
					<!-- /.modal-content -->
				</div>