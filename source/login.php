<?php
session_start();
require_once("class.php");
class User extends Database{
    function login($username, $password){
        $connect = $this->connect_database();
        $password=md5($password);
        $query="Select users.id,username, password, permission, `full_name` from users inner join user_details on users.id= user_details.id_user where username='$username' and password='$password'";
        $result= mysqli_query($connect, $query);
        //var_dump($query);die;
        $i=mysqli_num_rows($result);
        if($i==1){
            while($row=mysqli_fetch_array($result)){
            $_SESSION["id"]=$row["id"];
            $_SESSION["username"]=$row["username"];
            $_SESSION["fullname"]=$row["full_name"];
            $_SESSION["password"]=$row["password"];
            $_SESSION['permission'] = $row['permission'];
            $_SESSION['email'] = $row['email'];
            echo "<script>
            window.location = '../index.php';
        </script>";
            }
        }
        
        else{
            echo 'username or password is wrong!';
        }
    }
    function confirm($username, $password, $permisison){
        if ($permisison != '1') {
            echo "<script>
                    window.location = '../main/pages/auth_login.php';
                </script>";
        }
        $connect = $this->connect_database();
        $query="Select username, password from users where username='$username' and password='$password'";
        $result= mysqli_query($connect, $query);
        if(!$result){
            echo "<script>
                    window.location = '../main/pages/auth_login.php';
                </script>";
        }
    }
}
?>