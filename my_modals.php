<a id="movefazter1"  data-target="#static" data-toggle="modal" href="#static" class="config"></a>
<div class="modal fade in" id="modal_partylists"  tabindex="-1" data-backdrop="static" data-keyboard="false" role="dialog" data-backdrop="static" data-keyboard="false" aria-labelledby="myModalLabel" aria-hidden="false">
<!--div class="modal fade in" id="modal_partylists"  tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="false"-->
				<div class="modal-dialog">
					<div class="modal-content">
						<div class="modal-header">
							<button type="button" class="close" data-dismiss="modal" aria-hidden="true"></button>
			<h4 class="modal-title"> Add PartyList </h4>
						</div>
						<div class="modal-body">
							<div class="row">
				
								<div class="col-md-12">
									<form role="form">
										<div class="form-body">
											<div class="form-group has-success">
													<label class="control-label" for="inputSuccess">Partylist Name</label>
													<input type="text" class="form-control" id="Pname" required />
											</div>
										</div>
									</form>
								</div>
							
							</div>
						</div>
						<div class="modal-footer">
							<button type="button" onclick="AjaxParty()"class="btn btn-success"> Add </button>
							<button type="button" class="btn btn-default" data-dismiss="modal"> Close </button>
						</div>
					</div>
					<!-- /.modal-content -->
				</div>
				<!-- /.modal-dialog -->
</div>


<a id="movefazter2"  data-target="#static" data-toggle="modal" href="#static" class="config"></a>
<div class="modal fade"  id="modal_college" tabindex="-1" data-backdrop="static" data-keyboard="false" role="dialog"data-backdrop="static" data-keyboard="false" aria-labelledby="myModalLabel" aria-hidden="true">
<!--div class="modal fade" id="modal_college" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true"-->
				<div class="modal-dialog">
					<div class="modal-content">
						<div class="modal-header">
							<button type="button" class="close" data-dismiss="modal" aria-hidden="true"></button>
							<h4 class="modal-title"> Add College </h4>
						</div>
						<div class="modal-body">
							<div class="row">
				
								<div class="col-md-12">
									<form role="form">
										<div class="form-body">
											<div class="form-group has-success">
													<label class="control-label" for="inputSuccess">College Name</label>
													<input type="text" class="form-control" id="Cname">
											</div>
										</div>
									</form>
								</div>
							
							</div>
						</div>
						<div class="modal-footer">
							<button type="button" onclick="AjaxCollege()"class="btn btn-success"> Add </button>
							<button type="button" class="btn btn-default" data-dismiss="modal"> Close </button>
						</div>
					</div>
					<!-- /.modal-content -->
				</div>
				<!-- /.modal-dialog -->
</div>

<a id="movefazter21"  data-target="#static" data-toggle="modal" href="#static" class="config"></a>
<div class="modal fade"  id="modal_Account" tabindex="-1" data-backdrop="static" data-keyboard="false" role="dialog" data-backdrop="static" data-keyboard="false" aria-labelledby="myModalLabel" aria-hidden="true">
<!--div class="modal fade" id="modal_college" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true"-->
				<div class="modal-dialog">
					<div class="modal-content">
						<div class="modal-header">
							<button type="button" class="close" data-dismiss="modal" aria-hidden="true"></button>
							<h4 class="modal-title"> Add Account </h4>
						</div>
						<div class="modal-body">
							<div class="row">
				
								<div class="col-md-12">
									<form role="form">
										<div class="form-body">
											<div class="form-group has-success">
												<label class="control-label" for="inputSuccess">Owner Name</label>
												<input type="text" class="form-control" id="OName" required/>
												<label class="control-label" for="inputSuccess">Username</label>
												<input type="text" class="form-control" id="UName" required/>
												<label class="control-label" for="inputSuccess">Password</label>
												<input type="password" class="form-control" id="pass" required/>
												<label class="control-label" for="inputSuccess">Account Role</label>
												<select id="selAcc" class="form-control">
													<option value="1">Registration</option>
													<option value="0">Admin</option>
												</select>
											</div>
										</div>
									</form>
								</div>
							
							</div>
						</div>
						<div class="modal-footer">
							<button type="button" onclick="AjaxAccount1()" class="btn btn-success"> Add </button>
							<button type="button" class="btn btn-default" data-dismiss="modal"> Close </button>
						</div>
					</div>
					<!-- /.modal-content -->
				</div>
				<!-- /.modal-dialog -->
