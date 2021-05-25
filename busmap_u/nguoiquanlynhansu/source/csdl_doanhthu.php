<?php
require_once("csdl_thanhvien.php");
class doanhthu extends csdl
{

    function bus_number_list(){
        $connect = $this->connect_database();
        $sql="select * from buses_numbers";
         
        $result=mysqli_query($connect,$sql);
        while($row=mysqli_fetch_array($result)){
            echo '<option value="'.$row['id'].'" >'.$row['bus_number_name'].'</option>';
        }
    }
    function Revenue_l($date, $id_bus_numbers){
        $connect = $this->connect_database();
        $query = "select*from revenue left join users on revenue.id_users=users.id
        left join buses_numbers on revenue.id_bus_numbers= buses_numbers.id where revenue.id_bus_numbers=$id_bus_numbers
        and date like '$date'
        ";
        //var_dump($query);die;
        $result = mysqli_query($connect, $query);
        echo'
        <table class="table table-bordered">
            <thead>
              <tr>
                <th>Tuyến xe</th>
                <th>Ngày</th>
                <th>Người bán vé</th>
                <th>Số vé</th>
                <th>Doanh thu</th>
              </tr>
            </thead>
			';
        while ($row = mysqli_fetch_array($result)) {
            $total_tickets=$row['regular_tickets'] + $row['monthly_ticket'] + $row['monthly_ticket_student'] + $row['student_ticket'];
            echo'<tr>
            <td>'.$row['bus_number_name'].'</td>
            <td>'.$row['date'].'</td>
            <td>'.$row['full_name'].'</td>
            <td>'.$total_tickets.'</td>
            <td>'.$row['total_revenue'].'<a href="../chitietve/chitietve.php?id='.$row['id'].'">Xem chi tiết</a></td>
          </tr>
          <tr>
            <td colspan="4">Tổng doanh thu</td>
            <td>'.$row['total_revenue'].'</td>
          </tr>
        ';

        }
        echo'</table>
        </div>';
    }
    function Revenue_l2($id){
        $connect = $this->connect_database();
        $query = "select*from revenue left join users on revenue.id_users=users.id
        left join buses_numbers on revenue.id_bus_numbers= buses_numbers.id where revenue.id=$id
        ";
        //var_dump($query);die;
        $result = mysqli_query($connect, $query);
        while ($row = mysqli_fetch_array($result)) {
            $total1=$row['regular_tickets']*7000;
            $total2= $row['monthly_ticket']*21000;
            $total3=$row['monthly_ticket_student']*90000;
            $total4= $row['student_ticket']*3000;
            
        echo'<div class="row">
        <div class="col-sm-12 col-md-4 col-lg-4">
            <p>'.$row['bus_number_name'].'</p>
        </div>
        <div class="col-sm-12 col-md-4 col-lg-4">
            <p>Thời gian: '.$row['date'].'</p>
        </div>
        <div class="col-sm-12 col-md-4 col-lg-4">
            <p>Nhân viên bán vé:'.$row['full_name'].'</p>
        </div>
    </div>
    <table class="table table-bordered">
        <thead>
            <tr>
              <th>Loại vé</th>
              <th>Số lượng</th>
              <th>Doanh thu</th>
            </tr>
        </thead>
        <tr>
            <td>Vé người thường</td>
            <td>'.$row['regular_tickets'].'</td>
            <td>'.$total1.'</td>
        </tr>
        <tr>
            <td>Vé HSSV</td>
            <td>'.$row['student_ticket'].'</td>
            <td>'.$total2.'</td>
        </tr>
        <tr>
            <td>Vé tháng người thường</td>
            <td>'.$row['monthly_ticket'].'</td>
            <td>'.$total3.'</td>
        </tr>
        <tr>
            <td>Vé tháng HSSV</td>
            <td>'.$row['monthly_ticket_student'].'</td>
            <td>'.$total4.'</td>
        </tr>
        <tr>
            <td colspan="3" class="text-right">Tổng doanh thu: '.$row['total_revenue'].'</td>
        </tr>
    </table>';
    }
}
    function Revenue_list(){
        $connect = $this->connect_database();
        $query = "select*from revenue inner join users on revenue.id_users=users.id
        inner join buses_numbers on revenue.id_bus_numbers= buses_numbers.id
        ";
        //var_dump($query);die;
        $result = mysqli_query($connect, $query);
        echo'
        <div class="table-responsive">
							<table id="revenue" class="table mt-0 table-hover no-wrap table-borderless" data-page-size="10">
								<thead>
									<tr>
										<th>ID</th>
										<th>Tuyến Xe</th>
                                        <th>Tên Tuyến Xe</th>
										<th>Doanh Thu Ngày</th>
										<th>Số Vé Thường</th>
										<th>Số Vé Tháng</th>
                                        <th>Số Vé Tháng HSSV</th>
										<th>Số Vé HSSV</th>
										<th>Tên Nhân Viên Bán Vé</th>
										<th>Tổng Doanh Thu</th>
									</tr>
								</thead>
								<tbody>';
        while ($row = mysqli_fetch_array($result)) {
            echo'<tr>
            <td><a href="extra_revenue_details.php?id='.$row['id'].'">'.$row['id'].'</td>
            <td><a href="extra_revenue_details.php?id='.$row['id'].'">'.$row['bus_numbers'].'</td>
            <td><a href="extra_revenue_details.php?id='.$row['id'].'">'.$row['bus_number_name'].'</td>
            <td><a href="extra_revenue_details.php?id='.$row['id'].'">'.$row['date'].'</td>
            <td><a href="extra_revenue_details.php?id='.$row['id'].'">'.$row['regular_tickets'].'</td>
            <td><a href="extra_revenue_details.php?id='.$row['id'].'">'.$row['monthly_ticket'].'</td>
            <td><a href="extra_revenue_details.php?id='.$row['id'].'">'.$row['monthly_ticket_student'].'</td>
            <td><a href="extra_revenue_details.php?id='.$row['id'].'">'.$row['student_ticket'].'</td>
            <td><a href="extra_revenue_details.php?id='.$row['id'].'">'.$row['full_name'].'</td>
            <td><a href="extra_revenue_details.php?id='.$row['id'].'">'.$row['total_revenue'].'</td>
           
        </tr>';

        }
        echo'</table>
        </div>';
    }
    function Revenue_detail($id){
        $connect = $this->connect_database();
        $query = "select*from revenue inner join users on revenue.id_users=users.id
        inner join buses_numbers on revenue.id_bus_numbers= buses_numbers.id
        where revenue.id=$id";
        $result = mysqli_query($connect,$query);
        $num = mysqli_num_rows($result);
        $data = [];
        if ($num > 0) {
        while ($row = mysqli_fetch_array($result)) {
            $data['id']=$row['id'];
            $data['bus_numbers']=$row['bus_numbers'];
            $data['bus_number_name']=$row['bus_number_name'];
            $data['date']=$row['date'];
            $data['regular_tickets']=$row['regular_tickets'];
            $data['monthly_ticket']=$row['monthly_ticket'];
            $data['monthly_ticket_student']=$row['monthly_ticket_student'];
            $data['student_ticket']=$row['student_ticket'];
            $data['full_name']=$row['full_name'];
            $data['total_revenue']=$row['total_revenue'];
            }
        }
        return $data;
    }
    
    function addnew_revenue($date,$regular_tickets,$monthly_ticket, $student_ticket, $monthly_ticket_student,$id_bus_numbers, $id){
        $total=$regular_tickets*7000 + $monthly_ticket*210000 + $student_ticket*3000 +$monthly_ticket_student*90000;
        //$id=2;
        $connect = $this->connect_database();
        $query = "INSERT INTO `revenue`(`id`, `date`, `id_bus_numbers`, `regular_tickets`, `student_ticket`, `monthly_ticket`, `monthly_ticket_student`, `id_users`, `total_revenue`) 
        VALUES ('','$date',$id_bus_numbers,$regular_tickets,$student_ticket,$monthly_ticket,$monthly_ticket_student,$id,$total)";
        //var_dump($query);die;
        if (mysqli_query($connect, $query)) {
            echo"<script>alert('thành công');</script>";
        }
        else{
            echo"<script>alert('Fail');</script>";
        }
    }

}