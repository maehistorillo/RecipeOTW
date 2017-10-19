<html>
<head>
	<h2>Checkout</h2>
</head>
<body>
	<form method = "POST" action = "<?php echo base_url('Mainpage/Endcheckout'); ?>">
    <h3>Step 3: Payment</h3>
    <div>
    <table cellpadding="6" cellspacing="1" border="solid thin black">
        <tr><td>Cart total</td><td><strong><?php echo $bill; ?> Pesos</strong></td></tr>
    </table>    
    </div>    
    <input type = "submit" value = "Finish Transaction" />
</form>
</body>
</html>