<?php
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
				$cv=$row['username'];
				echo'
				<p><h4>Họ tên: '.$ten.'</h4></p>
                        <p><h4>Mã số nhân viên: '.$mavn.'</h4></p>
                        <p><h4>Email: '.$mail.'</h4></p>
                        <p><h4>Địa chỉ:'.$diac.'</h4></p>
                        <p><h4>Số điện thoại: '.$sdt.'</h4></p>
                        <p><h4>Chức vụ: '.$cv.'</h4></p>
				
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
        $email = $data['email'];
        $address = $data['address'];
        $phone = $data['phone'];
        $query = "UPDATE user_details SET email='${email}', address='${address}', phone='${phone}', permission='${permission}' WHERE id = ${id};";
        //var_dump($query);die;
        if (mysqli_query($connect, $query)) {
            return 1;
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
    
}
?>