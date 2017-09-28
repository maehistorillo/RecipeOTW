<?php

class Users_model extends CI_Model {
	
	
	public function signup($username,$email,$password,$surname,$firstname,$miname,$birthmonth,$birthdate,$birthyear,$address) {		
		$sql = 'INSERT INTO users VALUES ("'.$username.'","'.$email.'","'.$password.'","'.$surname.'","'.$firstname.'","'.$miname.'","'.$birthmonth.'","'.$birthdate.'","'.$birthyear.'","'.$address.'")';
		//echo $sql;
		return $this->db->simple_query($sql);
	}
	
	public function login($username, $password) {
		
		$sql = 'SELECT * FROM users WHERE username = "'.$username.'" and password = "'.$password.'"';
		$query = $this->db->query($sql);
		foreach($query->result_array() as $row){
			
			return $row;
			
		}
	
	}
	
	public function update($data){
		$this->db->where($data);
		$this->db->update($this->table, $data);
		return TRUE;	
	}
	
	public function delete($data){
		$this->db->where($data);
		$this->db->delete($this->table);
		return TRUE;	
	}
	
}
	
?>