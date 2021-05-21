<?php
require_once("class.php");
class Revenue extends Database{
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
    
    function update_revenue($regular_tickets,$monthly_ticket, $student_ticket, $monthly_ticket_student,$id){
        $total=$regular_tickets*7000 + $monthly_ticket*210000 + $student_ticket*3000 +$monthly_ticket_student*90000;
        
        $connect = $this->connect_database();
        $query = "UPDATE `revenue` SET `regular_tickets`=$regular_tickets,
        `student_ticket`=$student_ticket,`monthly_ticket`=$monthly_ticket,`monthly_ticket_student`=$monthly_ticket_student,`total_revenue`=$total WHERE id=$id";
        if (mysqli_query($connect, $query)) {
            echo"<script>alert('thành công');</script>";
        }
        else{
            echo"<script>alert('Fail');</script>";
        }
    }

}