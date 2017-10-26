<!DOCTYPE html>
<html lang="en">
<html>
<head>

	<title><?php echo $title; ?></title>

<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0" />
<meta name="author" content="Mema" />
<meta name="description" content="The description of website" />

	<!-- bootstrap -->
	<link rel="stylesheet" href="<?php echo base_url('bootstrap/assests/bootstrap/css/bootstrap.min.css'); ?>">
	<!-- bootstrap theme-->
	<link rel="stylesheet" href="<?php echo base_url('bootstrap/assests/bootstrap/css/bootstrap-theme.min.css'); ?>">
	<!-- font awesome -->
	<link rel="stylesheet" href="<?php echo base_url('bootstrap/assests/font-awesome/css/font-awesome.min.css'); ?>">

 	 <!-- custom css -->
 	 <link rel="stylesheet" href="<?php echo base_url('bootstrap/custom/css/custom.css'); ?>">	

 	 <!-- jquery -->
	<script src="<?php echo base_url('bootstrap/assests/jquery/jquery.min.js'); ?>"></script>
 	 <!-- jquery ui -->  
	<link rel="stylesheet" href="<?php echo base_url('bootstrap/assests/jquery-ui/jquery-ui.min.css'); ?>">
	<script src="<?php echo base_url('bootstrap/assests/jquery-ui/jquery-ui.min.js'); ?>"></script>

  <!-- bootstrap js -->
	<script src="<?php echo base_url('bootstrap/assests/bootstrap/js/bootstrap.min.js'); ?>"></script>
</head>
<style> 
input[type=text] {
    width: 170px;
    box-sizing: border-box;
    border: 1px solid #ccc;
    border-radius: 2px;
    font-size: 16px;
    background-color: white;
    background-image: url<?php echo base_url('bootstrap/img/icons/searchicon.png');?>
    background-position: 10px 10px; 
    background-repeat: no-repeat;
    padding: 10px 20px 10px 40px;
    -webkit-transition: width 0.4s ease-in-out;
    transition: width 0.4s ease-in-out;
}

input[type=text]:focus {
    width: 100%;
}
</style>
<body>
<nav class="navbar navbar-fixed-top">
    <div class="container-fluid" style="background-color: #351e24;">
    <!-- Brand and toggle get grouped for better mobile display -->
    <div class="navbar-header" >
      <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
        <span class="sr-only">Toggle navigation</span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
      <!-- <a class="navbar-brand" href="#">Brand</a> -->
    </div>
    <div class="navbar-header">
      <a class="navbar-brand" href="<?php echo base_url('Mainpage/Home');?>" style="color:#fff;">RECIPE ON THE WAY</a>
    </div>
    <!-- Collect the nav links, forms, and other content for toggling -->
    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">      

      <ul class="nav navbar-nav navbar-right">  
      <li><input style="color: maroon; margin: 5px;" type="text" name="search" placeholder="Search.."></li>      

        <li class="dropdown" id="navSetting" style="padding-top: 1px;">
          <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false" style="color: #fff;"> <i class="glyphicon glyphicon-user"></i> <span class="caret"></span></a>
          <ul class="dropdown-menu">            
		  <?php if(!empty($user)){
			  echo'
		  <li id="topNavLogout"><a href="'.base_url('Mainpage/Logout').'"> <i class="glyphicon glyphicon-log-out"></i> Logout</a></li>       ';
			}
			else
			{
			  echo'
		  <li id="topNavLogout"><a href="'.base_url('Mainpage/Login').'"> <i class="glyphicon glyphicon-log-out"></i> Login</a></li>       ';
			}
			?>
          </ul>
        </li>             
      </ul>
    </div><!-- /.navbar-collapse -->
  </div><!-- /.container-fluid -->
  </nav>
  
