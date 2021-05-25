<?php
session_start();
class csdl
{
	function connect_database(){
        $connect = mysqli_connect("localhost", "root", "", "busmap");
        if (!$connect) {
            die("khong ket noi duoc");
        }
        $connect->set_charset("utf8");
        return $connect;
    }
	function xuattuyenxe($sql)
	{
		$link=$this->connect_database();
		$ketqua=mysqli_query($link, $sql);
		$i =mysqli_num_rows($ketqua);
		if($i>0)
		{
			while($row =mysqli_fetch_array($ketqua))
			{
				$idbus=$row['id'];
				
				$soxe=$row['bus_numbers'];
				$diadiem=$row['bus_number_name'];
				
				$tgiandi=$row['start_time'];
				$tgianden=$row['end_time'];
				
				echo'
				<div class="tuyenxe row pt-3 pb-3 mb-3">
                <div class="col-sm-2 col-md-2 col-lg-2">
                  <img src="../../icon/busicon.png" alt="" class="icon-bus" />
                </div>
                <div class="col-sm-10 col-md-10 col-lg-10 text-left">
                  <b><a href="../theodoichuyenxe/theodoichuyenxe.php?id='.$idbus.'">Tuyến xe số '.$soxe.'</a></b>
                  <p>'.$diadiem.' </p>
                  <div class="row">
                    <div class="col-sm-2 col-md-2 col-lg-2">
                      <img
                        src="../../icon//watch.png"
                        alt=""
                        class="icon-watch"
                      />
                    </div>
                    <div class="col-sm-10 col-md-10 col-lg-10 time text-left"><span class="border border-danger">'.$tgiandi.'</span> - <span class="border border-danger">'.$tgianden.'</span>

                    </div>
                  </div>
                </div>
              </div>
				';
			}
		}
	}
	function xuattenxe($sql)
	{
		$link=$this->connect_database();
		$ketqua=mysqli_query($link, $sql);
		$i=mysqli_num_rows($ketqua);
		if($i>0)
		{
			while($row=mysqli_fetch_array($ketqua))
			{
				$soxe=$row['bus_numbers'];
				echo'
				<p>Tuyến xe số '.$soxe.'</p>
				';
			}
		}
	}
	function xuatchitiet($sql)
	{
		$link=$this->connect_database();
		$ketqua=mysqli_query($link, $sql);
		$i=mysqli_num_rows($ketqua);
		if($i>0)
		{	$dem=5;
		 	
			while($row=mysqli_fetch_array($ketqua))
			{
				
				$diemdung=$row['name'];
				echo'
				<div class="row time-list">
              <div class="col-sm-6 col-md-6 co-lg-6">'.$diemdung.'</div>
              <div class="col-sm-6 col-md-6 co-lg-6 text-right">'.$dem.' phút</div>
            </div>
				
				';
				$dem=$dem+10;
			}
		}
	}
	
