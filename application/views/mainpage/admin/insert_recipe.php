<html>
<head>
	<h1>Add New Recipe!</h1>
</head>
<body>
	<form action = "<?php echo base_url('Mainpage/submitRecipe/'); ?>" method="post">
		<p>Name: <input type="text" id="recipename" name="recipename" /></p>
		<p>Type: <input type="text" id="recipetype" name="recipetype" /></p>
		<p>Details: <input type="text" id="recipedetails" name="recipedetails" /></p>
		
		<p>Image: <input type="file" id="recipeimg" name="recipeimg" class="file-loading" /></p>
		
		<p>Amout: <input type="text" id="recipecost" name="recipecost" /></p>
		<p>Procedure: <input type="text" id="recipeprocedure" name="recipeprocedure" /></p>
		<button type="submit">Submit</button>
	</form>
	<form action ="<?php echo base_url('Mainpage/Admin/'); ?>">
	<p><input type="submit" value="Back" /></p>
	</form>
</body>
</html>