</div>

<a id="Arnie" href="#modal_course" data-toggle="modal" class="config"></a>
<div class="modal fade" id="modal_course" tabindex="-1" role="dialog"  data-backdrop="static" data-keyboard="false" aria-labelledby="myModalLabel" aria-hidden="true">

				<div class="modal-dialog">
					<div class="modal-content">
						<div class="modal-header">
							<button type="button" class="close" data-dismiss="modal" aria-hidden="true"></button>
							<h4 id="c1" class="modal-title"> Add Course</h4>
							<h4 id="c2" style="display:none" class="modal-title"> Update Course</h4>
						</div>
						<div class="modal-body">
							<div class="row">
				
								<div class="col-md-12">
									<form role="form">
										<div class="form-body">
											<div id="sc" class="form-group">
												<label>College Name</label>
												<select id="scors" class="form-control">
												<?php

														include ('connection.php');

														 $query1="SELECT * FROM Colleges";
														 $result1=pg_query($query1);
														     
														    
														 while($row = pg_fetch_row($result1)){

														?>  

														<option value="<?php echo $row[0];?>"><?php echo $row[1];?></option>

														<?php

														}

														?>
													
												</select>
											</div>
											<div class="form-group has-success">
												<label class="control-label" for="inputSuccess">Course Name</label>
												<input type="text" class="form-control" id="Coname">
												<input style="display:none" type="text" class="form-control" id="Colname" required />
											</div>
										</div>
									</form>
								</div>
							
							</div>
						</div>
						<div class="modal-footer">
							<button id="addC" type="button" onclick="AjaxCourse()" class="btn btn-success"> Add </button>
							<button id="upC" type="button" style="display:none" onclick="AjaxCourse1()" class="btn btn-success"> Update </button>
							<button type="button" class="btn btn-default" data-dismiss="modal"> Close </button>
						</div>
					</div>
					<!-- /.modal-content -->
				</div>
				<!-- /.modal-dialog -->
</div>


<!--a id="upStudent" data-target="#static" href="#modal_Student" data-toggle="modal" class="config"></a-->

<a id="upStudent" href="#modal_Student" data-toggle="modal" class="config"></a>
<div class="modal fade" id="modal_Student" tabindex="-1" role="dialog"  data-backdrop="static" data-keyboard="false" aria-labelledby="myModalLabel" aria-hidden="true">
<!--div class="modal fade" id="modal_Student" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true"-->
				<div class="modal-dialog">
					<div class="modal-content">
						<div class="modal-header">
							<button type="button" class="close" data-dismiss="modal" aria-hidden="true"></button>
							<h4 id="s1" class="modal-title">Add Student</h4>
							<h4 id="s2" style="display:none" class="modal-title">Update Student</h4>
						</div>
						<div class="modal-body">
							<div class="row">
				
								<div class="col-md-12">
									<form role="form">
										<div class="form-body">
										<div class="form-group has-success">
												<input type="text" style="display:none" class="form-control" id="sdid"/>
												<label class="control-label" for="inputSuccess">ID Number</label>
												<input type="text" class="form-control" id="sid" onkeypress=ch(event)>
												<label class="control-label" for="inputSuccess">Name</label>
												<input type="text" class="form-control" id="sname"/>
												<label class="control-label" for="inputSuccess">Academic Year</label>
												<input type="text" class="form-control" id="acad" >
											</div>
											<div class="form-group">
												<label>Course Name</label>
												<select id="selcourse" class="form-control">
												<?php

														include ('connection.php');

														 $query1="SELECT * FROM Courses";
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
												<label>Semester</label>
												<select id="selsem" class="form-control">
													<option>First Semester</option>
													<option>Second Semester</option>
													
												</select>
											</div>

										</div>
									</form>
								</div>
							
							</div>
						</div>
						<div class="modal-footer">
							<button id="addS" type="button" style="display:none" onclick="AjaxStudent()"class="btn btn-success"> Update </button>
							<button id="upS" type="button" onclick="AjaxStudent1()"class="btn btn-success"> Add </button>
							<button id="clos" type="button" class="btn btn-default" data-dismiss="modal"> Close </button>
						</div>
					</div>
					<!-- /.modal-content -->
				</div>
				<!-- /.modal-dialog -->
