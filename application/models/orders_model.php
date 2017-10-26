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

	public function saveOrder($order_id){
		$counter = 0;
		//generate json for cart
		$str = '{';
		foreach($this->cart->contents() as $items){
			if($counter > 0){
				$str .= ',';
			}
			$str .= '"'.$counter.'":{';
			$str .= '"id": "'.$items['id'].'",';
			$str .= '"name": "'.str_replace('_', ' ', str_replace('_00', ')', str_replace('00_', '(', $items['name']))).'",';
			$str .= '"qty": "'.$items['qty'].'"';
			$str .= '}';
			$counter++;
		}
		$str = substr($str, 0, strlen($str));
		$str .= '}';			
		$this->db->query("INSERT INTO orders (order_id, email, cart, date, address, total_bill) VALUES ('".$order_id."', '".$this->session->userdata('email')."', '".$str."', '".date("Y/m/d")."', '".$this->session->userdata('contactno')."', '".$this->cart->total()."')");
	}

}
?>