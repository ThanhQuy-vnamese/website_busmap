<?php

require_once("class.php");
class Order extends Database{
function Order_list(){
        $connect = $this->connect_database();
        $query = "select*from Tickets 
        inner join type_of_tickets on tickets.id_type_of_tickets= type_of_tickets.id
        inner join users on users.id=tickets.id_user 
        inner join user_details on users.id=user_details.id_user
        inner join Orders on orders.id_ticket= tickets.id
         ";
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
                      <td><a href="pages/extra_order_detail.php?id='.$row['id'].'">Order #bus'.$row['id'].'</a></td>
                      <td><a href="pages/extra_order_detail.php?id='.$row['id'].'">'.$row['full_name'].'</td>
                      <td><a href="pages/extra_order_detail.php?id='.$row['id'].'"><span class="text-muted"><i class="fa fa-clock-o"></i>'.$row['date_order'].'</span> </td>
                      <td><a href="pages/extra_order_detail.php?id='.$row['id'].'">'.$row['quantity'].'</td>
                      <td><a href="pages/extra_order_detail.php?id='.$row['id'].'">'.$row['price'].'</td>
                      <td><a href="pages/extra_order_detail.php?id='.$row['id'].'">'.$row['subtract_price'].'</td>
                      <td><a href="pages/extra_order_detail.php?id='.$row['id'].'">'.$total.'</td>
                      <td><a href="pages/extra_order_detail.php?id='.$row['id'].'"><span class="badge badge-pill badge-danger">'.$status.'</span></td>
                    </tr>
                  ';
        }

    }
    public function getDetailOrder(string $id): array {
        $connect = $this->connect_database();
        $query = "select*from Tickets 
        inner join type_of_tickets on tickets.id_type_of_tickets= type_of_tickets.id
        inner join users on users.id=tickets.id_user 
        inner join user_details on users.id=user_details.id_user
        inner join Orders on orders.id_ticket= tickets.id where Orders.id={$id} ";
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
        $data = [];
                $data['quantity'] = $row['quantity'];
                $data['permission'] = $row['permission'];
                $data['price'] = $row['price'];
                $data['promotion_price'] = $row['promotion_price'];
                $data['subtract_price'] = $row['subtract_price'];
                $data['full_name'] = $row['full_name'];
                $data['email'] = $row['email'];
                $data['total'] = $total;
                $data['status'] = $status;
                $data['phone'] = $row['phone'];
                $data['address'] = $row['address'];
                $data['date_order'] = $row['date_order'];
            }


        return $data;
    }
    public function updateOrder(array $data, string $id): bool {
        $connect = $this->connect_database();
        $quantity = $data['quantity'];
        $status = $data['status'];
        $query = "UPDATE Orders SET quantity='${quantity}', status='${status}' WHERE id = ${id};";
        //var_dump($query);die;
        if (mysqli_query($connect, $query)) {
            return 1;
        }

        return 0;
    }


}
