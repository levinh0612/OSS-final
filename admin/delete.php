<?php
session_start();
include './pdo.php';
$ma  = isset($_GET['ma'])?$_GET['ma']:'';
$_SESSION['alert_name'] = $ma;
$_SESSION['alert_title'] ='Xóa thành công';
if ($ma !='')
{
    $sql ='delete from laptop where ma =?';
    $arr =[$ma];
    $objStatement =$objPDO->prepare($sql);
    $objStatement->execute($arr);
    $n = $objStatement->rowCount();
  //  echo "Da xoa $n cuon sach";
}
header('location:index.php');

// alert("Bạn đã xóa thành công cuốn sách có mã: ".$book_id);

// function alert($msg) {
//     echo "<script type='text/javascript'>alert('$msg');</script>";
//   }
 ?>


