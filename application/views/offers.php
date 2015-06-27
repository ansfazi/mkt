<?php
$geo_position = $this->session->userdata('location');
?>
<div class="container">
	<div class="page-header">
	  <ol class="breadcrumb">
      <li><a href="<?php echo base_url(); ?>">Home</a></li>
      <?php 
      if( $this->input->get('q')){
        echo "<li class='active'>".  $this->input->get('q') . '</li>';
      }
      ?>
      
  </ol>
	</div>
  <div class="row">
   <div class="col-md-3">
    <?php $this->load->view('_tags_sidebar', $tags); ?>
  </div>
  <div class="col-md-9">
    <ul class="media-list offer-list">
      <?php
      if( !count($offers)){
          echo "No Offer available in this option";
      }
      foreach ($offers as $key => $offer) {
       ?>
        <li class="media ">
          <a class="pull-left" href="<?php echo base_url("offer/$offer->id") ?>">
              <div class="offer-img">
                <img class="media-object"  alt="64x64" src="<?php echo  base_url("/images/offers/thumbs/").'/'.$offer->file_name; ?>" >
              </div>
          </a>
          <div class="media-body">
            <div class="discount"><?php echo $offer->discount ?>% off</div>
            <a  href="<?php echo base_url("offer/$offer->id") ?>">
              <h4 class="media-heading"><?php echo $offer->title ?></h4>
            </a>
            <p> <?php echo $offer->description ?> </p>
            <p> Price: <span class="striked"><?php echo $offer->full_price ?> </span><span><?php echo $offer->disconted_price ?> </span></p>
            <p>   Till: <?php echo $offer->end_date ?> </p>
            <p> <?php echo $offer->category ?> </p>
            <p> <?php echo distance($offer->current_lat, $offer->current_long, $geo_position['latitude'] ,$geo_position['longitude']);?> </p>
          </div>
        </li>
        <?php } ?>
    </ul>
  </div>
  </div>
</div>
