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
				<th>Order ID</th>
				<th>Email</th>
				<th>Cart</th>
				<th>Date</th>
				<th>Total Bill</th>
				<th>Action</th>
			</tr>
		</thead>
		<tbody>
			<?php foreach($orders as $row): ?>		
			<tr>
				<td><?php echo $row['order_id']; ?></td>
				<td><?php echo $row['email']; ?></td>
				<td>
					<table class="table table-hover">
						<thead>
							<tr>
								<th>Recipe ID</th>
								<th>Recipe</th>
								<th>Quantity<th></th>
							</tr>
						</thead>
						<?php $json = json_decode($row['cart'], true); ?>
						<?php foreach($json as $key => $val): ?>
						<tbody>	
							<tr>
							<?php foreach($val as $v): ?>
								<td><?php echo $v ?></td>
							<?php endforeach; ?>
							</tr>
						<?php endforeach; ?>
						</tbody>
					</table>
				</td>
				<td><?php echo $row['date']; ?></td>
				<td>P <?php echo $row['total_bill']; ?></td>
				<td><a href="">Accept</a>&nbsp;<a href="<?php echo base_url('Transaction/cancelOrder/'.$row['order_id']);?>" >Cancel</a>
			</tr>
			<?php endforeach; ?>
		</tbody>
	</table>
	<form action ="<?php echo base_url('Mainpage/Admin/'); ?>">
	<p><input type="submit" value="Back" /></p>
	</form>
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
