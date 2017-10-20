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
	
	public function Forgotpassword() {
		$this->load->view('forgotpass');
		$this->load->view('include/header');
	}
	public function Home(){
		$data['title'] = "Recipe OTW";
		$data['email'] = $this->session->userdata('email');
		
		$data['usercred'] = $this->user->authority($this->session->userdata('email'));
		$data['firstname'] = $this->user->authority1($this->session->userdata('email'));
		$this->load->view('include/header',$data);
		$this->load->view('mainpage/homepage',$data);
		$this->load->view('include/footer');
		
	}
	
		public function Etc(){
		$data['title'] = "Recipe OTW";
		
		$this->load->view('script');
		$this->load->view('mainpage/recipe_page');
		//$this->load->view('mainpage/homeetcfoot');
	}
	
	public function Signup()
	{
		$data['title'] = "ROTW Signup";					
		$this->load->view('include/header',$data);
		$this->load->view('mainpage/signup');
	}
	public function Login()
	{
		$enter =  $this->session->userdata('email');
		if( !empty($enter) ){
			 redirect (base_url('Mainpage/Admin/'));
		}	
		
		$data['title'] = "Login";			
		$this->load->view('include/header',$data);
		$this->load->view('mainpage/login');
	}

	public function Address()
	{
		$this->load->view('mainpage/useraddress');
		$this->load->view('include/header');
	}

	public function Recipe()
	{
		$data['title'] = "ROTW: Recipe";					
		$this->load->view('include/header',$data);
		$this->load->view('mainpage/recipe_page');
	}	
	public function Admin()
	{	
		$data['title'] = 'Hello Admin!';
	//	$data['re'] = $this->session->userdata('email');
		if( !empty($this->session->userdata('email')) )
		{
			if($this->session->userdata('usercred') == 1)
			{
			$data['email'] =  $this->session->userdata('email');
				if( empty($this->session->userdata('email')) ){
				 redirect (base_url('Mainpage/Login/'));

			}		
		//	$this->load->view('include/re',$data);
			$this->load->view('include/header',$data);
			$this->load->view('mainpage/dashboard'); 
			}else{
				redirect(base_url('Mainpage/User'));
			}
		}else{
			redirect(base_url('Mainpage/Login'));
		}
	}
	
	public function User()
	{
		$this->session->set_userdata(array('usercred' => $this->user->authority($this->session->userdata('email'))));
		$this->session->set_userdata(array('firstname' => $this->user->authority1($this->session->userdata('email'))));
		if($this->session->userdata('usercred') == 1){
			redirect(base_url('Mainpage/Admin'));
		}else{
			redirect(base_url('Mainpage/Client'));
		}
	//$this->load->view('mainpage/client',$data);
	}
	
	public function Client()
	{
		if( !empty($this->session->userdata('email')) ){
			if($this->session->userdata('usercred') == 0){
				$data['firstname'] = $this->session->userdata('firstname');
				$data['title'] = 'Welcome!';
				$data['usercred'] = $this->user->authority('usercred');
				$data['balance'] = $this->user->bal('balance');
				$data['recipes'] = $this->recipe->recipelist('recipes');	
				$this->load->view('include/header',$data);
				$this->load->view('mainpage/user/userpage',$data);
			}else{
				redirect(base_url('Mainpage/Admin'));
			}
		}else{
			 redirect (base_url('Mainpage/Login/'));


		 }
	}
	
	public function AdminLogin()
	{
		$data['title'] = "ROTW Admin Login" ;					
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


				
		$email = $this->input->post('email');
		$email = $this->input->post('email');
		$password = $this->input->post('password');
		$balance = $this->input->post('balance');
		$surname = $this->input->post('surname');
		$firstname = $this->input->post('firstname');
		$miname = $this->input->post('miname');
		// $birthmonth = $this->input->post('birthmonth');
		$birthdate = $this->input->post('birthdate');
		// $birthyear = $this->input->post('birthyear');
		$address = $this->input->post('address');
		$usercred = 0;
		
		$flag = $this->user->signup($email,$email,$password,$balance,$surname,$firstname,$miname,$birthdate,$address,$usercred);
		if($flag){
			
			redirect(base_url('Mainpage/Home/'));
		
		}else{
			echo 'NANII??';
		}
	}
	
	//Login Comparing
	public function loginAction() {
		$this->session->set_userdata($this->user->Login($this->input->post('email'), $this->input->post('password')));
		

	}	
			
	public function adminloginAction() {
		$this->session->set_userdata($this->user->Adminlogin($this->input->post('email'), $this->input->post('password')));
	}	
	
	 public function logout() {
		$this->session->sess_destroy();
		redirect(base_url('Mainpage/Home/'));
		
	}

	public function insertRecipe() {
		
		$enter =  $this->session->userdata('email');
		if( empty($enter) ){
			 redirect (base_url('Mainpage/Login/'));
		}
		else{
			if($this->session->userdata('usercred') == 1)
			{
			$data['title'] = "Add New Recipe";
			$data['email'] =  $this->session->userdata('email');
				if( empty($this->session->userdata('email')) ){
				 redirect (base_url('Mainpage/Login/'));
			}		
			$this->load->view('include/header', $data);
			$this->load->view('mainpage/adminpr/add_recipeadmin');
			// $this->load->view('mainpage/admin/insert_recipe');
			}
			else{
				redirect(base_url('Mainpage/User'));
			}
		}
	}
	
	public function submitRecipe() {
		
		$recipeb = $this->input->post('recipename');
		$recipeid = str_replace('%20', ' ',$recipeb);
		$recipename = $this->input->post('recipename');
		$recipecat = $this->input->post('recipecat');
		$recipeing = $this->input->post('recipeing');
		$recipeimg = $this->input->post('recipeimg');
		$recipecost = $this->input->post('recipecost');
		$recipequa = $this->input->post('recipequa');
		$recipeprocedure = $this->input->post('recipeprocedure');
		
		$flag = $this->recipe->submit($recipeid, $recipename, $recipequa, $recipecat, $recipeing, $recipeimg, $recipecost, $recipeprocedure);
		
		 if($flag){
		echo 'Recipe Save!';
		redirect(base_url('Mainpage/insertRecipe/'));
					
		}
		else {
			echo 'Error!!!';
		} 
		
	}
	
	public function listRecipe(){
		$enter =  $this->session->userdata('email');
		if( empty($enter) ){
			 redirect (base_url('Mainpage/Login/'));
		}
		else{
			if($this->session->userdata('usercred') == 1){
				$data['recipes'] = $this->recipe->recipelist('recipes');	
				$data['title'] = "Recipe List";
				
				$this->load->view('include/header',$data);
				$this->load->view('mainpage/adminpr/recipe_Admin',$data);
				// $this->load->view('mainpage/Admin/list_recipe',$data);		
			}
			else{
				redirect(base_url('Mainpage/User'));
			}
		}
	}
		
	
	public function viewUsers(){
		$enter =  $this->session->userdata('email');
		if( empty($enter) ){
			 redirect (base_url('Mainpage/Login/'));
		}	
		else{
			if($this->session->userdata('usercred') == 1){
				$data['users'] = $this->user->viewusers('users');
				$this->load->view('mainpage/admin/view_users',$data);	
			}
			else{
				redirect(base_url('Mainpage/User'));
			}
		}
	}
		
	public function delRecipe($name){	
		$this->recipe->del(str_replace('%20', ' ', $name));	
		redirect(base_url('Mainpage/listRecipe'));	
	}
	
	public function delUser($name){	
		$this->user->del(str_replace('%20', ' ', $name));	
		redirect(base_url('Mainpage/viewUsers'));	
	}
	
	public function addtoCart($id,$name,$qty,$price){
			$data = array(
			'id' => $id,
			'qty' => $qty, 
			'price' => $price,
			'name' => $name
			);
			$this->cart->insert($data);
			echo $this->displayCart();		
	}
	
	public function viewCart(){
			//$data['cart'] = $this->cart->contents();
			
			$this->load->view('mainpage/user/cart');
	}
	
	public function displayCart(){
		$str = '
		<thead>
		  <tr><th>Recipe ID</th><th>Recipe</th><th>Price</th><th>Quantity</th><th>Total</th><th>Action</th></tr>
		</thead>
		<tbody>';
		foreach($this->cart->contents() as $items){
			$str .= '
		  <tr>        
		    <td>'.str_replace('_', ' ', str_replace('_00', ')', str_replace('00_', '(', $items['id']))).'</td>
		    <td>'.str_replace('_', ' ', str_replace('_00', ')', str_replace('00_', '(', $items['name']))).'</td>
		    <td>'.$items['price'].'</td>
		    <td>'.$items['qty'].'</td>
		    <td>'.$items['price'] * $items['qty'].'</td>
		    <td>
		      <a href = "'.base_url('Mainpage/removeFromCart/'.$items['rowid']).'">Remove from cart</a>
		    </td>
		  </tr>';
		}
		$str .= '<tr><td>Total</td><td>'.$this->cart->total().'</td></tr>';
		return $str.'</tbody>';
	}
	
	public function removeFromCart($rowid){		
		$this->cart->remove($rowid);
		redirect(base_url('Mainpage/Client'));
	}
	
	public function emptyCart(){
		$this->cart->destroy();
		redirect(base_url('Mainpage/Client'));
	}
	
	
	public function Setting(){
		$data['title'] = "Admin Settings";
		$enter =  $this->session->userdata('email');
		if( empty($enter) ){
			 redirect (base_url('Mainpage/Login/'));
		}	
		else{
			if($this->session->userdata('usercred') == 1){
				$this->load->view('include/header',$data);
				$this->load->view('mainpage/adminpr/setting');
			}
			else{
				redirect(base_url('Mainpage/User'));
			}
		}
	}
	
	
}

?>
	
