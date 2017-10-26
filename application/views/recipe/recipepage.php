<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Recipe OTW</title>
  

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

div.stars {
  
  display: inline-block;
}

input.star { display: none; }

label.star {
  float: right;
  padding: 2px;
  font-size: 20px;
  color: #444;
  transition: all .2s;
}

input.star:checked ~ label.star:before {
  content: '\f005';
  color: #FD4;
  transition: all .25s;
}

input.star-5:checked ~ label.star:before {
  color: #FE7;
  text-shadow: 0 0 20px #952;
}
input.star-10:checked ~ label.star:before {
  color: #FE7;
  text-shadow: 0 0 20px #952;
}
input.star-15:checked ~ label.star:before {
  color: #FE7;
  text-shadow: 0 0 20px #952;
}
input.star-20:checked ~ label.star:before {
  color: #FE7;
  text-shadow: 0 0 20px #952;
}
input.star-25:checked ~ label.star:before {
  color: #FE7;
  text-shadow: 0 0 20px #952;
}
input.star-30:checked ~ label.star:before {
  color: #FE7;
  text-shadow: 0 0 20px #952;
}


input.star-1:checked ~ label.star:before { color: #F62; }
input.star-6:checked ~ label.star:before { color: #F62; }
input.star-11:checked ~ label.star:before { color: #F62; }
input.star-16:checked ~ label.star:before { color: #F62; }
input.star-21:checked ~ label.star:before { color: #F62; }
input.star-26:checked ~ label.star:before { color: #F62; }


label.star:hover { transform: rotate(-15deg) scale(1.3); }

label.star:before {
  content: '\f006';
  font-family: FontAwesome;
}

body {
    background-repeat: no-repeat;
    background-attachment: fixed;
    background-position: center;
    background-size: cover;
}


</style>

</head>

<body id="page-top" data-spy="scroll" data-target=".navbar-custom" background="<?php echo base_url('bootstrap/img/3.jpg');?>"> 
  <!-- Preloader -->
  <div id="preloader-">
    <div id="load"></div>
  </div>

  <!-- <!-- Section: Categories -->
  
        <section class="home-section text-center">

    <div class="heading-about">
      <div class="container"> 
      <div class="row">
        <div class="col-sm-12">
          <a href="<?php echo base_url('user/client')?>"><h3 style="color: white; text-align: left;">Back</h3></a>
          <div class="wow bounceInDown" data-wow-delay="0.2s"> 
          <div class="section-heading"> 
          <?php foreach($recipe as $items): ?>

          <h2 style="text-align: center;"><?php echo $items['recipename'];?></h2> 
          </div> 
          </div> 
        </div>  
      </div>
      </div>
    </div>
    
    <div class="container col-md-12">
    <div class="col-md-4"><p style="font-size: 35px; font-weight: bold;"><font size="14" color="yellow">P</font>hoto</p></div>
    <div class="col-md-4"><p style="font-size: 35px; font-weight: bold;"><font size="14" color="yellow">I</font>ngredients</p></div>
    <div class="col-md-4"><p style="font-size: 35px; font-weight: bold;"><font size="14" color="yellow">P</font>rocedure</p></div>
    <div class="container col-md-12">
    <div class="col-md-4"><img src="<?php echo base_url('image/'.$items['recipeimg']); ?>" style="width:80%;border-radius: 50px;">
      <div class="stars" style="padding: 0px; margin: 0px;"></a>
              <form action="">
              <input class="star star-5" id="star-5" type="radio" name="star" checked="" />
              <label class="star star-5" for="star-5"></label>
              <input class="star star-4" id="star-4" type="radio" name="star"/>
              <label class="star star-4" for="star-4"></label>
              <input class="star star-3" id="star-3" type="radio" name="star"/>
              <label class="star star-3" for="star-3"></label>
              <input class="star star-2" id="star-2" type="radio" name="star"/>
              <label class="star star-2" for="star-2"></label>
              <input class="star star-1" id="star-1" type="radio" name="star"/>
              <label class="star star-1" for="star-1"></label>
              </form>
            </div>
            <br />
      <div class="col-md-6"><p style="padding-left: 50px; font-weight:bold; font-size: 20px;">&nbsp;&nbsp;&nbsp;&nbsp;Cost<?php echo '&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Quantity'?></p><?php echo '<p style="font-weight: bold; font-size: 20px;">'.'Php&nbsp;&nbsp;&nbsp;&nbsp;'.$items['recipecost'].' </p>';?></div>
      <br /> </br />
    <input style="color: maroon; width: 20%; border-radius: 20px 50%; font-size: 20px; font-weight: bold; " type = "number" value="1" min = "1" max="50" id = "<?php echo str_replace(' ', '_', str_replace(')', '_00', str_replace('(', '00_', $items['recipeid']))) ?>" /></td>
                <td><br /> <br /></td>
    <button style="width: 55%;  font-weight: bold; padding: 5px; border-style: outset; border-radius: 10px;" class="addToCart" id="addToCart" data-recipeid = "<?php echo $items['recipeid'] ?>" data-recipename = "<?php echo $items['recipename'] ?>" data-recipecost = "<?php echo $items['recipecost'] ?>" ><span><i class="glyphicon glyphicon-plus"></i></span>&nbsp;&nbsp;Add to <font color="yellow">Cart</font></button>
      <div class="col-md-12">          
    <button onClick="javascript:window.print()" style="width: 60%;  font-weight: bold; padding: 5px; border-style: outset; border-radius: 10px;"><span><i class="glyphicon glyphicon-log-in"></i></span>&nbsp;&nbsp;Print as <font color="pink">PDF</font></button><br/></div>
    <div class="col-md-12">          
    <button style="width: 60%;  font-weight: bold; padding: 5px; border-style: inset; border-radius: 10px;"><span><i class="glyphicon glyphicon-search"></i></span>&nbsp;&nbsp;View more <font color="aqua">Recipes</font></button><br/></div>
    
    
    </div>
    <div class="col-md-4"><p style="font-size: 18px; font-weight: bold;"><?php echo $items['recipeing']; ?></p>
    </div>
    <div class="col-md-4"><p style="font-size: 18px; font-weight: bold;"><?php echo $items['recipeprocedure']; ?></p>
    <?php endforeach; ?>
    </div>
    </div>
		
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
        url: "<?php echo base_url('Transaction/addtoCart/'); ?>"+id+"/"+name+"/"+qty+"/"+price,
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

	<h4 style="font-weight: bold; text-decoration: underline;">Y&nbsp;&nbsp;o&nbsp;&nbsp;u&nbsp;&nbsp;r&nbsp; <font color="yellow">&nbsp;C&nbsp;&nbsp;a&nbsp;&nbsp;r&nbsp;&nbsp;t</font></h4>
      <div class="container">
        <div class="row">
          <div class="col-md-12"></div>
          <div class="col-md-12">
            <a style="color: white; font-size: 20px; font-weight: bold;" href = "<?php echo base_url('User/Client')?>"><span style="color: black;"> Empty</span> cart</a>
             <div class="table-responsive" style=" font-size: 20px; border-right-style:inset; border-left-style: outset;">
              <table id="cart" class="table">
              <thead>
                <tr>
                  <th></th>
                  <th><center>Name</center></th>
                  <th><center>Price</center></th>
                  <th><center>Quantity</center></th>
                  <th><center>Total Price</center></th>
                  <th><center>Action</center></th>
                </tr>
              </thead>
              <tbody>
              <?php foreach($this->cart->contents() as $items): ?>
                <tr>        
                  <td><?php echo str_replace('_', ' ', str_replace('_00', ')', str_replace('00_', '(', $items['name']))) ?></td>
                  <td><center><?php echo $items['id'] ?></center></td>
                  <td><center><?php echo $items['price'] ?></center></td>
                  <td><center><?php echo $items['qty'] ?></center></td>
                  <td><center><?php echo $items['price'] * $items['qty'] ?></center></td>
                  <td>
                    <a style="font-size: 20px;" href = "<?php echo base_url('Transaction/removeFromCart/'.$items['rowid']); ?>"><span style="color:red; font-weight:bold; ">&nbsp;&nbsp;&nbsp;Remove</span><font color="white"> from cart</font></a>
                  </td>
                </tr>
              <?php endforeach; ?>
                <tr>
                  <td><center>Total</center></td>
                  <td><?php echo $this->cart->total(); ?></td>
                </tr>
              </tbody>
              </table>
			  <?php if(isset($email))
			  {
			    echo ' <a style="color:white; font-size:20px; font-weight: bold;" href = "'.base_url('Transaction/Checkout/').'">Proceed to Checkout</a>';
			  }
			  else 
			  {
				echo ' <a style="color:white; font-size:20px; font-weight: bold;" href = "'.base_url('Mainpage/Login').'">Proceed to Checkout </a>';
			  }
			  ?>
            </div>
            <br /> <br /> <br /> <br /> 
          </div>
        </div>
      </div>
	

