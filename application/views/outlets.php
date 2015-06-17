<?php
/*echo '<pre>';
print_r($outlets);
echo '</pre>';*/
?>
<div class="container">
	<div class="page-header">
	  <ol class="breadcrumb">
      <li><a href="<?php echo base_url(); ?>">Home</a></li>
      <li class="active">Outlets</li>
   
  </ol>
	</div>
  <div class="row">
  <div class="col-md-9">
  <?php 
    foreach ($outlets as $key => $outlet) {
  ?>
    <div class="media">
        <a class="pull-left" href="#">
        <img src="<?php echo site_url('avatar?h=150&amp;t='.$outlet->name) ?>" alt="" class="img" />
        </a>
        <div class="media-body">
          <h4 class="media-heading"><?php echo l($outlet->name, base_url("outlet/$outlet->id")); ?></h4><?php echo $outlet->owner_name ?>
          <?php echo $outlet->phone ?><br>
          <?php echo $outlet->mall ?><br>
          <?php echo $outlet->address ?><br>
        </div>
    </div>
        <hr>
    <?php } ?>
  </div>
   <div class="col-md-3">
   ad
  </div>
  </div>
</div>
