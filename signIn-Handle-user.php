<?php

session_start();
    $username = $_POST["email_login"];
    $passwd = $_POST["password_login"];
    $_SESSION["user_name_user"] = $username;
        // echo  $_SESSION["user_name_user"];
    // header("Location: index.php");
     if(($username =="levinh@gmail.com") && ($passwd =="123456")||
        ($username =="vananh@gmail.com") && ($passwd =="123456")||
        ($username =="tranvanhung@gmail.com") && ($passwd =="123456")) {
            header("Location: index.php");
        }
        else {
            echo "Tài khoản của bạn không có trong hệ thống, vui lòng đăng ký";
            echo 'Current PHP version: ' . phpversion();
        }
?>

