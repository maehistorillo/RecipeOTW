<html>
<body>
<div class="row">
	<div class="col-md-offset-1 col-md-10">

	<?php
		foreach($balance as $items){ 
		$save = $items['balance']; 
	}
	?>
	
			<ol class="breadcrumb">
		  <li><a href="<?php echo base_url('Mainpage/Home')?>">Home</a></li>		  
		  <li class="active">Add to Cart</li>
		</ol>

		<div class="panel panel-default">
			<div class="panel-heading">
				<div class="page-heading"> <i class="glyphicon glyphicon-edit"></i> Manage Recipe</div>
			</div> <!-- /panel-heading -->
			<div class="panel-body">
	
	 <a class="breadcrumb" href="#">Welcome <?php echo $firstname?>!</a>
	  <br/>
      <a class="breadcrumb" href="#">Your Balance: <?php echo $save?></a>

    <!-- Collect the nav links, forms, and other content for toggling -->
    
	<table class="table" id="manageRecipeTable">
		<thead>
			<tr>
				<th>Name</th>
				<th>Quantity</th>
				<th></th>
				<th>Cost</th>
				<th></th>
				<th>Action</th>
			</tr>
		</thead>
		<tbody>
			
 			<?php foreach($recipes as $items):?>
			<tr>
				<td><?php echo $items['recipename']; ?></td>
				<td><?php echo $items['recipequa']; ?></td>
				<td><img src = "<?php echo base_url('image/'.$items['recipeimg'].''); ?>" class="image" style="width:180px;height:128px" /></td>
				<td><?php echo $items['recipecost']; ?></td>
				<td><input type = "number" min = "1" id = "<?php echo str_replace(' ', '_', str_replace(')', '_00', str_replace('(', '00_', $items['recipeid']))) ?>" /></td>
                <td>
				<td><button class = "addToCart" data-recipeid = "<?php echo $items['recipeid'] ?>" data-recipename = "<?php echo $items['recipename'] ?>" data-recipecost = "<?php echo $items['recipecost'] ?>" >Add to cart</button></td>
			</tr>
			<?php endforeach; ?>		
		</tbody>
	</table>
	
	<form action ="<?php echo base_url('Mainpage/Home/'); ?>">
	<p><input type="submit" value="Back" /></p>
	</form>
	
	<script>
  $('.addToCart').click(function(){
    // ( -> 00_
    // ) -> _00
    // WHITESPACE -> _
    var id = $(this).data('recipeid').replace(/ /g, '_').replace('(','00_').replace(')','_00');
    var price = $(this).data('recipecost');
    var name = $(this).data('recipename').replace(/ /g, '_').replace('(','00_').replace(')','_00');
    var qty = $('#' + id).val();    
    if(qty != '' && qty > 0){
      $.ajax({
        url: "<?php echo base_url('Mainpage/addtoCart/'); ?>"+id+"/"+name+"/"+qty+"/"+price,
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
            <a href = "<?php echo base_url('Mainpage/emptyCart'); ?>">Empty cart</a>
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
                    <a href = "<?php echo base_url('Mainpage/removeFromCart/'.$items['rowid']); ?>">Remove from cart</a>
                  </td>
                </tr>
              <?php endforeach; ?>
                <tr><td>Total</td><td><?php echo $this->cart->total(); ?></td></tr>
              </tbody>
              </table>
			   <a href = "<?php echo base_url('Mainpage/Checkout/'); ?>">Proceed to Checkout</a>
            </div>
          </div>
        </div>
      </div>
	
	</div> <!-- /col-md-12 -->
</div> <!-- /row -->


</body>
</html>