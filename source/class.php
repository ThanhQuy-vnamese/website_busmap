<?php
class Database
{
    function connect_database(){
        $connect = mysqli_connect("localhost", "root", "", "busmap");
        if (!$connect) {
            die("khong ket noi duoc");
        }
        $connect->set_charset("utf8");
        return $connect;
    }
    function get_admin()
    {
        $connect = $this->connect_database();
        $result = mysqli_query($connect, "select count(users.id) as total from users inner join user_details on users.id= user_details.id_user where permission='1'");
        $row = mysqli_fetch_assoc($result);
        $total = $row['total'];
            echo '
            <a class="btn btn-outline btn-danger mb-5 d-flex justify-content-between" href="javascript:void(0)">Admin <span class="pull-right">'.$total.'</span></a>
        ';
    }
    function get_taixe()
    {
        $connect = $this->connect_database();
        $result = mysqli_query($connect, "select count(users.id) as total from users inner join user_details on users.id= user_details.id_user where permission='2'");
        $row = mysqli_fetch_assoc($result);
        $total = $row['total'];
            echo '
            <a class="btn btn-outline btn-success mb-5 d-flex justify-content-between" href="javascript:void(0)">Tài xế <span class="pull-right">'.$total.'</span></a>
        ';
    }
    function get_nvbanve()
    {
        $connect = $this->connect_database();
        $result = mysqli_query($connect, "select count(users.id) as total from users inner join user_details on users.id= user_details.id_user where permission='3'");
        $row = mysqli_fetch_assoc($result);
        $total = $row['total'];
            echo '
            <a class="btn btn-outline btn-danger mb-5 d-flex justify-content-between" href="javascript:void(0)">Nhân viên bán vé <span class="pull-right">'.$total.'</span></a>
        ';
    }
    function get_nv()
    {
        $connect = $this->connect_database();
        $result = mysqli_query($connect, "select count(users.id) as total from users inner join user_details on users.id= user_details.id_user where permission='4'");
        $row = mysqli_fetch_assoc($result);
        $total = $row['total'];
            echo '
            <a class="btn btn-outline btn-info mb-5 d-flex justify-content-between" href="javascript:void(0)">Quản lý nhân sự <span class="pull-right">'.$total.'</span></a>
        ';
    }
    function get_khachhang()
    {
        $connect = $this->connect_database();
        $result = mysqli_query($connect, "select count(users.id) as total from users inner join user_details on users.id= user_details.id_user where permission='5'");
        $row = mysqli_fetch_assoc($result);
        $total = $row['total'];
            echo '
            <a class="btn btn-outline btn-primary mb-5 d-flex justify-content-between" href="javascript:void(0)">Khách hàng <span class="pull-right">'.$total.'</span></a>
        ';
    }
    function get_hocsinh()
    {
        $connect = $this->connect_database();
        $result = mysqli_query($connect, "select count(users.id) as total from users inner join user_details on users.id= user_details.id_user where permission='6'");
        $row = mysqli_fetch_assoc($result);
        $total = $row['total'];
            echo '
            <a class="btn btn-outline btn-info mb-5 d-flex justify-content-between" href="javascript:void(0)">Học sinh, sinh viên <span class="pull-right">'.$total.'</span></a>
        ';
    }
    function get_alluser()
    {
        $connect = $this->connect_database();
        $result = mysqli_query($connect, "select count(users.id) as total from users");
        $row = mysqli_fetch_assoc($result);
        $total = $row['total'];
            echo '
            <a class="btn btn-outline btn-warning mb-5 d-flex justify-content-between" href="javascript:void(0)">Tổng <span class="pull-right">'.$total.'</span></a>
        ';
    }
    
