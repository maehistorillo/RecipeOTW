<?php

class Recipes_model extends CI_Model {

		
	public function submit($recipeid, $recipename,$recipecat,$recipeing,$recipeimg,$recipecost, $recipeprocedure) {
		$sql = 'INSERT INTO recipes VALUES ("'.$recipeid.'","'.$recipename.'","'.$recipecat.'","'.$recipeing.'","'.$recipeimg.'","'.$recipecost.'","'.$recipeprocedure.'")';
		
		return $this->db->simple_query($sql);
		
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
	}
	
	public function recipechoose($reap){
		
		$report = [];
		$sql = "SELECT * FROM recipes WHERE recipename = '$reap'";
		$query = $this->db->query($sql);
		foreach($query->result_array() as $row){
			$report[] = $row;
		}
		return $report;
	}
		
	public function categorize($recipename){
		
		$report = [];
		$recipecat = "Dish";
		$sql = "SELECT * FROM recipes WHERE recipecat = '$recipecat'";
		$query = $this->db->query($sql);
		foreach($query->result_array() as $row){
			$report[] = $row;
		}
		return $report;
	}
	
	public function find($recipename){
		$get = [];
		//"select count(*) as number_match from collection where word in ('%$words%')";
		$query = $this->db->query("SELECT * FROM recipes");	
		foreach($query->result_array() as $row){
			$get[] = $row;
		}
		return $get;
	}
	//Categories
	
		public function maindish($recipename){
		
		$report = [];
		$recipecat = "main dish";
		$sql = "SELECT * FROM recipes WHERE recipecat = '$recipecat'";
		$query = $this->db->query($sql);
		foreach($query->result_array() as $row){
			$report[] = $row;
		}
		return $report;
	}
		public function appetizer($recipename){
		
		$report = [];
		$recipecat = "appetizer";
		$sql = "SELECT * FROM recipes WHERE recipecat = '$recipecat'";
		$query = $this->db->query($sql);
		foreach($query->result_array() as $row){
			$report[] = $row;
		}
		return $report;
	}
		public function pastry($recipename){
		
		$report = [];
		$recipecat = "pastry";
		$sql = "SELECT * FROM recipes WHERE recipecat = '$recipecat'";
		$query = $this->db->query($sql);
		foreach($query->result_array() as $row){
			$report[] = $row;
		}
		return $report;
	}
		public function smoothies($recipename){
		
		$report = [];
		$recipecat = "smoothies";
		$sql = "SELECT * FROM recipes WHERE recipecat = '$recipecat'";
		$query = $this->db->query($sql);
		foreach($query->result_array() as $row){
			$report[] = $row;
		}
		return $report;
	}
		public function sweets($recipename){
		
		$report = [];
		$recipecat = "sweets";
		$sql = "SELECT * FROM recipes WHERE recipecat = '$recipecat'";
		$query = $this->db->query($sql);
		foreach($query->result_array() as $row){
			$report[] = $row;
		}
		return $report;
	}

		public function dessert($recipename){
		
		$report = [];
		$recipecat = "dessert";
		$sql = "SELECT * FROM recipes WHERE recipecat = '$recipecat'";
		$query = $this->db->query($sql);
		foreach($query->result_array() as $row){
			$report[] = $row;
		}
		return $report;
	}
	
}

?>