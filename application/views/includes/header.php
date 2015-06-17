<?php 
$user	= $this->session->userdata('user');
?>
<!DOCTYPE html>
<html  ng-app="Mkt">
  <head>
    <title>Marketfiy</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Bootstrap -->
    
    <?php echo js('jquery.min.js')?>
    <?php echo js('jquery-ui.min.js')?>
    <?php echo css('bootstrap.min.css')?>
    <?php echo css('style.css')?>
    <?php echo css('custom.css')?>
    <?php echo js('bootstrap.min.js')?>
    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
      <script src="https://oss.maxcdn.com/libs/respond.js/1.3.0/respond.min.js"></script>
    <![endif]-->
    
     <!-- BootstrapValidator CSS -->
   
    <meta property="fb:app_id" content="489110881204073" />
    <?php if( isset( $product )) { ?>
    <?php echo css('products.css')?>
		<meta property="og:title" content="<?php echo $product->title; ?>" />
		<meta property="og:image" content="<?php echo product_img_url( $product ); ?>" />
		<meta property="og:url" content="<?php echo product_url($product); ?>" />
		<meta property="og:description" content="<?php echo $product->description ?>" />
		<meta property="og:site_name" content="Marketify.pk" />
    <?php }else{ ?>
	    <meta property="og:title" content="Marketify.PK" />
		<meta property="og:image" content="<?php echo site_url('images/icon.png'); ?>" />
		<meta property="og:url" content="<?php echo site_url(); ?>" />
		<meta property="og:description" content="Marketify Gives you a new interface to your Business, and provides the user to search the products arround." />
    <?php	} ?>

  </head>
  <nav class="navbar navbar-default" role="navigation" ng-hide="isAdmin" style="margin-top:0;">
      <!-- Brand and toggle get grouped for better mobile display -->
      <div class="container no-padding">
        <div class="navbar-header">
          <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-ex1-collapse">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
        </div>

        <!-- Collect the nav links, forms, and other content for toggling -->
        <div class="collapse navbar-collapse navbar-ex1-collapse no-padding">
          <div class="col-lg-4 no-left-padding">
          
          	
            <?php /*?><ul class="nav navbar-nav corporate-link">
              <li class="dropdown">
                <a href="#" class="dropdown-toggle corporate-anchor" data-toggle="dropdown">Corporate <b class="caret"></b></a>
                <ul class="dropdown-menu">
                  <li><a href="javascript:void(0);"  ng-click="openDialog('Coming Soon', 'This Feature is Coming Soon.')">test Corporate</a></li>
                </ul>
              </li>
            </ul><?php */?>
          </div>
          <div class="col-lg-8 no-right-padding">
          
            <ul class="nav navbar-nav navbar-right navbar-links">
              <!-- <li class="top-up-link"><a href="#/mobile/topup">Top Ups</a></li> -->
<?php /*?>
              <li><a href="javascript:void(0);"  ng-click="openDialog('Coming Soon', 'This Feature is Coming Soon.')"  class="myAccount-anchor">My Account  <span class="glyphicon"><img src="img/icon-my-account.png"/></span></a></li>
              <li><a href="javascript:void(0);"  ng-click="openDialog('Coming Soon', 'This Feature is Coming Soon.')" class="liveChat-anchor" ng-click="openDialog()">Live Chat  <span class="glyphicon"><img src="img/icon-live-chat.png"/></span></a></li><?php */?>
              
		      <?php 
          if ($this->ion_auth->logged_in()){
			  ?>
		       <li>
               		<img src="<?php echo site_url('avatar?h=50&amp;t='.$this->session->userdata('username')) ?>" class="img-circle" style="margin-top: 6px;width: 35px;"/>
                    
                    <?php //$usersocialID = $user->uid ; ?>
               </li>
           <li><a href="<?php echo base_url('auth/logout') ?>">Logout</a></li>
		       <li><a href="<?php echo base_url('dashboard') ?>">Dashboard</a></li>
	          <?php 
			  	}
				else		// If user is not logged in
				{
			   ?>

             <ul class="nav pull-right">
          <li class="dropdown" id="menuLogin">
            <a class="dropdown-toggle" href="#" data-toggle="dropdown" id="navLogin">Login</a>
            <div class="dropdown-menu" style="padding:17px;">
              <form class="form-horizontal bv-form" method="post" action="login" id="formLogin"> 
                <input name="email" required id="email" type="text" placeholder="Email"> 
                <input name="password" required id="password" type="password" placeholder="Password"><br>
                <button type="submit" id="btnLogin" class="btn">Login</button>
              </form>
              <button type="button" id="btnLogin" class="btn-primary">Login with Facebook</button>
            </div>
          </li>
        </ul>
            <li> 
              <a href="<?php echo base_url('signup') ?>">Register Outlet</a>
            </li>
	          <?php } ?>
            </ul>

            <!-- <div class="col-lg-4 search-container ">
              <form class="navbar-form navbar-left" role="search">
                <div class="input-group input-group-sm nav-search-outer">
                  <input type="text" class="form-control nav-search-field" placeholder="Search">
                  <span class="input-group-addon glyphicon glyphicon-search nav-search-submit"></span>
                </div>
              </form>
            </div><!-- /.col-lg-6 -->
            
          <form class="navbar-form navbar-right search-container" role="search">
              <div class="form-group input-group input-group-sm nav-search-outer">
                <input type="text" class="form-control nav-search-field float-left" placeholder="Search" style="
width: 78%;">
              <button type="submit" class="input-group-addon glyphicon glyphicon-search nav-search-submit float-right" style="padding-right: 20px;"></button>
              </div>
          </form>
            <div class="checkout-link-area text-right pull-right">
                <mini-cart></mini-cart>
            </div>
            
          </div>
        </div><!-- /.navbar-collapse -->
      </div>
    </nav>
    
      <div class="container">
      
      <div class="row">
        <div class="col-lg-6 logo-area">
        <a href="<?php echo base_url(); ?>" class="logo">
            <img src="assets/img/logo.jpg" alt="" width="190">
        </a>
		<?php /*?><a href="#"><img src="img/test-logo.png"></a><?php */?>
        </div>
        
        <div class="col-lg-6 links-area">
        
         <ul class="nav nav-pills pull-right">
		      <li><a href="<?php echo base_url('outlets') ?>">Outlets</a></li>
		      <li><a href="<?php echo base_url('categories') ?>">Tags</a></li>
		      <li><a href="<?php echo base_url('offers') ?>">Offers</a></li>
		      <?php if(isset($user->uid ) && $user->type== 'outlet' ){?>
		       <li class="dropdown">
		        <a href="#" class="dropdown-toggle" data-toggle="dropdown">Create <b class="caret"></b></a>
		        <ul class="dropdown-menu">
				<li><a href="<?php echo base_url('offers/add') ?>">Create Offers</a></li>
				<li class="divider"></li>
				<li><a href="<?php echo base_url('products/add') ?>">Create Product</a></li>
		        </ul>
		      </li>
		      <?php } ?>
		       <?php if(isset($user->outlet->id ) ){?>
		      	 <li><a href="<?php echo base_url('outlet/'.$user->outlet->id) ?>">My Outlet</a></li>
		       <?php 
		   			}
				?>
		    </ul>
            
        </div>
      </div>
    </div>