<!DOCTYPE html>
<html lang="en">

<head>
<head>
<style>
/* The Modal (background) */
.modal {
    display: none; /* Hidden by default */
    position: fixed; /* Stay in place */
    z-index: 1; /* Sit on top */
    padding-top: 100px; /* Location of the box */
    left: 0;
    top: 0;
    width: 100%; /* Full width */
    height: 100%; /* Full height */
    overflow: auto; /* Enable scroll if needed */
    background-color: rgb(0,0,0); /* Fallback color */
    background-color: rgba(0,0,0,0.4); /* Black w/ opacity */
}

/* Modal Content */
.modal-content {
    position: relative;
    background-color: #fefefe;
    margin: auto;
    padding: 0;
    border: 1px solid #888;
    width: 80%;
    box-shadow: 0 4px 8px 0 rgba(0,0,0,0.2),0 6px 20px 0 rgba(0,0,0,0.19);
    -webkit-animation-name: animatetop;
    -webkit-animation-duration: 0.4s;
    animation-name: animatetop;
    animation-duration: 0.4s
}

/* Add Animation */
@-webkit-keyframes animatetop {
    from {top:-300px; opacity:0} 
    to {top:0; opacity:1}
}

@keyframes animatetop {
    from {top:-300px; opacity:0}
    to {top:0; opacity:1}
}

/* The Close Button */
.close {
    color: white;
    float: right;
    font-size: 28px;
    font-weight: bold;
}

.close:hover,
.close:focus {
    color: #000;
    text-decoration: none;
    cursor: pointer;
}

.modal-header {
    padding: 2px 16px;
    background-color: #5cb85c;
    color: white;
}

.modal-body {padding: 2px 16px;}

.modal-footer {
    padding: 2px 16px;
    background-color: #5cb85c;
    color: white;
}

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
	<?php foreach($recipe as $row): ?>
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
					<h2 style="float:left"><?php echo $row['recipename']; ?></h2> 
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
		<div class="col-md-4"><p>Cost</p></div>
		<div class="container col-md-12">
		<br />
		<div class="col-md-4"><img src="<?php echo base_url('image/'.$row['recipeimg']); ?>" style="width:80%">
		<div class="col-md-4"><img src="img/cat/courgettebacon.jpg" alt="Creamy Courgette & Bacon Pasta" style="width:80%"><button>Add to Cart</button><button>Print as PDF</button>
		</div>
		</div>
		<div class="col-md-4"><p><?php echo $row['recipeing']; ?></p>
		</div>
		<div class="col-md-4"><p><?php echo $row['recipeprocedure']; ?></p>
		<div class="col-md-4"><p><?php echo $row['recipecost']; ?></p>
		<?php endforeach; ?>
		</div>
		</div>
	<div id="myModal" class="modal">
		<div class="modal-content">
			<div class="modal-header">
				<p>You must login first.</p>
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


	
	<script>
// Get the modal
var modal = document.getElementById('myModal');

// Get the button that opens the modal
var btn = document.getElementById("myBtn");

// Get the <span> element that closes the modal
var span = document.getElementsByClassName("close")[0];

// When the user clicks the button, open the modal 
btn.onclick = function() {
    modal.style.display = "block";
}

// When the user clicks on <span> (x), close the modal
span.onclick = function() {
    modal.style.display = "none";
}

// When the user clicks anywhere outside of the modal, close it
window.onclick = function(event) {
    if (event.target == modal) {
        modal.style.display = "none";
    }
}


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


	

</body>

</html>