	function search($nn)
	{
		$sql="select*from ( buses_status 
										INNER JOIN buses ON buses_status.id_bus = buses.id
										INNER JOIN buses_numbers ON buses.id_buses_numbers = buses_numbers.id )
										WHERE bus_number_name LIKE '%$nn%' ";
		$result= mysqli_query($this->connect_database(), $sql);
		while($row=mysqli_fetch_array($result))
		{
			$idbus=$row['id'];
				$soxe=$row['bus_numbers'];
				$diadiem=$row['bus_number_name'];
				
				$tgiandi=$row['start_time'];
				$tgianden=$row['end_time'];
			
			echo'
				<div class=" row pt-3 pb-3 mb-3" style="background-color: CYAN; border-radius: 10px; margin-top:10px; ">
                <div class="col-sm-2 col-md-2 col-lg-2">
                  <img src="../../icon/busicon.png" alt="" class="icon-bus" />
                </div>
                <div class="col-sm-10 col-md-10 col-lg-10 text-left">
                  <b><a href="theodoichuyenxe.php?id='.$idbus.'">Tuyến xe số '.$soxe.'</a></b>
                  <p>'.$diadiem.' </p>
                  <div class="row">
                    <div class="col-sm-2 col-md-2 col-lg-2">
                      <img
                        src="../../icon//watch.png"
                        alt=""
                        class="icon-watch"
                      />
                    </div>
                    <div class="col-sm-10 col-md-10 col-lg-10 time text-left"><span class="border border-danger">'.$tgiandi.'</span> - <span class="border border-danger">'.$tgianden.'</span>

                    </div>
                  </div>
                </div>
              </div>
				';
		}
		
	}
	function mylogin($username,$password)
	{	
		$connect = $this->connect_database();
        $password=md5($password);
        $query="Select users.id,username, password, permission, `full_name` from users inner join user_details on users.id= user_details.id_user where username='$username' and password='$password'";
        $result= mysqli_query($connect, $query);
        //var_dump($query);die;
        $i=mysqli_num_rows($result);
        if($i==1){
            while($row=mysqli_fetch_array($result)){
            $_SESSION["id"]=$row["id"];
            $_SESSION["username"]=$row["username"];
            $_SESSION["fullname"]=$row["full_name"];
            $_SESSION["password"]=$row["password"];
            $_SESSION['permission'] = $row['permission'];
            $_SESSION['email'] = $row['email'];
					if($_SESSION['permission']==2)
					{
						//header('location:../../nhanvienlaixe/Home-nhanvienlaixe/Home-nvls.php');
						
						echo '  <script>
									window.location = "../../nhanvienlaixe/Home-nhanvienlaixe/Home-nvls.php";
								</script>';
					}
					else
					{	
						if($_SESSION['permission']==3)
						{
							//header('location:../../nguoibanve/Home-nguoibanve/Home-nvls.php');
							echo '  <script>
										
										window.location = "../../nguoibanve/Home-nguoibanve/Home-nvls.php";
									</script>';
						}
						else
						{
							if($_SESSION['permission']==4)
							{
								//header('location:../../nhanvienlaixe/Home-nhanvienlaixe/Home-nvls.php');
								echo '  <script>
                                                  window.location = "../../nguoiquanlynhansu/Home-nguoiquanlynhansu/Home-qlns.php";
                                              </script>';
							}
							else
							{
								if($_SESSION['permission']==5)
								{
									//header('location:../../thanhvien/Home-TV/Home-TV.php');
									echo '  <script>
                                                  window.location = "../../thanhvien/Home-TV/Home-TV.php";
                                              </script>';
								}
								else
								{
									if($_SESSION['permission']==6)
									{
										// header('location:../../thanhvien/Home-TV/Home-TV.php');
										echo '  <script>
                                                  window.location = "../../thanhvien/Home-TV/Home-TV.php";
                                              </script>';
									}
									else
									{
										//header('location:../../quanlynhaxe/Home-nguoiquanlynhaxe/Home-qlnx.php');
                                            echo '  <script>
                                                  window.location = "../../quanlynhaxe/Home-nguoiquanlynhaxe/Home-qlnx.php";
                                              </script>';
									}

								}
							}
						}
					}
					
					
				}
			}
		else
		{
			// header('location:login.php');
			echo '  <script>
						window.location = "location:../Login.php";                         
                     </script>';
		}
		
	}
	
	function confirmlogin($username, $password, $permission)
	{
		if ($permission != '1' && $permission != '2' && $permission != '3' &&$permission != '4' 
		&&$permission != '5' &&$permission != '6' &&$permission != '7'  ) {
            echo "<script>
                    window.location = '../../khachvanglai/Login/Login.php';
                </script>";
        }
		$connect = $this->connect_database();
        $query="Select username, password from users where username='$username' and password='$password'";
        $result= mysqli_query($connect, $query);
        if(!$result){
            echo "<script>
                    window.location = '../../khachvanglai/Login/Login.php';
                </script>";
        }
	} 
	function xuatnv($sql)
	{
		$link=$this->connect_database();
		$ketqua=mysqli_query($link, $sql);
		$i =mysqli_num_rows($ketqua);
		if($i>0)
		{
			while($row =mysqli_fetch_array($ketqua))
			{
				$ten=$row['full_name'];
				$sdt=$row['phone'];
				$mavn=$row['id'];
				$diac=$row['address'];
				$id=$row['id_user'];
				echo'
				 <tr>
                <td><a href="../thongtinnhanvien/thongtinnhanvien.php?id='.$id.'" style="color: black; text-decoration: none">'.$ten.'</a></td>
                <td>'.$mavn.'</td>
                <td>'.$sdt.'</td>
                <td>'.$diac.'</td>
            	</tr>
				';
			}
		}
	}
	function xuatthongtinnv($sql)
	{
		$link=$this->connect_database();
		$ketqua=mysqli_query($link, $sql);
		$i =mysqli_num_rows($ketqua);
		if($i>0)
		{
			while($row =mysqli_fetch_array($ketqua))
			{
				$ten=$row['full_name'];
				$sdt=$row['phone'];
				$mavn=$row['id'];
				$diac=$row['address'];
				$mail=$row['email'];
				if($row['permission']== 1){
					$string='admin';
					$a='';
				}
				elseif($row["permission"] == 2) {
					$string='Tài xế';
					$a='<a class="dropdown-item" href="../pages/extra_salary_add.php?id='.$row['id'].'"><i class="fa fa-fw fa-user"></i>Salary</a>';
				}elseif($row['permission']== 3){
					$string='Nhân viên bán vé';
					$a='<a class="dropdown-item" href="../pages/extra_salary_add.php?id='.$row['id'].'"><i class="fa fa-fw fa-user"></i>Salary</a>';
	
				}
				elseif($row['permission']== 4){
					$string='Quản lý nhân sự ';
					$a='<a class="dropdown-item" href="../pages/extra_salary_add.php?id='.$row['id'].'"><i class="fa fa-fw fa-user"></i>Salary</a>';
	
				}
				elseif($row['permission']== 7){
					$string='Quản lý nhà xe ';
					$a='<a class="dropdown-item" href="../pages/extra_salary_add.php?id='.$row['id'].'"><i class="fa fa-fw fa-user"></i>Salary</a>';
	
				}
				elseif($row['permission']== 5){
					$string='Khách hàng';
					$a='';
				}
				elseif($row['permission']== 6){
					$string='Học sinh';
					$a='';
				}
				elseif($row['permission']== 7){
					$string='Quản lý nhà xe';
					$a='';
				}
				echo'
				<p><h4>Họ tên: '.$ten.'</h4></p>
                        <p><h4>Mã số nhân viên: '.$mavn.'</h4></p>
                        <p><h4>Email: '.$mail.'</h4></p>
                        <p><h4>Địa chỉ:'.$diac.'</h4></p>
                        <p><h4>Số điện thoại: '.$sdt.'</h4></p>
                        <p><h4>Chức vụ: '.$string.'</h4></p>
				
				';
				echo'<div class="row">
				<div class="col-sm0 col-md-5 col-lg-5"></div>
				<div class="col-sm0 col-md-7 col-lg-7">
					<div class="row">
						<div class="col-sm-12 col-md-4 col-lg-4">
							<button class="btn">In thông tin</button>
						</div>
						<div class="col-sm-12 col-md-3 col-lg-3">
							<button class="btn btn-primary"><a href="../suathongtinnhanvien/suathongtinnhanvien.php?id='.$row["id"].'" style="color: white; text-decoration: none;">Sửa thông tin</a></button>
						</div>
						<div class="col-sm-12 col-md-1 col-lg-1"></div>
						<div class="col-sm-12 col-md-4 col-lg-4">
							<button class="btn btn-danger"><a href="../suathongtinnhanvien/suathongtinnhanvien.php?id='.$row["id"].'"  style="text-decoration: none; color: white;">Xóa</a></button>
						</div>
					</div>
				</div>
			</div>';
			}
		}
	}
	public function getDetailUser(string $id): array {
        $connect = $this->connect_database();
        $query = "select*from users u inner join user_details ud on u.id= ud.id_user where u.id={$id}";
        $result = mysqli_query($connect,$query);
        $num = mysqli_num_rows($result);
        $data = [];
        if ($num > 0) {
            while ($row = mysqli_fetch_array($result)) {
                $data['email'] = $row['email'];
                $data['id'] = $row['id'];
                $data['permission'] = $row['permission'];
                $data['full_name'] = $row['full_name'];
                $data['address'] = $row['address'];
                $data['phone'] = $row['phone'];
                $data['created_at'] = $row['created_at'];
            }
        }

        return $data;
    }

    
    public function updateUser(array $data, string $id): bool {
        $connect = $this->connect_database();
        $permission = $data['permission'];
		$fullname = $data['full_name'];
        $email = $data['email'];
        $address = $data['address'];
		$password = $data['password'];
        $phone = $data['phone'];
        $query_update_tb_users = "UPDATE users SET full_name='${fullname}', password='${password}' WHERE id = ${id};";
		$query_update_tb_user_details = "UPDATE user_details SET email='${email}', address='${address}', phone='${phone}', 
		permission='${permission}' WHERE id_user = ${id};";
        if (mysqli_query($connect, $query_update_tb_users)) {
            if(mysqli_query($connect, $query_update_tb_user_details)) {
				return 1;
			}

			return 0;
        }
        return 0;

    }
    public function deleteUser(array $data, string $id): bool {
        $connect = $this->connect_database();
        //$permission = $data["permission"];
            $query = "
            SET FOREIGN_KEY_CHECKS=0;delete from salaries where id_user={$id};
            delete from user_details where id_user={$id}; delete from users where id={$id}; ";
            //var_dump($query);die;
            if (mysqli_query($connect, $query)) {
                return 1;
            }
            return 0;
       
    }
    function addnewUser($user,$pass,$email, $fullname, $permission, $phone, $address)
	{
		$link=$this->connect_database();
		$sql="select * from users where username='$user'";
        $result=mysqli_query($link,$sql);
        $numberUser = mysqli_num_rows($result);
		if($numberUser == 0)
		{
            $pass=md5($pass);	
            $timestamp=time();
            $day=date("Y-m-d h:i:s",$timestamp);
            $sql_insert_tb_user = "INSERT INTO `users`(`username`, `password`, `full_name`, `created_at`)
            VALUES ('$user','$pass','$fullname','$day')";
            mysqli_query($link,$sql_insert_tb_user);
            $id_user = mysqli_insert_id($link);
            if($id_user != 0) {
                $sql2="INSERT INTO `user_details`( `phone`, `address`, `permission`, `email`, `id_user`) 
               VALUES ('$phone','$address','$permission','$email', $id_user)";
            //    var_dump($sql2);die; 
               if(mysqli_query($link,$sql2))
               {
                   echo"<script>alert('User created');</script>";
                   echo "<script>
            		window.location = '../quanlynhanvien/quanlynhanvien.php';
        			</script>";
               }
               else
                {
                    echo"<script>alert('Add user failed');</script>";
                }
            }
			else
			{
				echo"<script>alert('Add user failed');</script>";
			}
		}
		else
		{
			echo"<script>alert('Username already exists');</script>";
		}

	}

