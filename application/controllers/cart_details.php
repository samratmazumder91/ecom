<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class cart_details extends CI_Controller {
	public function __construct(){
		parent::__construct();
			$this->load->model('cart_model');
			$this->load->model('products_model');
			$this->load->model('spare_parts_model');
	}
	
	public function index()
	{
		if($this->ion_auth->logged_in()){
			$data['session_status'] = 'AUTHENTICATED';
		}else{
			$data['session_status'] = 'GUEST_SESSION';
		}
		$data['products'] = $this->products_model->get_products();
		$data['spare_parts'] = $this->spare_parts_model->get_spare_parts();
		$this->load->view('cart_details',$data);
	}
	
	public function remove($rid)
	{
		if($this->ion_auth->logged_in()){
			$data['session_status'] = 'AUTHENTICATED';
		}else{
			$data['session_status'] = 'GUEST_SESSION';
		}
		/*$q=0;
		foreach($this->cart->contents() as $items)
			if($items['rowid']=$rid)
				$q=$items['qty'];
		$q=$q-1;*/
		$cart_data=array(
					'rowid'	=>	$rid,
					'qty'	=>	0
					);
		$this->cart->update($cart_data);
		if($this->cart->total_items()==0)
		{
			redirect('/home','refresh');
		}
		$this->load->view('cart_details',$data);
	}
	
	/*public function add($rid)
	{
		if($this->ion_auth->logged_in()){
			$data['session_status'] = 'AUTHENTICATED';
		}else{
			$data['session_status'] = 'GUEST_SESSION';
		}
		$q=0;
		foreach($this->cart->contents() as $items){
			if($items['rowid']=$rid)
				{
					$q=$items['qty'];
					$id=$items['id'];
					$tn=$items['options'];
				}
		}
		$data['temp']=$this->cart_model->get_stock($id,$tn);
		if($q<$data['temp'][0]['stock'])
		{
			$q=$q+1;
			$cart_data=array(
						'rowid'	=>	$rid,
						'qty'	=>	$q
						);
			$this->cart->update($cart_data);
			$this->load->view('cart_details',$data);		}
		else
		{
			$this->session->set_flashdata('error','quantity not available');
			redirect('/cart_details');
		}//$this->load->view('cart_details',$data);
	}*/
	
	public function update_stock()
	{
		if($this->ion_auth->logged_in()){
			$data['session_status'] = 'AUTHENTICATED';
		}else{
			$data['session_status'] = 'GUEST_SESSION';
		}
		$uid=0;
		$ns=0;
		$tn;
		foreach($this->cart->contents() as $items)
		{
			$uid=$items['id'];$ns=$items['qty'];$tn=$items['options'];
			$this->cart_model->update_stocks($uid,$ns,$tn);
		}
		$this->cart->destroy();
		redirect('home'/'refresh');
	}
}
/* End of file welcome.php */
/* Location: ./application/controllers/welcome.php */