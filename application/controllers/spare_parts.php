<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class spare_parts extends CI_Controller {
	public function __construct(){
		parent::__construct();
			$this->load->model('spare_parts_model');
	}
	
	public function index()
	{
		if($this->ion_auth->logged_in()){
			$data['session_status'] = 'AUTHENTICATED';
		}else{
			$data['session_status'] = 'GUEST_SESSION';
		}
		//$data['spare_parts'] = $this->spare_parts_model->get_spare_parts();
		$this->load->view('spare_parts_list',$data);
	}
	
	public function show($spare_parts_id){
		if($this->ion_auth->logged_in()){
			$data['session_status'] = 'AUTHENTICATED';
		}else{
			$data['session_status'] = 'GUEST_SESSION';
		}
		$data['spare_parts_list'] = $this->spare_parts_model->get_spare_parts_listings($spare_parts_id);
		//$data['spare_parts'] = $this->spare_parts_model->get_spare_parts();
		$this->load->view('spare_parts_list',$data);
		//echo 'Display listing for spare_parts id '.$spare_parts_id;
		
		//get all listings from database through model
		//load a listing view and pass results returned from db
	}
	
	public function show_details($spare_parts_id)
	{
		if($this->ion_auth->logged_in()){
			$data['session_status'] = 'AUTHENTICATED';
		}else{
			$data['session_status'] = 'GUEST_SESSION';
		}
		$data['spare_part_detail'] = $this->spare_parts_model->get_spare_parts_detail($spare_parts_id);
		$this->load->view('spare_parts_detail',$data);
	}
	
	public function add_to_cart($spare_parts_id)
	{
		if($this->ion_auth->logged_in()){
			$data['session_status'] = 'AUTHENTICATED';
		}else{
			$data['session_status'] = 'GUEST_SESSION';
		}
		$this->load->helper(array('form', 'url'));

		$this->load->library('form_validation');
		$data['cart_detail'] = $this->spare_parts_model->get_cart_detail($spare_parts_id);
		$qty=$data['cart_detail'][0]['stock'];
		$this->form_validation->set_rules('qty', 'Quantity', "required|numeric|is_natural_no_zero|less_than[".($qty+1)."]");
		if ($this->form_validation->run() == FALSE)
		{
			if($this->ion_auth->logged_in()){
			$data['session_status'] = 'AUTHENTICATED';
			}else{
			$data['session_status'] = 'GUEST_SESSION';
			}
			$this->session->set_flashdata('error','quantity not available');
			redirect("spare_parts/show_details/$spare_parts_id");
		}
		else
		{
			$q=$this->input->post('qty');
			$cart_data = array(
               'id'      => $data['cart_detail'][0]['id'],
               'qty'     => $q,
               'price'   => $data['cart_detail'][0]['price'],
               'name'    => $data['cart_detail'][0]['spare_part_name'],
			   'options' =>'spare_part_list'
            );
			$this->cart->insert($cart_data);
			var_dump($cart_data);
			redirect("spare_parts/show_details/$spare_parts_id");
		}
	}
}

/* End of file welcome.php */
/* Location: ./application/controllers/welcome.php */