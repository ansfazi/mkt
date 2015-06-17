<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

function p_img( $file, $size = ''  ){
    if( $size == 'thumbnail'){
        return site_url('uploads/products/thumbnail/'.$file);
    }else{
        return site_url('uploads/products/'.$file);
    }
}


function get_uploader_js( $path, $service_url = '', $success= ''){
	 ?>
<link rel="stylesheet" href="<?php echo base_url(); ?>assets/uploader/css/jquery.fileupload.css">
<script src="<?php echo base_url(); ?>assets/uploader/js/vendor/jquery.ui.widget.js"></script>
<!-- The Load Image plugin is included for the preview images and image resizing functionality -->
<script src="http://blueimp.github.io/JavaScript-Load-Image/js/load-image.min.js"></script>
<!-- The Canvas to Blob plugin is included for image resizing functionality -->
<script src="http://blueimp.github.io/JavaScript-Canvas-to-Blob/js/canvas-to-blob.min.js"></script>

<!-- The Iframe Transport is required for browsers without support for XHR file uploads -->
<script src="<?php echo base_url(); ?>assets/uploader/js/jquery.iframe-transport.js"></script>
<!-- The basic File Upload plugin -->
<script src="<?php echo base_url(); ?>assets/uploader/js/jquery.fileupload.js"></script>
<!-- The File Upload processing plugin -->
<script src="<?php echo base_url(); ?>assets/uploader/js/jquery.fileupload-process.js"></script>
<!-- The File Upload image preview & resize plugin -->
<script src="<?php echo base_url(); ?>assets/uploader/js/jquery.fileupload-image.js"></script>
<!-- The File Upload audio preview plugin -->
<script src="<?php echo base_url(); ?>assets/uploader/js/jquery.fileupload-audio.js"></script>
<!-- The File Upload video preview plugin -->
<script src="<?php echo base_url(); ?>assets/uploader/js/jquery.fileupload-video.js"></script>
<!-- The File Upload validation plugin -->
<script src="<?php echo base_url(); ?>assets/uploader/js/jquery.fileupload-validate.js"></script>
<script>
/*jslint unparam: true, regexp: true */
/*global window, $ */
$(function () {
    'use strict';
    // Change this to the location of your server-side upload handler:
    var url = '<?php echo base_url("fileupload"); ?>',

        uploadButton = $('<button/>')
            .addClass('btn btn-primary')
            .prop('disabled', true)
            .text('Processing...')
            .on('click', function () {
                var $this = $(this),
                    data = $this.data();
                $this
                    .off('click')
                    .text('Abort')
                    .on('click', function () {
                        $this.remove();
                        data.abort();
                    });
                data.submit().always(function () {
                    $this.remove();
                });
            });
    $('#fileupload').fileupload({
        url: url,
        dataType: 'json',
        autoUpload: true,
        formData: {path: '<?php echo $path ?>'},
        acceptFileTypes: /(\.|\/)(gif|jpe?g|png)$/i,
        maxFileSize: 5000000, // 5 MB
        // Enable image resizing, except for Android and Opera,
        // which actually support image resizing, but fail to
        // send Blob objects via XHR requests:
        disableImageResize: /Android(?!.*Chrome)|Opera/
            .test(window.navigator.userAgent),
        previewMaxWidth: 100,
        previewMaxHeight: 100,
        previewCrop: true
    }).on('fileuploadadd', function (e, data) {
        data.context = $('<div/>').appendTo('#files');
        $.each(data.files, function (index, file) {
            var node = $('<p/>')
                    .append($('<span/>').text(file.name));
            if (!index) {
                node
                    .append('<br>')
                    .append(uploadButton.clone(true).data(data));
            }
            node.appendTo(data.context);
        });
    }).on('fileuploadprocessalways', function (e, data) {
        var index = data.index,
            file = data.files[index],
            node = $(data.context.children()[index]);
        if (file.preview) {
            node
                .prepend('<br>')
                .prepend(file.preview);
        }
        if (file.error) {
            node
                .append('<br>')
                .append($('<span class="text-danger"/>').text(file.error));
        }
        if (index + 1 === data.files.length) {
            data.context.find('button')
                .text('Upload')
                .prop('disabled', !!data.files.error);
        }
    }).on('fileuploadprogressall', function (e, data) {
        var progress = parseInt(data.loaded / data.total * 100, 10);
        $('#progress .progress-bar').css(
            'width',
            progress + '%'
        );
    }).on('fileuploaddone', function (e, data) {
        $.each(data.result.files, function (index, file) {
            console.log( file );
            if (file.url) {
                /*var link = $('<a>')
                    .attr('target', '_blank')
                    .prop('href', file.url);
                $(data.context.children()[index]).wrap(link);*/


                var link = $('<input>').attr({
                    type: 'hidden',
                    id: 'uploadedfiles',
                    name: 'uploadedfiles[]',
                    value: file.name
                }).appendTo('.uploaded_files');
                <?php echo $success; ?>

            } else if (file.error) {
                var error = $('<span class="text-danger"/>').text(file.error);
                $(data.context.children()[index])
                    .append('<br>')
                    .append(error);
            }
        });
    }).on('fileuploadfail', function (e, data) {
        $.each(data.files, function (index, file) {
            var error = $('<span class="text-danger"/>').text('File upload failed.');
            $(data.context.children()[index])
                .append('<br>')
                .append(error);
        });
    }).prop('disabled', !$.support.fileInput)
        .parent().addClass($.support.fileInput ? undefined : 'disabled');
});
</script>

	 <?php
}



function tag( $tag ){
    return $tag.'#';
}
function tag_url( $tag ){
    return base_url("hashtag/".$tag->id);
}
function product_img_url( $product , $size = ''){
    if( $size == '' && isset($product->images[0]->file_name) ){
        return base_url("/uploads/products/thumbnail/").'/'.$product->images[0]->file_name;
    }else{
        return isset($product->images[0]->file_name)?base_url("/uploads/products/thumbnail/").'/'.$product->images[0]->file_name:base_url('assets/images/default-product.png');
    }
}
function product_url( $product ){
  return base_url('products/'.$product->slug);
}
function outlet_url( $outlet_slug ){
    if( is_object( $outlet_slug ))
        $outlet_slug = $outlet_slug->id;
  return base_url('outlet/'.$outlet_slug);
}
function l($text, $url){
    echo  "<a href='$url'>$text</a>";
}
function render_tags( $tags, $type=""){
  $st = ''; 
  foreach ($tags as $key => $tag) {
    if( $type== "")
      $st.= l( tag( $tag->tag ), tag_url($tag ) ).' ' ;
    else
      $st.= tag_url($tag )."\n" ;
  }
  return $st ;
}
function distance($lat1, $lon1, $lat2= null, $lon2 =null, $unit = "K") {
  if( $lat1 == 0){
    return '';
  }
  
  $theta = $lon1 - $lon2;
  $dist = sin(deg2rad($lat1)) * sin(deg2rad($lat2)) +  cos(deg2rad($lat1)) * cos(deg2rad($lat2)) * cos(deg2rad($theta));
  $dist = acos($dist);
  $dist = rad2deg($dist);
  $miles = $dist * 60 * 1.1515;
  $unit = strtoupper($unit);

  if ($unit == "K") {
    return ($miles * 1.609344) ." Kilometers Away";
  } else if ($unit == "N") {
      return ($miles * 0.8684);
    } else {
        return $miles;
      }
}

function pre($data){
  echo '<pre>';
    print_r($data);
  echo '<pre>';
}
function d_price( $price , $discount ){
    //return $price
}