<html>
<head>
	<?php
	foreach($balance as $row){ 
		$save = $row['balance']; 
	}
	?>
	<h1>Hi <?php echo $username ?>!</h1>
	<h2>Balance : <?php echo $save ?></h2>
</head>
<body>
	<table>
		<thead>
			<tr>
				<th>Name</th>
				<th>Type</th>
				<th>Details</th>
				<th>Image</th>
				<th>Cost</th>
				<th>Procedure</th>	
				<th>Action </th>
			</tr>
		</thead>
		<tbody>
			
 			<?php foreach($recipes as $row):?>
			<tr>
				<td><?php echo $row['recipename']; ?></td>
				<td><?php echo $row['recipecat']; ?></td>
				<td><?php echo $row['recipeing']; ?></td>
				<td><img src = "<?php echo base_url('image/'.$row['recipeimg'].''); ?>" class="image" style="width:180px;height:128px" /></td>
				<td><?php echo $row['recipecost']; ?></td>
				<td><?php echo $row['recipeprocedure']; ?></td>
				<td><a href="<?php echo base_url('Mainpage/delRecipe/'.$row['recipename']); ?>">Add to Cart</a></td>
			</tr>
			<?php endforeach; ?>		
		</tbody>
	</table>
	
	<form action ="<?php echo base_url('Mainpage/Home/'); ?>">
	<p><input type="submit" value="Back" /></p>
	</form>

</body>
</html>