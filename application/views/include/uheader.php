
<div id="preloader">
    <div id="load"></div>
  </div>

	<nav class="navbar navbar-default navbar-static-top">
		<div class="container" style="background-color: #351e24;">
    <!-- Brand and toggle get grouped for better mobile display -->
    <div class="navbar-header" >
      <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
        <span class="sr-only">Toggle navigation</span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
      <!-- <a class="navbar-brand" href="#">Brand</a> -->
	  <?php
		$name = $this->session->userdata('username');
	  ?>
	  
    </div>
    <div class="navbar-header">
      <a class="navbar-brand" href="#">ROTW Welcome <?php echo $name ?></a>
    </div>
	
	</div>
    </div>

    <!-- Collect the nav links, forms, and other content for toggling -->
    <div class="container-fluid">
    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">      
      <ul class="nav navbar-nav navbar-right">        

      	<li id="navDashboard"><a href="<?php echo base_url('Mainpage/Home'); ?>">  Home</a></li>        
        
        <li id="navBrand"><a href="<?php echo base_url('Mainpage/listRecipe/'); ?>"><i class="glyphicon glyphicon-list-alt"></i>  Recipe</a></li>        

        <li id="navCategories"><a href="<?php echo base_url('Mainpage/viewUsers'); ?>"> <i class="glyphicon glyphicon-th-list"></i> Users</a></li>   

        <li class="dropdown" id="navOrder">
          <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"> <i class="glyphicon glyphicon-shopping-cart"></i> Orders </a>
          <ul class="dropdown-menu">            
            <li id="topNavAddOrder"><a href="orders.php?o=add"> <i class="glyphicon glyphicon-plus"></i> Add Orders</a></li>            
            <li id="topNavManageOrder"><a href="<?php echo base_url('..mainpage/admin/orders.php?o=manord'); ?>"> <i class="glyphicon glyphicon-edit"></i> Manage Orders</a></li>            
          </ul>
        </li> 


        <li class="dropdown" id="navSetting">
          <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"> <i class="glyphicon glyphicon-user"></i> <span class="caret"></span></a>
          <ul class="dropdown-menu">            
            <li id="topNavSetting"><a href="<?php echo base_url('Mainpage/Setting'); ?>"> <i class="glyphicon glyphicon-wrench"></i> Setting</a></li>            
            <li id="topNavLogout"><a href="<?php echo base_url('Mainpage/Logout'); ?>"> <i class="glyphicon glyphicon-log-out"></i> Logout</a></li>
          </ul>
        </li>        
               
      </ul>
    </div>
  </div><!-- /.navbar-collapse -->
  </div><!-- /.container-fluid -->
	</nav>
<!-- Preloader -->

