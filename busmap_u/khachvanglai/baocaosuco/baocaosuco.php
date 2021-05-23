<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Document</title>
    <link rel="stylesheet" href="./baocaosuco.css" />
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
      <div class="main-home container pb-4 mt-3 mb-3" style="border: 1px solid; border-radius: 10px;">
            <p class="text-center">Trang này cho biết</p>
            <p class="text-center">Bạn cần đăng nhập để thực hiện chức năng này.</p>
            <div class="row link">
              <a href="../Home/Home.php" class="text-right col-sm-6 col-md-6 col-lg-6">Hủy</a>
              <a href="../Login/Login.php" class="text-left col-sm-6 col-md-6 col-lg-6">Đăng nhập</a>
            </div>
            <div class="row">
              <div class="col-sm-0 col-md-0 col-lg-4"></div>
              
              
              <div class="col-sm-0 col-md-12 col-lg-8 mt-5">
                <div class="lienlac" >
                  <h4 class="text-center">LIÊN LẠC VỚI CHÚNG TÔI</h4>
                  <div class="row ml-5" style="display: flex; align-items: center">
                    
                    <div class="col-sm-3 col-md-3 col-lg-3 d-flex justify-content-end">
                      <img
                        src="../../icon/icphone-removebg-preview.png"
                        alt=""
                        class="icon-phone1"
                      />
                    </div>
                    <div class="col-sm-8 col-md-8 col-lg-8">
                      <p class="">012345678</p>
                    </div>
                    <div class="col-sm-1 col-md-1 col-lg-1"></div>
                  </div>
                  <div class="row ml-5" style="display: flex; align-items: center">
                    <div class="col-sm-3 col-md-3 col-lg-3 d-flex justify-content-end">
                      
                    </div>
                    <div class="col-sm-8 col-md-8 col-lg-8">
                      <p class="">5:30 - 19:00 Thứ 2 - chủ nhật</p>
                    </div>
                     <div class="col-sm-1 col-md-1 col-lg-1"></div>
                  </div>
                  
                  <h4 class="text-center">CHAT VỚI CHÚNG TÔI</h4>
                  <div class="row ml-5" style="display: flex; align-items: center">
                    <div class="col-sm-3 col-md-3 col-lg-3 d-flex justify-content-end">
                      <img src="../../icon/fb.png" class="fb-icon1" />
                    </div>
                    <div class="col-sm-9 col-md-9 col-lg-9">
                      <p class="">Liên hệ bằng facebook</p>
                    </div>
                     
                  </div>

                  <div class="row" style="display: flex; align-items: center">
                    <div class="col-sm-1 col-md-1 col-lg-1"></div>
                    <div class="col-sm-3 col-md-3 col-lg-3 d-flex justify-content-end ml-2">
                      <img src="../../icon/ins.png" class="ins-icon1" />
                    </div>
                    <div class="col-sm-7 col-md-7 col-lg-7">
                      <p class="text-left">Liên hệ bằng Instagram</p>
                    </div>
                     
                  </div>
                  
                  <div class="row ml-5" style="display: flex; align-items: center">
                    <div class="col-sm-3 col-md-3 col-lg-3 d-flex justify-content-end">
                      <img src="../../icon/mail-removebg-preview.png" class="mail-icon1" />
                    </div>
                    <div class="col-sm-9 col-md-9 col-lg-9">
                      <p class="">busmap@gmail.com</p>
                    </div>
                     
                  </div>
                  
                </div>
              </div>
              <!-- <div class="col-sm-0 col-md-0 col-lg-2"></div> -->
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
              <img src="../../icon/ins.png" class="ins-icon" />
            </div>
            <div
              class="col-sm-3 col-md-3 col-lg-3 d-flex justify-content-start"
            >
              <img src="../../icon/yt.png" class="yt-icon" />
            </div>
            <div class="col-sm-3 col-md-3 col-lg-3"></div>
          </div>
        </div>
      </div>
    </div>
  </footer>
  </body>
  
  
</html>
