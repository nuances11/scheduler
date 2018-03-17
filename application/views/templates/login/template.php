<!DOCTYPE html>
<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>
<!--[if IE 8]> <html lang="en" class="ie8"> <![endif]-->
<!--[if !IE]><!-->
<html lang="en">
<!--<![endif]-->

<!-- Mirrored from seantheme.com/color-admin-v3.0/admin/apple/login.html by HTTrack Website Copier/3.x [XR&CO'2014], Mon, 12 Feb 2018 12:32:14 GMT -->
<head>
	<meta charset="utf-8" />
	<title><?php echo $title; ?></title>
	<meta content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no" name="viewport" />
	<meta content="" name="description" />
	<meta content="" name="author" />

	<!-- ================== BEGIN BASE CSS STYLE ================== -->
	<link href="<?php echo base_url(); ?>assets/plugins/jquery-ui/themes/base/minified/jquery-ui.min.css" rel="stylesheet" />
	<link href="<?php echo base_url(); ?>assets/plugins/bootstrap/css/bootstrap.min.css" rel="stylesheet" />
	<link href="<?php echo base_url(); ?>assets/plugins/font-awesome/css/font-awesome.min.css" rel="stylesheet" />
	<link href="<?php echo base_url(); ?>assets/plugins/ionicons/css/ionicons.min.css" rel="stylesheet" />
	<link href="<?php echo base_url(); ?>assets/css/animate.min.css" rel="stylesheet" />
	<link href="<?php echo base_url(); ?>assets/css/style.min.css" rel="stylesheet" />
	<link href="<?php echo base_url(); ?>assets/css/style-responsive.min.css" rel="stylesheet" />
	<link href="<?php echo base_url(); ?>assets/css/theme/default.css" rel="stylesheet" id="theme" />
	<!-- ================== END BASE CSS STYLE ================== -->

	<?php if(isset($additional_css)){
			foreach($additional_css as $css){
				?>
				<link rel="stylesheet" href="<?php echo base_url() . $css; ?>">
				<?php
			}
		} ?>

	<!-- ================== BEGIN BASE JS ================== -->
	<script src="<?php echo base_url(); ?>assets/plugins/pace/pace.min.js"></script>
	<!-- ================== END BASE JS ================== -->
</head>
<body class="pace-top">
	<!-- begin #page-loader -->
	<div id="page-loader" class="fade in"><span class="spinner"></span></div>
	<!-- end #page-loader -->

	<!-- begin #page-container -->
	<div id="page-container" class="fade">

        <?php echo $content; ?>

	</div>
	<!-- end page container -->

	<!-- ================== BEGIN BASE JS ================== -->
	<script src="<?php echo base_url(); ?>assets/plugins/jquery/jquery-1.9.1.min.js"></script>
	<script src="<?php echo base_url(); ?>assets/plugins/jquery/jquery-migrate-1.1.0.min.js"></script>
	<script src="<?php echo base_url(); ?>assets/plugins/jquery-ui/ui/minified/jquery-ui.min.js"></script>
	<script src="<?php echo base_url(); ?>assets/plugins/bootstrap/js/bootstrap.min.js"></script>
	<!--[if lt IE 9]>
		<script src="<?php echo base_url(); ?>assets/crossbrowserjs/html5shiv.js"></script>
		<script src="<?php echo base_url(); ?>assets/crossbrowserjs/respond.min.js"></script>
		<script src="<?php echo base_url(); ?>assets/crossbrowserjs/excanvas.min.js"></script>
	<![endif]-->
	<script src="<?php echo base_url(); ?>assets/plugins/slimscroll/jquery.slimscroll.min.js"></script>
	<script src="<?php echo base_url(); ?>assets/plugins/jquery-cookie/jquery.cookie.js"></script>
	<!-- ================== END BASE JS ================== -->

	<!-- ================== BEGIN PAGE LEVEL JS ================== -->
	<script src="<?php echo base_url(); ?>assets/js/apps.min.js"></script>
	<!-- ================== END PAGE LEVEL JS ================== -->
	<?php if(isset($add_js)){
			foreach($add_js as $js){ ?>
				<script src="<?php echo base_url() . $js; ?>"></script>
			<?php }
		}
		if(isset($extra_js)){
			?><script><?php
			echo $extra_js;
			?></script><?php
		}

	?>

	<script>
		$(document).ready(function() {
			App.init();
		});
	</script>
<script>
  // (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
  // (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
  // m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
  // })(window,document,'script','../../../../www.google-analytics.com/analytics.js','ga');
  //
  // ga('create', 'UA-53034621-1', 'auto');
  // ga('send', 'pageview');

</script>
</body>

<!-- Mirrored from seantheme.com/color-admin-v3.0/admin/apple/login.html by HTTrack Website Copier/3.x [XR&CO'2014], Mon, 12 Feb 2018 12:32:14 GMT -->
</html>
