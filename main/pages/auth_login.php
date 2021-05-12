<?php
 include("../../source/class.php");
 $database= new Database();
 include("../../source/login.php");
 $user=new User();
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

    <title>VoiceX Admin - Log in </title>
  
	<!-- Bootstrap 4.0-->
	<link rel="stylesheet" href="../../assets/vendor_components/bootstrap/dist/css/bootstrap.min.css">
	
	<!-- theme style -->
	<link rel="stylesheet" href="../css/style.css">
	
	<!-- Admin skins -->
	<link rel="stylesheet" href="../css/skin_color.css">	

</head>
<body class="hold-transition theme-fruit">
	
	<div class="h-p100">
		<div class="row align-items-center justify-content-md-center h-p100">
			<div class="col-lg-4 col-12 h-lg-p100 h-auto bg-img" style="background-image: url(../../images/auth-bg/bg-1.jpg);">
				<div class="row l-block p-xl-100 p-lg-50 p-30 h-lg-p100 h-auto">
					<div class="col-12 logo align-self-start">
						<a href="#" class="aut-logo">
							<img src="../../images/logo-icon.png" alt="">
						</a>
					</div>
					<div class="col-12 align-self-center">
						<h1 class="title text-white">Welcome to Admin!</h1>
					</div>
					<div class="col-12 align-self-end">
						<h6 class="text-white-50">
							© 2019 by Tran Thanh Quy
						</h6>
					</div>
				</div>
			</div>
			<div class="col-lg-8 col-12">
				<div class="row justify-content-center no-gutters">
					<div class="col-xl-4 col-lg-7 col-md-6 col-12">
						<div class="content-top-agile p-10">
							<h2 class="text-primary">Get started with Us</h2>
							<p class="text-black-50">Sign in to start your session</p>							
						</div>
						<div class="p-30 rounded10 b-2 b-dashed border-info">
							<form action="" method="post">
								<div class="form-group">
									<div class="input-group mb-3">
										<div class="input-group-prepend">
											<span class="input-group-text bg-transparent"><i class="ti-user"></i></span>
										</div>
										<input type="text" class="form-control pl-15 bg-transparent plc-black" name="username" placeholder="Username">
									</div>
								</div>
								<div class="form-group">
									<div class="input-group mb-3">
										<div class="input-group-prepend">
											<span class="input-group-text  bg-transparent"><i class="ti-lock"></i></span>
										</div>
										<input type="password" class="form-control pl-15 bg-transparent plc-black" name="password" placeholder="Password">
									</div>
								</div>
								  <div class="row">
									<div class="col-6">
									  <div class="checkbox">
										<input type="checkbox" id="basic_checkbox_1" >
										<label for="basic_checkbox_1">Remember Me</label>
									  </div>
									</div>
									<!-- /.col -->
									<div class="col-6">
									 <div class="fog-pwd text-right">
										<a href="javascript:void(0)" class="hover-info"><i class="ion ion-locked"></i> Forgot password?</a><br>
									  </div>
									</div>
									<!-- /.col -->
									<div class="col-12 text-center">
									<input class="btn btn-info mt-10" type="submit" name="submit" value="Login">
									</div>
									<!-- /.col -->
								  </div>
							</form>														
							<div class="text-center">
							  <p class="mt-20">- Sign With -</p>
							  <p class="gap-items-2 mb-20">
								  <a class="btn btn-social-icon btn-facebook" href="#"><i class="fa fa-facebook"></i></a>
								  <a class="btn btn-social-icon btn-twitter" href="#"><i class="fa fa-twitter"></i></a>
								  <a class="btn btn-social-icon btn-google" href="#"><i class="fa fa-google-plus"></i></a>
								  <a class="btn btn-social-icon btn-instagram" href="#"><i class="fa fa-instagram"></i></a>
								</p>	
							</div>
							<?php
								if(isset($_REQUEST["submit"])){
									$username=$_REQUEST["username"];
									$password=$_REQUEST["password"];
									$user->login($username, $password);
								}
							?>							
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>


	<!-- jQuery 3 -->
	<script src="../../assets/vendor_components/jquery-3.3.1/jquery-3.3.1.js"></script>
	
	<!-- fullscreen -->
	<script src="../../assets/vendor_components/screenfull/screenfull.js"></script>
	
	<!-- popper -->
	<script src="../../assets/vendor_components/popper/dist/popper.min.js"></script>
	
	<!-- Bootstrap 4.0-->
	<script src="../../assets/vendor_components/bootstrap/dist/js/bootstrap.min.js"></script>

</body>
</html>
