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
        return ((int)$id) % 20;
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
           if(mysqli_query($connect,$sql2))
           {
               echo"<script>alert('Success');</script>";
           }
           else
            {
                echo"<script>alert('failed');</script>";
            }
        }
    }
    public function Salary_list($date, $id_user){
        $connect = $this->connect_database();
        
        $idDetail = $this->generateIdTableSalaryDetail($id_user);
        echo'<div class="table-responsive">
							<table id="tickets" class="table mt-0 table-hover no-wrap table-borderless" data-page-size="10">
								<thead>
									<tr>
										<th>ID</th>
										<th>Tên Nhân Viên</th>
										<th>Email </th>
										<th>Ngày vào Làm</th>
										<th>Số Giờ Làm</th>
										<th>Số Ngày Làm</th>
										<th>Tiền Thưởng</th>
										<th>Tiền Phụ Cấp</th>
										<th>Khấu Trừ</th>
										<th>Lương Cứng</th>
										<th>Tổng Lương</th>
									</tr>
								</thead>
								<tbody>';
									
        if($date!='' && $id_user==''){
            $connect1 = $this->connect_database();
            $month=date('m', strtotime($date));
            $year=date('Y', strtotime($date));
            $sql1="select*from salaries LEFT JOIN salaries_details_p0 as SD ON salaries.id = SD.id_salary 
            LEFT JOIN salaries_details_p1 as SD1 ON salaries.id = SD1.id_salary 
            LEFT JOIN salaries_details_p2 as SD2 ON salaries.id = SD2.id_salary 
            LEFT JOIN salaries_details_p3 as SD3 ON salaries.id = SD3.id_salary 
            LEFT JOIN salaries_details_p4 as SD4 ON salaries.id = SD4.id_salary 
            LEFT JOIN salaries_details_p5 as SD5 ON salaries.id = SD5.id_salary 
            LEFT JOIN salaries_details_p6 as SD6 ON salaries.id = SD6.id_salary 
            LEFT JOIN salaries_details_p7 as SD7 ON salaries.id = SD7.id_salary 
            LEFT JOIN salaries_details_p8 as SD8 ON salaries.id = SD8.id_salary 
            LEFT JOIN salaries_details_p9 as SD9 ON salaries.id = SD9.id_salary 
            LEFT JOIN salaries_details_p10 as SD10 ON salaries.id = SD10.id_salary 
            LEFT JOIN salaries_details_p11 as SD11 ON salaries.id = SD11.id_salary 
            LEFT JOIN salaries_details_p12 as SD12 ON salaries.id = SD12.id_salary 
            LEFT JOIN salaries_details_p13 as SD13 ON salaries.id = SD13.id_salary 
            LEFT JOIN salaries_details_p14 as SD14 ON salaries.id = SD14.id_salary 
            LEFT JOIN salaries_details_p15 as SD15 ON salaries.id = SD15.id_salary 
            LEFT JOIN salaries_details_p16 as SD16 ON salaries.id = SD16.id_salary 
            LEFT JOIN salaries_details_p17 as SD17 ON salaries.id = SD17.id_salary 
            LEFT JOIN salaries_details_p18 as SD18 ON salaries.id = SD18.id_salary 
            LEFT JOIN salaries_details_p19 as SD19 ON salaries.id = SD19.id_salary 
            LEFT JOIN salaries_details_p20 as SD20 ON salaries.id = SD20.id_salary 
            LEFT join users on users.id=salaries.id_user 
            LEFT join user_details on users.id=user_details.id_user
            where SD.date LIKE '$year-$month-%' or SD1.date LIKE '$year-$month-%' or SD2.date LIKE '$year-$month-%' or
            SD3.date LIKE '$year-$month-%' or SD4.date LIKE '$year-$month-%' or 
            SD5.date LIKE '$year-$month-%' or SD6.date LIKE '$year-$month-%' or
            SD7.date LIKE '$year-$month-%' or SD8.date LIKE '$year-$month-%' or
            SD9.date LIKE '$year-$month-%' or SD10.date LIKE '$year-$month-%' or
            SD11.date LIKE '$year-$month-%' or SD12.date LIKE '$year-$month-%' or 
            SD13.date LIKE '$year-$month-%' or SD14.date LIKE '$year-$month-%' or
            SD15.date LIKE '$year-$month-%' or SD16.date LIKE '$year-$month-%' or
            SD17.date LIKE '$year-$month-%' or SD18.date LIKE '$year-$month-%' or
            SD19.date LIKE '$year-$month-%' or SD20.date LIKE '$year-$month-%'";
            //var_dump($sql1);die();
            $result1 = mysqli_query($connect1,$sql1);
        
            while ($row1 = mysqli_fetch_array($result1)) {
            echo'
                    <tr>
                      <td><a href="#">Nhân Viên #NV'.$row1['id'].'</a></td>
                      <td>'.$row1['full_name'].'</td>
                      <td>'.$row1['email'].'</td>
                      <td><span class="text-muted"><i class="fa fa-clock-o"></i>'.$row1['created_at'].'</span> </td>
                      <td>'.$row1['number_hour_work'].'</td>
                      <td>'.$row1['number_day_work'].'</td>
                      <td>'.number_format($row1['bonus']).'</td>
                      <td>'.number_format($row1['allowances']).'</td>
                      <td>'.number_format($row1['vat']).'</td>
                      <td>'.number_format($row1['payment']).'</td>
                      <td>'.number_format($row1['total_salary']).'</td>
                    </tr>
                    ';
        }
        }
        elseif($id_user!='' && $date==''){
            $connect2 = $this->connect_database();
            $sql2="select*from salaries inner JOIN salaries_details_p{$idDetail} as 
            SD ON salaries.id = SD.id_salary  
            inner join users on users.id=salaries.id_user 
            inner join user_details on users.id=user_details.id_user where salaries.id_user=$id_user";
            //var_dump($sql2); die;
            $result2 = mysqli_query($connect2,$sql2);
            
            while ($row2 = mysqli_fetch_array($result2)) {
            echo'
                    <tr>
                      <td><a href="#">Nhân Viên #NV'.$row2['id'].'</a></td>
                      <td>'.$row2['full_name'].'</td>
                      <td>'.$row2['email'].'</td>
                      <td><span class="text-muted"><i class="fa fa-clock-o"></i>'.$row2['created_at'].'</span> </td>
                      <td>'.$row2['number_hour_work'].'</td>
                      <td>'.$row2['number_day_work'].'</td>
                      <td>'.number_format($row2['bonus']).'</td>
                      <td>'.number_format($row2['allowances']).'</td>
                      <td>'.number_format($row2['vat']).'</td>
                      <td>'.number_format($row2['payment']).'</td>
                      <td>'.number_format($row2['total_salary']).'</td>
                    </tr>
                    ';
        }
        }
        elseif($date!='' && $id_user!=''){
            $connect3 = $this->connect_database();
            $month=date('m', strtotime($date));
            $year=date('Y', strtotime($date));
            $sql3="select*from salaries inner JOIN salaries_details_p{$idDetail} as 
            SD ON salaries.id = SD.id_salary  
            inner join users on users.id=salaries.id_user 
            inner join user_details on users.id=user_details.id_user where salaries.id_user=$id_user and
            date LIKE '$year-$month-%'";
            //var_dump($sql3); die;
            $result3 = mysqli_query($connect3,$sql3);
            
        
        while ($row = mysqli_fetch_array($result3)) {
            echo'
                    <tr>
                      <td><a href="#">Nhân Viên #NV'.$row['id'].'</a></td>
                      <td>'.$row['full_name'].'</td>
                      <td>'.$row['email'].'</td>
                      <td><span class="text-muted"><i class="fa fa-clock-o"></i>'.$row['created_at'].'</span> </td>
                      <td>'.$row['number_hour_work'].'</td>
                      <td>'.$row['number_day_work'].'</td>
                      <td>'.number_format($row['bonus']).'</td>
                      <td>'.number_format($row['allowances']).'</td>
                      <td>'.number_format($row['vat']).'</td>
                      <td>'.number_format($row['payment']).'</td>
                      <td>'.number_format($row['total_salary']).'</td>
                    </tr>
                    ';
        }
    }
        echo'</tbody>
        </table>
    </div>';
    }
    function user_list(){
        $connect = $this->connect_database();
        $query = "select*from users inner join user_details as ud on users.id= ud.id_user where ud.permission=2 or ud.permission=3 or ud.permission=4 ";
        $result = mysqli_query($connect, $query);
        while ($row = mysqli_fetch_array($result)) {
            if($row["permission"] == 2) {
                $string='Tài xế';
            }elseif($row['permission']== 3){
                $string='Nhân viên bán vé';

            }
            elseif($row['permission']== 4){
                $string='Quản lý nhân sự ';

            }
                echo'<option value="'.$row['id'].'">'.$row['full_name'].'-'.$string.'</option>';
        }

    }
}