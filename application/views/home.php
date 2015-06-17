    <div class="container">

     <div class="row">
        <div class="col-md-8">
            <div class="jumbotron" style="background-position:-221px -109px">
              <h2>Welcome to Marketify.pk</h2>
              <p>Marketify Gives you a new interface to your Outlet</p>
              <p><a class="btn btn-success btn-lg" href="<?php echo site_url('signup'); ?>" role="button">Register you Outlet</a></p>
            </div>  
        </div>
        <div class="col-md-4">
        <a href="<?php echo site_url('signup'); ?>">
            <img style="float:right" src="<?php echo site_url('assets/img/'); ?>/outlet.png" width="315">   
        </a>
        </div>
    </div>
        <hr>

        <div class="row">
            <div class="col-lg-12">
                <h3>Latest Features</h3>
            </div>
        </div>
        <!-- /.row -->

        <div class="row text-center">
            <?php 
            foreach ($products as $key => $p) {
            ?>
            <div class="col-lg-3 col-md-6 hero-feature">
                <div class="thumbnail">
                <?php if( isset( $p->images[0] )){ ?>
                    <img src="<?php echo p_img( $p->images[0]->file_name, 'thumbnail') ;  ?>" alt="">
                    <?php }else{ ?>
                    <img src="http://placehold.it/400x320/ffcc33/fffffff/&text=<?php echo $p->title ?>" alt="">
                    <?php } ?>
                    <div class="caption">
                        <span><?php echo $p->title ?></span>
                        <p><?php //echo $p->price ?> <?php echo $p->discount.'%' ?></p>
                        <p> <a href="<?php echo site_url('products/'.$p->slug) ?> " class="btn btn-primary">More Info</a>
                        </p>
                        <p>Tags: <?php echo render_tags($p->tags) ?></p>
                    </div>
                </div>
            </div>
            <?php
            }
            ?>
        </div>
        <!-- /.row -->
        <div class="row">
            <section id="labels">
  <div class="container">
    <div class="row">
        <div class="col-sm-6 col-md-3">
          <div class="dl">
            <div class="brand">
                <h2>
                    mango
                </h2>
            </div>
            <div class="discount alizarin">
                30%
                <div class="type">
                    off
                </div>
            </div>
            <div class="descr">
                <strong>
                    Mei mucius gloriatur reprimique mollis*. 
                </strong> 
                Ad sonet perfecto antiopam mei, denique molestie ne has. 
            </div>
            <div class="ends">
                <small>
                    * Conditions and restrictions apply.
                </small>
            </div>
            <div class="coupon midnight-blue">
                <a data-toggle="collapse" href="#code-1" class="open-code">Get a code</a>
                <div id="code-1" class="collapse code">
                    LV5MAY14
                </div>
            </div>
          </div>
        </div>
        <div class="col-sm-6 col-md-3">
          <div  class="dl">
            <div class="brand">
                <h2>
                    lacoste
                </h2>
            </div>
            <div class="discount emerald">
                50%
                <div class="type">
                    off
                </div>
            </div>
            <div class="descr">
                <strong>
                    Ea per iuvaret ocurreret*. 
                </strong> 
                sit ea detraxit menandri mediocritatem, in mel dicant mentitum. 
            </div>
            <div class="ends">
                <small>
                   * Conditions and restrictions apply.
                </small>
            </div>
            <div class="coupon midnight-blue">
                <a data-toggle="collapse" href="#code-2" class="open-code">Get a code</a>
                <div id="code-2" class="collapse in code">
                    MNO123ST
                </div>
            </div>
          </div>
        </div>
        <div class="col-sm-6 col-md-3">
          <div  class="dl">
            <div class="brand">
                <h2>
                    converse
                </h2>
            </div>
            <div class="discount peter-river">
            15%
                <div class="type">
                    off
                </div>
            </div>
            <div class="descr">
                <strong>
                     Solet consul tractatos ei pro*. 
                </strong> 
                Ei mei quot invidunt explicari, placerat percipitur intellegam.
            </div>
            <div class="ends">
                <small>
                   * Conditions and restrictions apply.
                </small>
            </div>
            <div class="coupon midnight-blue">
                <a data-toggle="collapse" href="#code-3" class="open-code">Get a code</a>
                <div id="code-3" class="collapse code">
                    OLV4SY3R
                </div>
            </div>
          </div>
        </div>
        <div class="col-sm-6 col-md-3">
          <div  class="dl">
            <div class="brand">
                <h2>
                    adidas
                </h2>
            </div>
            <div class="discount amethyst">
                25%
                <div class="type">
                    off
                </div>
            </div>
            <div class="descr">
                <strong>
                    Cu aliquip persius alterum duo*. 
                </strong> 
                Possit equidem disputando usu et, sea invidunt scriptorem in. 
            </div>
            <div class="ends">
                <small>
                   * Conditions and restrictions apply.
                </small>
            </div>
            <div class="coupon midnight-blue">
                <a data-toggle="collapse" href="#code-4" class="open-code">Get a code</a>
                <div id="code-4" class="collapse code">
                    ZUY4OPLQ
                </div>
            </div>
          </div>
        </div>
    </div>
  </div>
</section>
            
        </div>
        <hr>

        <footer>
            <div class="row">
                <div class="col-lg-12">
                    <p>Copyright &copy; Company 2013</p>
                </div>
            </div>
        </footer>

    </div>
    <!-- /.container -->

    <!-- JavaScript -->
 