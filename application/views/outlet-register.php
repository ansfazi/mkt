<style type="text/css">
<?php /* ?>body{
  background:#fbfbfb;
  }

  .z-register-container{
  width:700px;
  margin:50px auto;
  border:1px solid #CCC;
  background:#FFF;
  }

  .z-top-inner-container{
  padding:10px 20px;
  }

  .z-seperator{
  background:#19c5f9;
  height:1px;
  border:none;
  margin:0;
  padding:0;
  }

  .z-top-titles{
  padding:0;
  margin:0;
  }

  .z-top-titles li{
  display:inline-block;
  list-style:none;
  width:32.5%;
  font-size:14px;
  padding-left:0;
  }

  .z-top-titles li a{
  color:#babcc9;
  outline:none;
  }

  .z-top-titles li a:hover{
  color:#19c5f9;
  }

  .z-top-bullet{
  width:20px;
  height:20px;
  color:#babcc9;
  margin-top:2px;
  border-radius:50%;
  text-align:center;
  vertical-align:top;
  padding-bottom:10px;
  display:inline-block;
  border:1px solid #babcc9;
  }

  .z-active .z-top-bullet, .z-top-titles li a:hover .z-top-bullet{
  color:#FFF;
  background:#19c5f9;
  border:1px solid #19c5f9;
  }

  .z-active .z-title-container{
  color:#19c5f9;
  }

  .z-bottom-inner-container{
  padding:25px;
  }

  .z-title-container{
  display:inline-block;
  }

  .z-title-lite{

  }

  .z-title-bold{
  font-weight:bold;
  }


  .z-head-info div{
  margin-bottom:10px;
  }


  .xg-left-container{
  width:50%;
  display:inline-block;
  }

  .xg-left-container input{
  width:242px;
  }

  .xg-left-container input, .xg-inline-items{
  margin-bottom:10px;
  }

  .xg-inline-items{
  width:100%;
  }
  <?php */ ?>
    /***** Boot strap wizard ******/
    @import url(http://fonts.googleapis.com/css?family=Roboto+Condensed:400,700);
    /* written by riliwan balogun http://www.facebook.com/riliwan.rabo*/
    .board{
        width: 75%;
        margin: 60px auto;
        height: 585px;
        background: #fff;
        /*box-shadow: 10px 10px #ccc,-10px 20px #ddd;*/
    }
    .board .nav-tabs {
        position: relative;
        /* border-bottom: 0; */
        /* width: 80%; */
        margin: 40px auto;
        margin-bottom: 0;
        box-sizing: border-box;

    }

    .board > div.board-inner{
        background: #fafafa url(http://subtlepatterns.com/patterns/geometry2.png);
        background-size: 30%;
    }

    p.narrow{
        width: 60%;
        margin: 10px auto;
    }

    .liner{
        height: 2px;
        background: #ddd;
        position: absolute;
        width: 80%;
        margin: 0 auto;
        left: 0;
        right: 0;
        top: 50%;
        z-index: 1;
    }

    .nav-tabs > li.active > a, .nav-tabs > li.active > a:hover, .nav-tabs > li.active > a:focus {
        color: #555555;
        cursor: default;
        /* background-color: #ffffff; */
        border: 0;
        border-bottom-color: transparent;
    }

    span.round-tabs{
        width: 70px;
        height: 70px;
        line-height: 70px;
        display: inline-block;
        border-radius: 100px;
        background: white;
        z-index: 2;
        position: absolute;
        left: 0;
        text-align: center;
        font-size: 25px;
    }

    span.round-tabs.one{
        color: rgb(34, 194, 34);border: 2px solid rgb(34, 194, 34);
    }

    li.active span.round-tabs.one{
        background: #fff !important;
        border: 2px solid #ddd;
        color: rgb(34, 194, 34);
    }

    span.round-tabs.two{
        color: #febe29;border: 2px solid #febe29;
    }

    li.active span.round-tabs.two{
        background: #fff !important;
        border: 2px solid #ddd;
        color: #febe29;
    }

    span.round-tabs.three{
        color: #3e5e9a;border: 2px solid #3e5e9a;
    }

    li.active span.round-tabs.three{
        background: #fff !important;
        border: 2px solid #ddd;
        color: #3e5e9a;
    }

    span.round-tabs.four{
        color: #f1685e;border: 2px solid #f1685e;
    }

    li.active span.round-tabs.four{
        background: #fff !important;
        border: 2px solid #ddd;
        color: #f1685e;
    }

    span.round-tabs.five{
        color: #999;border: 2px solid #999;
    }

    li.active span.round-tabs.five{
        background: #fff !important;
        border: 2px solid #ddd;
        color: #999;
    }

    .nav-tabs > li.active > a span.round-tabs{
        background: #fafafa;
    }
    .nav-tabs > li {
        width: 33.3%;
    }
    /*li.active:before {
        content: " ";
        position: absolute;
        left: 45%;
        opacity:0;
        margin: 0 auto;
        bottom: -2px;
        border: 10px solid transparent;
        border-bottom-color: #fff;
        z-index: 1;
        transition:0.2s ease-in-out;
    }*/
    li:after {
        content: " ";
        position: absolute;
        left: 45%;
        opacity:0;
        margin: 0 auto;
        bottom: 0px;
        border: 5px solid transparent;
        border-bottom-color: #ddd;
        transition:0.1s ease-in-out;

    }
    li.active:after {
        content: " ";
        position: absolute;
        left: 45%;
        opacity:1;
        margin: 0 auto;
        bottom: 0px;
        border: 10px solid transparent;
        border-bottom-color: #ddd;

    }
    .nav-tabs > li a{
        width: 70px;
        height: 70px;
        margin: 20px auto;
        border-radius: 100%;
        padding: 0;
    }

    .nav-tabs > li a:hover{
        background: transparent;
    }

    .tab-content{
    }
    .tab-pane{
        position: relative;
        padding-top: 50px;
    }
    .tab-content .head{
        font-family: 'Roboto Condensed', sans-serif;
        font-size: 25px;
        text-transform: uppercase;
        padding-bottom: 10px;
    }
    .btn-outline-rounded{
        padding: 10px 40px;
        margin: 20px 0;
        border: 2px solid transparent;
        border-radius: 25px;
    }

    .btn.green{
        background-color:#5cb85c;
        /*border: 2px solid #5cb85c;*/
        color: #ffffff;
    }


    @media( max-width : 585px ){

        .board {
            width: 90%;
            height:auto !important;
        }
        span.round-tabs {
            font-size:16px;
            width: 50px;
            height: 50px;
            line-height: 50px;
        }
        .tab-content .head{
            font-size:20px;
        }
        .nav-tabs > li a {
            width: 50px;
            height: 50px;
            line-height:50px;
        }

        li.active:after {
            content: " ";
            position: absolute;
            left: 35%;
        }

        .btn-outline-rounded {
            padding:12px 20px;
        }
    }


    .tab-inner-container{
        padding:20px;
        width:100%;
    }

    #mapCanvas img {
        max-width: none !important;
    }