    function user_list(){
        $connect = $this->connect_database();
        $query = "select*from users inner join user_details on users.id= user_details.id_user";
        $result = mysqli_query($connect, $query);
        while ($row = mysqli_fetch_array($result)) {
            if($row['permission']== 1){
                $string='admin';
                $a='';
            }
            elseif($row["permission"] == 2) {
                $string='Tài xế';
                $a='<a class="dropdown-item" href="../pages/extra_salary.php?id='.$row['id'].'"><i class="fa fa-fw fa-user"></i>Salary</a>';
            }elseif($row['permission']== 3){
                $string='Nhân viên bán vé';
                $a='<a class="dropdown-item" href="../pages/extra_salary.php?id='.$row['id'].'"><i class="fa fa-fw fa-user"></i>Salary</a>';

            }
            elseif($row['permission']== 4){
                $string='Quản lý nhân sự ';
                $a='<a class="dropdown-item" href="../pages/extra_salary.php?id='.$row['id'].'"><i class="fa fa-fw fa-user"></i>Salary</a>';

            }
            elseif($row['permission']== 5){
                $string='Khách hàng';
                $a='';
            }
            elseif($row['permission']== 6){
                $string='Học sinh';
                $a='';
            }
            if($row['id']==0){
                echo'Không có người dùng nào';
            }
                echo'<div class="media align-items-center">

                <span class="badge badge-dot "></span>	
    
                <a class="avatar avatar-lg status-success" href="#">
                  <img src="../../images/avatar/1.jpg" alt="...">
                </a>
    
                <div class="media-body">
                  <p>
                    <a href="#"><strong>'.$row['full_name'].'</strong></a>
                    <small class="sidetitle">'.$row['username'].'</small>
                  </p>
                  <p>Loại người dùng:'.$string.'</p>
    
                  <nav class="nav mt-2">
                    <a class="nav-link" href="#"><i class="fa fa-facebook"></i></a>
                    <a class="nav-link" href="#"><i class="fa fa-twitter"></i></a>
                    <a class="nav-link" href="#"><i class="fa fa-github"></i></a>
                    <a class="nav-link" href="#"><i class="fa fa-linkedin"></i></a>
                  </nav>
                </div>
    
                <div class="media-right gap-items">
                  <a class="media-action lead" href="#" data-toggle="tooltip" title="Orders"><i class="ti-shopping-cart"></i></a>
    
                  <div class="btn-group">
                    <a class="media-action lead" href="#" data-toggle="dropdown"><i class="ion-android-more-vertical"></i></a>
                    <div class="dropdown-menu dropdown-menu-right">
                      <a class="dropdown-item" href="../pages/extra_profile.php?id='.$row['id'].'"><i class="fa fa-fw fa-user"></i>Edit</a>
                      '.$a.'
                      <a class="dropdown-item" href="#"><i class="fa fa-fw fa-phone"></i> Call</a>
                      <div class="dropdown-divider"></div>
                      <a class="dropdown-item" href="../pages/extra_profile.php?id='.$row['id'].'"><i class="fa fa-fw fa-remove"></i> Remove</a>
                    </div>
                  </div>
                </div>
              </div>';
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
            SET FOREIGN_KEY_CHECKS=0;delete from user_details where id_user={$id}; delete from users where id={$id} ";
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
                   if($permission!='5' and $permission!='6'){
                    $id=$id_user;
                    echo'<a  class="btn btn-success mt-10 d-block text-center" href="../pages/extra_salary_add.php?id='.$id.'">Nhập Lương</a>;';      
                }
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
    function Order_list(){
        $connect = $this->connect_database();
        $query = "select*from Orders inner join tickets on orders.id_ticket= tickets.id inner join users on users.id=orders.id_user inner join user_details on users.id=user_details.id_user ";
        $result = mysqli_query($connect, $query);
        while ($row = mysqli_fetch_array($result)) {
            
            if($row['permission']== 1 && $row['type_of_tickets']== 0 ){
                $row['promotion_price']='0';
                $total=$row['price']*$row['quantity'];
            }
            elseif($row["permission"] == 2 && $row['type_of_tickets']== 0) {
                $row['promotion_price']='0';
                $total=$row['price']*$row['quantity'];
            }elseif($row['permission']== 3 && $row['type_of_tickets']== 0){
                $row['promotion_price']='0';
                $total=$row['price']*$row['quantity'];
            }
            elseif($row['permission']== 4 && $row['type_of_tickets']== 0){
                $row['promotion_price']='0';
                $total=$row['price']*$row['quantity'];
            }
            elseif($row['permission']== 5 && $row['type_of_tickets']== 0){
                $row['promotion_price']='0';
                $total=$row['price']*$row['quantity'];
            }
            elseif($row['permission']== 6 && $row['type_of_tickets']== 0){
                
                $row['promotion_price']='3000';
                $total=$row['promotion_price']*$row['quantity'];
            }
            elseif($row['permission']== 6 && $row['type_of_tickets']==1){
                
                $row['promotion_price']='90000';
                $total=$row['promotion_price'];
            }
            elseif($row['permission']== 1 || $row['permission']== 2 ||
            $row['permission']== 3 || $row['permission']== 4 || $row['permission']== 5 && $row['type_of_tickets']==1){
                
                $row['promotion_price']='0';
                $total=$row['price'];
            }
            if($row['id']==0){
                echo'Không có hóa đơn nào';
            }
            if($row['status']==0){
                $status='đang xử lý';
            }
            elseif($row['status']==1){
                $status='chờ thanh toán';
            }
            elseif($row['status']==2){
                $status='đã thanh toán';
            }
                echo'
                    <tr>
                      <td><a href="#">Order #bus'.$row['id'].'</a></td>
                      <td>'.$row['full_name'].'</td>
                      <td><span class="text-muted"><i class="fa fa-clock-o"></i>'.$row['date_order'].'</span> </td>
                      <td>'.$row['quantity'].'</td>
                      <td>'.$row['price'].'</td>
                      <td>'.$row['promotion_price'].'</td>
                      <td>'.$total.'</td>
                      <td><span class="badge badge-pill badge-danger">'.$status.'</span></td>
                    </tr>
                  ';
        }

    }
    public function getDetailOrder(string $id): array {
        $connect = $this->connect_database();
        $query = "select*from Orders inner join tickets on orders.id_ticket= tickets.id inner join users on users.id=orders.id_user inner join user_details on users.id=user_details.id_user ";
        $result = mysqli_query($connect, $query);
        while ($row = mysqli_fetch_array($result)) {
            if($row['permission']== 1){
                $row['promotion_price']='0';
                $total=$row['price']*$row['quantity'];
            }
            elseif($row["permission"] == 2) {
                $row['promotion_price']='0';
                $total=$row['price']*$row['quantity'];
            }elseif($row['permission']== 3){
                $row['promotion_price']='0';
                $total=$row['price']*$row['quantity'];
            }
            elseif($row['permission']== 4){
                $row['promotion_price']='0';
                $total=$row['price']*$row['quantity'];
            }
            elseif($row['permission']== 5){
                $row['promotion_price']='0';
                $total=$row['price']*$row['quantity'];
            }
            elseif($row['permission']== 6){
                
                $row['promotion_price']='3000';
                $total=$row['promotion_price']*$row['quantity'];
            }
            if($row['id']==0){
                echo'Không có hóa đơn nào';
            }
            if($row['status']==0){
                $status='đang xử lý';
            }
            elseif($row['status']==1){
                $status='chờ thanh toán';
            }
            elseif($row['status']==2){
                $status='đã thanh toán';
            }
            $alltotal=count($total);
        $num = mysqli_num_rows($result);
        $data = [];
        if ($num > 0) {
            while ($row = mysqli_fetch_array($result)) {
                $data['quantity'] = $row['quantity'];
                $data['permission'] = $row['permission'];
                $data['price'] = $row['price'];
                $data['promotion_price'] = $row['promotion_price'];
                $data['full_name'] = $row['full_name'];
                $data['total'] = $total;
                $data['status'] = $status;
                $data['date_order'] = $row['date_order'];
                $data['alltotal']=$alltotal;

            }
        }

        return $data;
    }
}


}