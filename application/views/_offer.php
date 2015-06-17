<?php
foreach ($offers as $key => $offer) {
 ?>
  <div class="col-md-4 ">
  <div class="small-discount"><?php echo $offer->discount ?>% off</div>
    <div style="border:1px solid #ccc; padding:5px; margin:5px">
    <p align="center">
      <img src="<?php echo   file_exists(base_url("/images/offers/thumbs/").'/'.$offer->file_name)?base_url("/images/offers/thumbs/").'/'.$offer->file_name:base_url("/images/default-product.png"); ?>"/>  
    </p>
      <div class="row">
        <div class="col-sm-12">
        <?php  echo $offer->title ?>
          <hr>
          <strong>Price:</strong> <span class='striked'><?php echo $offer->full_price ?> </span><?php //echo $offer->discounted_price ?> <strong>Till:</strong><?php echo $offer->end_date ?> <a style="float:right; " href="<?php echo base_url("offer/$offer->id") ?>">Detail</a>
        </div>
      </div>
    </div>
  </div>

<?php } ?>