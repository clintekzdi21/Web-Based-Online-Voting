<?php
    session_start();
   
   if (!isset($_SESSION['username']))
        {
            header('Location: loginVoter.php');
        }
?>

<html lang="en" class="no-js">
<head>
<meta http-equiv="content-type" content="text/html;charset=UTF-8">
<title>Voter's Module</title>
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
<link rel="stylesheet" href="assets/jquery.mobile-1.4.2/jquery.mobile-1.4.2.css">

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
		<a class="navbar-brand" href="voterhome.html">
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
				<span id="current_user" class="username">
				</span>
				<i class="fa fa-angle-down"></i>
				</a>
				<ul class="dropdown-menu">
					
				<li>
					<a href="javascript:logout()"><i class="fa fa-key"></i> Log Out</a>
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
				<li class="home">
					<a href="#"><i class="fa fa-home"></i>
						<span class="title">HOME</span>
					</a>
				</li>
			
			<li class="">
				<a href="javascript:;">
						<span class="title">Candidate Position</span>
						<span class="arrow open"></span>
					</a>
				<ul class="sub-menu" data-role="listview" id="lstPositions"></ul>
			</li>
			</ul>

			<a href="javascript:previewBallot()" style= "width:215;color: #fff;"class="btn btn-primary">Submit Ballot</a>
			<a href="javascript:clearballot();" style= "width:215;color: #fff;background: #3EC72E;"class="btn btn-primary">Clear Ballot</a>
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
		
		<div id="headerContent" class="alert alert-success">
								<strong><div style="font-size:35px">WELCOME!</div></strong>
							</div>
							
						<!--	<ul class="page-breadcrumb breadcrumb">
						<li>
							<i class="fa fa-home"></i>
							<a href="index.php">Home</a>
							<i class="fa fa-angle-right"></i>
						</li>
					</ul>-->

					
					<div class="portlet">
						<div class="portlet-title">
							<div class="caption">
								<i class="fa fa-group"></i><p id="lblPosition" style="width: 125px;"></p>
							</div>
							<div class="tools">
								<a href="javascript:;" class="collapse"></a>
								
							</div>
						</div>
						<div id="mainContent" class="portlet-body">
							<ul class="nav nav-tabs">
								<li class="active">
									<a href="#tab_1_1" data-toggle="tab">Home</a>
								</li>
							</ul>
							<div class="tab-content">
								<div class="tab-pane fade active in" id="tab_1_1">
									
										 <img alt="" style="margin-left:230px;" src="assets/img/logo1.jpg">
										 <img alt="" style="margin-left:50px;" src="assets/img/ssc.jpg">

										 </br>
										  </br><div style="margin-left:375px;">Mindanao State University at Naawan</div><div style="margin-left:390px;">SUPREME STUDENT COUNCIL</div>
										 <div style="margin-left:170px; font-size:50px;"><strong> WEB BASED VOTING SYSTEM</strong></div>
								</div>
								<div class ="tab-pane fade" id="tab_1_3">
								</div>
							</div>
						</div>
						<div id="listofCandidates" class="row hidden" style= "width:1100px; height:400px; overflow-y:scroll;">
							<div class="col-md-12">
							<div id="headerContent" class="alert alert-success">
					<div style="font-size:15px">Note: Click the picture of your chosen candidate.</div></div>
								<div id="candidatesContent" class="row">

								</div>
							</div>
						</div>

					</div>

					<div class="footer" style="position: fixed;border: 1px solid #DDC7C7;width:100%;  margin-left: -30px;overflow: scroll;
overflow-y: hidden;" >
						<h4>Selected Candidates</h4>
						<div class="row">
							<div class="col-md-12" id="my_ballot">
							</div>
						</div>
					</div>		
	</div>
</div>
<!-- END CONTENT -->
</div>
<!-- END CONTAINER -->
<!-- BEGIN FOOTER -->


<div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-body">
                <div class="row">
                    <div class="col-sm-12">
                        <div class="box">
                            <div class="box-header blue-background">
                                <div class="title">Preview Candidates</div>
                                <div class="actions">
                                    <a class="btn box-remove btn-xs btn-link" href="#">
                                    </a>

                                    </a>
                                </div>
                            </div>

                            <div class="box-content">
                                <div id="previewcandidates"></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-default" style="background: #005599;color: #fff;background: #3EC72E;" data-dismiss="modal">Back</button>
                <button onclick="javascript:proceddbutton();" id="btn-save" type="button" class="btn btn-primary" style="background: #005599;color: #fff;"><i class="icon-save"></i>Proceed</button>
            </div>
        </div>
        <!-- /.modal-content -->
    </div>
    <!-- /.modal-dialog -->
</div>

<div class="modal fade" id="myDet" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-body">
                <div class="row">
                    <div class="col-sm-12">
                        <div class="box">
                            <div class="box-header blue-background">
                                <div class="title"></div>
                                <div class="actions">
                                    <a class="btn box-remove btn-xs btn-link" href="#">
                                    </a>

                                    </a>
                                </div>
                            </div>
                            
										
                            <div class="box-content">
                                <div id="candidatesdet">
                                	
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-default" style="background: #005599;color: #fff;background: #3EC72E;" data-dismiss="modal">Close</button>
            </div>
        </div>
        <!-- /.modal-content -->
    </div>
    <!-- /.modal-dialog -->
</div>

<div class="modal fade" id="proceedmodal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-body">
                <div class="row">
                    <div class="col-sm-12">
                        <div class="box">
                            <div class="box-header blue-background">
                                <div class="title">Confirmation</div>
                                <div class="actions">
                                    <a class="btn box-remove btn-xs btn-link" href="#">
                                    </a>

                                    </a>
                                </div>
                            </div>
                            <div class="box-content">
                                <p>You are about to submit the ballot. Please click Proceed button to continue.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-default" style="background: #005599;color: #fff;background: #3EC72E;" data-dismiss="modal">back</button>
                <button onclick="javascript:submit_ballot();" id="btn-save" type="button" class="btn btn-primary" style="background: #005599;color: #fff;"><i class="icon-save"></i>Proceed</button>
            </div>
        </div>
        <!-- /.modal-content -->
    </div>
    <!-- /.modal-dialog -->
</div>


<!-- /.modal -->

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
<script src="my_ajax.js"></script>
<!--script src="assets/scripts/my_ajax.js"></script>
<script src="assets/scripts/gamerz.js"></script-->
<script src="assets/jquery.mobile-1.4.2/jquery.mobile-1.4.2.js"></script>
<script type="text/javascript" src="votersfolder/js/ballot.js"></script>

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