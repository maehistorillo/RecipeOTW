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

a{
    color: #fff;
    font-size: 16px;
    -webkit-transition: all .2s ease-in-out;
    -moz-transition: all .2s ease-in-out;
    transition: all .2s ease-in-out;
}

a:hover,
a:focus {
    text-decoration: none;
    color: #fff;
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
			<div class="row" >
        <h2><b style="color: white;">&nbsp;&nbsp;&nbsp;Profile  </b> </h2><br /><br /><br />
        <div class="col-md-3" style="padd">

          

        <?php foreach($data as $row): ?>
					
					<img src="<?php echo base_url('bootstrap/img/team/1.jpg'); ?>" style="width: 250px;"  class="img-circle img-responsive">

          <p style="text-align: center; font-size: 25px;"><b><?php echo'<span style="color:#fff"> '.$row['firstname'].' '.$row['surname'].'</span>';?></b></p><br />
					
					</div>



				<div class="col-md-5">
				<div class="row" style="margin-left: 50px;">
				<?php foreach($data as $row): ?>
				<h4><b style="color: white;"> Information </b></h4><button  href="<?php echo base_url('Mainpage/SettingClient') ?>" style="background-color: #351e24; width: 30%; color: white;"><i class="fa fa-edit"> Update </i></button> <br /> <br />
			
        <p style="color: gray; font-size: 20px;">Name:&nbsp;<?php echo'<span style="color:#fff"> '.$row['firstname'].' '.$row['surname'].'</span>';?></p>
				<p style="color: gray; font-size: 20px;">Address:&nbsp;<?php echo'<span style="color:#fff"> '.$row['address'].'</span>';?></p>
				<p style="color: gray; font-size: 20px;">City:&nbsp;<?php echo'<span style="color:#fff"> '.$row['city'].'</span>';?></p>
			  <p style="color: gray; font-size: 20px;">Balance:&nbsp;<?php echo'<span style="color:#fff"> '.$row['balance'].'</span>';?></p>
        <p style="color: gray; font-size: 20px;">Email:&nbsp;<?php echo'<span style="color:#fff">'.$row['email'].'</span>'; ?></p>

        </div>
				</div>
        <?php endforeach; ?>

				
				<?php endforeach; ?>
			
		</div>
	</div>
</div>
</div>
</div>