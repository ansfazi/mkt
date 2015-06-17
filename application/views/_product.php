<?php
foreach ($products as $key => $product) {
 ?>
  <div class="col-md-<?php echo isset($cols)?$cols:3;  ?> product-box">
  <?php if ( $product->discounted_price < $product->price ){ ?>
  <div class="small-discount"><?php echo $product->discounted_price ?>% off</div>
  <?php }elseif( $product->discounted_price == $product->price ){ ?>
  <div class="small-discount">Fix</div>
  <?php } ?>
    <div style="border:1px solid #ccc; padding:5px; margin:5px">
    <div class="img">
      <p align="center">
        <img src="<?php echo  product_img_url($product); ?>"/>  
      </p>
    </div>
      <div class="row">
        <div class="col-sm-12">
          <h4><?php echo l( $product->title, $product->slug?base_url("product/$product->slug"):base_url("product/$product->id") ) ?></h4>
          <hr> 
          <span class="pull-right"><?php echo isset( $product->outlet_name) ?l($product->outlet_name, base_url("outlet/$product->outlet_id") ):'' ?></span>
          <strong>Price:</strong> <span><?php echo $product->price ?> </span> 
          <?php if( isset($product->tags ) ){ ?>
          <hr> 
          Tags: <?php echo render_tags($product->tags) ?>
          <?php } ?>
        </div>
      </div>
    </div>
  </div>

<?php } ?>