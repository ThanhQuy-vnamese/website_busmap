<?php
session_start();
session_destroy();
echo "<script>
            window.location = '../pages/auth_login.php';
        </script>";
?>