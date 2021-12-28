
<?php
  foreach($data as $r) {
    ?>
      <div class="col-lg-4 col-md-6 portfolio-item filter-<?php echo $r['loai'] ?> filter-<?php echo $r['thuonghieu'] ?>">
            <div class="portfolio-img" style="width:420px;height: 420px;" ><img src="assets/img/laptop/<?php echo $r['hinh'];?>" class="img-fluid" alt=""></div>
            <div class="portfolio-info">
              <div class="text_product"><?php echo $r['ten'];?></div>
              <p><?php echo number_format($r['gia']);?> đồng</p>
              <a href="assets/img/laptop/<?php echo $r['hinh'];?>" data-gallery="portfolioGallery" class="portfolio-lightbox preview-link" title="<?php echo $r['ten'];?>"><i class="bx bx-plus"></i></a>
              <a href="./laptop-details.php?controller=laptop&action=detail&id=<?php echo $r['ma'] ?>" class="details-link" title="More Details"><i class="bx bx-link"></i></a>

            </div>
          </div>
    <?php
  }
?>
