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
    <link rel="stylesheet" href="./dangkyvethang.css" />
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
    <script src="./dangkyvethang.js"></script>
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
                  <a href="../Home-nhanvienlaixe/Home-nvls.php"><img src="../../icon/download.jfif" alt="" class="" style="width: 13%;"/></a>
                  <a href="../Home-nhanvienlaixe/Home-nvls.php" style="color: white; text-decoration: none; font-size: 35px;" class="text-left">Bus Map</a>
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
                  <li><a href="../xemlichlamviec/xemlichlamviec.php" style="margin-right: 20px;">Xem lịch làm việc</a></li>
                  <li><a href="../xemluong/xemluong.php" style="margin-right: 20px;">Xem lương</a></li>
                </ul>
              </div>
            
          </div>
          <div class="col-sm-12 col-md-2 col-lg-2"></div>
        </div>
      </nav>
    
      <div class="main-home container">
        <div class="row">
          <div class="col-sm-12 col-md-3 col-lg-3 list-bus pt-3">
            <a href="../dangkyvethang/dangkyvethang.php" style="color: black; text-decoration: none;"><b>Đăng ký vé tháng</b></a>
            <br><a href="../thecuaban/thecuaban.php" style="color: black; text-decoration: none;"><b>Thẻ của bạn</b></a>
          </div>
          <div class="col-sm-12 col-md-8 col-lg-8 d-flex justify-content-center">
            <div class="border-form">
           
              <h4 class="text-center">MUA VÉ THÁNG XE BUS</h4>
              <p class="text-center">Mã số vé: <?php echo date("Ymd")?><?php echo random_int(0,100)?></p>
              <form method="post" enctype="multipart/form-data" name="form1" id="form1">
              <?php
            $id=$_SESSION['id'];
            $userDetail=$p->getDetailUser($id);
            ?>
                <div class="row mt-2">
                  <label for="" class="col-sm-12 col-md-4 col-lg-4"
                    >Chọn đối tượng:<span style="color: red"><i>(*)</i></span>
                  </label>
                  <div class="col-sm-12 col-md-8 col-lg-8">
					  <div class="row">
						 <div class="col-sm-0 col-md-1 col-lg-1"></div>
            
            <div class="col-sm-12 col-md-12 col-lg-12">
                <select name="doituong" id="doituong" class="form-control" style="height: 30px;">
                    <option value="90.000">Học sinh ,Sinh viên</option>
                    <option value="210.000">Người Thường</option>
                   
					
                </select>
            </div>
            <div class="col-sm-0 col-md-1 col-lg-1"></div>
					  </div>
                  </div>
                </div>
                <div class="row mt-2">
                  <label for="datestart" class="col-sm-12 col-md-4 col-lg-4"
                    >Chọn ngày bắt đầu:<span style="color: red"><i>(*)</i></span>
                  </label>
                  <div class="col-sm-12 col-md-8 col-lg-8">
                    <input type="date" name="date" id="date" class="form-control" />
                  </div>
                </div>
                <div class="row mt-2">
                  <label for="name" class="col-sm-12 col-md-4 col-lg-4"
                    >Họ và tên:<span style="color: red"><i>(*)</i></span
                    >:
                  </label>
                  <div class="col-sm-12 col-md-8 col-lg-8">
                    <input type="text" name="name" id="name" class="form-control" value="<?=$userDetail['full_name']?>"/>
                  </div>
                </div>
                
                <div class="row mt-2">
                  <label for="address" class="col-sm-12 col-md-4 col-lg-4"
                    >Địa chỉ:<span style="color: red"><i>(*)</i></span
                    >:
                  </label>
                  <div class="col-sm-12 col-md-8 col-lg-8">
                    <input type="text" name="address" id="address" class="form-control" value="<?=$userDetail['address']?>"/>
                  </div>
                </div>
                <div class="row mt-2">
                  <label for="" class="col-sm-12 col-md-4 col-lg-4"
                    >Ảnh thẻ HSSV:<span style="color: red"><i>(nếu mua vé HSSV)(*)</i></span>
                  </label>
                  <div class="col-sm-12 col-md-8 col-lg-8">
                    <input type="file" name="txtfile" id="txtfile" class="form-control" />
                  </div>
                </div>
                
                <div class="d-flex justify-content-center mt-2">

					<input class="btn btn-success" type="submit"  name="sub" id="sub" value="Đăng Ký">
                </div>
				  
				  		<?php
				  			if(isset($_REQUEST['sub']))
							{
								$doituong=$_REQUEST['doituong'];
								$ngay=$_REQUEST['date'];
								// $time=date("Y/m/d",$ngay);
								$name=$_FILES['txtfile']['name'];
								$local=$_FILES['txtfile']['tmp_name'];
							$id_user=$_SESSION['id'];
								if($p->uploadfile($local,"../upload",$name)==1)
								{
                
									$p->themvethang($id_user, $doituong, $name, $ngay);
                }
                else{
                  echo'thẻ hssv không hợp lệ';
                }
              }
				  		?>
              </form>
            </div>
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

</html>

