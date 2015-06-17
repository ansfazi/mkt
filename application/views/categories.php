<div class="container">

	<div class="row" style="height:450px;">
	<div class="col-md-12">
	<h1>Tags/Keywords</h1>
		<div class="panel panel-default">
		  <div class="panel-heading">
		    <h3 class="panel-title"></h3>
		  </div>
		  <div class="panel-body">

		 <?php
		  echo '<ul>';
		  foreach ($tags as $key => $tag) {
		  		echo '<a href="'.tag_url( $tag ).'"<button type="button" class="btn btn-default navbar-btn">'. tag( $tag->tag ).'</button></a> &nbsp;'; 
		  }
		  echo '</ul>';

/*
		 foreach ($categories as $key => $category) {
		 		echo "<ul class='parent-category'>";
		 		echo "<li>". $category->category."</li>";
		 		foreach ($category->childs as $key => $child) {
		 		
		 	 ?>
		 			 <li><?php echo anchor('offers?cat='.$child->id , $child->category)  ?></li>
			<?php 
			 }// end 
			echo "</ul>";
			} */?>
		<!-- </ul>-->		 
		 </div>
		</div>
		</div>
	</div>
</div>