<!DOCTYPE html>
<html lang="en">
<html>
<head>
	<title><?php echo $title; ?></title>

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
<body>

<nav class="navbar navbar-default navbar-static-top">
		<div class="container">
    <!-- Brand and toggle get grouped for better mobile display -->
    <div class="navbar-header">
      <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
        <span class="sr-only">Toggle navigation</span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
      <!-- <a class="navbar-brand" href="#">Brand</a> -->
    </div>
    <div class="navbar-header">
      <a class="navbar-brand" href="#">ROTW Welcome admin!</a>
    </div>

    <!-- Collect the nav links, forms, and other content for toggling -->
    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">      

      <ul class="nav navbar-nav navbar-right">        

      	<li id="navDashboard"><a href="<?php echo base_url('Mainpage/Admin'); ?>">  Dashboard</a></li>        
        
        <li id="navBrand"><a href="<?php echo base_url('Mainpage/AdminRecipe'); ?>"><i class="glyphicon glyphicon-list-alt"></i>  Recipe</a></li>        

        <li id="navCategories"><a href="<?php echo base_url('Mainpage/AdminCategory'); ?>"> <i class="glyphicon glyphicon-th-list"></i> Category</a></li>   

        <li class="dropdown" id="navOrder">
          <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"> <i class="glyphicon glyphicon-shopping-cart"></i> Orders <span class="caret"></span></a>
          <ul class="dropdown-menu">            
            <li id="topNavAddOrder"><a href="orders.php?o=add"> <i class="glyphicon glyphicon-plus"></i> Add Orders</a></li>            
            <li id="topNavManageOrder"><a href="<?php echo base_url('..mainpage/admin/orders.php?o=manord'); ?>"> <i class="glyphicon glyphicon-edit"></i> Manage Orders</a></li>            
          </ul>
        </li> 
        <li class="dropdown" id="navSetting">
          <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"> <i class="glyphicon glyphicon-user"></i> <span class="caret"></span></a>
          <ul class="dropdown-menu">            
            <li id="topNavSetting"><a href="<?php echo base_url('..mainpage/admin/setting.php'); ?>"> <i class="glyphicon glyphicon-wrench"></i> Setting</a></li>            
            <li id="topNavLogout"><a href="<?php echo base_url('..mainpage/admin/logout.php'); ?>"> <i class="glyphicon glyphicon-log-out"></i> Logout</a></li>            
          </ul>
        </li>        
               
      </ul>
    </div><!-- /.navbar-collapse -->
  </div><!-- /.container-fluid -->
	</nav>