</div>

<a id="movefazter3"  data-target="#static" data-toggle="modal" href="#static" class="config"></a>
<div class="modal fade" id="modal_position" tabindex="-1" role="dialog"  data-backdrop="static" data-keyboard="false" aria-labelledby="myModalLabel" aria-hidden="true">
<!--div class="modal fade" id="modal_position" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true"-->
				<div class="modal-dialog">
					<div class="modal-content">
						<div class="modal-header">
							<button type="button" class="close" data-dismiss="modal" aria-hidden="true"></button>
							<h4 class="modal-title"> Add Position </h4>
						</div>
						<div class="modal-body">
							<div class="row">
				
								<div class="col-md-12">
									<form role="form">
										<div class="form-body">
											<div class="form-group has-success">
													<label class="control-label" for="inputSuccess"> Position </label>
													<input type="text" class="form-control" id="pos">
													<label class="control-label" for="inputSuccess"> # of Winner </label>
													<input type="text" class="form-control" id="nwin" onkeypress=ch(event)>
													<label class="control-label" for="inputSuccess"> Position Order </label>
													<input type="text" class="form-control" id="PosOr" onkeypress=ch(event)>
											</div>
										</div>
									</form>
								</div>
							
							</div>
						</div>
						<div class="modal-footer">
							<button type="button" onclick="AjaxPosition()" class="btn btn-success"> Add </button>
							<button type="button" class="btn btn-default" data-dismiss="modal"> Close </button>
						</div>
					</div>
					<!-- /.modal-content -->
				</div>
				<!-- /.modal-dialog -->
</div>
<script>

 function ch(event){
//alert(event.keyCode);
var e=event.keyCode;
if(!(e>=48 && e<=57)){
    event.preventDefault();
	alert('Invalid Inputs! Accept only Integer')}

    }
    </script>

