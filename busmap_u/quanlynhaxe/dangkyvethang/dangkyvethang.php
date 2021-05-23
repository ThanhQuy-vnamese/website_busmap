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
                  <a class="dropdown-item" href="" data-toggle="modal" data-target="#myModal">Đăng xuất</a>
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
      <div class="main-home container">
        <div class="row">
          <div class="col-sm-12 col-md-3 col-lg-3 list-bus pt-3">
            <a href="../dangkyvethang/dangkyvethang.php" style="color: black; text-decoration: none;"><b>Đăng ký vé tháng</b></a>
            <br><a href="../thecuaban/thecuaban.php" style="color: black; text-decoration: none;"><b>Thẻ của bạn</b></a>
          </div>
          <div class="col-sm-12 col-md-8 col-lg-8 d-flex justify-content-center">
            <div class="border-form">
              <h4 class="text-center">MUA VÉ THÁNG XE BUS</h4>
              <p class="text-center">Mã số vé: 0412344565465</p>
              <form action="" class="form">
                <div class="row mt-2">
                  <label for="" class="col-sm-12 col-md-4 col-lg-4"
                    >Chọn đối tượng:<span style="color: red"><i>(*)</i></span>
                  </label>
                  <div class="col-sm-12 col-md-8 col-lg-8">
                    <div class="row">
                      <div class="col-sm-6 col-md-6 col-lg-6">

                        <div class="row" style="display: flex; align-items: center;">
                            <div class="col-sm-3 col-md-3 col-lg-3">
                          <input
                            type="radio"
                            name="loai"
                            id="nguoithuong"
                            class="form-control"
                            value="nguoithuong"
                          /></div>
                          <label class="col-sm-9 col-md-9 col-lg-9" for="nguoithuong">Người thường</label>
                        </div>
                      
                      </div>
                      <div class="col-sm-6 col-md-6 col-lg-6">
                        <div class="row" style="display: flex; align-items: center;">
                            <div class="col-sm-3 col-md-3 col-lg-3">
                          <input
                            type="radio"
                            name="loai"
                            id="hssv"
                            class="form-control"
                            value="hssv"
                          /></div>
                          <label class="col-sm-9 col-md-9 col-lg-9" for="hssv">Học sinh, sinh viên</label>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="row mt-2">
                  <label for="datestart" class="col-sm-12 col-md-4 col-lg-4"
                    >Chọn ngày bắt đầu:<span style="color: red"><i>(*)</i></span>
                  </label>
                  <div class="col-sm-12 col-md-8 col-lg-8">
                    <input type="date" name="datestart" id="datestart" class="form-control" />
                  </div>
                </div>
                <div class="row mt-2">
                  <label for="name" class="col-sm-12 col-md-4 col-lg-4"
                    >Họ và tên:<span style="color: red"><i>(*)</i></span
                    >:
                  </label>
                  <div class="col-sm-12 col-md-8 col-lg-8">
                    <input type="text" name="name" id="name" class="form-control"/>
                  </div>
                </div>
                <div class="row mt-2">
                  <label for="ngaysinh" class="col-sm-12 col-md-4 col-lg-4"
                    >Ngày sinh:<span style="color: red"><i>(*)</i></span
                    >:
                  </label>
                  <div class="col-sm-12 col-md-8 col-lg-8">
                    <input type="date" name="ngaysinh" id="ngaysinh" class="form-control" />
                  </div>
                </div>
                <div class="row mt-2">
                  <label for="address" class="col-sm-12 col-md-4 col-lg-4"
                    >Địa chỉ:<span style="color: red"><i>(*)</i></span
                    >:
                  </label>
                  <div class="col-sm-12 col-md-8 col-lg-8">
                    <input type="text" name="address" id="address" class="form-control"/>
                  </div>
                </div>
                <div class="row mt-2">
                  <label for="" class="col-sm-12 col-md-4 col-lg-4"
                    >Ảnh thẻ HSSV:<span style="color: red"><i>(nếu mua vé HSSV)(*)</i></span>
                  </label>
                  <div class="col-sm-12 col-md-8 col-lg-8">
                    <input type="file" name="" id="" class="form-control" />
                  </div>
                </div>
                
                <div class="d-flex justify-content-center mt-2">
                  <button class="btn btn-success" onclick="dangkyvethang()">
                    
                    Đăng ký
                  </button>
                </div>
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

  <!-- Modal -->
  <div id="myModal" class="modal" role="dialog">
    <div class="modal-dialog">
      <!-- Modal content-->
      <div class="modal-content">
        <div class="modal-body text-center">
          <p class="modal-title">Đăng xuất!</p>
          <br />
          <p>Bạn có chắc chắn muốn đăng xuất</p>
        </div>
        <div class="modal-footer d-flex justify-content-center">
          <button type="button" class="btn btn-default" data-dismiss="modal">
            <a
              href="./dangkyvethang.php"
              style="text-decoration: none; color: black"
              >
            Hủy</a>
          </button>
          <button type="button" class="btn btn-default">
            <a
              href="../../khachvanglai/Home/Home.php"
              style="text-decoration: none; color: black"
              >Xác nhận</a
            >
          </button>
        </div>
      </div>
    </div>
  </div>
</html>
