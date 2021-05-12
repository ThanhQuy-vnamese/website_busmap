<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="../../images/favicon.ico">

    <title>VoiceX Admin - Dashboard  Google map </title>
  
	<!-- Bootstrap 4.0-->
	<link rel="stylesheet" href="../../assets/vendor_components/bootstrap/dist/css/bootstrap.min.css">
	
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
    <a href="../index.html" class="logo">
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
			<li class="btn-group nav-item d-xl-inline-flex d-none">
				<a href="#" class="nav-link rounded" data-toggle="dropdown" aria-expanded="false">
					<i class="nav-link-icon mdi mdi-view-dashboard text-white mx-5 mx-lg-0"> </i>
					<span class="d-xl-inline-block d-none">MEGA
					<i class="mdi mdi-dots-vertical ml-2"></i></span>
				</a>
				<div class="dropdown-menu dropdown-grid">
					<div class="dropdown-mega-menu">
						<div class="row">
							<div class="col-lg-4 col-12">
								<ul class="nav flex-column">
									<li class="nav-item-header nav-item">
										Overview
									</li>
									<li class="nav-item">
										<a href="javascript:void(0);" class="nav-link">
											<i class="nav-link-icon fa fa-inbox mr-10">
											</i>
											<span>
												Contacts
											</span>
										</a>
									</li>
									<li class="nav-item">
										<a href="javascript:void(0);" class="nav-link">
											<i class="nav-link-icon fa fa-book mr-10">
											</i>
											<span>
												Incidents
											</span>
											<div class="ml-auto badge badge-pill badge-danger">5
											</div>
										</a>
									</li>
									<li class="nav-item">
										<a href="javascript:void(0);" class="nav-link">
											<i class="nav-link-icon fa fa-picture-o mr-10">
											</i>
											<span>
												Companies
											</span>
										</a>
									</li>
									<li class="nav-item">
										<a href="javascript:void(0);" class="nav-link disabled">
											<i class="nav-link-icon fa fa-dashboard mr-10">
											</i>
											<span>
												Dashboards
											</span>
										</a>
									</li>
								</ul>
							</div>
							<div class="col-lg-4 col-12 bx-1">
								<ul class="nav flex-column">
									<li class="nav-item-header nav-item">
										Favourites
									</li>
									<li class="nav-item">
										<a href="javascript:void(0);" class="nav-link">
											Reports Conversions
										</a>
									</li>
									<li class="nav-item">
										<a href="javascript:void(0);" class="nav-link">
											Quick Start
											<div class="ml-auto badge badge-success">New</div>
										</a>
									</li>
									<li class="nav-item">
										<a href="javascript:void(0);" class="nav-link">Users &amp; Groups</a>
									</li>
									<li class="nav-item">
										<a href="javascript:void(0);" class="nav-link">Proprieties</a>
									</li>
								</ul>
							</div>
							<div class="col-lg-4 col-12">
								<ul class="nav flex-column">
									<li class="nav-item-header nav-item">
										Sales & Marketing
									</li>
									<li class="nav-item">
										<a href="javascript:void(0);" class="nav-link">Queues
										</a>
									</li>
									<li class="nav-item">
										<a href="javascript:void(0);" class="nav-link">Resource Groups
										</a>
									</li>
									<li class="nav-item">
										<a href="javascript:void(0);" class="nav-link">Goal Metrics
											<div class="ml-auto badge badge-warning">3
											</div>
										</a>
									</li>
									<li class="nav-item">
										<a href="javascript:void(0);" class="nav-link">Campaigns
										</a>
									</li>
								</ul>
							</div>
						</div>
					</div>
				</div>
			</li>			
			<li class="dropdown nav-item d-xl-inline-flex d-none">
				<a href="#" aria-haspopup="true"  data-toggle="dropdown" class="nav-link rounded" aria-expanded="false">
					<i class="nav-link-icon mdi mdi-apps text-white mx-5 mx-lg-0"></i>
					<span class="d-xl-inline-block d-none">PROJECTS
					<i class="fa fa-angle-down ml-2"></i></span>
				</a>
				<div class="dropdown-menu overflow-hidden">
					<div class="dropdown-menu-header-inner bg-img" style="background-image: url('../images/gallery/landscape1.jpg');" data-overlay="5">
						<div class="p-30 text-left w-250">
							<h5 class="text-white">Overview</h5>
							<h6 class="text-white">Unlimited options</h6>
							<div class="menu-header-btn-pane">
								<button class="mr-2 btn btn-success btn-sm">Settings</button>
								<button class="btn-icon btn-icon-only btn btn-info btn-sm">
									<i class="fa fa-cog"></i>
								</button>
							</div>
						</div>
					</div>
					<div class="p-10">
						<button type="button" class="btn btn-flat btn-light no-shadow w-p100 text-left"><i class="mdi mdi-file-multiple mr-10"> </i>Graphic Design</button>
						<button type="button" class="btn btn-flat btn-light no-shadow w-p100 text-left"><i class="mdi mdi-file-multiple mr-10"> </i>App Development</button>
						<button type="button" class="btn btn-flat btn-light no-shadow w-p100 text-left"><i class="mdi mdi-file-multiple mr-10"> </i>Icon Design</button>
						<div tabindex="-1" class="dropdown-divider"></div>
						<button type="button" class="btn btn-flat btn-light no-shadow w-p100 text-left"><i class="mdi mdi-file-multiple mr-10"> </i>Miscellaneous</button>
						<button type="button" class="btn btn-flat btn-light no-shadow w-p100 text-left"><i class="mdi mdi-file-multiple mr-10"> </i>Frontend Dev</button>
					</div>
				  </div>
			</li>
		</ul> 
	  </div>
		
      <div class="navbar-custom-menu r-side">
        <ul class="nav navbar-nav">
		  <!-- full Screen -->
	      <li class="search-bar d-sm-inline-flex d-none">		  
			  <div class="lookup lookup-circle lookup-right">
			     <input type="text" name="s">
			  </div>
		  </li>			
		  <!-- Messages -->
		  <li class="dropdown messages-menu">
			<a href="#" class="dropdown-toggle" data-toggle="dropdown" title="Messages">
			  <i class="mdi mdi-email"></i>
			</a>
			<ul class="dropdown-menu animated bounceIn">

			  <li class="header">
				<div class="p-20">
					<div class="flexbox">
						<div>
							<h4 class="mb-0 mt-0">Messages</h4>
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
				  <li><!-- start message -->
					<a href="#">
					  <div class="pull-left">
						<img src="../../images/user2-160x160.jpg" class="rounded-circle" alt="User Image">
					  </div>
					  <div class="mail-contnet">
						 <h4>
						  Lorem Ipsum
						  <small><i class="fa fa-clock-o"></i> 15 mins</small>
						 </h4>
						 <span>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</span>
					  </div>
					</a>
				  </li>
				  <!-- end message -->
				  <li>
					<a href="#">
					  <div class="pull-left">
						<img src="../../images/user3-128x128.jpg" class="rounded-circle" alt="User Image">
					  </div>
					  <div class="mail-contnet">
						 <h4>
						  Nullam tempor
						  <small><i class="fa fa-clock-o"></i> 4 hours</small>
						 </h4>
						 <span>Curabitur facilisis erat quis metus congue viverra.</span>
					  </div>
					</a>
				  </li>
				  <li>
					<a href="#">
					  <div class="pull-left">
						<img src="../../images/user4-128x128.jpg" class="rounded-circle" alt="User Image">
					  </div>
					  <div class="mail-contnet">
						 <h4>
						  Proin venenatis
						  <small><i class="fa fa-clock-o"></i> Today</small>
						 </h4>
						 <span>Vestibulum nec ligula nec quam sodales rutrum sed luctus.</span>
					  </div>
					</a>
				  </li>
				  <li>
					<a href="#">
					  <div class="pull-left">
						<img src="../../images/user3-128x128.jpg" class="rounded-circle" alt="User Image">
					  </div>
					  <div class="mail-contnet">
						 <h4>
						  Praesent suscipit
						<small><i class="fa fa-clock-o"></i> Yesterday</small>
						 </h4>
						 <span>Curabitur quis risus aliquet, luctus arcu nec, venenatis neque.</span>
					  </div>
					</a>
				  </li>
				  <li>
					<a href="#">
					  <div class="pull-left">
						<img src="../../images/user4-128x128.jpg" class="rounded-circle" alt="User Image">
					  </div>
					  <div class="mail-contnet">
						 <h4>
						  Donec tempor
						  <small><i class="fa fa-clock-o"></i> 2 days</small>
						 </h4>
						 <span>Praesent vitae tellus eget nibh lacinia pretium.</span>
					  </div>

					</a>
				  </li>
				</ul>
			  </li>
			  <li class="footer">				  
				  <a href="#">See all e-Mails</a>
			  </li>
			</ul>
		  </li>
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
				  <li>
					<a href="#">
					  <i class="fa fa-users text-info"></i> Curabitur id eros quis nunc suscipit blandit.
					</a>
				  </li>
				  <li>
					<a href="#">
					  <i class="fa fa-warning text-warning"></i> Duis malesuada justo eu sapien elementum, in semper diam posuere.
					</a>
				  </li>
				  <li>
					<a href="#">
					  <i class="fa fa-users text-danger"></i> Donec at nisi sit amet tortor commodo porttitor pretium a erat.
					</a>
				  </li>
				  <li>
					<a href="#">
					  <i class="fa fa-shopping-cart text-success"></i> In gravida mauris et nisi
					</a>
				  </li>
				  <li>
					<a href="#">
					  <i class="fa fa-user text-danger"></i> Praesent eu lacus in libero dictum fermentum.
					</a>
				  </li>
				  <li>
					<a href="#">
					  <i class="fa fa-user text-primary"></i> Nunc fringilla lorem 
					</a>
				  </li>
				  <li>
					<a href="#">
					  <i class="fa fa-user text-success"></i> Nullam euismod dolor ut quam interdum, at scelerisque ipsum imperdiet.
					</a>
				  </li>
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
				  	<img src="../../images/avatar/7.jpg" class="float-left rounded-circle" alt="User Image">					  
					<h4 class="user-name align-self-center">
					  <span>Samuel Brus</span>
					  <small>samuel@gmail.com</small>
					</h4>
				  </div>
              </li>
              <!-- Menu Body -->
              <li class="user-body">
				    <a class="dropdown-item" href="javascript:void(0)"><i class="ion ion-person"></i> My Profile</a>
					<a class="dropdown-item" href="javascript:void(0)"><i class="ion ion-bag"></i> My Balance</a>
					<a class="dropdown-item" href="javascript:void(0)"><i class="ion ion-email-unread"></i> Inbox</a>
					<div class="dropdown-divider"></div>
					<a class="dropdown-item" href="javascript:void(0)"><i class="ion ion-settings"></i> Account Setting</a>
					<div class="dropdown-divider"></div>
					<a class="dropdown-item" href="javascript:void(0)"><i class="ion-log-out"></i> Logout</a>
					<div class="dropdown-divider"></div>
					<div class="p-10"><a href="javascript:void(0)" class="btn btn-sm btn-rounded btn-success">View Profile</a></div>
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

				<li class="header nav-small-cap">PERSONAL</li>

				<li class="treeview">
				  <a href="#">
					<i class="ti-dashboard"></i>
					<span>Dashboard</span>
					<span class="pull-right-container">
					  <i class="fa fa-angle-right pull-right"></i>
					</span>
				  </a>
				  <ul class="treeview-menu">
					<li><a href="../index.html"><i class="ti-more"></i>Material</a></li>
					<li><a href="../index-2.html"><i class="ti-more"></i>e-Commerce</a></li>
					<li><a href="../index-3.html"><i class="ti-more"></i>Analytics</a></li>
					<li><a href="../index-4.html"><i class="ti-more"></i>Hospital</a></li>
					<li><a href="../index-5.html"><i class="ti-more"></i>Real Estate</a></li>
					<li><a href="../index-6.html"><i class="ti-more"></i>University</a></li>
					<li><a href="../index-7.html"><i class="ti-more"></i>Foodplaza</a></li>
				  </ul>
				</li>   

				<li class="treeview">
				  <a href="#">
					<i class="ti-files"></i>
					<span>Layout Options</span>
					<span class="pull-right-container">
					  <i class="fa fa-angle-right pull-right"></i>
					</span>
				  </a>
				  <ul class="treeview-menu">
					<li><a href="layout_boxed.html"><i class="ti-more"></i>Boxed</a></li>
					<li><a href="layout_fixed.html"><i class="ti-more"></i>Fixed</a></li>
					<li><a href="layout_collapsed_sidebar.html"><i class="ti-more"></i>Mini Sidebar</a></li>
				  </ul>
				</li>				  
				<li class="header nav-small-cap">APPS</li>

				<li>
				  <a href="mailbox.html">
					<i class="ti-email"></i> <span>Mailbox</span>
				  </a>
				</li>

				<li class="treeview">
				  <a href="#">
					<i class="ti-user"></i>
					<span>Contact</span>
					<span class="pull-right-container">
					  <i class="fa fa-angle-right pull-right"></i>
					</span>
				  </a>
				  <ul class="treeview-menu">
					<li><a href="contact_app_chat.html"><i class="ti-more"></i>Chat app</a></li>
					<li><a href="contact_app.html"><i class="ti-more"></i>Contact / Employee</a></li>
					<li><a href="contact_userlist_grid.html"><i class="ti-more"></i>Userlist Grid</a></li>
					<li><a href="contact_userlist.html"><i class="ti-more"></i>Userlist</a></li>
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
					<li><a href="extra_app_ticket.html"><i class="ti-more"></i>Support Ticket</a></li>
					<li><a href="extra_calendar.html"><i class="ti-more"></i>Calendar</a></li>
					<li><a href="extra_profile.html"><i class="ti-more"></i>Profile</a></li>
					<li><a href="extra_taskboard.html"><i class="ti-more"></i>Project DashBoard</a></li>
				  </ul>
				</li>


				<li class="header nav-small-cap">UI</li>


				<li class="treeview">
				  <a href="#">
					<i class="ti-pencil-alt"></i>
					<span>UI Elements</span>
					<span class="pull-right-container">
					  <i class="fa fa-angle-right pull-right"></i>
					</span>
				  </a>
				  <ul class="treeview-menu">
					<li><a href="ui_badges.html"><i class="ti-more"></i>Badges</a></li>
					<li><a href="ui_border_utilities.html"><i class="ti-more"></i>Border</a></li>
					<li><a href="ui_buttons.html"><i class="ti-more"></i>Buttons</a></li>	
					<li><a href="ui_color_utilities.html"><i class="ti-more"></i>Color</a></li>
					<li><a href="ui_dropdown.html"><i class="ti-more"></i>Dropdown</a></li>
					<li><a href="ui_dropdown_grid.html"><i class="ti-more"></i>Dropdown Grid</a></li>
					<li><a href="ui_typography.html"><i class="ti-more"></i>Typography</a></li>
					<li><a href="ui_progress_bars.html"><i class="ti-more"></i>Progress Bars</a></li>
					<li><a href="ui_grid.html"><i class="ti-more"></i>Grid</a></li>
					<li><a href="ui_ribbons.html"><i class="ti-more"></i>Ribbons</a></li>
					<li><a href="ui_sliders.html"><i class="ti-more"></i>Sliders</a></li>
					<li><a href="ui_tab.html"><i class="ti-more"></i>Tabs</a></li>
					<li><a href="ui_timeline.html"><i class="ti-more"></i>Timeline</a></li>
					<li><a href="ui_timeline_horizontal.html"><i class="ti-more"></i>Horizontal Timeline</a></li>
				  </ul>
				</li>  

				<li class="treeview">
				  <a href="#">
					<i class="ti-smallcap"></i>
					<span>Icons</span>
					<span class="pull-right-container">
					  <i class="fa fa-angle-right pull-right"></i>
					</span>
				  </a>
				  <ul class="treeview-menu">
					<li><a href="icons_fontawesome.html"><i class="ti-more"></i>Font Awesome</a></li>
					<li><a href="icons_glyphicons.html"><i class="ti-more"></i>Glyphicons</a></li>
					<li><a href="icons_material.html"><i class="ti-more"></i>Material Icons</a></li>	
					<li><a href="icons_themify.html"><i class="ti-more"></i>Themify Icons</a></li>
					<li><a href="icons_simpleline.html"><i class="ti-more"></i>Simple Line Icons</a></li>
					<li><a href="icons_cryptocoins.html"><i class="ti-more"></i>Cryptocoins Icons</a></li>
					<li><a href="icons_flag.html"><i class="ti-more"></i>Flag Icons</a></li>
					<li><a href="icons_weather.html"><i class="ti-more"></i>Weather Icons</a></li>
				  </ul>
				</li> 		  

				<li class="treeview">
				  <a href="#">
					<i class="ti-check-box"></i>
					<span>Components</span>
					<span class="pull-right-container">
					  <i class="fa fa-angle-right pull-right"></i>
					</span>
				  </a>
				  <ul class="treeview-menu">			
					<li><a href="component_bootstrap_switch.html"><i class="ti-more"></i>Bootstrap Switch</a></li>
					<li><a href="component_date_paginator.html"><i class="ti-more"></i>Date Paginator</a></li>
					<li><a href="component_media_advanced.html"><i class="ti-more"></i>Advanced Medias</a></li>
					<li><a href="component_modals.html"><i class="ti-more"></i>Modals</a></li>
					<li><a href="component_nestable.html"><i class="ti-more"></i>Nestable</a></li>
					<li><a href="component_notification.html"><i class="ti-more"></i>Notification</a></li>
					<li><a href="component_portlet_draggable.html"><i class="ti-more"></i>Draggable Portlets</a></li>
					<li><a href="component_sweatalert.html"><i class="ti-more"></i>Sweet Alert</a></li>
					<li><a href="component_rangeslider.html"><i class="ti-more"></i>Range Slider</a></li>
					<li><a href="component_rating.html"><i class="ti-more"></i>Ratings</a></li>
					<li><a href="component_animations.html"><i class="ti-more"></i>Animations</a></li>
				  </ul>
				</li>		  

				<li class="treeview">
				  <a href="#">
					<i class="ti-package"></i>
					<span>Box Cards</span>
					<span class="pull-right-container">
					  <i class="fa fa-angle-right pull-right"></i>
					</span>
				  </a>
				  <ul class="treeview-menu">
					<li><a href="box_cards.html"><i class="ti-more"></i>User Card</a></li>
					<li><a href="box_advanced.html"><i class="ti-more"></i>Advanced Card</a></li>
					<li><a href="box_basic.html"><i class="ti-more"></i>Basic Card</a></li>
					<li><a href="box_color.html"><i class="ti-more"></i>Card Color</a></li>
					<li><a href="box_group.html"><i class="ti-more"></i>Card Group</a></li>
				  </ul>
				</li>		  

				<li class="treeview">
				  <a href="#">
					<i class="ti-palette"></i>
					<span>Widgets</span>
					<span class="pull-right-container">
					  <i class="fa fa-angle-right pull-right"></i>
					</span>
				  </a>
				  <ul class="treeview-menu">
					<li><a href="widgets_blog.html"><i class="ti-more"></i>Blog</a></li>
					<li><a href="widgets_chart.html"><i class="ti-more"></i>Chart</a></li>
					<li><a href="widgets_list.html"><i class="ti-more"></i>List</a></li>
					<li><a href="widgets_social.html"><i class="ti-more"></i>Social</a></li>
					<li><a href="widgets_statistic.html"><i class="ti-more"></i>Statistic</a></li>
					<li><a href="widgets_weather.html"><i class="ti-more"></i>Weather</a></li>
					<li><a href="widgets.html"><i class="ti-more"></i>Widgets</a></li>
				  </ul>
				</li>


				<li class="header nav-small-cap">FORMS And TABLES</li> 


				<li class="treeview">
				  <a href="#">
					<i class="ti-write"></i>
					<span>Forms</span>
					<span class="pull-right-container">
					  <i class="fa fa-angle-right pull-right"></i>
					</span>
				  </a>
				  <ul class="treeview-menu">
					<li><a href="forms_advanced.html"><i class="ti-more"></i>Advanced Elements</a></li>
					<li><a href="forms_code_editor.html"><i class="ti-more"></i>Code Editor</a></li>
					<li><a href="forms_editor_markdown.html"><i class="ti-more"></i>Markdown</a></li>
					<li><a href="forms_editors.html"><i class="ti-more"></i>Editors</a></li>
					<li><a href="forms_validation.html"><i class="ti-more"></i>Form Validation</a></li>
					<li><a href="forms_wizard.html"><i class="ti-more"></i>Form Wizard</a></li>
					<li><a href="forms_general.html"><i class="ti-more"></i>General Elements</a></li>
					<li><a href="forms_mask.html"><i class="ti-more"></i>Formatter</a></li>
					<li><a href="forms_xeditable.html"><i class="ti-more"></i>Xeditable Editor</a></li>
					<li><a href="forms_dropzone.html"><i class="ti-more"></i>Dropzone</a></li>
				  </ul>
				</li>

				<li class="treeview">
				  <a href="#">
					<i class="ti-layout-grid4"></i>
					<span>Tables</span>
					<span class="pull-right-container">
					  <i class="fa fa-angle-right pull-right"></i>
					</span>
				  </a>
				  <ul class="treeview-menu">
					<li><a href="tables_simple.html"><i class="ti-more"></i>Simple tables</a></li>
					<li><a href="tables_data.html"><i class="ti-more"></i>Data tables</a></li>
					<li><a href="tables_editable.html"><i class="ti-more"></i>Editable Tables</a></li>
					<li><a href="tables_color.html"><i class="ti-more"></i>Table Color</a></li>
				  </ul>
				</li>


				<li class="header nav-small-cap">CHARTS</li> 

				<li class="treeview">
				  <a href="#">
					<i class="ti-pie-chart"></i>
					<span>Charts</span>
					<span class="pull-right-container">
					  <i class="fa fa-angle-right pull-right"></i>
					</span>
				  </a>
				  <ul class="treeview-menu">
					<li><a href="charts_chartjs.html"><i class="ti-more"></i>ChartJS</a></li>
					<li><a href="charts_flot.html"><i class="ti-more"></i>Flot</a></li>
					<li><a href="charts_inline.html"><i class="ti-more"></i>Inline charts</a></li>
					<li><a href="charts_morris.html"><i class="ti-more"></i>Morris</a></li>
					<li><a href="charts_peity.html"><i class="ti-more"></i>Peity</a></li>
					<li><a href="charts_chartist.html"><i class="ti-more"></i>Chartist</a></li>
				  </ul>
				</li> 

				<li class="treeview">
				  <a href="#">
					<i class="ti-stats-up"></i>
					<span>C3 Charts</span>
					<span class="pull-right-container">
					  <i class="fa fa-angle-right pull-right"></i>
					</span>
				  </a>
				  <ul class="treeview-menu">
					<li><a href="charts_c3_axis.html"><i class="ti-more"></i>Axis Chart</a></li>
					<li><a href="charts_c3_bar.html"><i class="ti-more"></i>Bar Chart</a></li>
					<li><a href="charts_c3_data.html"><i class="ti-more"></i>Data Chart</a></li>
					<li><a href="charts_c3_line.html"><i class="ti-more"></i>Line Chart</a></li>
				  </ul>
				</li>

				<li class="treeview">
				  <a href="#">
					<i class="ti-pie-chart"></i>
					<span>Echarts</span>
					<span class="pull-right-container">
					  <i class="fa fa-angle-right pull-right"></i>
					</span>
				  </a>
				  <ul class="treeview-menu">
					<li><a href="charts_echarts_basic.html"><i class="ti-more"></i>Basic Charts</a></li>
					<li><a href="charts_echarts_bar.html"><i class="ti-more"></i>Bar Chart</a></li>
					<li><a href="charts_echarts_pie_doughnut.html"><i class="ti-more"></i>Pie & Doughnut Chart</a></li>
				  </ul>
				</li>


				<li class="header nav-small-cap">EXTRA COMPONENTS</li>

				<li class="treeview">
				  <a href="#">
					<i class="ti-envelope"></i>
					<span>Emails</span>
					<span class="pull-right-container">
					  <i class="fa fa-angle-right pull-right"></i>
					</span>
				  </a>
				  <ul class="treeview-menu">
					<li><a href="email_welcome.html"><i class="ti-more"></i>Welcome Email</a></li>
					<li><a href="email_verify_email.html"><i class="ti-more"></i>Verify Emial</a></li>
					<li><a href="email_change_pass.html"><i class="ti-more"></i>Change Password</a></li>
					<li><a href="email_update.html"><i class="ti-more"></i>User Updates</a></li>
					<li><a href="email_expired_card.html"><i class="ti-more"></i>Expired Card</a></li>
					<li><a href="email_closed_account.html"><i class="ti-more"></i>Closed Account</a></li>
				  </ul>
				</li>  

				<li class="treeview active">
				  <a href="#">
					<i class="ti-map-alt"></i>
					<span>Map</span>
					<span class="pull-right-container">
					  <i class="fa fa-angle-right pull-right"></i>
					</span>
				  </a>
				  <ul class="treeview-menu">
					<li class="active"><a href="map_google.html"><i class="ti-more"></i>Google Map</a></li>
					<li><a href="map_vector.html"><i class="ti-more"></i>Vector Map</a></li>
				  </ul>
				</li>
				<li class="treeview">
				  <a href="#">
					<i class="ti-plug"></i>
					<span>Extension</span>
					<span class="pull-right-container">
					  <i class="fa fa-angle-right pull-right"></i>
					</span>
				  </a>
				  <ul class="treeview-menu">
					<li><a href="extension_fullscreen.html"><i class="ti-more"></i>Fullscreen</a></li>
					<li><a href="extension_pace.html"><i class="ti-more"></i>Pace</a></li>
				  </ul>
				</li> 


				<li class="header nav-small-cap">SAMPLE PAGES</li>


				<li class="treeview">
				  <a href="#">
					<i class="ti-shopping-cart"></i>
					<span>Ecommerce Pages</span>
					<span class="pull-right-container">
					  <i class="fa fa-angle-right pull-right"></i>
					</span>
				  </a>
				  <ul class="treeview-menu">
					<li><a href="ecommerce_products.html"><i class="ti-more"></i>Products</a></li>
					<li><a href="ecommerce_cart.html"><i class="ti-more"></i>Products Cart</a></li>
					<li><a href="ecommerce_products_edit.html"><i class="ti-more"></i>Products Edit</a></li>
					<li><a href="ecommerce_details.html"><i class="ti-more"></i>Product Details</a></li>
					<li><a href="ecommerce_orders.html"><i class="ti-more"></i>Product Orders</a></li>
					<li><a href="ecommerce_checkout.html"><i class="ti-more"></i>Products Checkout</a></li>
				  </ul>
				</li>		  

				<li class="treeview">
				  <a href="#">
					<i class="ti-shield"></i>
					<span>Authentication</span>
					<span class="pull-right-container">
					  <i class="fa fa-angle-right pull-right"></i>
					</span>
				  </a>
				  <ul class="treeview-menu">
					<li><a href="auth_login.html"><i class="ti-more"></i>Login</a></li>
					<li><a href="auth_login2.html"><i class="ti-more"></i>Login 2</a></li>
					<li><a href="auth_register.html"><i class="ti-more"></i>Register</a></li>
					<li><a href="auth_register2.html"><i class="ti-more"></i>Register 2</a></li>
					<li><a href="auth_lockscreen.html"><i class="ti-more"></i>Lockscreen</a></li>
					<li><a href="auth_user_pass.html"><i class="ti-more"></i>Recover password</a></li>	
				  </ul>
				</li> 		  

				<li class="treeview">
				  <a href="#">
					<i class="ti-receipt"></i>
					<span>Invoice</span>
					<span class="pull-right-container">
					  <i class="fa fa-angle-right pull-right"></i>
					</span>
				  </a>
				  <ul class="treeview-menu">
					<li><a href="invoice.html"><i class="ti-more"></i>Invoice</a></li>
					<li><a href="invoicelist.html"><i class="ti-more"></i>Invoice List</a></li>	
				  </ul>
				</li>		  

				<li class="treeview">
				  <a href="#">
					<i class="ti-alert"></i>
					<span>Error Pages</span>
					<span class="pull-right-container">
					  <i class="fa fa-angle-right pull-right"></i>
					</span>
				  </a>
				  <ul class="treeview-menu">
					<li><a href="error_400.html"><i class="ti-more"></i>Error 400</a></li>
					<li><a href="error_403.html"><i class="ti-more"></i>Error 403</a></li>
					<li><a href="error_404.html"><i class="ti-more"></i>Error 404</a></li>
					<li><a href="error_500.html"><i class="ti-more"></i>Error 500</a></li>
					<li><a href="error_503.html"><i class="ti-more"></i>Error 503</a></li>
					<li><a href="error_maintenance.html"><i class="ti-more"></i>Maintenance</a></li>	
				  </ul>
				</li>   

				<li class="treeview">
				  <a href="#">
					<i class="ti-files"></i>
					<span>Sample Pages</span>
					<span class="pull-right-container">
					  <i class="fa fa-angle-right pull-right"></i>
					</span>
				  </a>
				  <ul class="treeview-menu">
					<li><a href="sample_blank.html"><i class="ti-more"></i>Blank</a></li>
					<li class="treeview"><a href="#"><i class="ti-more"></i>Coming Soon
							<span class="pull-right-container">
					  			<i class="fa fa-angle-right pull-right"></i>
							</span>
						</a>
						<ul class="treeview-menu">
							<li><a href="sample_coming_soon_1.html"><i class="ti-more"></i>Coming Soon 1</a></li>
							<li><a href="sample_coming_soon_2.html"><i class="ti-more"></i>Coming Soon 2</a></li>
							<li><a href="sample_coming_soon_3.html"><i class="ti-more"></i>Coming Soon 3</a></li>
						</ul>					  
					</li>
					<li><a href="sample_custom_scroll.html"><i class="ti-more"></i>Custom Scrolls</a></li>
					<li><a href="sample_faq.html"><i class="ti-more"></i>FAQ</a></li>
					<li><a href="sample_gallery.html"><i class="ti-more"></i>Gallery</a></li>
					<li><a href="sample_lightbox.html"><i class="ti-more"></i>Lightbox Popup</a></li>
					<li><a href="sample_pricing.html"><i class="ti-more"></i>Pricing</a></li>
				  </ul>
				</li>


				<li class="header nav-small-cap">EXTRA</li>		  

				<li class="treeview">
				  <a href="#">
					<i class="ti-view-list"></i>
					<span>Multilevel</span>
					<span class="pull-right-container">
					  <i class="fa fa-angle-right pull-right"></i>
					</span>
				  </a>
				  <ul class="treeview-menu">
					<li><a href="#">Level One</a></li>
					<li class="treeview">
					  <a href="#">Level One
						<span class="pull-right-container">
					  <i class="fa fa-angle-right pull-right"></i>
					</span>
					  </a>
					  <ul class="treeview-menu">
						<li><a href="#">Level Two</a></li>
						<li class="treeview">
						  <a href="#">Level Two
							<span class="pull-right-container">
					  <i class="fa fa-angle-right pull-right"></i>
					</span>
						  </a>
						  <ul class="treeview-menu">
							<li><a href="#">Level Three</a></li>
							<li><a href="#">Level Three</a></li>
						  </ul>
						</li>
					  </ul>
					</li>
					<li><a href="#">Level One</a></li>
				  </ul>
				</li>  

				<li>
				  <a href="auth_login.html">
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
                <div class="d-flex align-items-center">
                    <div class="mr-auto">
                        <h3 class="page-title">Google Map</h3>
                        <div class="d-inline-block align-items-center">
                            <nav>
                                <ol class="breadcrumb">
                                    <li class="breadcrumb-item"><a href="#"><i class="mdi mdi-home-outline"></i></a></li>
                                    <li class="breadcrumb-item" aria-current="page">Map</li>
                                    <li class="breadcrumb-item active" aria-current="page">Google Map</li>
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

		  <!-- START Map -->
		  <div class="row">
			<div class="col-12">
			  <div class="box">
				<div class="box-header with-border">
				  <h4 class="box-title">Simple Basic Map</h4>
				</div>
				<!-- /.box-header -->
				<div class="box-body">
					<div id="gmaps-simple" class="gmaps"></div>
				</div>
				<!-- /.box-body -->
			  </div>
			  <!-- /.box -->

			  <div class="box">
				<div class="box-header with-border">
				  <h4 class="box-title">Market with Info window</h4>
				</div>
				<!-- /.box-header -->
				<div class="box-body">
					<div id="markermap" class="gmaps"></div>
				</div>
				<!-- /.box-body -->
			  </div>
			  <!-- /.box -->

			  <div class="box">
				<div class="box-header with-border">
				  <h4 class="box-title">Over Layer Map</h4>
				</div>
				<!-- /.box-header -->
				<div class="box-body">
					<div id="overlayermap" class="gmaps"></div>
				</div>
				<!-- /.box-body -->
			  </div>
			  <!-- /.box -->          
			</div>
			<div class="col-12">          
			  <div class="box">
				<div class="box-header with-border">
				  <h4 class="box-title">Polygonal Map</h4>
				</div>
				<!-- /.box-header -->
				<div class="box-body">
					<div id="polymap" class="gmaps"></div>
				</div>
				<!-- /.box-body -->
			  </div>
			  <!-- /.box -->

			  <div class="box">
				<div class="box-header with-border">
				  <h4 class="box-title">Routes Map</h4>
				</div>
				<!-- /.box-header -->
				<div class="box-body">
					<div id="routesmap" class="gmaps"></div>
				</div>
				<!-- /.box-body -->
			  </div>
			  <!-- /.box -->

			  <div class="box">
				<div class="box-header with-border">
				  <h4 class="box-title">Styled Map</h4>
				</div>
				<!-- /.box-header -->
				<div class="box-body">
					<div id="styledmap" class="gmaps"></div>
				</div>
				<!-- /.box-body -->
			  </div>
			  <!-- /.box -->          
			</div>
			<!-- /.col -->
		  </div>
		  <!-- /.row -->
		  <!-- END Map -->

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
	
	<!-- SlimScroll -->
	<script src="../../assets/vendor_components/jquery-slimscroll/jquery.slimscroll.min.js"></script>
	
	<!-- FastClick -->
	<script src="../../assets/vendor_components/fastclick/lib/fastclick.js"></script>
	
	<!-- VoiceX Admin App -->
	<script src="../js/template.js"></script>
	
	<!-- VoiceX Admin for demo purposes -->
	<script src="../js/demo.js"></script>	
	
    <!-- google maps api -->
    <script src="http://maps.google.com/maps/api/js?sensor=true"></script>
    <script src="../../assets/vendor_components/gmaps/gmaps.min.js"></script>
    <script src="../../assets/vendor_components/gmaps/jquery.gmaps.js"></script>
	
	
</body>
</html>
