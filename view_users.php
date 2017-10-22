<link rel="stylesheet" type="text/css" href="<?php echo base_url('bootstrap/css/tablesort.css');?>">
<link rel="stylesheet" type="text/css" href="<?php echo base_url('bootstrap/css/sortstyles.css');?>">

<div id="main" style="margin-left: 200px; padding-top: 50px;">
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section id="dashboard" class="content-header">
      <h3>
        <b>Users</b>
      </h3>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
        <li class="active">Manage Users</li>
      </ol>
  
  <div>
	<table class="table-sort table-sort-search table-sort-show-search-count">
		<thead>
			<tr>
				<th class="table-sort">Email    </th>
				<th class="table-sort">Name     </th>
				<th>Address</th>	
				<th>Action</th>		
			</tr>
		</thead>

		<script type="text/javascript" src="http://code.jquery.com/jquery-1.10.1.min.js"></script> 
<script src="http://yandex.st/highlightjs/7.3/highlight.min.js"></script> 
<script type="text/javascript" src="<?php echo base_url('bootstrap/js/tablesort.js');?>"></script> 
<script type="text/javascript">
            // For Demo Purposes
            $(function () {
                $('table.table-sort').tablesort();
                hljs.initHighlightingOnLoad(); // Syntax Hilighting
            });
        </script>

		<tbody>
			<?php 
				
				foreach($users as $row) {
					
					
					echo '<tr>
							
							<td>'.$row['email'].'</td>			
							<td>'.$row['firstname'].' '.$row['surname'].'</td>						
							<td>'.$row['address'].'</td>
							<td><a href="'.base_url('User/delUser/'.$row['email']).'">Delete</a></td>
					</tr>';
				}
			?>
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
