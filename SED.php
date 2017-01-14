<?php
    session_start();
   
   if (!isset($_SESSION['username']))
        {
            header('Location: login.php');
        }
?>
<?php include('my_modals.php'); ?>

<html lang="en" class="no-js"><!--<![endif]--><!-- BEGIN HEAD --><!-- Mirrored from www.keenthemes.com/preview/conquer/index.html by HTTrack Website Copier/3.x [XR&CO'2014], Sat, 19 Jul 2014 15:03:17 GMT --><!-- Added by HTTrack --><head><meta http-equiv="content-type" content="text/html;charset=UTF-8"><!-- /Added by HTTrack -->

<meta charset="utf-8">
<title>Set Election Date</title>
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta content="width=device-width, initial-scale=1.0" name="viewport">
<meta content="" name="description">
<meta content="" name="author">
<meta name="MobileOptimized" content="320">
<!-- BEGIN GLOBAL MANDATORY STYLES -->
<link href="assets/plugins/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
<link href="assets/plugins/bootstrap/css/bootstrap.min.css" rel="stylesheet" type="text/css">
<link href="assets/plugins/uniform/css/uniform.default.css" rel="stylesheet" type="text/css">
<!-- END GLOBAL MANDATORY STYLES -->
<!-- BEGIN PAGE LEVEL PLUGIN STYLES -->
<link href="assets/plugins/bootstrap-daterangepicker/daterangepicker-bs3.css" rel="stylesheet" type="text/css">
<link href="assets/plugins/fullcalendar/fullcalendar/fullcalendar.css" rel="stylesheet" type="text/css">
<link href="assets/plugins/jqvmap/jqvmap/jqvmap.css" rel="stylesheet" type="text/css">
<link href="assets/plugins/jquery-easy-pie-chart/jquery.easy-pie-chart.css" rel="stylesheet" type="text/css">
<!-- END PAGE LEVEL PLUGIN STYLES -->
<!-- BEGIN THEME STYLES -->
<link href="assets/css/style-conquer.css" rel="stylesheet" type="text/css">
<link href="assets/css/style.css" rel="stylesheet" type="text/css">
<link href="assets/css/style-responsive.css" rel="stylesheet" type="text/css">
<link href="assets/css/plugins.css" rel="stylesheet" type="text/css">
<link href="assets/css/pages/tasks.css" rel="stylesheet" type="text/css">
<link href="assets/css/themes/default.css" rel="stylesheet" type="text/css" id="style_color">
<link href="assets/css/custom.css" rel="stylesheet" type="text/css">

<!-- END THEME STYLES -->
<link rel="shortcut icon" href="favicon.html">
<style type="text/css">.jqstooltip { position: absolute;left: 0px;top: 0px;visibility: hidden;background: rgb(0, 0, 0) transparent;background-color: rgba(0,0,0,0.6);filter:progid:DXImageTransform.Microsoft.gradient(startColorstr=#99000000, endColorstr=#99000000);-ms-filter: "progid:DXImageTransform.Microsoft.gradient(startColorstr=#99000000, endColorstr=#99000000)";color: white;font: 10px arial, san serif;text-align: left;white-space: nowrap;padding: 5px;border: 1px solid white;z-index: 10000;}.jqsfield { color: white;font: 10px arial, san serif;text-align: left;}</style><style type="text/css">.jqstooltip { position: absolute;left: 0px;top: 0px;visibility: hidden;background: rgb(0, 0, 0) transparent;background-color: rgba(0,0,0,0.6);filter:progid:DXImageTransform.Microsoft.gradient(startColorstr=#99000000, endColorstr=#99000000);-ms-filter: "progid:DXImageTransform.Microsoft.gradient(startColorstr=#99000000, endColorstr=#99000000)";color: white;font: 10px arial, san serif;text-align: left;white-space: nowrap;padding: 5px;border: 1px solid white;z-index: 10000;}.jqsfield { color: white;font: 10px arial, san serif;text-align: left;}</style><style type="text/css">.jqstooltip { position: absolute;left: 0px;top: 0px;visibility: hidden;background: rgb(0, 0, 0) transparent;background-color: rgba(0,0,0,0.6);filter:progid:DXImageTransform.Microsoft.gradient(startColorstr=#99000000, endColorstr=#99000000);-ms-filter: "progid:DXImageTransform.Microsoft.gradient(startColorstr=#99000000, endColorstr=#99000000)";color: white;font: 10px arial, san serif;text-align: left;white-space: nowrap;padding: 5px;border: 1px solid white;z-index: 10000;}.jqsfield { color: white;font: 10px arial, san serif;text-align: left;}</style></head>
<!-- END HEAD -->
<!-- BEGIN BODY -->
<body class="page-header-fixed" style="">
<!-- BEGIN HEADER -->
<div class="header navbar navbar-inverse navbar-fixed-top">
	<!-- BEGIN TOP NAVIGATION BAR -->
	<div class="header-inner">
		<!-- BEGIN LOGO -->
		<a class="navbar-brand" href="index.php">
		<img src="assets/img/logomsu.png" alt="logo" class="img-responsive">
		</a>
		<form class="search-form search-form-header" role="form" action="http://www.keenthemes.com/preview/conquer/index.html">
			
		</form>
		<!-- END LOGO -->
		<!-- BEGIN RESPONSIVE MENU TOGGLER -->
		<a href="javascript:;" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
		<img src="assets/img/menu-toggler.png" alt="">
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
				<img alt="" src="">
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
					<a href="#modal_election" data-toggle="modal" class="config"><i class="fa fa-calendar"></i>
						<span class="title">Set Election Date</span>
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
						<li>
							<a href="candidate.php">Candidates</a>
						</li>
					</ul>
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
							<a href="#modal_partylists" data-toggle="modal" class="config">Partylist</a>
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
				<li class="">
					<a href="upload.php">
					<i class="fa fa-bar-chart-o"></i>
					<span class="title">
						Browse Students
					</span>
					</a>
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
					<a href="result.php">
					<i class="fa fa-pencil-square"></i>
					<span class="title">
						Result
					</span>
					</a>
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
		<div class="page-content" style="min-height:893px !important">
		<!--<img alt="" src="assets/img/sam1.png">-->
		
			<!-- END BEGIN STYLE CUSTOMIZER -->
			<!-- BEGIN PAGE HEADER-->
			
			<!-- END PAGE HEADER-->
			<!-- BEGIN OVERVIEW STATISTIC BARS-->
			
			<!-- END OVERVIEW STATISTIC BARS-->
			<!-- BEGIN PAGE HEADER-->
			
			<!-- END PAGE HEADER-->
			
			<!-- BEGIN OVERVIEW STATISTIC BLOCKS-->
			
			<!-- END OVERVIEW STATISTIC BLOCKS-->
			
			
		</div>
	</div>
</div>
<!-- END CONTENT -->
</div>
<!-- END CONTAINER -->
<!-- BEGIN FOOTER -->
<div class="footer">
<div class="footer-inner">
	 2014 © MSU-N Online Voting System by Cuatro Mujeres.
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
<script type="text/javascript" async="" src="http://stats.g.doubleclick.net/dc.js"></script><script type="text/javascript" async="" src="http://stats.g.doubleclick.net/dc.js"></script><script type="text/javascript" async="" src="http://stats.g.doubleclick.net/dc.js"></script><script src="assets/plugins/jquery-1.10.2.min.js" type="text/javascript"></script>
<script src="assets/plugins/jquery-migrate-1.2.1.min.js" type="text/javascript"></script>
<!-- IMPORTANT! Load jquery-ui-1.10.3.custom.min.js before bootstrap.min.js to fix bootstrap tooltip conflict with jquery ui tooltip -->
<script src="assets/plugins/jquery-ui/jquery-ui-1.10.3.custom.min.js" type="text/javascript"></script>
<script src="assets/plugins/bootstrap/js/bootstrap.min.js" type="text/javascript"></script>
<script src="assets/plugins/bootstrap-hover-dropdown/twitter-bootstrap-hover-dropdown.min.js" type="text/javascript"></script>
<script src="assets/plugins/jquery-slimscroll/jquery.slimscroll.min.js" type="text/javascript"></script>
<script src="assets/plugins/jquery.blockui.min.js" type="text/javascript"></script>
<script src="assets/plugins/jquery.cokie.min.js" type="text/javascript"></script>
<script src="assets/plugins/uniform/jquery.uniform.min.js" type="text/javascript"></script>
<!-- END CORE PLUGINS -->
<!-- BEGIN PAGE LEVEL PLUGINS -->
<script src="assets/plugins/jqvmap/jqvmap/jquery.vmap.js" type="text/javascript"></script>
<script src="assets/plugins/jqvmap/jqvmap/maps/jquery.vmap.russia.js" type="text/javascript"></script>
<script src="assets/plugins/jqvmap/jqvmap/maps/jquery.vmap.world.js" type="text/javascript"></script>
<script src="assets/plugins/jqvmap/jqvmap/maps/jquery.vmap.europe.js" type="text/javascript"></script>
<script src="assets/plugins/jqvmap/jqvmap/maps/jquery.vmap.germany.js" type="text/javascript"></script>
<script src="assets/plugins/jqvmap/jqvmap/maps/jquery.vmap.usa.js" type="text/javascript"></script>
<script src="assets/plugins/jqvmap/jqvmap/data/jquery.vmap.sampledata.js" type="text/javascript"></script>
<script src="assets/plugins/jquery.peity.min.js" type="text/javascript"></script>
<script src="assets/plugins/jquery.pulsate.min.js" type="text/javascript"></script>
<script src="assets/plugins/jquery-knob/js/jquery.knob.js" type="text/javascript"></script>
<script src="assets/plugins/flot/jquery.flot.js" type="text/javascript"></script>
<script src="assets/plugins/flot/jquery.flot.resize.js" type="text/javascript"></script>
<script src="assets/plugins/bootstrap-daterangepicker/moment.min.js" type="text/javascript"></script>
<script src="assets/plugins/bootstrap-daterangepicker/daterangepicker.js" type="text/javascript"></script>
<script src="assets/plugins/gritter/js/jquery.gritter.js" type="text/javascript"></script>
<!-- IMPORTANT! fullcalendar depends on jquery-ui-1.10.3.custom.min.js for drag & drop support -->
<script src="assets/plugins/fullcalendar/fullcalendar/fullcalendar.min.js" type="text/javascript"></script>
<script src="assets/plugins/jquery-easy-pie-chart/jquery.easy-pie-chart.js" type="text/javascript"></script>
<script src="assets/plugins/jquery.sparkline.min.js" type="text/javascript"></script>
<!-- END PAGE LEVEL PLUGINS -->
<!-- BEGIN PAGE LEVEL SCRIPTS -->
<script src="assets/scripts/app.js" type="text/javascript"></script>
<script src="assets/scripts/index.js" type="text/javascript"></script>
<script src="assets/scripts/tasks.js" type="text/javascript"></script>
<!-- END PAGE LEVEL SCRIPTS -->
<script src="assets/scripts/app.js"></script>
<script src="assets/scripts/table-editable.js"></script>
<script src="assets/scripts/my_ajax.js"></script>
<script src="assets/scripts/gamerz.js"></script>


<script>
jQuery(document).ready(function() {    
   App.init(); // initlayout and core plugins
   Index.init();
   Index.initJQVMAP(); // init index page's custom scripts
   Index.initCalendar(); // init index page's custom scripts
   Index.initCharts(); // init index page's custom scripts
   Index.initChat();
   Index.initMiniCharts();
   Index.initPeityElements();
   Index.initKnowElements();
   Index.initDashboardDaterange();
   Tasks.initDashboardWidget();
});
</script>
<!-- END JAVASCRIPTS -->
<script type="text/javascript">  var _gaq = _gaq || [];  _gaq.push(['_setAccount', 'UA-37564768-1']);  _gaq.push(['_setDomainName', 'keenthemes.com']);  _gaq.push(['_setAllowLinker', true]);  _gaq.push(['_trackPageview']);  (function() {    var ga = document.createElement('script'); ga.type = 'text/javascript'; ga.async = true;    ga.src = ('https:' == document.location.protocol ? 'https://' : 'http://') + 'stats.g.doubleclick.net/dc.js';    var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(ga, s);  })();</script>
<!-- END BODY -->

<!-- Mirrored from www.keenthemes.com/preview/conquer/index.html by HTTrack Website Copier/3.x [XR&CO'2014], Sat, 19 Jul 2014 15:04:00 GMT -->
<div class="jqvmap-label"></div><div class="jqvmap-label"></div><div class="jqvmap-label"></div><div class="jqvmap-label"></div><div class="jqvmap-label"></div><div class="daterangepicker dropdown-menu opensleft"><div class="calendar left"><div class="calendar-date"><table class="table-condensed"><thead><tr><th></th><th class="prev available"><i class="fa icon-arrow-left fa-angle-left"></i></th><th colspan="5" style="width: auto">June 2014</th><th class="next available"><i class="fa icon-arrow-right fa-angle-right"></i></th></tr><tr><th class="week">W</th><th>Mo</th><th>Tu</th><th>We</th><th>Th</th><th>Fr</th><th>Sa</th><th>Su</th></tr></thead><tbody><tr><td class="week">22</td><td class="available off" data-title="r0c0">26</td><td class="available off" data-title="r0c1">27</td><td class="available off" data-title="r0c2">28</td><td class="available off" data-title="r0c3">29</td><td class="available off" data-title="r0c4">30</td><td class="available off" data-title="r0c5">31</td><td class="available" data-title="r0c6">1</td></tr><tr><td class="week">23</td><td class="available" data-title="r1c0">2</td><td class="available" data-title="r1c1">3</td><td class="available" data-title="r1c2">4</td><td class="available" data-title="r1c3">5</td><td class="available" data-title="r1c4">6</td><td class="available" data-title="r1c5">7</td><td class="available" data-title="r1c6">8</td></tr><tr><td class="week">24</td><td class="available" data-title="r2c0">9</td><td class="available" data-title="r2c1">10</td><td class="available" data-title="r2c2">11</td><td class="available" data-title="r2c3">12</td><td class="available" data-title="r2c4">13</td><td class="available" data-title="r2c5">14</td><td class="available" data-title="r2c6">15</td></tr><tr><td class="week">25</td><td class="available" data-title="r3c0">16</td><td class="available" data-title="r3c1">17</td><td class="available" data-title="r3c2">18</td><td class="available" data-title="r3c3">19</td><td class="available" data-title="r3c4">20</td><td class="available" data-title="r3c5">21</td><td class="available" data-title="r3c6">22</td></tr><tr><td class="week">26</td><td class="available" data-title="r4c0">23</td><td class="available" data-title="r4c1">24</td><td class="available" data-title="r4c2">25</td><td class="available" data-title="r4c3">26</td><td class="available" data-title="r4c4">27</td><td class="available active start-date" data-title="r4c5">28</td><td class="available in-range" data-title="r4c6">29</td></tr><tr><td class="week">27</td><td class="available in-range" data-title="r5c0">30</td><td class="available off in-range" data-title="r5c1">1</td><td class="available off in-range" data-title="r5c2">2</td><td class="available off in-range" data-title="r5c3">3</td><td class="available off in-range" data-title="r5c4">4</td><td class="available off in-range" data-title="r5c5">5</td><td class="available off in-range" data-title="r5c6">6</td></tr></tbody></table></div></div><div class="calendar right"><div class="calendar-date"><table class="table-condensed"><thead><tr><th></th><th class="prev available"><i class="fa icon-arrow-left fa-angle-left"></i></th><th colspan="5" style="width: auto">July 2014</th><th class="next available"><i class="fa icon-arrow-right fa-angle-right"></i></th></tr><tr><th class="week">W</th><th>Mo</th><th>Tu</th><th>We</th><th>Th</th><th>Fr</th><th>Sa</th><th>Su</th></tr></thead><tbody><tr><td class="week">27</td><td class="available off in-range" data-title="r0c0">30</td><td class="available in-range" data-title="r0c1">1</td><td class="available in-range" data-title="r0c2">2</td><td class="available in-range" data-title="r0c3">3</td><td class="available in-range" data-title="r0c4">4</td><td class="available in-range" data-title="r0c5">5</td><td class="available in-range" data-title="r0c6">6</td></tr><tr><td class="week">28</td><td class="available in-range" data-title="r1c0">7</td><td class="available in-range" data-title="r1c1">8</td><td class="available in-range" data-title="r1c2">9</td><td class="available in-range" data-title="r1c3">10</td><td class="available in-range" data-title="r1c4">11</td><td class="available in-range" data-title="r1c5">12</td><td class="available in-range" data-title="r1c6">13</td></tr><tr><td class="week">29</td><td class="available in-range" data-title="r2c0">14</td><td class="available in-range" data-title="r2c1">15</td><td class="available in-range" data-title="r2c2">16</td><td class="available in-range" data-title="r2c3">17</td><td class="available in-range" data-title="r2c4">18</td><td class="available in-range" data-title="r2c5">19</td><td class="available in-range" data-title="r2c6">20</td></tr><tr><td class="week">30</td><td class="available in-range" data-title="r3c0">21</td><td class="available in-range" data-title="r3c1">22</td><td class="available in-range" data-title="r3c2">23</td><td class="available in-range" data-title="r3c3">24</td><td class="available in-range" data-title="r3c4">25</td><td class="available in-range" data-title="r3c5">26</td><td class="available active end-date" data-title="r3c6">27</td></tr><tr><td class="week">31</td><td class="available" data-title="r4c0">28</td><td class="available" data-title="r4c1">29</td><td class="available" data-title="r4c2">30</td><td class="available" data-title="r4c3">31</td><td class="available off" data-title="r4c4">1</td><td class="available off" data-title="r4c5">2</td><td class="available off" data-title="r4c6">3</td></tr><tr><td class="week">32</td><td class="available off" data-title="r5c0">4</td><td class="available off" data-title="r5c1">5</td><td class="available off" data-title="r5c2">6</td><td class="available off" data-title="r5c3">7</td><td class="available off" data-title="r5c4">8</td><td class="available off" data-title="r5c5">9</td><td class="available off" data-title="r5c6">10</td></tr></tbody></table></div></div><div class="ranges"><ul><li>Today</li><li>Yesterday</li><li>Last 7 Days</li><li class="active">Last 30 Days</li><li>This Month</li><li>Last Month</li><li>Custom Range</li></ul><div class="range_inputs"><div class="daterangepicker_start_input" style="float: left"><label for="daterangepicker_start">From</label><input class="input-mini" type="text" name="daterangepicker_start" value="" disabled="disabled"></div><div class="daterangepicker_end_input" style="float: left; padding-left: 11px"><label for="daterangepicker_end">To</label><input class="input-mini" type="text" name="daterangepicker_end" value="" disabled="disabled"></div><button class="btn-success applyBtn btn">Apply</button>&nbsp;<button class="btn-default cancelBtn btn">Cancel</button></div></div></div><div class="jqvmap-label"></div><div class="jqvmap-label"></div><div class="jqvmap-label"></div><div class="jqvmap-label"></div><div class="jqvmap-label"></div><div class="jqvmap-label"></div><div class="jqvmap-label"></div><div class="jqvmap-label"></div><div class="jqvmap-label"></div><div class="jqvmap-label"></div></body></html>