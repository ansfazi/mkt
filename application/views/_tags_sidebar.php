 <div class="list-group">
<a href="#" class="list-group-item active">Popular Tags</a>
  <?php
  
  foreach ($tags as $id => $tag) {
 ?>
<a href="<?php echo base_url("/hashtag/".$tag->id).'#'; ?>" class="list-group-item"> <?php echo $tag->tag ?></a>
<?php } ?> 
</div>