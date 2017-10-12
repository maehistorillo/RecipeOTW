<html>
<head>
	<h1>Add New Recipe!</h1>
</head>
<body>
	<form action = "<?php echo base_url('Mainpage/submitRecipe/'); ?>" method="post">
		<p>Name: <input type="text" id="recipename" name="recipename" /></p>
		<p>Category: <input type="text" id="recipecat" name="recipecat" /></p>
		<p>Ingredients: <input type="text" id="recipeing" name="recipeing" /></p>
		
		<p>Image: <input type="file" id="recipeimg" name="recipeimg" class="file-loading" /></p>
		
		<p>Price: <input type="text" id="recipecost" name="recipecost" /></p>
		<p>Procedure: <input type="text" id="recipeprocedure" name="recipeprocedure" /></p>
		<button type="submit">Submit</button>
	</form>
	
<form action="" method="post">
<input type="radio" name="radio" value="Radio 1">Radio 1
<input type="radio" name="radio" value="Radio 2">Radio 2
<input type="radio" name="radio" value="Radio 3">Radio 3
<input type="submit" name="submit" value="Get Selected Values" />
</form>
	<form action ="<?php echo base_url('Mainpage/Admin/'); ?>">
	<p><input type="submit" value="Back" /></p>
	</form>
</body>
</html>