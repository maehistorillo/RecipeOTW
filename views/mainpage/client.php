<?php
	
	foreach($usercred as $row){ 
		$save = $row['usercred']; 
	}
		if($save == 0){
			redirect(base_url('Mainpage/Client'));
		}
		else{
			redirect(base_url('Mainpage/Admin'));
		}
		
?>