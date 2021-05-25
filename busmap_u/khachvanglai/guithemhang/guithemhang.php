
<?php
include("../source/csdl_thanhvien.php");
$p=new csdl();
?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Document</title>
    <link rel="stylesheet" href="./guithemhang.css" />
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
    <script src="./guithemhang.js"></script>
    <script src="../Home/Home.js"></script>
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
                  <a href="../Home/Home.php"><img src="../../icon/download.jfif" alt="" class="" style="width: 13%;"/></a>
                  <a href="../Home/Home.php" style="color: white; text-decoration: none; font-size: 35px;" class="text-left">Bus Map</a>
                </div>
              </div>
            </div>

            <div
              class="col-sm-6 col-md-6 col-lg-6 text-right d-flex justify-content-end mt-2"
            >
              <div class="row home-row">
                <!-- <div class="col-sm-4 col-md-4 col-lg-4"></div>
              
              
                <div
                  class="icon-login col-sm-4 col-md-4 col-lg-4 d-flex justify-content-end"
                >
                  <img src="../../icon/images-removebg-preview.png" alt="" />
                </div>
                <div class="login col-sm-4 col-md-4 col-lg-4 text-left">
                  <a href="../Login/Login.php" style="font-size: 18px;">Đăng nhập</a>
                </div> -->
                <a href="../Login/Login.php"><img src="../../icon/images-removebg-preview.png" alt="" style="width: 37%;"/></a>
                <a href="../Login/Login.php" style="font-size: 18px; color: white; font-weight: bold;">Đăng nhập</a>
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
                <!-- <div class="navbar-header">
                  <a class="navbar-brand" href="#">WebSiteName</a>
                </div> -->
                <ul class="nav d-flex justify-content-start" style="font-size: 17px;">
                  <li><a href="../guihang/guihang.php" style="margin-right: 20px;">Gửi hàng</a></li>
                  <li><a href="../Login/Login.php" style="margin-right: 20px;" onclick="alertdangnhap()">Mua vé</a></li>
                  <li><a href="../Login/Login.php" style="margin-right: 20px;" onclick="alertdangnhap()">Đăng ký vé tháng</a></li>
                  <li><a href="../xemthongbao/xemthongbao.php" style="margin-right: 20px;">Xem thông báo</a></li>
                  <li><a href="../baocaosuco/baocaosuco.php" style="margin-right: 20px;">Báo cáo sự cố</a></li>
                </ul>
              </div>
            
          </div>
          <div class="col-sm-12 col-md-2 col-lg-2"></div>
        </div>
      </nav>
      <div class="main-home container pt-4 pb-4">
        <div class="main">
            <form action="" method="post" enctype="multipart/form-data" class="form form-guithemhang">
                <h4 class="text-center">
                    GỬI HÀNG
                </h4>
                <div class="row mt-3">
                    <div class="col-sm-12 col-md-12 col-lg-6">
                        <div class="row">
                            <label for="txttennguoigui" class="col-sm-12 col-md-12 col-lg-4">Tên người gửi:<span style="color: red;"><i>(*)</i></span></label>
                            <div class="col-sm-12 col-md-12 col-lg-8">
                                <input type="text" name="txttennguoigui" id="txttennguoigui" class="form-control">
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-12 col-md-12 col-lg-6">
                        <div class="row">
                            <label for="txtsdtguihang" class="col-sm-12 col-md-12 col-lg-4">Số điện thoại người gửi:<span style="color: red;"><i>(*)</i></span></label>
                            <div class="col-sm-12 col-md-12 col-lg-8">
                                <input type="text" name="txtsdtguihang" id="txtsdtguihang" class="form-control"  onfocusout="validateForm_txtsdtguihang()">
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row mt-3">
                    <div class="col-sm-12 col-md-12 col-lg-6">
                        <div class="row">
                            <label for="txttennguoinhan" class="col-sm-12 col-md-12 col-lg-4">Tên người nhận:<span style="color: red;"><i>(*)</i></span></label>
                            <div class="col-sm-12 col-md-12 col-lg-8">
                                <input type="text" name="txttennguoinhan" id="txttennguoinhan" class="form-control">
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-12 col-md-12 col-lg-6">
                        <div class="row">
                            <label for="txtsdtnhanhang" class="col-sm-12 col-md-12 col-lg-4">Số điện thoại người nhận:<span style="color: red;"><i>(*)</i></span></label>
                            <div class="col-sm-12 col-md-12 col-lg-8">
                                <input type="text" name="txtsdtnhanhang" id="txtsdtnhanhang" class="form-control" onfocusout="validateForm_txtsdtnhanhang()">
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row mt-3">
                    <label for="txttramgui" class="col-sm-12 col-md-12 col-lg-2">Trạm gửi hàng:<span style="color: red;"><i>(*)</i></span></label>
                    <div class="col-sm-12 col-md-12 col-lg-10">
                        <input type="text" name="txttramgui" id="txttramgui" class="form-control">
                    </div>
                </div>
                <div class="row mt-3">
                    <label for="txttramnhan" class="col-sm-12 col-md-12 col-lg-2">Trạm nhận hàng:<span style="color: red;"><i>(*)</i></span></label>
                    <div class="col-sm-12 col-md-12 col-lg-10">
                        <input type="text" name="txttramnhan" id="txttramnhan" class="form-control">
                    </div>
                </div>
                <div class="row mt-3">
                    <label for="txtkhoiluong" class="col-sm-12 col-md-12 col-lg-2">Khối lượng:<span style="color: red;"><i>(*)</i></span></label>
                    <div class="col-sm-12 col-md-12 col-lg-10">
                        <input type="text" name="txtkhoiluong" id="txtkhoiluong" class="form-control">
                    </div>
                </div>
                <div class="row mt-3">
                    <label for="txtmota" class="col-sm-12 col-md-12 col-lg-2">Mô tả:<span style="color: red;"><i>(*)</i></span></label>
                    <div class="col-sm-12 col-md-12 col-lg-10">
                        <input type="text" name="txtmota" id="txtmota" class="form-control">
                    </div>
                </div>
                <div class="d-flex justify-content-center mt-3">
                <input type="submit" class="btn btn-success" name="nut" id="nut" value="Gửi hàng">
                </div>

                <?php
                        if (isset($_REQUEST['nut'])) {
                           $tennguoigui = $_REQUEST['txttennguoigui']; 
                           $tennguoinhan = $_REQUEST['txttennguoinhan'];
                           $sdtgui = $_REQUEST['txtsdtguihang'];
                           $sdtnhan = $_REQUEST['txtsdtnhanhang'];
                           $tramgui=$_REQUEST['txttramgui'];
                           $tramnhan=$_REQUEST['txttramnhan'];
                           $khoiluong=$_REQUEST['txtkhoiluong'];
                           $mota=$_REQUEST['txtmota'];
                           if($tennguoinhan!=''){
                  $p->insert_goods($tennguoigui,$tennguoinhan,$sdtgui, $sdtnhan, $tramgui,$tramnhan,$khoiluong, $mota);
                   }
                   else{
                     echo'vui long nhap du thong tin';
                   }
                  }
                ?>
            </form>
        </div>
        
      </div>
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

  </body>
  
</html>