<a id="dhan" href="#modal_reg_Student" data-toggle="modal" class="config"></a>
<div class="modal fade" id="modal_reg_Student" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
		<form id="Upload" action="uploadcandidate.php" method="post" enctype="multipart/form-data">
				<div class="modal-dialog">

					<div class="modal-content">
						
						<div class="modal-header">
							<button type="button" class="close" data-dismiss="modal" aria-hidden="true"></button>
							<h4 id="cn" class="modal-title"> Add Candidate </h4>
							<h4 id="cn1" style="display:none" class="modal-title"> Update Candidate </h4>
						</div>
						<div id="uploadimage" class="modal-body">
						<!--form id="previewing" action="" method="post" enctype="multipart/form-data"-->
							<div class="row">
							<input type="hidden" name="MAX_FILE_SIZE" id="ff" value="">
							
						<div class="col-md-5">
							<ul class="list-unstyled profile-nav">

									<div class="form-group last">
										<!--label class="control-label col-md-2">Image Upload</label-->
										
										<div class="form-group last">								
											<div class="col-md-9">
												<div id="previewing"><img id="blah" src="noimage.png" /></div><br>	
												<div id="selectImage">
												 <input id="file" type="file" name="file" />
												</div>												
											</div>
										</div>					
									</div>			
						</div>
							

									<div class="col-md-7">
										<div class="row">
											<div class="col-md-12 profile-info">
											<div class="form-group has-success">
												<input style="display:none" type="text" name="candid" class="form-control" id="cd_id">
												<input style="display:none" type="text" name="fname" class="form-control" id="sd_id" readonly>
												<label class="control-label" for="fullname">Name</label>
												<input type="text"  class="form-control" id="fullname" >
												<label class="control-label" for="idnumber1">Course</label>
												<input type="text" class="form-control" id="course" readonly>
											</div>
										</div>
										</div>
										</div>
										</div>
								<br>
								<div class="col-md-12">
									
										<div class="form-body">
											<div class="form-group">
												<label>Select Partylists</label>
												<select id="pa" name='parlist' class="form-control">
												<?php

														include ('connection.php');

														 $query1="SELECT * FROM Partylist";
														 $result1=pg_query($query1);					

														 // $query="SELECT party_id from candidates ";
														 // $result=pg_query($query);
														 // $row1 = pg_fetch_row($query);
						     
														 while($row = pg_fetch_row($result1))
														 {
														?>  
														<option value="<?php echo $row[0];?>"><?php echo $row[1];?></option>
														<?php
														}
														?>											
												</select>
											</div>

											<div class="form-group">
												<label>Select Position</label>
												<select id="po" name='poslist' class="form-control">
												<?php
														include ('connection.php');
														 $query1="SELECT * FROM Positions";
														 $result1=pg_query($query1);														     
														 while($row = pg_fetch_row($result1))
														 {
														?>  
														<option value="<?php echo $row[0];?>"><?php echo $row[1];?></option>
														<?php
														}
														?>
												</select>
											</div>

											<div class="form-group">
											<label class="control-label">Candidate_Details</label>
											<textarea id="cd" name="cdetail" class="form-control col-md-12" rows="3"></textarea>
											</div>		

											<div class="form-group">
											<label class="control-label">Platforms</label>
											<textarea id="pt" name="plat" class="form-control col-md-12" rows="3"></textarea>
											</div>	
							</div>
							
						</div>
					
					</div>
						<div class="modal-footer">
							
							<input id="addcan" type="submit" value="Register" class="btn btn-default" name="Register" />
							<input id="upcan" style="display:none" type="submit" value="Update" class="btn btn-default" name="Update" />
							<button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
						</div>
					</div>
					
					<!-- /.modal-content -->
				</div>
				
			</form>		<!-- /.modal-dialog -->
</div>

<a id="genPass" href="#modal_Generate_Pass" data-toggle="modal" class="config"></a>
<div class="modal fade" id="modal_Generate_Pass" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
		<form id="Upload" action="gen.php" method="post" enctype="multipart/form-data">
				<div class="modal-dialog">

					<div class="modal-content">
						
						<div class="modal-header">
							<button type="button" class="close" data-dismiss="modal" aria-hidden="true"></button>
							<h4 id="gp" class="modal-title"> Generate Password</h4>	
						</div>
						 <div class="modal-body">
						 <input style="display:none" type="text" name="Stud_ID" class="form-control" id="stud_id">
     							 Generating Password Successfully ...
    					 </div>
						<div class="modal-footer">
							
							<input id="genP" type="submit" value="Ok" class="btn btn-default" name="Ok" />
						</div>
					</div>
					
					<!-- /.modal-content -->
				</div>
				
			</form>		<!-- /.modal-dialog -->
</div>

<a id="printpass" href="#modal_print_Pass" data-toggle="modal" class="config"></a>
<div class="modal fade" id="modal_print_Pass" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
		<form id="Upload" action="" method="post" enctype="multipart/form-data">
				<div class="modal-dialog">

					<div class="modal-content">
						
						<div class="modal-header">
							<button type="button" class="close" data-dismiss="modal" aria-hidden="true"></button>
							<h4 id="gp" class="modal-title"> Print Account</h4>	
						</div>
						 <div class="modal-body">
						 <input style="display:none" type="text" name="Stud_ID" class="form-control" id="stud_id">
     							 Username: 
     							 <?php echo $_SESSION['idnum']?>
								<br>
								Password: 
								<?php echo $_SESSION['pass']?>
								<br>
								Validity: valid until 
								<?php echo $_SESSION['expire']?>
    					 </div>
						<div class="modal-footer">
							
							<input id="" type="button" value="" class="close" name="OK" />
						</div>
					</div>
					
					<!-- /.modal-content -->
				</div>
				
			</form>		<!-- /.modal-dialog -->
