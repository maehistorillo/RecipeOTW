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
			
			
			if(!isset($username)){
				echo '
			<div class="collapse navbar-collapse navbar-right navbar-main-collapse">
      <ul class="nav navbar-nav">
        <li><a href="'.base_url('Mainpage/Home/').'">Home</a></li>
        <li><a href="#recipe">Featured Recipes</a></li>
		<li><a href="#service">Cuisines</a></li>
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
        <li><a href="#recipe">Featured Recipes</a></li>
		<li><a href="#service">Cuisines</a></li>
		<li><a href="#aboutus">About Us</a></li>
		<li><a href="#contact">Reviews</a></li>
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
			<li><a href="'.base_url('/Mainpage/User').'">'.$username.'</a></li>
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
    <section id="intro" class="intro">
	
		<div class="slogan">
			<h4 id="h41">NEED INGREDIENTS BUT NO TIME TO BUY?</h4>
			<h2>RECIPE ON THE WAY </h2>
			<h4 id="h42">IS THE ANSWER TO YOUR PROBLEM</h4>
		</div>
		<div class="page-scroll">
			<a href="#recipe" class="btn btn-rectangle">
				Get Started<!--<i class="fa fa-angle-double-down animated"></i>-->
			</a>
		</div>
    </section>
	<!-- /Section: intro -->

	<!-- <!-- Section: Featured Recipe -->
        <section id="recipe" class="home-section text-center">
		<div class="heading-about">
			
			<div class="container"> 
			<div class="row">
				
			
				<div class="col-lg-8 col-lg-offset-2">
					<div class="wow bounceInDown" data-wow-delay="0.2s"> 
					<div class="section-heading"> 
					<h2>Featured Recipes</h2> 
					<i class="fa fa-2x fa-angle-down"></i>
					</div> 
					</div> 
				</div>
				
				
			</div>
			</div>
		</div>
		
		
		<div id="overlay" >
			<!-- <div id="text">Overlay Text</div> -->
			<div class="container2" style="padding-top:50px">
			<p>
			<a class="close" onclick="off()">close</a>	
			</p>
		<p class="changeText">
		<div class="row">
			<div class="col-md-4">
			<h3>Home-Style Lamb Curry</h3>
			<img src="<?php echo base_url('bootstrap/img/cat/lambcurry.jpg') ?>"" />
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

					<div class="card">
					  <img src="<?php echo base_url('bootstrap/img/cat/lambcurry.jpg') ?>"" alt="Kare Kare" style="width:100%">
					  <h1>Dish</h1>
					  <p class="title">Home-Style Lamb Curry<br /><br /></p>
					  <p><button onclick="on()">View</button></p>
					</div>
					
				</div>
				</div>
            </div>
			
			<div class="col-xs-6 col-sm-3 col-md-3"> 
			<div class="wow bounceInUp" data-wow-delay="0.5s"> 
			<div class="team boxed-grey">
				
				<div class="card">
				  <img src="<?php echo base_url('bootstrap/img/cat/parmesanpotatosalad.jpg') ?>"" alt="Spag" style="width:100%">
				  <h1>Side Dish</h1>
				  <p class="title">Lemon-Caper Parmesan Potato Salad Bites</p>
				  <p><button onclick="on()">View</button></p>
				</div>

                </div> 
				</div> 
            </div>

			<div class="col-xs-6 col-sm-3 col-md-3"> 
			
			<div class="wow bounceInUp" data-wow-delay="0.8s"> 
			<div class="team boxed-grey">
				<div class="card">
				  <img src="<?php echo base_url('bootstrap/img/cat/yogurtpistacio.jpg') ?>"" alt="Burger" style="width:100%">
				  <h1>Dessert</h1>
				  <p class="title">Easy Yogurt, Honey And Pistachio Popsicles</p>
				  <p><button>View</button></p>
				</div>

                </div> 
				</div> 
            </div>
			
			 <div class="col-xs-6 col-sm-3 col-md-3"> 
			
			<div class="wow bounceInUp" data-wow-delay="1s"> 
			<div class="team boxed-grey">
				<div class="card">
				  <img src="<?php echo base_url('bootstrap/img/cat/Heavenly Blueberry Smoothie.jpg') ?>""" alt="Pizza" style="width:100%">
				  <h1>Smoothies</h1>
				  <p class="title">Heavenly Blueberry <br />Smoothie</p>
				  <p><button>View</button></p>
				</div>

                </div> 
				</div> 
            </div>
        </div>	
	<div class="row" >


        	<div class="col-md-12">
						<br>
						<a href="<?php echo base_url('Mainpage/Etc'); ?>" class="btn"><button>View All Categories</button></a>
        		
			</div>

        </div>		
		</div> 
	</section>
	<!-- /Section: featureed Recipe -->
	

	<!-- Section: services -->
    <section id="service" class="home-section text-center">
		
		<div class="heading-about">
			<div class="container">
			<div class="row">
				<div class="col-lg-8 col-lg-offset-2">
					<div class="wow bounceInDown" data-wow-delay="0.4s">
					<div class="section-heading">
					<h2>Categories</h2>
					<i class="fa fa-2x fa-angle-down"></i>

					</div>
					</div>
				</div>
			</div>
			</div>
		</div>
	
        <div class="row">
							
			<div class="container2">
				<div class="col-xs-6 col-sm-3 col-md-3">
					<div class="wow fadeInLeft" data-wow-delay="0.2s">
						<div class="team boxed-grey">
							<img src="<?php echo base_url('bootstrap/img/cuisines/african.jpg') ?>"'); ?>" alt="Avatar" class="image" style="width:100%" />
							<div class="middle">
								<div class="text">African</div>
							</div>
						</div>
					</div>
				</div>
			</div>

			
			<div class="container2">
				<div class="col-xs-6 col-sm-3 col-md-3">
					<div class="wow fadeInLeft" data-wow-delay="0.4s">
						<div class="team boxed-grey">
							<img src="<?php echo base_url('bootstrap/img/cuisines/american.jpg') ?>"'); ?>" alt="Avatar" class="image" style="width:100%" />
							<div class="middle">
								<div class="text">American</div>
							</div>
						</div>
					</div>
				</div>
			</div>
			
			<div class="container2">
				<div class="col-xs-6 col-sm-3 col-md-3">
					<div class="wow fadeInLeft" data-wow-delay="0.6s">
						<div class="team boxed-grey">
							<img src="<?php echo base_url('bootstrap/img/cuisines/european.jpg') ?>"'); ?>" alt="Avatar" class="image" style="width:100%" />
							<div class="middle">
								<div class="text">European</div>
							</div>
						</div>
					</div>
				</div>
			</div>
			
			<div class="container2">
				<div class="col-xs-6 col-sm-3 col-md-3">
					<div class="wow fadeInLeft" data-wow-delay="0.8s">
						<div class="team boxed-grey">
							<img src="<?php echo base_url('bootstrap/img/cuisines/filipino.jpg') ?>"'); ?>" alt="Avatar" class="image" style="width:100%" />
							<div class="middle">
								<div class="text">Filipino</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
       
        <div class="row">
        	<div class="col-md-12">
						<br>
						<a href="<?php echo base_URL('Mainpage/Recipe/'); ?>" class="btn btn-primary" > View Categories</a>
        		
        	</div>

        </div>

		</div>
		 </div>
	</section>
	
	<!-- Section: About Us -->
    <section id="aboutus" class="home-section text-center">
		
		<div class="heading-about">
			<div class="container">
			<div class="row">
				<div class="col-lg-8 col-lg-offset-2">
					<div class="wow bounceInDown" data-wow-delay="0.4s">
					<div class="section-heading">
					<h2>About Us</h2>
					<i class="fa fa-2x fa-angle-down"></i>

					</div>
					</div>
				</div>
			</div>
			</div>
		</div>
	
        <div class="row">
							
			<div class="container2" >
				<div class="col-xs-6 col-sm-3 col-md-3">
					<div class="wow fadeInLeft" data-wow-delay="0.2s">
						<div class="team boxed-grey" >
							<img src="<?php echo base_url('bootstrap/img/cuisines/african.jpg'); ?>" alt="Dishes" class="image" style="width:100%"  />
							<div class="middle">
								<a href="<?php echo base_url('Mainpage/Etc'); ?>" ><div class="text">Dishes</div></a>
							</div>
						</div>
					</div>
				</div>
			</div>

			
			<div class="container2">
				<div class="col-xs-6 col-sm-3 col-md-3">
					<div class="wow fadeInLeft" data-wow-delay="0.4s">
						<div class="team boxed-grey">
							<img src="<?php echo base_url('bootstrap/img/cat/bacontomatobites.jpg'); ?>" alt="Side Dish" class="image" style="width:100%" />
							<div class="middle">
								<a href="<?php echo base_url('Mainpage/Etc'); ?>" ><div class="text">Side Dish</div></a>
							</div>
						</div>
					</div>
				</div>
			</div>
			
			<div class="container2">
				<div class="col-xs-6 col-sm-3 col-md-3">
					<div class="wow fadeInLeft" data-wow-delay="0.6s">
						<div class="team boxed-grey">
							<img src="<?php echo base_url('bootstrap/img/cat/caramelpears.jpg'); ?>" alt="Desserts" class="image" style="width:100%" />
							<div class="middle">
								<a href="<?php echo base_url('Mainpage/Etc'); ?>" ><div class="text">Desserts</div></a>
							</div>
						</div>
					</div>
				</div>
			</div>
			
			<div class="container2">
				<div class="col-xs-6 col-sm-3 col-md-3">
					<div class="wow fadeInLeft" data-wow-delay="0.8s">
						<div class="team boxed-grey">
							<img src="<?php echo base_url('bootstrap/img/cat/Easy Mango Banana Smoothie.jpg'); ?>" alt="Smoothies" class="image" style="width:100%" />
							<div class="middle">
								<a href="<?php echo base_url('Mainpage/Etc'); ?>" onclick="openCity('Smoothies')" ><div class="text">Smoothies</div></a>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
       
       

		</div>
		 
		 </div>
	</section>
	<!-- /Section: services -->

	
	
	<!-- Section: review -->
    <section id="review" class="home-section text-center">
		<div class="heading-contact">
			<div class="container">
			<div class="row">
				<div class="col-lg-8 col-lg-offset-2">
					<div class="wow bounceInDown" data-wow-delay="0.4s">
					<div class="section-heading">
					<h2>Get in touch</h2>
					<i class="fa fa-2x fa-angle-down"></i>

					</div>
					</div>
				</div>
			</div>
			</div>
		</div>
		<div class="container">

		<div class="row">
			<div class="col-lg-2 col-lg-offset-5">
				<hr class="marginbot-50">
			</div>
		</div>
    <div class="row">
        <div class="col-lg-8">
            <div class="boxed-grey">
                <form id="contact-form">
                <div class="row">
                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="name">
                                Name</label>
                            <input type="text" class="form-control" id="name" placeholder="Enter name" required="required" />
                        </div>
                        <div class="form-group">
                            <label for="email">
                                Email Address</label>
                            <div class="input-group">
                                <span class="input-group-addon"><span class="glyphicon glyphicon-envelope"></span>
                                </span>
                                <input type="email" class="form-control" id="email" placeholder="Enter email" required="required" /></div>
                        </div>
                        <div class="form-group">
                            <label for="subject">
                                Subject</label>
                            <select id="subject" name="subject" class="form-control" required="required">
                                <option value="na" selected="">Choose One:</option>
                                <option value="service">General Customer Service</option>
                                <option value="suggestions">Suggestions</option>
                                <option value="product">Product Support</option>
                            </select>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="name">
                                Message</label>
                            <textarea name="message" id="message" class="form-control" rows="9" cols="25" required="required"
                                placeholder="Message"></textarea>
                        </div>
                    </div>
                    <div class="col-md-12">
                        <button type="submit" class="btn btn-skin pull-right" id="btnContactUs">
                            Send Message</button>
                    </div>
                </div>
                </form>
            </div>
        </div>
		
		<div class="col-lg-4">
			<div class="widget-contact">
				<h5>Main Office</h5>
				
				<address>
				  <strong>Squas Design, Inc.</strong><br>
				  Tower 795 Folsom Ave, Beautiful Suite 600<br>
				  San Francisco, CA 94107<br>
				  <abbr title="Phone">P:</abbr> (123) 456-7890
				</address>

				<address>
				  <strong>Email</strong><br>
				  <a href="mailto:#">email.name@example.com</a>
				</address>	
				<address>
				  <strong>We're on social networks</strong><br>
                       	<ul class="company-social">
                            <li class="social-facebook"><a href="#" target="_blank"><i class="fa fa-facebook"></i></a></li>
                            <li class="social-twitter"><a href="#" target="_blank"><i class="fa fa-twitter"></i></a></li>
                            <li class="social-dribble"><a href="#" target="_blank"><i class="fa fa-dribbble"></i></a></li>
                            <li class="social-google"><a href="#" target="_blank"><i class="fa fa-google-plus"></i></a></li>
                        </ul>	
				</address>					
			
			</div>	
		</div>
    </div>	
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
  