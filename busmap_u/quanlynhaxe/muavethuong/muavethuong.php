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
    <link rel="stylesheet" href="muavethuong.css" />
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
    <script src="./muavethuong.js"></script>
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
      <div class="main-home container pt-3">
        <div class="row">
          <div class="col-sm-12 col-md-5 col-lg-5 list-bus pt-3">
            <div class="list-bus-infor">
              <div class="search-tuyen pb-3">
              <form action="" class="form">
                 <input type="search" name="search" id="search" placeholder="Tìm tuyến xe" class="col-form-label"/>
					
				<input class="btn btn-danger" type="submit" name="sub" id="sub" value="Search">
					<?php
					if(isset($_REQUEST['sub']))
					{
						$sdb=$_REQUEST['search'];
						$p->search($sdb);
					}
					
					?>
                </form>
              </div>
              <h5>CÁC TUYẾN XE</h5>
              <span>Click để theo dõi tuyến xe</span>
              <?php
				$p->xuattuyenxe("select*from ( buses_status 
												INNER JOIN buses ON buses_status.id_bus = buses.id
												INNER JOIN buses_numbers ON buses.id_buses_numbers = buses_numbers.id )");
				
				?>

            </div>
          </div>
          <div class="col-sm-12 col-md-7 col-lg-7 d-flex justify-content-center">
            <div class="border-form">
              <h4 class="text-center">MUA VÉ XE BUS</h4>
              <p class="text-center">Mã số vé: 0412344565465</p>
       <form method="post" enctype="multipart/form-data" name="form1" id="form1">
                <div class="row mt-2">
                  <label for="" class="col-sm-12 col-md-3 col-lg-3"
                    >Chọn đối tượng:
                  </label>
                  <div class="col-sm-12 col-md-9 col-lg-9">
                    <div class="row">
						 <div class="col-sm-0 col-md-1 col-lg-1"></div>
            
            <div class="col-sm-12 col-md-12 col-lg-12">
                <select name="doituong" id="doituong" class="form-control" style="height: 30px;">
                    <option value="3000">Học sinh ,Sinh viên</option>
                    <option value="7000">Người Thường</option>
                   
					
                </select>
            </div>
            <div class="col-sm-0 col-md-1 col-lg-1"></div>

                    </div>
                  </div>
                </div>
                
                <div class="row mt-2">
                  <label for="" class="col-sm-12 col-md-3 col-lg-3"
                    >Số lượng vé :
                  </label>
                  <div class="col-sm-12 col-md-9 col-lg-9">
                    <input type="text" name="sove1" id="sove1" class="form-control" />
                  </div>
                </div>
                <div class="row mt-2">
                  <label for="" class="col-sm-12 col-md-3 col-lg-3"
                    >Thẻ sinh viên:<span style="color: red"><i>(nếu mua vé HSSV)(*)</i></span>
                  </label>
                  
				<div class="col-sm-12 col-md-9 col-lg-9">
                    <input type="file" name="txtfile" id="txtfile" class="form-control" />
                  </div>
					
                </div>

			 <div class="row mt-2">
                  <label for="tongtien" class="col-sm-12 col-md-3 col-lg-3"
                    >Giá vé :
                  </label>
                  <div class="col-sm-12 col-md-9 col-lg-9">
                    <input type="text" name="tongtien" id="tongtien" class="form-control" readonly/>
                  </div>
                </div>	
		   
                <div class="d-flex justify-content-center mt-2">

					<input type="submit"  name="sub2" id="sub2" value="Mua vé">
					<a href="../thanhtoan/thanhtoan.html" style="color: white; text-decoration: none">
                    Mua vé</a>
                </div>
				  <?php

		    if(isset($_REQUEST['sub2']))
							{
                $id_user=$_SESSION['id'];
								$doituong=$_REQUEST['doituong'];
								$sove=$_REQUEST['sove1'];
								$name=$_FILES['txtfile']['name'];
								$local=$_FILES['txtfile']['tmp_name'];
								
								$t=time();

								$timenow=date("Y-m-d",$t);
						
								if($p->uploadfile($local,"../upload",$name)==1)
								{
									$p->themvexethuong($id_user, $doituong, $sove, $name, $timenow);
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

  <script>
      $(document).ready(() => {
        $input_sove = $('input[name="sove1"]');
        $input_sove.keyup(() => {
          sove = $input_sove.val();
          if(sove.length == 0) {
            document.getElementById("tongtien").value = 0;
          } else {
            var doituong = parseInt(document.getElementById("doituong").value);
          document.getElementById("tongtien").value = parseInt(sove) * parseInt(doituong);
          }
          
        })
      })
    </script>
</html>
