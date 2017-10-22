<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Transaction extends CI_Controller {
	
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
	
	public function Cart()
	{	
		$data['title'] = 'Cart';
		$enter =  $this->session->userdata('email');
			if( empty($enter) )
			{
				redirect (base_url('Mainpage/Login'));
			}
			else
			{
				if($this->session->userdata('usercred') == 1)
				{
					$this->load->view('page/cart');
					$this->load->view('base/uheader');
				}
				else
				{
					redirect (base_url('User/Client'));
				}
			}
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
		      <a href = "'.base_url('Transaction/removeFromCart/'.$items['rowid']).'">Remove from cart</a>
		    </td>
		  </tr>';
		}
		$str .= '<tr><td>Total</td><td>'.$this->cart->total().'</td></tr>';
		return $str.'</tbody>';
	}
	
	public function removeFromCart($rowid){		
		$this->cart->remove($rowid);
		redirect(base_url('User/Client'));
	}
	
	public function emptyCart(){
		$this->cart->destroy();
		redirect(base_url('User/Client'));
	}
	
	public function ListOrders()
	{
		$data['title'] = 'List of Orders';
		$enter =  $this->session->userdata('email');
			if( empty($enter) )
			{
				redirect (base_url('Mainpage/Login'));
			}
			else
			{
				if($this->session->userdata('usercred') == 1)
				{
					$data['orders'] = $this->order->orderslist('orders');
					$this->load->view('base/aheader',$data);
					$this->load->view('page/listorders',$data);
					$data['title'] = "List of Orders";
				}
				else
				{
					redirect (base_url('User/Client'));
				}
			}
	}

	public function cancelOrder($order_id)
	{
		$this->order->cancelorder($order_id);
		redirect(base_url('Transaction/ListOrders/'));
	}
	
}

?>