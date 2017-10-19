<!-- Preloader -->
<div id="preloader">
	  <div id="load"></div>
	</div>
	
	<style>
#overlay {
    position: fixed;
    display: none;
    width: 100%;
    height: 100%;
    top: 0;
    left: 0;
    right: 0;
    bottom: 0;
    background-color: rgba(0,0,0,0.9);
    z-index: 2;
    cursor: pointer;
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

    <nav class="navbar navbar-custom navbar-fixed-top" role="navigation">
        <div class="container">
            <div class="navbar-header page-scroll">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-main-collapse">
                    <i class="fa fa-bars"></i>
                </button>
				<a class="navbar-brand" href="index.html">
				<h1>ROTW</h1>
				</a>
				<img class="logo" src="<?php echo base_url('bootstrap/img/icons/logo5.png'); ?>" class="img-responsive">
            </div>

            <!-- Collect the nav links, forms, and other content for toggling -->
            <?php 
			
			
			if(!isset($email)){
				echo '
			<div class="collapse navbar-collapse navbar-right navbar-main-collapse">
      <ul class="nav navbar-nav">
        <li><a href="'.base_url('Mainpage/Home/').'">Home</a></li>
        <li><a href="#frecipe">Featured Recipes</a></li>
		<li><a href="#aboutus">About Us</a></li>
		<li><a href="#contact">Reviews</a></li>
        <li class="dropdown">
          <a href="#" class="dropdown-toggle" data-toggle="dropdown">Accounts <b class="caret"></b></a>
          <ul class="dropdown-menu">
            <li><a href="'.base_url('Mainpage/Login').'">Log In</a></li>
            <li><a href="'.base_url('Mainpage/Signup').'">Sign Up</a></li>
          </ul>
        </li>
      </ul>
            </div> 
			';
			}
			else{
				echo '<div class="collapse navbar-collapse navbar-right navbar-main-collapse">
      <ul class="nav navbar-nav">
        <li><a href="'.base_url('Mainpage/Home/').'">Home</a></li>
        <li><a href="#frecipe">Featured Recipes</a></li>
		<li><a href="#aboutus">About Us</a></li>
        <li class="dropdown">
          <a href="#" class="dropdown-toggle" data-toggle="dropdown">Accounts <b class="caret"></b></a>
          <ul class="dropdown-menu">';
		  if($usercred == 1){
			  echo'
            <li><a href="'.base_url('/Mainpage/Admin').'">'.$username.'</a></li>
			';
		  }
		  else{
			  echo'
			<li><a href="'.base_url('/Mainpage/User').'">'.$firstname.'</a></li>
			';
		  }
		  echo'
            <li><a href="'.base_url('/Mainpage/logout').'">Logout</a></li>
          </ul>
        </li>
      </ul>
            </div>';
			}
			?>
			
            <!-- /.navbar-collapse -->
        </div>
        <!-- /.container -->
    </nav>

