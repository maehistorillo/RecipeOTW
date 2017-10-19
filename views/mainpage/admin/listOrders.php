<html>
<head>
	<h2>List of Orders</h2>
</head>
<body>
	<table class="table">
		<thead>
			<tr>
				<th>Order ID</th>
				<th>Email</th>
				<th>Cart</th>
				<th>Date</th>
				<th>Total Bill</th>
			</tr>
		</thead>
		<tbody>
			<?php foreach($orders as $row): ?>		
			<tr>
				<td><?php echo $row['order_id']; ?></td>
				<td><?php echo $row['email']; ?></td>
				<td>
					<table class="table table-hover">
						<thead>
							<tr>
								<th>Recipe ID</th>
								<th>Recipe</th>
								<th>Quantity<th></th>
							</tr>
						</thead>
						<?php $json = json_decode($row['cart'], true); ?>
						<?php foreach($json as $key => $val): ?>
						<tbody>	
							<tr>
							<?php foreach($val as $v): ?>
								<td><?php echo $v ?></td>
							<?php endforeach; ?>
							</tr>
						<?php endforeach; ?>
						</tbody>
					</table>
				</td>
				<td><?php echo $row['date']; ?></td>
				<td><?php echo $row['total_bill']; ?></td>
			</tr>
			<?php endforeach; ?>
		</tbody>
	</table>
</body>
</html>