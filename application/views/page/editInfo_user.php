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
  font-size: 18px;
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
    font-size: 12px;
    line-height: 1.6em;
        font-family: Lato Light, Montserrat;

}

p.lead {

  font-weight: 600;
  font

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
    height: 150%; 

    /* Create the parallax scrolling effect */
    background-attachment: fixed;
    background-position: center;
    background-repeat: no-repeat;
    background-size: cover;

}
  .sidenav {
    height: 100%;
    width: 70px;
    position: fixed;
    z-index: 1;
    top: 0;
    left: 0;
    background-color: #111;
    padding-top: 150px;
}

.sidenav a {

    text-decoration: none;
    font-size: 16px;
    color: #818181;
    display: ;
}

.sidenav i{
      padding: 2px 2px 2px 15px;
      font-size: 35px;
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

<div class="parallax3 col-md-12">

<div class="sidenav">

          <a data-toggle="tooltip" title="Recipe" href="<?php echo base_url('Mainpage/Admin') ?>">
            <img src="<?php echo base_url('bootstrap/img/icons/logo5.png'); ?>" style="padding: 2px 2px 2px 9px; width: 80%;" />
          </a>
          <br /><br />

          <a href="#collapse1" data-toggle="tooltip" title="Featured Recipe">
            <i class="fa fa-book"></i>
          </a>
          <br /><br />
        
          <a href="<?php echo base_url(''); ?>" data-toggle="tooltip" title="Categories">
            <i class="fa fa-list"></i>
          </a>
          <br /><br />

          <a href="<?php echo base_url('Mainpage/Cart'); ?>" data-toggle="tooltip" title="Cart">
            <i class="glyphicon glyphicon-shopping-cart"></i>
          </a>
          <br /><br />

          <a href="<?php echo base_url('Mainpage/SettingClient'); ?>" data-toggle="tooltip" title="Setting">
            <i class="fa fa-gear"></i>
          </a>


</div>

<!-- Second Parallax -->

  <div class="container" style="padding-top: 100px;">
		<div class="col-md-12">
			<div class="row" >
					
				<h4><b> Setting > </b><b>Information > </b> <a href="">Security</a> ></h4>
				</div>
			<div class="col-md-4">
					<img src="<?php echo base_url('bootstrap/img/team/1.jpg'); ?>" style="width: 250px;"  class="img-circle img-responsive">
					<form class="form-horizontal" action="<?php echo base_url('Mainpage/submitDP'); ?>" method="post" id="changeDPForm">
					<div class="form-group">	
					    	<div class="kv-avatar center-block">
					    	<br />
					        <input type="file" class="form-control" id="recipeImage" placeholder="Recipe Name" name="recipeimg" class="file-loading" style="width:240px;"/>
					        <br />
					        <button style="background-color: #351e24; width: 100%; "><i class="fa fa-edit"> Upload </i></button>
					    </div>  
				    </div>
	        		</form>
					</div>


				<div class="col-md-4">
				<div class="row">

				<h5><b> Information </b></h5><button  style="background-color: #351e24; width: 40%;"><i class="fa fa-edit"> Update </i></button> <br /> <br />
				<form>
				<p style="padding-left: 40px;">Name: <input type="text" class="form-control" placeholder="Surname, Firstname, MI"></p>
				<p style="padding-left: 40px;">Birthdate: <input type="date" name="birthdate" id="birthdate" class="form-control"></p>
				<p style="padding-left: 40px;">Contact #: <input type="num" name="birthdate" id="birthdate" class="form-control"></p>
				<p style="padding-left: 40px;">Address: <textarearows="3" required class="form-control" id="address" name="address" placeholder="Address"></textarea></p>
				

				</div>
				</div>
				</form>

				<div class="col-md-4">
				<div class="row">

				<h5><b> Security </b> </h5><button  style="background-color: #351e24; width: 40%;"><i class="fa fa-edit"> Update </i></button> <br /> <br />
				<p style="padding-left: 40px;">Email:</p>
				</div>
				</div>
			
		</div>
	</div>
</div>
</div>
</div>