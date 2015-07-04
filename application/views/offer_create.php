<link href="<?php echo base_url();?>assets/uploader/css/style.css" media="screen" rel="stylesheet" type="text/css" />
<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.8.2/jquery.min.js" type="text/javascript"></script>
<script src="http://ajax.googleapis.com/ajax/libs/jqueryui/1.8.23/jquery-ui.min.js" type="text/javascript" ></script>

<div class="container">
	<div class="row">
		<div class="col-md-12">
			<div class="panel panel-default">
			  <!-- Default panel contents -->
			  <div class="panel-heading">Create Offer, Promotion</div>
				  <div class="panel-body">
                  <div class="alert alert-danger error_data" style="display:none"></div>
				    <div class="col-md-8"> 
				    <?php
					echo '<form action="#" class = "form-horizontal">';
					//echo form_open('#', array('));
					
					$title				= (form_error('title')) ? "has-error" : ""; 
					$full_price			= (form_error('full_price')) ? "has-error" : ""; 
					$disconted_price	= (form_error('disconted_price')) ? "has-error" : ""; 
					$discount			= (form_error('discount')) ? "has-error" : ""; 
					$description			= (form_error('description')) ? "has-error" : ""; 
					$start_date			= (form_error('start_date')) ? "has-error" : ""; 
					$end_date			= (form_error('end_date')) ? "has-error" : ""; 
					//$category_id			= (form_error('category_id')) ? "has-error" : ""; 

					$data['title'] = array(
		              'name'        => 'title',
		              'id'          => 'title',
		              'placeholder'       => '50% off, clearing sale',
		              'maxlength'   => '100',
		              'class'   => 'form-control required',
		              'value'   => set_value('title')
		           /*   'required' => ''*/
		            );
		            $data['offer_type'] = array(
		              'name'        => 'offer_type',
		              'id'          => 'offer_type',
		              'placeholder'       => 'Clearace, Winter Sale',
		              'maxlength'   => '100',
		              'class'   => 'form-control required',
		              'value'   => set_value('offer_type')
		           /*   'required' => ''*/
		            );
		            $data['full_price'] = array(
		              'name'        => 'full_price',
		              'value'        => set_value('full_price'),
		              'id'          => 'full_price',
		              'placeholder'       => 'full price',
		              'maxlength'   => '100',
		              'class'   => 'form-control',
		           /*   'required' => ''*/
		            );
		            $data['description'] = array(
		              'name'        => 'description',
		              'value'        => set_value('description'),
		              'id'          => 'description',
		              'placeholder'       => 'Discription',
		              'maxlength'   => '100',
		              'class'   => 'form-control',
		              'rows'   => '3',
		              'value'   => set_value('description')
		            );
		            $data['disconted_price'] = array(
		              'name'        => 'disconted_price',
		              'value'        => set_value('disconted_price'),
		              'id'          => 'disconted_price',
		              'placeholder'       => 'Discounted Price',
		              'maxlength'   => '100',
		              'class'   => 'form-control ',
		            );
		            $data['discount'] = array(
		              'name'        => 'discount',
		              'value'        => set_value('discount'),
		              'id'          => 'discont_percentage',
		              'placeholder'       => 'Discount %',
		              'maxlength'   => '100',
		              'class'   => 'form-control',
		            );
		            $data['start_date'] = array(
		              'name'        => 'start_date',
		              'value'        => set_value('start_date'),
		              'id'          => 'start_date',
		              'placeholder'       => 'start date',
		              'maxlength'   => '100',
		              'class'   => 'form-control datepicker',
		             /* 'required' => ''*/
		            );
		            $data['end_date'] = array(
		              'name'        => 'end_date',
		              'value'        => set_value('end_date'),
		              'id'          => 'end_date',
		              'placeholder'       => 'End date',
		              'maxlength'   => '100',
		              'class'   => 'form-control datepicker',
		             /* 'required' => ''*/
		            );
			        $data['brand']  = array(
	                  '0'  => 'Select Brand',
	                  '1'  => 'Stylo',
	                  '2'    => 'Dinners',
	                  '3'   => 'Denizen',
	                  '4' => 'Levis',
	                );

		             $js = 'onChange="calculate_percentage()"';
					 ?>
					<div class="form-group" id="error_category">
				    	 <label for="inputEmail3" class="col-sm-3 control-label">Category</label>
					    <div class="col-sm-8">
				    	<?php 
				    		echo '<select class="form-control" name="category_id">';
				    	foreach ($categories as $key => $category) {
				    		echo "<option value='0'>  Select Category</option>";
				    		echo '<optgroup label="'.$category->category.'">';
				    		foreach ($category->childs as $key => $child) {
				    			# code...
					    		echo "<option value='$child->id'>  $child->category</option>";
				    		}
				    	}
				    	echo '</select>';
				    	?>
				    	</div>
					 </div>
					 <div class="form-group" id="error_brand">
					    <label for="inputEmail3" class="col-sm-3 control-label">Brand</label>
					    <div class="col-sm-8">
					     <?php echo form_dropdown('brand', $data['brand'], null, 'class="form-control"');  ?>
					    </div>
					 </div>
					 <div class="form-group" id="error_offer_type">
					    <label for="inputEmail3" class="col-sm-3 control-label">Offer Type</label>
					    <div class="col-sm-8">
					     <?php  echo form_input($data['offer_type']);  ?>
					    </div>
					 </div>
					 <div class="form-group" id="error_title">
					    <label for="inputEmail3" class="col-sm-3 control-label">Title</label>
					    <div class="col-sm-8">
					     <?php  echo form_input($data['title'], null, "ng-model='title'");  ?>
					    </div>
					 </div>
					 <div class="form-group" id="error_full_price">
					    <label for="inputEmail3" class="col-sm-3 control-label">Full Price</label>
					    <div class="col-sm-8">
					     <?php  echo form_input($data['full_price'], null, $js." ng-model='full_price'");  ?>
					    </div>
					 </div>
					 <div class="form-group" id="error_disconted_price">
					    <label for="inputEmail3" class="col-sm-3 control-label">Disconted Price</label>
					    <div class="col-sm-8">
					     <?php  echo form_input($data['disconted_price'], null, $js." ng-model='disconted_price'");  ?>
					    </div>
					 </div>
					 <div class="form-group" id="error_discount">
					    <label for="inputEmail3" class="col-sm-3 control-label">Discount</label>
					    <div class="col-sm-8">
					     <?php  echo form_input($data['discount'], null, $js." ng-model='discount'");  ?>
					    </div>
					 </div>
					  <div class="form-group" id="error_description">
					    <label for="inputEmail3" class="col-sm-3 control-label">Description</label>
					    <div class="col-sm-8">
					     <?php  echo form_textarea($data['description'], null, "ng-model='description'");  ?>
					    </div>
					 </div>

					  <div class="form-group" id="error_start_date">
					    <label for="inputEmail3" class="col-sm-3 control-label">Start Date</label>
					  <div class="col-sm-9">
					  	<div class="input-group">
						 <?php  echo form_input($data['start_date'], null, "ng-model='start_date'");  ?>
						  <span class="glyphicon input-group-addon glyphicon-calendar"></span>
						</div>
					  </div>
					    <!-- <div class="col-sm-8">
					     
					    </div> -->
					 </div>
					  <div class="form-group" id="error_end_date">
					    <label for="inputEmail3" class="col-sm-3 control-label">End Date</label>
					  <div class="col-sm-9">
					  	<div class="input-group">
						 <?php  echo form_input($data['end_date'], null, "ng-model='end_date'");  ?>
						  <span class="glyphicon input-group-addon glyphicon-calendar"></span>
						</div>
					  </div>
					 </div>
                     <div class="form-group">
					    <label for="inputEmail3" class="col-sm-3 control-label">Upload Image(s)</label>
					  <div class="col-sm-9">
					  	<div class="input-group">
							 <div class="form-group col-sm-4">
                                <div id="plupload_uploader">
                                    <div id="img_upload" >
                                      <div id="moreUploads">
                                        
                                          <input id="offer_uploader" name="offer_uploader_pic" type="hidden" />
                                        <span id="uploadify_limit_help" class="uploadify_help">
                                          You can upload up to 5 pictures. Take advantage and upload quality pictures.
                                        </span>
                                         <span class="uploadify_required alert-danger" style="display:none">
                                        </span>
                                        <span id="uploadify_limit_reached" class="uploadify_help" onclick="$(this).hide(); $('#uploadify_limit_help').fadeIn(500);">
                                          <img alt="Error-msg-arrow" src="<?php echo base_url();?>/assets/uploader/images/error-msg-arrow.png" />
                                          Sorry, you have reached the maximum number of pictures allowed.
                                        </span>
                                        <div id="container" >
                                         <div class="col-sm-3" style="padding:0px">
                                            <a id="pickfiles" class="btn btn-primary" href="javascript:" style="display:block;">SELECT FILES</a>
                                         </div>
                                          <p id="pickfiles" href="javascript:" onclick="$('#uploadify_limit_help').hide(); $('#uploadify_limit_reached').fadeIn(500);" style="display:none;" class="btn btn-primary">SELECT FILES</p>
                                        </div>
                                      </div>
                                    </div>
                                </div>
                             </div>
                         </div>
					  </div>    
                      <div class="form-group ">
			          <div class="col-sm-offset-2 col-sm-10">
			            <div id="plupload_uploader">
                                <div id="filelist"></div>
                       </div>
			          </div>
			        </div>
                     <div class="form-group">
                          <div class="col-sm-9 col-sm-offset-2">
                            <p class="hint">Pictures should be in "jpeg, jpg, pjpeg, png, gif, bmp" format only.<br />
                            You can select and upload multiple pictures at the same time.</p>
                            </div>
                     </div>
                    
                    
					<div class="form-group ">
			          <div class="col-sm-offset-2 col-sm-10">
                      	<div id="loadind_image"></div>
			            <?php echo form_submit(  array('class' => 'btn btn-primary submit_offer', 'name' => 'create_offer'), 'Create Offer'); ?>
			          </div>
			        </div>
					<?php 	echo form_close(); 	?>
					</div>

					</div>
					<div class="col-md-4">
						<div class="row"> 
							<h2>{{ title }}</h2>
							<p><span class="striked"> {{ full_price }} </span><span>{{ disconted_price }}</span></p>
							<p>{{ description }}</p>
							<p>{{ start_date }}</p>
							<p>{{ end_date }}</p>
						</div>
				  </div> <!-- panel-body -->
			</div>
			
		</div>
	</div>
