<?php $this->load->view('dashboard/includes/header'); ?>

	<div class="main-content">
		
<?php $this->load->view('dashboard/sub_header'); ?>

<hr />

		<ol class="breadcrumb bc-3">
			<li>
				<a href="../../../neon-x/dashboard/main/index.html"><i class="entypo-home"></i>Home</a>
			</li>
			<li class="active">
				<strong>Collections</strong>
			</li>
		</ol>
	<div class="row">
			<div class="col-md-6">
				<h2>Collections</h2>
			</div>
		<div class="col-md-6">
			<a href="<?php echo admin_url('collections/add'); ?>" class="btn btn-success pull-right btn-sm btn-icon icon-left">
				<i class="entypo-plus"></i>
				Add Collection
			</a>
	        <!-- <a class="btn btn-success pull-right" href="<?php echo admin_url('products/add'); ?>"><i class="glyphicon glyphicon-plus"></i>Add Product</a> -->
		</div>
	</div>
<?php if( !count( $products) ){ ?>
	<div class="row">
		<div class="col-md-12">
	<h3>You haven't added any products yet</h3>	

		</div>
	</div>
	<?php }else{ ?>
	<div class="row">
		<div class="col-md-12">
<table class="table table-bordered datatable" id="table-1">
	<thead>
		<tr>
			<th>Product Title</th>
			<th>Price</th>
			<th>Discount</th>
			<th>Vendor</th>
			<th>Action</th>
		</tr>
	</thead>
	<tbody>
		<?php foreach ($products as $key => $p) { ?>
		<tr>
			<td><?php echo $p->title ?></td>
			<td><?php echo $p->price ?></td>
			<td><?php echo $p->discount ?></td>
			<td>//</td>
			<td class=" ">
				<a href="<?php echo admin_url('products/edit/'.$p->id) ?>" class="btn btn-default btn-sm btn-icon icon-left">
					<i class="entypo-pencil"></i>
					Edit
				</a>
				
				<a href="#" class="btn btn-danger btn-sm btn-icon icon-left">
					<i class="entypo-cancel"></i>
					Delete
				</a>
				
			</td>
		</tr>
		<?php  } // end for each ?>
		
	</tbody>
	<tfoot>
		<tr>
			<th>Product Title</th>
			<th>Price</th>
			<th>Discount</th>
			<th>Vendor</th>
			<th>Action</th>
		</tr>
	</tfoot>
</table>
		</div>
	</div>
	<?php } // end else ?>



</div>

<?php $this->load->view('dashboard/includes/footer'); ?>
<link rel="stylesheet" href="<?php echo site_url(); ?>/neon-x/assets/js/select2/select2-bootstrap.css"  id="style-resource-1">
<link rel="stylesheet" href="<?php echo site_url(); ?>/neon-x/assets/js/select2/select2.css"  id="style-resource-2">
<script src="<?php echo site_url(); ?>neon-x/assets/js/select2/select2.min.js" id="script-resource-9"></script>
<script src="<?php echo site_url(); ?>neon-x/assets/js/gsap/main-gsap.js" id="script-resource-1"></script>


<script src="<?php echo site_url(); ?>neon-x/assets/js/jquery.dataTables.min.js" id="script-resource-7"></script>
<script src="<?php echo site_url(); ?>neon-x/assets/js/dataTables.bootstrap.js" id="script-resource-8"></script>
<script type="text/javascript">
	jQuery(document).ready(function($)
	{
		$("#table-1").dataTable({
			"sPaginationType": "bootstrap",
			"aLengthMenu": [[10, 25, 50, -1], [10, 25, 50, "All"]],
			"bStateSave": true
		});
		
		$(".dataTables_wrapper select").select2({
			minimumResultsForSearch: -1
		});
	});
</script>