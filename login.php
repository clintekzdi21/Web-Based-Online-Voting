<?php
    include('votingADMINLogin.php'); 

    if(isset($_SESSION['username']))
        {
            header('Location: index.php');
        }
?>
<!DOCTYPE html>

<html lang="en" class="no-js">

<head>
<meta charset="utf-8"/>
<title>MSU-N | Login</title>
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
<!-- END PAGE LEVEL SCRIPTS -->
<!-- BEGIN THEME STYLES -->
<link href="assets/css/style-conquer.css" rel="stylesheet" type="text/css"/>
<link href="assets/css/style.css" rel="stylesheet" type="text/css"/>
<link href="assets/css/style-responsive.css" rel="stylesheet" type="text/css"/>
<link href="assets/css/plugins.css" rel="stylesheet" type="text/css"/>
<link href="assets/css/themes/default.css" rel="stylesheet" type="text/css" id="style_color"/>
<link href="assets/css/pages/login.css" rel="stylesheet" type="text/css"/>
<link href="assets/css/custom.css" rel="stylesheet" type="text/css"/>
<!-- END THEME STYLES -->
<link rel="shortcut icon" href=""/>
</head>
<!-- BEGIN BODY -->
<body class="login">
</br></br>
<!-- BEGIN LOGO -->
<div class="logo">
	<img src="assets/img/logomsu.png" alt=""/>
</div>
<!-- END LOGO -->
<!-- BEGIN LOGIN -->
<div class="content">
	<!-- BEGIN LOGIN FORM -->
	
	<form class="login-form" method="post">
		<h3 class="form-title">Login to your account</h3>
		
		<div class="form-group">
			
			<label class="control-label">Username</label>
			<div class="input-icon">
				<i class="fa fa-user"></i>
				<input class="form-control placeholder-no-fix" type="text" autocomplete="off" placeholder="Username" name="username"/>
			</div>
		</div>
		<div class="form-group">
			<label class="control-label">Password</label>
			<div class="input-icon">
				<i class="fa fa-lock"></i>
				<input class="form-control placeholder-no-fix" type="password" autocomplete="off" placeholder="Password" name="password"/>
			</div>
		</div>
			<button type="submit" style="width:300px; height:40px; margin-left:20px; font-size:20px;" name="Login" class="btn btn-info pull-right">Login</button>

		</br></br>
		<div class="create-account">
			<?php
				include ('createAcc.php');
			?>
			<!-- <p>
				 Don't have an account yet ?&nbsp; <a href="javascript:;" id="register-btn">Create an account</a>
			</p> -->
		</div>
	</form>
	
	<form class="register-form" action="konek.php" method="post">
		<h3>Sign Up</h3>
		
		<p>
			 Enter your account details below:
		</p>
		<div class="form-group">
			<label class="control-label visible-ie8 visible-ie9">Owner's Name</label>
			<div class="input-icon">
				<i class="fa fa-user"></i>
				<input id="oname" class="form-control placeholder-no-fix" type="text" autocomplete="off" placeholder="Name" name="ownername"/>
			</div>
		</div>
		<!-- <div class="form-group">
			<label class="control-label visible-ie8 visible-ie9">Role</label>
			<div class="input-icon">
				<i class="fa fa-user"></i>
				<input id="acc_role" class="form-control placeholder-no-fix" type="text" autocomplete="off" placeholder="Role" name="role"/>
			</div>
		</div> -->
		<div class="form-group">
			<label class="control-label visible-ie8 visible-ie9">Username</label>
			<div class="input-icon">
				<i class="fa fa-user"></i>
				<input id="uname" class="form-control placeholder-no-fix" type="text" autocomplete="off" placeholder="Username" name="username"/>
			</div>
		</div>
		<div class="form-group">
			<label class="control-label visible-ie8 visible-ie9">Password</label>
			<div class="input-icon">
				<i class="fa fa-lock"></i>
				<input id="pass" class="form-control placeholder-no-fix" type="password" autocomplete="off" placeholder="Password" name="password"/>
			</div>
		</div>
		<div class="form-actions">
			<button id="register-back-btn" type="button" class="btn btn-default">
			<i class="m-icon-swapleft"></i>Back</button>
			<button type="buttton" name="SignUp" class="btn btn-info pull-right">Sign Up<i class="m-icon-swapright m-icon-white"></i>
			</button>
		</div>
	</form>
	<!-- END REGISTRATION FORM -->
</div>
<!-- END LOGIN -->
<!-- BEGIN COPYRIGHT -->
<div class="copyright">
	 2014 &copy; Cuatro Mujeres
</div>
<!-- END COPYRIGHT -->
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
<script src="assets/plugins/jquery-validation/dist/jquery.validate.min.js" type="text/javascript"></script>
<script type="text/javascript" src="assets/plugins/select2/select2.min.js"></script>
<!-- END PAGE LEVEL PLUGINS -->
<!-- BEGIN PAGE LEVEL SCRIPTS -->
<script src="assets/scripts/app.js" type="text/javascript"></script>
<script src="assets/scripts/login.js" type="text/javascript"></script>
<script src="assets/scripts/tamala.js" type="text/javascript"></script>
<!-- END PAGE LEVEL SCRIPTS -->
<script>
jQuery(document).ready(function() {     
  App.init();
  Login.init();
});
</script>
<!-- END JAVASCRIPTS -->
<script type="text/javascript">  var _gaq = _gaq || [];  _gaq.push(['_setAccount', 'UA-37564768-1']);  _gaq.push(['_setDomainName', 'keenthemes.com']);  _gaq.push(['_setAllowLinker', true]);  _gaq.push(['_trackPageview']);  (function() {    var ga = document.createElement('script'); ga.type = 'text/javascript'; ga.async = true;    ga.src = ('https:' == document.location.protocol ? 'https://' : 'http://') + 'stats.g.doubleclick.net/dc.js';    var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(ga, s);  })();</script></body>
<!-- END BODY -->

<!-- Mirrored from www.keenthemes.com/preview/conquer/login.html by HTTrack Website Copier/3.x [XR&CO'2014], Sat, 19 Jul 2014 15:04:02 GMT -->
</html>