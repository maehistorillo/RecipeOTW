<?php
defined('BASEPATH') OR exit ('No direct script access allowed');

class Mainpage extends CI_Controller {
	
	public function __construct(){
		parent::__construct();
		$this->load->helper('url');
		$this->load->model('users_model','user');
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
	public function Admin()
	{
		$data['title'] = "ROTW: Admin";					
		$this->load->view('include/header',$data);
		$this->load->view('mainpage/dashboard');
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
		
			redirect(base_url('Mainpage/Admin'));
		// print_r($row);

		}
		else{
		//If invalid Email or Password			
			echo 'NANII?? Incorrect Username or Password';
			
		}
		
	}	
}

?>
	
