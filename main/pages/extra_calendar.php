<?php
require '../../source/class.php';
$id = $_REQUEST['id'] ?? '';
$p = new Database();
include("../../source/login.php");
$p=new User();
if(empty($_SESSION["username"])||empty($_SESSION["password"]) || empty($_SESSION['permission'])){
	echo "<script>
	window.location = '../pages/auth_login.php';
</script>";
}
else{
	$username=$_SESSION["username"];
	$password=$_SESSION["password"];
	$permission = $_SESSION['permission'];
	$p->confirm($username,$password, $permission);
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
    <link rel="icon" href="../../images/favicon.ico">

    <title>VoiceX Admin - Dashboard  Calendar</title>
  
	<!-- Bootstrap 4.0-->
	<link rel="stylesheet" href="../../assets/vendor_components/bootstrap/dist/css/bootstrap.min.css">
	
	<!-- fullCalendar -->
	<link rel="stylesheet" href="../../assets/vendor_components/fullcalendar/fullcalendar.min.css">
	<link rel="stylesheet" href="../../assets/vendor_components/fullcalendar/fullcalendar.print.min.css" media="print">
	
	<!-- theme style -->
	<link rel="stylesheet" href="../css/style.css">
	
	<!-- Admin skins -->
	<link rel="stylesheet" href="../css/skin_color.css">
	
</head>

<body class="hold-transition light-skin sidebar-mini theme-fruit">
<div class="wrapper">
	
  <div class="art-bg">
	  <img src="../../images/art1.svg" alt="" class="art-img light-img">
	  <img src="../../images/art2.svg" alt="" class="art-img dark-img">
	  <img src="../../images/art-bg.svg" alt="" class="wave-img light-img">
	  <img src="../../images/art-bg2.svg" alt="" class="wave-img dark-img">
  </div>
  <header class="main-header">
    <!-- Logo -->
    <a href="../index.php" class="logo">
      <!-- mini logo -->
	  <div class="logo-mini">
		  <span class="light-logo"><img src="../../images/logo-light.png" alt="logo"></span>
		  <span class="dark-logo"><img src="../../images/logo-dark.png" alt="logo"></span>
	  </div>
      <!-- logo-->
      <div class="logo-lg">
		  <span class="light-logo"><img src="../../images/logo-light-text.png" alt="logo"></span>
	  	  <span class="dark-logo"><img src="../../images/logo-dark-text.png" alt="logo"></span>
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
              <img src="../../images/avatar/7.jpg" class="user-image rounded-circle" alt="User Image">
            </a>
            <ul class="dropdown-menu animated flipInX">
              <!-- User image -->
              <li class="user-header bg-img" style="background-image: url(../../images/user-info.jpg)" data-overlay="3">
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
					<li><a href="contact_app_chat.php"><i class="ti-more"></i>Chat app</a></li>
					<li><a href="contact_userlist.php"><i class="ti-more"></i>Userlist</a></li>
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
					<li><a href="extra_app_ticket.php"><i class="ti-more"></i>Support Ticket</a></li>
					<li><a href="extra_calendar.php"><i class="ti-more"></i>Calendar</a></li>
					<li><a href="extra_salary_list.php"><i class="ti-more"></i>Salary</a></li>
					<li><a href="extra_bus_list.php"><i class="ti-more"></i>Bus</a></li>
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
					<li><a href="map_google.php"><i class="ti-more"></i>Google Map</a></li>
				  </ul>
				</li>


						  
				
				<li>
				  <a href="../pages/auth_login.php">
					<i class="ti-power-off"></i>
					<span>Log Out</span>
				  </a>
				</li> 

			  </ul>
			</section>
		</aside>
		</aside>   

		<!-- Main content -->
		<section class="content">
            <!-- Content Header (Page header) -->
            <div class="content-header">
                <div class="d-flex align-items-center">
                    <div class="mr-auto">
                        <h3 class="page-title">Calendar</h3>
                        <div class="d-inline-block align-items-center">
                            <nav>
                                <ol class="breadcrumb">
                                    <li class="breadcrumb-item"><a href="#"><i class="mdi mdi-home-outline"></i></a></li>
                                    <li class="breadcrumb-item" aria-current="page">Extra</li>
                                    <li class="breadcrumb-item active" aria-current="page">Calendar</li>
                                </ol>
                            </nav>
                        </div>
                    </div>
                    <div class="right-title">
                        <div class="dropdown">
                            <button class="btn btn-outline dropdown-toggle no-caret" type="button" data-toggle="dropdown"><i class="mdi mdi-dots-horizontal"></i></button>
                            <div class="dropdown-menu dropdown-menu-right">
                              <a class="dropdown-item" href="#"><i class="mdi mdi-share"></i>Activity</a>
                              <a class="dropdown-item" href="#"><i class="mdi mdi-email"></i>Messages</a>
                              <a class="dropdown-item" href="#"><i class="mdi mdi-help-circle-outline"></i>FAQ</a>
                              <a class="dropdown-item" href="#"><i class="mdi mdi-settings"></i>Support</a>
                              <div class="dropdown-divider"></div>
                              <button type="button" class="btn btn-rounded btn-success">Submit</button>
                            </div>
                          </div>
                    </div>
                </div>
            </div>

		    <div class="row">			
				<div class="col-12">
					<div class="box">
						<div class="box-body">
							<div class="row">
								<div class="col-xl-9 col-lg-8 col-12">	
									<div id="calendar"></div>
								</div>
								<div class="col-xl-3 col-lg-4 col-12">
									<div class="box no-border">
										<div class="box-header with-border">
										  <h4 class="box-title">Draggable Events</h4>
										</div>
										<div class="box-body p-0">
										  <!-- the events -->
										  <div id="external-events">
											<div class="external-event m-15 bg-primary" data-class="bg-primary"><i class="fa fa-hand-o-right"></i>Lunch</div>
											<div class="external-event m-15 bg-warning" data-class="bg-warning"><i class="fa fa-hand-o-right"></i>Go home</div>
											<div class="external-event m-15 bg-info" data-class="bg-info"><i class="fa fa-hand-o-right"></i>Do homework</div>
											<div class="external-event m-15 bg-success" data-class="bg-success"><i class="fa fa-hand-o-right"></i>Work on UI design</div>
											<div class="external-event m-15 bg-danger" data-class="bg-danger"><i class="fa fa-hand-o-right"></i>Sleep tight</div>
										  </div>
										  <div class="event-fc-bt mx-15 my-20">
											<!-- checkbox -->
											<div class="checkbox">
												<input id="drop-remove" type="checkbox">
												<label for="drop-remove">
													Remove after drop
												</label>
											</div>
											<a href="#" data-toggle="modal" data-target="#add-new-events" class="btn btn-success btn-block my-10">
												<i class="ti-plus"></i> Add New Event
											</a>
										  </div>
									   </div>
								  </div>								
								</div>
							</div>
						</div>
					</div>  
				  </div>  

				</div>
		</section>
		<!-- /.content -->
	  </div>	  
	
  </div>
  <!-- /.content-wrapper -->
	
  
  <!-- BEGIN MODAL -->
	<!-- Modal Add Category -->
	<div class="modal fade none-border" id="add-new-events">
		<div class="modal-dialog">
			<div class="modal-content">
				<div class="modal-header">
					<h4 class="modal-title"><strong>Add</strong> a category</h4>
					<button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
				</div>
				<div class="modal-body">
					<form role="form">
						<div class="row">
							<div class="col-md-6">
								<label class="control-label">Category Name</label>
								<input class="form-control form-white" placeholder="Enter name" type="text" name="category-name" />
							</div>
							<div class="col-md-6">
								<label class="control-label">Choose Category Color</label>
								<select class="form-control form-white" data-placeholder="Choose a color..." name="category-color">
									<option value="success">Success</option>
									<option value="danger">Danger</option>
									<option value="info">Info</option>
									<option value="primary">Primary</option>
									<option value="warning">Warning</option>
									<option value="inverse">Inverse</option>
								</select>
							</div>
						</div>
					</form>
				</div>
				<div class="modal-footer">
					<button type="button" class="btn btn-rounded btn-success save-category" data-dismiss="modal">Save</button>
					<button type="button" class="btn btn-rounded btn-danger" data-dismiss="modal">Close</button>
				</div>
			</div>
		</div>
	</div>
	<!-- END MODAL -->
 
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
	  
	<div class="rpanel-title"><span class="pull-right btn btn-circle btn-danger"><i class="ion ion-close text-white" data-toggle="control-sidebar"></i></span> </div>  <!-- Create the tabs -->
    <ul class="nav nav-tabs control-sidebar-tabs">
      <li class="nav-item"><a href="#control-sidebar-home-tab" data-toggle="tab" title="Notifications"><i class="ti-comment-alt"></i></a></li>
      <li class="nav-item"><a href="#control-sidebar-settings-tab" data-toggle="tab" title="Comments"><i class="ti-tag"></i></a></li>
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
      <div class="tab-pane" id="control-sidebar-settings-tab">
		  <div class="media-list media-list-hover media-list-divided">
			<div class="media">
			  <img class="avatar avatar-lg" src="../../images/avatar/1.jpg" alt="...">

			  <div class="media-body">
				<p><strong>Carter</strong> <span class="float-right">33 min ago</span></p>
				<p>Cras tempor diam nec metus...</p>
				<div class="media-block-actions">
				  <nav class="nav nav-dot-separated no-gutters">
					<div class="nav-item">
					  <a class="nav-link text-success" href="#"><i class="fa fa-thumbs-up"></i> (17)</a>
					</div>
					<div class="nav-item">
					  <a class="nav-link text-danger" href="#"><i class="fa fa-thumbs-down"></i> (22)</a>
					</div>
				  </nav>

				  <nav class="nav no-gutters gap-2 font-size-16 media-hover-show">
					<a class="nav-link text-success" href="#" data-toggle="tooltip" title="" data-original-title="Approve"><i class="ion-checkmark"></i></a>
					<a class="nav-link text-danger" href="#" data-toggle="tooltip" title="" data-original-title="Delete"><i class="ion-close"></i></a>
				  </nav>
				</div>
			  </div>
			</div>
			<div class="media">
			  <img class="avatar avatar-lg" src="../../images/avatar/2.jpg" alt="...">

			  <div class="media-body">
				<p><strong>Nicholas</strong> <span class="float-right">11 hour ago</span></p>
				<p>Praesent tristique diam...</p>
				<div class="media-block-actions">
				  <nav class="nav nav-dot-separated no-gutters">
					<div class="nav-item">
					  <a class="nav-link text-success" href="#"><i class="fa fa-thumbs-up"></i> (17)</a>
					</div>
					<div class="nav-item">
					  <a class="nav-link text-danger" href="#"><i class="fa fa-thumbs-down"></i> (23)</a>
					</div>
				  </nav>

				  <nav class="nav no-gutters gap-2 font-size-16 media-hover-show">
					<a class="nav-link text-success" href="#" data-toggle="tooltip" title="" data-original-title="Approve"><i class="ion-checkmark"></i></a>
					<a class="nav-link text-danger" href="#" data-toggle="tooltip" title="" data-original-title="Delete"><i class="ion-close"></i></a>
				  </nav>
				</div>
			  </div>
			</div>
			<div class="media">
			  <img class="avatar avatar-lg" src="../../images/avatar/1.jpg" alt="...">

			  <div class="media-body">
				<p><strong>Carter</strong> <span class="float-right">33 min ago</span></p>
				<p>Cras tempor diam nec...</p>
				<div class="media-block-actions">
				  <nav class="nav nav-dot-separated no-gutters">
					<div class="nav-item">
					  <a class="nav-link text-success" href="#"><i class="fa fa-thumbs-up"></i> (17)</a>
					</div>
					<div class="nav-item">
					  <a class="nav-link text-danger" href="#"><i class="fa fa-thumbs-down"></i> (22)</a>
					</div>
				  </nav>

				  <nav class="nav no-gutters gap-2 font-size-16 media-hover-show">
					<a class="nav-link text-success" href="#" data-toggle="tooltip" title="" data-original-title="Approve"><i class="ion-checkmark"></i></a>
					<a class="nav-link text-danger" href="#" data-toggle="tooltip" title="" data-original-title="Delete"><i class="ion-close"></i></a>
				  </nav>
				</div>
			  </div>
			</div>
			<div class="media">
			  <img class="avatar avatar-lg" src="../../images/avatar/2.jpg" alt="...">

			  <div class="media-body">
				<p><strong>Nicholas</strong> <span class="float-right">11 hour ago</span></p>
				<p>Praesent tristique diam...</p>
				<div class="media-block-actions">
				  <nav class="nav nav-dot-separated no-gutters">
					<div class="nav-item">
					  <a class="nav-link text-success" href="#"><i class="fa fa-thumbs-up"></i> (17)</a>
					</div>
					<div class="nav-item">
					  <a class="nav-link text-danger" href="#"><i class="fa fa-thumbs-down"></i> (23)</a>
					</div>
				  </nav>

				  <nav class="nav no-gutters gap-2 font-size-16 media-hover-show">
					<a class="nav-link text-success" href="#" data-toggle="tooltip" title="" data-original-title="Approve"><i class="ion-checkmark"></i></a>
					<a class="nav-link text-danger" href="#" data-toggle="tooltip" title="" data-original-title="Delete"><i class="ion-close"></i></a>
				  </nav>
				</div>
			  </div>
			</div>
			<div class="media">
			  <img class="avatar avatar-lg" src="../../images/avatar/1.jpg" alt="...">

			  <div class="media-body">
				<p><strong>Carter</strong> <span class="float-right">33 min ago</span></p>
				<p>Cras tempor diam nec metus...</p>
				<div class="media-block-actions">
				  <nav class="nav nav-dot-separated no-gutters">
					<div class="nav-item">
					  <a class="nav-link text-success" href="#"><i class="fa fa-thumbs-up"></i> (17)</a>
					</div>
					<div class="nav-item">
					  <a class="nav-link text-danger" href="#"><i class="fa fa-thumbs-down"></i> (22)</a>
					</div>
				  </nav>

				  <nav class="nav no-gutters gap-2 font-size-16 media-hover-show">
					<a class="nav-link text-success" href="#" data-toggle="tooltip" title="" data-original-title="Approve"><i class="ion-checkmark"></i></a>
					<a class="nav-link text-danger" href="#" data-toggle="tooltip" title="" data-original-title="Delete"><i class="ion-close"></i></a>
				  </nav>
				</div>
			  </div>
			</div>
			<div class="media">
			  <img class="avatar avatar-lg" src="../../images/avatar/2.jpg" alt="...">

			  <div class="media-body">
				<p><strong>Nicholas</strong> <span class="float-right">11 hour ago</span></p>
				<p>Praesent tristique diam...</p>
				<div class="media-block-actions">
				  <nav class="nav nav-dot-separated no-gutters">
					<div class="nav-item">
					  <a class="nav-link text-success" href="#"><i class="fa fa-thumbs-up"></i> (17)</a>
					</div>
					<div class="nav-item">
					  <a class="nav-link text-danger" href="#"><i class="fa fa-thumbs-down"></i> (23)</a>
					</div>
				  </nav>

				  <nav class="nav no-gutters gap-2 font-size-16 media-hover-show">
					<a class="nav-link text-success" href="#" data-toggle="tooltip" title="" data-original-title="Approve"><i class="ion-checkmark"></i></a>
					<a class="nav-link text-danger" href="#" data-toggle="tooltip" title="" data-original-title="Delete"><i class="ion-close"></i></a>
				  </nav>
				</div>
			  </div>
			</div>
			<div class="media">
			  <img class="avatar avatar-lg" src="../../images/avatar/1.jpg" alt="...">

			  <div class="media-body">
				<p><strong>Carter</strong> <span class="float-right">33 min ago</span></p>
				<p>Cras tempor diam nec...</p>
				<div class="media-block-actions">
				  <nav class="nav nav-dot-separated no-gutters">
					<div class="nav-item">
					  <a class="nav-link text-success" href="#"><i class="fa fa-thumbs-up"></i> (17)</a>
					</div>
					<div class="nav-item">
					  <a class="nav-link text-danger" href="#"><i class="fa fa-thumbs-down"></i> (22)</a>
					</div>
				  </nav>

				  <nav class="nav no-gutters gap-2 font-size-16 media-hover-show">
					<a class="nav-link text-success" href="#" data-toggle="tooltip" title="" data-original-title="Approve"><i class="ion-checkmark"></i></a>
					<a class="nav-link text-danger" href="#" data-toggle="tooltip" title="" data-original-title="Delete"><i class="ion-close"></i></a>
				  </nav>
				</div>
			  </div>
			</div>
			<div class="media">
			  <img class="avatar avatar-lg" src="../../images/avatar/2.jpg" alt="...">

			  <div class="media-body">
				<p><strong>Nicholas</strong> <span class="float-right">11 hour ago</span></p>
				<p>Praesent tristique diam...</p>
				<div class="media-block-actions">
				  <nav class="nav nav-dot-separated no-gutters">
					<div class="nav-item">
					  <a class="nav-link text-success" href="#"><i class="fa fa-thumbs-up"></i> (17)</a>
					</div>
					<div class="nav-item">
					  <a class="nav-link text-danger" href="#"><i class="fa fa-thumbs-down"></i> (23)</a>
					</div>
				  </nav>

				  <nav class="nav no-gutters gap-2 font-size-16 media-hover-show">
					<a class="nav-link text-success" href="#" data-toggle="tooltip" title="" data-original-title="Approve"><i class="ion-checkmark"></i></a>
					<a class="nav-link text-danger" href="#" data-toggle="tooltip" title="" data-original-title="Delete"><i class="ion-close"></i></a>
				  </nav>
				</div>
			  </div>
			</div>
		  </div>
      </div>
      <!-- /.tab-pane -->
    </div>
  </aside>
  <!-- /.control-sidebar -->
  
  <!-- Add the sidebar's background. This div must be placed immediately after the control sidebar -->
  <div class="control-sidebar-bg"></div>
</div>
<!-- ./wrapper -->

	<!-- jQuery 3 -->
	<script src="../../assets/vendor_components/jquery-3.3.1/jquery-3.3.1.js"></script>
	
	<!-- fullscreen -->
	<script src="../../assets/vendor_components/screenfull/screenfull.js"></script>
	
	<!-- popper -->
	<script src="../../assets/vendor_components/popper/dist/popper.min.js"></script>
	
	<!-- Bootstrap 4.0-->
	<script src="../../assets/vendor_components/bootstrap/dist/js/bootstrap.min.js"></script>
	
	<!-- jQuery UI 1.11.4 -->
	<script src="../../assets/vendor_components/jquery-ui/jquery-ui.min.js"></script>
	
	<!-- SlimScroll -->
	<script src="../../assets/vendor_components/jquery-slimscroll/jquery.slimscroll.js"></script>
    <script src="../../assets/vendor_components/perfect-scrollbar-master/perfect-scrollbar.jquery.min.js"></script>
	
	<!-- FastClick -->
	<script src="../../assets/vendor_components/fastclick/lib/fastclick.js"></script>
	
	<!-- VoiceX Admin App -->
	<script src="../js/template.js"></script>
	
	<!-- VoiceX Admin for demo purposes -->
	<script src="../js/demo.js"></script>

	<!-- fullCalendar -->
	<script src="../../assets/vendor_components/fullcalendar/lib/moment.min.js"></script>
	<script src="../../assets/vendor_components/fullcalendar/fullcalendar.min.js"></script>
	
	<!-- VoiceX Admin for calendar -->
	<script src="../js/pages/calendar.js"></script>
	

</body>
</html>
