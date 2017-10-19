<?php

class Orders_model extends CI_Model {

	public function orderslist($table){
		$report = [];
		$query = $this->db->query("SELECT * FROM ".$table);
		
		foreach($query->result_array() as $row){
			$report[] = $row;
		}
		return $report;
	}

}
?>