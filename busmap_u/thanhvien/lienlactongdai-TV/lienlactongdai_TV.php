<?php
include("../source/csdl_thanhvien.php");
$p=new csdl();

$p->connect_database();
if(empty($_SESSION["username"])||empty($_SESSION["password"]) || empty($_SESSION['permission'])){
	echo "<script>
	window.location = '../../khachvanglai/Login/Login.php';
</script>";
}
else{
	$username=$_SESSION["username"];
	$password=$_SESSION["password"];
	$permission = $_SESSION['permission'];
	$p->confirmlogin($username,$password, $permission);
}
?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Document</title>
    <link rel="stylesheet" href="./lienlactongdai_TV.css" />
    <link
      rel="stylesheet"
      href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css"
      integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm"
      crossorigin="anonymous"
    />
    <script
      src="https://code.jquery.com/jquery-3.2.1.slim.min.js"
      integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN"
      crossorigin="anonymous"
    ></script>
    <script
      src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"
      integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q"
      crossorigin="anonymous"
    ></script>
    <script
      src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"
      integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl"
      crossorigin="anonymous"
    ></script>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
  </head>
  <body>
    <div class="container-fluid homepage">
      <div class="header pb-2">
        <div class="container">
          <div class="row">
            <div class="col-sm-6 col-md-6 col-lg-6">
              <div class="row home-row">
                <div class="col-sm-1 col-md-1 col-lg-1"></div>
                <div
                  class="logo col-sm-11 col-md-11 col-lg-11 text-white busmap"
                >
                  <a href="../Home-TV/Home-TV.php"><img src="../../icon/download.jfif" alt="" class="" style="width: 13%;"/></a>
                  <a href="../Home-TV/Home-TV.php" style="color: white; text-decoration: none; font-size: 35px;" class="text-left">Bus Map</a>
                </div>
              </div>
            </div>

            <div
              class="col-sm-6 col-md-6 col-lg-6 text-right d-flex justify-content-end mt-3"
            >
              <div class="row home-row">
                
                <img src="../../icon/images-removebg-preview.png" alt="" style="width: 25%;"/>
                <a href="" id="accounta" style="font-size: 18px; color: white; font-weight: bold;" class="dropdown-toggle" data-toggle="dropdown">Tài khoản</a>
                <div class="dropdown-menu">
                  <a class="dropdown-item" href="../thongtincanhan/thongtincanhan.php">Thông tin cá nhân</a>
                  <a class="dropdown-item" href="../thongbao-TV/thongbao_TV.php">Thông báo</a>
                  <a class="dropdown-item" href="../baocaosuco-TV/baocaosuco_TV.php">Báo cáo sự cố</a>
                  <a class="dropdown-item" href="../../logout.php" >Đăng xuất</a>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
      <nav class="navbar navbar-default">
        <div class="row">
          <div class="col-sm-0 col-md-1 col-lg-1"></div>
          <div class="col-sm-12 col-md-9 col-lg-9">
          
            
              <div class="container">
                <ul class="nav d-flex justify-content-start" style="font-size: 17px;">
                  <li><a href="../guihang-TV/guihang_TV.php" style="margin-right: 20px;">Gửi hàng</a></li>
                  <li><a href="../muavethuong/muavethuong.php" style="margin-right: 20px;">Mua vé</a></li>
                  <li><a href="../dangkyvethang/dangkyvethang.php" style="margin-right: 20px;">Đăng ký vé tháng</a></li>
                </ul>
              </div>
            
          </div>
          <div class="col-sm-12 col-md-2 col-lg-2"></div>
        </div>
      </nav>
      <div class="main-home container pb-4 d-flex justify-content-center pt-4">
        <div class="lienlac">
          <h4 class="text-center">LIÊN LẠC VỚI CHÚNG TÔI</h4>
          <div class="row ml-5">
            <img
              src="../../icon/icphone-removebg-preview.png"
              alt=""
              class="icon-phone1"
            />

            <p class="mt-3 ml-2">012345678</p>
          </div>
          <p class="ml-5">5:30 - 19:00 Thứ 2 - chủ nhật</p>
          <h4 class="text-center">CHAT VỚI CHÚNG TÔI</h4>
          <div class="row ml-5">
            <img src="../../icon/fb.png" class="fb-icon1" />

            <p class="mt-3 ml-2">Liên hệ với chúng tôi qua facebook</p>
          </div>
          <div class="row">
            <img src="../../icon/ins.png" class="ins-icon1" />

            <p class="mt-3 ml-2">Liên hệ với chúng tôi qua Instagram</p>
          </div>
          <div class="row ml-5">
            <img src="../../icon/mail-removebg-preview.png" class="mail-icon1" />

            <p class="mt-3 ml-2">busmap@gmail.com</p>
          </div>
        </div>
      </div>
    </div>
  </body>
  <footer>
    <div class="container">
      <div class="row">
        <div class="col-sm-12 col-md-4 col-lg-4">
          <b>Liên hệ:</b><br />
          Địa chỉ: Trần Đức Bo<br />
          Số điện thoại:....<br />
          Mail: busmap@vn
        </div>
        <div class="col-sm-12 col-md-4 col-lg-4"><b>Thông tin</b></div>
        <div class="col-sm-12 col-md-4 col-lg-4">
          <b>Mạng xã hội</b>
          <div class="row">
            <div
              class="col-sm-3 col-md-3 col-lg-3 d-flex justify-content-start"
            >
              <img src="../../icon/fb.png" class="fb-icon" />
            </div>
            <div
              class="col-sm-3 col-md-3 col-lg-3 d-flex justify-content-start"
            >
              <img src="../../icon//ins.png" class="ins-icon" />
            </div>
            <div
              class="col-sm-3 col-md-3 col-lg-3 d-flex justify-content-start"
            >
              <img src="../../icon//yt.png" class="yt-icon" />
            </div>
            <div class="col-sm-3 col-md-3 col-lg-3"></div>
          </div>
        </div>
      </div>
    </div>
  </footer>
   <!-- Modal -->
<div id="myModal" class="modal" role="dialog">
    <div class="modal-dialog">
  
      
</html>
