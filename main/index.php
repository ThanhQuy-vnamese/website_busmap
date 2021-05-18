<?php
require '../source/class.php';
$id = $_REQUEST['id'] ?? '';
$d = new Database();
require '../source/salary.php';
$e = new Salary();
include("../source/login.php");
$p = new User();
include("../source/order.php");
$e = new Order();
if (empty($_SESSION["username"]) || empty($_SESSION["password"]) || empty($_SESSION['permission'])) {
	echo "<script>
	window.location = '../main/pages/auth_login.php';
</script>";
} else {
	$username = $_SESSION["username"];
	$password = $_SESSION["password"];
	$permission = $_SESSION['permission'];
	$p->confirm($username, $password, $permission);
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta name="description" content="">
	<meta name="author" content="">
	<link rel="icon" href="../images/favicon.ico">

	<title>VoiceX Admin - Dashboard</title>

	<!-- Bootstrap 4.0-->
	<link rel="stylesheet" href="../assets/vendor_components/bootstrap/dist/css/bootstrap.css">

	<!-- daterange picker -->
	<link rel="stylesheet" href="../assets/vendor_components/bootstrap-daterangepicker/daterangepicker.css">

	<!-- toast CSS -->
	<link href="../assets/vendor_components/jquery-toast-plugin-master/src/jquery.toast.css" rel="stylesheet">

	<!-- theme style -->
	<link rel="stylesheet" href="css/style.css">

	<!-- VoiceX Admin skins -->
	<link rel="stylesheet" href="css/skin_color.css">


</head>

<body class="hold-transition light-skin sidebar-mini theme-deepocean">

	<div class="wrapper">

		<div class="art-bg">
			<img src="../images/art1.svg" alt="" class="art-img light-img">
			<img src="../images/art2.svg" alt="" class="art-img dark-img">
			<img src="../images/art-bg.svg" alt="" class="wave-img light-img">
			<img src="../images/art-bg2.svg" alt="" class="wave-img dark-img">
		</div>

		<header class="main-header">
			<!-- Logo -->
			<a href="index.php" class="logo">
				<!-- mini logo -->
				<div class="logo-mini">
					<span class="light-logo"><img src="../images/logo-light.png" alt="logo"></span>
					<span class="dark-logo"><img src="../images/logo-dark.png" alt="logo"></span>
				</div>
				<!-- logo-->
				<div class="logo-lg">
					<span class="light-logo"><img src="../images/logo-light-text.png" alt="logo"></span>
					<span class="dark-logo"><img src="../images/logo-dark-text.png" alt="logo"></span>
				</div>
			</a>
			<!-- Header Navbar -->
			<nav class="navbar navbar-static-top">

				<div class="app-menu">
					<ul class="header-megamenu nav">
						<li class="btn-group nav-item">
							<a href="#" class="nav-link rounded" data-toggle="push-menu" role="button">
								<i class="nav-link-icon mdi mdi-menu text-white"></i>
							</a>
						</li>
						<li class="btn-group nav-item">
							<a href="#" data-provide="fullscreen" class="nav-link rounded" title="Full Screen">
								<i class="nav-link-icon mdi mdi-crop-free text-white"></i>
							</a>
						</li>

					</ul>
				</div>

				<div class="navbar-custom-menu r-side">
					<ul class="nav navbar-nav">
						<!-- Notifications -->
						<li class="dropdown notifications-menu">
							<a href="#" class="dropdown-toggle" data-toggle="dropdown" title="Notifications">
								<i class="mdi mdi-bell"></i>
							</a>
							<ul class="dropdown-menu animated bounceIn">

								<li class="header">
									<div class="p-20">
										<div class="flexbox">
											<div>
												<h4 class="mb-0 mt-0">Notifications</h4>
											</div>
											<div>
												<a href="#" class="text-danger">Clear All</a>
											</div>
										</div>
									</div>
								</li>

								<li>
									<!-- inner menu: contains the actual data -->
									<ul class="menu sm-scrol">

									</ul>
								</li>
								<li class="footer">
									<a href="#">View all</a>
								</li>
							</ul>
						</li>

						<!-- User Account-->
						<li class="dropdown user user-menu">
							<a href="#" class="dropdown-toggle" data-toggle="dropdown" title="User">
								<img src="../images/avatar/7.jpg" class="user-image rounded-circle" alt="User Image">
							</a>
							<ul class="dropdown-menu animated flipInX">
								<!-- User image -->
								<li class="user-header bg-img" style="background-image: url(../images/user-info.jpg)" data-overlay="3">
									<div class="flexbox align-self-center">
										<img src="../images/avatar/7.jpg" class="float-left rounded-circle" alt="User Image">
										<h4 class="user-name align-self-center">
											<span><?= isset($_SESSION['fullname']) ? $_SESSION['fullname'] : ''  ?></span>
											<small><?= isset($_SESSION['email']) ? $_SESSION['email'] : ''  ?></small>
										</h4>
									</div>
								</li>

							</ul>
						</li>


						<!-- Control Sidebar Toggle Button -->
						<li>
							<a href="#" data-toggle="control-sidebar" title="Setting"><i class="fa fa-cog fa-spin"></i></a>
						</li>

					</ul>
				</div>
			</nav>
		</header>

		<!-- Content Wrapper. Contains page content -->
		<div class="content-wrapper">
			<div class="container-full clearfix position-relative">

				<!-- Left side column. contains the logo and sidebar -->
				<aside class="main-sidebar">
					<!-- sidebar-->
					<section class="sidebar">
						<!-- sidebar menu-->
						<ul class="sidebar-menu" data-widget="tree">

							<li class="header nav-small-cap">APPS</li>
							<li class="treeview">
								<a href="#">
									<i class="ti-user"></i>
									<span>Contact</span>
									<span class="pull-right-container">
										<i class="fa fa-angle-right pull-right"></i>
									</span>
								</a>
								<ul class="treeview-menu">
									<li><a href="pages/contact_app_chat.php"><i class="ti-more"></i>Chat app</a></li>
									<li><a href="pages/contact_userlist.php"><i class="ti-more"></i>Userlist</a></li>
								</ul>
							</li>

							<li class="treeview">
								<a href="#">
									<i class="ti-layout-grid2"></i>
									<span>Extra</span>
									<span class="pull-right-container">
										<i class="fa fa-angle-right pull-right"></i>
									</span>
								</a>
								<ul class="treeview-menu">
									<li><a href="pages/extra_app_ticket.php"><i class="ti-more"></i>Support Ticket</a></li>
									<li><a href="pages/extra_calendar.php"><i class="ti-more"></i>Calendar</a></li>
									<li><a href="pages/extra_salary_list.php"><i class="ti-more"></i>Salary</a></li>
									<li><a href="pages/extra_bus_list.php"><i class="ti-more"></i>Bus</a></li>
								</ul>
							</li>



							<li class="header nav-small-cap">EXTRA COMPONENTS</li>



							<li class="treeview">
								<a href="#">
									<i class="ti-map-alt"></i>
									<span>Map</span>
									<span class="pull-right-container">
										<i class="fa fa-angle-right pull-right"></i>
									</span>
								</a>
								<ul class="treeview-menu">
									<li><a href="pages/map_google.php"><i class="ti-more"></i>Google Map</a></li>
								</ul>
							</li>


							

							<li>
								<a href="pages/auth_login.php">
									<i class="ti-power-off"></i>
									<span>Log Out</span>
								</a>
							</li>

						</ul>
					</section>
				</aside>
				<!-- Main content -->
				<section class="content">

					<!-- Content Header (Page header) -->
					<div class="content-header">
						<div class="d-flex align-items-center justify-content-between">
							<div class="d-md-block d-none">
								<h3 class="page-title br-0">Dashboard</h3>
							</div>
							<div class="w-p60">
								<!-- Search Form -->
								<form id="labnol" method="get" action="https://www.google.com/search">
									<div class="form-group mb-0 mr-5">
										<div class="input-group">
											<input type="text" name="q" class="form-control border-white" id="transcript" placeholder="Voice Search" x-webkit-speech>
											<div class="input-group-append">
												<button type="button" onclick="startDictation()" class="tst4 btn btn-rounded btn-white"><img src="../images/Google_mic.png" class="img-fluid w-15" alt=""></button>
											</div>
										</div>
									</div>
								</form>
							</div>
							<div class="right-title w-170">
								<span class="subheader_daterange font-weight-600" id="dashboard_daterangepicker">
									<span class="subheader_daterange-label">
										<span class="subheader_daterange-title"></span>
										<span class="subheader_daterange-date text-primary"></span>
									</span>
									<a href="#" class="btn btn-rounded btn-sm btn-primary">
										<i class="fa fa-angle-down"></i>
									</a>
								</span>
							</div>
						</div>
					</div>

					<div class="row">
						<div class="col-12">
							<div class="box">
								<div class="box-header with-border">
									<h4 class="box-title">Order List</h4>
									<div class="box-controls pull-right">
										<div class="lookup lookup-circle lookup-right">
											<input type="text" name="s">
										</div>
									</div>
								</div>
								<!-- /.box-header -->
								<div class="box-body no-padding">
									<div class="table-responsive">
										<table class="table table-hover">
											<tbody>
												<tr>
													<th>Số Hóa Đơn</th>
													<th>Tên người đặt vé</th>
													<th>Ngày đặt vé</th>
													<th>Số Lượng</th>
													<th>Đơn Gía</th>
													<th>Giảm Gía</th>
													<th>Tổng tiền</th>
													<th>Tình trạng</th>
												</tr>
												<?php
												$e->Order_list();
												?>
											</tbody>
										</table>
									</div>
								</div>
								<!-- /.box-body -->
							</div>
						</div>

				</section>
				<!-- /.content -->
			</div>
		</div>
		<!-- /.content-wrapper -->
		<footer class="main-footer">
			<div class="pull-right d-none d-sm-inline-block">
				<ul class="nav nav-primary nav-dotted nav-dot-separated justify-content-center justify-content-md-end">
					<li class="nav-item">
						<a class="nav-link" href="javascript:void(0)">FAQ</a>
					</li>
					<li class="nav-item">
						<a class="nav-link" href="#">Purchase Now</a>
					</li>
				</ul>
			</div>
			&copy; 2019 <a href="https://www.multipurposethemes.com/">Multi-Purpose Themes</a>. All Rights Reserved.
		</footer>

		<!-- Control Sidebar -->
		<aside class="control-sidebar">

			<div class="rpanel-title"><span class="pull-right btn btn-circle btn-danger"><i class="ion ion-close text-white" data-toggle="control-sidebar"></i></span> </div> <!-- Create the tabs -->
			<ul class="nav nav-tabs control-sidebar-tabs">
				<li class="nav-item"><a href="#control-sidebar-home-tab" data-toggle="tab" title="Notifications"><i class="ti-comment-alt"></i></a></li>
			</ul>
			<!-- Tab panes -->
			<div class="tab-content">
				<!-- Home tab content -->
				<div class="tab-pane" id="control-sidebar-home-tab">
					<div class="lookup lookup-sm lookup-right d-none d-lg-block mb-20">
						<input type="text" name="s" placeholder="Search" class="w-p100">
					</div>
					<div class="media-list media-list-hover">
						<a class="media media-single" href="#">
							<h4 class="w-50 text-gray font-weight-500">10:10</h4>
							<div class="media-body pl-15 bl-5 rounded border-primary">
								<p>Morbi quis ex eu arcu auctor sagittis.</p>
								<span class="text-fade">by Johne</span>
							</div>
						</a>

						<a class="media media-single" href="#">
							<h4 class="w-50 text-gray font-weight-500">08:40</h4>
							<div class="media-body pl-15 bl-5 rounded border-success">
								<p>Proin iaculis eros non odio ornare efficitur.</p>
								<span class="text-fade">by Amla</span>
							</div>
						</a>

						<a class="media media-single" href="#">
							<h4 class="w-50 text-gray font-weight-500">07:10</h4>
							<div class="media-body pl-15 bl-5 rounded border-info">
								<p>In mattis mi ut posuere consectetur.</p>
								<span class="text-fade">by Josef</span>
							</div>
						</a>

						<a class="media media-single" href="#">
							<h4 class="w-50 text-gray font-weight-500">01:15</h4>
							<div class="media-body pl-15 bl-5 rounded border-danger">
								<p>Morbi quis ex eu arcu auctor sagittis.</p>
								<span class="text-fade">by Rima</span>
							</div>
						</a>

						<a class="media media-single" href="#">
							<h4 class="w-50 text-gray font-weight-500">23:12</h4>
							<div class="media-body pl-15 bl-5 rounded border-warning">
								<p>Morbi quis ex eu arcu auctor sagittis.</p>
								<span class="text-fade">by Alaxa</span>
							</div>
						</a>

					</div>
				</div>
				<!-- /.tab-pane -->
				<!-- Settings tab content -->

				<!-- /.tab-pane -->
			</div>
		</aside>
		<!-- /.control-sidebar -->

		<!-- Add the sidebar's background. This div must be placed immediately after the control sidebar -->
		<div class="control-sidebar-bg"></div>

	</div>
	<!-- ./wrapper -->



	<!-- jQuery 3 -->
	<script src="../assets/vendor_components/jquery-3.3.1/jquery-3.3.1.js"></script>

	<!-- fullscreen -->
	<script src="../assets/vendor_components/screenfull/screenfull.js"></script>

	<!-- jQuery UI 1.11.4 -->
	<script src="../assets/vendor_components/jquery-ui/jquery-ui.js"></script>

	<!-- popper -->
	<script src="../assets/vendor_components/popper/dist/popper.min.js"></script>

	<!-- Bootstrap 4.0-->
	<script src="../assets/vendor_components/bootstrap/dist/js/bootstrap.js"></script>

	<!-- date-range-picker -->
	<script src="../assets/vendor_components/moment/min/moment.min.js"></script>
	<script src="../assets/vendor_components/bootstrap-daterangepicker/daterangepicker.js"></script>

	<!-- Slimscroll -->
	<script src="../assets/vendor_components/jquery-slimscroll/jquery.slimscroll.js"></script>

	<!-- FastClick -->
	<script src="../assets/vendor_components/fastclick/lib/fastclick.js"></script>

	<!-- amchart -->
	<script src="https://www.amcharts.com/lib/4/core.js"></script>
	<script src="https://www.amcharts.com/lib/4/charts.js"></script>
	<script src="https://www.amcharts.com/lib/4/themes/animated.js"></script>

	<!-- apexcharts -->
	<script src="../assets/vendor_components/apexcharts-bundle/irregular-data-series.js"></script>
	<script src="../assets/vendor_components/apexcharts-bundle/dist/apexcharts.js"></script>

	<!-- toast -->
	<script src="../assets/vendor_components/jquery-toast-plugin-master/src/jquery.toast.js"></script>

	<!-- VoiceX Admin App -->
	<script src="js/template.js"></script>
	<script src="js/pages/voice-search.js"></script>

	<!-- VoiceX Admin dashboard demo (This is only for demo purposes) -->
	<script src="js/pages/dashboard.js"></script>

	<!-- VoiceX Admin for demo purposes -->
	<script src="js/demo.js"></script>


</body>

</html>