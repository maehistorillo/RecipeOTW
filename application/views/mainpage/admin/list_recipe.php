<html>
	<h1>List of Recipes</h1>
<head>
</head>
<body>
	<table>
		<thead>
			<tr>
				<th>Recipe Name</th>
				<th>Recipe Type</th>
				<th>Recipe Details</th>
				<th>Recipe Image</th>
				<th>Recipe Cost</th>
				<th>Recipe Procedure</th>	
				<th> </th>
			</tr>
		</thead>
		<tbody>
			
 			<?php foreach($recipes as $row):?>
			<tr>
				<td><?php echo $row['recipename']; ?></td>
				<td><?php echo $row['recipecat']; ?></td>
				<td><?php echo $row['recipeing']; ?></td>
				<td><img src = "<?php echo base_url('image/'.$row['recipeimg'].''); ?>" class="image" style="width:128px;height:128px" /></td>
				<td><?php echo $row['recipecost']; ?></td>
				<td><?php echo $row['recipeprocedure']; ?></td>
				<td><a href="">Edit</a> 
				<a href="<?php echo base_url('Mainpage/delRecipe/'.$row['recipename']); ?>">Delete</a></td>
			</tr>
			<?php endforeach; ?>
				

			
			
		</tbody>
	</table>
	
	<form action ="<?php echo base_url('Mainpage/insertRecipe/'); ?>">
	<p><input type="submit" value="Add New Recipe" /></p>
	</form>
	
	<form action ="<?php echo base_url('Mainpage/Admin/'); ?>">
	<p><input type="submit" value="Back" /></p>
	</form>

</body>
</html>