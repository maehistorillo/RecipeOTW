<?php
defined('BASEPATH') OR exit ('No direct script access allowed');

class Mainpage extends CI_Controller {

	public function __construct() {
		parent::__construct();
		$this->load->helper('url');
	}
	
	public function index(){
		redirect(base_url('Mainpage/Home/'));
	}
	
	public function Home(){
		$data['title'] = "";
		
		$this->load->view('script');
		$this->load->view('homepage');
	//	$this->load->view();
	
	
	}
	
	public function Recipe(){
		$data['title'] = "";
		
		
		$this->load->view('script');
		$this->load->view('mainpage/recipe_page');
	//	$this->load->view();
	
	
	}
}
?>
