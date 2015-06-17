</div> 
    </div>
    <!-- FOOTER -->
    <footer class="container-fluid footer" ng-hide="isAdmin">
      <div class="footer-border"></div>
      <div class="container">
        <div class="row">
          <div class="col-md-3">
            <h2>Services</h2>
            <ul>
              <li>Lorem Ipsem</li>
              <li>Lorem Ipsem</li>
              <li>Lorem Ipsem Gpsum</li>
              <li>Lorem Ipsem Gpsum humfum</li>
              <li>Internet Offer</li>
              <li>Apps</li>
            </ul>
          </div>
          <div class="col-md-3">
            <h2>Corporate</h2>
            <ul>
              <li>Business</li>
              <li>Small Businesses</li>
              <li>Medium & Large Businesses Plans</li>
              <li>Business Roaming</li>
              <li>Blackberry Handsets</li>
              <li>Enterprise Solutions</li>
            </ul>
          </div>
          <div class="col-md-3">
            <h2>Careers</h2>
            <ul>
              <li>Why test</li>
              <li>Job Opportunities</li>
              <li>Our Enabling Culture</li>
              <li>Rolls & Departments</li>
              <li>Our Hiring process</li>
            </ul>
          </div>
          <div class="col-md-3 newsletter-area">
            <h2>Test Lorem Ipsem</h2>
            <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry.Lorem Ipsum is simply dummy text of the printing and typesetting industry</p>
            <div class="col-lg-12 newsletter">
              <div class="input-group input-group-sm newsletter-outer">
                <input type="text" class="form-control enter-email-field newsletter-field" placeholder="Enter Your Email">
                <span class="input-group-addon glyphicon newsletter-image"></span>
              </div>
            </div><!-- /.col-lg-6 -->
          </div>
        </div>
        <hr>
        <div class="row">
          <div class="col-md-6 col-copyright">
            © 2013 Marketify Pakistan
          </div>
          <div class="col-md-6 find-us"><ul class="find-us-options"><li id="find-us-list">Find Us:</li><li id="fb-footer"></li><li id="twitter-footer"></li><li id="gplus-footer"></li><li id="rss-footer"></li></ul></div>
        </div>
      </div>
    </footer>
    
  </div><!-- /.container -->
  
  
<?php
if( ENVIRONMENT == "development"){
  echo '<pre>';
    print_r($this->session->all_userdata());
  	print_r(  $this->ion_auth->user()->row() );
  echo '</pre>';
}
   ?>
    <script type="text/javascript">
		
    <?php
    if(! $this->session->userdata('location')  ){
     ?>
    setTimeout(function(){
        getLocation()
    },1000);

    function getLocation()
    {
      if (navigator.geolocation){
        navigator.geolocation.getCurrentPosition(showPosition);
      }else{
        x.innerHTML="Geolocation is not supported by this browser.";
      }
    }
    function showPosition(position){ 
      $.post("<?php echo base_url('locations/add'); ?>",{geo_position:position["coords"] },function(result){});
    }
    <?php } // end  ?>
    </script>
  
  
  </body>
</html>


<?php /*?>
    <div class="container">    
     <hr>
  <div class="row">
    <div class="col-lg-12">
      <div class="col-md-3">
        <ul class="list-unstyled">
          <li>Marketify<li>
          <li><a href="<?php echo base_url("about_us"); ?>">About us</a></li>
          <li><a href="#">How it works</a></li>              
         
        </ul>
      </div>
      <div class="col-md-3">
        <ul class="list-unstyled">
          <li>Services<li>
          <li><a href="#">Sell with Us</a></li>              
        </ul>
      </div>
      <div class="col-md-3">
        <ul class="list-unstyled">
          <li><a href="<?php echo base_url("contact_us"); ?>">Contact us</a><li>
        </ul>
      </div>  
      <div class="col-md-3">
        <div class="fb-facepile" data-href="https://www.facebook.com/marketify.pk" data-max-rows="1" data-colorscheme="light" data-size="medium" data-show-count="false"></div>
      </div>
    </div>
  </div>
  <hr>
  <div class="row">
    <div class="col-lg-12">
      <div class="col-md-8">
        <a href="#">Terms of Service</a>    
        <a href="#">Privacy</a>    
        <a href="#">Security</a>
      </div>
      <div class="col-md-4">
        <p class="muted pull-right">2013 Marketify. All rights reserved</p>
        <a href="mailto:info@marketify.pk">info@marketify.pk</a>
      </div>
    </div>
  </div>
</div>
<?php
if( ENVIRONMENT == "development"){
  echo '<pre>';
  print_r($this->session->all_userdata());
  echo '</pre>';
}
   ?>
     <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->

    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="<?php echo base_url(); ?>assets/js/bootstrap.min.js"></script>
    <script src="<?php echo base_url(); ?>assets/js/bootstrap-datepicker.js"></script>
    <script type="text/javascript">
		$(document).ready(function(){
    		$('.datepicker').datepicker({
    			 todayBtn: "linked",
			    autoclose: true,
			    todayHighlight: true
    		});
			
		});  

    <?php
    if(! $this->session->userdata('location')  ){
     ?>
    setTimeout(function(){
        getLocation()
    },1000);

    function getLocation()
    {
      if (navigator.geolocation){
        navigator.geolocation.getCurrentPosition(showPosition);
      }else{
        x.innerHTML="Geolocation is not supported by this browser.";
      }
    }
    function showPosition(position){ 
      $.post("<?php echo base_url('locations/add'); ?>",{geo_position:position["coords"] },function(result){});
    }
    <?php } // end  ?>
    </script>
  </body>
</html><?php */?>