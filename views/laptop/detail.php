<!-- <?php
echo '<pre>';print_r($data);
?> -->



            <!-- <img src="assets/img/laptop/<?php echo $data['hinh'];?>" class="img-fluid" alt="">

            <h5>Mã sách : <?php echo $data['ma']?> </h5>
            <h5>Tên sách : <?php echo $data['ten']?> </h5>
            <h5>Mô tả sách : <?php echo str_replace('-','</br> -',$data['mota'])?> </h5>
            <h5>Giá sách : <?php echo number_format($data['gia'])?> đồng</h5>
            <h5>Hình ảnh của sách : <?php echo $data['hinh']?> </h5>
            <h5>Mã nhà sản xuất : <?php echo $data['loai']?> </h5>
            <h5>Mã loại : <?php echo $data['thuonghieu']?> </h5> -->


            <div class="container">

        <div class="row gy-4">

          <div class="col-lg-8">
            <div class="portfolio-details-slider swiper-container">
              <div class="swiper-wrapper align-items-center">
                <img src="assets/img/laptop/<?php echo $data['hinh'];?>" style="width:80%" class="img-fluid" alt="">

              </div>
              <div class="swiper-pagination"></div>
            </div>
          </div>

          <div class="col-lg-4">
            <div class="portfolio-info">
              <h3><?php echo $data['ten']?> - <?php echo $data['ma']?> </h3>

            <h5><strong>Mô tả sách</strong> : <?php echo str_replace('-','</br> -',$data['mota'])?> </h5>
            <h5><strong>Thương hiệu</strong> : <?php echo $data['thuonghieu']?></h5>
            <h5><strong>Loại</strong> : <?php echo $data['loai']?></h5>

            <h5><strong>Giá</strong> : <span style="color:red">  <?php echo number_format($data['gia'])?> đồng </span></h5>


              <a href="#" class="btn-buy">Mua ngay</a>
            </div>

          </div>

        </div>

      </div>