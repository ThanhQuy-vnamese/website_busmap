<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Document</title>
    <link rel="stylesheet" href="./thongtindonhang.css" />
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
        <h4 class="text-center">THÔNG TIN ĐƠN HÀNG</h4>
        <div class="d-flex justify-content-center">
          <div class="infordonhang">
            <div class="row">
              <div class="col-sm-12 col-md-6 col-lg-6">
                Tên người gửi: Nguyễn Văn A
              </div>
              <div class="col-sm-12 col-md-6 col-lg-6 text-right">
                Số điện thoại người gửi: 012345678
              </div>
            </div>
            <br />
            <div class="row">
              <div class="col-sm-12 col-md-6 col-lg-6">
                Tên người nhận: Nguyễn Văn B
              </div>
              <div class="col-sm-12 col-md-6 col-lg-6 text-right">
                Số điện thoại người nhận: 012345678
              </div>
            </div>
            <br />
            <p>Trạm gửi hàng: Trạm điện lực Gò Vấp</p>
            <p>Trạm nhận hàng: Trạm trường ĐH Công nghiệp TP.HCM</p>
            <p>Khối lượng: 4kg</p>
            <p>Mô tả: Hàng dễ vỡ vui lòng nhẹ tay</p>
            <p class="text-right">Ngày gửi: 04/09/2021</p>
          </div>
        </div>
        <h4 class="text-center">ĐƠN HÀNG CỦA BẠN</h4>
        <div class="d-flex justify-content-center">
            <div class="infordonhangcuaban">
              <p class="text-center">Mã đơn: 123456789</p>
              <br>
              <div class="row">
                <p class="ml-3">Ngày gửi: 04/09/2021</p>
              </div>
              <div class="row">
                <div class="col-sm-12 col-md-6 col-lg-6">
                  Phí vận chuyển:
                </div>
                <div class="col-sm-12 col-md-6 col-lg-6 text-right">
                  15.000 VNĐ
                </div>
              </div>
              <hr>
              <div class="row">
                <div class="col-sm-12 col-md-6 col-lg-6">
                  <b>Tổng:</b>
                </div>
                <div class="col-sm-12 col-md-6 col-lg-6 text-right">
                  <b>15.000 VNĐ</b>
                </div>
              </div>
            </div>
          </div>
          <div class=" d-flex justify-content-center mt-4">
              <buton class="btn btn-success" name="xacnhandanhanhang">Xác nhận đã nhận hàng</buton>
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
  <!-- <div id="myModal" class="modal" role="dialog"> -->
    <!-- <div class="modal-dialog"> -->
      <!-- Modal content-->
      <!-- <div class="modal-content">
        <div class="modal-body text-center">
          <p class="modal-title">Đăng xuất!</p>
          <br />
          <p>Bạn có chắc chắn muốn đăng xuất</p>
        </div> -->
        <!-- <div class="modal-footer d-flex justify-content-center">
          <button type="button" class="btn btn-default" data-dismiss="modal">
            <a
              href="./thongtincanhan.php"
              style="text-decoration: none; color: black"
              >Hủy</a
            >
          </button>
          <button type="button" class="btn btn-default">
            <a -->
              <!-- href="../Home/Home.php"
              style="text-decoration: none; color: black"
              >Xác nhận</a
            >
          </button>
        </div>
      </div>
    </div>
  </div> -->
</html>