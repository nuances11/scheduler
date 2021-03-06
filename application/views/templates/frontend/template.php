<!DOCTYPE html>
<?php
defined('BASEPATH') OR exit('No direct script access allowed');
if (isset($_SESSION['id'])) {
	if ($_SESSION['type'] == 1) {
		header("Location: " . base_url() . "admin");
	}elseif ($_SESSION['type'] == 2) {
		header("Location: " . base_url() . "principal");
	}elseif ($_SESSION['type'] == 3) {
		header("Location: " . base_url() . "user");
	}
}
?>
<!--[if IE 8]> <html lang="en" class="ie8"> <![endif]-->
<!--[if !IE]><!-->
<html lang="en">
<!--<![endif]-->

<!-- Mirrored from seantheme.com/color-admin-v3.0/<?php echo base_url(); ?>assets/frontend/forum/ by HTTrack Website Copier/3.x [XR&CO'2014], Fri, 23 Feb 2018 13:51:22 GMT -->
<head>
	<meta charset="utf-8" />
	<title><?php echo $title; ?></title>
	<meta content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no" name="viewport" />
	<meta content="" name="description" />
	<meta content="" name="author" />

	<link rel="apple-touch-icon" sizes="57x57" href="<?php echo base_url();?>assets/frontend/assets/icon/apple-icon-57x57.png">
	<link rel="apple-touch-icon" sizes="60x60" href="<?php echo base_url();?>assets/frontend/assets/icon/apple-icon-60x60.png">
	<link rel="apple-touch-icon" sizes="72x72" href="<?php echo base_url();?>assets/frontend/assets/icon/apple-icon-72x72.png">
	<link rel="apple-touch-icon" sizes="76x76" href="<?php echo base_url();?>assets/frontend/assets/icon/apple-icon-76x76.png">
	<link rel="apple-touch-icon" sizes="114x114" href="<?php echo base_url();?>assets/frontend/assets/icon/apple-icon-114x114.png">
	<link rel="apple-touch-icon" sizes="120x120" href="<?php echo base_url();?>assets/frontend/assets/icon/apple-icon-120x120.png">
	<link rel="apple-touch-icon" sizes="144x144" href="<?php echo base_url();?>assets/frontend/assets/icon/apple-icon-144x144.png">
	<link rel="apple-touch-icon" sizes="152x152" href="<?php echo base_url();?>assets/frontend/assets/icon/apple-icon-152x152.png">
	<link rel="apple-touch-icon" sizes="180x180" href="<?php echo base_url();?>assets/frontend/assets/icon/apple-icon-180x180.png">
	<link rel="icon" type="image/png" sizes="192x192"  href="<?php echo base_url();?>assets/frontend/assets/icon/android-icon-192x192.png">
	<link rel="icon" type="image/png" sizes="32x32" href="<?php echo base_url();?>assets/frontend/assets/icon/favicon-32x32.png">
	<link rel="icon" type="image/png" sizes="96x96" href="<?php echo base_url();?>assets/frontend/assets/icon/favicon-96x96.png">
	<link rel="icon" type="image/png" sizes="16x16" href="<?php echo base_url();?>assets/frontend/assets/icon/favicon-16x16.png">
	<link rel="manifest" href="<?php echo base_url();?>assets/frontend/assets/icon/manifest.json">
	<meta name="msapplication-TileColor" content="#ffffff">
	<meta name="msapplication-TileImage" content="<?php echo base_url();?>assets/frontend/assets/icon/ms-icon-144x144.png">
	<meta name="theme-color" content="#ffffff">

	<!-- ================== BEGIN BASE CSS STYLE ================== -->
	<link href="http://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700" rel="stylesheet" />
	<link href="<?php echo base_url(); ?>assets/frontend/assets/plugins/bootstrap/css/bootstrap.min.css" rel="stylesheet" />
	<link href="<?php echo base_url(); ?>assets/frontend/assets/plugins/font-awesome/css/font-awesome.min.css" rel="stylesheet" />
	<link href="<?php echo base_url(); ?>assets/frontend/assets/css/animate.min.css" rel="stylesheet" />
	<link href="<?php echo base_url(); ?>assets/frontend/assets/css/style.min.css" rel="stylesheet" />
	<link href="<?php echo base_url(); ?>assets/frontend/assets/css/style-responsive.min.css" rel="stylesheet" />
	<link href="<?php echo base_url(); ?>assets/frontend/assets/css/theme/default.css" id="theme" rel="stylesheet" />
	<!-- ================== END BASE CSS STYLE ================== -->

	<!-- ================== BEGIN BASE JS ================== -->
	<script src="<?php echo base_url(); ?>assets/frontend/assets/plugins/pace/pace.min.js"></script>
	<!-- ================== END BASE JS ================== -->
</head>
<body>
    <!-- begin #header -->
    <div id="header" class="header navbar navbar-default navbar-fixed-top">
        <!-- begin container -->
        <div class="container">
            <!-- begin navbar-header -->
            <div class="navbar-header">
                <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#header-navbar">
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a href="<?php echo base_url(); ?>home" class="navbar-brand">
                    <!-- <span class="navbar-logo"></span> -->

                    <span class="brand-text">
						<img width="40" src="<?php echo base_url();?>assets/img/lnhs-logo.png" alt="">
                        LUAKAN NATIONAL HIGH SCHOOL -
						<strong>School ID - 300708</strong>
                    </span>

                </a>
            </div>
            <!-- end navbar-header -->
            <!-- begin #header-navbar -->
            <div class="collapse navbar-collapse" id="header-navbar">
                <ul class="nav navbar-nav navbar-right">
					<!-- <li><strong>School ID - 300708</strong></li> -->
                    <li><a href="<?php echo base_url(); ?>login">Login</a></li>
                </ul>
            </div>
            <!-- end #header-navbar -->
        </div>
        <!-- end container -->
    </div>
    <!-- end #header -->

    <!-- begin search-banner -->
    <!-- <div class="search-banner has-bg"> -->
        <!-- begin bg-cover -->
        <!-- <div class="bg-cover">
            <img src="<?php echo base_url(); ?>assets/frontend/assets/img/cover4.jpg" alt="" />
        </div> -->
		<div class="container">
			<img src="<?php echo base_url(); ?>assets/frontend/assets/img/cover4.jpg" alt="" />

		</div>
        <!-- end bg-cover -->
        <!-- begin container -->
        <!-- <div class="container">
            <h1><?php echo strtoupper($title);?></h1>
            <h5 class="text-center"></h5>
        </div> -->
        <!-- end container -->
    <!-- </div> -->
    <!-- end search-banner -->

    <!-- begin content -->
    <div class="content" style="padding:0 !important;">
        <!-- begin container -->
        <div class="container">
            <!-- begin panel-forum -->
            <?php echo $content; ?>
        </div>
        <!-- end container -->
    </div>
    <!-- end content -->

    <!-- begin #footer-copyright -->
    <!-- <div id="footer-copyright" class="footer-copyright">
        <div class="container">
            &copy; 2018 All Right Reserved.
        </div>
    </div> -->
    <!-- end #footer-copyright -->
	<!-- ================== BEGIN BASE JS ================== -->
	<script src="<?php echo base_url(); ?>assets/frontend/assets/plugins/jquery/jquery-1.9.1.min.js"></script>
	<script src="<?php echo base_url(); ?>assets/frontend/assets/plugins/jquery/jquery-migrate-1.1.0.min.js"></script>
	<script src="<?php echo base_url(); ?>assets/frontend/assets/plugins/bootstrap/js/bootstrap.min.js"></script>
	<!--[if lt IE 9]>
		<script src="<?php echo base_url(); ?>assets/frontend/assets/crossbrowserjs/html5shiv.js"></script>
		<script src="<?php echo base_url(); ?>assets/frontend/assets/crossbrowserjs/respond.min.js"></script>
		<script src="<?php echo base_url(); ?>assets/frontend/assets/crossbrowserjs/excanvas.min.js"></script>
	<![endif]-->
	<script src="<?php echo base_url(); ?>assets/frontend/assets/plugins/jquery-cookie/jquery.cookie.js"></script>
	<script src="<?php echo base_url(); ?>assets/frontend/assets/js/apps.min.js"></script>
	<!-- ================== END BASE JS ================== -->

	<script>
	    $(document).ready(function() {
	        App.init();
	    });
	</script>
<script>
  (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
  m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
  })(window,document,'script','../../../../www.google-analytics.com/analytics.js','ga');

  ga('create', 'UA-53034621-1', 'auto');
  ga('send', 'pageview');

</script>
</body>

<!-- Mirrored from seantheme.com/color-admin-v3.0/<?php echo base_url(); ?>assets/frontend/forum/ by HTTrack Website Copier/3.x [XR&CO'2014], Fri, 23 Feb 2018 13:51:40 GMT -->
</html>
