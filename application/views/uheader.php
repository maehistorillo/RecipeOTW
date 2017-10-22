<!DOCTYPE html>
<html lang="en">
<html>
<head>

	<title><?php echo $title; ?></title>

<meta charset="utf-8">
<meta name="viewport" content="width=device-width; initial-scale=1.0" />
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
<body>

<nav class="navbar navbar-default navbar-fixed-top">
		<div class="container-fluid" style="background-color: #351e24;">
    <!-- Brand and toggle get grouped for better mobile display -->
    <div class="col-md-12">
      <div class="col-md-4">
    <div class="navbar-header" >
      <button type="button" class="navbar-toggle collapsed"  data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
        <span class="sr-only">Toggle navigation</span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
      <!-- <a class="navbar-brand" href="#">Brand</a> -->
    </div>
    <div class="navbar-header">
      <a class="navbar-brand" href="<?php echo base_url('Mainpage/Home'); ?>" style="color:#fff;">RECIPE ON THE WAY</a>
    </div>
  </div>

    <!-- Collect the nav links, forms, and other content for toggling -->

    <div class="col-md-4">
    <form action="<?php echo base_url('User/Client/'); ?>" method="post" class="sidebar-form" style="padding-top: 8px;">
        <div class="input-group" style="width:100%;">
          <input type="text" name="search" class="form-control" placeholder="Search...">
              <span class="input-group-btn">
                <button type="submit" value="submit" id="search-btn" class="btn btn-flat"><i class="fa fa-search"></i>
                </button>
              </span>
        </div>
      </form>
      </div>     

<div class="col-md-4">
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
</div>
</div>

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

.intro {
  width:100%;
  position:relative;
  background: url(../img/bg1.jpg) no-repeat top center;

}

#intro.intro {
  padding:15% 0 0 0;
}

.sidenav {

    height: 100%;
    width: 50%;
    position: fixed;
    top: 0;
    left: 0;
    background-color: #351e24 ;
    padding-top: 90px;
}

.sidenav i {
    font-size: 35px;
     
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
    color: #f1f1f1;
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

<div id="mySidenav" class="sidenav nav" style="width: 80px;">

        
          <a data-toggle="tooltip" title="Dashboard" href="<?php echo base_url('Mainpage/Admin') ?>">
            <img src="<?php echo base_url('bootstrap/img/icons/logo5.png'); ?>" style="width: 100%;" />
          </a>
    
          <a href="#collapse1" data-toggle="tooltip" title="Categories">
            <i class="fa fa-book"></i>
          </a>
          
        
          <a href="#" data-toggle="tooltip" title="Categories">
            <i class="fa fa-list"></i>
          </a>
        
          <a href="#" data-toggle="tooltip" title="Categories">
            <i class="fa fa-user"></i>
          </a>
        
          <a href="#" data-toggle="tooltip" title="Categories">
            <i class="fa fa-book"></i>
          </a>
        
</div>
<script>
  $(document).ready(function(){
    $('[data-toggle="tooltip"]').tooltip();
  });
  }
</script>