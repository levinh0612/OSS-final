<?php
// echo '<pre>';
// print_r($_POST);
// print_r($_FILES);


include '../config.php';

include './pdo.php';
session_start();
$m = isset($_POST['ma']) ? $_POST['ma'] : '' ;
$t = isset($_POST['ten']) ? $_POST['ten'] : '' ;
$_SESSION['alert_name'] = $t;
$_SESSION['alert_title'] ='Thêm thành công';
$g = isset($_POST['gia']) ? $_POST['gia'] : '' ;
$mt = isset($_POST['mota']) ? $_POST['mota'] : '' ;
$th = isset($_POST['thuonghieu']) ? $_POST['thuonghieu'] : '' ;
$l = isset($_POST['loai']) ? $_POST['loai'] : '' ;

$img ='';
// $url = './assets/img/laptop';
if($_FILES['img']['error']==0) {
  $img = time().'-'. $_FILES['img']['name'];
  // echo URL_BOOK."/$img";
  move_uploaded_file($_FILES['img']['tmp_name'],URL_BOOK."/$img");
}
$sql = "INSERT INTO laptop ( ma, ten, gia,hinh,mota, loai, thuonghieu) VALUES (?, ? ,? ,? ,? ,?)";

$arr=[$m,$t,$g,$img,$mt,$l,$th];
// print_r($arr);
// exit();
$stm = $objPDO->prepare($sql);
$stm ->execute($arr);

header('location:index.php');


