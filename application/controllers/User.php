<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class User extends CI_Controller {
	
	public function __construct()
	{
		parent::__construct();
		$this->load->helper('url');
		$this->load->model('users_model','user');
		$this->load->model('recipes_model','recipe');
		$this->load->model('orders_model','order');
		
	}
	
	public function index()
	{
		redirect(base_url('Mainpage/Home'));
	}
	
	public function Admin()
	{	
		$data['title'] = 'Hello Admin!';
		if( !empty($this->session->userdata('email')) )
		{
			if($this->session->userdata('usercred') == 1)
			{
			$data['email'] =  $this->session->userdata('email');
				if( empty($this->session->userdata('email')) ){
				 redirect (base_url('Mainpage/Login/'));

			}		
			$data['count'] = $this->order->ordercount('num');
			$this->load->view('base/aheader',$data);
			$this->load->view('page/admindashboard',$data); 
			}else{
				redirect(base_url('Mainpage/User'));
			}
		}else{
			redirect(base_url('Mainpage/Login'));
		}
	}
	
	public function Client()
	{			
		$data['title'] = 'Welcome!';
		$data['balance'] = $this->user->bal('balance');
		$data['find'] = $this->input->post('search');
		$data['recipes'] = $this->recipe->recipelist('recipes');	
		$data['maindish'] = $this->recipe->maindish('recipename');	
		$data['appetizer'] = $this->recipe->appetizer('recipename');	
		$data['pastry'] = $this->recipe->pastry('recipename');	
		$data['smoothies'] = $this->recipe->smoothies('recipename');	
		$data['sweets'] = $this->recipe->sweets('recipename');		
		$data['firstname'] = $this->session->userdata('firstname');
		$data['usercred'] = $this->user->authority('usercred');
		$data['user'] = $this->session->userdata('email');
		
		if( !empty($this->session->userdata('email')) ){
			if($this->session->userdata('usercred') == 1){
				$this->load->view('base/uheader',$data);
				$this->load->view('page/clientdashboard',$data);
			}
			else
			{
				//Views
				$this->load->view('base/uheader',$data);
				$this->load->view('page/clientdashboard',$data);		
			}
		}
		else
		{
				$this->load->view('base/uheader',$data);
				$this->load->view('page/clientdashboard',$data);
		}
	}
	
	public function SettingClient()
	{	
		$enter =  $this->session->userdata('email');
			if( empty($enter) )
			{
				redirect (base_url('Mainpage/Login/'));
			}
			else
			{
				if($this->session->userdata('usercred') == 0)
				{
					$data['data'] = $this->user->viewprofile($this->session->userdata('email'));		
					$this->load->view('page/clientsetting',$data);
					$this->load->view('base/uheader');
				}
				else
				{
					redirect(base_url('Mainpage/Login'));
				}
			}
	}
	
	public function Recipe($recipename)
	{	
		$data['recipe'] = $this->recipe->recipechoose(str_replace('%20',' ',$recipename));
		$this->load->view('recipe/recipepage',$data);
		$this->load->view('base/script');
	}
	
	public function AddRecipe()
	{
		$enter =  $this->session->userdata('email');
			if( empty($enter) )
			{
				redirect (base_url('Mainpage/Login/'));
			}
			else
			{
				if($this->session->userdata('usercred') == 1)
				{
					$data['title'] = "Add Recipe";					
					$this->load->view('base/aheader',$data);
					$this->load->view('recipe/addrecipe');
				}
			}
	}
	
	public function SubmitRecipe()
	{		
		$recipeb = $this->input->post('recipename');
		$recipeid = str_replace('%20', ' ',$recipeb);
		$recipename = $this->input->post('recipename');
		$recipecat = $this->input->post('recipecat');
		$recipeing = $this->input->post('recipeing');
		$recipeimg = $this->input->post('recipeimg');
		$recipecost = $this->input->post('recipecost');
		$recipeprocedure = $this->input->post('recipeprocedure');
		
		$flag = $this->recipe->submit($recipeid, $recipename,$recipecat, $recipeing, $recipeimg, $recipecost, $recipeprocedure);
		
		if($flag)
		{
		redirect(base_url('User/AddRecipe'));		
		}
		else{
		echo 'Error';
		}
	}
	
	public function ManageRecipe()
	{
		$enter =  $this->session->userdata('email');
			if( empty($enter) )
			{
				redirect (base_url('Mainpage/Login'));
			}
			else
			{
				if($this->session->userdata('usercred') == 1)
				{
				$data['title'] = "ROTW Manage Recipe" ;
				$data['recipes'] = $this->recipe->recipelist('recipes');			
				$this->load->view('base/aheader',$data);
				$this->load->view('recipe/managerecipe');
				}
				else
				{
				redirect(base_url('Mainpage/User'));
				}
			}
	}
	
	public function ViewUsers()
	{
		$enter =  $this->session->userdata('email');
		if( empty($enter) ){
			 redirect (base_url('Mainpage/Login'));
		}	
		else{
			if($this->session->userdata('usercred') == 1){
				$data['users'] = $this->user->viewusers('users');
				$data['title'] = "View Users";
				$this->load->view('base/aheader',$data);
				$this->load->view('page/view_users',$data); 
			}
			else{
				redirect(base_url('Mainpage/User'));
			}
		}
	}
	
	public function delRecipe($name)
	{	
		$this->recipe->del(str_replace('%20', ' ', $name));	
		redirect(base_url('User/ManageRecipe'));	
	}
	
	public function delUser($name)
	{	
		$this->user->del($name);	
		redirect(base_url('User/ViewUsers'));	
	}

}

?>