<html>
<head>
	<h1>Category</h1>
</head>
<body>
	<table>
		<thead>
			<tr>
			<th>Recipe</th>
			<th></th>
			</tr>
		</thead>
		<tbody>
			<?php foreach($recipename as $row):?>
			<tr>
				<td><?php echo $row['recipename']; ?></td>
			</tr>
			<?php endforeach; ?>
		</tbody>
	</table>
</body>
</html>