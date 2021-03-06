<style>

body {
    width: 100%;
    height: 100%;
    font-family: 'Lato',sans-serif;
    font-weight: 300;
    color: #fff;
    background-color: #fff;
    overflow: hidden;
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
	color: #fff;
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

        <a data-toggle="tooltip" title="All Recipe" href="<?php echo base_url('User/Client') ?>">
            <img src="<?php echo base_url('bootstrap/img/icons/logo5.png'); ?>" style="padding: 2px 2px 2px 9px; width: 80%;" />
          </a>
          <br /><br />


          <a href="<?php echo base_url('User/ProfileClient'); ?>" data-toggle="tooltip" title="Profile">
            <i class="fa fa-user"></i>
          </a>

          <br /><br />

          <a href="<?php echo base_url('User/SettingClient'); ?>" data-toggle="tooltip" title="Setting">
            <i class="fa fa-gear"></i>
          </a>

</div>

<!-- Second Parallax -->

  <div class="container" style="padding-top: 100px;">
		<div class="col-md-12">
			<div class="row" style="">
					
				<h2><b style="color: gray;">Setting &nbsp;&nbsp;/</b><b style="color: white;">&nbsp;&nbsp;&nbsp;Information  </b> </h2>
				</div>

			<div class="col-md-3" style="padding-top: 10px;">
					<div class="form-group">	
					    	<div class="kv-avatar center-block">
                    <img src="<?php echo base_url('bootstrap/img/team/1.jpg'); ?>" style="width: 250px;"  class="img-circle img-responsive">
					    	<br />

					        <input type="file" class="form-control" id="userimg" placeholder="Recipe Name" name="userimg="file-loading" style="width:210px; margin-left: 35px;"/>
					        <br />
					        <button style="background-color: #351e24; width: 50%; margin-left: 70px; color: white;"><i class="fa fa-edit"> Upload </i></button>
					    </div>  
				    </div>
	        		</form>
					</div>


				<div class="col-md-5">
				<div class="row" style="margin-left: 50px;">
		
			<form class="form-horizontal" action="<?php echo base_url('User/SubmitProfile'); ?>" method="post" id="loginForm">
			<h4><b style="color: white;"> Information </b></h4><button  style="background-color: #351e24; width: 30%; color: white;"><i class="fa fa-edit"> Update </i></button> <br /> <br />

        <label style="color: gray; font-size: 20px;"> Firstname: </label> <input type="text" class="form-control" id="recipename" name="recipename" placeholder="firstname" autocomplete="off" required/>
        <label style="color: gray; font-size: 20px;"> Lastname: </label> <input type="text" class="form-control" id="recipename" name="recipename" placeholder="lastname" autocomplete="off" required/>
        
				<label style="color: gray; font-size: 20px;">Address: </label><textarea rows="3" required class="form-control" id="procedure" name="streetadd"Address"></textarea>
				<label style="color: gray; font-size: 20px;">City: </label><input type="text" class="form-control" id="recipename" name="cityadd" placeholder="City" autocomplete="off" required/>
			  <label style="color: gray; font-size: 20px;">Phone Number: </label><input type="text" class="form-control" id="recipename" name="contactno" placeholder="Name" autocomplete="off" required/>
        </form>
        </div>
				</div>

			
		</div>
	</div>
</div>
</div>
</div>