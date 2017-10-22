<!DOCTYPE html>
<html lang="en">
<html>
<head>
	<title><?php echo $title; ?></title>
	
	<link rel="icon" href="<?php echo base_url('bootstrap/img/icons/logo3.png'); ?>" type="image/png" />
	<link rel="shortcut icon" href="<?php echo base_url('bootstrap/img/icons/logo3.png'); ?>" type="img/x-icon" />  


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
      <a class="navbar-brand" href="<?php echo base_url('Mainpage/Home');?>" style="color:#fff;">ROTW Admin</a>
    </div>

    <!-- Collect the nav links, forms, and other content for toggling -->
    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">      

      <ul class="nav navbar-nav navbar-right">        

        <li class="dropdown" id="navSetting">
          <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false" style="color: #fff;"> <i class="glyphicon glyphicon-user"></i> <span class="caret"></span></a>
          <ul class="dropdown-menu">                      
            <li id="topNavLogout"><a href="<?php echo base_url('Mainpage/Logout'); ?>"> <i class="glyphicon glyphicon-log-out"></i> Logout</a></li>            
          </ul>
        </li>           
      </ul>
    </div><!-- /.navbar-collapse -->
  </div><!-- /.container-fluid -->
	</nav>

<div class="container">
<div class="col-md-12">
<style type="text/css">
  .ui-datepicker-calendar {
    display: none;
  }
  <style>
body {
    font-family: "Lato", sans-serif;
}

.sidenav {
    height: 100%;
    width: 0;
    position: fixed;
    z-index: 1;
    top: 0;
    left: 0;
    background-color: #351e24;
    overflow-x: hidden;
    transition: 0.5s;
    padding-top: 50px;
}

.sidenav a {
    padding: 8px 8px 8px 32px;
    text-decoration: none;
    font-size: 16px;
    color: #fff;
    display: block;
    transition: 0.3s;
}

.sidenav a:hover {
    color: #fff;
}

.sidenav .closebtn {
    position: absolute;
    top: 0;
    right: 25px;
    font-size: 36px;
    margin-down: 50px;
}

#main {
    transition: margin-down .5s;
    padding-right: 100px;
}

@media screen and (max-height: 450px) {
  .sidenav {padding-top: 15px;}
  .sidenav a {font-size: 18px;}
}
</style>

<div id="mySidenav" class="sidenav" style="width: 250px;">

        <li class="treeview" style="padding-top:30px;">
          <a href="<?php echo base_url('User/Admin/') ?>">
            <i class="fa fa-dashboard"></i> <span>Dashboard</span>
          </a>
        </li>
       <li class="treeview" id="accordion" style="padding-top:20px;">
          <a href="#collapse1" data-toggle="collapse" data-parent="#accordion">
            <i class="fa fa-book"></i>
            <span>Recipe</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-down pull-right"></i>
            </span>
          </a>
          <ul class="treeview-collapse collapse" id="collapse1" >
           <a href="<?php echo base_url('User/AddRecipe'); ?>" ><i class="fa fa-plus"></i> Add Recipe </a>
           <a href="<?php echo base_url('User/ManageRecipe'); ?>"><i class="fa fa-edit "></i> Manage Recipe</a>
            
          </ul>
        </li>
        <li class="treeview" style="padding-top:20px;">
          <a href="#collapse3"  data-toggle="collapse" data-parent="#accordion">
            <i class="fa fa-user"></i>
            <span>Users</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-down pull-right"></i>
            </span>
          </a>
          <ul class="treeview-collapse collapse " id="collapse3" >
           <a href="<?php echo base_url('User/ViewUsers/'); ?>" ><i class="fa fa-edit "></i> Manage Users</a>
            
          </ul>
        </li>
       <li class="treeview" style="padding-top:20px;">
          <a href="#collapse4"  data-toggle="collapse" data-parent="#accordion">
            <i class="fa fa-book"></i>
            <span>Orders</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-down pull-right"></i>
            </span>
          </a>
          <ul class="treeview-collapse collapse " id="collapse4" >
           <a href="<?php echo base_url('Transaction/ListOrders/'); ?>" ><i class="fa fa-edit "></i> Manage Orders</a>
            
          </ul>
        </li>
        
</div>