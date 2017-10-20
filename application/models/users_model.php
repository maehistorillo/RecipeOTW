<?php

class Users_model extends CI_Model {
	
	
	public function signup($email,$email,$password,$balance,$surname,$firstname,$miname,$birthdate,$address,$usercred) {		
		$sql = 'INSERT INTO users VALUES ("'.$email.'","'.$email.'","'.$password.'","'.$balance.'","'.$surname.'","'.$firstname.'","'.$miname.'","'.$birthdate.'","'.$address.'","'.$usercred.'")';
		//echo $sql;
		return $this->db->simple_query($sql);
	}
	
	public function login($email, $password) {
		
		$sql = 'SELECT * FROM users WHERE email = "'.$email.'" and password = "'.$password.'"';
		$query = $this->db->query($sql);
		$ok = false;
		$userdata = [];
		foreach($query->result() as $row){
			$userdata = array(
				'email' => $row->email,
				'logged_in' => true
			);
			$ok = true;
		}
		if($ok){		
			$this->session->set_userdata('email', $_POST['email'],'usercred',$_POST['usercred']);
			// echo $email;
			redirect(base_url('Mainpage/User/'));
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
	
	public function adminlogin($email, $password, $usercred) {
		
		$sql = 'SELECT * FROM users WHERE email = "'.$email.'" and password = "'.$password.'"';
		$query = $this->db->query($sql);
		$ok = false;
		$userdata = [];
		foreach($query->result() as $row){
			$userdata = array(
				'email' => $row->email,
				'usercred' => $row->usercred,
				'logged_in' => true
			);
			$re='usercred';
			$ok = true;
			
		}
		if($ok){			
			$this->session->set_userdata('email', $_POST['email']);
			// echo $email;
			redirect(base_url('Mainpage/Admin/'));
		}
		else{
			echo "Invalid email or password";
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

	public function bal($balance){
		$report = [];
		$name = $this->session->userdata('email');
		$query = $this->db->query("SELECT balance FROM users WHERE email = '$name'");
		
		foreach($query->result_array() as $row){
			$report[] = $row;
		}
		return $report;
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
	
	public function update($data){
		$this->db->where($data);
		$this->db->update($this->table, $data);
		return TRUE;	
	}
	
	public function delete($table){
		$query = $this->db->query("DELETE FROM ".$table);
		return TRUE;	
	}
	
	public function del($email){
		$query = $this->db->query("DELETE FROM users where email = '".$email."'");
	}
	
}
	
?>