</style>

<script type="text/javascript">
    /*
     function Validate1()
     {
     alert("next call");
     $('.nav-tabs > .active').next('li').find('a').trigger('click');

     $('#outlet-information-form').bootstrapValidator({
     feedbackIcons: {
     },
     fields: {
     address: {
     validMessage: '',
     validators: {
     notEmpty: {
     message: 'This field is required'
     }
     }
     },
     phone: {
     validMessage: '',
     validators: {
     notEmpty: {
     message: 'This field is required'
     }
     }
     }
     }
     });

     }


     function Validate2()
     {

     $('.nav-tabs > .active').next('li').find('a').trigger('click');
     $('#outlet-information-form').bootstrapValidator({
     feedbackIcons: {
     },
     fields: {
     first_name: {
     validMessage: '',
     validators: {
     notEmpty: {
     message: 'This field is required'
     }
     }
     },
     last_name: {
     validMessage: '',
     validators: {
     notEmpty: {
     message: 'This field is required'
     }
     }
     }
     }
     });

     }*/
</script>
<script type="text/javascript" src="http://maps.google.com/maps/api/js?sensor=false"></script>
<script type="text/javascript">
    /*var geocoder = new google.maps.Geocoder();

     function geocodePosition(pos) {
     geocoder.geocode({
     latLng: pos
     }, function(responses) {
     if (responses && responses.length > 0) {
     updateMarkerAddress(responses[0].formatted_address);
     } else {
     updateMarkerAddress('Cannot determine address at this location.');
     }
     });
     }

     function updateMarkerStatus(str) {
     document.getElementById('markerStatus').innerHTML = str;
     }

     function updateMarkerPosition(latLng) {
     document.getElementById('info').innerHTML = [
     latLng.lat(),
     latLng.lng()
     ].join(', ');
     }

     function updateMarkerAddress(str) {
     document.getElementById('address').innerHTML = str;
     }
     */



    function getOutletAddress() {

        var OutletAddress = $('#outlet_address').val();

        if (OutletAddress == "")
        {
            OutletAddress = "Lahore, Pakistan";
        }

        return OutletAddress;
    }

    function getInitialLatLong() {

        var geo = new google.maps.Geocoder();
        var address = getOutletAddress();
        var latitude = "";
        var longitude = "";

        geo.geocode({
            'address': address
        }, function (responses) {

            //alert(JSON.stringify(responses[0]));
            latitude = responses[0].geometry.location.lat();
            longitude = responses[0].geometry.location.lng();
            initialize(latitude, longitude);
        });

    }


    function initialize(lat, long) {

        var latLng = new google.maps.LatLng(lat, long);
        var map = new google.maps.Map(document.getElementById('mapCanvas'), {
            zoom: 8,
            center: latLng,
            mapTypeId: google.maps.MapTypeId.ROADMAP
        });
        var marker = new google.maps.Marker({
            position: latLng,
            title: 'Point A',
            map: map,
            draggable: true
        });

        /*  // Update current position info.
         updateMarkerPosition(latLng);
         geocodePosition(latLng);

         // Add dragging event listeners.
         google.maps.event.addListener(marker, 'dragstart', function() {
         updateMarkerAddress('Dragging...');
         });

         google.maps.event.addListener(marker, 'drag', function() {
         updateMarkerStatus('Dragging...');
         updateMarkerPosition(marker.getPosition());
         });*/

        google.maps.event.addListener(marker, 'dragend', function () {
            //updateMarkerStatus('Drag ended');
            var newLatLng = marker.getPosition();
            newLatLng = JSON.parse(JSON.stringify(newLatLng));

            $("#lat").val(newLatLng.k);
            $("#lng").val(newLatLng.B);

            //geocodePosition(marker.getPosition());
        });
    }

