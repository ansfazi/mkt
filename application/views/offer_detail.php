<div class="container">
	<div class="page-header">
	  <h1>Offers<small>offers available near to you</small></h1>
	</div>

    <div class="row">
     <div class="col-md-3">
      <div class="list-group">
      <a href="#" class="list-group-item active">Select Categories</a>
        <?php
        foreach ($categories as $id => $category) {
       ?>
      <a href="#<?php echo $category->category ?>" class="list-group-item"> <?php echo $category->category ?></a>
      <?php } ?> 
      </div>
    </div>

    <div class="col-md-9">

      <p><img src="<?php echo $offers->path; ?>" style="max-height:300px; width:100%"></p>
      <div class="row">

        <div class="col-md-9">
           <h1><?php echo $offers->title ?></h1>
        </div>
        <div class="col-md-3">
<!--               <div id="stars" class="starrr"></div>
 -->              
          </div>
      </div>
      <div id="stars-existing" class="starrr" data-rating='4'></div>       
      <p> by - Ali Garements  Pace 2 Lahore</p>
      <p><?php echo $offers->description ?></p>
      <p>Full Price: <?php echo $offers->full_price ?></p>
      <p>Discounted Price:<?php echo $offers->disconted_price ?></p>
      <p>Discount<?php echo $offers->discount ?>%</p>
      <p> Till: <?php echo $offers->end_date ?></p>
      <p> <strong>Like Facebook Share Twitter</strong></p>


<div class="row">
    <div class="col-sm-12 col-md-12">
            <div class="panel panel-default">
                <div class="panel-body">                
                    <form accept-charset="UTF-8" action="" method="POST">
                        <textarea class="form-control counted" name="message" placeholder="Type in your message" rows="2" style="margin-bottom:10px;"></textarea>
                        <h6 class="pull-right" id="counter">320 characters remaining</h6>
                        <button class="btn btn-info" type="submit">Post New Message</button>
                    </form>
                </div>
            </div>
        </div>
  </div>
      <div class="row">
    <div class="col-sm-12 col-md-12">
        <div class="panel panel-default widget">
            <div class="panel-heading">
                <span class="glyphicon glyphicon-comment"></span>
                <h3 class="panel-title">
                    Recent Comments</h3>
                <span class="label label-info">
                    78</span>
            </div>
            <div class="panel-body">
                <ul class="list-group">
          
                    <li class="list-group-item">
                        <div class="row">
                            <div class="col-xs-2 col-md-1">
                                <img src="http://placehold.it/80" class="img-circle img-responsive" alt="" /></div>
                            <div class="col-xs-10 col-md-11">
                                <div>
                                    <a href="http://bootsnipp.com/BhaumikPatel/snippets/Obgj">Admin Panel Quick Shortcuts</a>
                                    <div class="mic-info">
                                        By: <a href="#">Bhaumik Patel</a> on 11 Nov 2013
                                    </div>
                                </div>
                                <div class="comment-text">
                                    Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh
                                    euismod tincidunt ut laoreet dolore magna aliquam erat volutpat. Ut wisi enim
                                </div>
                               <!--  <div class="action">
                                    <button type="button" class="btn btn-primary btn-xs" title="Edit">
                                        <span class="glyphicon glyphicon-pencil"></span>
                                    </button>
                                    <button type="button" class="btn btn-success btn-xs" title="Approved">
                                        <span class="glyphicon glyphicon-ok"></span>
                                    </button>
                                    <button type="button" class="btn btn-danger btn-xs" title="Delete">
                                        <span class="glyphicon glyphicon-trash"></span>
                                    </button>
                                </div> -->
                            </div>
                        </div>
                    </li>
                    <li class="list-group-item">
                        <div class="row">
                            <div class="col-xs-2 col-md-1">
                                <img src="http://placehold.it/80" class="img-circle img-responsive" alt="" /></div>
                            <div class="col-xs-10 col-md-11">
                                <div>
                                    <a href="http://bootsnipp.com/BhaumikPatel/snippets/4ldn">Cool Sign Up</a>
                                    <div class="mic-info">
                                        By: <a href="#">Bhaumik Patel</a> on 11 Nov 2013
                                    </div>
                                </div>
                                <div class="comment-text">
                                    Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh
                                    euismod tincidunt ut laoreet dolore magna aliquam erat volutpat. Ut wisi enim
                                </div>
                                <div class="action">
                                    <button type="button" class="btn btn-primary btn-xs" title="Edit">
                                        <span class="glyphicon glyphicon-pencil"></span>
                                    </button>
                                    <button type="button" class="btn btn-success btn-xs" title="Approved">
                                        <span class="glyphicon glyphicon-ok"></span>
                                    </button>
                                    <button type="button" class="btn btn-danger btn-xs" title="Delete">
                                        <span class="glyphicon glyphicon-trash"></span>
                                    </button>
                                </div>
                            </div>
                        </div>
                    </li>
                </ul>
                <a href="#" class="btn btn-primary btn-sm btn-block" role="button"><span class="glyphicon glyphicon-refresh"></span> More</a>
            </div>
        </div>
    </div>
</div>


      
      </div>
   </div>
  </div>

 </div>