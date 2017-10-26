<html>
<head>

	<style>
	body {
		background-repeat: no-repeat;
		background-size: cover;
		background-attachment: fixed;
	}
	</style>
</head>
<body background="<?php echo base_url('bootstrap/img/8.jpg')?>">
	<div class="col-sm-12">
	<a href="<?php echo base_url('user/client')?>"><h3 style="color: white; text-align: left; padding: 50px;">Back</h3></a>
	<center>
	<h2>Checkout</h2>
	<br /> <br /> <br /> 
    <h2>Step <font color="yellow">2</font>: Payment</h2>
    <div>
    <table style="width: 30%; height: 10%; border-style: double;">
        <tr>
        	<td style="font-size: 20px;"><center><font color="yellow">Cart</font> total</center></td>
        	<td style="font-size: 20px;"><strong><center><?php echo $bill; ?> Pesos</center></strong></td>
        </tr>
    </table>    
    </div>    
	<form method = "POST" action = "<?php echo base_url('Mainpage/Signup2'); ?>">
		<br /> <br /> <br /> 
    <input style="font-size: 25px; font-weight: bold; background-color: green;" type = "submit" value = "Finish Transaction" />
	</form>
	</center>
</body>
</html>