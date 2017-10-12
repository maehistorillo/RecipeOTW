<?php

class Users_model extends CI_Model {
	
	
	public function signup($username,$email,$password,$surname,$firstname,$miname,$birthdate,$address) {		
		$sql = 'INSERT INTO users VALUES ("'.$username.'","'.$email.'","'.$password.'","'.$surname.'","'.$firstname.'","'.$miname.'","'.$birthdate.'","'.$address.'")';
		//echo $sql;
		return $this->db->simple_query($sql);
	}
	
	public function login($username, $password) {
		
		$sql = 'SELECT * FROM users WHERE username = "'.$username.'" and password = "'.$password.'"';
		$query = $this->db->query($sql);
		$ok = false;
		$userdata = [];
		foreach($query->result() as $row){
			$userdata = array(
				'username' => $row->username,
				'logged_in' => true
			);
			$ok = true;
		}
		if($ok){			
			$this->session->set_userdata('username', $_POST['username']);
			// echo $username;
			redirect(base_url('Mainpage/Admin/'));
			
		}else{
			echo "Invalid username or password";
		}
	}
	
	public function adminlogin($username, $password) {
		
		$sql = 'SELECT * FROM users WHERE username = "'.$username.'" and password = "'.$password.'"';
		$query = $this->db->query($sql);
		$ok = false;
		$userdata = [];
		foreach($query->result() as $row){
			$userdata = array(
				'username' => $row->username,
				'logged_in' => true
			);
			$ok = true;
		}
		if($ok){			
			$this->session->set_userdata('username', $_POST['username']);
			// echo $username;
			redirect(base_url('Mainpage/Admin/'));
			
		}else{
			echo "Invalid username or password";
		}
	}
		
	public function changeUsername($username){

		$sql = "UPDATE users SET username = '$username' WHERE user_id = {$userId}";
		
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
	
	public function del($username){
		$query = $this->db->query("DELETE FROM users where username = '".$username."'");
	}
	
}
	
?>