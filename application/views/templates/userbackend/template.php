<!DOCTYPE html>
<?php
defined('BASEPATH') OR exit('No direct script access allowed');
if (isset($_SESSION['id'])) {
	if ($_SESSION['type'] != 3) {
		header("Location: " . base_url() . "login");
	}
}else{
	header("Location: " . base_url() . "login");
}
?>

<!--[if IE 8]> <html lang="en" class="ie8"> <![endif]-->
<!--[if !IE]><!-->
<html lang="en">
<!--<![endif]-->

<!-- Mirrored from seantheme.com/color-admin-v3.0/admin/apple/index.html by HTTrack Website Copier/3.x [XR&CO'2014], Mon, 12 Feb 2018 12:24:29 GMT -->
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
	<link href="<?php echo base_url(); ?>assets/plugins/bootstrap/css/bootstrap.min.css" rel="stylesheet" />
	<link href="<?php echo base_url(); ?>assets/plugins/font-awesome/css/font-awesome.min.css" rel="stylesheet" />
	<link href="<?php echo base_url(); ?>assets/plugins/ionicons/css/ionicons.min.css" rel="stylesheet" />
	<link href="<?php echo base_url(); ?>assets/css/animate.min.css" rel="stylesheet" />
	<link href="<?php echo base_url(); ?>assets/css/style.min.css" rel="stylesheet" />
	<link href="<?php echo base_url(); ?>assets/css/style-responsive.min.css" rel="stylesheet" />
	<link href="<?php echo base_url(); ?>assets/css/theme/default.css" rel="stylesheet" id="theme" />
	<!-- <link href="<?php echo base_url(); ?>assets/css/multiple-select.css" rel="stylesheet"/> -->
	<!-- ================== END BASE CSS STYLE ================== -->

	<!-- ================== BEGIN PAGE LEVEL STYLE ================== -->
	<link href="<?php echo base_url(); ?>assets/plugins/jquery-jvectormap/jquery-jvectormap.css" rel="stylesheet" />
	<link href="<?php echo base_url(); ?>assets/plugins/bootstrap-datepicker/css/bootstrap-datepicker.css" rel="stylesheet" />
	<link href="<?php echo base_url(); ?>assets/plugins/DataTables/media/css/dataTables.bootstrap.min.css" rel="stylesheet" />
	<link href="<?php echo base_url(); ?>assets/plugins/DataTables/extensions/FixedColumns/css/fixedColumns.bootstrap.min.css" rel="stylesheet" />
	<link href="<?php echo base_url(); ?>assets/plugins/parsley/src/parsley.css" rel="stylesheet" />
	<!-- ================== END PAGE LEVEL STYLE ================== -->

	<!-- ================== BEGIN BASE JS ================== -->
	<!-- <script src="<?php echo base_url(); ?>assets/js/multiple-select.js"></script> -->
	<script src="<?php echo base_url(); ?>assets/plugins/pace/pace.min.js"></script>
	<!-- ================== END BASE JS ================== -->
	<?php if(isset($additional_css)){
			foreach($additional_css as $css){
			  echo link_tag($css);
			}
		} ?>
</head>
<body>
	<!-- begin #page-loader -->
	<div id="page-loader" class="fade in"><span class="spinner"></span></div>
	<!-- end #page-loader -->

	<!-- begin #page-container -->
	<div id="page-container" class="fade page-sidebar-fixed page-header-fixed">
		<!-- begin #header -->
		<div id="header" class="header navbar navbar-default navbar-fixed-top">
			<!-- begin container-fluid -->
			<div class="container-fluid">
				<!-- begin mobile sidebar expand / collapse button -->
				<div class="navbar-header">
					<a href="<?php echo base_url(); ?>user" class="navbar-brand"><span class="navbar-logo"><i class="ion-ios-cloud"></i></span> <b>Online</b> Scheduler</a>
					<button type="button" class="navbar-toggle" data-click="sidebar-toggled">
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
					</button>
				</div>
				<!-- end mobile sidebar expand / collapse button -->

				<!-- begin header navigation right -->
				<ul class="nav navbar-nav navbar-right">
					<li class="dropdown navbar-user">
						<a href="javascript:;" class="dropdown-toggle" data-toggle="dropdown">
							<!-- <span class="user-image online">
								<img src="<?php echo base_url(); ?>assets/img/user-13.jpg" alt="" />
							</span> -->
							<span class="hidden-xs"><?php echo $this->session->userdata('name') ;?></span> <b class="caret"></b>
						</a>
						<ul class="dropdown-menu animated fadeInLeft">
							<li class="arrow"></li>
							<li><a href="<?php echo base_url(); ?>user/edit-profile">Edit Profile</a></li>
							<li><a href="<?php echo base_url(); ?>user/change-pass">Change Password</a></li>
							<li class="divider"></li>
							<li><a href="<?php echo base_url();?>logout">Log Out</a></li>
						</ul>
					</li>
				</ul>
				<!-- end header navigation right -->
			</div>
			<!-- end container-fluid -->
		</div>
		<!-- end #header -->

		<!-- begin #sidebar -->
		<div id="sidebar" class="sidebar">
			<!-- begin sidebar scrollbar -->
			<div data-scrollbar="true" data-height="100%">
				<!-- begin sidebar user -->
				<ul class="nav">
					<li class="nav-profile">
						<!-- <div class="image">
							<a href="javascript:;"><img src="<?php echo base_url(); ?>assets/img/user-13.jpg" alt="" /></a>
						</div> -->
						<div class="info">
							<?php echo $this->session->userdata('position') ;?>
							<small><?php echo $this->session->userdata('name') ;?></small>
						</div>
					</li>
				</ul>
				<!-- end sidebar user -->
				<!-- begin sidebar nav -->
				<ul class="nav">
					<li class="nav-header">Navigation</li>
					<li class="has-sub">
						<a href="<?php echo base_url(); ?>user">
						    <i class="bg-gradient-green fa fa-list-alt"></i>
						    <span>View Schedules</span>
					    </a>
					</li>
					<li class="has-sub">
						<a href="<?php echo base_url(); ?>schedule/add">
						    <i class="bg-gradient-pink fa fa-list-ol"></i>
						    <span>Add Schedules</span>
					    </a>
					</li>
			        <!-- begin sidebar minify button -->
					<li><a href="javascript:;" class="sidebar-minify-btn" data-click="sidebar-minify"><i class="ion-ios-arrow-left"></i> <span>Collapse</span></a></li>
			        <!-- end sidebar minify button -->
				</ul>
				<!-- end sidebar nav -->
			</div>
			<!-- end sidebar scrollbar -->
		</div>
		<div class="sidebar-bg"></div>
		<!-- end #sidebar -->

		<!-- begin #content -->
		<div id="content" class="content">
			<?php echo $content; ?>

		</div>
		<!-- end #content -->

		<!-- begin scroll to top btn -->
		<a href="javascript:;" class="btn btn-icon btn-circle btn-primary btn-scroll-to-top fade" data-click="scroll-top"><i class="fa fa-angle-up"></i></a>
		<!-- end scroll to top btn -->
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
	<script src="<?php echo base_url(); ?>assets/plugins/slimscroll/jquery.slimscroll.min.js"></script>
	<script src="<?php echo base_url(); ?>assets/plugins/jquery-cookie/jquery.cookie.js"></script>
	<!-- ================== END BASE JS ================== -->

	<!-- ================== BEGIN PAGE LEVEL JS ================== -->

	<script src="<?php echo base_url(); ?>assets/plugins/flot/jquery.flot.min.js"></script>
	<script src="<?php echo base_url(); ?>assets/plugins/flot/jquery.flot.time.min.js"></script>
	<script src="<?php echo base_url(); ?>assets/plugins/flot/jquery.flot.resize.min.js"></script>
	<script src="<?php echo base_url(); ?>assets/plugins/flot/jquery.flot.pie.min.js"></script>
	<script src="<?php echo base_url(); ?>assets/plugins/sparkline/jquery.sparkline.js"></script>
	<script src="<?php echo base_url(); ?>assets/plugins/jquery-jvectormap/jquery-jvectormap.min.js"></script>
	<script src="<?php echo base_url(); ?>assets/plugins/jquery-jvectormap/jquery-jvectormap-world-mill-en.js"></script>
	<script src="<?php echo base_url(); ?>assets/plugins/bootstrap-datepicker/js/bootstrap-datepicker.js"></script>
	<script src="<?php echo base_url(); ?>assets/js/dashboard.min.js"></script>
	<script src="<?php echo base_url(); ?>assets/js/apps.min.js"></script>


	<script src="<?php echo base_url(); ?>assets/plugins/DataTables/media/js/jquery.dataTables.js"></script>
	<script src="<?php echo base_url(); ?>assets/plugins/DataTables/media/js/dataTables.bootstrap.min.js"></script>
	<script src="<?php echo base_url(); ?>assets/plugins/DataTables/extensions/FixedColumns/js/dataTables.fixedColumns.min.js"></script>
	<script src="<?php echo base_url(); ?>assets/plugins/DataTables/extensions/FixedColumns/js/dataTables.fixedColumns.min.js"></script>
	<script src="<?php echo base_url(); ?>assets/js/table-manage-fixed-columns.demo.min.js"></script>
	<script src="<?php echo base_url(); ?>assets/plugins/parsley/dist/parsley.js"></script>
	<!-- ================== END PAGE LEVEL JS ================== -->

	<script>
		$(document).ready(function() {
			App.init();
			TableManageFixedColumns.init();
		});
	</script>
	<script>
		$(document).ready(function() {
			App.init();
			Dashboard.init();
		});
	</script>
<script>
  // (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
  // (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
  // m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
  // })(window,document,'script','../../../../www.google-analytics.com/analytics.js','ga');

  // ga('create', 'UA-53034621-1', 'auto');
  // ga('send', 'pageview');

</script>
<script type="text/javascript">
	$(document).ready(function() {
			$('#save-schedule').submit(function(e){
				var base_url = $(this).data('url');
				e.preventDefault();
				var formData = $(this);
				$.ajax({
					type: "POST",
					url: base_url + "schedule/save",
					data: formData.serialize(),
					dataType: "JSON",
					success: function(data){
						console.log(data);
					}
				});
			})
		});
</script>
<script>
    // $("select").multipleSelect({
    //     width: 460,
    //     multiple: true,
    //     multipleWidth: 55
    // });
</script>

</body>

<!-- Mirrored from seantheme.com/color-admin-v3.0/admin/apple/index.html by HTTrack Website Copier/3.x [XR&CO'2014], Mon, 12 Feb 2018 12:26:00 GMT -->
</html>
