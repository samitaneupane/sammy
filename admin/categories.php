<?php 
require_once $_server['DOCUMENT_ROOT'].'/shop/core/init.php';
include 'includes/head.php'; 
include 'includes/navigation.php';
$sql="SELECT * FROM categories";
$result= $db->query($sql);

?>
<h2 class="text-center">Categories</h2><hr>
<div class="row">
	<div class="col-md-6"></div>
	<div class="col-md-6"></div>
	<table class="table table-bordered"></table>
	<thead>
		<th>Category</th><th>Parent</th><th></th>
		<tbody>
			<tr>
				<td>Shirts</td>
				<td>Men</td>
				<td>
					<a href="categories.php?edit=1" class="btn btn-xs btn-default" ><span class="glyphicon glyphicon-pencil"></span></a>
					<a href="categories.php?delete=1" class="btn btn-xs btn-default" ><span class="glyphicon glyphicon-remove-sign"></span></a>
				</td>
			</tr>
		</tbody>

	</thead>
</div>
<?php include 'includes/footer.php'; ?>
