<?php
defined('BASEPATH') OR exit ('No direct script access allowed');

class Mainpage extends CI_Controller {
	
	public function __construct(){
		parent::__construct();
		$this->load->helper('url');
		$this->load->model('users_model','user');
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
		$data['title'] = "ROTW: Login";					
		$this->load->view('include/header',$data);
		$this->load->view('mainpage/login');
	}

	public function Recipe()
	{
		$data['title'] = "ROTW: Recipe";					
		$this->load->view('include/header',$data);
		$this->load->view('mainpage/recipe_page');
	}	
	//ADMIN SECTION//
	public function Admin()
	{
		$title['titleadmin'] = "ROTW: Admin";					
		$this->load->view('include/aheader',$title);
		$this->load->view('mainpage/dashboard');
	}

	public function AdminLogin()
	{
		$data['title'] = "ROTW: Admin Login" ;					
		$this->load->view('include/header',$data);
		$this->load->view('mainpage/login_admin');
	}	

	public function AdminRecipe()
	{
		$title['titleadmin'] = "ROTW Admin: Recipe" ;					
		$this->load->view('include/aheader',$title);
		$this->load->view('mainpage/admin/recipe_admin');
	}	
	public function AddRecipeAdmin()
	{
		$title['titleadmin'] = "ROTW Admin: Add Recipe" ;					
		$this->load->view('include/aheader',$title);
		$this->load->view('mainpage/admin/add_recipeadmin');
	}
	public function AdminOrder()
	{
		$title['titleadmin'] = "ROTW Admin: Orders" ;					
		$this->load->view('include/aheader',$title);
		$this->load->view('mainpage/admin/orders');
	}
	public function AdminSetting()
	{
		$title['titleadmin'] = "ROTW Admin: Setting" ;					
		$this->load->view('include/aheader',$title);
		$this->load->view('mainpage/admin/setting');
	}	
	public function signupAction(){


				
		$username = $this->input->post('username');
		$email = $this->input->post('email');
		$password = $this->input->post('password');
		$surname = $this->input->post('surname');
		$firstname = $this->input->post('firstname');
		$miname = $this->input->post('miname');
		$birthmonth = $this->input->post('birthmonth');
		$birthdate = $this->input->post('birthdate');
		$birthyear = $this->input->post('birthyear');
		$address = $this->input->post('address');

		$this->form_validation->set_rules('username', 'Username', 'trim|required|min_length[5]|max_length[12]');
		$this->form_validation->set_rules('password', 'Password', 'trim|required|min_length[8]');
		$this->form_validation->set_rules('passconf', 'Password Confirmation', 'trim|required|matches[password]');
		$this->form_validation->set_rules('email', 'Email', 'trim|required|valid_email');
		
		$flag = $this->user->signup($username,$email,$password,$surname,$firstname,$miname,$birthmonth,$birthdate,$birthyear,$address);
		if($flag){
			
			redirect(base_url('Mainpage/Home/'));
		
		}else{
			echo 'NANII??';
		}
	}
	
	//Login Comparing
	public function loginAction() {
		
		$username = $this->input->post('username');
		$password = $this->input->post('password');
		
		//users_model verify
		$row = $this->user->login($username, $password);

		if(count($row)>1){

			redirect(base_url('Mainpage/User'));

		 print_r($row);

		}
		else {
		//If invalid Email or Password			
			redirect(base_url('Mainpage/Login'));
			
		}
		
	}	
	public function adminloginAction() {
		
		$username = $this->input->post('username');
		$password = $this->input->post('password');
		
		//users_model verify
		$row = $this->user->login($username, $password);

		if(count($row)>1){

			redirect(base_url('Mainpage/Admin'));

		 print_r($row);

		}
		else{
		//If invalid Email or Password			
			redirect(base_url('Mainpage/Login'));
			
		}
		
	}	
}

?>
