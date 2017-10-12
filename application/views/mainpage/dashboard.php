
<div id="preloader">
    <div id="load"></div>
  </div>

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
	  <?php
		$name = $this->session->userdata('username');
	  ?>
	  
    </div>
    <div class="navbar-header">
      <a class="navbar-brand" href="#">ROTW Welcome <?php echo $name ?></a>
    </div>
	
	</div>
      <form action = "<?php echo base_url('Mainpage/insertRecipe/'); ?>" method = "post">
	
	
	<button type="submit">Insert Recipe</button>
	</form>
	
	<form action = "<?php echo base_url('Mainpage/listRecipe/'); ?>" method = "post">
	
	
	<button type="submit">View Recipe</button>
	</form>
	
	<form action = "<?php echo base_url('Mainpage/viewUsers/'); ?>" method = "post">
	
	
	<button type="submit">View List of Users</button>
	</form>
	
	
    </div>

    <!-- Collect the nav links, forms, and other content for toggling -->
    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">      

      <ul class="nav navbar-nav navbar-right">        

      	<li id="navDashboard"><a href="<?php echo base_url('Mainpage/Home'); ?>">  Home</a></li>        
        
        <li id="navBrand"><a href="<?php echo base_url('Mainpage/ARecipe'); ?>"><i class="glyphicon glyphicon-list-alt"></i>  Recipe</a></li>        

        <li id="navCategories"><a href="<?php echo base_url('Mainpage/Category'); ?>"> <i class="glyphicon glyphicon-th-list"></i> Category</a></li>   

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
            <li id="topNavLogout"><a href="<?php echo base_url('Mainpage/Logout'); ?>"> <i class="glyphicon glyphicon-log-out"></i> Logout</a></li>
          </ul>
        </li>        
               
      </ul>
    </div><!-- /.navbar-collapse -->
  </div><!-- /.container-fluid -->
	</nav>
<!-- Preloader -->



<div class="container">
<style type="text/css">
	.ui-datepicker-calendar {
		display: none;
	}
</style>

<!-- fullCalendar 2.2.5-->
    <link rel="stylesheet" href="<?php echo base_url('bootstrap/assets/plugins/fullcalendar/fullcalendar.min.css') ?>">
    <link rel="stylesheet" href="<?php echo base_url('bootstrap/assets/plugins/fullcalendar/fullcalendar.print.css') ?>" media="print">


<div class="row">
	<div class="col-md-4">
		<div class="card">
		  <div class="cardHeader">
		    <h1><?php echo date('d'); ?></h1>
		  </div>

		  <div class="cardContainer">
		    <p><?php echo date('l') .' '.date('d').', '.date('Y'); ?></p>
		  </div>
		</div> 
		<br/>
		</div> 



	<div class="col-md-8">
		<div class="panel panel-default">
			<div class="panel-heading"> <i class="glyphicon glyphicon-calendar"></i> Calendar</div>
			<div class="panel-body">
				<div id="calendar"></div>
			</div>	
		</div>
		
	</div>

	
</div> <!--/row-->


<!-- fullCalendar 2.2.5 -->
<script src="<?php echo base_url('bootstrap/assests/plugins/moment/moment.min.js'); ?>"></script>
<script src="<?php echo base_url('bootstrap/assests/plugins/fullcalendar/fullcalendar.min.js'); ?>"></script>


<script type="text/javascript">
	$(function () {
			// top bar active
	$('#navDashboard').addClass('active');

      //Date for the calendar events (dummy data)
      var date = new Date();
      var d = date.getDate(),
      m = date.getMonth(),
      y = date.getFullYear();

      $('#calendar').fullCalendar({
        header: {
          left: '',
          center: 'title'
        },
        buttonText: {
          today: 'today',
          month: 'month'          
        }        
      });


    });
</script>
</section>
