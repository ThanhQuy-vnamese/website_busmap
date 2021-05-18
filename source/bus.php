<?php

require_once("class.php");
class Bus extends Database{
    function Bus_list(){
        $connect = $this->connect_database();
        $sql="select * from buses inner join buses_numbers on buses.id_buses_numbers= buses_numbers.id";
        $result2 = mysqli_query($connect, $sql);
        while ($row = mysqli_fetch_array($result2)) {
            
            echo'<tr>
            <td><a href="extra_bus_detail.php?id='.$row['id'].'">'.$row['id'].'</td>
            <td>51B.'.$row['lincense_plate'].'</td>
            <td>'.$row['bus_numbers'].'</td>
            <td>'.$row['bus_number_name'].'</td>
            <td>
                <a href="javascript:void(0)" class="text-danger" data-toggle="tooltip" data-original-title="Delete"><i class="ti-trash" aria-hidden="true"></i></a>
            </td>
        </tr>';
        }
        

    }
    function get_all_bus_numbers()
    {
        $connect = $this->connect_database();
        $result = mysqli_query($connect, "select count(buses_numbers.id) as total from buses_numbers");
        $row = mysqli_fetch_assoc($result);
        $total = $row['total'];
            echo '
            <div class="font-size-24">'.$total.'</div>
        ';
    }
    function get_allBus()
    {
        $connect = $this->connect_database();
        $result = mysqli_query($connect, "select count(buses.id) as total from buses");
        $row = mysqli_fetch_assoc($result);
        $total = $row['total'];
            echo '
            <div class="font-size-24">'.$total.'</div>
        ';
    }
    function bus_number_list(){
        $connect = $this->connect_database();
        $sql="select * from buses_numbers";
         
        $result=mysqli_query($connect,$sql);
        while($row=mysqli_fetch_array($result)){
            echo '<option value="'.$row['id'].'" >'.$row['bus_number_name'].'</option>';
        }
    }
    function addnewbus($id_buses_numbers,$plate){
        $connect = $this->connect_database();
        $sql="INSERT INTO `buses`(`id`, `id_buses_numbers`, `lincense_plate`)
         VALUES ('','$id_buses_numbers','$plate')";
        $result=mysqli_query($connect,$sql);
        if($result){
            echo"<script>alert('Thêm xe mới thành công');</script>";
        }
        else{
            echo"<script>alert(' fail');</script>";
        }
    }
    function addnewbusnumber($bus_number_name, $bus_number){
        $connect = $this->connect_database();
        $sql="INSERT INTO `buses_numbers`(`id`, `bus_number_name`, `bus_numbers`)
         VALUES ('','$bus_number_name','$bus_number')";
        $result=mysqli_query($connect,$sql);
        if($result){
            echo"<script>alert('Thêm tuyến mới thành công');</script>";
        }
        else{
            echo"<script>alert('fail');</script>";
        }
    }
}