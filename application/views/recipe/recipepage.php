<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Recipe OTW</title>
	<link rel="icon" href="img/icons/logo3.png" type="image/png">
    <link rel="shortcut icon" href="img/icons/logo3.png" type="img/x-icon">

    <!-- Bootstrap Core CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet" type="text/css">

    <!-- Fonts -->
    <link href="font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
	<link href="css/animate.css" rel="stylesheet" />
    <!-- Squad theme CSS -->
    <link href="css/style.css" rel="stylesheet">
	<link href="color/default.css" rel="stylesheet">
	<link href="css/index.css" rel="stylesheet">

	<style>
	body, html {
    height: 100%;
}


#text{
    position: absolute;
    top: 50%;
    left: 50%;
    font-size: 50px;
    color: white;
    transform: translate(-50%,-50%);
    -ms-transform: translate(-50%,-50%);
}

</style>

</head>

<body id="page-top" data-spy="scroll" data-target=".navbar-custom">
	<!-- Preloader -->
	<div id="preloader-">
	  <div id="load"></div>
	</div>

	<!-- <!-- Section: Categories -->
	<br />
	<br />
	<br />
	<br />
        <section class="home-section text-center">

		<div class="heading-about">
			<div class="container"> 
			<div class="row">
				<div class="col-sm-12">
					<div class="wow bounceInDown" data-wow-delay="0.2s"> 
					<div class="section-heading"> 
					
					<?php foreach($recipe as $items): ?>
					<h2 style="float:left"><?php echo $items['recipename'];?></h2> 
					</div> 
					</div> 
				</div>	
			</div>
			</div>
		</div>
		
		<div class="container col-md-12">
		<div class="col-md-4"><p>Photo</p></div>
		<div class="col-md-4"><p>Ingredients</p></div>
		<div class="col-md-4"><p>Procedure</p></div>
		<div class="container col-md-12">
		<br />
		<div class="col-md-4"><img src="<?php echo base_url('image/'.$items['recipeimg']); ?>" style="width:80%"><br /><div class="col-md-4"><?php echo'<p>Cost : P '.$items['recipecost'].' </p>';?></div>
		<input type = "number" min = "1" id = "<?php echo str_replace(' ', '_', str_replace(')', '_00', str_replace('(', '00_', $items['recipeid']))) ?>" /></td>
                <td>
		<button>Print as PDF</button>
		
		<button class = "addToCart" data-recipeid = "<?php echo $items['recipeid'] ?>" data-recipename = "<?php echo $items['recipename'] ?>" data-recipecost = "<?php echo $items['recipecost'] ?>" >Add to cart</button>
		</div>
		<div class="col-md-4"><p><?php echo $items['recipeing']; ?></p>
		</div>
		<div class="col-md-4"><p><?php echo $items['recipeprocedure']; ?></p>
		<?php endforeach; ?>
		</div>
		</div>
		
	<script>
  $('.addToCart').click(function(){
    var id = $(this).data('recipeid').replace(/ /g, '_').replace('(','00_').replace(')','_00');
    var price = $(this).data('recipecost');
    var name = $(this).data('recipename').replace(/ /g, '_').replace('(','00_').replace(')','_00');
    var qty = $('#' + id).val();    
    if(qty != '' && qty > 0){
      $.ajax({
        url: "<?php echo base_url('Transaction/addtoCart'); ?>"+id+"/"+name+"/"+qty+"/"+price,
        success: function(data){
          alert(qty + " " + name + "(s) added to cart");          
          $('#cart').html(data);
        }
      });
    }else{
      alert("Invalid quantity");
    }    
    $('#' + id).val('');
  });
</script>
	
	<h4>Your Cart</h4>
      <div class="container">
        <div class="row">
          <div class="col-md-2"></div>
          <div class="col-md-8">
            <a href = "<?php echo base_url('Transaction/emptyCart'); ?>">Empty cart</a>
             <div class="table-responsive">
              <table id="cart" class="table table-hoverable" border="2px solid black">
              <thead>
                <tr><th></th><th>Name</th><th>Price</th><th>Quantity</th><th>Total Price</th><th>Action</th></tr>
              </thead>
              <tbody>
              <?php foreach($this->cart->contents() as $items): ?>
                <tr>        
                  <td><?php echo str_replace('_', ' ', str_replace('_00', ')', str_replace('00_', '(', $items['name']))) ?></td>
                  <td><?php echo $items['id'] ?></td>
                  <td><?php echo $items['price'] ?></td>
                  <td><?php echo $items['qty'] ?></td>
                  <td><?php echo $items['price'] * $items['qty'] ?></td>
                  <td>
                    <a href = "<?php echo base_url('Transaction/removeFromCart/'.$items['rowid']); ?>">Remove from cart</a>
                  </td>
                </tr>
              <?php endforeach; ?>
                <tr><td>Total</td><td><?php echo $this->cart->total(); ?></td></tr>
              </tbody>
              </table>
			   <a href = "<?php echo base_url('Transaction/Checkout'); ?>">Proceed to Checkout</a>
            </div>
          </div>
        </div>
      </div>
	


	<footer>
		<div class="container">
			<div class="row">
			
				<div class="col-md-12 col-lg-12">
					<div class="wow shake" data-wow-delay="0.4s">
					<div class="page-scroll marginbot-30">
						<a href="#intro" id="totop" class="btn btn-circle">
							<i class="fa fa-angle-double-up animated"></i>
						</a>
					</div>
					</div>
					<p>&reg;Recipe On The Way. All rights reserved 2017. </p>
                    <!-- 
                        All links in the footer should remain intact. 
                        Licenseing information is available at: http://bootstraptaste.com/license/
                        You can buy this theme without footer links online at: http://bootstraptaste.com/buy/?theme=Squadfree
                    -->
				</div>
			</div>	
		</div>
	</footer>
</body>
</html>
