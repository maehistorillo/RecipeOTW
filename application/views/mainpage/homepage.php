<!-- Preloader -->
<div id="preloader">
	  <div id="load"></div>
	</div>

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
            <div class="collapse navbar-collapse navbar-right navbar-main-collapse">
      <ul class="nav navbar-nav">
        <li><a href="<?php echo base_URL('Mainpage/Home/'); ?>">Home</a></li>
        <li><a href="#recipe">Featured Recipes</a></li>
		<li><a href="#service">Cuisines</a></li>
		<li><a href="#contact">Reviews</a></li>
        <li class="dropdown">
          <a href="#" class="dropdown-toggle" data-toggle="dropdown">Accounts <b class="caret"></b></a>
          <ul class="dropdown-menu">
            <li><a href="<?php echo base_url('/Mainpage/Login'); ?>">Log In</a></li>
            <li><a href="<?php echo base_url('/Mainpage/Signup'); ?>">Sign Up</a></li>
          </ul>
        </li>
      </ul>
            </div>
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

	<!-- <!-- Section: Recipe -->
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
		
		<div class="container">
		<div class="row">
			
        <div class="row"> 
            <div class="col-xs-6 col-sm-3 col-md-3"> 
				
			<div class="wow bounceInUp" data-wow-delay="0.3s"> 
			<div class="team boxed-grey">				
				<div class="card">
				  <img src="<?php echo base_url('bootstrap/img/food/pinoy.jpg'); ?>" alt="Kare Kare" style="width:100%">
				  <h1>KareKare</h1>
				  <p class="title">Filipino Style</p>
				  <p><button>View</button></p>
				</div>
				
            </div>
            </div>
            </div>
			
			<div class="col-xs-6 col-sm-3 col-md-3"> 
			
			<div class="wow bounceInUp" data-wow-delay="0.5s"> 
			<div class="team boxed-grey">
				<div class="card">
				  <img src="<?php echo base_url('bootstrap/img/food/Italian.jpg'); ?>" alt="Spag" style="width:100%">
				  <h1>Spaghetti</h1>
				  <p class="title">Italian Style</p>
				  <p><button>View</button></p>
				</div>

                </div> 
				</div> 
            </div>

			<div class="col-xs-6 col-sm-3 col-md-3"> 
			
			<div class="wow bounceInUp" data-wow-delay="0.8s"> 
			<div class="team boxed-grey">
				<div class="card">
				  <img src="<?php echo base_url('bootstrap/img/food/American.jpg'); ?>" alt="Burger" style="width:100%">
				  <h1>Burger</h1>
				  <p class="title">American Style</p>
				  <p><button>View</button></p>
				</div>

                </div> 
				</div> 
            </div>
			
			 <div class="col-xs-6 col-sm-3 col-md-3"> 
			
			<div class="wow bounceInUp" data-wow-delay="1s"> 
			<div class="team boxed-grey">
				<div class="card">
				  <img src="<?php echo base_url('bootstrap/img/food/French.jpg'); ?>" alt="Pizza" style="width:100%">
				  <h1>Pizza</h1>
				  <p class="title">French Style</p>
				  <p><button>View</button></p>
				</div>

                </div> 
				</div> 
            </div>
        </div>		 
		</div> 
	</section>
	<!-- /Section: Recipe -->
	

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
							<img src="<?php echo base_url('bootstrap/img/cuisines/african.jpg'); ?>" alt="Avatar" class="image" style="width:100%" />
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
							<img src="<?php echo base_url('bootstrap/img/cuisines/american.jpg'); ?>" alt="Avatar" class="image" style="width:100%" />
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
							<img src="<?php echo base_url('bootstrap/img/cuisines/european.jpg'); ?>" alt="Avatar" class="image" style="width:100%" />
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
							<img src="<?php echo base_url('bootstrap/img/cuisines/filipino.jpg'); ?>" alt="Avatar" class="image" style="width:100%" />
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

		</div>
	</section>
	<!-- /Section: contact -->
  