</div>


<a id="vince" href="#modal_studentform" data-toggle="modal" class="config"></a>
<div class="modal fade" id="modal_studentform" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
				<div class="modal-dialog">
					<div class="modal-content">
						<div class="modal-header">
							<button type="button" class="close" data-dismiss="modal" aria-hidden="true"></button>
							<h4 class="modal-title">Candidate's Information</h4>
						</div>
						<div class="modal-body">
							<div class="row">
									<div class="col-md-5">
									<ul class="list-unstyled profile-nav">
											<li>
												<img src="http://www.placehold.it/200x150/EFEFEF/AAAAAA&amp;text=no+image" id="candidateIMG" class="img-responsive" alt="">
												<p class="hide-if-no-js">
											
											</li>
										
									</div>
									
									<div class="col-md-7">
										<div class="row">
											<div class="col-md-12 profile-info">
												<h1 id="dxd">John Doe</h1>
												<p>Position</p>
												<p>Prtylist</p>
												<p>Course</p>
												
												<p>
													 Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt laoreet dolore magna aliquam tincidunt erat volutpat laoreet dolore magna aliquam tincidunt erat volutpat.
												</p>
											</div>
											
											
											
											<br>
										<div style="margin-left: 5%">
											<!--<li>
												<label class="control-label" for="fullname1">Course</label>
												<input type="text" class="form-control" id="fullname" readonly>
											</li>
											<li>
												<label class="control-label" for="fullname1">Partylists</label>
												<input type="text" class="form-control" id="fullname1" readonly>
											</li>-->
											</div>
										</ul>
						
										</div>
										<!--end row-->
										
									</div>
								</div>
						</div>
						<div class="modal-footer">
							<!--<button type="button" class="btn btn-success" onclick="aa()">VOTE</button>-->
							<button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
						</div>
					</div>
					<!-- /.modal-content -->
				</div>
				<!-- /.modal-dialog -->
</div>

<a id="UpAccount" href="#modal_account" data-toggle="modal" class="config"></a>
<div class="modal fade" id="modal_account" tabindex="-1" role="dialog"  data-backdrop="static" data-keyboard="false" aria-labelledby="myModalLabel" aria-hidden="true">
<!--div class="modal fade" id="modal_account" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true"-->
				<div class="modal-dialog">
					<div class="modal-content">
						<div class="modal-header">
							<button type="button" class="close" data-dismiss="modal" aria-hidden="true"></button>
							<h4 class="modal-title">Update Account</h4>
						</div>
						<div class="modal-body">
							<div class="row">
				
								<div class="col-md-12">
									<form role="form">
										<div class="form-body">
											<div class="form-group has-success">
													<input type="text" style="display:none" class="form-control" id="aid">
													<input type="text" style="display:none" class="form-control" id="pad">
													<label class="control-label" for="inputSuccess">OwnerName</label>
													<input type="text" class="form-control" id="on">
													<label class="control-label" for="inputSuccess">UserName</label>
													<input type="text" class="form-control" id="un">
													<label class="control-label" for="inputSuccess">Password</label>
													<input type="password" class="form-control" id="pass">
													<label class="control-label" for="inputSuccess">New Password</label>
													<input type="password" class="form-control" id="Npass">
													<label class="control-label" for="inputSuccess">Confirm Password</label>
													<input type="password" class="form-control" id="Cpass">
											</div>
										</div>
									</form>
								</div>
							
							</div>
						</div>
						<div class="modal-footer">
							<button type="button"  onclick="AjaxAccount()"class="btn btn-success"> Update </button>
							<button id="clos1" type="button" class="btn btn-default" data-dismiss="modal"> Cancel </button>
						</div>
					</div>
					<!-- /.modal-content -->
				</div>
				<!-- /.modal-dialog -->
