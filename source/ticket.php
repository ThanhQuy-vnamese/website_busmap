<?php
require_once("class.php");
class Tickets extends Database{
    function Ticket_list(){
        $connect = $this->connect_database();
        $sql="select * from Tickets";
        $result2 = mysqli_query($connect, $sql);
        while ($row = mysqli_fetch_array($result2)) {
            if($row['id']==0){
                echo'Không có Vé nào';
            }
            if($row['type_of_tickets']==0){
                $type='<span class="badge badge-success">Vé Thường</span>';
            }
            if($row['type_of_tickets']==1){
                $type='<span class="badge badge-primary">Vé Tháng</span>';
            }
            if($row['id_user']==''){
                $tt='<span class="badge badge-warning">New</span>';
            }
            elseif($row['id_user']!=''){
                $tt='<span class="badge badge-danger">Saled</span>';
            }
            echo'<tr>
            <td><a href="extra_app_ticket_detail.php?id='.$row['id'].'">'.$row['id'].'</td>
            <td>'.$row['price'].'</td>
            <td>'.$row['promotion_price'].'</td>
            <td>'.$tt.'</td>
            <td>'.$type.'</td>
            <td>
                <a href="javascript:void(0)" class="text-danger" data-toggle="tooltip" data-original-title="Delete"><i class="ti-trash" aria-hidden="true"></i></a>
            </td>
        </tr>';
        }
        

    }
    function Ticket_detail(){
        $connect = $this->connect_database();
        $query = "select*from Tickets inner join Orders on orders.id_ticket= tickets.id inner join users on users.id=orders.id_user inner join user_details on users.id=user_details.id_user ";
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
                <td>'.$row['promotion_price'].'</td>
                <td>'.$row['date_order'].'</td>
                <td>'.$status.'</td>
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
    function get_saledtickets()
    {
        $connect = $this->connect_database();
        $result = mysqli_query($connect, "select count(Tickets.id) as total from Tickets inner join Orders on orders.id_ticket= tickets.id");
        $row = mysqli_fetch_assoc($result);
        $total = $row['total'];
            echo '
            <div class="font-size-24">'.$total.'</div>
        ';
    }
    function get_newtickets()
    {
        $connect = $this->connect_database();
        $result1 = mysqli_query($connect, "select count(Tickets.id) as total1 from Tickets inner join Orders on orders.id_ticket= tickets.id");
        $row = mysqli_fetch_assoc($result1);
        $total1 = $row['total1'];
        $result2 = mysqli_query($connect, "select count(Tickets.id) as total2 from Tickets");
        $row = mysqli_fetch_assoc($result2);
        $total2 = $row['total2'];
        $total=$total2 - $total1;
            echo '
            <div class="font-size-24">'.$total.'</div>
        ';
    }
    function addnewTickets($price, $promotion_price,$type){
        $connect = $this->connect_database();
        $sql="INSERT INTO `tickets`(`id`, `price`, `promotion_price`, `id_user`, `type_of_tickets`) 
        VALUES ('',$price,$promotion_price,'',$type)";
        $result=mysqli_query($connect,$sql);
        if($result){
            echo"<script>alert('Tickets created');</script>";
        }
        else{
            echo"<script>alert('Tickets add fail');</script>";
        }
    }
}