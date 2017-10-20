<html>
<head>
</head>
<body>
<div class="row">
	<div class="col-md-offset-1 col-md-10">

		<ol class="breadcrumb">
		  <li><a href="<?php echo base_url('Mainpage/Admin')?>">Home</a></li>		  
		  <li class="active">Recipe</li>
		</ol>

		<div class="panel panel-default">
			<div class="panel-heading">
				<div class="page-heading"> <i class="glyphicon glyphicon-edit"></i> Manage Recipe</div>
			</div> <!-- /panel-heading -->
			<div class="panel-body">

				<div class="remove-messages"></div>

				<div class="div-action pull pull-right" style="padding-bottom:20px;">
					<a href="<?php echo base_url('Mainpage/insertRecipe') ?>"><button class="btn btn-default button1"> <i class="glyphicon glyphicon-plus-sign"></i> Add Recipe </button></a>
				</div> <!-- /div-action -->				
				
				<table class="table" id="manageRecipeTable">
					<thead>
						<tr>						
							<th>Recipe Name</th>
							<th></th>
							<th>Recipe Category</th>
							<th>Price</th>
							<th>Quantity</th>
							<th style="width:15%;">Options</th>
						</tr>
					</thead>
					<tbody>
						<?php foreach($recipes as $row): ?>
						<tr>
							<td><?php echo $row['recipename']; ?></td>
							<td><img src = "<?php echo base_url('image/'.$row['recipeimg'].''); ?>" class="image" style="width:128px;height:128px" /></td>
							<td><?php echo $row['recipeing']; ?></td>
							<td><?php echo $row['recipecost'];?></td>
							<td><?php echo $row['recipequa'];?></td>
							<td><a href="">View </a> <text> <a>|</a> <a href="">Edit </a> <text>| </text>
								<a href="<?php echo base_url('Mainpage/delRecipe/'.$row['recipename']); ?>"> Delete</a></td>
							
						</tr>
						<?php endforeach; ?>
					</tbody>
				</table>
				<!-- /table -->

			</div> <!-- /panel-body -->
		</div> <!-- /panel -->		
	</div> <!-- /col-md-12 -->
</div> <!-- /row -->
</body>
</html>