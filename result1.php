 <?php
    session_start();
   
   if (!isset($_SESSION['username']))
        {
            header('Location: login.php');
        }
?>

<?php include('my_modals.php'); ?>
<!DOCTYPE html>
<html lang="en" class="no-js">
<meta http-equiv="content-type" content="text/html;charset=UTF-8" />
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
						<span class="title">Main</span>
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
							<a href="partyists.php">Partylist</a>
						</li>
						<li>
							<a href="candidates.php">Candidates</a>
						</li>
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
							<a href="#modal_college" data-toggle="modal" class="config">College</a>
						</li>
						<li>
							<a href="#modal_course" data-toggle="modal" class="config">Course</a>
						</li>
						<li>
							<a href="#modal_partylists" data-toggle="modal" class="config">Partlist</a>
						</li>
						<li>
							<a href="#modal_position" data-toggle="modal" class="config">Position</a>
						</li>
						<li>
							<a href="#modal_Student" data-toggle="modal" class="config">Student</a>
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
						<!-- <li>
							<a href="result.php">Result</a>
						</li> -->
						<li>
							<a href="resultV.php">Students Didn't Voted</a>
						</li>
						<li>
							<a href="resVoted.php">Students Voted</a>
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
			<div class="row hidden-print">
				<div class="col-md-12">
					<a  onclick="myFunction()" class="btn btn-lg btn-info hidden-print" " style="margin-left:950px;">Print <i class="fa fa-print"></i></a> 
					<!-- BEGIN PAGE TITLE & BREADCRUMB-->
					<h3 class="page-title">
					<strong>Result</strong>
					</h3>
					<!-- END PAGE TITLE & BREADCRUMB-->
				</div>
			<!-- END SAMPLE PORTLET CONFIGURATION MODAL FORM-->
			</div>
			<!-- END PAGE HEADER-->
			<!-- BEGIN PAGE CONTENT-->
				<div class="row">
				<div class="col-xs-4">
				<img alt="" style="margin-left:170px;" src="assets/img/print.jpg"></div>
					<div class="col-xs-6">	
						<h6>Mindanao State University at Naawan</h6>
						<ul class="list-unstyled">
						<h6>Zone 6, Poblacion Naawan Misamis Oriental</h6>
							</ul>							
					<?php
						$expiration = "Select current_date";
						$results = pg_query($expiration);
						$row=pg_fetch_row($results);						
					?>
					<ul class="list-unstyled">
						<strong>OFFICIAL ELECTION RESULTS</strong></br>
						<strong>    Election Year     (<strong> <?php echo("  " +$row[0]-1);?> </strong>-<strong> <?php echo("  " +$row[0]);?> </strong>)</strong>	
					</ul>
					</div>	
				</div>
				<hr/>
				<div class="row">
					<div class="col-xs-12">
						<table class="table table-striped table-hover">
						<thead>
						<tr>
						<strong><ul style="font-size:20px;">President</ul></strong> 
							<th>
								
							</th>
							<th width="45%">
								 Name
							</th>
							<th width="25%">
								 Partylist
							</th>
							<th width="25%">
								 Number Of Votes
							</th>
						</tr>
						</thead>
						<tbody>
							<?php
								include('result2.php');
							?>
						</tbody>
						</table>
					
						<table class="table table-striped table-hover">
						<thead>
						<tr>
						<strong><ul style="font-size:20px;">Vice President</ul></strong> 
							<th>
								
							</th>
							<th width="45%">
								 Name
							</th>
							<th width="25%">
								 Partylist
							</th>
							<th width="25%">
								 Number Of Votes
							</th>
						</tr>
						</thead>
						<tbody>
							<?php
								include('result3.php');
							?>
						</tbody>
						</table>

						<table class="table table-striped table-hover">
						<thead>
						<tr>
						<strong><ul style="font-size:20px;">Senators</ul></strong> 
							<th>
								
							</th>
							<th width="45%">
								 Name
							</th>
							<th width="25%">
								 Partylist
							</th>
							<th width="25%">
								 Number Of Votes
							</th>
						</tr>
						</thead>
						<tbody>
							<?php
								include('result4.php');
							?>
						</tbody>
						</table>
				</div>
				</div>
			<br><br><br>
			
<!-- END CONTAINER -->

<div class="footer">
<div class="footer-inner">
Printed By: 
	<?php echo $_SESSION['own']?>
	<br>
	Date Printed: 
	<?php 
	$date="Select now()";
	$result = pg_query($date);
	$row=pg_fetch_row($result);
	echo $row[0];
	?>
</div>

<div class="footer-tools">
	<span class="go-top">
		<i class="fa fa-angle-up"></i>
	</span>
</div>
</div>
<!-- END FOOTER
<!-- BEGIN JAVASCRIPTS(Load javascripts at bottom, this will reduce page load time) -->
<!-- BEGIN CORE PLUGINS -->
<!--[if lt IE 9]>
<script src="assets/plugins/respond.min.js"></script>
<script src="assets/plugins/excanvas.min.js"></script> 
<![endif]-->
<script>
function myFunction() {
    window.print();
}
</script>
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
<script src="assets/scripts/app.js"></script>
<script src="assets/scripts/table-editable.js"></script>
<script src="my_ajax.js"></script>
<script src="gamerz.js"></script>
<script type="text/javascript" src="votersfolder/js/report.js"></script>

<script>
jQuery(document).ready(function() {       
   App.init();
   TableEditable.init();
});
</script>
<script type="text/javascript">  var _gaq = _gaq || [];  _gaq.push(['_setAccount', 'UA-37564768-1']);  _gaq.push(['_setDomainName', 'keenthemes.com']);  _gaq.push(['_setAllowLinker', true]);  _gaq.push(['_trackPageview']);  (function() {    var ga = document.createElement('script'); ga.type = 'text/javascript'; ga.async = true;    ga.src = ('https:' == document.location.protocol ? 'https://' : 'http://') + 'stats.g.doubleclick.net/dc.js';    var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(ga, s);  })();</script></body>
<!-- END BODY -->

<!-- Mirrored from www.keenthemes.com/preview/conquer/table_editable.html by HTTrack Website Copier/3.x [XR&CO'2014], Sat, 19 Jul 2014 15:07:31 GMT -->
</html>