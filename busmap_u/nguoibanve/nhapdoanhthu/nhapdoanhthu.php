<?php
include("../source/csdl_thanhvien.php");
$p=new csdl();

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
include("../source/csdl_doanhthu.php");
$d=new doanhthu();
include("../source/csdl_luong.php");
$e=new Salary();
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Document</title>
  <link rel="stylesheet" href="./nhapdoanhthu.css" />
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous" />
  <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
  <script src="./nhapdoanhthu.js"></script>
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
              <div class="logo col-sm-11 col-md-11 col-lg-11 text-white busmap">
                <a href="../Home-nguoibanve/Home-nvls.html"><img src="../../icon/download.jfif" alt="" class="" style="width: 13%;" /></a>
                <a href="../Home-nguoibanve/Home-nvls.html" style="color: white; text-decoration: none; font-size: 35px;" class="text-left">Bus Map</a>
              </div>
            </div>
          </div>

          <div class="col-sm-6 col-md-6 col-lg-6 text-right d-flex justify-content-end mt-3">
            <div class="row home-row">

              <img src="../../icon/images-removebg-preview.png" alt="" style="width: 25%;" />
              <a href="" id="accounta" style="font-size: 18px; color: white; font-weight: bold;" class="dropdown-toggle" data-toggle="dropdown">Tài khoản</a>
              <div class="dropdown-menu">
                <a class="dropdown-item" href="../thongtincanhan/thongtincanhan.html">Thông tin cá nhân</a>
                <a class="dropdown-item" href="../thongbao-TV/thongbao_TV.html">Thông báo</a>
                <a class="dropdown-item" href="../baocaosuco-TV/baocaosuco_TV.html">Báo cáo sự cố</a>
                <a class="dropdown-item" href="../../logout.php">Đăng xuất</a>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <nav class="navbar navbar-default">

      <div class="container">
        <ul class="nav d-flex justify-content-start" style="font-size: 15px;">
          <li class="active"><a href="../theodoichuyenxe-TV/theodoichuyenxe_TV.php" style="margin-right: 20px;">Theo dõi chuyến xe</a></li>
          <li><a href="../guihang-TV/guihang_TV.php" style="margin-right: 20px;">Gửi hàng</a></li>
          <li><a href="../muavethuong/muavethuong.php" style="margin-right: 20px;">Mua vé</a></li>
          <li><a href="../dangkyvethang/dangkyvethang.php" style="margin-right: 20px;">Đăng ký vé tháng</a></li>
          <li><a href="../xemlichlamviec/xemlichlamviec.php" style="margin-right: 20px;">Xem lịch làm việc</a></li>
          <li><a href="../xemluong/xemluong.php" style="margin-right: 20px;">Xem lương</a></li>
          <li><a href="../nhapdoanhthu/nhapdoanhthu.php" style="margin-right: 20px;">Nhập doanh thu</a></li>
          <li><a href="../banve/banve.php" style="margin-right: 20px;">Bán vé</a></li>
        </ul>
      </div>
    </nav>
    <div class="main-home container pt-3 pb-3"  style="height: 500px;">
      <h4 class="text-center">NHẬP DOANH THU</h4>
      <form action="" method="post">

										<div class="form-group row">
											<label class="col-form-label col-md-3">Tuyến xe</label>
                      <div class="col-md-9">
											<select name="id_buses_numbers" id="id_buses_numbers" class="form-control" style="height: 30px;">
												<option value="" >Chọn tuyến</option>
												<?php
													$d->bus_number_list();
												?>
											</select>
                    </div>
                    
										</div>
										<div class="form-group row">

											<label class="col-form-label col-md-3">Doanh Thu Ngày</label>
											<div class="col-md-9">
                      <input type="date" name="date" id="date" class="form-control">
											</div>
											
										</div>
                    <div class="form-group row">
                    <label class="col-form-label col-md-3">Số Vé Tháng HSSV</label>
											<div class="col-md-9">
												<input type="text" class="form-control" name="monthly_ticket_student">
											</div>
                    </div>
										<div class="form-group row">
											<label class="col-form-label col-md-3">Số Vé Thường</label>
											<div class="col-md-9">
												<input type="text" class="form-control" name="regular_tickets">
											</div>
                    </div>
                    <div class="form-group row">
											<label class="col-form-label col-md-3">Số Vé Tháng</label>
											<div class="col-md-9">
												<input type="text" class="form-control" name="monthly_ticket">
											</div>
										</div>
										<div class="form-group row">
											<label class="col-form-label col-md-3">Số Vé HSSV</label>
											<div class="col-md-9">
												<input type="text" class="form-control" name="student_ticket" >
											</div>
											
										</div>

										<div class="form-group row">
											<label class="col-form-label col-md-3 text-left">Nhập Doanh Thu</label>
											<button type="submit" class="btn btn-primary mb-5" name="btn-add">Nhập Doanh Thu</button>
										</div>

										<?php
										if (isset($_REQUEST['btn-add'])) {

											$monthly_ticket = $_REQUEST['monthly_ticket'];
											$regular_tickets = $_REQUEST['regular_tickets'];
											$student_ticket = $_REQUEST['student_ticket'];
											$monthly_ticket_student = $_REQUEST['monthly_ticket_student'];
                      $date=$_REQUEST['date'];
                      $id=$_SESSION['id'];
                      $id_bus_numbers=$_REQUEST['id_buses_numbers'];
											if ($monthly_ticket != '' && $regular_tickets != '' && $student_ticket !== '') {
												$d->addnew_revenue($date,$regular_tickets,$monthly_ticket, $student_ticket, $monthly_ticket_student,$id_bus_numbers, $id);
											} else {
												echo "<script>alert('Vui lòng nhập đầy đủ thông tin!');</script>";
											}
                      
										}
										?>
					
				</form>

  </div>
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
            <div class="col-sm-3 col-md-3 col-lg-3 d-flex justify-content-start">
              <img src="../../icon/fb.png" class="fb-icon" />
            </div>
            <div class="col-sm-3 col-md-3 col-lg-3 d-flex justify-content-start">
              <img src="../../icon//ins.png" class="ins-icon" />
            </div>
            <div class="col-sm-3 col-md-3 col-lg-3 d-flex justify-content-start">
              <img src="../../icon//yt.png" class="yt-icon" />
            </div>
            <div class="col-sm-3 col-md-3 col-lg-3"></div>
          </div>
        </div>
      </div>
    </div>
  </footer>

</body>

</html>