</div> 

<a id="movefazter" data-target="#static2" data-toggle="modal" href="#static2" class="config"></a>
<div id="static2" class="modal fade" tabindex="-1" data-backdrop="static" data-keyboard="false" data-attention-animation="false" aria-hidden="true" style="display: none; margin-top: 25.5px;">
<!--a id="movefazter"  data-target="#static2" data-toggle="modal" href="#static2" class="config"></a>
<div id="static2" class="modal fade" tabindex="-1" data-backdrop="static" data-keyboard="false" data-attention-animation="false" aria-hidden="true" style="display: none; margin-top: 25.5px;"-->
							<form id="Upload" action="uploadcandidate.php" method="post" enctype="multipart/form-data">
								<div class="modal-dialog">
									<div class="modal-content">
										<div class="modal-header">
											<button type="button" class="close" data-dismiss="modal" aria-hidden="true"></button>
											<h4 class="modal-title">Register Candidate</h4>
										</div>
										<div class="modal-body">
											<div class="scroller" style="height:300px" data-always-visible="1" data-rail-visible1="1">
												<div class="row">
													
													<div class="col-md-12">
													<div class="col-md-5">
													
														<div class="row">
						
														<div id="previewing" class="fileupload-new thumbnail" style="width: 200px; height: 150px;">
															<img id="blah" src="http://www.placehold.it/200x150/EFEFEF/AAAAAA&amp;text=no+image" alt="your imge"/>
														</div>
														<div id="selectImage">
															<input type="file" name="file" id="file" required />
														</div>
														
														</div>
														
													</div>
													
													<div class="col-md-7">
														
														<h4>Name</h4>
														<p>
															<input id="fullname1" name="fname" type="text" class="form-control" />
														</p>
														<h4>Course</h4>
														<p>
															<input id="course1" name="course1" type="text" class="form-control" />
														</p>
														<h4>Date</h4>
														<p>
															<input id="date1" name="date1" type="text" class="form-control" />
														</p>
														
													
													</div>
																										
														<div class="col-md-12">
														
														<h4>Partylist</h4>
														<select name="parlist" class="form-control">
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
														<select name="poslist" class="form-control">
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
								<div class="form-group">
									<label class="control-label">Platforms</label>
									<textarea name="cdetail" class="form-control col-md-12" rows="3"></textarea>
								</div>
									
										</div>
											</div>			
												</div>
												</div>
												</div>
										<div class="modal-footer">
											<button type="button" data-dismiss="modal" class="btn btn-default">Close</button>
											<input type="submit" value="upload" class="btn btn-default" name="Submit"/>
										</div>
									</div>
								</div>
						</form>
</div>

<a id="csv" href="#modal_uploadcsv" data-toggle="modal" class="config"></a>
<div class="modal fade" id="modal_uploadcsv" tabindex="-1" role="dialog"  data-backdrop="static" data-keyboard="false" aria-labelledby="myModalLabel" aria-hidden="true">
<!--a id="movefazter"  data-target="#static2" data-toggle="modal" href="#static2" class="config"></a>
<div id="static2" class="modal fade" tabindex="-1" data-backdrop="static" data-keyboard="false" data-attention-animation="false" aria-hidden="true" style="display: none; margin-top: 25.5px;"-->
							<form id="Upload1" action="upload1.php" method="post" enctype="multipart/form-data">
								<div class="modal-dialog">
									<div class="modal-content">
										<div class="modal-header">
											<button type="button" class="close" data-dismiss="modal" aria-hidden="true"></button>
											<h4 class="modal-title">Load Students</h4>
										</div>
										<div class="modal-body">
			
													<div class="col-md-12">
													
														<div class="row">
														<label class="control-label">Upload new csv by browsing to file and clicking on Upload:</label>
														</br></br>
														<div id="selectFile">
															<input size="50" type="file" id ="uploadingcsv" name="filename" onchange="checkfile(this);" required />
														</div>
														
														</div>
																										
											</div>			
												
											
												</div>
										<div class="modal-footer">
											
											<input id="dps" type="submit" value="Upload" class="btn btn-default" name="Submit" disabled="true"/>
											<button type="button" data-dismiss="modal" class="btn btn-default">Close</button>
										</div>
									</div>
								</div>
						</form>
