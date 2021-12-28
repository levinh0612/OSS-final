<!-- CRUD-Create Read Update Delete -->
<?php
include './pdo.php';


session_start();
if(empty($_SESSION['user_name']))
{
    header("Location: signIn.php");
    exit;
}


//2. tao sql
$sql="select * from laptop ";
//.prepare sql

$objStatement =$objPDO->prepare($sql);
$arr =[];

//thuc thi sql
$objStatement->execute($arr);
//giai quyet ket qua

$n = $objStatement->rowCount();//so dong
//echo "Ket qua co $n dong";
$dataLaptop = $objStatement->fetchAll(PDO::FETCH_ASSOC);
//echo '<pre>'; print_r($dataSach); exit;
?>
<?php
    include '../config.php';
    function loadClass($className)
    {
        if (is_file("../models/$className.php"))
            include "../models/$className.php";
        else {
            echo 'Err';exit;
        }
    }

    spl_autoload_register('loadClass');

    $x= new Db();
    $controller= isset($_GET['controller'])?$_GET['controller']:'laptop';

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Quản lý Laptop  | ADMIN</title>
     <link rel='shortcut icon' href='https://dongunam.com/wp-content/uploads/2020/03/logo-lv-1.jpg' >
     <link rel="stylesheet" href="../assets/css/style.css">
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

    .listBook {
        margin:54px 0 0 0;
    }

