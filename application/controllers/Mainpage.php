<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Mainpage extends CI_Controller {
	
	public function __construct()
	{
		parent::__construct();
		$this->load->helper('url');
		$this->load->model('users_model','user');
		$this->load->model('recipes_model','recipe');
		
	}
	
	public function index()
	{
		redirect(base_url('Mainpage/Home'));
	}
	
	public function Devs()
	{
		
		$this->load->view('page/devs');
	}

	public function Home()
	{
		$data['title'] = "Recipe On The Way!";
		$data['email'] = $this->session->userdata('email');
		$data['usercred'] = $this->user->authority($this->session->userdata('email'));
		$data['firstname'] = $this->user->authority1($this->session->userdata('email'));
		
		$this->load->view('base/script',$data);
		$this->load->view('base/homepage');
		$this->load->view('base/footer');
	}
	
	public function Login()
	{	
		$enter =  $this->session->userdata('email');
		if( empty($enter) )
		{
			$data['title'] = "Login";		
			$this->load->view('base/script',$data);		
			$this->load->view('page/login');
		}
		else
		{
			redirect(base_url('Mainpage/Home'));
		}
	}
		
	public function loginAction() 
	{
		$this->session->set_userdata($this->user->login($this->input->post('email'), $this->input->post('password')));
	}
	
	public function Forgotpass()
	{
		$data['title'] = "Forgot Password";	
		$this->load->view('base/script',$data);
		$this->load->view('page/forgotpassword');
	}
	
	public function Signup()
	{	
		$enter =  $this->session->userdata('email');
			if( empty($enter) )
			{
				$data['title'] = "ROTW Signup";					
				$this->load->view('base/script',$data);
				$this->load->view('page/signup');
			}
			else
			{
				redirect(base_url('Mainpage/Home'));
		}
	}
	
	public function Signup2()
	{
		$enter = $this->session->userdata('email');
		$enter2 = $this->session->userdata('contactno');
			if(empty($enter))
			{
				redirect(base_url('Mainpage/Signup'));
			}
			else
			{
				if(empty($enter2))
				{
					$this->load->view('base/script');
					$this->load->view('page/signup2');
				}
				else
				{
					redirect(base_url('Mainpage/Home'));
				}
			}		
	}
		
	public function Prototype(){
		$this->load->view('base/prototype');
	}
	
	public function signupAction()
	{
		$email = $this->input->post('email');
		$password = $this->input->post('password');
		$balance = $this->input->post('balance');
		$surname = $this->input->post('surname');
		$firstname = $this->input->post('firstname');
		$usercred = 0;
		
		$flag = $this->user->signup($email,$password,$balance,$usercred,$surname,$firstname);
		if($flag)
		{
			$this->session->set_userdata($this->user->signuptologin($email, $password));
		}
	}
	
	public function signupAction2()
	{
		$email = $this->session->userdata('email');
		$userimg = "";
		$streetadd = $this->input->post('address');
		$cityadd = $this->input->post('city');
		$region = $this->input->post('region');
		$contactno = $this->input->post('phone');
		
		$flag = $this->user->signup2($email,$userimg,$contactno,$streetadd,$cityadd,$region);
		if($flag)
		{
			$this->session->set_userdata('contact',$contactno);
			redirect(base_url('Transaction/Endcheckout'));
		}
		else{
		echo 'Error';
		}
	}
	
	public function User()
	{
		$this->session->set_userdata(array('usercred' => $this->user->authority($this->session->userdata('email'))));
		$this->session->set_userdata(array('firstname' => $this->user->authority1($this->session->userdata('email'))));
		if($this->session->userdata('usercred') == 1){
			redirect(base_url('User/Admin'));
		}else{
			redirect(base_url('User/Client'));
		}
	}
	
	public function Logout() {
		$this->session->sess_destroy();
		redirect(base_url('Mainpage/Home'));	
	}
	
}

?>