</div>
<script src="<?php echo base_url();?>assets/uploader/js/uploader.js" type="text/javascript"></script>
<script type="text/javascript">
		function calculate_percentage(){
			if( $("#full_price").val() != '' ){
				if( $("#disconted_price").val() != '' ){
					var dis =  $("#disconted_price").val() / $("#full_price").val()  * 100; 
					$("#discont_percentage").val( Math.round(dis, 2) );
					console.log( dis );
				}	
				/*
				if( $("#discont_percentage").val() != ''){
					var discounted_price = $("#discont_percentage").val() *  $("#full_price").val() / 100;
					$("#disconted_price").val(discounted_price);

				}*/

			}
			/*if( $("#full_price").val()	
			$("#disconted_price").val()	
				*/
		}
        // Custom example logic
        var uploader = null;
        var maxFileSize = 5;
        var busy=false;
        var number_regex = /^(\d+)$/;
        var formSubmitRequest = false;
      	var upload_id='#offer_uploader';

    $(function() {
      uploader = new plupload.Uploader({
        runtimes : 'gears,html5,flash,silverlight,browserplus',
        browse_button : 'pickfiles',
        container : 'container',
        max_file_size : '7mb',
        url : '<?php echo base_url();?>offers/upload_images',
        flash_swf_url : '', 
        silverlight_xap_url : '',
        filters : [
          {title : "Image files", extensions : "jpeg,jpg,pjpeg,png,gif,bmp"}
        ],
        resize : {width : 800, height : 600, quality : 90},
        return_file_data: true,
        init : {
          FilesAdded: function(up, files, response) {
            var file_count = files.length;
            var upload_file_size = file_count + $('div.filelist_container input').length;
            plupload.each(files, function(file) {
              if (upload_file_size > maxFileSize ) {
                file_count--;
                if((upload_file_size - file_count) > maxFileSize ) {
                  up.removeFile(file);
                  $('#uploadify_limit_help').hide();
                  $('#uploadify_limit_reached').fadeIn(500);
				  $(".uploadify_required").hide();
                } else {
                  busy=true;
                  $('#filelist').append(generate_filelist_container_field(file));
                }
              }
              else{
                busy=true;
                $('#filelist').append(generate_filelist_container_field(file));
              }
            });
            if (upload_file_size >= maxFileSize) {
              $('a#pickfiles').hide();
              $('p#pickfiles').show();
            }
            up.refresh();
            up.start();
          },
          FilesRemoved: function(up, files) {
            $('#'+files[0].id).remove();
			$('#'+files[0].id).remove();
			//var image_field_id	= 'img_array_'+files[0].id;
			//jQuery('#'+image_field_id).remove();
            var upload_file_size = $('div.filelist_container input').length;
            if (upload_file_size < maxFileSize) {
              $('p#pickfiles').hide();
              $('a#pickfiles').show();
              $('#uploadify_limit_reached').hide();
              $('#uploadify_limit_help').fadeIn(500);
            }
            up.refresh();
          },

          FileUploaded: function(up, file, response) {
			 
            var my_file = $.parseJSON(response.response);
			 
            if( my_file.img_src_name ) {
				// alert(my_file.img_src_name);
              $('#' + file.id + " span").html("Completed");
              $('#' + file.id + " input").val(my_file.img_src_name);
              var imageUrl = "<?php echo base_url();?>/images/offers/"+my_file.img_src_name;
              $('#' + file.id + ' #img_' + file.id).attr('src', imageUrl);
			  $('#filelist').append("<input id='"+file.id+"' type='hidden' name='attachment[]' value="+my_file.img_src_name+">");
            }
          },

          UploadComplete: function(up, files) {
            busy=false;
            if( formSubmitRequest ){
              $('#submitAnad').submit();
            }
          }
        }
      });
      uploader.bind('Init', function(up, params) {
        $('#simple_uploader').remove();
        $('#plupload_uploader').show();
      });

      uploader.init();
    });
    $(document).ready(function() {
      uploaded_pictures_array = [];
      scraped_pictures =  [];
      if(uploader && uploader!=null && uploader.runtime != ''){
        $('#simple_uploader').hide();
        $('#plupload_uploader').show();
      }
      else{
        $('#plupload_uploader').hide();
        $('#simple_uploader').show();
      }
      
      $("#submit_form").click(function() {
        if( busy ) {
          formSubmitRequest = true;
          alert('Waiting for images to be uploaded');
          return false;
        }
      });

      $("#submitAnad").submit(function() {
        $(upload_id).val('');
        var cnt = uploaded_pictures_array.length;
        $('div.filelist_container input').map(function() {
          uploaded_pictures_array[cnt] = $(this).val();
          cnt++;
        });
        $(upload_id).val(uploaded_pictures_array.join("|"));
      });

      $( "#filelist" ).disableSelection();
      $( "#filelist" ).sortable({
        placeholder: "filelist-sortable-container",
        axis: true,
        opacity: 0.7
      });

    });

    function generate_filelist_container_field(file) {
      return '<div class="filelist_container" id="' + file.id + '"><div class="image_container"><img id="img_'+ file.id +'" src="<?php echo base_url();?>/assets/uploader/images/loading19@2x.gif" style="max-width: 80px; max-height: 60px;" /></div><input type="hidden" />' +
        '<a href="javascript:" onclick="uploader.removeFile('+file.id+');"><img src="<?php echo base_url();?>/assets/uploader/images/cancel_uploadify.png" border="0"></a>' +
        '<div class="cb"></div><span></span><img class="draggable-icon" src="<?php echo base_url();?>/assets/uploader/images/drag_arrow.png" /></div>';
    }
