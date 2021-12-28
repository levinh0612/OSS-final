<?php
session_start();
unset($_SESSION["user_name_user"]);
header("Location:index.php");
?>