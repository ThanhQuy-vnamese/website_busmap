<?php
require_once("class.php");
class Tickets extends Database{
    function Ticket_list(){
        $connect = $this->connect_database();
        $sql="select * from type_of_tickets right join tickets on tickets.id_type_of_tickets= type_of_tickets.id";
        $result2 = mysqli_query($connect, $sql);
        while ($row = mysqli_fetch_array($result2)) {
            if($row['id']==0){
                echo'Không có Vé nào';
            }
            if($row['id_user']==''){
                $tt='<span class="badge badge-warning">New</span>';
            }
            elseif($row['id_user']!=''){
                $tt='<span class="badge badge-danger">Saled</span>';
            }
            $id=$row['id'];
            echo'<tr>
            <td><a href="extra_app_ticket_detail.php?id='.$row['id'].'">'.$row['id'].'</td>
            <td>'.$row['price'].'</td>
            <td>'.$row['subtract_price'].'</td>
            <td>'.$tt.'</td>
            <td><span class="badge badge-success">'.$row['type'].'</span></td>
            <td>
                <a href="javascript:void(0)" class="text-danger" data-toggle="tooltip" data-original-title="Delete"><i class="ti-trash" aria-hidden="true"></i></a>
            </td>
        </tr>';
        }
        

    }
    function Ticket_detail($id){
        
        $connect = $this->connect_database();
        $query = "select*from Tickets inner join Orders on orders.id_ticket= tickets.id 
        inner join users on users.id=orders.id_user 
        inner join user_details on users.id=user_details.id_user
        inner join type_of_tickets on tickets.id_type_of_tickets= type_of_tickets.id 
        where tickets.id={$id}";
        //var_dump($query);die;
        $result = mysqli_query($connect, $query);
        while ($row = mysqli_fetch_array($result)) {
            if($row['permission']== 1 && $row['type']== 'vé thường' ){
                $row['subtract_price']='0';
                $total=$row['price']*$row['quantity'];
            }
            elseif($row["permission"] == 2 && $row['type']== 'vé thường') {
                $row['subtract_price']='0';
                $total=$row['price']*$row['quantity'];
            }elseif($row['permission']== 3 && $row['type']== 'vé thường'){
                $row['subtract_price']='0';
                $total=$row['price']*$row['quantity'];
            }
            elseif($row['permission']== 4 && $row['type']== 'vé thường'){
                $row['subtract_price']='0';
                $total=$row['price']*$row['quantity'];
            }
            elseif($row['permission']== 5 && $row['type']== 'vé thường'){
                $row['subtract_price']='0';
                $total=$row['price']*$row['quantity'];
            }
            elseif($row['permission']== 6 && $row['type']== 'vé thường'){
                
                $row['subtract_price']='3000';
                $total=$row['subtract_price']*$row['quantity'];
            }
            elseif($row['permission']== 6 && $row['type']=='vé tháng'){
                
                $row['subtract_price']='90000';
                $total=$row['subtract_price'];
            }
            elseif($row['permission']== 1 || $row['permission']== 2 ||
            $row['permission']== 3 || $row['permission']== 4 || $row['permission']== 5 && $row['type']=='vé tháng'){
                
                $row['subtract_price']='0';
                $total=$row['price'];
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
            elseif($row['status']==''){
                $status='';
            }
                echo'
                <tr>
                <td>'.$row['id'].'</td>
                <td>
                    <a href="#">'.$row['full_name'].'</a>
                </td>
                <td>'.$row['email'].'</td>
                <td>'.$row['quantity'].'</td>
                <td>'.$row['price'].'</td>
                <td>'.$row['subtract_price'].'</td>
                <td>'.$row['date_order'].'</td>
                <td><span class="badge badge-pill badge-danger">'.$status.'</span></td>
                <td>
                    <a href="javascript:void(0)" class="text-danger" data-toggle="tooltip" data-original-title="Delete"><i class="ti-trash" aria-hidden="true"></i></a>
                </td>
            </tr>
            
                  ';
        }
    }
    function get_alltickets()
    {
        $connect = $this->connect_database();
        $result = mysqli_query($connect, "select count(Tickets.id) as total from Tickets");
        $row = mysqli_fetch_assoc($result);
        $total = $row['total'];
            echo '
            <div class="font-size-24">'.$total.'</div>
        ';
    }
    function get_usual_tickets()
    {
        $connect = $this->connect_database();
        $result = mysqli_query($connect, "select count(Tickets.id) as total from Tickets inner join type_of_tickets on tickets.id_type_of_tickets= type_of_tickets.id 
        where type_of_tickets.id= '1'");
        $row = mysqli_fetch_assoc($result);
        $total = $row['total'];
            echo '
            <div class="font-size-24">'.$total.'</div>
        ';
    }
    function get_monthly_tickets()
    {
        $connect = $this->connect_database();
        $result1 = mysqli_query($connect, "select count(Tickets.id) as total1 from Tickets 
        inner join type_of_tickets on tickets.id_type_of_tickets= type_of_tickets.id 
        where type_of_tickets.id= '2'");
        $row = mysqli_fetch_assoc($result1);
        $total1 = $row['total1'];
            echo '
            <div class="font-size-24">'.$total1.'</div>
        ';
    }
    function addnewTickets($price, $promotion_price,$type){
        $connect = $this->connect_database();
        $sql="INSERT INTO `type_of_tickets`(`id`, `type`, `price`, `promotion_price`)
         VALUES ('','$type','$price','$promotion_price')";
        //var_dump($sql);die;
        $result=mysqli_query($connect,$sql);
        if($result){
            echo"<script>alert('Tickets created');</script>";
        }
        else{
            echo"<script>alert('Tickets add fail');</script>";
        }
    }
}