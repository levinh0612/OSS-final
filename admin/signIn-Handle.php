<?php

session_start();
    $username = $_POST["username"];
    $passwd = $_POST["password"];
        $_SESSION["user_name"] = $username;
         $_SESSION["pass_word"] = $username;
        // echo  $_SESSION["user_name"];
        if(($username =="admin") && ($passwd =="123456")) {
            header("Location: index.php");
        }
        else {
            echo "Tài khoản của bạn không có quyền truy cập vào hệ thống ADMIN";
        }
?>

