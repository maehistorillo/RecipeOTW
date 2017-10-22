<!DOCTYPE html>

<html lang="en">
<head>
	<style>


.parallax {
    /* The image used */
		background: url(../bootstrap/img/bg2.jpg) top center;

    /* Full height */
    height: 100%; 

    /* Create the parallax scrolling effect */
    background-attachment: fixed;
    background-position: center;
    background-repeat: no-repeat;
    background-size: cover;
}
.parallax2 {
    /* The image used */
		background: url(../bootstrap/img/bg.jpg) top center;

    /* Full height */
    height: 100%; 

    /* Create the parallax scrolling effect */
    background-attachment: fixed;
    background-position: center;
    background-repeat: no-repeat;
    background-size: cover;
}
.parallax3 {
    /* The image used */
	background: url(../bootstrap/img/bgg.jpg) top center;

    /* Full height */
    height: 100%; 

    /* Create the parallax scrolling effect */
    background-attachment: fixed;
    background-position: center;
    background-repeat: no-repeat;
    background-size: cover;
}
.parallax4 {
    /* The image used */
    background: url(../bootstrap/img/bg4.jpg) top center;

    /* Full height */
    height: 100%; 

    /* Create the parallax scrolling effect */
    background-attachment: fixed;
    background-position: center;
    background-repeat: no-repeat;
    background-size: cover;
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

<?php $recipename = 'wew'; ?>
</style>
</head>
<body id="page-top" data-spy="scroll" data-target=".navbar-custom">
	<!-- Preloader -->
	<div id="preloader-">
	  <div id="load"></div>
	</div>
	
	<div class="parallax">
	
		<nav class="navbar navbar-custom navbar-fixed-top" role="navigation">
			<div class="container col-lg-12">
				<div class="navbar-header page-scroll col-lg-4">
					<button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-main-collapse">
					<i class="fa fa-bars"></i>
					</button>
					<a class="navbar-brand" href="index.html">
					<h1 id="h41">ROTW</h1>
					</a>
				</div>

				<!-- Collect the nav links, forms, and other content for toggling -->
            <?php 
			
			
			if(!isset($email)){
				echo '
			<div class="collapse navbar-collapse navbar-right navbar-main-collapse">
      <ul class="nav navbar-nav">
        <li><a href="#intro">Home</a></li>
        <li><a href="#categories">Categories</a></li>
		<li><a href="#frecipe">Featured Recipes</a></li>
		<li><a href="#aboutus">About Us</a></li>
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
        <li><a href="#intro">Home</a></li>
        <li><a href="#categories">Categories</a></li>
		<li><a href="#frecipe">Featured Recipes</a></li>
		<li><a href="#aboutus">About Us</a></li>
        <li class="dropdown">
          <a href="#" class="dropdown-toggle" data-toggle="dropdown">Accounts <b class="caret"></b></a>
          <ul class="dropdown-menu">';
		  if($usercred == 1){
			  echo'
            <li><a href="'.base_url('User/Admin').'">'.$firstname.'</a></li>
			';
		  }
		  else{
			  echo'
			<li><a href="'.base_url('User/Client').'">'.$firstname.'</a></li>
			';
		  }
		  echo'
            <li><a href="'.base_url('Mainpage/Logout').'">Logout</a></li>
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
				<a href="<?php echo base_url('User/Client'); ?>" class="btn btn-rectangle">
				Get Started</a>
			</div>
	    </section>
	<!-- /Section: intro -->
	</div>
	<!-- /Parallax1 -->


	<!-- <!-- Section: Categories -->
        <section id="categories" class="home-section text-center">

		<div class="heading-about">
			<div class="container"> 
			<div class="row">
				<div class="col-sm-12">
					<div class="wow bounceInDown" data-wow-delay="0.2s"> 
					<div class="section-heading"> 
					<h2>Categories</h2> 
					</div> 
					</div> 
				</div>	
			</div>
			</div>
		</div>
	
	<!-- Second Parallax -->
	<div class="parallax2">
		<div><br /><br /><br /></div>
		<div class="container">
		<div class="row">
		
        <div class="row"> 
            <div class="col-xs-12 col-md-2"> 
			<div class="wow bounceInUp" data-wow-delay="0.3s"> 
			<div class="team boxed-grey">	
					  <img src="<?php echo base_url('bootstrap/img/cat/lambcurry.jpg'); ?>" alt="Kare Kare" style="width:100%">
					  <h5>Dish</h5>
					  <p class="title"><?php echo $recipename ?></p>		
			</div>
			</div>
            </div>
			
			<div class="col-xs-12 col-md-2"> 
			<div class="wow bounceInUp" data-wow-delay="0.5s"> 
			<div class="team boxed-grey">
				  <img src="<?php echo base_url('bootstrap/img/cat/parmesanpotatosalad.jpg'); ?>" alt="Spag" style="width:100%">
				  <h5>Side Dish</h5>
				  <p class="title">Lemon-Caper Parmesan Potato Salad Bites</p>
			</div> 
			</div> 
            </div>

			<div class="col-xs-12 col-md-2">  
			<div class="wow bounceInUp" data-wow-delay="0.8s"> 
			<div class="team boxed-grey">
				  <img src="<?php echo base_url('bootstrap/img/cat/yogurtpistacio.jpg'); ?>" alt="Burger" style="width:100%">
				  <h5>Dessert</h5>
				  <p class="title">Easy Yogurt, Honey And Pistachio Popsicles posicles na marame walang ellipsis</p>
            </div> 
			</div> 
            </div>
			
			<div class="col-xs-12 col-md-2">  
			<div class="wow bounceInUp" data-wow-delay="1s"> 
			<div class="team boxed-grey">
				  <img src="<?php echo base_url('bootstrap/img/cat/Heavenly Blueberry Smoothie.jpg'); ?>"" alt="Pizza" style="width:100%">
				  <h5>Smoothies</h5>
				  <p class="title">Heavenly Blueberry <br />Smoothie</p>
            </div> 
			</div> 
            </div>
			
			<div class="col-xs-12 col-md-2">  
			<div class="wow bounceInUp" data-wow-delay="1.2s"> 
			<div class="team boxed-grey">
				  <img src="<?php echo base_url('bootstrap/img/cat/Heavenly Blueberry Smoothie.jpg'); ?>"" alt="Pizza" style="width:100%">
				  <h5>Smoothies</h5>
				  <p class="title">Heavenly Blueberry <br />Smoothie</p>
            </div> 
			</div> 
            </div>
			
			<div class="col-xs-12 col-md-2">  
			<div class="wow bounceInUp" data-wow-delay="1.4s"> 
			<div class="team boxed-grey">
				  <img src="<?php echo base_url('bootstrap/img/cat/Heavenly Blueberry Smoothie.jpg'); ?>"" alt="Pizza" style="width:100%">
				  <h5>Smoothies</h5>
				  <p class="title">Heavenly Blueberry <br />Smoothie</p>
            </div> 
			</div> 
            </div>
			
        </div>
		
		<div class="row" >
        	<div class="col-md-12">
				<br />
				<a href="recipes.html" class="btn"><button>View All Categories</button></a>
			</div>
        </div>		
		</div>
		</div>
		</div>
	</section>
	<!-- /Section: Categories -->
	
	<!-- Section: Featured Recipe -->
    <section id="frecipe" class="home-section text-center">
		
		<div class="heading-about">
		<div class="container">
		<div class="row">
			<div class="col-sm-12">
				<div class="wow bounceInDown" data-wow-delay="0.4s">
				<div class="section-heading">
				<h2>Featured Recipe</h2>
				</div>
				</div>
			</div>
		</div>
		</div>
		</div>
	
	<!-- Parallax 3-->
	<div class="parallax3">
	<div><br /><br /><br /></div>
			<div class="container">
			<div class="row">
					
				<div class="container2">
				<div class="col-xs-12 col-md-3">
				<div class="wow fadeInLeft" data-wow-delay="0.2s">
				<div class="team" >
					<img src="<?php echo base_url('bootstrap/img/cuisines/african.jpg'); ?>" alt="Dishes" class="image" style="width:100%"  />
					<div class="middle">
					<a href="recipes.html" ><div class="text">Dishes</div></a>
					</div>
				</div>
				</div>
				</div>
				</div>
				
				<div class="container2">
				<div class="col-xs-12 col-md-3">
				<div class="wow fadeInLeft" data-wow-delay="0.4s">
				<div class="team">
					<img src="<?php echo base_url('bootstrap/img/cat/bacontomatobites.jpg'); ?>" alt="Side Dish" class="image" style="width:100%" />
					<div class="middle">
					<a href="recipes.html" ><div class="text">Side Dish</div></a>
					</div>
				</div>
				</div>
				</div>
				</div>
				
				<div class="container2">
				<div class="col-xs-12 col-md-3">
				<div class="wow fadeInLeft" data-wow-delay="0.6s">
				<div class="team">
					<img src="<?php echo base_url('bootstrap/img/cat/caramelpears.jpg'); ?>" alt="Desserts" class="image" style="width:100%" />
					<div class="middle">
					<a href="recipes.html" ><div class="text">Desserts</div></a>
					</div>
				</div>
				</div>
				</div>
				</div>
				
				<div class="container2">
				<div class="col-xs-12 col-md-3">
				<div class="wow fadeInLeft" data-wow-delay="0.8s">
				<div class="team">
					<img src="<?php echo base_url('bootstrap/img/cat/Easy Mango Banana Smoothie.jpg'); ?>" alt="Smoothies" class="image" style="width:100%" />
					<div class="middle">
					<a href="recipes.html" ><div class="text">Smoothies</div></a>
					</div>
				</div>
				</div>
				</div>
				</div>
				 
			</div>
			<div><br /><br /></div>	 
			</div>
	</div>
	<!-- /Parallax 3-->
	
	</section>
		
	<!-- /Section: frecipe -->
	
	<!-- about us-->
	<section id="aboutus" class="home-section text-center">
		
		<div class="heading-about">
		<div class="container">
		<div class="row">
			<div class="col-sm-12">
				<div class="wow bounceInDown" data-wow-delay="0.4s">
				<div class="section-heading">
				<h2>About Us</h2>
				</div>
				</div>
			</div>
		</div>
		</div>
		</div>
	
	<!-- Parallax 3-->
	<div class="parallax4">
	<div><br /><br /><br /></div>
			<div class="container">
			<div class="row">

			<div class="col-md-12" >
			<p><h2>RECIPE ON THE WAY (ROTW)</h2></p>
			<h3><p  class="lead font">is a recipe site, but it is not	your ordinary recipe site wherein you can   <br />
			only browse for the ingredients of your favourite foods and such. 
			Here on ROTW you can browse the Ingredients, Learn the Process	and/or <br />
			also you can order the ingredients	of your favorite food.</p></h3>
			<div><br /><br /><br /><br /></div>
			</div>

	 
			</div>
			</div>
	</div>
	<!-- /Parallax 4-->
	
	</section>
	<!-- /about us-->

</body>
</html>