<!--Update Data-->
$(".submit_offer").click(function () {
    var str = $( "form" ).serialize();
					$.ajax({
						url:'<?php echo base_url(); ?>offers/save_offer',
						type:'POST',
						data: str,
						dataType:'json',
						beforeSend: function() {
							$('#loadind_image').append("<img src='<?php echo base_url(); ?>images/loading08.gif'>");
						},
						complete: function() {
							$('#loadind_image').remove();
						},
						success:function (json) {
							$(".error_data").html('');	
							//$("#moreUploads").html('');
							if(json['error']){
								$('body,html').animate({
										scrollTop: 0
									}, 800);
								$(".error_data").show();
								$(".error_data").append(json['message']);	
								
								$('.form-horizontal input').each(function(){
									var name = $(this).attr('name');
									var check	= 'error_'+name;		
									if(json[check]){
									$('.form-horizontal #error_'+name).addClass("has-error");
									if(json['error_file']){
										$("#uploadify_limit_help").hide();
										$(".uploadify_required").html('');
										$(".uploadify_required").append(json['error_file']);
										$(".uploadify_required").show();
									}else{
										$("#uploadify_limit_help").show();
										$(".uploadify_required").hide();
										$("#uploadify_limit_reached").hide();
									}
									
									
									}else{
										$('.form-horizontal #error_'+name).removeClass("has-error");
									}
								});
								
							}
							if(json.success){
										$(".form-horizontal").hide();
										$(".error_data").hide();
								 		$(".panel-body").append('<div class="alert alert-success">'+ json['message'] +'<a href="<?php echo base_url();?>offers/add">(Add New Offer)</a></div>');

									}
						}
						
					});

     return false;
 });
			
</script>
   