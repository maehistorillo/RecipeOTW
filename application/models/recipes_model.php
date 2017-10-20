<?php

class Recipes_model extends CI_Model {

		
	public function submit($recipename,$recipeid,$recipequa,$recipecat,$recipeing,$recipeimg,$recipecost,$recipeprocedure) {
		$sql = 'INSERT INTO recipes VALUES ("'.$recipeid.'","'.$recipename.'","'.$recipequa.'","'.$recipecat.'","'.$recipeing.'","'.$recipeimg.'","'.$recipecost.'","'.$recipeprocedure.'")';
		
		return $this->db->simple_query($sql);
		
		mysqli_query($db,$sql);
		if($db->query($sql) === TRUE){
			header("Location: Insert Recipe Succesful");
		}else{
			header("Location: Insert Recipe Failed");
		}
	}
	
	public function recipelist($table){
		$report = [];
		$query = $this->db->query("SELECT * FROM ".$table);
		
		foreach($query->result_array() as $row){
			$report[] = $row;
		}
		return $report;
	}

	public function del($recipename){

		$query = $this->db->query("DELETE FROM recipes where recipename = '".$recipename."'");

	/* 	$this->db->where($data);
		$this->db->delete($this->table);*/
	}
}

?>