function insert_issue($id_user,$note, $tmp_name, $file_name, $type) 
		{
		
			
			$newname=$file_name."-".time();
			$file = ['image/jpeg', 'image/png','image/heic'];
		 	if (!in_array($type, $file))
			{
				echo 'file ko hop le'; 
			}
			else
			{
				
				$sql = "INSERT INTO `issue`(`id_user`, `notes`, `file`) VALUES ('$id_user', '$note', '$newname')";
				if (mysqli_query($this->connect_database(), $sql))
					{
						move_uploaded_file($tmp_name, '../upload/'.$newname);
						echo '<p style="color: red">
								  Bạn đã gửi báo cáo sự cố thành công !
			  				</p> ' ;
					} 
				else
					{
						echo 'that bai';
					}
			}
	
		}
		function themvexethuong($id_user, $doituong, $sove, $name, $timenow){
			$connect =$this->connect_database();
			$query_insert_tb_tickets = "INSERT INTO tickets(price,subtract_price,id_type_of_tickets,id_user)VALUES('7000','$doituong',1,$id_user)";
			mysqli_query($connect,$query_insert_tb_tickets);
			   $id_ticket = mysqli_insert_id($connect);
			   if($id_ticket) {
				   $query_insert_tb_orders= "INSERT INTO orders(date_order,quantity,status,id_ticket,id_user,image) VALUES('$timenow',$sove,0,${id_ticket},$id_user,'$name')";
		   
				   // var_dump($sql2);die; 
				  if(mysqli_query($connect,$query_insert_tb_orders))
				  {
					  echo"<script>alert('Thành Công');</script>";
					  echo'<a href="../../../zalopay/index.php" class='.'text-danger'.'>Vui Lòng Thanh Toán Vé Để Sử Dụng Vé</a>';                      
						
   
				  }
				  else
				   {
					   echo"<script>alert('Thất Bại');</script>";
				   }
			   }
			   else
			   {
				   echo"<script>alert('Mua Vé Thất Bại, vui lòng quay lại sau!');</script>";
			   }
		   }
		   function themvethang($id_user, $doituong, $name, $ngay){
			   $connect =$this->connect_database();
			   $query_insert_tb_tickets = "INSERT INTO tickets(price,subtract_price,id_type_of_tickets,id_user)VALUES(210000,$doituong,2,$id_user)";
			   mysqli_query($connect,$query_insert_tb_tickets);
				  $id_ticket = mysqli_insert_id($connect);
				  if($id_ticket!= 0) {
					  $query_insert_tb_orders= "INSERT INTO orders(date_order,quantity,status,id_ticket,id_user,image) VALUES('$ngay',1,0,$id_ticket,$id_user,'$name')";
			  
					  // var_dump($sql2);die; 
					 if(mysqli_query($connect,$query_insert_tb_orders))
					 {
						 echo"<script>alert('Thành Công');</script>";
						 echo'<a href="../../../zalopay/index.php" class='.'text-danger'.'>Vui Lòng Thanh Toán Vé Để Sử Dụng Vé</a>';                      
						 
	  
					 }
					 else
					  {
						  echo"<script>alert('Thất Bại');</script>";
					  }
				  }
				  else
				  {
					  echo"<script>alert('Mua Vé Thất Bại, vui lòng quay lại sau!');</script>";
				  }
			  }
	   function uploadfile($local,$folder,$name)
			{
				if($local!=''&&$folder !=''&&$name !='')
			   {
				   $newname=$folder."/".$name;
				   if(move_uploaded_file($local,$newname)==1)
				   {
					   return 1;
				   }
				   else
				   {
					   return 0;
				   }
			   }
			else
			{ 
				return 0;
			}
		}
	   
		   function showhang() {  //Show hàng chứ không phải "show hàng"
			   //  session_start();
				 if (isset($_SESSION['id']))
				 {
					 $id_user=$_SESSION['id'];
					 //var_dump($id_user);
				 }
				 else
				 {
					 $id_user=1; // lấy tạm id mặc định là 1
				 }
				 $sql = "SELECT * FROM goods WHERE id_user=".$id_user."";
				 $result = mysqli_query($this->connect_database(), $sql);
				 while ($row = mysqli_fetch_array($result)) {
					 if($row['status']==0){
						 $string='đang xử lý';
					 }elseif($row['status']==1){
					   $string='đang điều phối';
				   }elseif($row['status']==2){
					   $string='đang giao hàng';
				   }elseif($row['status']==3){
					   $string='đã giao hàng';
				   }
					 echo "<a href="."../thongtindonhang-TV/thongtindonhang_TV.php?id=".$row['id'].""." style="."color: black; text-decoration: none;".">
					 <div class="."row".">
					   
						 <div class="."col-sm-8 col-md-8 col-lg-8".">Đơn hàng ".$row['id']."</div>
						 <div class="."col-sm-4 col-md-4 col-lg-4"." >".$string."</div>
					   
					 </div>
				   </a>";
				 }
			 }
			 function insert_goods($tennguoigui,$tennguoinhan,$sdtgui, $sdtnhan, $tramgui,$tramnhan,$khoiluong, $mota) 
			 {
				   if (isset($_SESSION['id']))
				 {
					 $id_user=$_SESSION['id'];
					 //var_dump($id_user);
				 }
				 else
				 {
					 $id_user=1; // lấy tạm id mặc định là 1
				 }  
				   $status='0';
					 $sql = "INSERT INTO `goods` (`place_of_import_goods`, `place_of_return_goods`, `note`, `id_user`, `weight`, `status`, `phone_receiver`, `phone_sender`, `full_name_sender`, `full_name_receiver`)
										  VALUES ('$tramgui', '$tramnhan', '$mota', '$id_user', '$khoiluong', '$status', '$sdtnhan', '$sdtgui', '$tennguoigui', '$tennguoinhan');";
										  //var_dump($sql);die;
					 if (mysqli_query($this->connect_database(), $sql))
						 {
							 
						   echo '  <script>
						   Gửi hàng thành công!
						   window.location = "../guihang-TV/guihang_TV.php";
					   </script>';
   
						 } 
					 else
						 {
							 echo 'Thất bại';
						 }
				 
			 }
			 function showdonhang() {  //Show hàng chứ không phải "show hàng"
			   
			   $id=$_REQUEST['id']; //id don hang - được lấy bằng cách truyền biến qua link
			   
			   $sql = "SELECT * FROM goods WHERE id='$id' ";
			   $result = mysqli_query($this->connect_database(), $sql);
   
			   while ($row = mysqli_fetch_array($result)) {
				   echo " <div class="."d-flex justify-content-center text-left".">
				   <div class="."infordonhang".">
					 <div class="."row".">
					   <div class="."col-sm-12 col-md-6 col-lg-6".">
						 Tên người gửi: ".$row['full_name_sender']."
					   </div>
					   <div class="."col-sm-12 col-md-6 col-lg-6 text-right".">
						 Số điện thoại: ".$row['phone_sender']." 
					   </div>
					 </div>
					 <br />
					 <div class="."row".">
					   <div class="."col-sm-12 col-md-6 col-lg-6".">
						 Tên người nhận: ".$row['full_name_receiver']."
					   </div>
					   <div class="."col-sm-12 col-md-6 col-lg-6 text-right".">
						 Số điện thoại:  ".$row['phone_receiver']." 
					   </div>
					 </div>
					 <br />
					 <p>Trạm gửi: ".$row['place_of_import_goods']."</p>  
					 <p>Trạm nhận hàng: ".$row['place_of_return_goods']."</p>
					 <p>Khối lượng: ".$row['weight']."kg </p>
					 <p>Mô tả: ".$row['note']." </p>
					 <p >Ngày gửi: ".$row['date']."</p>
					 <p >Mã đơn hàng: ".$row['id']."</p>
				   </div>
				 </div>";
			   }
   
		   }
			
    }

?>