</div>
<script>
	function checkfile(sender)
    {
        var validExts = new Array(".csv");
        var fileExt = sender.value;
        fileExt = fileExt.substring(fileExt.lastIndexOf('.'));

        //For Indexof() -IE < 9
        if (!Array.prototype.indexOf)
        {
            Array.prototype.indexOf = function (elt /*, from*/)
            {
                var len = this.length >>> 0;
                var from = Number(arguments[1]) || 0;
                from = (from < 0) ? Math.ceil(from) : Math.floor(from);
                if (from < 0)
                    from += len;
                for (; from < len; from++)
                {
                    if (from in this && this[from] === elt)
                        return from;
                }
                return -1;
            };
        }
        if (validExts.indexOf(fileExt) < 0)
        {
            alert("Invalid file selected, valid files are of " +
               validExts.toString() + " types.");
            sender.value = '';
            return false;
        }
        else
			var btn = document.getElementById("dps");
			btn.disabled = false;
        {
            return true;
        }
}</script>

<a id="cs" href="#modal_setElection" data-toggle="modal" class="config"></a>
<div class="modal fade" id="modal_setElection" tabindex="-1" role="dialog"  data-backdrop="static" data-keyboard="false" aria-labelledby="myModalLabel" aria-hidden="true">
	<form id="Upload1" action="" method="post" enctype="multipart/form-data">
		<div class="modal-dialog">
		<div class="modal-content">
		<div class="modal-header">
			<button type="button" class="close" data-dismiss="modal" aria-hidden="true"></button>
			<h4 id="start" class="modal-title">Start Election</h4></br>
			<h4 id="stop" class="modal-title" style="display:none">Stop Election</h4></br>
				</div>
				<div id="selectFile">
				<input type="text" style="display:none" class="form-control" id="de_id">
				<input type="text" style="display:none" class="form-control" id="St">
				<button id="setstart" type="button" onclick="AjaxSet()" class="btn-success" style="width:350px; height:50px; margin-left:100px;"> <strong> <div class ="" style="font-size:25px;">Start</div></strong></button>
				<button id="setstop" type="button" style="display:none" onclick="AjaxSet()" class=" btn-success" style="width:350px; height:50px; margin-left:100px;"> <strong> <div class ="" style="font-size:25px;">Stop</div></strong></button>
				</div>
					<div class="modal-body">
					<div class="col-md-12">
					<div class="row"></div>
					</div>			
					</div>
				</div>
			</div>
		</form>
</div>

<a id="SetElectionDate" href="#modal_election" data-toggle="modal" class="config"></a>
<div class="modal fade" id="modal_election" tabindex="-1" role="dialog"  data-backdrop="static" data-keyboard="false" aria-labelledby="myModalLabel" aria-hidden="true">
<!--div class="modal fade" id="modal_account" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true"-->
				<div class="modal-dialog">
					<div class="modal-content">
						<div class="modal-header">
							<button type="button" class="close" data-dismiss="modal" aria-hidden="true"></button>
							<h4 class="modal-title">Set Election Date</h4>
						</div>
						<div class="modal-body">
							<div class="row">
				<div class="form-group">
										<label class="control-label col-md-3">Calendar</label>
										<div class="col-md-3">
											<div class="input-group input-medium date date-picker" data-date-format="mm-dd-yyyy" data-date-start-date="+0d">
												<input id="ed" type="text" class="form-control" readonly>
												<span class="input-group-btn">
													<button class="btn btn-default" type="button"><i class="fa fa-calendar"></i></button>
												</span>
											</div>
											<!-- /input-group -->
											<span class="help-block">
												 Select date
											</span>
										</div>
				</div>
							</div>
						</div>
						<div class="modal-footer">
							<button type="button" onclick="AjaxElecDate()" class="btn btn-success"> Add </button>
							<button id="clos1" type="button" class="btn btn-default" data-dismiss="modal"> Close </button>
						</div>
					</div>
					<!-- /.modal-content -->
				</div>
				<!-- /.modal-dialog -->
