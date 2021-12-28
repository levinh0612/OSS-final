<?php

include './pdo.php';
session_start();

$ma  = isset($_GET['ma'])?$_GET['ma']:'';
$_SESSION['alert_name'] = $ma;
$_SESSION['alert_title'] ='Sửa thành công';
if ($ma !='')
{
    $sql ='select * from laptop where ma =?';
    $arr =[$ma];
    $objStatement =$objPDO->prepare($sql);
    $objStatement->execute($arr);
    $n = $objStatement->rowCount();

    $t = $objStatement->fetch();
    // print_r($t);
}
// header('location:index.php');

// alert("Bạn đã xóa thành công cuốn sách có mã: ".$book_id);

// function alert($msg) {
//     echo "<script type='text/javascript'>alert('$msg');</script>";
//   }
 ?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Chỉnh sửa Laptop</title>
   <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
</head>
<style>
    .container {
        border: 1px;
        border-color: none;
        padding: 10px;
        box-shadow: 5px 10px 18px #2980b9;
    }
</style>
<body>
      <div class="container ">
        <h1>Chỉnh sửa Laptop</h1>
        <form action="HandleUpdate.php" method='post' enctype='multipart/form-data'>
            Mã <input type="text" name='ma' class="form-control" readonly value="<?php echo $t['ma'] ?>"> <br>
            Tên <input type="text" name='ten' class="form-control" value="<?php echo $t['ten'] ?>"> <br>
            Giá <input type="number" name='gia' class="form-control" value="<?php echo $t['gia'] ?>"> <br>
            <!-- hinh <input type="text" name='img' class="form-control"> <br> -->
            Hình ảnh <input type="file" name='img' class="form-control"><br>
                    <input type="text" name='img-old' class="form-control" value="<?php echo $t['hinh'] ?>">
            Mô tả <textarea class="form-control" name="mota" id="" rows="3" ><?php echo $t['mota'] ?></textarea> <br>
            Loại <select name="loai" id="" class="form-control">


                                <option <?php if($t['loai'] =="Thường") echo "selected=\"selected\"" ?> value="Thường">Thường</option>
                                <option <?php if($t['loai'] =="Gaming") echo "selected=\"selected\"" ?> value="Gaming">Gaming</option>

                </select> <br>
                Thương hiệu <select name="thuonghieu" id="" class="form-control">
                                <option  <?php if($t['thuonghieu'] =="Apple") echo "selected=\"selected\"" ?> value="Apple">Apple</option>
                                <option  <?php if($t['thuonghieu'] =="Dell") echo "selected=\"selected\"" ?> value="Dell">Dell</option>
                                 <option  <?php if($t['thuonghieu'] =="Asus") echo "selected=\"selected\"" ?> value="Asus">Asus</option>
                                <option  <?php if($t['thuonghieu'] =="Acer") echo "selected=\"selected\"" ?> value="Acer">Acer</option>
                                 <option  <?php if($t['thuonghieu'] =="HP") echo "selected=\"selected\"" ?> value="HP">HP</option>
                                <option  <?php if($t['thuonghieu'] =="MSI") echo "selected=\"selected\"" ?> value="MSI">MSI</option>


                </select> <br>
                <input type="submit" class="btn btn-primary" value="Lưu">
        </form>
</body>
</html>
