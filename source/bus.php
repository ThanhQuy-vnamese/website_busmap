<?php

require_once("class.php");
class Bus extends Database{
    function Bus_list(){
        $connect = $this->connect_database();
        $sql="select * from buses_numbers inner join buses on buses.id_buses_numbers= buses_numbers.id";
        $result2 = mysqli_query($connect, $sql);
        while ($row = mysqli_fetch_array($result2)) {
            
            echo'<tr>
            <td><a href="extra_bus_detail.php?id='.$row['id'].'">'.$row['id'].'</td>
            <td><a href="extra_bus_detail.php?id='.$row['id'].'">'.$row['lincense_plate'].'</td>
            <td><a href="extra_bus_detail.php?id='.$row['id'].'">'.$row['bus_numbers'].'</td>
            <td><a href="extra_bus_detail.php?id='.$row['id'].'">'.$row['bus_number_name'].'</td>
            <td>
                <a href="extra_bus_list.php?id='.$row['id'].'" class="text-danger" data-toggle="tooltip" data-original-title="Delete"><i class="ti-trash" aria-hidden="true"></i></a>
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
        $mysqli = new mysqli("localhost","$bus_number_name","$bus_number");
        $bus_number_name= $mysqli -> real_escape_string($bus_number_name);
        $bus_number= $mysqli -> real_escape_string($bus_number);
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
    public function deleteBus( $id) {
        $connect = $this->connect_database();
        
            $query = "
            SET FOREIGN_KEY_CHECKS=0;delete from buses where id={$id}";
            if (mysqli_query($connect, $query)) {
                echo"<script>alert('Success');</script>";
            }
            else{
            echo"<script>alert(' failed');</script>";
            }
       
    }
    public function updateBus($bus_number, $plate, $id) {
        $connect = $this->connect_database();
        
        $query = "UPDATE buses SET lincense_plate='${plate}', id_buses_numbers='${bus_number}'WHERE id = ${id};";
        //var_dump($query);die;
        if (mysqli_query($connect, $query)) {
            echo"<script>alert('Success');</script>";
        }
        else{
        echo"<script>alert(' failed');</script>";
        }
    }
    public function getDetailBus(string $id): array {
        $connect = $this->connect_database();
        $query = "select * from buses_numbers inner join buses on buses.id_buses_numbers= buses_numbers.id where buses.id={$id}";
        $result = mysqli_query($connect,$query);
        $num = mysqli_num_rows($result);
        $data = [];
        if ($num > 0) {
            while ($row = mysqli_fetch_array($result)) {
                $data['plate'] = $row['lincense_plate'];
                $data['id'] = $row['id'];
                $data['bus_number_name'] = $row['bus_number_name'];
                $data['bus_numbers'] = $row['bus_numbers'];

            }
        }

        return $data;
    }

}