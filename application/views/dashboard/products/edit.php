<?php $this->load->view('dashboard/includes/header'); ?>

<div class="main-content">

    <?php $this->load->view('dashboard/sub_header'); ?>
    <hr />

    <ol class="breadcrumb bc-3">
        <li>
            <a href="<?php echo admin_url('products'); ?>"><i class="entypo-home"></i>Products</a>
        </li>

        <li class="active">

            <strong>Edit product</strong>
        </li>
    </ol>
    <h2>Edit product</h2>
    <div class="row">
        
        <div class="col-md-12">    
        <div class="message"></div>
        <hr>
            <form role="form" class="form-horizontal" id="new_product" action="<?php echo site_url(API.'products/new') ?>" method="post">
            <div class="row">
                    <div class="col-md-12">
                    <p>
                        <button type="reset" class="btn btn-danger pull-right">Close</button>
                        <button type="submit" class="save_product btn btn-success pull-right">Save</button>
                        </p>
                    </div>
                    
                </div> 
                <div class="row">
                    <div class="col-md-12">
                        <h4>Product details</h4>
                        Write a name and description, and provide a type and vendor to categorize this product.
                        <hr>
                        </div>

                	<div class="col-md-12">
                       <div class="form-group">
                            <label for="title" class="col-sm-2 control-label">Title</label>
                            <div class="col-sm-8">
                                
                                <input type="text" class="form-control" name="title" data-validate="required" id="title" placeholder="eg. Unicorn crest short sleeve tee" />
                            </div>
                            <div class="col-sm-2">
                            	Product Title
                            </div>
                        </div>
                    </div>
                    <div class="col-md-12">
                       <div class="form-group">
                            <label for="field-3" class="col-sm-2 control-label popover-secondary" data-toggle="popover" data-trigger="hover" data-placement="bottom" data-content="e.g. Bicycles, T-Shirts" data-original-title="Type">Type </label>
                            <div class="col-sm-3    ">
                                <input type="text" name="type" class="form-control" id="field-3"  placeholder="Type">
                            </div>
                            <div class="col-sm-2    ">
                                <label for="field-3" class="col-sm-2 control-label popover-secondary" data-toggle="popover" data-trigger="hover" data-placement="bottom" data-content="e.g. Apple, Marketify" data-original-title="Vender">Vender </label>
                            </div>
                            <div class="col-sm-3    ">
                                <input type="text" name="vender" class="form-control" id="field-3" placeholder="vender">
                            </div>

                            
                        </div>
                    </div>

                    <!-- <div class="col-md-12">
                       <div class="form-group">
                            <label for="field-2" class="col-sm-2 control-label">Type </label>

                            <div class="col-sm-8	">
                                <input type="text" class="form-control" id="field-2" placeholder="">
                            </div>
                            <div class="col-sm-2">
                            	
                            </div>
                        </div>
                    </div>
                    <div class="col-md-12">
                       <div class="form-group">
                            <label for="field-3" class="col-sm-2 control-label">Vendor </label>

                            <div class="col-sm-8	">
                                <input type="text" class="form-control" id="field-3" placeholder="">
                            </div>
                            <div class="col-sm-2">
                            	e.g. Apple, Marketify
                            </div>
                        </div>
                    </div> -->
                </div>
                
                <div class="row">
                    <div class="col-md-12">
                        <h4>Inventory &amp; variants</h4>
						Manage inventory, and configure the options for selling this product.
                        <hr>
                        </div>

                	<div class="col-md-12">
                       <div class="form-group">
                            <label for="field-3" class="col-sm-2 control-label">Price </label>
                            <div class="col-sm-3	">
                                <input type="text" class="form-control" name="price" id="price" name="price" data-validate="number" data-validate="required"  placeholder="0.00">
                            </div>

                            
                            <div class="col-sm-2	">
                                <label for="discount" class="col-sm-2 control-label">Discount </label>
                            </div>
                            <div class="col-sm-3	">
                                <input type="text" class="form-control" id="discount" data-validate="number" name="discount" placeholder="%">
                            </div>

                            
                        </div>
                    </div>
                    <div class="col-md-12">
                       <div class="form-group">
                            <label for="field-3" class="col-sm-2 control-label">SKU </label>
                            <div class="col-sm-3	">
                                <input type="text" name="sku" class="form-control" id="field-3"  placeholder="Stock Keeping Unit">
                            </div>
                            <div class="col-sm-2	">
                                <label for="field-3" class="col-sm-2 control-label">Tax </label>
                            </div>
                            <div class="col-sm-3	">
                                <input type="text" name="tax" class="form-control" id="field-3" placeholder="Tax">
                            </div>

                            
                        </div>
                    </div>
                   
                   
                </div>
                <div class="row">
                    <div class="col-md-12">
                        <h4>Images</h4>
						Upload images of this product.
                        <hr>
                        </div>

                	<div class="col-md-12">
                       <div class="form-group">
                            <label for="field-1" class="col-sm-2 control-label">Images</label>
                            <div class="col-sm-8">
                                <div class="fileinput fileinput-new" data-provides="fileinput">
                                <input type="hidden" name="images">
								<div class="fileinput-new thumbnail" style="width: 200px; height: 150px;" data-trigger="fileinput">
                                    <!-- <img src="http://placehold.it/200x150" alt="..."> -->
									<img src="<?php echo site_url('assets/img/200x150.gif') ?>" alt="...">
								</div>
								<div class="fileinput-preview fileinput-exists thumbnail" style="max-width: 200px; max-height: 150px; line-height: 6px;"></div>
								<div>
									<span class="btn btn-success btn-file">
										<span class="fileinput-new">Select image</span>
										<span class="fileinput-exists">Change</span>
										<input type="file" name="..." accept="image/*">
									</span>
									<a href="#" class="btn btn-orange fileinput-exists" data-dismiss="fileinput">Remove</a>
								</div>
							</div>
                            </div>
                            <div class="col-sm-2">
                            	
                            </div>
                        </div>
                    </div>
                   
                </div>     
                <div class="row">
                    <div class="col-md-12">
                        <h4>Tags</h4>
						Tags can be used to categorize products by properties like color, size, and material.
                        <hr>
                        </div>

                	<div class="col-md-12">
                       <div class="form-group">
                            <label for="field-1" class="col-sm-2 control-label">Tags</label>
                            <div class="col-sm-8">
                            <input type="text" value="" name="tags" class="form-control tagsinput"  placeholder="Enter tag and press Enter" id="tags" />
                            </div>
                            <div class="col-sm-2">
                            	Tags
                            </div>
                        </div>
                    </div>
                   
                </div> 
                <div class="row">
                    <div class="col-md-12">
                        <h4>Visibility</h4>
						Control whether this product can be seen on your storefront.
                        <hr>
                        </div>

                	<div class="col-md-12">
                       <div class="form-group">
                            <label for="field-1" class="col-sm-2 control-label">Visibility</label>
                            <div class="col-sm-8">
                                <div class="make-switch has-switch">
							    <div class="switch-on"><input type="checkbox"  name="visibility" checked=""><span class="switch-left">ON</span><label>&nbsp;</label><span class="switch-right">OFF</span></div>
							</div>
                            </div>
                            <div class="col-sm-2">
                            	
                            </div>
                        </div>
                    </div>
                   
                </div> 
                <div class="row">
                    <div class="col-md-12">
                        <div class="message"></div>
                    </div>
                    <div class="col-md-12">
                    <p>
                        <button type="reset" class="btn btn-danger pull-right">Close</button>
                        <button type="submit" class="save_product btn btn-success pull-right">Save</button>
                        </p>
                    </div>
           	        
                </div> 
            </form>
            <hr>

        </div>
    </div>
