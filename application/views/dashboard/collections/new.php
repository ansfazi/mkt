<?php $this->load->view('dashboard/includes/header'); ?>

<div class="main-content">

    <?php $this->load->view('dashboard/sub_header'); ?>
    <hr />

    <ol class="breadcrumb bc-3">
        <li>
            <a href="<?php echo admin_url('products'); ?>"><i class="entypo-home"></i>Collections</a>
        </li>

        <li class="active">

            <strong>Add Collection</strong>
        </li>
    </ol>
    <h2>Add Collection</h2>
    <div class="row">

        <div class="col-md-12">
            <div class="message"></div>
            <hr>
            <!--   -->
            <form enctype="multipart/form-data" role="form" class="form-horizontal" id="new_product" action="<?php echo site_url(API.'products/new') ?>" method="post">
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
                        <h4>Collection details</h4>
                        Write a name and description for this collection.
                        <hr>
                    </div>

                    <div class="col-md-12">
                        <div class="form-group">
                            <label for="title" class="col-sm-2 control-label">Title</label>
                            <div class="col-sm-8">
                                <input type="text" class="form-control" name="title" data-validate="required" id="title" placeholder="e.g. Summer collection, Under $100, Staff picks" />
                            </div>
                            <div class="col-sm-2">
                                Title
                            </div>
                        </div>
                    </div>
          
                </div>
             
                <div class="row">
                    <div class="col-md-12">
                        <div class="form-group">
                            <label for="field-1" class="col-sm-2 control-label">Tags</label>
                            <div class="col-sm-8">
                                <textarea class="form-control ckeditor" name="description" id="field-ta" placeholder="Textarea"></textarea>
                            </div>
                            <div class="col-sm-2">
                                
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
                                    <div class="switch-on">
                                        <input type="checkbox" name="visibility" checked="">
                                        <span class="switch-left">ON</span>
                                        <label>&nbsp;</label>
                                        <span class="switch-right">OFF</span>
                                    </div>
                                </div>
                            </div>
                            <div class="col-sm-2">

                            </div>
                        </div>
                    </div>

                </div>
        </div>
        <div class="row">
            <div class="col-md-12">
                <div class="message"></div>
            </div>
            <div class="col-md-12">
                <hr>
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
    $('#title').blur(function() {
        title = $('#title').val();
        keywords = (title.match(/\w+|"[^"]+"/g));
        $.each(keywords, function(key, word) {
            if (word.length > 3)
                $('#tags').tagsinput('add', word);
        });

    });
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
                //$('#new_product').trigger("reset");
                $('#new_product').data('bootstrapValidator').resetForm(true);


                /*                $(".message").html('Product Saved!'); 
                $(".message").addClass("alert alert-success");*/

                window.location = '<?php echo admin_url("collections"); ?>'
            }, 'json');
        });
});
</script>
<?php 
/*<script src="<?php echo site_url(); ?>neon-x/assets/js/ckeditor/ckeditor.js"></script>
<script src="<?php echo site_url(); ?>neon-x/assets/js/ckeditor/adapters/jquery.js"></script>*/
 ?>

<script src="<?php echo site_url(); ?>neon-x/assets/js/fileinput.js" id="script-resource-7"></script>
<script src="<?php echo site_url(); ?>neon-x/assets/js/bootstrap-tagsinput.min.js" id="script-resource-8"></script>
<?php $this->load->view('dashboard/includes/footer'); ?>
<?php get_uploader_js( 'uploads/products/'); ?>
