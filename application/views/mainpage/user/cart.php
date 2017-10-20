<html>
<head>
</head>
	<table>
	<thead>
        <tr><th></th><th>Name</th><th>Price</th><th>Quantity</th><th>Total Price</th><th>Action</th></tr>
    </thead>
	<tbody>
	<?php foreach($this->cart->contents() as $items): ?>
		<tr>        
            <td><?php echo $items['id'] ?></td>
            <td><?php echo str_replace('_', ' ', str_replace('_00', ')', str_replace('00_', '(', $items['name']))) ?></td>
            <td><?php echo $items['price'] ?></td>
            <td><?php echo $items['qty'] ?></td>
            <td><?php echo $items['price'] * $items['qty'] ?></td>
            <td>
              <a href = "<?php echo base_url('removeFromCart/'.$items['rowid']); ?>">Remove from cart</a>
            </td>
        </tr>
    <?php endforeach; ?>
	<tr><td>Total</td><td><?php echo $this->cart->total(); ?></td></tr>
	</tbody>
	</table>
<body>
</body>
</html>