// Onload handler to fire off the app.
//google.maps.event.addDomListener(window, 'load', getInitialLatLong);
</script>




<section style="background:#efefe9;">
    <div class="container">
        <div class="row">
            <div class="board">
                <!-- <h2>Welcome to IGHALO!<sup>™</sup></h2>-->
                <div class="board-inner">
                    <ul class="nav nav-tabs" id="myTab">
                        <div class="liner"></div>
                        <li class="active">
                            <a href="#outlet-information" data-toggle="tab" title="Outlet Information">
                                <span class="round-tabs one">
                                    <i class="glyphicon glyphicon-home"></i>
                                </span>
                            </a></li>

                        <li><a href="#outlet-admin-information" data-toggle="tab" title="Outlet Admin Information">
                                <span class="round-tabs two">
                                    <i class="glyphicon glyphicon-user"></i>
                                </span>
                            </a>
                        </li>
                        <li><a href="#location" data-toggle="tab" title="Location" onClick="getInitialLatLong()">
                                <span class="round-tabs three">
                                    <i class="glyphicon glyphicon-gift"></i>
                                </span> </a>
                        </li>

                        <?php /* ?>  <li><a href="#settings" data-toggle="tab" title="blah blah">
                          <span class="round-tabs four">
                          <i class="glyphicon glyphicon-comment"></i>
                          </span>
                          </a></li>

                          <li><a href="#doner" data-toggle="tab" title="completed">
                          <span class="round-tabs five">
                          <i class="glyphicon glyphicon-ok"></i>
                          </span> </a>
                          </li><?php */ ?>

                    </ul></div>

                <form method="post" action="<?php echo base_url("register/create_outlet"); ?>" role="form" class="form-horizontal" id="outlet-information-form">

                    <div class="tab-content">

                        <div id="outlet-information" class="tab-pane fade in active tab-inner-container">

                            <div class="form-group">
                                <label for="address" class="col-md-3">Address</label>
                                <div class="col-md-6">
                                    <input type="text" name="address" id="outlet_address" class="form-control" placeholder="Outlet Address"
                                           data-bv-notempty="true"
                                           data-bv-notempty-message="Pleas provide outlet address" />
                                </div>
                            </div>

                            <div class="form-group">
                                <label for="phone" class="col-md-3">Phone</label>
                                <div class="col-md-6">
                                    <input type="text" name="phone" class="form-control" placeholder="Phone"
                                           data-bv-notempty="true"
                                           data-bv-notempty-message="Pleas provide phone number"  />
                                </div>
                            </div>

                            <div class="form-group">
                                <label for="phone" class="col-md-3">Mall</label>
                                <div class="col-md-6">
                                    <input type="text" name="mall" class="form-control" placeholder="Mall"  />
                                </div>
                            </div>

                            <div class="form-group">
                                <label for="website" class="col-md-3">Website URL</label>
                                <div class="col-md-6">
                                    <input type="text" name="website" class="form-control" placeholder="Website URL" />
                                </div>
                            </div>

                            <div class="form-group">
                                <label for="fb_page" class="col-md-3">Facebook Page</label>
                                <div class="col-md-6">
                                    <input type="text" name="fb_page" class="form-control" placeholder="Facebook Page URL" />
                                </div>
                            </div>

                            <div class="form-group">
                                <div class="col-md-12">

                                    <ul class="pager">
                                        <li class="next"><a href="javascript:void(0);" class="btnNext" onClick="Validate1()">Next</a></li>
                                    </ul>

                                </div>
                            </div>

                        </div>


                        <div id="outlet-admin-information" class="tab-pane fade tab-inner-container">

                            <div class="form-group">
                                <label for="full_name" class="col-md-2">First Name</label>
                                <div class="col-md-4">
                                    <input type="text" name="first_name" class="form-control" placeholder="First Name"
                                           data-bv-notempty="true"
                                           data-bv-notempty-message="The First name is required and cannot be empty" />
                                </div>

                                <label for="last_name" class="col-md-2">Last Name</label>
                                <div class="col-md-4">
                                    <input type="text" name="last_name" class="form-control" placeholder="Last Name"
                                           data-bv-notempty="true"
                                           data-bv-notempty-message="The Last name is required and cannot be empty" />
                                </div>
                            </div>


                            <div class="form-group">
                                <div class="col-md-12">

                                    <div class="text-center">
                                        <a href="javascript:void(0)" class="btn btn-primary">Connect to Facebook</a>
                                    </div>
                                    <ul class="pager">
                                        <li class="previous"><a href="javascript:void(0);" class="btnPrevious">Previous</a></li>
                                        <li class="next"><a href="javascript:void(0);" class="btnNext" onClick="getInitialLatLong();">Next</a></li>
                                    </ul>

                                </div>
                            </div>


                        </div>

                        <div id="location" class="tab-pane fade tab-inner-container">
                            <input type="hidden" name="lat" id="lat"/>
                            <input type="hidden" name="long" id="lng" />
                            <div id="mapCanvas" style="width:100%;height:350px;"></div>

                            <div class="form-group">
                                <div class="col-md-12">

                                    <ul class="pager">
                                        <li class="previous"><a href="javascript:void(0);" class="btnPrevious">Previous</a></li>
                                        <li class="next"><input type="submit" class="btn btn-primary pull-right" name="save" value="Save"/></li>
                                    </ul>

                                </div>
                            </div>
                        </div>

                        <div class="clearfix"></div>
                    </div>
                </form>

            </div>
        </div>
    </div>
</section>


<?php echo css('bootstrapValidator.min.css') ?>
<?php echo js('bootstrapValidator.min.js') ?>
<script type="text/javascript">


    $(function () {
        $('a[title]').tooltip();

        $('.btnNext').click(function () {
            $('.nav-tabs > .active').next('li').find('a').trigger('click');
        });

        $('.btnPrevious').click(function () {
            $('.nav-tabs > .active').prev('li').find('a').trigger('click');
        });
    });


    $(document).ready(function () {

        $('#outlet-information-form').bootstrapValidator();

    });
</script>