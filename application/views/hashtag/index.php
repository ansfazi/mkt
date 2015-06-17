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
     <div class="col-md-2">
     
     <?php $this->load->view('_tags_sidebar', $tags) ?>
    </div>
 

    <div class="col-md-8">
    
      <?php 
      if( $this->input->get('q')){
        echo "<p><strong>000 Results found for ".  $this->input->get('q') . '</strong></p>';
      }
      ?>
    
    <?php
    $products['cols'] = 4;
    if( !count($products)){
        echo "No Offer available in this option";
    }
         $this->load->view( '_product', $products );
     ?>
 
  
   </div>
     <div class="col-md-2">
     
      <div class="list-group">
      <a href="#" class="list-group-item active" style="height:600px;">Ad</a>
       
      </div>
    </div>
  </div>

</div>
