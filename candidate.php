<?php
    session_start();
   
   if (!isset($_SESSION['username']))
        {
            header('Location: login.php');
        }
?>

<?php include('my_modals.php'); ?>
<!DOCTYPE html>
<!-- 
Template Name: Conquer - Responsive Admin Dashboard Template build with Twitter Bootstrap 3.0.3
Version: 1.5.2
Author: KeenThemes
Website: http://www.keenthemes.com/
Purchase: http://themeforest.net/item/conquer-responsive-admin-dashboard-template/3716838?ref=keenthemes
-->
<!--[if IE 8]> <html lang="en" class="ie8 no-js"> <![endif]-->
<!--[if IE 9]> <html lang="en" class="ie9 no-js"> <![endif]-->
<!--[if !IE]><!-->
<html lang="en" class="no-js">
<!--<![endif]-->
<!-- BEGIN HEAD -->

<!-- Mirrored from www.keenthemes.com/preview/conquer/table_editable.html by HTTrack Website Copier/3.x [XR&CO'2014], Sat, 19 Jul 2014 15:07:29 GMT -->
<!-- Added by HTTrack --><meta http-equiv="content-type" content="text/html;charset=UTF-8" /><!-- /Added by HTTrack -->
<head>
<meta charset="utf-8"/>
<title>Candidate</title>
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta content="width=device-width, initial-scale=1.0" name="viewport"/>
<meta content="" name="description"/>
<meta content="" name="author"/>
<meta name="MobileOptimized" content="320">
<!-- BEGIN GLOBAL MANDATORY STYLES -->
<link href="assets/plugins/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css"/>
<link href="assets/plugins/bootstrap/css/bootstrap.min.css" rel="stylesheet" type="text/css"/>
<link href="assets/plugins/uniform/css/uniform.default.css" rel="stylesheet" type="text/css"/>
<!-- END GLOBAL MANDATORY STYLES -->
<!-- BEGIN PAGE LEVEL STYLES -->
<link rel="stylesheet" type="text/css" href="assets/plugins/select2/select2_conquer.css"/>
<link rel="stylesheet" href="assets/plugins/data-tables/DT_bootstrap.css"/>
<!-- END PAGE LEVEL STYLES -->
<!-- BEGIN THEME STYLES -->
<link href="assets/css/style-conquer.css" rel="stylesheet" type="text/css"/>
<link href="assets/css/style.css" rel="stylesheet" type="text/css"/>
<link href="assets/css/style-responsive.css" rel="stylesheet" type="text/css"/>
<link href="assets/css/plugins.css" rel="stylesheet" type="text/css"/>
<link href="assets/css/themes/default.css" rel="stylesheet" type="text/css" id="style_color"/>
<link href="assets/css/custom.css" rel="stylesheet" type="text/css"/>
<!-- END THEME STYLES -->
<link rel="shortcut icon" href="favicon.html"/>
</head>
<!-- END HEAD -->
<!-- BEGIN BODY -->
<body class="page-header-fixed">
<!-- BEGIN HEADER -->
<div class="header navbar navbar-inverse navbar-fixed-top">
	<!-- BEGIN TOP NAVIGATION BAR -->
	<div class="header-inner">
		<!-- BEGIN LOGO -->
		<a class="navbar-brand" href="index.php">
		<img src="assets/img/logomsu.png" alt="logo" class="img-responsive"/>
		</a>
		
		<!-- END LOGO -->
		<!-- BEGIN RESPONSIVE MENU TOGGLER -->
		<a href="javascript:;" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
		<img src="assets/img/menu-toggler.png" alt=""/>
		</a>
		<!-- END RESPONSIVE MENU TOGGLER -->
		<!-- BEGIN TOP NAVIGATION MENU -->
		<ul class="nav navbar-nav pull-right">
			<!-- BEGIN NOTIFICATION DROPDOWN -->
			
			<!-- END NOTIFICATION DROPDOWN -->
			<!-- BEGIN INBOX DROPDOWN -->
			
			<!-- END INBOX DROPDOWN -->
			<!-- BEGIN TODO DROPDOWN -->
			
			<!-- END TODO DROPDOWN -->
			<li class="devider">
				 &nbsp;
			</li>
			<!-- BEGIN USER LOGIN DROPDOWN -->
			<li class="dropdown user">
				<a href="#" class="dropdown-toggle" data-toggle="dropdown" data-hover="dropdown" data-close-others="true">
				<img alt="" src=""/>
				<span class="username">
					 <?php echo $_SESSION['own']?>
				</span>
				<i class="fa fa-angle-down"></i>
				</a>
				<ul class="dropdown-menu">
					
				<li>
					<a href="ADMINLogout.php"><i class="fa fa-key"></i> Log Out</a>
				</li>
			</ul>
		</li>
		<!-- END USER LOGIN DROPDOWN -->
	</ul>
	<!-- END TOP NAVIGATION MENU -->
</div>
<!-- END TOP NAVIGATION BAR -->
</div>
<!-- END HEADER -->
<div class="clearfix">
</div>
<!-- BEGIN CONTAINER -->
<div class="page-container">
<!-- BEGIN SIDEBAR -->
<div class="page-sidebar-wrapper">
	<div class="page-sidebar-wrapper">
		<div class="page-sidebar navbar-collapse collapse">
			<!-- BEGIN SIDEBAR MENU -->
			<ul class="page-sidebar-menu">
				<li class="sidebar-toggler-wrapper">
					<!-- BEGIN SIDEBAR TOGGLER BUTTON -->
					<div class="sidebar-toggler">
					</div>
					<div class="clearfix">
					</div>
					<!-- BEGIN SIDEBAR TOGGLER BUTTON -->
				</li>
				<li class="">
					<a href="index.php"><i class="fa fa-th"></i>
						<span class="title">HOME</span>
					</a>
				</li>
				<li class="">
					<a href="#modal_uploadcsv" data-toggle="modal" class="config">
					<i class="fa fa-bar-chart-o"></i>
					<span class="title">
						Load Students
					</span>
					</a>
				</li>


				<li class="">
					<a href="javascript:;">
					<i class="fa fa-map-marker"></i>
					<span class="title">
						View
					</span>
					<span class="arrow ">
					</span>
					</a>
					<ul class="sub-menu">
					<li>
							<a href="accounts.php">Accounts</a>
						</li>
						<li>
							<a href="students.php">Students</a>
						</li>
						<li>
							<a href="college.php">College</a>
						</li>
						<li>
							<a href="course.php">Course</a>
						</li>
						<li>
							<a href="position.php">Position</a>
						</li>
						<li>
							<a href="partylists.php">Partylist</a>
						</li>
						<!--<li>
							<a href="candidate.php">Candidates</a>
						</li>-->
						<li>
							<a href="election.php">Election Date</a>
						</li>
					</ul>
				</li>
				
				<li class="">
					<a href="#modal_election" data-toggle="modal" class="config"><i class="fa fa-calendar"></i>
						<span class="title">Set Election Date</span>
					</a>
				</li>
				<li class="">
					<a href="javascript:;">
					<i class="fa fa-plus-circle"></i>
					<span class="title">
						Add
					</span>
					<span class="arrow ">
					</span>
					</a>
					<ul class="sub-menu">
						<li>
							<a href="#modal_college" data-toggle="modal" class="config">Colleges</a>
						</li>
						<li>
							<a href="#modal_course" data-toggle="modal" class="config">Courses</a>
						</li>

						<li>
							<a href="#modal_Student" data-toggle="modal" class="config">Students</a>
						</li>

						<li>
							<a href="#modal_partylists" data-toggle="modal" class="config">Partylist</a>
						</li>
						<li>
							<a href="#modal_position" data-toggle="modal" class="config">Positions</a>
						</li>						
						<li>
							<a href="cadidates.php">Candidate</a>
						</li>
					</ul>
				</li>
				
				<li class="last ">
					<a href="GeneratePass.php">
					<i class="fa fa-user"></i>
					<span class="title">
						Generate Password
					</span>
					</a>
				</li>
				<li class="last ">
					<a href="javascript:;">
					<i class="fa fa-pencil-square"></i>
					<span class="title">
						Reports
					</span>
					<span class="arrow ">
					</span>
					</a>
						<ul class="sub-menu">
						<li>
							<a href="result.php">Result</a>
						</li>
						<li>
							<a href="resultV.php">Voters Didn't Voted</a>
						</li>
						<li>
							<a href="resVoted.php">Voters Voted</a>
						</li>
							<li>
							<a href="percentage_rep.php">Percentage Rate</a>
						</li>
						</ul>
				</li>
			</ul>
			<!-- END SIDEBAR MENU -->
		</div>
	</div>
</div>
<!-- END SIDEBAR -->
<!-- BEGIN CONTENT -->
<div class="page-content-wrapper">
	<div class="page-content-wrapper">
		<div class="page-content">
			<!-- BEGIN SAMPLE PORTLET CONFIGURATION MODAL FORM-->
			<div class="modal fade" id="portlet-config" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
				<div class="modal-dialog">
					<div class="modal-content">
						<div class="modal-header">
							<button type="button" class="close" data-dismiss="modal" aria-hidden="true"></button>
							<h4 class="modal-title">Modal title</h4>
						</div>
						<div class="modal-body">
							 Widget settings form goes here
						</div>
						<div class="modal-footer">
							<button type="button" class="btn btn-success">Save changes</button>
							<button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
						</div>
					</div>
					<!-- /.modal-content -->
				</div>
				<!-- /.modal-dialog -->
			</div>
			<!-- END SAMPLE PORTLET CONFIGURATION MODAL FORM-->
			<!-- BEGIN STYLE CUSTOMIZER -->
			
			<!-- END BEGIN STYLE CUSTOMIZER -->
			<!-- BEGIN PAGE HEADER-->
			<div class="row">
				<div class="col-md-12">
					<!-- BEGIN PAGE TITLE & BREADCRUMB-->
					
					<!-- END PAGE TITLE & BREADCRUMB-->
				</div>
			</div>
			<!-- END PAGE HEADER-->
			<!-- BEGIN PAGE CONTENT-->
			<br><br><br>
			<div class="row">
				<div class="col-md-12">
					<!-- BEGIN EXAMPLE TABLE PORTLET-->
					<div class="portlet">
						<div class="portlet-title">
							<div class="caption">
								<i class="fa fa-edit"></i>List of Candidates
							</div>
							<div class="tools">
								<a href="javascript:;" class="collapse"></a>
								<a href="#portlet-config" data-toggle="modal" class="config"></a>
								<a href="javascript:;" class="reload"></a>
							</div>
						</div>
						<div class="portlet-body">
							<div class="table-toolbar">
								
								<div class="btn-group pull-right">
									
									<ul class="dropdown-menu pull-right">
										<li>
											<a href="#">Print</a>
										</li>
										<li>
											<a href="#">Save as PDF</a>
										</li>
										<li>
											<a href="#">Export to Excel</a>
										</li>
									</ul>
								</div>
							</div>

					<div class="btn-group">
									<a class="btn btn-default" data-toggle="modal" href="students.php" class="config">Add New<i class=""></a>
							</div>
							
								</br></br>
							<table class="table table-striped table-hover table-bordered" id="sample_editable_1">
							<thead>
							<tr>
								<th>
									 Name
								</th>
								<th>
									 Course
								</th>
								<th>
									 PartyList
								</th>
								<th>
									 Position
								</th>
								<th style="display:none">
									 sdid
								</th>
								<th style="display:none">
									 c_details
								</th>
								<th style="display:none">
									 c_id
								</th>
								<th>
									 Edit
								</th>
								
							</tr>
							</thead>
							<tbody>
							<?php
							include ('canLoad.php');
							?>
							</tbody>
							</table>
						</div>
					</div>
					<!-- END EXAMPLE TABLE PORTLET-->
				</div>
			</div>
			<!-- END PAGE CONTENT -->
		</div>
	</div>
</div>
<!-- END CONTENT -->
</div>
<!-- END CONTAINER -->
<!-- BEGIN FOOTER -->
<div class="footer">
<div class="footer-inner">
	 2014 &copy; MSU-N Online Voting System by Cuatro Mujeres.
</div>
<div class="footer-tools">
	<span class="go-top">
		<i class="fa fa-angle-up"></i>
	</span>
</div>
</div>
<!-- END FOOTER -->
<!-- BEGIN JAVASCRIPTS(Load javascripts at bottom, this will reduce page load time) -->
<!-- BEGIN CORE PLUGINS -->
<!--[if lt IE 9]>
<script src="assets/plugins/respond.min.js"></script>
<script src="assets/plugins/excanvas.min.js"></script> 
<![endif]-->
<script src="assets/plugins/jquery-1.10.2.min.js" type="text/javascript"></script>
<script src="assets/plugins/jquery-migrate-1.2.1.min.js" type="text/javascript"></script>
<script src="assets/plugins/bootstrap/js/bootstrap.min.js" type="text/javascript"></script>
<script src="assets/plugins/bootstrap-hover-dropdown/twitter-bootstrap-hover-dropdown.min.js" type="text/javascript"></script>
<script src="assets/plugins/jquery-slimscroll/jquery.slimscroll.min.js" type="text/javascript"></script>
<script src="assets/plugins/jquery.blockui.min.js" type="text/javascript"></script>
<script src="assets/plugins/jquery.cokie.min.js" type="text/javascript"></script>
<script src="assets/plugins/uniform/jquery.uniform.min.js" type="text/javascript"></script>
<!-- END CORE PLUGINS -->
<!-- BEGIN PAGE LEVEL PLUGINS -->
<script type="text/javascript" src="assets/plugins/select2/select2.min.js"></script>
<script type="text/javascript" src="assets/plugins/data-tables/jquery.dataTables.js"></script>
<script type="text/javascript" src="assets/plugins/data-tables/DT_bootstrap.js"></script>
<!-- END PAGE LEVEL PLUGINS -->
<!-- BEGIN PAGE LEVEL SCRIPTS -->
<script src="assets/plugins/bootstrap/js/bootstrap.min.js" type="text/javascript"></script>
<script src="assets/plugins/jquery-slimscroll/jquery.slimscroll.min.js" type="text/javascript"></script>
<script src="assets/plugins/jquery.cokie.min.js" type="text/javascript"></script>

<script type="text/javascript" src="assets/plugins/fuelux/js/spinner.min.js"></script>
<script type="text/javascript" src="assets/plugins/bootstrap-datepicker/js/bootstrap-datepicker.js"></script>
<script src="assets/plugins/bootstrap-markdown/js/bootstrap-markdown.js" type="text/javascript"></script>
<script src="assets/plugins/bootstrap-maxlength/bootstrap-maxlength.min.js" type="text/javascript"></script>
<script src="assets/plugins/bootstrap-touchspin/bootstrap.touchspin.js" type="text/javascript"></script>


<script src="assets/scripts/app.js"></script>
<script src="assets/scripts/table-editable.js"></script>
<script src="my_ajax.js"></script>
<script src="gamerz.js"></script>
<script src="imgpreview.js"></script>
<script src="assets/scripts/form-components.js"></script>
<script>
jQuery(document).ready(function() {       
   App.init();
   TableEditable.init();
    FormComponents.init();
});
</script>
<script type="text/javascript">  var _gaq = _gaq || [];  _gaq.push(['_setAccount', 'UA-37564768-1']);  _gaq.push(['_setDomainName', 'keenthemes.com']);  _gaq.push(['_setAllowLinker', true]);  _gaq.push(['_trackPageview']);  (function() {    var ga = document.createElement('script'); ga.type = 'text/javascript'; ga.async = true;    ga.src = ('https:' == document.location.protocol ? 'https://' : 'http://') + 'stats.g.doubleclick.net/dc.js';    var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(ga, s);  })();</script></body>
<!-- END BODY -->

<!-- Mirrored from www.keenthemes.com/preview/conquer/table_editable.html by HTTrack Website Copier/3.x [XR&CO'2014], Sat, 19 Jul 2014 15:07:31 GMT -->
</html>