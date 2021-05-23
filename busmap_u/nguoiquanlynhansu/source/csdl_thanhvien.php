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
}
?>