<div class="container">
	<div class="jumbotron"  style="<?php echo 'background-position:'.rand(-600,900).'px '.rand(-400,900).'px'; ?>">
	  <h2><?php echo $outlet->name; ?> - <?php echo $outlet->mall ?></h2>
	  <p><span class="glyphicon glyphicon-earphone"></span><?php echo $outlet->phone ?></p>
	  <p> <span class="glyphicon glyphicon-home"></span> <?php echo $outlet->address ?></p>
	  <p><div class="fb-like" data-href="<?php echo outlet_url( $outlet ); ?>" data-layout="button_count" data-action="like" data-show-faces="true" data-share="true"></div></p>

</div>
<div class="row">
<div class="col-md-12">
	<div class="panel panel-default">
	  <div class="panel-heading">
	    <h3 class="panel-title">Products</h3>
	  </div>
		<div class="panel-body">

	 		<?php  
	 		if( isset( $products ))
	 		$this->load->view('_product', $products );
	 		else{
	 			echo 'No Product Added by '.$outlet->name;
	 			} ?>
		</div>
	 </div>
</div>
</div>
<!-- 
<div class="row">
<div class="col-md-12">
<div class="panel panel-default">
  <div class="panel-heading">
    <h3 class="panel-title">Other Offers</h3>
  </div>
  <div class="panel-body">
	 <div class="col-md-12">
	 <?php $this->load->view("_offer", $offers); ?>
	   </div>
	</div>
 </div>
</div>
</div> -->

</div> <!--  -->	
