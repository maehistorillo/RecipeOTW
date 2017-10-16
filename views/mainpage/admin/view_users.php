<html>
<head>
	<h1>List of Accounts</h1>
</head>
<body>
	<table>
		<thead>
			<tr>
				<th>Username    </th>
				<th>Email    </th>
				<th>Name     </th>
				<th>Birthdate</th>
				<th>Address</th>	
				<th> </th>	
			</tr>
		</thead>
		<tbody>
			<?php
				foreach($users as $row) {
					echo '<tr>
							<td>'.$row['username'].'</td>
							<td>'.$row['email'].'</td>			
							<td>'.$row['firstname'].' '.$row['miname'].' '.$row['surname'].'</td>						
							<td>'.$row['birthdate'].'</td>
							<td>'.$row['address'].'</td>
							<td><a href="'.base_url('Mainpage/delUser/'.$row['username']).'">Delete</a></td>
					</tr>';
				}
			?>
		</tbody>
	</table>
	<form action ="<?php echo base_url('Mainpage/Admin/'); ?>">
	<p><input type="submit" value="Back" /></p>
	</form>
</body>
</html>