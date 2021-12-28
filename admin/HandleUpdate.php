<?php
include '../config.php';
include './pdo.php';
$m = isset($_POST['ma']) ? $_POST['ma'] : '' ;
$t = isset($_POST['ten']) ? $_POST['ten'] : '' ;
$g = isset($_POST['gia']) ? $_POST['gia'] : '' ;
$mt = isset($_POST['mota']) ? $_POST['mota'] : '' ;
$l = isset($_POST['loai']) ? $_POST['loai'] : '' ;
$th = isset($_POST['thuonghieu']) ? $_POST['thuonghieu'] : '' ;

$img =isset($_POST['img-old']) ? $_POST['img-old'] : '' ;

if($_FILES['img']['name']!=null) {
        $img = time().'-'. $_FILES['img']['name'];
        move_uploaded_file($_FILES['img']['tmp_name'],URL_BOOK."/$img");
}
$sql = "UPDATE laptop SET ten=?, gia=?,hinh=?,mota=?, loai=?, thuonghieu=? WHERE ma=?";

$arr=[$t,$g,$img,$mt,$l,$th,$m];
// print_r($arr);
// exit();
$stm = $objPDO->prepare($sql);
$stm ->execute($arr);
$v = $stm ->fetch();
// print_r($v);
header('location:index.php');

 ?>
