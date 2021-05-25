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
									window.location = "../../nguoibanve/Home-nguoibanve/Home-nvls.php";
								</script>';
					}
					else
					{	
						if($_SESSION['permission']==3)
						{
							//header('location:../../nguoibanve/Home-nguoibanve/Home-nvls.php');
							echo '  <script>
										
										window.location = "../../nhanvienlaixe/Home-nhanvienlaixe/Home-nvls.php";
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

	function showhang($sdtgui) {  //Show hàng chứ không phải "show hàng"
		//  session_start();
	  
		  $sql = "SELECT * FROM goods WHERE phone_sender like '$sdtgui' ";
		  //var_dump($sql);die;	
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
			  echo "<div class="."col-12".">
			  <a href="."../thongtindonhang/thongtindonhang.php?id=".$row['id'].""." style="."color: black; text-decoration: none;".">
			  <div class="."row".">
				  <div class="."col-sm-8 col-md-8 col-lg-8".">Đơn hàng ".$row['id']."</div>
				  <div class="."col-sm-4 col-md-4 col-lg-4".">".$string."</div>
				
			  </div>
			</a>
			
			  ";
			
		  }
		  echo'</div>';
		}
		  

        function insert_goods($tennguoigui,$tennguoinhan,$sdtgui, $sdtnhan, $tramgui,$tramnhan,$khoiluong, $mota) 
		{
                $status='Đang xử lý';
				$sql = "INSERT INTO `goods` (`place_of_import_goods`, `place_of_return_goods`, `note` , `weight`, `status`, `phone_receiver`, `phone_sender`, `full_name_sender`, `full_name_receiver`)
                                     VALUES ('$tramgui', '$tramnhan', '$mota', '$khoiluong', '$status', '$sdtnhan', '$sdtgui', '$tennguoigui', '$tennguoinhan');";
				if (mysqli_query($this->connect_database(), $sql))
					{
						
						echo '<p style="color: red">
								  Đơn hàng của bạn đã được gửi đi !
			  				</p> ' ;
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
            		window.location = '/khachvanglai/Home/Home.php';
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
}
?>