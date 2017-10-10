<?php
defined('BASEPATH') OR exit ('No direct script access allowed');

class Mainpage extends CI_Controller {
	
	public function __construct(){
		parent::__construct();
		$this->load->helper('url');
		$this->load->model('users_model','user');
		$this->load->model('recipes_model','recipe');
		//$this->load->library('sessions');
	}
	
	
	public function index()
	{
		redirect(base_url('Mainpage/Home/'));
	}
	
	public function Home(){
		$data['title'] = "Recipe OTW";
		
		$this->load->view('include/header',$data);
		$this->load->view('mainpage/homepage');
		$this->load->view('include/footer');
		
	}
	public function Signup()
	{
		$data['title'] = "ROTW: Signup";					
		$this->load->view('include/header',$data);
		$this->load->view('mainpage/signup');
	}
	public function Login()
	{
		$enter =  $this->session->userdata('username');
		if( !empty($enter) ){
			 redirect (base_url('Mainpage/Admin/'));
		}	
		
		$data['title'] = "Login";			
		$this->load->view('include/header',$data);
		$this->load->view('mainpage/login');
	}

	public function Recipe()
	{
		$data['title'] = "ROTW: Recipe";					
		$this->load->view('include/header',$data);
		$this->load->view('mainpage/recipe_page');
	}	
	public function Admin()
	{
		$enter =  $this->session->userdata('username');
		if( empty($enter) ){
			 redirect (base_url('Mainpage/Login/'));
		}				
		$data['title'] = "Welcome Admin!";
		
		$this->load->view('include/header',$data);
		$this->load->view('mainpage/dashboard');
	}

	public function AdminLogin()
	{
		$data['title'] = "ROTW: Admin Login" ;					
		$this->load->view('include/header',$data);
		$this->load->view('mainpage/login_admin');
	}	
	public function Category()
	{
		$data['title'] = "ROTW Admin: Category" ;					
		$this->load->view('include/header',$data);
		$this->load->view('mainpage/admin/categories');
	}	
		public function ARecipe()
	{
		$data['title'] = "ROTW Admin: Recipe" ;					
		$this->load->view('include/header',$data);
		$this->load->view('mainpage/admin/recipe_admin');
	}	
	public function signupAction(){


				
		$username = $this->input->post('username');
		$email = $this->input->post('email');
		$password = $this->input->post('password');
		$surname = $this->input->post('surname');
		$firstname = $this->input->post('firstname');
		$miname = $this->input->post('miname');
		// $birthmonth = $this->input->post('birthmonth');
		$birthdate = $this->input->post('birthdate');
		// $birthyear = $this->input->post('birthyear');
		$address = $this->input->post('address');

		/* $this->form_validation->set_rules('username', 'Username', 'trim|required|min_length[5]|max_length[16]');
		$this->form_validation->set_rules('password', 'Password', 'trim|required|min_length[8]');
		$this->form_validation->set_rules('cpassword', 'Password Confirmation', 'trim|required|matches[password]');
		$this->form_validation->set_rules('email', 'Email', 'trim|required|valid_email'); */
		
		$flag = $this->user->signup($username,$email,$password,$surname,$firstname,$miname,$birthdate,$address);
		if($flag){
			
			redirect(base_url('Mainpage/Home/'));
		
		}else{
			echo 'NANII??';
		}
	}
	
	//Login Comparing
	public function loginAction() {
		$this->session->set_userdata($this->user->Login($this->input->post('username'), $this->input->post('password')));
	}	
			
	public function adminloginAction() {
		$this->session->set_userdata($this->user->Adminlogin($this->input->post('username'), $this->input->post('password')));
	}	
	
	 public function logout() {
		$this->session->sess_destroy();
		redirect(base_url('Mainpage/Home/'));
		
	}

	public function insertRecipe() {
		
		$enter =  $this->session->userdata('username');
		if( empty($enter) ){
			 redirect (base_url('Mainpage/Login/'));
		}	
		$this->load->view('Mainpage/admin/insert_recipe');
	}
	
	public function submitRecipe() {
		
		$recipename = $this->input->post('recipename');
		$recipetype = $this->input->post('recipetype');
		$recipedetails = $this->input->post('recipedetails');
		$recipeimg = $this->input->post('recipeimg');
		$recipecost = $this->input->post('recipecost');
		$recipeprocedure = $this->input->post('recipeprocedure');
		
		$flag = $this->recipe->submit($recipename, $recipetype, $recipedetails, $recipeimg, $recipecost, $recipeprocedure);
		
		 if($flag){
		echo 'Recipe Save!';
		redirect(base_url('Mainpage/insertRecipe/'));

					
		}
		else {
			echo 'Error!!!';
		} 
		
	}
	
	public function listRecipe(){
		$enter =  $this->session->userdata('username');
		if( empty($enter) ){
			 redirect (base_url('Mainpage/Login/'));
		}		
		
		$data['recipes'] = $this->recipe->recipelist('recipes');	
		$this->load->view('Mainpage/Admin/list_recipe',$data);
		
	}
	

}

?>
	