</div>

<script type="text/javascript">
    $(document).ready(function() {

        $('#new_product').bootstrapValidator({
            feedbackIcons: {
                valid: 'glyphicon glyphicon-ok',
                invalid: 'glyphicon glyphicon-remove',
                validating: 'glyphicon glyphicon-refresh'
            },
            fields: {
                title: {
                    validators: {
                        notEmpty: {
                            message: 'The Product Title/Name is required and cannot be empty'
                        }
                    }
                },
            }        
        })
        .on('success.form.bv', function(e) {
            // Prevent form submission
            e.preventDefault();

            // Get the form instance
            var $form = $(e.target);
            // Get the BootstrapValidator instance
            var bv = $form.data('bootstrapValidator');
            // Use Ajax to submit form data
            $.post($form.attr('action'), $form.serialize(), function(result) {
                // ... Process the result ...
                $('#new_product').trigger("reset");

/*                $(".message").html('Product Saved!'); 
                $(".message").addClass("alert alert-success");*/

                var opts = {
                    "closeButton": true,
                    "debug": false,
                    "positionClass": "toast-top-right",
                    "onclick": null,
                    "showDuration": "300",
                    "hideDuration": "1000",
                    "timeOut": "5000",
                    "extendedTimeOut": "1000",
                    "showEasing": "swing",
                    "hideEasing": "linear",
                    "showMethod": "fadeIn",
                    "hideMethod": "fadeOut"
                };

                toastr.success("Product Saved!", "Great", opts);


                window.location = '<?php echo admin_url("products"); ?>'
            }, 'json');
        });
    });
</script>
<?php $this->load->view('dashboard/includes/footer'); ?>
<script src="<?php echo site_url(); ?>neon-x/assets/js/bootstrap-tagsinput.min.js" id="script-resource-8"></script>