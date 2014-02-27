<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Products extends CI_Controller {
	public function __construct(){
		parent::__construct();
			$this->load->model('products_model');
	}
	
	public function index()
	{
		if($this->ion_auth->logged_in()){
			$data['session_status'] = 'AUTHENTICATED';
		}else{
			$data['session_status'] = 'GUEST_SESSION';
		}
	}
	
	public function show($product_id){
		if($this->ion_auth->logged_in()){
			$data['session_status'] = 'AUTHENTICATED';
		}else{
			$data['session_status'] = 'GUEST_SESSION';
		}
		$data['product_list'] = $this->products_model->get_product_listings($product_id);
		$this->load->view('product_list',$data);
		//echo 'Display listing for product id '.$product_id;
		
		//get all listings from database through model
		//load a listing view and pass results returned from db
	}
	
	public function show_detail($product_id)
	{
		if($this->ion_auth->logged_in()){
			$data['session_status'] = 'AUTHENTICATED';
		}else{
			$data['session_status'] = 'GUEST_SESSION';
		}
		$data['product_detail'] = $this->products_model->get_product_detail($product_id);
		$this->load->view('product_detail',$data);
	}
}

/* End of file welcome.php */
/* Location: ./application/controllers/welcome.php */