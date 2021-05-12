<?php

require_once("class.php");
class Salary extends Database{
public function Employee_list(){
    $connect = $this->connect_database();
        $query = "select*from users inner join user_details on users.id=user_details.id_user where permission!='5' and permission!='6'and permission!='1' ";
        $result = mysqli_query($connect, $query);
        while ($row = mysqli_fetch_array($result)) {
            if($row['permission']== 2){
                $string='Tài xế';
            }
            elseif($row["permission"] == 3) {
               $string='Nhân viên bán vé';
            }elseif($row['permission']== 4){
                $string='Quản lý nhân sự';
            }
        
                echo'
                    <tr>
                      <td><a href="#">Employee #E'.$row['id'].'</a></td>
                      <td>'.$row['full_name'].'</td>
                      <td>'.$row['created_at'].'</td>
                      
                      <td><span class="badge badge-pill badge-danger">'.$string.'</span></td>
                      <td>'.$row['email'].'</td>N
                      <td>'.number_format($row['salary']).'VNĐ</td>
                    </tr>
                  ';
        }
}
public function getDetailSalary(string $id): array {
    $connect = $this->connect_database();
    $idDetail = $this->generateIdTableSalaryDetail($id);
    $query = "select*from salaries INNER JOIN 
    salaries_details_p${idDetail} as SD ON salaries.id = SD.id_salary where salaries.id_user={$id}";
    $result = mysqli_query($connect,$query);
    //var_dump($query);die;
    $num = mysqli_num_rows($result);
    $data = [];
    if ($num > 0) {
        while ($row = mysqli_fetch_array($result)) {
            
            $data['bonus'] = $row['bonus'];
            $data['allowances'] = $row['allowances'];
            $data['payment'] = $row['payment'];
            $data['number_hour_work'] = $row['number_hour_work'];
            $data['number_day_work'] = $row['number_day_work'];
            $data['vat'] = $row['vat'];
            $data['total_salary'] = $row['total_salary'];
        }
    }

    return $data;
}


    /**
     * @param string $idUser
     * @return int
     */
    public function generateIdTableSalaryDetail(string $id): int
    {
        return $id % 20;
    }
    function addnewSalary($id,$payment,$bonus,$allowances, $number_hour_work, $number_day_work, $vat)
    {   
        $idDetail = $this->generateIdTableSalaryDetail($id);
        //var_dump($idDetail);die;
		$link=$this->connect_database();
        $sql_insert_tb_salaries = "INSERT INTO `salaries`(`bonus`, `allowances`, `payment`, `id_user`)
            VALUES ('$bonus','$allowances','$payment','$id')";
            mysqli_query($link,$sql_insert_tb_salaries);
            $id_salary = mysqli_insert_id($link);
            //var_dump($sql_insert_tb_salaries);die;
            $total_salary= ($number_hour_work*$number_day_work*$payment) + $allowances + $bonus- $vat; 
            if($id_salary != 0) {
                $sql2="INSERT INTO `salaries_details_p${idDetail}`( `number_hour_work`, `number_day_work`, `vat`, `total_salary`,  `id_salary`) 
               VALUES ('$number_hour_work','$number_day_work','$vat',$total_salary, $id_salary)";
            //var_dump($sql2);die; 
               if(mysqli_query($link,$sql2))
               {
                   echo"<script>alert('Success');</script>";
               }
               else
                {
                    echo"<script>alert('failed');</script>";
                }
            }
			else
			{
				echo"<script>alert('failed');</script>";
			}
	}
    public function updateSalary($id,$payment,$bonus,$allowances, $number_hour_work, $number_day_work, $vat) {
        $connect = $this->connect_database();
        $idDetail = $this->generateIdTableSalaryDetail($id);
        $sql1 = "UPDATE salaries SET bonus='${bonus}', allowances='${allowances}', payment='${payment}' WHERE id_user = ${id}
        ;";
        $result = mysqli_query($connect, $sql1);
        while ($row = mysqli_fetch_array($result)) {
        $id_salary=$row['id'];
        $total_salary= ($number_hour_work*$number_day_work*$payment) + $allowances + $bonus- $vat;
    
            $sql2="UPDATE `salaries_details_p${idDetail}` SET number_hour_work='${number_hour_work}', number_day_work='${number_day_work}', 
            vat='${vat}', total_salary='$total_salary' WHERE id_salary = ${id_salary};";
        //var_dump($sql2);die; 
           if(mysqli_query_2($connect,$sql2))
           {
               echo"<script>alert('Success');</script>";
           }
           else
            {
                echo"<script>alert('failed');</script>";
            }
        }
    }
}