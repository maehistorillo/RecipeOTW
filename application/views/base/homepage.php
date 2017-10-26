<!DOCTYPE html>

<head>
	
	
	<style type="text/css">

.parallax {
    /* The image used */
		background: url(../bootstrap/img/bg2.jpg);

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
		background: url(../bootstrap/img/bg.jpg);

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

.title:hover { color: gray; }


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
					<a class="navbar-brand" href="<?php echo base_url('Mainpage/Home');?>">
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
			<div class="container" style="padding: 0px;"> 
			<div class="row" style="padding-top: 30px;">
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
	<div class="parallax2" class="img-responsive">
		<div><br /><br /><br /></div>
		<div class="container" >
		<div class="row">
		
        <div class="row" style="padding: 50px 50px;"> 
            <div class="col-xs-12 col-md-2"> 
			<div class="wow bounceInUp" data-wow-delay="0.3s"> 
			<div class="team boxed-grey" style="white-space: normal; 
				height: 260px;
				width: 12em; 
				overflow: hidden;
				text-overflow: ellipsis;">	
					  <a href=""><img src="<?php echo base_url('bootstrap/img/cat/lambcurry.jpg'); ?>" alt="Kare Kare" style="width:90%; height: auto;padding: 2px;"></a>
					  <a href=""><h5>Main Dish</h5></a>
					  <a href=""><pre class="title" style="border: none; padding: 0px; margin:0px;">Home-Style Lamb Curry</pre>
					  <div class="stars" style="padding: 0px; margin: 0px;"></a>
						  <form action="">
							<input class="star star-5" id="star-5" type="radio" name="star"/>
							<label class="star star-5" for="star-5"></label>
							<input class="star star-4" id="star-4" type="radio" name="star" checked="" />
							<label class="star star-4" for="star-4"></label>
							<input class="star star-3" id="star-3" type="radio" name="star"/>
							<label class="star star-3" for="star-3"></label>
							<input class="star star-2" id="star-2" type="radio" name="star"/>
							<label class="star star-2" for="star-2"></label>
							<input class="star star-1" id="star-1" type="radio" name="star"/>
							<label class="star star-1" for="star-1"></label>
						  </form>
						  <a href=""><p class="pull-right" style="color: black; margin:0px; padding: 0px;"> See more</p></a>	
						</div>
			</div>
			</div>
            </div>
			
			<div class="col-xs-12 col-md-2"> 
			<div class="wow bounceInUp" data-wow-delay="0.5s"> 
			<div class="team boxed-grey" style="white-space: normal; 
				height: 260px;
				width: 12em; 
				overflow: hidden;
				text-overflow: ellipsis; ">	
					  <a href=""><img src="<?php echo base_url('bootstrap/img/cat/parmesanpotatosalad.jpg'); ?>" alt="Spag" style="width:90%; height: auto;padding-bottom: 2px;"></a>
				  <a href=""><h5>Side Dish</h5></a>
				  <a href=""><pre class="title" style="border: none; padding: 0px; margin: 0px;">Lemon-Caper Parmesan Potato Salad Bite</pre></a>
					<div class="stars" style=" padding: 0px; margin:0px;">
						  <form action="">
							<input class="star star-10" id="star-10" type="radio" name="star" checked="" />
							<label class="star star-10" for="star-10"></label>
							<input class="star star-9" id="star-9" type="radio" name="star"/>
							<label class="star star-9" for="star-9"></label>
							<input class="star star-8" id="star-8" type="radio" name="star"/>
							<label class="star star-8" for="star-8"></label>
							<input class="star star-7" id="star-7" type="radio" name="star"/>
							<label class="star star-7" for="star-7"></label>
							<input class="star star-6" id="star-6" type="radio" name="star"/>
							<label class="star star-6" for="star-6"></label>
						  </form>
						  <a href=""><p class="pull-right" style="color: black;  padding: 0px; margin:0px;"> See more</p></a>	
						</div>					  		
			</div>
			</div>
            </div>
			
		

			<div class="col-xs-12 col-md-2">  
			<div class="wow bounceInUp" data-wow-delay="0.8s"> 
			<div class="team boxed-grey" style="white-space: normal; 
				height: 260px;
				width: 12em; 
				overflow: hidden;
				text-overflow: ellipsis; ">
				  <a href=""><img src="<?php echo base_url('bootstrap/img/cat/yogurtpistacio.jpg'); ?>" alt="Burger" style="width:90%; height: auto;padding: 2px;"></a>
				  <a href=""><h5>Dessert</h5></a>
				  <a href=""><pre class="title" style="border: none; padding: 0px; margin: 0px;">Easy Yogurt, Honey And Pistachio Popsicles</pre></a>
					<div class="stars">
						  <form action="">
							<input class="star star-15" id="star-15" type="radio" name="star"/>
							<label class="star star-15" for="star-15"></label>
							<input class="star star-14" id="star-14" type="radio" name="star" checked="" />
							<label class="star star-14" for="star-14"></label>
							<input class="star star-13" id="star-13" type="radio" name="star"/>
							<label class="star star-13" for="star-13"></label>
							<input class="star star-12" id="star-12" type="radio" name="star"/>
							<label class="star star-12" for="star-12"></label>
							<input class="star star-11" id="star-11" type="radio" name="star"/>
							<label class="star star-11" for="star-11"></label>
						  </form>
						  <a href=""><p class="pull-right" style="color: black; margin:0px;"> See more</p></a>	
						</div>
			</div> 
			</div> 
            </div>
			
			<div class="col-xs-12 col-md-2">  
			<div class="wow bounceInUp" data-wow-delay="1s"> 
			<div class="team boxed-grey" style="white-space: normal; 
				height: 260px;
				width: 12em; 
				overflow: hidden;
				text-overflow: ellipsis; ">
				  <a href=""><img src="<?php echo base_url('bootstrap/img/cat/Heavenly Blueberry Smoothie.jpg'); ?>"" alt="Pizza" style="width:90%; height: auto;padding: 2px;"></a>
				  <a href=""><h5>Smoothies</h5></a>
				  <pre class="title" style="border: none; padding: 0px; margin: 0px;">Heavenly Blueberry Smoothie</pre>
					<div class="stars" style=" padding: 0px; margin:0px;">
						  <form action="">
							<input class="star star-20" id="star-20" type="radio" name="star"/>
							<label class="star star-20" for="star-20"></label>
							<input class="star star-19" id="star-19" type="radio" name="star"/>
							<label class="star star-19" for="star-19"></label>
							<input class="star star-18" id="star-18" type="radio" name="star" checked="" />
							<label class="star star-18" for="star-18"></label>
							<input class="star star-17" id="star-17" type="radio" name="star"/>
							<label class="star star-17" for="star-17"></label>
							<input class="star star-16" id="star-16" type="radio" name="star"/>
							<label class="star star-16" for="star-16"></label>
						  </form>
						  <a href=""><p class="pull-right" style="color: black;  padding: 0px; margin:0px;"> See more</p></a>	
						</div>
			</div> 
			</div> 
            </div>
			
			<div class="col-xs-12 col-md-2">  
			<div class="wow bounceInUp" data-wow-delay="1.2s"> 
			<div class="team boxed-grey" style="white-space: normal; 
				height: 260px;
				width: 12em; 
				overflow: hidden;
				text-overflow: ellipsis; ">
				  <a href=""><img src="<?php echo base_url('bootstrap/img/cat/caramelpears.jpg'); ?>"" alt="Pizza" style="width:90%; height: auto;padding: 2px;"></a>
				  <a href=""><h5>Sweets</h5></a>
				  <pre class="title" style="border: none; padding: 0px; margin: 0px;">Caramel Pears</pre>
					<div class="stars" style=" padding: 0px; margin:0px;">
						  <form action="">
							<input class="star star-25" id="star-25" type="radio" name="star" checked="" />
							<label class="star star-25" for="star-25"></label>
							<input class="star star-24" id="star-24" type="radio" name="star"/>
							<label class="star star-24" for="star-24"></label>
							<input class="star star-23" id="star-23" type="radio" name="star"/>
							<label class="star star-23" for="star-23"></label>
							<input class="star star-22" id="star-22" type="radio" name="star"/>
							<label class="star star-22" for="star-22"></label>
							<input class="star star-21" id="star-21" type="radio" name="star"/>
							<label class="star star-21" for="star-21"></label>
						  </form>
						  <a href=""><p class="pull-right" style="color: black; margin:0px; padding: 0px;"> See more</p></a>	
						</div>
			</div> 
			</div> 
            </div>
			
			<div class="col-xs-12 col-md-2">  
			<div class="wow bounceInUp" data-wow-delay="1.4s"> 
			<div class="team boxed-grey" style="white-space: normal; 
				height: 260px;
				width: 12em; 
				overflow: hidden;
				text-overflow: ellipsis; ">
				  <a href=""><img src="<?php echo base_url('bootstrap/img/cat/marionberry.jpg'); ?>"" alt="Pizza" style="width:90%; height: auto;padding: 2px;"></a>
				  <a href=""><h5>Pastry</h5></a>
				  <a href=""><pre class="title" style="border: none; padding: 0px; margin: 0px;">Marion Berry</pre></a>
					<div class="stars" style=" padding: 0px; margin:0px;">
						  <form action="">
							<input class="star star-30" id="star-30" type="radio" name="star"/>
							<label class="star star-30" for="star-30"></label>
							<input class="star star-29" id="star-29" type="radio" name="star" checked="" />
							<label class="star star-29" for="star-29"></label>
							<input class="star star-28" id="star-28" type="radio" name="star"/>
							<label class="star star-28" for="star-28"></label>
							<input class="star star-27" id="star-27" type="radio" name="star"/>
							<label class="star star-27" for="star-27"></label>
							<input class="star star-26" id="star-26" type="radio" name="star"/>
							<label class="star star-26" for="star-26"type="radio" name="star"></label>
						  </form>
						  <a href=""><p class="pull-right" style="color: black; margin:0px; padding: 0px;"> See more</p></a>	
						</div>
			</div> 
			</div> 
            </div>
			
        </div>
		
		<div class="row" style="padding-bottom: 100px;">
        	<div class="col-md-12">
				<br />
				<a href="recipes.html" class="btn btn-rectangle">View All Categories</a>

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
		<div class="row" style="padding-top: 30px;">
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
			<div class="container" style="padding: 55px 85px;">
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
				</div><br /> <br />
				</div>
				</div>
				 
			</div>
			<div><br /><br /></div>	 
			<a href="" class="btn btn-rectangle" style="font-size: 17.5px;">View Featured Recipes</a>
			</div>
	</div>
	<!-- /Parallax 3-->
	
	</section>
		
	<!-- /Section: frecipe -->
	
	<!-- about us-->
	<section id="aboutus" class="home-section text-center">
		
		<div class="heading-about">
		<div class="container">
		<div class="row" style="padding-top: 30px;">
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
			<div><br /><br />
				<div class="btn btn-rectangle">
				<a href="<?php echo base_url('Mainpage/devs');?>" style="font-size: 30px; font-weight: bold; color: white;">LEARN MORE</a>
			</div>
				<br /><br />
				
			</div>
			</div>

	 
			</div>
			</div>
	</div>
	<!-- /Parallax 4-->
	
	</section>
	<!-- /about us-->

</body>
</html>