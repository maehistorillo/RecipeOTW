<style>

body {
    width: 100%;
    height: 100%;
    font-family: 'Lato',sans-serif;
    font-weight: 300;
    color: #fff;
    background-color: #fff;
}

html {
    width: 100%;
    height: 100%;
}

h1,
h2,
h3,
h5,
h6 {
    margin: 0 0 30px;
    text-transform: uppercase;
    font-family: Montserrat,sans-serif;
    font-weight: 700;
    letter-spacing: 1px;
}

h4 {
  font-size: 35px;
  margin: 0 0 40px;
    text-transform: uppercase;
    font-family: Lato Light, Montserrat;
    font-weight: 700;
  line-height: 50px;
  
}

#h41 {
  letter-spacing: 5px;
}
#h42 {
  letter-spacing: 10px;
}

p {
    margin: 0 0 20px;
    font-size: 16px;
    line-height: 1.6em;
}

p.lead {
  font-weight: 600;
}

a {
    color: #fff;
    -webkit-transition: all .2s ease-in-out;
    -moz-transition: all .2s ease-in-out;
    transition: all .2s ease-in-out;
}

a:hover,
a:focus {
    text-decoration: none;
    color: #176e61;
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
  .sidenav {
    height: 100%;
    width: 50px;
    position: fixed;
    z-index: 1;
    top: 0;
    left: 0;
    background-color: #111;
    overflow-x: hidden;
    padding-top: 150px;
}

.sidenav a {
    padding: 2px 2px 2px 10px;
    text-decoration: none;
    font-size: 16px;
    color: #818181;
    display: ;
}

.sidenav a:hover {
    color: #f1f1f1;
}

.main {
    margin-left: 200px; /* Same as the width of the sidenav */
}

@media screen and (max-height: 450px) {
  .sidenav {padding-top: 15px;}
  .sidenav a {font-size: 18px;}
}
</style>

<div class="col-md-12">



<div class="sidenav">
  <a href="#">About</a>
  <a href="#">Services</a>
  <a href="#">Clients</a>
  <a href="#">Contact</a>
</div>

<div class="main">
  <h2>Sidenav Example</h2>
  <p>This sidenav is always shown.</p>
</div>
<div class="container" style="overflow: hidden;">

  <div class="col-md-1">
    <div class="row"></div>
  </div>
  <div class="col-md-11" style="padding-top: 60px; text-align: center;">

  <h2 id="h41">ROTW</h2>
<div id="myCarousel" class="carousel slide" data-ride="carousel">
  <!-- Indicators -->
  <ol class="carousel-indicators">
    <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
    <li data-target="#myCarousel" data-slide-to="1"></li>
    <li data-target="#myCarousel" data-slide-to="2"></li>
  </ol>

  <!-- Wrapper for slides -->
  <div class="carousel-inner">
    <div class="item active">
      <img src="<?php echo base_url('bootstrap/img/cat/img1.jpg'); ?>" alt="Chania" style="width: 100%;">
      <div class="carousel-caption">
        <h3>Los Angeles</h3>
        <p>LA is always so much fun!</p>
      </div>
    </div>

    <div class="item">
      <img src="<?php echo base_url('bootstrap/img/cat/img2.jpg'); ?>" alt="Chicago" style="width: 100%;">
      <div class="carousel-caption">
        <h3>Chicago</h3>
        <p>Thank you, Chicago!</p>
      </div>
    </div>

    <div class="item">
      <img src="<?php echo base_url('bootstrap/img/cat/img3.jpg'); ?>" alt="New York" style="width: 100%;">
      <div class="carousel-caption">
        <h3>New York</h3>
        <p>We love the Big Apple!</p>
      </div>
    </div>
  </div>

  <!-- Left and right controls -->
  <a class="left carousel-control" href="#myCarousel" data-slide="prev">
    <span class="glyphicon glyphicon-chevron-left"></span>
    <span class="sr-only">Previous</span>
  </a>
  <a class="right carousel-control" href="#myCarousel" data-slide="next">
    <span class="glyphicon glyphicon-chevron-right"></span>
    <span class="sr-only">Next</span>
  </a>
  <br />
</div>
</div>
</div>
</div>
</div>

<div>
<!-- Second Parallax -->
  <div class="parallax3" style="padding-left: 40px;">
    <br /><br /><br />
    
    <div class="container">
    <div class="row">
    <h3 id="h41"> Recipe for the day </h3>
        <div class="row"> 
            <div class="col-xs-12 col-md-2"> 
      <div class="wow bounceInUp" data-wow-delay="0.3s"> 
      <div class="team boxed-grey"> 
            <img src="<?php echo base_url('bootstrap/img/cat/lambcurry.jpg'); ?>" alt="Kare Kare" style="width:100%">
            <h5>Dish</h5>
            <p class="title">Home-Style Lamb Curry</p>    
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
    
    
    </div>
    </div>
    </div>
</div>
  <!-- /Section: Categories -->

