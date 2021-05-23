<?php

require_once("csdl_thanhvien.php");
class xe extends csdl{
function xuatdsxe($sql)
	{
		$link=$this->connect_database();
		$ketqua=mysqli_query($link,$sql);
		$i =mysqli_num_rows($ketqua);
		if($i>0)
		{	$den=1;
			while($row =mysqli_fetch_array($ketqua))
			{
				
				$soxe=$row['bus_numbers'];
				$bienso=$row['lincense_plate'];
				
				echo'
              <tr>
			  		<td><a href="../thongtinxebuyt/thongtinxebuyt.php?id='.$row['id'].'" style="color: black; text-decoration: none;">'.$row['id'].'</td>
                  <td><a href="../thongtinxebuyt/thongtinxebuyt.php?id='.$row['id'].'" style="color: black; text-decoration: none;">FUTA blue line </a></td>
                  <td><a href="../thongtinxebuyt/thongtinxebuyt.php?id='.$row['id'].'" style="color: black; text-decoration: none;">'.$bienso.'</td>
                  <td><a href="../thongtinxebuyt/thongtinxebuyt.php?id='.$row['id'].'" style="color: black; text-decoration: none;">'.$soxe.'</td>
                  <td><a href="../thongtinxebuyt/thongtinxebuyt.php?id='.$row['id'].'" style="color: black; text-decoration: none;">Xe bình thường</td>
              </tr>
              ';
				$den=$den+1;
			}
		}
	}
	function thongtinxe($sql)
	{
		$link=$this->connect_database();
		$ketqua=mysqli_query($link, $sql);
		$i =mysqli_num_rows($ketqua);
		if($i>0)
		{	
			while($row =mysqli_fetch_array($ketqua))
			{
				$soxe=$row['bus_numbers'];
				$bienso=$row['lincense_plate'];
				echo'
				<p>Loại xe buýt: FUTA Blue line</p>
                <p>Tuyến xe: '.$soxe.'</p>
                <p>Biển số xe: '.$bienso.'</p>
				';
				echo'<div class="row">
                    
				<div class="col-sm-0 col-md-4 col-lg-4">
					<button class="btn">In thông tin</button>
				</div>
				<div class="col-sm-0 col-md-0 col-lg-1"></div>
				<div class="col-sm-0 col-md-4 col-lg-3">
					<button class="btn btn-primary"><a href="../capnhatxebuyt/capnhatxebuyt.php?id='.$row["id"].'
					" style="color: white; text-decoration: none;">Sửa thông tin</a></button>
				</div>
				<div class="col-sm-0 col-md-0 col-lg-1"></div>

			</div>';
			}
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
            SET FOREIGN_KEY_CHECKS=0;delete from buses where id={$id};SET foreign_key_checks = 1;";
            var_dump($query);die;
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