</div> 

<a id="SetElection" href="#modal_Setelection" data-toggle="modal" class="config"></a>
<div class="modal fade" id="modal_election" tabindex="-1" role="dialog"  data-backdrop="static" data-keyboard="false" aria-labelledby="myModalLabel" aria-hidden="true">
<!--div class="modal fade" id="modal_account" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true"-->
				<div class="modal-dialog">
					<div class="modal-content">
						<div class="modal-header">
							<button type="button" class="close" data-dismiss="modal" aria-hidden="true"></button>
							<h4 class="modal-title">Set Election Date</h4>
						</div>
						<div class="modal-body">
							<div class="row">
				<div class="form-group">
					 <button type="button" class="btn btn-default" style="background: #005599;color: #fff;background: #3EC72E;" data-dismiss="modal">back</button>
               		 <button onclick="" id="btn-save" type="button" class="btn btn-primary" style="background: #005599;color: #fff;"><i class="icon-save"></i>Proceed</button>
				</div>
							</div>
						</div>
						
					</div>
					<!-- /.modal-content -->
				</div>
				<!-- /.modal-dialog -->
</div> 


<a id="partylistCan" href="#modal_partCan" data-toggle="modal" class="config"></a>
<div class="modal fade" id="modal_partCan" tabindex="-1" role="dialog"  data-backdrop="static" data-keyboard="false" aria-labelledby="myModalLabel" aria-hidden="true">
<!--div class="modal fade" id="modal_account" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true"-->
				<div class="modal-dialog">
					<div class="modal-content">
						<div class="modal-header">
							<button type="button" class="close" data-dismiss="modal" aria-hidden="true"></button>
							<h4 class="modal-title">Parylist's Candidates</h4>
						</div>
						<div class="modal-body">
							<div class="row">
				
								<div class="col-md-12">
									<form role="form">
										<div class="form-body">
										<div class="form-group">
												<label>Select Year</label>
												<select name='poslist' class="form-control">
												<?php

														include ('connection.php');
															
														
													
														 $query1= "Select a.cand_id,b.party_name, b.party_id,c.position_name,d.acad_year,e.fullname
																			from candidates a join partylist b on a.party_id=b.party_id
																			join positions c on a.position_id=c.position_id
																			join stud_details d on d.sd_id=a.sd_id
																			join students e on e.student_id=d.student_id";
		  


		   
																		$result1=pg_query($query1);
														     
														    
																		while($row = pg_fetch_row($result1)){

																		?>  

																		<option value="<?php echo $row[4];?>"><?php echo $row[4];?></option>

																<?php

																	}

																	?>
													
												</select>
											</div>
											<div class="form-group has-success">
													<input type="text" style="display:none" class="form-control" id="aid">
													<input type="text" style="display:none" class="form-control" id="pad">
													<label class="control-label" for="inputSuccess"><strong>Parylist</strong></label></br>
													<strong><div style="margin:20"></div></strong></br>

													<label class="control-label" for="inputSuccess"><strong>President</strong></label>
													<strong><div style="margin:20"></div></strong></br>
													<label class="control-label" for="inputSuccess"><strong>Vice President</strong></label>
													<strong><div style="margin:20"></div></strong></br>
													<label class="control-label" for="inputSuccess"><strong>Senators</strong></label>
													<strong><div style="margin:20"></div></strong></br>
													<tbody>		
			
														</tbody>
													
											</div>
												
										</div>
									</form>
								</div>
							
							</div>
						</div>
						<div class="modal-footer">
							<button id="clos1" type="button" class="btn btn-default" data-dismiss="modal"> Cancel </button>
						</div>
					</div>
					<!-- /.modal-content -->
				</div>
				<!-- /.modal-dialog -->
</div> 