</style>
<body>
    <!-- <a href="../index.php">
        <button class="btn btn-primary" style="position:fixed;">
             Trang chủ
        </button> -->
      <header id="header" class="d-flex align-items-center ">
    <div class="container-fluid d-flex align-items-center justify-content-lg-between" style="background-color: #212529; opacity: 0.95;">

      <h1 class="logo me-auto me-lg-0"><a href="../index.php" style="font-family: 'Trade Winds', cursive;">Laptop <span style="color: #490761;">Market</span></a></h1>
      <!-- Uncomment below if you prefer to use an image logo -->
      <!-- <a href="index.php" class="logo me-auto me-lg-0"><img src="assets/img/logo.png" alt="" class="img-fluid"></a>-->

      <nav id="navbar" class="navbar order-last order-lg-0">
        <ul>
          <li><a class="nav-link scrollto active" href="../index.php">Trang chủ</a></li>
          <li><a class="nav-link scrollto" href="../about.php">Thông tin SV</a></li>
          <!-- <li class="dropdown"><a href="laptop.html"><span>Laptop</span> <i class="bi bi-chevron-down"></i></a>
            <ul>
              <li><a href="laptop.php?controller=laptop&action=filterL&key=vp">Laptop văn phòng</a></li>
              <li class="dropdown"><a href="laptop.html"><span>Thương hiệu</span> <i class="bi bi-chevron-right"></i></a>
                <ul>
                  <li><a href="index.php?controller=laptop&action=filterTH&key=Apple">Apple</a></li>
                  <li><a href="laptop.php?controller=laptop&action=filterTH&key=MSI">MSI</a></li>
                  <li><a href="laptop.php?controller=laptop&action=filterTH&key=Asus">Asus</a></li>
                  <li><a href="laptop.php?controller=laptop&action=filterTH&key=Acer">Acer</a></li>
                  <li><a href="laptop.php?controller=laptop&action=filterTH&key=Dell">Dell</a></li>
                  <li><a href="laptop.php?controller=laptop&action=filterTH&key=HP">HP</a></li>
                </ul>
              </li>
              <li><a href="laptop.php?controller=laptop&action=filterL&key=gm">Laptop gaming</a></li>
            </ul>
          </li> -->

          <li ><span style="color:white">Chào <?php echo $_SESSION['user_name'] ?></span> <i class="bi bi-chevron-down"></i>
           <li> <a href="logout-Handle.php">Logout</a></li>

    </form>
        </ul>
        <i class="bi bi-list mobile-nav-toggle"></i>
      </nav><!-- .navbar -->

      <div class="header-social-links d-flex align-items-center">


        <a href="#" ><i class="bi bi-bell-fill"></i></a>
        <a href="#" ><i class="bi bi-cart-fill"></i></a>
        <button class ="img-seach-menu" onclick="document.getElementById('modal-search').style.display='block'" ><i class="bi bi-search img-search-menu"></i></button>
          <div id ="modal-search" class="search-modal">
            <span onclick="document.getElementById('modal-search').style.display='none'"class="close" title="Close Modal">&times;</span>
          <form action='laptop.php' method='get'>
            <input type="hidden"  name='controller' value='laptop'>
            <input type="hidden"  name='action' value='search'>
              <input type="text" class="search-text" placeholder="Tìm kiếm tên laptop" name="kw">
                <button type="submit" class="search-btn">
                   <!-- <img class="img-continue-search"src="./assets/img/continue.png"> -->
                </button>
          </form>
          </div>
      </div>
    </div>
  </header><!-- End Header -->
    </a>
    <?php
            // session_start();
              $mess = isset($_SESSION['alert_name']) ? $_SESSION['alert_name'] : '';
              $title = isset($_SESSION['alert_title']) ? $_SESSION['alert_title'] : '';
        function function_alert($msg) {
            echo "<script type='text/javascript'>alert('$msg');</script>";
        }
            if($mess!=='' && $title!=='') {

                function_alert($title." ".$mess);
            }
            unset($_SESSION['alert_name']);
            unset($_SESSION['alert_title']);
    ?>

    <div class="container ">

        <h1>Quản lí laptop</h1>
        <form action="store.php" method='post' enctype='multipart/form-data'>
            Mã <input type="text" name='ma' class="form-control"> <br>
            Tên<input type="text" name='ten' class="form-control"> <br>
            Giá <input type="number" name='gia' class="form-control"> <br>
            <!-- hinh <input type="text" name='img' class="form-control"> <br> -->
            Hình ảnh <input type="file" name='img' class="form-control"> <br>
            Mô tả <textarea class="form-control" name="mota" id="" rows="5"></textarea> <br>
            Loại <select name="loai" id="" class="form-control">



                                <option value="Thường">Thường</option>
                                <option value="Gaming">Gaming</option>



                </select> <br>
               Thương hiệu <select name="thuonghieu" id="" class="form-control">
                             <option value="Apple">Apple</option>
                                <option value="Dell">Dell</option>
                                 <option value="Asus">Asus</option>
                                <option value="Acer">Acer</option>
                                 <option value="HP">HP</option>
                                <option value="MSI">MSI</option>
                </select> <br>
                <input type="submit" class="btn btn-primary" value="Thêm mới">
        </form>



    </div>
    <div class="listBook">
                <h1>Danh sách của laptop: </h1>
        <hr>
        <table class="table table-striped table-info">
            <thead class="thead-dark">
                <tr>
                    <th>Mã </th>
                    <th>Tên </th>
                    <th>Giá</th>
                    <th>Hình ảnh</th>
                    <th>Loại</th>
                    <th>Thương hiệu</th>
                    <th>Mô tả</th>
                    <th>Hành động</th>
                </tr>
            </thead>
            <?php
            foreach($dataLaptop as $row)
            {
                ?>
                <tr>
                    <td><?php echo $row['ma'] ?></td>
                    <td><?php echo $row['ten'] ?></td>
                    <td><?php echo number_format($row['gia']) ?> VND</td>
                    <td><?php echo $row['hinh'] ?></td>
                    <td><?php echo $row['loai'] ?></td>
                    <td><?php echo $row['thuonghieu'] ?></td>
                    <td><?php echo $row['mota']?></td>
                    <td>
                        <a class="btn btn-info" href="update.php?ma=<?php echo $row['ma'] ?>">Sửa</a>
                        <a class="btn btn-danger" href="delete.php?ma=<?php echo $row['ma'] ?>">Xóa</a>
                    </td>
                </tr>
                <?php
            }
            ?>
        </table>
    </div>
</body>
</html>