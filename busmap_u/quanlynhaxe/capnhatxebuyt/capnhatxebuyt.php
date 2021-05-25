<?php
include("../source/csdl_xebus.php");
$p=new xe();
include("../source/csdl_doanhthu.php");
$d=new doanhthu();
$id = $_REQUEST['id'] ?? '';

include("../source/csdl_thanhvien.php");
$e=new csdl();

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
	$e->confirmlogin($username,$password, $permission);
}
?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Document</title>
    <link rel="stylesheet" href="./capnhatxebuyt.css" />
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
                  <a href="../Home-nguoiquanlynhaxe/Home-qlnx.php"><img src="../../icon/download.jfif" alt="" class="" style="width: 13%;"/></a>
                  <a href="../Home-nguoiquanlynhaxe/Home-qlnx.php" style="color: white; text-decoration: none; font-size: 35px;" class="text-left">Bus Map</a>
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
                  <a class="dropdown-item" href="../../logout.php">Đăng xuất</a>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
      <nav class="navbar navbar-default">
        <div class="row">
          <div class="col-sm-12 col-md-2 col-lg-1"></div>
          <div class="col-sm-12 col-md-11 col-lg-11">
          
            
              <div class="container">
                <ul class="nav d-flex justify-content-start" style="font-size: 15px;">
                  <li><a href="../guihang-TV/guihang_TV.php" style="margin-right: 20px;">Gửi hàng</a></li>
                  <li><a href="../muavethuong/muavethuong.php" style="margin-right: 20px;">Mua vé</a></li>
                  <li><a href="../dangkyvethang/dangkyvethang.php" style="margin-right: 20px;">Đăng ký vé tháng</a></li>
                  <li><a href="../xemlichlamviec/xemlichlamviec.php" style="margin-right: 20px;">Lịch làm việc</a></li>
                  <li><a href="" style="margin-right: 20px;" class="dropdown-toggle" data-toggle="dropdown">Quản lý
                    
                  </a>
                  <div class="dropdown-menu">
                    <a class="dropdown-item" href="../quanlynhanvien/quanlynhanvien.php">Quản lý nhân viên</a>
                    <a class="dropdown-item" href="../danhsachxebuyt/danhsachxebuyt.php">Quản lý xe buýt</a>
                    <a class="dropdown-item" href="../duyetthongbao/duyetthongbao.php">Duyệt thông báo</a>
                    <a class="dropdown-item" href="../xemluong/xemluong.php">Lương</a>
                    <a class="dropdown-item" href="../xemdoanhthu/xemdoanhthu.php">Doanh thu</a>
                  </div>
                  </li>
                  
                </ul>
                
              </div>
            
          </div>
          
        
      </nav>
      <div class="main-home container pt-3 pb-3">
        <h4 class="text-center">CẬP NHẬT THÔNG TIN XE BUÝT</h4>
        <form action="" method="post">
                    <?php
                    $busDetail = $p->getDetailBus($id);
                    ?>
                    <div class="form-group row">
						
                        <label class="col-form-label col-md-1">Biển số xe</label>
                        <div class="col-md-5">
                            <input type="text" value="<?=$busDetail['plate']?>" name="plate"  class="form-control">
						</div>
						<label class="col-form-label col-md-1">Tuyến Xe</label>
						<div class="col-md-5">
						<select name="id_buses_numbers" id="id_buses_numbers" class="form-control " style="height: 30px;">
												<option value="" disabled>Chọn tuyến</option>
												<?php
													$d->bus_number_list();
												?>
											</select>
						</div>
                    </div>
                    
                    <div class="form-group row">
                        <label class="col-form-label col-md-2">Cập nhật</label>
							<button type="submit" class="btn btn-primary mt-10" name="btn-add">Cập nhật</button>
					</div>
					<div class="form-group row">
							<a href="../danhsachxebuyt/danhsachxebuyt.php" class="btn btn-success mt-10 d-block text-center">+Danh sách xe buýt</a>
                    </div>

					
					<?php
                    if (isset($_REQUEST['btn-add'])) {
						
                        $plate=$_REQUEST['plate'];
						$bus_number = $_REQUEST['id_buses_numbers'];
						
						if($plate!='' && $bus_number!='')
											{
												$p->updateBus($bus_number, $plate, $id);

											}
											else
											{
												echo"<script>alert('Vui lòng nhập đầy đủ thông tin!');</script>";
											}
                            
                    }
					?>
					
					
				</form>
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

</html>

