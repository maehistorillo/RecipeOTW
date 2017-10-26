<?php

class Users_model extends CI_Model {
	
	
	public function signup($email,$password,$balance,$surname,$firstname,$usercred) {		
		$sql = 'INSERT INTO users VALUES ("'.$email.'","'.$password.'","'.$balance.'","'.$surname.'","'.$firstname.'","'.$usercred.'")';
		//echo $sql;
		return $this->db->simple_query($sql);
	}
	
	public function signup2($email, $userimg, $contactno, $streetadd, $cityadd, $region){
		$sql = 'INSERT INTO users2 VALUES ("'.$email.'","'.$userimg.'","'.$streetadd.'","'.$cityadd.'","'.$region.'","'.$contactno.'")';
		echo $sql;
		return $this->db->simple_query($sql);
	}
	
	public function updateprofile($email,$password,$balance,$usercred,$surname,$firstname,$address,$city,$pnumber){
		$sql = 'UPDATE users set email = '.$email.', password = '.$password.', balance = '.$balance.', usercred = '.$usercred.', surname = '.$surname.', firstname = '.$firstname.', address = '.$address.', city = '.$city.', pnumber = '.$pnumber.' where email = '.$email.'';
		return $this->db->simple_query($sql);
		
	}
	
	public function login($email, $password) {
		
		$sql = 'SELECT * FROM users WHERE email = "'.$email.'" and password = "'.$password.'"';
		$query = $this->db->query($sql);
		$ok = false;
		$userdata = [];
		foreach($query->result() as $row){
			$ok2 = true;
			$q = $this->db->query('SELECT * from users2 where email = "'.$email.'"');
			foreach($q->result() as $row2){
				$userdata = array('email' => $row->email, 'contactno' => $row2->contactno,'logged_in' => true);
				$ok2 = false;
			}
			if($ok2){
				$userdata = array('email' => $row->email,'logged_in' => true);
			}
			$ok = true;
		}
		if($ok){		
			$this->session->set_userdata('email', $_POST['email'],'usercred',$_POST['usercred']);
			redirect(base_url('Mainpage/User'));
		}
		else{
			echo "Invalid email or password";
		}
	}
	
	public function signuptologin($email, $password) {
		
		$sql = 'SELECT * FROM users WHERE email = "'.$email.'" and password = "'.$password.'"';
		$query = $this->db->query($sql);
		$ok = false;
		$userdata = [];
		foreach($query->result() as $row){
			$userdata = array('email' => $row->email, 'logged_in' => true);
			$ok = true;
		}
		if($ok){		
			$this->session->set_userdata('email', $_POST['email'],'usercred',$_POST['usercred']);
			redirect(base_url('User/GetRecipe'));
		}
		else{
			echo "Invalid email or password";
		}
	}
	
	public function userdat($usercred){
		
		$name = $this->session->userdata('email');
		$sql = "SELECT usercred FROM users WHERE email = '$name'";
		$query = $this->db->query($sql);
		$ok = false;
		$newdata = [];
		foreach($query->result() as $row){
			$userdata = array(
				'usercred' => $row->usercred
			);
			$ok = true;
		}
		if($ok){
		$this->session->set_userdata($newdata);
		
		print_r($newdata);
		}
		else{
			echo 'Error!';
		}
	}
	
	public function authority($name){
		// $report = '';
		// $name = ;
		$query = $this->db->query("SELECT usercred FROM users WHERE email = '$name'");
		
		foreach($query->result_array() as $row){
			return $row['usercred'];
		}	
		// return $report;
	}
	
	public function authority1($firstname){
		// $report = '';
		// $name = ;
		$query = $this->db->query("SELECT firstname FROM users WHERE email = '$firstname'");
		
		foreach($query->result_array() as $row){
			return $row['firstname'];
		}	
		// return $report;
	}

	public function bal($balance)
	{
		$report = [];
		$name = $this->session->userdata('email');
		$query = $this->db->query("SELECT balance FROM users WHERE email = '$name'");
		
		foreach($query->result_array() as $row){
			$report[] = $row;
		}
		return $report;
	}
	
	public function generateID($idCol, $table){
			$id = "0000";
			$query = $this->db->query("SELECT $idCol FROM $table order by $idCol ASC");
			foreach($query->result_array() as $row){
				$id = $row[$idCol];				
			}
			$temp = (int)$id + 1;
			$id = "0000".$temp;
			$id = substr($id,strlen($id)-4,strlen($id));
			return $id;
		}
	
	public function saveorder($order_id){
		$counter = 0;
			//generate json for cart
			$str = '{';
			foreach($this->cart->contents() as $items){
				if($counter > 0){
					$str .= ',';
				}
				$str .= '"'.$counter.'":{';
				$str .= '"id": "'.str_replace('_', ' ', str_replace('_00', ')', str_replace('00_', '(', $items['id']))).'",';
				$str .= '"name": "'.str_replace('_', ' ', str_replace('_00', ')', str_replace('00_', '(', $items['name']))).'",';
				$str .= '"qty": "'.$items['qty'].'"';
				$str .= '}';
				$counter++;
			}
			$str = substr($str, 0, strlen($str));
			$str .= '}';			
			$this->db->query("INSERT INTO orders (order_id, email, cart, date, total_bill) VALUES ('".$order_id."', '".$this->session->userdata('email')."', '".$str."', '".date("Y/m/d")."', '".$this->cart->total()."')");
		
	}
	
		
	public function changeemail($email){

		$sql = "UPDATE users SET email = '$email' WHERE user_id = {$userId}";
		
	}
	
	public function viewusers($table){
		$report = [];
		$query = $this->db->query("SELECT * FROM ".$table);
		
		foreach($query->result_array() as $row){
			$report[] = $row;
		}		
		return $report;
	}
	
	public function viewprofile($email){
		$report = [];
		$query = $this->db->query("SELECT * FROM users WHERE email = '".$email."'");
		
		foreach($query->result_array() as $row){
			$report[] = $row;
		}		
		return $report;
	}
	
	public function update($data){
		$this->db->where($data);
		$this->db->update($this->table, $data);
		return TRUE;	
	}
	
	public function del($email){
		$query = $this->db->query("DELETE FROM users where email = '".$email."'");
	}
	
}
	
?>