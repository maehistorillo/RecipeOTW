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
	
	public function ordercount($order_id){
		$report = [];
		$query = $this->db->query("SELECT order_id FROM orders");
		foreach($query->result_array() as $row){
			$report[] = $row;
		}
		return $report;
	}
		
	public function cancelorder($order_id){
		$this->db->query("DELETE FROM orders WHERE order_id = '".$order_id."'");			
	}

}
?>