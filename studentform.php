<?php include('my_modals.php'); ?>
<html lang="en" class="no-js"><!--<![endif]--><!-- BEGIN HEAD --><!-- Mirrored from www.keenthemes.com/preview/conquer/ui_tabs_accordions_navs.html by HTTrack Website Copier/3.x [XR&CO'2014], Sat, 19 Jul 2014 15:04:15 GMT --><!-- Added by HTTrack --><head><meta http-equiv="content-type" content="text/html;charset=UTF-8"><!-- /Added by HTTrack -->

<meta charset="utf-8">
<title>Voter's Module</title>
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
<!-- BEGIN THEME STYLES -->
<link href="assets/css/style-conquer.css" rel="stylesheet" type="text/css">
<link href="assets/css/style.css" rel="stylesheet" type="text/css">
<link href="assets/css/style-responsive.css" rel="stylesheet" type="text/css">
<link href="assets/css/plugins.css" rel="stylesheet" type="text/css">
<link href="assets/css/themes/default.css" rel="stylesheet" type="text/css" id="style_color">
<link href="assets/css/custom.css" rel="stylesheet" type="text/css">
<script src="my_ajax.js" type="text/javascript"></script>
<!-- END THEME STYLES -->
<link rel="shortcut icon" href="favicon.html">
</head>
<!-- END HEAD -->
<!-- BEGIN BODY -->
<body class="page-header-fixed">
<!-- BEGIN HEADER -->
<div class="header navbar navbar-inverse navbar-fixed-top">
	<!-- BEGIN TOP NAVIGATION BAR -->
	<div class="header-inner">
		<!-- BEGIN LOGO -->
		<a class="navbar-brand" href="">
		<img src="assets/img/logomsu.png" alt="logo">
		</a>
		
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
				<img alt="" src="assets/img/avatar3_small.jpg">
				<span class="username">
					 Nick
				</span>
				<i class="fa fa-angle-down"></i>
				</a>
				<ul class="dropdown-menu">
					<li>
						<a href="extra_profile.html"><i class="fa fa-user"></i> My Profile</a>
					</li>
					<li>
						<a href="page_calendar.html"><i class="fa fa-calendar"></i> My Calendar</a>
					</li>
					<li>
						<a href="inbox.html"><i class="fa fa-envelope"></i> My Inbox
						<span class="badge badge-danger">
							 3
						</span>
						</a>
					</li>
					<li>
						<a href="#"><i class="fa fa-tasks"></i> My Tasks
						<span class="badge badge-success">
							 7
						</span>
						</a>
					</li>
					<li class="divider">
					</li>
				
				<li>
					<a href="login.html"><i class="fa fa-key"></i> Log Out</a>
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
			
			<!-- END SIDEBAR MENU -->
		</div>
	</div>
</div>
<!-- END SIDEBAR -->
<!-- BEGIN CONTENT -->
<div class="page-content-wrapper">
	<div class="page-content-wrapper">
		<div class="page-content2">
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
		
			<br><br><br>
			<div class="row">
				
				<div class="col-md-12">
					
					<div class="portlet">
						<div class="portlet-title">
							<div class="caption">
								<i class="fa fa-reorder"></i>Candidates
							</div>
							<div class="tools">
							
								<a href="javascript:;" class="collapse"></a>
								<a href="#portlet-config" data-toggle="modal" class="config"></a>
								<a href="javascript:;" class="reload"></a>
								
							</div>
						</div>
						<div class="portlet-body">
							<div class="panel-group accordion" id="accordion1">
								
								
								<?php
									include ('loadpositions.php');
								?>
									
									
						
								
								
								
							
						</div></br>
					<button type="button" style=" margin-left:1100px;" class="btn btn-primary">submit</a>

					</div>
					<!-- END ACCORDION PORTLET-->
					<!-- BEGIN ACCORDION PORTLET-->
					<!-- END ACCORDION PORTLET-->
				</div>
			</div>
			
			<!-- END PAGE CONTAINER-->
		</div>
		<!-- BEGIN CONTENT -->
		<div class="page-content-wrapper">
			<div class="page-content-wrapper">
			</div>
			<!-- END CONTAINER -->
			<!-- BEGIN FOOTER -->
			<div class="footer">
				<div class="footer-inner">

					 2014 © MSUNovs by Cuatro Mujeres.
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
<![endif]--><script src="my_ajax.js" type="text/javascript"></script>
			<script src="dhan.js" type="text/javascript"></script>
			<script type="text/javascript" async="" src="http://stats.g.doubleclick.net/dc.js"></script><script src="assets/plugins/jquery-1.10.2.min.js" type="text/javascript"></script>
			<script src="assets/plugins/jquery-migrate-1.2.1.min.js" type="text/javascript"></script>
			<script src="assets/plugins/bootstrap/js/bootstrap.min.js" type="text/javascript"></script>
			<script src="assets/plugins/bootstrap-hover-dropdown/twitter-bootstrap-hover-dropdown.min.js" type="text/javascript"></script>
			<script src="assets/plugins/jquery-slimscroll/jquery.slimscroll.min.js" type="text/javascript"></script>
			<script src="assets/plugins/jquery.blockui.min.js" type="text/javascript"></script>
			<script src="assets/plugins/jquery.cokie.min.js" type="text/javascript"></script>
			<script src="assets/plugins/uniform/jquery.uniform.min.js" type="text/javascript"></script>
			<!-- END CORE PLUGINS -->
			<!-- BEGIN PAGE LEVEL SCRIPTS -->
			<script src="assets/scripts/app.js"></script>
			<script src="my_ajax.js" type="text/javascript"></script>
			<script src="assets/scripts/table-editable.js"></script>
			<!-- END PAGE LEVEL SCRIPTS -->
			<script>

jQuery(document).ready(function() {       
   // initiate layout and plugins
   App.init();
});
			</script>
			<!-- END JAVASCRIPTS -->
			<script type="text/javascript">  var _gaq = _gaq || [];  _gaq.push(['_setAccount', 'UA-37564768-1']);  _gaq.push(['_setDomainName', 'keenthemes.com']);  _gaq.push(['_setAllowLinker', true]);  _gaq.push(['_trackPageview']);  (function() {    var ga = document.createElement('script'); ga.type = 'text/javascript'; ga.async = true;    ga.src = ('https:' == document.location.protocol ? 'https://' : 'http://') + 'stats.g.doubleclick.net/dc.js';    var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(ga, s);  })();</script>
			
			<!-- END BODY -->
			
<!-- Mirrored from www.keenthemes.com/preview/conquer/ui_tabs_accordions_navs.html by HTTrack Website Copier/3.x [XR&CO'2014], Sat, 19 Jul 2014 15:04:15 GMT -->
</div></div></div></div></body></html>