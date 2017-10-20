<html>
<head>
	<h1>Add New Recipe!</h1>
</head>
<body>
	<form action = "<?php echo base_url('Mainpage/submitRecipe/'); ?>" method="post">
		<p>Name: <input type="text" id="recipename" name="recipename" /></p>
		
		<p>Category:</p>
		<input type="radio" name="recipecat" value="Main Dish">Main Dish
		<input type="radio" name="recipecat" value="Appetizer">Appetizer
		<input type="radio" name="recipecat" value="Dessert">Dessert
		
		<p>Ingredients: <textarea name="recipeing" rows="4" col="50"></textarea></p>
		
		<p>Image: <input type="file" id="recipeimg" name="recipeimg" class="file-loading" /></p>
		
		<p>Price: <input type="text" id="recipecost" name="recipecost" /></p>
		<p>Procedure: <input type="text" id="recipeprocedure" name="recipeprocedure" /></p>
		<button type="submit">Submit</button>
	</form>
	
	<form action ="<?php echo base_url('Mainpage/Admin/'); ?>">
	<p><input type="submit" value="Back" /></p>
	</form>
</body>
</html>