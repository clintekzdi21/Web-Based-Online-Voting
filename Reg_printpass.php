<?php
    session_start();
   
   if (!isset($_SESSION['username']))
        {
            header('Location: Reg_login.php');
        }
?>

<?php include('my_modals.php'); ?>
<!DOCTYPE html>
<html lang="en" class="no-js">
<meta http-equiv="content-type" content="text/html;charset=UTF-8" />
<head>
<meta charset="utf-8"/>
<title>Print Account</title>
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
		<!-- <a href="javascript:;" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
		<img src="assets/img/menu-toggler.png" alt=""/>
		</a> -->
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
			<!-- <li class="dropdown user">
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
		</li> -->
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
<div class="page-container" style="margin-right:80px; margin-left:30px">
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
				<!-- </li>
				<li class="">
					<a href="RegisterVoter.php"><i class="fa fa-th"></i>
						<span class="title" style="color: #fff; font-size: 20px" >Back</span>
					</a>
				</li> -->

				<!-- <li class="">
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
							<a href="candidate.php">Candidate</a>
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
							<a href="resultV.php">Students Didn't Voted</a>
						</li>
						<li>
							<a href="resVoted.php">Students Voted</a>
						</li>
						<li>
							<a href="percentage_rep.php">Percentage Rate</a>
						</li>
						
						</ul> -->
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
			<div class="col-xs-12">
						<br>
						<a  onclick="myFunction()" class="btn btn-lg btn-info hidden-print" " style="margin-left:800px;">Print <i class="fa fa-print"></i></a> 
					</div>
			<div class="row hidden-print">
				<div class="col-md-12">
					<!-- BEGIN PAGE TITLE & BREADCRUMB-->
					<h3 class="page-title">
					<strong>Print Account</strong>
					</h3>
					<!-- END PAGE TITLE & BREADCRUMB-->
				</div>
			<!-- END SAMPLE PORTLET CONFIGURATION MODAL FORM-->
			
			</div>
			<!-- END PAGE HEADER-->
			<!-- BEGIN PAGE CONTENT-->
			<div class="invoice">
			<div class="row">
				<div class="col">
				<div class="PrintPass" style= "margin-left:50px; font-size:20px;">
					Username: 
					<?php echo $_SESSION['idnum']?>
					<br>
					Password: 
					<?php echo $_SESSION['pass']?>
					<br>
					Validity: valid until 
					<?php echo $_SESSION['expire']?>
				</div>
					<div class="col-xs-6">	
						<ul class="list-unstyled"></ul>
							
					
<div class="footer">
<div class="footer-inner"></div>
</div>
<script>
function myFunction() {
    window.print();
}
</script>
<!-- END FOOTER
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