<!-- Section: intro -->
   

	<!-- Section: intro -->
    <section id="intro" class="intro">
	
		<div class="slogan">
			<h4 id="h41">NEED INGREDIENTS BUT NO TIME TO BUY?</h4>
			<h2>RECIPE ON THE WAY </h2>
			<h4 id="h42">IS THE ANSWER TO YOUR PROBLEM</h4>
		</div>
		<div class="page-scroll">
			<a href="<?php echo base_url('Mainpage/Recipe')?>" class="btn btn-rectangle">
				Get Started<!--<i class="fa fa-angle-double-down animated"></i>-->
			</a>
		</div>
    </section>
	<!-- /Section: intro -->	
	
	<!-- Section: Featured Recipe -->
    <section id="frecipe" class="home-section text-center">
		<div class="heading-about">
			<div class="container"> 
			<div class="row">
				<div class="col-lg-8 col-lg-offset-2">
					<div class="wow bounceInDown" data-wow-delay="0.2s"> 
					<div class="section-heading"> 
					<h2>Featured Recipes</h2> 
					</div> 
					</div> 
				</div>
			</div>
			</div>
		</div>
		
		<div id="overlay" >
		
			<div class="container2" style="padding-top:50px">
			<p>
			<a class="close" onclick="off()">close</a>	
			</p>
		<p class="changeText">
		<div class="row">
			<div class="col-md-4">
			<h3>Home-Style Lamb Curry</h3>
			<img src="<?php echo base_url('bootstrap/img/cat/lambcurry,jpg'); ?>" />
			</div>
			<div class="col-md-4">
			<h3>Ingredients</h3>
			<p>
			thumb-sized piece ginger, ½ cut into matchsticks, the rest left whole
			<br />2 onions, quartered
			<br />4 garlic cloves
			<br />2 tbsp rapeseed oil
			<br />1 cinnamon stick
			<br />1 tbsp ground coriander
			<br />1 tsp ground cumin
			<br />1 tsp ground turmeric
			<br />½ tsp fennel seeds
			<br />750g leg of lamb, diced
			<br />400g can chopped tomatoes
			<br />1 red chilli or green chilli, deseeded and sliced
			<br />small bunch coriander, stalks finely chopped, leaves roughly chopped
			<br />basmati rice and mango chutney or raita, to serve
			</p>
			<button class="btn-cart btn btn-danger btn-xs align-center" >Add to Cart</button>
			</div>
			<div class="col-md-4">
			<h3>Procedure</h3>
			<p>
				1.	Put the whole piece of ginger, the onions and garlic in a food processor with 300ml water. Blitz to a smooth purée. Scrape down the sides with a spoon and blitz again to make it as smooth as you can. Tip into a deep sauté pan, cover with a lid and simmer for 15 mins. Remove the lid and cook for 5 mins more, stirring occasionally. By now the liquid should be all gone. If not, cook a little longer.<br />
				2.	Add the oil to the pan with the rest of the ginger. Turn up the heat and fry, stirring, for 3-5 mins until it starts to colour.<br />
				3.	Stir in the spices and add the lamb. Stir-fry until the lamb changes colour. Tip in the tomatoes with a can of water and the chilli, season well, cover and leave to simmer for 1 hr.<br />
				4.	Stir in the coriander stalks, re-cover and cook for a final 30 mins until the lamb is tender. Add a splash of water if necessary to loosen the consistency as it cooks. Stir in the coriander leaves and serve with basmati rice and mango chutney or raita.
				</p>

			
			</div>
		</div>
		</p>
		</div>
			
			</div>
				
		
		<div class="container">
		<div class="row">
			
        <div class="row"> 
            
			<div class="col-xs-6 col-sm-3 col-md-3"> 
				<div class="wow bounceInUp" data-wow-delay="0.3s"> 
				<div class="team boxed-grey">	
					<img src="<?php echo base_url('bootstrap/img/cat/lambcurry.jpg'); ?>" alt="Lambcurry" style="width:100%">
					  <h1>Dish</h1>
					  <p class="title">Home-Style Lamb Curry<br /><br /></p>
					  <p><button onclick="on()">View</button></p>
				</div>
				</div>
            </div>
			
			<div class="col-xs-6 col-sm-3 col-md-3"> 
				<div class="wow bounceInUp" data-wow-delay="0.5s"> 
				<div class="team boxed-grey">
				  <img src="<?php echo base_url('bootstrap/img/cat/parmesanpotatosalad.jpg'); ?>" alt="Spag" style="width:100%">
				  <h1>Side Dish</h1>
				  <p class="title">Lemon-Caper Parmesan Potato Salad Bites</p>
				  <p><button onclick="on()">View</button></p>
                </div> 
				</div> 
            </div>

			<div class="col-xs-6 col-sm-3 col-md-3"> 
				<div class="wow bounceInUp" data-wow-delay="0.8s"> 
				<div class="team boxed-grey">
				<img src="<?php echo base_url('bootstrap/img/cat/yogurtpistacio.jpg'); ?>" alt="Yogurt Pistachio" style="width:100%">
				<h1>Dessert</h1>
				<p class="title">Easy Yogurt, Honey And Pistachio Popsicles</p>
				<p><button>View</button></p>
				</div> 
				</div> 
            </div>
			
			<div class="col-xs-6 col-sm-3 col-md-3"> 
				<div class="wow bounceInUp" data-wow-delay="1s"> 
				<div class="team boxed-grey">
				  <img src="<?php echo base_url('bootstrap/img/cat/Heavenly Blueberry Smoothie.jpg'); ?>" alt="Smoothies" style="width:100%">
				  <h1>Smoothies</h1>
				  <p class="title">Heavenly Blueberry<br />Smoothie</p>
				  <p><button>View</button></p>
				</div> 
				</div> 
            </div>
			
        </div>	
		
	<div class="row" >
        	<div class="col-md-12">
						<br>
						<p href="<?php echo base_url('Mainpage/Recipe')?>" class="btn"><button>View All Categories</button></p>
			</div>
        </div>		
		</div>
	</div>		
	</section>
	<!-- /Section: featureed Recipe -->
	

	<!-- Section: About Us -->
<section id="aboutus" class="home-section text-center" class="container-fluid col-md-12">
	<div class="container">	
		<div class="heading-about">
			<div class="container">
			<div class="row">
				<div class="col-lg-8 col-lg-offset-2">
					<div class="wow bounceInDown" data-wow-delay="0.4s">
					<div class="section-heading">
					<h2>About Us</h2>
					</div>
					</div>
				</div>
			</div>
			</div>
		</div>
		
		<div class="col-md-12" >
			<div class="col-md-6">
			<p><h2>We Share Recipe</h2></p>
			<h3><p>Recipe On The Way (ROTW) is a recipe site, but it is <br />
			not	your ordinary recipe site wherein you can   <br />
			only browse for the ingredients of your  <br />
			favourite foods and such. Here on ROTW <br />
			you can browse the Ingredients, Learn the <br />
			Process	and/or also you can order the  <br />
			ingredients	of your favorite food.</p></h3>
			</div>
			
			<img class="col-md-6" src="<?php echo base_url('bootstrap/img/bg1.jpg'); ?>" ></img>
				</div>
		<div class="col-md-12" >
		<br />
		<br />
		</div>
		<div class="col-md-12" >
			
			<img class="col-md-6" src="<?php echo base_url('bootstrap/img/bg1.jpg'); ?>" ></img>
			<p ><h2 class="col-md-6">We are OnTheWay</h2></p>
			<h3><p>Busy? No Time to go to the Market?, you can  <br />
			now order the ingredients of your favorite foods  <br />
			here on ROTW, we can deliver fresh ingredients <br />
			of your order in just 30 minutes, and if we are <br />
			late, your order is free   <br />
			Isn't it cool? Shop with us now!</h3></p>
			
		</div>
     </div>  
     
	
</section>
	
	<script>
	function on() {
		document.getElementById("overlay").style.display = "block";
	}

	function off() {
		document.getElementById("overlay").style.display = "none";
	}
	</script>

		</div>
	</section>
	<!-- /Section: contact -->
  
