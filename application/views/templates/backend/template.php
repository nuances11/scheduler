<!DOCTYPE html>
<?php
defined('BASEPATH') OR exit('No direct script access allowed');
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
	
	<!-- ================== BEGIN BASE CSS STYLE ================== -->
	<link href="<?php echo base_url(); ?>assets/plugins/bootstrap/css/bootstrap.min.css" rel="stylesheet" />
	<link href="<?php echo base_url(); ?>assets/plugins/font-awesome/css/font-awesome.min.css" rel="stylesheet" />
	<link href="<?php echo base_url(); ?>assets/plugins/ionicons/css/ionicons.min.css" rel="stylesheet" />
	<link href="<?php echo base_url(); ?>assets/css/animate.min.css" rel="stylesheet" />
	<link href="<?php echo base_url(); ?>assets/css/style.min.css" rel="stylesheet" />
	<link href="<?php echo base_url(); ?>assets/css/style-responsive.min.css" rel="stylesheet" />
	<link href="<?php echo base_url(); ?>assets/css/theme/default.css" rel="stylesheet" id="theme" />
	<!-- ================== END BASE CSS STYLE ================== -->
	
	<!-- ================== BEGIN PAGE LEVEL STYLE ================== -->
	<link href="<?php echo base_url(); ?>assets/plugins/jquery-jvectormap/jquery-jvectormap.css" rel="stylesheet" />
	<link href="<?php echo base_url(); ?>assets/plugins/bootstrap-datepicker/css/bootstrap-datepicker.css" rel="stylesheet" />
	<link href="<?php echo base_url(); ?>assets/plugins/DataTables/media/css/dataTables.bootstrap.min.css" rel="stylesheet" />
	<link href="<?php echo base_url(); ?>assets/plugins/DataTables/extensions/FixedColumns/css/fixedColumns.bootstrap.min.css" rel="stylesheet" />
	<link href="<?php echo base_url(); ?>assets/plugins/parsley/src/parsley.css" rel="stylesheet" />
	<!-- ================== END PAGE LEVEL STYLE ================== -->
	
	<!-- ================== BEGIN BASE JS ================== -->
	<script src="<?php echo base_url(); ?>assets/plugins/pace/pace.min.js"></script>
	<!-- ================== END BASE JS ================== -->
	<?php if(isset($additional_css)){
			foreach($additional_css as $css){
			  // echo link_tag($css);
			  ?>
			  <link rel="stylesheet" type="text/css" href="<?php echo base_url() . $css;?>">
			  <?php
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
					<a href="index.html" class="navbar-brand"><span class="navbar-logo"><i class="ion-ios-cloud"></i></span> <b>Online</b> Scheduler</a>
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
							<span class="user-image online">
								<img src="<?php echo base_url(); ?>assets/img/user-13.jpg" alt="" /> 
							</span>
							<span class="hidden-xs">Admin</span> <b class="caret"></b>
						</a>
						<ul class="dropdown-menu animated fadeInLeft">
							<li class="arrow"></li>
							<li><a href="javascript:;">Edit Profile</a></li>
							<li><a href="javascript:;">Setting</a></li>
							<li class="divider"></li>
							<li><a href="javascript:;">Log Out</a></li>
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
						<div class="image">
							<a href="javascript:;"><img src="<?php echo base_url(); ?>assets/img/user-13.jpg" alt="" /></a>
						</div>
						<div class="info">
							Admin
							<small>Sir Noel Hernandez</small>
						</div>
					</li>
				</ul>
				<!-- end sidebar user -->
				<!-- begin sidebar nav -->
				<ul class="nav">
					<li class="nav-header">Navigation</li>
					<li class="has-sub">
						<a href="<?php echo base_url(); ?>/admin">
						    <i class="bg-gradient-blue ion-ios-pulse-strong"></i>
						    <span>Dashboard</span>
					    </a>
					</li>
					<li class="has-sub">
					    <a href="<?php echo base_url(); ?>users">
					        <i class="bg-gradient-red fa fa-user"></i>
					        <span>Users</span>
					    </a>
					</li>
					<li class="has-sub">
					    <a href="<?php echo base_url(); ?>students">
					        <i class="bg-gradient-blue fa fa-users"></i>
					        <span>Students</span>
					    </a>
					</li>
					<li class="has-sub">
					    <a href="<?php echo base_url(); ?>sections">
					        <i class="bg-gradient-green fa fa-list-alt"></i>
					        <span>Sections</span>
					    </a>
					</li>
					<li class="has-sub">
					    <a href="<?php echo base_url(); ?>subjects">
					        <i class="bg-gradient-pink fa fa-list-ol"></i>
					        <span>Subjects</span>
					    </a>
					</li>
					<li class="has-sub">
					    <a href="<?php echo base_url(); ?>teachers">
					        <i class="bg-gradient-yellow fa fa-paste (alias)"></i>
					        <span>Teachers</span>
					    </a>
					</li>
					<li class="has-sub">
					    <a href="javascript:;">
					        <i class="bg-gradient-gray fa fa-gears (alias)"></i>
					        <span>Settings</span>
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
			TableManageFixedColumns.init();
		});
	</script>
	<script>
		$(document).ready(function() {
			 $('#calendar').fullCalendar();
		});
	</script>
	<script>
		$(document).ready(function() {
			App.init();
			Dashboard.init();
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
<script type="text/javascript">
	$('#studno').on('keypress', function(){
        return  event.charCode >= 48 && event.charCode <= 57;
    });

	$(document).on('keyup', '#studno', function(){
		//console.log($(this).val());
		var keyword = $(this).val();

		$.ajax({
			url: 'http://localhost/scheduler1/student/checkno',
			method: 'POST',
			data: {'keyword': keyword},
			dataType: 'JSON',
			success: function(result){
				$('#validate_sn').html(result.status);
				if (result.status == 'Student number is already exist!') {
					$('#submit_student').addClass('disabled');
				} else {
					$('#submit_student').removeClass('disabled');
				}
			}
		});
	});
</script>
</body>

<!-- Mirrored from seantheme.com/color-admin-v3.0/admin/apple/index.html by HTTrack Website Copier/3.x [XR&CO'2014], Mon, 12 Feb 2018 12:26:00 GMT -->
</html>
