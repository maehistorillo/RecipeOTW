<div id="main" style="margin-left: 200px; padding-top: 50px;">
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section id="dashboard" class="content-header">
      <h3>
	  <?php $counter = 0;
	  foreach($count as $row){
		  
		  $counter++;
	  }
	  ?>
        <b>Dashboard</b>
        <small>Control panel</small>
      </h3>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
        <li class="active">Dashboard</li>
      </ol>
          <section class="content">
      <!-- Small boxes (Stat box) -->
      <div class="row">
        <div class="col-lg-3 col-xs-6">
          <!-- small box -->
          <div class="team boxed-grey">
            <div class="inner">
              <h3><?php echo $counter ?></h3>

              <p>Pending Orders</p>
            </div>
           </div>
        </div>
        <!-- ./col -->
        <div class="col-lg-3 col-xs-6">
          <!-- small box -->
          <div class="small-box bg-green">
            <div class="inner">
              <h3><?php echo $counter ?><sup style="font-size: 20px">%</sup></h3>

              <p>Bounce Rate</p>
            </div>
          </div>
        </div>
        <!-- ./col -->
        <div class="col-lg-3 col-xs-6">
          <!-- small box -->
          <div class="small-box bg-yellow">
            <div class="inner">
              <h3>44</h3>

              <p>User Registrations</p>
            </div>
          </div>
        </div>
        <!-- ./col -->
        <div class="col-lg-3 col-xs-6">
          <!-- small box -->
          <div class="small-box bg-red">
            <div class="inner">
              <h3>65</h3>

              <p>Unique Visitors</p>
            </div>
          </div>
        </div>
        <!-- ./col -->
      </div>
      <!-- /.row -->
      <!-- Main row -->
    </section>
	<div>
	
	</div>
	
	

  <div class="row">
  <div class="col-md-8">
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


  </div>

  
</div> <!--/row-->
</div>


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
