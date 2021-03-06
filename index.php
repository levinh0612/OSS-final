<?php


    function loadClass($className)
    {
        if (is_file("./models/$className.php")){
          include "./models/$className.php";
        }
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
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>Laptop Market | Trang chủ</title>
  <meta content="" name="description">
  <meta content="" name="keywords">

  <!-- Favicons -->
  <link href="assets/img/your-logo.png" rel="icon">

  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Raleway:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

  <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
  <link href="assets/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
  <link href="assets/vendor/glightbox/css/glightbox.min.css" rel="stylesheet">
  <link href="assets/vendor/remixicon/remixicon.css" rel="stylesheet">
  <link href="assets/vendor/swiper/swiper-bundle.min.css" rel="stylesheet">

  <link href="./assets/css/style.css" rel="stylesheet">
</head>

<body>

  <!-- ======= Hero Section ======= -->
  <section id="hero">
    <div class="hero-container">
      <h1>Welcome to LV </h1>
      <h2>Nơi trao đổi, buôn bán các loại LapTop trong từng phân khúc.</h2>
      <a href="#about" class="btn-get-started scrollto">Khám phá</a>
    </div>
  </section><!-- End Hero -->

  <!-- ======= Header ======= -->
  <header id="header" class="d-flex align-items-center ">
    <div class="container-fluid d-flex align-items-center justify-content-lg-between">

      <h1 class="logo me-auto me-lg-0"><a href="index.php" style="font-family: 'Trade Winds', cursive;">Laptop <span style="color: #490761;">Market</span></a></h1>
      <!-- Uncomment below if you prefer to use an image logo -->
      <!-- <a href="index.php" class="logo me-auto me-lg-0"><img src="assets/img/logo.png" alt="" class="img-fluid"></a>-->

      <nav id="navbar" class="navbar order-last order-lg-0">
        <ul>
          <li><a class="nav-link scrollto active" href="index.php">Trang chủ</a></li>
          <li><a class="nav-link scrollto" href="about.php">Thông tin SV</a></li>
          <li class="dropdown"><span style="color:white">Laptop</span> <i class="bi bi-chevron-down" style="color:white"></i>
            <ul>
              <li><a href="laptop.php?controller=laptop&action=filterL&key=vp">Laptop văn phòng</a></li>
              <li class="dropdown"><a href="laptop.html"><span>Thương hiệu</span> <i class="bi bi-chevron-right"></i></a>
                <ul>
                  <li><a href="laptop.php?controller=laptop&action=filterTH&key=Apple">Apple</a></li>
                  <li><a href="laptop.php?controller=laptop&action=filterTH&key=MSI">MSI</a></li>
                  <li><a href="laptop.php?controller=laptop&action=filterTH&key=Asus">Asus</a></li>
                  <li><a href="laptop.php?controller=laptop&action=filterTH&key=Acer">Acer</a></li>
                  <li><a href="laptop.php?controller=laptop&action=filterTH&key=Dell">Dell</a></li>
                  <li><a href="laptop.php?controller=laptop&action=filterTH&key=HP">HP</a></li>
                </ul>
              </li>
              <li><a href="laptop.php?controller=laptop&action=filterL&key=gm">Laptop gaming</a></li>
            </ul>
          </li>

          <li class="dropdown"><a href="acc.html"><span>Tài khoản</span> <i class="bi bi-chevron-down"></i></a>
            <ul>
                         <li li id="li-login"><a href="./signIn.php">Đăng nhập & đăng ký</a></li>

                      <li id ="li-logout" style="display:none"><a href="./logout-Handle.php">Đăng xuất</a></li>

                <?php
                  session_start();
                  $un=isset( $_SESSION["user_name_user"]) ? $_SESSION["user_name_user"] : '';
                  if(isset($_SESSION["user_name_user"])) {
                      ?>
                    <script>
                      document.getElementById("li-login").innerHTML = "Chào <?php echo str_replace('@gmail.com','',$_SESSION["user_name_user"] )?>";
                      document.getElementById("li-login").style.color ="white";
                      document.getElementById("li-login").style.padding ="0 0 0 16px";


                      document.getElementById("li-logout").style.display = "block";
                    </script>
                    <?php
                  }
                  else {
                    ?>
                      <!-- <li li id="li-login"><a href="./signIn.php">Đăng nhập & đăng ký</a></li> -->

                      <li id ="li-logout" style="display:none"><a href="./logout-Handle.php">Đăng xuất</a></li>
                    <?php
                  }
                ?>
            </ul>
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
                   <img class="img-continue-search"src="./assets/img/continue.png">
                </button>
          </form>
          </div>
      </div>
    </div>
  </header><!-- End Header -->

  <main id="main">

    <!-- ======= About Section ======= -->
    <section id="about" class="about">
      <div class="container">

        <div class="section-title">
          <h2>Về Laptop Market</h2>
        </div>

        <div class="row content">
          <div class="col-lg-6">
            <img src="./assets/img/your-logo.png" class="img-about" alt="">
            <p>
              Nhờ vào Laptop Market, bạn có thể:
            </p>
            <ul>
              <li><i class="ri-check-double-line"></i> Giao lưu trong thế giới Laptop.</li>
              <li><i class="ri-check-double-line"></i> Mua Laptop với giá cả phải chăng trong từng phân khúc.</li>
              <li><i class="ri-check-double-line"></i> Bán Laptop nhanh và cực kỳ dễ dàng trong vài nốt nhạc.</li>
            </ul>
          </div>
          <div class="col-lg-6 pt-4 pt-lg-0">
            <p>
              Mục tiêu của Laptop Market là sẽ trở thành thị trường mua bán Laptop trực tuyến hàng đầu Việt Nam. Mục đích
              của trang web là cho phép người mua và người bán kết nối và giao dịch an toàn, dễ dàng trong một
              môi trường tiện lợi và rõ ràng.
            </p>
            <p>
              Tất cả các hạng mục đều có trên trang web của chúng tôi, cho dù nó là dành cho mua, bán,
               tìm kiếm Laptop. Mục đích của chúng tôi là cung cấp cho người Việt Nam một nền tảng trực tuyến để
                sử dụng một cách đơn giản, tiện lợi, không rắc rối phức tạp. Không cần phải đăng ký và ai
                 cũng có thể tìm kiếm và đăng các thông tin liên quan về các danh mục sản phẩm cần bán khác
                 nhau, từ Laptop mới, cũ, 99% và còn nhiều hơn nữa.
            </p>
            <a href="#" class="btn-learn-more">Chi tiết...</a>
          </div>
        </div>

      </div>
    </section><!-- End About Section -->

    <!-- ======= Our Values Section ======= -->
    <section id="our-values" class="our-values">
      <div class="container">

        <div class="row">
          <div class="col-md-6 d-flex align-items-stretch">
            <div class="card" style='background-image: url("assets/img/our-values-1.jpg");'>
              <div class="card-body">
                <h5 class="card-title"><a href="">Nhiệm vụ</a></h5>
                <p class="card-text">Giúp các bạn mua bán Laptop dễ dàng và nhanh chóng.</p>
                <div class="read-more"><a href="#"><i class="bi bi-arrow-right"></i> Donate</a></div>
              </div>
            </div>
          </div>
          <div class="col-md-6 d-flex align-items-stretch mt-4 mt-md-0">
            <div class="card" style='background-image: url("assets/img/our-values-2.jpg");'>
              <div class="card-body">
                <h5 class="card-title"><a href="">Kế hoạch tương lai</a></h5>
                <p class="card-text">Phát triển thị trường Laptop Market ra toàn quốc.</p>
                <div class="read-more"><a href="#"><i class="bi bi-arrow-right"></i> Donate</a></div>
              </div>
            </div>

          </div>
          <div class="col-md-6 d-flex align-items-stretch mt-4">
            <div class="card" style='background-image: url("assets/img/our-values-3.jpg");'>
              <div class="card-body">
                <h5 class="card-title"><a href="">Đăng tin</a></h5>
                <p class="card-text">Bạn có thể đăng thông tin của 1 chiếc Laptop để bán 1 cách nhanh chóng.</p>
                <div class="read-more"><a href="#"><i class="bi bi-arrow-right"></i> Chi tiết...</a></div>
              </div>
            </div>
          </div>
          <div class="col-md-6 d-flex align-items-stretch mt-4">
            <div class="card" style='background-image: url("assets/img/our-values-4.jpg");'>
              <div class="card-body">
                <h5 class="card-title"><a href="">Mua Laptop</a></h5>
                <p class="card-text">Bạn có thể tìm kiếm sản phầm và mua chúng chỉ bằng 1 cú click.</p>
                <div class="read-more"><a href="#"><i class="bi bi-arrow-right"></i> Chi tiết...</a></div>
              </div>
            </div>
          </div>
        </div>

      </div>
    </section><!-- End Our Values Section -->

    <!-- ======= Portfolio Section ======= -->
    <section id="portfolio" class="portfolio">
      <div class="container">

        <div class="section-title">
          <h2>Danh sách laptop</h2>
                      <!-- ======= Clients Section ======= -->
            <section id="clients" class="clients section-bg">
              <div class="container">

                <div class="row">

                  <div class="col-lg-2 col-md-4 col-6 d-flex align-items-center justify-content-center">
                    <img src="assets/img/made/apple.png" class="img-fluid" alt="">
                  </div>

                  <div class="col-lg-2 col-md-4 col-6 d-flex align-items-center justify-content-center">
                    <img src="assets/img/made/MSI.png" class="img-fluid" alt="">
                  </div>

                  <div class="col-lg-2 col-md-4 col-6 d-flex align-items-center justify-content-center">
                    <img src="assets/img/made/HP.png" class="img-fluid" alt="">
                  </div>

                  <div class="col-lg-2 col-md-4 col-6 d-flex align-items-center justify-content-center">
                    <img src="assets/img/made/asus.png" class="img-fluid" alt="">
                  </div>

                  <div class="col-lg-2 col-md-4 col-6 d-flex align-items-center justify-content-center">
                    <img src="assets/img/made/acer.png" class="img-fluid" alt="">
                  </div>

                  <div class="col-lg-2 col-md-4 col-6 d-flex align-items-center justify-content-center">
                    <img src="assets/img/made/dell.png" class="img-fluid" alt="">
                  </div>

                </div>
              </div>
            </section><!-- End Clients Section -->

          <p>Tại <a href="index.php">Laptop Market</a> bạn có thể tìm thấy được những chiếc Laptop xịn xò thuộc những thương hiệu lớn.</p>
        </div>

          <ul id="portfolio-flters" class="d-flex justify-content-center">
            <li data-filter="*" class="filter-active">All</li>
            <li data-filter=".filter-MSI">MSI</li>
            <li data-filter=".filter-Acer">Acer</li>
            <li data-filter=".filter-Asus">Asus</li>
            <li data-filter=".filter-Apple">Apple</li>
            <li data-filter=".filter-Dell">Dell</li>
            <li data-filter=".filter-HP">HP</li>
          </ul>
           <ul id="portfolio-flters" class="d-flex justify-content-center">
            <li data-filter="*" class="filter-active">All</li>
            <li data-filter=".filter-Thường">Văn phòng</li>
            <li data-filter=".filter-Gaming">Gaming</li>

          </ul>

          <div class="row portfolio-container">

            <?php
                if ($controller=='laptop')
                {
                    include './controllers/laptop.php';
                }
            ?>

          </div>

        </div>

      </div>
    </section><!-- End Portfolio Section -->










<!-- ======= Team Section ======= -->


  </main><!-- End #main -->

  <!-- ======= Footer ======= -->
  <footer id="footer">

    <div class="footer-top">

      <div class="container">

        <div class="row  justify-content-center">
          <div class="col-lg-6">
            <h3>Laptop Market</h3>
            <p>Ở thời công nghệ 4.0 mà không có Laptop cứ như là con người không có tình yêu.</p>
          </div>
        </div>

        <div class="row footer-newsletter justify-content-center">
          <div class="col-lg-6">
            <form action="" method="post">
              <input type="email" name="email" placeholder="Nhập email của bạn"><input type="submit" value="Theo dõi">
            </form>
          </div>
        </div>

        <div class="social-links">
          <a href="#" class="twitter"><i class="bx bxl-twitter"></i></a>
          <a href="#" class="facebook"><i class="bx bxl-facebook"></i></a>
          <a href="#" class="instagram"><i class="bx bxl-instagram"></i></a>
          <a href="#" class="google-plus"><i class="bx bxl-skype"></i></a>
          <a href="#" class="linkedin"><i class="bx bxl-linkedin"></i></a>
        </div>

      </div>
    </div>

    <div class="container footer-bottom clearfix">
      <div class="copyright">
        &copy; Copyright <strong><span> <a href="index.php"> Laptop Market</a></span></strong>. All Rights Reserved
      </div>
      <div class="credits">
        <!-- All the links in the footer should remain intact. -->
        <!-- You can delete the links only if you purchased the pro version. -->
        <!-- Licensing information: https://bootstrapmade.com/license/ -->
        <!-- Purchase the pro version with working PHP/AJAX contact form: https://bootstrapmade.com/valera-free-bootstrap-theme/ -->
        Designed by VPHM
      </div>
    </div>
  </footer><!-- End Footer -->

  <div id="preloader"></div>
  <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

  <!-- Vendor JS Files -->
  <script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="assets/vendor/glightbox/js/glightbox.min.js"></script>
  <script src="assets/vendor/isotope-layout/isotope.pkgd.min.js"></script>
  <script src="assets/vendor/php-email-form/validate.js"></script>
  <script src="assets/vendor/purecounter/purecounter.js"></script>
  <script src="assets/vendor/swiper/swiper-bundle.min.js"></script>

  <!-- Template Main JS File -->
  <script src="assets/js/main.js"></script>

</body>

</html>