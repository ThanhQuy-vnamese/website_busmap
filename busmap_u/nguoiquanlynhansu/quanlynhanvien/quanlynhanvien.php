<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Document</title>
    <link rel="stylesheet" href="./quanlynhanvien.css" />
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
                  <a href="../Home-nguoiquanlynhansu/Home-qlns.php"><img src="../../icon/download.jfif" alt="" class="" style="width: 13%;"/></a>
                  <a href="../Home-nguoiquanlynhansu/Home-qlns.php" style="color: white; text-decoration: none; font-size: 35px;" class="text-left">Bus Map</a>
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
          <div class="col-sm-0 col-md-1 col-lg-1"></div>
          <div class="col-sm-12 col-md-9 col-lg-9">
          
            
              <div class="container">
                <ul class="nav d-flex justify-content-start" style="font-size: 17px;">
                  <li><a href="../guihang-TV/guihang_TV.php" style="margin-right: 20px;">Gửi hàng</a></li>
                  <li><a href="../muavethuong/muavethuong.php" style="margin-right: 20px;">Mua vé</a></li>
                  <li><a href="../dangkyvethang/dangkyvethang.php" style="margin-right: 20px;">Đăng ký vé tháng</a></li>
                  <li><a href="../xemlichlamviec/xemlichlamviec.php" style="margin-right: 20px;">Lịch làm việc</a></li>
                  <li><a href="../xemluong/xemluong.php" style="margin-right: 20px;">Lương</a></li>
                  <li><a href="../quanlynhanvien/quanlynhanvien.php" style="margin-right: 20px;">Quản lý nhân viên</a></li>
                </ul>
              </div>
            
          </div>
          <div class="col-sm-12 col-md-2 col-lg-2"></div>
        </div>
      </nav>
      <div class="main-home container pt-3 pb-3">
        <h4 class="text-center">DANH SÁCH NHÂN VIÊN</h4>
        <div class="row">
          <div class="col-sm-12 col-md-1 col-lg-1"></div>
            <div class="col-sm-12 col-md-5 col-lg-5" style="display: flex; align-items: center;">
                <div class="row mt-3">
                    <label for="bophan" class="col-sm-12 col-md-4 col-lg-4">Bộ phận</label>
                    <div class="col-sm-12 col-md-8 col-lg-8">
                        <select name="bophan" id="bophan" class="form-control">
                            <option value="nhanviencuacongty">Nhân viên của công ty</option>
                            <option value="nhanvienbanve">Nhân viên bán vé</option>
                            <option value="nhanvientaixe">Nhân viên tài xế</option>
                          </select>
                    </div>
                </div>
            </div>
            
            <div class="col-sm-12 col-md-3 col-lg-3">
                <button class="mt-4">In danh sách</button>
            </div>
            <div class="col-sm-12 col-md-3 col-lg-3 pt-3">
                <div class="row" style="display: flex; align-items: center;">
                    <div class="col-sm-8 col-md-8 col-lg-8">
                        <a href="../themnhanvien/themnhanvien.php" class=" d-flex justify-content-end">Thêm nhân viên mới</a>
                    </div>
                    <div class="col-sm-4 col-md-4 col-lg-4">
                        <img src="../../icon/plus-removebg-preview.png" alt="" style="width: 50%;">
                    </div>
                </div>
            </div>
        </div>
        <div class="container mt-3">
        <table class="table table-bordered table-striped">
            <thead>
                <tr>
                  <th>Họ tên</th>
                  <th>Mã</th>
                  <th>Số điện thoại</th>
                  <th>Địa chỉ</th>
                </tr>
            </thead>
            <tr>
                <td><a href="../thongtinnhanvien/thongtinnhanvien.php" style="color: black; text-decoration: none">Nguyễn Minh Mẫn</a></td>
                <td>12345678</td>
                <td>012345678</td>
                <td>265 Nguyễn Văn Lượng</td>
            </tr>
            <tr>
                <td><a href="../thongtinnhanvien/thongtinnhanvien.php" style="color: black; text-decoration: none">Trần Huỳnh Ngọc Thủy</a></td>
                <td>12345679</td>
                <td>0123456789</td>
                <td></td>
            </tr>
            <tr>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
            </tr>
        </table>
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
            <p class="modal-title">Đăng xuất!</p><br>
            <p>Bạn có chắc chắn muốn đăng xuất</p>
        </div>
        <div class="modal-footer d-flex justify-content-center">
          <button type="button" class="btn btn-default" data-dismiss="modal">Hủy</button>
          <button type="button" class="btn btn-default"><a href="../../khachvanglai/Home/Home.php" style="text-decoration: none; color: black;">Xác nhận</a></button>
        </div>
      </div>
  
    </div>
  </div>

  
</html>

