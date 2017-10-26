<div id="main" style="margin-left: 200px; padding-top: 50px;">
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section id="dashboard" class="content-header">
      <h3>
        <b>Orders</b>
      </h3>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
        <li class="active">List of Orders</li>
      </ol>
  
  <div>
	<table class="table">
		<thead>
			<tr>
				<th><center>Order ID</center></th>
				<th><center>Email</center></th>
				<th><center>Cart</center></th>
				<th><center>Date</center></th>
				<th><center>Total Bill</center></th>
				<th><center>Action</center></th>
			</tr>
		</thead>
		<tbody>
			<?php foreach($orders as $row): ?>		
			<tr>
				<td><center><?php echo $row['order_id']; ?></center></td>
				<td><center><?php echo $row['email']; ?></center></td>
				<td>
					<table class="table table-hover">
						<thead>
							<tr>
								<th>Recipe ID</th>
								<th>Recipe</th>
								<th>Quantity</th>
							</tr>
						</thead>
						<?php $json = json_decode($row['cart'], true); ?>
						<?php foreach($json as $key => $val): ?>
						<tbody>	
							<tr>
								<center>
							<?php foreach($val as $v): ?>
								<td><?php echo $v ?></td>
							<?php endforeach; ?>
						</center>
							</tr>
						<?php endforeach; ?>
						</tbody>
					</table>
				</td>
				<td><center><?php echo $row['date']; ?></center></td>
				<td><center>P <?php echo $row['total_bill']; ?></center></td>
				<td><center><a href="">Accept |</a>&nbsp;<a href="<?php echo base_url('Transaction/cancelOrder/'.$row['order_id']);?>" >Cancel</a></center></td>
			</tr>
			<?php endforeach; ?>
		</tbody>
	</table>
	
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
