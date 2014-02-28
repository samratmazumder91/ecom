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
	
	public function add_to_cart($product_id)
	{
		if($this->ion_auth->logged_in()){
			$data['session_status'] = 'AUTHENTICATED';
		}else{
			$data['session_status'] = 'GUEST_SESSION';
		}
		$this->load->helper(array('form', 'url'));

		$this->load->library('form_validation');
		$data['cart_detail'] = $this->products_model->get_cart_detail($product_id);
		$qty=$data['cart_detail'][0]['stock'];
		echo $qty;
		$this->form_validation->set_rules('qty', 'Quantity', 'required|is_natural_no_zero|less_than[$qty+1]');
		if ($this->form_validation->run() == FALSE)
		{
			if($this->ion_auth->logged_in()){
			$data['session_status'] = 'AUTHENTICATED';
			}else{
			$data['session_status'] = 'GUEST_SESSION';
			}
			$this->session->set_flashdata('error','quantity not available');
			redirect("products/show_detail/$product_id");
		}
		else
		{
			$q=$this->input->post('qty');
			$data = array(
               'id'      => $cart_detail['id'],
               'qty'     => $q,
               'price'   => $cart_detail['price'],
               'name'    => $cart_detail['product_name']
            );
			$this->cart->insert($data);
			redirect("products/show_detail/$product_id");
		}
	}
}

/* End of file welcome.php */
/* Location: ./application/controllers/welcome.php */