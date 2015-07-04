<div class="container">

    <div class="page-header">
        <h1><?php echo $product->title ?></h1>

    </div>

    <div class="row">
        <div class="col-md-4"  style="border:1px solid #ccc;">
            <p><img src="<?php echo product_img_url($product, 'large'); ?>" style="max-height:500px; width:100%"></p>
        </div>
        <div class="col-md-5">
            <!--<div id="stars-existing" class="starrr" data-rating='4'></div>-->
            <h3> by - <?php l($product->outlet_name, outlet_url($product->outlet_slug)) ?>  Pace 2 Lahore</h3>
            <h3><?php echo $product->vender ?></h3>
            <p><?php echo $product->description ?></p>
            <?php if ($product->fixed_price) { ?>
                <h2><?php echo $product->price . ' PKR' ?></h2>
            <?php } else {
                ?>
                <strong> <strike><?php echo $product->price . ' PKR ' ?></strike></strong><span>save <?php echo $product->discount . '%'; ?></span>
                <h2><?php echo $product->discounted_price . ' PKR' ?></h2>
            <?php }
            ?>
            <div class="fb-like" data-href="<?php echo product_url($product); ?>" data-layout="standard" data-action="like" data-show-faces="false" data-share="true"></div>
        </div>
        <div class="col-md-3">
            <?php foreach ($product->tags as $key => $t) {
                ?>
                <a href="<?php echo tag_url($t) ?>" class="btn btn-info navbar-btn"><?php echo '#' . $t->tag; ?></a>
            <?php }
            ?>
            <iframe src="https://www.google.com/maps/embed?pb=!1m16!1m12!1m3!1d27212.597353388!2d74.35105740268554!3d31.508372891758526!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!2m1!1sPace%2C+Gulberg+III%2C+Lahore%2C+Punjab%2C+Pakistan!5e0!3m2!1sen!2s!4v1388302399848" width="280" height="280" frameborder="0" style="border:0"></iframe>
            <div class="fb-facepile" data-href="https://www.facebook.com/marketify.pk" data-max-rows="1" data-colorscheme="light" data-size="medium" data-show-count="false"></div>
        </div>
    </div>
    <ul class="pager">
        <li class="previous"><a href="#">&larr; Older</a></li>
        <li class="next"><a href="#">Newer &rarr;</a></li>
    </ul>
    <div class="row">
        <div class="col-sm-12 col-md-12">
            <div class="heading-holder">
                <div class="frame">
                    <hr>
                    <h2 class="text-center">
                        Write a Review<span> (1)</span>
                    </h2>
                    <hr>
                </div>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-sm-12 col-md-12">
            <p  class=" text-center"><button type="button" class=" text-center btn btn-primary">Write a Review</button></p>
            <a href="#review" role="panel" data-toggle="panel">Profile</a>
        </div>
    </div>
    <div class="row" >
        <div class="col-sm-12 col-md-12">
            <div class="panel panel-default" id="review">
                <div class="panel-body">
                    <form accept-charset="UTF-8" ng-submit="addComment()" action="" method="POST">
                        <textarea class="form-control counted" ng-model="comment.text" name="message" placeholder="Type in your message" rows="2" style="margin-bottom:10px;"></textarea>
                        <h6 class="pull-right" id="counter">320 characters remaining</h6>
                        <button class="btn btn-info" type="button">Submit Review</button>
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
<?php pre($product) ?>
<div id="fb-root"></div>
<script>(function (d, s, id) {
        var js, fjs = d.getElementsByTagName(s)[0];
        if (d.getElementById(id))
            return;
        js = d.createElement(s);
        js.id = id;
        js.src = "//connect.facebook.net/en_US/sdk.js#xfbml=1&appId=489110881204073&version=v2.0";
        fjs.parentNode.insertBefore(js, fjs);
    }(document, 'script', 'facebook-jssdk'));</script>